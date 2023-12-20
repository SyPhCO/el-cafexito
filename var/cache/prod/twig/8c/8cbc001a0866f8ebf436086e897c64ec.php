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

/* base.html.twig */
class __TwigTemplate_21c9bea1c8d32cd3d59c87e38260bf39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"La boutique familial qui vous fera voyager\">
\t\t<meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</title>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/elcafexito.css"), "html", null, true);
        echo "\">
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none;
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>

\t</head>
\t<body class=\"backgroundColor\">
\t\t";
        // line 41
        $this->loadTemplate("./components/_navbar.html.twig", "base.html.twig", 41)->display($context);
        // line 42
        echo "

\t\t<main role=\"main\">

\t\t\t";
        // line 46
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 47
            echo "\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 50
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo " class=\"active\" ";
                }
                echo "></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 56
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
                if (($context["key"] == 0)) {
                    echo " active ";
                }
                echo " \" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 56), "html", null, true);
                echo "'); background-size: cover;\">

\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left acceuilH\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"display-4\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 60), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 61), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-info\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 63), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 63), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon-scroll\">
\t\t\t\t\t<div class=\"mouse\">
\t\t\t\t\t\t<div class=\"wheel\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"icon-arrows\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 88
        echo "
\t\t\t<div class=\"container marketing ";
        // line 89
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\"> 

\t\t\t";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "\t\t\t\t";
        $this->loadTemplate("./components/_social.html.twig", "base.html.twig", 93)->display($context);
        // line 94
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 95
        $this->loadTemplate("./components/_footer.html.twig", "base.html.twig", 95)->display($context);
        // line 96
        echo "
\t\t\t</main>
\t\t\t";
        // line 99
        echo "\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://unpkg.com/scrollreveal\"></script>
\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
\t\t\t<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
\t\t</body>
\t</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t\t\t\tEl Cafexito
\t\t\t";
    }

    // line 91
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 92,  240 => 91,  235 => 11,  231 => 10,  223 => 103,  217 => 100,  214 => 99,  210 => 96,  208 => 95,  205 => 94,  202 => 93,  200 => 91,  193 => 89,  190 => 88,  169 => 69,  155 => 63,  150 => 61,  146 => 60,  134 => 56,  130 => 55,  125 => 52,  112 => 50,  108 => 49,  104 => 47,  102 => 46,  96 => 42,  94 => 41,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  52 => 13,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\base.html.twig");
    }
}
