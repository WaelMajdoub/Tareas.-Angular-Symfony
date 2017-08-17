<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_86f962a1cb07da8c20079459b730ecaf22c1484d43e9d4e7f0c93c99d8c3d649 extends Twig_Template
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
        $__internal_3af6b30f7cb9656037e54844b40747371b505b4777db641d40c4ce8066c396b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af6b30f7cb9656037e54844b40747371b505b4777db641d40c4ce8066c396b5->enter($__internal_3af6b30f7cb9656037e54844b40747371b505b4777db641d40c4ce8066c396b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_317d1896ea36fd2215556bc5f7e6a6105901d48ae32fa7c71429d4f3260b3d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317d1896ea36fd2215556bc5f7e6a6105901d48ae32fa7c71429d4f3260b3d41->enter($__internal_317d1896ea36fd2215556bc5f7e6a6105901d48ae32fa7c71429d4f3260b3d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3af6b30f7cb9656037e54844b40747371b505b4777db641d40c4ce8066c396b5->leave($__internal_3af6b30f7cb9656037e54844b40747371b505b4777db641d40c4ce8066c396b5_prof);

        
        $__internal_317d1896ea36fd2215556bc5f7e6a6105901d48ae32fa7c71429d4f3260b3d41->leave($__internal_317d1896ea36fd2215556bc5f7e6a6105901d48ae32fa7c71429d4f3260b3d41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
