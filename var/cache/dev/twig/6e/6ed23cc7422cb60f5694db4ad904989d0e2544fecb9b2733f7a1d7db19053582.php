<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2e28837a5110d9daa2066ed66fcb410c6f2b60175904b83b13c30aaf98e69116 extends Twig_Template
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
        $__internal_56729d1aa7f443be7361f74a3752903deb0550a667da74c52fe48ae1b7044280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56729d1aa7f443be7361f74a3752903deb0550a667da74c52fe48ae1b7044280->enter($__internal_56729d1aa7f443be7361f74a3752903deb0550a667da74c52fe48ae1b7044280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_346126a32e1bb71c955dcace6d8f077ff3dddedded23f151f0209a1605d822a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346126a32e1bb71c955dcace6d8f077ff3dddedded23f151f0209a1605d822a9->enter($__internal_346126a32e1bb71c955dcace6d8f077ff3dddedded23f151f0209a1605d822a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_56729d1aa7f443be7361f74a3752903deb0550a667da74c52fe48ae1b7044280->leave($__internal_56729d1aa7f443be7361f74a3752903deb0550a667da74c52fe48ae1b7044280_prof);

        
        $__internal_346126a32e1bb71c955dcace6d8f077ff3dddedded23f151f0209a1605d822a9->leave($__internal_346126a32e1bb71c955dcace6d8f077ff3dddedded23f151f0209a1605d822a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
