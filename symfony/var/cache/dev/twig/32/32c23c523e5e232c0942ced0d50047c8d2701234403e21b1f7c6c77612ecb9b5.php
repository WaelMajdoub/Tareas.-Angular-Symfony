<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_580c239a1d30a156ffbd18f61c6a9d4f4076d4945eb1a3de94bfda9b33d1ab56 extends Twig_Template
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
        $__internal_df1f96b9934b3b1ffd9e553807b13ed25e1e560b4f196e42a5d149d9da22e6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1f96b9934b3b1ffd9e553807b13ed25e1e560b4f196e42a5d149d9da22e6d4->enter($__internal_df1f96b9934b3b1ffd9e553807b13ed25e1e560b4f196e42a5d149d9da22e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_937f1f73cd7b8a8126d6a04c9cecaf08f61b3c3649c84500aac71b784d74c8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937f1f73cd7b8a8126d6a04c9cecaf08f61b3c3649c84500aac71b784d74c8e2->enter($__internal_937f1f73cd7b8a8126d6a04c9cecaf08f61b3c3649c84500aac71b784d74c8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_df1f96b9934b3b1ffd9e553807b13ed25e1e560b4f196e42a5d149d9da22e6d4->leave($__internal_df1f96b9934b3b1ffd9e553807b13ed25e1e560b4f196e42a5d149d9da22e6d4_prof);

        
        $__internal_937f1f73cd7b8a8126d6a04c9cecaf08f61b3c3649c84500aac71b784d74c8e2->leave($__internal_937f1f73cd7b8a8126d6a04c9cecaf08f61b3c3649c84500aac71b784d74c8e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
