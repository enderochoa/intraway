<?php

/* base.html.twig */
class __TwigTemplate_95ea8869f7935f1bdd0e1ef858540c765e80d9cb5566e52c147cd88c5a5de8fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9badc30c57c04486039666fe7fb00d8dddccae9dc7c46173fd60b966a1000e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9badc30c57c04486039666fe7fb00d8dddccae9dc7c46173fd60b966a1000e58->enter($__internal_9badc30c57c04486039666fe7fb00d8dddccae9dc7c46173fd60b966a1000e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fbce4235917228c223026c5ca6c11ba407208b5603700951cf7b23d144e630d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbce4235917228c223026c5ca6c11ba407208b5603700951cf7b23d144e630d0->enter($__internal_fbce4235917228c223026c5ca6c11ba407208b5603700951cf7b23d144e630d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9badc30c57c04486039666fe7fb00d8dddccae9dc7c46173fd60b966a1000e58->leave($__internal_9badc30c57c04486039666fe7fb00d8dddccae9dc7c46173fd60b966a1000e58_prof);

        
        $__internal_fbce4235917228c223026c5ca6c11ba407208b5603700951cf7b23d144e630d0->leave($__internal_fbce4235917228c223026c5ca6c11ba407208b5603700951cf7b23d144e630d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be324c780a008fdf3d2fadf8c72a0cf73ed60307f36f41c56b7f50622e7bf9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be324c780a008fdf3d2fadf8c72a0cf73ed60307f36f41c56b7f50622e7bf9c2->enter($__internal_be324c780a008fdf3d2fadf8c72a0cf73ed60307f36f41c56b7f50622e7bf9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b5ff6633abffa3f062aa66ab65ce07d119f9822f47d2716699a87986ebd4209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5ff6633abffa3f062aa66ab65ce07d119f9822f47d2716699a87986ebd4209->enter($__internal_9b5ff6633abffa3f062aa66ab65ce07d119f9822f47d2716699a87986ebd4209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b5ff6633abffa3f062aa66ab65ce07d119f9822f47d2716699a87986ebd4209->leave($__internal_9b5ff6633abffa3f062aa66ab65ce07d119f9822f47d2716699a87986ebd4209_prof);

        
        $__internal_be324c780a008fdf3d2fadf8c72a0cf73ed60307f36f41c56b7f50622e7bf9c2->leave($__internal_be324c780a008fdf3d2fadf8c72a0cf73ed60307f36f41c56b7f50622e7bf9c2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bce7b2d6b69472cfac13e313d9c56eaafa1fff8a946f650b3e3a0f1e4e7de38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bce7b2d6b69472cfac13e313d9c56eaafa1fff8a946f650b3e3a0f1e4e7de38->enter($__internal_8bce7b2d6b69472cfac13e313d9c56eaafa1fff8a946f650b3e3a0f1e4e7de38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8d6931c82d54e65d6e56960b591a1cbbfd87829ae518d546ed1592dd175c150c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6931c82d54e65d6e56960b591a1cbbfd87829ae518d546ed1592dd175c150c->enter($__internal_8d6931c82d54e65d6e56960b591a1cbbfd87829ae518d546ed1592dd175c150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8d6931c82d54e65d6e56960b591a1cbbfd87829ae518d546ed1592dd175c150c->leave($__internal_8d6931c82d54e65d6e56960b591a1cbbfd87829ae518d546ed1592dd175c150c_prof);

        
        $__internal_8bce7b2d6b69472cfac13e313d9c56eaafa1fff8a946f650b3e3a0f1e4e7de38->leave($__internal_8bce7b2d6b69472cfac13e313d9c56eaafa1fff8a946f650b3e3a0f1e4e7de38_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b9b7b1e7d97e84a28021fc7a2428aa417bb9b2a39e103b10034a4212b80a30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9b7b1e7d97e84a28021fc7a2428aa417bb9b2a39e103b10034a4212b80a30c->enter($__internal_4b9b7b1e7d97e84a28021fc7a2428aa417bb9b2a39e103b10034a4212b80a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8caa810d0bdfe84bf8e597f884d42c2f723c472b88fb68cadb22ae858517f9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caa810d0bdfe84bf8e597f884d42c2f723c472b88fb68cadb22ae858517f9a1->enter($__internal_8caa810d0bdfe84bf8e597f884d42c2f723c472b88fb68cadb22ae858517f9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8caa810d0bdfe84bf8e597f884d42c2f723c472b88fb68cadb22ae858517f9a1->leave($__internal_8caa810d0bdfe84bf8e597f884d42c2f723c472b88fb68cadb22ae858517f9a1_prof);

        
        $__internal_4b9b7b1e7d97e84a28021fc7a2428aa417bb9b2a39e103b10034a4212b80a30c->leave($__internal_4b9b7b1e7d97e84a28021fc7a2428aa417bb9b2a39e103b10034a4212b80a30c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c508da5d28858fdd74c72080d3b448f01e03493284bcf64f29593d147406c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c508da5d28858fdd74c72080d3b448f01e03493284bcf64f29593d147406c5b->enter($__internal_8c508da5d28858fdd74c72080d3b448f01e03493284bcf64f29593d147406c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_645c7a39c2b2dd740f05946aaa3feb04026867480e01c88819722ed7683b203b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645c7a39c2b2dd740f05946aaa3feb04026867480e01c88819722ed7683b203b->enter($__internal_645c7a39c2b2dd740f05946aaa3feb04026867480e01c88819722ed7683b203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_645c7a39c2b2dd740f05946aaa3feb04026867480e01c88819722ed7683b203b->leave($__internal_645c7a39c2b2dd740f05946aaa3feb04026867480e01c88819722ed7683b203b_prof);

        
        $__internal_8c508da5d28858fdd74c72080d3b448f01e03493284bcf64f29593d147406c5b->leave($__internal_8c508da5d28858fdd74c72080d3b448f01e03493284bcf64f29593d147406c5b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/srv/www/htdocs/intraway2/app/Resources/views/base.html.twig");
    }
}
