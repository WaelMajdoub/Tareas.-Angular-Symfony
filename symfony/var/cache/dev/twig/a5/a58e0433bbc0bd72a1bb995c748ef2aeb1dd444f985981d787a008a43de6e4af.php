<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a8c0244ca29365077832dd2c0fe4099ffe9a7721c0072b2060f9c37605abe261 extends Twig_Template
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
        $__internal_83be0bf2f106c71578c0e14972c0e7688d75787ada61fe84e75217722ec0179f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83be0bf2f106c71578c0e14972c0e7688d75787ada61fe84e75217722ec0179f->enter($__internal_83be0bf2f106c71578c0e14972c0e7688d75787ada61fe84e75217722ec0179f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_aaeaa3f070960ddd62e881f9081ddba1a7cb429d321e7d054b031c478751914f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaeaa3f070960ddd62e881f9081ddba1a7cb429d321e7d054b031c478751914f->enter($__internal_aaeaa3f070960ddd62e881f9081ddba1a7cb429d321e7d054b031c478751914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_83be0bf2f106c71578c0e14972c0e7688d75787ada61fe84e75217722ec0179f->leave($__internal_83be0bf2f106c71578c0e14972c0e7688d75787ada61fe84e75217722ec0179f_prof);

        
        $__internal_aaeaa3f070960ddd62e881f9081ddba1a7cb429d321e7d054b031c478751914f->leave($__internal_aaeaa3f070960ddd62e881f9081ddba1a7cb429d321e7d054b031c478751914f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
