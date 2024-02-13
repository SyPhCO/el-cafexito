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
class __TwigTemplate_0691c1d384ec53c8728e6ad517d45abe extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/accounting.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Comptabilité";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1 class=\"text-center\">Comptabilité</h1>

    <!-- Bouton collapse pour afficher le formulaire -->
    <button class=\"btn btn-success mt-5\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseForm\" aria-expanded=\"false\" aria-controls=\"collapseForm\">
        Afficher le formulaire pour ajouter une nouvelle commande manuellement
    </button>

    <!-- Formulaire -->
    <div class=\"collapse\" id=\"collapseForm\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <!-- Première moitié du formulaire -->
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["accountingForm"] ?? null), 'form_start');
        echo "
                <div> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "fullname", [], "any", false, false, false, 19), 'row');
        echo "</div>
                <div> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "product", [], "any", false, false, false, 20), 'row');
        echo "</div>
                <div> ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "quantity", [], "any", false, false, false, 21), 'row');
        echo "</div>
                <div> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "saleDate", [], "any", false, false, false, 22), 'row');
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <!-- Deuxième moitié du formulaire -->
                <div> ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "total", [], "any", false, false, false, 26), 'row');
        echo "</div>
                <div> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "carrier", [], "any", false, false, false, 27), 'row');
        echo "</div>
                <div> ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "carrierPrice", [], "any", false, false, false, 28), 'row');
        echo "</div>
                <div class=\"mt-5\"> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "submit", [], "any", false, false, false, 29), 'row');
        echo "</div>
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["accountingForm"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row mt-5\">
        <!-- Colonne gauche pour les commandes en ligne -->
        <div class=\"col-sm\">
            <h1 class=\"text-center text-light mt-5\">Commande internet</h1>
            ";
        // line 39
        if ( !twig_test_empty(($context["users"] ?? null))) {
            // line 40
            echo "                ";
            $context["sortedOrders"] = [];
            // line 41
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 42
                echo "                    ";
                $context["sortedOrders"] = twig_array_merge(($context["sortedOrders"] ?? null), twig_get_attribute($this->env, $this->source, $context["user"], "orders", [], "any", false, false, false, 42));
                // line 43
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                ";
            $context["sortedOrders"] = twig_sort_filter($this->env, ($context["sortedOrders"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "createdAt", [], "any", false, false, false, 44), "timestamp", [], "any", false, false, false, 44) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "createdAt", [], "any", false, false, false, 44), "timestamp", [], "any", false, false, false, 44)); });
            // line 45
            echo "
                ";
            // line 46
            $context["currentMonth"] = null;
            // line 47
            echo "                ";
            $context["totalMonthPrice"] = 0;
            // line 48
            echo "                ";
            $context["currentUserFullName"] = null;
            // line 49
            echo "
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sortedOrders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 51
                echo "                    ";
                $context["orderMonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 51), "F Y");
                // line 52
                echo "                    ";
                if ((($context["currentMonth"] ?? null) != ($context["orderMonth"] ?? null))) {
                    // line 53
                    echo "                        ";
                    if ( !(null === ($context["currentMonth"] ?? null))) {
                        // line 54
                        echo "                            <tr>
                                <td colspan=\"2\"><strong>Total du mois</strong></td>
                                <td colspan=\"3\"></td>
                                <td><strong>";
                        // line 57
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalMonthPrice"] ?? null) / 100), 2, ",", "."), "html", null, true);
                        echo " €</strong></td>
                            </tr>
                            </tbody>
                            </table>
                        ";
                    }
                    // line 62
                    echo "                        <h2 class=\"mt-5  text-center\">";
                    echo twig_escape_filter($this->env, ($context["orderMonth"] ?? null), "html", null, true);
                    echo "</h2>
                        <table class=\"table table-hover bg-light\">
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
                    // line 75
                    $context["totalMonthPrice"] = 0;
                    // line 76
                    echo "                                ";
                    $context["currentUserFullName"] = null;
                    // line 77
                    echo "                            ";
                }
                // line 78
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
                    // line 79
                    echo "                                <tr>
                                    <td>
                                        ";
                    // line 81
                    if ((($context["currentUserFullName"] ?? null) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 81), "getFullName", [], "method", false, false, false, 81))) {
                        // line 82
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 82), "getFullName", [], "method", false, false, false, 82), "html", null, true);
                        echo "
                                            ";
                        // line 83
                        $context["currentUserFullName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 83), "getFullName", [], "method", false, false, false, 83);
                        // line 84
                        echo "                                        ";
                    }
                    // line 85
                    echo "                                    </td>
                                    <td>";
                    // line 86
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 86), "d-m-Y"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 87
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["orderDetail"], "total", [], "any", false, false, false, 87) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                    <td>";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "quantity", [], "any", false, false, false, 88), "html", null, true);
                    echo " X ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "product", [], "any", false, false, false, 88), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "carriername", [], "any", false, false, false, 89), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "carrierprice", [], "any", false, false, false, 89) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                    ";
                    // line 90
                    $context["totalOrderPrice"] = (twig_get_attribute($this->env, $this->source, $context["orderDetail"], "total", [], "any", false, false, false, 90) + twig_get_attribute($this->env, $this->source, $context["order"], "carrierprice", [], "any", false, false, false, 90));
                    // line 91
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalOrderPrice"] ?? null) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                </tr>
                                ";
                    // line 93
                    $context["totalMonthPrice"] = (($context["totalMonthPrice"] ?? null) + ($context["totalOrderPrice"] ?? null));
                    // line 94
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                            ";
                $context["currentMonth"] = ($context["orderMonth"] ?? null);
                // line 96
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                        <tr>
                            <td colspan=\"2\"><strong>Total du mois</strong></td>
                            <td colspan=\"3\"></td>
                            <td><strong>";
            // line 100
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalMonthPrice"] ?? null) / 100), 2, ",", "."), "html", null, true);
            echo " €</strong></td>
                        </tr>
                    </tbody>
                </table>
            ";
        } else {
            // line 105
            echo "                <p>Aucune donnée à afficher.</p>
            ";
        }
        // line 107
        echo "        </div>

        <!-- Colonne droite pour les commandes manuelles -->
<div class=\"col-sm\">
    <h1 class=\"text-center text-light mt-5\">Commande Manuelle</h1>

    ";
        // line 113
        if ( !twig_test_empty(($context["manualOrders"] ?? null))) {
            // line 114
            echo "        ";
            $context["sortedManualOrders"] = twig_sort_filter($this->env, ($context["manualOrders"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "saleDate", [], "any", false, false, false, 114), "timestamp", [], "any", false, false, false, 114) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "saleDate", [], "any", false, false, false, 114), "timestamp", [], "any", false, false, false, 114)); });
            // line 115
            echo "        
        ";
            // line 116
            $context["currentMonth"] = null;
            // line 117
            echo "        ";
            $context["totalMonthPrice"] = 0;
            // line 118
            echo "        
        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sortedManualOrders"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["manualOrder"]) {
                // line 120
                echo "            ";
                $context["orderMonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "saleDate", [], "any", false, false, false, 120), "F Y");
                // line 121
                echo "            ";
                if ((($context["currentMonth"] ?? null) != ($context["orderMonth"] ?? null))) {
                    // line 122
                    echo "                ";
                    if ( !(null === ($context["currentMonth"] ?? null))) {
                        // line 123
                        echo "                    <tr>
                        <td colspan=\"2\"><strong>Total du mois</strong></td>
                        <td colspan=\"3\"></td>
                        <td><strong>";
                        // line 126
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalMonthPrice"] ?? null), 2, ",", "."), "html", null, true);
                        echo " €</strong></td>
                    </tr>
                     </tbody>
                            </table>
                ";
                    }
                    // line 131
                    echo "                <h2 class=\"mt-5 text-center\">";
                    echo twig_escape_filter($this->env, ($context["orderMonth"] ?? null), "html", null, true);
                    echo "</h2>
                <table class=\"table table-hover bg-light\">
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
                    // line 144
                    $context["totalMonthPrice"] = 0;
                    // line 145
                    echo "                    ";
                }
                // line 146
                echo "                    <tr>
                        <td>";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "fullname", [], "any", false, false, false, 147), "html", null, true);
                echo "</td>
                        <td>";
                // line 148
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "saleDate", [], "any", false, false, false, 148), "d-m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 149
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "total", [], "any", false, false, false, 149), 2, ",", "."), "html", null, true);
                echo " €</td>
                        <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "quantity", [], "any", false, false, false, 150), "html", null, true);
                echo " X ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "product", [], "any", false, false, false, 150), "html", null, true);
                echo "</td>
                        <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrier", [], "any", false, false, false, 151), "html", null, true);
                echo "</td>
                        <td>";
                // line 152
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "carrierPrice", [], "any", false, false, false, 152), 2, ",", "."), "html", null, true);
                echo " €</td>
                    </tr>
                    ";
                // line 154
                $context["totalMonthPrice"] = (($context["totalMonthPrice"] ?? null) + twig_get_attribute($this->env, $this->source, $context["manualOrder"], "total", [], "any", false, false, false, 154));
                // line 155
                echo "                ";
                $context["currentMonth"] = ($context["orderMonth"] ?? null);
                // line 156
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['manualOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "            <tr>
                <td colspan=\"2\"><strong>Total du mois</strong></td>
                <td colspan=\"3\"></td>
                <td><strong>";
            // line 160
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalMonthPrice"] ?? null), 2, ",", "."), "html", null, true);
            echo " €</strong></td>
            </tr>
        </tbody>
    </table>
    ";
        } else {
            // line 165
            echo "        <p>Aucune donnée à afficher.</p>
    ";
        }
        // line 167
        echo "</div>
    </div>
";
        // line 170
        echo "        <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var marginBlockElement = document.querySelector('.marginBlock');
            if (marginBlockElement) {
                marginBlockElement.classList.remove('marginBlock');
            }
        });
    </script>
";
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
        return array (  430 => 170,  426 => 167,  422 => 165,  414 => 160,  409 => 157,  403 => 156,  400 => 155,  398 => 154,  393 => 152,  389 => 151,  383 => 150,  379 => 149,  375 => 148,  371 => 147,  368 => 146,  365 => 145,  363 => 144,  346 => 131,  338 => 126,  333 => 123,  330 => 122,  327 => 121,  324 => 120,  320 => 119,  317 => 118,  314 => 117,  312 => 116,  309 => 115,  306 => 114,  304 => 113,  296 => 107,  292 => 105,  284 => 100,  279 => 97,  273 => 96,  270 => 95,  264 => 94,  262 => 93,  256 => 91,  254 => 90,  248 => 89,  242 => 88,  238 => 87,  234 => 86,  231 => 85,  228 => 84,  226 => 83,  221 => 82,  219 => 81,  215 => 79,  210 => 78,  207 => 77,  204 => 76,  202 => 75,  185 => 62,  177 => 57,  172 => 54,  169 => 53,  166 => 52,  163 => 51,  159 => 50,  156 => 49,  153 => 48,  150 => 47,  148 => 46,  145 => 45,  142 => 44,  136 => 43,  133 => 42,  128 => 41,  125 => 40,  123 => 39,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/accounting.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\accounting.html.twig");
    }
}
