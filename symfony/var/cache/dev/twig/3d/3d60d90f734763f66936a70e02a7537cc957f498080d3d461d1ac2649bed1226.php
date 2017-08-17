<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_52ec07256f4e458652d8c49a8143f38ffa6ee7acb3b77ee0cae3dd954374f3fc extends Twig_Template
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
        $__internal_cf394b81f791f63e3d7556265dd4b9ef889158e6b2d2ee0f74fbbaf121ebb877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf394b81f791f63e3d7556265dd4b9ef889158e6b2d2ee0f74fbbaf121ebb877->enter($__internal_cf394b81f791f63e3d7556265dd4b9ef889158e6b2d2ee0f74fbbaf121ebb877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_cd74d735314240d66b185c9482184c09b4c620678368106fae6f4067f7e6ad4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd74d735314240d66b185c9482184c09b4c620678368106fae6f4067f7e6ad4a->enter($__internal_cd74d735314240d66b185c9482184c09b4c620678368106fae6f4067f7e6ad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_cf394b81f791f63e3d7556265dd4b9ef889158e6b2d2ee0f74fbbaf121ebb877->leave($__internal_cf394b81f791f63e3d7556265dd4b9ef889158e6b2d2ee0f74fbbaf121ebb877_prof);

        
        $__internal_cd74d735314240d66b185c9482184c09b4c620678368106fae6f4067f7e6ad4a->leave($__internal_cd74d735314240d66b185c9482184c09b4c620678368106fae6f4067f7e6ad4a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
