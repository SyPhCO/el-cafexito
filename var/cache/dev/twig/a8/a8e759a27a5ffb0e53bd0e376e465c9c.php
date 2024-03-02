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

/* account/order_show.html.twig */
class __TwigTemplate_fc4ee00dd8d0c6e236c149fd000f6911 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
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

        echo "Ma commande - El cafexito";
        
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
        echo "    <h1 class=\"mt-5\">Ma Commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "reference", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <hr>
    <strong>Satut de la commande : </strong>
      ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "state", [], "any", false, false, false, 7) == 1)) {
            // line 8
            echo "        Paiment accepté.
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "state", [], "any", false, false, false, 9) == 2)) {
            // line 10
            echo "        Préparation en cours. 
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "state", [], "any", false, false, false, 11) == 3)) {
            // line 12
            echo "        Livraison en cours.
      ";
        }
        // line 13
        echo " <br>
    <strong>Commande passée le : </strong> ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        echo " <br>
    <strong>Référence de ma commande : </strong>  <small>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "reference", [], "any", false, false, false, 15), "html", null, true);
        echo "</small> <br>
    <strong>Mode de livraison : </strong>  ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "carriername", [], "any", false, false, false, 16), "html", null, true);
        echo "
    <hr>
    <strong>Détails :</strong>

<table class=\"table text-light mt-3\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 30, $this->source); })()), "orderDetails", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            echo "    <tr>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
      <td>x";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
      <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
      <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 35) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </tbody>
</table>
<div class=\"text-right\">
    <strong>Sous total : </strong> ";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "getTotal", [], "any", false, false, false, 41) / 100), 2, ",", "."), "html", null, true);
        echo "<br>
    <strong>Livraison : </strong> ";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 42, $this->source); })()), "carrierprice", [], "any", false, false, false, 42) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
    <strong>Total : </strong>";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 43, $this->source); })()), "carrierPrice", [], "any", false, false, false, 43) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 43, $this->source); })()), "getTotal", [], "any", false, false, false, 43)) / 100), 2, ",", "."), "html", null, true);
        echo " € 
</div>
<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\"class=\"btn btn-danger btn-sm\">Retour</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 45,  180 => 43,  176 => 42,  172 => 41,  167 => 38,  158 => 35,  154 => 34,  150 => 33,  146 => 32,  143 => 31,  139 => 30,  122 => 16,  118 => 15,  114 => 14,  111 => 13,  107 => 12,  105 => 11,  102 => 10,  100 => 9,  97 => 8,  95 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Ma commande - El cafexito{% endblock %}
{% block content %}
    <h1 class=\"mt-5\">Ma Commande {{ order.reference }}</h1>
    <hr>
    <strong>Satut de la commande : </strong>
      {% if order.state == 1 %}
        Paiment accepté.
      {% elseif order.state == 2 %}
        Préparation en cours. 
      {% elseif order.state == 3 %}
        Livraison en cours.
      {% endif %} <br>
    <strong>Commande passée le : </strong> {{ order.createdAt|date('d/m/Y') }} <br>
    <strong>Référence de ma commande : </strong>  <small>{{ order.reference }}</small> <br>
    <strong>Mode de livraison : </strong>  {{ order.carriername }}
    <hr>
    <strong>Détails :</strong>

<table class=\"table text-light mt-3\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>
  {% for product in order.orderDetails %}
    <tr>
      <td>{{product.product}}</td>
      <td>x{{ product.quantity}}</td>
      <td>{{ (product.price / 100)|number_format(2, ',', '.') }} €</td>
      <td>{{ (product.total / 100)|number_format(2, ',', '.') }} €</td>
    </tr>
  {% endfor %}
  </tbody>
</table>
<div class=\"text-right\">
    <strong>Sous total : </strong> {{ (order.getTotal / 100)|number_format(2, ',', '.') }}<br>
    <strong>Livraison : </strong> {{ (order.carrierprice / 100)|number_format(2, ',', '.') }} €<br>
    <strong>Total : </strong>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, ',', '.'  ) }} € 
</div>
<a href=\"{{ path('app_account_order') }}\"class=\"btn btn-danger btn-sm\">Retour</a>
{% endblock %}", "account/order_show.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\order_show.html.twig");
    }
}
