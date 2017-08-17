<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_173520d05dc9e378b9302f4d004bb5c57e048dab63bf8872a4f810c2c4d6e080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d19676840675987e2129d84b253ffe9f1623617e0cc8533cefbd097ca29a870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d19676840675987e2129d84b253ffe9f1623617e0cc8533cefbd097ca29a870->enter($__internal_5d19676840675987e2129d84b253ffe9f1623617e0cc8533cefbd097ca29a870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9f70de933e67e003749e09cf2ca5dae9586869965506ea796c4c3a60bae9e644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f70de933e67e003749e09cf2ca5dae9586869965506ea796c4c3a60bae9e644->enter($__internal_9f70de933e67e003749e09cf2ca5dae9586869965506ea796c4c3a60bae9e644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d19676840675987e2129d84b253ffe9f1623617e0cc8533cefbd097ca29a870->leave($__internal_5d19676840675987e2129d84b253ffe9f1623617e0cc8533cefbd097ca29a870_prof);

        
        $__internal_9f70de933e67e003749e09cf2ca5dae9586869965506ea796c4c3a60bae9e644->leave($__internal_9f70de933e67e003749e09cf2ca5dae9586869965506ea796c4c3a60bae9e644_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_018dd682460a8fb6f488276595ac8e6e8cad1fff4ad8f029608869cefb2f10d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018dd682460a8fb6f488276595ac8e6e8cad1fff4ad8f029608869cefb2f10d6->enter($__internal_018dd682460a8fb6f488276595ac8e6e8cad1fff4ad8f029608869cefb2f10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_de538c6b2d58186d5103f924a3d17d981a8378e6df0ff0acb7b346a993569b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de538c6b2d58186d5103f924a3d17d981a8378e6df0ff0acb7b346a993569b12->enter($__internal_de538c6b2d58186d5103f924a3d17d981a8378e6df0ff0acb7b346a993569b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_de538c6b2d58186d5103f924a3d17d981a8378e6df0ff0acb7b346a993569b12->leave($__internal_de538c6b2d58186d5103f924a3d17d981a8378e6df0ff0acb7b346a993569b12_prof);

        
        $__internal_018dd682460a8fb6f488276595ac8e6e8cad1fff4ad8f029608869cefb2f10d6->leave($__internal_018dd682460a8fb6f488276595ac8e6e8cad1fff4ad8f029608869cefb2f10d6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_326e65411f534c56554e6a63d64626fe853df25e706c6057a980fb09ee6e339c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326e65411f534c56554e6a63d64626fe853df25e706c6057a980fb09ee6e339c->enter($__internal_326e65411f534c56554e6a63d64626fe853df25e706c6057a980fb09ee6e339c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b862d9c2c8eb8622d78c7a1935870282823dfdac1f9d36bcd7b71cd5aa2e2741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b862d9c2c8eb8622d78c7a1935870282823dfdac1f9d36bcd7b71cd5aa2e2741->enter($__internal_b862d9c2c8eb8622d78c7a1935870282823dfdac1f9d36bcd7b71cd5aa2e2741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b862d9c2c8eb8622d78c7a1935870282823dfdac1f9d36bcd7b71cd5aa2e2741->leave($__internal_b862d9c2c8eb8622d78c7a1935870282823dfdac1f9d36bcd7b71cd5aa2e2741_prof);

        
        $__internal_326e65411f534c56554e6a63d64626fe853df25e706c6057a980fb09ee6e339c->leave($__internal_326e65411f534c56554e6a63d64626fe853df25e706c6057a980fb09ee6e339c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e4626b2e347b946890975f69ff637616e2413f14ca824d9e6f59ef38cdfba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e4626b2e347b946890975f69ff637616e2413f14ca824d9e6f59ef38cdfba3->enter($__internal_b8e4626b2e347b946890975f69ff637616e2413f14ca824d9e6f59ef38cdfba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c105f805751803acbb155ba98b703c2c3d8a40110d0f06f45b48b4cb2418568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c105f805751803acbb155ba98b703c2c3d8a40110d0f06f45b48b4cb2418568->enter($__internal_0c105f805751803acbb155ba98b703c2c3d8a40110d0f06f45b48b4cb2418568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0c105f805751803acbb155ba98b703c2c3d8a40110d0f06f45b48b4cb2418568->leave($__internal_0c105f805751803acbb155ba98b703c2c3d8a40110d0f06f45b48b4cb2418568_prof);

        
        $__internal_b8e4626b2e347b946890975f69ff637616e2413f14ca824d9e6f59ef38cdfba3->leave($__internal_b8e4626b2e347b946890975f69ff637616e2413f14ca824d9e6f59ef38cdfba3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
