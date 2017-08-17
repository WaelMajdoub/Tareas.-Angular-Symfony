<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_904d82eb793b46c350b829595ca3cfc16e4fce045382891ebe625fff131077f4 extends Twig_Template
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
        $__internal_8be31dccecb8ade51531ea3e813427f724b765c3ba766919e103f8d265b3abc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be31dccecb8ade51531ea3e813427f724b765c3ba766919e103f8d265b3abc6->enter($__internal_8be31dccecb8ade51531ea3e813427f724b765c3ba766919e103f8d265b3abc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d5a3810f634e8958fe8c2bab15a751655e02f1cd2d855a7a5307eb8f89c93a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a3810f634e8958fe8c2bab15a751655e02f1cd2d855a7a5307eb8f89c93a6d->enter($__internal_d5a3810f634e8958fe8c2bab15a751655e02f1cd2d855a7a5307eb8f89c93a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8be31dccecb8ade51531ea3e813427f724b765c3ba766919e103f8d265b3abc6->leave($__internal_8be31dccecb8ade51531ea3e813427f724b765c3ba766919e103f8d265b3abc6_prof);

        
        $__internal_d5a3810f634e8958fe8c2bab15a751655e02f1cd2d855a7a5307eb8f89c93a6d->leave($__internal_d5a3810f634e8958fe8c2bab15a751655e02f1cd2d855a7a5307eb8f89c93a6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
