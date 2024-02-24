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
        echo "<div class=\"nav\" >
\t<a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-icon mr-5\" aria-label=\"visit homepage\" aria-current=\"page\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        echo "\" class=\"mr-2\" alt=\"logo cafexito\">
\t\t<span>El Cafexito</span>
\t</a>
\t<div class=\"main-navlinks\">
\t\t<button class=\"hamburger\" type=\"button\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t</button>
\t\t<div class=\"navlinks-container\">
\t\t<ul>
\t\t</ul>
\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" aria-current=\"page\">Acceuil</a>
\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" aria-current=\"page\">Qui sommes-nous?</a>
\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cauca");
        echo "\" aria-current=\"page\">Région Cauca</a>
\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_read_comments");
        echo "\" aria-current=\"page\">Nos produits</a>
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_advice");
        echo "\" aria-current=\"page\">Nos conseils</a>
\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gallery");
        echo "\" aria-current=\"page\">Galerie</a>
\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\" aria-current=\"page\">Achetez notre café</a>
\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" aria-current=\"page\">Contact</a>
\t\t</div>
\t    </div>

\t<div class=\"nav-authentification \">
\t\t<div class=\"sign-btns\">
        
\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "\t\t\t\t<a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte</a>
                |
\t\t\t\t<a  href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t<a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                |
\t\t\t\t<a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t";
        }
        // line 38
        echo "\t\t</div>

\t</div>


</div>

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
        return array (  127 => 38,  122 => 36,  116 => 34,  111 => 32,  105 => 30,  103 => 29,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav\" >
\t<a href=\"{{path('app_home')}}\" class=\"nav-icon mr-5\" aria-label=\"visit homepage\" aria-current=\"page\">
\t\t<img src=\"{{ asset('assets/images/logo2.png') }}\" class=\"mr-2\" alt=\"logo cafexito\">
\t\t<span>El Cafexito</span>
\t</a>
\t<div class=\"main-navlinks\">
\t\t<button class=\"hamburger\" type=\"button\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t</button>
\t\t<div class=\"navlinks-container\">
\t\t<ul>
\t\t</ul>
\t\t\t<a href=\"{{path('app_home')}}\" aria-current=\"page\">Acceuil</a>
\t\t\t<a href=\"{{path('app_team')}}\" aria-current=\"page\">Qui sommes-nous?</a>
\t\t\t<a href=\"{{path('app_cauca')}}\" aria-current=\"page\">Région Cauca</a>
\t\t\t<a href=\"{{path('app_read_comments')}}\" aria-current=\"page\">Nos produits</a>
\t\t\t<a href=\"{{path('app_advice')}}\" aria-current=\"page\">Nos conseils</a>
\t\t\t<a href=\"{{path('app_gallery')}}\" aria-current=\"page\">Galerie</a>
\t\t\t<a href=\"{{ path('app_products') }}\" aria-current=\"page\">Achetez notre café</a>
\t\t\t<a href=\"{{path('app_contact')}}\" aria-current=\"page\">Contact</a>
\t\t</div>
\t    </div>

\t<div class=\"nav-authentification \">
\t\t<div class=\"sign-btns\">
        
\t\t\t{% if app.user %}
\t\t\t\t<a  href=\"{{ path('app_account') }}\">Mon compte</a>
                |
\t\t\t\t<a  href=\"{{ path('app_logout') }}\">Deconnexion</a>
\t\t\t{% else %}
\t\t\t\t<a  href=\"{{ path('app_login') }}\">Connexion</a>
                |
\t\t\t\t<a href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t{% endif %}
\t\t</div>

\t</div>


</div>

", "components/_navbar.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_navbar.html.twig");
    }
}
