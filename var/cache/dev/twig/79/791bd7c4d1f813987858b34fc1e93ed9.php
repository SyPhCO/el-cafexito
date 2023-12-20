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
        echo "\t<hr>
\t<h1 class=\"text-center mt-5\">Produits
\t</h1>

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "\t\t
\t\t<div class=\"productBlock container border\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1 class=\"col-12 text-center mb-3 mt-5\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</h1>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"/uploads/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\" loading=\"lazy\" class=\"img-thumbnail rounded\" width=\"400\" height=\"400\" data-lightbox=\"imgGLR\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 font-weight-bold text-center d-flex m-auto \" height=\"400\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>

\t\t\t\t<hr class=\"mt-2 mb-2\">

\t\t\t\t<div class=\"col-md-4 d-flex m-auto d-flex justify-content-center \">
\t\t\t\t\t<div class=\"product-price font-weight-bold  \">
\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27) / 100), 2, ",", "."), "html", null, true);
            echo "
\t\t\t\t\t\t€
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<span class=\"product-subtitle \">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 32), "html", null, true);
            echo "</span>
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-info text-center font-weight-bold mt-2\">Laissez vous tenter</a>
\t\t\t\t</div><hr class=\"hrP\">
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"diapo\">

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check1-";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" name=\"check\" class=\"r_check\" checked=\"checked\">
\t\t\t\t\t<label for=\"check1-";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette active\" src=\"/uploads/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery", [], "any", false, false, false, 43), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image active\" src=\"/uploads/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery", [], "any", false, false, false, 45), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\"></div>


\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check2-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check2-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery2", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery2", [], "any", false, false, false, 53), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\"></div>

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check3-";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check3-";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery3", [], "any", false, false, false, 58), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery3", [], "any", false, false, false, 60), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\">
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check4-";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check4-";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery4", [], "any", false, false, false, 66), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery4", [], "any", false, false, false, 68), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\">
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check5-";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check5-";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery5", [], "any", false, false, false, 74), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery5", [], "any", false, false, false, 76), "html", null, true);
            echo "\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
<hr class=\"hrP\">
\t\t\t<div class=\"d-flex flex-row row comments\">
\t\t\t
\t\t\t\t";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentsByProduct"]) || array_key_exists("commentsByProduct", $context) ? $context["commentsByProduct"] : (function () { throw new RuntimeError('Variable "commentsByProduct" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                // line 84
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 84) == twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 84))) {
                    // line 85
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comments"], 1, [], "array", false, false, false, 85));
                    foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t<div class=\"d-block col-md-4 col-sm-6 text-center\" >
\t\t\t\t\t\t\t\t\t<h4 class=\"col-md-12 text-center fw-bolder \" id=\"top-";
                        // line 87
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 87), "html", null, true);
                        echo "-top\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 87), "author", [], "any", false, false, false, 87), "html", null, true);
                        echo "</h4>
\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-md-12  d-block\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/uploads/comments/";
                        // line 89
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 89), "illustration", [], "any", false, false, false, 89), "html", null, true);
                        echo "\" class=\"mb-2\" alt=\"test3\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-10 d-block scrollbar\" id=\"style-9\">";
                        // line 91
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 91), "comment", [], "any", false, false, false, 91), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t</div>
\t\t</div><hr class=\"text-light bold\">
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
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
        return array (  308 => 99,  300 => 96,  294 => 95,  291 => 94,  282 => 91,  277 => 89,  270 => 87,  267 => 86,  262 => 85,  259 => 84,  255 => 83,  245 => 76,  240 => 74,  236 => 73,  232 => 72,  225 => 68,  220 => 66,  216 => 65,  212 => 64,  205 => 60,  200 => 58,  196 => 57,  192 => 56,  186 => 53,  181 => 51,  177 => 50,  173 => 49,  166 => 45,  161 => 43,  157 => 42,  153 => 41,  143 => 34,  138 => 32,  130 => 27,  121 => 21,  113 => 18,  109 => 17,  104 => 15,  99 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}El Cafexito - Produits
{% endblock %}

{% block content %}
\t<hr>
\t<h1 class=\"text-center mt-5\">Produits
\t</h1>

\t{% for product in products %}
\t\t
\t\t<div class=\"productBlock container border\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1 class=\"col-12 text-center mb-3 mt-5\">{{ product.name }}</h1>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"{{ path('app_product', { 'slug' : product.slug }) }}\">
\t\t\t\t\t\t<img src=\"/uploads/{{ product.illustration }}\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"img-thumbnail rounded\" width=\"400\" height=\"400\" data-lightbox=\"imgGLR\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 font-weight-bold text-center d-flex m-auto \" height=\"400\">{{ product.description }}</div>

\t\t\t\t<hr class=\"mt-2 mb-2\">

\t\t\t\t<div class=\"col-md-4 d-flex m-auto d-flex justify-content-center \">
\t\t\t\t\t<div class=\"product-price font-weight-bold  \">
\t\t\t\t\t\t{{ (product.price / 100)|number_format(2, ',', '.') }}
\t\t\t\t\t\t€
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<span class=\"product-subtitle \">{{ product.subtitle }}</span>
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"{{ path('app_product', { 'slug' : product.slug }) }}\" class=\"btn btn-info text-center font-weight-bold mt-2\">Laissez vous tenter</a>
\t\t\t\t</div><hr class=\"hrP\">
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"diapo\">

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check1-{{ product.id }}\" name=\"check\" class=\"r_check\" checked=\"checked\">
\t\t\t\t\t<label for=\"check1-{{ product.id }}\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette active\" src=\"/uploads/{{ product.gallery }}\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image active\" src=\"/uploads/{{ product.gallery }}\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\"></div>


\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check2-{{ product.id }}\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check2-{{ product.id }}\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/{{ product.gallery2 }}\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/{{ product.gallery2 }}\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\"></div>

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check3-{{ product.id }}\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check3-{{ product.id }}\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/{{ product.gallery3 }}\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/{{ product.gallery3 }}\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\">
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check4-{{ product.id }}\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check4-{{ product.id }}\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/{{ product.gallery4 }}\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/{{ product.gallery4 }}\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\">
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"check5-{{ product.id }}\" name=\"check\" class=\"r_check\">
\t\t\t\t\t<label for=\"check5-{{ product.id }}\" class=\"on_check\">
\t\t\t\t\t\t<img class=\"vignette\" src=\"/uploads/{{ product.gallery5 }}\" alt=\"Vignette descrivant le produit\" loading=\"lazy\">
\t\t\t\t\t</label>
\t\t\t\t\t<img class=\"big_image\" src=\"/uploads/{{ product.gallery5 }}\" alt=\"Vignette descrivant le produit grand format\" loading=\"lazy\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
<hr class=\"hrP\">
\t\t\t<div class=\"d-flex flex-row row comments\">
\t\t\t
\t\t\t\t{% for comments in commentsByProduct %}
\t\t\t\t\t{% if (comments[0] == product.id) %}
\t\t\t\t\t\t{% for comment in comments[1] %}
\t\t\t\t\t\t\t\t<div class=\"d-block col-md-4 col-sm-6 text-center\" >
\t\t\t\t\t\t\t\t\t<h4 class=\"col-md-12 text-center fw-bolder \" id=\"top-{{ product.id }}-top\">{{comment[1].author}}</h4>
\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-md-12  d-block\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/uploads/comments/{{ comment[1].illustration }}\" class=\"mb-2\" alt=\"test3\" loading=\"lazy\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-10 d-block scrollbar\" id=\"style-9\">{{comment[1].comment}}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div><hr class=\"text-light bold\">
\t{% endfor %}

{% endblock %}
", "comments/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\comments\\index.html.twig");
    }
}
