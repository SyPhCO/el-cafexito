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

/* cart/index.html.twig */
class __TwigTemplate_e60978079e6277d7c45ee2337b23c3b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier - El cafexito";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1 class=\"mt-5 mb-5 text-center\">Mon panier</h1>
";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 5, $this->source); })())) > 0)) {
            // line 6
            echo "    <table class=\"table text-light\">
        <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 17
            $context["total"] = null;
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "            <tr>
                <th scope=\"row\">
                    <img src=\"/uploads/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 21), "illustration", [], "any", false, false, false, 21), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                echo "\" height=\"100px\" width=\"100px\" style=\"object-fit: cover\"><br>
                ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
                echo "
                </th>
                <td>
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/moins8.png"), "html", null, true);
                echo "\" height=\"25px\" class=\"font-weight-bold mr-1\" alt=\"Retirer un produit\">
                    </a>
                    <strong> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28), "html", null, true);
                echo "</strong>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/plus8.png"), "html", null, true);
                echo "\" height=\"25px\" class=\"font-weight-bold ml-1\" alt=\"Ajouter un produit\">
                    </a>
                 </td>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "price", [], "any", false, false, false, 34) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                <td>
                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/poub8.png"), "html", null, true);
                echo "\" height=\"25px\" alt=\"Supprimer mon produit\">
                </a>
                </td>
            </tr>
            ";
                // line 41
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 41, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41)));
                // line 42
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </tbody>
    </table>
    <div class=\"text-right mb-5\">
        <b>Total de mon panier : </b>";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €
        <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-info btn-block mt-3\">Valider mon panier</a>

    </div>
";
        } else {
            // line 51
            echo "    <hr>
    <p class=\"font-weight-bold\">Votre panier est vide.</p>
";
        }
        // line 54
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\" class=\"btn btn-danger btn-sm\">Ajouter un autre article ?</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 54,  196 => 51,  189 => 47,  185 => 46,  180 => 43,  174 => 42,  172 => 41,  165 => 37,  161 => 36,  156 => 34,  152 => 33,  146 => 30,  142 => 29,  138 => 28,  133 => 26,  129 => 25,  123 => 22,  117 => 21,  113 => 19,  108 => 18,  106 => 17,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mon panier - El cafexito{% endblock %}
{% block content %}
<h1 class=\"mt-5 mb-5 text-center\">Mon panier</h1>
{% if cart|length > 0 %}
    <table class=\"table text-light\">
        <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
        {% set total = null %}
        {% for product in cart %}
            <tr>
                <th scope=\"row\">
                    <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"100px\" width=\"100px\" style=\"object-fit: cover\"><br>
                {{ product.product.name }}
                </th>
                <td>
                    <a href=\"{{ path('app_decrease_to_cart', {'id' : product.product.id}) }}\">
                        <img src=\"{{asset('assets/images/moins8.png')}}\" height=\"25px\" class=\"font-weight-bold mr-1\" alt=\"Retirer un produit\">
                    </a>
                    <strong> {{ product.quantity }}</strong>
                    <a href=\"{{ path('app_add_to_cart', {'id' : product.product.id} )}}\">
                        <img src=\"{{asset('assets/images/plus8.png')}}\" height=\"25px\" class=\"font-weight-bold ml-1\" alt=\"Ajouter un produit\">
                    </a>
                 </td>
                <td>{{ (product.product.price / 100)|number_format(2, ',', '.') }} €</td>
                <td>{{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }} €</td>
                <td>
                <a href=\"{{ path('app_delete_to_cart', {'id' : product.product.id}) }}\">
                    <img src=\"{{asset('assets/images/poub8.png')}}\" height=\"25px\" alt=\"Supprimer mon produit\">
                </a>
                </td>
            </tr>
            {% set total = total + (product.product.price * product.quantity) %}
        {% endfor %}
        </tbody>
    </table>
    <div class=\"text-right mb-5\">
        <b>Total de mon panier : </b>{{ (total / 100)|number_format(2, ',', '.') }} €
        <a href=\"{{ path('app_order') }}\" class=\"btn btn-info btn-block mt-3\">Valider mon panier</a>

    </div>
{% else %}
    <hr>
    <p class=\"font-weight-bold\">Votre panier est vide.</p>
{% endif %}
<a href=\"{{ path('app_products') }}\" class=\"btn btn-danger btn-sm\">Ajouter un autre article ?</a>
{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\cart\\index.html.twig");
    }
}
