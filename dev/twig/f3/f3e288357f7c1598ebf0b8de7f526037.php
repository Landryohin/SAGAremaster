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

/* statistiques/index_DPIB.html.twig */
class __TwigTemplate_87ae679851d04a7b1913d4cca13a5888 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistiques/index_DPIB.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistiques/index_DPIB.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "statistiques/index_DPIB.html.twig", 1);
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

        echo "Tableaux statistiques de suivi courriers DPIB";
        
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
    <div style=\" margin-top:50px; \">
        <h5 style=\"text-align : center\">Tableau Général suivi courriers DPIB</h5> 

        <div style=\"background-color : white;border-top : 0.5px solid #c4c4c4;margin-top:10px\">
            <table class=\"table table-responsive table-hover expensive display nowrap dataTable dtr-inline collapsed\" id=\"dpib\" style=\"width: 100%;\" >
                    <thead style=\"background-color : #e9ecee;\">
                        <tr style=\"font-weight : bold; text-transform : uppercase\">
                            <td style=\"text-align : center; width : 5%\">№</td> 
                            <td style=\"text-align : center; width : 10%\">Origine</td> 
                            <td style=\"text-align : center; width : 10%\">Obj</td> 
                            <td style=\"text-align : center; width : 10%\">Ref </td> 
                            <td style=\"text-align : center; width : 15%\">Num ENR</td> 
                            <td style=\"text-align : center; width : 10%\">ST</td> 
                            <td style=\"text-align : center; width : 10%\">D.AFF</td> 
                            <td style=\"text-align : center; width : 10%\">NT</td>  
                            <td style=\"text-align : center; width : 15%\">Obs </td>  
                        </tr> 
                    </thead>
                    <tbody> 
                     
                    </body>
                </table>
            </div>
         <span style=\"font-size:14px\"> <span><b>Legende:</b></span>  <b>OBJ :</b> Objet ;  <b>REF :</b> Reference;  <b>NUM ENR :</b> Numero d'enregistrement; <b>ST :</b> Service traitant; <b>D.AFF :</b> Date d'affectation; <b>NT :</b> Niveau de traitement; <b>OBS :</b> Observation;  </span> 

    </div>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "
  <style>
  
        .footer {
        background-color:white;\t
        color:black;
        }
        @media only screen and (min-width:1600px) {
            .footer {
                bottom:6px;
                margin-top: 2.5%; 
                width: 100%;
            }
        }
        @media only screen and (min-width:1900px) {
            .footer {
                bottom:6px;
                margin-top: 8%; 
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
                                <li><a href=\"#\">TABLEAU DE BORD</a></li> 
                                
                            </ul>
                            
                        </div>
                        <div class=\"footer__bline\">
                            
                            <ul class=\"footer__social\">
                                    <li class=\"footer__copyright\" style=\"margin-top: 10px; font-size:15px;font-weight:bold; color: blue;\"><span>&copy;DGML République du Bénin le ";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span></li>
                                
                            </ul>
                            ";
        // line 87
        echo "                        </div>
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
        return "statistiques/index_DPIB.html.twig";
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
        return array (  191 => 87,  185 => 83,  138 => 38,  128 => 37,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableaux statistiques de suivi courriers DPIB{% endblock %}

{% block list %}
 
    <div style=\" margin-top:50px; \">
        <h5 style=\"text-align : center\">Tableau Général suivi courriers DPIB</h5> 

        <div style=\"background-color : white;border-top : 0.5px solid #c4c4c4;margin-top:10px\">
            <table class=\"table table-responsive table-hover expensive display nowrap dataTable dtr-inline collapsed\" id=\"dpib\" style=\"width: 100%;\" >
                    <thead style=\"background-color : #e9ecee;\">
                        <tr style=\"font-weight : bold; text-transform : uppercase\">
                            <td style=\"text-align : center; width : 5%\">№</td> 
                            <td style=\"text-align : center; width : 10%\">Origine</td> 
                            <td style=\"text-align : center; width : 10%\">Obj</td> 
                            <td style=\"text-align : center; width : 10%\">Ref </td> 
                            <td style=\"text-align : center; width : 15%\">Num ENR</td> 
                            <td style=\"text-align : center; width : 10%\">ST</td> 
                            <td style=\"text-align : center; width : 10%\">D.AFF</td> 
                            <td style=\"text-align : center; width : 10%\">NT</td>  
                            <td style=\"text-align : center; width : 15%\">Obs </td>  
                        </tr> 
                    </thead>
                    <tbody> 
                     
                    </body>
                </table>
            </div>
         <span style=\"font-size:14px\"> <span><b>Legende:</b></span>  <b>OBJ :</b> Objet ;  <b>REF :</b> Reference;  <b>NUM ENR :</b> Numero d'enregistrement; <b>ST :</b> Service traitant; <b>D.AFF :</b> Date d'affectation; <b>NT :</b> Niveau de traitement; <b>OBS :</b> Observation;  </span> 

    </div>
    

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
                margin-top: 2.5%; 
                width: 100%;
            }
        }
        @media only screen and (min-width:1900px) {
            .footer {
                bottom:6px;
                margin-top: 8%; 
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
                                <li><a href=\"#\">TABLEAU DE BORD</a></li> 
                                
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
{% endblock %}
  
", "statistiques/index_DPIB.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\statistiques\\index_DPIB.html.twig");
    }
}
