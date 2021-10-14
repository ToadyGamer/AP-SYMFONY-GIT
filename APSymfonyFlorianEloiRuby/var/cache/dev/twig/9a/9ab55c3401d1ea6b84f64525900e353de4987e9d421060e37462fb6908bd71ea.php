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

/* prestations/show.html.twig */
class __TwigTemplate_631cfa92aa4a97d2759d3a44647a2046ddee087e12d23a310a11dc46ee5eb56d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestations/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <article>
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
            <hr>
            <p>hfjsdfjgjdfgusgdugfujdjsghcfiubsdgfviubgdiufvs
            dgcfsudgbvusdbgvjbdghjvbghsuldvgydsyvuglhsbfvjkhg
            djvgfbudslhbvgjklsdhbvjlkshdfgvkldhsgvlkjsdhlkvg
            djvgbiudslghvkjdsshgvlkjsdhjgvsdhkghvusdhvjkdvg
            djvgudsskghvjskdlgvudgvjdgvhfgdusvgsdlvgbjsdkgvbjkl
            djjvgfudslsgbvjkdlgvbuksdvbkjsdgvbuksuvbkjsdvjkbv
            dvjbgjdsgvbubsdgvbjlsdhgfulsvbkjdghvusdgvbkdjgvbukds
            </p>
        </div>
    </article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
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
            <hr>
            <p>hfjsdfjgjdfgusgdugfujdjsghcfiubsdgfviubgdiufvs
            dgcfsudgbvusdbgvjbdghjvbghsuldvgydsyvuglhsbfvjkhg
            djvgfbudslhbvgjklsdhbvjlkshdfgvkldhsgvlkjsdhlkvg
            djvgbiudslghvkjdsshgvlkjsdhjgvsdhkghvusdhvjkdvg
            djvgudsskghvjskdlgvudgvjdgvhfgdusvgsdlvgbjsdkgvbjkl
            djjvgfudslsgbvjkdlgvbuksdvbkjsdgvbuksuvbkjsdvjkbv
            dvjbgjdsgvbubsdgvbjlsdhgfulsvbkjdghvusdgvbkdjgvbukds
            </p>
        </div>
    </article>
{% endblock %}", "prestations/show.html.twig", "C:\\Users\\rabece\\Desktop\\AP-SYMFONY-GIT\\APSymfonyFlorianEloiRuby\\templates\\prestations\\show.html.twig");
    }
}
