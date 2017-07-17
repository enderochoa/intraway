<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_437000500d84076b96a189eeedcd0f1e0b3697440926ef97fcdae4aa340b39b8 extends Twig_Template
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
        $__internal_f7e21f5ae964a1868d846f63445f8781869ac4e6c53207591d921e797985fd21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e21f5ae964a1868d846f63445f8781869ac4e6c53207591d921e797985fd21->enter($__internal_f7e21f5ae964a1868d846f63445f8781869ac4e6c53207591d921e797985fd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_682aa63b0eafa115f5e6002b42c14ffb01c5dc934dc649ad098306671dcd0498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682aa63b0eafa115f5e6002b42c14ffb01c5dc934dc649ad098306671dcd0498->enter($__internal_682aa63b0eafa115f5e6002b42c14ffb01c5dc934dc649ad098306671dcd0498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f7e21f5ae964a1868d846f63445f8781869ac4e6c53207591d921e797985fd21->leave($__internal_f7e21f5ae964a1868d846f63445f8781869ac4e6c53207591d921e797985fd21_prof);

        
        $__internal_682aa63b0eafa115f5e6002b42c14ffb01c5dc934dc649ad098306671dcd0498->leave($__internal_682aa63b0eafa115f5e6002b42c14ffb01c5dc934dc649ad098306671dcd0498_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/srv/www/htdocs/intraway2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
