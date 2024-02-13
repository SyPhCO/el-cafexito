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

/* contact/index.html.twig */
class __TwigTemplate_ce07de22b829e6d864d5491c73bff63b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Me contacter - El cafexito ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <h1>Me contacter</h1>
    <p>N'hésitez pas a prendre contact avec moi , pour tous renseignements </p>

        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <div class=\"mb-3\">
                Vous etes connecté sous le compte de ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "userIdentifier", [], "any", false, false, false, 12), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 15
        echo "
    <div class=\"row mt-5 pt-5\">
        <div class=\"col-md-8\">";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "</div>
            <div class=\"col-md-4\">
            <h1>El Cafexito</h1>
            <hr>
                <ul class=\"list-unstyled mb-0\">
                    <li><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/adress40.png"), "html", null, true);
        echo "\" alt=\"code postale\">
                        01700 NEYRON
                    </li> <br>

                    <li><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/phone40.png"), "html", null, true);
        echo "\" alt=\"téléphone\">
                        07.67.22.11.84
                    </li> <br>

                    <li><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/mail40.png"), "html", null, true);
        echo "\" alt=\"adresse mail\">
                        contact@elcafexito.fr
                    </li>
                    <li>
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carteVisite.jpg"), "html", null, true);
        echo "\" alt=\"adresse mail\" class=\"img-fluid mt-4\">
                    </li>
                </ul>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  103 => 30,  96 => 26,  89 => 22,  81 => 17,  77 => 15,  69 => 12,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\contact\\index.html.twig");
    }
}
