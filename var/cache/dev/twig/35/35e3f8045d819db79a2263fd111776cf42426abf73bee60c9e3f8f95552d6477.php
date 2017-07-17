<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_e5d439793a9df66c7b1de336396a243bcf9daa684a4aabaa052312fc1f817015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_957aee32599490885621e37dc48494cee7806110bb6e63e9bcf86ee325d2f69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957aee32599490885621e37dc48494cee7806110bb6e63e9bcf86ee325d2f69e->enter($__internal_957aee32599490885621e37dc48494cee7806110bb6e63e9bcf86ee325d2f69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_30e26c1f08b4ef326139bc8c3eecbd4e51051660a52ae0bbbf84c57c05a9ffa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e26c1f08b4ef326139bc8c3eecbd4e51051660a52ae0bbbf84c57c05a9ffa3->enter($__internal_30e26c1f08b4ef326139bc8c3eecbd4e51051660a52ae0bbbf84c57c05a9ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957aee32599490885621e37dc48494cee7806110bb6e63e9bcf86ee325d2f69e->leave($__internal_957aee32599490885621e37dc48494cee7806110bb6e63e9bcf86ee325d2f69e_prof);

        
        $__internal_30e26c1f08b4ef326139bc8c3eecbd4e51051660a52ae0bbbf84c57c05a9ffa3->leave($__internal_30e26c1f08b4ef326139bc8c3eecbd4e51051660a52ae0bbbf84c57c05a9ffa3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1d147c00917d10d00f1ece83082a996ec9e683d2c24c1b4e7b37bf387145140e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d147c00917d10d00f1ece83082a996ec9e683d2c24c1b4e7b37bf387145140e->enter($__internal_1d147c00917d10d00f1ece83082a996ec9e683d2c24c1b4e7b37bf387145140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fe7cfc3899120f672396ef020fa54b009311272de0a70d5febc91747c3ff2c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7cfc3899120f672396ef020fa54b009311272de0a70d5febc91747c3ff2c7f->enter($__internal_fe7cfc3899120f672396ef020fa54b009311272de0a70d5febc91747c3ff2c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_fe7cfc3899120f672396ef020fa54b009311272de0a70d5febc91747c3ff2c7f->leave($__internal_fe7cfc3899120f672396ef020fa54b009311272de0a70d5febc91747c3ff2c7f_prof);

        
        $__internal_1d147c00917d10d00f1ece83082a996ec9e683d2c24c1b4e7b37bf387145140e->leave($__internal_1d147c00917d10d00f1ece83082a996ec9e683d2c24c1b4e7b37bf387145140e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f4de3e155fd2acdf5a3f9cec5cf9f3bdd2ec810a37a909fcfd4f7c98fd78da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4de3e155fd2acdf5a3f9cec5cf9f3bdd2ec810a37a909fcfd4f7c98fd78da8->enter($__internal_1f4de3e155fd2acdf5a3f9cec5cf9f3bdd2ec810a37a909fcfd4f7c98fd78da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8fc11845ab5dbe5177cba07db812c9c6dc6d67abbb612e02815df3925de3ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fc11845ab5dbe5177cba07db812c9c6dc6d67abbb612e02815df3925de3ec7->enter($__internal_e8fc11845ab5dbe5177cba07db812c9c6dc6d67abbb612e02815df3925de3ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e8fc11845ab5dbe5177cba07db812c9c6dc6d67abbb612e02815df3925de3ec7->leave($__internal_e8fc11845ab5dbe5177cba07db812c9c6dc6d67abbb612e02815df3925de3ec7_prof);

        
        $__internal_1f4de3e155fd2acdf5a3f9cec5cf9f3bdd2ec810a37a909fcfd4f7c98fd78da8->leave($__internal_1f4de3e155fd2acdf5a3f9cec5cf9f3bdd2ec810a37a909fcfd4f7c98fd78da8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
