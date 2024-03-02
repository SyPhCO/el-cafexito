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
class __TwigTemplate_f87b6893f7f5d8ada4191663c87dd572 extends Template
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
        echo "<div class=\"nav\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-icon mr-5\" aria-label=\"visit homepage\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2) == "app_home")) ? ("page") : (null));
        echo "\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        echo "\" class=\"mr-2\" alt=\"logo cafexito\">
        <span>El Cafexito</span>
    </a>
    <div class=\"main-navlinks\">
        <button class=\"hamburger\" type=\"button\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class=\"navlinks-container\">
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "app_home")) ? ("page") : (null));
        echo "\">Accueil</a>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "attributes", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "app_team")) ? ("page") : (null));
        echo "\">Qui sommes-nous?</a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cauca");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", [0 => "_route"], "method", false, false, false, 15) == "app_cauca")) ? ("page") : (null));
        echo "\">Région Cauca</a>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_read_comments");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route"], "method", false, false, false, 16) == "app_read_comments")) ? ("page") : (null));
        echo "\">Nos produits</a>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_advice");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17) == "app_advice")) ? ("page") : (null));
        echo "\">Nos conseils</a>
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gallery");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "attributes", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18) == "app_gallery")) ? ("page") : (null));
        echo "\">Galerie</a>
            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19) == "app_products")) ? ("page") : (null));
        echo "\">Achetez notre café</a>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" aria-current=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "app_contact")) ? ("page") : (null));
        echo "\">Contact</a>
        </div>
    </div>
    <div class=\"nav-authentification\">
        <div class=\"sign-btns\">
            ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte</a>
                |
                <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
            ";
        } else {
            // line 30
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                |
                <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
            ";
        }
        // line 34
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cart9.png"), "html", null, true);
        echo "\" class=\"w-50\" alt=\"Mon panier\">
            </a>
        </div>
    </div>
</div>

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
        return array (  146 => 35,  141 => 34,  136 => 32,  130 => 30,  125 => 28,  119 => 26,  117 => 25,  107 => 20,  101 => 19,  95 => 18,  89 => 17,  83 => 16,  77 => 15,  71 => 14,  65 => 13,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav\">
    <a href=\"{{ path('app_home') }}\" class=\"nav-icon mr-5\" aria-label=\"visit homepage\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_home' ? 'page' : null }}\">
        <img src=\"{{ asset('assets/images/logo2.png') }}\" class=\"mr-2\" alt=\"logo cafexito\">
        <span>El Cafexito</span>
    </a>
    <div class=\"main-navlinks\">
        <button class=\"hamburger\" type=\"button\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class=\"navlinks-container\">
            <a href=\"{{ path('app_home') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_home' ? 'page' : null }}\">Accueil</a>
            <a href=\"{{ path('app_team') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_team' ? 'page' : null }}\">Qui sommes-nous?</a>
            <a href=\"{{ path('app_cauca') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_cauca' ? 'page' : null }}\">Région Cauca</a>
            <a href=\"{{ path('app_read_comments') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_read_comments' ? 'page' : null }}\">Nos produits</a>
            <a href=\"{{ path('app_advice') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_advice' ? 'page' : null }}\">Nos conseils</a>
            <a href=\"{{ path('app_gallery') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_gallery' ? 'page' : null }}\">Galerie</a>
            <a href=\"{{ path('app_products') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_products' ? 'page' : null }}\">Achetez notre café</a>
            <a href=\"{{ path('app_contact') }}\" aria-current=\"{{ app.request.attributes.get('_route') == 'app_contact' ? 'page' : null }}\">Contact</a>
        </div>
    </div>
    <div class=\"nav-authentification\">
        <div class=\"sign-btns\">
            {% if app.user %}
                <a href=\"{{ path('app_account') }}\">Mon compte</a>
                |
                <a href=\"{{ path('app_logout') }}\">Deconnexion</a>
            {% else %}
                <a href=\"{{ path('app_login') }}\">Connexion</a>
                |
                <a href=\"{{ path('app_register') }}\">Inscription</a>
            {% endif %}
            <a href=\"{{ path('app_cart') }}\">
                <img src=\"{{ asset('assets/images/cart9.png') }}\" class=\"w-50\" alt=\"Mon panier\">
            </a>
        </div>
    </div>
</div>

", "./components/_navbar.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_navbar.html.twig");
    }
}
