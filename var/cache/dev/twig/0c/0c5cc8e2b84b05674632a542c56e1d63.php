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

/* ./components/_footer.html.twig */
class __TwigTemplate_6c7e181cbaebba9fa578fe3e8488bbea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./components/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./components/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer-custom mt-5\">
\t<div class=\"mr-5 text-light\">&copy; 2022-2023 El cafexito
\t</div>
\t<a href=\"#\" class=\"mr-5 text-light\">mentions légales</a>
</small>
<a href=\"#\" class=\"float-right ml-5 text-light\">Haut de page</a>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "./components/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-custom mt-5\">
\t<div class=\"mr-5 text-light\">&copy; 2022-2023 El cafexito
\t</div>
\t<a href=\"#\" class=\"mr-5 text-light\">mentions légales</a>
</small>
<a href=\"#\" class=\"float-right ml-5 text-light\">Haut de page</a>
</footer>
", "./components/_footer.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_footer.html.twig");
    }
}
