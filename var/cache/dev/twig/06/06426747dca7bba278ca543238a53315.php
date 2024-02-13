<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cauca/index.html.twig */
class __TwigTemplate_c39ffeebf4c76076fbe4df0cfe93b2ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cauca/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cauca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cauca/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "El Cafexito - Région Cauca";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"text-center\">
    <h1 class=\"text-center\">Région Cauca</h1>
La Colombie détient aujourd’hui 32 départements, Cauca en fait partie. <br>

La capitale est Popayan, surnommée la ville blanche (« ciudad blanca »).<br>

Ce département compte environ 1 350 000 habitants et se situe au sud-ouest du pays. <br>

Les montagnes occupent 80% du territoire, sa superficie est de 29 308 km². C’est ici que l’importante rivière Cauca prend naissance ainsi que Magdalena (plus grand fleuve de Colombie) Caquetá et Patía. <br>

C’est aussi là-bas que se dresse le Massif colombien (partagé entre les départements du Cauca et du Huila). Le département est limitrophe avec Tolima, Huila, Caquetá, Putumayo, Nariño, Valle del Cauca et l’océan Pacifique. <br>
</div>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) || array_key_exists("sliders", $context) ? $context["sliders"] : (function () { throw new RuntimeError('Variable "sliders" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 20
            echo "<div class=\"slider\">
    <div class=\"slides\">
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image1", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image2", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image3", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image4", [], "any", false, false, false, 25), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image5", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"\"></div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cauca/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}El Cafexito - Région Cauca{% endblock %}

{% block content %}

<div class=\"text-center\">
    <h1 class=\"text-center\">Région Cauca</h1>
La Colombie détient aujourd’hui 32 départements, Cauca en fait partie. <br>

La capitale est Popayan, surnommée la ville blanche (« ciudad blanca »).<br>

Ce département compte environ 1 350 000 habitants et se situe au sud-ouest du pays. <br>

Les montagnes occupent 80% du territoire, sa superficie est de 29 308 km². C’est ici que l’importante rivière Cauca prend naissance ainsi que Magdalena (plus grand fleuve de Colombie) Caquetá et Patía. <br>

C’est aussi là-bas que se dresse le Massif colombien (partagé entre les départements du Cauca et du Huila). Le département est limitrophe avec Tolima, Huila, Caquetá, Putumayo, Nariño, Valle del Cauca et l’océan Pacifique. <br>
</div>
{% for slider in sliders %}
<div class=\"slider\">
    <div class=\"slides\">
        <div class=\"slideSmall\"><img src=\"/uploads/{{ slider.image1 }}\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/{{ slider.image2 }}\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/{{ slider.image3 }}\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/{{ slider.image4 }}\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/{{ slider.image5 }}\" alt=\"\"></div>
    </div>
</div>
{% endfor %}
{% endblock %}
", "cauca/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\cauca\\index.html.twig");
    }
}
