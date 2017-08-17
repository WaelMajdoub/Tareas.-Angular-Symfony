<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f0010d1a9d518966b7ada61791ef98c0ff145c8634eb4eb195eb2bcc8c24b0d1 extends Twig_Template
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
        $__internal_b2a471947b711cdba903edc611543e66f45526987951069c0ec027d96484bd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a471947b711cdba903edc611543e66f45526987951069c0ec027d96484bd2b->enter($__internal_b2a471947b711cdba903edc611543e66f45526987951069c0ec027d96484bd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b5861d1f7d3b4f4d9a82c64549b1c753b1d98b489085245559d644aeb0aff1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5861d1f7d3b4f4d9a82c64549b1c753b1d98b489085245559d644aeb0aff1e9->enter($__internal_b5861d1f7d3b4f4d9a82c64549b1c753b1d98b489085245559d644aeb0aff1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b2a471947b711cdba903edc611543e66f45526987951069c0ec027d96484bd2b->leave($__internal_b2a471947b711cdba903edc611543e66f45526987951069c0ec027d96484bd2b_prof);

        
        $__internal_b5861d1f7d3b4f4d9a82c64549b1c753b1d98b489085245559d644aeb0aff1e9->leave($__internal_b5861d1f7d3b4f4d9a82c64549b1c753b1d98b489085245559d644aeb0aff1e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
