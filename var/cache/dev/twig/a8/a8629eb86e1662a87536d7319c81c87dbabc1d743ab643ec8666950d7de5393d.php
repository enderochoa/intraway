<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c5e95023352cca0696c1f5b4fc95c7cf82116d384b7b460c006b6abdc2c590d5 extends Twig_Template
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
        $__internal_1afca32494b46138120cc73d1fc1d31590e5a756a2ab3f27e998d8ffbcb21d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afca32494b46138120cc73d1fc1d31590e5a756a2ab3f27e998d8ffbcb21d6e->enter($__internal_1afca32494b46138120cc73d1fc1d31590e5a756a2ab3f27e998d8ffbcb21d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_aa7153f716b05efd746f1015a9aeebd13ad94f6d4cc1077b37c0fd5a2a308492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7153f716b05efd746f1015a9aeebd13ad94f6d4cc1077b37c0fd5a2a308492->enter($__internal_aa7153f716b05efd746f1015a9aeebd13ad94f6d4cc1077b37c0fd5a2a308492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1afca32494b46138120cc73d1fc1d31590e5a756a2ab3f27e998d8ffbcb21d6e->leave($__internal_1afca32494b46138120cc73d1fc1d31590e5a756a2ab3f27e998d8ffbcb21d6e_prof);

        
        $__internal_aa7153f716b05efd746f1015a9aeebd13ad94f6d4cc1077b37c0fd5a2a308492->leave($__internal_aa7153f716b05efd746f1015a9aeebd13ad94f6d4cc1077b37c0fd5a2a308492_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
