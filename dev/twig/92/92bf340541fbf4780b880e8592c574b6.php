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

/* Affectations/index.html.twig */
class __TwigTemplate_ecc12b62b6f2381d050818fab53e00fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Affectations/index.html.twig", 1);
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

        echo "Liste des affectations";
        
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
        echo "    ";
        // line 35
        echo "

    ";
        // line 41
        echo "
    <div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 

 <div class=\"s002\">
      <form action = \"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_index");
        echo "\" method= \"post\">
        
        <div class=\"inner-form\">
          <div class=\"input-field first-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input name = \"key\" id=\"key\" type=\"texte\" placeholder=\"Rechercher un document\"  />
          </div>
          <div class=\"input-field second-wrap\">
            <div class=\"icon-wrap\">
              <p style=\"padding-top:-5px; z-index:1\"></p>
            </div>
           <input title=\"Date de debut\" name =\"begin\" type=\"date\" placeholder=\"Date de debut\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["begin"]) || array_key_exists("begin", $context) ? $context["begin"] : (function () { throw new RuntimeError('Variable "begin" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\" />
          </div>
          <div class=\"input-field third-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input title=\"Date de fin\"  name=\"end\" id=\"return\" type=\"date\" placeholder=\"Date de fin\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\" />
          </div>
           
          <div class=\"input-field fifth-wrap\">
            <button class=\"btn-search\" type=\"submit\" name = \"submit\">Filtrer</button>
          </div>
        </div>
      </form>
    </div>

 
 
</div>

 

 
<div style=\"background-color : white;border-top : 0.5px solid #c4c4c;margin-top:10px\">
<table class=\"table table-responsive table-hover expensive display dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
        <thead style=\"background-color : #e9ecee;\">
            <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                <td style=\"text-align : center; width : 5%\">N°</td> 
                  <td style=\"text-align : center; width : 10%\">Date Affectation</td> 
                <td style=\"text-align : center; width : 20%\">Reference</td>
                 <td style=\"text-align : center; width : 20%\">Objet</td>
                <td style=\"text-align : center; width : 10%\">Expéditeur</td>            
                <td style=\"text-align : center; width : 10%\">Destinataire</td>
                <td style=\"text-align : center; width : 15%\">Actions</td> 
            </tr> 
        </thead>
         <tbody> 
        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Affectations"]) || array_key_exists("Affectations", $context) ? $context["Affectations"] : (function () { throw new RuntimeError('Variable "Affectations" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Affectation"]) {
            // line 96
            echo "          <tr> 
                <td style=\"text-align : center; width : 5%\">";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "</td> 

                <td style=\"text-align : center;width : 10%\">";
            // line 99
            ((twig_get_attribute($this->env, $this->source, $context["Affectation"], "DateAffectationAt", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Affectation"], "DateAffectationAt", [], "any", false, false, false, 99), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td> 

                <td style=\"width : 20%\"> 
                    ";
            // line 107
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Affectation"], "document", [], "any", false, false, false, 107), "Reference", [], "any", false, false, false, 107), "html", null, true);
            echo "
                </td> 
                <td style=\"width : 20%\">
                    ";
            // line 110
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Affectation"], "document", [], "any", false, false, false, 110), "Objet", [], "any", false, false, false, 110)) > 100)) {
                // line 111
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Affectation"], "document", [], "any", false, false, false, 111), "Objet", [], "any", false, false, false, 111), "", 100), 0, [], "array", false, false, false, 111), "html", null, true);
                echo " ...
                    ";
            } else {
                // line 113
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Affectation"], "document", [], "any", false, false, false, 113), "Objet", [], "any", false, false, false, 113), "html", null, true);
                echo "
                    ";
            }
            // line 115
            echo "                </td> 
                <td style=\"width : 10%\"> ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Affectation"], "Envoyeur", [], "any", false, false, false, 116), "html", null, true);
            echo "</td> 
                <td style=\"width : 10%\">";
            // line 117
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Affectation"], "Agent", [], "any", false, false, false, 117)) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Affectation"], "Agent", [], "any", false, false, false, 117), "Prenom", [], "any", false, false, false, 117) . "  ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Affectation"], "Agent", [], "any", false, false, false, 117), "Nom", [], "any", false, false, false, 117))) : (((twig_get_attribute($this->env, $this->source, $context["Affectation"], "Receveur", [], "any", false, false, false, 117)) ? (twig_get_attribute($this->env, $this->source, $context["Affectation"], "Receveur", [], "any", false, false, false, 117)) : ("")))), "html", null, true);
            echo "</td>   
                <td style=\"text-align : left; width : 15%\">

                    ";
            // line 120
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "niveau", [], "any", false, false, false, 120) == "Admin") || (((twig_get_attribute($this->env, $this->source, $context["Affectation"], "Envoyeur", [], "any", false, false, false, 120) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "zone", [], "any", false, false, false, 120)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Affectation"], "Document", [], "any", false, false, false, 120), "PosteOwner", [], "any", false, false, false, 120), "Fonction", [], "any", false, false, false, 120) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "zone", [], "any", false, false, false, 120))) || ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 120, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["Affectation"], "Envoyeur", [], "any", false, false, false, 120) == twig_get_attribute($this->env, $this->source, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 120, $this->source); })()), "Code", [], "any", false, false, false, 120))))) && (twig_get_attribute($this->env, $this->source, $context["Affectation"], "status", [], "any", false, false, false, 120) == false))) {
                // line 121
                echo "                        <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Affectation"], "id", [], "any", false, false, false, 121)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Etes vous sûr de vouloir  supprimé cette affectation?');\">
                            <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Affectation"], "id", [], "any", false, false, false, 122)]), "html", null, true);
                echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                    <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                                </svg>
                            </a>    
                            <a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Affectation"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                </svg>
                            </a>
                            <a title=\"Valider\" href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_valid", ["id" => twig_get_attribute($this->env, $this->source, $context["Affectation"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check\" viewBox=\"0 0 16 16\">
                                <path d=\"M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z\"/>
                                </svg>
                            </a>    
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["Affectation"], "id", [], "any", false, false, false, 139))), "html", null, true);
                echo "\">
                            <button  type=\"submit\" title=\"Supprimer\" class=\"btn btn-danger btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\"> 
                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/> 
                                </svg>    
                            </button>
                        </form>
                    ";
            } else {
                // line 148
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Affectation"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                            <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                            <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                        </svg>
                    </a>
                    ";
            }
            // line 155
            echo "                </td> 
            </tr>  
            ";
            // line 157
            $context["numero"] = ((isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 157, $this->source); })()) + 1);
            // line 158
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Affectation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "             
            </tbody>
    </table>
   </div> 
</div>
 
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 170
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 171
        echo "
  <style>
  
        .footer {
        background-color:white;\t
        color:black;
        }
        @media only screen and (min-width:1600px) {
            .footer {
                bottom:6px;
                margin-top: 2.5%; 
                width: 100%;
            }
        }
        @media only screen and (min-width:1900px) {
            .footer {
                bottom:6px;
                margin-top: 8%; 
                width: 100%;
            }
        }
  
  </style>

           <div class=\"footer\" >
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
                                        <li><a href=\"#\">TABLEAU DE BORD</a></li> 
                                      
                                    </ul>
                                    
                                </div>
                                <div class=\"footer__bline\">
                                  
                                    <ul class=\"footer__social\">
                                         <li class=\"footer__copyright\" style=\"margin-top: 10px; font-size:15px;font-weight:bold; color: blue;\"><span>&copy;DGML République du Bénin le ";
        // line 216
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span></li>
                                      
                                    </ul>
                                    ";
        // line 220
        echo "                                </div>
                            </div>
                        </div>
                        <span style=\"display:flex ;margin-bottom:-5px;top:0:\">
                        <i style=\"width: 100%; height:8px;  padding: 0px; background-color:RGB(16,135,87);\"> </i>
                        <i style=\"width: 100%  ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
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
        return "Affectations/index.html.twig";
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
        return array (  362 => 220,  356 => 216,  309 => 171,  299 => 170,  280 => 159,  274 => 158,  272 => 157,  268 => 155,  257 => 148,  245 => 139,  237 => 134,  228 => 128,  219 => 122,  214 => 121,  212 => 120,  206 => 117,  202 => 116,  199 => 115,  193 => 113,  187 => 111,  185 => 110,  178 => 107,  172 => 99,  167 => 97,  164 => 96,  160 => 95,  126 => 64,  117 => 58,  101 => 45,  95 => 41,  91 => 35,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des affectations{% endblock %}

{% block list %}
    {# <h1>Affectations index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date_Affectation_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for Affectation in Affectations %}
            <tr>
                <td>{{ Affectation.id }}</td>
                <td>{{ Affectation.DateAffectationAt ? Affectation.DateAffectationAt|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_Affectations_show', {'id': Affectation.id}) }}\">show</a>
                    <a href=\"{{ path('app_Affectations_edit', {'id': Affectation.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_Affectations_new') }}\">Create new</a> #}


    {# <div style=\"text-align:right; margin-top:20px\"> <a class=\"btn btn-success\"  href=\"{{path('app_Affectations_new')}}\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg> &nbsp; Nouveau Affectation</a></div> #}

    <div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 

 <div class=\"s002\">
      <form action = \"{{path('app_Affectations_index' )}}\" method= \"post\">
        
        <div class=\"inner-form\">
          <div class=\"input-field first-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input name = \"key\" id=\"key\" type=\"texte\" placeholder=\"Rechercher un document\"  />
          </div>
          <div class=\"input-field second-wrap\">
            <div class=\"icon-wrap\">
              <p style=\"padding-top:-5px; z-index:1\"></p>
            </div>
           <input title=\"Date de debut\" name =\"begin\" type=\"date\" placeholder=\"Date de debut\" value=\"{{ begin}}\" />
          </div>
          <div class=\"input-field third-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input title=\"Date de fin\"  name=\"end\" id=\"return\" type=\"date\" placeholder=\"Date de fin\" value=\"{{ end}}\" />
          </div>
           
          <div class=\"input-field fifth-wrap\">
            <button class=\"btn-search\" type=\"submit\" name = \"submit\">Filtrer</button>
          </div>
        </div>
      </form>
    </div>

 
 
</div>

 

 
<div style=\"background-color : white;border-top : 0.5px solid #c4c4c;margin-top:10px\">
<table class=\"table table-responsive table-hover expensive display dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
        <thead style=\"background-color : #e9ecee;\">
            <tr style=\"font-weight : bold; text-transform : uppercase\"> 
                <td style=\"text-align : center; width : 5%\">N°</td> 
                  <td style=\"text-align : center; width : 10%\">Date Affectation</td> 
                <td style=\"text-align : center; width : 20%\">Reference</td>
                 <td style=\"text-align : center; width : 20%\">Objet</td>
                <td style=\"text-align : center; width : 10%\">Expéditeur</td>            
                <td style=\"text-align : center; width : 10%\">Destinataire</td>
                <td style=\"text-align : center; width : 15%\">Actions</td> 
            </tr> 
        </thead>
         <tbody> 
        {% for Affectation in Affectations %}
          <tr> 
                <td style=\"text-align : center; width : 5%\">{{ numero}}</td> 

                <td style=\"text-align : center;width : 10%\">{{ Affectation.DateAffectationAt ? Affectation.DateAffectationAt|date('d-m-Y') : '' }}</td> 

                <td style=\"width : 20%\"> 
                    {# {% if  Affectation.document.Reference|length > 20 %}
                        {{  Affectation.document.Reference|split('', 20)[0] }} ...
                    {% else %}
                        {{  Affectation.document.Reference }}
                    {% endif %}#}
                    {{  Affectation.document.Reference }}
                </td> 
                <td style=\"width : 20%\">
                    {% if Affectation.document.Objet|length > 100 %}
                        {{ Affectation.document.Objet|split('', 100)[0] }} ...
                    {% else %}
                        {{ Affectation.document.Objet }}
                    {% endif %}
                </td> 
                <td style=\"width : 10%\"> {{ Affectation.Envoyeur}}</td> 
                <td style=\"width : 10%\">{{  Affectation.Agent? Affectation.Agent.Prenom ~\"  \"~ Affectation.Agent.Nom : Affectation.Receveur ? Affectation.Receveur:\"\"   }}</td>   
                <td style=\"text-align : left; width : 15%\">

                    {% if (user.niveau == \"Admin\" or  (Affectation.Envoyeur == user.zone or Affectation.Document.PosteOwner.Fonction == user.zone or (direction and Affectation.Envoyeur == direction.Code)))  and  Affectation.status == false %}
                        <form method=\"post\" action=\"{{ path('app_Affectations_delete', {'id': Affectation.id}) }}\" onsubmit=\"return confirm('Etes vous sûr de vouloir  supprimé cette affectation?');\">
                            <a href=\"{{ path('app_Affectations_show', {'id': Affectation.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                    <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                                </svg>
                            </a>    
                            <a href=\"{{ path('app_Affectations_edit', {'id': Affectation.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                </svg>
                            </a>
                            <a title=\"Valider\" href=\"{{ path('app_Affectations_valid', {'id': Affectation.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check\" viewBox=\"0 0 16 16\">
                                <path d=\"M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z\"/>
                                </svg>
                            </a>    
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ Affectation.id) }}\">
                            <button  type=\"submit\" title=\"Supprimer\" class=\"btn btn-danger btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\"> 
                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/> 
                                </svg>    
                            </button>
                        </form>
                    {% else %}
                        <a href=\"{{ path('app_Affectations_show', {'id': Affectation.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye-fill\" viewBox=\"0 0 16 16\">
                            <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                            <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
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
 
</div>


{% endblock %}

{% block footer %}

  <style>
  
        .footer {
        background-color:white;\t
        color:black;
        }
        @media only screen and (min-width:1600px) {
            .footer {
                bottom:6px;
                margin-top: 2.5%; 
                width: 100%;
            }
        }
        @media only screen and (min-width:1900px) {
            .footer {
                bottom:6px;
                margin-top: 8%; 
                width: 100%;
            }
        }
  
  </style>

           <div class=\"footer\" >
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
                                        <li><a href=\"#\">TABLEAU DE BORD</a></li> 
                                      
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
                        <span style=\"display:flex ;margin-bottom:-5px;top:0:\">
                        <i style=\"width: 100%; height:8px;  padding: 0px; background-color:RGB(16,135,87);\"> </i>
                        <i style=\"width: 100%  ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
                    </div>
 
{% endblock %}", "Affectations/index.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\Affectations\\index.html.twig");
    }
}
