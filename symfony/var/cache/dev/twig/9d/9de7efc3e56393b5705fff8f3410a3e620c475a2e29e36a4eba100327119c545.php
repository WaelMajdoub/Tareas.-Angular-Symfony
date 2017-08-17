<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_cc8bbd8329a2842c72e45dbb9e402194c0e7403732a868189b31971021a90aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c21005f8289e16f07d449e90e2cd617fe1844fa51edc9b4749e5ccf78881ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c21005f8289e16f07d449e90e2cd617fe1844fa51edc9b4749e5ccf78881ee6->enter($__internal_4c21005f8289e16f07d449e90e2cd617fe1844fa51edc9b4749e5ccf78881ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_2225c501dc44916a24599b88b34ad1e8eae64fd56bb59499a0b19cd564d6e8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2225c501dc44916a24599b88b34ad1e8eae64fd56bb59499a0b19cd564d6e8af->enter($__internal_2225c501dc44916a24599b88b34ad1e8eae64fd56bb59499a0b19cd564d6e8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c21005f8289e16f07d449e90e2cd617fe1844fa51edc9b4749e5ccf78881ee6->leave($__internal_4c21005f8289e16f07d449e90e2cd617fe1844fa51edc9b4749e5ccf78881ee6_prof);

        
        $__internal_2225c501dc44916a24599b88b34ad1e8eae64fd56bb59499a0b19cd564d6e8af->leave($__internal_2225c501dc44916a24599b88b34ad1e8eae64fd56bb59499a0b19cd564d6e8af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a522c9be1e5a447333ddae9e8b5175ea4ba28148706d0fb7dbd9d981e5d057b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a522c9be1e5a447333ddae9e8b5175ea4ba28148706d0fb7dbd9d981e5d057b->enter($__internal_2a522c9be1e5a447333ddae9e8b5175ea4ba28148706d0fb7dbd9d981e5d057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6a4778cf967b89f5dbae4b3ff217869cff8d37769fb89160988489f29c49409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a4778cf967b89f5dbae4b3ff217869cff8d37769fb89160988489f29c49409->enter($__internal_c6a4778cf967b89f5dbae4b3ff217869cff8d37769fb89160988489f29c49409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c6a4778cf967b89f5dbae4b3ff217869cff8d37769fb89160988489f29c49409->leave($__internal_c6a4778cf967b89f5dbae4b3ff217869cff8d37769fb89160988489f29c49409_prof);

        
        $__internal_2a522c9be1e5a447333ddae9e8b5175ea4ba28148706d0fb7dbd9d981e5d057b->leave($__internal_2a522c9be1e5a447333ddae9e8b5175ea4ba28148706d0fb7dbd9d981e5d057b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
