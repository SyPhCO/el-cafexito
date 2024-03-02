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
class __TwigTemplate_56714fb9a1337a7c184831153131e16a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma commande - El cafexito";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1 class=\"mt-5\">Ma Commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <hr>
    <strong>Satut de la commande : </strong>
      ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 7) == 1)) {
            // line 8
            echo "        Paiment accepté.
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
($context["order"] ?? null), "state", [], "any", false, false, false, 9) == 2)) {
            // line 10
            echo "        Préparation en cours. 
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 11
($context["order"] ?? null), "state", [], "any", false, false, false, 11) == 3)) {
            // line 12
            echo "        Livraison en cours.
      ";
        }
        // line 13
        echo " <br>
    <strong>Commande passée le : </strong> ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        echo " <br>
    <strong>Référence de ma commande : </strong>  <small>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 15), "html", null, true);
        echo "</small> <br>
    <strong>Mode de livraison : </strong>  ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carriername", [], "any", false, false, false, 16), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 30));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 41) / 100), 2, ",", "."), "html", null, true);
        echo "<br>
    <strong>Livraison : </strong> ";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierprice", [], "any", false, false, false, 42) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
    <strong>Total : </strong>";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 43) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 43)) / 100), 2, ",", "."), "html", null, true);
        echo " € 
</div>
<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\"class=\"btn btn-danger btn-sm\">Retour</a>
";
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
        return array (  155 => 45,  150 => 43,  146 => 42,  142 => 41,  137 => 38,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  113 => 31,  109 => 30,  92 => 16,  88 => 15,  84 => 14,  81 => 13,  77 => 12,  75 => 11,  72 => 10,  70 => 9,  67 => 8,  65 => 7,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\order_show.html.twig");
    }
}
