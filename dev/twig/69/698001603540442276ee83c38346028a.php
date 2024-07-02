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

/* postes/index.html.twig */
class __TwigTemplate_03d9945a2904614d0a546690e623c31d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'list' => [$this, 'block_list'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postes/index.html.twig", 1);
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

        echo "Listes des postes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 6
        echo "
<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 
        <div class=\"s131\">
           
        </div>

     <div > <a class=\"btn btn-success\"  href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_new");
        echo "\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg> &nbsp; Nouveau poste</a></div>

   </div>

    <div style=\"background-color : white;border-top : 0.5px solid #c4c4c;margin-top:10px\">
        <table class=\"table table-responsive table-hover expensive display nowrap dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : left; width : 10%\">Niveau</td> 
                    <td style=\"text-align : left; width : 8%\">Fonction</td> 
                    <td style=\"text-align : left; width : 17.5%\">Agent</td>
                    <td style=\"text-align : left; width : 10%\">Type</td> 
                    <td style=\"text-align : left; width : 12%\">Date de Début</td> 
                    <td style=\"text-align : left; width : 12%\">Date de fin</td> 
                    <td style=\"text-align : left; width : 17.5%\">Créateur</td> 
                    <td style=\"text-align : left; width : 8%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
               ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () { throw new RuntimeError('Variable "postes" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 36
            echo "            <tr> 
                    <td style=\"text-align : center; width : 5%\">";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "</td> 

                    <td style=\"width : 10%\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "Niveau", [], "any", false, false, false, 39), "html", null, true);
            echo "</td> 
                    <td style=\"width : 8%\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "Fonction", [], "any", false, false, false, 40), "html", null, true);
            echo "</td> 
                    <td style=\"width : 17.5%\">  
                        ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["poste"], "Agent", [], "any", false, false, false, 42)) {
                // line 43
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["poste"], "Agent", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">
                                ";
                // line 44
                $context["Agent"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["poste"], "Agent", [], "any", false, false, false, 44), "Nom", [], "any", false, false, false, 44) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["poste"], "Agent", [], "any", false, false, false, 44), "Prenom", [], "any", false, false, false, 44));
                // line 45
                echo "                                ";
                if ((twig_length_filter($this->env, (isset($context["Agent"]) || array_key_exists("Agent", $context) ? $context["Agent"] : (function () { throw new RuntimeError('Variable "Agent" does not exist.', 45, $this->source); })())) > 20)) {
                    // line 46
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, (isset($context["Agent"]) || array_key_exists("Agent", $context) ? $context["Agent"] : (function () { throw new RuntimeError('Variable "Agent" does not exist.', 46, $this->source); })()), "", 20), 0, [], "array", false, false, false, 46), "html", null, true);
                    echo " ...
                                ";
                } else {
                    // line 48
                    echo "                                    ";
                    echo twig_escape_filter($this->env, (isset($context["Agent"]) || array_key_exists("Agent", $context) ? $context["Agent"] : (function () { throw new RuntimeError('Variable "Agent" does not exist.', 48, $this->source); })()), "html", null, true);
                    echo "
                                ";
                }
                // line 49
                echo " 
                            </a>
                        ";
            }
            // line 52
            echo "                    </td> 
                    <td style=\"text-align : left; width : 10%\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "Type", [], "any", false, false, false, 53), "html", null, true);
            echo "</td> 
                    <td style=\"width : 12%\"> ";
            // line 54
            ((twig_get_attribute($this->env, $this->source, $context["poste"], "DateDeb", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "DateDeb", [], "any", false, false, false, 54), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td> 
                    <td style=\"width : 12%\"> ";
            // line 55
            ((twig_get_attribute($this->env, $this->source, $context["poste"], "DateFin", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "DateFin", [], "any", false, false, false, 55), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td> 
                    <td style=\"width : 17.5%\">  
                        ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["poste"], "Owner", [], "any", false, false, false, 57)) {
                // line 58
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["poste"], "Owner", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">
                                ";
                // line 59
                $context["Owner"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["poste"], "Owner", [], "any", false, false, false, 59), "Nom", [], "any", false, false, false, 59) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["poste"], "Owner", [], "any", false, false, false, 59), "Prenom", [], "any", false, false, false, 59));
                // line 60
                echo "                                    ";
                if ((twig_length_filter($this->env, (isset($context["Owner"]) || array_key_exists("Owner", $context) ? $context["Owner"] : (function () { throw new RuntimeError('Variable "Owner" does not exist.', 60, $this->source); })())) > 20)) {
                    // line 61
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, (isset($context["Owner"]) || array_key_exists("Owner", $context) ? $context["Owner"] : (function () { throw new RuntimeError('Variable "Owner" does not exist.', 61, $this->source); })()), "", 20), 0, [], "array", false, false, false, 61), "html", null, true);
                    echo " ...
                                    ";
                } else {
                    // line 63
                    echo "                                        ";
                    echo twig_escape_filter($this->env, (isset($context["Owner"]) || array_key_exists("Owner", $context) ? $context["Owner"] : (function () { throw new RuntimeError('Variable "Owner" does not exist.', 63, $this->source); })()), "html", null, true);
                    echo "
                                    ";
                }
                // line 64
                echo " 
                            </a>
                        ";
            }
            // line 67
            echo "                    </td> 
                    <td style=\"text-align : left; width : 8%\">
                            <a title=\"Voir\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_show", ["id" => twig_get_attribute($this->env, $this->source, $context["poste"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                            </svg>
                        </a>
                        <a title=\"Modifier\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["poste"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a>
                        <a href = \"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_stop", ["id" => twig_get_attribute($this->env, $this->source, $context["poste"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\"  type=\"button\" title=\"Supprimer\" class=\"btn btn-danger btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\"> 
                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/> </svg>    
                            </a>
                    </td>
                     
                </tr>  
                ";
            // line 89
            $context["numero"] = ((isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 89, $this->source); })()) + 1);
            // line 90
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </tbody>
        </table>
   </div> 
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "postes/index.html.twig";
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
        return array (  258 => 91,  252 => 90,  250 => 89,  239 => 81,  230 => 75,  221 => 69,  217 => 67,  212 => 64,  206 => 63,  200 => 61,  197 => 60,  195 => 59,  190 => 58,  188 => 57,  183 => 55,  179 => 54,  175 => 53,  172 => 52,  167 => 49,  161 => 48,  155 => 46,  152 => 45,  150 => 44,  145 => 43,  143 => 42,  138 => 40,  134 => 39,  129 => 37,  126 => 36,  122 => 35,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listes des postes{% endblock %}

{% block list %}

<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 
        <div class=\"s131\">
           
        </div>

     <div > <a class=\"btn btn-success\"  href=\"{{path('app_postes_new')}}\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg> &nbsp; Nouveau poste</a></div>

   </div>

    <div style=\"background-color : white;border-top : 0.5px solid #c4c4c;margin-top:10px\">
        <table class=\"table table-responsive table-hover expensive display nowrap dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : left; width : 10%\">Niveau</td> 
                    <td style=\"text-align : left; width : 8%\">Fonction</td> 
                    <td style=\"text-align : left; width : 17.5%\">Agent</td>
                    <td style=\"text-align : left; width : 10%\">Type</td> 
                    <td style=\"text-align : left; width : 12%\">Date de Début</td> 
                    <td style=\"text-align : left; width : 12%\">Date de fin</td> 
                    <td style=\"text-align : left; width : 17.5%\">Créateur</td> 
                    <td style=\"text-align : left; width : 8%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
               {% for poste in postes %}
            <tr> 
                    <td style=\"text-align : center; width : 5%\">{{numero}}</td> 

                    <td style=\"width : 10%\">{{ poste.Niveau}}</td> 
                    <td style=\"width : 8%\"> {{ poste.Fonction }}</td> 
                    <td style=\"width : 17.5%\">  
                        {% if poste.Agent %}
                            <a href=\"{{ path('app_users_show', {'id': poste.Agent.id}) }}\">
                                {% set Agent = poste.Agent.Nom ~\" \"~ poste.Agent.Prenom %}
                                {% if  Agent|length > 20 %}
                                    {{  Agent|split('', 20)[0] }} ...
                                {% else %}
                                    {{ Agent }}
                                {% endif %} 
                            </a>
                        {% endif %}
                    </td> 
                    <td style=\"text-align : left; width : 10%\">{{ poste.Type }}</td> 
                    <td style=\"width : 12%\"> {{  poste.DateDeb ? poste.DateDeb|date('d-m-Y'):'' }}</td> 
                    <td style=\"width : 12%\"> {{  poste.DateFin ? poste.DateFin|date('d-m-Y'):'' }}</td> 
                    <td style=\"width : 17.5%\">  
                        {% if poste.Owner %}
                            <a href=\"{{ path('app_users_show', {'id': poste.Owner.id}) }}\">
                                {% set Owner = poste.Owner.Nom ~\" \"~ poste.Owner.Prenom %}
                                    {% if  Owner|length > 20 %}
                                        {{  Owner|split('', 20)[0] }} ...
                                    {% else %}
                                        {{ Owner }}
                                    {% endif %} 
                            </a>
                        {% endif %}
                    </td> 
                    <td style=\"text-align : left; width : 8%\">
                            <a title=\"Voir\" href=\"{{ path('app_postes_show', {'id': poste.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                            </svg>
                        </a>
                        <a title=\"Modifier\" href=\"{{ path('app_postes_edit', {'id': poste.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a>
                        <a href = \"{{path('app_postes_stop', {'id': poste.id })}}\"  type=\"button\" title=\"Supprimer\" class=\"btn btn-danger btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\"> 
                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/> </svg>    
                            </a>
                    </td>
                     
                </tr>  
                {% set numero = numero + 1 %}
            {% endfor %}
                </tbody>
        </table>
   </div> 
</div>
{% endblock %}", "postes/index.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\postes\\index.html.twig");
    }
}
