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

/* secretariats/edit.html.twig */
class __TwigTemplate_981dda5cc601455ba46c0603966ff287 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secretariats/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secretariats/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "secretariats/edit.html.twig", 1);
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

        echo "Modification de point traitement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 6
        echo "
<div style=\"  margin-top: 15px\" >
  <div > <a class=\"btn btn-success\"  href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secretariats_index");
        echo "\">Retour</a></div>
  <div style=\"text-align:right; margin-top:-37px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>
</div>

  
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                                <div class=\"create\">


                                <div class=\"create__section\">
                                    <div class=\"create__title\"><img src=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/update.fb0ac4e5.svg"), "html", null, true);
        echo ">Modification d'un point de traitement de courier</div> 
                                </div>


                               

                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                        <div style=\"width: 47.5%; \">
                                           
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Direction", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "foo"], "label" => "Nom de la direction"]);
        echo "</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Direction", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "js-example-basic-single", "placeholder" => "Nom de la direction"]]);
        echo "</div> 

                                                    </label>
                                                </div>
                                          
                                        </div>
                                        <div style=\"width: 47.5%;margin-left:5% \">
                                            
                                        
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Secretaire", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "foo"], "label" => "Secrétaire de la direction"]);
        echo "</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Secretaire", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "js-example-basic-single", "placeholder" => "Insérez le chef de la direction"]]);
        echo "</div> 

                                                    </label>
                                                </div>
                                       
                                        </div>

                                </div>

                                <div style=\"display:flex; flex-wrap:wrap\">
                                 
                                        <div style=\"width: 47.5%; \">
                                           
                                                <div class=\"create__section\" >
                                                <label class=\"create__label\" for=\"title\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Type", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "foo"], "label" => "Type de point de traitement"]);
        echo "</label>

                                                    <label class=\"custom-select\">
                                                                                                        
                                                        <div>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "Type", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "js-example-basic-single"]]);
        echo "</div> 

                                                    </label>
                                                </div>
                                          
                                        </div>
                                     

                                </div>
                               
                                <div class=\"create__footer\"> 
                                    <button class=\"create__btn-create btn btn--type-02 btn btn-success\">";
        // line 76
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 76, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
                                </div>
                            </div>

                        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
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
        return "secretariats/edit.html.twig";
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
        return array (  194 => 80,  187 => 76,  173 => 65,  166 => 61,  149 => 47,  142 => 43,  129 => 33,  122 => 29,  108 => 18,  100 => 13,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification de point traitement{% endblock %}

{% block list %}

<div style=\"  margin-top: 15px\" >
  <div > <a class=\"btn btn-success\"  href=\"{{ path('app_secretariats_index') }}\">Retour</a></div>
  <div style=\"text-align:right; margin-top:-37px\"> <a class=\"btn btn-danger\"  href=\" \">Supprimer</a></div>
</div>

  
                    {{ form_start(form) }}
                                <div class=\"create\">


                                <div class=\"create__section\">
                                    <div class=\"create__title\"><img src={{asset('build/images/icons/update.fb0ac4e5.svg')}}>Modification d'un point de traitement de courier</div> 
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
                                                                                                        
                                                        <div>{{ form_widget(form.Secretaire, {'attr': {'class': 'js-example-basic-single','placeholder': \"Insérez le chef de la direction\" }}) }}</div> 

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
", "secretariats/edit.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\secretariats\\edit.html.twig");
    }
}
