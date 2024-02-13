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

/* comments/_comments_list.html.twig */
class __TwigTemplate_3a69bacf58c0079c11e2ae2665452a85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/_comments_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/_comments_list.html.twig"));

        // line 1
        echo "

\t\t\t\t\t<div class=\"tab-pane fade pagination-link \" id=\"contact-";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
\t\t\t\t\t\t<div class=\"comments-list\" >
\t\t\t\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentsByProduct"]) || array_key_exists("commentsByProduct", $context) ? $context["commentsByProduct"] : (function () { throw new RuntimeError('Variable "commentsByProduct" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 6
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 6) == twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6))) {
                // line 7
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comments"], 1, [], "array", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 8
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 9
                    echo "\t\t\t\t\t\t\t\t\t\t<h2 class=\"col-md-12 text-center fw-bolder \"id=\"top-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
                    echo "-top\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 9), "author", [], "any", false, false, false, 9), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class= \"d-flex mt-3 justify-content-center p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-md-5 d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/uploads/comments/";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 13), "illustration", [], "any", false, false, false, 13), "html", null, true);
                    echo "\" class=\"mb-2\" alt=\"test3\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 d-block\">";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 15), "comment", [], "any", false, false, false, 15), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t";
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#top-";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "-top\" role=\"btn btn-block\">Revenir en haut</a>
\t\t\t\t\t</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comments/_comments_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  103 => 23,  97 => 22,  94 => 21,  88 => 20,  81 => 15,  76 => 13,  66 => 9,  64 => 8,  59 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

\t\t\t\t\t<div class=\"tab-pane fade pagination-link \" id=\"contact-{{ product.id }}\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
\t\t\t\t\t\t<div class=\"comments-list\" >
\t\t\t\t\t\t\t{% for comments in commentsByProduct %}
\t\t\t\t\t\t\t\t{% if (comments[0] == product.id) %}
\t\t\t\t\t\t\t\t\t{% for comment in comments[1] %}
\t\t\t\t\t\t\t\t\t\t{# {% if (comment[0] == comments[2]) %} #}
\t\t\t\t\t\t\t\t\t\t<h2 class=\"col-md-12 text-center fw-bolder \"id=\"top-{{ product.id }}-top\">{{comment[1].author}}</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class= \"d-flex mt-3 justify-content-center p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-md-5 d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/uploads/comments/{{ comment[1].illustration }}\" class=\"mb-2\" alt=\"test3\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 d-block\">{{comment[1].comment}}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t{# {% endif %} #}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#top-{{ product.id }}-top\" role=\"btn btn-block\">Revenir en haut</a>
\t\t\t\t\t</div>", "comments/_comments_list.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\comments\\_comments_list.html.twig");
    }
}
