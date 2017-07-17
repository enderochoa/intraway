<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3f8e7ac402d3610a7b4765b8745515d1898e8487d9fc1888ee6f14d8d27e3db8 extends Twig_Template
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
        $__internal_f24e769899b3835d3f4455591f3967022062f18432cb688c325b174cd3463757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24e769899b3835d3f4455591f3967022062f18432cb688c325b174cd3463757->enter($__internal_f24e769899b3835d3f4455591f3967022062f18432cb688c325b174cd3463757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1f006e712218c0660f82251cdbf4ae7b226dfeb95bba7d0753ca6d101716e096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f006e712218c0660f82251cdbf4ae7b226dfeb95bba7d0753ca6d101716e096->enter($__internal_1f006e712218c0660f82251cdbf4ae7b226dfeb95bba7d0753ca6d101716e096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f24e769899b3835d3f4455591f3967022062f18432cb688c325b174cd3463757->leave($__internal_f24e769899b3835d3f4455591f3967022062f18432cb688c325b174cd3463757_prof);

        
        $__internal_1f006e712218c0660f82251cdbf4ae7b226dfeb95bba7d0753ca6d101716e096->leave($__internal_1f006e712218c0660f82251cdbf4ae7b226dfeb95bba7d0753ca6d101716e096_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
