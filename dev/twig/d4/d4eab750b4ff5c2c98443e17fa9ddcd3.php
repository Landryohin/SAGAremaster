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

/* Affectations/edit.html.twig */
class __TwigTemplate_a9678aa2551bcc858a758c1d8b525c70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Affectations/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Affectations/edit.html.twig", 1);
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

        echo "Modification d'affectation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 6
        echo "    <a href=\"";
        echo "app_Affectations_new";
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 12
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 16
        echo "<div style=\"  margin-top: 15px\" >
  <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_index");
        echo "\">Retour</a></div>
  <div style=\"text-align:right; margin-top:-37px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>
</div>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
    <div class=\"create\">
        <div class=\"create__section\">
            <div class=\"create__title\"><img src=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/update.fb0ac4e5.svg"), "html", null, true);
        echo ">Modification d'un Affectation</div> 
        </div>
        <div style=\" display: flex;flex-wrap: wrap;\" >   
            <div  style=\"margin-top: 20px; width:35% \">
                <div class=\"create__section\" >
                    <label class=\"create__label\" for=\"title\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Document", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "foo"], "label" => "Document"]);
        echo "</label>
                    <div>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Document", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 29, $this->source); })()), "Document", [], "any", false, false, false, 29), "readonly" => true]]);
        echo "</div> 
                </div>  

                <div class=\"create__section\" >          
                    <label class=\"create__label\" for=\"title\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Envoyeur", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "foo"], "label" => "Expéditeur"]);
        echo "</label>
                    <div>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Envoyeur", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 34, $this->source); })()), "Envoyeur", [], "any", false, false, false, 34), "readonly" => true]]);
        echo "</div> 
                </div>
            
                <div class=\"create__section\">
                    <label class=\"create__label\" for=\"title\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Date_Affectation_at", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "foo"], "label" => "Date de affectation"]);
        echo "</label>
                    <div>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Date_Affectation_at", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "date_time"]]);
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
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Receveur", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "foo"], "label" => "Destinataire"]);
        echo "</label>
                    <label class=\"custom-select\">                                              
                        <div>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Receveur", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "js-example-basic-single", "value" => twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 61, $this->source); })()), "Receveur", [], "any", false, false, false, 61)]]);
        echo "</div> 
                    </label>
                </div>
                <div class=\"create__footer\"> 
                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 65
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 65, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                </div>
            </div>
            <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                ";
        // line 70
        echo "                <embed src=\"../../Documents/";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 70, $this->source); })()), "Document", [], "any", false, false, false, 70), "DocumentAt", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 70, $this->source); })()), "Document", [], "any", false, false, false, 70), "DocumentAt", [], "any", false, false, false, 70), "Y/m/d"), "html", null, true))) : (print ("")));
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 70, $this->source); })()), "Document", [], "any", false, false, false, 70), "Chemin", [], "any", false, false, false, 70), "html", null, true);
        echo "\" width=\"600\" height=\"500\" type='application/pdf'></embed> 
            </div>
        </div>
            
    </div>
            
</div>
    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
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
        return "Affectations/edit.html.twig";
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
        return array (  223 => 77,  210 => 70,  203 => 65,  196 => 61,  191 => 59,  168 => 39,  164 => 38,  157 => 34,  153 => 33,  146 => 29,  142 => 28,  134 => 23,  128 => 20,  122 => 17,  119 => 16,  109 => 15,  98 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification d'affectation{% endblock %}
 
 {% block add %}
    <a href=\"{{'app_Affectations_new'}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
<div style=\"  margin-top: 15px\" >
  <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"{{ path('app_Affectations_index') }}\">Retour</a></div>
  <div style=\"text-align:right; margin-top:-37px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>
</div>
{{ form_start(form) }}
    <div class=\"create\">
        <div class=\"create__section\">
            <div class=\"create__title\"><img src={{asset('build/images/icons/update.fb0ac4e5.svg')}}>Modification d'un Affectation</div> 
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
                    <div>{{ form_widget(form.Date_Affectation_at, {'attr': {'class': 'date_time',  }}) }}</div>  
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
                        <div>{{ form_widget(form.Receveur, {'attr': {'class': 'js-example-basic-single','value': affectation.Receveur }}) }}</div> 
                    </label>
                </div>
                <div class=\"create__footer\"> 
                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">{{ button_label|default('Sauvegarder') }}</button>
                </div>
            </div>
            <div style=\"width:60% ;margin-left:5%;overflow : auto; text-align : center;margin-top:3%;\" >
                {#<embed src=\"{{asset(documents_dir, '', 'FTP')}}\" width=\"600\" height=\"500\" type='application/pdf'></embed>#}
                <embed src=\"../../Documents/{{affectation.Document.DocumentAt ? affectation.Document.DocumentAt|date('Y/m/d') : ''}}/{{affectation.Document.Chemin}}\" width=\"600\" height=\"500\" type='application/pdf'></embed> 
            </div>
        </div>
            
    </div>
            
</div>
    {{ form_end(form) }}
                             
{% endblock %}

", "Affectations/edit.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\Affectations\\edit.html.twig");
    }
}
