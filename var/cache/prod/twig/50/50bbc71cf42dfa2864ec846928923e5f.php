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

/* account/index.html.twig */
class __TwigTemplate_a79173585a26f0c9fe49d5f6c1fbda3b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon compte - El cafexito";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1 class=\"text-center p-5\">Mon compte</h1>
Bienvenue dans votre espace personnel <strong class=\"text-uppercase \"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "firstname", [], "any", false, false, false, 8), "html", null, true);
        echo " </strong>. 
<hr>
";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "
<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"/admin\">
            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/computer.png"), "html", null, true);
            echo "\" alt=\"Backoffice\" ><br>
            <span  class=\" text-light\">Backoffice</span>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accounting");
            echo "\">
            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/comptabilite.png"), "html", null, true);
            echo "\" alt=\"Comptabilité\" ><br>
            <span  class=\" text-light\">Comptabilité</span>
    </a>
    </div>
";
        }
        // line 23
        echo "

<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_password");
        echo "\">
            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons8.png"), "html", null, true);
        echo "\" alt=\"Modifier mon mot de passe\" ><br>
            <span  class=\" text-light\">Modifier mon mot de passe</span>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient m-2 p-3 font-weight-bold  text-center rounded \" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address");
        echo "\" >
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons9.png"), "html", null, true);
        echo "\" alt=\"Gérer mes adresses\" ><br>            
            <span  class=\" text-light\">Gérer mes adresses</span>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\" >
            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons7.png"), "html", null, true);
        echo "\" alt=\"mes commandes\"><br>
            <span class=\"text-light\">Mes commandes</span>
    </a>
        <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_let_comment");
        echo "\" >
            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/iconComment.png"), "html", null, true);
        echo "\" alt=\"mes commentaires\"><br>
            <span class=\"text-light\">Laissez-nous un commentaire</span>
    </a>
</div>
<hr>

";
    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  127 => 38,  121 => 35,  117 => 34,  111 => 31,  107 => 30,  101 => 27,  97 => 26,  92 => 23,  84 => 18,  80 => 17,  74 => 14,  69 => 11,  67 => 10,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\index.html.twig");
    }
}
