<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_779f2cd421076ae084e09fc015b5ffa524fc3c26f066e9301ae1e042c99b5272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c00a6820d5dc99560f492095b9b0f4e10689642239ef74cfea7b26515b47f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c00a6820d5dc99560f492095b9b0f4e10689642239ef74cfea7b26515b47f7c->enter($__internal_1c00a6820d5dc99560f492095b9b0f4e10689642239ef74cfea7b26515b47f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c439cf50ab9d880b7dc1966978e974c1cdd748fa27516d009f7a8c216a519679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c439cf50ab9d880b7dc1966978e974c1cdd748fa27516d009f7a8c216a519679->enter($__internal_c439cf50ab9d880b7dc1966978e974c1cdd748fa27516d009f7a8c216a519679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c00a6820d5dc99560f492095b9b0f4e10689642239ef74cfea7b26515b47f7c->leave($__internal_1c00a6820d5dc99560f492095b9b0f4e10689642239ef74cfea7b26515b47f7c_prof);

        
        $__internal_c439cf50ab9d880b7dc1966978e974c1cdd748fa27516d009f7a8c216a519679->leave($__internal_c439cf50ab9d880b7dc1966978e974c1cdd748fa27516d009f7a8c216a519679_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cdd25a47d10a48525191e86c95f26d7e6f14cd1d3f0e8d53a3edcb2948adee25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd25a47d10a48525191e86c95f26d7e6f14cd1d3f0e8d53a3edcb2948adee25->enter($__internal_cdd25a47d10a48525191e86c95f26d7e6f14cd1d3f0e8d53a3edcb2948adee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e665f25f0f0312065611b5105a1e76454a1a486c1b39f07f9dc2b6386d3fd3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e665f25f0f0312065611b5105a1e76454a1a486c1b39f07f9dc2b6386d3fd3b->enter($__internal_3e665f25f0f0312065611b5105a1e76454a1a486c1b39f07f9dc2b6386d3fd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e665f25f0f0312065611b5105a1e76454a1a486c1b39f07f9dc2b6386d3fd3b->leave($__internal_3e665f25f0f0312065611b5105a1e76454a1a486c1b39f07f9dc2b6386d3fd3b_prof);

        
        $__internal_cdd25a47d10a48525191e86c95f26d7e6f14cd1d3f0e8d53a3edcb2948adee25->leave($__internal_cdd25a47d10a48525191e86c95f26d7e6f14cd1d3f0e8d53a3edcb2948adee25_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a4b9e892092c6115de201c3ffe7e2e97092fdfe6d28d78a6e088b6c413a6185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4b9e892092c6115de201c3ffe7e2e97092fdfe6d28d78a6e088b6c413a6185->enter($__internal_3a4b9e892092c6115de201c3ffe7e2e97092fdfe6d28d78a6e088b6c413a6185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab2b08febd1201c8315bbcca0488e90fec23be21dde49ff7ef5d4af3f90c0dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2b08febd1201c8315bbcca0488e90fec23be21dde49ff7ef5d4af3f90c0dfb->enter($__internal_ab2b08febd1201c8315bbcca0488e90fec23be21dde49ff7ef5d4af3f90c0dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab2b08febd1201c8315bbcca0488e90fec23be21dde49ff7ef5d4af3f90c0dfb->leave($__internal_ab2b08febd1201c8315bbcca0488e90fec23be21dde49ff7ef5d4af3f90c0dfb_prof);

        
        $__internal_3a4b9e892092c6115de201c3ffe7e2e97092fdfe6d28d78a6e088b6c413a6185->leave($__internal_3a4b9e892092c6115de201c3ffe7e2e97092fdfe6d28d78a6e088b6c413a6185_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23ab7599b1171d4d0f82fa966268e7daa312d419a0e73cb1f4c57a596a53c506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ab7599b1171d4d0f82fa966268e7daa312d419a0e73cb1f4c57a596a53c506->enter($__internal_23ab7599b1171d4d0f82fa966268e7daa312d419a0e73cb1f4c57a596a53c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fbd3ec6d31368c81d35bb14e11d5f6acc7b18bbf3c2c6f38ab6162902a614d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbd3ec6d31368c81d35bb14e11d5f6acc7b18bbf3c2c6f38ab6162902a614d3->enter($__internal_7fbd3ec6d31368c81d35bb14e11d5f6acc7b18bbf3c2c6f38ab6162902a614d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7fbd3ec6d31368c81d35bb14e11d5f6acc7b18bbf3c2c6f38ab6162902a614d3->leave($__internal_7fbd3ec6d31368c81d35bb14e11d5f6acc7b18bbf3c2c6f38ab6162902a614d3_prof);

        
        $__internal_23ab7599b1171d4d0f82fa966268e7daa312d419a0e73cb1f4c57a596a53c506->leave($__internal_23ab7599b1171d4d0f82fa966268e7daa312d419a0e73cb1f4c57a596a53c506_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
