<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0224a2181cc787c21ce396ea8f65ee7f9bc3c0b559ea9415e893fdf9c70ac939 extends Twig_Template
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
        $__internal_7cc31a783b52da997553d634a504880f712dac9376a0371cacf616d4c23c6292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc31a783b52da997553d634a504880f712dac9376a0371cacf616d4c23c6292->enter($__internal_7cc31a783b52da997553d634a504880f712dac9376a0371cacf616d4c23c6292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0bd4441c4600a58946734ee08bc41d6cf35735f3386621bffff4fbd4473f00d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd4441c4600a58946734ee08bc41d6cf35735f3386621bffff4fbd4473f00d1->enter($__internal_0bd4441c4600a58946734ee08bc41d6cf35735f3386621bffff4fbd4473f00d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7cc31a783b52da997553d634a504880f712dac9376a0371cacf616d4c23c6292->leave($__internal_7cc31a783b52da997553d634a504880f712dac9376a0371cacf616d4c23c6292_prof);

        
        $__internal_0bd4441c4600a58946734ee08bc41d6cf35735f3386621bffff4fbd4473f00d1->leave($__internal_0bd4441c4600a58946734ee08bc41d6cf35735f3386621bffff4fbd4473f00d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
