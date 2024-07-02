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

/* users/new.html.twig */
class __TwigTemplate_8a20857e68ce059d66c618256207456a extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/new.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout d'utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 14
        echo "    <a \"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 20
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 24
        echo "  <div > <a class=\"btn btn-success\" style=\"margin-top: 15px ;\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        echo "\">Retour</a></div>
                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
                                <div class=\"create\">
                                <div class=\"create__section\">
                                
                                    <div class=\"create__title\"><img src=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Ajout d'un nouvel utilisateur</div>
                                   
                                </div>


                              <div style=\"display:flex; flex-wrap:wrap\">   

                                    <div class=\"create__section\" style=\"width: 47.5%;\">
                                        <label class=\"create__label\" for=\"title\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "foo"], "label" => "Nom "]);
        echo "</label>
                                        <div>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez le nom de l'utilisateur"]]);
        echo "</div> 
                                    </div>
                                     <div class=\"create__section\"  <div style=\"width: 47.5%;margin-left:5% \">
                                        <label class=\"create__label\" for=\"title\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "foo"], "label" => "Prénom(s)"]);
        echo "</label>
                                        <div>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérer le(s) prenom(s) de l'utilisateur"]]);
        echo "</div> 
                                    </div>
                                    
                               </div>


                              <div style=\"display:flex; flex-wrap:wrap\">   

                                    <div class=\"create__section\" style=\"width: 47.5%;\">
                                        <label class=\"create__label\" for=\"title\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "foo"], "label" => "Email"]);
        echo "</label>
                                        <div>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez le email de l'utilisateur"]]);
        echo "</div> 
                                    </div>
                                   
                                    <div style=\"width: 47.5%; margin-left:5%\">
                                     
                                    <div class=\"create__section\">
                                      <label class=\"create__label\" for=\"title\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "roles", [], "any", false, false, false, 58), 'label', ["label" => "Rôles"]);
        echo "</label>

                                        <label class=\"custom-select\">
                                                                                            
                                             <div>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "roles", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
        echo "</div> 

                                        </label>
                                    </div>
                                    
                            </div>


                            ";
        // line 98
        echo "                                <div class=\"create__footer\"> 
                                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 99
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 99, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                                </div>
                            </div>

                        ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
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
        return "users/new.html.twig";
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
        return array (  209 => 103,  202 => 99,  199 => 98,  188 => 62,  181 => 58,  172 => 52,  168 => 51,  156 => 42,  152 => 41,  146 => 38,  142 => 37,  131 => 29,  124 => 25,  119 => 24,  109 => 23,  98 => 20,  89 => 14,  79 => 13,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source(" 

{% extends 'base.html.twig' %}

{% block title %}Ajout d'utilisateur{% endblock %}

{# {% block body %}
    <h1>Create new Users</h1>
    {{ include('users/_form.html.twig') }}
    <a href=\"{{ path('app_users_index') }}\">back to list</a>
{% endblock %} #}

{% block add %}
    <a \"{{path('app_users_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
  <div > <a class=\"btn btn-success\" style=\"margin-top: 15px ;\"  href=\"{{ path('app_users_index') }}\">Retour</a></div>
                    {{ form_start(form) }}
                                <div class=\"create\">
                                <div class=\"create__section\">
                                
                                    <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Ajout d'un nouvel utilisateur</div>
                                   
                                </div>


                              <div style=\"display:flex; flex-wrap:wrap\">   

                                    <div class=\"create__section\" style=\"width: 47.5%;\">
                                        <label class=\"create__label\" for=\"title\">{{ form_label(form.nom, 'Nom ', {'label_attr': {'class': 'foo'}}) }}</label>
                                        <div>{{ form_widget(form.nom, {'attr': {'class': 'form-control','placeholder': \"Insérez le nom de l'utilisateur\" }}) }}</div> 
                                    </div>
                                     <div class=\"create__section\"  <div style=\"width: 47.5%;margin-left:5% \">
                                        <label class=\"create__label\" for=\"title\">{{ form_label(form.prenom, 'Prénom(s)', {'label_attr': {'class': 'foo'}}) }}</label>
                                        <div>{{ form_widget(form.prenom, {'attr': {'class': 'form-control','placeholder': \"Insérer le(s) prenom(s) de l'utilisateur\" }}) }}</div> 
                                    </div>
                                    
                               </div>


                              <div style=\"display:flex; flex-wrap:wrap\">   

                                    <div class=\"create__section\" style=\"width: 47.5%;\">
                                        <label class=\"create__label\" for=\"title\">{{ form_label(form.email, 'Email', {'label_attr': {'class': 'foo'}}) }}</label>
                                        <div>{{ form_widget(form.email, {'attr': {'class': 'form-control','placeholder': \"Insérez le email de l'utilisateur\" }}) }}</div> 
                                    </div>
                                   
                                    <div style=\"width: 47.5%; margin-left:5%\">
                                     
                                    <div class=\"create__section\">
                                      <label class=\"create__label\" for=\"title\">{{ form_label(form.roles, 'Rôles' ) }}</label>

                                        <label class=\"custom-select\">
                                                                                            
                                             <div>{{ form_widget(form.roles, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 

                                        </label>
                                    </div>
                                    
                            </div>


                            {#<div style=\"display:flex; flex-wrap:wrap\">  
                                    <div  style=\"width: 47.5%;\">
                                   
                                        <div class=\"create__section\">
                                          <label class=\"create__label\" for=\"title\">{{ form_label(form.Niveau, 'Niveau') }}</label>

                                            <label class=\"custom-select\">
                                                                                                
                                                     <div>{{ form_widget(form.Niveau, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 

                                            </label>
                                        </div>
                                    </div>

                                    <div style=\"width: 47.5%;margin-left:5%\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Zone, 'Zone', {'label_attr': {'class': 'foo'}}) }}</label>

                                            <label class=\"custom-select\">
                                                                                                
                                                <div>{{ form_widget(form.Zone, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérer le service de la direction\" }}) }}</div> 

                                            </label>
                                        </div>
                                    </div>
                            
                                </div>
                            #}
                                <div class=\"create__footer\"> 
                                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">{{ button_label|default('Sauvegarder') }}</button>
                                </div>
                            </div>

                        {{ form_end(form) }}
                             
{% endblock %}
 ", "users/new.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\users\\new.html.twig");
    }
}
