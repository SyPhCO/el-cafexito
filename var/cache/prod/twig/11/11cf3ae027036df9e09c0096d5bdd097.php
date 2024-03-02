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
class __TwigTemplate_75e0d9a3f87972c53e1f7a488fa0640e extends Template
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
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/elcafexito.css"), "html", null, true);
        echo "\">
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t</head>
\t<body>

\t\t";
        // line 23
        $this->loadTemplate("./components/_navbar.html.twig", "base.html.twig", 23)->display($context);
        // line 24
        echo "\t\t\t";
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 25
            echo "\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 28
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
            // line 30
            echo "
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 34
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
                if (($context["key"] == 0)) {
                    echo " active ";
                }
                echo " \" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 34), "html", null, true);
                echo "'); background-size: cover;\">

\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left acceuilH\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"display-4 titleCar\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 38), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"textCar\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 39), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn  btn-info\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 41), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 41), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
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
        // line 66
        echo "
\t\t\t<div class=\"marginBlock ";
        // line 67
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\"> 

\t\t\t";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "\t\t\t\t";
        $this->loadTemplate("./components/_social.html.twig", "base.html.twig", 71)->display($context);
        // line 72
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 73
        $this->loadTemplate("./components/_footer.html.twig", "base.html.twig", 73)->display($context);
        // line 74
        echo "

\t\t\t";
        // line 77
        echo "\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
\t\t\t<script src=\"";
        // line 80
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

    // line 69
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
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
        return array (  217 => 70,  213 => 69,  208 => 11,  204 => 10,  196 => 80,  191 => 78,  188 => 77,  184 => 74,  182 => 73,  179 => 72,  176 => 71,  174 => 69,  167 => 67,  164 => 66,  143 => 47,  129 => 41,  124 => 39,  120 => 38,  108 => 34,  104 => 33,  99 => 30,  86 => 28,  82 => 27,  78 => 25,  75 => 24,  73 => 23,  65 => 18,  61 => 17,  57 => 16,  52 => 13,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\base.html.twig");
    }
}
