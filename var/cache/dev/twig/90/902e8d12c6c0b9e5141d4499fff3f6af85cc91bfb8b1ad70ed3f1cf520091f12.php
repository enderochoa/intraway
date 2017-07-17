<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_94cb459aac4bedc67115007c7ef2de8f074781c1569833fe6f035bdc283baa25 extends Twig_Template
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
        $__internal_8d86ebd66de5e0c69226bc73195d9f8e2bdbd8fb56e3f63a92383747c07b68ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d86ebd66de5e0c69226bc73195d9f8e2bdbd8fb56e3f63a92383747c07b68ee->enter($__internal_8d86ebd66de5e0c69226bc73195d9f8e2bdbd8fb56e3f63a92383747c07b68ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_acd4bf143726c98a8ff0103056f73f32abebfd7717a6bf086a4386f4b23d8f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd4bf143726c98a8ff0103056f73f32abebfd7717a6bf086a4386f4b23d8f55->enter($__internal_acd4bf143726c98a8ff0103056f73f32abebfd7717a6bf086a4386f4b23d8f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8d86ebd66de5e0c69226bc73195d9f8e2bdbd8fb56e3f63a92383747c07b68ee->leave($__internal_8d86ebd66de5e0c69226bc73195d9f8e2bdbd8fb56e3f63a92383747c07b68ee_prof);

        
        $__internal_acd4bf143726c98a8ff0103056f73f32abebfd7717a6bf086a4386f4b23d8f55->leave($__internal_acd4bf143726c98a8ff0103056f73f32abebfd7717a6bf086a4386f4b23d8f55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
