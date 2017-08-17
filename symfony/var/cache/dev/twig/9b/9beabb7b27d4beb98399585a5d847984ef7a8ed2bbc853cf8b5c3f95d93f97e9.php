<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9cf4f0bcc9e2819405de050dac0d76f354c3bcd10b2b2b98d574af889d0257f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77d3884ac64cc380cba694038e854ae8c1ecbc429dde33b8dd5c3489f7ecd3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d3884ac64cc380cba694038e854ae8c1ecbc429dde33b8dd5c3489f7ecd3f3->enter($__internal_77d3884ac64cc380cba694038e854ae8c1ecbc429dde33b8dd5c3489f7ecd3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f4af9c4bba23c72c1523191193f03b40c5cd41474e01ccdc39a4a33655bf2bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4af9c4bba23c72c1523191193f03b40c5cd41474e01ccdc39a4a33655bf2bca->enter($__internal_f4af9c4bba23c72c1523191193f03b40c5cd41474e01ccdc39a4a33655bf2bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d3884ac64cc380cba694038e854ae8c1ecbc429dde33b8dd5c3489f7ecd3f3->leave($__internal_77d3884ac64cc380cba694038e854ae8c1ecbc429dde33b8dd5c3489f7ecd3f3_prof);

        
        $__internal_f4af9c4bba23c72c1523191193f03b40c5cd41474e01ccdc39a4a33655bf2bca->leave($__internal_f4af9c4bba23c72c1523191193f03b40c5cd41474e01ccdc39a4a33655bf2bca_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4af98a3386bd70cd6457a594d4f3e26cc765ed57871ab0ea9ef6ba03621f5fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af98a3386bd70cd6457a594d4f3e26cc765ed57871ab0ea9ef6ba03621f5fff->enter($__internal_4af98a3386bd70cd6457a594d4f3e26cc765ed57871ab0ea9ef6ba03621f5fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_045a762e20c3bcb8f4746d34b8949921062dac008fa3bd357ade3808705a5b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045a762e20c3bcb8f4746d34b8949921062dac008fa3bd357ade3808705a5b8d->enter($__internal_045a762e20c3bcb8f4746d34b8949921062dac008fa3bd357ade3808705a5b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_045a762e20c3bcb8f4746d34b8949921062dac008fa3bd357ade3808705a5b8d->leave($__internal_045a762e20c3bcb8f4746d34b8949921062dac008fa3bd357ade3808705a5b8d_prof);

        
        $__internal_4af98a3386bd70cd6457a594d4f3e26cc765ed57871ab0ea9ef6ba03621f5fff->leave($__internal_4af98a3386bd70cd6457a594d4f3e26cc765ed57871ab0ea9ef6ba03621f5fff_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28fc2be25109038683fa0aded1b1d76c29c23a927a23f012ac80e83b66dc04af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fc2be25109038683fa0aded1b1d76c29c23a927a23f012ac80e83b66dc04af->enter($__internal_28fc2be25109038683fa0aded1b1d76c29c23a927a23f012ac80e83b66dc04af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aedf21d07ac3f0866e3278c0a7a33f44ad09be467c5d44570b01e07b2f17f4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedf21d07ac3f0866e3278c0a7a33f44ad09be467c5d44570b01e07b2f17f4cf->enter($__internal_aedf21d07ac3f0866e3278c0a7a33f44ad09be467c5d44570b01e07b2f17f4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_aedf21d07ac3f0866e3278c0a7a33f44ad09be467c5d44570b01e07b2f17f4cf->leave($__internal_aedf21d07ac3f0866e3278c0a7a33f44ad09be467c5d44570b01e07b2f17f4cf_prof);

        
        $__internal_28fc2be25109038683fa0aded1b1d76c29c23a927a23f012ac80e83b66dc04af->leave($__internal_28fc2be25109038683fa0aded1b1d76c29c23a927a23f012ac80e83b66dc04af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
