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
class __TwigTemplate_2527effd335d88197c3b4b1628202e4a extends Template
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
        echo "
<h1 class=\"text-center p-5\">Mon compte</h1>
Bienvenue dans votre espace personnel <strong class=\"text-uppercase \"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "firstname", [], "any", false, false, false, 8), "html", null, true);
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
        return array (  161 => 39,  157 => 38,  151 => 35,  147 => 34,  141 => 31,  137 => 30,  131 => 27,  127 => 26,  122 => 23,  114 => 18,  110 => 17,  104 => 14,  99 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - El cafexito{% endblock %}

{% block content %}

<h1 class=\"text-center p-5\">Mon compte</h1>
Bienvenue dans votre espace personnel <strong class=\"text-uppercase \"> {{ app.user.firstname }} </strong>. 
<hr>
{% if  is_granted(\"ROLE_ADMIN\") %}

<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"/admin\">
            <img src=\"{{ asset('assets/images/computer.png') }}\" alt=\"Backoffice\" ><br>
            <span  class=\" text-light\">Backoffice</span>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"{{ path('app_accounting')}}\">
            <img src=\"{{ asset('assets/images/comptabilite.png') }}\" alt=\"Comptabilité\" ><br>
            <span  class=\" text-light\">Comptabilité</span>
    </a>
    </div>
{% endif %}


<div class=\"row justify-content-center\">
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold text-center rounded\" href=\"{{ path('app_account_password')}}\">
            <img src=\"{{ asset('assets/images/icons8.png') }}\" alt=\"Modifier mon mot de passe\" ><br>
            <span  class=\" text-light\">Modifier mon mot de passe</span>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient m-2 p-3 font-weight-bold  text-center rounded \" href=\"{{ path('app_account_address')}}\" >
            <img src=\"{{ asset('assets/images/icons9.png') }}\" alt=\"Gérer mes adresses\" ><br>            
            <span  class=\" text-light\">Gérer mes adresses</span>
    </a>
    <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"{{ path('app_account_order')}}\" >
            <img src=\"{{ asset('assets/images/icons7.png') }}\" alt=\"mes commandes\"><br>
            <span class=\"text-light\">Mes commandes</span>
    </a>
        <a class=\"col-md-2 bg-info bg-gradient p-3 m-2 font-weight-bold  text-center rounded\"  href=\"{{ path('app_let_comment')}}\" >
            <img src=\"{{ asset('assets/images/iconComment.png') }}\" alt=\"mes commentaires\"><br>
            <span class=\"text-light\">Laissez-nous un commentaire</span>
    </a>
</div>
<hr>

{% endblock %}
", "account/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\index.html.twig");
    }
}
