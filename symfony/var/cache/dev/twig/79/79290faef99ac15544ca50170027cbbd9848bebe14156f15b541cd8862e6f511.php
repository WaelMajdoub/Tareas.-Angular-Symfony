<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9866b16f362e3f6148a39b1ad4db432612983b6b679c16b690a944d75fae3e69 extends Twig_Template
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
        $__internal_84fd4de980189574a8d0893a6fb5e68ee7ff3d47b704e1259b0a2a3f7e1f8592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fd4de980189574a8d0893a6fb5e68ee7ff3d47b704e1259b0a2a3f7e1f8592->enter($__internal_84fd4de980189574a8d0893a6fb5e68ee7ff3d47b704e1259b0a2a3f7e1f8592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b75537d8d8375b294bd09096115e345113889fb40651768bda38e7899671f4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75537d8d8375b294bd09096115e345113889fb40651768bda38e7899671f4f6->enter($__internal_b75537d8d8375b294bd09096115e345113889fb40651768bda38e7899671f4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_84fd4de980189574a8d0893a6fb5e68ee7ff3d47b704e1259b0a2a3f7e1f8592->leave($__internal_84fd4de980189574a8d0893a6fb5e68ee7ff3d47b704e1259b0a2a3f7e1f8592_prof);

        
        $__internal_b75537d8d8375b294bd09096115e345113889fb40651768bda38e7899671f4f6->leave($__internal_b75537d8d8375b294bd09096115e345113889fb40651768bda38e7899671f4f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
