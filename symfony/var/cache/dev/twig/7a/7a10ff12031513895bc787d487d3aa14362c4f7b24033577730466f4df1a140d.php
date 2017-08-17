<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8f9f4469d41c4150d9235f091a80795560e1ac082e6513879284af699f42f780 extends Twig_Template
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
        $__internal_b9c51996b899857faeaa82daa21e44f8b3e90cd797f8ab6577ee86dce97582e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c51996b899857faeaa82daa21e44f8b3e90cd797f8ab6577ee86dce97582e1->enter($__internal_b9c51996b899857faeaa82daa21e44f8b3e90cd797f8ab6577ee86dce97582e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c7f4546352d2172e1400f140452051c82887519a64a4057a0da03f63ce1dc271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f4546352d2172e1400f140452051c82887519a64a4057a0da03f63ce1dc271->enter($__internal_c7f4546352d2172e1400f140452051c82887519a64a4057a0da03f63ce1dc271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b9c51996b899857faeaa82daa21e44f8b3e90cd797f8ab6577ee86dce97582e1->leave($__internal_b9c51996b899857faeaa82daa21e44f8b3e90cd797f8ab6577ee86dce97582e1_prof);

        
        $__internal_c7f4546352d2172e1400f140452051c82887519a64a4057a0da03f63ce1dc271->leave($__internal_c7f4546352d2172e1400f140452051c82887519a64a4057a0da03f63ce1dc271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
