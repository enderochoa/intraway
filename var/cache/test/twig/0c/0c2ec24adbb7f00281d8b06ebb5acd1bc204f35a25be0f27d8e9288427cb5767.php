<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ac34eb77a0772fae369da5d413bdc4148602334f2b2c9ac173b227dc013fe096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f262d81737270b46bd362b04dc245356243873cf2c2e5817eea648e107fa421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f262d81737270b46bd362b04dc245356243873cf2c2e5817eea648e107fa421->enter($__internal_0f262d81737270b46bd362b04dc245356243873cf2c2e5817eea648e107fa421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3e5f8035d1d4eafb1af547e5612def15892f5a6f86c4d1fbb3e0601ac64fe4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5f8035d1d4eafb1af547e5612def15892f5a6f86c4d1fbb3e0601ac64fe4c2->enter($__internal_3e5f8035d1d4eafb1af547e5612def15892f5a6f86c4d1fbb3e0601ac64fe4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f262d81737270b46bd362b04dc245356243873cf2c2e5817eea648e107fa421->leave($__internal_0f262d81737270b46bd362b04dc245356243873cf2c2e5817eea648e107fa421_prof);

        
        $__internal_3e5f8035d1d4eafb1af547e5612def15892f5a6f86c4d1fbb3e0601ac64fe4c2->leave($__internal_3e5f8035d1d4eafb1af547e5612def15892f5a6f86c4d1fbb3e0601ac64fe4c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24b4817126b8c809f793bfd4cc1d350e222bc3c8cd6876d112919c391450edeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b4817126b8c809f793bfd4cc1d350e222bc3c8cd6876d112919c391450edeb->enter($__internal_24b4817126b8c809f793bfd4cc1d350e222bc3c8cd6876d112919c391450edeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fa4c27c3b533659f4e398b081dc4c299dc5da8aee7b2678ece70e29bbe5474b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa4c27c3b533659f4e398b081dc4c299dc5da8aee7b2678ece70e29bbe5474b->enter($__internal_4fa4c27c3b533659f4e398b081dc4c299dc5da8aee7b2678ece70e29bbe5474b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4fa4c27c3b533659f4e398b081dc4c299dc5da8aee7b2678ece70e29bbe5474b->leave($__internal_4fa4c27c3b533659f4e398b081dc4c299dc5da8aee7b2678ece70e29bbe5474b_prof);

        
        $__internal_24b4817126b8c809f793bfd4cc1d350e222bc3c8cd6876d112919c391450edeb->leave($__internal_24b4817126b8c809f793bfd4cc1d350e222bc3c8cd6876d112919c391450edeb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9702439dc60ddd090abbc8237560e6f8148b15319a72dc6b9b46f14160be798a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9702439dc60ddd090abbc8237560e6f8148b15319a72dc6b9b46f14160be798a->enter($__internal_9702439dc60ddd090abbc8237560e6f8148b15319a72dc6b9b46f14160be798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_688fe986d4dbcb99e410b0fea6f527d1e8e3eff1e259712ad41eb0c20f0110d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688fe986d4dbcb99e410b0fea6f527d1e8e3eff1e259712ad41eb0c20f0110d7->enter($__internal_688fe986d4dbcb99e410b0fea6f527d1e8e3eff1e259712ad41eb0c20f0110d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_688fe986d4dbcb99e410b0fea6f527d1e8e3eff1e259712ad41eb0c20f0110d7->leave($__internal_688fe986d4dbcb99e410b0fea6f527d1e8e3eff1e259712ad41eb0c20f0110d7_prof);

        
        $__internal_9702439dc60ddd090abbc8237560e6f8148b15319a72dc6b9b46f14160be798a->leave($__internal_9702439dc60ddd090abbc8237560e6f8148b15319a72dc6b9b46f14160be798a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dce627a69f3add5a2a4d769840f250e00fc07e3f18ee80edd393492c4bac323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dce627a69f3add5a2a4d769840f250e00fc07e3f18ee80edd393492c4bac323->enter($__internal_0dce627a69f3add5a2a4d769840f250e00fc07e3f18ee80edd393492c4bac323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b317bae51b768bbb180c75eb19f797e9b772ce4a9c9485691172b489bdb86323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b317bae51b768bbb180c75eb19f797e9b772ce4a9c9485691172b489bdb86323->enter($__internal_b317bae51b768bbb180c75eb19f797e9b772ce4a9c9485691172b489bdb86323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b317bae51b768bbb180c75eb19f797e9b772ce4a9c9485691172b489bdb86323->leave($__internal_b317bae51b768bbb180c75eb19f797e9b772ce4a9c9485691172b489bdb86323_prof);

        
        $__internal_0dce627a69f3add5a2a4d769840f250e00fc07e3f18ee80edd393492c4bac323->leave($__internal_0dce627a69f3add5a2a4d769840f250e00fc07e3f18ee80edd393492c4bac323_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
