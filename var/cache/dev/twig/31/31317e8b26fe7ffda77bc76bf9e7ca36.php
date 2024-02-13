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

/* ./components/_social.html.twig */
class __TwigTemplate_a040e5c22232d1f1a0930e6378d548b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./components/_social.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./components/_social.html.twig"));

        // line 1
        echo "<div class=\"social\">
<a href=\"https://www.facebook.com/ElCafexito?locale=fr_FR\" rel=\"noopener\" target=\"_blank\">
    <div class=\"social-btn color-facebook\">
      <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
      ";
        // line 6
        echo "    </div>
  </a>
  <a href=\"https://www.instagram.com/elcafexito/?fbclid=IwAR3lmtCWn4U89lT4ojJttfbozDCBZV1FJtMnR4wslbPaaUrO5hGMu1jh56E\" rel=\"noopener\" target=\"_blank\">
    <div class=\"social-btn color-instagram\">
      <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/insta.png"), "html", null, true);
        echo "\" alt=\"instagram\">
    </div>
  </a>
  <a href=\"#\">
    <div class=\"social-btn color-whatsapp\">
      <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/whatsapp.png"), "html", null, true);
        echo "\" alt=\"whatsApp\">
    </div>
  </a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "./components/_social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  58 => 10,  52 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"social\">
<a href=\"https://www.facebook.com/ElCafexito?locale=fr_FR\" rel=\"noopener\" target=\"_blank\">
    <div class=\"social-btn color-facebook\">
      <img src=\"{{ asset('assets/images/facebook.png') }}\" alt=\"facebook\">
      {# <p class=\"order-1 google-font margin-telgram\">Telegram</p> #}
    </div>
  </a>
  <a href=\"https://www.instagram.com/elcafexito/?fbclid=IwAR3lmtCWn4U89lT4ojJttfbozDCBZV1FJtMnR4wslbPaaUrO5hGMu1jh56E\" rel=\"noopener\" target=\"_blank\">
    <div class=\"social-btn color-instagram\">
      <img src=\"{{ asset('assets/images/insta.png') }}\" alt=\"instagram\">
    </div>
  </a>
  <a href=\"#\">
    <div class=\"social-btn color-whatsapp\">
      <img src=\"{{ asset('assets/images/whatsapp.png') }}\" alt=\"whatsApp\">
    </div>
  </a>
</div>
", "./components/_social.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_social.html.twig");
    }
}
