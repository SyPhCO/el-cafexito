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

/* gallery/index.html.twig */
class __TwigTemplate_868a8a1c6c1847476539aee2bb91b737 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "gallery/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Galerie";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1 class=\"text-center p-5\">GALERIES</h1>
<h1 class=\"text-center p-5\">PHOTOS</h1>

<div class=\" cont-gallery\" id=\"gallery\">

    <div class=\"gallery\">
        <ul class=\"gallery-item\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo "    
                <li>
                    <img src=\"/uploads/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"mb-2\" alt=\"Image Gallerie photo\">
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " 
        </ul>           
    </div>

    <div class=\"gallery\">
        <ul class=\"gallery-item\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo "    
                <li>
                    <img src=\"/uploads/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image2", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"mb-2\" alt=\"Image Gallerie photo\">
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo " 
        </ul>       
    </div>

    <div class=\"gallery\">
        <ul class=\"gallery-item\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo "    
                <li>
                    <img src=\"/uploads/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image3", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"mb-2\" alt=\"Image Gallerie photo\">
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
        </ul>  
    </div>

</div>
\t<h1 class=\"text-center m-5\">VIDEOS</h1>


";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            echo "    
<h2 class=\"fw-bold mt-5 text-center mb-4\"> ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo " </h2>
<p class=\"fw-bold m-2 text-center\"> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo " </p>
\t<div class=\"video-container mb-5\">
\t\t<video src=\"./uploads/files/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "video", [], "any", false, false, false, 50), "html", null, true);
            echo "\" controls preload=\"metadata\" class=\"video\">
\t\t\t<source src=\"./uploads/files/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "video", [], "any", false, false, false, 51), "html", null, true);
            echo "\" controls type=\"video/mp4\"></source>
\t</video>
</div>
<hr>
\t";
            // line 60
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo " 
";
    }

    public function getTemplateName()
    {
        return "gallery/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 61,  168 => 60,  161 => 51,  157 => 50,  152 => 48,  148 => 47,  142 => 46,  132 => 38,  123 => 36,  116 => 34,  108 => 28,  99 => 26,  92 => 24,  84 => 18,  75 => 16,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gallery/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\gallery\\index.html.twig");
    }
}
