<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_409cfdf00f28059a071a9f66196dc325932bf6a07a78ac3fad1a54e5a4b3713a extends Twig_Template
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
        $__internal_480a681cfc962252bfb0af3b50bc385d3d697f2cbb5747d23df25294196b3880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480a681cfc962252bfb0af3b50bc385d3d697f2cbb5747d23df25294196b3880->enter($__internal_480a681cfc962252bfb0af3b50bc385d3d697f2cbb5747d23df25294196b3880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8d1c13ae81a03c8eb64ac8d995b4c8d951697c05a98a1fa8b6094bd40ca89b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1c13ae81a03c8eb64ac8d995b4c8d951697c05a98a1fa8b6094bd40ca89b14->enter($__internal_8d1c13ae81a03c8eb64ac8d995b4c8d951697c05a98a1fa8b6094bd40ca89b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_480a681cfc962252bfb0af3b50bc385d3d697f2cbb5747d23df25294196b3880->leave($__internal_480a681cfc962252bfb0af3b50bc385d3d697f2cbb5747d23df25294196b3880_prof);

        
        $__internal_8d1c13ae81a03c8eb64ac8d995b4c8d951697c05a98a1fa8b6094bd40ca89b14->leave($__internal_8d1c13ae81a03c8eb64ac8d995b4c8d951697c05a98a1fa8b6094bd40ca89b14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
