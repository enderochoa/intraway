<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5eceafde6738c29aa83a2dc83b6da228799124ec2dbad46f900bc7436930173f extends Twig_Template
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
        $__internal_be0df83345bcf06f349cfda75929a37fda3191d2fb6ae3b70c6d56ed1b97f01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0df83345bcf06f349cfda75929a37fda3191d2fb6ae3b70c6d56ed1b97f01d->enter($__internal_be0df83345bcf06f349cfda75929a37fda3191d2fb6ae3b70c6d56ed1b97f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2a65498a9c266155e8e50680435d784999bef63e3b8219caa816b4d4627d32bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a65498a9c266155e8e50680435d784999bef63e3b8219caa816b4d4627d32bd->enter($__internal_2a65498a9c266155e8e50680435d784999bef63e3b8219caa816b4d4627d32bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_be0df83345bcf06f349cfda75929a37fda3191d2fb6ae3b70c6d56ed1b97f01d->leave($__internal_be0df83345bcf06f349cfda75929a37fda3191d2fb6ae3b70c6d56ed1b97f01d_prof);

        
        $__internal_2a65498a9c266155e8e50680435d784999bef63e3b8219caa816b4d4627d32bd->leave($__internal_2a65498a9c266155e8e50680435d784999bef63e3b8219caa816b4d4627d32bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
