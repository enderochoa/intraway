<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3bb41e6b51e33dc92fe9dfb6a63576134ee48550c514a9ff9ff034763d2dbcc6 extends Twig_Template
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
        $__internal_5d52f95f334a8d9d9382786f4a1b7d2f8362f3b29f2c4f6fb2d104311bba6082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d52f95f334a8d9d9382786f4a1b7d2f8362f3b29f2c4f6fb2d104311bba6082->enter($__internal_5d52f95f334a8d9d9382786f4a1b7d2f8362f3b29f2c4f6fb2d104311bba6082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dade575e393d07a826d73753a3044c429c640b1bae7c92364f274aac88b55ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dade575e393d07a826d73753a3044c429c640b1bae7c92364f274aac88b55ec8->enter($__internal_dade575e393d07a826d73753a3044c429c640b1bae7c92364f274aac88b55ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5d52f95f334a8d9d9382786f4a1b7d2f8362f3b29f2c4f6fb2d104311bba6082->leave($__internal_5d52f95f334a8d9d9382786f4a1b7d2f8362f3b29f2c4f6fb2d104311bba6082_prof);

        
        $__internal_dade575e393d07a826d73753a3044c429c640b1bae7c92364f274aac88b55ec8->leave($__internal_dade575e393d07a826d73753a3044c429c640b1bae7c92364f274aac88b55ec8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
