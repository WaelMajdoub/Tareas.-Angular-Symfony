<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bb9388bf10a106f8f5e05668b67714f091adc2d3e41cc88eafdf074ab8feb374 extends Twig_Template
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
        $__internal_79b4d6a5b57b05bd4e82313b5340399ffddc4469a1c90b1023f547dbddde9d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b4d6a5b57b05bd4e82313b5340399ffddc4469a1c90b1023f547dbddde9d58->enter($__internal_79b4d6a5b57b05bd4e82313b5340399ffddc4469a1c90b1023f547dbddde9d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_82c0bf4f541f0d3386d6f755fcf97788c697961e3c5775b8a7862cb8a1f7dcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c0bf4f541f0d3386d6f755fcf97788c697961e3c5775b8a7862cb8a1f7dcf9->enter($__internal_82c0bf4f541f0d3386d6f755fcf97788c697961e3c5775b8a7862cb8a1f7dcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_79b4d6a5b57b05bd4e82313b5340399ffddc4469a1c90b1023f547dbddde9d58->leave($__internal_79b4d6a5b57b05bd4e82313b5340399ffddc4469a1c90b1023f547dbddde9d58_prof);

        
        $__internal_82c0bf4f541f0d3386d6f755fcf97788c697961e3c5775b8a7862cb8a1f7dcf9->leave($__internal_82c0bf4f541f0d3386d6f755fcf97788c697961e3c5775b8a7862cb8a1f7dcf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
