<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_22e089e9bb74dd9de37f21bfc41a8072e9ac5c53aeec84c1597044cf60af4955 extends Twig_Template
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
        $__internal_9fea0ac7029e5a7454a51dd6739ee7893140a110b509a791d0a095a2e1ea05e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fea0ac7029e5a7454a51dd6739ee7893140a110b509a791d0a095a2e1ea05e9->enter($__internal_9fea0ac7029e5a7454a51dd6739ee7893140a110b509a791d0a095a2e1ea05e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3a7c90fc47c9beaa65302587080d61e59f95810ef4631c92c16007b4804bcab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7c90fc47c9beaa65302587080d61e59f95810ef4631c92c16007b4804bcab1->enter($__internal_3a7c90fc47c9beaa65302587080d61e59f95810ef4631c92c16007b4804bcab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9fea0ac7029e5a7454a51dd6739ee7893140a110b509a791d0a095a2e1ea05e9->leave($__internal_9fea0ac7029e5a7454a51dd6739ee7893140a110b509a791d0a095a2e1ea05e9_prof);

        
        $__internal_3a7c90fc47c9beaa65302587080d61e59f95810ef4631c92c16007b4804bcab1->leave($__internal_3a7c90fc47c9beaa65302587080d61e59f95810ef4631c92c16007b4804bcab1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
