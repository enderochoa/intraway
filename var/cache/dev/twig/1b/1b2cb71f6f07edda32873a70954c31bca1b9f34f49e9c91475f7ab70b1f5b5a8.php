<?php

/* :user:index.html.twig */
class __TwigTemplate_b2c27565c6bff8c1a7dadc198ccbe127741b724b3fe3638ef7994c3824074038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_368359fabb451e159f7930055bae7ea13f35bc348a34b2caf58a39ef3c70226d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368359fabb451e159f7930055bae7ea13f35bc348a34b2caf58a39ef3c70226d->enter($__internal_368359fabb451e159f7930055bae7ea13f35bc348a34b2caf58a39ef3c70226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_b9389e180bc4efdfd3749d209d0489764dec2bdb50db2b59a0729d7f6911453a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9389e180bc4efdfd3749d209d0489764dec2bdb50db2b59a0729d7f6911453a->enter($__internal_b9389e180bc4efdfd3749d209d0489764dec2bdb50db2b59a0729d7f6911453a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368359fabb451e159f7930055bae7ea13f35bc348a34b2caf58a39ef3c70226d->leave($__internal_368359fabb451e159f7930055bae7ea13f35bc348a34b2caf58a39ef3c70226d_prof);

        
        $__internal_b9389e180bc4efdfd3749d209d0489764dec2bdb50db2b59a0729d7f6911453a->leave($__internal_b9389e180bc4efdfd3749d209d0489764dec2bdb50db2b59a0729d7f6911453a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b29740d229b7587586187a914a6b58e26cc01e2a67911cf902fac17e005d867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b29740d229b7587586187a914a6b58e26cc01e2a67911cf902fac17e005d867->enter($__internal_1b29740d229b7587586187a914a6b58e26cc01e2a67911cf902fac17e005d867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e97415e98daaa7ebfcb6356dda2851cb4351dabbf4c48b071b01cc4770b9cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e97415e98daaa7ebfcb6356dda2851cb4351dabbf4c48b071b01cc4770b9cc7->enter($__internal_5e97415e98daaa7ebfcb6356dda2851cb4351dabbf4c48b071b01cc4770b9cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usercrud_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_5e97415e98daaa7ebfcb6356dda2851cb4351dabbf4c48b071b01cc4770b9cc7->leave($__internal_5e97415e98daaa7ebfcb6356dda2851cb4351dabbf4c48b071b01cc4770b9cc7_prof);

        
        $__internal_1b29740d229b7587586187a914a6b58e26cc01e2a67911cf902fac17e005d867->leave($__internal_1b29740d229b7587586187a914a6b58e26cc01e2a67911cf902fac17e005d867_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('usercrud_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('usercrud_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('usercrud_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usercrud_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", ":user:index.html.twig", "/srv/www/htdocs/intraway2/app/Resources/views/user/index.html.twig");
    }
}
