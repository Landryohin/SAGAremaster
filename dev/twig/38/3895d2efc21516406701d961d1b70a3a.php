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

/* services/show.html.twig */
class __TwigTemplate_03bea6417d49404e73424fbbada3d1d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'add' => [$this, 'block_add'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "services/show.html.twig", 1);
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

        echo "Services";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 33
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 39
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 43
        echo " 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_index");
        echo "\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">
                                <div class=\"topic__name mb-n5 pb-5\">
                                        <h5>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 54, $this->source); })()), "Libelle", [], "any", false, false, false, 54), "html", null, true);
        echo "<h5>
                                 </div>
                                     
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Code du service</label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 67, $this->source); })()), "Code", [], "any", false, false, false, 67), "html", null, true);
        echo "\"readonly> </div>    
                                </div>

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Libellé du service </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 72, $this->source); })()), "Libelle", [], "any", false, false, false, 72), "html", null, true);
        echo "\"readonly> </div>
                                </div>

                                ";
        // line 75
        echo " 


                                <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                                    <div class=\"topic__caption\">
                                            <div class=\"topic__name mb-n5 pb-5\">
                                                    <h5>Informations concernant le ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 81, $this->source); })()), "Libelle", [], "any", false, false, false, 81), "html", null, true);
        echo "<h5>
                                            </div>

                                            
                                     </div>


                                        
                                </div>
                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des divisions <h6></label>
                                              

                                                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["divisions"]) || array_key_exists("divisions", $context) ? $context["divisions"] : (function () { throw new RuntimeError('Variable "divisions" does not exist.', 95, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
            // line 96
            echo " 
                                                        <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_divisions_show", ["id" => twig_get_attribute($this->env, $this->source, $context["division"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Libelle", [], "any", false, false, false, 97), "html", null, true);
            echo "   </a>  <br>
 
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "                                                <p style=\"margin-left:20px ;font-size:18px\">Pas de divisions dans cet service.</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo " 
                                            
                                        </div> 
                                                                     
                                </div>
                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des utilisateurs de la direction. <h6></label>
                                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 110
            echo " 
                                                        <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 111), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 111), "html", null, true);
            echo "   </a>  <br>
 
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 114
            echo "                                                <p >Pas d'utilisateurs dans cette direction.</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo " 
                                            
                                        </div> 
                                                                     
                                </div>
 
                            </div>
 
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
        return "services/show.html.twig";
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
        return array (  255 => 115,  248 => 114,  236 => 111,  233 => 110,  228 => 109,  218 => 101,  211 => 100,  201 => 97,  198 => 96,  193 => 95,  176 => 81,  168 => 75,  162 => 72,  154 => 67,  141 => 57,  135 => 54,  124 => 46,  119 => 43,  109 => 42,  98 => 39,  89 => 33,  79 => 32,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Services{% endblock %}

{# {% block body %}
    <h1>Services</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ service.id }}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{ service.Code }}</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>{{ service.Libelle }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_services_index') }}\">back to list</a>

    <a href=\"{{ path('app_services_edit', {'id': service.id}) }}\">edit</a>

    {{ include('services/_delete_form.html.twig') }}
{% endblock %} #}

{% block add %}
    <a href=\"{{path('app_services_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"{{ path('app_services_index') }}\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">
                                <div class=\"topic__name mb-n5 pb-5\">
                                        <h5>{{service.Libelle}}<h5>
                                 </div>
                                     
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"{{ path('app_services_edit', {'id': service.id}) }}\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Code du service</label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ service.Code }}\"readonly> </div>    
                                </div>

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Libellé du service </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ service.Libelle }}\"readonly> </div>
                                </div>

                                {#<div style=\"text-align:right; margin-top:17px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>#} 


                                <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                                    <div class=\"topic__caption\">
                                            <div class=\"topic__name mb-n5 pb-5\">
                                                    <h5>Informations concernant le {{service.Libelle}}<h5>
                                            </div>

                                            
                                     </div>


                                        
                                </div>
                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des divisions <h6></label>
                                              

                                                {% for division in divisions %}
 
                                                        <a href=\"{{ path('app_divisions_show', {'id': division.id}) }}\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> {{ division.Libelle}}   </a>  <br>
 
                                            {% else %}
                                                <p style=\"margin-left:20px ;font-size:18px\">Pas de divisions dans cet service.</p>
                                            {% endfor %} 
                                            
                                        </div> 
                                                                     
                                </div>
                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des utilisateurs de la direction. <h6></label>
                                            {% for user in users %}
 
                                                        <a href=\"{{ path('app_users_show', {'id': user.id}) }}\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   {{ user.Nom }} {{ user.Prenom }}   </a>  <br>
 
                                            {% else %}
                                                <p >Pas d'utilisateurs dans cette direction.</p>
                                            {% endfor %} 
                                            
                                        </div> 
                                                                     
                                </div>
 
                            </div>
 
                    </div>
 
                    
    </div>
                     

{% endblock %}
", "services/show.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\services\\show.html.twig");
    }
}
