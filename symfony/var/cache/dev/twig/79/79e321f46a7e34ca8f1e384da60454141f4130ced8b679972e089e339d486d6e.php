<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_bcaa23192f2c2954519b208ac0576e49edbbc4f6a68a0ee6deb23dafb013ebb8 extends Twig_Template
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
        $__internal_f7a93bab16540e65bf27e260e476bf076ea896bc825bf278c75e8570756e5652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a93bab16540e65bf27e260e476bf076ea896bc825bf278c75e8570756e5652->enter($__internal_f7a93bab16540e65bf27e260e476bf076ea896bc825bf278c75e8570756e5652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9759f0722325a2348e5aaef9461c165b469730847c73689b3d03b6f9a4eb3152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9759f0722325a2348e5aaef9461c165b469730847c73689b3d03b6f9a4eb3152->enter($__internal_9759f0722325a2348e5aaef9461c165b469730847c73689b3d03b6f9a4eb3152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f7a93bab16540e65bf27e260e476bf076ea896bc825bf278c75e8570756e5652->leave($__internal_f7a93bab16540e65bf27e260e476bf076ea896bc825bf278c75e8570756e5652_prof);

        
        $__internal_9759f0722325a2348e5aaef9461c165b469730847c73689b3d03b6f9a4eb3152->leave($__internal_9759f0722325a2348e5aaef9461c165b469730847c73689b3d03b6f9a4eb3152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
