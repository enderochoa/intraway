<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d31b3b356b88f8f4c70918e5bac7478b1dbff82895045750ec234714c87eeb2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2d9ad20bd9c3eee8d2fa96d4a48f6c67fe914b4bacd8ad244936b27f54a848ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9ad20bd9c3eee8d2fa96d4a48f6c67fe914b4bacd8ad244936b27f54a848ee->enter($__internal_2d9ad20bd9c3eee8d2fa96d4a48f6c67fe914b4bacd8ad244936b27f54a848ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_553eff6003a88962e9c86a82a99cc170d8d37ac6cb522da7e91bb152cec19023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553eff6003a88962e9c86a82a99cc170d8d37ac6cb522da7e91bb152cec19023->enter($__internal_553eff6003a88962e9c86a82a99cc170d8d37ac6cb522da7e91bb152cec19023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9ad20bd9c3eee8d2fa96d4a48f6c67fe914b4bacd8ad244936b27f54a848ee->leave($__internal_2d9ad20bd9c3eee8d2fa96d4a48f6c67fe914b4bacd8ad244936b27f54a848ee_prof);

        
        $__internal_553eff6003a88962e9c86a82a99cc170d8d37ac6cb522da7e91bb152cec19023->leave($__internal_553eff6003a88962e9c86a82a99cc170d8d37ac6cb522da7e91bb152cec19023_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_562a9e1b5cf6bc4b5868236a30aa315c10f98f9dabca418971069a59bbf316d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562a9e1b5cf6bc4b5868236a30aa315c10f98f9dabca418971069a59bbf316d9->enter($__internal_562a9e1b5cf6bc4b5868236a30aa315c10f98f9dabca418971069a59bbf316d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c938763f229698538c27963dc99b5add23940b56ff13d23466e2765aa6229a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c938763f229698538c27963dc99b5add23940b56ff13d23466e2765aa6229a97->enter($__internal_c938763f229698538c27963dc99b5add23940b56ff13d23466e2765aa6229a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c938763f229698538c27963dc99b5add23940b56ff13d23466e2765aa6229a97->leave($__internal_c938763f229698538c27963dc99b5add23940b56ff13d23466e2765aa6229a97_prof);

        
        $__internal_562a9e1b5cf6bc4b5868236a30aa315c10f98f9dabca418971069a59bbf316d9->leave($__internal_562a9e1b5cf6bc4b5868236a30aa315c10f98f9dabca418971069a59bbf316d9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4768f96ae141735c57a961a056564f39a9014ea52238e699e7e820922d122583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4768f96ae141735c57a961a056564f39a9014ea52238e699e7e820922d122583->enter($__internal_4768f96ae141735c57a961a056564f39a9014ea52238e699e7e820922d122583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2a8d3d1bf09086539c620d06a32eae1d893d1b9a408446b45e516048ee6e9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a8d3d1bf09086539c620d06a32eae1d893d1b9a408446b45e516048ee6e9a2->enter($__internal_c2a8d3d1bf09086539c620d06a32eae1d893d1b9a408446b45e516048ee6e9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c2a8d3d1bf09086539c620d06a32eae1d893d1b9a408446b45e516048ee6e9a2->leave($__internal_c2a8d3d1bf09086539c620d06a32eae1d893d1b9a408446b45e516048ee6e9a2_prof);

        
        $__internal_4768f96ae141735c57a961a056564f39a9014ea52238e699e7e820922d122583->leave($__internal_4768f96ae141735c57a961a056564f39a9014ea52238e699e7e820922d122583_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c6d53beb49311ef68c6a7ba93813b43a8333062f1ed3f24d3f55da6885a03de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6d53beb49311ef68c6a7ba93813b43a8333062f1ed3f24d3f55da6885a03de->enter($__internal_6c6d53beb49311ef68c6a7ba93813b43a8333062f1ed3f24d3f55da6885a03de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3d807b7e9a00b5128f0bd9c47ed01dd2045a6955aa3ef4cec02c75973ac3f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d807b7e9a00b5128f0bd9c47ed01dd2045a6955aa3ef4cec02c75973ac3f9d->enter($__internal_d3d807b7e9a00b5128f0bd9c47ed01dd2045a6955aa3ef4cec02c75973ac3f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d3d807b7e9a00b5128f0bd9c47ed01dd2045a6955aa3ef4cec02c75973ac3f9d->leave($__internal_d3d807b7e9a00b5128f0bd9c47ed01dd2045a6955aa3ef4cec02c75973ac3f9d_prof);

        
        $__internal_6c6d53beb49311ef68c6a7ba93813b43a8333062f1ed3f24d3f55da6885a03de->leave($__internal_6c6d53beb49311ef68c6a7ba93813b43a8333062f1ed3f24d3f55da6885a03de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
