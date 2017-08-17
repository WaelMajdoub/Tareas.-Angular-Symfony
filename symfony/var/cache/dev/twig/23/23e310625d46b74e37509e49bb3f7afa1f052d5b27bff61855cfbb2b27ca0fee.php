<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6cb4029d7ce74b886366158995f5b737b2c0b94c09a33e36c5b99bd76f097623 extends Twig_Template
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
        $__internal_534a6e0a1a6bc5e24e4b8908458b034af0bbb8986fe7ba5413e509deb123ba03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534a6e0a1a6bc5e24e4b8908458b034af0bbb8986fe7ba5413e509deb123ba03->enter($__internal_534a6e0a1a6bc5e24e4b8908458b034af0bbb8986fe7ba5413e509deb123ba03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0594702a90d1d8a8c5e7c145b6b677966ddb2662e5d809e8a4dd873dad8906a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0594702a90d1d8a8c5e7c145b6b677966ddb2662e5d809e8a4dd873dad8906a1->enter($__internal_0594702a90d1d8a8c5e7c145b6b677966ddb2662e5d809e8a4dd873dad8906a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_534a6e0a1a6bc5e24e4b8908458b034af0bbb8986fe7ba5413e509deb123ba03->leave($__internal_534a6e0a1a6bc5e24e4b8908458b034af0bbb8986fe7ba5413e509deb123ba03_prof);

        
        $__internal_0594702a90d1d8a8c5e7c145b6b677966ddb2662e5d809e8a4dd873dad8906a1->leave($__internal_0594702a90d1d8a8c5e7c145b6b677966ddb2662e5d809e8a4dd873dad8906a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
