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

/* product/index.html.twig */
class __TwigTemplate_34944a15456f99b6e11c25646af15f9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "Nos produits
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t<div class=\"row\">
\t\t<h1 class=\"col-md-12 text-center mt-5 mb-3\">Nos Cafés</h1>
\t\t<h3 class=\"col-md-12 text-center\">Variété Bourbon Rose</h3>
\t\t<p class=\"col-md-12 text-center\"><br>Cette variété d’arabica est connue dans le monde entier et est extrêmement appréciée.<br><br>
\t\t\tLe café Bourbon est une mutation naturelle de «Typica» , qui est l’une des variétés les plus anciennes. Néanmoins, elle demeure fragile : au vu de sa faible résistance aux maladies et aux parasites, elle demande beaucoup de soins.<br><br>
\t\t\tLe Bourbon rose (« Borbon Rosado ») résulte d’un croisement de bourbon rouge et de bourbon jaune. Il se distingue de la couleur rose vive lorsque ses cerises sont mûres.<br><br>
\t\t\tFruité, complexe avec un grand corps et une belle acidité, il est réputé pour être doux, avec des saveurs caramélisées.
\t\t\tL’expérience de la dégustation vous promet une texture soyeuse et élégante, réveillant de subtiles notes florales.</p>
\t\t<div class=\"col-md-2\">
\t\t\t<h3 class=\"mt-5 mb-5 text-center\">Filtrer</h3>
\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form');
        echo "
\t\t</div>

\t\t\t<div class=\"col-md-10\">
\t\t\t\t<h2 class='mt-5 text-center mb-5'>Nos Produits
\t\t\t\t</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 25, $this->source); })()));
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
            // line 26
            echo "\t\t\t\t\t\t<div class=\"col-md-4\"  >
\t\t\t\t\t\t\t";
            // line 27
            $this->loadTemplate("product/single_product.html.twig", "product/index.html.twig", 27)->display($context);
            // line 28
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
        // line 30
        echo "\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t\t<hr>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 30,  134 => 28,  132 => 27,  129 => 26,  112 => 25,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos produits
{% endblock %}

{% block content %}

\t<div class=\"row\">
\t\t<h1 class=\"col-md-12 text-center mt-5 mb-3\">Nos Cafés</h1>
\t\t<h3 class=\"col-md-12 text-center\">Variété Bourbon Rose</h3>
\t\t<p class=\"col-md-12 text-center\"><br>Cette variété d’arabica est connue dans le monde entier et est extrêmement appréciée.<br><br>
\t\t\tLe café Bourbon est une mutation naturelle de «Typica» , qui est l’une des variétés les plus anciennes. Néanmoins, elle demeure fragile : au vu de sa faible résistance aux maladies et aux parasites, elle demande beaucoup de soins.<br><br>
\t\t\tLe Bourbon rose (« Borbon Rosado ») résulte d’un croisement de bourbon rouge et de bourbon jaune. Il se distingue de la couleur rose vive lorsque ses cerises sont mûres.<br><br>
\t\t\tFruité, complexe avec un grand corps et une belle acidité, il est réputé pour être doux, avec des saveurs caramélisées.
\t\t\tL’expérience de la dégustation vous promet une texture soyeuse et élégante, réveillant de subtiles notes florales.</p>
\t\t<div class=\"col-md-2\">
\t\t\t<h3 class=\"mt-5 mb-5 text-center\">Filtrer</h3>
\t\t\t{{ form(form) }}
\t\t</div>

\t\t\t<div class=\"col-md-10\">
\t\t\t\t<h2 class='mt-5 text-center mb-5'>Nos Produits
\t\t\t\t</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t<div class=\"col-md-4\"  >
\t\t\t\t\t\t\t{% include 'product/single_product.html.twig' %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t\t<hr>

\t{% endblock %}
", "product/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\product\\index.html.twig");
    }
}
