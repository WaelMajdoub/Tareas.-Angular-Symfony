<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0f54c826c35d48c5c53a2a852714ccf04e140ba9ec08a07d319056eb794fb817 extends Twig_Template
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
        $__internal_f8c1d5df617ff058a01cd7fb2f354c8d3c46f24db3b1e2895546fbec0868ac23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c1d5df617ff058a01cd7fb2f354c8d3c46f24db3b1e2895546fbec0868ac23->enter($__internal_f8c1d5df617ff058a01cd7fb2f354c8d3c46f24db3b1e2895546fbec0868ac23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_26cfdb988f6b82d0c3e0edb2250dac1b31be41709e79432d1d8e8b10a61bfaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cfdb988f6b82d0c3e0edb2250dac1b31be41709e79432d1d8e8b10a61bfaf5->enter($__internal_26cfdb988f6b82d0c3e0edb2250dac1b31be41709e79432d1d8e8b10a61bfaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f8c1d5df617ff058a01cd7fb2f354c8d3c46f24db3b1e2895546fbec0868ac23->leave($__internal_f8c1d5df617ff058a01cd7fb2f354c8d3c46f24db3b1e2895546fbec0868ac23_prof);

        
        $__internal_26cfdb988f6b82d0c3e0edb2250dac1b31be41709e79432d1d8e8b10a61bfaf5->leave($__internal_26cfdb988f6b82d0c3e0edb2250dac1b31be41709e79432d1d8e8b10a61bfaf5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
