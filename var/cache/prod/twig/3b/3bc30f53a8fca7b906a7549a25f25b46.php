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
class __TwigTemplate_e9ddef18260c59ee21cf1c7950f5f5be extends Template
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

   <!-- Formulaire -->
    <button class=\"btn btn-success mt-5\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseForm\" aria-expanded=\"false\" aria-controls=\"collapseForm\">
        Afficher le formulaire pour ajouter une nouvelle commande manuellement
    </button>
    <div class=\"collapse\" id=\"collapseForm\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["accountingForm"] ?? null), 'form_start');
        echo "
                <div> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "fullname", [], "any", false, false, false, 16), 'row');
        echo "</div>
                <div> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "product", [], "any", false, false, false, 17), 'row');
        echo "</div>
                <div> ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "quantity", [], "any", false, false, false, 18), 'row');
        echo "</div>
                <div> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "saleDate", [], "any", false, false, false, 19), 'row');
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "total", [], "any", false, false, false, 22), 'row');
        echo "</div>
                <div> ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "carrier", [], "any", false, false, false, 23), 'row');
        echo "</div>
                <div> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "carrierPrice", [], "any", false, false, false, 24), 'row');
        echo "</div>
                <div class=\"mt-5\"> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["accountingForm"] ?? null), "submit", [], "any", false, false, false, 25), 'row');
        echo "</div>
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["accountingForm"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row mt-5\">
        <!-- Colonne gauche -->
        <div class=\"col-sm\">
            <h2 class=\"text-center text-light mt-5\">Commande internet</h2>
            ";
        // line 35
        if ( !twig_test_empty(($context["users"] ?? null))) {
            // line 36
            echo "                ";
            $context["sortedOrders"] = [];
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 38
                echo "                    ";
                $context["sortedOrders"] = twig_array_merge(($context["sortedOrders"] ?? null), twig_get_attribute($this->env, $this->source, $context["user"], "orders", [], "any", false, false, false, 38));
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                ";
            $context["sortedOrders"] = twig_sort_filter($this->env, ($context["sortedOrders"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "createdAt", [], "any", false, false, false, 40), "timestamp", [], "any", false, false, false, 40) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "createdAt", [], "any", false, false, false, 40), "timestamp", [], "any", false, false, false, 40)); });
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
            $context['_seq'] = twig_ensure_traversable(($context["sortedOrders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 47
                echo "                    ";
                $context["orderMonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 47), "F Y");
                // line 48
                echo "                    ";
                if ((($context["currentMonth"] ?? null) != ($context["orderMonth"] ?? null))) {
                    // line 49
                    echo "                        ";
                    if ( !(null === ($context["currentMonth"] ?? null))) {
                        // line 50
                        echo "                            <tr>
                                <td colspan=\"2\"><strong>Total du mois</strong></td>
                                <td colspan=\"3\"></td>
                                <td><strong>";
                        // line 53
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalMonthPrice"] ?? null) / 100), 2, ",", "."), "html", null, true);
                        echo " €</strong></td>
                            </tr>
                            </tbody>
                            </table>
                        ";
                    }
                    // line 58
                    echo "                        <h4 class=\"mt-5  text-center\">";
                    echo twig_escape_filter($this->env, ($context["orderMonth"] ?? null), "html", null, true);
                    echo "</h4>
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
                    if ((($context["currentUserFullName"] ?? null) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 78), "getFullName", [], "method", false, false, false, 78))) {
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
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalOrderPrice"] ?? null) / 100), 2, ",", "."), "html", null, true);
                    echo " €</td>
                                </tr>
                                ";
                    // line 90
                    $context["totalMonthPrice"] = (($context["totalMonthPrice"] ?? null) + ($context["totalOrderPrice"] ?? null));
                    // line 91
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                            ";
                $context["currentMonth"] = ($context["orderMonth"] ?? null);
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalMonthPrice"] ?? null) / 100), 2, ",", "."), "html", null, true);
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
    <h2 class=\"text-center text-light mt-5\">Commande Manuelle</h2>

    ";
        // line 110
        if ( !twig_test_empty(($context["manualOrders"] ?? null))) {
            // line 111
            echo "        ";
            $context["sortedManualOrders"] = twig_sort_filter($this->env, ($context["manualOrders"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "saleDate", [], "any", false, false, false, 111), "timestamp", [], "any", false, false, false, 111) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "saleDate", [], "any", false, false, false, 111), "timestamp", [], "any", false, false, false, 111)); });
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
            $context['_seq'] = twig_ensure_traversable(($context["sortedManualOrders"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["manualOrder"]) {
                // line 117
                echo "            ";
                $context["orderMonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manualOrder"], "saleDate", [], "any", false, false, false, 117), "F Y");
                // line 118
                echo "            ";
                if ((($context["currentMonth"] ?? null) != ($context["orderMonth"] ?? null))) {
                    // line 119
                    echo "                ";
                    if ( !(null === ($context["currentMonth"] ?? null))) {
                        // line 120
                        echo "                    <tr>
                        <td colspan=\"2\"><strong>Total du mois</strong></td>
                        <td colspan=\"3\"></td>
                        <td><strong>";
                        // line 123
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalMonthPrice"] ?? null), 2, ",", "."), "html", null, true);
                        echo " €</strong></td>
                    </tr>
                     </tbody>
                            </table>
                ";
                    }
                    // line 128
                    echo "                <h4 class=\"mt-5 text-center\">";
                    echo twig_escape_filter($this->env, ($context["orderMonth"] ?? null), "html", null, true);
                    echo "</h4>
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
                $context["totalMonthPrice"] = (($context["totalMonthPrice"] ?? null) + twig_get_attribute($this->env, $this->source, $context["manualOrder"], "total", [], "any", false, false, false, 152));
                // line 153
                echo "                ";
                $context["currentMonth"] = ($context["orderMonth"] ?? null);
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalMonthPrice"] ?? null), 2, ",", "."), "html", null, true);
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
        return array (  424 => 165,  420 => 163,  412 => 158,  407 => 155,  401 => 154,  398 => 153,  396 => 152,  391 => 150,  387 => 149,  381 => 148,  377 => 147,  373 => 146,  369 => 145,  366 => 144,  363 => 143,  361 => 142,  343 => 128,  335 => 123,  330 => 120,  327 => 119,  324 => 118,  321 => 117,  317 => 116,  314 => 115,  311 => 114,  309 => 113,  306 => 112,  303 => 111,  301 => 110,  293 => 104,  289 => 102,  281 => 97,  276 => 94,  270 => 93,  267 => 92,  261 => 91,  259 => 90,  253 => 88,  251 => 87,  245 => 86,  239 => 85,  235 => 84,  231 => 83,  228 => 82,  225 => 81,  223 => 80,  218 => 79,  216 => 78,  212 => 76,  207 => 75,  204 => 74,  201 => 73,  199 => 72,  181 => 58,  173 => 53,  168 => 50,  165 => 49,  162 => 48,  159 => 47,  155 => 46,  152 => 45,  149 => 44,  146 => 43,  144 => 42,  141 => 41,  138 => 40,  132 => 39,  129 => 38,  124 => 37,  121 => 36,  119 => 35,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/accounting.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\accounting.html.twig");
    }
}
