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

/* postes/show.html.twig */
class __TwigTemplate_69a4b6832a73bb18771c263dbddd33e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postes/show.html.twig", 1);
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

        echo "Postes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Postes</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 16, $this->source); })()), "Niveau", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fonction</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 20, $this->source); })()), "Fonction", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateDeb</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 24, $this->source); })()), "DateDeb", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 24, $this->source); })()), "DateDeb", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 28, $this->source); })()), "DateFin", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 28, $this->source); })()), "DateFin", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "postes/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "postes/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  142 => 37,  137 => 35,  132 => 33,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Postes{% endblock %}

{% block body %}
    <h1>Postes</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ poste.id }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ poste.Niveau }}</td>
            </tr>
            <tr>
                <th>Fonction</th>
                <td>{{ poste.Fonction }}</td>
            </tr>
            <tr>
                <th>DateDeb</th>
                <td>{{ poste.DateDeb ? poste.DateDeb|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>{{ poste.DateFin ? poste.DateFin|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_postes_index') }}\">back to list</a>

    <a href=\"{{ path('app_postes_edit', {'id': poste.id}) }}\">edit</a>

    {{ include('postes/_delete_form.html.twig') }}
{% endblock %}
", "postes/show.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\postes\\show.html.twig");
    }
}
