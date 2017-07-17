<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a4808c1b24a7953d5b9c524ae961954de21630298657bf021204a3840b6f76a7 extends Twig_Template
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
        $__internal_5e6bb7347fdc754a0018f97ad36df1785da5142788341b2f5cce37cb712f4da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6bb7347fdc754a0018f97ad36df1785da5142788341b2f5cce37cb712f4da8->enter($__internal_5e6bb7347fdc754a0018f97ad36df1785da5142788341b2f5cce37cb712f4da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7682005e108ffe2ffdabb874c7388454763e9aee2199362760b182200952fafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7682005e108ffe2ffdabb874c7388454763e9aee2199362760b182200952fafb->enter($__internal_7682005e108ffe2ffdabb874c7388454763e9aee2199362760b182200952fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5e6bb7347fdc754a0018f97ad36df1785da5142788341b2f5cce37cb712f4da8->leave($__internal_5e6bb7347fdc754a0018f97ad36df1785da5142788341b2f5cce37cb712f4da8_prof);

        
        $__internal_7682005e108ffe2ffdabb874c7388454763e9aee2199362760b182200952fafb->leave($__internal_7682005e108ffe2ffdabb874c7388454763e9aee2199362760b182200952fafb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
