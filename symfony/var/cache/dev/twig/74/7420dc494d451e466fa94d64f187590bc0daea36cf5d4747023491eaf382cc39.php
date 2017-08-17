<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_bb968d428ff40a7dfc8f2eb016272cf475f029e2a9e9fb4fa9f52a8103208194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6474db93b25f9ff784e9c0515705a80139997240c2ced884e770c488bae45a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6474db93b25f9ff784e9c0515705a80139997240c2ced884e770c488bae45a86->enter($__internal_6474db93b25f9ff784e9c0515705a80139997240c2ced884e770c488bae45a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9d2783c412d27890807fd8d47c2a05e14b5f6e960485acbcb58d0172d3637501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2783c412d27890807fd8d47c2a05e14b5f6e960485acbcb58d0172d3637501->enter($__internal_9d2783c412d27890807fd8d47c2a05e14b5f6e960485acbcb58d0172d3637501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6474db93b25f9ff784e9c0515705a80139997240c2ced884e770c488bae45a86->leave($__internal_6474db93b25f9ff784e9c0515705a80139997240c2ced884e770c488bae45a86_prof);

        
        $__internal_9d2783c412d27890807fd8d47c2a05e14b5f6e960485acbcb58d0172d3637501->leave($__internal_9d2783c412d27890807fd8d47c2a05e14b5f6e960485acbcb58d0172d3637501_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb03719c2da0fd8dbae6a3ad03216a62624e6d271d9b9439c263129dbbd86756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb03719c2da0fd8dbae6a3ad03216a62624e6d271d9b9439c263129dbbd86756->enter($__internal_fb03719c2da0fd8dbae6a3ad03216a62624e6d271d9b9439c263129dbbd86756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7654ad6dec9fc7d6c6bf63f16c98a12edd15291136f6d627c1ea6ba0881b9a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7654ad6dec9fc7d6c6bf63f16c98a12edd15291136f6d627c1ea6ba0881b9a90->enter($__internal_7654ad6dec9fc7d6c6bf63f16c98a12edd15291136f6d627c1ea6ba0881b9a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7654ad6dec9fc7d6c6bf63f16c98a12edd15291136f6d627c1ea6ba0881b9a90->leave($__internal_7654ad6dec9fc7d6c6bf63f16c98a12edd15291136f6d627c1ea6ba0881b9a90_prof);

        
        $__internal_fb03719c2da0fd8dbae6a3ad03216a62624e6d271d9b9439c263129dbbd86756->leave($__internal_fb03719c2da0fd8dbae6a3ad03216a62624e6d271d9b9439c263129dbbd86756_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e29e9923b1423a677a239c2da484e6bda8ae18d4a370c9af1e2c7abf9f69dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e29e9923b1423a677a239c2da484e6bda8ae18d4a370c9af1e2c7abf9f69dd8->enter($__internal_2e29e9923b1423a677a239c2da484e6bda8ae18d4a370c9af1e2c7abf9f69dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_877eadafb5c288459a30baa085b4ab217c686a4073d91a8994217d88c453e01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877eadafb5c288459a30baa085b4ab217c686a4073d91a8994217d88c453e01a->enter($__internal_877eadafb5c288459a30baa085b4ab217c686a4073d91a8994217d88c453e01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_877eadafb5c288459a30baa085b4ab217c686a4073d91a8994217d88c453e01a->leave($__internal_877eadafb5c288459a30baa085b4ab217c686a4073d91a8994217d88c453e01a_prof);

        
        $__internal_2e29e9923b1423a677a239c2da484e6bda8ae18d4a370c9af1e2c7abf9f69dd8->leave($__internal_2e29e9923b1423a677a239c2da484e6bda8ae18d4a370c9af1e2c7abf9f69dd8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45a0180c17ef21f38763ba9523f1b1acceaf5491b6a8330bde037978e1bf5ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a0180c17ef21f38763ba9523f1b1acceaf5491b6a8330bde037978e1bf5ba2->enter($__internal_45a0180c17ef21f38763ba9523f1b1acceaf5491b6a8330bde037978e1bf5ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70f3ebb9ad85dc647f68cf111b6c2113943a6ce21f9952471f0a6f06b9751772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f3ebb9ad85dc647f68cf111b6c2113943a6ce21f9952471f0a6f06b9751772->enter($__internal_70f3ebb9ad85dc647f68cf111b6c2113943a6ce21f9952471f0a6f06b9751772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_70f3ebb9ad85dc647f68cf111b6c2113943a6ce21f9952471f0a6f06b9751772->leave($__internal_70f3ebb9ad85dc647f68cf111b6c2113943a6ce21f9952471f0a6f06b9751772_prof);

        
        $__internal_45a0180c17ef21f38763ba9523f1b1acceaf5491b6a8330bde037978e1bf5ba2->leave($__internal_45a0180c17ef21f38763ba9523f1b1acceaf5491b6a8330bde037978e1bf5ba2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
