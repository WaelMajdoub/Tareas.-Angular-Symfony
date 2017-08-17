<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c977c9f620ba21ebb187184404c9d7e4582d923acd69c82a35e1e2c3bf61af53 extends Twig_Template
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
        $__internal_098dd1284898a34ba27768a8a6aeba753dbc1c9d1ba0f37173c7532b3674bbba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098dd1284898a34ba27768a8a6aeba753dbc1c9d1ba0f37173c7532b3674bbba->enter($__internal_098dd1284898a34ba27768a8a6aeba753dbc1c9d1ba0f37173c7532b3674bbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f89f05c2d767324fe1e06d3776c8246ead3c542d4886c56e449f86f069e0a223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89f05c2d767324fe1e06d3776c8246ead3c542d4886c56e449f86f069e0a223->enter($__internal_f89f05c2d767324fe1e06d3776c8246ead3c542d4886c56e449f86f069e0a223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_098dd1284898a34ba27768a8a6aeba753dbc1c9d1ba0f37173c7532b3674bbba->leave($__internal_098dd1284898a34ba27768a8a6aeba753dbc1c9d1ba0f37173c7532b3674bbba_prof);

        
        $__internal_f89f05c2d767324fe1e06d3776c8246ead3c542d4886c56e449f86f069e0a223->leave($__internal_f89f05c2d767324fe1e06d3776c8246ead3c542d4886c56e449f86f069e0a223_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
