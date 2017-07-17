<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8aa1822bce98c953cb9f2f52276dce176d0684da076ce2a667d26d1c25a6ae20 extends Twig_Template
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
        $__internal_fcfb257a8b633ce8faad16212ee2c8943f335f2575f962e4331555beec66ea51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfb257a8b633ce8faad16212ee2c8943f335f2575f962e4331555beec66ea51->enter($__internal_fcfb257a8b633ce8faad16212ee2c8943f335f2575f962e4331555beec66ea51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e6c44f830e1f9642890a57783a6a1494f2cc8e5cffaa44909b5a67f20a0fdc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c44f830e1f9642890a57783a6a1494f2cc8e5cffaa44909b5a67f20a0fdc89->enter($__internal_e6c44f830e1f9642890a57783a6a1494f2cc8e5cffaa44909b5a67f20a0fdc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fcfb257a8b633ce8faad16212ee2c8943f335f2575f962e4331555beec66ea51->leave($__internal_fcfb257a8b633ce8faad16212ee2c8943f335f2575f962e4331555beec66ea51_prof);

        
        $__internal_e6c44f830e1f9642890a57783a6a1494f2cc8e5cffaa44909b5a67f20a0fdc89->leave($__internal_e6c44f830e1f9642890a57783a6a1494f2cc8e5cffaa44909b5a67f20a0fdc89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
