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

/* ./components/_navbar.html.twig */
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./components/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./components/_navbar.html.twig"));

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
\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte
\t\t\t\t\t\t<small>(";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31), "html", null, true);
            echo ")</small>
\t\t\t\t\t</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cart4.svg"), "html", null, true);
            echo "\" alt=\"Mon panier\" class=\"cart-icon mr-3\">
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t";
        }
        // line 43
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
        return "./components/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  127 => 41,  121 => 39,  115 => 36,  111 => 35,  107 => 34,  101 => 31,  96 => 30,  94 => 29,  87 => 25,  81 => 22,  75 => 19,  68 => 15,  62 => 12,  51 => 4,  47 => 3,  43 => 1,);
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
\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<a href=\"{{ path('app_account')}}\">Mon compte
\t\t\t\t\t\t<small>({{ app.user.firstname }})</small>
\t\t\t\t\t</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"{{ path('app_logout')}}\">Déconnexion</a>
\t\t\t\t\t<a href=\"{{ path('app_cart') }}\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/images/cart4.svg')}}\" alt=\"Mon panier\" class=\"cart-icon mr-3\">
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
", "./components/_navbar.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_navbar.html.twig");
    }
}
