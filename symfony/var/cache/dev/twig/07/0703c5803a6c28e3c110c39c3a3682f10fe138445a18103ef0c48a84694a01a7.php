<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_65b15179ec92d669cb64cbb1c455b783760f231af98109dd5e5cdbcc24464a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59ee4fc0f6eb45b5fe229a3e16f390617694e5d6a4b05c9bdd7afaea27234dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ee4fc0f6eb45b5fe229a3e16f390617694e5d6a4b05c9bdd7afaea27234dee->enter($__internal_59ee4fc0f6eb45b5fe229a3e16f390617694e5d6a4b05c9bdd7afaea27234dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6cd0b5728e8a140350b4eb0d844edf13655f8ec606ea876430e7af7fc837a5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd0b5728e8a140350b4eb0d844edf13655f8ec606ea876430e7af7fc837a5e4->enter($__internal_6cd0b5728e8a140350b4eb0d844edf13655f8ec606ea876430e7af7fc837a5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_59ee4fc0f6eb45b5fe229a3e16f390617694e5d6a4b05c9bdd7afaea27234dee->leave($__internal_59ee4fc0f6eb45b5fe229a3e16f390617694e5d6a4b05c9bdd7afaea27234dee_prof);

        
        $__internal_6cd0b5728e8a140350b4eb0d844edf13655f8ec606ea876430e7af7fc837a5e4->leave($__internal_6cd0b5728e8a140350b4eb0d844edf13655f8ec606ea876430e7af7fc837a5e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd961e4481c09dc084715e59e87481fc8284ef4c64190b72b6b058d2e9fd81f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd961e4481c09dc084715e59e87481fc8284ef4c64190b72b6b058d2e9fd81f0->enter($__internal_cd961e4481c09dc084715e59e87481fc8284ef4c64190b72b6b058d2e9fd81f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1278d2eff7356b39392ca5b6f1b5fa9342683e206c285c241e6a7aad4de47454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1278d2eff7356b39392ca5b6f1b5fa9342683e206c285c241e6a7aad4de47454->enter($__internal_1278d2eff7356b39392ca5b6f1b5fa9342683e206c285c241e6a7aad4de47454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1278d2eff7356b39392ca5b6f1b5fa9342683e206c285c241e6a7aad4de47454->leave($__internal_1278d2eff7356b39392ca5b6f1b5fa9342683e206c285c241e6a7aad4de47454_prof);

        
        $__internal_cd961e4481c09dc084715e59e87481fc8284ef4c64190b72b6b058d2e9fd81f0->leave($__internal_cd961e4481c09dc084715e59e87481fc8284ef4c64190b72b6b058d2e9fd81f0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_78c98e61ad5120ea18d6e3c8cab5199d64e3450517f66524a79ae0b0be01d557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c98e61ad5120ea18d6e3c8cab5199d64e3450517f66524a79ae0b0be01d557->enter($__internal_78c98e61ad5120ea18d6e3c8cab5199d64e3450517f66524a79ae0b0be01d557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1ba0b1c99f931095464086464d0c2ec996e6e2ff8140523d329c8ec43273b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ba0b1c99f931095464086464d0c2ec996e6e2ff8140523d329c8ec43273b9e->enter($__internal_b1ba0b1c99f931095464086464d0c2ec996e6e2ff8140523d329c8ec43273b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b1ba0b1c99f931095464086464d0c2ec996e6e2ff8140523d329c8ec43273b9e->leave($__internal_b1ba0b1c99f931095464086464d0c2ec996e6e2ff8140523d329c8ec43273b9e_prof);

        
        $__internal_78c98e61ad5120ea18d6e3c8cab5199d64e3450517f66524a79ae0b0be01d557->leave($__internal_78c98e61ad5120ea18d6e3c8cab5199d64e3450517f66524a79ae0b0be01d557_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_40225956810a6eb8c6eca20efd48c385396059463f5d1904be3373cb626e112b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40225956810a6eb8c6eca20efd48c385396059463f5d1904be3373cb626e112b->enter($__internal_40225956810a6eb8c6eca20efd48c385396059463f5d1904be3373cb626e112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c08672dc4b40a96759ec1ef9f47c75a5708b53ff9945a574069ab9aaf9319e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c08672dc4b40a96759ec1ef9f47c75a5708b53ff9945a574069ab9aaf9319e7->enter($__internal_8c08672dc4b40a96759ec1ef9f47c75a5708b53ff9945a574069ab9aaf9319e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c08672dc4b40a96759ec1ef9f47c75a5708b53ff9945a574069ab9aaf9319e7->leave($__internal_8c08672dc4b40a96759ec1ef9f47c75a5708b53ff9945a574069ab9aaf9319e7_prof);

        
        $__internal_40225956810a6eb8c6eca20efd48c385396059463f5d1904be3373cb626e112b->leave($__internal_40225956810a6eb8c6eca20efd48c385396059463f5d1904be3373cb626e112b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
