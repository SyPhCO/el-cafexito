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
class __TwigTemplate_604fe8deb44342e3815c4cf14ba486da extends Template
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
        echo "
\t<div class=\"row acceuilStart\">
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
            echo "\t\t\t<div class=\"col-md-4 mt-5 \">
\t\t\t\t";
            // line 10
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 10)->display($context);
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

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">Fabien.<br>
\t\t\t\t<span class=\"text-muted\">Dirigeant</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Je suis en lien direct avec un petit producteur local de ma famille qui cultive le café depuis des générations.</p>
\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        echo "\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">Plus d'infos ?</a>
\t\t</div>
\t\t<div class=\"col-md-5 \">
\t\t\t<img class=\" bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded\" width=\"500\" height=\"500\" src=\"./assets/images/profilTeam.jpg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
\t    </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-2\">
            <h2 class=\"featurette-heading\">El Cauca<br>
                <span class=\"text-muted\">Colombie</span>
            </h2>
            <p class=\"lead\">Le département de Cauca est situé au sud-ouest de la Colombie.C’est la région montagneuse où l’importante rivière Cauca prend naissance...</p>
            <a href=\"#\" class=\"btn btn-info text-center font-weight-bold mt-2 mb-3\">Découvrez en plus</a>
        </div>
        <div class=\"col-md-5 order-md-1\">
            <img class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" src=\"./assets/images/escudo.png\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
        </div>
    </div>
    
    <hr class=\"featurette-divider\">
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
        return array (  111 => 23,  99 => 13,  84 => 11,  82 => 10,  79 => 9,  62 => 8,  57 => 5,  53 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\home\\index.html.twig");
    }
}
