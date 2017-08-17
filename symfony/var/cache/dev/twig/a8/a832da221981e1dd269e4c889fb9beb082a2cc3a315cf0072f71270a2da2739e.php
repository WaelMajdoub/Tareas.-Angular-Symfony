<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_14e939a9a34d8511954f2f153087076ef04c782bf97e48dc2157eb0c2e35a1c2 extends Twig_Template
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
        $__internal_b2db2d69b964555a1ad199551fcb101b80440e3662ec838f7e9567ee60999e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2db2d69b964555a1ad199551fcb101b80440e3662ec838f7e9567ee60999e85->enter($__internal_b2db2d69b964555a1ad199551fcb101b80440e3662ec838f7e9567ee60999e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_6d80ead18a309ab45ae9ee0e803da089d282531b0441af5a7416d1a4a526112f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d80ead18a309ab45ae9ee0e803da089d282531b0441af5a7416d1a4a526112f->enter($__internal_6d80ead18a309ab45ae9ee0e803da089d282531b0441af5a7416d1a4a526112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_b2db2d69b964555a1ad199551fcb101b80440e3662ec838f7e9567ee60999e85->leave($__internal_b2db2d69b964555a1ad199551fcb101b80440e3662ec838f7e9567ee60999e85_prof);

        
        $__internal_6d80ead18a309ab45ae9ee0e803da089d282531b0441af5a7416d1a4a526112f->leave($__internal_6d80ead18a309ab45ae9ee0e803da089d282531b0441af5a7416d1a4a526112f_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/home/diego/Escritorio/proyecto/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
