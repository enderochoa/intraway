<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bab6f5f676ce17c39bddeac5bf57a98e5f12820709bbbc14f19ac41d07e87755 extends Twig_Template
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
        $__internal_fc12c5f457efefa50262180cc5b76ad1edd82215642dc07fe3eaf6ef3099ace2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc12c5f457efefa50262180cc5b76ad1edd82215642dc07fe3eaf6ef3099ace2->enter($__internal_fc12c5f457efefa50262180cc5b76ad1edd82215642dc07fe3eaf6ef3099ace2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d122fdc58475f250400f849697243b84c8048174117487eee6ab03b33d04f611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d122fdc58475f250400f849697243b84c8048174117487eee6ab03b33d04f611->enter($__internal_d122fdc58475f250400f849697243b84c8048174117487eee6ab03b33d04f611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fc12c5f457efefa50262180cc5b76ad1edd82215642dc07fe3eaf6ef3099ace2->leave($__internal_fc12c5f457efefa50262180cc5b76ad1edd82215642dc07fe3eaf6ef3099ace2_prof);

        
        $__internal_d122fdc58475f250400f849697243b84c8048174117487eee6ab03b33d04f611->leave($__internal_d122fdc58475f250400f849697243b84c8048174117487eee6ab03b33d04f611_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
