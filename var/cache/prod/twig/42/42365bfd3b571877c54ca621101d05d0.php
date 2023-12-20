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

/* product/index.html.twig */
class __TwigTemplate_54d17533fd7f33273c14bcbc9e1b7a74 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos produits
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"row\">
\t\t<h1 class=\"col-md-12 text-center mt-5 mb-3\">Nos Cafés</h1>
\t\t<h3 class=\"col-md-12 text-center\">Variété Bourbon Rose</h3>
\t\t<p class=\"col-md-12 text-center\"><br>Cette variété d’arabica est connue dans le monde entier et est extrêmement appréciée.<br><br>
\t\t\tLe café Bourbon est une mutation naturelle de «Typica» , qui est l’une des variétés les plus anciennes. Néanmoins, elle demeure fragile : au vu de sa faible résistance aux maladies et aux parasites, elle demande beaucoup de soins.<br><br>
\t\t\tLe Bourbon rose (« Borbon Rosado ») résulte d’un croisement de bourbon rouge et de bourbon jaune. Il se distingue de la couleur rose vive lorsque ses cerises sont mûres.<br><br>
\t\t\tFruité, complexe avec un grand corps et une belle acidité, il est réputé pour être doux, avec des saveurs caramélisées.
\t\t\tL’expérience de la dégustation vous promet une texture soyeuse et élégante, réveillant de subtiles notes florales.</p>
\t\t<div class=\"col-md-2\">
\t\t\t<h1 class=\"mt-5 mb-5 text-center\">Filtrer</h1>
\t\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
\t\t</div>

\t\t\t<div class=\"col-md-10\">
\t\t\t\t<h1 class='mt-5 text-center mb-5'>Nos Produits
\t\t\t\t</h1>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 24
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
            // line 25
            echo "\t\t\t\t\t\t<div class=\"col-md-4\"  >
\t\t\t\t\t\t\t";
            // line 26
            $this->loadTemplate("product/single_product.html.twig", "product/index.html.twig", 26)->display($context);
            // line 27
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
        // line 29
        echo "\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t\t<hr>

\t";
    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 29,  103 => 27,  101 => 26,  98 => 25,  81 => 24,  71 => 17,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\product\\index.html.twig");
    }
}
