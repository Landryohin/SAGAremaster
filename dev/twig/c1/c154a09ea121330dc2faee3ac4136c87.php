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

/* base.html.twig */
class __TwigTemplate_1a1fde17e71413fc040f646c3390a0b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'list' => [$this, 'block_list'],
            'form' => [$this, 'block_form'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        ";
        // line 4
        $context["numero"] = 1;
        // line 5
        echo "        ";
        $this->displayBlock('meta', $context, $blocks);
        // line 13
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 56
        echo "    </head>
    <body>
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 630
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 831
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1, maximum-scale=1\">
            <meta name=\"keywords\" content=\"SAGA DGML\">
            <meta name=\"description\" content=\"Section administrateur de SAGA\">
            <meta name=\"author\" content=\"Winner KING Technologie\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Document";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dashboard");
        echo "
            <!-- STYLESHEET -->
            <!-- Favicon -->
            <link rel=\"shortcut icon\" type=\"image/x-icon\"sizes=\"16x16\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/logo-dgml.06f184b2.png"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Dashboard/vendor/select2.min.css"), "html", null, true);
        echo "\"></link>
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css\"></link>
            
            ";
        // line 30
        echo "
            
            
            <!-- Custom -->
            ";
        // line 35
        echo "            
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <[endif]-->
            <style> 
                .btn-circle {
                    width: 30px;
                    height: 30px;
                    text-align: center;
                    padding: 6px 0;
                    font-size: 12px;
                    line-height: 1.428571429;
                    border-radius: 15px;
                } 
                .uppercase{
                    text-transform: uppercase;
                }
            </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 219
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 583
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 629
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 60
        echo "                <!-- HEADER -->
                <header>
                    <div class=\"header js-header js-dropdown\">
                        <div class=\"container\">
                            <div class=\"header__logo\">
                                <h1 >
                                     <img src=";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/logo-dgml.06f184b2.png"), "html", null, true);
        echo " alt=\"logo\" width=\"70px\" height=\"70px\">
                                </h1>
                                ";
        // line 76
        echo "                            </div>
                            <div class=\"header__search\"> 
                                <div class=\"header__logo-btn\" data-dropdown-btn=\"logo\" style=\"text-align: center;\">
                                   Système Automatisé de Gestion d'Archives de la DGML</i>
                                </div>
                                ";
        // line 117
        echo "                            </div>
                            <div class=\"header__menu\">
                                ";
        // line 161
        echo "                            </div>
                            ";
        // line 197
        echo "                         
                                <div class=\"header__user-btn\">
                                <img src=";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/avatar.d5137e48.png"), "html", null, true);
        echo " > 
                            
                                </div>

                                <div style=\" margin-right: 28px; \">
                                    <span  > <b>";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204), "nom", [], "any", false, false, false, 204), "html", null, true);
        echo "</b>  </span>  <br>
                                     <div style=\" margin-bottom: -1px;margin-top: -8px; font-size:13px\"> <a href=";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changePassword");
        echo " >   Modifier profil </span>  </a>    </div> 
                                     <div  style=\" margin-bottom: -1px;margin-top: -8px;font-size:13px \"> <a href=";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo " >  Se deconnecter </span> </a>   </div>

                                </div>
                          
                        </div>
                        <div class=\"header__offset-btn\">
                      
                        </div>
                        
                    </div>
                </header>

            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 219
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 220
        echo "                <!-- MAIN -->
                <main>
                    <div class=\"container \">
                        <div class=\"nav\">
                            <div class=\"nav__categories js-dropdown\">
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" > <a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\"><b style=\"margin-left:\">Accueil</b></a> </div>
                                    ";
        // line 245
        echo "                                </div>


                        ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "user", [], "any", false, false, false, 248), "roles", [], "any", false, false, false, 248));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 249
            echo "                            ";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 250
                echo "                                  <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"categories\">  <b style=\"margin-left:\">Organisation</b> </div>
                                    <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
                                        <ul class=\"dropdown__catalog row\">
                                            <li class=\"col-xs-12\"><a href=\"";
                // line 254
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_directions_index");
                echo "\" class=\"category\"><i class=\"bg-5dd39e\"></i>Directions</a></li> 
                                            <li class=\"col-xs-12\"><a href=\"";
                // line 255
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_index");
                echo "\" class=\"category\"><i class=\"bg-5dd39e\"></i>Services</a></li>  
                                            <li class=\"col-xs-12\"><a href=\"";
                // line 256
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_divisions_index");
                echo "\" class=\"category\"><i class=\"bg-5dd39e\"></i>Divisions</a></li>  
                                            <li class=\"col-xs-12\"><a href=\"";
                // line 257
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
                echo "\" class=\"category\"><i class=\"bg-5dd39e\"></i>Utilisateurs</a></li> 
                                            <li class=\"col-xs-12\"><a href=\"";
                // line 258
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secretariats_index");
                echo "\" class=\"category\"><i class=\"bg-5dd39e\"></i>Point de traitement</a></li>
                                            <li class=\"col-xs-12\"><a href=\"";
                // line 259
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_index");
                echo "\" class=\"category\"><i class=\"bg-5dd39e\"></i>Postes</a></li>
                                            <li class=\"col-xs-12\"><a href=\"";
                // line 260
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_documents_index");
                echo "\" class=\"category\"><i class=\"bg-5dd39e\"></i>Type de documents</a></li>
                    
                                        </ul>
                                    </nav> 
                                </div>
                            ";
            }
            // line 266
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "


                        

  
                                <div class=\"nav__select\">
                                    ";
        // line 275
        echo "                                    ";
        // line 293
        echo "                                </div>
                            </div>


                            



                            <style>
                        
                                .active {    border-bottom: 3px solid #4cae4c;
                                bottom: -2px;  
                                width: 100%;
                                }

                            
                            </style>

                            <div class=\"nav__menu js-dropdown\">
                                <div class=\"nav__select\">
                                    
                                   
                                </div>
                                <ul class=\"navbar\">
                                  
                                    <li><a href=\"";
        // line 318
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\">Documents</a></li> 
                                    ";
        // line 319
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "zone", [], "any", false, false, false, 319) == "SA") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "zone", [], "any", false, false, false, 319) == "SP")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "zone", [], "any", false, false, false, 319) == "SAP")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "niveau", [], "any", false, false, false, 319) == "Admin"))) {
            echo " 
                                    <li><a href=\"";
            // line 320
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_attache");
            echo "\">Attaches</a></li>
                                    ";
        }
        // line 322
        echo "                                    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_index");
        echo "\">Affectations</a></li>
                                    <li><a href=\"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistiques_index");
        echo "\">Statistiques</a></li>
                                    ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 324, $this->source); })()), "user", [], "any", false, false, false, 324), "roles", [], "any", false, false, false, 324));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 325
            echo "                                        ";
            if (($context["role"] == "ROLE_ADMIN")) {
                echo "                                                            
                                        ";
                // line 335
                echo "                                        
                                        <li><a href=\"#\" >SMQ</a></li> 
                                
                                        ";
            }
            // line 339
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "                                </ul>
                            </div>
                        </div>
        
                        ";
        // line 344
        $this->displayBlock('list', $context, $blocks);
        // line 580
        echo "                    </div>
                </main>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 344
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 345
        echo "                            ";
        $this->displayBlock('form', $context, $blocks);
        // line 489
        echo "                        <div class=\"posts\">
                            <div class=\"posts__head\">
                                <div class=\"posts__topic\">Topic</div>
                                <div class=\"posts__category\">Category</div>
                                <div class=\"posts__users\">Users</div>
                                <div class=\"posts__replies\">Replies</div>
                                <div class=\"posts__views\">Views</div>
                                <div class=\"posts__activity\">Activity</div>
                            </div>
                            <div class=\"posts__body\">
                                <div class=\"posts__item bg-fef2e0\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3><i><img src=\"fonts/icons/main/Pinned.svg\" alt=\"Pinned\"></i>Welcome New Users! Please read this before posting!</h3>
                                                </a>
                                                <p>Congratulations, you have found the Community! Before you make a new topic or post, please read community guidelines.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users js-dropdown\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 513
        echo "assets/Dashboard/fonts/icons/avatars/B.svg";
        echo "\" alt=\"avatar\" data-dropdown-btn=\"user-b\"></a>
                                                <div class=\"posts__users-dropdown dropdown dropdown--user dropdown--reverse-y\" data-dropdown-list=\"user-b\">
                                                    <div class=\"dropdown__user\">
                                                        <a href=\"#\" class=\"dropdown__user-label bg-218380\">B</a>
                                                        <div class=\"dropdown__user-nav\">
                                                            <a href=\"#\"><i class=\"icon-Add_User\"></i></a>
                                                            <a href=\"#\"><i class=\"icon-Message\"></i></a>
                                                        </div>
                                                        <div class=\"dropdown__user-info\">
                                                            <a href=\"#\">Tesla Motors</a>
                                                            <p>Last post 4 hours ago. Joined Jun 1, 16</p>
                                                        </div>
                                                        <div class=\"dropdown__user-icons\">
                                                            <a href=\"#\"><img src=\"fonts/icons/badges/Intermediate.svg\" alt=\"user-icon\"></a>
                                                            <a href=\"#\"><img src=\"fonts/icons/badges/Bot.svg\" alt=\"user-icon\"></a>
                                                            <a href=\"#\"><img src=\"fonts/icons/badges/Animal_Lover.svg\" alt=\"user-icon\"></a>
                                                        </div>
                                                        <div class=\"dropdown__user-statistic\">
                                                            <div>Threads - <span>1184</span></div>
                                                            <div>Posts - <span>5,863</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 538
        echo "assets/Dashboard/fonts/icons/avatars/K.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 541
        echo "assets/Dashboard/fonts/icons/avatars/O.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">66</div>
                                        <div class=\"posts__views\">15.1k</div>
                                        <div class=\"posts__activity\">11d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>What’s everyone drinking?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-5dd39e\"></i> Random</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 563
        echo "assets/Dashboard/fonts/icons/avatars/B.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 566
        echo "assets/Dashboard/fonts/icons/avatars/M.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 569
        echo "assets/Dashboard/fonts/icons/avatars/Z.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">305</div>
                                        <div class=\"posts__views\">2.1k</div>
                                        <div class=\"posts__activity\">6m</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 345
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 346
        echo "                                <div class=\"create\">
                                <div class=\"create__head\">
                                    <div class=\"create__title\"><img src=\"fonts/icons/main/New_Topic.svg\" alt=\"New topic\">Create New Thread</div>
                                    <span>Forum Guidelines</span>
                                </div>
                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\">Thread Title</label>
                                    <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"Add here\">
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"category\">Select Category</label>
                                            <label class=\"custom-select\">
                                                <select id=\"category\">
                                                    <option>Choose</option>
                                                    <option>Choose #2</option>
                                                    <option>Choose #3</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"sub-category\">Select Sub Category</label>
                                            <label class=\"custom-select\">
                                                <select id=\"sub-category\">
                                                    <option>Choose</option>
                                                    <option>Choose #2</option>
                                                    <option>Choose #3</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"create__section create__textarea\">
                                    <label class=\"create__label\" for=\"description\">Description</label>
                                    <div class=\"create__textarea-head\">
                                        <span><i class=\"icon-Quote\"></i></span>
                                        <span><i class=\"icon-Bold\"></i></span>
                                        <span><i class=\"icon-Italic\"></i></span>
                                        <div class=\"create__textarea-separate\"></div>
                                        <span><i class=\"icon-Share_Topic\"></i></span>
                                        <span><i class=\"icon-BlockQuote\"></i></span>
                                        <span><i class=\"icon-Performatted\"></i></span>
                                        <span><i class=\"icon-Upload_Files\"></i></span>
                                        <span class=\"create__textarea-separate\"></span>
                                        <span><i class=\"icon-Bullet_List\"></i></span>
                                        <span><i class=\"icon-heading\"></i></span>
                                        <span><i class=\"icon-Horizontal_Line\"></i></span>
                                        <span><i class=\"icon-Emoticon\"></i></span>
                                        <span><i class=\"icon-Settings\"></i></span>
                                        <span><i class=\"icon-Color_Picker\"></i></span>
                                        <div class=\"create__textarea-btn\">
                                            <a href=\"#\" class=\"btn\">Preview</a>
                                        </div>
                                    </div>
                                    <textarea class=\"form-control\" id=\"description\">Adding amazing books to your summer reading list can be as simple as signing up for the BuzzFeed Books newsletter! You'll get a review of a new book you might love every Wednesday, plus much more twice a week: great jokes and quizzes, wonderful lists, powerful essays, all the Harry Potter and YA buzz you can handle, and of course, even more book recommendations. So make some space in your beach bag now — because you're going to have a lot to read this summer.</textarea>
                                </div>
                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"tags\">Add Tags</label>
                                    <input type=\"text\" class=\"form-control\" id=\"tags\" placeholder=\"e.g. nature, science\">
                                </div>
                                <div class=\"create__advanced\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 col-xl-4\">
                                            <div class=\"create__section\">
                                                <label class=\"create__label\">Who can see this?</label>
                                                <div class=\"create__radio\">
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"can-see\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <span>Everyone</span>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"can-see\">
                                                            <i></i>
                                                        </label>
                                                        <span>Only Friends</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-xl-3\">
                                            <div class=\"create__section\">
                                                <label class=\"create__label\">Share on Social?</label>
                                                <div class=\"create__radio\">
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-checkbox\">
                                                            <input type=\"checkbox\" name=\"share-social\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-checkbox\">
                                                            <input type=\"checkbox\" name=\"share-social\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-checkbox\">
                                                            <input type=\"checkbox\" name=\"share-social\">
                                                            <i></i>
                                                        </label>
                                                        <i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-xl-5\">
                                            <div class=\"create__section\">
                                                <label class=\"create__label\">Is this a Mature Thread?</label>
                                                <div class=\"create__radio\">
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"mature-thread\">
                                                            <i></i>
                                                        </label>
                                                        <span>Yes</span>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"mature-thread\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"create__footer\">
                                    <a href=\"#\" class=\"create__btn-cansel btn\">Cancel</a>
                                    <a href=\"#\" class=\"create__btn-create btn btn--type-02\">Create Thread</a>
                                </div>
                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 583
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 584
        echo "                <!-- FOOTER -->
                <footer>
                    <div class=\"footer js-dropdown\">
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
        // line 601
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\">DOCUMENTHÈQUE</a></li> 
                                      
                                    </ul>
                                    
                                </div>
                                <div class=\"footer__bline\">
                                  
                                    <ul class=\"footer__social\">
                                         <li class=\"footer__copyright\" style=\"margin-top: 10px; font-size:15px;font-weight:bold; color: blue;\"><span>&copy;DGML République du Bénin le ";
        // line 609
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span></li>
                                      
                                    </ul>
                                    ";
        // line 613
        echo "                                </div>
                            </div>
                        </div>
                        <span style=\"display:flex ;margin-bottom:-5px;top:0:\">
                        <i style=\"width: 100%; height:8px;  padding: 0px; background-color:RGB(16,135,87);\"> </i>
                        <i style=\"width: 100% ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
                    </div>

                    


                </footer>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 630
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 631
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dashboard");
        echo "
            <!-- JAVA SCRIPT -->
             <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
            
            <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js\"></script> 
            <script src=\"https://cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json   \"></script>
            <script src=\"https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js  \"></script> 
            <script src=\"https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js \"></script> 
            <script src=\"https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js\"></script>
            <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Dashboard/vendor/velocity/velocity.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Dashboard/vendor/select2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js\"></script>
            <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Dashboard/js/app.js"), "html", null, true);
        echo "\"></script>    
            <script src=\"https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.js\"></script>        
            
           
 
                 <script>

                  
                    var links = document.querySelectorAll(\".navbar a\");
                    var currentPage = window.location.pathname;

                    function updateActiveLink() {
                        var current = document.querySelector(\".active\");
                        if (current) {
                        current.classList.remove(\"active\");
                        }
                        var activeLink = document.querySelector(`a[href='\${currentPage}']`);
                        activeLink.classList.add(\"active\");
                    }

                    links.forEach(function(link) {
                        link.addEventListener(\"click\", function() {
                        currentPage = this.getAttribute(\"href\");
                        history.pushState({}, \"\", currentPage);
                        updateActiveLink();
                        });
                    });

                    window.addEventListener(\"popstate\", function() {
                        currentPage = window.location.pathname;
                        updateActiveLink();
                    });

                    updateActiveLink();
                </script>

                <script>

             
                \$(document).ready(function() {
                        \$('.js-example-basic-single').select2();  
                        \$('.expensive').DataTable({
                            dom: 'BlfrtipHhf',  
                            //scrollY: '400px', // Hauteur fixe de la table
                            rowCallback: function(row, data, index) {
                                var numeroColumnIndex = 0; // Index de la colonne \"Numéro\"

                                // Met à jour la valeur du champ \"Numéro\"
                                \$(row).find('td:eq('+numeroColumnIndex+')').text(index + 1);
                            },
                             
                            buttons: [ 
                                {
                                orientation: 'landscape',
                                extend: 'print', 
                                text: ' Imprimer ', 
                                
                                
                                customize: function(win) {
                                  
                                    
                                    var Nom = ";
        // line 706
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 706, $this->source); })()), "user", [], "any", false, false, false, 706), "nom", [], "any", false, false, false, 706));
        echo ";
                                    var Prenom = ";
        // line 707
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 707, $this->source); })()), "user", [], "any", false, false, false, 707), "prenom", [], "any", false, false, false, 707));
        echo ";
                                    var options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
                                    var date = new Date();
                                    var jours = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
                                    var nomJour = jours[date.getDay()];
                                    
                                    \$(win.document.body)
                                        .css('font-size', '12pt')
                                        .prepend('<img src=\"https://dgml.finances.bj/web/template/images/dgml_bande2_moyen.png\" style=\"position:absolute; top:0; left:0;filter: opacity(0.20);\" />')
                                        .prepend('<div style=\"position:absolute; top:-10; left:0;font-size:40px;font-weight:900;\">SAGA </div>');
                                        
                                    \$(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');

                                    \$(win.document.body).find('h1')
                                        .css('text-align', 'center')
                                        .css('font-size', '14pt');

                                    // Répéter l'image sur chaque page d'impression
                                    var image = \$(win.document.body).find('img');
                                    var pageCount = 1;
                                    for (var i = 0; i < pageCount; i++) {
                                        var imageClone = image.css({
                                        'position': 'fixed',
                                        'top':  '25vh',
                                        'left': 350,
                                        'width': '30%'
                                        }); 
 
                                    }


                                     // Créer un élément de date pour chaque nouvelle page d'impression
                                        var dateElement = \$('<div>').css({
                                            'position': 'fixed',
                                            'top': '97vh',
                                            'left': '5',
                                            'font-size': '14px'
                                        }).text( ' Impression initié par : ' + Nom + ' ' + Prenom + ', le ' + date.toLocaleDateString('fr-FR', options) );

                                        var mediaQueryList = win.matchMedia('print');
                                        mediaQueryList.addListener(function(mql) {
                                            if (mql.matches) {
                                            \$(win.document.body).prepend(dateElement.clone());
                                            }
                                        });

                                        // Ajouter l'élément de date pour la première page d'impression
                                        if (mediaQueryList.matches) {
                                            \$(win.document.body).prepend(dateElement);
                                        }


                                        
\t\t\t\t\t        // \$(win.document.body).find('table').each(function () {
                                      //   var table = \$(this);
                                     //   table.css('height', 'auto');

                                        // Réinitialiser les styles de pagination

                                        // Réinitialiser la longueur de page pour l'impression
                                        //table.DataTable().page.len(-1).draw();
                                      // var rows = table.find('tr');
                            
                                       // rows.each(function (index) {
                                         //    var row = \$(this);
                                          // var columns = row.find('td');
                            
                                            // Ajouter le numéro de ligne dans la première colonne
                                          // columns.eq(0).text(index);
                                            // Vérifier si la dernière colonne est \"Actions\" avant de la supprimer
                                         // var lastColumn = columns.last();
                                         //   var lastColumnText = lastColumn.text().trim();
                                          // if (lastColumnText === 'ACTIONS') {
                                           //    lastColumn.remove(); // Supprimer la dernière colonne dans la vue d'impression
                                         // }
                                            // });  
                                             // });

                                }
                                

                            }
                            ],
                            order: [[0, 'asc']], // Met en avant la première colonne (Numéro) en ordre croissant

                            lengthMenu:[5,10,15,20,25],
                            pageLength: 25,
 
                            language: {
                                \"emptyTable\": \"Aucune donnée disponible dans le tableau\",
                                \"loadingRecords\": \"Chargement...\",
                                \"processing\": \"Traitement...\",
                                \"Print\": \"Imprimer\",
                                \"info\": \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
                                \"infoEmpty\": \"Affichage de 0 à 0 sur 0 entrées\",
                                \"infoFiltered\": \"(filtrées depuis un total de _MAX_ entrées)\",
                                \"lengthMenu\": \"Afficher _MENU_ entrées\",
                                \"paginate\": {
                                    \"first\": \"Première\",
                                    \"last\": \"Dernière\",
                                    \"next\": \"Suivante\",
                                    \"previous\": \"Précédente\"
                                },
                                \"zeroRecords\": \"Aucune entrée correspondante trouvée\",
                                \"aria\": {
                                    \"sortAscending\": \" : activer pour trier la colonne par ordre croissant\",
                                    \"sortDescending\": \" : activer pour trier la colonne par ordre décroissant\"
                                },
                                \"infoThousands\": \" \",
                                \"search\": \"Rechercher :\",
                                \"thousands\": \" \"
                        
                            },
                            
        

                            });
                    });  
                   // table.columns(2).visible(false);
                    
                </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  953 => 707,  949 => 706,  885 => 645,  880 => 643,  876 => 642,  861 => 631,  851 => 630,  826 => 613,  820 => 609,  809 => 601,  790 => 584,  780 => 583,  628 => 346,  618 => 345,  597 => 569,  591 => 566,  585 => 563,  560 => 541,  554 => 538,  526 => 513,  500 => 489,  497 => 345,  487 => 344,  475 => 580,  473 => 344,  467 => 340,  461 => 339,  455 => 335,  450 => 325,  446 => 324,  442 => 323,  437 => 322,  432 => 320,  428 => 319,  424 => 318,  397 => 293,  395 => 275,  386 => 267,  380 => 266,  371 => 260,  367 => 259,  363 => 258,  359 => 257,  355 => 256,  351 => 255,  347 => 254,  341 => 250,  338 => 249,  334 => 248,  329 => 245,  325 => 226,  317 => 220,  307 => 219,  284 => 206,  280 => 205,  276 => 204,  268 => 199,  264 => 197,  261 => 161,  257 => 117,  250 => 76,  245 => 66,  237 => 60,  227 => 59,  217 => 629,  214 => 583,  211 => 219,  208 => 59,  198 => 58,  168 => 35,  162 => 30,  156 => 19,  152 => 18,  145 => 15,  135 => 14,  116 => 13,  100 => 6,  90 => 5,  79 => 831,  76 => 630,  74 => 58,  70 => 56,  68 => 14,  63 => 13,  60 => 5,  58 => 4,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        {% set numero = 1 %}
        {% block meta %}
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1, maximum-scale=1\">
            <meta name=\"keywords\" content=\"SAGA DGML\">
            <meta name=\"description\" content=\"Section administrateur de SAGA\">
            <meta name=\"author\" content=\"Winner KING Technologie\">
        {% endblock %}
        <title>{% block title %}Document{% endblock %}</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('dashboard') }}
            <!-- STYLESHEET -->
            <!-- Favicon -->
            <link rel=\"shortcut icon\" type=\"image/x-icon\"sizes=\"16x16\" href=\"{{ asset('/build/images/logo-dgml.06f184b2.png') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/Dashboard/vendor/select2.min.css') }}\"></link>
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css\"></link>
            
            {# <!-- fonts -->
           
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/fonts/icons/main/mainfont/style.css' }}\">
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/fonts/icons/font-awesome/css/font-awesome.min.css' }}\">

            <!-- Vendor --> 
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/vendor/bootstrap/v3/bootstrap.min.css' }}\">
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/vendor/bootstrap/v4/bootstrap-grid.css' }}\">  #}

            
            
            <!-- Custom -->
            {# <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/css/style.css' }}\"> #}
            
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <[endif]-->
            <style> 
                .btn-circle {
                    width: 30px;
                    height: 30px;
                    text-align: center;
                    padding: 6px 0;
                    font-size: 12px;
                    line-height: 1.428571429;
                    border-radius: 15px;
                } 
                .uppercase{
                    text-transform: uppercase;
                }
            </style>
        {% endblock %}
    </head>
    <body>
        {% block body %}
            {% block header %}
                <!-- HEADER -->
                <header>
                    <div class=\"header js-header js-dropdown\">
                        <div class=\"container\">
                            <div class=\"header__logo\">
                                <h1 >
                                     <img src={{ asset('/build/images/logo-dgml.06f184b2.png') }} alt=\"logo\" width=\"70px\" height=\"70px\">
                                </h1>
                                {# <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"logo\">
                                    <ul class=\"dropdown__catalog\">
                                        <li><a href=\"index.html\">Home Page</a></li>
                                        <li><a href=\"single-topic.html\">Single Topic Page</a></li>
                                        <li><a href=\"simple-signup.html\">Sign up Page</a></li>
                                        <li><a href=\"create-topic.html\">Create Topic Page</a></li>
                                    </ul>
                                </nav> #}
                            </div>
                            <div class=\"header__search\"> 
                                <div class=\"header__logo-btn\" data-dropdown-btn=\"logo\" style=\"text-align: center;\">
                                   Système Automatisé de Gestion d'Archives de la DGML</i>
                                </div>
                                {# <form action=\"#\">
                                    <label>
                                        <i class=\"icon-Search js-header-search-btn-open\"></i>
                                        <input type=\"search\" placeholder=\"Search all forums\" class=\"form-control\">
                                    </label>
                                </form>
                                <div class=\"header__search-close js-header-search-btn-close\"><i class=\"icon-Cancel\"></i></div>
                                <div class=\"header__search-btn\" data-dropdown-btn=\"search\">
                                    Topics<i class=\"icon-Arrow_Below\"></i>
                                </div>
                                <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"search\">
                                    <ul>
                                        <li>
                                            <label>
                                                <label class=\"custom-checkbox\">
                                                    <input type=\"checkbox\" checked=\"checked\">
                                                    <i></i>
                                                </label>Search Titles Only
                                            </label>

                                        </li>
                                        <li>
                                            <label>
                                                <label class=\"custom-checkbox\">
                                                    <input type=\"checkbox\">
                                                    <i></i>
                                                </label>Show Results as Posts
                                            </label>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-Advanced_Search\"></i>Advanced Search
                                            </a>
                                        </li>
                                    </ul>
                                </div> #}
                            </div>
                            <div class=\"header__menu\">
                                {# <div class=\"header__menu-btn\" data-dropdown-btn=\"menu\">
                                    Latest Topics<i class=\"icon-Menu_Icon\"></i>
                                </div>
                                <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"menu\">
                                    <div>
                                        <ul class=\"dropdown__catalog row\">
                                            <li class=\"col-xs-6\"><a href=\"#\">New</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">Unread</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">Groups</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">Users</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">Tags</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">Shortcuts</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3>Categories</h3>
                                        <ul class=\"dropdown__catalog row\">
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-f9bc64\"></i>Hobbies</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-348aa7\"></i>Social</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>Video</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-5dd39e\"></i>Random</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-ff755a\"></i>Arts</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-bce784\"></i>Tech</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-83253f\"></i>Gaming</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-c49bbb\"></i>Science</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-3ebafa\"></i>Exchange</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-c6b38e\"></i>Pets</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-a7cdbd\"></i>Entertainment</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-525252\"></i>Education</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-777da7\"></i>Q&amp;As</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-368f8b\"></i>Politics</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class=\"dropdown__catalog row\">
                                            <li class=\"col-xs-6\"><a href=\"#\">Support</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">Forum Rules</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">Blog</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\">About</a></li>
                                        </ul>
                                    </div>
                                </nav> #}
                            </div>
                            {# <div class=\"header__notification\">
                                <div class=\"header__notification-btn\" data-dropdown-btn=\"notification\">
                                    <i class=\"icon-Notification\"></i>
                                    <span>6</span>
                                </div>
                                <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"notification\">
                                    <div>
                                        <a href=\"#\">
                                            <i class=\"icon-Favorite_Topic\"></i>
                                            <p>Roswell . 16 feb, 17<span>Which movie have you watched recently?</span></p>
                                        </a>
                                        <a href=\"#\">
                                            <i class=\"icon-Reply_Empty\"></i>
                                            <p>Callis . 18 feb, 17<span>I got an amzon thingie!</span></p>
                                        </a>
                                        <a href=\"#\">
                                            <i class=\"icon-Badge\"></i>
                                            <p>Earned Badge . 19 feb, 17<span><img src=\"fonts/icons/badges/Lets_talk.svg\" alt=\"Lets Talk\">Lets Talk</span></p>
                                        </a>
                                        <a href=\"#\">
                                            <i class=\"icon-Badge\"></i>
                                            <p>Earned Badge . 21 feb, 17<span><img src=\"fonts/icons/badges/Intermediate.svg\" alt=\"Intermediate\">Intermediate</span></p>
                                        </a>
                                        <a href=\"#\">
                                            <i class=\"icon-Share_Topic\"></i>
                                            <p>Charlie . 22 feb, 17<span>Need Video file of that cat.</span></p>
                                        </a>
                                        <a href=\"#\">
                                            <i class=\"icon-Pencil\"></i>
                                            <p>Greentea . 22 feb, 17<span>New Facebook like and share button.</span></p>
                                        </a>
                                        <span><a href=\"#\">view older notifications...</a></span>
                                    </div>
                                </div>
                            </div> #}
                         
                                <div class=\"header__user-btn\">
                                <img src={{ asset('/build/images/avatar.d5137e48.png') }} > 
                            
                                </div>

                                <div style=\" margin-right: 28px; \">
                                    <span  > <b>{{ app.user.nom }}</b>  </span>  <br>
                                     <div style=\" margin-bottom: -1px;margin-top: -8px; font-size:13px\"> <a href={{ path('changePassword') }} >   Modifier profil </span>  </a>    </div> 
                                     <div  style=\" margin-bottom: -1px;margin-top: -8px;font-size:13px \"> <a href={{ path('logout') }} >  Se deconnecter </span> </a>   </div>

                                </div>
                          
                        </div>
                        <div class=\"header__offset-btn\">
                      
                        </div>
                        
                    </div>
                </header>

            {% endblock %}
            {% block main %}
                <!-- MAIN -->
                <main>
                    <div class=\"container \">
                        <div class=\"nav\">
                            <div class=\"nav__categories js-dropdown\">
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" > <a href=\"{{path(\"Accueil\")}}\"><b style=\"margin-left:\">Accueil</b></a> </div>
                                    {# <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
                                        <ul class=\"dropdown__catalog row\">
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-f9bc64\"></i>Hobbies</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-348aa7\"></i>Social</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>Video</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-5dd39e\"></i>Random</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-ff755a\"></i>Arts</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-bce784\"></i>Tech</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-83253f\"></i>Gaming</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-c49bbb\"></i>Science</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-3ebafa\"></i>Exchange</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-c6b38e\"></i>Pets</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-a7cdbd\"></i>Entertainment</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-525252\"></i>Education</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-777da7\"></i>Q&amp;As</a></li>
                                            <li class=\"col-xs-6\"><a href=\"#\" class=\"category\"><i class=\"bg-368f8b\"></i>Politics</a></li>
                                        </ul>
                                    </nav> #}
                                </div>


                        {% for role in app.user.roles %}
                            {% if role == \"ROLE_ADMIN\" %}
                                  <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"categories\">  <b style=\"margin-left:\">Organisation</b> </div>
                                    <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
                                        <ul class=\"dropdown__catalog row\">
                                            <li class=\"col-xs-12\"><a href=\"{{ path('app_directions_index')}}\" class=\"category\"><i class=\"bg-5dd39e\"></i>Directions</a></li> 
                                            <li class=\"col-xs-12\"><a href=\"{{ path('app_services_index')}}\" class=\"category\"><i class=\"bg-5dd39e\"></i>Services</a></li>  
                                            <li class=\"col-xs-12\"><a href=\"{{ path('app_divisions_index')}}\" class=\"category\"><i class=\"bg-5dd39e\"></i>Divisions</a></li>  
                                            <li class=\"col-xs-12\"><a href=\"{{ path('app_users_index')}}\" class=\"category\"><i class=\"bg-5dd39e\"></i>Utilisateurs</a></li> 
                                            <li class=\"col-xs-12\"><a href=\"{{ path('app_secretariats_index')}}\" class=\"category\"><i class=\"bg-5dd39e\"></i>Point de traitement</a></li>
                                            <li class=\"col-xs-12\"><a href=\"{{ path('app_postes_index')}}\" class=\"category\"><i class=\"bg-5dd39e\"></i>Postes</a></li>
                                            <li class=\"col-xs-12\"><a href=\"{{ path('app_type_documents_index')}}\" class=\"category\"><i class=\"bg-5dd39e\"></i>Type de documents</a></li>
                    
                                        </ul>
                                    </nav> 
                                </div>
                            {% endif %}
                        {% endfor %}



                        

  
                                <div class=\"nav__select\">
                                    {# <div class=\"btn-select\" data-dropdown-btn=\"tags\"> <li><a href=\"#\">Latest</a></li></div> #}
                                    {# <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
                                        <div class=\"tags\">
                                            <a href=\"#\" class=\"bg-4f80b0\">gaming</a>
                                            <a href=\"#\" class=\"bg-424ee8\">nature</a>
                                            <a href=\"#\" class=\"bg-36b7d7\">entertainment</a>
                                            <a href=\"#\" class=\"bg-ef429e\">selfie</a>
                                            <a href=\"#\" class=\"bg-7cc576\">camera</a>
                                            <a href=\"#\" class=\"bg-3a3a17\">username</a>
                                            <a href=\"#\" class=\"bg-6f7e9c\">funny</a>
                                            <a href=\"#\" class=\"bg-f26522\">photography</a>
                                            <a href=\"#\" class=\"bg-a3d39c\">climbing</a>
                                            <a href=\"#\" class=\"bg-92278f\">adventure</a>
                                            <a href=\"#\" class=\"bg-8781bd\">dreams</a>
                                            <a href=\"#\" class=\"bg-f1ab32\">life</a>
                                            <a href=\"#\" class=\"bg-3b96ca\">reason</a>
                                            <a href=\"#\" class=\"bg-348aa7\">social</a>
                                        </div>
                                    </div> #}
                                </div>
                            </div>


                            



                            <style>
                        
                                .active {    border-bottom: 3px solid #4cae4c;
                                bottom: -2px;  
                                width: 100%;
                                }

                            
                            </style>

                            <div class=\"nav__menu js-dropdown\">
                                <div class=\"nav__select\">
                                    
                                   
                                </div>
                                <ul class=\"navbar\">
                                  
                                    <li><a href=\"{{ path('app_documents_index')}}\">Documents</a></li> 
                                    {% if app.user.zone == \"SA\" or app.user.zone == \"SP\" or app.user.zone == \"SAP\" or app.user.niveau == \"Admin\" %} 
                                    <li><a href=\"{{ path('app_documents_attache')}}\">Attaches</a></li>
                                    {% endif %}
                                    <li><a href=\"{{ path('app_Affectations_index')}}\">Affectations</a></li>
                                    <li><a href=\"{{ path('app_statistiques_index')}}\">Statistiques</a></li>
                                    {% for role in app.user.roles %}
                                        {% if role == \"ROLE_ADMIN\" %}                                                            
                                        {#<nav class=\"dropdown dropdown--design-02\" data-dropdown-list=\"categories\">
                                            <ul class=\"dropdown__catalog row\">
                                                <li class=\"col-xs-12\" style=\"margin-top:5px\"><a href=\"{{ path('app_statistiques_index')}}\" class=\"category\"><i class=\"bg-5dd39e\" style=\" margin-top: 2px;\"></i>Suivi courriers GLOBAL</a></li> 
                                                <li class=\"col-xs-12\" style=\"margin-top:5px\"><a href=\"{{ path('app_statistiques_DGCA')}}\" class=\"category\"><i class=\"bg-5dd39e\" style=\" margin-top: 2px;\"></i>Suivi courriers DGCA</a></li> 
                                                <li class=\"col-xs-12\" style=\"margin-top:5px\"><a href=\"{{ path('app_statistiques_DGR')}}\" class=\"category\"><i class=\"bg-5dd39e\" style=\" margin-top: 2px;\"></i>Suivi courriers DGR</a></li>  
                                                <li class=\"col-xs-12\" style=\"margin-top:5px\"><a href=\"{{ path('app_statistiques_DM')}}\" class=\"category\"><i class=\"bg-5dd39e\" style=\" margin-top: 2px;\"></i>Suivi courriers DM </a></li>  
                                                <li class=\"col-xs-12\" style=\"margin-top:5px\"><a href=\"{{ path('app_statistiques_DPIB')}}\" class=\"category\"><i class=\"bg-5dd39e\" style=\" margin-top: 2px;\"></i>Suivi courriers DPIB </a></li>
                                            </ul>
                                        </nav> #}
                                        
                                        <li><a href=\"#\" >SMQ</a></li> 
                                
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
        
                        {% block list %}
                            {% block form %}
                                <div class=\"create\">
                                <div class=\"create__head\">
                                    <div class=\"create__title\"><img src=\"fonts/icons/main/New_Topic.svg\" alt=\"New topic\">Create New Thread</div>
                                    <span>Forum Guidelines</span>
                                </div>
                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"title\">Thread Title</label>
                                    <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"Add here\">
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"category\">Select Category</label>
                                            <label class=\"custom-select\">
                                                <select id=\"category\">
                                                    <option>Choose</option>
                                                    <option>Choose #2</option>
                                                    <option>Choose #3</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"create__section\">
                                            <label class=\"create__label\" for=\"sub-category\">Select Sub Category</label>
                                            <label class=\"custom-select\">
                                                <select id=\"sub-category\">
                                                    <option>Choose</option>
                                                    <option>Choose #2</option>
                                                    <option>Choose #3</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"create__section create__textarea\">
                                    <label class=\"create__label\" for=\"description\">Description</label>
                                    <div class=\"create__textarea-head\">
                                        <span><i class=\"icon-Quote\"></i></span>
                                        <span><i class=\"icon-Bold\"></i></span>
                                        <span><i class=\"icon-Italic\"></i></span>
                                        <div class=\"create__textarea-separate\"></div>
                                        <span><i class=\"icon-Share_Topic\"></i></span>
                                        <span><i class=\"icon-BlockQuote\"></i></span>
                                        <span><i class=\"icon-Performatted\"></i></span>
                                        <span><i class=\"icon-Upload_Files\"></i></span>
                                        <span class=\"create__textarea-separate\"></span>
                                        <span><i class=\"icon-Bullet_List\"></i></span>
                                        <span><i class=\"icon-heading\"></i></span>
                                        <span><i class=\"icon-Horizontal_Line\"></i></span>
                                        <span><i class=\"icon-Emoticon\"></i></span>
                                        <span><i class=\"icon-Settings\"></i></span>
                                        <span><i class=\"icon-Color_Picker\"></i></span>
                                        <div class=\"create__textarea-btn\">
                                            <a href=\"#\" class=\"btn\">Preview</a>
                                        </div>
                                    </div>
                                    <textarea class=\"form-control\" id=\"description\">Adding amazing books to your summer reading list can be as simple as signing up for the BuzzFeed Books newsletter! You'll get a review of a new book you might love every Wednesday, plus much more twice a week: great jokes and quizzes, wonderful lists, powerful essays, all the Harry Potter and YA buzz you can handle, and of course, even more book recommendations. So make some space in your beach bag now — because you're going to have a lot to read this summer.</textarea>
                                </div>
                                <div class=\"create__section\">
                                    <label class=\"create__label\" for=\"tags\">Add Tags</label>
                                    <input type=\"text\" class=\"form-control\" id=\"tags\" placeholder=\"e.g. nature, science\">
                                </div>
                                <div class=\"create__advanced\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 col-xl-4\">
                                            <div class=\"create__section\">
                                                <label class=\"create__label\">Who can see this?</label>
                                                <div class=\"create__radio\">
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"can-see\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <span>Everyone</span>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"can-see\">
                                                            <i></i>
                                                        </label>
                                                        <span>Only Friends</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-xl-3\">
                                            <div class=\"create__section\">
                                                <label class=\"create__label\">Share on Social?</label>
                                                <div class=\"create__radio\">
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-checkbox\">
                                                            <input type=\"checkbox\" name=\"share-social\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-checkbox\">
                                                            <input type=\"checkbox\" name=\"share-social\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-checkbox\">
                                                            <input type=\"checkbox\" name=\"share-social\">
                                                            <i></i>
                                                        </label>
                                                        <i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-4 col-xl-5\">
                                            <div class=\"create__section\">
                                                <label class=\"create__label\">Is this a Mature Thread?</label>
                                                <div class=\"create__radio\">
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"mature-thread\">
                                                            <i></i>
                                                        </label>
                                                        <span>Yes</span>
                                                    </label>
                                                    <label class=\"create__box\">
                                                        <label class=\"custom-radio\">
                                                            <input type=\"radio\" name=\"mature-thread\" checked=\"checked\">
                                                            <i></i>
                                                        </label>
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"create__footer\">
                                    <a href=\"#\" class=\"create__btn-cansel btn\">Cancel</a>
                                    <a href=\"#\" class=\"create__btn-create btn btn--type-02\">Create Thread</a>
                                </div>
                            </div>
                            {% endblock %}
                        <div class=\"posts\">
                            <div class=\"posts__head\">
                                <div class=\"posts__topic\">Topic</div>
                                <div class=\"posts__category\">Category</div>
                                <div class=\"posts__users\">Users</div>
                                <div class=\"posts__replies\">Replies</div>
                                <div class=\"posts__views\">Views</div>
                                <div class=\"posts__activity\">Activity</div>
                            </div>
                            <div class=\"posts__body\">
                                <div class=\"posts__item bg-fef2e0\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3><i><img src=\"fonts/icons/main/Pinned.svg\" alt=\"Pinned\"></i>Welcome New Users! Please read this before posting!</h3>
                                                </a>
                                                <p>Congratulations, you have found the Community! Before you make a new topic or post, please read community guidelines.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users js-dropdown\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/B.svg' }}\" alt=\"avatar\" data-dropdown-btn=\"user-b\"></a>
                                                <div class=\"posts__users-dropdown dropdown dropdown--user dropdown--reverse-y\" data-dropdown-list=\"user-b\">
                                                    <div class=\"dropdown__user\">
                                                        <a href=\"#\" class=\"dropdown__user-label bg-218380\">B</a>
                                                        <div class=\"dropdown__user-nav\">
                                                            <a href=\"#\"><i class=\"icon-Add_User\"></i></a>
                                                            <a href=\"#\"><i class=\"icon-Message\"></i></a>
                                                        </div>
                                                        <div class=\"dropdown__user-info\">
                                                            <a href=\"#\">Tesla Motors</a>
                                                            <p>Last post 4 hours ago. Joined Jun 1, 16</p>
                                                        </div>
                                                        <div class=\"dropdown__user-icons\">
                                                            <a href=\"#\"><img src=\"fonts/icons/badges/Intermediate.svg\" alt=\"user-icon\"></a>
                                                            <a href=\"#\"><img src=\"fonts/icons/badges/Bot.svg\" alt=\"user-icon\"></a>
                                                            <a href=\"#\"><img src=\"fonts/icons/badges/Animal_Lover.svg\" alt=\"user-icon\"></a>
                                                        </div>
                                                        <div class=\"dropdown__user-statistic\">
                                                            <div>Threads - <span>1184</span></div>
                                                            <div>Posts - <span>5,863</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/K.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/O.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">66</div>
                                        <div class=\"posts__views\">15.1k</div>
                                        <div class=\"posts__activity\">11d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>What’s everyone drinking?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-5dd39e\"></i> Random</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/B.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/M.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/Z.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">305</div>
                                        <div class=\"posts__views\">2.1k</div>
                                        <div class=\"posts__activity\">6m</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endblock %}
                    </div>
                </main>
            {% endblock %}
            {% block footer %}
                <!-- FOOTER -->
                <footer>
                    <div class=\"footer js-dropdown\">
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
                        <i style=\"width: 100% ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
                    </div>

                    


                </footer>
            {% endblock %}
        {% endblock %}
        {% block javascripts %}
            {{ encore_entry_script_tags('dashboard') }}
            <!-- JAVA SCRIPT -->
             <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
            
            <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js\"></script> 
            <script src=\"https://cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json   \"></script>
            <script src=\"https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js  \"></script> 
            <script src=\"https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js \"></script> 
            <script src=\"https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js\"></script>
            <script src=\"{{ asset('assets/Dashboard/vendor/velocity/velocity.min.js') }}\"></script>
            <script src=\"{{ asset('assets/Dashboard/vendor/select2.min.js') }}\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js\"></script>
            <script src=\"{{ asset('assets/Dashboard/js/app.js') }}\"></script>    
            <script src=\"https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.js\"></script>        
            
           
 
                 <script>

                  
                    var links = document.querySelectorAll(\".navbar a\");
                    var currentPage = window.location.pathname;

                    function updateActiveLink() {
                        var current = document.querySelector(\".active\");
                        if (current) {
                        current.classList.remove(\"active\");
                        }
                        var activeLink = document.querySelector(`a[href='\${currentPage}']`);
                        activeLink.classList.add(\"active\");
                    }

                    links.forEach(function(link) {
                        link.addEventListener(\"click\", function() {
                        currentPage = this.getAttribute(\"href\");
                        history.pushState({}, \"\", currentPage);
                        updateActiveLink();
                        });
                    });

                    window.addEventListener(\"popstate\", function() {
                        currentPage = window.location.pathname;
                        updateActiveLink();
                    });

                    updateActiveLink();
                </script>

                <script>

             
                \$(document).ready(function() {
                        \$('.js-example-basic-single').select2();  
                        \$('.expensive').DataTable({
                            dom: 'BlfrtipHhf',  
                            //scrollY: '400px', // Hauteur fixe de la table
                            rowCallback: function(row, data, index) {
                                var numeroColumnIndex = 0; // Index de la colonne \"Numéro\"

                                // Met à jour la valeur du champ \"Numéro\"
                                \$(row).find('td:eq('+numeroColumnIndex+')').text(index + 1);
                            },
                             
                            buttons: [ 
                                {
                                orientation: 'landscape',
                                extend: 'print', 
                                text: ' Imprimer ', 
                                
                                
                                customize: function(win) {
                                  
                                    
                                    var Nom = {{ app.user.nom|json_encode|raw }};
                                    var Prenom = {{ app.user.prenom|json_encode|raw }};
                                    var options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
                                    var date = new Date();
                                    var jours = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
                                    var nomJour = jours[date.getDay()];
                                    
                                    \$(win.document.body)
                                        .css('font-size', '12pt')
                                        .prepend('<img src=\"https://dgml.finances.bj/web/template/images/dgml_bande2_moyen.png\" style=\"position:absolute; top:0; left:0;filter: opacity(0.20);\" />')
                                        .prepend('<div style=\"position:absolute; top:-10; left:0;font-size:40px;font-weight:900;\">SAGA </div>');
                                        
                                    \$(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');

                                    \$(win.document.body).find('h1')
                                        .css('text-align', 'center')
                                        .css('font-size', '14pt');

                                    // Répéter l'image sur chaque page d'impression
                                    var image = \$(win.document.body).find('img');
                                    var pageCount = 1;
                                    for (var i = 0; i < pageCount; i++) {
                                        var imageClone = image.css({
                                        'position': 'fixed',
                                        'top':  '25vh',
                                        'left': 350,
                                        'width': '30%'
                                        }); 
 
                                    }


                                     // Créer un élément de date pour chaque nouvelle page d'impression
                                        var dateElement = \$('<div>').css({
                                            'position': 'fixed',
                                            'top': '97vh',
                                            'left': '5',
                                            'font-size': '14px'
                                        }).text( ' Impression initié par : ' + Nom + ' ' + Prenom + ', le ' + date.toLocaleDateString('fr-FR', options) );

                                        var mediaQueryList = win.matchMedia('print');
                                        mediaQueryList.addListener(function(mql) {
                                            if (mql.matches) {
                                            \$(win.document.body).prepend(dateElement.clone());
                                            }
                                        });

                                        // Ajouter l'élément de date pour la première page d'impression
                                        if (mediaQueryList.matches) {
                                            \$(win.document.body).prepend(dateElement);
                                        }


                                        
\t\t\t\t\t        // \$(win.document.body).find('table').each(function () {
                                      //   var table = \$(this);
                                     //   table.css('height', 'auto');

                                        // Réinitialiser les styles de pagination

                                        // Réinitialiser la longueur de page pour l'impression
                                        //table.DataTable().page.len(-1).draw();
                                      // var rows = table.find('tr');
                            
                                       // rows.each(function (index) {
                                         //    var row = \$(this);
                                          // var columns = row.find('td');
                            
                                            // Ajouter le numéro de ligne dans la première colonne
                                          // columns.eq(0).text(index);
                                            // Vérifier si la dernière colonne est \"Actions\" avant de la supprimer
                                         // var lastColumn = columns.last();
                                         //   var lastColumnText = lastColumn.text().trim();
                                          // if (lastColumnText === 'ACTIONS') {
                                           //    lastColumn.remove(); // Supprimer la dernière colonne dans la vue d'impression
                                         // }
                                            // });  
                                             // });

                                }
                                

                            }
                            ],
                            order: [[0, 'asc']], // Met en avant la première colonne (Numéro) en ordre croissant

                            lengthMenu:[5,10,15,20,25],
                            pageLength: 25,
 
                            language: {
                                \"emptyTable\": \"Aucune donnée disponible dans le tableau\",
                                \"loadingRecords\": \"Chargement...\",
                                \"processing\": \"Traitement...\",
                                \"Print\": \"Imprimer\",
                                \"info\": \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
                                \"infoEmpty\": \"Affichage de 0 à 0 sur 0 entrées\",
                                \"infoFiltered\": \"(filtrées depuis un total de _MAX_ entrées)\",
                                \"lengthMenu\": \"Afficher _MENU_ entrées\",
                                \"paginate\": {
                                    \"first\": \"Première\",
                                    \"last\": \"Dernière\",
                                    \"next\": \"Suivante\",
                                    \"previous\": \"Précédente\"
                                },
                                \"zeroRecords\": \"Aucune entrée correspondante trouvée\",
                                \"aria\": {
                                    \"sortAscending\": \" : activer pour trier la colonne par ordre croissant\",
                                    \"sortDescending\": \" : activer pour trier la colonne par ordre décroissant\"
                                },
                                \"infoThousands\": \" \",
                                \"search\": \"Rechercher :\",
                                \"thousands\": \" \"
                        
                            },
                            
        

                            });
                    });  
                   // table.columns(2).visible(false);
                    
                </script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\base.html.twig");
    }
}
