<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c566c60c58d44b5cda59dd262911bb97a25e95af3135058d0c79071bad1821ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_44025fc7dde6baa0b726168ed27db155fd09247cd2a26a59db01d57fc5d8d00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44025fc7dde6baa0b726168ed27db155fd09247cd2a26a59db01d57fc5d8d00a->enter($__internal_44025fc7dde6baa0b726168ed27db155fd09247cd2a26a59db01d57fc5d8d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0475cd034637af56650019f2556b1b7a04d80652baf8ee726d8d8acc8e959dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0475cd034637af56650019f2556b1b7a04d80652baf8ee726d8d8acc8e959dff->enter($__internal_0475cd034637af56650019f2556b1b7a04d80652baf8ee726d8d8acc8e959dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44025fc7dde6baa0b726168ed27db155fd09247cd2a26a59db01d57fc5d8d00a->leave($__internal_44025fc7dde6baa0b726168ed27db155fd09247cd2a26a59db01d57fc5d8d00a_prof);

        
        $__internal_0475cd034637af56650019f2556b1b7a04d80652baf8ee726d8d8acc8e959dff->leave($__internal_0475cd034637af56650019f2556b1b7a04d80652baf8ee726d8d8acc8e959dff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1946a38bcdda15ffa932d587046b86874a385db83dab029d3dca52dd371b9236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1946a38bcdda15ffa932d587046b86874a385db83dab029d3dca52dd371b9236->enter($__internal_1946a38bcdda15ffa932d587046b86874a385db83dab029d3dca52dd371b9236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_176b672ee5604b8563e83d9b0bab82d4c066228366317e51e86eeb970ff0bbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176b672ee5604b8563e83d9b0bab82d4c066228366317e51e86eeb970ff0bbdc->enter($__internal_176b672ee5604b8563e83d9b0bab82d4c066228366317e51e86eeb970ff0bbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_176b672ee5604b8563e83d9b0bab82d4c066228366317e51e86eeb970ff0bbdc->leave($__internal_176b672ee5604b8563e83d9b0bab82d4c066228366317e51e86eeb970ff0bbdc_prof);

        
        $__internal_1946a38bcdda15ffa932d587046b86874a385db83dab029d3dca52dd371b9236->leave($__internal_1946a38bcdda15ffa932d587046b86874a385db83dab029d3dca52dd371b9236_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d58e486c50a944a008cd066d7e1f765d50df782c1275bc9857c49df545f0c12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58e486c50a944a008cd066d7e1f765d50df782c1275bc9857c49df545f0c12f->enter($__internal_d58e486c50a944a008cd066d7e1f765d50df782c1275bc9857c49df545f0c12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc9d61ae3b4b0adaf29af31735d6103cd745d9e10bd94ec9a033170455883c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d61ae3b4b0adaf29af31735d6103cd745d9e10bd94ec9a033170455883c1d->enter($__internal_dc9d61ae3b4b0adaf29af31735d6103cd745d9e10bd94ec9a033170455883c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dc9d61ae3b4b0adaf29af31735d6103cd745d9e10bd94ec9a033170455883c1d->leave($__internal_dc9d61ae3b4b0adaf29af31735d6103cd745d9e10bd94ec9a033170455883c1d_prof);

        
        $__internal_d58e486c50a944a008cd066d7e1f765d50df782c1275bc9857c49df545f0c12f->leave($__internal_d58e486c50a944a008cd066d7e1f765d50df782c1275bc9857c49df545f0c12f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
