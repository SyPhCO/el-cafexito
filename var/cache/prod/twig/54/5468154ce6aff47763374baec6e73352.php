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
class __TwigTemplate_928c990eb020bc94039a34bde23fb95f extends Template
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
        // line 1
        echo "

\t\t\t\t\t<div class=\"tab-pane fade pagination-link \" id=\"contact-";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
\t\t\t\t\t\t<div class=\"comments-list\" >
\t\t\t\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentsByProduct"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 6
            echo "\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_0 = $context["comments"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 6))) {
                // line 7
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = $context["comments"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 8
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 9
                    echo "\t\t\t\t\t\t\t\t\t\t<h2 class=\"col-md-12 text-center fw-bolder \"id=\"top-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
                    echo "-top\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["comment"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "author", [], "any", false, false, false, 9), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class= \"d-flex mt-3 justify-content-center p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gallery-item col-md-5 d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/uploads/comments/";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["comment"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "illustration", [], "any", false, false, false, 13), "html", null, true);
                    echo "\" class=\"mb-2\" alt=\"test3\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 d-block\">";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = $context["comment"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "comment", [], "any", false, false, false, 15), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "-top\" role=\"btn btn-block\">Revenir en haut</a>
\t\t\t\t\t</div>";
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
        return array (  100 => 24,  97 => 23,  91 => 22,  88 => 21,  82 => 20,  75 => 15,  70 => 13,  60 => 9,  58 => 8,  53 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comments/_comments_list.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\comments\\_comments_list.html.twig");
    }
}
