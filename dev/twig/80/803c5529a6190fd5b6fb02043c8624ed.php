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

/* secretariats/show.html.twig */
class __TwigTemplate_f0992f85f435094bf0fb4235f1c14347 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secretariats/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secretariats/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "secretariats/show.html.twig", 1);
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

        echo "Point de traitement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 29
        echo " 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_documents_index");
        echo "\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">   
                                 <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> <b>Secrétaire</b>  ";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["secretariat"]) || array_key_exists("secretariat", $context) ? $context["secretariat"] : (function () { throw new RuntimeError('Variable "secretariat" does not exist.', 40, $this->source); })()), "Interim", [], "any", false, false, false, 40)) ? ("Par Interim") : (""));
        echo "</label>
                                       </div>  
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secretariats_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["secretariat"]) || array_key_exists("secretariat", $context) ? $context["secretariat"] : (function () { throw new RuntimeError('Variable "secretariat" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Nom de la direction </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["secretariat"]) || array_key_exists("secretariat", $context) ? $context["secretariat"] : (function () { throw new RuntimeError('Variable "secretariat" does not exist.', 54, $this->source); })()), "Direction", [], "any", false, false, false, 54), "html", null, true);
        echo "\"readonly> </div>
                                </div>
                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Nom du secrétaire </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["secretariat"]) || array_key_exists("secretariat", $context) ? $context["secretariat"] : (function () { throw new RuntimeError('Variable "secretariat" does not exist.', 58, $this->source); })()), "Secretaire", [], "any", false, false, false, 58), "html", null, true);
        echo "\"readonly> </div>
                                </div> 

                                ";
        // line 61
        echo " 

 
                               
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
        return "secretariats/show.html.twig";
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
        return array (  137 => 61,  131 => 58,  124 => 54,  109 => 42,  104 => 40,  93 => 32,  88 => 29,  78 => 28,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Point de traitement{% endblock %}

{# {% block body %}
    <h1>Secretariats</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ secretariat.id }}</td>
            </tr>
            <tr>
                <th>Interim</th>
                <td>{{ secretariat.Interim ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_secretariats_index') }}\">back to list</a>

    <a href=\"{{ path('app_secretariats_edit', {'id': secretariat.id}) }}\">edit</a>

    {{ include('secretariats/_delete_form.html.twig') }}
{% endblock %} #}

{% block list %}
 

     <div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"{{ path('app_type_documents_index') }}\">Retour</a></div>
 
   </div>

     <div class=\"topic\">
                    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                         <div class=\"topic__caption\">   
                                 <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> <b>Secrétaire</b>  {{ secretariat.Interim ? 'Par Interim' : '' }}</label>
                                       </div>  
                                 <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"{{ path('app_secretariats_edit', {'id': secretariat.id}) }}\">Modifier</a></div>
                         </div>
                    </div>
                        
                    <div class=\"create\">
                               
                            <div class=\"create__section \">

                                

                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\"> Nom de la direction </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ secretariat.Direction}}\"readonly> </div>
                                </div>
                                <div class=\"d-flex justify-content-start\">
                                    <label class=\"create__label\" for=\"title\"> Nom du secrétaire </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ secretariat.Secretaire}}\"readonly> </div>
                                </div> 

                                {#<div style=\"text-align:right; margin-top:17px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>#} 

 
                               
                            </div>
 
                    </div>
 
                    
    </div>
                     

{% endblock %}
", "secretariats/show.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\secretariats\\show.html.twig");
    }
}
