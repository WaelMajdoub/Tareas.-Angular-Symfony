<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_de1d243a0db41304d0a9b14619ddfe31182f2706639c3f664a9cdfbf45d86788 extends Twig_Template
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
        $__internal_50a097595481addec6b9baa0b097a124d232440fa0ddd4a6a6dda6a8c144ca23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a097595481addec6b9baa0b097a124d232440fa0ddd4a6a6dda6a8c144ca23->enter($__internal_50a097595481addec6b9baa0b097a124d232440fa0ddd4a6a6dda6a8c144ca23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_fd33af4cd606f790d81b6fa10bca530080657f114550019b6777923277e9e721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd33af4cd606f790d81b6fa10bca530080657f114550019b6777923277e9e721->enter($__internal_fd33af4cd606f790d81b6fa10bca530080657f114550019b6777923277e9e721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_50a097595481addec6b9baa0b097a124d232440fa0ddd4a6a6dda6a8c144ca23->leave($__internal_50a097595481addec6b9baa0b097a124d232440fa0ddd4a6a6dda6a8c144ca23_prof);

        
        $__internal_fd33af4cd606f790d81b6fa10bca530080657f114550019b6777923277e9e721->leave($__internal_fd33af4cd606f790d81b6fa10bca530080657f114550019b6777923277e9e721_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
