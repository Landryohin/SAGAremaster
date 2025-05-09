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

/* users/index.html.twig */
class __TwigTemplate_b763ebc70274f42ce9e58be34d94f22d extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/index.html.twig", 1);
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

        echo "Liste des utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 8
        echo "
<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 
  <div class=\"s131\">
            
    </div>
 <div > <a class=\"btn btn-success\"  href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new");
        echo "\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg> &nbsp; Nouvel utilisateur</a></div>
</div>
      


    <div style=\"background-color : white;border-top : 0.5px solid; margin-top:10px;\" id=\"c4c4c\">
        <table class=\"table table-responsive table-hover expensive display nowrap dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : center; width : 40%\">Nom</td> 
                    <td style=\"text-align : center; width : 20%\">Prénom(s) </td> 
                    <td style=\"text-align : center; width : 10%\">Email </td>  
                    <td style=\"text-align : center; width : 15%\">Niveau </td> 
                    <td style=\"text-align : center; width : 15%\">Zone</td> 
                    <td style=\"text-align : center; width : 15%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                <tr> 
                    <td style=\"text-align : center; width : 5%\">";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "</td> 

                    <td style=\"width : 20%\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</td> 
                    <td style=\"width : 20%\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td> 
                    <td style=\"width : 10%\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 41), "html", null, true);
            echo "</td> 
                    <td style=\"width : 10%\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Niveau", [], "any", false, false, false, 42), "html", null, true);
            echo "</td> 
                    <td style=\"width : 10%\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Zone", [], "any", false, false, false, 43), "html", null, true);
            echo "</td> 
                    
                    <td style=\"text-align : left; width : 15%\">
                            <a title=\"Voir\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                            </svg>
                        </a>
                        <a title=\"Modifier\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a>
                        <a title=\"Reset Password\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_resetPassword", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg class='fontawesomesvg' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" width=\"16\" height=\"16\" fill=\"currentColor\">
                                <path d=\"M144 144c0-44.2 35.8-80 80-80c31.9 0 59.4 18.6 72.3 45.7c7.6 16 26.7 22.8 42.6 15.2s22.8-26.7 15.2-42.6C331 33.7 281.5 0 224 0C144.5 0 80 64.5 80 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H144V144z\"/>
                            </svg>
                        </a>
                        ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 63)) {
                // line 64
                echo "                            <a title=\"Stoper\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_stop", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-stop-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"M5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3z\"/>
                                </svg>
                            </a> 

                        ";
            } else {
                // line 72
                echo "                            <a title=\"Mettre en service\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_play", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-skip-end-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M12.5 4a.5.5 0 0 0-1 0v3.248L5.233 3.612C4.693 3.3 4 3.678 4 4.308v7.384c0 .63.692 1.01 1.233.697L11.5 8.753V12a.5.5 0 0 0 1 0V4z\"/>
                                </svg>
                            </a> 
                        ";
            }
            // line 78
            echo "                    </td> 
                </tr>  
                ";
            // line 80
            $context["numero"] = ((isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 80, $this->source); })()) + 1);
            // line 81
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                
                </tbody>
        </table>

 

 
    
</div>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 101
        echo "
           <div class=\"footer\" style=\" 
                margin-top: 70px;
                position: absolute;
                width: 100%;\">
                        <div class=\"container\">
                            <div class=\"footer__logo\">
                                <div>
                                    <h3>SAGA</h3>
                                </div>
                            </div>
                            <div class=\"footer__nav\">
                                <div class=\"footer__tline\">
                                 

                                    <ul class=\"footer__social\" >
 
                                         <li><a href=\"#\">PRÉSENTATION</a></li>
                                        <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\">DOCUMENTHÈQUE</a></li> 
                                      
                                    </ul>
                                    
                                </div>
                                <div class=\"footer__bline\">
                                  
                                    <ul class=\"footer__social\">
                                         <li class=\"footer__copyright\" style=\"margin-top: 10px; font-size:15px;font-weight:bold; color: blue;\"><span>&copy;DGML République du Bénin le ";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span></li>
                                      
                                    </ul>
                                    ";
        // line 131
        echo "                                </div>
                            </div>
                        </div>
                        <span style=\"display:flex ;margin-bottom:-5px;top:0\">
                        <i style=\"width: 100%; height:8px;  padding: 0px; background-color:RGB(16,135,87);\"> </i>
                        <i style=\"width: 100%  ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
                    </div>

                    





    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "users/index.html.twig";
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
        return array (  289 => 131,  283 => 127,  272 => 119,  252 => 101,  242 => 100,  218 => 83,  211 => 81,  209 => 80,  205 => 78,  195 => 72,  183 => 64,  181 => 63,  173 => 58,  164 => 52,  155 => 46,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  128 => 37,  125 => 36,  121 => 35,  96 => 13,  89 => 8,  79 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs{% endblock %}

 

{% block list %}

<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 
  <div class=\"s131\">
            
    </div>
 <div > <a class=\"btn btn-success\"  href=\"{{path('app_users_new')}}\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg> &nbsp; Nouvel utilisateur</a></div>
</div>
      


    <div style=\"background-color : white;border-top : 0.5px solid; margin-top:10px;\" id=\"c4c4c\">
        <table class=\"table table-responsive table-hover expensive display nowrap dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : center; width : 40%\">Nom</td> 
                    <td style=\"text-align : center; width : 20%\">Prénom(s) </td> 
                    <td style=\"text-align : center; width : 10%\">Email </td>  
                    <td style=\"text-align : center; width : 15%\">Niveau </td> 
                    <td style=\"text-align : center; width : 15%\">Zone</td> 
                    <td style=\"text-align : center; width : 15%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
                {% for user in users %}
                <tr> 
                    <td style=\"text-align : center; width : 5%\">{{ numero }}</td> 

                    <td style=\"width : 20%\">{{ user.Nom }}</td> 
                    <td style=\"width : 20%\"> {{ user.Prenom }}</td> 
                    <td style=\"width : 10%\">{{ user.Email }}</td> 
                    <td style=\"width : 10%\">{{ user.Niveau }}</td> 
                    <td style=\"width : 10%\">{{ user.Zone }}</td> 
                    
                    <td style=\"text-align : left; width : 15%\">
                            <a title=\"Voir\" href=\"{{ path('app_users_show', {'id': user.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                            </svg>
                        </a>
                        <a title=\"Modifier\" href=\"{{ path('app_users_edit', {'id': user.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a>
                        <a title=\"Reset Password\" href=\"{{ path('app_users_resetPassword', {'id': user.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg class='fontawesomesvg' xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" width=\"16\" height=\"16\" fill=\"currentColor\">
                                <path d=\"M144 144c0-44.2 35.8-80 80-80c31.9 0 59.4 18.6 72.3 45.7c7.6 16 26.7 22.8 42.6 15.2s22.8-26.7 15.2-42.6C331 33.7 281.5 0 224 0C144.5 0 80 64.5 80 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H144V144z\"/>
                            </svg>
                        </a>
                        {% if user.status %}
                            <a title=\"Stoper\" href=\"{{ path('app_users_stop', {'id': user.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-stop-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                    <path d=\"M5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3z\"/>
                                </svg>
                            </a> 

                        {% else %}
                            <a title=\"Mettre en service\" href=\"{{ path('app_users_play', {'id': user.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
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





{% endblock %}


  {% block footer %}

           <div class=\"footer\" style=\" 
                margin-top: 70px;
                position: absolute;
                width: 100%;\">
                        <div class=\"container\">
                            <div class=\"footer__logo\">
                                <div>
                                    <h3>SAGA</h3>
                                </div>
                            </div>
                            <div class=\"footer__nav\">
                                <div class=\"footer__tline\">
                                 

                                    <ul class=\"footer__social\" >
 
                                         <li><a href=\"#\">PRÉSENTATION</a></li>
                                        <li><a href=\"{{path(\"Accueil\")}}\">DOCUMENTHÈQUE</a></li> 
                                      
                                    </ul>
                                    
                                </div>
                                <div class=\"footer__bline\">
                                  
                                    <ul class=\"footer__social\">
                                         <li class=\"footer__copyright\" style=\"margin-top: 10px; font-size:15px;font-weight:bold; color: blue;\"><span>&copy;DGML République du Bénin le {{ \"now\"|date('d/m/Y') }}</span></li>
                                      
                                    </ul>
                                    {# <div class=\"footer__language-btn-m\" data-dropdown-btn=\"language\">Americas - English<i class=\"icon-Arrow_Below\"></i></div> #}
                                </div>
                            </div>
                        </div>
                        <span style=\"display:flex ;margin-bottom:-5px;top:0\">
                        <i style=\"width: 100%; height:8px;  padding: 0px; background-color:RGB(16,135,87);\"> </i>
                        <i style=\"width: 100%  ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
                    </div>

                    





    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



{% endblock %}
", "users/index.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\users\\index.html.twig");
    }
}
