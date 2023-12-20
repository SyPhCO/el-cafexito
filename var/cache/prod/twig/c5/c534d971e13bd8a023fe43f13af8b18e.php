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

/* account/address.html.twig */
class __TwigTemplate_1455a7c4ba01654c9f71d228253e98e4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/address.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes adresses - El Cafexito";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
        echo "\" class=\"btn btn btn-info btn-sm float-right mt-3\">Ajouter une adresse</a>
    <h1 class=\"text-center p-5\">Mes Adresses</h1>
     Dans cette espace vous allez pouvoir gerer toute vos adresses.<br> <br>
    
    <hr>
";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "addresses", [], "any", false, false, false, 11)) == 0)) {
            // line 12
            echo "    <p class=\"text-center\">
        Vous n'avez pas encore ajouté d'adresse dans votre compte client. Pour en ajouter une, veuillez <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
            echo "\"> <strong>cliquez ici</strong> </a>.
    </p>
    ";
        } else {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "addresses", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 17
                echo "        <div class=\"card text-center mb-5\">
            <div class=\"card-header font-weight-bold\">
                    <h2>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</h2>
            </div>

            <div class=\"card-body\">
                <h5 class=\"card-title\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 23), "html", null, true);
                echo "</h5>
                <p class=\"card-text\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postal", [], "any", false, false, false, 24), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 24), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>
                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-info mr-5\">Modifier</a>
                 <a href=\" ";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo " \" class=\"btn btn-danger\">Supprimer</a>
            </div>

            <div class=\"card-footer text-body-secondary font-weight-bold\">
                ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 30), "html", null, true);
                echo "
            </div>
        </div>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 36
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\" class=\"btn btn-danger btn-sm\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "account/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  117 => 30,  110 => 26,  106 => 25,  98 => 24,  94 => 23,  87 => 19,  83 => 17,  78 => 16,  72 => 13,  69 => 12,  67 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/address.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\account\\address.html.twig");
    }
}
