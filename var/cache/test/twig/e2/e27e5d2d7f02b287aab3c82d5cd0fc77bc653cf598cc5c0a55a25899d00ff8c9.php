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
        $__internal_2ed89523834e7543c8a91659890ecadaf5451675bdfc4fbdeb8f82f53d39e674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed89523834e7543c8a91659890ecadaf5451675bdfc4fbdeb8f82f53d39e674->enter($__internal_2ed89523834e7543c8a91659890ecadaf5451675bdfc4fbdeb8f82f53d39e674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3c05f969f4c7e93a1d10e21ff45c90988c47b03cb864b3492c6bef22854698d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c05f969f4c7e93a1d10e21ff45c90988c47b03cb864b3492c6bef22854698d3->enter($__internal_3c05f969f4c7e93a1d10e21ff45c90988c47b03cb864b3492c6bef22854698d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2ed89523834e7543c8a91659890ecadaf5451675bdfc4fbdeb8f82f53d39e674->leave($__internal_2ed89523834e7543c8a91659890ecadaf5451675bdfc4fbdeb8f82f53d39e674_prof);

        
        $__internal_3c05f969f4c7e93a1d10e21ff45c90988c47b03cb864b3492c6bef22854698d3->leave($__internal_3c05f969f4c7e93a1d10e21ff45c90988c47b03cb864b3492c6bef22854698d3_prof);

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
