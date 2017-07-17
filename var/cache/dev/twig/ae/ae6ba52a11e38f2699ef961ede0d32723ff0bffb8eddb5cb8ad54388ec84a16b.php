<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2434d7d2f6d53a6b36b2d4e9786284c89486d412c68a5f8e7264b91414ac6e8e extends Twig_Template
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
        $__internal_3ca9c74c0fedeee30423020ee5ea35ef0c377a33c30c9c097753f843bf353af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca9c74c0fedeee30423020ee5ea35ef0c377a33c30c9c097753f843bf353af9->enter($__internal_3ca9c74c0fedeee30423020ee5ea35ef0c377a33c30c9c097753f843bf353af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b17867e199514aeb08850a9b0a11320cdde83f7278629864f4245e68b3e74d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17867e199514aeb08850a9b0a11320cdde83f7278629864f4245e68b3e74d5b->enter($__internal_b17867e199514aeb08850a9b0a11320cdde83f7278629864f4245e68b3e74d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3ca9c74c0fedeee30423020ee5ea35ef0c377a33c30c9c097753f843bf353af9->leave($__internal_3ca9c74c0fedeee30423020ee5ea35ef0c377a33c30c9c097753f843bf353af9_prof);

        
        $__internal_b17867e199514aeb08850a9b0a11320cdde83f7278629864f4245e68b3e74d5b->leave($__internal_b17867e199514aeb08850a9b0a11320cdde83f7278629864f4245e68b3e74d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
