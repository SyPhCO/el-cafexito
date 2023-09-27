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

/* account/order.html.twig */
class __TwigTemplate_66f63c3754bdd18a7c1024a465835f58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

        echo "Mes commandes - El Cafexito";
        
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
    <h1 class=\"text-center p-5\">Mes Commandes</h1>
   
    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 9, $this->source); })())) == 0)) {
            // line 10
            echo "        <hr>
    <p class=\"text-center\">
        Vous n'avez pas encore passé de commande via votre compte sur El Cafexito.
    </p>
    ";
        } else {
            // line 15
            echo "        <table class=\"table text-light  mt-5\">
            <thead>
                <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Passé le</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody class=\"m-1\">
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 27
                echo "                    <tr>
                        <td><span class=\"badge badge-secondary\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 28), "html", null, true);
                echo "</span></td>
                        <td>
                            ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 30) == 1)) {
                    // line 31
                    echo "                                Paiment accepté.
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 32
$context["order"], "state", [], "any", false, false, false, 32) == 2)) {
                    // line 33
                    echo "                                Préparation en cours. 
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 34
$context["order"], "state", [], "any", false, false, false, 34) == 3)) {
                    // line 35
                    echo "                                Livraison en cours.
                            ";
                }
                // line 37
                echo "                        </td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 39) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 39)) / 100), 2, ",", "."), "html", null, true);
                echo " € </td>
                        <td class=\"text-right badge badge-info m-2\" ><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"text-light\">Voir ma commande</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
            </tbody>
        </table>


        
    ";
        }
        // line 50
        echo " 
    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\" class=\"btn btn-danger btn-sm\">Retour</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  172 => 50,  163 => 43,  154 => 40,  150 => 39,  146 => 38,  143 => 37,  139 => 35,  137 => 34,  134 => 33,  132 => 32,  129 => 31,  127 => 30,  122 => 28,  119 => 27,  115 => 26,  102 => 15,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes - El Cafexito{% endblock %}

{% block content %}

    <h1 class=\"text-center p-5\">Mes Commandes</h1>
   
    {% if orders|length == 0 %}
        <hr>
    <p class=\"text-center\">
        Vous n'avez pas encore passé de commande via votre compte sur El Cafexito.
    </p>
    {% else %}
        <table class=\"table text-light  mt-5\">
            <thead>
                <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Passé le</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody class=\"m-1\">
                {% for order in orders %}
                    <tr>
                        <td><span class=\"badge badge-secondary\">{{ order.reference }}</span></td>
                        <td>
                            {% if order.state == 1 %}
                                Paiment accepté.
                            {% elseif order.state == 2 %}
                                Préparation en cours. 
                            {% elseif order.state == 3 %}
                                Livraison en cours.
                            {% endif %}
                        </td>
                        <td>{{ order.createdAt|date('d/m/Y') }}</td>
                        <td>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, ',', '.'  ) }} € </td>
                        <td class=\"text-right badge badge-info m-2\" ><a href=\"{{ path('app_account_order_show', {'reference' : order.reference })}}\" class=\"text-light\">Voir ma commande</a></td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>


        
    {% endif %}
 
    <a href=\"{{ path('app_account') }}\" class=\"btn btn-danger btn-sm\">Retour</a>
{% endblock %}", "account/order.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\order.html.twig");
    }
}
