<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bd64df188db1783d496976a7c77516ee41fd2296eaeda85ecc660973915a0af5 extends Twig_Template
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
        $__internal_9acaeda1cd9632d2ebe218658e6d1c7eee35f2e4f3791977290f4f6e86479046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acaeda1cd9632d2ebe218658e6d1c7eee35f2e4f3791977290f4f6e86479046->enter($__internal_9acaeda1cd9632d2ebe218658e6d1c7eee35f2e4f3791977290f4f6e86479046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fc73b877ff95cb390715312baa4e10581658c1db24833871ac411c981c5e33ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc73b877ff95cb390715312baa4e10581658c1db24833871ac411c981c5e33ef->enter($__internal_fc73b877ff95cb390715312baa4e10581658c1db24833871ac411c981c5e33ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9acaeda1cd9632d2ebe218658e6d1c7eee35f2e4f3791977290f4f6e86479046->leave($__internal_9acaeda1cd9632d2ebe218658e6d1c7eee35f2e4f3791977290f4f6e86479046_prof);

        
        $__internal_fc73b877ff95cb390715312baa4e10581658c1db24833871ac411c981c5e33ef->leave($__internal_fc73b877ff95cb390715312baa4e10581658c1db24833871ac411c981c5e33ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
