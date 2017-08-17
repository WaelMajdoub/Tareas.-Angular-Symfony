<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_30d291c5901ba6a69bd35f251ffe3ecb26f7fa4eb55f62b56b1ba6a1877cd09f extends Twig_Template
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
        $__internal_2555cc340edd238d44edb21f17b354c0fc1110b8b12c31b8284e640af0e84125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2555cc340edd238d44edb21f17b354c0fc1110b8b12c31b8284e640af0e84125->enter($__internal_2555cc340edd238d44edb21f17b354c0fc1110b8b12c31b8284e640af0e84125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7465144b35d82fdf3f5cd297bbabb56b331cc4aa7631bc7b41a1efd1f6a0b26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7465144b35d82fdf3f5cd297bbabb56b331cc4aa7631bc7b41a1efd1f6a0b26e->enter($__internal_7465144b35d82fdf3f5cd297bbabb56b331cc4aa7631bc7b41a1efd1f6a0b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2555cc340edd238d44edb21f17b354c0fc1110b8b12c31b8284e640af0e84125->leave($__internal_2555cc340edd238d44edb21f17b354c0fc1110b8b12c31b8284e640af0e84125_prof);

        
        $__internal_7465144b35d82fdf3f5cd297bbabb56b331cc4aa7631bc7b41a1efd1f6a0b26e->leave($__internal_7465144b35d82fdf3f5cd297bbabb56b331cc4aa7631bc7b41a1efd1f6a0b26e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
