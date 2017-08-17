<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_31efecd6dd12acbcb6aad0e40dea57664c00e9b706216f4ffa1c3c36d8302dfd extends Twig_Template
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
        $__internal_60ef9928d272b49cc1af3832a97aff712357b45c7700548838d0a5da8c800679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ef9928d272b49cc1af3832a97aff712357b45c7700548838d0a5da8c800679->enter($__internal_60ef9928d272b49cc1af3832a97aff712357b45c7700548838d0a5da8c800679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_229f07ae365b728ba594ef7f1413100aaff1fe5368f24703c43e5dd0987ac24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229f07ae365b728ba594ef7f1413100aaff1fe5368f24703c43e5dd0987ac24f->enter($__internal_229f07ae365b728ba594ef7f1413100aaff1fe5368f24703c43e5dd0987ac24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_60ef9928d272b49cc1af3832a97aff712357b45c7700548838d0a5da8c800679->leave($__internal_60ef9928d272b49cc1af3832a97aff712357b45c7700548838d0a5da8c800679_prof);

        
        $__internal_229f07ae365b728ba594ef7f1413100aaff1fe5368f24703c43e5dd0987ac24f->leave($__internal_229f07ae365b728ba594ef7f1413100aaff1fe5368f24703c43e5dd0987ac24f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
