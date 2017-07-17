<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f033521965158512d25fc847f63ce0e64e9c484c481a77e8ba22c9820354083e extends Twig_Template
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
        $__internal_580dc27321034ee22ea921d2d5cd7d645510aadc300a6175573cfafd19b14b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580dc27321034ee22ea921d2d5cd7d645510aadc300a6175573cfafd19b14b9c->enter($__internal_580dc27321034ee22ea921d2d5cd7d645510aadc300a6175573cfafd19b14b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_62b715c6a6a201e78324a500f578af1b2226d74c97f78325b49cd6b8e03a1fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b715c6a6a201e78324a500f578af1b2226d74c97f78325b49cd6b8e03a1fdb->enter($__internal_62b715c6a6a201e78324a500f578af1b2226d74c97f78325b49cd6b8e03a1fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_580dc27321034ee22ea921d2d5cd7d645510aadc300a6175573cfafd19b14b9c->leave($__internal_580dc27321034ee22ea921d2d5cd7d645510aadc300a6175573cfafd19b14b9c_prof);

        
        $__internal_62b715c6a6a201e78324a500f578af1b2226d74c97f78325b49cd6b8e03a1fdb->leave($__internal_62b715c6a6a201e78324a500f578af1b2226d74c97f78325b49cd6b8e03a1fdb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
