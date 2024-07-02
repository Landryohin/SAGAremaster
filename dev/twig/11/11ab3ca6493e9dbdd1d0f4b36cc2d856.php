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

/* services/new.html.twig */
class __TwigTemplate_a6144eb474bec33dbda52f8a2932fbb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "services/new.html.twig", 1);
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

        echo "Nouveau service";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add"));

        // line 15
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_new");
        echo "\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        ";
        // line 21
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 25
        echo "  <div > <a class=\"btn btn-success\"  style=\"margin-top:15px ;\"   href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_index");
        echo "\">Retour</a></div>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
    <div class=\"create\">
        <div class=\"create__section\">
        
            <div class=\"create__title\"><img src=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Ajout d'une nouvelle service</div>
            
        </div>

           <div style=\"display:flex; flex-wrap:wrap\">
                    <div class=\"create__section\" style=\"width: 47.5%; \">
                        <label class=\"create__label\" for=\"title\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Code", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "foo"], "label" => "Code du service"]);
        echo "</label>
                            <div>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Code", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez le code du service"]]);
        echo "</div> 
                    </div>
                    <div class=\"create__section\" style=\"width: 47.5%;margin-left:5% \">
                        <label class=\"create__label\" for=\"title\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "Libelle", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "foo"], "label" => "Libellé du service"]);
        echo "</label>
                            <div>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Libelle", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Insérez le libellé du service"]]);
        echo "</div> 
                    </div>
         </div>
        
         <div style=\"display:flex; flex-wrap:wrap\">
                                 
                    <div style=\"width: 47.5%; \">
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Direction", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "foo"], "label" => "La direction "]);
        echo "</label>

                            <label class=\"custom-select\">
                                                                                
                                    <div>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Direction", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "js-example-basic-single", "placeholder" => "Insérer le libellé de la direction"]]);
        echo "</div> 

                            </label>
                        </div>
                     </div>
        
            
                     ";
        // line 70
        echo "        </div>
        
        <div class=\"create__footer\"> 
            <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 73
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 73, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
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

    // line 80
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 81
        echo "
  <style>
  
        .footer {
        background-color:white;\t
        color:black;
        }
        @media only screen and (min-width:1600px) {
            .footer {
                bottom:6px;
                margin-top: 3.5%; 
                width: 100%;
            }
        }
        @media only screen and (min-width:1900px) {
            .footer {
                bottom:6px;
                margin-top: 12%; 
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
                                        <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\">DOCUMENTHÈQUE</a></li> 
                                      
                                    </ul>
                                    
                                </div>
                                <div class=\"footer__bline\">
                                  
                                    <ul class=\"footer__social\">
                                         <li class=\"footer__copyright\" style=\"margin-top: 10px; font-size:15px;font-weight:bold; color: blue;\"><span>&copy;DGML République du Bénin le ";
        // line 126
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span></li>
                                      
                                    </ul>
                                    ";
        // line 130
        echo "                                </div>
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
        return "services/new.html.twig";
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
        return array (  273 => 130,  267 => 126,  256 => 118,  217 => 81,  207 => 80,  195 => 77,  188 => 73,  183 => 70,  173 => 53,  166 => 49,  155 => 41,  151 => 40,  145 => 37,  141 => 36,  132 => 30,  125 => 26,  120 => 25,  110 => 24,  99 => 21,  90 => 15,  80 => 14,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau service{% endblock %}
 

{# {% block body %}
    <h1>Create new Services</h1>

    {{ include('services/_form.html.twig') }}

    <a href=\"{{ path('app_services_index') }}\">back to list</a>
{% endblock %} #}

{% block add %}
    <a href=\"{{path('app_services_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}

{% block list %}
  <div > <a class=\"btn btn-success\"  style=\"margin-top:15px ;\"   href=\"{{ path('app_services_index') }}\">Retour</a></div>
{{ form_start(form) }}
    <div class=\"create\">
        <div class=\"create__section\">
        
            <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Ajout d'une nouvelle service</div>
            
        </div>

           <div style=\"display:flex; flex-wrap:wrap\">
                    <div class=\"create__section\" style=\"width: 47.5%; \">
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Code, 'Code du service', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.Code, {'attr': {'class': 'form-control','placeholder': \"Insérez le code du service\" }}) }}</div> 
                    </div>
                    <div class=\"create__section\" style=\"width: 47.5%;margin-left:5% \">
                        <label class=\"create__label\" for=\"title\">{{ form_label(form.Libelle, 'Libellé du service', {'label_attr': {'class': 'foo'}}) }}</label>
                            <div>{{ form_widget(form.Libelle, {'attr': {'class': 'form-control','placeholder': \"Insérez le libellé du service\" }}) }}</div> 
                    </div>
         </div>
        
         <div style=\"display:flex; flex-wrap:wrap\">
                                 
                    <div style=\"width: 47.5%; \">
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Direction, 'La direction ', {'label_attr': {'class': 'foo'}}) }}</label>

                            <label class=\"custom-select\">
                                                                                
                                    <div>{{ form_widget(form.Direction, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérer le libellé de la direction\" }}) }}</div> 

                            </label>
                        </div>
                     </div>
        
            
                     {#<div style=\"width: 47.5%;margin-left:5% \">
                        <div class=\"create__section\">
                            <label class=\"create__label\" for=\"title\">{{ form_label(form.Chef, 'Chef du service', {'label_attr': {'class': 'foo'}}) }}</label>
                            <label class=\"custom-select\">
                                                                                
                                    <div>{{ form_widget(form.Chef, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérer le chef du service\" }}) }}</div> 

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

{% block footer %}

  <style>
  
        .footer {
        background-color:white;\t
        color:black;
        }
        @media only screen and (min-width:1600px) {
            .footer {
                bottom:6px;
                margin-top: 3.5%; 
                width: 100%;
            }
        }
        @media only screen and (min-width:1900px) {
            .footer {
                bottom:6px;
                margin-top: 12%; 
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
                                        <li><a href=\"{{path(\"Accueil\")}}\">DOCUMENTHÈQUE</a></li> 
                                      
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
 
{% endblock %}", "services/new.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\services\\new.html.twig");
    }
}
