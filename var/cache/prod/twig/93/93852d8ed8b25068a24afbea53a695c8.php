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

/* cauca/index.html.twig */
class __TwigTemplate_bbe876f60521d575bc96bbbe93617c76 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cauca/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "El Cafexito - Région Cauca";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"text-center\">
    <h1 class=\"text-center\">Région Cauca</h1>
La Colombie détient aujourd’hui 32 départements, Cauca en fait partie. <br>

La capitale est Popayan, surnommée la ville blanche (« ciudad blanca »).<br>

Ce département compte environ 1 350 000 habitants et se situe au sud-ouest du pays. <br>

Les montagnes occupent 80% du territoire, sa superficie est de 29 308 km². C’est ici que l’importante rivière Cauca prend naissance ainsi que Magdalena (plus grand fleuve de Colombie) Caquetá et Patía. <br>

C’est aussi là-bas que se dresse le Massif colombien (partagé entre les départements du Cauca et du Huila). Le département est limitrophe avec Tolima, Huila, Caquetá, Putumayo, Nariño, Valle del Cauca et l’océan Pacifique. <br>
</div>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 20
            echo "<div class=\"slider\">
    <div class=\"slides\">
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image1", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image2", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image3", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image4", [], "any", false, false, false, 25), "html", null, true);
            echo "\" alt=\"\"></div>
        <div class=\"slideSmall\"><img src=\"/uploads/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "image5", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"\"></div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "cauca/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 20,  73 => 19,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cauca/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\cauca\\index.html.twig");
    }
}
