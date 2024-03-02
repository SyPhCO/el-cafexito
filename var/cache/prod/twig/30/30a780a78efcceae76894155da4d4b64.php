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

/* advice/index.html.twig */
class __TwigTemplate_6883f704b380e86cacbe8c70001cd6c1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "advice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos conseils - El Cafexito";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"\">
    <h1 class=\"text-center\">Nos conseils</h1>
Stocker le sachet à l’abri de la lumière et dans un conditionnement hermétique (sous-vide) afin de conserver le café plus longtemps. <br><br>

Pour le café moulu : <br><br>

Le café moulu est idéal pour les cafetières Italiennes ou cafetières à piston. Il se congèle parfaitement: cela permet de figer les huiles essentielles telles que la caffeol et de stopper le processus de vieillissement. Ainsi, on ne sort du congélateur que la quantité voulue et on lui laisse le temps de venir à température ambiante avant de l’utiliser. <br><br>

Pour le café en grain: <br><br>

Vous pouvez utiliser un moulin-broyeur et faire un broyage de taille moyenne, à déguster à l’aide d’une cafetière ou verser dans une passoire. Vous pouvez le conserver au froid (frigo ou congélateur).

</div>
<div class=\"text-center\">
\t\t\t<img class=\"text-center bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded\" width=\"500\" height=\"500\" src=\"./assets/images/gens.jpg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"></img>
</div>
";
    }

    public function getTemplateName()
    {
        return "advice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "advice/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\advice\\index.html.twig");
    }
}
