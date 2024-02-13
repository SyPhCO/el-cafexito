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

/* components/navbar.html.twig */
class __TwigTemplate_c2a5952cafab6289e500923b250eec57 extends Template
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
\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" aria-current=\"page\">Acceuil</a>
\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" aria-current=\"page\">Qui sommes-nous?</a>
\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cauca");
        echo "\" aria-current=\"page\">Région Cauca</a>
\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_read_comments");
        echo "\" aria-current=\"page\">Nos produits</a>
\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_advice");
        echo "\" aria-current=\"page\">Nos conseils</a>
\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gallery");
        echo "\" aria-current=\"page\">Galerie</a>
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\" aria-current=\"page\">Achetez notre café</a>
\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" aria-current=\"page\">Contact</a>
\t\t</div>
\t    </div>

\t<div class=\"nav-authentification \">
\t\t<div class=\"sign-btns\">
        
\t\t\t";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "\t\t\t\t<a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte</a>
                |
\t\t\t\t<a  href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t<a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                |
\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t";
        }
        // line 36
        echo "\t\t</div>

\t</div>


</div>
";
    }

    public function getTemplateName()
    {
        return "components/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  114 => 34,  108 => 32,  103 => 30,  97 => 28,  95 => 27,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/navbar.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\navbar.html.twig");
    }
}
