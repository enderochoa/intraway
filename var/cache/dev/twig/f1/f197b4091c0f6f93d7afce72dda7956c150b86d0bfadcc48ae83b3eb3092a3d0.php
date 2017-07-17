<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3178f4cfa0482a40aa31e4a1748be1e6b595ee4b7825254960a1a84b3aff4de6 extends Twig_Template
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
        $__internal_bdb87b6ac9778f825b5390b0b74650b5cd73f94c8add5dac3e16bcaf7a4e88cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb87b6ac9778f825b5390b0b74650b5cd73f94c8add5dac3e16bcaf7a4e88cf->enter($__internal_bdb87b6ac9778f825b5390b0b74650b5cd73f94c8add5dac3e16bcaf7a4e88cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2c6f1945ad36ffd09a9fd4efd319a949d02e63f074f2fdfb0effd60a8145204e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6f1945ad36ffd09a9fd4efd319a949d02e63f074f2fdfb0effd60a8145204e->enter($__internal_2c6f1945ad36ffd09a9fd4efd319a949d02e63f074f2fdfb0effd60a8145204e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bdb87b6ac9778f825b5390b0b74650b5cd73f94c8add5dac3e16bcaf7a4e88cf->leave($__internal_bdb87b6ac9778f825b5390b0b74650b5cd73f94c8add5dac3e16bcaf7a4e88cf_prof);

        
        $__internal_2c6f1945ad36ffd09a9fd4efd319a949d02e63f074f2fdfb0effd60a8145204e->leave($__internal_2c6f1945ad36ffd09a9fd4efd319a949d02e63f074f2fdfb0effd60a8145204e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
