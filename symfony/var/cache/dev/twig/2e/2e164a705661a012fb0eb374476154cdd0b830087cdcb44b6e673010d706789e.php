<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_20f24b94714a77544fda642ce7a9b774f3a318cdb91a7383a6b76fd694940064 extends Twig_Template
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
        $__internal_2a822b1c4dcfabc17c9e842023930bb93e764b3bf794c28f7ee046e1778e3730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a822b1c4dcfabc17c9e842023930bb93e764b3bf794c28f7ee046e1778e3730->enter($__internal_2a822b1c4dcfabc17c9e842023930bb93e764b3bf794c28f7ee046e1778e3730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4019c3fe01e17795548ca3ef43eda4380e45d044a87fe84a197a044f16828009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4019c3fe01e17795548ca3ef43eda4380e45d044a87fe84a197a044f16828009->enter($__internal_4019c3fe01e17795548ca3ef43eda4380e45d044a87fe84a197a044f16828009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2a822b1c4dcfabc17c9e842023930bb93e764b3bf794c28f7ee046e1778e3730->leave($__internal_2a822b1c4dcfabc17c9e842023930bb93e764b3bf794c28f7ee046e1778e3730_prof);

        
        $__internal_4019c3fe01e17795548ca3ef43eda4380e45d044a87fe84a197a044f16828009->leave($__internal_4019c3fe01e17795548ca3ef43eda4380e45d044a87fe84a197a044f16828009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
