<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_d8e0a65c64db0b3f256f8b4a536bfbad6bcbd4cff8bddef9242f901458abb01e extends Twig_Template
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
        $__internal_6c81c94134d66cfa782e9bc1b89b6f203b26da772e47b4a97ef9e264fc5b3e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c81c94134d66cfa782e9bc1b89b6f203b26da772e47b4a97ef9e264fc5b3e2d->enter($__internal_6c81c94134d66cfa782e9bc1b89b6f203b26da772e47b4a97ef9e264fc5b3e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_034d079103695f55a6ef5cdf183495592e1fd2a02b1d20e7f3a60fee08273b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034d079103695f55a6ef5cdf183495592e1fd2a02b1d20e7f3a60fee08273b50->enter($__internal_034d079103695f55a6ef5cdf183495592e1fd2a02b1d20e7f3a60fee08273b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6c81c94134d66cfa782e9bc1b89b6f203b26da772e47b4a97ef9e264fc5b3e2d->leave($__internal_6c81c94134d66cfa782e9bc1b89b6f203b26da772e47b4a97ef9e264fc5b3e2d_prof);

        
        $__internal_034d079103695f55a6ef5cdf183495592e1fd2a02b1d20e7f3a60fee08273b50->leave($__internal_034d079103695f55a6ef5cdf183495592e1fd2a02b1d20e7f3a60fee08273b50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
