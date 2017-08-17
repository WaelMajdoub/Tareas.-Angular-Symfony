<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d2faf0b9f79f8999ed5f19a690f2d924749f73a802c3b6744f255b6be9d0f308 extends Twig_Template
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
        $__internal_0e3d38cb80663b78ab3c80df806a4fad8ad0ac515f9c45b7e004154be624cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3d38cb80663b78ab3c80df806a4fad8ad0ac515f9c45b7e004154be624cd4e->enter($__internal_0e3d38cb80663b78ab3c80df806a4fad8ad0ac515f9c45b7e004154be624cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1188c9546e0c01e95fff927a406a8cb9f45d155bca0a4320a7c606f9e1f4877d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1188c9546e0c01e95fff927a406a8cb9f45d155bca0a4320a7c606f9e1f4877d->enter($__internal_1188c9546e0c01e95fff927a406a8cb9f45d155bca0a4320a7c606f9e1f4877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0e3d38cb80663b78ab3c80df806a4fad8ad0ac515f9c45b7e004154be624cd4e->leave($__internal_0e3d38cb80663b78ab3c80df806a4fad8ad0ac515f9c45b7e004154be624cd4e_prof);

        
        $__internal_1188c9546e0c01e95fff927a406a8cb9f45d155bca0a4320a7c606f9e1f4877d->leave($__internal_1188c9546e0c01e95fff927a406a8cb9f45d155bca0a4320a7c606f9e1f4877d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
