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

/* postes/new.html.twig */
class __TwigTemplate_feabd98e103ad374bc90c80eeb3ec748 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postes/new.html.twig", 1);
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

        echo "Nouveau Poste";
        
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
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_index");
        echo "\">Retour</a></div> 
 
       ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

            <div class=\"create\">

                <div class=\"create__section\">
                  <div class=\"create__title\"><img src=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Ajout d'un poste</div> 
                </div>
                <div style=\"display:flex; flex-wrap:wrap\">
                    
                    <div class=\"create__section\" style=\"width: 22.5%; \" >

                        <label class=\"create__label\" for=\"title\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Niveau", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "foo"], "label" => "Niveau"]);
        echo "</label>
                        <label class=\"custom-select\">
                            <div>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Niveau", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "js-example-basic-single", "value" => twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 23, $this->source); })()), "Niveau", [], "any", false, false, false, 23)]]);
        echo "</div> 
                        </label>

                    </div> 
                    
                    <div class=\"create__section\" style=\"width: 20%; margin-left:5% \" >

                        <label class=\"create__label\" for=\"title\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Type", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "foo"], "label" => "Type de Poste"]);
        echo "</label>
                        <label class=\"custom-select\">
                            <div>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Type", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "js-example-basic-single", "value" => twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 32, $this->source); })()), "Type", [], "any", false, false, false, 32)]]);
        echo "</div> 
                        </label>

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
                    <div class=\"create__section\"  style=\"width: 20%; margin-left:5%\">
                        
                        <label class=\"create__label\" for=\"title\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "DateDeb", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de début"]);
        echo "</label>
                        
                        <div >";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "DateDeb", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "date_time2"]]);
        echo "</div>  
                    
                    </div>

                    <div class=\"create__section\"  style=\"width: 20%; margin-left:5%\">
                        
                        <label class=\"create__label\" for=\"title\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "DateFin", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de Fin"]);
        echo "</label>
                        
                        <div>";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "DateFin", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "date_time2"]]);
        echo "</div>  
                    
                    </div>
                </div>
                <div style=\"display:flex; flex-wrap:wrap\">
                    <div class=\"create__section\"  style=\"width: 47.5%\">

                        <label class=\"create__label\" for=\"title\">";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "Fonction", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "foo"], "label" => "Fonction"]);
        echo "</label>
                        <label class=\"custom-select\">
                            <div>";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "Fonction", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "js-example-basic-single", "value" => twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 101, $this->source); })()), "Fonction", [], "any", false, false, false, 101)]]);
        echo "</div> 
                        </label>

                    </div>
                    <div style=\"width: 47.5% ; margin-left:5%\">
                            
                        <div class=\"create__section\" >

                        <label class=\"create__label\" for=\"title\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "Agent", [], "any", false, false, false, 109), 'label', ["label_attr" => ["class" => "foo"], "label" => "Agent"]);
        echo "</label>

                            <label class=\"custom-select\">
                                                                                
                                <div>";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "Agent", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "js-example-basic-single", "placeholder" => "Insérez l'agent"]]);
        echo "</div> 

                            </label>

                        </div>
                    
                    </div>
                </div>
                <div class=\"create__footer\"> 

                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 123
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 123, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                
                </div>
            </div>

        ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
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
        return "postes/new.html.twig";
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
        return array (  259 => 128,  251 => 123,  238 => 113,  231 => 109,  220 => 101,  215 => 99,  205 => 92,  200 => 90,  191 => 84,  186 => 82,  133 => 32,  128 => 30,  118 => 23,  113 => 21,  104 => 15,  96 => 10,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Poste{% endblock %}


{% block list %}
 
 <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"{{ path('app_postes_index') }}\">Retour</a></div> 
 
       {{ form_start(form) }}

            <div class=\"create\">

                <div class=\"create__section\">
                  <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Ajout d'un poste</div> 
                </div>
                <div style=\"display:flex; flex-wrap:wrap\">
                    
                    <div class=\"create__section\" style=\"width: 22.5%; \" >

                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Niveau, 'Niveau', {'label_attr': {'class': 'foo'}}) }}</label>
                        <label class=\"custom-select\">
                            <div>{{ form_widget(form.Niveau, {'attr': {'class': 'js-example-basic-single', 'value': poste.Niveau }}) }}</div> 
                        </label>

                    </div> 
                    
                    <div class=\"create__section\" style=\"width: 20%; margin-left:5% \" >

                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Type, 'Type de Poste', {'label_attr': {'class': 'foo'}}) }}</label>
                        <label class=\"custom-select\">
                            <div>{{ form_widget(form.Type, {'attr': {'class': 'js-example-basic-single', 'value': poste.Type }}) }}</div> 
                        </label>

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
                    <div class=\"create__section\"  style=\"width: 20%; margin-left:5%\">
                        
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.DateDeb, 'Date de début', {'label_attr': {'class': 'foo'}}) }}</label>
                        
                        <div >{{ form_widget(form.DateDeb, {'attr': {'class': 'date_time2' }}) }}</div>  
                    
                    </div>

                    <div class=\"create__section\"  style=\"width: 20%; margin-left:5%\">
                        
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.DateFin, 'Date de Fin', {'label_attr': {'class': 'foo'}}) }}</label>
                        
                        <div>{{ form_widget(form.DateFin, {'attr': {'class': 'date_time2' }}) }}</div>  
                    
                    </div>
                </div>
                <div style=\"display:flex; flex-wrap:wrap\">
                    <div class=\"create__section\"  style=\"width: 47.5%\">

                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Fonction, 'Fonction', {'label_attr': {'class': 'foo'}}) }}</label>
                        <label class=\"custom-select\">
                            <div>{{ form_widget(form.Fonction, {'attr': {'class': 'js-example-basic-single', 'value': poste.Fonction}}) }}</div> 
                        </label>

                    </div>
                    <div style=\"width: 47.5% ; margin-left:5%\">
                            
                        <div class=\"create__section\" >

                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Agent, 'Agent', {'label_attr': {'class': 'foo'}}) }}</label>

                            <label class=\"custom-select\">
                                                                                
                                <div>{{ form_widget(form.Agent, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérez l'agent\" }}) }}</div> 

                            </label>

                        </div>
                    
                    </div>
                </div>
                <div class=\"create__footer\"> 

                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">{{ button_label|default('Sauvegarder') }}</button>
                
                </div>
            </div>

        {{ form_end(form) }}
                             
{% endblock %}
", "postes/new.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\postes\\new.html.twig");
    }
}
