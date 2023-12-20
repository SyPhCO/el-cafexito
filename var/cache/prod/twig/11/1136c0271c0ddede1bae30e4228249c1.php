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
class __TwigTemplate_31aaa5c0eca8c20ba362812f7a532b7c extends Template
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
        echo "\t<h1 class=\"text-center mt-5\">Qui sommes-nous?</h1>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 7
            echo "\t\t<div class=\"row  justify-content-center\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"featurette-heading\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "<br>
\t\t\t\t\t<span class=\"text-muted\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "role", [], "any", false, false, false, 10), "html", null, true);
            echo "</span>
\t\t\t\t</h2>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-4 col-xs-12 \">
\t\t\t\t\t\t<img src=\"/uploads/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "illustration", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"mb-2 cardgallery w-100\" alt=\"test\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<p class=\"lead\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\" container \">
\t\t\t\t<div class=\"d-flex flex-row\">
\t\t\t\t\t<div class=\"col-4 col-xs-12 d-block\">
\t\t\t\t\t\t<img src=\"/uploads/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"mb-2 team-picture imgzoom\" alt=\"test\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 col-xs-12 d-block\">
\t\t\t\t\t\t<img src=\"/uploads/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery2", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"mb-2 team-picture imgzoom\" alt=\"test2\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4 col-xs-12 d-block\">
\t\t\t\t\t\t<img src=\"/uploads/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "gallery3", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"mb-2 team-picture imgzoom\" alt=\"test3\">
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"featurette-divider\">
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  109 => 30,  102 => 26,  95 => 22,  87 => 17,  81 => 14,  74 => 10,  70 => 9,  66 => 7,  62 => 6,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\team\\index.html.twig");
    }
}
