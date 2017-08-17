<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4cc4a9fe191b2f87d26d6457faa3cb860d742dec6325594d213158009685e992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_255142cf9563991ecec39676fc170ece98a635af789219d4b445b6334ecdeef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255142cf9563991ecec39676fc170ece98a635af789219d4b445b6334ecdeef5->enter($__internal_255142cf9563991ecec39676fc170ece98a635af789219d4b445b6334ecdeef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4da7ee24663ec287cd783a2abeab8d526f026e7c2b611adc8089b62529c7a6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da7ee24663ec287cd783a2abeab8d526f026e7c2b611adc8089b62529c7a6ec->enter($__internal_4da7ee24663ec287cd783a2abeab8d526f026e7c2b611adc8089b62529c7a6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255142cf9563991ecec39676fc170ece98a635af789219d4b445b6334ecdeef5->leave($__internal_255142cf9563991ecec39676fc170ece98a635af789219d4b445b6334ecdeef5_prof);

        
        $__internal_4da7ee24663ec287cd783a2abeab8d526f026e7c2b611adc8089b62529c7a6ec->leave($__internal_4da7ee24663ec287cd783a2abeab8d526f026e7c2b611adc8089b62529c7a6ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff11eb50e0b5a71b34030be97a62285247180e843e81e675554989ccf980d148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff11eb50e0b5a71b34030be97a62285247180e843e81e675554989ccf980d148->enter($__internal_ff11eb50e0b5a71b34030be97a62285247180e843e81e675554989ccf980d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0eaf5e1ee81e39dee6a1e3f5b04892c2693d142bcdc9a7b04819865e3a40f549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eaf5e1ee81e39dee6a1e3f5b04892c2693d142bcdc9a7b04819865e3a40f549->enter($__internal_0eaf5e1ee81e39dee6a1e3f5b04892c2693d142bcdc9a7b04819865e3a40f549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0eaf5e1ee81e39dee6a1e3f5b04892c2693d142bcdc9a7b04819865e3a40f549->leave($__internal_0eaf5e1ee81e39dee6a1e3f5b04892c2693d142bcdc9a7b04819865e3a40f549_prof);

        
        $__internal_ff11eb50e0b5a71b34030be97a62285247180e843e81e675554989ccf980d148->leave($__internal_ff11eb50e0b5a71b34030be97a62285247180e843e81e675554989ccf980d148_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a2fdd5e949f85e226d24232f084646c73eea6df535bd09af7568c7c9d516327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2fdd5e949f85e226d24232f084646c73eea6df535bd09af7568c7c9d516327->enter($__internal_6a2fdd5e949f85e226d24232f084646c73eea6df535bd09af7568c7c9d516327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_546315da352e3707ca58f1982d99e9fcab89566a2b3842dbc2999d055a21a2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546315da352e3707ca58f1982d99e9fcab89566a2b3842dbc2999d055a21a2a6->enter($__internal_546315da352e3707ca58f1982d99e9fcab89566a2b3842dbc2999d055a21a2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_546315da352e3707ca58f1982d99e9fcab89566a2b3842dbc2999d055a21a2a6->leave($__internal_546315da352e3707ca58f1982d99e9fcab89566a2b3842dbc2999d055a21a2a6_prof);

        
        $__internal_6a2fdd5e949f85e226d24232f084646c73eea6df535bd09af7568c7c9d516327->leave($__internal_6a2fdd5e949f85e226d24232f084646c73eea6df535bd09af7568c7c9d516327_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
