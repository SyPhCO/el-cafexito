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

/* comments/index.html.twig */
class __TwigTemplate_632cb5701bbf8a3daf0bbef0f9a1a4ed extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "comments/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "El Cafexito - Produits";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1 class=\"text-center mt-5\">Produits</h1>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "
    <hr class=\"bg-light mt-5 mb-5\">
    <div class=\"row d-flex flex-row justify-content-center\">

        <div class=\"col-lg-8 col-sm-12 text-center\">
            <h1 class=\"col-12 mb-3 mt-5\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</h1>

            <div class=\"col-md-8 col-sm-12 mt-2 mb-2 mx-auto\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"\">
                    <img src=\"/uploads/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"imgProduct rounded\">
                </a>
            </div>
            <div class=\"font-weight-bold text-center d-flex m-auto \">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>

            <hr class=\"mt-4 mb-4\">

            <div class=\"col-md-4 d-flex m-auto d-flex justify-content-center mt-2 \">
                <div class=\"product-price font-weight-bold d-inline \">Tarif :
                    ";
            // line 28
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28) / 100), 2, ",", "."), "html", null, true);
            echo "
                    €
                </div>
            </div>
            <div class=\"col-lg-8 text-center mt-2\">
                <span class=\"product-subtitle \">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                <br>
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-info text-center font-weight-bold mt-2\">Laissez-vous tenter</a>
            </div>
        </div>

        <div class=\"col-lg-2 col-sm-6 col-6 text-center d-flex flex-column \">
            <div class=\"mt-5 actiGal\">
                <img src=\"/uploads/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"img-fluid\">
            </div>
            <div class=\"mt-5 actiGal\">
                <img src=\"/uploads/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery2", [], "any", false, false, false, 44), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"img-fluid\">
            </div>
            <div class=\"mt-5 actiGal\">
                <img src=\"/uploads/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery3", [], "any", false, false, false, 47), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"img-fluid\">
            </div>
        </div>

        <div class=\"col-lg-2 col-sm-6 col-6 text-center d-flex flex-column\">
            <div class=\"mt-5 actiGal\">
                <img src=\"/uploads/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery4", [], "any", false, false, false, 53), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "\" class=\"img-fluid\">
            </div>
            <div class=\"mt-5 actiGal\">
                <img src=\"/uploads/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery5", [], "any", false, false, false, 56), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"img-fluid\">
            </div>
            <div class=\"mt-5 actiGal\">
                <img src=\"/uploads/";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gallery6", [], "any", false, false, false, 59), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "\" class=\"img-fluid\">
            </div>
        </div>

    </div>

    ";
            // line 80
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
";
    }

    public function getTemplateName()
    {
        return "comments/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 82,  177 => 80,  166 => 59,  158 => 56,  150 => 53,  139 => 47,  131 => 44,  123 => 41,  114 => 35,  109 => 33,  101 => 28,  92 => 22,  84 => 19,  80 => 18,  74 => 15,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comments/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\comments\\index.html.twig");
    }
}
