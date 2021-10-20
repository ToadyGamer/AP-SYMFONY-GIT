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

/* /avis.html.twig */
class __TwigTemplate_1c3fca645cc48d956cbabfdf6973c170142e155ad3d849894746384b897b99d8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/avis.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/avis.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello Controller!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
<h2>Ajouter un avis :</h2>

";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
</br>
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "pseudoClientAvis", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Nom d'utilisateur"]]);
        echo "
</br>
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nombreEtoilesAvis", [], "any", false, false, false, 19), 'row', ["attr" => ["placeholder" => "Note (/5)"]]);
        echo "
</br>
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "commentaireAvis", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Commentaire"]]);
        echo "
</br>
<div style=\"text-align:center\">
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "submit", [], "any", false, false, false, 24), 'row');
        echo "
</div>
</br>
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "

<br>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Data2"]) || array_key_exists("Data2", $context) ? $context["Data2"] : (function () { throw new RuntimeError('Variable "Data2" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneData"]) {
            // line 31
            echo "<div class=\"card text-white bg-success mb-3\" style=\"max-width: 500rem;\">
  <div class=\"card-header\"><h2>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "pseudoClientAvis", [], "any", false, false, false, 32), "html", null, true);
            echo "</h2></div>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><u>Note</u> : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "nombreEtoilesAvis", [], "any", false, false, false, 34), "html", null, true);
            echo "/5</h5>
    <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "commentaireAvis", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  135 => 35,  131 => 34,  126 => 32,  123 => 31,  119 => 30,  113 => 27,  107 => 24,  101 => 21,  96 => 19,  91 => 17,  86 => 15,  76 => 7,  69 => 6,  56 => 4,  48 => 1,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block title %}Hello Controller!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
<h2>Ajouter un avis :</h2>

{{ form_start(form) }}
</br>
{{ form_row(form.pseudoClientAvis, {'attr' : {'placeholder': 'Nom d\\'utilisateur'}}) }}
</br>
{{ form_row(form.nombreEtoilesAvis, {'attr' : {'placeholder': 'Note (/5)'}}) }}
</br>
{{ form_row(form.commentaireAvis, {'attr' : {'placeholder': 'Commentaire'}}) }}
</br>
<div style=\"text-align:center\">
{{ form_row(form.submit) }}
</div>
</br>
{{ form_end(form) }}

<br>
{% for uneData in Data2 %}
<div class=\"card text-white bg-success mb-3\" style=\"max-width: 500rem;\">
  <div class=\"card-header\"><h2>{{ uneData.pseudoClientAvis }}</h2></div>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><u>Note</u> : {{ uneData.nombreEtoilesAvis }}/5</h5>
    <p class=\"card-text\">{{ uneData.commentaireAvis }}</p>
  </div>
</div>
{% endfor %}
</div>
{% endblock %}
", "/avis.html.twig", "C:\\Users\\duponte\\Downloads\\Projet\\APSymfonyFlorianEloiRuby\\templates\\avis.html.twig");
    }
}
