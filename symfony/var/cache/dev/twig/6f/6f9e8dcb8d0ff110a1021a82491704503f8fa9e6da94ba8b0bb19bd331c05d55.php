<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_d10f1b816d94dd4483b797666d45a36078fd0ad6701dd19f7aa8a6e29a31a405 extends Twig_Template
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
        $__internal_fd3d6376aaed868ca8b4267ff3223e72fc553d16ad1dccabea48f3074374a3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3d6376aaed868ca8b4267ff3223e72fc553d16ad1dccabea48f3074374a3cf->enter($__internal_fd3d6376aaed868ca8b4267ff3223e72fc553d16ad1dccabea48f3074374a3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_0d97d247c1ffffc81f7438eb831df6270618aa51092f7c381b753d080751ebbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d97d247c1ffffc81f7438eb831df6270618aa51092f7c381b753d080751ebbb->enter($__internal_0d97d247c1ffffc81f7438eb831df6270618aa51092f7c381b753d080751ebbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fd3d6376aaed868ca8b4267ff3223e72fc553d16ad1dccabea48f3074374a3cf->leave($__internal_fd3d6376aaed868ca8b4267ff3223e72fc553d16ad1dccabea48f3074374a3cf_prof);

        
        $__internal_0d97d247c1ffffc81f7438eb831df6270618aa51092f7c381b753d080751ebbb->leave($__internal_0d97d247c1ffffc81f7438eb831df6270618aa51092f7c381b753d080751ebbb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
