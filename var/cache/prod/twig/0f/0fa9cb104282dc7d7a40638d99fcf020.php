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

/* product/single_product.html.twig */
class __TwigTemplate_f5b0fadaae502a02990d6f5d30dac294 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"product-item text-center\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" >
        <img src=\"/uploads/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "illustration", [], "any", false, false, false, 3), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"figure-img img-fluid img-thumbnail rounded-circle object-fit-cover\"style=\"height:250px; width: 250px\">
    </a>
    <h4>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "</h4>
    <span class=\"product-subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "subtitle", [], "any", false, false, false, 6), "html", null, true);
        echo "</span>
    <span class=\"product-price font-weight-bold\"> ";
        // line 7
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 7) / 100), 2, ",", "."), "html", null, true);
        echo " €</span>
</div>";
    }

    public function getTemplateName()
    {
        return "product/single_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  55 => 6,  51 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/single_product.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\product\\single_product.html.twig");
    }
}
