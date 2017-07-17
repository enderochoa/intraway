<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8e83a1c264fe075d715e96a1b4686ca68f3747942982bd72f8cc569e4102184a extends Twig_Template
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
        $__internal_de669035bd9eec0dfea05ef8f1dcb96cbd7cf8690422f167ca7c3e13d9c88141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de669035bd9eec0dfea05ef8f1dcb96cbd7cf8690422f167ca7c3e13d9c88141->enter($__internal_de669035bd9eec0dfea05ef8f1dcb96cbd7cf8690422f167ca7c3e13d9c88141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0ea8d9e22999fd0b0aca0d1f9544e08769e4125fdfffe768c9c3ba0f12387bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea8d9e22999fd0b0aca0d1f9544e08769e4125fdfffe768c9c3ba0f12387bf4->enter($__internal_0ea8d9e22999fd0b0aca0d1f9544e08769e4125fdfffe768c9c3ba0f12387bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_de669035bd9eec0dfea05ef8f1dcb96cbd7cf8690422f167ca7c3e13d9c88141->leave($__internal_de669035bd9eec0dfea05ef8f1dcb96cbd7cf8690422f167ca7c3e13d9c88141_prof);

        
        $__internal_0ea8d9e22999fd0b0aca0d1f9544e08769e4125fdfffe768c9c3ba0f12387bf4->leave($__internal_0ea8d9e22999fd0b0aca0d1f9544e08769e4125fdfffe768c9c3ba0f12387bf4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
