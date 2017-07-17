<?php

/* :user:show.html.twig */
class __TwigTemplate_8d72b5854f80b900edfb981a71ecb42b11cd98b81ee4c1f4af51900941829ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_9408cc6e752915d83cf3aa8d575602540383d3ec54c9c1002055fd3ab5f54c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9408cc6e752915d83cf3aa8d575602540383d3ec54c9c1002055fd3ab5f54c64->enter($__internal_9408cc6e752915d83cf3aa8d575602540383d3ec54c9c1002055fd3ab5f54c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_a051fb1de87d1dd211de2ca72857bd0e3071ac1ff032e78709dcf372cb3ccf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a051fb1de87d1dd211de2ca72857bd0e3071ac1ff032e78709dcf372cb3ccf25->enter($__internal_a051fb1de87d1dd211de2ca72857bd0e3071ac1ff032e78709dcf372cb3ccf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9408cc6e752915d83cf3aa8d575602540383d3ec54c9c1002055fd3ab5f54c64->leave($__internal_9408cc6e752915d83cf3aa8d575602540383d3ec54c9c1002055fd3ab5f54c64_prof);

        
        $__internal_a051fb1de87d1dd211de2ca72857bd0e3071ac1ff032e78709dcf372cb3ccf25->leave($__internal_a051fb1de87d1dd211de2ca72857bd0e3071ac1ff032e78709dcf372cb3ccf25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a4ca36f85e3bd87e95800147d036401371904f2103ea6fdc79c1e20f3ebe519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4ca36f85e3bd87e95800147d036401371904f2103ea6fdc79c1e20f3ebe519->enter($__internal_5a4ca36f85e3bd87e95800147d036401371904f2103ea6fdc79c1e20f3ebe519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da684f3985a3e8096277db5168f64d0fda7bbbf4d4efb7cb24b2c73f699c8dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da684f3985a3e8096277db5168f64d0fda7bbbf4d4efb7cb24b2c73f699c8dec->enter($__internal_da684f3985a3e8096277db5168f64d0fda7bbbf4d4efb7cb24b2c73f699c8dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_da684f3985a3e8096277db5168f64d0fda7bbbf4d4efb7cb24b2c73f699c8dec->leave($__internal_da684f3985a3e8096277db5168f64d0fda7bbbf4d4efb7cb24b2c73f699c8dec_prof);

        
        $__internal_5a4ca36f85e3bd87e95800147d036401371904f2103ea6fdc79c1e20f3ebe519->leave($__internal_5a4ca36f85e3bd87e95800147d036401371904f2103ea6fdc79c1e20f3ebe519_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ user.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ user.image }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usercrud_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('usercrud_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:show.html.twig", "/srv/www/htdocs/intraway2/app/Resources/views/user/show.html.twig");
    }
}
