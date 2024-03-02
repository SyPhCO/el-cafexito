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

/* order/add.html.twig */
class __TwigTemplate_2aa2ad1e149b20dfceb72e8b8f9a2166 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement de ma commande - El cafexito";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<h2>Mon récapitulatif</h2>
<p>Vérifier vos informations avant de payer votre commande.</p>
<hr>
<div class=\"row\">
    <div class=\"col-md-6\">
      <strong> Mon adresse de livraison</strong> <br>
      <div class=\"form-check mt-4\">
            ";
        // line 15
        echo ($context["delivery"] ?? null);
        echo "
      </div>

    <hr>
       <strong> Mon mode de livraison</strong>
      <div class=\"form-check mt-4\">
       ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "<br>
       ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "<br>
       ";
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 23) / 100), 2, ",", "."), "html", null, true);
        echo " € 
    </div>
       
    </div>
    <div class=\"col-md-6\">
        <p class=\"mb-3 mt-2\"> <b>Ma commande.</b></p>
        <div class=\"order-sumary mt-3\">
         ";
        // line 30
        $context["total"] = null;
        // line 31
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 32
            echo "           
                <div class=\"row\">
                    <div class=\"col-2 mb-4\">
                        <img src=\"/uploads/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "illustration", [], "any", false, false, false, 35), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "\" height=\"100vh\" width=\"100vw\" style=\"object-fit: cover\">
                    </div>
                    <div class=\"col-8 text-center my-auto\">
                        <b>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</b>
                        <br>
                        <b> x ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo "</b>
                    </div>    
                    <div class=\"col-2 my-auto\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                    </div>
                </div>
                 ";
            // line 46
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46)));
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    <hr>
        <strong>Sous-Total : </strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo " € <br>
        <strong>Livraison : </strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 51) / 100), 2, ",", "."), "html", null, true);
        echo " €  
        <hr>
        <strong>Total </strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 53) / 100)), 2, ",", "."), "html", null, true);
        echo " € 
       <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_create_session", ["reference" => ($context["reference"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-info btn-block mt-3\" id=\"checkout-button\">Payer | ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 54) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
    </div>
</div>
";
    }

    // line 59
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 60,  177 => 59,  167 => 54,  163 => 53,  158 => 51,  154 => 50,  150 => 48,  144 => 47,  142 => 46,  136 => 43,  130 => 40,  125 => 38,  117 => 35,  112 => 32,  107 => 31,  105 => 30,  95 => 23,  91 => 22,  87 => 21,  78 => 15,  69 => 8,  65 => 7,  58 => 5,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\order\\add.html.twig");
    }
}
