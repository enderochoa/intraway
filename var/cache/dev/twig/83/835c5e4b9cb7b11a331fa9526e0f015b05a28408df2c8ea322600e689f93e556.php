<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a5cc9902ca115480ec34f510d4820fe2c56ff6388b86ffdf9f42b68baa2c855b extends Twig_Template
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
        $__internal_e2ed719c304395a434884c0363bea1fe1df266e6dc0afa77443c9a0242961aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ed719c304395a434884c0363bea1fe1df266e6dc0afa77443c9a0242961aeb->enter($__internal_e2ed719c304395a434884c0363bea1fe1df266e6dc0afa77443c9a0242961aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0587b2fa33bd415ac79453c40ef55b7ed81b7cc62504e1f2cb9fb9d18cf835bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0587b2fa33bd415ac79453c40ef55b7ed81b7cc62504e1f2cb9fb9d18cf835bf->enter($__internal_0587b2fa33bd415ac79453c40ef55b7ed81b7cc62504e1f2cb9fb9d18cf835bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e2ed719c304395a434884c0363bea1fe1df266e6dc0afa77443c9a0242961aeb->leave($__internal_e2ed719c304395a434884c0363bea1fe1df266e6dc0afa77443c9a0242961aeb_prof);

        
        $__internal_0587b2fa33bd415ac79453c40ef55b7ed81b7cc62504e1f2cb9fb9d18cf835bf->leave($__internal_0587b2fa33bd415ac79453c40ef55b7ed81b7cc62504e1f2cb9fb9d18cf835bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
