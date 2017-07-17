<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a8224e500d1cc1f6617d1a2e4cf33c812320d8be4a299c02f046d5fb0c06d15e extends Twig_Template
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
        $__internal_053933fc105e15a5aa844d7eddc5752988df8d05a886382f6ddc7b53c9e9fe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053933fc105e15a5aa844d7eddc5752988df8d05a886382f6ddc7b53c9e9fe02->enter($__internal_053933fc105e15a5aa844d7eddc5752988df8d05a886382f6ddc7b53c9e9fe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_df919d0dad12bdf9f96bc95310125e8cfe878a50a71de6ead7877fbf749c37b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df919d0dad12bdf9f96bc95310125e8cfe878a50a71de6ead7877fbf749c37b4->enter($__internal_df919d0dad12bdf9f96bc95310125e8cfe878a50a71de6ead7877fbf749c37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_053933fc105e15a5aa844d7eddc5752988df8d05a886382f6ddc7b53c9e9fe02->leave($__internal_053933fc105e15a5aa844d7eddc5752988df8d05a886382f6ddc7b53c9e9fe02_prof);

        
        $__internal_df919d0dad12bdf9f96bc95310125e8cfe878a50a71de6ead7877fbf749c37b4->leave($__internal_df919d0dad12bdf9f96bc95310125e8cfe878a50a71de6ead7877fbf749c37b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
