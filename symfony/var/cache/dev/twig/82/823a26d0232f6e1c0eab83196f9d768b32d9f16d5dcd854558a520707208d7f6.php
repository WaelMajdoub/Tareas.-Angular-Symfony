<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a45e54f3c84ef2ff0e825538d7a2a77b94b03de6147f54b0ca9a2ae2da8f73f2 extends Twig_Template
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
        $__internal_06f182434694646bf56b8ea9bd1eb872fc4eb75989dd4d6a78c0c8fcece788af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f182434694646bf56b8ea9bd1eb872fc4eb75989dd4d6a78c0c8fcece788af->enter($__internal_06f182434694646bf56b8ea9bd1eb872fc4eb75989dd4d6a78c0c8fcece788af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_42eba10312864831fdd841b91152fb2c83e82b0ac0902d5aa26c0f05f2d12852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42eba10312864831fdd841b91152fb2c83e82b0ac0902d5aa26c0f05f2d12852->enter($__internal_42eba10312864831fdd841b91152fb2c83e82b0ac0902d5aa26c0f05f2d12852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_06f182434694646bf56b8ea9bd1eb872fc4eb75989dd4d6a78c0c8fcece788af->leave($__internal_06f182434694646bf56b8ea9bd1eb872fc4eb75989dd4d6a78c0c8fcece788af_prof);

        
        $__internal_42eba10312864831fdd841b91152fb2c83e82b0ac0902d5aa26c0f05f2d12852->leave($__internal_42eba10312864831fdd841b91152fb2c83e82b0ac0902d5aa26c0f05f2d12852_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
