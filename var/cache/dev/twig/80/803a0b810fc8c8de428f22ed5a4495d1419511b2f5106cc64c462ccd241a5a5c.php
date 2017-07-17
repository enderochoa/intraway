<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1f64f34af53391391736aae3633a85dca3fcfe8348d444ff5e1291bb877a4678 extends Twig_Template
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
        $__internal_073fe4ddf4c9141e6975c8269bec199a7ec90c62b52d86ae18b553e46147229a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073fe4ddf4c9141e6975c8269bec199a7ec90c62b52d86ae18b553e46147229a->enter($__internal_073fe4ddf4c9141e6975c8269bec199a7ec90c62b52d86ae18b553e46147229a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7d8267f8b262cf0e0c0e6c4763b65173f3af0e6606c105f3eea3df8ca320c25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8267f8b262cf0e0c0e6c4763b65173f3af0e6606c105f3eea3df8ca320c25d->enter($__internal_7d8267f8b262cf0e0c0e6c4763b65173f3af0e6606c105f3eea3df8ca320c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_073fe4ddf4c9141e6975c8269bec199a7ec90c62b52d86ae18b553e46147229a->leave($__internal_073fe4ddf4c9141e6975c8269bec199a7ec90c62b52d86ae18b553e46147229a_prof);

        
        $__internal_7d8267f8b262cf0e0c0e6c4763b65173f3af0e6606c105f3eea3df8ca320c25d->leave($__internal_7d8267f8b262cf0e0c0e6c4763b65173f3af0e6606c105f3eea3df8ca320c25d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
