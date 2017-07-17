<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5186a8fdd4fe0625839ff0bd5b6da4a9eb4acdabdfecc1ee37299f64e4f2671f extends Twig_Template
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
        $__internal_092388a3c1233ff5ec7fc58bd1205150d2cab4ca5913c437b15af38d54515dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092388a3c1233ff5ec7fc58bd1205150d2cab4ca5913c437b15af38d54515dab->enter($__internal_092388a3c1233ff5ec7fc58bd1205150d2cab4ca5913c437b15af38d54515dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_af55baba6e6064cc17f1c001ef8bd5e1d1fa55e98a9c96af52821f520a0f9d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af55baba6e6064cc17f1c001ef8bd5e1d1fa55e98a9c96af52821f520a0f9d14->enter($__internal_af55baba6e6064cc17f1c001ef8bd5e1d1fa55e98a9c96af52821f520a0f9d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_092388a3c1233ff5ec7fc58bd1205150d2cab4ca5913c437b15af38d54515dab->leave($__internal_092388a3c1233ff5ec7fc58bd1205150d2cab4ca5913c437b15af38d54515dab_prof);

        
        $__internal_af55baba6e6064cc17f1c001ef8bd5e1d1fa55e98a9c96af52821f520a0f9d14->leave($__internal_af55baba6e6064cc17f1c001ef8bd5e1d1fa55e98a9c96af52821f520a0f9d14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
