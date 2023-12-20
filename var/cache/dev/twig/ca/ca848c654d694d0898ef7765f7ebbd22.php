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

/* team/index.html.twig */
class __TwigTemplate_fbc1fa65d49af2abd47baebf9eccd41b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Qui sommes nous
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t<h1 class=\"text-center mt-5\">Qui sommes-nous?</h1>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 7
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 team-block\">
\t\t\t\t<h2 class=\"featurette-heading\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "<br>
\t\t\t\t\t<span class=\"text-muted\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "role", [], "any", false, false, false, 10), "html", null, true);
            echo "</span>
\t\t\t\t</h2>
\t\t\t\t<img src=\"/uploads/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "illustration", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"mb-2 team-picture imgzoom \" alt=\"Photo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
\t\t\t\t<p class=\"lead\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>

\t\t\t\t<img src=\"/uploads/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"mb-2 team-picture imgzoom\" alt=\"Photo descriptive ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo " 1\">

\t\t\t\t<img src=\"/uploads/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery2", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"mb-2 team-picture imgzoom\" alt=\"Photo descriptive ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo " 2\">

\t\t\t\t<img src=\"/uploads/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery3", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"mb-2 team-picture imgzoom\" alt=\"Photo descriptive ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo " 3\">

\t\t\t</div>
\t\t</div>
\t\t<hr class=\"featurette-divider\">

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 19,  127 => 17,  120 => 15,  115 => 13,  109 => 12,  104 => 10,  100 => 9,  96 => 7,  92 => 6,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Qui sommes nous
{% endblock %}
{% block content %}
\t<h1 class=\"text-center mt-5\">Qui sommes-nous?</h1>
\t{% for team in teams %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 team-block\">
\t\t\t\t<h2 class=\"featurette-heading\">{{ team.name }}<br>
\t\t\t\t\t<span class=\"text-muted\">{{ team.role }}</span>
\t\t\t\t</h2>
\t\t\t\t<img src=\"/uploads/{{ team.illustration }}\" class=\"mb-2 team-picture imgzoom \" alt=\"Photo {{ team.name }}\">
\t\t\t\t<p class=\"lead\">{{ team.description }}</p>

\t\t\t\t<img src=\"/uploads/{{ team.gallery }}\" class=\"mb-2 team-picture imgzoom\" alt=\"Photo descriptive {{ team.name }} 1\">

\t\t\t\t<img src=\"/uploads/{{ team.gallery2 }}\" class=\"mb-2 team-picture imgzoom\" alt=\"Photo descriptive {{ team.name }} 2\">

\t\t\t\t<img src=\"/uploads/{{ team.gallery3 }}\" class=\"mb-2 team-picture imgzoom\" alt=\"Photo descriptive {{ team.name }} 3\">

\t\t\t</div>
\t\t</div>
\t\t<hr class=\"featurette-divider\">

\t{% endfor %}
{% endblock %}
", "team/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\team\\index.html.twig");
    }
}
