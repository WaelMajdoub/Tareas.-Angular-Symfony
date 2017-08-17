<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b61f10c4a83a9ae158c58bbd4264108424cc164a40d6d2642fc7bf680436f909 extends Twig_Template
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
        $__internal_97f2b6ad860deff917a896dd7ad1907be05cc0f94045393ec942d9e90998cf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f2b6ad860deff917a896dd7ad1907be05cc0f94045393ec942d9e90998cf6e->enter($__internal_97f2b6ad860deff917a896dd7ad1907be05cc0f94045393ec942d9e90998cf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7da4c38f4e1f326f91df82000f25ecd490b69691cb23d1a3cabf536643070656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da4c38f4e1f326f91df82000f25ecd490b69691cb23d1a3cabf536643070656->enter($__internal_7da4c38f4e1f326f91df82000f25ecd490b69691cb23d1a3cabf536643070656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_97f2b6ad860deff917a896dd7ad1907be05cc0f94045393ec942d9e90998cf6e->leave($__internal_97f2b6ad860deff917a896dd7ad1907be05cc0f94045393ec942d9e90998cf6e_prof);

        
        $__internal_7da4c38f4e1f326f91df82000f25ecd490b69691cb23d1a3cabf536643070656->leave($__internal_7da4c38f4e1f326f91df82000f25ecd490b69691cb23d1a3cabf536643070656_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
