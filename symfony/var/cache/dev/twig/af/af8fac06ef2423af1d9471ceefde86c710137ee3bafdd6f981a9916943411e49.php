<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bbb5365bdb0a55bb57f92500c03a7ac99eebe01c15d426cbbd8405ac49302b0a extends Twig_Template
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
        $__internal_0d3cd3620b1e2b48484c2f146b99af8dfc35e0e99cce1897435acb7882e0338a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3cd3620b1e2b48484c2f146b99af8dfc35e0e99cce1897435acb7882e0338a->enter($__internal_0d3cd3620b1e2b48484c2f146b99af8dfc35e0e99cce1897435acb7882e0338a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_740a79cd1f7abc9023500fc4e895dd9d6897827ce120ac0572ac7af4bb300bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740a79cd1f7abc9023500fc4e895dd9d6897827ce120ac0572ac7af4bb300bbd->enter($__internal_740a79cd1f7abc9023500fc4e895dd9d6897827ce120ac0572ac7af4bb300bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0d3cd3620b1e2b48484c2f146b99af8dfc35e0e99cce1897435acb7882e0338a->leave($__internal_0d3cd3620b1e2b48484c2f146b99af8dfc35e0e99cce1897435acb7882e0338a_prof);

        
        $__internal_740a79cd1f7abc9023500fc4e895dd9d6897827ce120ac0572ac7af4bb300bbd->leave($__internal_740a79cd1f7abc9023500fc4e895dd9d6897827ce120ac0572ac7af4bb300bbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
