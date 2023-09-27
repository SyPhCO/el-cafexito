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

/* comments/index.html.twig */
class __TwigTemplate_f53686040c747b407684c689143168be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comments/index.html.twig", 1);
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

        echo "El Cafexito - Produits
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<hr>
\t<h1 class=\"text-center mt-5\">Produits </h1>

\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "
\t\t\t<hr class=\" mt-5 mb-5 pt-1\">
\t\t\t<div class=\"card\">
\t\t\t\t<ul class=\"nav nav-tabs \" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"home-";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#home-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Produit</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#profile-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Photographies</a>
\t\t\t\t\t</li>
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentsByProduct"]) || array_key_exists("commentsByProduct", $context) ? $context["commentsByProduct"] : (function () { throw new RuntimeError('Variable "commentsByProduct" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                // line 22
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 22) == twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "\t\t\t\t\t";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["comments"], 1, [], "array", false, false, false, 23))) {
                        // line 24
                        echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-";
                        // line 25
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25), "html", null, true);
                        echo "-tab\" data-toggle=\"tab\" href=\"#contact-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25), "html", null, true);
                        echo "\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Avis client</a>
\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 28
                    echo "\t\t\t";
                }
                // line 29
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">


\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"home-";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t<div class=\"container mt-5 p-2\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<h1 class=\"col-12 text-center\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"img-thumbnail rounded\" width=\"400\" height=\"400\" data-lightbox=\"imgGLR\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8 font-weight-bold text-center d-flex m-auto \" height=\"400\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</div>

\t\t\t\t\t\t\t\t<hr class=\"mt-2 mb-2\">

\t\t\t\t\t\t\t\t<div class=\"col-md-4 d-flex m-auto d-flex justify-content-center \">
\t\t\t\t\t\t\t\t\t<div class=\"product-price font-weight-bold  \">
\t\t\t\t\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50) / 100), 2, ",", "."), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t€ </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"product-subtitle \">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 54), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-info text-center font-weight-bold mt-2\">Laissez vous tenter</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane fade\" id=\"profile-";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

\t\t\t\t\t\t<div class=\"container cont-gallery row\" id=\"#gallery\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery2", [], "any", false, false, false, 72), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test2\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery3", [], "any", false, false, false, 76), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery4", [], "any", false, false, false, 80), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery5", [], "any", false, false, false, 84), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery6", [], "any", false, false, false, 88), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal\">
\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t<img class=\"modal-content\" src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 98
            $this->loadTemplate("./comments/_comments_list.html.twig", "comments/index.html.twig", 98)->display($context);
            // line 99
            echo "
\t\t\t\t</div>
\t\t\t</div>

\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "comments/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 104,  282 => 99,  280 => 98,  267 => 88,  260 => 84,  253 => 80,  246 => 76,  239 => 72,  232 => 68,  224 => 63,  214 => 56,  209 => 54,  202 => 50,  193 => 44,  185 => 41,  181 => 40,  176 => 38,  170 => 35,  163 => 30,  157 => 29,  154 => 28,  146 => 25,  143 => 24,  140 => 23,  137 => 22,  133 => 21,  126 => 19,  118 => 16,  111 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}El Cafexito - Produits
{% endblock %}

{% block content %}
<hr>
\t<h1 class=\"text-center mt-5\">Produits </h1>

\t{% for product in products %}

\t\t\t<hr class=\" mt-5 mb-5 pt-1\">
\t\t\t<div class=\"card\">
\t\t\t\t<ul class=\"nav nav-tabs \" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"home-{{ product.id }}-tab\" data-toggle=\"tab\" href=\"#home-{{ product.id }}\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Produit</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-{{ product.id }}-tab\" data-toggle=\"tab\" href=\"#profile-{{ product.id }}\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Photographies</a>
\t\t\t\t\t</li>
\t\t{% for comments in commentsByProduct %}
\t\t\t{% if (comments[0] == product.id) %}
\t\t\t\t\t{% if comments[1] is not empty %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-{{ product.id }}-tab\" data-toggle=\"tab\" href=\"#contact-{{ product.id }}\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Avis client</a>
\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t{% endfor %}

\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">


\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"home-{{ product.id }}\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t<div class=\"container mt-5 p-2\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<h1 class=\"col-12 text-center\">{{ product.name }}</h1>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_product', { 'slug' : product.slug }) }}\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.illustration }}\" alt=\"{{ product.name }}\" class=\"img-thumbnail rounded\" width=\"400\" height=\"400\" data-lightbox=\"imgGLR\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8 font-weight-bold text-center d-flex m-auto \" height=\"400\">{{ product.description }}</div>

\t\t\t\t\t\t\t\t<hr class=\"mt-2 mb-2\">

\t\t\t\t\t\t\t\t<div class=\"col-md-4 d-flex m-auto d-flex justify-content-center \">
\t\t\t\t\t\t\t\t\t<div class=\"product-price font-weight-bold  \">
\t\t\t\t\t\t\t\t\t\t{{ (product.price / 100)|number_format(2, ',', '.') }}
\t\t\t\t\t\t\t\t\t\t€ </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"product-subtitle \">{{ product.subtitle }}</span>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_product', { 'slug' : product.slug }) }}\" class=\"btn btn-info text-center font-weight-bold mt-2\">Laissez vous tenter</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane fade\" id=\"profile-{{ product.id }}\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

\t\t\t\t\t\t<div class=\"container cont-gallery row\" id=\"#gallery\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.gallery }}\" class=\"mb-2 zoom\" alt=\"test\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.gallery2 }}\" class=\"mb-2 zoom\" alt=\"test2\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.gallery3 }}\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.gallery4 }}\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.gallery5 }}\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.gallery6 }}\" class=\"mb-2 zoom\" alt=\"test3\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal\">
\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t<img class=\"modal-content\" src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% include './comments/_comments_list.html.twig' %}

\t\t\t\t</div>
\t\t\t</div>

\t{% endfor %}

{% endblock %}

", "comments/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\comments\\index.html.twig");
    }
}
