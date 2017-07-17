<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_48646ff4f1769de5028a6c25400463035d5a3aec87f2ff6f1f2b57395a6ffd4c extends Twig_Template
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
        $__internal_e78c7ebbb67e1bd0333c01563a077d681ceeba616df843f81c31a38377aecf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78c7ebbb67e1bd0333c01563a077d681ceeba616df843f81c31a38377aecf19->enter($__internal_e78c7ebbb67e1bd0333c01563a077d681ceeba616df843f81c31a38377aecf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8feaa3441e1770bc465c5b34cde77f3cbca7f515983ce8833075c96dd86024ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8feaa3441e1770bc465c5b34cde77f3cbca7f515983ce8833075c96dd86024ce->enter($__internal_8feaa3441e1770bc465c5b34cde77f3cbca7f515983ce8833075c96dd86024ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e78c7ebbb67e1bd0333c01563a077d681ceeba616df843f81c31a38377aecf19->leave($__internal_e78c7ebbb67e1bd0333c01563a077d681ceeba616df843f81c31a38377aecf19_prof);

        
        $__internal_8feaa3441e1770bc465c5b34cde77f3cbca7f515983ce8833075c96dd86024ce->leave($__internal_8feaa3441e1770bc465c5b34cde77f3cbca7f515983ce8833075c96dd86024ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
