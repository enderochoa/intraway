<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_75fa4754010c4e12cf944aa06dd0659e3c77dfe1d0745b2146eadcf885238fbf extends Twig_Template
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
        $__internal_823aa75fa0460cbce061919096cf4ac449c3a5ab616a30d550f5dd8e0c21766b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823aa75fa0460cbce061919096cf4ac449c3a5ab616a30d550f5dd8e0c21766b->enter($__internal_823aa75fa0460cbce061919096cf4ac449c3a5ab616a30d550f5dd8e0c21766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_54134cb481776b3b2d6c52638bd992d19e5ae311f3caae9ffc3488cb40cfd672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54134cb481776b3b2d6c52638bd992d19e5ae311f3caae9ffc3488cb40cfd672->enter($__internal_54134cb481776b3b2d6c52638bd992d19e5ae311f3caae9ffc3488cb40cfd672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_823aa75fa0460cbce061919096cf4ac449c3a5ab616a30d550f5dd8e0c21766b->leave($__internal_823aa75fa0460cbce061919096cf4ac449c3a5ab616a30d550f5dd8e0c21766b_prof);

        
        $__internal_54134cb481776b3b2d6c52638bd992d19e5ae311f3caae9ffc3488cb40cfd672->leave($__internal_54134cb481776b3b2d6c52638bd992d19e5ae311f3caae9ffc3488cb40cfd672_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
