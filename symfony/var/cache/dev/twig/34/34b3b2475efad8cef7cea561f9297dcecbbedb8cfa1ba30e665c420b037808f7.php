<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c4ee14704760435b8c8ad002e5304b9ea86fd97790bac43ac592766875f2ce48 extends Twig_Template
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
        $__internal_3b4444afd921dde13a8174b2669e92d5c6f6d119c74237bd86fabe2f123dbe06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4444afd921dde13a8174b2669e92d5c6f6d119c74237bd86fabe2f123dbe06->enter($__internal_3b4444afd921dde13a8174b2669e92d5c6f6d119c74237bd86fabe2f123dbe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a5382dfa2a554ed1242133ec261c3ba4d1d2e10eb6c0b3986875693e8733112d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5382dfa2a554ed1242133ec261c3ba4d1d2e10eb6c0b3986875693e8733112d->enter($__internal_a5382dfa2a554ed1242133ec261c3ba4d1d2e10eb6c0b3986875693e8733112d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3b4444afd921dde13a8174b2669e92d5c6f6d119c74237bd86fabe2f123dbe06->leave($__internal_3b4444afd921dde13a8174b2669e92d5c6f6d119c74237bd86fabe2f123dbe06_prof);

        
        $__internal_a5382dfa2a554ed1242133ec261c3ba4d1d2e10eb6c0b3986875693e8733112d->leave($__internal_a5382dfa2a554ed1242133ec261c3ba4d1d2e10eb6c0b3986875693e8733112d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
