<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ff7d776ab967fd762ecf402f9d32e124b16ed74447ba47ef1a6d210266ae4b92 extends Twig_Template
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
        $__internal_8bf86bec36bd43bc4e60472dd63655c02a5566c69a35671ba3c3ead54fcf7135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf86bec36bd43bc4e60472dd63655c02a5566c69a35671ba3c3ead54fcf7135->enter($__internal_8bf86bec36bd43bc4e60472dd63655c02a5566c69a35671ba3c3ead54fcf7135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c6d8fcd6b2b21b4db4530691b955fbabb02a6a13b43c3846cb9f8047e0f13d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d8fcd6b2b21b4db4530691b955fbabb02a6a13b43c3846cb9f8047e0f13d57->enter($__internal_c6d8fcd6b2b21b4db4530691b955fbabb02a6a13b43c3846cb9f8047e0f13d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8bf86bec36bd43bc4e60472dd63655c02a5566c69a35671ba3c3ead54fcf7135->leave($__internal_8bf86bec36bd43bc4e60472dd63655c02a5566c69a35671ba3c3ead54fcf7135_prof);

        
        $__internal_c6d8fcd6b2b21b4db4530691b955fbabb02a6a13b43c3846cb9f8047e0f13d57->leave($__internal_c6d8fcd6b2b21b4db4530691b955fbabb02a6a13b43c3846cb9f8047e0f13d57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
