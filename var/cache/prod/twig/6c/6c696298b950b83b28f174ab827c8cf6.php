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

/* index.html.twig */
class __TwigTemplate_53681a44047f17b34cf9c193f336af8a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
\t<div class=\"row acceuilStart justify-content-center \">
\t\t<h1 class=\"text-center col-md-12\">Produits a la Une !</h1>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            echo "\t\t\t<div class=\"col-md-4 mt-5 text-center justify-content-center\">
\t\t\t\t";
            // line 10
            $this->loadTemplate("product/single_product.html.twig", "index.html.twig", 10)->display($context);
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
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["landingPage"] ?? null));
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
            echo "    <div class=\"row featurette\">
        ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) % 2 == 0)) {
                // line 19
                echo "            <div class=\"col-md-5 order-md-2\">
                <img class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded\" width=\"500\" height=\"500\" src=\"/uploads/";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "illustration", [], "any", false, false, false, 20), "html", null, true);
                echo "\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
            </div>
            <div class=\"col-md-7 order-md-1\">
        ";
            } else {
                // line 24
                echo "            <div class=\"col-md-7\">
        ";
            }
            // line 26
            echo "            <h2 class=\"featurette-heading\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "<br>
                <span class=\"text-muted\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subtitle", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
            </h2>
            <p class=\"lead\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
            echo "\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "btnTitle", [], "any", false, false, false, 30), "html", null, true);
            echo "</a>
        </div>
        ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32) % 2 != 0)) {
                // line 33
                echo "            <div class=\"col-md-5\">
                <img class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded\" width=\"500\" height=\"500\" src=\"/uploads/";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "illustration", [], "any", false, false, false, 34), "html", null, true);
                echo "\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
            </div>
        ";
            }
            // line 37
            echo "    </div>
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
        // line 40
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 40,  172 => 37,  166 => 34,  163 => 33,  161 => 32,  154 => 30,  150 => 29,  145 => 27,  140 => 26,  136 => 24,  129 => 20,  126 => 19,  124 => 18,  121 => 17,  104 => 16,  99 => 13,  84 => 11,  82 => 10,  79 => 9,  62 => 8,  57 => 5,  53 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\index.html.twig");
    }
}
