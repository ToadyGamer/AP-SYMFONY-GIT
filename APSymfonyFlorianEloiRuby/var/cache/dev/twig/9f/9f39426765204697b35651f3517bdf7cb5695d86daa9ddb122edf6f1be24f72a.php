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

/* /exemple.html.twig */
class __TwigTemplate_cba53bba0ebcf9156b02d24e652b514ac2f2689b8f5e03f151c9a9a8d1ced78e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/exemple.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/exemple.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EXEMPLES";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"example-wrapper\" style=\"text-align: justify;\">
    <center><h1><img src=\"Imgs/Projets.png\" style=\"width:70px;\"> <u>EXEMPLES DE MES PROJETS</u> <img src=\"Imgs/Projets.png\" style=\"width:70px;\"></h1></center>
    <br>
    <h3>Voici les nombreux projet que j'ai pu réaliser au cours de ma carrère.</h3>
    <br>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Data"]) || array_key_exists("Data", $context) ? $context["Data"] : (function () { throw new RuntimeError('Variable "Data" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneData"]) {
            // line 16
            echo "<div class=\"card text-white bg-success mb-3\" style=\"max-width: 500rem;\">
  <div class=\"card-header\"><h2>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "nomProjet", [], "any", false, false, false, 17), "html", null, true);
            echo "</h2></div>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><u>Emplacement</u> : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "adresse", [], "any", false, false, false, 19), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "cp", [], "any", false, false, false, 19), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "ville", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
    <h4><img src=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "imageExemple", [], "any", false, false, false, 20), "html", null, true);
            echo " style=\"width:100%; margin-left:auto; margin-right:auto;\"></h4>
    <p class=\"card-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "commentaire", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/exemple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  108 => 21,  104 => 20,  96 => 19,  91 => 17,  88 => 16,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}EXEMPLES{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"example-wrapper\" style=\"text-align: justify;\">
    <center><h1><img src=\"Imgs/Projets.png\" style=\"width:70px;\"> <u>EXEMPLES DE MES PROJETS</u> <img src=\"Imgs/Projets.png\" style=\"width:70px;\"></h1></center>
    <br>
    <h3>Voici les nombreux projet que j'ai pu réaliser au cours de ma carrère.</h3>
    <br>
{% for uneData in Data %}
<div class=\"card text-white bg-success mb-3\" style=\"max-width: 500rem;\">
  <div class=\"card-header\"><h2>{{ uneData.nomProjet }}</h2></div>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><u>Emplacement</u> : {{ uneData.adresse }} - {{ uneData.cp }} - {{ uneData.ville }}</h5>
    <h4><img src={{ uneData.imageExemple}} style=\"width:100%; margin-left:auto; margin-right:auto;\"></h4>
    <p class=\"card-text\">{{ uneData.commentaire }}</p>
  </div>
</div>
{% endfor %}
</div>
{% endblock %}
", "/exemple.html.twig", "C:\\Users\\castellf\\Desktop\\AP SYMFONY\\AP SYMFONY GIT\\APSymfonyFlorianEloiRuby\\templates\\exemple.html.twig");
    }
}
