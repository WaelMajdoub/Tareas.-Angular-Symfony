<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_62d28f247c7950d786d8b6dbd80181f255d80bf822490bd848ee9831bf2b4285 extends Twig_Template
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
        $__internal_34f454f29bcddd5ddff2e48c1b66d9d43a2f81093e0fe51a403ed66ccaffa6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f454f29bcddd5ddff2e48c1b66d9d43a2f81093e0fe51a403ed66ccaffa6bd->enter($__internal_34f454f29bcddd5ddff2e48c1b66d9d43a2f81093e0fe51a403ed66ccaffa6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_fb17ae2a496065fced3b537fa3d9a533e42df69a525665e08b9a0faad3d1d11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb17ae2a496065fced3b537fa3d9a533e42df69a525665e08b9a0faad3d1d11a->enter($__internal_fb17ae2a496065fced3b537fa3d9a533e42df69a525665e08b9a0faad3d1d11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_34f454f29bcddd5ddff2e48c1b66d9d43a2f81093e0fe51a403ed66ccaffa6bd->leave($__internal_34f454f29bcddd5ddff2e48c1b66d9d43a2f81093e0fe51a403ed66ccaffa6bd_prof);

        
        $__internal_fb17ae2a496065fced3b537fa3d9a533e42df69a525665e08b9a0faad3d1d11a->leave($__internal_fb17ae2a496065fced3b537fa3d9a533e42df69a525665e08b9a0faad3d1d11a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
