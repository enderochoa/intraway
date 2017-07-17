<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_50e1ca4d248df962cb9f77f2369a84210deda6c1cf76f2d2e630797ba432211d extends Twig_Template
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
        $__internal_7115571930dea4a1754e4ae9186819d1bfea84fe04efed75859fd072898df00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7115571930dea4a1754e4ae9186819d1bfea84fe04efed75859fd072898df00b->enter($__internal_7115571930dea4a1754e4ae9186819d1bfea84fe04efed75859fd072898df00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_84a414ad1bd05d7e3b49e517b8aa66955661e69953201c0f7d03fde5c435f0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a414ad1bd05d7e3b49e517b8aa66955661e69953201c0f7d03fde5c435f0a2->enter($__internal_84a414ad1bd05d7e3b49e517b8aa66955661e69953201c0f7d03fde5c435f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7115571930dea4a1754e4ae9186819d1bfea84fe04efed75859fd072898df00b->leave($__internal_7115571930dea4a1754e4ae9186819d1bfea84fe04efed75859fd072898df00b_prof);

        
        $__internal_84a414ad1bd05d7e3b49e517b8aa66955661e69953201c0f7d03fde5c435f0a2->leave($__internal_84a414ad1bd05d7e3b49e517b8aa66955661e69953201c0f7d03fde5c435f0a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
