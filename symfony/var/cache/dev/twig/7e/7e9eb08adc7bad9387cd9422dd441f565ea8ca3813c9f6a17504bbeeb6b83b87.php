<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b28a17714b4bbc9df2b639d7b5d6b39e2895cba5cc518b27c8f121b361a452cc extends Twig_Template
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
        $__internal_e6630b103126c850efbc18339ddb3fc5ce4c8417c227158b2fab37f03d3e31bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6630b103126c850efbc18339ddb3fc5ce4c8417c227158b2fab37f03d3e31bf->enter($__internal_e6630b103126c850efbc18339ddb3fc5ce4c8417c227158b2fab37f03d3e31bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d646d34d4ed22092bc15c410c3ee50adf0ac743763d7ee3ed0f9e57864d8e8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d646d34d4ed22092bc15c410c3ee50adf0ac743763d7ee3ed0f9e57864d8e8b0->enter($__internal_d646d34d4ed22092bc15c410c3ee50adf0ac743763d7ee3ed0f9e57864d8e8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e6630b103126c850efbc18339ddb3fc5ce4c8417c227158b2fab37f03d3e31bf->leave($__internal_e6630b103126c850efbc18339ddb3fc5ce4c8417c227158b2fab37f03d3e31bf_prof);

        
        $__internal_d646d34d4ed22092bc15c410c3ee50adf0ac743763d7ee3ed0f9e57864d8e8b0->leave($__internal_d646d34d4ed22092bc15c410c3ee50adf0ac743763d7ee3ed0f9e57864d8e8b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
