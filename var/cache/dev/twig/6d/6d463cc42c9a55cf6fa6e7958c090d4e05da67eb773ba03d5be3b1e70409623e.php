<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3a8cfb1f10b7bd3fe996d437afa90314e587fb374626076d0b3589ae1ab0c891 extends Twig_Template
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
        $__internal_8c6cb776d8bb6d14d332b77371becd81036dd5ec08e75d4d70bcbc981994df2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6cb776d8bb6d14d332b77371becd81036dd5ec08e75d4d70bcbc981994df2a->enter($__internal_8c6cb776d8bb6d14d332b77371becd81036dd5ec08e75d4d70bcbc981994df2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_64f27ab9cd848f28e21e629894367dfaba5088205d7d263b0ac6764a2389b9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f27ab9cd848f28e21e629894367dfaba5088205d7d263b0ac6764a2389b9dc->enter($__internal_64f27ab9cd848f28e21e629894367dfaba5088205d7d263b0ac6764a2389b9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8c6cb776d8bb6d14d332b77371becd81036dd5ec08e75d4d70bcbc981994df2a->leave($__internal_8c6cb776d8bb6d14d332b77371becd81036dd5ec08e75d4d70bcbc981994df2a_prof);

        
        $__internal_64f27ab9cd848f28e21e629894367dfaba5088205d7d263b0ac6764a2389b9dc->leave($__internal_64f27ab9cd848f28e21e629894367dfaba5088205d7d263b0ac6764a2389b9dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
