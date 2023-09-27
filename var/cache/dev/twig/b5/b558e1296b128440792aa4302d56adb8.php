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
class __TwigTemplate_610f02e19b6aa6b261be079ef08e24a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon compte - El cafexito";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo " </strong>. 
<hr>

<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 mt-2 mr-2 mb-2 font-weight-bold text-center rounded\" href=\"";
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
        <a class=\"col-md-2 bg-info bg-gradient p-3 mt-2 ml-2 mb-2 font-weight-bold  text-center rounded\"  href=\"";
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  148 => 36,  143 => 34,  136 => 30,  131 => 28,  124 => 24,  119 => 22,  112 => 18,  107 => 16,  99 => 12,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - El cafexito{% endblock %}

{% block content %}
<h1 class=\"text-center p-5\">Mon compte</h1>
{% if  is_granted(\"ROLE_ADMIN\") %}
<div class=\"text-center  fw-bold text-light\">
<a href=\"/admin\" role=\"button\" class=\" text-light border bg-info rounded-pill p-3\">Backoffice</a><br> <br>
</div>
{% endif %}
Bienvenue dans votre espace personnel <strong class=\"text-uppercase \"> {{ app.user.firstname }} </strong>. 
<hr>

<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 mt-2 mr-2 mb-2 font-weight-bold text-center rounded\" href=\"{{ path('app_account_password')}}\">
        <div class=\"account-item \">
            <img src=\"{{ asset('assets/images/icons8.png') }}\" alt=\"Modifier mon mot de passe\" ><br>
            <span  class=\" text-light\">Modifier mon mot de passe</span>
        </div>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient m-2 p-3 font-weight-bold  text-center rounded \" href=\"{{ path('app_account_address')}}\" >
        <div class=\"account-item\">
            <img src=\"{{ asset('assets/images/icons9.png') }}\" alt=\"Gérer mes adresses\" ><br>            
            <span  class=\" text-light\">Gérer mes adresses</span>
        </div>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"{{ path('app_account_order')}}\" >
        <div class=\"account-item\">
            <img src=\"{{ asset('assets/images/icons7.png') }}\" alt=\"mes commandes\"><br>
            <span class=\"text-light\">Mes commandes</span>
        </div>
    </a>
        <a class=\"col-md-2 bg-info bg-gradient p-3 mt-2 ml-2 mb-2 font-weight-bold  text-center rounded\"  href=\"{{ path('app_let_comment')}}\" >
        <div class=\"account-item\">
            <img src=\"{{ asset('assets/images/iconComment.png') }}\" alt=\"mes commentaires\"><br>
            <span class=\"text-light\">Laissez-nous un commentaire</span>
        </div>
    </a>
</div>
<hr>
{% endblock %}
", "account/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\index.html.twig");
    }
}
