<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_c81e8b0e8e4ee5e6afe88b1396b90b67313556b4fba866b7f73aa922e680a33f extends Twig_Template
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
        $__internal_869be318e5ec197af5a11d101013772a2c1aa597b1e7d5f00524ff8b830cbae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869be318e5ec197af5a11d101013772a2c1aa597b1e7d5f00524ff8b830cbae9->enter($__internal_869be318e5ec197af5a11d101013772a2c1aa597b1e7d5f00524ff8b830cbae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_8adf17d318fced9ead59e4077acf6840ba7333ef1a7c5c1c0f3377b53b4603ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adf17d318fced9ead59e4077acf6840ba7333ef1a7c5c1c0f3377b53b4603ba->enter($__internal_8adf17d318fced9ead59e4077acf6840ba7333ef1a7c5c1c0f3377b53b4603ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_869be318e5ec197af5a11d101013772a2c1aa597b1e7d5f00524ff8b830cbae9->leave($__internal_869be318e5ec197af5a11d101013772a2c1aa597b1e7d5f00524ff8b830cbae9_prof);

        
        $__internal_8adf17d318fced9ead59e4077acf6840ba7333ef1a7c5c1c0f3377b53b4603ba->leave($__internal_8adf17d318fced9ead59e4077acf6840ba7333ef1a7c5c1c0f3377b53b4603ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
