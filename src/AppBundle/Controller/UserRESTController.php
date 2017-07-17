<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View as FOSView;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * User controller.
 * @RouteResource("User")
 */
class UserRESTController extends Controller
{
    /**
     * Get a User entity
     *
     * @View(serializerEnableMaxDepthChecks=true)
     *
     * @return Response
     *
     */
    public function getAction(Request $request, User $user)
    {
        return $this->formatImageUrl($user, $request);
    }
    /**
     * Get all User entities.
     *
     * @View(serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     * @param ParamFetcherInterface $paramFetcher
     *
     * @return Response
     * @QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing notes.")
     * @QueryParam(name="limit", requirements="\d+", default="20", description="How many notes to return.")
     * @QueryParam(name="order_by", nullable=true, map=true, description="Order by fields. Must be an array ie. &order_by[name]=ASC&order_by[description]=DESC")
     * @QueryParam(name="filters", nullable=true, map=true, description="Filter by fields. Must be an array ie. &filters[id]=3")
     */
    public function cgetAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
        try {
            $offset = $paramFetcher->get('offset');
            $limit = $paramFetcher->get('limit');
            $order_by = $paramFetcher->get('order_by');
            $filters = !is_null($paramFetcher->get('filters')) ? $paramFetcher->get('filters') : array();

            $em = $this->getDoctrine()->getManager();
            $users = $em->getRepository('AppBundle:User')->findBy($filters, $order_by, $limit, $offset);
            if ($users) {
                foreach ($users as $user) {
                    $user = $this->formatImageUrl($user, $request);
                }

                return $users;
            }
            
            return FOSView::create('Not Found', 204);
        } catch (\Exception $e) {
            return FOSView::create($e->getMessage(), 500);
        }
    }
    /**
     * Create a User entity.
     *
     * @View(statusCode=201, serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     *
     * @return Response
     *
     */
    public function postAction(Request $request)
    {
        $user = new User();
        
        $form = $this->container->get('form.factory')->createNamed(null, 'AppBundle\Form\UserType', $user, array("method" => $request->getMethod()));
        $this->removeExtraFields($request, $form);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $logger = $this->container->get('monolog.logger.eventlog');
            $logger->info('create user {name} identified by {id}', array('id'=>$user->getId(),'name'=>$user->getName()));

            if (!empty($user->getImageBase64())) {
                $imageSaved =$this->saveImage($user);
                if ($imageSaved) {
                    $user->setImage($imageSaved);
                    $em->flush();
                }
                $user->setImageBase64(null);
            }

            return $this->formatImageUrl($user, $request);
        }

        return FOSView::create(array('errors' => $form->getErrors()), 500);
    }
    /**
     * Update a User entity.
     *
     *
     * @param Request $request
     * @param $user
     *
     * @return Response
     */
    public function putAction(Request $request, User $user)
    {
        if (!$user) {
            return FOSView::create(array('errors' => "User not exists"), 204);
        }

        try {
            $em = $this->getDoctrine()->getManager();
            $request->setMethod('PATCH'); //Treat all PUTs as PATCH
            $form = $this->container->get('form.factory')->createNamed(null, 'AppBundle\Form\UserType', $user, array("method" => $request->getMethod()));
            $this->removeExtraFields($request, $form);
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();

                $logger = $this->container->get('monolog.logger.eventlog');
                $logger->info('updated user {name} identified by {id}', array('id'=>$user->getId(),'name'=>$user->getName()));

                if (!empty($user->getImageBase64())) {
                    $imageSaved =$this->saveImage($user);
                    if ($imageSaved) {
                        $user->setImage($imageSaved);
                        $em->flush();
                    }
                }

                return $this->formatImageUrl($user, $request);
            }

            return FOSView::create(array('errors' => $form->getErrors()), 500);
        } catch (\Exception $e) {
            return FOSView::create($e->getMessage(), 500);
        }
    }
    /**
     * Partial Update to a User entity.
     *
     * @View(serializerEnableMaxDepthChecks=true)
     *
     * @param Request $request
     * @param $user
     *
     * @return Response
     */
    public function patchAction(Request $request, User $user)
    {
        return $this->putAction($request, $user);
    }
    /**
     * Delete a User entity.
     *
     * @View(statusCode=204)
     *
     * @param Request $request
     * @param $user
     *
     * @return Response
     */
    public function deleteAction(Request $request, User $user)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();

            $logger = $this->container->get('monolog.logger.eventlog');
            $logger->info('deleted user {name} identified by {id}', array('id'=>$user->getId(),'name'=>$user->getName()));

            $fileDir = $this->get('kernel')->getRootDir().'/../web/images/'.str_replace($request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath().'/images/', '', $user->getImage());
            if (file_exists($fileDir)) {
                unlink($fileDir);
            }

            return null;
        } catch (\Exception $e) {
            return FOSView::create($e->getMessage(), 500);
        }
    }

    /**
     * delete any fields that don't appear in the form
     *
     * @param Request $request
     * @param Form $form
     */
    private function removeExtraFields(Request $request, Form $form)
    {
        $data     = $request->request->all();
        $children = $form->all();
        $data     = array_intersect_key($data, $children);
        $request->request->replace($data);
    }

    /**
    * save image from a base64 string
    * @param User $user
    */
    private function saveImage($user)
    {
        list($type, $imageBase64) = explode(';', $user->getImageBase64());

        switch ($type) {
            case 'data:image/png':$type='png';
                break;
            case 'data:image/jpg':$type='jpg';
                break;
            case 'data:image/jpeg':$type='jpeg';
                break;
            case 'data:image/gif':$type='gif';
                break;

            default:
                $type=null;
                break;
        }

        if ($type) {
            list(, $imageBase64)      = explode(',', $imageBase64);
            $imageBase64 = base64_decode($imageBase64);

            $fileDir = $this->get('kernel')->getRootDir().'/../web/images/'.$user->getId().'.'.$type;
            if (file_exists($fileDir)) {
                unlink($fileDir);
            }

            file_put_contents($fileDir, $imageBase64);

            return $user->getId().'.'.$type;
        }

        return null;
    }

    /**
    * convert image name to url
    *
    * @param User $user
    * @param Request $request
    */
    private function formatImageUrl(User $user, Request $request)
    {
        $baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath().'/images/';
        if (!empty($user->getImage())) {
            $user->setImage($baseurl.$user->getImage());
        } else {
            $user->setImage('');
        }

        return $user;
    }
}
