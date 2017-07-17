<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f3d95d195c5eb3ec5c2d6bc1eb1cecb78893839890c3220c68e358356fd829d7 extends Twig_Template
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
        $__internal_7ac2e9c8c3dd69aac533717b1c5f47ae1636e00e1fc1089e0395d8d41467c34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac2e9c8c3dd69aac533717b1c5f47ae1636e00e1fc1089e0395d8d41467c34f->enter($__internal_7ac2e9c8c3dd69aac533717b1c5f47ae1636e00e1fc1089e0395d8d41467c34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f51cac906217ee43962d462368034495149a6e0efc79022f9402a45fff13b287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51cac906217ee43962d462368034495149a6e0efc79022f9402a45fff13b287->enter($__internal_f51cac906217ee43962d462368034495149a6e0efc79022f9402a45fff13b287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7ac2e9c8c3dd69aac533717b1c5f47ae1636e00e1fc1089e0395d8d41467c34f->leave($__internal_7ac2e9c8c3dd69aac533717b1c5f47ae1636e00e1fc1089e0395d8d41467c34f_prof);

        
        $__internal_f51cac906217ee43962d462368034495149a6e0efc79022f9402a45fff13b287->leave($__internal_f51cac906217ee43962d462368034495149a6e0efc79022f9402a45fff13b287_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
