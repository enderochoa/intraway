<?php
namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testCompleteScenario()
    {
        $client = static::createClient();

        //create new user
        $data = ['name'=>'mary','email'=>'mary@gmail.com','imageBase64'=>'data:image/png;base64,AAAFBfj42Pj4'];
        $request = $client->request('POST', '/api/users', [], [], array('CONTENT_TYPE' => 'application/json'), json_encode($data));
        $this->assertEquals(201, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /api/users/");
        
        $data = json_decode($client->getResponse()->getContent());
        //if has been created the user
        if (count($data)>0) {
            //get all
            $request = $client->request('GET', '/api/users');
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /api/user/");

            
            //update user, change the name
            $data->name = 'mary something';
            $request = $client->request('PUT', '/api/users/'.$data->id, [], [], array('CONTENT_TYPE' => 'application/json'), json_encode($data));
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for PUT /api/users/".$data->id);

            //get user by id
            $request = $client->request('GET', '/api/users/'.$data->id);
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /api/users/".$data->id);

            //prepare query to find by several params
            $query = array(
                'filters[id]'   =>$data->id,
                'filters[name]' =>$data->name,
                'filters[email]'=>$data->email,
                'order_by[name]'=>'ASC',
                'limit'         =>1,
                'offset'        =>2
            );
            //get by query
            $request = $client->request('GET', '/api/users?'.implode('&', $query));
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /api/users?".implode('&', $query));

            //delete the created user
            $request = $client->request('DELETE', '/api/users/'.$data->id);
            $this->assertEquals(204, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for DELETE /api/users/".$data->id);

            //check if user has deleted
            $request = $client->request('GET', '/api/users/'.$data->id);
            $this->assertEquals(404, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /api/users/".$data->id);
        }
    }
}
