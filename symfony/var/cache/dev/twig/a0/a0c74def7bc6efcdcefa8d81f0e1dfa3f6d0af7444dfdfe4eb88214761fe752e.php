<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4cb0a4f0803a54f9acbc65118686cd6b361eaf90f384002e0252588b9615a1be extends Twig_Template
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
        $__internal_d18cdce33d3c432dc370390e8d7f13de7ede00549cc619838bf77134db8020dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18cdce33d3c432dc370390e8d7f13de7ede00549cc619838bf77134db8020dc->enter($__internal_d18cdce33d3c432dc370390e8d7f13de7ede00549cc619838bf77134db8020dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ece93fa06928fef919d96a0b7ae54cbc3be5c7b7af5e218c5e5a57600b1db9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece93fa06928fef919d96a0b7ae54cbc3be5c7b7af5e218c5e5a57600b1db9ba->enter($__internal_ece93fa06928fef919d96a0b7ae54cbc3be5c7b7af5e218c5e5a57600b1db9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d18cdce33d3c432dc370390e8d7f13de7ede00549cc619838bf77134db8020dc->leave($__internal_d18cdce33d3c432dc370390e8d7f13de7ede00549cc619838bf77134db8020dc_prof);

        
        $__internal_ece93fa06928fef919d96a0b7ae54cbc3be5c7b7af5e218c5e5a57600b1db9ba->leave($__internal_ece93fa06928fef919d96a0b7ae54cbc3be5c7b7af5e218c5e5a57600b1db9ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
