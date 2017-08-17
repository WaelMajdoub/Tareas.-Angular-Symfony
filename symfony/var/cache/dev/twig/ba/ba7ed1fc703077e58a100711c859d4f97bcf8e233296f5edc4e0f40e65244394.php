<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_39acb828524aab533a4096d744fe587ec1903a44c1e06119388fc98459b1c91e extends Twig_Template
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
        $__internal_df6455bb817ad9284a84df9710916c6d8b27f05d97529f0e52281b4dcd40a20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6455bb817ad9284a84df9710916c6d8b27f05d97529f0e52281b4dcd40a20e->enter($__internal_df6455bb817ad9284a84df9710916c6d8b27f05d97529f0e52281b4dcd40a20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f2d5c40f9c4629be4c461a9ba6ee247e44647c1c29be2b0f7b25e9f957c008d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d5c40f9c4629be4c461a9ba6ee247e44647c1c29be2b0f7b25e9f957c008d3->enter($__internal_f2d5c40f9c4629be4c461a9ba6ee247e44647c1c29be2b0f7b25e9f957c008d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df6455bb817ad9284a84df9710916c6d8b27f05d97529f0e52281b4dcd40a20e->leave($__internal_df6455bb817ad9284a84df9710916c6d8b27f05d97529f0e52281b4dcd40a20e_prof);

        
        $__internal_f2d5c40f9c4629be4c461a9ba6ee247e44647c1c29be2b0f7b25e9f957c008d3->leave($__internal_f2d5c40f9c4629be4c461a9ba6ee247e44647c1c29be2b0f7b25e9f957c008d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
