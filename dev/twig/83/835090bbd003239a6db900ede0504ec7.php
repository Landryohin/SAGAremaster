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

/* Affectations/show.html.twig */
class __TwigTemplate_67865dc8a68728c622d41d7e4529f21a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Affectations/show.html.twig", 1);
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

        echo "Affectations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 28
        echo " 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_index");
        echo "\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    ";
        // line 44
        echo " 
                     <div class=\"create\">
                               
                        <div  class=\"create__section \">

                            <div style=\" display: flex;flex-wrap: wrap;\" >   
                                
                                <div  style=\"margin-top: 20px; width:35% \">

                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\"> Date de Affectation</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 55
        ((twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 55, $this->source); })()), "DateAffectationAt", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 55, $this->source); })()), "DateAffectationAt", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "\"  readonly>    
                                    </div>


                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\"> Expéditeur</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 61, $this->source); })()), "Envoyeur", [], "any", false, false, false, 61), "html", null, true);
        echo "\"readonly> 
                                    </div> 

                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\">Document</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 66, $this->source); })()), "Document", [], "any", false, false, false, 66), "html", null, true);
        echo "\"readonly>
                                    </div>
                                    
                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\">Destinataire</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 71, $this->source); })()), "Receveur", [], "any", false, false, false, 71), "html", null, true);
        echo "\"readonly> 
                                    </div>

                                </div>

                                <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                                    <embed src=\"../Documents/";
        // line 77
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 77, $this->source); })()), "Document", [], "any", false, false, false, 77), "DocumentAt", [], "any", false, false, false, 77)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 77, $this->source); })()), "Document", [], "any", false, false, false, 77), "DocumentAt", [], "any", false, false, false, 77), "Y/m/d"), "html", null, true))) : (print ("")));
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Affectation"]) || array_key_exists("Affectation", $context) ? $context["Affectation"] : (function () { throw new RuntimeError('Variable "Affectation" does not exist.', 77, $this->source); })()), "Document", [], "any", false, false, false, 77), "Chemin", [], "any", false, false, false, 77), "html", null, true);
        echo "\" width=\"600\" height=\"850\" type='application/pdf'></embed>
                                </div>

                        </div>
                    </div>
                               
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "roles", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 84
            echo "                        ";
            if (($context["role"] == "ROLE_USER")) {
                // line 85
                echo "                        
                        ";
            } else {
                // line 87
                echo "                            ";
                echo " 

                        ";
            }
            // line 90
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "

                                 
 
 
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
        return "Affectations/show.html.twig";
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
        return array (  182 => 91,  176 => 90,  170 => 87,  166 => 85,  163 => 84,  159 => 83,  148 => 77,  139 => 71,  131 => 66,  123 => 61,  114 => 55,  101 => 44,  93 => 31,  88 => 28,  78 => 27,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Affectations{% endblock %}

{# {% block body %}
    <h1>Affectations</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ Affectation.id }}</td>
            </tr>
            <tr>
                <th>Date_Affectation_at</th>
                <td>{{ Affectation.DateAffectationAt ? Affectation.DateAffectationAt|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_Affectations_index') }}\">back to list</a>

    <a href=\"{{ path('app_Affectations_edit', {'id': Affectation.id}) }}\">edit</a>

    {{ include('Affectations/_delete_form.html.twig') }}
{% endblock %} #}
{% block list %}
 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"{{ path('app_Affectations_index') }}\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    {# <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">
                                <div class=\"topic__name mb-n5 pb-5\"> 
                                 </div>
                                     
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"{{ path('app_Affectations_edit', {'id': Affectation.id}) }}\">Modifier</a></div>
                         </div>
                    </div> #}
 
                     <div class=\"create\">
                               
                        <div  class=\"create__section \">

                            <div style=\" display: flex;flex-wrap: wrap;\" >   
                                
                                <div  style=\"margin-top: 20px; width:35% \">

                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\"> Date de Affectation</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ Affectation.DateAffectationAt ? Affectation.DateAffectationAt|date('Y-m-d') : '' }}\"  readonly>    
                                    </div>


                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\"> Expéditeur</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ Affectation.Envoyeur }}\"readonly> 
                                    </div> 

                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\">Document</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ Affectation.Document }}\"readonly>
                                    </div>
                                    
                                    <div class=\"create__section\">
                                        <label class=\"create__label\" for=\"title\">Destinataire</label>
                                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ Affectation.Receveur }}\"readonly> 
                                    </div>

                                </div>

                                <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                                    <embed src=\"../Documents/{{Affectation.Document.DocumentAt ? Affectation.Document.DocumentAt|date('Y/m/d') : ''}}/{{Affectation.Document.Chemin}}\" width=\"600\" height=\"850\" type='application/pdf'></embed>
                                </div>

                        </div>
                    </div>
                               
                    {% for role in app.user.roles %}
                        {% if role == \"ROLE_USER\" %}
                        
                        {% else %}
                            {#<div style=\"text-align:right; margin-top:17px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>#} 

                        {% endif %}
                    {% endfor %}


                                 
 
 
                    </div>
                        
                
 
                    
    </div>
                     

{% endblock %}", "Affectations/show.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\Affectations\\show.html.twig");
    }
}
