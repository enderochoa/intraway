<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ea834be068708d056c84186397e5e67ecc32d3aebf4ab7db530edd9c9bcdf95c extends Twig_Template
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
        $__internal_0c9484e688689e6b307cb6de2b31056af61debcb2cbbdc13d97cffba031e0618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9484e688689e6b307cb6de2b31056af61debcb2cbbdc13d97cffba031e0618->enter($__internal_0c9484e688689e6b307cb6de2b31056af61debcb2cbbdc13d97cffba031e0618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c97bd451d9230450cb482838381f485d61034ce2cdb096b61509e886ab697da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97bd451d9230450cb482838381f485d61034ce2cdb096b61509e886ab697da5->enter($__internal_c97bd451d9230450cb482838381f485d61034ce2cdb096b61509e886ab697da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0c9484e688689e6b307cb6de2b31056af61debcb2cbbdc13d97cffba031e0618->leave($__internal_0c9484e688689e6b307cb6de2b31056af61debcb2cbbdc13d97cffba031e0618_prof);

        
        $__internal_c97bd451d9230450cb482838381f485d61034ce2cdb096b61509e886ab697da5->leave($__internal_c97bd451d9230450cb482838381f485d61034ce2cdb096b61509e886ab697da5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
