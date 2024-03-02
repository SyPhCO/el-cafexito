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
class __TwigTemplate_55f75d979995b11c6e0ceb743c8a8f9f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Qui sommes nous
";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
\t<h1 class=\"text-center mt-5 mb-4\">Qui sommes-nous?</h1>
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 8
            echo "
\t\t<div class=\"col-12 row team-block\">
\t\t\t\t<img src=\"/uploads/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "illustration", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"mb-2 team-picture\" alt=\"Photo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
\t\t\t\t<h2 class=\" m-auto\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "<br>
\t\t\t\t\t<span class=\"text-muted\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "role", [], "any", false, false, false, 12), "html", null, true);
            echo "</span>
\t\t\t\t</h2>

\t\t\t\t<p class=\"lead col-12\">";
            // line 15
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "description", [], "any", false, false, false, 15), "html", null, true));
            echo "</p>
\t\t\t<div class=\"m-auto justify-content-center text-center\">
\t\t\t\t<img src=\"/uploads/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"mb-2  team-picture\" alt=\"Photo descriptive ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo " 1\">

\t\t\t\t<img src=\"/uploads/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery2", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"mb-2  team-picture\" alt=\"Photo descriptive ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo " 2\">

\t\t\t\t<img src=\"/uploads/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery3", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"mb-2  team-picture\" alt=\"Photo descriptive ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo " 3\">

\t\t\t\t<img src=\"/uploads/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery4", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"mb-2  team-picture\" alt=\"Photo descriptive ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo " 4\">
\t\t\t</div>
\t\t</div>

\t\t<hr class=\"mt-4 mb-4 bg-light\">

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
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
        return array (  128 => 30,  113 => 23,  106 => 21,  99 => 19,  92 => 17,  87 => 15,  81 => 12,  77 => 11,  71 => 10,  67 => 8,  63 => 7,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\team\\index.html.twig");
    }
}
