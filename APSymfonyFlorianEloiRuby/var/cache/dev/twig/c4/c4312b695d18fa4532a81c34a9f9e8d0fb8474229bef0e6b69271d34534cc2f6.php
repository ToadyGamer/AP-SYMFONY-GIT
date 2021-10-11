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

/* presentation.html.twig */
class __TwigTemplate_0dc3c57de6b41e0a2c3e8c2f98b858cd0c3e02846f129d491b48eba9605d41bd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presentation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PRESENTATION";
        
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
<img src=\"Imgs/Plante3.png\" style=\"width:150px; float:left; margin-left:7%; margin-top:9%;\">
<img src=\"Imgs/Plante4.png\" style=\"width:110px; float:right; margin-right:10%;  margin-top:8%;\">
<div class=\"example-wrapper\" style=\"text-align: justify;\">
    <center><h1><img src=\"Imgs/PresentationIcone.png\" style=\"width:70px;\"> <u>PRESENTATION</u> <img src=\"Imgs/PresentationIcone.png\" style=\"width:70px;\"></h1></center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img src=\"Imgs/Presentation.png\" style=\"width:250px; float:left;\">
    <h5 Style=\"font-family: Arial;\">Je m'appelle Mr.Potier, j'ai 34 ans et je suis paysagiste depuis 5 ans. Je suis en possession d'un BAC + 3 paysagiste et j'ai commencé à pratiquer à l'age de 28 ans.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Je possède beaucoup d'expérience dans ce travail car je suis passé par beaucoup d'entreprises pour acquérir de l'expérience. En effet, j'ai pu voir les productions des entreprises
    \"Cueillette Urbaine\" ou bien encore \"Cre'jardins\". Ce fut de bonnes expériences qui m'ont permit de me lancer et de comprendre l'idée générale du métier de paysagiste.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Si vous voulez me contacter pour une remarque ou pour simplement un petit merci, vous pouvez me joindre <a href=\"/contact\">ici</a>.<h5>
    <h5 Style=\"font-family: Arial;\">Si vous désirez me commander quelque chose, n'hésitez pas ! C'est <a href=\"/prestations\">ici</a> ! J'en propose de toutes sortes. Que ce soit pour professionnel ou bien particulier.
    Que ce soit de toutes tailles ou de toutes formes !</h5>
</div>
<img src=\"Imgs/Plante1.png\" style=\"width:240px; float:left; margin-left:12%; margin-top:-5.5%\">
<img src=\"Imgs/Plante2.png\" style=\"width:220px; float:right; margin-right:12%; margin-top:-5.7%\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "presentation.html.twig";
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

{% block title %}PRESENTATION{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<img src=\"Imgs/Plante3.png\" style=\"width:150px; float:left; margin-left:7%; margin-top:9%;\">
<img src=\"Imgs/Plante4.png\" style=\"width:110px; float:right; margin-right:10%;  margin-top:8%;\">
<div class=\"example-wrapper\" style=\"text-align: justify;\">
    <center><h1><img src=\"Imgs/PresentationIcone.png\" style=\"width:70px;\"> <u>PRESENTATION</u> <img src=\"Imgs/PresentationIcone.png\" style=\"width:70px;\"></h1></center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img src=\"Imgs/Presentation.png\" style=\"width:250px; float:left;\">
    <h5 Style=\"font-family: Arial;\">Je m'appelle Mr.Potier, j'ai 34 ans et je suis paysagiste depuis 5 ans. Je suis en possession d'un BAC + 3 paysagiste et j'ai commencé à pratiquer à l'age de 28 ans.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Je possède beaucoup d'expérience dans ce travail car je suis passé par beaucoup d'entreprises pour acquérir de l'expérience. En effet, j'ai pu voir les productions des entreprises
    \"Cueillette Urbaine\" ou bien encore \"Cre'jardins\". Ce fut de bonnes expériences qui m'ont permit de me lancer et de comprendre l'idée générale du métier de paysagiste.</h5>
    <br>
    <h5 Style=\"font-family: Arial;\">Si vous voulez me contacter pour une remarque ou pour simplement un petit merci, vous pouvez me joindre <a href=\"/contact\">ici</a>.<h5>
    <h5 Style=\"font-family: Arial;\">Si vous désirez me commander quelque chose, n'hésitez pas ! C'est <a href=\"/prestations\">ici</a> ! J'en propose de toutes sortes. Que ce soit pour professionnel ou bien particulier.
    Que ce soit de toutes tailles ou de toutes formes !</h5>
</div>
<img src=\"Imgs/Plante1.png\" style=\"width:240px; float:left; margin-left:12%; margin-top:-5.5%\">
<img src=\"Imgs/Plante2.png\" style=\"width:220px; float:right; margin-right:12%; margin-top:-5.7%\">
{% endblock %}
", "presentation.html.twig", "C:\\Users\\duponte\\Downloads\\Projet\\APSymfonyFlorianEloiRuby\\templates\\presentation.html.twig");
    }
}
