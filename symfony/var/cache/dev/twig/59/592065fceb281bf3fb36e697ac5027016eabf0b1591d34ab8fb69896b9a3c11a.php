<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_eaa964982dcde3d2a3f0087e6347549b6c4162ac822a1a4da05dbea787a46003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cfb99341b7f42239d0d81e815a0f5d6cac1535f393498f3da0a4fc326da9f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfb99341b7f42239d0d81e815a0f5d6cac1535f393498f3da0a4fc326da9f40->enter($__internal_4cfb99341b7f42239d0d81e815a0f5d6cac1535f393498f3da0a4fc326da9f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f42b5ad25b136436d7b2cb0b3f042777cc60b6488a355702652516010d925e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42b5ad25b136436d7b2cb0b3f042777cc60b6488a355702652516010d925e7b->enter($__internal_f42b5ad25b136436d7b2cb0b3f042777cc60b6488a355702652516010d925e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cfb99341b7f42239d0d81e815a0f5d6cac1535f393498f3da0a4fc326da9f40->leave($__internal_4cfb99341b7f42239d0d81e815a0f5d6cac1535f393498f3da0a4fc326da9f40_prof);

        
        $__internal_f42b5ad25b136436d7b2cb0b3f042777cc60b6488a355702652516010d925e7b->leave($__internal_f42b5ad25b136436d7b2cb0b3f042777cc60b6488a355702652516010d925e7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6444f8da4e31688cd7d286f26e6c39049ea066d8f5ae81077f040fcce5d823b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6444f8da4e31688cd7d286f26e6c39049ea066d8f5ae81077f040fcce5d823b1->enter($__internal_6444f8da4e31688cd7d286f26e6c39049ea066d8f5ae81077f040fcce5d823b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f40e1dbdda091030e68b66e74b53822ea3c3645f136e6530dbcbe62f77949bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40e1dbdda091030e68b66e74b53822ea3c3645f136e6530dbcbe62f77949bee->enter($__internal_f40e1dbdda091030e68b66e74b53822ea3c3645f136e6530dbcbe62f77949bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f40e1dbdda091030e68b66e74b53822ea3c3645f136e6530dbcbe62f77949bee->leave($__internal_f40e1dbdda091030e68b66e74b53822ea3c3645f136e6530dbcbe62f77949bee_prof);

        
        $__internal_6444f8da4e31688cd7d286f26e6c39049ea066d8f5ae81077f040fcce5d823b1->leave($__internal_6444f8da4e31688cd7d286f26e6c39049ea066d8f5ae81077f040fcce5d823b1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_798644bf5b76a914e4099e83654f5c407f3d097b2494cc72da01fd1388931303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798644bf5b76a914e4099e83654f5c407f3d097b2494cc72da01fd1388931303->enter($__internal_798644bf5b76a914e4099e83654f5c407f3d097b2494cc72da01fd1388931303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5faa27cad095fef8082f35ec2e28337468774297245ffb47a6ad7c5aef40e993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5faa27cad095fef8082f35ec2e28337468774297245ffb47a6ad7c5aef40e993->enter($__internal_5faa27cad095fef8082f35ec2e28337468774297245ffb47a6ad7c5aef40e993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_5faa27cad095fef8082f35ec2e28337468774297245ffb47a6ad7c5aef40e993->leave($__internal_5faa27cad095fef8082f35ec2e28337468774297245ffb47a6ad7c5aef40e993_prof);

        
        $__internal_798644bf5b76a914e4099e83654f5c407f3d097b2494cc72da01fd1388931303->leave($__internal_798644bf5b76a914e4099e83654f5c407f3d097b2494cc72da01fd1388931303_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
