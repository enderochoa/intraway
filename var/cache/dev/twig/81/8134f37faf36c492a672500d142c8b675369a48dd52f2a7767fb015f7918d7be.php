<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_605baa268e030825bf53b86b817bf32dad9185fa38fd4c38a9f8ac1a04df6bd4 extends Twig_Template
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
        $__internal_781b709c6168a72dc7e123edd454e76094151a6a568a7a003f8ab0a8d63e91bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781b709c6168a72dc7e123edd454e76094151a6a568a7a003f8ab0a8d63e91bc->enter($__internal_781b709c6168a72dc7e123edd454e76094151a6a568a7a003f8ab0a8d63e91bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c3de8e66f53e5e7fb16dd298149965a32667fce0645e9fa28d77feecc5afc64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3de8e66f53e5e7fb16dd298149965a32667fce0645e9fa28d77feecc5afc64c->enter($__internal_c3de8e66f53e5e7fb16dd298149965a32667fce0645e9fa28d77feecc5afc64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_781b709c6168a72dc7e123edd454e76094151a6a568a7a003f8ab0a8d63e91bc->leave($__internal_781b709c6168a72dc7e123edd454e76094151a6a568a7a003f8ab0a8d63e91bc_prof);

        
        $__internal_c3de8e66f53e5e7fb16dd298149965a32667fce0645e9fa28d77feecc5afc64c->leave($__internal_c3de8e66f53e5e7fb16dd298149965a32667fce0645e9fa28d77feecc5afc64c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
