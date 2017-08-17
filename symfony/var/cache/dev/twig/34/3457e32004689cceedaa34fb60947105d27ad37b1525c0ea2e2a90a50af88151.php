<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ffcfd6a74ece5b9aea6563fe2108118cad093af6204d3e6d90155a0ae06326ff extends Twig_Template
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
        $__internal_a582f485149de0ae0698a7f92fa1bf33fefdeaad636754fa25f9c64e32d92b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a582f485149de0ae0698a7f92fa1bf33fefdeaad636754fa25f9c64e32d92b72->enter($__internal_a582f485149de0ae0698a7f92fa1bf33fefdeaad636754fa25f9c64e32d92b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6934c85ff7148e5bf12ff5a7ddc316c50466d107e3c0d355d3de034c616c56d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6934c85ff7148e5bf12ff5a7ddc316c50466d107e3c0d355d3de034c616c56d2->enter($__internal_6934c85ff7148e5bf12ff5a7ddc316c50466d107e3c0d355d3de034c616c56d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a582f485149de0ae0698a7f92fa1bf33fefdeaad636754fa25f9c64e32d92b72->leave($__internal_a582f485149de0ae0698a7f92fa1bf33fefdeaad636754fa25f9c64e32d92b72_prof);

        
        $__internal_6934c85ff7148e5bf12ff5a7ddc316c50466d107e3c0d355d3de034c616c56d2->leave($__internal_6934c85ff7148e5bf12ff5a7ddc316c50466d107e3c0d355d3de034c616c56d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
