<?php

/* :user:new.html.twig */
class __TwigTemplate_8ea38b709211a4b40575852ee8b20bc017de24e7edf2d697ab6d7f16ae190f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_870f2a4ffa9f65fb43605183e9440d970ce59641685ce17186faf27e34e1f803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870f2a4ffa9f65fb43605183e9440d970ce59641685ce17186faf27e34e1f803->enter($__internal_870f2a4ffa9f65fb43605183e9440d970ce59641685ce17186faf27e34e1f803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_c6827ae59a4be2586c5bac426c99923b0101c075efed2e204623898236dbae39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6827ae59a4be2586c5bac426c99923b0101c075efed2e204623898236dbae39->enter($__internal_c6827ae59a4be2586c5bac426c99923b0101c075efed2e204623898236dbae39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870f2a4ffa9f65fb43605183e9440d970ce59641685ce17186faf27e34e1f803->leave($__internal_870f2a4ffa9f65fb43605183e9440d970ce59641685ce17186faf27e34e1f803_prof);

        
        $__internal_c6827ae59a4be2586c5bac426c99923b0101c075efed2e204623898236dbae39->leave($__internal_c6827ae59a4be2586c5bac426c99923b0101c075efed2e204623898236dbae39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cbff04f04b192ab307dd4a091363eea4a20eb8288eb7a2c03a1f57d042b8565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbff04f04b192ab307dd4a091363eea4a20eb8288eb7a2c03a1f57d042b8565->enter($__internal_5cbff04f04b192ab307dd4a091363eea4a20eb8288eb7a2c03a1f57d042b8565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e6b12900380579b74eff26fd54fa107b30678676410d23309c6f520f1ca9e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6b12900380579b74eff26fd54fa107b30678676410d23309c6f520f1ca9e56->enter($__internal_2e6b12900380579b74eff26fd54fa107b30678676410d23309c6f520f1ca9e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2e6b12900380579b74eff26fd54fa107b30678676410d23309c6f520f1ca9e56->leave($__internal_2e6b12900380579b74eff26fd54fa107b30678676410d23309c6f520f1ca9e56_prof);

        
        $__internal_5cbff04f04b192ab307dd4a091363eea4a20eb8288eb7a2c03a1f57d042b8565->leave($__internal_5cbff04f04b192ab307dd4a091363eea4a20eb8288eb7a2c03a1f57d042b8565_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('usercrud_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/srv/www/htdocs/intraway2/app/Resources/views/user/new.html.twig");
    }
}
