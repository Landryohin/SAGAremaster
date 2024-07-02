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

/* base_login.html.twig */
class __TwigTemplate_497075e15be0d295e641c46ece88864a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_login.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{# <!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">
    <head>
        {% block meta %}
            <meta charset=\"utf-8\">
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
            <meta name=\"keywords\" content=\"SAGA DGML\">
            <meta name=\"description\" content=\"Section de connection de SAGA\">
            <meta name=\"author\" content=\"Winner KING Technologie\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% endblock %}
        <title>{% block title %}Connexion à SAGA DGML{% endblock %}</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('login') }}
            <!-- Favicon -->
            <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/Login/img/favicon.png' }}\">
            <!-- Bootstrap CSS -->
            <link rel=\"stylesheet\" href=\"{{ 'assets/Login/css/bootstrap-rtl.min.css' }}\">
            <!-- Fontawesome CSS -->
            <link rel=\"stylesheet\" href=\"{{ 'assets/Login/css/fontawesome-all.min.css' }}\">
            <!-- Flaticon CSS -->
            <link rel=\"stylesheet\" href=\"{{ 'assets/Login/style.css' }}\">
            <!-- Google Web Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\">
            <!-- Custom CSS -->
            <link rel=\"stylesheet\" href=\"{{ 'assets/Login/style.css' }}\">
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('login') }}
            <!-- jquery-->
            <script src=\"{{ 'assets/Login/js/jquery-3.5.0.min.js' }}\"></script>
            <!-- Popper js -->
            <script src=\"{{ 'assets/Login/js/popper.min.js' }}\"></script>
            <!-- Bootstrap js -->
            <script src=\"{{ 'assets/Login/js/bootstrap.min.js' }}\"></script>
            <!-- Imagesloaded js -->
            <script src=\"{{ 'assets/Login/js/imagesloaded.pkgd.min.js' }}\"></script>    
            <!-- Validator js -->
            <script src=\"{{ 'assets/Login/js/validator.min.js' }}\"></script>
            <!-- Custom Js -->
            <script src=\"{{ 'assets/Login/js/main.js' }}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}
            <!--[if lt IE 8]>
                <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->      
            <section class=\"fxt-template-animation fxt-template-layout15\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-12 fxt-bg-img\" data-bg-image=\"{{ 'assets/Login/img/figure/bg15-l.jpg' }}\">
                            <div class=\"fxt-intro\">
                                <h1>Bienvenue sur SAGA DGML</h1>
                                <p>Systeme informatique Automatisé de Gestion des Archives (SAGA) est un plateforme informatique de gestion de l'archivages des documents traités ou fournis par une entité</p>
                                <div class=\"fxt-page-switcher\">
                                    <p> Pour les mots de Passe oublié ou poblème de connection veillez vous référer à la Division de l'informatique</p>
                                    <!--a href=\"login-15.html\" class=\"switcher-text1 active\">Log In</a-->
                                    <!--a href=\"²\" class=\"switcher-text1\">Register</a-->
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-12 fxt-bg-color\">
                            <div class=\"fxt-content\">                        
                                <div class=\"fxt-header\">
                                    <a href=\"login-15.html\" class=\"fxt-logo\"><img src=\"{{ 'assets/Login/img/logo-15.png' }}\" alt=\"Logo\"></a>                            
                                </div>
                                {% block form %}
                                <div class=\"fxt-form\">
                                    <h2>Connection à SAGA DGML</h2>     
                                    <p>Veillez entrez vos identifiants de connections </p>
                                    <form method=\"POST\">
                                        <div class=\"form-group\">                                                
                                            <div class=\"fxt-transformY-50 fxt-transition-delay-1\">   
                                                <label for=\"inputEmail\">Email</label>
                                                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>                                             
                                                <i class=\"flaticon-envelope\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">                                                
                                            <div class=\"fxt-transformY-50 fxt-transition-delay-2\">    
                                                <label for=\"inputPassword\">Mot de Passe</label>
                                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>                                            
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                                <i class=\"flaticon-padlock\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">                                                
                                            <div class=\"fxt-transformY-50 fxt-transition-delay-2\">    
                                                <div class=\"checkbox mb-3\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"fxt-transformY-50 fxt-transition-delay-3\">
                                                <div class=\"fxt-content-between\">
                                                    <button type=\"submit\" class=\"btn btn-lg btn-primary fxt-btn-fill\">Se Connecter</button>
                                                    <!--a href=\"forgot-password-15.html\" class=\"switcher-text2\">Forgot Password</!--a-->
                                                </div>
                                            </div>
                                        </div>
                                    </form>                            
                                </div> 
                                {% endblock %}
                                <div class=\"fxt-footer\">
                                    <ul class=\"fxt-socials\">
                                        <li class=\"fxt-facebook fxt-transformY-50 fxt-transition-delay-4\">
                                            <a href=\"#\" title=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"fxt-twitter fxt-transformY-50 fxt-transition-delay-5\">
                                            <a href=\"#\" title=\"twitter\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"fxt-google fxt-transformY-50 fxt-transition-delay-6\">
                                            <a href=\"#\" title=\"google\"><i class=\"fab fa-google-plus-g\"></i></a>
                                        </li>
                                        <li class=\"fxt-linkedin fxt-transformY-50 fxt-transition-delay-7\">
                                            <a href=\"#\" title=\"linkedin\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                        <li class=\"fxt-pinterest fxt-transformY-50 fxt-transition-delay-8\">
                                            <a href=\"#\" title=\"pinterest\"><i class=\"fab fa-pinterest-p\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </section>
        {% endblock %}
    </body>
</html> #}", "base_login.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\base_login.html.twig");
    }
}
