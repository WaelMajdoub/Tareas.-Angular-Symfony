<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b586555a99f03cf08935e2bb4d0183c6c9288b48a58e69f10982b62dd9745c28 extends Twig_Template
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
        $__internal_8a60529a4b3327ba95dc3774d885b3dcd8e990df07477dd7404f83ada3e64806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a60529a4b3327ba95dc3774d885b3dcd8e990df07477dd7404f83ada3e64806->enter($__internal_8a60529a4b3327ba95dc3774d885b3dcd8e990df07477dd7404f83ada3e64806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bd709e978b7fc8d4b027fc386fc2772d1202d66f8721cbb8f40ca2ace85686b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd709e978b7fc8d4b027fc386fc2772d1202d66f8721cbb8f40ca2ace85686b8->enter($__internal_bd709e978b7fc8d4b027fc386fc2772d1202d66f8721cbb8f40ca2ace85686b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8a60529a4b3327ba95dc3774d885b3dcd8e990df07477dd7404f83ada3e64806->leave($__internal_8a60529a4b3327ba95dc3774d885b3dcd8e990df07477dd7404f83ada3e64806_prof);

        
        $__internal_bd709e978b7fc8d4b027fc386fc2772d1202d66f8721cbb8f40ca2ace85686b8->leave($__internal_bd709e978b7fc8d4b027fc386fc2772d1202d66f8721cbb8f40ca2ace85686b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
