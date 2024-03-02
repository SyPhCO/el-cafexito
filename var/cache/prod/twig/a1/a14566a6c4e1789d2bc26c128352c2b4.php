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

/* order/index.html.twig */
class __TwigTemplate_a092ca757ff54bb15e06ac2161fe28f2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande - El cafexito";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h2>Je passe ma commande</h2>
<p>Choisissez vos préférences avant de passer votre commande sur El Cafexito.</p>
<hr>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_recap")]);
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, false, 13), 'label', ["label" => "Choisissez votre adresse de livraison."]);
        echo "
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
        echo "\"> Ajouter une nouvelle adresse</a>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo "        ";
        echo twig_replace_filter(($context["formHtml"] ?? null), ["[br]" => "<br>"]);
        echo "
    </div>
    <div class=\"col-md-6\">
        <p class=\"mb-3 mt-2\"> <b>Récapitulatif de ma commande.</b></p>
        <div class=\"order-sumary mt-3\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 23
            echo "           
                <div class=\"row\">
                    <div class=\"col-2 mb-4\">
                        <img src=\"/uploads/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 26), "illustration", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "\" height=\"75vh\" width=\"75vw\" style=\"object-fit: cover\">
                    </div>
                    <div class=\"col-8 text-center my-auto\">
                        <b>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</b>
                    </div>    
                    <div class=\"col-2 my-auto\">
                        <b> x ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 32), "html", null, true);
            echo "</b>
                    </div>
                </div>
                 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
       

    </div>
</div>
<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\" class=\"btn btn-danger btn-sm\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  128 => 37,  117 => 32,  111 => 29,  103 => 26,  98 => 23,  94 => 22,  85 => 17,  80 => 15,  76 => 14,  72 => 13,  67 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\order\\index.html.twig");
    }
}
