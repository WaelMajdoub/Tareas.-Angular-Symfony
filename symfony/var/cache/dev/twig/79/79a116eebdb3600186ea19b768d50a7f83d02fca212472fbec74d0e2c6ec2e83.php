<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_26ddc9d6c945791d217fcce97636e19055c36eea07f58ed1040892a33697faa9 extends Twig_Template
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
        $__internal_2388376beefefbe0211c81da2bf325814ef0b55e2bfff464890892bb8b0d4c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2388376beefefbe0211c81da2bf325814ef0b55e2bfff464890892bb8b0d4c27->enter($__internal_2388376beefefbe0211c81da2bf325814ef0b55e2bfff464890892bb8b0d4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_81204bdaafbac2942a88ff3789d2b354b8ce3df8b53556ba612963fc0fd53c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81204bdaafbac2942a88ff3789d2b354b8ce3df8b53556ba612963fc0fd53c24->enter($__internal_81204bdaafbac2942a88ff3789d2b354b8ce3df8b53556ba612963fc0fd53c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2388376beefefbe0211c81da2bf325814ef0b55e2bfff464890892bb8b0d4c27->leave($__internal_2388376beefefbe0211c81da2bf325814ef0b55e2bfff464890892bb8b0d4c27_prof);

        
        $__internal_81204bdaafbac2942a88ff3789d2b354b8ce3df8b53556ba612963fc0fd53c24->leave($__internal_81204bdaafbac2942a88ff3789d2b354b8ce3df8b53556ba612963fc0fd53c24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
