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

/* type_documents/edit.html.twig */
class __TwigTemplate_f3b32b5a5924a60b5216308108ddba34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_documents/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_documents/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "type_documents/edit.html.twig", 1);
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

        echo "Modification type de Documents";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 16
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_documents_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 22
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        echo " 

  <div style=\"  margin-top: 15px\" >
 <div  > <a class=\"btn btn-success\"  href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_documents_index");
        echo "\">Retour</a></div>
  <div style=\"text-align:right; margin-top:-37px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>
    <div>
                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
                                <div class=\"create\">
                                <div class=\"create__section\">
                                
                                    <div class=\"create__title\"><img src=";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/update.fb0ac4e5.svg"), "html", null, true);
        echo ">Modification de type de documents</div>
                                   
                                </div>
                                
                                <div style=\"display:flex; flex-wrap:wrap\">
                                        <div class=\"create__section\" style=\"width: 47.5%; \" >
                                            <label class=\"create__label\" for=\"title\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Code", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "foo"], "label" => "Code de la direction"]);
        echo "</label>
                                            <div>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Code", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["type_document"]) || array_key_exists("type_document", $context) ? $context["type_document"] : (function () { throw new RuntimeError('Variable "type_document" does not exist.', 42, $this->source); })()), "Code", [], "any", false, false, false, 42)]]);
        echo "</div> 
                                        </div>
                                        <div class=\"create__section\" style=\"width: 47.5%;margin-left:5% \">
                                            <label class=\"create__label\" for=\"title\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Libelle", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "foo"], "label" => "Libellé de la direction"]);
        echo "</label>
                                            <div>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Libelle", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, (isset($context["type_document"]) || array_key_exists("type_document", $context) ? $context["type_document"] : (function () { throw new RuntimeError('Variable "type_document" does not exist.', 46, $this->source); })()), "Libelle", [], "any", false, false, false, 46)]]);
        echo "</div> 
                                        </div>
                                </div>
                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                    <div style=\"width: 47.5%; \">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Direction", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "foo"], "label" => "La direction "]);
        echo "</label>

                                            <label class=\"custom-select\">
                                                                                                
                                                    <div>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "Direction", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "js-example-basic-single", "value" => twig_get_attribute($this->env, $this->source, (isset($context["type_document"]) || array_key_exists("type_document", $context) ? $context["type_document"] : (function () { throw new RuntimeError('Variable "type_document" does not exist.', 57, $this->source); })()), "Direction", [], "any", false, false, false, 57)]]);
        echo "</div> 

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=\"create__footer\"> 
                                    <button class=\" btn btn-warning\">";
        // line 65
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 65, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                                </div>
                            </div>

                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
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
        return "type_documents/edit.html.twig";
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
        return array (  194 => 69,  187 => 65,  176 => 57,  169 => 53,  159 => 46,  155 => 45,  149 => 42,  145 => 41,  136 => 35,  129 => 31,  123 => 28,  109 => 25,  98 => 22,  89 => 16,  79 => 15,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification type de Documents{% endblock %}

{# {% block body %}
    <h1>Edit TypeDocuments</h1>

    {{ include('type_documents/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('app_type_documents_index') }}\">back to list</a>

    {{ include('type_documents/_delete_form.html.twig') }}
{% endblock %} #}

{% block add %}
    <a href=\"{{path('app_type_documents_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %} 

  <div style=\"  margin-top: 15px\" >
 <div  > <a class=\"btn btn-success\"  href=\"{{ path('app_type_documents_index') }}\">Retour</a></div>
  <div style=\"text-align:right; margin-top:-37px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>
    <div>
                    {{ form_start(form) }}
                                <div class=\"create\">
                                <div class=\"create__section\">
                                
                                    <div class=\"create__title\"><img src={{asset('build/images/icons/update.fb0ac4e5.svg')}}>Modification de type de documents</div>
                                   
                                </div>
                                
                                <div style=\"display:flex; flex-wrap:wrap\">
                                        <div class=\"create__section\" style=\"width: 47.5%; \" >
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Code, 'Code de la direction', {'label_attr': {'class': 'foo'}}) }}</label>
                                            <div>{{ form_widget(form.Code, {'attr': {'class': 'form-control','value': type_document.Code }}) }}</div> 
                                        </div>
                                        <div class=\"create__section\" style=\"width: 47.5%;margin-left:5% \">
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Libelle, 'Libellé de la direction', {'label_attr': {'class': 'foo'}}) }}</label>
                                            <div>{{ form_widget(form.Libelle, {'attr': {'class': 'form-control','value': type_document.Libelle }}) }}</div> 
                                        </div>
                                </div>
                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                    <div style=\"width: 47.5%; \">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Direction, 'La direction ', {'label_attr': {'class': 'foo'}}) }}</label>

                                            <label class=\"custom-select\">
                                                                                                
                                                    <div>{{ form_widget(form.Direction, {'attr': {'class': 'js-example-basic-single','value': type_document.Direction }}) }}</div> 

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=\"create__footer\"> 
                                    <button class=\" btn btn-warning\">{{ button_label|default('Modifier') }}</button>
                                </div>
                            </div>

                        {{ form_end(form) }}
                             
{% endblock %}
", "type_documents/edit.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\type_documents\\edit.html.twig");
    }
}
