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

/* documents/edit.html.twig */
class __TwigTemplate_64334b435d8ca7b069c3f47e07ae2030 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documents/edit.html.twig", 1);
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

        echo "Nouveau document";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 13
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 19
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 23
        echo "
<div class=\"row\">
    <div class=\"col-md-9\">
        <div style=\"display: inline-block;margin-top : 5px\"> <a class=\"btn btn-success\" style=\"margin-top:15px \"  href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\">Retour</a></div>
    </div>
    <div class=\"col-md-3\">
        ";
        // line 29
        if ((((isset($context["speciale"]) || array_key_exists("speciale", $context) ? $context["speciale"] : (function () { throw new RuntimeError('Variable "speciale" does not exist.', 29, $this->source); })()) || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "niveau", [], "any", false, false, false, 29) == "Admin")) && ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 29, $this->source); })()) == null))) {
            // line 30
            echo "
        <form action = \"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" method = \"get\">

            <div style=\"text-align:right; margin-top:20px;display: inline-block;\">
                <select  name = \"mouv\" id=\"selectTypeDoc\" style=\"text-align : ligth; border : 0.5px solid green\">  
                    ";
            // line 35
            if (((isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 35, $this->source); })()) == "ARRIVEE DIRECTE")) {
                echo "<option selected > ";
            } else {
                echo " <option> ";
            }
            echo " ARRIVEE DIRECTE</option>
                    ";
            // line 36
            if (((isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 36, $this->source); })()) == "ARRIVEE PAR SGM")) {
                echo "<option selected > ";
            } else {
                echo " <option> ";
            }
            echo "ARRIVEE PAR SGM</option>
                    ";
            // line 37
            if (((isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 37, $this->source); })()) == "ARRIVEE PAR CAB")) {
                echo "<option selected > ";
            } else {
                echo " <option> ";
            }
            echo "ARRIVEE PAR CAB</option>
                    ";
            // line 38
            if (((isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 38, $this->source); })()) == "ARRIVEE PAR AUTRE")) {
                echo "<option selected > ";
            } else {
                echo " <option> ";
            }
            echo "ARRIVEE PAR AUTRE</option>
                    ";
            // line 39
            if (((isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 39, $this->source); })()) == "DEPART")) {
                echo "<option selected > ";
            } else {
                echo " <option> ";
            }
            echo "DEPART</option>
                    ";
            // line 40
            if (((isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 40, $this->source); })()) == "INTERNE")) {
                echo "<option value = \"INTERNE\" selected > ";
            } else {
                echo " <option value = \"INTERNE\" > ";
            }
            echo "DOCUMENTS INTERNES</option>
                </select> 
                <div hidden>
                    <button type =\"submit\" name = \"submitmouv\" class=\"btn btn-success\" id=\"newDoc\"> 
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
                            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                        </svg> &nbsp; Nouveau document
                    </button>
                </div>
            </div>
        </form>
    ";
        }
        // line 53
        echo "
    </div>
</div>

 
                
<div style=\" display: flex;flex-wrap: wrap;\" >
            
    <div class=\"create\" style=\"width:45% ; height: 13%;\" >  
    
    
        ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_start');
        echo "
            ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 65, $this->source); })()), "mouvement", [], "any", false, false, false, 65) == "DEPART")) {
            // line 66
            echo "                <div class=\"create__section\" >
                ";
            // line 67
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 67, $this->source); })())) {
                // line 68
                echo "
                <div class=\"create__title\"><img src=";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/resume.5e7e6b1f.svg"), "html", null, true);
                echo ">Résumé de documents à répondre</div>
                
                <div style=\"margin-top:10px;margin-bottom:10px;\">Pas de documents associé à cette réponse</div>
                        
                <div style=\"margin-top:10px;margin-bottom:10px;\">
                    <p><b>Objet:</b> ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 74, $this->source); })()), "objet", [], "any", false, false, false, 74), "html", null, true);
                echo " </p>
                    <p> <b>Référence:</b> ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 75, $this->source); })()), "reference", [], "any", false, false, false, 75), "html", null, true);
                echo "  </p>
                    <p>  <b>Structure:</b> ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 76, $this->source); })()), "structure", [], "any", false, false, false, 76), "html", null, true);
                echo "</p>
                    
                </div>

                ";
            }
            // line 80
            echo " 
                

                </div>
            ";
        }
        // line 84
        echo " 
        
            <div class=\"create__section\" >
            
                <div class=\"create__title\"><img src=";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Modification d'un document</div>
                
            </div>


                <div>

                <div class=\"create__section\" style=\" display: flex;flex-wrap: wrap;\" >

                        <div  style=\"width: 70%; \">
                            ";
        // line 98
        if (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 98, $this->source); })()), "mouvement", [], "any", false, false, false, 98) == "DEPART") || (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 98, $this->source); })()), "mouvement", [], "any", false, false, false, 98) == "INTERNE"))) {
            // line 99
            echo "                                <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "Chemin", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "foo"], "label" => "Charger le document"]);
            echo "</label>
                            ";
        } else {
            // line 101
            echo "                                <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "Chemin", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "foo"], "label" => "Charger le courrier"]);
            echo "</label>
                            ";
        }
        // line 102
        echo "   
                            <div>";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "Chemin", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 103, $this->source); })()), "mouvement", [], "any", false, false, false, 103)]]);
        echo "</div> 
                        </div>

                    ";
        // line 106
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 106, $this->source); })()), "mouvement", [], "any", false, false, false, 106) == "INTERNE")) {
            // line 107
            echo "                    <div hidden style=\"width: 8.5%; margin-left:2.5%\">
                        
                            <label class=\"create__box\" for=\"title\" >";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "Sensibility", [], "any", false, false, false, 109), 'label', ["label" => "Public"]);
            echo "</label>
                                <div >";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "Sensibility", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "custom-checkbox", "value" => (isset($context["sensibility"]) || array_key_exists("sensibility", $context) ? $context["sensibility"] : (function () { throw new RuntimeError('Variable "sensibility" does not exist.', 110, $this->source); })())]]);
            echo "</div> 
                            </label>

                    </div>

                    ";
        } else {
            // line 116
            echo "
                        <div style=\"width: 8.5%; margin-left:2.5%; margin-top: 4%\">
                        
                            <label class=\"create__box\" for=\"title\" >";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "Sensibility", [], "any", false, false, false, 119), 'label', ["label" => "Public"]);
            echo "</label>
                                ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 120, $this->source); })()), "niveau", [], "any", false, false, false, 120) == "PUBLIC")) {
                // line 121
                echo "                                    <div >";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "Sensibility", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "custom-checkbox", "value" => true]]);
                echo "</div> 
                                ";
            } else {
                // line 123
                echo "                                    <div >";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "Sensibility", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "custom-checkbox", "value" => false]]);
                echo "</div>
                                ";
            }
            // line 125
            echo "                            </label>

                    </div>

                ";
        }
        // line 129
        echo "  

                ";
        // line 131
        echo "  

                </div>

                    ";
        // line 135
        echo "  

                    <div class=\"create__section\">

                    
                            ";
        // line 140
        if (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 140, $this->source); })()), "mouvement", [], "any", false, false, false, 140) == "DEPART") || (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 140, $this->source); })()), "mouvement", [], "any", false, false, false, 140) == "INTERNE"))) {
            // line 141
            echo "                                <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "TypeDocument", [], "any", false, false, false, 141), 'label', ["label" => "Type de document"]);
            echo "</label>
                            ";
        } else {
            // line 143
            echo "                                <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "TypeDocument", [], "any", false, false, false, 143), 'label', ["label" => "Type de courrier"]);
            echo "</label>
                            ";
        }
        // line 144
        echo " 
                                
                            <label class=\"custom-select\">          
                                <div>";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "TypeDocument", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
        echo "</div> 
                            </label>
    
                    </div>

                    ";
        // line 152
        echo "  
                
                
            </div>
                
            ";
        // line 157
        echo "  
            <div style=\" display: flex;flex-wrap: wrap;\">
                
                <div class=\"create__section\" style=\"width: 100%; font-size: 15px; \" >

                    ";
        // line 162
        if ((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 162, $this->source); })())) {
            // line 163
            echo "                        <div class=\"text-danger text-bold text--italic\">";
            echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "</div> <br>
                    ";
        }
        // line 164
        echo "   
                    ";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 165, $this->source); })()), "mouvement", [], "any", false, false, false, 165) != "DEPART")) {
            // line 166
            echo "                        <div class=\"text-success text-bold text--italic\">Lorsque que le document n'a pas de référence saisissez SR </div> 
                    ";
        }
        // line 167
        echo "                 
                </div>
            </div>

                <div style=\" display: flex;flex-wrap: wrap;\">
                    
                    <div class=\"create__section\" style=\"width: 45.5% \" >

                        ";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 175, $this->source); })()), "mouvement", [], "any", false, false, false, 175) == "INTERNE")) {
            // line 176
            echo "                            <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "Reference", [], "any", false, false, false, 176), 'label', ["label_attr" => ["class" => "foo"], "label" => "Référence du document"]);
            echo "</label>
                        ";
        } else {
            // line 178
            echo "                            <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "Reference", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "foo"], "label" => "Référence du courrier"]);
            echo "</label>
                        ";
        }
        // line 179
        echo "   
                            <div>";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "Reference", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 180, $this->source); })()), "Reference", [], "any", false, false, false, 180)]]);
        echo "</div> 
                    </div>

                    <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >

                        
                        <label class=\"create__label\" for=\"title\">";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "DateDocument", [], "any", false, false, false, 186), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date du courier"]);
        echo "</label>
    
                        <div style=\"width: 350px;\">";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "DateDocument", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "date_time1", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 188, $this->source); })()), "DateDocument", [], "any", false, false, false, 188)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 188, $this->source); })()), "DateDocument", [], "any", false, false, false, 188), "Y-m-d")) : (""))]]);
        echo "</div>                 

                </div>

            ";
        // line 192
        echo "  

            </div>


            ";
        // line 197
        echo "  

            <div style=\" display: flex;flex-wrap: wrap;\" >



                    ";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 203, $this->source); })()), "mouvement", [], "any", false, false, false, 203) == "INTERNE")) {
            // line 204
            echo "
                    <div class=\"create__section\"  style=\"width: 205% \" >
                        <label class=\"create__label\" for=\"title\">";
            // line 206
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "Objet", [], "any", false, false, false, 206), 'label', ["label_attr" => ["class" => "foo"], "label" => "Objet du document"]);
            echo "</label>
                    
                    ";
        } else {
            // line 209
            echo "                    ";
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 209, $this->source); })())) {
                // line 210
                echo "                        <div hidden class=\"create__section\"  style=\"width: 45.5% \" >
                    ";
            } else {
                // line 212
                echo "                        <div class=\"create__section\"  style=\"width: 45.5% \" >
                    ";
            }
            // line 214
            echo "                    <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "Objet", [], "any", false, false, false, 214), 'label', ["label_attr" => ["class" => "foo"], "label" => "Objet du courrier"]);
            echo "</label>
                    
                    ";
        }
        // line 216
        echo " 
                    ";
        // line 217
        if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 217, $this->source); })())) {
            // line 218
            echo "                        <div>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "Objet", [], "any", false, false, false, 218), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 218, $this->source); })()), "Objet", [], "any", false, false, false, 218), "readOnly" => true]]);
            echo "</div> 
                    ";
        } else {
            // line 220
            echo "                        <div>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "Objet", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 220, $this->source); })()), "Objet", [], "any", false, false, false, 220)]]);
            echo "</div> 
                    ";
        }
        // line 222
        echo "                            
                    </div>


                ";
        // line 226
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 226, $this->source); })()), "mouvement", [], "any", false, false, false, 226) == "DEPART")) {
            // line 227
            echo "                    ";
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 227, $this->source); })())) {
                // line 228
                echo "                        <div hidden class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                    ";
            } else {
                // line 230
                echo "                        <div class=\"create__section\"  style=\"width: 45.5% \" >
                    ";
            }
            // line 232
            echo "                    
                    <label class=\"create__label\" for=\"title\">";
            // line 233
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "Structure", [], "any", false, false, false, 233), 'label', ["label_attr" => ["class" => "foo"], "label" => "Destinataire"]);
            echo "</label>   
                    ";
            // line 234
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 234, $this->source); })())) {
                // line 235
                echo "                        <div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "Structure", [], "any", false, false, false, 235), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 235, $this->source); })()), "Structure", [], "any", false, false, false, 235), "readOnly" => true]]);
                echo "</div> 
                    ";
            } else {
                // line 236
                echo "    
                        <div>";
                // line 237
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "Structure", [], "any", false, false, false, 237), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 237, $this->source); })()), "Structure", [], "any", false, false, false, 237)]]);
                echo "</div> 
                    ";
            }
            // line 239
            echo "                </div> 

                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 241
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 241, $this->source); })()), "mouvement", [], "any", false, false, false, 241) == "INTERNE")) {
            // line 242
            echo "
                    <div hidden class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                        <label class=\"create__label\" for=\"title\">";
            // line 244
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "Structure", [], "any", false, false, false, 244), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure émettrice"]);
            echo "</label>   
                        <div>";
            // line 245
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "Structure", [], "any", false, false, false, 245), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Structure émettrice", "value" => "DGML", "readonly" => true]]);
            echo "</div> 
                    </div>

                    ";
        } else {
            // line 249
            echo "
                    <div class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                        <label class=\"create__label\" for=\"title\">";
            // line 251
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "Structure", [], "any", false, false, false, 251), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure émettrice/usager"]);
            echo "</label>   
                        <div>";
            // line 252
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "Structure", [], "any", false, false, false, 252), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 252, $this->source); })()), "Structure", [], "any", false, false, false, 252)]]);
            echo "</div> 
                    </div>

                ";
        }
        // line 255
        echo " 


                ";
        // line 269
        echo "  



            </div>

        ";
        // line 275
        echo "  


        ";
        // line 278
        echo "    

            <div style=\" display: flex;flex-wrap: wrap;\" >

                    ";
        // line 282
        echo "  
                    ";
        // line 283
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 283, $this->source); })()), "mouvement", [], "any", false, false, false, 283) == "INTERNE")) {
            // line 284
            echo "
                    <div hidden class=\"create__section\" style=\"width: 45.5%\"  >

                                <label class=\"create__label\" for=\"title\">";
            // line 287
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 287), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro d'enregistrement"]);
            echo "</label>
                    
                                <div>";
            // line 289
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 289), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 289, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 289)]]);
            echo "</div> 

                    </div>


                    ";
        } else {
            // line 295
            echo "
                    <div class=\"create__section\" style=\"width: 45.5%\"  >

                            <label class=\"create__label\" for=\"title\">";
            // line 298
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 298), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro d'enregistrement"]);
            echo "</label>
                    
                        <div>";
            // line 300
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 300), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 300, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 300)]]);
            echo "</div> 
                
                    </div>


                ";
        }
        // line 305
        echo "  

                

                

                    ";
        // line 311
        echo "  

                    ";
        // line 313
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 313, $this->source); })()), "mouvement", [], "any", false, false, false, 313) == "DEPART")) {
            // line 314
            echo "                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                        ";
            // line 315
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 315, $this->source); })())) {
                // line 316
                echo "                            <label class=\"create__label\" for=\"title\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "DateArrivee", [], "any", false, false, false, 316), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de la réponse"]);
                echo "</label>
                        ";
            } else {
                // line 318
                echo "                            <label class=\"create__label\" for=\"title\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "DateArrivee", [], "any", false, false, false, 318), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de départ"]);
                echo "</label>
                        ";
            }
            // line 320
            echo "                    
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 321
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 321, $this->source); })()), "mouvement", [], "any", false, false, false, 321) == "INTERNE")) {
            // line 322
            echo "                        <div class=\"create__section\" style=\"width: 49.5%; \" >
                        
                        <label class=\"create__label\" for=\"title\">";
            // line 324
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "DateArrivee", [], "any", false, false, false, 324), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement du document"]);
            echo "</label>
                    
                    ";
        } else {
            // line 327
            echo "                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                        
                        <label class=\"create__label\" for=\"title\">";
            // line 329
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "DateArrivee", [], "any", false, false, false, 329), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                    
                    ";
        }
        // line 331
        echo " 

                    <div style=\"width: 350px;\">";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "DateArrivee", [], "any", false, false, false, 333), 'widget', ["attr" => ["class" => "date_time1", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 333, $this->source); })()), "DateArrivee", [], "any", false, false, false, 333)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 333, $this->source); })()), "DateArrivee", [], "any", false, false, false, 333), "Y-m-d")) : (""))]]);
        echo "</div> 
                
                </div>

            </div>

            ";
        // line 339
        echo "  

        ";
        // line 341
        echo " 
        ";
        // line 342
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 342, $this->source); })()), "mouvement", [], "any", false, false, false, 342) == "DEPART")) {
            // line 343
            echo "            <div class=\"create__section\">
                
                <label class=\"create__label\" for=\"title\">";
            // line 345
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "Initiateur", [], "any", false, false, false, 345), 'label', ["label" => "Initié par :"]);
            echo "</label>
                                                        
                <label class=\"custom-select\">     

                    <div>";
            // line 349
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "Initiateur", [], "any", false, false, false, 349), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
            echo "</div> 
                
                </label>

            </div>

            <div class=\"create__section\">
                
                <label class=\"create__label\" for=\"title\">";
            // line 357
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "Observation", [], "any", false, false, false, 357), 'label', ["label" => "Observation :"]);
            echo "</label>                                                                       
                <div>";
            // line 358
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "Observation", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 358, $this->source); })()), "Observation", [], "any", false, false, false, 358)]]);
            echo "</div> 
            </div>
        ";
        }
        // line 361
        echo "
        ";
        // line 363
        echo "
        
            ";
        // line 365
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 365, $this->source); })()), "mouvement", [], "any", false, false, false, 365) == "ARRIVEE PAR SGM")) {
            // line 366
            echo "                <div  >
                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">";
            // line 370
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "SGM", [], "any", false, false, false, 370), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                            <div>";
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "SGM", [], "any", false, false, false, 371), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "SGM", "readonly" => true]]);
            echo "</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 374
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 374), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                            <div>";
            // line 375
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 375), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 375, $this->source); })()), "Numero", [], "any", false, false, false, 375)]]);
            echo "</div> 
                        </div>
                    </div>
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 379
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 379), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                            <div>";
            // line 380
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 380), 'widget', ["attr" => ["class" => "date_time2", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 380, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 380)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 380, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 380), "Y-m-d")) : (""))]]);
            echo "</div> 
                        </div>
                    
                </div>


            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 386
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 386, $this->source); })()), "mouvement", [], "any", false, false, false, 386) == "ARRIVEE PAR CAB")) {
            // line 387
            echo "                <div  >
                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \"  >
                            <label class=\"create__label\" for=\"title\">";
            // line 391
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "SGM", [], "any", false, false, false, 391), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                            <div>";
            // line 392
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), "SGM", [], "any", false, false, false, 392), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "SGM", "readonly" => true]]);
            echo "</div> 
                        </div>

                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 396
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 396), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                            <div>";
            // line 397
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 397), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 397, $this->source); })()), "Numero", [], "any", false, false, false, 397)]]);
            echo "</div> 
                        </div>
                        </div>

                    <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">";
            // line 404
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 404), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                            <div>";
            // line 405
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 405), 'widget', ["attr" => ["class" => "date_time2", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 405, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 405)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 405, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 405), "Y-m-d")) : (""))]]);
            echo "</div> 
                        </div>


                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 410
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "CAB", [], "any", false, false, false, 410), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                            <div>";
            // line 411
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "CAB", [], "any", false, false, false, 411), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "CAB", "readonly" => true]]);
            echo "</div> 
                        </div>
                    </div>

                    <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">";
            // line 418
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 418), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                            <div>";
            // line 419
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 419), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["CAB"]) || array_key_exists("CAB", $context) ? $context["CAB"] : (function () { throw new RuntimeError('Variable "CAB" does not exist.', 419, $this->source); })()), "Numero", [], "any", false, false, false, 419)]]);
            echo "</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 422
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 422), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                            <div>";
            // line 423
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 423), 'widget', ["attr" => ["class" => "date_time2", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["CAB"]) || array_key_exists("CAB", $context) ? $context["CAB"] : (function () { throw new RuntimeError('Variable "CAB" does not exist.', 423, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 423)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CAB"]) || array_key_exists("CAB", $context) ? $context["CAB"] : (function () { throw new RuntimeError('Variable "CAB" does not exist.', 423, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 423), "Y-m-d")) : (""))]]);
            echo "</div> 
                        </div>
                    </div>

                </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 428
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 428, $this->source); })()), "mouvement", [], "any", false, false, false, 428) == "ARRIVEE PAR AUTRE")) {
            // line 429
            echo "                <div >
                    <div style=\" display: flex;flex-wrap: wrap;\" >
                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">";
            // line 432
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "SGM", [], "any", false, false, false, 432), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                            <div>";
            // line 433
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), "SGM", [], "any", false, false, false, 433), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "SGM", "readonly" => true]]);
            echo "</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 436
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 436, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 436), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                            <div>";
            // line 437
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 437, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 437), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 437, $this->source); })()), "Numero", [], "any", false, false, false, 437)]]);
            echo "</div> 
                        </div>
                    </div>
                    
                    <div style=\" display: flex;flex-wrap: wrap;\" >
                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">";
            // line 443
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 443), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                            <div>";
            // line 444
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 444), 'widget', ["attr" => ["class" => "date_time2", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 444, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 444)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["SGM"]) || array_key_exists("SGM", $context) ? $context["SGM"] : (function () { throw new RuntimeError('Variable "SGM" does not exist.', 444, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 444), "Y-m-d")) : (""))]]);
            echo "</div> 
                        </div> 
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 447
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "CAB", [], "any", false, false, false, 447), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                            <div>";
            // line 448
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "CAB", [], "any", false, false, false, 448), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "CAB", "readonly" => true]]);
            echo "</div> 
                        </div>
                    </div>

                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">";
            // line 455
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 455, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 455), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                            <div>";
            // line 456
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 456, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 456), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["CAB"]) || array_key_exists("CAB", $context) ? $context["CAB"] : (function () { throw new RuntimeError('Variable "CAB" does not exist.', 456, $this->source); })()), "Numero", [], "any", false, false, false, 456)]]);
            echo "</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\">
                            <label class=\"create__label\" for=\"title\">";
            // line 459
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 459), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'arrivée"]);
            echo "</label>
                            <div>";
            // line 460
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 460), 'widget', ["attr" => ["class" => "date_time2", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["CAB"]) || array_key_exists("CAB", $context) ? $context["CAB"] : (function () { throw new RuntimeError('Variable "CAB" does not exist.', 460, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 460)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CAB"]) || array_key_exists("CAB", $context) ? $context["CAB"] : (function () { throw new RuntimeError('Variable "CAB" does not exist.', 460, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 460), "Y-m-d")) : (""))]]);
            echo "</div> 
                        </div>
                    </div> 

                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">";
            // line 467
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 467, $this->source); })()), "AUTRE", [], "any", false, false, false, 467), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                            <div>";
            // line 468
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "AUTRE", [], "any", false, false, false, 468), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["AUTRE"]) || array_key_exists("AUTRE", $context) ? $context["AUTRE"] : (function () { throw new RuntimeError('Variable "AUTRE" does not exist.', 468, $this->source); })()), "Structure", [], "any", false, false, false, 468)]]);
            echo "</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 471
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 471, $this->source); })()), "NumeroEnregistrementAUTRE", [], "any", false, false, false, 471), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro d'enrégistrement"]);
            echo "</label>
                            <div>";
            // line 472
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 472, $this->source); })()), "NumeroEnregistrementAUTRE", [], "any", false, false, false, 472), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["AUTRE"]) || array_key_exists("AUTRE", $context) ? $context["AUTRE"] : (function () { throw new RuntimeError('Variable "AUTRE" does not exist.', 472, $this->source); })()), "Numero", [], "any", false, false, false, 472)]]);
            echo "</div> 
                        </div>
                    </div>
                    
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">";
            // line 477
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 477, $this->source); })()), "DateEnregistrementAUTRE", [], "any", false, false, false, 477), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                            <div>";
            // line 478
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "DateEnregistrementAUTRE", [], "any", false, false, false, 478), 'widget', ["attr" => ["class" => "date_time2", "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["AUTRE"]) || array_key_exists("AUTRE", $context) ? $context["AUTRE"] : (function () { throw new RuntimeError('Variable "AUTRE" does not exist.', 478, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 478)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["AUTRE"]) || array_key_exists("AUTRE", $context) ? $context["AUTRE"] : (function () { throw new RuntimeError('Variable "AUTRE" does not exist.', 478, $this->source); })()), "DateEnregistrement", [], "any", false, false, false, 478), "Y-m-d")) : (""))]]);
            echo "</div> 
                        </div>

                </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 482
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 482, $this->source); })()), "mouvement", [], "any", false, false, false, 482) == "DEPART")) {
            // line 483
            echo "
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 484
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 484, $this->source); })()), "mouvement", [], "any", false, false, false, 484) == "INTERNE")) {
            // line 485
            echo "
            ";
        }
        // line 487
        echo "                
            <div class=\"create__footer \"> 
                <div  >
                    
                    <div class=\"create__section\" style=\"width: 20%;display: block; margin-left: 110%; margin-right: auto \">
                        <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 492
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 492, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                    </div>
                    </div>
            </div>
        
        <style>
                    .date_time{  
                        padding: 1px;  
                        border: solid 1px #e9ecee;
                            border-radius: 0;
                        background-color: #ECECEC;
                            color: #181617;
                        -webkit-box-shadow: none;
                            -moz-box-shadow: none;
                        box-shadow: none;
                            display: block;
                            width: 132%; 
                    }

                        .date_time1{  
                        padding: 1px;  
                        border: solid 1px #e9ecee;
                            border-radius: 0;
                        background-color: #ECECEC;
                            color: #181617;
                        -webkit-box-shadow: none;
                            -moz-box-shadow: none;
                        box-shadow: none;
                            display: block;
                            width: 65%; 
                            padding:5px;
                    }

                    .date_time2{  
                        padding: 1px;  
                        border: solid 1px #e9ecee;
                            border-radius: 0;
                        background-color: #ECECEC;
                            color: #181617;
                        -webkit-box-shadow: none;
                            -moz-box-shadow: none;
                        box-shadow: none;
                            display: block;
                            width: 100%; 
                            padding:5px;
                    }
                
                </style>
                
        
    ";
        // line 542
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 542, $this->source); })()), 'form_end');
        echo " 
</div>

    <div class=\"create\" style=\"width:54% ;margin-left:1%;overflow : auto; text-align : center\" >

    <div style=\" font-size:16px;font-weight: 600;margin-bottom:5px; color : #918c8c\">  Aperçu du document chargé  

        <embed src=\"../";
        // line 549
        ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 549, $this->source); })()), "DocumentAt", [], "any", false, false, false, 549)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 549, $this->source); })()), "DocumentAt", [], "any", false, false, false, 549), "Y/m/d"), "html", null, true))) : (print ("")));
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 549, $this->source); })()), "Chemin", [], "any", false, false, false, 549), "html", null, true);
        echo "\" width=\"600\" height=\"700\" type='application/pdf'>
        </embed>
    </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 557
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 558
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    //\$('#selectTypeDoc').select2()

    \$('#selectTypeDoc').on('change',function(){
        \$('#newDoc').trigger(\"click\")
    })

     


    \$(document).ready(function() {
        //console.log(\$(\"#documents_Chemin\"))
        \$('#selectTypeDoc').trigger(\"click\")   

          //Apercu desc pdf
     // Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window['pdfjs-dist/build/pdf'];
// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

// Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window[\"pdfjs-dist/build/pdf\"];
// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc =
  \"https://mozilla.github.io/pdf.js/build/pdf.worker.js\";

\$(\"#documents_Chemin\").on(\"change\", function (e) {
  var file = e.target.files[0];
  if (file.type == \"application/pdf\") {
    var fileReader = new FileReader();
    fileReader.onload = function () {
      var pdfData = new Uint8Array(this.result);
      // Using DocumentInitParameters object to load binary data.
      var loadingTask = pdfjsLib.getDocument({ data: pdfData });
      loadingTask.promise.then(
        function (pdf) {
          console.log(\"PDF loaded\");

          // Fetch the first page
          var pageNumber = 1;
          pdf.getPage(pageNumber).then(function (page) {
            console.log(\"Page loaded\");

            var scale = 0.95;
            var viewport = page.getViewport({ scale: scale });

            // Prepare canvas using PDF page dimensions
            var canvas = \$(\"#pdfViewer\")[0];
            var context = canvas.getContext(\"2d\");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
              canvasContext: context,
              viewport: viewport
            };
            var renderTask = page.render(renderContext);
            renderTask.promise.then(function () {
              console.log(\"Page rendered\");
            });
          });
        },
        function (reason) {
          // PDF loading error
          console.error(reason);
        }
      );
    };
    fileReader.readAsArrayBuffer(file);
  }
});


 
     });


    
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "documents/edit.html.twig";
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
        return array (  1143 => 558,  1133 => 557,  1114 => 549,  1104 => 542,  1051 => 492,  1044 => 487,  1040 => 485,  1038 => 484,  1035 => 483,  1033 => 482,  1026 => 478,  1022 => 477,  1014 => 472,  1010 => 471,  1004 => 468,  1000 => 467,  990 => 460,  986 => 459,  980 => 456,  976 => 455,  966 => 448,  962 => 447,  956 => 444,  952 => 443,  943 => 437,  939 => 436,  933 => 433,  929 => 432,  924 => 429,  922 => 428,  914 => 423,  910 => 422,  904 => 419,  900 => 418,  890 => 411,  886 => 410,  878 => 405,  874 => 404,  864 => 397,  860 => 396,  853 => 392,  849 => 391,  843 => 387,  841 => 386,  832 => 380,  828 => 379,  821 => 375,  817 => 374,  811 => 371,  807 => 370,  801 => 366,  799 => 365,  795 => 363,  792 => 361,  786 => 358,  782 => 357,  771 => 349,  764 => 345,  760 => 343,  758 => 342,  755 => 341,  751 => 339,  742 => 333,  738 => 331,  732 => 329,  728 => 327,  722 => 324,  718 => 322,  716 => 321,  713 => 320,  707 => 318,  701 => 316,  699 => 315,  696 => 314,  694 => 313,  690 => 311,  682 => 305,  673 => 300,  668 => 298,  663 => 295,  654 => 289,  649 => 287,  644 => 284,  642 => 283,  639 => 282,  633 => 278,  628 => 275,  620 => 269,  615 => 255,  608 => 252,  604 => 251,  600 => 249,  593 => 245,  589 => 244,  585 => 242,  583 => 241,  579 => 239,  574 => 237,  571 => 236,  565 => 235,  563 => 234,  559 => 233,  556 => 232,  552 => 230,  548 => 228,  545 => 227,  543 => 226,  537 => 222,  531 => 220,  525 => 218,  523 => 217,  520 => 216,  513 => 214,  509 => 212,  505 => 210,  502 => 209,  496 => 206,  492 => 204,  490 => 203,  482 => 197,  475 => 192,  468 => 188,  463 => 186,  454 => 180,  451 => 179,  445 => 178,  439 => 176,  437 => 175,  427 => 167,  423 => 166,  421 => 165,  418 => 164,  412 => 163,  410 => 162,  403 => 157,  396 => 152,  388 => 147,  383 => 144,  377 => 143,  371 => 141,  369 => 140,  362 => 135,  356 => 131,  352 => 129,  345 => 125,  339 => 123,  333 => 121,  331 => 120,  327 => 119,  322 => 116,  313 => 110,  309 => 109,  305 => 107,  303 => 106,  297 => 103,  294 => 102,  288 => 101,  282 => 99,  280 => 98,  267 => 88,  261 => 84,  254 => 80,  246 => 76,  242 => 75,  238 => 74,  230 => 69,  227 => 68,  225 => 67,  222 => 66,  220 => 65,  216 => 64,  203 => 53,  183 => 40,  175 => 39,  167 => 38,  159 => 37,  151 => 36,  143 => 35,  136 => 31,  133 => 30,  131 => 29,  125 => 26,  120 => 23,  110 => 22,  99 => 19,  90 => 13,  80 => 12,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau document{% endblock %}

{# {% block main %}
    <h1>Create new Documents</h1>

    {{ include('documents/_form.html.twig') }}

    <a href=\"{{ path('app_documents_index') }}\">back to list</a>
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

<div class=\"row\">
    <div class=\"col-md-9\">
        <div style=\"display: inline-block;margin-top : 5px\"> <a class=\"btn btn-success\" style=\"margin-top:15px \"  href=\"{{ path('app_documents_index') }}\">Retour</a></div>
    </div>
    <div class=\"col-md-3\">
        {% if (speciale  or user.niveau == \"Admin\") and Reponse == null %}

        <form action = \"{{path('app_documents_edit',{'id' : document.id} )}}\" method = \"get\">

            <div style=\"text-align:right; margin-top:20px;display: inline-block;\">
                <select  name = \"mouv\" id=\"selectTypeDoc\" style=\"text-align : ligth; border : 0.5px solid green\">  
                    {% if mouvement == \"ARRIVEE DIRECTE\" %}<option selected > {% else %} <option> {% endif %} ARRIVEE DIRECTE</option>
                    {% if mouvement == \"ARRIVEE PAR SGM\" %}<option selected > {% else %} <option> {% endif %}ARRIVEE PAR SGM</option>
                    {% if mouvement == \"ARRIVEE PAR CAB\" %}<option selected > {% else %} <option> {% endif %}ARRIVEE PAR CAB</option>
                    {% if mouvement == \"ARRIVEE PAR AUTRE\" %}<option selected > {% else %} <option> {% endif %}ARRIVEE PAR AUTRE</option>
                    {% if mouvement == \"DEPART\" %}<option selected > {% else %} <option> {% endif %}DEPART</option>
                    {% if mouvement == \"INTERNE\" %}<option value = \"INTERNE\" selected > {% else %} <option value = \"INTERNE\" > {% endif %}DOCUMENTS INTERNES</option>
                </select> 
                <div hidden>
                    <button type =\"submit\" name = \"submitmouv\" class=\"btn btn-success\" id=\"newDoc\"> 
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
                            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                        </svg> &nbsp; Nouveau document
                    </button>
                </div>
            </div>
        </form>
    {% endif %}

    </div>
</div>

 
                
<div style=\" display: flex;flex-wrap: wrap;\" >
            
    <div class=\"create\" style=\"width:45% ; height: 13%;\" >  
    
    
        {{ form_start(form) }}
            {% if document.mouvement == \"DEPART\" %}
                <div class=\"create__section\" >
                {% if Reponse %}

                <div class=\"create__title\"><img src={{asset('build/images/icons/resume.5e7e6b1f.svg')}}>Résumé de documents à répondre</div>
                
                <div style=\"margin-top:10px;margin-bottom:10px;\">Pas de documents associé à cette réponse</div>
                        
                <div style=\"margin-top:10px;margin-bottom:10px;\">
                    <p><b>Objet:</b> {{Reponse.objet}} </p>
                    <p> <b>Référence:</b> {{Reponse.reference}}  </p>
                    <p>  <b>Structure:</b> {{Reponse.structure}}</p>
                    
                </div>

                {% endif %} 
                

                </div>
            {% endif %} 
        
            <div class=\"create__section\" >
            
                <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Modification d'un document</div>
                
            </div>


                <div>

                <div class=\"create__section\" style=\" display: flex;flex-wrap: wrap;\" >

                        <div  style=\"width: 70%; \">
                            {% if document.mouvement == \"DEPART\"  or document.mouvement == \"INTERNE\"  %}
                                <label class=\"create__label\" for=\"title\">{{ form_label(form.Chemin, 'Charger le document', {'label_attr': {'class': 'foo'}}) }}</label>
                            {% else %}
                                <label class=\"create__label\" for=\"title\">{{ form_label(form.Chemin, 'Charger le courrier', {'label_attr': {'class': 'foo'}}) }}</label>
                            {% endif %}   
                            <div>{{ form_widget(form.Chemin, {'attr': {'class': 'form-control', 'value': document.mouvement}}) }}</div> 
                        </div>

                    {% if  document.mouvement == \"INTERNE\"    %}
                    <div hidden style=\"width: 8.5%; margin-left:2.5%\">
                        
                            <label class=\"create__box\" for=\"title\" >{{ form_label(form.Sensibility, \"Public\") }}</label>
                                <div >{{ form_widget(form.Sensibility, {'attr': {'class': 'custom-checkbox', 'value' : sensibility }}) }}</div> 
                            </label>

                    </div>

                    {% else %}

                        <div style=\"width: 8.5%; margin-left:2.5%; margin-top: 4%\">
                        
                            <label class=\"create__box\" for=\"title\" >{{ form_label(form.Sensibility, \"Public\") }}</label>
                                {% if document.niveau == \"PUBLIC\" %}
                                    <div >{{ form_widget(form.Sensibility, {'attr': {'class': 'custom-checkbox', 'value': true }}) }}</div> 
                                {% else %}
                                    <div >{{ form_widget(form.Sensibility, {'attr': {'class': 'custom-checkbox', 'value': false }}) }}</div>
                                {% endif %}
                            </label>

                    </div>

                {% endif %}  

                {# FIN MASQUER LE PUBLIC  #}  

                </div>

                    {# TYPE DE DOCUMENT  #}  

                    <div class=\"create__section\">

                    
                            {% if document.mouvement == \"DEPART\"  or document.mouvement == \"INTERNE\"  %}
                                <label class=\"create__label\" for=\"title\">{{ form_label(form.TypeDocument, \"Type de document\") }}</label>
                            {% else %}
                                <label class=\"create__label\" for=\"title\">{{ form_label(form.TypeDocument, \"Type de courrier\") }}</label>
                            {% endif %} 
                                
                            <label class=\"custom-select\">          
                                <div>{{ form_widget(form.TypeDocument, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 
                            </label>
    
                    </div>

                    {# FIN TYPE DE DOCUMENT  #}  
                
                
            </div>
                
            {# LIGNE REFERENCE  #}  
            <div style=\" display: flex;flex-wrap: wrap;\">
                
                <div class=\"create__section\" style=\"width: 100%; font-size: 15px; \" >

                    {% if notification  %}
                        <div class=\"text-danger text-bold text--italic\">{{notification}}</div> <br>
                    {% endif %}   
                    {% if document.mouvement != \"DEPART\"  %}
                        <div class=\"text-success text-bold text--italic\">Lorsque que le document n'a pas de référence saisissez SR </div> 
                    {% endif %}                 
                </div>
            </div>

                <div style=\" display: flex;flex-wrap: wrap;\">
                    
                    <div class=\"create__section\" style=\"width: 45.5% \" >

                        {% if  document.mouvement == \"INTERNE\"  %}
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Reference, 'Référence du document', {'label_attr': {'class': 'foo'}}) }}</label>
                        {% else %}
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Reference, 'Référence du courrier', {'label_attr': {'class': 'foo'}}) }}</label>
                        {% endif %}   
                            <div>{{ form_widget(form.Reference, {'attr': {'class': 'form-control', 'value': document.Reference }}) }}</div> 
                    </div>

                    <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >

                        
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.DateDocument, \"Date du courier\", {'label_attr': {'class': 'foo'}}) }}</label>
    
                        <div style=\"width: 350px;\">{{ form_widget(form.DateDocument, {'attr': {'class': 'date_time1', 'value': document.DateDocument ? document.DateDocument|date('Y-m-d') : ''  }}) }}</div>                 

                </div>

            {# FIN lIGNE REFERENCE #}  

            </div>


            {#  lIGNE OBJET ET STRUCTURE EMMETRICE #}  

            <div style=\" display: flex;flex-wrap: wrap;\" >



                    {% if  document.mouvement == \"INTERNE\"  %}

                    <div class=\"create__section\"  style=\"width: 205% \" >
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Objet, 'Objet du document', {'label_attr': {'class': 'foo'}}) }}</label>
                    
                    {% else %}
                    {% if Reponse %}
                        <div hidden class=\"create__section\"  style=\"width: 45.5% \" >
                    {% else %}
                        <div class=\"create__section\"  style=\"width: 45.5% \" >
                    {% endif %}
                    <label class=\"create__label\" for=\"title\">{{ form_label(form.Objet, 'Objet du courrier', {'label_attr': {'class': 'foo'}}) }}</label>
                    
                    {% endif %} 
                    {% if Reponse  %}
                        <div>{{ form_widget(form.Objet, {'attr': {'class': 'form-control','value': document.Objet, 'readOnly': true }}) }}</div> 
                    {% else %}
                        <div>{{ form_widget(form.Objet, {'attr': {'class': 'form-control', 'value': document.Objet }}) }}</div> 
                    {% endif %}
                            
                    </div>


                {% if document.mouvement == \"DEPART\"  %}
                    {% if Reponse %}
                        <div hidden class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                    {% else %}
                        <div class=\"create__section\"  style=\"width: 45.5% \" >
                    {% endif %}
                    
                    <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Destinataire', {'label_attr': {'class': 'foo'}}) }}</label>   
                    {% if Reponse  %}
                        <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','value': document.Structure, 'readOnly': true }}) }}</div> 
                    {% else %}    
                        <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control', 'value': document.Structure  }}) }}</div> 
                    {% endif %}
                </div> 

                    {% elseif  document.mouvement == \"INTERNE\"  %}

                    <div hidden class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Structure émettrice', {'label_attr': {'class': 'foo'}}) }}</label>   
                        <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','placeholder': \"Structure émettrice\", 'value': 'DGML', 'readonly': true  }}) }}</div> 
                    </div>

                    {% else %}

                    <div class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Structure émettrice/usager', {'label_attr': {'class': 'foo'}}) }}</label>   
                        <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control', 'value': document.Structure }}) }}</div> 
                    </div>

                {% endif %} 


                {#  <div class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                    {% if  document.mouvement == \"INTERNE\"  %}
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Structure émettrice', {'label_attr': {'class': 'foo'}}) }}</label>   
                        <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','placeholder': \"Structure émettrice\", 'value': 'DGML', 'readonly': true  }}) }}</div> 
                    {% elseif document.mouvement == \"DEPART\"  %}
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Destinataire', {'label_attr': {'class': 'foo'}}) }}</label>   
                        <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','placeholder': \"Destinataire\"  }}) }}</div> 
                    {% else %}
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Structure émettrice/usager', {'label_attr': {'class': 'foo'}}) }}</label>   
                        <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','placeholder': \"Structure émettrice/usager\" }}) }}</div> 
                    {% endif %}                        
                </div>#}  



            </div>

        {# FIN lIGNE REFERENCE #}  


        {# NUMERO ET DATE DENREGISTREMENT #}    

            <div style=\" display: flex;flex-wrap: wrap;\" >

                    {#  NUMERO DENREGISTREMENT #}  
                    {% if  document.mouvement == \"INTERNE\"    %}

                    <div hidden class=\"create__section\" style=\"width: 45.5%\"  >

                                <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrement, \"Numéro d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                    
                                <div>{{ form_widget(form.NumeroEnregistrement, {'attr': {'class': 'form-control', 'value': document.NumeroEnregistrement }}) }}</div> 

                    </div>


                    {% else %}

                    <div class=\"create__section\" style=\"width: 45.5%\"  >

                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrement, \"Numéro d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                    
                        <div>{{ form_widget(form.NumeroEnregistrement, {'attr': {'class': 'form-control', 'value': document.NumeroEnregistrement}}) }}</div> 
                
                    </div>


                {% endif %}  

                

                

                    {#  DATE DENREGISTREMENT #}  

                    {% if document.mouvement == \"DEPART\"  %}
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                        {% if Reponse %}
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date de la réponse\", {'label_attr': {'class': 'foo'}}) }}</label>
                        {% else %}
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date de départ\", {'label_attr': {'class': 'foo'}}) }}</label>
                        {% endif %}
                    
                    {% elseif document.mouvement == \"INTERNE\"  %}
                        <div class=\"create__section\" style=\"width: 49.5%; \" >
                        
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date d'enregistrement du document\", {'label_attr': {'class': 'foo'}}) }}</label>
                    
                    {% else %}
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                        
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                    
                    {% endif %} 

                    <div style=\"width: 350px;\">{{ form_widget(form.DateArrivee, {'attr': {'class': 'date_time1', 'value': document.DateArrivee ? document.DateArrivee|date('Y-m-d') : ''  }}) }}</div> 
                
                </div>

            </div>

            {# FIN NUMERO ET DATE DENREGISTREMENT #}  

        {# DEBUT DU POSTE INITIATEUR #} 
        {% if document.mouvement == \"DEPART\"  %}
            <div class=\"create__section\">
                
                <label class=\"create__label\" for=\"title\">{{ form_label(form.Initiateur, \"Initié par :\") }}</label>
                                                        
                <label class=\"custom-select\">     

                    <div>{{ form_widget(form.Initiateur, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 
                
                </label>

            </div>

            <div class=\"create__section\">
                
                <label class=\"create__label\" for=\"title\">{{ form_label(form.Observation, \"Observation :\") }}</label>                                                                       
                <div>{{ form_widget(form.Observation, {'attr': {'class': 'form-control','value': document.Observation  }}) }}</div> 
            </div>
        {% endif %}

        {# FIN DU POSTE INITIATEUR #}

        
            {% if document.mouvement == \"ARRIVEE PAR SGM\" %}
                <div  >
                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.SGM, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.SGM, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'SGM', 'readonly': true }}) }}</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementSGM, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.NumeroEnregistrementSGM, {'attr': {'class': 'form-control','value': SGM.Numero  }}) }}</div> 
                        </div>
                    </div>
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementSGM, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.DateEnregistrementSGM, {'attr': {'class': 'date_time2', 'value': SGM.DateEnregistrement ? SGM.DateEnregistrement|date('Y-m-d') : '' }}) }}</div> 
                        </div>
                    
                </div>


            {% elseif  document.mouvement == \"ARRIVEE PAR CAB\" %}
                <div  >
                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \"  >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.SGM, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.SGM, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'SGM', 'readonly': true }}) }}</div> 
                        </div>

                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementSGM, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.NumeroEnregistrementSGM, {'attr': {'class': 'form-control','value': SGM.Numero }}) }}</div> 
                        </div>
                        </div>

                    <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementSGM, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.DateEnregistrementSGM, {'attr': {'class': 'date_time2', 'value': SGM.DateEnregistrement ? SGM.DateEnregistrement|date('Y-m-d') : '' }}) }}</div> 
                        </div>


                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.CAB, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.CAB, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'CAB', 'readonly': true }}) }}</div> 
                        </div>
                    </div>

                    <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementCAB, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.NumeroEnregistrementCAB, {'attr': {'class': 'form-control','value': CAB.Numero  }}) }}</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementCAB, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.DateEnregistrementCAB, {'attr': {'class': 'date_time2', 'value': CAB.DateEnregistrement ? CAB.DateEnregistrement|date('Y-m-d') : '' }}) }}</div> 
                        </div>
                    </div>

                </div>
            {% elseif  document.mouvement == \"ARRIVEE PAR AUTRE\" %}
                <div >
                    <div style=\" display: flex;flex-wrap: wrap;\" >
                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.SGM, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.SGM, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'SGM', 'readonly': true }}) }}</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementSGM, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.NumeroEnregistrementSGM, {'attr': {'class': 'form-control','value': SGM.Numero  }}) }}</div> 
                        </div>
                    </div>
                    
                    <div style=\" display: flex;flex-wrap: wrap;\" >
                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementSGM, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.DateEnregistrementSGM, {'attr': {'class': 'date_time2', 'value': SGM.DateEnregistrement ? SGM.DateEnregistrement|date('Y-m-d') : '' }}) }}</div> 
                        </div> 
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.CAB, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.CAB, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'CAB', 'readonly': true }}) }}</div> 
                        </div>
                    </div>

                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementCAB, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.NumeroEnregistrementCAB, {'attr': {'class': 'form-control','value': CAB.Numero  }}) }}</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\">
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementCAB, \"Date d'arrivée\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.DateEnregistrementCAB, {'attr': {'class': 'date_time2', 'value': CAB.DateEnregistrement ? CAB.DateEnregistrement|date('Y-m-d') : '' }}) }}</div> 
                        </div>
                    </div> 

                        <div style=\" display: flex;flex-wrap: wrap;\" >

                        <div class=\"create__section\" style=\"width: 45.5% \" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.AUTRE, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.AUTRE, {'attr': {'class': 'form-control','value': AUTRE.Structure }}) }}</div> 
                        </div>
                        <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementAUTRE, \"Numéro d'enrégistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.NumeroEnregistrementAUTRE, {'attr': {'class': 'form-control','value': AUTRE.Numero  }}) }}</div> 
                        </div>
                    </div>
                    
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementAUTRE, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.DateEnregistrementAUTRE, {'attr': {'class': 'date_time2', 'value': AUTRE.DateEnregistrement ? AUTRE.DateEnregistrement|date('Y-m-d') : '' }}) }}</div> 
                        </div>

                </div>
            {% elseif  document.mouvement == \"DEPART\" %}

            {% elseif  document.mouvement == \"INTERNE\" %}

            {% endif %}
                
            <div class=\"create__footer \"> 
                <div  >
                    
                    <div class=\"create__section\" style=\"width: 20%;display: block; margin-left: 110%; margin-right: auto \">
                        <button class=\"create__btn-create btn btn--type-02 btn btn-success\">{{ button_label|default('Sauvegarder') }}</button>
                    </div>
                    </div>
            </div>
        
        <style>
                    .date_time{  
                        padding: 1px;  
                        border: solid 1px #e9ecee;
                            border-radius: 0;
                        background-color: #ECECEC;
                            color: #181617;
                        -webkit-box-shadow: none;
                            -moz-box-shadow: none;
                        box-shadow: none;
                            display: block;
                            width: 132%; 
                    }

                        .date_time1{  
                        padding: 1px;  
                        border: solid 1px #e9ecee;
                            border-radius: 0;
                        background-color: #ECECEC;
                            color: #181617;
                        -webkit-box-shadow: none;
                            -moz-box-shadow: none;
                        box-shadow: none;
                            display: block;
                            width: 65%; 
                            padding:5px;
                    }

                    .date_time2{  
                        padding: 1px;  
                        border: solid 1px #e9ecee;
                            border-radius: 0;
                        background-color: #ECECEC;
                            color: #181617;
                        -webkit-box-shadow: none;
                            -moz-box-shadow: none;
                        box-shadow: none;
                            display: block;
                            width: 100%; 
                            padding:5px;
                    }
                
                </style>
                
        
    {{ form_end(form) }} 
</div>

    <div class=\"create\" style=\"width:54% ;margin-left:1%;overflow : auto; text-align : center\" >

    <div style=\" font-size:16px;font-weight: 600;margin-bottom:5px; color : #918c8c\">  Aperçu du document chargé  

        <embed src=\"../{{document.DocumentAt ? document.DocumentAt|date('Y/m/d') : ''}}/{{document.Chemin}}\" width=\"600\" height=\"700\" type='application/pdf'>
        </embed>
    </div>



{% endblock %}

{% block javascripts %}
{{parent()}}
<script>
    //\$('#selectTypeDoc').select2()

    \$('#selectTypeDoc').on('change',function(){
        \$('#newDoc').trigger(\"click\")
    })

     


    \$(document).ready(function() {
        //console.log(\$(\"#documents_Chemin\"))
        \$('#selectTypeDoc').trigger(\"click\")   

          //Apercu desc pdf
     // Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window['pdfjs-dist/build/pdf'];
// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

// Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window[\"pdfjs-dist/build/pdf\"];
// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc =
  \"https://mozilla.github.io/pdf.js/build/pdf.worker.js\";

\$(\"#documents_Chemin\").on(\"change\", function (e) {
  var file = e.target.files[0];
  if (file.type == \"application/pdf\") {
    var fileReader = new FileReader();
    fileReader.onload = function () {
      var pdfData = new Uint8Array(this.result);
      // Using DocumentInitParameters object to load binary data.
      var loadingTask = pdfjsLib.getDocument({ data: pdfData });
      loadingTask.promise.then(
        function (pdf) {
          console.log(\"PDF loaded\");

          // Fetch the first page
          var pageNumber = 1;
          pdf.getPage(pageNumber).then(function (page) {
            console.log(\"Page loaded\");

            var scale = 0.95;
            var viewport = page.getViewport({ scale: scale });

            // Prepare canvas using PDF page dimensions
            var canvas = \$(\"#pdfViewer\")[0];
            var context = canvas.getContext(\"2d\");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
              canvasContext: context,
              viewport: viewport
            };
            var renderTask = page.render(renderContext);
            renderTask.promise.then(function () {
              console.log(\"Page rendered\");
            });
          });
        },
        function (reason) {
          // PDF loading error
          console.error(reason);
        }
      );
    };
    fileReader.readAsArrayBuffer(file);
  }
});


 
     });


    
</script>
{% endblock %}
 

", "documents/edit.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\documents\\edit.html.twig");
    }
}
