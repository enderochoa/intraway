<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_73197469c0f6e089008ab1bb69ad7fbd6b152b1dd89e0d5fae222c8562a06e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a50dbfb5dec8d7bf59897d9a9eb2c5acca1f9907405e99cf5d3b1bb8a31ff0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50dbfb5dec8d7bf59897d9a9eb2c5acca1f9907405e99cf5d3b1bb8a31ff0f0->enter($__internal_a50dbfb5dec8d7bf59897d9a9eb2c5acca1f9907405e99cf5d3b1bb8a31ff0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1fca10c58a3f9d9dcda803a7112f21c0d52cdab56d32dd07c66c2aad1ec6ffef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fca10c58a3f9d9dcda803a7112f21c0d52cdab56d32dd07c66c2aad1ec6ffef->enter($__internal_1fca10c58a3f9d9dcda803a7112f21c0d52cdab56d32dd07c66c2aad1ec6ffef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a50dbfb5dec8d7bf59897d9a9eb2c5acca1f9907405e99cf5d3b1bb8a31ff0f0->leave($__internal_a50dbfb5dec8d7bf59897d9a9eb2c5acca1f9907405e99cf5d3b1bb8a31ff0f0_prof);

        
        $__internal_1fca10c58a3f9d9dcda803a7112f21c0d52cdab56d32dd07c66c2aad1ec6ffef->leave($__internal_1fca10c58a3f9d9dcda803a7112f21c0d52cdab56d32dd07c66c2aad1ec6ffef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
