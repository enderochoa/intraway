<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4339e8c10d6a29af8d57babffd8dc4aaef12880116e72f1635e81b4365272dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdfc892e57e3660829bafb574db7fde5edec730195cbb5480007463fe1d360fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfc892e57e3660829bafb574db7fde5edec730195cbb5480007463fe1d360fe->enter($__internal_bdfc892e57e3660829bafb574db7fde5edec730195cbb5480007463fe1d360fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ddecc80221bc953cb4c8bff60a2b4a18c6e3d8cfe0f3c8e2c5c23f4ebcf61d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddecc80221bc953cb4c8bff60a2b4a18c6e3d8cfe0f3c8e2c5c23f4ebcf61d3c->enter($__internal_ddecc80221bc953cb4c8bff60a2b4a18c6e3d8cfe0f3c8e2c5c23f4ebcf61d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfc892e57e3660829bafb574db7fde5edec730195cbb5480007463fe1d360fe->leave($__internal_bdfc892e57e3660829bafb574db7fde5edec730195cbb5480007463fe1d360fe_prof);

        
        $__internal_ddecc80221bc953cb4c8bff60a2b4a18c6e3d8cfe0f3c8e2c5c23f4ebcf61d3c->leave($__internal_ddecc80221bc953cb4c8bff60a2b4a18c6e3d8cfe0f3c8e2c5c23f4ebcf61d3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b018e6050d227573875041d7dcdea1bf9f54c9e7f5f195b011ec6a2cc387409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b018e6050d227573875041d7dcdea1bf9f54c9e7f5f195b011ec6a2cc387409->enter($__internal_4b018e6050d227573875041d7dcdea1bf9f54c9e7f5f195b011ec6a2cc387409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7226433a949c1126f664605364b4b24a263c8e1461f2bc0b52f449b46729ab37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7226433a949c1126f664605364b4b24a263c8e1461f2bc0b52f449b46729ab37->enter($__internal_7226433a949c1126f664605364b4b24a263c8e1461f2bc0b52f449b46729ab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7226433a949c1126f664605364b4b24a263c8e1461f2bc0b52f449b46729ab37->leave($__internal_7226433a949c1126f664605364b4b24a263c8e1461f2bc0b52f449b46729ab37_prof);

        
        $__internal_4b018e6050d227573875041d7dcdea1bf9f54c9e7f5f195b011ec6a2cc387409->leave($__internal_4b018e6050d227573875041d7dcdea1bf9f54c9e7f5f195b011ec6a2cc387409_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2b4c84d267a985dd28c6e3285c279c20658da1d0a859e0c21d08dad196c2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2b4c84d267a985dd28c6e3285c279c20658da1d0a859e0c21d08dad196c2a4->enter($__internal_1b2b4c84d267a985dd28c6e3285c279c20658da1d0a859e0c21d08dad196c2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b426a7a038aa39211b6d3c62d0b51554f4ac15080af4f1d5262e8af20969a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b426a7a038aa39211b6d3c62d0b51554f4ac15080af4f1d5262e8af20969a14->enter($__internal_9b426a7a038aa39211b6d3c62d0b51554f4ac15080af4f1d5262e8af20969a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9b426a7a038aa39211b6d3c62d0b51554f4ac15080af4f1d5262e8af20969a14->leave($__internal_9b426a7a038aa39211b6d3c62d0b51554f4ac15080af4f1d5262e8af20969a14_prof);

        
        $__internal_1b2b4c84d267a985dd28c6e3285c279c20658da1d0a859e0c21d08dad196c2a4->leave($__internal_1b2b4c84d267a985dd28c6e3285c279c20658da1d0a859e0c21d08dad196c2a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
