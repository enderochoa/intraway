<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_66424fe5b4fc9c1dc898302304150e8728ea0340b66ddd2334d3bb3825357f00 extends Twig_Template
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
        $__internal_44f8b431954e28b2d113c48888386328713064456cf22ce81b8944fdc498a7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f8b431954e28b2d113c48888386328713064456cf22ce81b8944fdc498a7e5->enter($__internal_44f8b431954e28b2d113c48888386328713064456cf22ce81b8944fdc498a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c28d411b6c3438baa5120d6990bacacc514651f1a49ef9a8fbebaa5ec84031f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28d411b6c3438baa5120d6990bacacc514651f1a49ef9a8fbebaa5ec84031f4->enter($__internal_c28d411b6c3438baa5120d6990bacacc514651f1a49ef9a8fbebaa5ec84031f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_44f8b431954e28b2d113c48888386328713064456cf22ce81b8944fdc498a7e5->leave($__internal_44f8b431954e28b2d113c48888386328713064456cf22ce81b8944fdc498a7e5_prof);

        
        $__internal_c28d411b6c3438baa5120d6990bacacc514651f1a49ef9a8fbebaa5ec84031f4->leave($__internal_c28d411b6c3438baa5120d6990bacacc514651f1a49ef9a8fbebaa5ec84031f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
