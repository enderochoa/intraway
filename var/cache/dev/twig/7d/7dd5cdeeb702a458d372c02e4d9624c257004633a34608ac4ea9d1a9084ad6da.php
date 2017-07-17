<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_aeedd66fe5c5f142d0825e8b7baeff55e57010c74f23b4c4d34b7578e0c2e62a extends Twig_Template
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
        $__internal_7829a1cf21c6d6269643422b6e609224adca89b6ef03faa3a613ca08d42a04c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7829a1cf21c6d6269643422b6e609224adca89b6ef03faa3a613ca08d42a04c9->enter($__internal_7829a1cf21c6d6269643422b6e609224adca89b6ef03faa3a613ca08d42a04c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_61b2d2995e3bb8665c9086e97c5ff71ee149431d3ebc2bf61b35f110a01f71c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b2d2995e3bb8665c9086e97c5ff71ee149431d3ebc2bf61b35f110a01f71c3->enter($__internal_61b2d2995e3bb8665c9086e97c5ff71ee149431d3ebc2bf61b35f110a01f71c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7829a1cf21c6d6269643422b6e609224adca89b6ef03faa3a613ca08d42a04c9->leave($__internal_7829a1cf21c6d6269643422b6e609224adca89b6ef03faa3a613ca08d42a04c9_prof);

        
        $__internal_61b2d2995e3bb8665c9086e97c5ff71ee149431d3ebc2bf61b35f110a01f71c3->leave($__internal_61b2d2995e3bb8665c9086e97c5ff71ee149431d3ebc2bf61b35f110a01f71c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
