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
class __TwigTemplate_752d61d3f8278e7e2d40e49e02c52c37 extends Template
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

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ma commande - Nordic Indiana";
        
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
        echo "    <h1 class=\"mt-5\">Ma Commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "reference", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    <hr>
    <strong>Satut de la commande : </strong>
      ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "state", [], "any", false, false, false, 10) == 1)) {
            // line 11
            echo "        Paiment accepté.
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12) == 2)) {
            // line 13
            echo "        Préparation en cours. 
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14) == 3)) {
            // line 15
            echo "        Livraison en cours.
      ";
        }
        // line 16
        echo " <br>
    <strong>Commande passée le : </strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo " <br>
    <strong>Référence de ma commande : </strong>  <small>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "reference", [], "any", false, false, false, 18), "html", null, true);
        echo "</small> <br>
    <strong>Mode de livraison : </strong>  ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "carriername", [], "any", false, false, false, 19), "html", null, true);
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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "orderDetails", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 34
            echo "
    <tr>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
      <td>x";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
      <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
      <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </tbody>
</table>

<div class=\"text-right\">
    <strong>Sous total : </strong> ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "getTotal", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
        echo "<br>
    <strong>Livraison : </strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "carrierprice", [], "any", false, false, false, 47) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
    <strong>Total : </strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "carrierPrice", [], "any", false, false, false, 48) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "getTotal", [], "any", false, false, false, 48)) / 100), 2, ",", "."), "html", null, true);
        echo " € 
</div>
<a href=\"";
        // line 50
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
        return array (  187 => 50,  182 => 48,  178 => 47,  174 => 46,  168 => 42,  159 => 39,  155 => 38,  151 => 37,  147 => 36,  143 => 34,  139 => 33,  122 => 19,  118 => 18,  114 => 17,  111 => 16,  107 => 15,  105 => 14,  102 => 13,  100 => 12,  97 => 11,  95 => 10,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Ma commande - Nordic Indiana{% endblock %}

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
