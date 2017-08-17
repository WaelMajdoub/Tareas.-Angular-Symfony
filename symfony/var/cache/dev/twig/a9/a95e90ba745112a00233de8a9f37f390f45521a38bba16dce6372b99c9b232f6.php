<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3793bae0392de4b389ad94ea3a0ffa4ad6d771b3ed7361dcfc85d8a1bee0d330 extends Twig_Template
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
        $__internal_d0fb281b33c94787c98ff9946f4ccf503e94c1120bbb56ff3c1405bba8280a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fb281b33c94787c98ff9946f4ccf503e94c1120bbb56ff3c1405bba8280a6d->enter($__internal_d0fb281b33c94787c98ff9946f4ccf503e94c1120bbb56ff3c1405bba8280a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2a2f8b0c201ec9424b6e49fba2c69363b9cd028c9c9044758eb4a1e661713570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2f8b0c201ec9424b6e49fba2c69363b9cd028c9c9044758eb4a1e661713570->enter($__internal_2a2f8b0c201ec9424b6e49fba2c69363b9cd028c9c9044758eb4a1e661713570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d0fb281b33c94787c98ff9946f4ccf503e94c1120bbb56ff3c1405bba8280a6d->leave($__internal_d0fb281b33c94787c98ff9946f4ccf503e94c1120bbb56ff3c1405bba8280a6d_prof);

        
        $__internal_2a2f8b0c201ec9424b6e49fba2c69363b9cd028c9c9044758eb4a1e661713570->leave($__internal_2a2f8b0c201ec9424b6e49fba2c69363b9cd028c9c9044758eb4a1e661713570_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
