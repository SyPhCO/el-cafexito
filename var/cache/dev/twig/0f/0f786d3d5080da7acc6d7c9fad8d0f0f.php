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

/* home/index.html.twig */
class __TwigTemplate_540bd95d4eccff0bf240709ad1202294 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
\t<div class=\"row acceuilStart\">
\t\t<h1 class=\"text-center col-md-12\">Produits a la Une !</h1>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 8, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "\t\t\t<div class=\"col-md-4 mt-5 \">
\t\t\t\t";
            // line 10
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 10)->display($context);
            // line 11
            echo "\t\t\t</div>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">Fabien.<br>
\t\t\t\t<span class=\"text-muted\">Dirigeant</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Je suis en lien direct avec un petit producteur local de ma famille qui cultive le café depuis des générations.</p>
\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">Plus d'infos ?</a>
\t\t</div>
\t\t<div class=\"col-md-5 \">
\t\t\t<img class=\" bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded\" width=\"500\" height=\"500\" src=\"./assets/images/profilTeam.jpg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
\t    </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-2\">
            <h2 class=\"featurette-heading\">El Cauca<br>
                <span class=\"text-muted\">Colombie</span>
            </h2>
            <p class=\"lead\">Le département de Cauca est situé au sud-ouest de la Colombie.C’est la région montagneuse où l’importante rivière Cauca prend naissance...</p>
            <a href=\"#\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">Découvrez en plus</a>
        </div>
        <div class=\"col-md-5 order-md-1\">
            <img class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" src=\"./assets/images/escudo.png\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
        </div>
    </div>
    
    <hr class=\"featurette-divider\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 23,  129 => 13,  114 => 11,  112 => 10,  109 => 9,  92 => 8,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block carousel %}{% endblock %}

{% block content %}

\t<div class=\"row acceuilStart\">
\t\t<h1 class=\"text-center col-md-12\">Produits a la Une !</h1>
\t\t{% for product in products %}
\t\t\t<div class=\"col-md-4 mt-5 \">
\t\t\t\t{% include 'product/single_product.html.twig' %}
\t\t\t</div>
\t\t{% endfor %}
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">Fabien.<br>
\t\t\t\t<span class=\"text-muted\">Dirigeant</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Je suis en lien direct avec un petit producteur local de ma famille qui cultive le café depuis des générations.</p>
\t\t\t<a href=\"{{path('app_team')}}\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">Plus d'infos ?</a>
\t\t</div>
\t\t<div class=\"col-md-5 \">
\t\t\t<img class=\" bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded\" width=\"500\" height=\"500\" src=\"./assets/images/profilTeam.jpg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
\t    </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-2\">
            <h2 class=\"featurette-heading\">El Cauca<br>
                <span class=\"text-muted\">Colombie</span>
            </h2>
            <p class=\"lead\">Le département de Cauca est situé au sud-ouest de la Colombie.C’est la région montagneuse où l’importante rivière Cauca prend naissance...</p>
            <a href=\"#\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">Découvrez en plus</a>
        </div>
        <div class=\"col-md-5 order-md-1\">
            <img class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" src=\"./assets/images/escudo.png\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
        </div>
    </div>
    
    <hr class=\"featurette-divider\">
    {% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\home\\index.html.twig");
    }
}
