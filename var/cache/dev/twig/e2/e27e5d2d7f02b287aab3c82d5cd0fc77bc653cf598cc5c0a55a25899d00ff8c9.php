<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2b9636a0ec8798f12c1769871ee0f533ad9229ad9796462cbe85b24963c17d0a extends Twig_Template
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
        $__internal_0b1fc1b965b05d4256535ff962cdf6d43d5b35630ab48b786b7c57a230913ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1fc1b965b05d4256535ff962cdf6d43d5b35630ab48b786b7c57a230913ee7->enter($__internal_0b1fc1b965b05d4256535ff962cdf6d43d5b35630ab48b786b7c57a230913ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_889e7e598c03f188f2163ee3cf62f84fd27e0f4eef24076af9d271cc5769628a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889e7e598c03f188f2163ee3cf62f84fd27e0f4eef24076af9d271cc5769628a->enter($__internal_889e7e598c03f188f2163ee3cf62f84fd27e0f4eef24076af9d271cc5769628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0b1fc1b965b05d4256535ff962cdf6d43d5b35630ab48b786b7c57a230913ee7->leave($__internal_0b1fc1b965b05d4256535ff962cdf6d43d5b35630ab48b786b7c57a230913ee7_prof);

        
        $__internal_889e7e598c03f188f2163ee3cf62f84fd27e0f4eef24076af9d271cc5769628a->leave($__internal_889e7e598c03f188f2163ee3cf62f84fd27e0f4eef24076af9d271cc5769628a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
