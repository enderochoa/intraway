<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_dd115d5b032c994339fcc069ec0f2c779b51d37ab52e410a61c5d58e492e67fb extends Twig_Template
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
        $__internal_e69edb044ed1ab6c11001c99e1096285cd5eccbbeba86512c527ea35be94de06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69edb044ed1ab6c11001c99e1096285cd5eccbbeba86512c527ea35be94de06->enter($__internal_e69edb044ed1ab6c11001c99e1096285cd5eccbbeba86512c527ea35be94de06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1619d5c83a13befd279bfaed42a129a29a5c37f6ad75ec2a688dade79340fa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1619d5c83a13befd279bfaed42a129a29a5c37f6ad75ec2a688dade79340fa63->enter($__internal_1619d5c83a13befd279bfaed42a129a29a5c37f6ad75ec2a688dade79340fa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e69edb044ed1ab6c11001c99e1096285cd5eccbbeba86512c527ea35be94de06->leave($__internal_e69edb044ed1ab6c11001c99e1096285cd5eccbbeba86512c527ea35be94de06_prof);

        
        $__internal_1619d5c83a13befd279bfaed42a129a29a5c37f6ad75ec2a688dade79340fa63->leave($__internal_1619d5c83a13befd279bfaed42a129a29a5c37f6ad75ec2a688dade79340fa63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
