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
class __TwigTemplate_09797cb753f6f062d908d1f85b31a57a extends Template
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
        echo "<h1 class=\"text-center mt-5 mb-5\">Acceuil</h1>
<div class=\"row acceuilStart justify-content-center \">
    <h3 class=\"text-center col-md-12\">Produits à la Une !</h3>
    ";
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
            echo "    <div class=\"col-md-4 mt-5 text-center justify-content-center\">
        ";
            // line 10
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 10)->display($context);
            // line 11
            echo "    </div>
    ";
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
        echo "</div>

<hr class=\"featurette-divider\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            echo "<div class=\"row featurette\">
    ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) % 2 == 0)) {
                // line 19
                echo "    <div class=\"col-md-5\">
        <img class=\" img-fluid mx-auto rounded\" src=\"/uploads/";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "illustration", [], "any", false, false, false, 20), "html", null, true);
                echo "\"></img>
    </div>
    <div class=\"col-md-7\">
        <h2> ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "<br>
            <span class=\"text-muted\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subtitle", [], "any", false, false, false, 24), "html", null, true);
                echo "</span>
        </h2>
        <p class=\"lead\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 26), "html", null, true);
                echo "</p>
        <a href=\"";
                // line 27
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
                echo "\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "btnTitle", [], "any", false, false, false, 27), "html", null, true);
                echo "</a>
    </div>
    ";
            } else {
                // line 30
                echo "    <div class=\"col-md-7\">
        <h2> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 31), "html", null, true);
                echo "<br>
            <span class=\"text-muted\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subtitle", [], "any", false, false, false, 32), "html", null, true);
                echo "</span>
        </h2>
        <p class=\"lead\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 34), "html", null, true);
                echo "</p>
        <a href=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
                echo "\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "btnTitle", [], "any", false, false, false, 35), "html", null, true);
                echo "</a>
    </div>
    <div class=\"col-md-5\">
        <img class=\" img-fluid mx-auto rounded\" src=\"/uploads/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "illustration", [], "any", false, false, false, 38), "html", null, true);
                echo "\"></img>
    </div>
    ";
            }
            // line 41
            echo "</div>
<hr class=\"featurette-divider\">
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
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
        return array (  232 => 44,  216 => 41,  210 => 38,  202 => 35,  198 => 34,  193 => 32,  189 => 31,  186 => 30,  178 => 27,  174 => 26,  169 => 24,  165 => 23,  159 => 20,  156 => 19,  154 => 18,  151 => 17,  134 => 16,  129 => 13,  114 => 11,  112 => 10,  109 => 9,  92 => 8,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block carousel %}{% endblock %}

{% block content %}
<h1 class=\"text-center mt-5 mb-5\">Acceuil</h1>
<div class=\"row acceuilStart justify-content-center \">
    <h3 class=\"text-center col-md-12\">Produits à la Une !</h3>
    {% for product in products %}
    <div class=\"col-md-4 mt-5 text-center justify-content-center\">
        {% include 'product/single_product.html.twig' %}
    </div>
    {% endfor %}
</div>

<hr class=\"featurette-divider\">
{% for article in landingPage %}
<div class=\"row featurette\">
    {% if loop.index is even %}
    <div class=\"col-md-5\">
        <img class=\" img-fluid mx-auto rounded\" src=\"/uploads/{{ article.illustration }}\"></img>
    </div>
    <div class=\"col-md-7\">
        <h2> {{ article.title }}<br>
            <span class=\"text-muted\">{{ article.subtitle }}</span>
        </h2>
        <p class=\"lead\">{{ article.content }}</p>
        <a href=\"{{ path('app_team') }}\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">{{ article.btnTitle }}</a>
    </div>
    {% else %}
    <div class=\"col-md-7\">
        <h2> {{ article.title }}<br>
            <span class=\"text-muted\">{{ article.subtitle }}</span>
        </h2>
        <p class=\"lead\">{{ article.content }}</p>
        <a href=\"{{ path('app_team') }}\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">{{ article.btnTitle }}</a>
    </div>
    <div class=\"col-md-5\">
        <img class=\" img-fluid mx-auto rounded\" src=\"/uploads/{{ article.illustration }}\"></img>
    </div>
    {% endif %}
</div>
<hr class=\"featurette-divider\">
{% endfor %}

{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\home\\index.html.twig");
    }
}
