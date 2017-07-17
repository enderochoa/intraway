<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3e32f40ce75a211daf269b97dd34d9bcd1643895ca039cedb11a8f64f9c6c0c6 extends Twig_Template
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
        $__internal_8907529c82a49662a9748221226e8fb77dcde3982ed34e2e4e563f1ae545dc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8907529c82a49662a9748221226e8fb77dcde3982ed34e2e4e563f1ae545dc69->enter($__internal_8907529c82a49662a9748221226e8fb77dcde3982ed34e2e4e563f1ae545dc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_864d09baa7125220165f4431a0b31ed5e8b31c13764a8702c3da422ca601eac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864d09baa7125220165f4431a0b31ed5e8b31c13764a8702c3da422ca601eac0->enter($__internal_864d09baa7125220165f4431a0b31ed5e8b31c13764a8702c3da422ca601eac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8907529c82a49662a9748221226e8fb77dcde3982ed34e2e4e563f1ae545dc69->leave($__internal_8907529c82a49662a9748221226e8fb77dcde3982ed34e2e4e563f1ae545dc69_prof);

        
        $__internal_864d09baa7125220165f4431a0b31ed5e8b31c13764a8702c3da422ca601eac0->leave($__internal_864d09baa7125220165f4431a0b31ed5e8b31c13764a8702c3da422ca601eac0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
