<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3971b5af65696cdf8f2db3a9b3502a46e57e9eb65429e775972319cb77ed7ae1 extends Twig_Template
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
        $__internal_16da4a7f32e2f6d936a8b390dbd44e3067e995d41a11fdc785b0db8efa6e3892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16da4a7f32e2f6d936a8b390dbd44e3067e995d41a11fdc785b0db8efa6e3892->enter($__internal_16da4a7f32e2f6d936a8b390dbd44e3067e995d41a11fdc785b0db8efa6e3892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_204b2a6d027bb15c6f8b3d94557102edb8de86dbdb23a293bcedc3144ebe42f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204b2a6d027bb15c6f8b3d94557102edb8de86dbdb23a293bcedc3144ebe42f6->enter($__internal_204b2a6d027bb15c6f8b3d94557102edb8de86dbdb23a293bcedc3144ebe42f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_16da4a7f32e2f6d936a8b390dbd44e3067e995d41a11fdc785b0db8efa6e3892->leave($__internal_16da4a7f32e2f6d936a8b390dbd44e3067e995d41a11fdc785b0db8efa6e3892_prof);

        
        $__internal_204b2a6d027bb15c6f8b3d94557102edb8de86dbdb23a293bcedc3144ebe42f6->leave($__internal_204b2a6d027bb15c6f8b3d94557102edb8de86dbdb23a293bcedc3144ebe42f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
