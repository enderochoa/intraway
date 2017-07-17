<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9a4014a6f4392c5f1cc217c544b0ea544a09464d237657d116114c944e64ac0d extends Twig_Template
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
        $__internal_bd509ecfa761c796c8748e3594b25c6676b070c46d94d13b70723959c531eff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd509ecfa761c796c8748e3594b25c6676b070c46d94d13b70723959c531eff9->enter($__internal_bd509ecfa761c796c8748e3594b25c6676b070c46d94d13b70723959c531eff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_72e575067a4eb2ee4479d22b5fe2a0ac07b3081c529dba6ace78baff632e40b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e575067a4eb2ee4479d22b5fe2a0ac07b3081c529dba6ace78baff632e40b2->enter($__internal_72e575067a4eb2ee4479d22b5fe2a0ac07b3081c529dba6ace78baff632e40b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bd509ecfa761c796c8748e3594b25c6676b070c46d94d13b70723959c531eff9->leave($__internal_bd509ecfa761c796c8748e3594b25c6676b070c46d94d13b70723959c531eff9_prof);

        
        $__internal_72e575067a4eb2ee4479d22b5fe2a0ac07b3081c529dba6ace78baff632e40b2->leave($__internal_72e575067a4eb2ee4479d22b5fe2a0ac07b3081c529dba6ace78baff632e40b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
