<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8f1963083ade3f1a193be5a3f76bf464dfa35a073af01285165abf193851a6b6 extends Twig_Template
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
        $__internal_a9280248ba49724e80c981c4af0e08bb29101b44b837486f8b5f9dd2c51664f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9280248ba49724e80c981c4af0e08bb29101b44b837486f8b5f9dd2c51664f5->enter($__internal_a9280248ba49724e80c981c4af0e08bb29101b44b837486f8b5f9dd2c51664f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_013a9b2fff911a37609aed3b89782961a53f48242706f8c1dcd110dc2b6b4060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013a9b2fff911a37609aed3b89782961a53f48242706f8c1dcd110dc2b6b4060->enter($__internal_013a9b2fff911a37609aed3b89782961a53f48242706f8c1dcd110dc2b6b4060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a9280248ba49724e80c981c4af0e08bb29101b44b837486f8b5f9dd2c51664f5->leave($__internal_a9280248ba49724e80c981c4af0e08bb29101b44b837486f8b5f9dd2c51664f5_prof);

        
        $__internal_013a9b2fff911a37609aed3b89782961a53f48242706f8c1dcd110dc2b6b4060->leave($__internal_013a9b2fff911a37609aed3b89782961a53f48242706f8c1dcd110dc2b6b4060_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
