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

/* Affectations/new.html.twig */
class __TwigTemplate_f724cf2bf2e533f56db70195c011cc90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Affectations/new.html.twig", 1);
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

        echo "Nouvelle affectation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 7
        echo " 

 <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_index");
        echo "\">Retour</a></div> 
 
       ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "

            <div class=\"create\">                
                <div class=\"create__section\">
                  <div class=\"create__title\"><img src=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Ajout d'un affectation</div> 
                </div>
                <div style=\" display: flex;flex-wrap: wrap;\" >   
                    <div  style=\"margin-top: 20px; width:35% \">
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Document", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "foo"], "label" => "Document"]);
        echo "</label>
                            <div>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Document", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 21, $this->source); })()), "Document", [], "any", false, false, false, 21), "readonly" => true]]);
        echo "</div> 
                        </div>  
       
                        <div class=\"create__section\" >          
                            <label class=\"create__label\" for=\"title\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Envoyeur", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "foo"], "label" => "Expéditeur"]);
        echo "</label>
                            <div>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "Envoyeur", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 26, $this->source); })()), "Envoyeur", [], "any", false, false, false, 26), "readonly" => true]]);
        echo "</div> 

                        </div>
                    
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "Date_Affectation_at", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de affectation"]);
        echo "</label>
                            <div>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Date_Affectation_at", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "date_time", "placeholder" => "Insérez la date de affectation"]]);
        echo "</div>  
                        </div>

                        <style>
                            .date_time{ 
                                color: red;
                                padding: 4px;  
                                border: solid 1px #e9ecee;
                                    border-radius: 0;
                                background-color: #ECECEC;
                                    color: #181617;
                                -webkit-box-shadow: none;
                                    -moz-box-shadow: none;
                                box-shadow: none;
                                    display: block;
                                    width: 100%;
                            }
                        </style>                            
                        
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Receveur", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "foo"], "label" => "Destinataire"]);
        echo "</label>
                            <label class=\"custom-select\">                                              
                                <div>";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Receveur", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "js-example-basic-single", "placeholder" => "Insérez le destinataire"]]);
        echo "</div> 
                            </label>
                        </div>
                        <div class=\"create__footer\"> 
                            <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 58
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 58, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                    <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                        <embed src=\"../../Documents/";
        // line 62
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 62, $this->source); })()), "Document", [], "any", false, false, false, 62), "DocumentAt", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 62, $this->source); })()), "Document", [], "any", false, false, false, 62), "DocumentAt", [], "any", false, false, false, 62), "Y/m/d"), "html", null, true))) : (print ("")));
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 62, $this->source); })()), "Document", [], "any", false, false, false, 62), "Chemin", [], "any", false, false, false, 62), "html", null, true);
        echo "\" width=\"600\" height=\"500\" type='application/pdf'></embed>
                    </div>
                </div>
                
            </div>
                
        </div>

        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
                             
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Affectations/new.html.twig";
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
        return array (  194 => 70,  181 => 62,  174 => 58,  167 => 54,  162 => 52,  139 => 32,  135 => 31,  127 => 26,  123 => 25,  116 => 21,  112 => 20,  104 => 15,  97 => 11,  92 => 9,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle affectation{% endblock %}


{% block list %}
 

 <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"{{ path('app_Affectations_index') }}\">Retour</a></div> 
 
       {{ form_start(form) }}

            <div class=\"create\">                
                <div class=\"create__section\">
                  <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Ajout d'un affectation</div> 
                </div>
                <div style=\" display: flex;flex-wrap: wrap;\" >   
                    <div  style=\"margin-top: 20px; width:35% \">
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Document, 'Document', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.Document, {'attr': {'class': 'form-control', 'value': affectation.Document, 'readonly': true  }}) }}</div> 
                        </div>  
       
                        <div class=\"create__section\" >          
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Envoyeur, 'Expéditeur', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.Envoyeur, {'attr': {'class': 'form-control', 'value': affectation.Envoyeur, 'readonly': true }}) }}</div> 

                        </div>
                    
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Date_Affectation_at, 'Date de affectation', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.Date_Affectation_at, {'attr': {'class': 'date_time','placeholder': \"Insérez la date de affectation\" }}) }}</div>  
                        </div>

                        <style>
                            .date_time{ 
                                color: red;
                                padding: 4px;  
                                border: solid 1px #e9ecee;
                                    border-radius: 0;
                                background-color: #ECECEC;
                                    color: #181617;
                                -webkit-box-shadow: none;
                                    -moz-box-shadow: none;
                                box-shadow: none;
                                    display: block;
                                    width: 100%;
                            }
                        </style>                            
                        
                        <div class=\"create__section\" >
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Receveur, 'Destinataire', {'label_attr': {'class': 'foo'}}) }}</label>
                            <label class=\"custom-select\">                                              
                                <div>{{ form_widget(form.Receveur, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérez le destinataire\" }}) }}</div> 
                            </label>
                        </div>
                        <div class=\"create__footer\"> 
                            <button class=\"create__btn-create btn btn--type-02 btn btn-success\">{{ button_label|default('Sauvegarder') }}</button>
                        </div>
                    </div>
                    <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                        <embed src=\"../../Documents/{{affectation.Document.DocumentAt ? affectation.Document.DocumentAt|date('Y/m/d') : ''}}/{{affectation.Document.Chemin}}\" width=\"600\" height=\"500\" type='application/pdf'></embed>
                    </div>
                </div>
                
            </div>
                
        </div>

        {{ form_end(form) }}
                             
{% endblock %}
", "Affectations/new.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\Affectations\\new.html.twig");
    }
}
