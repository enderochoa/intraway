<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3bde44283b733b4ad5c5885679805755d247d334aa77b55b52e6868de5cc8165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e56af0f35332befd304b3aab6144255a9aa0ec2a5166e3d891aa17a6a79d7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e56af0f35332befd304b3aab6144255a9aa0ec2a5166e3d891aa17a6a79d7c6->enter($__internal_8e56af0f35332befd304b3aab6144255a9aa0ec2a5166e3d891aa17a6a79d7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d7c7a4f8d5d46a49811fc9ac53f13b962800cf9dfb1ad2d04c878397003cd86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c7a4f8d5d46a49811fc9ac53f13b962800cf9dfb1ad2d04c878397003cd86d->enter($__internal_d7c7a4f8d5d46a49811fc9ac53f13b962800cf9dfb1ad2d04c878397003cd86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8e56af0f35332befd304b3aab6144255a9aa0ec2a5166e3d891aa17a6a79d7c6->leave($__internal_8e56af0f35332befd304b3aab6144255a9aa0ec2a5166e3d891aa17a6a79d7c6_prof);

        
        $__internal_d7c7a4f8d5d46a49811fc9ac53f13b962800cf9dfb1ad2d04c878397003cd86d->leave($__internal_d7c7a4f8d5d46a49811fc9ac53f13b962800cf9dfb1ad2d04c878397003cd86d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
