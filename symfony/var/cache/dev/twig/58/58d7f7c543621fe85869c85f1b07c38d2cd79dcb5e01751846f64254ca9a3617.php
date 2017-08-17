<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_5aa394dd86f30b30407339fee97bc0a1be8e1df3a21317a722e8ec9354b1f8e1 extends Twig_Template
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
        $__internal_55a4b3776dccc3cf13574a3b13a1db956356d5c93f49f9650e8c07e4c1acaa48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a4b3776dccc3cf13574a3b13a1db956356d5c93f49f9650e8c07e4c1acaa48->enter($__internal_55a4b3776dccc3cf13574a3b13a1db956356d5c93f49f9650e8c07e4c1acaa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_0da59cefd6a81e06ce323500c5c5b74ba32a8f7546bba12de4391623445ccee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da59cefd6a81e06ce323500c5c5b74ba32a8f7546bba12de4391623445ccee5->enter($__internal_0da59cefd6a81e06ce323500c5c5b74ba32a8f7546bba12de4391623445ccee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_55a4b3776dccc3cf13574a3b13a1db956356d5c93f49f9650e8c07e4c1acaa48->leave($__internal_55a4b3776dccc3cf13574a3b13a1db956356d5c93f49f9650e8c07e4c1acaa48_prof);

        
        $__internal_0da59cefd6a81e06ce323500c5c5b74ba32a8f7546bba12de4391623445ccee5->leave($__internal_0da59cefd6a81e06ce323500c5c5b74ba32a8f7546bba12de4391623445ccee5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
