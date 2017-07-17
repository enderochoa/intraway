<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7d87260c1ac99b120f0ea4aa1b95f2d643f8dbec9ce2bb40209b827dc785e787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f223e94652aad106e4a9556ef047849b7d9088ba9912541c0606530697625c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f223e94652aad106e4a9556ef047849b7d9088ba9912541c0606530697625c84->enter($__internal_f223e94652aad106e4a9556ef047849b7d9088ba9912541c0606530697625c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1c247931399c9df58062855765465a4e9e4212ebe2256a9f89ebd5b9c91ffffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c247931399c9df58062855765465a4e9e4212ebe2256a9f89ebd5b9c91ffffa->enter($__internal_1c247931399c9df58062855765465a4e9e4212ebe2256a9f89ebd5b9c91ffffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f223e94652aad106e4a9556ef047849b7d9088ba9912541c0606530697625c84->leave($__internal_f223e94652aad106e4a9556ef047849b7d9088ba9912541c0606530697625c84_prof);

        
        $__internal_1c247931399c9df58062855765465a4e9e4212ebe2256a9f89ebd5b9c91ffffa->leave($__internal_1c247931399c9df58062855765465a4e9e4212ebe2256a9f89ebd5b9c91ffffa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4dfe49ff049ed400c078b672a5d77949fb0331b0735ec20f96d185ea47475ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dfe49ff049ed400c078b672a5d77949fb0331b0735ec20f96d185ea47475ff7->enter($__internal_4dfe49ff049ed400c078b672a5d77949fb0331b0735ec20f96d185ea47475ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5a297bdf312b8390b7d85f590337c298411c3a5e96e931a25ab1e50fd6c1397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a297bdf312b8390b7d85f590337c298411c3a5e96e931a25ab1e50fd6c1397->enter($__internal_d5a297bdf312b8390b7d85f590337c298411c3a5e96e931a25ab1e50fd6c1397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d5a297bdf312b8390b7d85f590337c298411c3a5e96e931a25ab1e50fd6c1397->leave($__internal_d5a297bdf312b8390b7d85f590337c298411c3a5e96e931a25ab1e50fd6c1397_prof);

        
        $__internal_4dfe49ff049ed400c078b672a5d77949fb0331b0735ec20f96d185ea47475ff7->leave($__internal_4dfe49ff049ed400c078b672a5d77949fb0331b0735ec20f96d185ea47475ff7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
