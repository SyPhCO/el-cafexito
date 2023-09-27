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

/* base.html.twig */
class __TwigTemplate_2f1478f284819b211fe784591c42c653 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"La boutique familial qui vous fera voyager\">
\t\t<meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</title>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/elcafexito.css"), "html", null, true);
        echo "\">
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none;
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>

\t</head>
\t<body class=\"backgroundColor\">
\t\t";
        // line 39
        $this->loadTemplate("./components/_navbar.html.twig", "base.html.twig", 39)->display($context);
        // line 40
        echo "

\t\t<main role=\"main\">

\t\t\t";
        // line 44
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 45
            echo "\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 48
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo " class=\"active\" ";
                }
                echo "></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 54
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
                if (($context["key"] == 0)) {
                    echo " active ";
                }
                echo " \" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 54), "html", null, true);
                echo "'); background-size: cover;\">

\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t\t<h1>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 58), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 59), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-info\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 61), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 61), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon-scroll\">
\t\t\t\t\t<div class=\"mouse\">
\t\t\t\t\t\t<div class=\"wheel\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icon-arrows\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 86
        echo "
\t\t\t<div class=\"container marketing ";
        // line 87
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\"> ";
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 90
        $this->loadTemplate("./components/_footer.html.twig", "base.html.twig", 90)->display($context);
        // line 91
        echo "
\t\t\t</main>
\t\t\t";
        // line 94
        echo "\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
\t\t</body>
\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "\t\t\t\tEl Cafexito
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  256 => 87,  245 => 11,  235 => 10,  220 => 96,  216 => 95,  213 => 94,  209 => 91,  207 => 90,  203 => 88,  197 => 87,  194 => 86,  173 => 67,  159 => 61,  154 => 59,  150 => 58,  138 => 54,  134 => 53,  129 => 50,  116 => 48,  112 => 47,  108 => 45,  106 => 44,  100 => 40,  98 => 39,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  58 => 13,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"La boutique familial qui vous fera voyager\">
\t\t<meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tEl Cafexito
\t\t\t{% endblock %}
\t\t</title>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/css/elcafexito.css')}}\">
\t\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none;
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>

\t</head>
\t<body class=\"backgroundColor\">
\t\t{% include './components/_navbar.html.twig' %}


\t\t<main role=\"main\">

\t\t\t{% if block('carousel') is defined %}
\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t{% for key,header in headers %}
\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"{{ key }}\" {% if key == 0 %} class=\"active\" {% endif %}></li>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t{% for key,header in headers %}
\t\t\t\t\t\t\t<div class=\"carousel-item {% if key == 0 %} active {% endif %} \" style=\"background: url('/uploads/{{ header.illustration }}'); background-size: cover;\">

\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t\t<h1>{{ header.title }}</h1>
\t\t\t\t\t\t\t\t\t\t<p>{{ header.content }}</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-info\" href=\"{{ header.btnUrl }}\" role=\"button\">{{ header.btnTitle }}</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon-scroll\">
\t\t\t\t\t<div class=\"mouse\">
\t\t\t\t\t\t<div class=\"wheel\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icon-arrows\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %}\"> {% block content %}{% endblock %}

\t\t\t\t</div>
\t\t\t\t{% include './components/_footer.html.twig' %}

\t\t\t</main>
\t\t\t{# <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script> #}
\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t\t<script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/app.js') }}\"></script>
\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
\t\t</body>
\t</html>
", "base.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\base.html.twig");
    }
}
