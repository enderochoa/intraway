<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8218719b7e55db3a40c6f64511cbd4110699a8bb74051278c576b187e5537d22 extends Twig_Template
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
        $__internal_6fed0764a00d0212ef6c3c5f565c464eede4cdc0aedc6fecb2446f1b8c624443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fed0764a00d0212ef6c3c5f565c464eede4cdc0aedc6fecb2446f1b8c624443->enter($__internal_6fed0764a00d0212ef6c3c5f565c464eede4cdc0aedc6fecb2446f1b8c624443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ad57d2f1567180903a71ddef7f314a9bd2cb282afe8bd0caf786208ddb09b840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad57d2f1567180903a71ddef7f314a9bd2cb282afe8bd0caf786208ddb09b840->enter($__internal_ad57d2f1567180903a71ddef7f314a9bd2cb282afe8bd0caf786208ddb09b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6fed0764a00d0212ef6c3c5f565c464eede4cdc0aedc6fecb2446f1b8c624443->leave($__internal_6fed0764a00d0212ef6c3c5f565c464eede4cdc0aedc6fecb2446f1b8c624443_prof);

        
        $__internal_ad57d2f1567180903a71ddef7f314a9bd2cb282afe8bd0caf786208ddb09b840->leave($__internal_ad57d2f1567180903a71ddef7f314a9bd2cb282afe8bd0caf786208ddb09b840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
