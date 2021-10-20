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

/* prestations/index.html.twig */
class __TwigTemplate_a619a87e484ee892a6f6f5f48f77fd2ea815c87a7762c7865c0b3b8e0ca40142 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PRESTATIONS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <section class=\"prestations\">

        <article>
            <h2>Titre de la préstation</h2>
            <div class=\"content\">
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>fjhezuiuuefjvbfjdbvckjbsjhkvfuzegfhksvdjhkv
                kjhsdvfkuqvkjvsdkjbfjksdgjkbsdkj
                fvgfkjsdbvkjsdjkvksjdvjksdbvkujv
                </p>
                <p>djbousdlhfigdjb vljbkj dghouidgogq oihgqsoi
                dhgvusdgjbvsodhgjbdjlv udvujfsdksbigbd 
                jdgfuoqgdljhsdkhgiodbjlvb
                </p>
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations_show");
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
            </div>
        </article>

        <article>
            <h2>Titre de la préstation</h2>
            <div class=\"content\">
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>fjhezuiuuefjvbfjdbvckjbsjhkvfuzegfhksvdjhkv
                kjhsdvfkuqvshfguid
                gsdghsh
                dhsdg
                jdvjksdbvkujv
                </p>
                <p>djbousdlhfigdjb vljbkj dghouidgogq oihgqsoi
                dhgvusdgj   ugdfushoighoisd
                bvsodhgjbdjlv udvujfsdksbigbd 
                jdgfuoqgdljhs
                ddsgsfjgfjdf
                fhd
                dkhgiodbjlvb
                </p>
                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations_show");
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
            </div>
        </article>

    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  90 => 21,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PRESTATIONS{% endblock %}

{% block body %}

    <section class=\"prestations\">

        <article>
            <h2>Titre de la préstation</h2>
            <div class=\"content\">
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>fjhezuiuuefjvbfjdbvckjbsjhkvfuzegfhksvdjhkv
                kjhsdvfkuqvkjvsdkjbfjksdgjkbsdkj
                fvgfkjsdbvkjsdjkvksjdvjksdbvkujv
                </p>
                <p>djbousdlhfigdjb vljbkj dghouidgogq oihgqsoi
                dhgvusdgjbvsodhgjbdjlv udvujfsdksbigbd 
                jdgfuoqgdljhsdkhgiodbjlvb
                </p>
                <a href=\"{{ path('prestations_show') }}\" class=\"btn btn-primary\">En savoir plus</a>
            </div>
        </article>

        <article>
            <h2>Titre de la préstation</h2>
            <div class=\"content\">
                <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>fjhezuiuuefjvbfjdbvckjbsjhkvfuzegfhksvdjhkv
                kjhsdvfkuqvshfguid
                gsdghsh
                dhsdg
                jdvjksdbvkujv
                </p>
                <p>djbousdlhfigdjb vljbkj dghouidgogq oihgqsoi
                dhgvusdgj   ugdfushoighoisd
                bvsodhgjbdjlv udvujfsdksbigbd 
                jdgfuoqgdljhs
                ddsgsfjgfjdf
                fhd
                dkhgiodbjlvb
                </p>
                <a href=\"{{ path('prestations_show') }}\" class=\"btn btn-primary\">En savoir plus</a>
            </div>
        </article>

    </section>

{% endblock %}
", "prestations/index.html.twig", "C:\\Users\\rabece\\Desktop\\AP-SYMFONY-GIT\\APSymfonyFlorianEloiRuby\\templates\\prestations\\index.html.twig");
    }
}
