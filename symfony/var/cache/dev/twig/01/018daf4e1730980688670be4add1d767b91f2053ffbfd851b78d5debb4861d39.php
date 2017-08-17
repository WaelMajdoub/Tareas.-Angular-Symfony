<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_152f6651f915e926e5f25cc9cbb641075cf486c76c5e7ce3593ab22515592527 extends Twig_Template
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
        $__internal_8f6222ef0aa9837d51b2da408b0c55282c2cf3911bfd850cf94ff1b578da8691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6222ef0aa9837d51b2da408b0c55282c2cf3911bfd850cf94ff1b578da8691->enter($__internal_8f6222ef0aa9837d51b2da408b0c55282c2cf3911bfd850cf94ff1b578da8691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_451afa6b9bf47d630183140a54946e8c0ce456f935cdca156b36f3fb2c14cd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451afa6b9bf47d630183140a54946e8c0ce456f935cdca156b36f3fb2c14cd89->enter($__internal_451afa6b9bf47d630183140a54946e8c0ce456f935cdca156b36f3fb2c14cd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8f6222ef0aa9837d51b2da408b0c55282c2cf3911bfd850cf94ff1b578da8691->leave($__internal_8f6222ef0aa9837d51b2da408b0c55282c2cf3911bfd850cf94ff1b578da8691_prof);

        
        $__internal_451afa6b9bf47d630183140a54946e8c0ce456f935cdca156b36f3fb2c14cd89->leave($__internal_451afa6b9bf47d630183140a54946e8c0ce456f935cdca156b36f3fb2c14cd89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
