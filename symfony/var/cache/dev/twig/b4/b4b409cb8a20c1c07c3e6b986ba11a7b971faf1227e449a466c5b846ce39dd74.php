<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_79e60b01c05bd4e6b57e976b0ec9c35597c15267e402e712eee26a6d555b1841 extends Twig_Template
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
        $__internal_eb3a6c2a4a9a6daaf849a7ee10f87043c184391ea01fb88397952a366d4779fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3a6c2a4a9a6daaf849a7ee10f87043c184391ea01fb88397952a366d4779fb->enter($__internal_eb3a6c2a4a9a6daaf849a7ee10f87043c184391ea01fb88397952a366d4779fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f0cc2d0bb1256ae6460f2d4dc3acceec8a1520bda13be8b755eda92af79af530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cc2d0bb1256ae6460f2d4dc3acceec8a1520bda13be8b755eda92af79af530->enter($__internal_f0cc2d0bb1256ae6460f2d4dc3acceec8a1520bda13be8b755eda92af79af530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_eb3a6c2a4a9a6daaf849a7ee10f87043c184391ea01fb88397952a366d4779fb->leave($__internal_eb3a6c2a4a9a6daaf849a7ee10f87043c184391ea01fb88397952a366d4779fb_prof);

        
        $__internal_f0cc2d0bb1256ae6460f2d4dc3acceec8a1520bda13be8b755eda92af79af530->leave($__internal_f0cc2d0bb1256ae6460f2d4dc3acceec8a1520bda13be8b755eda92af79af530_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
