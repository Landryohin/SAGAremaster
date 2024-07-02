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

/* secretariats/new.html.twig */
class __TwigTemplate_c865f87aecbaf873030fe1f92f990969 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secretariats/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secretariats/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "secretariats/new.html.twig", 1);
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

        echo "Nouveau point de traitement";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secretariats_new");
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

    // line 16
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 17
        echo "  <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secretariats_index");
        echo "\">Retour</a></div>

  
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                                <div class=\"create\">


                                <div class=\"create__section\">
                                    <div class=\"create__title\"><img src=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/iconplus.5ed37a8f.svg"), "html", null, true);
        echo ">Ajout d'un point de traitement de courier</div> 
                                </div>


                                


                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                        <div style=\"width: 47.5%; \">
                                           
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Direction", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "foo"], "label" => "Nom de la direction"]);
        echo "</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Direction", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "js-example-basic-single", "placeholder" => "Nom de la direction"]]);
        echo "</div> 

                                                    </label>
                                                </div>
                                          
                                        </div>
                                        <div style=\"width: 47.5%;margin-left:5% \">
                                            
                                        
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Secretaire", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "foo"], "label" => "Secrétaire de la direction"]);
        echo "</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Secretaire", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
        echo "</div> 

                                                    </label>
                                                </div>
                                       
                                        </div>

                                </div>

                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                        <div style=\"width: 47.5%; \">
                                           
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "Type", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "foo"], "label" => "Type de point de traitement"]);
        echo "</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "Type", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
        echo "</div> 

                                                    </label>
                                                </div>
                                          
                                        </div>
                                     

                                </div>

                               
                               
                                <div class=\"create__footer\"> 
                                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 86
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 86, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                                </div>
                            </div>

                        ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
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
        return "secretariats/new.html.twig";
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
        return array (  223 => 90,  216 => 86,  200 => 73,  193 => 69,  176 => 55,  169 => 51,  156 => 41,  149 => 37,  134 => 25,  126 => 20,  119 => 17,  109 => 16,  98 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau point de traitement{% endblock %}

  {% block add %}
    <a href=\"{{path('app_secretariats_new')}}\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
        {#<img src=\"{{ 'assets/Dashboard/fonts/icons/main/New_Topic.svg'}}\" alt=\"Ajout\">#}
    </a>
{% endblock %}


{% block list %}
  <div > <a class=\"btn btn-success\" style=\"margin-top: 15px;\"  href=\"{{ path('app_secretariats_index') }}\">Retour</a></div>

  
                    {{ form_start(form) }}
                                <div class=\"create\">


                                <div class=\"create__section\">
                                    <div class=\"create__title\"><img src={{asset('build/images/icons/iconplus.5ed37a8f.svg')}}>Ajout d'un point de traitement de courier</div> 
                                </div>


                                


                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                        <div style=\"width: 47.5%; \">
                                           
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.Direction, 'Nom de la direction', {'label_attr': {'class': 'foo'}}) }}</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>{{ form_widget(form.Direction, {'attr': {'class': 'js-example-basic-single','placeholder': \"Nom de la direction\" }}) }}</div> 

                                                    </label>
                                                </div>
                                          
                                        </div>
                                        <div style=\"width: 47.5%;margin-left:5% \">
                                            
                                        
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.Secretaire, 'Secrétaire de la direction', {'label_attr': {'class': 'foo'}}) }}</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>{{ form_widget(form.Secretaire, {'attr': {'class': 'js-example-basic-single' }}) }}</div> 

                                                    </label>
                                                </div>
                                       
                                        </div>

                                </div>

                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                        <div style=\"width: 47.5%; \">
                                           
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">{{ form_label(form.Type, 'Type de point de traitement', {'label_attr': {'class': 'foo'}}) }}</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>{{ form_widget(form.Type, {'attr': {'class': 'js-example-basic-single'}}) }}</div> 

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
", "secretariats/new.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\secretariats\\new.html.twig");
    }
}
