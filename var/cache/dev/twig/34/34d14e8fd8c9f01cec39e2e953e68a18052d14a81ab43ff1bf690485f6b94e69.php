<?php

/* base.html.twig */
class __TwigTemplate_7c0714acb420a2b87cdd0b79a8bbbd957212b7bd2ca3f395a1716e90b54cd28c extends Twig_Template
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
        $__internal_c0916c8cd663a6b21f9cfbeb18d7ffde6090099c9a19521853f88563e5439b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0916c8cd663a6b21f9cfbeb18d7ffde6090099c9a19521853f88563e5439b5b->enter($__internal_c0916c8cd663a6b21f9cfbeb18d7ffde6090099c9a19521853f88563e5439b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fa341e4752fdb1d0b8ae98a51310d406815cbad05ffa288e3bc69f72a4ad19a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa341e4752fdb1d0b8ae98a51310d406815cbad05ffa288e3bc69f72a4ad19a6->enter($__internal_fa341e4752fdb1d0b8ae98a51310d406815cbad05ffa288e3bc69f72a4ad19a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c0916c8cd663a6b21f9cfbeb18d7ffde6090099c9a19521853f88563e5439b5b->leave($__internal_c0916c8cd663a6b21f9cfbeb18d7ffde6090099c9a19521853f88563e5439b5b_prof);

        
        $__internal_fa341e4752fdb1d0b8ae98a51310d406815cbad05ffa288e3bc69f72a4ad19a6->leave($__internal_fa341e4752fdb1d0b8ae98a51310d406815cbad05ffa288e3bc69f72a4ad19a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_721f23ec3eff32f768257c3527f636156e8cb42d0a11c7544962c4f0448987f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721f23ec3eff32f768257c3527f636156e8cb42d0a11c7544962c4f0448987f0->enter($__internal_721f23ec3eff32f768257c3527f636156e8cb42d0a11c7544962c4f0448987f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_541060978cc4c264811a4e63e62f7924f72d89a2e6213c540a707ac71e90a726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541060978cc4c264811a4e63e62f7924f72d89a2e6213c540a707ac71e90a726->enter($__internal_541060978cc4c264811a4e63e62f7924f72d89a2e6213c540a707ac71e90a726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_541060978cc4c264811a4e63e62f7924f72d89a2e6213c540a707ac71e90a726->leave($__internal_541060978cc4c264811a4e63e62f7924f72d89a2e6213c540a707ac71e90a726_prof);

        
        $__internal_721f23ec3eff32f768257c3527f636156e8cb42d0a11c7544962c4f0448987f0->leave($__internal_721f23ec3eff32f768257c3527f636156e8cb42d0a11c7544962c4f0448987f0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d37429720ad6566ed01880f207988b5e2dbb0219f38ae894315947479809c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d37429720ad6566ed01880f207988b5e2dbb0219f38ae894315947479809c75->enter($__internal_2d37429720ad6566ed01880f207988b5e2dbb0219f38ae894315947479809c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_37a3d37ab2a75c62f1d4bf0061b474f742af427d2165c7a36775a49088740852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a3d37ab2a75c62f1d4bf0061b474f742af427d2165c7a36775a49088740852->enter($__internal_37a3d37ab2a75c62f1d4bf0061b474f742af427d2165c7a36775a49088740852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37a3d37ab2a75c62f1d4bf0061b474f742af427d2165c7a36775a49088740852->leave($__internal_37a3d37ab2a75c62f1d4bf0061b474f742af427d2165c7a36775a49088740852_prof);

        
        $__internal_2d37429720ad6566ed01880f207988b5e2dbb0219f38ae894315947479809c75->leave($__internal_2d37429720ad6566ed01880f207988b5e2dbb0219f38ae894315947479809c75_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a33ea5d94f7c06351446ecae358d34d9e5add5efdaaebc335d59ae6325dbdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a33ea5d94f7c06351446ecae358d34d9e5add5efdaaebc335d59ae6325dbdd4->enter($__internal_8a33ea5d94f7c06351446ecae358d34d9e5add5efdaaebc335d59ae6325dbdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbab0881da37482275c7ea2e9754e2ce0b8d0cb49b920a1f8d3a34202a309ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbab0881da37482275c7ea2e9754e2ce0b8d0cb49b920a1f8d3a34202a309ad3->enter($__internal_fbab0881da37482275c7ea2e9754e2ce0b8d0cb49b920a1f8d3a34202a309ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fbab0881da37482275c7ea2e9754e2ce0b8d0cb49b920a1f8d3a34202a309ad3->leave($__internal_fbab0881da37482275c7ea2e9754e2ce0b8d0cb49b920a1f8d3a34202a309ad3_prof);

        
        $__internal_8a33ea5d94f7c06351446ecae358d34d9e5add5efdaaebc335d59ae6325dbdd4->leave($__internal_8a33ea5d94f7c06351446ecae358d34d9e5add5efdaaebc335d59ae6325dbdd4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_623019517d2efddafa76c346059176894be94fa8c5eac3d1deee9eda3966e215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623019517d2efddafa76c346059176894be94fa8c5eac3d1deee9eda3966e215->enter($__internal_623019517d2efddafa76c346059176894be94fa8c5eac3d1deee9eda3966e215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c606037d53bf975811dc00cc68d96e2a30c415f7874178329af5bebb33d0337b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c606037d53bf975811dc00cc68d96e2a30c415f7874178329af5bebb33d0337b->enter($__internal_c606037d53bf975811dc00cc68d96e2a30c415f7874178329af5bebb33d0337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c606037d53bf975811dc00cc68d96e2a30c415f7874178329af5bebb33d0337b->leave($__internal_c606037d53bf975811dc00cc68d96e2a30c415f7874178329af5bebb33d0337b_prof);

        
        $__internal_623019517d2efddafa76c346059176894be94fa8c5eac3d1deee9eda3966e215->leave($__internal_623019517d2efddafa76c346059176894be94fa8c5eac3d1deee9eda3966e215_prof);

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
