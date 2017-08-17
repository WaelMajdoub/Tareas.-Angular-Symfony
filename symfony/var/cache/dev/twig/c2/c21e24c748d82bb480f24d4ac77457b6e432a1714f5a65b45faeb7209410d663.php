<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25e94e11049f3740113502e941798573c821ba90f500e8924fef55e9a7a39f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31ff986dae0512b17ef72e07f1434cd398a0e43c67b63e14206d19f8e3cb8cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ff986dae0512b17ef72e07f1434cd398a0e43c67b63e14206d19f8e3cb8cc5->enter($__internal_31ff986dae0512b17ef72e07f1434cd398a0e43c67b63e14206d19f8e3cb8cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_db2ca33ba6124799dd99496eb8a5028c1f4fdb1f744f3f39ed001121819d1604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2ca33ba6124799dd99496eb8a5028c1f4fdb1f744f3f39ed001121819d1604->enter($__internal_db2ca33ba6124799dd99496eb8a5028c1f4fdb1f744f3f39ed001121819d1604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_31ff986dae0512b17ef72e07f1434cd398a0e43c67b63e14206d19f8e3cb8cc5->leave($__internal_31ff986dae0512b17ef72e07f1434cd398a0e43c67b63e14206d19f8e3cb8cc5_prof);

        
        $__internal_db2ca33ba6124799dd99496eb8a5028c1f4fdb1f744f3f39ed001121819d1604->leave($__internal_db2ca33ba6124799dd99496eb8a5028c1f4fdb1f744f3f39ed001121819d1604_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b52288b5575ddd80783b7cbd97eacbaef02b511096eaf35affe2858093873af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52288b5575ddd80783b7cbd97eacbaef02b511096eaf35affe2858093873af9->enter($__internal_b52288b5575ddd80783b7cbd97eacbaef02b511096eaf35affe2858093873af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18689e82d5f3106b0b1375c55248b8c54254586c29f52cc596e6bc115e756815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18689e82d5f3106b0b1375c55248b8c54254586c29f52cc596e6bc115e756815->enter($__internal_18689e82d5f3106b0b1375c55248b8c54254586c29f52cc596e6bc115e756815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_18689e82d5f3106b0b1375c55248b8c54254586c29f52cc596e6bc115e756815->leave($__internal_18689e82d5f3106b0b1375c55248b8c54254586c29f52cc596e6bc115e756815_prof);

        
        $__internal_b52288b5575ddd80783b7cbd97eacbaef02b511096eaf35affe2858093873af9->leave($__internal_b52288b5575ddd80783b7cbd97eacbaef02b511096eaf35affe2858093873af9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
