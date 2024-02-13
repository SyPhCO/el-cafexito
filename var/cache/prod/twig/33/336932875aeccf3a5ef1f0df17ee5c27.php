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

/* components/_social.html.twig */
class __TwigTemplate_ef91362a9e19f090e47a94df19ebf787 extends Template
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
        echo "<div class=\"social\">
<a href=\"https://www.facebook.com/ElCafexito?locale=fr_FR\" target=\"_blank\">
    <div class=\"social-btn color-facebook\">
      <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
      ";
        // line 6
        echo "    </div>
  </a>
  <a href=\"https://www.instagram.com/elcafexito/?fbclid=IwAR3lmtCWn4U89lT4ojJttfbozDCBZV1FJtMnR4wslbPaaUrO5hGMu1jh56E\" target=\"_blank\">
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
    }

    public function getTemplateName()
    {
        return "components/_social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  52 => 10,  46 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_social.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_social.html.twig");
    }
}
