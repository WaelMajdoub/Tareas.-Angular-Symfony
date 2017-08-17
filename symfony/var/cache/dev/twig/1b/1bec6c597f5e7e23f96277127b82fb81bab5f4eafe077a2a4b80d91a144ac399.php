<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d3efca7d76b826e0514de55783665519281714d37c7bf966e477747e234b35f0 extends Twig_Template
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
        $__internal_ebd69375842333c098e4b1aefa3333a96fcced6ef624762c6b3cf8c912b6ebb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd69375842333c098e4b1aefa3333a96fcced6ef624762c6b3cf8c912b6ebb1->enter($__internal_ebd69375842333c098e4b1aefa3333a96fcced6ef624762c6b3cf8c912b6ebb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9e796936b7ccafb3597c4bf4ecf76f4431cee75c3c95c1b774d2ba6342c1253e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e796936b7ccafb3597c4bf4ecf76f4431cee75c3c95c1b774d2ba6342c1253e->enter($__internal_9e796936b7ccafb3597c4bf4ecf76f4431cee75c3c95c1b774d2ba6342c1253e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ebd69375842333c098e4b1aefa3333a96fcced6ef624762c6b3cf8c912b6ebb1->leave($__internal_ebd69375842333c098e4b1aefa3333a96fcced6ef624762c6b3cf8c912b6ebb1_prof);

        
        $__internal_9e796936b7ccafb3597c4bf4ecf76f4431cee75c3c95c1b774d2ba6342c1253e->leave($__internal_9e796936b7ccafb3597c4bf4ecf76f4431cee75c3c95c1b774d2ba6342c1253e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
