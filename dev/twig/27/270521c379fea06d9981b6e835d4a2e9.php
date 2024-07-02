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

/* divisions/show.html.twig */
class __TwigTemplate_2857053d8539eedf60d1a46fcf48f97f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "divisions/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "divisions/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "divisions/show.html.twig", 1);
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

        echo "Divisions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 10
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_divisions_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 16
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 20
        echo " 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_divisions_index");
        echo "\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">
                                <div class=\"topic__name mb-n5 pb-5\">
                                        <h5>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 31, $this->source); })()), "Libelle", [], "any", false, false, false, 31), "html", null, true);
        echo "<h5>
                                 </div>
                                     
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_divisions_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Code de la division </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 44, $this->source); })()), "Code", [], "any", false, false, false, 44), "html", null, true);
        echo "\"readonly> </div>    
                                </div>

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Libellé de la division  </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 49, $this->source); })()), "Libelle", [], "any", false, false, false, 49), "html", null, true);
        echo "\"readonly> </div>
                                </div>

                                ";
        // line 52
        echo " 


                                ";
        // line 67
        echo "
                                ";
        // line 76
        echo "                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des utilisateurs de la direction. <h6></label>
                                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 80
            echo " 
                                                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 81), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 81), "html", null, true);
            echo "   </a>  <br>
 
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                                                <p >Pas d'utilisateurs dans cette divison.</p>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return "divisions/show.html.twig";
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
        return array (  208 => 85,  201 => 84,  189 => 81,  186 => 80,  181 => 79,  176 => 76,  173 => 67,  168 => 52,  162 => 49,  154 => 44,  141 => 34,  135 => 31,  124 => 23,  119 => 20,  109 => 19,  98 => 16,  89 => 10,  79 => 9,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Divisions{% endblock %}

 

    {# {{ include('divisions/_delete_form.html.twig') }} #}

{% block add %}
    <a href=\"{{path('app_divisions_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"{{ path('app_divisions_index') }}\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">
                                <div class=\"topic__name mb-n5 pb-5\">
                                        <h5>{{division.Libelle}}<h5>
                                 </div>
                                     
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"{{ path('app_divisions_edit', {'id': division.id}) }}\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Code de la division </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ division.Code }}\"readonly> </div>    
                                </div>

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Libellé de la division  </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ division.Libelle }}\"readonly> </div>
                                </div>

                                {#<div style=\"text-align:right; margin-top:17px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>#} 


                                {# <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                                    <div class=\"topic__caption\">
                                            <div class=\"topic__name mb-n5 pb-5\">
                                                    <h5>Informations concernant la {{division.Libelle}}<h5>
                                            </div>

                                            
                                     </div>


                                        
                                </div> #}

                                {# <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des services <h6></label>
                                              <a href=\"#\" style=\"margin-left:20px ;\" class=\"category\"><i class=\"bg-5dd39e\"></i>1er serviceeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</a> 
                                            
                                        </div> 
                                                                     
                                </div> #}
                                <div class=\"create\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\"> <h6> Liste des utilisateurs de la direction. <h6></label>
                                            {% for user in users %}
 
                                                        <a href=\"{{ path('app_users_show', {'id': user.id}) }}\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   {{ user.Nom }} {{ user.Prenom }}   </a>  <br>
 
                                            {% else %}
                                                <p >Pas d'utilisateurs dans cette divison.</p>
                                            {% endfor %} 
                                            
                                        </div> 
                                                                     
                                </div>
                            </div>
 
                    </div>
 
                    
    </div>
                     

{% endblock %}

 

", "divisions/show.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\divisions\\show.html.twig");
    }
}
