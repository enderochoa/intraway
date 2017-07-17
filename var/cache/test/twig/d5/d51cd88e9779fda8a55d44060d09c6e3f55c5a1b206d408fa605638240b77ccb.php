<?php

/* user/edit.html.twig */
class __TwigTemplate_1acf853e777e14d0e8968c6951a5ffce9d6934891e00904fe3b095f0af0479e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_9675741a4de20ee3385572edebfb67a7f59c77a278e307ce031aa5709fbde249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9675741a4de20ee3385572edebfb67a7f59c77a278e307ce031aa5709fbde249->enter($__internal_9675741a4de20ee3385572edebfb67a7f59c77a278e307ce031aa5709fbde249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_0e10060298a1b35d0788b0a4fe28e7f55b51bb9261d051f9efc1aeb22029b054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e10060298a1b35d0788b0a4fe28e7f55b51bb9261d051f9efc1aeb22029b054->enter($__internal_0e10060298a1b35d0788b0a4fe28e7f55b51bb9261d051f9efc1aeb22029b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9675741a4de20ee3385572edebfb67a7f59c77a278e307ce031aa5709fbde249->leave($__internal_9675741a4de20ee3385572edebfb67a7f59c77a278e307ce031aa5709fbde249_prof);

        
        $__internal_0e10060298a1b35d0788b0a4fe28e7f55b51bb9261d051f9efc1aeb22029b054->leave($__internal_0e10060298a1b35d0788b0a4fe28e7f55b51bb9261d051f9efc1aeb22029b054_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86854de20bacbecf839d655468992e6c2bc870f10467ad822d960afe80e4a8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86854de20bacbecf839d655468992e6c2bc870f10467ad822d960afe80e4a8b0->enter($__internal_86854de20bacbecf839d655468992e6c2bc870f10467ad822d960afe80e4a8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90ced592c8f634f550b84d063f76e17c4c98950f5c1d7a3ad6d1ebed340b111c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ced592c8f634f550b84d063f76e17c4c98950f5c1d7a3ad6d1ebed340b111c->enter($__internal_90ced592c8f634f550b84d063f76e17c4c98950f5c1d7a3ad6d1ebed340b111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90ced592c8f634f550b84d063f76e17c4c98950f5c1d7a3ad6d1ebed340b111c->leave($__internal_90ced592c8f634f550b84d063f76e17c4c98950f5c1d7a3ad6d1ebed340b111c_prof);

        
        $__internal_86854de20bacbecf839d655468992e6c2bc870f10467ad822d960afe80e4a8b0->leave($__internal_86854de20bacbecf839d655468992e6c2bc870f10467ad822d960afe80e4a8b0_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
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
", "user/edit.html.twig", "/srv/www/htdocs/intraway2/app/Resources/views/user/edit.html.twig");
    }
}
