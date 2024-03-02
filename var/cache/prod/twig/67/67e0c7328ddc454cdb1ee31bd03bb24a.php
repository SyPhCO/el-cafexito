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
class __TwigTemplate_ebd66ae95019485eda216b552dcfeb0c extends Template
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
    <title>Demande de : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Lastname", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Firstname", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
</head>
<body>
    
    <h3>Demande de : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Lastname", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Firstname", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
<p>Email : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "Email", [], "any", false, false, false, 10), "html", null, true);
        echo " </p>
<p>Sujet : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
<p>Message : </p>
<div>
";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 14);
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
        return array (  68 => 14,  62 => 11,  58 => 10,  52 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/email.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\contact\\email.html.twig");
    }
}
