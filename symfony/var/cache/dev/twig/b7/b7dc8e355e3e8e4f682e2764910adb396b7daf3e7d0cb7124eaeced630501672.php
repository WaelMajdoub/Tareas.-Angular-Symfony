<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9d40ce237255f8c81ec0bcf75e1e5ba75b890ff97164d9ba0b35cfcb4053ca2e extends Twig_Template
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
        $__internal_e6b03f734c1580977f3080536e105e09363e8bef6f6b7071efd25bcb82b1bc8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b03f734c1580977f3080536e105e09363e8bef6f6b7071efd25bcb82b1bc8a->enter($__internal_e6b03f734c1580977f3080536e105e09363e8bef6f6b7071efd25bcb82b1bc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_14bbc9f07bd16a034c1914f8c641cbe845faf43c6b6ad0b2f01581d0a521fc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bbc9f07bd16a034c1914f8c641cbe845faf43c6b6ad0b2f01581d0a521fc61->enter($__internal_14bbc9f07bd16a034c1914f8c641cbe845faf43c6b6ad0b2f01581d0a521fc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e6b03f734c1580977f3080536e105e09363e8bef6f6b7071efd25bcb82b1bc8a->leave($__internal_e6b03f734c1580977f3080536e105e09363e8bef6f6b7071efd25bcb82b1bc8a_prof);

        
        $__internal_14bbc9f07bd16a034c1914f8c641cbe845faf43c6b6ad0b2f01581d0a521fc61->leave($__internal_14bbc9f07bd16a034c1914f8c641cbe845faf43c6b6ad0b2f01581d0a521fc61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
