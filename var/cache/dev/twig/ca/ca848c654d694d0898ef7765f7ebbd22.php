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

/* team/index.html.twig */
class __TwigTemplate_fbc1fa65d49af2abd47baebf9eccd41b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Qui sommes nous";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 5
            echo "    <div class=\"row featurette mt-5 justify-content-center\">
        <div class=\"col-md-12\">
            <h2 class=\"featurette-heading\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "<br> <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "role", [], "any", false, false, false, 7), "html", null, true);
            echo "</span></h2>
            
\t\t\t\t\t\t\t\t<div class=\"gallery-item \">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "illustration", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"mb-2 zoom w-25\" alt=\"test\" >
\t\t\t\t\t\t\t\t</div>

                <p class=\"lead\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
            </div>
                        <div class=\"container cont-gallery\" id=\"#gallery\">
\t\t\t\t\t\t\t<div class=\"gallery\">

\t\t\t\t\t\t\t\t<div class=\"gallery-item \">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test\" width=\"300px\" height=\"300px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery2", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test2\" width=\"300px\" height=\"300px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery3", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"mb-2 zoom\" alt=\"test3\" width=\"300px\" height=\"300px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal\">
\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t<img class=\"modal-content\" src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        </div>
                    <hr class=\"featurette-divider\">      
    </div>\t\t\t\t\t
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 43,  138 => 31,  129 => 25,  120 => 19,  111 => 13,  105 => 10,  97 => 7,  93 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Qui sommes nous{% endblock %}
{% block content %}
  {% for team in teams %}
    <div class=\"row featurette mt-5 justify-content-center\">
        <div class=\"col-md-12\">
            <h2 class=\"featurette-heading\">{{ team.name }}<br> <span class=\"text-muted\">{{ team.role }}</span></h2>
            
\t\t\t\t\t\t\t\t<div class=\"gallery-item \">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ team.illustration }}\" class=\"mb-2 zoom w-25\" alt=\"test\" >
\t\t\t\t\t\t\t\t</div>

                <p class=\"lead\">{{ team.description }}</p>
            </div>
                        <div class=\"container cont-gallery\" id=\"#gallery\">
\t\t\t\t\t\t\t<div class=\"gallery\">

\t\t\t\t\t\t\t\t<div class=\"gallery-item \">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ team.gallery }}\" class=\"mb-2 zoom\" alt=\"test\" width=\"300px\" height=\"300px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ team.gallery2 }}\" class=\"mb-2 zoom\" alt=\"test2\" width=\"300px\" height=\"300px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item\">
\t\t\t\t\t\t\t\t\t<img src=\"/uploads/{{ team.gallery3 }}\" class=\"mb-2 zoom\" alt=\"test3\" width=\"300px\" height=\"300px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal\">
\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t<img class=\"modal-content\" src=\"\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        </div>
                    <hr class=\"featurette-divider\">      
    </div>\t\t\t\t\t
    {% endfor %}   
{% endblock %}", "team/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\team\\index.html.twig");
    }
}
