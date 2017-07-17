<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6a0ca6d61c285999c5e4899d4624b812b272ecaf19d2c2a5aa006e32bc222dcb extends Twig_Template
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
        $__internal_c932221a4a7e507cf4af7c0038c5ec84c16ab344d0761d4449e4d0118f3a9bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c932221a4a7e507cf4af7c0038c5ec84c16ab344d0761d4449e4d0118f3a9bbf->enter($__internal_c932221a4a7e507cf4af7c0038c5ec84c16ab344d0761d4449e4d0118f3a9bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_86e19e0b43d27e0d56b85623db2e3502d236783bc7861725443d882c53eb70ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e19e0b43d27e0d56b85623db2e3502d236783bc7861725443d882c53eb70ff->enter($__internal_86e19e0b43d27e0d56b85623db2e3502d236783bc7861725443d882c53eb70ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c932221a4a7e507cf4af7c0038c5ec84c16ab344d0761d4449e4d0118f3a9bbf->leave($__internal_c932221a4a7e507cf4af7c0038c5ec84c16ab344d0761d4449e4d0118f3a9bbf_prof);

        
        $__internal_86e19e0b43d27e0d56b85623db2e3502d236783bc7861725443d882c53eb70ff->leave($__internal_86e19e0b43d27e0d56b85623db2e3502d236783bc7861725443d882c53eb70ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
