<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_de3e456315011d188bf18ee2e874b7993d70f03a781a98165fb59c8a39da6968 extends Twig_Template
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
        $__internal_6f59dc9432771cd578c38896a09940dfd12c0d823b8d1505b981ccd11b95bdf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f59dc9432771cd578c38896a09940dfd12c0d823b8d1505b981ccd11b95bdf8->enter($__internal_6f59dc9432771cd578c38896a09940dfd12c0d823b8d1505b981ccd11b95bdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c9e19d035eb26016b9dd8c910eabbbd190e7b7cdc6722d12960fe46be6d00639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e19d035eb26016b9dd8c910eabbbd190e7b7cdc6722d12960fe46be6d00639->enter($__internal_c9e19d035eb26016b9dd8c910eabbbd190e7b7cdc6722d12960fe46be6d00639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6f59dc9432771cd578c38896a09940dfd12c0d823b8d1505b981ccd11b95bdf8->leave($__internal_6f59dc9432771cd578c38896a09940dfd12c0d823b8d1505b981ccd11b95bdf8_prof);

        
        $__internal_c9e19d035eb26016b9dd8c910eabbbd190e7b7cdc6722d12960fe46be6d00639->leave($__internal_c9e19d035eb26016b9dd8c910eabbbd190e7b7cdc6722d12960fe46be6d00639_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
