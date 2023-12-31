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
      <img src=\"./assets/images/facebook.png\" alt=\"facebook\">
      ";
        // line 6
        echo "    </div>
  </a>
  <a href=\"https://www.instagram.com/elcafexito/?fbclid=IwAR3lmtCWn4U89lT4ojJttfbozDCBZV1FJtMnR4wslbPaaUrO5hGMu1jh56E\" target=\"_blank\">
    <div class=\"social-btn color-instagram\">
      <img src=\"./assets/images/insta.png\" alt=\"instagram\">
    </div>
  </a>
  <a href=\"#\">
    <div class=\"social-btn color-whatsapp\">
      <img src=\"./assets/images/whatsapp.png\" alt=\"whatsApp\">
    </div>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/_social.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_social.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\components\\_social.html.twig");
    }
}
