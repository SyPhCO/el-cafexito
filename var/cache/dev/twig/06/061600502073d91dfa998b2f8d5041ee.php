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

/* ./comments/_comments_list.html.twig */
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./comments/_comments_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./comments/_comments_list.html.twig"));

        // line 1
        echo "<div class=\"tab-pane fade pagination-link \" id=\"contact-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
\t<div class=\"comments-list row justify-content-center \">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentsByProduct"]) || array_key_exists("commentsByProduct", $context) ? $context["commentsByProduct"] : (function () { throw new RuntimeError('Variable "commentsByProduct" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 4
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 4) == twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))) {
                // line 5
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comments"], 1, [], "array", false, false, false, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 6
                    echo "\t\t\t\t<div class=\"com col-3 m-4 p-2 \" id=\"style-7\">
\t\t\t\t\t\t<h6 class=\"text-center text-capitalize p-2\">";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 7), "author", [], "any", false, false, false, 7), "html", null, true);
                    echo "</h6>
\t\t\t\t\t\t<p class=\"text-justify pl-3 pr-3\"> ";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 8), "comment", [], "any", false, false, false, 8), "html", null, true);
                    echo " </p>
\t\t\t\t</div>\t\t
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "./comments/_comments_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 13,  80 => 12,  77 => 11,  68 => 8,  64 => 7,  61 => 6,  56 => 5,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab-pane fade pagination-link \" id=\"contact-{{ product.id }}\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
\t<div class=\"comments-list row justify-content-center \">
\t\t{% for comments in commentsByProduct %}
\t\t\t{% if (comments[0] == product.id) %}
\t\t\t\t{% for comment in comments[1] %}
\t\t\t\t<div class=\"com col-3 m-4 p-2 \" id=\"style-7\">
\t\t\t\t\t\t<h6 class=\"text-center text-capitalize p-2\">{{comment[1].author}}</h6>
\t\t\t\t\t\t<p class=\"text-justify pl-3 pr-3\"> {{comment[1].comment}} </p>
\t\t\t\t</div>\t\t
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
</div>
", "./comments/_comments_list.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\comments\\_comments_list.html.twig");
    }
}
