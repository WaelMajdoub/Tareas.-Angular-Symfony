<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b7820b18fd4fae05fd2629e7edd58e023b330f3b5a983e74cbdb5df35cecfc1d extends Twig_Template
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
        $__internal_15ab10f3b1b9d0bdd43f6e1af6509277ddea593060b295b018bf3583e17ad3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ab10f3b1b9d0bdd43f6e1af6509277ddea593060b295b018bf3583e17ad3e2->enter($__internal_15ab10f3b1b9d0bdd43f6e1af6509277ddea593060b295b018bf3583e17ad3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a002d830d1111dc851a27b523fb31e55883eee059bc076c440b681cace6719bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a002d830d1111dc851a27b523fb31e55883eee059bc076c440b681cace6719bb->enter($__internal_a002d830d1111dc851a27b523fb31e55883eee059bc076c440b681cace6719bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_15ab10f3b1b9d0bdd43f6e1af6509277ddea593060b295b018bf3583e17ad3e2->leave($__internal_15ab10f3b1b9d0bdd43f6e1af6509277ddea593060b295b018bf3583e17ad3e2_prof);

        
        $__internal_a002d830d1111dc851a27b523fb31e55883eee059bc076c440b681cace6719bb->leave($__internal_a002d830d1111dc851a27b523fb31e55883eee059bc076c440b681cace6719bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
