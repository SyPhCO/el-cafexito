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

/* contact/email.html.twig */
class __TwigTemplate_986ad2538a8f755a7fcba7ec68ef343a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
</head>
<body>
    
    <h1>Demande de : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Lastname", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Firstname", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
<p>Email : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Email", [], "any", false, false, false, 9), "html", null, true);
        echo " </p>
<p>Sujet : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
<p>Message : </p>
<div>
";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 13);
        echo "
</div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "contact/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  56 => 10,  52 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/email.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\contact\\email.html.twig");
    }
}
