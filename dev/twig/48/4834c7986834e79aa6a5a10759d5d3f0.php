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

/* documents/show.html.twig */
class __TwigTemplate_0f6dc85e65e942207db0de0595748796 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documents/show.html.twig", 1);
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

        echo "Documents";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 58
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 64
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 68
        echo " 

<div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\">Retour</a></div>
</div>

<div class=\"topic\">
    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
        <div class=\"topic__caption\">
            <div class=\"topic__name mb-n5 pb-5\">
                ";
        // line 79
        echo "            </div>
                
            <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\">Modifier</a></div>
        </div>
    </div>

<div class=\"create\">
    
    <div class=\"create__section \">

        <div style=\" display: flex;flex-wrap: wrap;\" >

        <div  style=\"margin-top: 20px; width:35% \">

                <div class=\"topic__head\"   style=\"margin-bottom: -20px;\">
                    <div class=\"topic__caption\">
                        <div class=\"topic__name mb-5 pb-5\">
                            <h5>Informations concernant le document ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 96, $this->source); })()), "Reference", [], "any", false, false, false, 96), "html", null, true);
        echo "<h5>
                        </div> 
                    </div>
                </div>
                
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Numero  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 103, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 103), "html", null, true);
        echo "\"readonly> 
                </div>
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Structure du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 107, $this->source); })()), "Structure", [], "any", false, false, false, 107), "html", null, true);
        echo "\"readonly> 
                </div>
            
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Mouvement du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 112, $this->source); })()), "Mouvement", [], "any", false, false, false, 112), "html", null, true);
        echo "\"readonly> 
                </div>
            
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\" \"> Objet du document  </label>
                    ";
        // line 118
        echo "                    <textarea class=\"form-control\" rows=\"10\" cols=\"50\"  readonly>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 118, $this->source); })()), "Objet", [], "any", false, false, false, 118), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Date d'arrivée  du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"";
        // line 122
        ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 122, $this->source); })()), "DateArrivee", [], "any", false, false, false, 122)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 122, $this->source); })()), "DateArrivee", [], "any", false, false, false, 122), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "\"> 
                </div>

                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Date du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"";
        // line 127
        ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 127, $this->source); })()), "DateDocument", [], "any", false, false, false, 127)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 127, $this->source); })()), "DateDocument", [], "any", false, false, false, 127), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "\"> 
                </div>

                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Date d'insertion du document dans SAGA </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"";
        // line 132
        ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 132, $this->source); })()), "DocumentAt", [], "any", false, false, false, 132)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 132, $this->source); })()), "DocumentAt", [], "any", false, false, false, 132), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "\"> 
                </div>
            </div >

            <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
            
                <embed src=\"";
        // line 138
        ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 138, $this->source); })()), "DocumentAt", [], "any", false, false, false, 138)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 138, $this->source); })()), "DocumentAt", [], "any", false, false, false, 138), "Y/m/d"), "html", null, true))) : (print ("")));
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 138, $this->source); })()), "Chemin", [], "any", false, false, false, 138), "html", null, true);
        echo "\" width=\"600\" height=\"1000\" type='application/pdf'>
                </embed>
            </div>

            ";
        // line 142
        echo " 
        </div>

    </div>
</div>

<div class=\"topic\" style=\"margin-top: 50px;\">

    ";
        // line 150
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 150, $this->source); })()), "provenances", [], "any", false, false, false, 150)) > 0)) {
            // line 151
            echo "
        <div class=\"create\">
            <div  >
                <label class=\"create__label\" for=\"title\"> <h6> Liste des provenances du document <h6></label>
                ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 155, $this->source); })()), "provenances", [], "any", false, false, false, 155));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["provenance"]) {
                // line 156
                echo "                    <a href=\"#\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provenance"], "Structure", [], "any", false, false, false, 156), "html", null, true);
                echo " avec le numéro ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provenance"], "Numero", [], "any", false, false, false, 156), "html", null, true);
                echo " le ";
                ((twig_get_attribute($this->env, $this->source, $context["provenance"], "DateEnregistrement", [], "any", false, false, false, 156)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provenance"], "DateEnregistrement", [], "any", false, false, false, 156), "Y-m-d à h:m:s"), "html", null, true))) : (print ("")));
                echo "  </a>  <br>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 158
                echo "                    <p >Pas de provenance pour ce document.</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provenance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo " 
                
            </div> 
                                                
        </div>
    ";
        }
        // line 164
        echo " 

    <div class=\"create\">
        <div  >
            <label class=\"create__label\" for=\"title\"> <h6> Liste des affectation du document. <h6></label>
            <a href=\"\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   ";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 169, $this->source); })()), "PosteOwner", [], "any", false, false, false, 169), "Agent", [], "any", false, false, false, 169), "Prenom", [], "any", false, false, false, 169), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 169, $this->source); })()), "PosteOwner", [], "any", false, false, false, 169), "Agent", [], "any", false, false, false, 169), "Nom", [], "any", false, false, false, 169), "html", null, true);
        echo " à créer ce document le ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 169, $this->source); })()), "DocumentAt", [], "any", false, false, false, 169)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 169, $this->source); })()), "DocumentAt", [], "any", false, false, false, 169), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "   </a>  <br>
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["affectations"]) || array_key_exists("affectations", $context) ? $context["affectations"] : (function () { throw new RuntimeError('Variable "affectations" does not exist.', 170, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["affectation"]) {
            // line 171
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_show", ["id" => twig_get_attribute($this->env, $this->source, $context["affectation"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affectation"], "Envoyeur", [], "any", false, false, false, 171), "html", null, true);
            echo "  à affecter ce document à   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affectation"], "Receveur", [], "any", false, false, false, 171), "html", null, true);
            echo " le ";
            ((twig_get_attribute($this->env, $this->source, $context["affectation"], "DateAffectationAt", [], "any", false, false, false, 171)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affectation"], "DateAffectationAt", [], "any", false, false, false, 171), "Y-m-d à h:m:s"), "html", null, true))) : (print ("")));
            echo "   </a>  <br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 173
            echo "                <p >Pas d'affectation pour ce document.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affectation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo " 
            
        </div>              
    </div>
</div>
";
        // line 179
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 179, $this->source); })()), "Reponse", [], "any", false, false, false, 179)) {
            // line 180
            echo "    ";
            $context["reponses"] = [twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 180, $this->source); })()), "Reponse", [], "any", false, false, false, 180)];
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 181
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 181, $this->source); })()), "documents", [], "any", false, false, false, 181)) > 0)) {
            // line 182
            echo "    ";
            $context["reponses"] = twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 182, $this->source); })()), "documents", [], "any", false, false, false, 182);
        } else {
            // line 184
            echo "    ";
            $context["reponses"] = [];
            echo "          
";
        }
        // line 186
        if ((twig_length_filter($this->env, (isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 186, $this->source); })())) > 0)) {
            echo " 
    ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 187, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 188
                echo "        
        <div class=\"topic\">
            <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                <div class=\"topic__caption\">
                    <div class=\"topic__name mb-n5 pb-5\">
                        ";
                // line 194
                echo "                    </div>
                        
                    <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 196)]), "html", null, true);
                echo "\">Modifier</a></div>
                </div>
            </div>

        <div class=\"create\">
            
            <div class=\"create__section \">

                <div style=\" display: flex;flex-wrap: wrap;\" >

                <div  style=\"margin-top: 20px; width:35% \">

                        <div class=\"topic__head\"   style=\"margin-bottom: -20px;\">
                            <div>
                                <div class=\"topic__name mb-5 pb-5\">
                                    ";
                // line 211
                if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 211, $this->source); })()), "Reponse", [], "any", false, false, false, 211)) {
                    // line 212
                    echo "                                        <h5> Le document auquelle on a répondu</h5>
                                    ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 213
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 213, $this->source); })()), "documents", [], "any", false, false, false, 213)) > 0)) {
                    // line 214
                    echo "                                        <h5> Un document en réponse</h5>
                                    ";
                }
                // line 216
                echo "                                </div> 
                                <div class=\"topic__name mb-5 pb-5\">
                                    <a href=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 218)]), "html", null, true);
                echo "\"><h5>Informations concernant le document ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "Reference", [], "any", false, false, false, 218), "html", null, true);
                echo "</h5></a>
                                </div> 
                            </div>
                        </div>
                        
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Numero  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "NumeroEnregistrement", [], "any", false, false, false, 225), "html", null, true);
                echo "\"readonly> 
                        </div>
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Structure du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "Structure", [], "any", false, false, false, 229), "html", null, true);
                echo "\"readonly> 
                        </div>
                    
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Mouvement du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
                // line 234
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "Mouvement", [], "any", false, false, false, 234), "html", null, true);
                echo "\"readonly> 
                        </div>
                    
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\" \"> Objet du document  </label>
                            ";
                // line 240
                echo "                            <textarea class=\"form-control\" rows=\"10\" cols=\"50\"  readonly>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "Objet", [], "any", false, false, false, 240), "html", null, true);
                echo "</textarea>
                        </div>
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Date d'arrivée  du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"";
                // line 244
                ((twig_get_attribute($this->env, $this->source, $context["reponse"], "DateArrivee", [], "any", false, false, false, 244)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "DateArrivee", [], "any", false, false, false, 244), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "\"> 
                        </div>

                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Date du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"";
                // line 249
                ((twig_get_attribute($this->env, $this->source, $context["reponse"], "DateDocument", [], "any", false, false, false, 249)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "DateDocument", [], "any", false, false, false, 249), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "\"> 
                        </div>

                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Date d'insertion du document dans SAGA </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"";
                // line 254
                ((twig_get_attribute($this->env, $this->source, $context["reponse"], "DocumentAt", [], "any", false, false, false, 254)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 254, $this->source); })()), "DocumentAt", [], "any", false, false, false, 254), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "\"> 
                        </div>
                    </div >

                    <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                    
                        <embed src=\"";
                // line 260
                ((twig_get_attribute($this->env, $this->source, $context["reponse"], "DocumentAt", [], "any", false, false, false, 260)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "DocumentAt", [], "any", false, false, false, 260), "Y/m/d"), "html", null, true))) : (print ("")));
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "Chemin", [], "any", false, false, false, 260), "html", null, true);
                echo "\" width=\"600\" height=\"1000\" type='application/pdf'>
                        </embed>
                    </div>

                    ";
                // line 264
                echo " 
                </div>

            </div>
        </div>

        <div class=\"topic\" style=\"margin-top: 50px;\">

            ";
                // line 272
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "provenances", [], "any", false, false, false, 272)) > 0)) {
                    // line 273
                    echo "
                <div class=\"create\">
                    <div  >
                        <label class=\"create__label\" for=\"title\"> <h6> Liste des provenances du document <h6></label>
                        ";
                    // line 277
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reponse"], "provenances", [], "any", false, false, false, 277));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["provenance"]) {
                        // line 278
                        echo "                            <a href=\"#\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provenance"], "Structure", [], "any", false, false, false, 278), "html", null, true);
                        echo " avec le numéro ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provenance"], "Numero", [], "any", false, false, false, 278), "html", null, true);
                        echo " le ";
                        ((twig_get_attribute($this->env, $this->source, $context["provenance"], "DateEnregistrement", [], "any", false, false, false, 278)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provenance"], "DateEnregistrement", [], "any", false, false, false, 278), "Y-m-d à h:m:s"), "html", null, true))) : (print ("")));
                        echo "  </a>  <br>
                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 280
                        echo "                            <p >Pas de provenance pour ce document.</p>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provenance'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 281
                    echo " 
                        
                    </div> 
                                                        
                </div>
            ";
                }
                // line 286
                echo " 

            <div class=\"create\">
                <div  >
                    <label class=\"create__label\" for=\"title\"> <h6> Liste des affectation du document. <h6></label>
                    <a href=\"\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   ";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "PosteOwner", [], "any", false, false, false, 291), "Agent", [], "any", false, false, false, 291), "Prenom", [], "any", false, false, false, 291), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "PosteOwner", [], "any", false, false, false, 291), "Agent", [], "any", false, false, false, 291), "Nom", [], "any", false, false, false, 291), "html", null, true);
                echo " à créer ce document le ";
                ((twig_get_attribute($this->env, $this->source, $context["reponse"], "DocumentAt", [], "any", false, false, false, 291)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "DocumentAt", [], "any", false, false, false, 291), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "   </a>  <br>
                    ";
                // line 292
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["affectations"]) || array_key_exists("affectations", $context) ? $context["affectations"] : (function () { throw new RuntimeError('Variable "affectations" does not exist.', 292, $this->source); })()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["affectation"]) {
                    // line 293
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_show", ["id" => twig_get_attribute($this->env, $this->source, $context["affectation"], "id", [], "any", false, false, false, 293)]), "html", null, true);
                    echo "\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affectation"], "Envoyeur", [], "any", false, false, false, 293), "html", null, true);
                    echo "  à affecter ce document à   ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affectation"], "Receveur", [], "any", false, false, false, 293), "html", null, true);
                    echo " le ";
                    ((twig_get_attribute($this->env, $this->source, $context["affectation"], "DateAffectationAt", [], "any", false, false, false, 293)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affectation"], "DateAffectationAt", [], "any", false, false, false, 293), "Y-m-d à h:m:s"), "html", null, true))) : (print ("")));
                    echo "   </a>  <br>
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 295
                    echo "                        <p >Pas d'affectation pour ce document.</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affectation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo " 
                    
                </div>              
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "documents/show.html.twig";
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
        return array (  566 => 296,  559 => 295,  545 => 293,  540 => 292,  532 => 291,  525 => 286,  517 => 281,  510 => 280,  498 => 278,  493 => 277,  487 => 273,  485 => 272,  475 => 264,  466 => 260,  457 => 254,  449 => 249,  441 => 244,  433 => 240,  425 => 234,  417 => 229,  410 => 225,  398 => 218,  394 => 216,  390 => 214,  388 => 213,  385 => 212,  383 => 211,  365 => 196,  361 => 194,  354 => 188,  350 => 187,  346 => 186,  340 => 184,  336 => 182,  334 => 181,  331 => 180,  329 => 179,  322 => 174,  315 => 173,  301 => 171,  296 => 170,  288 => 169,  281 => 164,  273 => 159,  266 => 158,  254 => 156,  249 => 155,  243 => 151,  241 => 150,  231 => 142,  222 => 138,  213 => 132,  205 => 127,  197 => 122,  189 => 118,  181 => 112,  173 => 107,  166 => 103,  156 => 96,  138 => 81,  134 => 79,  124 => 71,  119 => 68,  109 => 67,  98 => 64,  89 => 58,  79 => 57,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Documents{% endblock %}
 

{# {% block body %}
    <h1>Documents</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ document.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ document.Nom }}</td>
            </tr>
            <tr>
                <th>Objet</th>
                <td>{{ document.Objet }}</td>
            </tr>
            <tr>
                <th>Chemin</th>
                <td>{{ document.Chemin }}</td>
            </tr>
            <tr>
                <th>Structure</th>
                <td>{{ document.Structure }}</td>
            </tr>
            <tr>
                <th>Mouvement</th>
                <td>{{ document.Mouvement }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ document.Niveau }}</td>
            </tr>
            <tr>
                <th>Document_at</th>
                <td>{{ document.DocumentAt ? document.DocumentAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Date_mouvement</th>
                <td>{{ document.DateMouvement ? document.DateMouvement|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_documents_index') }}\">back to list</a>

    <a href=\"{{ path('app_documents_edit', {'id': document.id}) }}\">edit</a>

    {{ include('documents/_delete_form.html.twig') }}
{% endblock %} #}

{% block add %}
    <a href=\"{{path('app_documents_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
 

<div style=\"  margin-top: 15px; margin-bottom:15px\" >
   <div style=\"text-align:left;\"> <a class=\"btn btn-success\"  href=\"{{ path('app_documents_index') }}\">Retour</a></div>
</div>

<div class=\"topic\">
    <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
        <div class=\"topic__caption\">
            <div class=\"topic__name mb-n5 pb-5\">
                {# <h5>{{document.Nom }}<h5> #}
            </div>
                
            <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"{{ path('app_documents_edit', {'id': document.id}) }}\">Modifier</a></div>
        </div>
    </div>

<div class=\"create\">
    
    <div class=\"create__section \">

        <div style=\" display: flex;flex-wrap: wrap;\" >

        <div  style=\"margin-top: 20px; width:35% \">

                <div class=\"topic__head\"   style=\"margin-bottom: -20px;\">
                    <div class=\"topic__caption\">
                        <div class=\"topic__name mb-5 pb-5\">
                            <h5>Informations concernant le document {{document.Reference}}<h5>
                        </div> 
                    </div>
                </div>
                
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Numero  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ document.NumeroEnregistrement }}\"readonly> 
                </div>
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Structure du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ document.Structure }}\"readonly> 
                </div>
            
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Mouvement du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ document.Mouvement }}\"readonly> 
                </div>
            
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\" \"> Objet du document  </label>
                    {#<input  type=\"text\" name=\"name\" value=\"{{ document.Objet }}\" readonly> #}
                    <textarea class=\"form-control\" rows=\"10\" cols=\"50\"  readonly>{{ document.Objet }}</textarea>
                </div>
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Date d'arrivée  du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"{{ document.DateArrivee ? document.DateArrivee|date('Y-m-d H:i:s') : '' }}\"> 
                </div>

                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Date du document  </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"{{ document.DateDocument ? document.DateDocument|date('Y-m-d H:i:s') : '' }}\"> 
                </div>

                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\"> Date d'insertion du document dans SAGA </label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"{{ document.DocumentAt ? document.DocumentAt|date('Y-m-d H:i:s') : '' }}\"> 
                </div>
            </div >

            <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
            
                <embed src=\"{{document.DocumentAt ? document.DocumentAt|date('Y/m/d') : ''}}/{{document.Chemin}}\" width=\"600\" height=\"1000\" type='application/pdf'>
                </embed>
            </div>

            {#<div style=\"text-align:right; margin-top:17px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>#} 
        </div>

    </div>
</div>

<div class=\"topic\" style=\"margin-top: 50px;\">

    {% if document.provenances|length > 0 %}

        <div class=\"create\">
            <div  >
                <label class=\"create__label\" for=\"title\"> <h6> Liste des provenances du document <h6></label>
                {% for provenance in document.provenances %}
                    <a href=\"#\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> {{ provenance.Structure}} avec le numéro {{ provenance.Numero}} le {{ provenance.DateEnregistrement ? provenance.DateEnregistrement|date('Y-m-d à h:m:s') : ''  }}  </a>  <br>
                {% else %}
                    <p >Pas de provenance pour ce document.</p>
                {% endfor %} 
                
            </div> 
                                                
        </div>
    {% endif %} 

    <div class=\"create\">
        <div  >
            <label class=\"create__label\" for=\"title\"> <h6> Liste des affectation du document. <h6></label>
            <a href=\"\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   {{ document.PosteOwner.Agent.Prenom }}  {{ document.PosteOwner.Agent.Nom }} à créer ce document le {{ document.DocumentAt ? document.DocumentAt|date('Y-m-d H:i:s') : '' }}   </a>  <br>
            {% for affectation in affectations %}
                <a href=\"{{ path('app_Affectations_show', {'id': affectation.id}) }}\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   {{ affectation.Envoyeur }}  à affecter ce document à   {{ affectation.Receveur }} le {{ affectation.DateAffectationAt ? affectation.DateAffectationAt|date('Y-m-d à h:m:s') : '' }}   </a>  <br>
            {% else %}
                <p >Pas d'affectation pour ce document.</p>
            {% endfor %} 
            
        </div>              
    </div>
</div>
{% if document.Reponse %}
    {% set reponses = [document.Reponse]  %}
{% elseif  document.documents|length > 0  %}
    {% set  reponses = document.documents %}
{% else %}
    {% set  reponses = [] %}          
{% endif %}
{% if reponses|length >0 %} 
    {% for reponse in reponses %}
        
        <div class=\"topic\">
            <div class=\"topic__head\"   style=\"margin-bottom: -50px;\">
                <div class=\"topic__caption\">
                    <div class=\"topic__name mb-n5 pb-5\">
                        {# <h5>{{document.Nom }}<h5> #}
                    </div>
                        
                    <div class=\"topic__date\"> <a class=\"btn btn-warning mt-5\"  href=\"{{ path('app_documents_edit', {'id': reponse.id}) }}\">Modifier</a></div>
                </div>
            </div>

        <div class=\"create\">
            
            <div class=\"create__section \">

                <div style=\" display: flex;flex-wrap: wrap;\" >

                <div  style=\"margin-top: 20px; width:35% \">

                        <div class=\"topic__head\"   style=\"margin-bottom: -20px;\">
                            <div>
                                <div class=\"topic__name mb-5 pb-5\">
                                    {% if document.Reponse %}
                                        <h5> Le document auquelle on a répondu</h5>
                                    {% elseif  document.documents|length > 0  %}
                                        <h5> Un document en réponse</h5>
                                    {% endif %}
                                </div> 
                                <div class=\"topic__name mb-5 pb-5\">
                                    <a href=\"{{ path('app_documents_show', {'id': reponse.id}) }}\"><h5>Informations concernant le document {{reponse.Reference}}</h5></a>
                                </div> 
                            </div>
                        </div>
                        
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Numero  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ reponse.NumeroEnregistrement }}\"readonly> 
                        </div>
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Structure du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ reponse.Structure }}\"readonly> 
                        </div>
                    
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Mouvement du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{ reponse.Mouvement }}\"readonly> 
                        </div>
                    
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\" \"> Objet du document  </label>
                            {#<input  type=\"text\" name=\"name\" value=\"{{ document.Objet }}\" readonly> #}
                            <textarea class=\"form-control\" rows=\"10\" cols=\"50\"  readonly>{{ reponse.Objet }}</textarea>
                        </div>
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Date d'arrivée  du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"{{ reponse.DateArrivee ? reponse.DateArrivee|date('Y-m-d H:i:s') : '' }}\"> 
                        </div>

                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Date du document  </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"{{ reponse.DateDocument ? reponse.DateDocument|date('Y-m-d H:i:s') : '' }}\"> 
                        </div>

                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\"> Date d'insertion du document dans SAGA </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" readonly value=\"{{ reponse.DocumentAt ? document.DocumentAt|date('Y-m-d H:i:s') : '' }}\"> 
                        </div>
                    </div >

                    <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                    
                        <embed src=\"{{reponse.DocumentAt ? reponse.DocumentAt|date('Y/m/d') : ''}}/{{reponse.Chemin}}\" width=\"600\" height=\"1000\" type='application/pdf'>
                        </embed>
                    </div>

                    {#<div style=\"text-align:right; margin-top:17px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>#} 
                </div>

            </div>
        </div>

        <div class=\"topic\" style=\"margin-top: 50px;\">

            {% if reponse.provenances|length > 0 %}

                <div class=\"create\">
                    <div  >
                        <label class=\"create__label\" for=\"title\"> <h6> Liste des provenances du document <h6></label>
                        {% for provenance in reponse.provenances %}
                            <a href=\"#\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i> {{ provenance.Structure}} avec le numéro {{ provenance.Numero}} le {{ provenance.DateEnregistrement ? provenance.DateEnregistrement|date('Y-m-d à h:m:s') : ''  }}  </a>  <br>
                        {% else %}
                            <p >Pas de provenance pour ce document.</p>
                        {% endfor %} 
                        
                    </div> 
                                                        
                </div>
            {% endif %} 

            <div class=\"create\">
                <div  >
                    <label class=\"create__label\" for=\"title\"> <h6> Liste des affectation du document. <h6></label>
                    <a href=\"\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   {{ reponse.PosteOwner.Agent.Prenom }}  {{ reponse.PosteOwner.Agent.Nom }} à créer ce document le {{ reponse.DocumentAt ? reponse.DocumentAt|date('Y-m-d H:i:s') : '' }}   </a>  <br>
                    {% for affectation in affectations %}
                        <a href=\"{{ path('app_Affectations_show', {'id': affectation.id}) }}\" style=\"margin-left:20px ;font-size:18px\" class=\"category\"><i class=\"bg-5dd39e\"></i>   {{ affectation.Envoyeur }}  à affecter ce document à   {{ affectation.Receveur }} le {{ affectation.DateAffectationAt ? affectation.DateAffectationAt|date('Y-m-d à h:m:s') : '' }}   </a>  <br>
                    {% else %}
                        <p >Pas d'affectation pour ce document.</p>
                    {% endfor %} 
                    
                </div>              
            </div>
        </div>
    {% endfor %}
{% endif %}
{% endblock %}
", "documents/show.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\documents\\show.html.twig");
    }
}
