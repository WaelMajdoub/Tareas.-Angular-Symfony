<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4e8f189d8149d97a536e074f47166247eb8d2a8c555695ab180fa6450b7c1d0b extends Twig_Template
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
        $__internal_397883c3b0e3b430634c9187daf987ea478a94e3c014197932fd9e79f30fe297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397883c3b0e3b430634c9187daf987ea478a94e3c014197932fd9e79f30fe297->enter($__internal_397883c3b0e3b430634c9187daf987ea478a94e3c014197932fd9e79f30fe297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_628d9535ac805737d2d43c9a95e1c63eb024ebf7556ebeec15b4be314e142316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628d9535ac805737d2d43c9a95e1c63eb024ebf7556ebeec15b4be314e142316->enter($__internal_628d9535ac805737d2d43c9a95e1c63eb024ebf7556ebeec15b4be314e142316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_397883c3b0e3b430634c9187daf987ea478a94e3c014197932fd9e79f30fe297->leave($__internal_397883c3b0e3b430634c9187daf987ea478a94e3c014197932fd9e79f30fe297_prof);

        
        $__internal_628d9535ac805737d2d43c9a95e1c63eb024ebf7556ebeec15b4be314e142316->leave($__internal_628d9535ac805737d2d43c9a95e1c63eb024ebf7556ebeec15b4be314e142316_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
