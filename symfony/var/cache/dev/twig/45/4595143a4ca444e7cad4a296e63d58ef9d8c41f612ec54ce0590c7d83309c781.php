<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_07fda0092ee1f600220db544a3f2a7f05be84450edfc520a281b97ea3d508579 extends Twig_Template
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
        $__internal_d36d6a7edbadeba9cd48c56713089c8063812ff693b878dddeaf27d0f8dc90ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36d6a7edbadeba9cd48c56713089c8063812ff693b878dddeaf27d0f8dc90ea->enter($__internal_d36d6a7edbadeba9cd48c56713089c8063812ff693b878dddeaf27d0f8dc90ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4778c03ab082744d5276489b548f4ad690e780147e05981b8abfbbfbbab9b836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4778c03ab082744d5276489b548f4ad690e780147e05981b8abfbbfbbab9b836->enter($__internal_4778c03ab082744d5276489b548f4ad690e780147e05981b8abfbbfbbab9b836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d36d6a7edbadeba9cd48c56713089c8063812ff693b878dddeaf27d0f8dc90ea->leave($__internal_d36d6a7edbadeba9cd48c56713089c8063812ff693b878dddeaf27d0f8dc90ea_prof);

        
        $__internal_4778c03ab082744d5276489b548f4ad690e780147e05981b8abfbbfbbab9b836->leave($__internal_4778c03ab082744d5276489b548f4ad690e780147e05981b8abfbbfbbab9b836_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
