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
class __TwigTemplate_cc5c287e2fd04c123f8dbff16c1dd6bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        // line 1
        echo "<header class=\"pb-5\">
\t<nav class=\"navbar navbar-expand-xl navbar-dark fixed-top bg-dark\">
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
\t\t\t";
        // line 29
        echo "\t\t  ";
        // line 34
        echo "  <div class=\"switch\">
    <input type=\"checkbox\" onchange=\"changeValues()\"  id=\"themeSwitch\">
    <label for=\"themeSwitch\">
        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/sun.png"), "html", null, true);
        echo "\" alt=\"Soleil\" class=\"icon\" id=\"sunIcon\">
        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/moon.png"), "html", null, true);
        echo "\" alt=\"Lune\" class=\"icon\" id=\"moonIcon\">
    </label>
</div>
\t\t";
        // line 42
        echo "\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte
\t\t\t\t\t\t<small>(";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "firstname", [], "any", false, false, false, 45), "html", null, true);
            echo ")</small>
\t\t\t\t\t</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t<a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cart9.png"), "html", null, true);
            echo "\" alt=\"Mon panier\" class=\"cart-icon mr-3\">
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t";
        }
        // line 57
        echo "\t\t\t</div>
\t\t</div>
\t</nav>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  151 => 57,  146 => 55,  140 => 53,  134 => 50,  130 => 49,  126 => 48,  120 => 45,  115 => 44,  113 => 43,  110 => 42,  104 => 38,  100 => 37,  95 => 34,  93 => 29,  87 => 25,  81 => 22,  75 => 19,  68 => 15,  62 => 12,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"pb-5\">
\t<nav class=\"navbar navbar-expand-xl navbar-dark fixed-top bg-dark\">
\t\t<a class=\"navbar-brand\" href=\"{{path('app_home')}}\"><img src=\"/assets/images/logo1.png\" alt=\"logo\" class=\"logo1\"></a>
\t\t<a class=\"navbar-brand\" href=\"{{ path('app_home')}}\">El cafexito</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_read_comments')}}\">Nos produits</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_team')}}\">Qui sommes-nous?
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_gallery')}}\">Galerie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_products') }}\">Achetez notre café</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_contact')}}\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{# new #}
\t\t  {# <h1>Thème</h1>
  <label class=\"switch\">
    <input type=\"checkbox\" onchange=\"changeValues()\"  id=\"themeSwitch\">
    <span class=\"slider\"></span>
  </label> #}
  <div class=\"switch\">
    <input type=\"checkbox\" onchange=\"changeValues()\"  id=\"themeSwitch\">
    <label for=\"themeSwitch\">
        <img src=\"{{ asset('assets/images/sun.png')}}\" alt=\"Soleil\" class=\"icon\" id=\"sunIcon\">
        <img src=\"{{ asset('assets/images/moon.png')}}\" alt=\"Lune\" class=\"icon\" id=\"moonIcon\">
    </label>
</div>
\t\t{# new #}
\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<a href=\"{{ path('app_account')}}\">Mon compte
\t\t\t\t\t\t<small>({{ app.user.firstname }})</small>
\t\t\t\t\t</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"{{ path('app_logout')}}\">Déconnexion</a>
\t\t\t\t\t<a href=\"{{ path('app_cart') }}\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/images/cart9.png')}}\" alt=\"Mon panier\" class=\"cart-icon mr-3\">
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{ path('app_login')}}\">Connexion</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"{{ path('app_register')}}\">Inscription</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
", "components/_navbar.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_navbar.html.twig");
    }
}
