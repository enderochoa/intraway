<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8bffbe1fe0fa9df16ec4b357e3c117c20a64a4cedd0c090c362b0eb2a1ce27cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1f5b46bcdb0388efa3ccdb88e587f3c43798f1590338ac51a339ddb8e2c24dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f5b46bcdb0388efa3ccdb88e587f3c43798f1590338ac51a339ddb8e2c24dd->enter($__internal_d1f5b46bcdb0388efa3ccdb88e587f3c43798f1590338ac51a339ddb8e2c24dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6dd4bc190cb6e6013e0e359fcbe8fed13a28711d59e743cce0992b9040b6d543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd4bc190cb6e6013e0e359fcbe8fed13a28711d59e743cce0992b9040b6d543->enter($__internal_6dd4bc190cb6e6013e0e359fcbe8fed13a28711d59e743cce0992b9040b6d543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d1f5b46bcdb0388efa3ccdb88e587f3c43798f1590338ac51a339ddb8e2c24dd->leave($__internal_d1f5b46bcdb0388efa3ccdb88e587f3c43798f1590338ac51a339ddb8e2c24dd_prof);

        
        $__internal_6dd4bc190cb6e6013e0e359fcbe8fed13a28711d59e743cce0992b9040b6d543->leave($__internal_6dd4bc190cb6e6013e0e359fcbe8fed13a28711d59e743cce0992b9040b6d543_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_516537f23b33bd6fa209b6e48729dc8576d640bfafffec7ecbb50c3471d21975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516537f23b33bd6fa209b6e48729dc8576d640bfafffec7ecbb50c3471d21975->enter($__internal_516537f23b33bd6fa209b6e48729dc8576d640bfafffec7ecbb50c3471d21975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ef7b6bae09abcabe63ac64c750715e4581aecfa2a76502fbb3ef78867781e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef7b6bae09abcabe63ac64c750715e4581aecfa2a76502fbb3ef78867781e12->enter($__internal_6ef7b6bae09abcabe63ac64c750715e4581aecfa2a76502fbb3ef78867781e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6ef7b6bae09abcabe63ac64c750715e4581aecfa2a76502fbb3ef78867781e12->leave($__internal_6ef7b6bae09abcabe63ac64c750715e4581aecfa2a76502fbb3ef78867781e12_prof);

        
        $__internal_516537f23b33bd6fa209b6e48729dc8576d640bfafffec7ecbb50c3471d21975->leave($__internal_516537f23b33bd6fa209b6e48729dc8576d640bfafffec7ecbb50c3471d21975_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
