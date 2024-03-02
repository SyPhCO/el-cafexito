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
class __TwigTemplate_717aeb5122cae11b985aab31575139aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "<h1 class=\"text-center mt-5 mb-5\">Acceuil</h1>
<div class=\"row acceuilStart justify-content-center \">
    <h3 class=\"text-center col-md-12\">Produits à la Une !</h3>
    ";
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
        return array (  202 => 44,  186 => 41,  180 => 38,  172 => 35,  168 => 34,  163 => 32,  159 => 31,  156 => 30,  148 => 27,  144 => 26,  139 => 24,  135 => 23,  129 => 20,  126 => 19,  124 => 18,  121 => 17,  104 => 16,  99 => 13,  84 => 11,  82 => 10,  79 => 9,  62 => 8,  57 => 5,  53 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\home\\index.html.twig");
    }
}
