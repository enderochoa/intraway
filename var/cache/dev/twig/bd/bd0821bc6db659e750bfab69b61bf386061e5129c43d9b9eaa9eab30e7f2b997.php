<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_91a3bae6275dc6a669e7f8c619f4c9a2679acb3410c4aa7780f4f555852c9cd4 extends Twig_Template
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
        $__internal_a0ee919b5c473964f71c813656886ea2bc43373362dcc1648c1c8dda52d190b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ee919b5c473964f71c813656886ea2bc43373362dcc1648c1c8dda52d190b5->enter($__internal_a0ee919b5c473964f71c813656886ea2bc43373362dcc1648c1c8dda52d190b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1cd4e58fa068dbbdd6d756acca8d925d3debdec7730faac3cfebb82ee7f9f28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd4e58fa068dbbdd6d756acca8d925d3debdec7730faac3cfebb82ee7f9f28e->enter($__internal_1cd4e58fa068dbbdd6d756acca8d925d3debdec7730faac3cfebb82ee7f9f28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a0ee919b5c473964f71c813656886ea2bc43373362dcc1648c1c8dda52d190b5->leave($__internal_a0ee919b5c473964f71c813656886ea2bc43373362dcc1648c1c8dda52d190b5_prof);

        
        $__internal_1cd4e58fa068dbbdd6d756acca8d925d3debdec7730faac3cfebb82ee7f9f28e->leave($__internal_1cd4e58fa068dbbdd6d756acca8d925d3debdec7730faac3cfebb82ee7f9f28e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
