<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fd79434d1e4637e4ad632a5c8be95bff9d6b690c5b8e578344bf1e88135b221c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a15f33f0860c224cd0e4ddb2548fb964947843358d041f2ea7de58c8c7c10d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15f33f0860c224cd0e4ddb2548fb964947843358d041f2ea7de58c8c7c10d4b->enter($__internal_a15f33f0860c224cd0e4ddb2548fb964947843358d041f2ea7de58c8c7c10d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_15ef31f3be018ead2a89fa080c6da34f0d86b11556ae508a8c286c86a8717555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ef31f3be018ead2a89fa080c6da34f0d86b11556ae508a8c286c86a8717555->enter($__internal_15ef31f3be018ead2a89fa080c6da34f0d86b11556ae508a8c286c86a8717555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15f33f0860c224cd0e4ddb2548fb964947843358d041f2ea7de58c8c7c10d4b->leave($__internal_a15f33f0860c224cd0e4ddb2548fb964947843358d041f2ea7de58c8c7c10d4b_prof);

        
        $__internal_15ef31f3be018ead2a89fa080c6da34f0d86b11556ae508a8c286c86a8717555->leave($__internal_15ef31f3be018ead2a89fa080c6da34f0d86b11556ae508a8c286c86a8717555_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e8e15b7d4e3616319327fc51f51ed2c9f075cd4b739c36e2a78202343b97c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8e15b7d4e3616319327fc51f51ed2c9f075cd4b739c36e2a78202343b97c4b->enter($__internal_4e8e15b7d4e3616319327fc51f51ed2c9f075cd4b739c36e2a78202343b97c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a1f2862f539d866d609b7e4bd8da78daa8ebd90addad6bd32dc8a6484b8823ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f2862f539d866d609b7e4bd8da78daa8ebd90addad6bd32dc8a6484b8823ba->enter($__internal_a1f2862f539d866d609b7e4bd8da78daa8ebd90addad6bd32dc8a6484b8823ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1f2862f539d866d609b7e4bd8da78daa8ebd90addad6bd32dc8a6484b8823ba->leave($__internal_a1f2862f539d866d609b7e4bd8da78daa8ebd90addad6bd32dc8a6484b8823ba_prof);

        
        $__internal_4e8e15b7d4e3616319327fc51f51ed2c9f075cd4b739c36e2a78202343b97c4b->leave($__internal_4e8e15b7d4e3616319327fc51f51ed2c9f075cd4b739c36e2a78202343b97c4b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e815d0b5c5235e4a67d9c83070525a0a56b5f02bf384a0e789961701f0288d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e815d0b5c5235e4a67d9c83070525a0a56b5f02bf384a0e789961701f0288d14->enter($__internal_e815d0b5c5235e4a67d9c83070525a0a56b5f02bf384a0e789961701f0288d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4490e6c0a628373bb3076bc9a22f6d06c5d574f7d65073e2b433146987aba76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4490e6c0a628373bb3076bc9a22f6d06c5d574f7d65073e2b433146987aba76->enter($__internal_d4490e6c0a628373bb3076bc9a22f6d06c5d574f7d65073e2b433146987aba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4490e6c0a628373bb3076bc9a22f6d06c5d574f7d65073e2b433146987aba76->leave($__internal_d4490e6c0a628373bb3076bc9a22f6d06c5d574f7d65073e2b433146987aba76_prof);

        
        $__internal_e815d0b5c5235e4a67d9c83070525a0a56b5f02bf384a0e789961701f0288d14->leave($__internal_e815d0b5c5235e4a67d9c83070525a0a56b5f02bf384a0e789961701f0288d14_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_701955637bae28ce991a00760c37bdf116715ae16318959ac03c77d3a38d07b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701955637bae28ce991a00760c37bdf116715ae16318959ac03c77d3a38d07b7->enter($__internal_701955637bae28ce991a00760c37bdf116715ae16318959ac03c77d3a38d07b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bbe6fdb3deeb8328bd7252b5b70bd38714aa78ec3d41ad860e2e001c8de5ed27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe6fdb3deeb8328bd7252b5b70bd38714aa78ec3d41ad860e2e001c8de5ed27->enter($__internal_bbe6fdb3deeb8328bd7252b5b70bd38714aa78ec3d41ad860e2e001c8de5ed27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bbe6fdb3deeb8328bd7252b5b70bd38714aa78ec3d41ad860e2e001c8de5ed27->leave($__internal_bbe6fdb3deeb8328bd7252b5b70bd38714aa78ec3d41ad860e2e001c8de5ed27_prof);

        
        $__internal_701955637bae28ce991a00760c37bdf116715ae16318959ac03c77d3a38d07b7->leave($__internal_701955637bae28ce991a00760c37bdf116715ae16318959ac03c77d3a38d07b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
