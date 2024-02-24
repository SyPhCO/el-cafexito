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

/* account/accounting.html.twig */
class __TwigTemplate_740268dc78390acccb6bfb754da44f64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/accounting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/accounting.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/accounting.html.twig", 1);
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

        echo "Comptabilité";
        
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
        echo "    <h1 class=\"text-center\">Comptabilité</h1>

   <!-- Formulaire -->
    <button class=\"btn btn-success mt-5\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseForm\" aria-expanded=\"false\" aria-controls=\"collapseForm\">
        Afficher le formulaire pour ajouter une nouvelle commande manuellement
    </button>
    <div class=\"collapse\" id=\"collapseForm\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 16, $this->source); })()), "fullname", [], "any", false, false, false, 16), 'row');
        echo "</div>
                <div> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), 'row');
        echo "</div>
                <div> ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 18, $this->source); })()), "quantity", [], "any", false, false, false, 18), 'row');
        echo "</div>
                <div> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 19, $this->source); })()), "saleDate", [], "any", false, false, false, 19), 'row');
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 22, $this->source); })()), "total", [], "any", false, false, false, 22), 'row');
        echo "</div>
                <div> ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 23, $this->source); })()), "carrier", [], "any", false, false, false, 23), 'row');
        echo "</div>
                <div> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 24, $this->source); })()), "carrierPrice", [], "any", false, false, false, 24), 'row');
        echo "</div>
                <div class=\"mt-5\"> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 25, $this->source); })()), "submit", [], "any", false, false, false, 25), 'row');
        echo "</div>
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["accountingForm"]) || array_key_exists("accountingForm", $context) ? $context["accountingForm"] : (function () { throw new RuntimeError('Variable "accountingForm" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row mt-5\">
        <!-- Colonne gauche -->
        <div class=\"col-sm\">
            <h1 class=\"text-center text-light mt-5\">Commande internet</h1>
            ";
        // line 35
        if ( !twig_test_empty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "                ";
            $context["sortedOrders"] = [];
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 38
                echo "                    ";
                $context["sortedOrders"] = twig_array_merge((isset($context["sortedOrders"]) || array_key_exists("sortedOrders", $context) ? $context["sortedOrders"] : (function () { throw new RuntimeError('Variable "sortedOrders" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "orders", [], "any", false, false, false, 38));
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                ";
            $context["sortedOrders"] = twig_sort_filter($this->env, (isset($context["sortedOrders"]) || array_key_exists("sortedOrders", $context) ? $context["sortedOrders"] : (function () { throw new RuntimeError('Variable "sortedOrders" does not exist.', 40, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 40, $this->source); })()), "createdAt", [], "any", false, false, false, 40), "timestamp", [], "any", false, false, false, 40) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 40, $this->source); })()), "createdAt", [], "any", false, false, false, 40), "timestamp", [], "any", false, false, false, 40)); });
            // line 41
            echo "
                ";
            // line 42
            $context["currentMonth"] = null;
            // line 43
            echo "                ";
            $context["totalMonthPrice"] = 0;
            // line 44
            echo "                ";
            $context["currentUserFullName"] = null;
            // line 45
            echo "
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedOrders"]) || array_key_exists("sortedOrders", $context) ? $context["sortedOrders"] : (function () { throw new RuntimeError('Variable "sortedOrders" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 47
                echo "                    ";
                $context["orderMonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 47), "F Y");
                // line 48
                echo "                    ";
                if (((isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 48, $this->source); })()) != (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 48, $this->source); })()))) {
                    // line 49
                    echo "                        ";
                    if ( !(null === (isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 49, $this->source); })()))) {
                        // line 50
                        echo "                            <tr>
                                <td colspan=\"2\"><strong>Total du mois</strong></td>
                                <td colspan=\"3\"></td>
                                <td><strong>";
                        // line 53
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 53, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
                        echo " €</strong></td>
                            </tr>
                            </tbody>
                            </table>
                        ";
                    }
                    // line 58
                    echo "                        <h2 class=\"mt-5  text-center\">";
                    echo twig_escape_filter($this->env, (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 58, $this->source); })()), "html", null, true);
                    echo "</h2>
                        <table class=\"table table-hover bg-light\">
                        <caption>Commandes internet</caption>
                            <thead>
                                <tr>
                                    <th>Acheteur</th>
                                    <th>Date</th>
                                    <th>Prix</th>
                                    <th>Produits Achetés</th>
                                    <th>Mode livraison</th>
                                    <th>Tarif total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                    // line 72
                    $context["totalMonthPrice"] = 0;
                    // line 73
                    echo "                                ";
                    $context["currentUserFullName"] = null;
                    // line 74
                    echo "                            ";
                }
                // line 75
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
                    // line 76
                    echo "                                <tr>
                                    <td>
                                        ";
                    // line 78
                    if (((isset($context["currentUserFullName"]) || array_key_exists("currentUserFullName", $context) ? $context["currentUserFullName"] : (function () { throw new RuntimeError('Variable "currentUserFullName" does not exist.', 78, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 78), "getFullName", [], "method", false, false, false, 78))) {
                        // line 79
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 79), "getFullName", [], "method", false, false, false, 79), "html", null, true);
                        echo "
                                            ";
                        // line 80
                        $context["currentUserFullName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 80), "getFullName", [], "method", false, false, false, 80);
                        // line 81
                        echo "                                        ";
                    }
                    // line 82
                    echo "                                    </td>
                                    <td>";
                    // line 83
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 83), "d-m-Y"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 84
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["orderDetail"], "total", [], "any", false, false, false, 84) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                    <td>";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "quantity", [], "any", false, false, false, 85), "html", null, true);
                    echo " X ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "product", [], "any", false, false, false, 85), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "carriername", [], "any", false, false, false, 86), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "carrierprice", [], "any", false, false, false, 86) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                    ";
                    // line 87
                    $context["totalOrderPrice"] = (twig_get_attribute($this->env, $this->source, $context["orderDetail"], "total", [], "any", false, false, false, 87) + twig_get_attribute($this->env, $this->source, $context["order"], "carrierprice", [], "any", false, false, false, 87));
                    // line 88
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalOrderPrice"]) || array_key_exists("totalOrderPrice", $context) ? $context["totalOrderPrice"] : (function () { throw new RuntimeError('Variable "totalOrderPrice" does not exist.', 88, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                </tr>
                                ";
                    // line 90
                    $context["totalMonthPrice"] = ((isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 90, $this->source); })()) + (isset($context["totalOrderPrice"]) || array_key_exists("totalOrderPrice", $context) ? $context["totalOrderPrice"] : (function () { throw new RuntimeError('Variable "totalOrderPrice" does not exist.', 90, $this->source); })()));
                    // line 91
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                            ";
                $context["currentMonth"] = (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 92, $this->source); })());
                // line 93
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                        <tr>
                            <td colspan=\"2\"><strong>Total du mois</strong></td>
                            <td colspan=\"3\"></td>
                            <td><strong>";
            // line 97
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 97, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €</strong></td>
                        </tr>
                    </tbody>
                </table>
            ";
        } else {
            // line 102
            echo "                <p>Aucune donnée à afficher.</p>
            ";
        }
        // line 104
        echo "        </div>

        <!-- Colonne droite  -->
<div class=\"col-sm\">
    <h1 class=\"text-center text-light mt-5\">Commande Manuelle</h1>

    ";
        // line 110
        if ( !twig_test_empty((isset($context["manualOrders"]) || array_key_exists("manualOrders", $context) ? $context["manualOrders"] : (function () { throw new RuntimeError('Variable "manualOrders" does not exist.', 110, $this->source); })()))) {
            // line 111
            echo "        ";
            $context["sortedManualOrders"] = twig_sort_filter($this->env, (isset($context["manualOrders"]) || array_key_exists("manualOrders", $context) ? $context["manualOrders"] : (function () { throw new RuntimeError('Variable "manualOrders" does not exist.', 111, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 111, $this->source); })()), "saleDate", [], "any", false, false, false, 111), "timestamp", [], "any", false, false, false, 111) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 111, $this->source); })()), "saleDate", [], "any", false, false, false, 111), "timestamp", [], "any", false, false, false, 111)); });
            // line 112
            echo "        
        ";
            // line 113
            $context["currentMonth"] = null;
            // line 114
            echo "        ";
            $context["totalMonthPrice"] = 0;
            // line 115
            echo "        
        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedManualOrders"]) || array_key_exists("sortedManualOrders", $context) ? $context["sortedManualOrders"] : (function () { throw new RuntimeError('Variable "sortedManualOrders" does not exist.', 116, $this->source); })()));
            foreach ($context['_seq'] as $context["index"] => $context["manualOrder"]) {
                // line 117
                echo "            ";
                $context["orderMonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "saleDate", [], "any", false, false, false, 117), "F Y");
                // line 118
                echo "            ";
                if (((isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 118, $this->source); })()) != (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 118, $this->source); })()))) {
                    // line 119
                    echo "                ";
                    if ( !(null === (isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 119, $this->source); })()))) {
                        // line 120
                        echo "                    <tr>
                        <td colspan=\"2\"><strong>Total du mois</strong></td>
                        <td colspan=\"3\"></td>
                        <td><strong>";
                        // line 123
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 123, $this->source); })()), 2, ",", "."), "html", null, true);
                        echo " €</strong></td>
                    </tr>
                     </tbody>
                            </table>
                ";
                    }
                    // line 128
                    echo "                <h2 class=\"mt-5 text-center\">";
                    echo twig_escape_filter($this->env, (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 128, $this->source); })()), "html", null, true);
                    echo "</h2>
                <table class=\"table table-hover bg-light\">
                        <caption>Commandes manuelle</caption>
                    <thead>
                        <tr>
                            <th>Acheteur</th>
                            <th>Date</th>
                            <th>Prix</th>
                            <th>Produits Achetés</th>
                            <th>Mode livraison</th>
                            <th>Tarif total</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                    // line 142
                    $context["totalMonthPrice"] = 0;
                    // line 143
                    echo "                    ";
                }
                // line 144
                echo "                    <tr>
                        <td>";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "fullname", [], "any", false, false, false, 145), "html", null, true);
                echo "</td>
                        <td>";
                // line 146
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "saleDate", [], "any", false, false, false, 146), "d-m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 147
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "total", [], "any", false, false, false, 147), 2, ",", "."), "html", null, true);
                echo " €</td>
                        <td>";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "quantity", [], "any", false, false, false, 148), "html", null, true);
                echo " X ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "product", [], "any", false, false, false, 148), "html", null, true);
                echo "</td>
                        <td>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrier", [], "any", false, false, false, 149), "html", null, true);
                echo "</td>
                        <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrierPrice", [], "any", false, false, false, 150), 2, ",", "."), "html", null, true);
                echo " €</td>
                    </tr>
                    ";
                // line 152
                $context["totalMonthPrice"] = ((isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 152, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["manualOrder"], "total", [], "any", false, false, false, 152));
                // line 153
                echo "                ";
                $context["currentMonth"] = (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 153, $this->source); })());
                // line 154
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['manualOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "            <tr>
                <td colspan=\"2\"><strong>Total du mois</strong></td>
                <td colspan=\"3\"></td>
                <td><strong>";
            // line 158
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 158, $this->source); })()), 2, ",", "."), "html", null, true);
            echo " €</strong></td>
            </tr>
        </tbody>
    </table>
    ";
        } else {
            // line 163
            echo "        <p>Aucune donnée à afficher.</p>
    ";
        }
        // line 165
        echo "</div>
    </div>
<!-- suppression de la class marginBlock pour avoir les tableaux les plus large possible -->
        <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var marginBlockElement = document.querySelector('.marginBlock');
            if (marginBlockElement) {
                marginBlockElement.classList.remove('marginBlock');
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/accounting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 165,  450 => 163,  442 => 158,  437 => 155,  431 => 154,  428 => 153,  426 => 152,  421 => 150,  417 => 149,  411 => 148,  407 => 147,  403 => 146,  399 => 145,  396 => 144,  393 => 143,  391 => 142,  373 => 128,  365 => 123,  360 => 120,  357 => 119,  354 => 118,  351 => 117,  347 => 116,  344 => 115,  341 => 114,  339 => 113,  336 => 112,  333 => 111,  331 => 110,  323 => 104,  319 => 102,  311 => 97,  306 => 94,  300 => 93,  297 => 92,  291 => 91,  289 => 90,  283 => 88,  281 => 87,  275 => 86,  269 => 85,  265 => 84,  261 => 83,  258 => 82,  255 => 81,  253 => 80,  248 => 79,  246 => 78,  242 => 76,  237 => 75,  234 => 74,  231 => 73,  229 => 72,  211 => 58,  203 => 53,  198 => 50,  195 => 49,  192 => 48,  189 => 47,  185 => 46,  182 => 45,  179 => 44,  176 => 43,  174 => 42,  171 => 41,  168 => 40,  162 => 39,  159 => 38,  154 => 37,  151 => 36,  149 => 35,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comptabilité{% endblock %}

{% block content %}
    <h1 class=\"text-center\">Comptabilité</h1>

   <!-- Formulaire -->
    <button class=\"btn btn-success mt-5\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseForm\" aria-expanded=\"false\" aria-controls=\"collapseForm\">
        Afficher le formulaire pour ajouter une nouvelle commande manuellement
    </button>
    <div class=\"collapse\" id=\"collapseForm\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                {{ form_start(accountingForm) }}
                <div> {{ form_row(accountingForm.fullname) }}</div>
                <div> {{ form_row(accountingForm.product) }}</div>
                <div> {{ form_row(accountingForm.quantity) }}</div>
                <div> {{ form_row(accountingForm.saleDate) }}</div>
            </div>
            <div class=\"col-md-6\">
                <div> {{ form_row(accountingForm.total) }}</div>
                <div> {{ form_row(accountingForm.carrier) }}</div>
                <div> {{ form_row(accountingForm.carrierPrice) }}</div>
                <div class=\"mt-5\"> {{ form_row(accountingForm.submit) }}</div>
                {{ form_end(accountingForm) }}
            </div>
        </div>
    </div>

    <div class=\"row mt-5\">
        <!-- Colonne gauche -->
        <div class=\"col-sm\">
            <h1 class=\"text-center text-light mt-5\">Commande internet</h1>
            {% if users is not empty %}
                {% set sortedOrders = [] %}
                {% for user in users %}
                    {% set sortedOrders = sortedOrders|merge(user.orders) %}
                {% endfor %}
                {% set sortedOrders = sortedOrders|sort((a, b) => b.createdAt.timestamp - a.createdAt.timestamp) %}

                {% set currentMonth = null %}
                {% set totalMonthPrice = 0 %}
                {% set currentUserFullName = null %}

                {% for order in sortedOrders %}
                    {% set orderMonth = order.createdAt|date('F Y') %}
                    {% if currentMonth != orderMonth %}
                        {% if currentMonth is not null %}
                            <tr>
                                <td colspan=\"2\"><strong>Total du mois</strong></td>
                                <td colspan=\"3\"></td>
                                <td><strong>{{ (totalMonthPrice / 100)|number_format(2, ',', '.') }} €</strong></td>
                            </tr>
                            </tbody>
                            </table>
                        {% endif %}
                        <h2 class=\"mt-5  text-center\">{{ orderMonth }}</h2>
                        <table class=\"table table-hover bg-light\">
                        <caption>Commandes internet</caption>
                            <thead>
                                <tr>
                                    <th>Acheteur</th>
                                    <th>Date</th>
                                    <th>Prix</th>
                                    <th>Produits Achetés</th>
                                    <th>Mode livraison</th>
                                    <th>Tarif total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% set totalMonthPrice = 0 %}
                                {% set currentUserFullName = null %}
                            {% endif %}
                            {% for orderDetail in order.orderDetails %}
                                <tr>
                                    <td>
                                        {% if currentUserFullName != order.user.getFullName() %}
                                            {{ order.user.getFullName() }}
                                            {% set currentUserFullName = order.user.getFullName() %}
                                        {% endif %}
                                    </td>
                                    <td>{{ order.createdAt|date('d-m-Y') }}</td>
                                    <td>{{ (orderDetail.total / 100)|number_format(2, ',', '.') }} €</td>
                                    <td>{{ orderDetail.quantity }} X {{ orderDetail.product }}</td>
                                    <td>{{ order.carriername }} - {{ (order.carrierprice / 100)|number_format(2, ',', '.') }} €</td>
                                    {% set totalOrderPrice = orderDetail.total + order.carrierprice %}
                                    <td>{{ (totalOrderPrice / 100)|number_format(2, ',', '.') }} €</td>
                                </tr>
                                {% set totalMonthPrice = totalMonthPrice + totalOrderPrice %}
                            {% endfor %}
                            {% set currentMonth = orderMonth %}
                        {% endfor %}
                        <tr>
                            <td colspan=\"2\"><strong>Total du mois</strong></td>
                            <td colspan=\"3\"></td>
                            <td><strong>{{ (totalMonthPrice / 100)|number_format(2, ',', '.') }} €</strong></td>
                        </tr>
                    </tbody>
                </table>
            {% else %}
                <p>Aucune donnée à afficher.</p>
            {% endif %}
        </div>

        <!-- Colonne droite  -->
<div class=\"col-sm\">
    <h1 class=\"text-center text-light mt-5\">Commande Manuelle</h1>

    {% if manualOrders is not empty %}
        {% set sortedManualOrders = manualOrders|sort((a, b) => b.saleDate.timestamp - a.saleDate.timestamp) %}
        
        {% set currentMonth = null %}
        {% set totalMonthPrice = 0 %}
        
        {% for index, manualOrder in sortedManualOrders %}
            {% set orderMonth = manualOrder.saleDate|date('F Y') %}
            {% if currentMonth != orderMonth %}
                {% if currentMonth is not null %}
                    <tr>
                        <td colspan=\"2\"><strong>Total du mois</strong></td>
                        <td colspan=\"3\"></td>
                        <td><strong>{{ (totalMonthPrice)|number_format(2, ',', '.') }} €</strong></td>
                    </tr>
                     </tbody>
                            </table>
                {% endif %}
                <h2 class=\"mt-5 text-center\">{{ orderMonth }}</h2>
                <table class=\"table table-hover bg-light\">
                        <caption>Commandes manuelle</caption>
                    <thead>
                        <tr>
                            <th>Acheteur</th>
                            <th>Date</th>
                            <th>Prix</th>
                            <th>Produits Achetés</th>
                            <th>Mode livraison</th>
                            <th>Tarif total</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% set totalMonthPrice = 0 %}
                    {% endif %}
                    <tr>
                        <td>{{ manualOrder.fullname }}</td>
                        <td>{{ manualOrder.saleDate|date('d-m-Y') }}</td>
                        <td>{{ (manualOrder.total)|number_format(2, ',', '.') }} €</td>
                        <td>{{ manualOrder.quantity }} X {{ manualOrder.product }}</td>
                        <td>{{ manualOrder.carrier }}</td>
                        <td>{{ (manualOrder.carrierPrice)|number_format(2, ',', '.') }} €</td>
                    </tr>
                    {% set totalMonthPrice = totalMonthPrice + manualOrder.total %}
                {% set currentMonth = orderMonth %}
            {% endfor %}
            <tr>
                <td colspan=\"2\"><strong>Total du mois</strong></td>
                <td colspan=\"3\"></td>
                <td><strong>{{ (totalMonthPrice)|number_format(2, ',', '.') }} €</strong></td>
            </tr>
        </tbody>
    </table>
    {% else %}
        <p>Aucune donnée à afficher.</p>
    {% endif %}
</div>
    </div>
<!-- suppression de la class marginBlock pour avoir les tableaux les plus large possible -->
        <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var marginBlockElement = document.querySelector('.marginBlock');
            if (marginBlockElement) {
                marginBlockElement.classList.remove('marginBlock');
            }
        });
    </script>
{% endblock %}", "account/accounting.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\accounting.html.twig");
    }
}
