<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c94bbced4c851993a425952d011a3d1116926868af438a1812889a26f30aa367 extends Twig_Template
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
        $__internal_18f886ac79ef721d6d4ca1b4e4f6daadd150ef4483651de77793b5c0cadc1bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f886ac79ef721d6d4ca1b4e4f6daadd150ef4483651de77793b5c0cadc1bfb->enter($__internal_18f886ac79ef721d6d4ca1b4e4f6daadd150ef4483651de77793b5c0cadc1bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_73e2c0ec300af564cd5a4a6394745b085e84c1d3d7875dee3ada807be78cb8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e2c0ec300af564cd5a4a6394745b085e84c1d3d7875dee3ada807be78cb8b6->enter($__internal_73e2c0ec300af564cd5a4a6394745b085e84c1d3d7875dee3ada807be78cb8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_18f886ac79ef721d6d4ca1b4e4f6daadd150ef4483651de77793b5c0cadc1bfb->leave($__internal_18f886ac79ef721d6d4ca1b4e4f6daadd150ef4483651de77793b5c0cadc1bfb_prof);

        
        $__internal_73e2c0ec300af564cd5a4a6394745b085e84c1d3d7875dee3ada807be78cb8b6->leave($__internal_73e2c0ec300af564cd5a4a6394745b085e84c1d3d7875dee3ada807be78cb8b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
