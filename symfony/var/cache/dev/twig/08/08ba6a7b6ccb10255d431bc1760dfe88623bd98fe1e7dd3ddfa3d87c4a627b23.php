<?php

/* base.html.twig */
class __TwigTemplate_b54e84408fc259f96f538e8b4025e2ad5cb1404e8972b90fece983a8eaaa8405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_871d15180f7edc492bc38fcff346ad5d6375c9d9622fa043f96e6f593377fb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871d15180f7edc492bc38fcff346ad5d6375c9d9622fa043f96e6f593377fb4e->enter($__internal_871d15180f7edc492bc38fcff346ad5d6375c9d9622fa043f96e6f593377fb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0678a6ef1e4f600457d33ad2fd08143cc01707ae816601732aceab94a675951b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0678a6ef1e4f600457d33ad2fd08143cc01707ae816601732aceab94a675951b->enter($__internal_0678a6ef1e4f600457d33ad2fd08143cc01707ae816601732aceab94a675951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_871d15180f7edc492bc38fcff346ad5d6375c9d9622fa043f96e6f593377fb4e->leave($__internal_871d15180f7edc492bc38fcff346ad5d6375c9d9622fa043f96e6f593377fb4e_prof);

        
        $__internal_0678a6ef1e4f600457d33ad2fd08143cc01707ae816601732aceab94a675951b->leave($__internal_0678a6ef1e4f600457d33ad2fd08143cc01707ae816601732aceab94a675951b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dbc7f714784e57e106fb28230b50f0cf94e59aa7a97eb61065ba8cc58087ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbc7f714784e57e106fb28230b50f0cf94e59aa7a97eb61065ba8cc58087ccb->enter($__internal_4dbc7f714784e57e106fb28230b50f0cf94e59aa7a97eb61065ba8cc58087ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ba0f952e53c0a9c1a8516250fa8cbf71d8ddbd5f75e5b1d4a274832cd064ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba0f952e53c0a9c1a8516250fa8cbf71d8ddbd5f75e5b1d4a274832cd064ea9->enter($__internal_1ba0f952e53c0a9c1a8516250fa8cbf71d8ddbd5f75e5b1d4a274832cd064ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ba0f952e53c0a9c1a8516250fa8cbf71d8ddbd5f75e5b1d4a274832cd064ea9->leave($__internal_1ba0f952e53c0a9c1a8516250fa8cbf71d8ddbd5f75e5b1d4a274832cd064ea9_prof);

        
        $__internal_4dbc7f714784e57e106fb28230b50f0cf94e59aa7a97eb61065ba8cc58087ccb->leave($__internal_4dbc7f714784e57e106fb28230b50f0cf94e59aa7a97eb61065ba8cc58087ccb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5130c10ddb3fdaa8689dfed6b9c640e6c59f909a369a48d39db8e8a2f46115f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5130c10ddb3fdaa8689dfed6b9c640e6c59f909a369a48d39db8e8a2f46115f3->enter($__internal_5130c10ddb3fdaa8689dfed6b9c640e6c59f909a369a48d39db8e8a2f46115f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b532f5d3ec06a3e26067d141ee15e97281edac6923b86a8b24187d96d1545334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b532f5d3ec06a3e26067d141ee15e97281edac6923b86a8b24187d96d1545334->enter($__internal_b532f5d3ec06a3e26067d141ee15e97281edac6923b86a8b24187d96d1545334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b532f5d3ec06a3e26067d141ee15e97281edac6923b86a8b24187d96d1545334->leave($__internal_b532f5d3ec06a3e26067d141ee15e97281edac6923b86a8b24187d96d1545334_prof);

        
        $__internal_5130c10ddb3fdaa8689dfed6b9c640e6c59f909a369a48d39db8e8a2f46115f3->leave($__internal_5130c10ddb3fdaa8689dfed6b9c640e6c59f909a369a48d39db8e8a2f46115f3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c79061d40649b4ebb1087f5dc623c2bbc66645b1dcc2a37615ddd5f55a6f357b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79061d40649b4ebb1087f5dc623c2bbc66645b1dcc2a37615ddd5f55a6f357b->enter($__internal_c79061d40649b4ebb1087f5dc623c2bbc66645b1dcc2a37615ddd5f55a6f357b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d0cfd235b10311482c941ffa8405344e3716eb426419799fe815739448307ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0cfd235b10311482c941ffa8405344e3716eb426419799fe815739448307ad->enter($__internal_5d0cfd235b10311482c941ffa8405344e3716eb426419799fe815739448307ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d0cfd235b10311482c941ffa8405344e3716eb426419799fe815739448307ad->leave($__internal_5d0cfd235b10311482c941ffa8405344e3716eb426419799fe815739448307ad_prof);

        
        $__internal_c79061d40649b4ebb1087f5dc623c2bbc66645b1dcc2a37615ddd5f55a6f357b->leave($__internal_c79061d40649b4ebb1087f5dc623c2bbc66645b1dcc2a37615ddd5f55a6f357b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e33561458f0a71e60868de456f06ad4c6fc47f10277e702ea039a949065bc7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33561458f0a71e60868de456f06ad4c6fc47f10277e702ea039a949065bc7ef->enter($__internal_e33561458f0a71e60868de456f06ad4c6fc47f10277e702ea039a949065bc7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_328d68bba86e7cd1928bd0f79095b6a17ac62851d23e10647b7174e30e295cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328d68bba86e7cd1928bd0f79095b6a17ac62851d23e10647b7174e30e295cb6->enter($__internal_328d68bba86e7cd1928bd0f79095b6a17ac62851d23e10647b7174e30e295cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_328d68bba86e7cd1928bd0f79095b6a17ac62851d23e10647b7174e30e295cb6->leave($__internal_328d68bba86e7cd1928bd0f79095b6a17ac62851d23e10647b7174e30e295cb6_prof);

        
        $__internal_e33561458f0a71e60868de456f06ad4c6fc47f10277e702ea039a949065bc7ef->leave($__internal_e33561458f0a71e60868de456f06ad4c6fc47f10277e702ea039a949065bc7ef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/diego/Escritorio/proyecto/app/Resources/views/base.html.twig");
    }
}
