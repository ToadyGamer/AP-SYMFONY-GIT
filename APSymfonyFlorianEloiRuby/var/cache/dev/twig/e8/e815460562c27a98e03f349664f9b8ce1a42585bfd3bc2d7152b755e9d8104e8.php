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
class __TwigTemplate_595bac46ca050acff52e6d478e35621bab2442707654c0fc31cfb4d94783cd29 extends Template
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

        $this->parent = $this->loadTemplate("base.html.twig", "/avis.html.twig", 1);
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
<h2>Ajouter un avis :</h2>
<form class=\"leAvis\">
  
  <input class=\"nomNote\" type=\"text\" placeholder=\"Nom\">
  <input class=\"avisNote\" type=\"text\" placeholder=\"Note\">
  <textarea class=\"commentaireNote\" cols=\"75\" rows=\"5\" style=\"\" type=\"text\" placeholder=\"Commentaire\"></textarea>
  <br>
  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Poster avis</button>
</form>

<h5>Veuillez inserer votre nom</h5>
<h5>Sur une échelle de 1 à 5, comment avez vous trouvé votre experience avec l'entreprise Mille Et Une Épines?</h5>
<h5>Commentaire <a style=\"font-style : italic;\">(Optionel)</a> : <h5>

\$builder
    ->add('name',TextType::class)
    ->add('note',EmailType::class)
    ->add('commentaire',TextAreaType::class)
;

if(\$form->isSubmitted() && \$form->isValid()){
        //...more stuff pre-insertion here if needed
        \$em = \$this->getDoctrine()->getManager();
        \$em->persist(\$contact);//persist the contact object
        \$em->flush();//save it to the db
        //...more stuff post-insertion here if needed
        return \$this->redirectToRoute('homepage');
}

<br>
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Data2"]) || array_key_exists("Data2", $context) ? $context["Data2"] : (function () { throw new RuntimeError('Variable "Data2" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneData"]) {
            // line 43
            echo "<div class=\"card text-white bg-success mb-3\" style=\"max-width: 500rem;\">
  <div class=\"card-header\"><h2>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "pseudoClientAvis", [], "any", false, false, false, 44), "html", null, true);
            echo "</h2></div>
  <div class=\"card-body\">
    <h5 class=\"card-title\"><u>Note</u> : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "nombreEtoilesAvis", [], "any", false, false, false, 46), "html", null, true);
            echo "/5</h5>
    <p class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneData"], "commentaireAvis", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return array (  137 => 51,  127 => 47,  123 => 46,  118 => 44,  115 => 43,  111 => 42,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
<h2>Ajouter un avis :</h2>
<form class=\"leAvis\">
  
  <input class=\"nomNote\" type=\"text\" placeholder=\"Nom\">
  <input class=\"avisNote\" type=\"text\" placeholder=\"Note\">
  <textarea class=\"commentaireNote\" cols=\"75\" rows=\"5\" style=\"\" type=\"text\" placeholder=\"Commentaire\"></textarea>
  <br>
  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Poster avis</button>
</form>

<h5>Veuillez inserer votre nom</h5>
<h5>Sur une échelle de 1 à 5, comment avez vous trouvé votre experience avec l'entreprise Mille Et Une Épines?</h5>
<h5>Commentaire <a style=\"font-style : italic;\">(Optionel)</a> : <h5>

\$builder
    ->add('name',TextType::class)
    ->add('note',EmailType::class)
    ->add('commentaire',TextAreaType::class)
;

if(\$form->isSubmitted() && \$form->isValid()){
        //...more stuff pre-insertion here if needed
        \$em = \$this->getDoctrine()->getManager();
        \$em->persist(\$contact);//persist the contact object
        \$em->flush();//save it to the db
        //...more stuff post-insertion here if needed
        return \$this->redirectToRoute('homepage');
}

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
