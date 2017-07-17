<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5ae937e321bd0ef71cd7307b9293dcccd2a65690c356ac9b2ace5d0ce7701ca6 extends Twig_Template
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
        $__internal_57ca2c655b16d4f382255992b9b5d07b5c7a24641cb1e3f41a31d6e68ede2414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ca2c655b16d4f382255992b9b5d07b5c7a24641cb1e3f41a31d6e68ede2414->enter($__internal_57ca2c655b16d4f382255992b9b5d07b5c7a24641cb1e3f41a31d6e68ede2414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bea28646028a20619231bf5fb6f5859929193f4d8664c706dae41a3b823f2f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea28646028a20619231bf5fb6f5859929193f4d8664c706dae41a3b823f2f3c->enter($__internal_bea28646028a20619231bf5fb6f5859929193f4d8664c706dae41a3b823f2f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_57ca2c655b16d4f382255992b9b5d07b5c7a24641cb1e3f41a31d6e68ede2414->leave($__internal_57ca2c655b16d4f382255992b9b5d07b5c7a24641cb1e3f41a31d6e68ede2414_prof);

        
        $__internal_bea28646028a20619231bf5fb6f5859929193f4d8664c706dae41a3b823f2f3c->leave($__internal_bea28646028a20619231bf5fb6f5859929193f4d8664c706dae41a3b823f2f3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
