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
class __TwigTemplate_32e5f974817b982bf192e41702357795 extends Template
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
        <div class=\"account-item \">
            <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/computer.png"), "html", null, true);
            echo "\" alt=\"Backoffice\" ><br>
            <span  class=\" text-light\">Backoffice</span>
        </div>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accounting");
            echo "\">
        <div class=\"account-item \">
            <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/comptabilite.png"), "html", null, true);
            echo "\" alt=\"Comptabilité\" ><br>
            <span  class=\" text-light\">Comptabilité</span>
        </div>
    </a>
    </div>
";
        }
        // line 27
        echo "

<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_password");
        echo "\">
        <div class=\"account-item \">
            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons8.png"), "html", null, true);
        echo "\" alt=\"Modifier mon mot de passe\" ><br>
            <span  class=\" text-light\">Modifier mon mot de passe</span>
        </div>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient m-2 p-3 font-weight-bold  text-center rounded \" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address");
        echo "\" >
        <div class=\"account-item\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons9.png"), "html", null, true);
        echo "\" alt=\"Gérer mes adresses\" ><br>            
            <span  class=\" text-light\">Gérer mes adresses</span>
        </div>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\" >
        <div class=\"account-item\">
            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons7.png"), "html", null, true);
        echo "\" alt=\"mes commandes\"><br>
            <span class=\"text-light\">Mes commandes</span>
        </div>
    </a>
        <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_let_comment");
        echo "\" >
        <div class=\"account-item\">
            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/iconComment.png"), "html", null, true);
        echo "\" alt=\"mes commentaires\"><br>
            <span class=\"text-light\">Laissez-nous un commentaire</span>
        </div>
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
        return array (  142 => 50,  137 => 48,  130 => 44,  125 => 42,  118 => 38,  113 => 36,  106 => 32,  101 => 30,  96 => 27,  87 => 21,  82 => 19,  75 => 15,  69 => 11,  67 => 10,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\index.html.twig");
    }
}
