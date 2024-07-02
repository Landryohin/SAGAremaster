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

/* users/changePassword.html.twig */
class __TwigTemplate_27992af317084f6ed3877b9735de3957 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subtitle' => [$this, 'block_subtitle'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_login2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/changePassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/changePassword.html.twig"));

        $this->parent = $this->loadTemplate("base_login2.html.twig", "users/changePassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        echo " 

    <div class=\"d-flex\">
        <div class=\"w-100\">
            <h4 class=\"mb-4\">Modification de mot de passe</h4>
        </div>
\t </div> 

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        echo " 
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
    <div class=\"fxt-form\">
        <div class= 'text-danger'>
        ";
        // line 17
        if ((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 17, $this->source); })())) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 17, $this->source); })()), "html", null, true);
        }
        echo " <br>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors');
        echo "  
        </div>
         
        <p>Veuillez entrez vos informations de connection .</p>
            <div class=\"form-group\">                                                
                <div class=\"fxt-transformY-50 fxt-transition-delay-1\">  
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "old_password", [], "any", false, false, false, 24), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "old_password", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                     <div class= 'text-danger'>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "old_password", [], "any", false, false, false, 26), 'errors');
        echo "</div>
                </div>
            </div>
            
            <div class=\"form-group\">                                                
                <div class=\"fxt-transformY-50 fxt-transition-delay-2\">    
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), "first", [], "any", false, false, false, 32), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "password", [], "any", false, false, false, 33), "first", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                    <div class= 'text-danger'>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), "first", [], "any", false, false, false, 34), 'errors');
        echo "</div>
                    <i class=\"flaticon-padlock\"></i>
                </div>
            </div>

            <div class=\"form-group\">                                                
                <div class=\"fxt-transformY-50 fxt-transition-delay-2\">    
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), "second", [], "any", false, false, false, 41), 'label');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), "second", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                    <div class= 'text-danger'>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "password", [], "any", false, false, false, 43), "second", [], "any", false, false, false, 43), 'errors');
        echo "</div>
                    <i class=\"flaticon-padlock\"></i>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"fxt-transformY-50 fxt-transition-delay-3\">
                    <div class=\"fxt-content-between\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "submit", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control col"]]);
        echo " 
                    </div>
                </div>
            </div>
    </div>  
";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
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
        return "users/changePassword.html.twig";
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
        return array (  181 => 55,  173 => 50,  163 => 43,  159 => 42,  155 => 41,  145 => 34,  141 => 33,  137 => 32,  128 => 26,  124 => 25,  120 => 24,  111 => 18,  104 => 17,  98 => 14,  86 => 13,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_login2.html.twig' %}

{% block subtitle %} 

    <div class=\"d-flex\">
        <div class=\"w-100\">
            <h4 class=\"mb-4\">Modification de mot de passe</h4>
        </div>
\t </div> 

 {% endblock %}

{% block form %} 
{{ form_start(form) }}
    <div class=\"fxt-form\">
        <div class= 'text-danger'>
        {% if notification %} {{notification}}{% endif %} <br>
        {{ form_errors(form) }}  
        </div>
         
        <p>Veuillez entrez vos informations de connection .</p>
            <div class=\"form-group\">                                                
                <div class=\"fxt-transformY-50 fxt-transition-delay-1\">  
                    {{ form_label(form.old_password  ) }}
                    {{ form_widget(form.old_password,{'attr': {'class': 'form-control'}}) }} 
                     <div class= 'text-danger'>{{ form_errors(form.old_password) }}</div>
                </div>
            </div>
            
            <div class=\"form-group\">                                                
                <div class=\"fxt-transformY-50 fxt-transition-delay-2\">    
                    {{ form_label(form.password.first  ) }}
                    {{ form_widget(form.password.first,{'attr': {'class': 'form-control'}}) }} 
                    <div class= 'text-danger'>{{ form_errors(form.password.first) }}</div>
                    <i class=\"flaticon-padlock\"></i>
                </div>
            </div>

            <div class=\"form-group\">                                                
                <div class=\"fxt-transformY-50 fxt-transition-delay-2\">    
                    {{ form_label(form.password.second  ) }}
                    {{ form_widget(form.password.second,{'attr': {'class': 'form-control'}}) }} 
                    <div class= 'text-danger'>{{ form_errors(form.password.second) }}</div>
                    <i class=\"flaticon-padlock\"></i>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"fxt-transformY-50 fxt-transition-delay-3\">
                    <div class=\"fxt-content-between\">
                        {{ form_widget(form.submit, {'attr': {'class': 'form-control col'}}) }} 
                    </div>
                </div>
            </div>
    </div>  
{{ form_end(form) }}
{% endblock %}", "users/changePassword.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\users\\changePassword.html.twig");
    }
}
