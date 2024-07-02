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

/* documents/new.html.twig */
class __TwigTemplate_6e62e9ebb59204a0dfa7b95dbf9c11e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documents/new.html.twig", 1);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new");
            echo "\" method = \"get\">

            <div style=\"text-align:right; margin-top:20px;display: inline-block;\">
                <select  name = \"mouv\"  id=\"selectTypeDoc\" style=\"text-align : ligth; border : 0.5px solid green\">  
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
        // line 66
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 66, $this->source); })()), "mouvement", [], "any", false, false, false, 66) == "DEPART")) {
            // line 67
            echo "                             <div class=\"create__section\" >
                                ";
            // line 68
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "
                                <div class=\"create__title\"><img src=";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/resume.5e7e6b1f.svg"), "html", null, true);
                echo ">Résumé de documents à répondre</div>
                                
                                <div style=\"margin-top:10px;margin-bottom:10px;\">Pas de documents associé à cette réponse</div>
                                     
                               <div style=\"margin-top:10px;margin-bottom:10px;\">
                                    <p><b>Objet:</b> ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 75, $this->source); })()), "objet", [], "any", false, false, false, 75), "html", null, true);
                echo " </p>
                                    <p> <b>Référence:</b> ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 76, $this->source); })()), "reference", [], "any", false, false, false, 76), "html", null, true);
                echo "  </p>
                                    <p>  <b>Structure:</b> ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 77, $this->source); })()), "structure", [], "any", false, false, false, 77), "html", null, true);
                echo "</p>
                                  
                             </div>

                                ";
            }
            // line 81
            echo " 
                                

                              </div>
                          ";
        }
        // line 85
        echo " 
                           
                             <div class=\"create__section\" >
                                
                                    <div class=\"create__title\"><img src=";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Ajout d'un nouveau document</div>
                                   
                                </div>

    
                                 <div>

                                    <div class=\"create__section\" style=\" display: flex;flex-wrap: wrap;\" >

                                        <div  style=\"width: 70%; \">
                                                ";
        // line 99
        if (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 99, $this->source); })()), "mouvement", [], "any", false, false, false, 99) == "DEPART") || (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 99, $this->source); })()), "mouvement", [], "any", false, false, false, 99) == "INTERNE"))) {
            // line 100
            echo "                                                    <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "Chemin", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "foo"], "label" => "Charger le document"]);
            echo "</label>
                                                ";
        } else {
            // line 102
            echo "                                                    <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "Chemin", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "foo"], "label" => "Charger le courrier"]);
            echo "</label>
                                                ";
        }
        // line 103
        echo "   
                                                 <div>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "Chemin", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez le chemin"]]);
        echo "</div> 
                                        </div>

                                        ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 107, $this->source); })()), "mouvement", [], "any", false, false, false, 107) == "INTERNE")) {
            // line 108
            echo "                                        <div hidden style=\"width: 8.5%; margin-left:2.5%\">
                                         
                                                <label class=\"create__box\" for=\"title\" >";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "Sensibility", [], "any", false, false, false, 110), 'label', ["label" => "Public"]);
            echo "</label>
                                                    <div >";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "Sensibility", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "custom-checkbox"]]);
            echo "</div> 
                                                </label>
                    
                                        </div>

                                        ";
        } else {
            // line 117
            echo "
                                          <div style=\"width: 8.5%; margin-left:2.5%; margin-top: 4%\">
                                         
                                                <label class=\"create__box\" for=\"title\" >";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "Sensibility", [], "any", false, false, false, 120), 'label', ["label" => "Public"]);
            echo "</label>
                                                    <div >";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "Sensibility", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "custom-checkbox"]]);
            echo "</div> 
                                                </label>
                    
                                        </div>

                                    ";
        }
        // line 126
        echo "  

                                    ";
        // line 128
        echo "  

                                    </div>

                                     ";
        // line 132
        echo "  

                                        <div class=\"create__section\">

                                           ";
        // line 136
        if (((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 136, $this->source); })()), "mouvement", [], "any", false, false, false, 136) == "DEPART") && (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 136, $this->source); })()))) {
            // line 137
            echo "                                                
                                                 <div hidden>
                                                    <label class=\"create__label\" for=\"title\">";
            // line 139
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "TypeDocument", [], "any", false, false, false, 139), 'label', ["label" => "Type de courrier"]);
            echo "</label>

                                                     <label class=\"custom-select\">          
                                                          <div>";
            // line 142
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "TypeDocument", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
            echo "</div> 
                                                     </label>
                                                 </div>

                                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 146
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 146, $this->source); })()), "mouvement", [], "any", false, false, false, 146) == "INTERNE")) {
            // line 147
            echo "                                                       <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "TypeDocument", [], "any", false, false, false, 147), 'label', ["label" => "Type du document"]);
            echo "</label>
                                                     <label class=\"custom-select\">          
                                                    <div>";
            // line 149
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "TypeDocument", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
            echo "</div> 
                                                     </label>

                                                ";
        } else {
            // line 153
            echo "                                                    <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "TypeDocument", [], "any", false, false, false, 153), 'label', ["label" => "Type de courrier"]);
            echo "</label>
                                                     <label class=\"custom-select\">          
                                                    <div>";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "TypeDocument", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
            echo "</div> 
                                                     </label>
                                            ";
        }
        // line 157
        echo "   
                                                
                        
                                        </div>

                                     ";
        // line 162
        echo "  
                                    
                                    
                                </div>
                                 
                              ";
        // line 167
        echo "  

                                <div style=\" display: flex;flex-wrap: wrap;\">
                                    
                                    <div class=\"create__section\" style=\"width: 100%; font-size: 15px; \" >

                                        ";
        // line 173
        if ((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 173, $this->source); })())) {
            // line 174
            echo "                                            <div class=\"text-danger text-bold text--italic\">";
            echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 174, $this->source); })()), "html", null, true);
            echo "</div> <br>
                                        ";
        }
        // line 175
        echo "   
                                        ";
        // line 176
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 176, $this->source); })()), "mouvement", [], "any", false, false, false, 176) != "DEPART")) {
            // line 177
            echo "                                            <div class=\"text-success text-bold text--italic\">Lorsque que le document n'a pas de référence saisissez SR </div> 
                                        ";
        }
        // line 178
        echo " 
                                    </div>
                                </div>
                                <div style=\" display: flex;flex-wrap: wrap;\">
                                        
                                    <div class=\"create__section\" style=\"width: 45.5% \" >

                                        ";
        // line 185
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 185, $this->source); })()), "mouvement", [], "any", false, false, false, 185) == "INTERNE")) {
            // line 186
            echo "                                            <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "Reference", [], "any", false, false, false, 186), 'label', ["label_attr" => ["class" => "foo"], "label" => "Référence du document"]);
            echo "</label>
                                        ";
        } else {
            // line 188
            echo "                                            <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "Reference", [], "any", false, false, false, 188), 'label', ["label_attr" => ["class" => "foo"], "label" => "Référence du courrier"]);
            echo "</label>
                                        ";
        }
        // line 189
        echo "   
                                            <div>";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "Reference", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez la référence"]]);
        echo "</div> 
                                    </div>

                                    <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >

                                        
                                        <label class=\"create__label\" for=\"title\">";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "DateDocument", [], "any", false, false, false, 196), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date du courier"]);
        echo "</label>
                                        
                                        <div style=\"width: 350px;\">";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "DateDocument", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "date_time1"]]);
        echo "</div> 
                                

                                    </div>
                                </div>
                              ";
        // line 203
        echo "  

                                


                              ";
        // line 208
        echo "  

                                <div style=\" display: flex;flex-wrap: wrap;\" >



                                       ";
        // line 214
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 214, $this->source); })()), "mouvement", [], "any", false, false, false, 214) == "INTERNE")) {
            // line 215
            echo "
                                        <div class=\"create__section\"  style=\"width: 205% \" >
                                            <label class=\"create__label\" for=\"title\">";
            // line 217
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "Objet", [], "any", false, false, false, 217), 'label', ["label_attr" => ["class" => "foo"], "label" => "Objet du document"]);
            echo "</label>
                                        
                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 219
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 219, $this->source); })()), "mouvement", [], "any", false, false, false, 219) == "DEPART")) {
            // line 220
            echo "                                            ";
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 220, $this->source); })())) {
                // line 221
                echo "                                                <div hidden class=\"create__section\"  style=\"width: 45.5% \" >
                                            ";
            } else {
                // line 223
                echo "                                                <div class=\"create__section\"  style=\"width: 45.5% \" >
                                            ";
            }
            // line 225
            echo "                                          <label class=\"create__label\" for=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "Objet", [], "any", false, false, false, 225), 'label', ["label_attr" => ["class" => "foo"], "label" => "Objet du courrier"]);
            echo "</label>
                                       

                                        ";
        } else {
            // line 229
            echo "                                        
                                        <div class=\"create__section\"  style=\"width: 45.5% \" >
                                          <label class=\"create__label\" for=\"title\">";
            // line 231
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "Objet", [], "any", false, false, false, 231), 'label', ["label_attr" => ["class" => "foo"], "label" => "Objet du courrier"]);
            echo "</label>
                                       
                                        ";
        }
        // line 233
        echo " 
                                        ";
        // line 234
        if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 234, $this->source); })())) {
            echo " 
                                            <div>";
            // line 235
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "Objet", [], "any", false, false, false, 235), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 235, $this->source); })()), "Objet", [], "any", false, false, false, 235), "readOnly" => true]]);
            echo "</div> 
                                        ";
        } else {
            // line 237
            echo "                                            <div>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "Objet", [], "any", false, false, false, 237), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez l'objet"]]);
            echo "</div> 
                                        ";
        }
        // line 239
        echo "                                             
                                        </div>


                                    ";
        // line 243
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 243, $this->source); })()), "mouvement", [], "any", false, false, false, 243) == "DEPART")) {
            // line 244
            echo "                                    ";
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 244, $this->source); })())) {
                // line 245
                echo "                                        <div hidden class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                                            <label class=\"create__label\" for=\"title\">";
                // line 246
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "Structure", [], "any", false, false, false, 246), 'label', ["label_attr" => ["class" => "foo"], "label" => "Destinataire"]);
                echo "</label>   
                                            <div>";
                // line 247
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "Structure", [], "any", false, false, false, 247), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 247, $this->source); })()), "Structure", [], "any", false, false, false, 247), "readOnly" => true]]);
                echo "</div> 
                                    ";
            } else {
                // line 249
                echo "                                        <div class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\">
                                            <label class=\"create__label\" for=\"title\">";
                // line 250
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "Structure", [], "any", false, false, false, 250), 'label', ["label_attr" => ["class" => "foo"], "label" => "Destinataire"]);
                echo "</label>   
                                            <div>";
                // line 251
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "Structure", [], "any", false, false, false, 251), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Destinataire"]]);
                echo "</div> 
                                    ";
            }
            // line 252
            echo "    
                                    </div> 

                                     ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 255
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 255, $this->source); })()), "mouvement", [], "any", false, false, false, 255) == "INTERNE")) {
            // line 256
            echo "
                                      <div hidden class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                                            <label class=\"create__label\" for=\"title\">";
            // line 258
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "Structure", [], "any", false, false, false, 258), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure émettrice"]);
            echo "</label>   
                                            <div>";
            // line 259
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "Structure", [], "any", false, false, false, 259), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Structure émettrice", "value" => "DGML", "readonly" => true]]);
            echo "</div> 
                                     </div>

                                     ";
        } else {
            // line 263
            echo "
                                        <div class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                                            <label class=\"create__label\" for=\"title\">";
            // line 265
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "Structure", [], "any", false, false, false, 265), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure émettrice/usager"]);
            echo "</label>   
                                            <div>";
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "Structure", [], "any", false, false, false, 266), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Structure émettrice/usager"]]);
            echo "</div> 
                                        </div>

                                    ";
        }
        // line 269
        echo " 

                                </div>

                            ";
        // line 273
        echo "  


                            ";
        // line 276
        echo "    

                                <div style=\" display: flex;flex-wrap: wrap;\" >

                                      ";
        // line 280
        echo "  
                                     ";
        // line 281
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 281, $this->source); })()), "mouvement", [], "any", false, false, false, 281) == "INTERNE")) {
            // line 282
            echo "
                                        <div hidden class=\"create__section\" style=\"width: 45.5%\"  >

                                                 <label class=\"create__label\" for=\"title\">";
            // line 285
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 285), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro d'enregistrement"]);
            echo "</label>
                                        
                                                 <div>";
            // line 287
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 287), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 

                                        </div>


                                        ";
        } else {
            // line 293
            echo "
                                        <div class=\"create__section\" style=\"width: 45.5%\"  >

                                            <label class=\"create__label\" for=\"title\">";
            // line 296
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 296), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro d'enregistrement"]);
            echo "</label>
                                        
                                            <div>";
            // line 298
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "NumeroEnregistrement", [], "any", false, false, false, 298), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 
                                    
                                        </div>

 
                                    ";
        }
        // line 303
        echo "  
                                 

                                      ";
        // line 306
        echo "  

                                        ";
        // line 308
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 308, $this->source); })()), "mouvement", [], "any", false, false, false, 308) == "DEPART")) {
            // line 309
            echo "                                           <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                            ";
            // line 310
            if ((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 310, $this->source); })())) {
                // line 311
                echo "                                                <label class=\"create__label\" for=\"title\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "DateArrivee", [], "any", false, false, false, 311), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de réponse"]);
                echo "</label>
                                            ";
            } else {
                // line 313
                echo "                                                <label class=\"create__label\" for=\"title\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "DateArrivee", [], "any", false, false, false, 313), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de départ"]);
                echo "</label>
                                            ";
            }
            // line 315
            echo "                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 315, $this->source); })()), "mouvement", [], "any", false, false, false, 315) == "INTERNE")) {
            // line 316
            echo "                                           <div class=\"create__section\" style=\"width: 49.5%; \" >
                                           
                                            <label class=\"create__label\" for=\"title\">";
            // line 318
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "DateArrivee", [], "any", false, false, false, 318), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                                       
                                        ";
        } else {
            // line 321
            echo "                                           <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                            
                                            <label class=\"create__label\" for=\"title\">";
            // line 323
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "DateArrivee", [], "any", false, false, false, 323), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                                       
                                        ";
        }
        // line 325
        echo " 

                                        <div style=\"width: 350px;\">";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "DateArrivee", [], "any", false, false, false, 327), 'widget', ["attr" => ["class" => "date_time1"]]);
        echo "</div> 
                                   
                                    </div>

                                </div>

                             ";
        // line 333
        echo "  

                             ";
        // line 335
        echo " 
                             ";
        // line 336
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 336, $this->source); })()), "mouvement", [], "any", false, false, false, 336) == "DEPART")) {
            // line 337
            echo "                                <div class=\"create__section\">
                                    
                                    <label class=\"create__label\" for=\"title\">";
            // line 339
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "Initiateur", [], "any", false, false, false, 339), 'label', ["label" => "Initié par :"]);
            echo "</label>
                                                                           
                                    <label class=\"custom-select\">
                                                                                        
                                        <div>";
            // line 343
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "Initiateur", [], "any", false, false, false, 343), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
            echo "</div> 

                                    </label>
            
                                </div>
                                <div class=\"create__section\">
                                    
                                    <label class=\"create__label\" for=\"title\">";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "Observation", [], "any", false, false, false, 350), 'label', ["label" => "Observation :"]);
            echo "</label>                                                                       
                                    <div>";
            // line 351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "Observation", [], "any", false, false, false, 351), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Observation sur le courrier"]]);
            echo "</div> 
            
                                </div>
                            ";
        }
        // line 355
        echo "
                            ";
        // line 356
        echo " 
 
                         
                                ";
        // line 359
        if ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 359, $this->source); })()), "mouvement", [], "any", false, false, false, 359) == "ARRIVEE PAR SGM")) {
            // line 360
            echo "                                    <div  >
                                         <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 364
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "SGM", [], "any", false, false, false, 364), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                                                <div>";
            // line 365
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "SGM", [], "any", false, false, false, 365), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "SGM", "readonly" => true]]);
            echo "</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 368), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                                                <div>";
            // line 369
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 
                                            </div>
                                        </div>
                                            <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 373), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                                                <div>";
            // line 374
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 374), 'widget', ["attr" => ["class" => "date_time2"]]);
            echo "</div> 
                                            </div>
                                       
                                    </div>


                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 380
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 380, $this->source); })()), "mouvement", [], "any", false, false, false, 380) == "ARRIVEE PAR CAB")) {
            // line 381
            echo "                                    <div  >
                                         <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \"  >
                                                <label class=\"create__label\" for=\"title\">";
            // line 385
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), "SGM", [], "any", false, false, false, 385), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                                                <div>";
            // line 386
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "SGM", [], "any", false, false, false, 386), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "SGM", "readonly" => true]]);
            echo "</div> 
                                            </div>

                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 390
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 390), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                                                <div>";
            // line 391
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 391), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 
                                            </div>
                                         </div>

                                        <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 398
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 398), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                                                <div>";
            // line 399
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 399), 'widget', ["attr" => ["class" => "date_time2"]]);
            echo "</div> 
                                            </div>
    

                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 404
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "CAB", [], "any", false, false, false, 404), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                                                <div>";
            // line 405
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "CAB", [], "any", false, false, false, 405), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "CAB", "readonly" => true]]);
            echo "</div> 
                                            </div>
                                        </div>

                                        <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 412
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 412), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                                                <div>";
            // line 413
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 413), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 416
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 416), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                                                <div>";
            // line 417
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 417), 'widget', ["attr" => ["class" => "date_time2"]]);
            echo "</div> 
                                            </div>
                                        </div>

                                    </div>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 422
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 422, $this->source); })()), "mouvement", [], "any", false, false, false, 422) == "ARRIVEE PAR AUTRE")) {
            // line 423
            echo "                                    <div >
                                        <div style=\" display: flex;flex-wrap: wrap;\" >
                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 426
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "SGM", [], "any", false, false, false, 426), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                                                <div>";
            // line 427
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), "SGM", [], "any", false, false, false, 427), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "SGM", "readonly" => true]]);
            echo "</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 430
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 430), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                                                <div>";
            // line 431
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "NumeroEnregistrementSGM", [], "any", false, false, false, 431), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 
                                            </div>
                                        </div>
                                        
                                        <div style=\" display: flex;flex-wrap: wrap;\" >
                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 437
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 437, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 437), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                                                <div>";
            // line 438
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "DateEnregistrementSGM", [], "any", false, false, false, 438), 'widget', ["attr" => ["class" => "date_time2"]]);
            echo "</div> 
                                            </div> 
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 441
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "CAB", [], "any", false, false, false, 441), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                                                <div>";
            // line 442
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 442, $this->source); })()), "CAB", [], "any", false, false, false, 442), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "", "value" => "CAB", "readonly" => true]]);
            echo "</div> 
                                            </div>
                                        </div>

                                         <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 449
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 449), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro"]);
            echo "</label>
                                                <div>";
            // line 450
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "NumeroEnregistrementCAB", [], "any", false, false, false, 450), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\">
                                                <label class=\"create__label\" for=\"title\">";
            // line 453
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 453), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'arrivée"]);
            echo "</label>
                                                <div>";
            // line 454
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 454, $this->source); })()), "DateEnregistrementCAB", [], "any", false, false, false, 454), 'widget', ["attr" => ["class" => "date_time2"]]);
            echo "</div> 
                                            </div>
                                        </div> 

                                         <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 461
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "AUTRE", [], "any", false, false, false, 461), 'label', ["label_attr" => ["class" => "foo"], "label" => "Structure"]);
            echo "</label>
                                                <div>";
            // line 462
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "AUTRE", [], "any", false, false, false, 462), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exemple DGB"]]);
            echo "</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">";
            // line 465
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "NumeroEnregistrementAUTRE", [], "any", false, false, false, 465), 'label', ["label_attr" => ["class" => "foo"], "label" => "Numéro d'enrégistrement"]);
            echo "</label>
                                                <div>";
            // line 466
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 466, $this->source); })()), "NumeroEnregistrementAUTRE", [], "any", false, false, false, 466), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'enregistrement"]]);
            echo "</div> 
                                            </div>
                                        </div>
                                        
                                        <div class=\"create__section\" >
                                            <label class=\"create__label\" for=\"title\">";
            // line 471
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 471, $this->source); })()), "DateEnregistrementAUTRE", [], "any", false, false, false, 471), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date d'enregistrement"]);
            echo "</label>
                                            <div>";
            // line 472
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 472, $this->source); })()), "DateEnregistrementAUTRE", [], "any", false, false, false, 472), 'widget', ["attr" => ["class" => "date_time2"]]);
            echo "</div> 
                                        </div>

                                    </div>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 476
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 476, $this->source); })()), "mouvement", [], "any", false, false, false, 476) == "DEPART")) {
            // line 477
            echo "
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 478
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 478, $this->source); })()), "mouvement", [], "any", false, false, false, 478) == "INTERNE")) {
            // line 479
            echo "
                                ";
        }
        // line 481
        echo "                                    
                                <div class=\"create__footer \"> 
                                    <div  >
                                      
                                        <div class=\"create__section\" style=\"width: 20%;display: block; margin-left: 110%; margin-right: auto \">
                                            <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 486
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 486, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
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
        // line 536
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), 'form_end');
        echo " </div>

                        <div class=\"create\" style=\"width:54% ;margin-left:1%;overflow : auto; text-align : center\" >

                        <div style=\" font-size:16px;font-weight: 600;margin-bottom:5px; color : #918c8c\">  Aperçu du document chargé  
                        </div>
                                 <canvas id=\"pdfViewer\"></canvas>
                         </div>

                 </div>   


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 550
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 551
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
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.worker.js';

// Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window[\"pdfjs-dist/build/pdf\"];
// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc =
  \"https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.worker.js\";

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
        return "documents/new.html.twig";
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
        return array (  1148 => 551,  1138 => 550,  1115 => 536,  1062 => 486,  1055 => 481,  1051 => 479,  1049 => 478,  1046 => 477,  1044 => 476,  1037 => 472,  1033 => 471,  1025 => 466,  1021 => 465,  1015 => 462,  1011 => 461,  1001 => 454,  997 => 453,  991 => 450,  987 => 449,  977 => 442,  973 => 441,  967 => 438,  963 => 437,  954 => 431,  950 => 430,  944 => 427,  940 => 426,  935 => 423,  933 => 422,  925 => 417,  921 => 416,  915 => 413,  911 => 412,  901 => 405,  897 => 404,  889 => 399,  885 => 398,  875 => 391,  871 => 390,  864 => 386,  860 => 385,  854 => 381,  852 => 380,  843 => 374,  839 => 373,  832 => 369,  828 => 368,  822 => 365,  818 => 364,  812 => 360,  810 => 359,  805 => 356,  802 => 355,  795 => 351,  791 => 350,  781 => 343,  774 => 339,  770 => 337,  768 => 336,  765 => 335,  761 => 333,  752 => 327,  748 => 325,  742 => 323,  738 => 321,  732 => 318,  728 => 316,  725 => 315,  719 => 313,  713 => 311,  711 => 310,  708 => 309,  706 => 308,  702 => 306,  697 => 303,  688 => 298,  683 => 296,  678 => 293,  669 => 287,  664 => 285,  659 => 282,  657 => 281,  654 => 280,  648 => 276,  643 => 273,  637 => 269,  630 => 266,  626 => 265,  622 => 263,  615 => 259,  611 => 258,  607 => 256,  605 => 255,  600 => 252,  595 => 251,  591 => 250,  588 => 249,  583 => 247,  579 => 246,  576 => 245,  573 => 244,  571 => 243,  565 => 239,  559 => 237,  554 => 235,  550 => 234,  547 => 233,  541 => 231,  537 => 229,  529 => 225,  525 => 223,  521 => 221,  518 => 220,  516 => 219,  511 => 217,  507 => 215,  505 => 214,  497 => 208,  490 => 203,  482 => 198,  477 => 196,  468 => 190,  465 => 189,  459 => 188,  453 => 186,  451 => 185,  442 => 178,  438 => 177,  436 => 176,  433 => 175,  427 => 174,  425 => 173,  417 => 167,  410 => 162,  403 => 157,  397 => 155,  391 => 153,  384 => 149,  378 => 147,  376 => 146,  369 => 142,  363 => 139,  359 => 137,  357 => 136,  351 => 132,  345 => 128,  341 => 126,  332 => 121,  328 => 120,  323 => 117,  314 => 111,  310 => 110,  306 => 108,  304 => 107,  298 => 104,  295 => 103,  289 => 102,  283 => 100,  281 => 99,  268 => 89,  262 => 85,  255 => 81,  247 => 77,  243 => 76,  239 => 75,  231 => 70,  228 => 69,  226 => 68,  223 => 67,  221 => 66,  216 => 64,  203 => 53,  183 => 40,  175 => 39,  167 => 38,  159 => 37,  151 => 36,  143 => 35,  136 => 31,  133 => 30,  131 => 29,  125 => 26,  120 => 23,  110 => 22,  99 => 19,  90 => 13,  80 => 12,  61 => 3,  38 => 1,);
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

        <form action = \"{{path('app_documents_new' )}}\" method = \"get\">

            <div style=\"text-align:right; margin-top:20px;display: inline-block;\">
                <select  name = \"mouv\"  id=\"selectTypeDoc\" style=\"text-align : ligth; border : 0.5px solid green\">  
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
                                
                                    <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Ajout d'un nouveau document</div>
                                   
                                </div>

    
                                 <div>

                                    <div class=\"create__section\" style=\" display: flex;flex-wrap: wrap;\" >

                                        <div  style=\"width: 70%; \">
                                                {% if document.mouvement == \"DEPART\"  or document.mouvement == \"INTERNE\"  %}
                                                    <label class=\"create__label\" for=\"title\">{{ form_label(form.Chemin, 'Charger le document', {'label_attr': {'class': 'foo'}}) }}</label>
                                                {% else %}
                                                    <label class=\"create__label\" for=\"title\">{{ form_label(form.Chemin, 'Charger le courrier', {'label_attr': {'class': 'foo'}}) }}</label>
                                                {% endif %}   
                                                 <div>{{ form_widget(form.Chemin, {'attr': {'class': 'form-control','placeholder': \"Insérez le chemin\" }}) }}</div> 
                                        </div>

                                        {% if  document.mouvement == \"INTERNE\"    %}
                                        <div hidden style=\"width: 8.5%; margin-left:2.5%\">
                                         
                                                <label class=\"create__box\" for=\"title\" >{{ form_label(form.Sensibility, \"Public\") }}</label>
                                                    <div >{{ form_widget(form.Sensibility, {'attr': {'class': 'custom-checkbox' }}) }}</div> 
                                                </label>
                    
                                        </div>

                                        {% else %}

                                          <div style=\"width: 8.5%; margin-left:2.5%; margin-top: 4%\">
                                         
                                                <label class=\"create__box\" for=\"title\" >{{ form_label(form.Sensibility, \"Public\") }}</label>
                                                    <div >{{ form_widget(form.Sensibility, {'attr': {'class': 'custom-checkbox' }}) }}</div> 
                                                </label>
                    
                                        </div>

                                    {% endif %}  

                                    {# FIN MASQUER LE PUBLIC  #}  

                                    </div>

                                     {# TYPE DE DOCUMENT  #}  

                                        <div class=\"create__section\">

                                           {% if document.mouvement == \"DEPART\"  and Reponse   %}
                                                
                                                 <div hidden>
                                                    <label class=\"create__label\" for=\"title\">{{ form_label(form.TypeDocument, \"Type de courrier\") }}</label>

                                                     <label class=\"custom-select\">          
                                                          <div>{{ form_widget(form.TypeDocument, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 
                                                     </label>
                                                 </div>

                                                {% elseif document.mouvement == \"INTERNE\"  %}
                                                       <label class=\"create__label\" for=\"title\">{{ form_label(form.TypeDocument, \"Type du document\") }}</label>
                                                     <label class=\"custom-select\">          
                                                    <div>{{ form_widget(form.TypeDocument, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 
                                                     </label>

                                                {% else %}
                                                    <label class=\"create__label\" for=\"title\">{{ form_label(form.TypeDocument, \"Type de courrier\") }}</label>
                                                     <label class=\"custom-select\">          
                                                    <div>{{ form_widget(form.TypeDocument, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 
                                                     </label>
                                            {% endif %}   
                                                
                        
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
                                            <div>{{ form_widget(form.Reference, {'attr': {'class': 'form-control','placeholder': \"Insérez la référence\" }}) }}</div> 
                                    </div>

                                    <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >

                                        
                                        <label class=\"create__label\" for=\"title\">{{ form_label(form.DateDocument, \"Date du courier\", {'label_attr': {'class': 'foo'}}) }}</label>
                                        
                                        <div style=\"width: 350px;\">{{ form_widget(form.DateDocument, {'attr': {'class': 'date_time1' }}) }}</div> 
                                

                                    </div>
                                </div>
                              {# FIN lIGNE REFERENCE #}  

                                


                              {#  lIGNE OBJET ET STRUCTURE EMMETRICE #}  

                                <div style=\" display: flex;flex-wrap: wrap;\" >



                                       {% if  document.mouvement == \"INTERNE\"  %}

                                        <div class=\"create__section\"  style=\"width: 205% \" >
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Objet, 'Objet du document', {'label_attr': {'class': 'foo'}}) }}</label>
                                        
                                        {% elseif document.mouvement == \"DEPART\" %}
                                            {% if Reponse %}
                                                <div hidden class=\"create__section\"  style=\"width: 45.5% \" >
                                            {% else %}
                                                <div class=\"create__section\"  style=\"width: 45.5% \" >
                                            {% endif %}
                                          <label class=\"create__label\" for=\"title\">{{ form_label(form.Objet, 'Objet du courrier', {'label_attr': {'class': 'foo'}}) }}</label>
                                       

                                        {% else %}
                                        
                                        <div class=\"create__section\"  style=\"width: 45.5% \" >
                                          <label class=\"create__label\" for=\"title\">{{ form_label(form.Objet, 'Objet du courrier', {'label_attr': {'class': 'foo'}}) }}</label>
                                       
                                        {% endif %} 
                                        {% if Reponse  %} 
                                            <div>{{ form_widget(form.Objet, {'attr': {'class': 'form-control','value': Reponse.Objet, 'readOnly': true }}) }}</div> 
                                        {% else %}
                                            <div>{{ form_widget(form.Objet, {'attr': {'class': 'form-control','placeholder': \"Insérez l'objet\" }}) }}</div> 
                                        {% endif %}
                                             
                                        </div>


                                    {% if document.mouvement == \"DEPART\"  %}
                                    {% if Reponse  %}
                                        <div hidden class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\" >
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Destinataire', {'label_attr': {'class': 'foo'}}) }}</label>   
                                            <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','value': Reponse.Structure, 'readOnly': true }}) }}</div> 
                                    {% else %}
                                        <div class=\"create__section\"  style=\"width: 49.5%; margin-left:5%\">
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Structure, 'Destinataire', {'label_attr': {'class': 'foo'}}) }}</label>   
                                            <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','placeholder': \"Destinataire\"  }}) }}</div> 
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
                                            <div>{{ form_widget(form.Structure, {'attr': {'class': 'form-control','placeholder': \"Structure émettrice/usager\" }}) }}</div> 
                                        </div>

                                    {% endif %} 

                                </div>

                            {# FIN lIGNE REFERENCE #}  


                            {# NUMERO ET DATE DENREGISTREMENT #}    

                                <div style=\" display: flex;flex-wrap: wrap;\" >

                                      {#  NUMERO DENREGISTREMENT #}  
                                     {% if  document.mouvement == \"INTERNE\"    %}

                                        <div hidden class=\"create__section\" style=\"width: 45.5%\"  >

                                                 <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrement, \"Numéro d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                        
                                                 <div>{{ form_widget(form.NumeroEnregistrement, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\" }}) }}</div> 

                                        </div>


                                        {% else %}

                                        <div class=\"create__section\" style=\"width: 45.5%\"  >

                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrement, \"Numéro d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                        
                                            <div>{{ form_widget(form.NumeroEnregistrement, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\" }}) }}</div> 
                                    
                                        </div>

 
                                    {% endif %}  
                                 

                                      {#  DATE DENREGISTREMENT #}  

                                        {% if document.mouvement == \"DEPART\"  %}
                                           <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                            {% if Reponse %}
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date de réponse\", {'label_attr': {'class': 'foo'}}) }}</label>
                                            {% else %}
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date de départ\", {'label_attr': {'class': 'foo'}}) }}</label>
                                            {% endif %}
                                        {% elseif document.mouvement == \"INTERNE\"  %}
                                           <div class=\"create__section\" style=\"width: 49.5%; \" >
                                           
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                       
                                        {% else %}
                                           <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                            
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateArrivee, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                       
                                        {% endif %} 

                                        <div style=\"width: 350px;\">{{ form_widget(form.DateArrivee, {'attr': {'class': 'date_time1' }}) }}</div> 
                                   
                                    </div>

                                </div>

                             {# FIN NUMERO ET DATE DENREGISTREMENT #}  

                             {# DEBUT DU POSTE INITIATEUR ET OBSERVATION #} 
                             {% if document.mouvement == \"DEPART\"  %}
                                <div class=\"create__section\">
                                    
                                    <label class=\"create__label\" for=\"title\">{{ form_label(form.Initiateur, \"Initié par :\") }}</label>
                                                                           
                                    <label class=\"custom-select\">
                                                                                        
                                        <div>{{ form_widget(form.Initiateur, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 

                                    </label>
            
                                </div>
                                <div class=\"create__section\">
                                    
                                    <label class=\"create__label\" for=\"title\">{{ form_label(form.Observation, \"Observation :\") }}</label>                                                                       
                                    <div>{{ form_widget(form.Observation, {'attr': {'class': 'form-control','placeholder': \"Observation sur le courrier\"  }}) }}</div> 
            
                                </div>
                            {% endif %}

                            {# FIN DU POSTE INITIATEUR  ET OBSERVATION #} 
 
                         
                                {% if document.mouvement == \"ARRIVEE PAR SGM\" %}
                                    <div  >
                                         <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.SGM, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.SGM, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'SGM', 'readonly': true }}) }}</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementSGM, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.NumeroEnregistrementSGM, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\"  }}) }}</div> 
                                            </div>
                                        </div>
                                            <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementSGM, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.DateEnregistrementSGM, {'attr': {'class': 'date_time2' }}) }}</div> 
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
                                                <div>{{ form_widget(form.NumeroEnregistrementSGM, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\"  }}) }}</div> 
                                            </div>
                                         </div>

                                        <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementSGM, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.DateEnregistrementSGM, {'attr': {'class': 'date_time2' }}) }}</div> 
                                            </div>
    

                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.CAB, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.CAB, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'CAB', 'readonly': true }}) }}</div> 
                                            </div>
                                        </div>

                                        <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementCAB, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.NumeroEnregistrementCAB, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\"  }}) }}</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementCAB, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.DateEnregistrementCAB, {'attr': {'class': 'date_time2' }}) }}</div> 
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
                                                <div>{{ form_widget(form.NumeroEnregistrementSGM, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\"  }}) }}</div> 
                                            </div>
                                        </div>
                                        
                                        <div style=\" display: flex;flex-wrap: wrap;\" >
                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementSGM, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.DateEnregistrementSGM, {'attr': {'class': 'date_time2' }}) }}</div> 
                                            </div> 
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.CAB, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.CAB, {'attr': {'class': 'form-control','placeholder': \"\", 'value': 'CAB', 'readonly': true }}) }}</div> 
                                            </div>
                                        </div>

                                         <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementCAB, \"Numéro\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.NumeroEnregistrementCAB, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\"  }}) }}</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\">
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementCAB, \"Date d'arrivée\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.DateEnregistrementCAB, {'attr': {'class': 'date_time2' }}) }}</div> 
                                            </div>
                                        </div> 

                                         <div style=\" display: flex;flex-wrap: wrap;\" >

                                            <div class=\"create__section\" style=\"width: 45.5% \" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.AUTRE, 'Structure', {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.AUTRE, {'attr': {'class': 'form-control','placeholder': \"Exemple DGB\", }}) }}</div> 
                                            </div>
                                            <div class=\"create__section\" style=\"width: 49.5%; margin-left:5%\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.NumeroEnregistrementAUTRE, \"Numéro d'enrégistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                                <div>{{ form_widget(form.NumeroEnregistrementAUTRE, {'attr': {'class': 'form-control','placeholder': \"Numéro d'enregistrement\"  }}) }}</div> 
                                            </div>
                                        </div>
                                        
                                        <div class=\"create__section\" >
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.DateEnregistrementAUTRE, \"Date d'enregistrement\", {'label_attr': {'class': 'foo'}}) }}</label>
                                            <div>{{ form_widget(form.DateEnregistrementAUTRE, {'attr': {'class': 'date_time2' }}) }}</div> 
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
                                    
                            
                        {{ form_end(form) }} </div>

                        <div class=\"create\" style=\"width:54% ;margin-left:1%;overflow : auto; text-align : center\" >

                        <div style=\" font-size:16px;font-weight: 600;margin-bottom:5px; color : #918c8c\">  Aperçu du document chargé  
                        </div>
                                 <canvas id=\"pdfViewer\"></canvas>
                         </div>

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
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.worker.js';

// Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window[\"pdfjs-dist/build/pdf\"];
// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc =
  \"https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.worker.js\";

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
 

", "documents/new.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\documents\\new.html.twig");
    }
}
