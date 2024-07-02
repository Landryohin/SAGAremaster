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

/* services/index.html.twig */
class __TwigTemplate_f371658d8f41364196c33d3091f726e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "services/index.html.twig", 1);
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

        echo "Liste des services";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 7
        echo "

<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 

    <div class=\"s131\">
      
    </div>

    <div > <a class=\"btn btn-success\"  href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_new");
        echo "\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg> &nbsp; Nouveau service</a></div>
     
    </div>



     ";
        // line 77
        echo "                    ";
        // line 78
        echo "                ";
        // line 87
        echo "

     <div style=\"background-color : white;border-top : 0.5px solid #c4c4c;margin-top:10px\">
        <table class=\"table table-responsive table-hover expensive display dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : center; width : 35%\">Libellé</td> 
                    <td style=\"text-align : center; width : 10%\">Code</td> 
                    <td style=\"text-align : center; width : 35%\">Chef Service</td>  
                    <td style=\"text-align : center; width : 15%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
             ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 102
            echo "                <tr> 
                    <td style=\"text-align : center; width : 5%\">";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "</td> 
                    <td style=\"width : 35%;  word-wrap: break-word;\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "Libelle", [], "any", false, false, false, 104), "html", null, true);
            echo "</td> 
                    <td style=\"width : 10%\"> ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "Code", [], "any", false, false, false, 105), "html", null, true);
            echo "</td> 
                    <td style=\"width : 35%; word-wrap: break-word;\">    
                        ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, $context["service"], "Chef", [], "any", false, false, false, 107)) {
                // line 108
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "Chef", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">
                                ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "Chef", [], "any", false, false, false, 109), "Nom", [], "any", false, false, false, 109), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "Chef", [], "any", false, false, false, 109), "Prenom", [], "any", false, false, false, 109), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 112
            echo "                    </td> 
                    
                    <td style=\"text-align : left; width : 15%\">
                        <a title=\"Voir\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_show", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                            </svg>
                        </a>
                        <a title=\"Modifier\" href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a>
                        ";
            // line 127
            if (twig_get_attribute($this->env, $this->source, $context["service"], "status", [], "any", false, false, false, 127)) {
                // line 128
                echo "                            <a title=\"Stoper\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_stop", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-stop-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"M5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3z\"/>
                                </svg>
                            </a> 

                        ";
            } else {
                // line 136
                echo "                            <a title=\"Mettre en service\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_play", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 136)]), "html", null, true);
                echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-skip-end-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M12.5 4a.5.5 0 0 0-1 0v3.248L5.233 3.612C4.693 3.3 4 3.678 4 4.308v7.384c0 .63.692 1.01 1.233.697L11.5 8.753V12a.5.5 0 0 0 1 0V4z\"/>
                                </svg>
                            </a> 
                        ";
            }
            // line 142
            echo "                    </td> 
                </tr>  
                ";
            // line 144
            $context["numero"] = ((isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 144, $this->source); })()) + 1);
            // line 145
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                
                </tbody>
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
        return "services/index.html.twig";
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
        return array (  224 => 146,  218 => 145,  216 => 144,  212 => 142,  202 => 136,  190 => 128,  188 => 127,  179 => 121,  170 => 115,  165 => 112,  157 => 109,  152 => 108,  150 => 107,  145 => 105,  141 => 104,  137 => 103,  134 => 102,  130 => 101,  114 => 87,  112 => 78,  110 => 77,  98 => 15,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des services{% endblock %}

 
{% block list %}


<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 

    <div class=\"s131\">
      
    </div>

    <div > <a class=\"btn btn-success\"  href=\"{{path('app_services_new')}}\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg> &nbsp; Nouveau service</a></div>
     
    </div>



     {#<div class=\"posts\">
        <div class=\"posts__head\" style=\" width: 63%;min-width: 122%;\">
        
            <div class=\" posts__users\"><h5 style=\"margin-left: 30px; min-width: 90%;\" > Libellé<h5></div>
            <div class=\"posts__users \"><h5 style=\"margin-left: 77%\">Code<h5></div>
            <div class=\"posts__users\"><h5 style=\"margin-left: 25%\">Chef Service<h5></div>
      
            <div class=\"posts__users\"><h5 > Actions<h5></div>
        </div>
         <div class=\"posts__body\">
             {% for service in services %}

        <div class=\"posts__item\">
            <div class=\"posts__section-left\">
                <div class=\"posts__topic\">
                    <div class=\"posts__content\">
                        <a href=\"#\">
                            <h3>{{ service.Libelle }}</h3>
                        </a>
                    </div>
                </div>
                <div class=\"posts__category\"><a href=\"#\" class=\"category\"> {{ service.Code }}</a></div>
            </div>
            <div class=\"posts__section-right\">
            
                <div class=\"posts__users\">
                    {% if service.Chef %}
                        <a href=\"{{ path('app_users_show', {'id': service.Chef.id}) }}\">
                            {{ service.Chef.Nom }}  {{ service.Chef.Prenom }}
                        </a>
                    {% endif %}
                </div>
                    
                <!--div class=\"posts__views\">2.1k</!--div>
                <div-- class=\"posts__activity\">6m</div-->
                <div class=\"posts__users\">
                    <a title=\"Voir\" href=\"{{ path('app_services_show', {'id': service.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                            <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                            <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                        </svg>
                    </a>
                    <a title=\"Modifier\" href=\"{{ path('app_services_edit', {'id': service.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                            <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                            <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                        </svg>
                    </a>
                    {# {% if service.status %}
                        {{ include('services/_stop_form.html.twig') }}
                    {% else %}
                        {{ include('services/_play_form.html.twig') }}
                    {% endif %} #}
                    {# {{ include('services/_delete_form.html.twig') }} #}
                {# </div>
                
            </div>
            
        </div>
        {% else %}
            <p >Pas de services</p>
        {% endfor %}
    </div>#}


     <div style=\"background-color : white;border-top : 0.5px solid #c4c4c;margin-top:10px\">
        <table class=\"table table-responsive table-hover expensive display dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : center; width : 35%\">Libellé</td> 
                    <td style=\"text-align : center; width : 10%\">Code</td> 
                    <td style=\"text-align : center; width : 35%\">Chef Service</td>  
                    <td style=\"text-align : center; width : 15%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
             {% for service in services %}
                <tr> 
                    <td style=\"text-align : center; width : 5%\">{{numero}}</td> 
                    <td style=\"width : 35%;  word-wrap: break-word;\">{{ service.Libelle }}</td> 
                    <td style=\"width : 10%\"> {{ service.Code }}</td> 
                    <td style=\"width : 35%; word-wrap: break-word;\">    
                        {% if service.Chef %}
                            <a href=\"{{ path('app_users_show', {'id': service.Chef.id}) }}\">
                                {{ service.Chef.Nom }}  {{ service.Chef.Prenom }}
                            </a>
                        {% endif %}
                    </td> 
                    
                    <td style=\"text-align : left; width : 15%\">
                        <a title=\"Voir\" href=\"{{ path('app_services_show', {'id': service.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                            </svg>
                        </a>
                        <a title=\"Modifier\" href=\"{{ path('app_services_edit', {'id': service.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a>
                        {% if service.status %}
                            <a title=\"Stoper\" href=\"{{ path('app_services_stop', {'id': service.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-stop-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"M5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3z\"/>
                                </svg>
                            </a> 

                        {% else %}
                            <a title=\"Mettre en service\" href=\"{{ path('app_services_play', {'id': service.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-skip-end-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M12.5 4a.5.5 0 0 0-1 0v3.248L5.233 3.612C4.693 3.3 4 3.678 4 4.308v7.384c0 .63.692 1.01 1.233.697L11.5 8.753V12a.5.5 0 0 0 1 0V4z\"/>
                                </svg>
                            </a> 
                        {% endif %}
                    </td> 
                </tr>  
                {% set numero = numero + 1 %}
            {% endfor %}
                
                </tbody>
        </table>
   </div> 




 
</div>


 

{% endblock %}
", "services/index.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\services\\index.html.twig");
    }
}
