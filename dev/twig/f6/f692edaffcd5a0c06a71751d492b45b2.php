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

/* divisions/new.html.twig */
class __TwigTemplate_6a04918eae44700c0cb7d7b28d2279bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "divisions/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "divisions/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "divisions/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nouvelle division";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 7
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_divisions_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 13
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 17
        echo "    <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_divisions_index");
        echo "\">Retour</a></div>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                <div class=\"create\">


                <div class=\"create__section\">
                    <div class=\"create__title\"><img src=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Ajout d'une nouvelle division</div> 
                </div>


                <div style=\"display:flex; flex-wrap:wrap\">
                    <div class=\"create__section\"  style=\"width: 47.5%; \">
                        <label class=\"create__label\" for=\"title\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Code", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "foo"], "label" => "Code de la division"]);
        echo "</label>
                        <div>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Code", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez le code de la division"]]);
        echo "</div>  
                    </div>
                    <div class=\"create__section\"  style=\"width: 47.5%;margin-left:5%\">
                        <label class=\"create__label\" for=\"title\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Libelle", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "foo"], "label" => "Libellé de la division"]);
        echo "</label>
                        <div>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Libelle", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez le libellé de la division"]]);
        echo "</div> 
                    </div>
                </div>


                <div style=\"display:flex; flex-wrap:wrap\">
                    
                        <div style=\"width: 47.5%; \">
                            
                                <div class=\"create__section\" >
                                <label class=\"create__label\" for=\"title\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "Service", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "foo"], "label" => "Service de la division"]);
        echo "</label>

                                    <label class=\"custom-select\">
                                                                                        
                                        <div>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Service", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "js-example-basic-single", "placeholder" => "Insérez le service de la division"]]);
        echo "</div> 

                                    </label>
                                </div>
                            
                        </div>
                        ";
        // line 68
        echo "
                </div>
                
                <div class=\"create__footer\"> 
                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 72, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                </div>
            </div>

        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
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
        return "divisions/new.html.twig";
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
        return array (  197 => 76,  190 => 72,  184 => 68,  175 => 48,  168 => 44,  155 => 34,  151 => 33,  145 => 30,  141 => 29,  132 => 23,  124 => 18,  119 => 17,  109 => 16,  98 => 13,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 

{% block title %}Nouvelle division{% endblock %}
 
 {% block add %}
    <a href=\"{{path('app_divisions_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
    <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"{{ path('app_divisions_index') }}\">Retour</a></div>
    {{ form_start(form) }}
                <div class=\"create\">


                <div class=\"create__section\">
                    <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Ajout d'une nouvelle division</div> 
                </div>


                <div style=\"display:flex; flex-wrap:wrap\">
                    <div class=\"create__section\"  style=\"width: 47.5%; \">
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Code, 'Code de la division', {'label_attr': {'class': 'foo'}}) }}</label>
                        <div>{{ form_widget(form.Code, {'attr': {'class': 'form-control','placeholder': \"Insérez le code de la division\" }}) }}</div>  
                    </div>
                    <div class=\"create__section\"  style=\"width: 47.5%;margin-left:5%\">
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Libelle, 'Libellé de la division', {'label_attr': {'class': 'foo'}}) }}</label>
                        <div>{{ form_widget(form.Libelle, {'attr': {'class': 'form-control','placeholder': \"Insérez le libellé de la division\" }}) }}</div> 
                    </div>
                </div>


                <div style=\"display:flex; flex-wrap:wrap\">
                    
                        <div style=\"width: 47.5%; \">
                            
                                <div class=\"create__section\" >
                                <label class=\"create__label\" for=\"title\">{{ form_label(form.Service, 'Service de la division', {'label_attr': {'class': 'foo'}}) }}</label>

                                    <label class=\"custom-select\">
                                                                                        
                                        <div>{{ form_widget(form.Service, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérez le service de la division\" }}) }}</div> 

                                    </label>
                                </div>
                            
                        </div>
                        {#<div style=\"width: 47.5%;margin-left:5% \">
                            
                        
                                <div class=\"create__section\" >
                                <label class=\"create__label\" for=\"title\">{{ form_label(form.Chef, 'Chef de la division', {'label_attr': {'class': 'foo'}}) }}</label>

                                    <label class=\"custom-select\">
                                                                                        
                                        <div>{{ form_widget(form.Chef, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérez le chef de la division\" }}) }}</div> 

                                    </label>
                                </div>
                        
                        </div>#}

                </div>
                
                <div class=\"create__footer\"> 
                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">{{ button_label|default('Sauvegarder') }}</button>
                </div>
            </div>

        {{ form_end(form) }}
                             
{% endblock %}
", "divisions/new.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\divisions\\new.html.twig");
    }
}
