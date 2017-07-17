<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_513cdcd290a01e10c330cc26a97e53cf990754f7eeb7749cdf09a3d61be8b9f5 extends Twig_Template
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
        $__internal_dc345753b889411f7b273f4fcac71018474dd6c006160b484ad3de470cec990b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc345753b889411f7b273f4fcac71018474dd6c006160b484ad3de470cec990b->enter($__internal_dc345753b889411f7b273f4fcac71018474dd6c006160b484ad3de470cec990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_adffb83cdf7d9d4490e717f9553c33f61d8ecda598e61e1542306797b663d3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adffb83cdf7d9d4490e717f9553c33f61d8ecda598e61e1542306797b663d3b2->enter($__internal_adffb83cdf7d9d4490e717f9553c33f61d8ecda598e61e1542306797b663d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dc345753b889411f7b273f4fcac71018474dd6c006160b484ad3de470cec990b->leave($__internal_dc345753b889411f7b273f4fcac71018474dd6c006160b484ad3de470cec990b_prof);

        
        $__internal_adffb83cdf7d9d4490e717f9553c33f61d8ecda598e61e1542306797b663d3b2->leave($__internal_adffb83cdf7d9d4490e717f9553c33f61d8ecda598e61e1542306797b663d3b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
