<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_c8fd8f2cab417cbe4fb33b658197e39455c2059f416aab0dc327f60322c6e828 extends Twig_Template
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
        $__internal_6208d951c60f651681135823dc274a356824b62d2fd08c226cbbd74c1e47d1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6208d951c60f651681135823dc274a356824b62d2fd08c226cbbd74c1e47d1f2->enter($__internal_6208d951c60f651681135823dc274a356824b62d2fd08c226cbbd74c1e47d1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_7cdf42cd5e329c3889bd1e0a1f0cd20a872ccb0471c4005bbe43e78d88ce7918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdf42cd5e329c3889bd1e0a1f0cd20a872ccb0471c4005bbe43e78d88ce7918->enter($__internal_7cdf42cd5e329c3889bd1e0a1f0cd20a872ccb0471c4005bbe43e78d88ce7918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_6208d951c60f651681135823dc274a356824b62d2fd08c226cbbd74c1e47d1f2->leave($__internal_6208d951c60f651681135823dc274a356824b62d2fd08c226cbbd74c1e47d1f2_prof);

        
        $__internal_7cdf42cd5e329c3889bd1e0a1f0cd20a872ccb0471c4005bbe43e78d88ce7918->leave($__internal_7cdf42cd5e329c3889bd1e0a1f0cd20a872ccb0471c4005bbe43e78d88ce7918_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
