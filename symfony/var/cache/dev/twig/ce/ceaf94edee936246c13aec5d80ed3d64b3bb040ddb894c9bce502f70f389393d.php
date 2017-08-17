<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c81ff1322ae6efaaed124c9ff5e259e3afee4756a8df60d9b23ba68ebbce1527 extends Twig_Template
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
        $__internal_f84645a754e09d5fd164b8cbf81a63c2c918e40ece250c1135472f7d2c966cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84645a754e09d5fd164b8cbf81a63c2c918e40ece250c1135472f7d2c966cd6->enter($__internal_f84645a754e09d5fd164b8cbf81a63c2c918e40ece250c1135472f7d2c966cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a11e7e5889f0ad63483eb5b096ae993037d0d7ada4f009b22b1a2ababe10fe3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11e7e5889f0ad63483eb5b096ae993037d0d7ada4f009b22b1a2ababe10fe3b->enter($__internal_a11e7e5889f0ad63483eb5b096ae993037d0d7ada4f009b22b1a2ababe10fe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f84645a754e09d5fd164b8cbf81a63c2c918e40ece250c1135472f7d2c966cd6->leave($__internal_f84645a754e09d5fd164b8cbf81a63c2c918e40ece250c1135472f7d2c966cd6_prof);

        
        $__internal_a11e7e5889f0ad63483eb5b096ae993037d0d7ada4f009b22b1a2ababe10fe3b->leave($__internal_a11e7e5889f0ad63483eb5b096ae993037d0d7ada4f009b22b1a2ababe10fe3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
