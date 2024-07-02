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

/* directions/show.html.twig */
class __TwigTemplate_f853bfae2ff4cc7692919bfefe036670 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "directions/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "directions/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "directions/show.html.twig", 1);
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

        echo "Directions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_directions_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 12
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 16
        echo " 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_directions_index");
        echo "\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">
                                <div class=\"topic__name mb-n5 pb-5\">
                                        <h5>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 27, $this->source); })()), "Libelle", [], "any", false, false, false, 27), "html", null, true);
        echo "<h5>
                                 </div>
                                    ";
        // line 30
        echo "                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_directions_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Code de la direction </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 40, $this->source); })()), "Code", [], "any", false, false, false, 40), "html", null, true);
        echo "\"readonly> </div>    
                                </div>

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Libellé de la direction  </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 45, $this->source); })()), "Libelle", [], "any", false, false, false, 45), "html", null, true);
        echo "\"readonly> </div>
                                </div>

                                ";
        // line 48
        echo " 


                                <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                                    <div class=\"topic__caption\">
                                            <div class=\"topic__name mb-n5 pb-5\">
                                                    <h5>Informations concernant la ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 54, $this->source); })()), "Libelle", [], "any", false, false, false, 54), "html", null, true);
        echo "<h5>
                                            </div> 
                                     </div>
                                </div>

                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des services de la direction <h6></label>
                                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 63
            echo " 
                                                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_show", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "Libelle", [], "any", false, false, false, 64), "html", null, true);
            echo "   </a>  <br>
 
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "                                                <p >Pas de services dans cette direction.</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo " 
                                            
                                        </div> 
                                                                     
                                </div>
                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des utilisateurs de la direction. <h6></label>
                                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 77
            echo " 
                                                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 78), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 78), "html", null, true);
            echo "   </a>  <br>
 
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                                                <p >Pas d'utilisateurs dans cette direction.</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
        return "directions/show.html.twig";
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
        return array (  249 => 82,  242 => 81,  230 => 78,  227 => 77,  222 => 76,  212 => 68,  205 => 67,  195 => 64,  192 => 63,  187 => 62,  176 => 54,  168 => 48,  162 => 45,  154 => 40,  140 => 30,  135 => 27,  124 => 19,  119 => 16,  109 => 15,  98 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Directions{% endblock %}

{% block add %}
    <a href=\"{{path('app_directions_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"{{ path('app_directions_index') }}\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">
                                <div class=\"topic__name mb-n5 pb-5\">
                                        <h5>{{direction.Libelle}}<h5>
                                 </div>
                                    {# <div class=\"topic__date\"><i class=\"icon-Watch_Later\"></i>07 May, 2017</div> #}
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"{{ path('app_directions_edit', {'id': direction.id}) }}\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Code de la direction </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ direction.Code }}\"readonly> </div>    
                                </div>

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Libellé de la direction  </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ direction.Libelle }}\"readonly> </div>
                                </div>

                                {#<div style=\"text-align:right; margin-top:17px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>#} 


                                <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                                    <div class=\"topic__caption\">
                                            <div class=\"topic__name mb-n5 pb-5\">
                                                    <h5>Informations concernant la {{direction.Libelle}}<h5>
                                            </div> 
                                     </div>
                                </div>

                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des services de la direction <h6></label>
                                            {% for service in services %}
 
                                                        <a href=\"{{ path('app_services_show', {'id': service.id}) }}\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> {{ service.Libelle}}   </a>  <br>
 
                                            {% else %}
                                                <p >Pas de services dans cette direction.</p>
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





", "directions/show.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\directions\\show.html.twig");
    }
}
