<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_17c0f73a5dffb820cc94f1f4a94b84f038d84abaab0da2bba1482666a9d3fda7 extends Twig_Template
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
        $__internal_03ece11b16aa5f12d330fea38ecebef3802f8cae0fab5ddbef55d30c43191d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ece11b16aa5f12d330fea38ecebef3802f8cae0fab5ddbef55d30c43191d5c->enter($__internal_03ece11b16aa5f12d330fea38ecebef3802f8cae0fab5ddbef55d30c43191d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e6e1c08d1e3980009fd9ea22590caf5f4b3571985d315d51bca69ef1aa44ae0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e1c08d1e3980009fd9ea22590caf5f4b3571985d315d51bca69ef1aa44ae0f->enter($__internal_e6e1c08d1e3980009fd9ea22590caf5f4b3571985d315d51bca69ef1aa44ae0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_03ece11b16aa5f12d330fea38ecebef3802f8cae0fab5ddbef55d30c43191d5c->leave($__internal_03ece11b16aa5f12d330fea38ecebef3802f8cae0fab5ddbef55d30c43191d5c_prof);

        
        $__internal_e6e1c08d1e3980009fd9ea22590caf5f4b3571985d315d51bca69ef1aa44ae0f->leave($__internal_e6e1c08d1e3980009fd9ea22590caf5f4b3571985d315d51bca69ef1aa44ae0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
