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

/* base.html.twig */
class __TwigTemplate_3e3b42f31cdc9896733944675ade14782c56509979c2ce653b1d7f7c85800056 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        <link rel=\"stylesheet\" href=\"asset/css/bootstrap.min.css\" />

        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\" style=\"margin-left: 15%\">
            <ul class=\"navbar-nav me-auto\">
                <li>
                <img src=\"Imgs/IconeGrass.png\" style=\"width:50px\">
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">ACCUEIL</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/presentation\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">PRESENTATION</h3></a>
                </li>

                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/exemple\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">EXEMPLE DE PROJET</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestations\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">PRESTATIONS</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/avis\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">AVIS</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">CONTACT</h3></a>
                </li>
                <li>
                <img src=\"Imgs/IconeGrass.png\" style=\"width:50px\">
                </li>
            </ul>
            </div>
        </div>
        </nav>
        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        // line 10
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            ";
        // line 16
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 56,  154 => 16,  152 => 15,  145 => 14,  138 => 10,  136 => 9,  129 => 8,  116 => 5,  107 => 57,  105 => 56,  64 => 17,  62 => 14,  57 => 11,  54 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        <link rel=\"stylesheet\" href=\"asset/css/bootstrap.min.css\" />

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\" style=\"margin-left: 15%\">
            <ul class=\"navbar-nav me-auto\">
                <li>
                <img src=\"Imgs/IconeGrass.png\" style=\"width:50px\">
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">ACCUEIL</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/presentation\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">PRESENTATION</h3></a>
                </li>

                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/exemple\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">EXEMPLE DE PROJET</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestations\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">PRESTATIONS</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/avis\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">AVIS</h3></a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact\"><h3 style=\"color:white; font-weight: bold;\" onmouseover=\"this.style.color='green'\" onmouseout=\"this.style.color='white'\">CONTACT</h3></a>
                </li>
                <li>
                <img src=\"Imgs/IconeGrass.png\" style=\"width:50px\">
                </li>
            </ul>
            </div>
        </div>
        </nav>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\rabece\\Desktop\\AP-SYMFONY-GIT\\APSymfonyFlorianEloiRuby\\templates\\base.html.twig");
    }
}
