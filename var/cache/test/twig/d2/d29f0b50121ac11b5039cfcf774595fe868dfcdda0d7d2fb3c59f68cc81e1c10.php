<?php

/* user/new.html.twig */
class __TwigTemplate_480ebec0752361ce87aa7d6f49343c2cd5d0ae8b9645d04bad6d5015171f0ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_1ca44dc16aced44e18bf9f12a7ac64c38e40eec6ef234fe4c42ea9530362af4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca44dc16aced44e18bf9f12a7ac64c38e40eec6ef234fe4c42ea9530362af4e->enter($__internal_1ca44dc16aced44e18bf9f12a7ac64c38e40eec6ef234fe4c42ea9530362af4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_1b9f68a98e0c3edf284644cd7f1f83379f91a87216e1cae65d16c73a9cca11a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9f68a98e0c3edf284644cd7f1f83379f91a87216e1cae65d16c73a9cca11a0->enter($__internal_1b9f68a98e0c3edf284644cd7f1f83379f91a87216e1cae65d16c73a9cca11a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca44dc16aced44e18bf9f12a7ac64c38e40eec6ef234fe4c42ea9530362af4e->leave($__internal_1ca44dc16aced44e18bf9f12a7ac64c38e40eec6ef234fe4c42ea9530362af4e_prof);

        
        $__internal_1b9f68a98e0c3edf284644cd7f1f83379f91a87216e1cae65d16c73a9cca11a0->leave($__internal_1b9f68a98e0c3edf284644cd7f1f83379f91a87216e1cae65d16c73a9cca11a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_117b7664551d18e449f5799f4885232e6408ff7688a770f2425519e1897fd2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117b7664551d18e449f5799f4885232e6408ff7688a770f2425519e1897fd2b0->enter($__internal_117b7664551d18e449f5799f4885232e6408ff7688a770f2425519e1897fd2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3b525103dd32a1daee57687fc11cec68cc3530db4c27419e17ef3c135975233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b525103dd32a1daee57687fc11cec68cc3530db4c27419e17ef3c135975233->enter($__internal_a3b525103dd32a1daee57687fc11cec68cc3530db4c27419e17ef3c135975233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3b525103dd32a1daee57687fc11cec68cc3530db4c27419e17ef3c135975233->leave($__internal_a3b525103dd32a1daee57687fc11cec68cc3530db4c27419e17ef3c135975233_prof);

        
        $__internal_117b7664551d18e449f5799f4885232e6408ff7688a770f2425519e1897fd2b0->leave($__internal_117b7664551d18e449f5799f4885232e6408ff7688a770f2425519e1897fd2b0_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
", "user/new.html.twig", "/srv/www/htdocs/intraway2/app/Resources/views/user/new.html.twig");
    }
}
