<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7c6b15782474c9577e6ec5481e07bcb81ff7ee7043454880d742bf9a893792ee extends Twig_Template
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
        $__internal_cbd62417dec177afebf29e39adaa8d96e1119af4de6b0c773bb2d5c1b467d669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd62417dec177afebf29e39adaa8d96e1119af4de6b0c773bb2d5c1b467d669->enter($__internal_cbd62417dec177afebf29e39adaa8d96e1119af4de6b0c773bb2d5c1b467d669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6a74db9cf7b7f15c7d999975fcba6d359f668ebbb03120ced32022ec683da6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a74db9cf7b7f15c7d999975fcba6d359f668ebbb03120ced32022ec683da6f9->enter($__internal_6a74db9cf7b7f15c7d999975fcba6d359f668ebbb03120ced32022ec683da6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cbd62417dec177afebf29e39adaa8d96e1119af4de6b0c773bb2d5c1b467d669->leave($__internal_cbd62417dec177afebf29e39adaa8d96e1119af4de6b0c773bb2d5c1b467d669_prof);

        
        $__internal_6a74db9cf7b7f15c7d999975fcba6d359f668ebbb03120ced32022ec683da6f9->leave($__internal_6a74db9cf7b7f15c7d999975fcba6d359f668ebbb03120ced32022ec683da6f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
