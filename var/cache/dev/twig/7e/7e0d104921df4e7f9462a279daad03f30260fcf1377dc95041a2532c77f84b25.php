<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_be2818ed389f08dcde89a7ee39d926ddfb83fd44a622d2a77dc91dfddb0f6633 extends Twig_Template
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
        $__internal_e9c5381d21e77ed558a080146c7791dcfb9c1149f262d3fe0086d9c0e66b8fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c5381d21e77ed558a080146c7791dcfb9c1149f262d3fe0086d9c0e66b8fb8->enter($__internal_e9c5381d21e77ed558a080146c7791dcfb9c1149f262d3fe0086d9c0e66b8fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7a6eb0f626efc13902fd25baa93f900fae6da492c9600a19e771b6bc4a8e8324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6eb0f626efc13902fd25baa93f900fae6da492c9600a19e771b6bc4a8e8324->enter($__internal_7a6eb0f626efc13902fd25baa93f900fae6da492c9600a19e771b6bc4a8e8324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e9c5381d21e77ed558a080146c7791dcfb9c1149f262d3fe0086d9c0e66b8fb8->leave($__internal_e9c5381d21e77ed558a080146c7791dcfb9c1149f262d3fe0086d9c0e66b8fb8_prof);

        
        $__internal_7a6eb0f626efc13902fd25baa93f900fae6da492c9600a19e771b6bc4a8e8324->leave($__internal_7a6eb0f626efc13902fd25baa93f900fae6da492c9600a19e771b6bc4a8e8324_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
