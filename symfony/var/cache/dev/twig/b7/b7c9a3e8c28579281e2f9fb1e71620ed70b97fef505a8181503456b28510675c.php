<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_22741c9eaf5ea03d5c73fac1e1f723138c9f6f39e3dcc697fd32bd2820cb89b5 extends Twig_Template
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
        $__internal_6709a7b2bda2be25d5750010b14775996d75d5e03d8b5f188cce10408d3a8ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6709a7b2bda2be25d5750010b14775996d75d5e03d8b5f188cce10408d3a8ee3->enter($__internal_6709a7b2bda2be25d5750010b14775996d75d5e03d8b5f188cce10408d3a8ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4791afcd86848bae5704fd51ac9bb80e543212b6b185d80973f190bd69eaea51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4791afcd86848bae5704fd51ac9bb80e543212b6b185d80973f190bd69eaea51->enter($__internal_4791afcd86848bae5704fd51ac9bb80e543212b6b185d80973f190bd69eaea51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6709a7b2bda2be25d5750010b14775996d75d5e03d8b5f188cce10408d3a8ee3->leave($__internal_6709a7b2bda2be25d5750010b14775996d75d5e03d8b5f188cce10408d3a8ee3_prof);

        
        $__internal_4791afcd86848bae5704fd51ac9bb80e543212b6b185d80973f190bd69eaea51->leave($__internal_4791afcd86848bae5704fd51ac9bb80e543212b6b185d80973f190bd69eaea51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
