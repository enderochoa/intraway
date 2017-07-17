<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5a7e58862635d78ca66c5cd5c1ad07291e77eca6ffec057a33ce5d1e4a159fac extends Twig_Template
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
        $__internal_be9d8968cde66cedc64afc24c29c2da461aeaab66e78511a6956e16a03081662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9d8968cde66cedc64afc24c29c2da461aeaab66e78511a6956e16a03081662->enter($__internal_be9d8968cde66cedc64afc24c29c2da461aeaab66e78511a6956e16a03081662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5699d422a189c61f84e31b7f0b1db56d80ff5e8076c76dd8a206473326c3e43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5699d422a189c61f84e31b7f0b1db56d80ff5e8076c76dd8a206473326c3e43a->enter($__internal_5699d422a189c61f84e31b7f0b1db56d80ff5e8076c76dd8a206473326c3e43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be9d8968cde66cedc64afc24c29c2da461aeaab66e78511a6956e16a03081662->leave($__internal_be9d8968cde66cedc64afc24c29c2da461aeaab66e78511a6956e16a03081662_prof);

        
        $__internal_5699d422a189c61f84e31b7f0b1db56d80ff5e8076c76dd8a206473326c3e43a->leave($__internal_5699d422a189c61f84e31b7f0b1db56d80ff5e8076c76dd8a206473326c3e43a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
