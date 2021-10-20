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

/* /index.html.twig */
class __TwigTemplate_fa2e59c6a33b2dbe8832ced728663c258f4e096ffe27a1ce44a1b34a1ca8b14e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello Controller!";
        
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

<div class=\"example-wrapper\">
    <h1 style=\"text-align: center; font-size:400%; font-family: Agreloy;\">Mille Et Une Épines</h1>

    <br>
    <br>
    <h5 Style=\"font-family: Arial;\">Bonjour et bienvenue sur le site de Mille Et Une Épines. Nous nous occupons de divers travaux dans le domaine du paysagisme.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Nos principaux travaux se spécialisent dans la platation d'arbres, arbustes, conifères ou autres végétaux tels que des haies. Nous pouvons aussi nous charger de l'engazonnement des terrains de sport, parcs ou autres jardins.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">De plus, nous pouvons nous occuper des travaux d'entretien plus basiques, tels que la taille des arbustes et haies, tonte, traitements phytosanitaires, désherbage chimique ou bien l'élagae et soins aux arbres.<h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Vous trouverez sur ce site quelques exemples parlants de nos travaux, en plus de des avis d'ancien clients, et bien évidemment, des moyens de nous contacter.</h5>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Controller!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 style=\"text-align: center; font-size:400%; font-family: Agreloy;\">Mille Et Une Épines</h1>

    <br>
    <br>
    <h5 Style=\"font-family: Arial;\">Bonjour et bienvenue sur le site de Mille Et Une Épines. Nous nous occupons de divers travaux dans le domaine du paysagisme.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Nos principaux travaux se spécialisent dans la platation d'arbres, arbustes, conifères ou autres végétaux tels que des haies. Nous pouvons aussi nous charger de l'engazonnement des terrains de sport, parcs ou autres jardins.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">De plus, nous pouvons nous occuper des travaux d'entretien plus basiques, tels que la taille des arbustes et haies, tonte, traitements phytosanitaires, désherbage chimique ou bien l'élagae et soins aux arbres.<h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Vous trouverez sur ce site quelques exemples parlants de nos travaux, en plus de des avis d'ancien clients, et bien évidemment, des moyens de nous contacter.</h5>
</div>
{% endblock %}
", "/index.html.twig", "C:\\Users\\duponte\\Downloads\\Projet\\APSymfonyFlorianEloiRuby\\templates\\index.html.twig");
    }
}
