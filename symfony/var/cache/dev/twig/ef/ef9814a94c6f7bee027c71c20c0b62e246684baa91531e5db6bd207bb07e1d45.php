<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_0b0b1f67aadfa387c46f39248765db891d531827f647f8853912d0edd2afb15f extends Twig_Template
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
        $__internal_06b0bcb289948fe1aebcd475ddbf1e90d411be650faad5f31829b6117e43d9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b0bcb289948fe1aebcd475ddbf1e90d411be650faad5f31829b6117e43d9a8->enter($__internal_06b0bcb289948fe1aebcd475ddbf1e90d411be650faad5f31829b6117e43d9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_63952dc68e9b20e723ff309d28a9ceb764545594609ebe34094e5796e9af9222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63952dc68e9b20e723ff309d28a9ceb764545594609ebe34094e5796e9af9222->enter($__internal_63952dc68e9b20e723ff309d28a9ceb764545594609ebe34094e5796e9af9222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_06b0bcb289948fe1aebcd475ddbf1e90d411be650faad5f31829b6117e43d9a8->leave($__internal_06b0bcb289948fe1aebcd475ddbf1e90d411be650faad5f31829b6117e43d9a8_prof);

        
        $__internal_63952dc68e9b20e723ff309d28a9ceb764545594609ebe34094e5796e9af9222->leave($__internal_63952dc68e9b20e723ff309d28a9ceb764545594609ebe34094e5796e9af9222_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
