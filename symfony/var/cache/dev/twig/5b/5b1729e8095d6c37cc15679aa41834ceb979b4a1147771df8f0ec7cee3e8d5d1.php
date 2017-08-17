<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4b394cdcd85b94e4b418048df49fee065bf53960e0cafa3a9bdef42be34e9d98 extends Twig_Template
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
        $__internal_34e2ed92173548c1a30b510213c08734673e15a1b5b4ddf06a6d84eed536004b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e2ed92173548c1a30b510213c08734673e15a1b5b4ddf06a6d84eed536004b->enter($__internal_34e2ed92173548c1a30b510213c08734673e15a1b5b4ddf06a6d84eed536004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_769938a148b20fd7942bea0c43c268dc488eccc63eff834c4a8f3c0bcf3de9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769938a148b20fd7942bea0c43c268dc488eccc63eff834c4a8f3c0bcf3de9f2->enter($__internal_769938a148b20fd7942bea0c43c268dc488eccc63eff834c4a8f3c0bcf3de9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_34e2ed92173548c1a30b510213c08734673e15a1b5b4ddf06a6d84eed536004b->leave($__internal_34e2ed92173548c1a30b510213c08734673e15a1b5b4ddf06a6d84eed536004b_prof);

        
        $__internal_769938a148b20fd7942bea0c43c268dc488eccc63eff834c4a8f3c0bcf3de9f2->leave($__internal_769938a148b20fd7942bea0c43c268dc488eccc63eff834c4a8f3c0bcf3de9f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
