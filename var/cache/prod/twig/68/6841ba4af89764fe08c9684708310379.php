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
        echo "<h1 class=\"text-center p-5\">Mon compte</h1>
";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "<div class=\"text-center  fw-bold text-light\">
<a href=\"/admin\" role=\"button\" class=\" text-light border bg-info rounded-pill p-3\">Backoffice</a><br> <br>
</div>
";
        }
        // line 12
        echo "Bienvenue dans votre espace personnel <strong class=\"text-uppercase \"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo " </strong>. 
<hr>

<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_password");
        echo "\">
        <div class=\"account-item \">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons8.png"), "html", null, true);
        echo "\" alt=\"Modifier mon mot de passe\" ><br>
            <span  class=\" text-light\">Modifier mon mot de passe</span>
        </div>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient m-2 p-3 font-weight-bold  text-center rounded \" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address");
        echo "\" >
        <div class=\"account-item\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons9.png"), "html", null, true);
        echo "\" alt=\"Gérer mes adresses\" ><br>            
            <span  class=\" text-light\">Gérer mes adresses</span>
        </div>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\" >
        <div class=\"account-item\">
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons7.png"), "html", null, true);
        echo "\" alt=\"mes commandes\"><br>
            <span class=\"text-light\">Mes commandes</span>
        </div>
    </a>
        <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_let_comment");
        echo "\" >
        <div class=\"account-item\">
            <img src=\"";
        // line 36
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
        return array (  118 => 36,  113 => 34,  106 => 30,  101 => 28,  94 => 24,  89 => 22,  82 => 18,  77 => 16,  69 => 12,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\index.html.twig");
    }
}
