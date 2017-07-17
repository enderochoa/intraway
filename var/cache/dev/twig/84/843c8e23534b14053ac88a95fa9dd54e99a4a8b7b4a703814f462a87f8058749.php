<?php

/* :user:edit.html.twig */
class __TwigTemplate_e878c3e6e846474d14ff9e6b41333f9dc4625b29a8e5ca40b711f50af76c5c7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_e941c7de7083a24706aea89fcdfa561a2c9e2191b097994f99410f5cc8893dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e941c7de7083a24706aea89fcdfa561a2c9e2191b097994f99410f5cc8893dce->enter($__internal_e941c7de7083a24706aea89fcdfa561a2c9e2191b097994f99410f5cc8893dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_d73bb04b6540227362ef354d01b094963e1034fa7a5657622168f9fabb0bb0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73bb04b6540227362ef354d01b094963e1034fa7a5657622168f9fabb0bb0dd->enter($__internal_d73bb04b6540227362ef354d01b094963e1034fa7a5657622168f9fabb0bb0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e941c7de7083a24706aea89fcdfa561a2c9e2191b097994f99410f5cc8893dce->leave($__internal_e941c7de7083a24706aea89fcdfa561a2c9e2191b097994f99410f5cc8893dce_prof);

        
        $__internal_d73bb04b6540227362ef354d01b094963e1034fa7a5657622168f9fabb0bb0dd->leave($__internal_d73bb04b6540227362ef354d01b094963e1034fa7a5657622168f9fabb0bb0dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16b714fc5da8c6daae15f46e7475439e8dce3d6b8e8918f7e704e9a69443d580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b714fc5da8c6daae15f46e7475439e8dce3d6b8e8918f7e704e9a69443d580->enter($__internal_16b714fc5da8c6daae15f46e7475439e8dce3d6b8e8918f7e704e9a69443d580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05e47dce2932102c4d97bfe7b44530d2273e4e97d015e7d1ffef66d441bfacb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e47dce2932102c4d97bfe7b44530d2273e4e97d015e7d1ffef66d441bfacb8->enter($__internal_05e47dce2932102c4d97bfe7b44530d2273e4e97d015e7d1ffef66d441bfacb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_05e47dce2932102c4d97bfe7b44530d2273e4e97d015e7d1ffef66d441bfacb8->leave($__internal_05e47dce2932102c4d97bfe7b44530d2273e4e97d015e7d1ffef66d441bfacb8_prof);

        
        $__internal_16b714fc5da8c6daae15f46e7475439e8dce3d6b8e8918f7e704e9a69443d580->leave($__internal_16b714fc5da8c6daae15f46e7475439e8dce3d6b8e8918f7e704e9a69443d580_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('usercrud_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "/srv/www/htdocs/intraway2/app/Resources/views/user/edit.html.twig");
    }
}
