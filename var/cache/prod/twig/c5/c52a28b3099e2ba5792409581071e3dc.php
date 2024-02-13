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

/* components/_footer.html.twig */
class __TwigTemplate_a5efa7d3d4399bc3b6595a0a80eb0c61 extends Template
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
        echo "<footer class=\"footer-custom mt-5\">
\t<div class=\"mr-5 text-light\">&copy; 2022-2023 El cafexito
\t</div>
\t<a href=\"#\" class=\"mr-5 text-light\">mentions légales</a>
</small>
<a href=\"#\" class=\"float-right ml-5 text-light\">Haut de page</a>
</footer>
";
    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_footer.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_footer.html.twig");
    }
}
