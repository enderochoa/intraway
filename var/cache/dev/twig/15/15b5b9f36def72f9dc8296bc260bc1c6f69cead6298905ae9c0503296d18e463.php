<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_718f0b8545323155b633b54e7eb15930f23fa860757b6ce0b94c8c0573192988 extends Twig_Template
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
        $__internal_fbbd42c75ed130d71c882cceddaf0f13c2cdf9278ec18402570e3125c4786fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbd42c75ed130d71c882cceddaf0f13c2cdf9278ec18402570e3125c4786fa5->enter($__internal_fbbd42c75ed130d71c882cceddaf0f13c2cdf9278ec18402570e3125c4786fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0484180dc40ffdcf7f5512304c17e4dd9c549100ee6ec616e052517ce9a5042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0484180dc40ffdcf7f5512304c17e4dd9c549100ee6ec616e052517ce9a5042d->enter($__internal_0484180dc40ffdcf7f5512304c17e4dd9c549100ee6ec616e052517ce9a5042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fbbd42c75ed130d71c882cceddaf0f13c2cdf9278ec18402570e3125c4786fa5->leave($__internal_fbbd42c75ed130d71c882cceddaf0f13c2cdf9278ec18402570e3125c4786fa5_prof);

        
        $__internal_0484180dc40ffdcf7f5512304c17e4dd9c549100ee6ec616e052517ce9a5042d->leave($__internal_0484180dc40ffdcf7f5512304c17e4dd9c549100ee6ec616e052517ce9a5042d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
