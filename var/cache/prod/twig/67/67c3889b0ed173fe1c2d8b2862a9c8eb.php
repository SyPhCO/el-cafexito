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

/* components/_navbar.html.twig */
class __TwigTemplate_983aa62fb3b0d57b0aedbdc83b9a012b extends Template
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
        echo "<header class=\"pb-5\">
\t<nav class=\"navbar navbar-expand-xl navbar-dark fixed-top\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"/assets/images/logo1.png\" alt=\"logo\" class=\"logo1\"></a>
\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">El cafexito</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_read_comments");
        echo "\">Nos produits</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\">Qui sommes-nous?
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gallery");
        echo "\">Galerie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\">Achetez notre café</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte
\t\t\t\t\t\t<small>(";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32), "firstname", [], "any", false, false, false, 32), "html", null, true);
            echo ")</small>
\t\t\t\t\t</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t<a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cart9.png"), "html", null, true);
            echo "\" alt=\"Mon panier\" class=\"cart-icon mr-3\">
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t</div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "components/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  122 => 42,  116 => 40,  110 => 37,  106 => 36,  102 => 35,  96 => 32,  91 => 31,  89 => 30,  81 => 25,  75 => 22,  69 => 19,  62 => 15,  56 => 12,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_navbar.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_navbar.html.twig");
    }
}
