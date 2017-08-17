<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_800cb64264b5ddf0bb570fdc79124806270aa3a9ea12074621dd29fda6d334e7 extends Twig_Template
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
        $__internal_6d03d3d9476bae75023e4f5600d84f46cc1ca32374e669a74a5eb748e06572b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d03d3d9476bae75023e4f5600d84f46cc1ca32374e669a74a5eb748e06572b8->enter($__internal_6d03d3d9476bae75023e4f5600d84f46cc1ca32374e669a74a5eb748e06572b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e151969e8f75263ca7daa33750d4871b3c041fb854fd07cd66e6ce890d4f6b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e151969e8f75263ca7daa33750d4871b3c041fb854fd07cd66e6ce890d4f6b47->enter($__internal_e151969e8f75263ca7daa33750d4871b3c041fb854fd07cd66e6ce890d4f6b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6d03d3d9476bae75023e4f5600d84f46cc1ca32374e669a74a5eb748e06572b8->leave($__internal_6d03d3d9476bae75023e4f5600d84f46cc1ca32374e669a74a5eb748e06572b8_prof);

        
        $__internal_e151969e8f75263ca7daa33750d4871b3c041fb854fd07cd66e6ce890d4f6b47->leave($__internal_e151969e8f75263ca7daa33750d4871b3c041fb854fd07cd66e6ce890d4f6b47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
