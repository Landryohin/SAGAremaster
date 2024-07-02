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

/* statistiques/index.html.twig */
class __TwigTemplate_c0a2d7deb0f0ce29e1583381596f965e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistiques/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistiques/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "statistiques/index.html.twig", 1);
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

        echo "Tableaux statistiques de suivi courriers DGCA";
        
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


 <div class=\"s002\">
      <form action = \"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistiques_index");
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
        // line 24
        echo twig_escape_filter($this->env, (isset($context["begin"]) || array_key_exists("begin", $context) ? $context["begin"] : (function () { throw new RuntimeError('Variable "begin" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" />
          </div>
          <div class=\"input-field third-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input title=\"Date de fin\"  name=\"end\" id=\"return\" type=\"date\" placeholder=\"Date de fin\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" />
          </div>
           
          <div class=\"input-field fifth-wrap\">
            <button class=\"btn-search\" type=\"submit\" name = \"submit\">Filtrer</button>
          </div>
        </div>
      </form>
    </div>




   ";
        // line 72
        echo " 
</div>

    <div style=\" margin-top:50px\">
        <h5 style=\"text-align : center\">Tableau Général suivi courriers ";
        // line 76
        (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "niveau", [], "any", false, false, false, 76) == "Admin")) ? (print ("GLOBAL")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "zone", [], "any", false, false, false, 76), "html", null, true))));
        echo " </h5> 

        <div style=\"background-color : white;border-top : 0.5px solid #c4c4c4;margin-top:10px\">

            <table class=\"table table-responsive table-hover expensive display dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                    <thead style=\"background-color : #e9ecee;\">
                        <tr style=\"font-weight : bold; text-transform : uppercase\">
                            <td style=\"text-align : center;  \">№</td> 
                            <td style=\"text-align : center; \">Origine</td> 
                            <td style=\"text-align : center; \">Obj</td> 
                            <td style=\"text-align : center;  \">Ref </td> 
                         
                            <td style=\"text-align : center;  \">ST</td> 
                            <td style=\"text-align : center;  \">D.AFF</td> 
                            <td style=\"text-align : center;  \">NT</td>  
                            <td style=\"text-align : center;  \">Obs </td>  
                        </tr> 
                    </thead>
                    <tbody>
                        ";
        // line 95
        $context["parcour"] = 1;
        echo " 
                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 97
            echo "                            ";
            $context["countAffectation"] = 0;
            // line 98
            echo "                            ";
            if ((((twig_get_attribute($this->env, $this->source, $context["document"], "Niveau", [], "any", false, false, false, 98) != "PUBLIC") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "affectations", [], "any", false, false, false, 98)) > 0)) && (twig_get_attribute($this->env, $this->source, $context["document"], "Reponse", [], "any", false, false, false, 98) == null))) {
                // line 99
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["document"], "affectations", [], "any", false, false, false, 99));
                foreach ($context['_seq'] as $context["_key"] => $context["affectation"]) {
                    // line 100
                    echo "                                    ";
                    if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["affectation"], "Envoyeur", [], "any", false, false, false, 100), (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 100, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["affectation"], "status", [], "any", false, false, false, 100) == true))) {
                        // line 101
                        echo "                                        <tr ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["document"], "Reponse", [], "any", false, false, false, 101)) ? ("text-success") : ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "documents", [], "any", false, false, false, 101)) > 0)) ? ("text-primary") : (""))));
                        echo "> 
                                            <td style=\"text-align : center;  \">";
                        // line 102
                        echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 102, $this->source); })()), "html", null, true);
                        echo "</td> 

                                            <td style=\"text-align : left; \">";
                        // line 104
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Poste", [], "any", false, false, false, 104), "html", null, true);
                        echo "</td> 
                                            <td style=\"text-align : left;  \">
                                                ";
                        // line 106
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 106)) > 30)) {
                            // line 107
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 107), "", 20), 0, [], "array", false, false, false, 107), "html", null, true);
                            echo " ...
                                                ";
                        } else {
                            // line 109
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 109), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 111
                        echo "                                            </td> 
                                            <td style=\"text-align : left;  \">
                                                ";
                        // line 118
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Reference", [], "any", false, false, false, 118), "html", null, true);
                        echo "
                                            </td> 
                                          
                                            <td style=\"text-align : left;  \">";
                        // line 121
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["affectation"], "Receveur", [], "any", false, false, false, 121)) ? (twig_get_attribute($this->env, $this->source, $context["affectation"], "Receveur", [], "any", false, false, false, 121)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["affectation"], "Agent", [], "any", false, false, false, 121), "nom", [], "any", false, false, false, 121) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["affectation"], "Agent", [], "any", false, false, false, 121), "prenom", [], "any", false, false, false, 121)))), "html", null, true);
                        echo "</td> 
                                            <td style=\"text-align : left;  \">";
                        // line 122
                        ((twig_get_attribute($this->env, $this->source, $context["affectation"], "DateAffectationAt", [], "any", false, false, false, 122)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affectation"], "DateAffectationAt", [], "any", false, false, false, 122), "d-m-Y"), "html", null, true))) : (print ("")));
                        echo "</td> 
                                            <td style=\"text-align : left;  \">";
                        // line 123
                        echo (((((twig_get_attribute($this->env, $this->source, $context["document"], "Reponse", [], "any", false, false, false, 123) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "documents", [], "any", false, false, false, 123)) > 0)) || twig_in_filter(twig_get_attribute($this->env, $this->source, $context["document"], "Initiateur", [], "any", false, false, false, 123), (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 123, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["document"], "mouvement", [], "any", false, false, false, 123) == "DEPART"))) ? ("Traité") : ("En cours"));
                        echo "</td>  
                                            <td style=\"text-align : left;  \">";
                        // line 124
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Observation", [], "any", false, false, false, 124), "html", null, true);
                        echo " </td>  
                                        </tr>
                                        ";
                        // line 126
                        $context["countAffectation"] = ((isset($context["countAffectation"]) || array_key_exists("countAffectation", $context) ? $context["countAffectation"] : (function () { throw new RuntimeError('Variable "countAffectation" does not exist.', 126, $this->source); })()) + 1);
                        echo " 
                                        ";
                        // line 127
                        $context["numero"] = ((isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 127, $this->source); })()) + 1);
                        // line 128
                        echo "                                    ";
                    }
                    // line 129
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affectation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "                            ";
            }
            // line 131
            echo "                            ";
            if (((isset($context["countAffectation"]) || array_key_exists("countAffectation", $context) ? $context["countAffectation"] : (function () { throw new RuntimeError('Variable "countAffectation" does not exist.', 131, $this->source); })()) == 0)) {
                // line 132
                echo "                                <tr class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["document"], "Reponse", [], "any", false, false, false, 132)) ? ("text-success") : ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "documents", [], "any", false, false, false, 132)) > 0)) ? ("text-primary") : (""))));
                echo " \"> 
                                    <td style=\"text-align : center;  \">";
                // line 133
                echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 133, $this->source); })()), "html", null, true);
                echo "</td> 
                                    <td style=\"text-align : left;  \">";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Poste", [], "any", false, false, false, 134), "html", null, true);
                echo "</td> 
                                    <td style=\"text-align : left;  \">
                                        ";
                // line 136
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 136)) > 50)) {
                    // line 137
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 137), "", 50), 0, [], "array", false, false, false, 137), "html", null, true);
                    echo " ...
                                        ";
                } else {
                    // line 139
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 139), "html", null, true);
                    echo "
                                        ";
                }
                // line 141
                echo "                                    </td> 
                                    <td style=\"text-align : left;width : 15%   \">
                                        ";
                // line 148
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Reference", [], "any", false, false, false, 148), "html", null, true);
                echo "
                                    </td> 
                                   
                                    <td style=\"text-align : left;  \">ND</td> 
                                    <td style=\"text-align : left;  \">ND</td> 
                                    <td style=\"text-align : left;  \">";
                // line 153
                echo (((((twig_get_attribute($this->env, $this->source, $context["document"], "Reponse", [], "any", false, false, false, 153) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "documents", [], "any", false, false, false, 153)) > 0)) || twig_in_filter(twig_get_attribute($this->env, $this->source, $context["document"], "Initiateur", [], "any", false, false, false, 153), (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 153, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["document"], "mouvement", [], "any", false, false, false, 153) == "DEPART"))) ? ("Traité") : ("Instance"));
                echo "</td>  
                                    <td style=\"text-align : left;  \">";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Observation", [], "any", false, false, false, 154), "html", null, true);
                echo " </td>  
                                </tr>
                                ";
                // line 156
                $context["numero"] = ((isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 156, $this->source); })()) + 1);
                // line 157
                echo "                            ";
            }
            // line 158
            echo "                            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                    </body>
                </table>
        </div>
         <span style=\"font-size:14px\"> <span><b>Legende:</b></span>  <b>OBJ :</b> Objet ;  <b>REF :</b> Reference;  <b>NUM ENR :</b> Numero d'enregistrement; <b>ST :</b> Service traitant; <b>D.AFF :</b> Date d'affectation; <b>NT :</b> Niveau de traitement; <b>OBS :</b> Observation;  </span> 

    </div>




 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 175
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
        // line 220
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span></li>
                                
                            </ul>
                            ";
        // line 224
        echo "                        </div>
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
        return "statistiques/index.html.twig";
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
        return array (  412 => 224,  406 => 220,  359 => 175,  349 => 174,  327 => 160,  320 => 158,  317 => 157,  315 => 156,  310 => 154,  306 => 153,  297 => 148,  293 => 141,  287 => 139,  281 => 137,  279 => 136,  274 => 134,  270 => 133,  265 => 132,  262 => 131,  259 => 130,  253 => 129,  250 => 128,  248 => 127,  244 => 126,  239 => 124,  235 => 123,  231 => 122,  227 => 121,  220 => 118,  216 => 111,  210 => 109,  204 => 107,  202 => 106,  197 => 104,  192 => 102,  187 => 101,  184 => 100,  179 => 99,  176 => 98,  173 => 97,  169 => 96,  165 => 95,  143 => 76,  137 => 72,  121 => 30,  112 => 24,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableaux statistiques de suivi courriers DGCA{% endblock %}

{% block list %}

<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 


 <div class=\"s002\">
      <form action = \"{{path('app_statistiques_index' )}}\" method= \"post\">
        
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




   {#  <div class=\"s002\">
      <form action = \"{{path('app_statistiques_index' )}}\" method= \"post\">
        
        <div class=\"inner-form\">
          <div class=\"input-field first-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input name = \"key\" id=\"key\" type=\"text\" placeholder=\"Rechercher un document\"  />
          </div>
          <div class=\"input-field second-wrap\">
            <div class=\"icon-wrap\">
              <p style=\"padding-top:-5px; z-index:1\"></p>
            </div>
           <input title=\"Date de debut\" name =\"begin\" type=\"date\" placeholder=\"Date de debut\" value =\"{{begin}} />
          </div>
          <div class=\"input-field third-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input title=\"Date de fin\"  name=\"end\" id=\"return\" type=\"date\" placeholder=\"Date de fin\" value =\"{{end}}/>
          </div>
           
          <div class=\"input-field fifth-wrap\">
            <button class=\"btn-search\" type=\"submit\" name = \"submit\">Filtrer</button>
          </div>
        </div>
      </form>
    </div>#}
 
</div>

    <div style=\" margin-top:50px\">
        <h5 style=\"text-align : center\">Tableau Général suivi courriers {{user.niveau ==\"Admin\"? \"GLOBAL\":user.zone}} </h5> 

        <div style=\"background-color : white;border-top : 0.5px solid #c4c4c4;margin-top:10px\">

            <table class=\"table table-responsive table-hover expensive display dataTable dtr-inline collapsed\" id=\"expensive\" style=\"width: 100%;\" >
                    <thead style=\"background-color : #e9ecee;\">
                        <tr style=\"font-weight : bold; text-transform : uppercase\">
                            <td style=\"text-align : center;  \">№</td> 
                            <td style=\"text-align : center; \">Origine</td> 
                            <td style=\"text-align : center; \">Obj</td> 
                            <td style=\"text-align : center;  \">Ref </td> 
                         
                            <td style=\"text-align : center;  \">ST</td> 
                            <td style=\"text-align : center;  \">D.AFF</td> 
                            <td style=\"text-align : center;  \">NT</td>  
                            <td style=\"text-align : center;  \">Obs </td>  
                        </tr> 
                    </thead>
                    <tbody>
                        {% set parcour = 1 %} 
                        {% for document in documents %}
                            {% set countAffectation = 0 %}
                            {% if document.Niveau != 'PUBLIC' and document.affectations|length > 0 and document.Reponse == null %}
                                {% for affectation in document.affectations %}
                                    {% if affectation.Envoyeur in poste and affectation.status == true %}
                                        <tr {{ document.Reponse ? 'text-success' : document.documents|length > 0 ? 'text-primary'}}> 
                                            <td style=\"text-align : center;  \">{{numero}}</td> 

                                            <td style=\"text-align : left; \">{{ document.Poste}}</td> 
                                            <td style=\"text-align : left;  \">
                                                {% if document.Objet|length > 30 %}
                                                    {{ document.Objet|split('', 20)[0] }} ...
                                                {% else %}
                                                    {{ document.Objet }}
                                                {% endif %}
                                            </td> 
                                            <td style=\"text-align : left;  \">
                                                {# {% if  document.Reference %}
                                                    {{  document.Reference|split('', 20)[0] }} ...
                                                {% else %}
                                                    {{  document.Reference }}
                                                {% endif %} #}
                                                {{  document.Reference }}
                                            </td> 
                                          
                                            <td style=\"text-align : left;  \">{{ affectation.Receveur ?  affectation.Receveur:  affectation.Agent.nom ~' '~ affectation.Agent.prenom}}</td> 
                                            <td style=\"text-align : left;  \">{{ affectation.DateAffectationAt ? affectation.DateAffectationAt|date('d-m-Y') : ''}}</td> 
                                            <td style=\"text-align : left;  \">{{ document.Reponse or document.documents|length >0 or document.Initiateur in poste or document.mouvement == \"DEPART\" ? \"Traité\": 'En cours' }}</td>  
                                            <td style=\"text-align : left;  \">{{ document.Observation }} </td>  
                                        </tr>
                                        {% set countAffectation = countAffectation + 1 %} 
                                        {% set numero = numero + 1 %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                            {% if countAffectation == 0 %}
                                <tr class=\"{{ document.Reponse ? 'text-success' : document.documents|length > 0 ? 'text-primary'}} \"> 
                                    <td style=\"text-align : center;  \">{{numero}}</td> 
                                    <td style=\"text-align : left;  \">{{ document.Poste}}</td> 
                                    <td style=\"text-align : left;  \">
                                        {% if document.Objet|length > 50 %}
                                            {{ document.Objet|split('', 50)[0] }} ...
                                        {% else %}
                                            {{ document.Objet }}
                                        {% endif %}
                                    </td> 
                                    <td style=\"text-align : left;width : 15%   \">
                                        {# {% if  document.Reference|length > 20 %}
                                            {{  document.Reference|split('', 20)[0] }} ...
                                        {% else %}
                                            {{  document.Reference }}
                                        {% endif %} #}
                                        {{  document.Reference }}
                                    </td> 
                                   
                                    <td style=\"text-align : left;  \">ND</td> 
                                    <td style=\"text-align : left;  \">ND</td> 
                                    <td style=\"text-align : left;  \">{{ document.Reponse  or document.documents|length >0 or document.Initiateur in poste or document.mouvement == \"DEPART\"? \"Traité\": 'Instance' }}</td>  
                                    <td style=\"text-align : left;  \">{{ document.Observation }} </td>  
                                </tr>
                                {% set numero = numero + 1 %}
                            {% endif %}
                            
                        {% endfor %}
                    </body>
                </table>
        </div>
         <span style=\"font-size:14px\"> <span><b>Legende:</b></span>  <b>OBJ :</b> Objet ;  <b>REF :</b> Reference;  <b>NUM ENR :</b> Numero d'enregistrement; <b>ST :</b> Service traitant; <b>D.AFF :</b> Date d'affectation; <b>NT :</b> Niveau de traitement; <b>OBS :</b> Observation;  </span> 

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
{% endblock %}
  
", "statistiques/index.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\statistiques\\index.html.twig");
    }
}
