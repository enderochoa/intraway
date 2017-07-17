<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b0f6cd9b192770c4ac42bca09bd0430725266a3c8cde20b2e4b60820ab1f9625 extends Twig_Template
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
        $__internal_3992daf7c7b3966cc74d963981db1f0112609d2214dbcb4c6a28b238ac31af8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3992daf7c7b3966cc74d963981db1f0112609d2214dbcb4c6a28b238ac31af8b->enter($__internal_3992daf7c7b3966cc74d963981db1f0112609d2214dbcb4c6a28b238ac31af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5f2b857b3cf4872975ccea6398779847ba242695e8f0b66c0370092f2caddf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2b857b3cf4872975ccea6398779847ba242695e8f0b66c0370092f2caddf5d->enter($__internal_5f2b857b3cf4872975ccea6398779847ba242695e8f0b66c0370092f2caddf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3992daf7c7b3966cc74d963981db1f0112609d2214dbcb4c6a28b238ac31af8b->leave($__internal_3992daf7c7b3966cc74d963981db1f0112609d2214dbcb4c6a28b238ac31af8b_prof);

        
        $__internal_5f2b857b3cf4872975ccea6398779847ba242695e8f0b66c0370092f2caddf5d->leave($__internal_5f2b857b3cf4872975ccea6398779847ba242695e8f0b66c0370092f2caddf5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
