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
class __TwigTemplate_8132913b0c9f8e908cc5dccf72b0fbae extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier - El cafexito";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1 class=\"mt-5 mb-5 text-center\">Mon panier</h1>
";
        // line 5
        if ((twig_length_filter($this->env, ($context["cart"] ?? null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41)));
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
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
        return array (  171 => 54,  166 => 51,  159 => 47,  155 => 46,  150 => 43,  144 => 42,  142 => 41,  135 => 37,  131 => 36,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  108 => 28,  103 => 26,  99 => 25,  93 => 22,  87 => 21,  83 => 19,  78 => 18,  76 => 17,  63 => 6,  61 => 5,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\cart\\index.html.twig");
    }
}
