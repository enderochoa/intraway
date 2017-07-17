<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d948b5b4670353adcc699796dc049f8b2c503902eab053514e436c07303faf97 extends Twig_Template
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
        $__internal_ff006c96256b6ef5a4e44599f95bc59a02cca6db874a4eac571687713e99323d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff006c96256b6ef5a4e44599f95bc59a02cca6db874a4eac571687713e99323d->enter($__internal_ff006c96256b6ef5a4e44599f95bc59a02cca6db874a4eac571687713e99323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_39366adce0995207f0f286fa603030f30a38c694e7598215680bd50fc3b97c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39366adce0995207f0f286fa603030f30a38c694e7598215680bd50fc3b97c30->enter($__internal_39366adce0995207f0f286fa603030f30a38c694e7598215680bd50fc3b97c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ff006c96256b6ef5a4e44599f95bc59a02cca6db874a4eac571687713e99323d->leave($__internal_ff006c96256b6ef5a4e44599f95bc59a02cca6db874a4eac571687713e99323d_prof);

        
        $__internal_39366adce0995207f0f286fa603030f30a38c694e7598215680bd50fc3b97c30->leave($__internal_39366adce0995207f0f286fa603030f30a38c694e7598215680bd50fc3b97c30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
