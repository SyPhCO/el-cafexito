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
class __TwigTemplate_89552c7eab5fe71a8578b5964b1ba6fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gallery/index.html.twig", 1);
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

        echo "Galerie";
        
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
<h1 class=\"text-center p-5\">GALERIES</h1>
<h1 class=\"text-center p-5\">PHOTOS</h1>

<div class=\" cont-gallery\" id=\"gallery\">

    <div class=\"gallery\">
        <ul class=\"gallery-item\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 14, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 24, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 34, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 46, $this->source); })()));
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
        <div class=\"video-container mb-5\">
            <video src=\"./uploads/files/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "video", [], "any", false, false, false, 50), "html", null, true);
            echo "\" controls preload=\"metadata\" class=\"video\">
                <source src=\"./uploads/files/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "video", [], "any", false, false, false, 51), "html", null, true);
            echo "\" controls type=\"video/mp4\"></source>
        </video>
    </div>
    <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo " 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  202 => 55,  191 => 51,  187 => 50,  182 => 48,  178 => 47,  172 => 46,  162 => 38,  153 => 36,  146 => 34,  138 => 28,  129 => 26,  122 => 24,  114 => 18,  105 => 16,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galerie{% endblock %}

{% block content %}

<h1 class=\"text-center p-5\">GALERIES</h1>
<h1 class=\"text-center p-5\">PHOTOS</h1>

<div class=\" cont-gallery\" id=\"gallery\">

    <div class=\"gallery\">
        <ul class=\"gallery-item\">
            {% for image in images %}    
                <li>
                    <img src=\"/uploads/{{ image.image }}\" class=\"mb-2\" alt=\"Image Gallerie photo\">
                </li>
            {% endfor %} 
        </ul>           
    </div>

    <div class=\"gallery\">
        <ul class=\"gallery-item\">
            {% for image in images %}    
                <li>
                    <img src=\"/uploads/{{ image.image2 }}\" class=\"mb-2\" alt=\"Image Gallerie photo\">
                </li>
            {% endfor %} 
        </ul>       
    </div>

    <div class=\"gallery\">
        <ul class=\"gallery-item\">
            {% for image in images %}    
                <li>
                    <img src=\"/uploads/{{ image.image3 }}\" class=\"mb-2\" alt=\"Image Gallerie photo\">
                </li>
            {% endfor %} 
        </ul>  
    </div>

</div>
\t<h1 class=\"text-center m-5\">VIDEOS</h1>


{% for movie in movies %}    
    <h2 class=\"fw-bold mt-5 text-center mb-4\"> {{ movie.name }} </h2>
    <p class=\"fw-bold m-2 text-center\"> {{ movie.description }} </p>
        <div class=\"video-container mb-5\">
            <video src=\"./uploads/files/{{ movie.video }}\" controls preload=\"metadata\" class=\"video\">
                <source src=\"./uploads/files/{{ movie.video }}\" controls type=\"video/mp4\"></source>
        </video>
    </div>
    <hr>
{% endfor %} 
{% endblock %}

", "gallery/index.html.twig", "C:\\wamp64\\www\\el-cafexito\\templates\\gallery\\index.html.twig");
    }
}
