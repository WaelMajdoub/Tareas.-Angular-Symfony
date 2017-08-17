<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_81d1512edff3653ba3ea7737ea4109cfb9cac368ce7f6ecdfd7c3d5c5fd59253 extends Twig_Template
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
        $__internal_57d7298d3b32bc96971b4e03d63c9cd8727dcd88e9118b20ccd16e765b261df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d7298d3b32bc96971b4e03d63c9cd8727dcd88e9118b20ccd16e765b261df2->enter($__internal_57d7298d3b32bc96971b4e03d63c9cd8727dcd88e9118b20ccd16e765b261df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7122b12d28604cb1fe0d5193578a27e2f701420a33e938c9ed6685c90cc04b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7122b12d28604cb1fe0d5193578a27e2f701420a33e938c9ed6685c90cc04b0c->enter($__internal_7122b12d28604cb1fe0d5193578a27e2f701420a33e938c9ed6685c90cc04b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_57d7298d3b32bc96971b4e03d63c9cd8727dcd88e9118b20ccd16e765b261df2->leave($__internal_57d7298d3b32bc96971b4e03d63c9cd8727dcd88e9118b20ccd16e765b261df2_prof);

        
        $__internal_7122b12d28604cb1fe0d5193578a27e2f701420a33e938c9ed6685c90cc04b0c->leave($__internal_7122b12d28604cb1fe0d5193578a27e2f701420a33e938c9ed6685c90cc04b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
