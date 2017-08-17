<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_aae4fea353e874b25804cf7b76f9bc168db2dfd48167e32d377218ebd7a9dee0 extends Twig_Template
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
        $__internal_5ce2f444dd67c71fb4e8f416c2eebc96737292dcd114fb04bd3e59b54bc5b4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce2f444dd67c71fb4e8f416c2eebc96737292dcd114fb04bd3e59b54bc5b4f2->enter($__internal_5ce2f444dd67c71fb4e8f416c2eebc96737292dcd114fb04bd3e59b54bc5b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_af3c86706a0fc476aec0de7f190c1f3d86e096e74df773b441abaec36256f94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3c86706a0fc476aec0de7f190c1f3d86e096e74df773b441abaec36256f94d->enter($__internal_af3c86706a0fc476aec0de7f190c1f3d86e096e74df773b441abaec36256f94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5ce2f444dd67c71fb4e8f416c2eebc96737292dcd114fb04bd3e59b54bc5b4f2->leave($__internal_5ce2f444dd67c71fb4e8f416c2eebc96737292dcd114fb04bd3e59b54bc5b4f2_prof);

        
        $__internal_af3c86706a0fc476aec0de7f190c1f3d86e096e74df773b441abaec36256f94d->leave($__internal_af3c86706a0fc476aec0de7f190c1f3d86e096e74df773b441abaec36256f94d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
