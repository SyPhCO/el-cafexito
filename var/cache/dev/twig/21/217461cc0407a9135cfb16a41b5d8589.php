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
class __TwigTemplate_04a5060ad7fb7434b8fa06a773d2b4a3 extends Template
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

    <!-- Formulaire d'entrée manuelle -->
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
        <!-- Colonne gauche internet -->
        <div class=\"col-sm\">
            <h2 class=\"text-center text-light mt-5\">Commande internet</h2>
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
                    echo "                        <h4 class=\"mt-5  text-center\">";
                    echo twig_escape_filter($this->env, (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 58, $this->source); })()), "html", null, true);
                    echo "</h4>
                        <table class=\"table table-hover bg-light\">

                            <thead>
                                <tr>
                                    <th>Acheteur</th>
                                    <th>Date</th>
                                    <th>Prix</th>
                                    <th>Produits Achetés</th>
                                    <th>ID</th>
                                    <th>Mode livraison</th>
                                    <th>Tarif total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                    // line 73
                    $context["totalMonthPrice"] = 0;
                    // line 74
                    echo "                                ";
                    $context["currentUserFullName"] = null;
                    // line 75
                    echo "                            ";
                }
                // line 76
                echo "                            ";
                $context["previous_order_id"] = null;
                // line 77
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 77));
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
                foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
                    // line 78
                    echo "                                <tr>
                                    <td>
                                        ";
                    // line 80
                    if (((isset($context["currentUserFullName"]) || array_key_exists("currentUserFullName", $context) ? $context["currentUserFullName"] : (function () { throw new RuntimeError('Variable "currentUserFullName" does not exist.', 80, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 80), "getFullName", [], "method", false, false, false, 80))) {
                        // line 81
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 81), "getFullName", [], "method", false, false, false, 81), "html", null, true);
                        echo "
                                            ";
                        // line 82
                        $context["currentUserFullName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 82), "getFullName", [], "method", false, false, false, 82);
                        // line 83
                        echo "                                        ";
                    }
                    // line 84
                    echo "                                    </td>
                                    <td>
                                        ";
                    // line 86
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 86) || (twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 86) != (isset($context["previous_order_id"]) || array_key_exists("previous_order_id", $context) ? $context["previous_order_id"] : (function () { throw new RuntimeError('Variable "previous_order_id" does not exist.', 86, $this->source); })())))) {
                        // line 87
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 89
                    echo "                                    </td>
                                    <td>";
                    // line 90
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["orderDetail"], "total", [], "any", false, false, false, 90) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                    <td>";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "quantity", [], "any", false, false, false, 91), "html", null, true);
                    echo " X ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "product", [], "any", false, false, false, 91), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 92), "html", null, true);
                    echo "</td>
                                    <td>
                                        ";
                    // line 94
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 94) || (twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 94) != (isset($context["previous_order_id"]) || array_key_exists("previous_order_id", $context) ? $context["previous_order_id"] : (function () { throw new RuntimeError('Variable "previous_order_id" does not exist.', 94, $this->source); })())))) {
                        // line 95
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "carriername", [], "any", false, false, false, 95), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "carrierprice", [], "any", false, false, false, 95) / 100), 2, ",", "."), "html", null, true);
                        echo " €
                                        ";
                    }
                    // line 97
                    echo "                                    </td>
                                    ";
                    // line 98
                    $context["totalOrderPrice"] = ((twig_get_attribute($this->env, $this->source, $context["orderDetail"], "total", [], "any", false, false, false, 98) * twig_get_attribute($this->env, $this->source, $context["orderDetail"], "quantity", [], "any", false, false, false, 98)) + twig_get_attribute($this->env, $this->source, $context["order"], "carrierprice", [], "any", false, false, false, 98));
                    // line 99
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 99) || (twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 99) != (isset($context["previous_order_id"]) || array_key_exists("previous_order_id", $context) ? $context["previous_order_id"] : (function () { throw new RuntimeError('Variable "previous_order_id" does not exist.', 99, $this->source); })())))) {
                        // line 100
                        echo "                                        <td>";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalOrderPrice"]) || array_key_exists("totalOrderPrice", $context) ? $context["totalOrderPrice"] : (function () { throw new RuntimeError('Variable "totalOrderPrice" does not exist.', 100, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
                        echo " €</td>
                                    ";
                    } else {
                        // line 102
                        echo "                                        <td></td>
                                    ";
                    }
                    // line 104
                    echo "                                </tr>
                                ";
                    // line 105
                    $context["totalMonthPrice"] = ((isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 105, $this->source); })()) + (isset($context["totalOrderPrice"]) || array_key_exists("totalOrderPrice", $context) ? $context["totalOrderPrice"] : (function () { throw new RuntimeError('Variable "totalOrderPrice" does not exist.', 105, $this->source); })()));
                    // line 106
                    echo "                                ";
                    $context["previous_order_id"] = twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 106);
                    // line 107
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                            ";
                $context["currentMonth"] = (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 108, $this->source); })());
                // line 109
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                        <tr>
                            <td colspan=\"2\"><strong>Total du mois</strong></td>
                            <td colspan=\"3\"></td>
                            <td><strong>";
            // line 113
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 113, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €</strong></td>
                        </tr>
                    </tbody>
                </table>
            ";
        } else {
            // line 118
            echo "                <p>Aucune donnée à afficher.</p>
            ";
        }
        // line 120
        echo "        </div>

<!-- Colonne droite manuelle -->
<div class=\"col-sm\">
    <h2 class=\"text-center text-light mt-5\">Commande Manuelle</h2>
    ";
        // line 125
        if ( !twig_test_empty((isset($context["manualOrders"]) || array_key_exists("manualOrders", $context) ? $context["manualOrders"] : (function () { throw new RuntimeError('Variable "manualOrders" does not exist.', 125, $this->source); })()))) {
            // line 126
            echo "        ";
            $context["sortedManualOrders"] = twig_sort_filter($this->env, (isset($context["manualOrders"]) || array_key_exists("manualOrders", $context) ? $context["manualOrders"] : (function () { throw new RuntimeError('Variable "manualOrders" does not exist.', 126, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 126, $this->source); })()), "saleDate", [], "any", false, false, false, 126), "timestamp", [], "any", false, false, false, 126) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 126, $this->source); })()), "saleDate", [], "any", false, false, false, 126), "timestamp", [], "any", false, false, false, 126)); });
            // line 127
            echo "        
        ";
            // line 128
            $context["currentMonth"] = null;
            // line 129
            echo "        ";
            $context["totalMonthPrice"] = 0;
            // line 130
            echo "        
        ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedManualOrders"]) || array_key_exists("sortedManualOrders", $context) ? $context["sortedManualOrders"] : (function () { throw new RuntimeError('Variable "sortedManualOrders" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["index"] => $context["manualOrder"]) {
                // line 132
                echo "            ";
                $context["orderMonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "saleDate", [], "any", false, false, false, 132), "F Y");
                // line 133
                echo "            ";
                if (((isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 133, $this->source); })()) != (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 133, $this->source); })()))) {
                    // line 134
                    echo "                ";
                    if ( !(null === (isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 134, $this->source); })()))) {
                        // line 135
                        echo "                    <tr>
                        <td colspan=\"2\"><strong>Total du mois</strong></td>
                        <td colspan=\"2\"></td>
                        <td><strong>";
                        // line 138
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 138, $this->source); })()), 2, ",", "."), "html", null, true);
                        echo " €</strong></td>
                    </tr>
                    </tbody>
                    </table>
                ";
                    }
                    // line 143
                    echo "                <h4 class=\"mt-5 text-center\">";
                    echo twig_escape_filter($this->env, (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 143, $this->source); })()), "html", null, true);
                    echo "</h4> ";
                    // line 144
                    echo "                <table class=\"table table-hover bg-light\">
                    <thead>
                        <tr>
                            <th>Acheteur</th>
                            <th>Date</th>
                            ";
                    // line 150
                    echo "                            <th>Produits Achetés</th>
                            <th>Mode livraison</th>
                            <th>Tarif total</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
                    // line 156
                    $context["currentMonth"] = (isset($context["orderMonth"]) || array_key_exists("orderMonth", $context) ? $context["orderMonth"] : (function () { throw new RuntimeError('Variable "orderMonth" does not exist.', 156, $this->source); })());
                    echo " ";
                    // line 157
                    echo "            ";
                }
                // line 158
                echo "            <tr>
                <td>";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "fullname", [], "any", false, false, false, 159), "html", null, true);
                echo "</td>
                <td>";
                // line 160
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "saleDate", [], "any", false, false, false, 160), "d-m-Y"), "html", null, true);
                echo "</td>
                ";
                // line 162
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "quantity", [], "any", false, false, false, 162), "html", null, true);
                echo " X ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "product", [], "any", false, false, false, 162), "html", null, true);
                echo "</td>
                <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrier", [], "any", false, false, false, 163), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrierPrice", [], "any", false, false, false, 163), 2, ",", "."), "html", null, true);
                echo " €</td>
                <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["manualOrder"], "total", [], "any", false, false, false, 164) + twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrierPrice", [], "any", false, false, false, 164)), 2, ",", "."), "html", null, true);
                echo " €</td>
            </tr>
            ";
                // line 166
                $context["totalMonthPrice"] = (((isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 166, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["manualOrder"], "total", [], "any", false, false, false, 166)) + twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrierPrice", [], "any", false, false, false, 166));
                // line 167
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['manualOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "        ";
            // line 169
            echo "        ";
            if ( !(null === (isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 169, $this->source); })()))) {
                // line 170
                echo "            <tr>
                <td colspan=\"2\"><strong>Total du mois</strong></td>
                <td colspan=\"2\"></td>
                <td><strong>";
                // line 173
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMonthPrice"]) || array_key_exists("totalMonthPrice", $context) ? $context["totalMonthPrice"] : (function () { throw new RuntimeError('Variable "totalMonthPrice" does not exist.', 173, $this->source); })()), 2, ",", "."), "html", null, true);
                echo " €</strong></td>
            </tr>
        ";
            }
            // line 176
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 179
            echo "        <p>Aucune donnée à afficher.</p>
    ";
        }
        // line 181
        echo "</div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const marginBlockElement = document.querySelector('.marginBlock');
            const socialElement = document.querySelector('.social');
            marginBlockElement.classList.remove('marginBlock');
            socialElement.remove();
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
        return array (  517 => 181,  513 => 179,  508 => 176,  502 => 173,  497 => 170,  494 => 169,  492 => 168,  486 => 167,  484 => 166,  479 => 164,  473 => 163,  466 => 162,  462 => 160,  458 => 159,  455 => 158,  452 => 157,  449 => 156,  441 => 150,  434 => 144,  430 => 143,  422 => 138,  417 => 135,  414 => 134,  411 => 133,  408 => 132,  404 => 131,  401 => 130,  398 => 129,  396 => 128,  393 => 127,  390 => 126,  388 => 125,  381 => 120,  377 => 118,  369 => 113,  364 => 110,  358 => 109,  355 => 108,  341 => 107,  338 => 106,  336 => 105,  333 => 104,  329 => 102,  323 => 100,  320 => 99,  318 => 98,  315 => 97,  307 => 95,  305 => 94,  300 => 92,  294 => 91,  290 => 90,  287 => 89,  281 => 87,  279 => 86,  275 => 84,  272 => 83,  270 => 82,  265 => 81,  263 => 80,  259 => 78,  241 => 77,  238 => 76,  235 => 75,  232 => 74,  230 => 73,  211 => 58,  203 => 53,  198 => 50,  195 => 49,  192 => 48,  189 => 47,  185 => 46,  182 => 45,  179 => 44,  176 => 43,  174 => 42,  171 => 41,  168 => 40,  162 => 39,  159 => 38,  154 => 37,  151 => 36,  149 => 35,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comptabilité{% endblock %}

{% block content %}
    <h1 class=\"text-center\">Comptabilité</h1>

    <!-- Formulaire d'entrée manuelle -->
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
        <!-- Colonne gauche internet -->
        <div class=\"col-sm\">
            <h2 class=\"text-center text-light mt-5\">Commande internet</h2>
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
                        <h4 class=\"mt-5  text-center\">{{ orderMonth }}</h4>
                        <table class=\"table table-hover bg-light\">

                            <thead>
                                <tr>
                                    <th>Acheteur</th>
                                    <th>Date</th>
                                    <th>Prix</th>
                                    <th>Produits Achetés</th>
                                    <th>ID</th>
                                    <th>Mode livraison</th>
                                    <th>Tarif total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% set totalMonthPrice = 0 %}
                                {% set currentUserFullName = null %}
                            {% endif %}
                            {% set previous_order_id = null %}
                            {% for orderDetail in order.orderDetails %}
                                <tr>
                                    <td>
                                        {% if currentUserFullName != order.user.getFullName() %}
                                            {{ order.user.getFullName() }}
                                            {% set currentUserFullName = order.user.getFullName() %}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if loop.first or order.id != previous_order_id %}
                                            {{ order.createdAt|date('d-m-Y') }}
                                        {% endif %}
                                    </td>
                                    <td>{{ (orderDetail.total / 100)|number_format(2, ',', '.') }} €</td>
                                    <td>{{ orderDetail.quantity }} X {{ orderDetail.product }}</td>
                                    <td>{{ order.id }}</td>
                                    <td>
                                        {% if loop.first or order.id != previous_order_id %}
                                            {{ order.carriername }} - {{ (order.carrierprice / 100)|number_format(2, ',', '.') }} €
                                        {% endif %}
                                    </td>
                                    {% set totalOrderPrice = orderDetail.total * orderDetail.quantity + order.carrierprice %}
                                    {% if loop.first or order.id != previous_order_id %}
                                        <td>{{ (totalOrderPrice / 100)|number_format(2, ',', '.') }} €</td>
                                    {% else %}
                                        <td></td>
                                    {% endif %}
                                </tr>
                                {% set totalMonthPrice = totalMonthPrice + totalOrderPrice %}
                                {% set previous_order_id = order.id %}
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

<!-- Colonne droite manuelle -->
<div class=\"col-sm\">
    <h2 class=\"text-center text-light mt-5\">Commande Manuelle</h2>
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
                        <td colspan=\"2\"></td>
                        <td><strong>{{ (totalMonthPrice)|number_format(2, ',', '.') }} €</strong></td>
                    </tr>
                    </tbody>
                    </table>
                {% endif %}
                <h4 class=\"mt-5 text-center\">{{ orderMonth }}</h4> {# Déplacer le titre ici #}
                <table class=\"table table-hover bg-light\">
                    <thead>
                        <tr>
                            <th>Acheteur</th>
                            <th>Date</th>
                            {# <th>Prix</th> #}
                            <th>Produits Achetés</th>
                            <th>Mode livraison</th>
                            <th>Tarif total</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% set currentMonth = orderMonth %} {# Mettre à jour le mois actuel #}
            {% endif %}
            <tr>
                <td>{{ manualOrder.fullname }}</td>
                <td>{{ manualOrder.saleDate|date('d-m-Y') }}</td>
                {# <td>{{ (manualOrder.total)|number_format(2, ',', '.') }} €</td> #}
                <td>{{ manualOrder.quantity }} X {{ manualOrder.product }}</td>
                <td>{{ manualOrder.carrier }} - {{ (manualOrder.carrierPrice)|number_format(2, ',', '.') }} €</td>
                <td>{{ (manualOrder.total + manualOrder.carrierPrice)|number_format(2, ',', '.') }} €</td>
            </tr>
            {% set totalMonthPrice = totalMonthPrice + manualOrder.total  + manualOrder.carrierPrice %}
        {% endfor %}
        {# Total du dernier mois #}
        {% if currentMonth is not null %}
            <tr>
                <td colspan=\"2\"><strong>Total du mois</strong></td>
                <td colspan=\"2\"></td>
                <td><strong>{{ (totalMonthPrice)|number_format(2, ',', '.') }} €</strong></td>
            </tr>
        {% endif %}
            </tbody>
        </table>
    {% else %}
        <p>Aucune donnée à afficher.</p>
    {% endif %}
</div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const marginBlockElement = document.querySelector('.marginBlock');
            const socialElement = document.querySelector('.social');
            marginBlockElement.classList.remove('marginBlock');
            socialElement.remove();
        });
    </script>
{% endblock %}", "account/accounting.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\accounting.html.twig");
    }
}
