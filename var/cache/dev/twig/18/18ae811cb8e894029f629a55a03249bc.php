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
class __TwigTemplate_caba47f0a13e987ba5517af97b3840be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advice/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "advice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nos conseils - El Cafexito";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos conseils - El Cafexito{% endblock %}

{% block content %}

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
{% endblock %}
", "advice/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\advice\\index.html.twig");
    }
}
