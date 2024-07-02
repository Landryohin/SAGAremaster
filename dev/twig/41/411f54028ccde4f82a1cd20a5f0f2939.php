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

/* base_consultation.html.twig */
class __TwigTemplate_e0e4cd5ef091df6603f26b3f1aca9df7 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_consultation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_consultation.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang='fr' class='bg-gray'>
\t<!-- Mirrored from sgg.gouv.bj/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 14:04:04 GMT -->
\t<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
    <head>
\t\t";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 35
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 38
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "
    </head>
    <body>
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 667
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 683
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 7
        echo "\t\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, minimum-scale=1, maximum-scale=1\">
            <meta name=\"keywords\" content=\"SAGA DGML\">
            <meta name=\"description\" content=\"Section consultation de SAGA\">
            <meta name=\"author\" content=\"Winner KING Technologie\">
\t\t\t<meta name='description' content='Lire et télécharger les comptes rendus des conseils des ministres, décrets, lois promulguées, arrêtés présidentiels et ordonnances de la République du Bénin' />
\t\t\t<meta http-equiv=\"cache-control\" content=\"no-cache, must-revalidate, post-check=0, pre-check=0\" />
\t\t\t<meta http-equiv=\"cache-control\" content=\"max-age=0\" />
\t\t\t<meta http-equiv=\"expires\" content=\"0\" />
\t\t\t<meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\" />
\t\t\t<meta http-equiv=\"pragma\" content=\"no-cache\" />
\t\t\t<meta property='fb:app_id' content='798097520521275' />
\t\t\t<meta property='og:url' content='index.html' />
\t\t\t<meta property='og:type' content='article' />
\t\t\t<meta property='og:title' content='Secrétariat général du Gouvernement du Bénin' data-dynamic='true' />
\t\t\t<meta property='og:description' content='Lire et télécharger les comptes rendus des conseils des ministres, décrets, lois promulguées, arrêtés présidentiels et ordonnances de la République du Bénin' data-dynamic='true' />
\t\t\t<!--meta property='og:image' content='https://sgg.gouv.bj/images/armoiries.jpg?' data-dynamic='true' /-->
\t\t\t<meta property='og:image:width' content='256' data-dynamic='true'>
\t\t\t<meta property='og:image:height' content='256' data-dynamic='true'>
\t\t\t<meta property='og:locale' content='fr_FR' />
\t\t\t<meta property='og:site_name' content='SAGA DGML' />
\t\t\t<meta property='twitter:url' content='index.php' />
\t\t\t<meta property='twitter:card' content='summary' />
\t\t\t<meta property='twitter:title' content='Système Automatisé de Gestion des Archives de la DGML' />
\t\t\t<meta property='twitter:description' content='Consulté lire et télécharger les archives de la DGML' />
\t\t\t<!--meta property='twitter:image' content='../sgg.gouv.bjimages/armoiries.jpg' /-->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Consultation DGML";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("consultation");
        echo "
\t\t\t<link rel='icon' href='favicon.ico' />
\t\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 41
        echo "assets/Consultation/css/os-stylea139.css?v=0.01";
        echo "\" />
\t\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 42
        echo "assets/Consultation/css/style9093.css?v=0.02";
        echo "\"  />
\t\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 43
        echo "assets/Consultation/css/m-stylea139.css?v=0.01";
        echo "\"  />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "\t\t\t<div class='container relative'>
            <header id='header' class='fixed w100 mnopadding relative hheight transition'>
                            <div class='h100 flex row space middle relative gpadding'>
\t\t\t\t\t<div class='h100 top-5-in bottom-5-in adapt'>
\t\t\t\t\t\t<div id='logo' class='h100 logo relative'>
\t\t\t\t\t\t\t<a href='index.html' class='h100'>
\t\t\t\t\t\t\t\t";
        // line 56
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='h100'>
\t\t\t\t\t\t<menu id='menu' class='h100 '>
\t\t\t\t\t\t\t<ul class='white upper list flex row h100 p adapt middle semibold'>
\t\t\t\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t\t\t\t<li class='right-15-in left-15-in adapt relative'>
\t\t\t\t\t\t\t\t\t";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "niveau", [], "any", false, false, false, 64) == "Admin")) {
            // line 65
            echo "                                    \t<a href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_index");
            echo "'>Tableau de bord</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t<a href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
            echo "'>Tableau de bord</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 69
        echo "                                    ";
        // line 79
        echo "                                </li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t<li class='right-15-in left-15-in adapt relative'>
                                    <a href=";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo ">  <span > Déconnexion</span></a>
                                    ";
        // line 89
        echo "                                </li>
\t\t\t\t\t\t\t </ul>
\t\t\t\t\t\t</menu>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='h100 absolute right top flex row '>
                        \t\t\t\t\t\t<span id='btnsearch' class='h100 bg-warning hwidth padding-20 adapt os-click' data-target='#quicksearch'>
\t\t\t\t\t\t\t<span class='fill block padding-5 adapt'><i class='fill block icon search filter-black'></i></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
                </div>
\t\t\t\t<div id='quicksearch' class='absolute right bg-warning hoverflow transition'>
\t\t\t\t\t<div class='flex row middle left-20 right-20 adapt h100'>
\t\t\t\t\t\t<div class='flex row middle hright-in'>
\t\t\t\t\t\t\t<input type='search' class='noborder nobg noradius padding-10 adapt h3 regular os-search' data-action='/?keywords=:keywords' placeholder='Recherche rapide'>
\t\t\t\t\t\t\t<span class='icon small arrow-right filter-black right'></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                        </header>
                        \t\t\t<div style=\" height: 0vw; min-height: 47px;\" >
\t\t\t\t";
        // line 110
        echo "\t\t\t\t<div class='fill absolute mask'></div>
\t\t\t\t";
        // line 114
        echo "\t";
        // line 157
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class='' >
\t\t\t\t\t\t<form class='top-40 bottom-20-in top-20-in adapt gpadding relative' id='searchbox' action = \"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\" method = \"post\">
\t\t\t\t\t\t\t<h2 class='upper warning adapt bottom-15'>Rechercher un document</h2>
\t\t\t\t\t\t\t<div class='flex row space bottom mblock'>
\t\t\t\t\t\t\t\t<div class='flex flex-1 row mblock las upper white p adapt'>
\t\t\t\t\t\t\t\t\t<div class='right-30 bottom-20 adapt mw100 relative'>
\t\t\t\t\t\t\t\t\t\t<label>Type de documents :</label>
\t\t\t\t\t\t\t\t\t\t<input id='select-type' type='text' placeholder='Tous les documents' class='os-click p adapt' data-target='#typeBox' value='' readonly>
                                        <div class='hoverflow absolute w100 black' id='typeBox'>
                                            <ul class='list'>
\t\t\t\t\t\t\t\t\t\t\t\t<li class='pointer' data-value='ALL'>Tous les documents</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class='pointer' data-value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "Code", [], "any", false, false, false, 170), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "Libelle", [], "any", false, false, false, 170), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                                            </ul>
                                        </div>
                                        <input type='hidden' id='type' name='type' value='ALL'>
\t\t\t\t\t\t\t\t\t</div>

                                    <div class='flex row space mw100'>

                                        <div class='right-30  adapt mw100'>
                                            <label>Du</label>
                                            <input type='date' name='begin' placeholder='Jour / Mois / Année' class='p adapt' value=''>
                                        </div>
                                        <div class='right-30 bottom-20 adapt mw100'>
                                            <label>Au :</label>
                                            <input type='date' name='end' placeholder='Jour / Mois / Année' class='p adapt' value=''>
                                        </div>
                                    </div>
 
                                    <div class='right-30  adapt mw100' style=\"margin-top : 5px\">
                                        <label>Mots clés :</label>
                                        <input type='text' name='keywords' value='' placeholder='Saisissez des mots clés'>
                                    </div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class='bottom-20 adapt mw100'>
\t\t\t\t\t\t\t\t\t\t<input type='submit' value='Rechercher' class='btn warning upper' name =\"submit\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
                        <div class='content mbox'>
\t\t\t<div class='top-40 bottom-20 adapt'>
\t";
        // line 291
        echo "\t
\t<div class='docs hright right-40-in gleft-in top-40 bottom-40 top-40-in bottom-40-in relative adapt bg-white adapt success'>
\t\t<div class='absolute h100 left top padding-10 adapt bg-success alt mhide'></div>
\t\t<div class='flex row middle space'>
\t\t\t<div class='relative'>
\t\t\t\t";
        // line 304
        echo "\t\t\t</div>
\t\t\t<h2 class='h4 bottom-20 adapt letter-spacing upper gray alt text-right'>
\t\t\t\t<i class='iblock icon middle small bg-success alt right-40 adapt'></i>
\t\t\t\tLes documents les plus récents
\t\t\t</h2>
\t\t</div>
\t\t<div class='top-40 adapt relative black'>
\t\t";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 311, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 312
            echo "\t<aside class='doc relative '>
    <input type='checkbox' value='doc-33722' name='doc-33722' id='doc-33722' class='hide'>
\t";
            // line 315
            echo "\t<div class='flex row adapt w100 bottom-30'  for='doc-33722'>
\t\t<div class='thumb w60'>
\t\t<style>
\t\t.doc .thumb { min-width: 11%; }
\t\t</style>
\t\t\t<figure class='h100'>
\t\t\t\t <div class='h100 semi relative center bg-gray alt'>
\t\t\t\t\t<i class='fill absolute top left bg-black trans'></i>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class=' white  '>";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "TypeDocument", [], "any", false, false, false, 323), "Code", [], "any", false, false, false, 323), "html", null, true);
            echo "</i></i>
\t\t\t\t\t<i class='flag absolute bottom flex flex-1 row half block-center'><i></i><i></i><i></i></i>
\t\t\t\t</div>
\t\t\t\t<div class='h100 semi flex col middle bg-gray'>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='num black alt'>";
            // line 327
            ((twig_get_attribute($this->env, $this->source, $context["document"], "DateArrivee", [], "any", false, false, false, 327)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "DateArrivee", [], "any", false, false, false, 327), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</i></i>
\t\t\t\t</div>  
\t\t\t</figure>
\t\t</div>
\t\t<div class='flex row bottom  bottom-15-in adapt'>
\t\t\t<div class='infos light adapt nowrap left-20-in right-20-in p'>
\t\t\t\t<span class='block semibold bottom-15 adapt'>Publié le ";
            // line 333
            ((twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 333)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 333), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</span>
\t\t\t\t";
            // line 337
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom right-30 adapt w100'>
\t\t
\t\t\t<div class='header adapt left-20-in'>

\t\t\t\t<h3 class='h4 semibold adapt bottom-5'><a class='os-read right-30 adapt' read data-target='";
            // line 343
            ((twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 343)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 343), "Y/m/d"), "html", null, true))) : (print ("")));
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Chemin", [], "any", false, false, false, 343), "html", null, true);
            echo "'  data-keywords=\"&quot;&quot;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 343), "html", null, true);
            echo " <br> <small style=\"font-size:12px;margin-bottom:13px;color:#038261\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "TypeDocument", [], "any", false, false, false, 343), "Libelle", [], "any", false, false, false, 343), "html", null, true);
            echo "</small>  </a></h3>
\t\t\t\t<p class='black adapt bottom-15 adapt light text-justify doc-desc ' data-keywords=\"&quot;&quot;\">";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "structure", [], "any", false, false, false, 344), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "NumeroEnregistrement", [], "any", false, false, false, 344), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "reference", [], "any", false, false, false, 344), "html", null, true);
            echo "</p>
\t\t\t\t<div class='flex row middle bottom-15-in adapt p'>
\t\t\t\t\t";
            // line 351
            echo "\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom'>
\t\t\t<div class='buttons flex row bottom relative letter-s\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpacing upper bold bottom-15-in adapt gray alt p'>
                <span data-target='";
            // line 356
            ((twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 356)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 356), "Y/m/d"), "html", null, true))) : (print ("")));
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Chemin", [], "any", false, false, false, 356), "html", null, true);
            echo "' class='os-read right-30 adapt' read>Lire</span>
                <span data-target='";
            // line 357
            ((twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 357)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "DocumentAt", [], "any", false, false, false, 357), "Y/m/d"), "html", null, true))) : (print ("")));
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Chemin", [], "any", false, false, false, 357), "html", null, true);
            echo "' class='os-read right-30 adapt' read>Télécharger</span> 
                ";
            // line 359
            echo "\t\t\t</div>
\t\t</div>
\t</div>
    </aside>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "\t</div>
\t</div>
";
        // line 646
        echo "\t\t\t<footer id='footer' class='w100 bg-black alt'>
\t\t\t\t<div class='flex row space mblock mcenter gpadding htop-in hbottom-in adapt'>
\t\t\t\t\t <h1 style=\"color: white; font-size:40px; padding-top:15px\">SAGA</h1>
\t\t\t\t\t<div class='text-right'>
\t\t\t\t\t\t<ul class='list flex row middle upper bold white p adapt bottom-15-in bottom-20 mcenter ' style=\"padding-left:600px\">
\t\t\t\t\t\t\t<li class=''>
\t\t\t\t\t\t\t\t<a href=";
        // line 652
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo ">  <span > Déconnexion</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='left-30 adapt relative'><a href='";
        // line 654
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "'>Tableau de bord</a></li>
\t\t\t\t\t\t\t";
        // line 658
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class='p adapt white light'>© DGML République du Bénin le ";
        // line 659
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<span class='flag flex row w100 flex-1'><i></i><i></i><i></i></span>
\t\t\t</footer>
\t\t\t</div>
\t        <div class='popup'><span class='close filter-white'></span></div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 667
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 668
        echo "            ";
        // line 670
        echo "\t\t\t<script>
\t\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

\t\t\t\tga('create', 'UA-67497405-6', 'auto');
\t\t\t\tga('send', 'pageview');
\t\t\t</script>
\t\t\t<script src= \"";
        // line 679
        echo "assets/Consultation/js/jquery-3.3.1.min.js";
        echo "\"></script>
\t\t\t<script src= \"";
        // line 680
        echo "assets/Consultation/js/os-script5d17.js?v=0.11";
        echo "\"></script>
\t\t\t<script src= \"";
        // line 681
        echo "assets/Consultation/js/script5d17.js?v=0.11";
        echo "\"></script> 
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_consultation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  522 => 681,  518 => 680,  514 => 679,  503 => 670,  501 => 668,  491 => 667,  473 => 659,  470 => 658,  466 => 654,  461 => 652,  453 => 646,  449 => 364,  439 => 359,  433 => 357,  427 => 356,  420 => 351,  411 => 344,  401 => 343,  393 => 337,  389 => 333,  380 => 327,  373 => 323,  363 => 315,  359 => 312,  355 => 311,  346 => 304,  339 => 291,  303 => 172,  292 => 170,  288 => 169,  275 => 159,  271 => 157,  269 => 114,  266 => 110,  244 => 89,  240 => 82,  235 => 79,  233 => 69,  227 => 67,  221 => 65,  219 => 64,  216 => 63,  208 => 56,  200 => 49,  190 => 48,  178 => 43,  174 => 42,  170 => 41,  164 => 39,  154 => 38,  135 => 35,  98 => 7,  88 => 6,  76 => 683,  73 => 667,  71 => 48,  66 => 45,  63 => 38,  57 => 35,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang='fr' class='bg-gray'>
\t<!-- Mirrored from sgg.gouv.bj/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 14:04:04 GMT -->
\t<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
    <head>
\t\t{% block meta %}
\t\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, minimum-scale=1, maximum-scale=1\">
            <meta name=\"keywords\" content=\"SAGA DGML\">
            <meta name=\"description\" content=\"Section consultation de SAGA\">
            <meta name=\"author\" content=\"Winner KING Technologie\">
\t\t\t<meta name='description' content='Lire et télécharger les comptes rendus des conseils des ministres, décrets, lois promulguées, arrêtés présidentiels et ordonnances de la République du Bénin' />
\t\t\t<meta http-equiv=\"cache-control\" content=\"no-cache, must-revalidate, post-check=0, pre-check=0\" />
\t\t\t<meta http-equiv=\"cache-control\" content=\"max-age=0\" />
\t\t\t<meta http-equiv=\"expires\" content=\"0\" />
\t\t\t<meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\" />
\t\t\t<meta http-equiv=\"pragma\" content=\"no-cache\" />
\t\t\t<meta property='fb:app_id' content='798097520521275' />
\t\t\t<meta property='og:url' content='index.html' />
\t\t\t<meta property='og:type' content='article' />
\t\t\t<meta property='og:title' content='Secrétariat général du Gouvernement du Bénin' data-dynamic='true' />
\t\t\t<meta property='og:description' content='Lire et télécharger les comptes rendus des conseils des ministres, décrets, lois promulguées, arrêtés présidentiels et ordonnances de la République du Bénin' data-dynamic='true' />
\t\t\t<!--meta property='og:image' content='https://sgg.gouv.bj/images/armoiries.jpg?' data-dynamic='true' /-->
\t\t\t<meta property='og:image:width' content='256' data-dynamic='true'>
\t\t\t<meta property='og:image:height' content='256' data-dynamic='true'>
\t\t\t<meta property='og:locale' content='fr_FR' />
\t\t\t<meta property='og:site_name' content='SAGA DGML' />
\t\t\t<meta property='twitter:url' content='index.php' />
\t\t\t<meta property='twitter:card' content='summary' />
\t\t\t<meta property='twitter:title' content='Système Automatisé de Gestion des Archives de la DGML' />
\t\t\t<meta property='twitter:description' content='Consulté lire et télécharger les archives de la DGML' />
\t\t\t<!--meta property='twitter:image' content='../sgg.gouv.bjimages/armoiries.jpg' /-->
        {% endblock %}
        <title>{% block title %}Consultation DGML{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('consultation') }}
\t\t\t<link rel='icon' href='favicon.ico' />
\t\t\t<link type='text/css' rel='stylesheet' href=\"{{ 'assets/Consultation/css/os-stylea139.css?v=0.01' }}\" />
\t\t\t<link type='text/css' rel='stylesheet' href=\"{{ 'assets/Consultation/css/style9093.css?v=0.02' }}\"  />
\t\t\t<link type='text/css' rel='stylesheet' href=\"{{ 'assets/Consultation/css/m-stylea139.css?v=0.01' }}\"  />
        {% endblock %}

    </head>
    <body>
        {% block body %}
\t\t\t<div class='container relative'>
            <header id='header' class='fixed w100 mnopadding relative hheight transition'>
                            <div class='h100 flex row space middle relative gpadding'>
\t\t\t\t\t<div class='h100 top-5-in bottom-5-in adapt'>
\t\t\t\t\t\t<div id='logo' class='h100 logo relative'>
\t\t\t\t\t\t\t<a href='index.html' class='h100'>
\t\t\t\t\t\t\t\t{# <img src= {{ asset('build/images/logo.cec7e0f7.png') }} class='h100'> #}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='h100'>
\t\t\t\t\t\t<menu id='menu' class='h100 '>
\t\t\t\t\t\t\t<ul class='white upper list flex row h100 p adapt middle semibold'>
\t\t\t\t\t\t\t\t{# <li class='right-15-in left-15-in adapt'><a href='comptes-rendus-conseils-ministres/index.html'>Conseil des ministres</a></li> #}
\t\t\t\t\t\t\t\t<li class='right-15-in left-15-in adapt relative'>
\t\t\t\t\t\t\t\t\t{% if app.user.niveau == \"Admin\" %}
                                    \t<a href='{{path('app_postes_index')}}'>Tableau de bord</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href='{{path('app_documents_index')}}'>Tableau de bord</a>
\t\t\t\t\t\t\t\t\t{% endif %}
                                    {# <div class='absolute left transition hoverflow'>
                                        <ul class='top-5-in bottom-5-in adapt'>
                                            <li><a href='documentheque/lois/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Lois promulguées</a></li>
                                            <li><a href='documentheque/decrets/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Décrets</a></li>
                                            <li><a href='documentheque/ordonnances/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Ordonnances</a></li>
                                            <li><a href='documentheque/arretes/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Arrêtés présidentiels</a></li>
                                            <li><a href='documentheque/accords/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Accords</a></li>
                                            <li><a href='documentheque/decisions/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Décisions</a></li>
                                        </ul>
                                    </div> #}
                                </li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t<li class='right-15-in left-15-in adapt relative'>
                                    <a href={{ path('logout') }}>  <span > Déconnexion</span></a>
                                    {# <div class='absolute left transition hoverflow'>
                                        <ul class='top-5-in bottom-5-in adapt'>
                                            <li><a href='presentation/attributions/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Attributions</a></li>
                                            <li><a href='presentation/organisation/index.html' class='adapt left-15-in right-15-in top-5-in bottom-5-in nowrap'>Organisation</a></li>
                                        </ul>
                                    </div> #}
                                </li>
\t\t\t\t\t\t\t </ul>
\t\t\t\t\t\t</menu>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='h100 absolute right top flex row '>
                        \t\t\t\t\t\t<span id='btnsearch' class='h100 bg-warning hwidth padding-20 adapt os-click' data-target='#quicksearch'>
\t\t\t\t\t\t\t<span class='fill block padding-5 adapt'><i class='fill block icon search filter-black'></i></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
                </div>
\t\t\t\t<div id='quicksearch' class='absolute right bg-warning hoverflow transition'>
\t\t\t\t\t<div class='flex row middle left-20 right-20 adapt h100'>
\t\t\t\t\t\t<div class='flex row middle hright-in'>
\t\t\t\t\t\t\t<input type='search' class='noborder nobg noradius padding-10 adapt h3 regular os-search' data-action='/?keywords=:keywords' placeholder='Recherche rapide'>
\t\t\t\t\t\t\t<span class='icon small arrow-right filter-black right'></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                        </header>
                        \t\t\t<div style=\" height: 0vw; min-height: 47px;\" >
\t\t\t\t{# <figure class='relative fill absolute'><img src='images/backgroundad05.jpg?v=001' class='cover'></figure> #}
\t\t\t\t<div class='fill absolute mask'></div>
\t\t\t\t{# <div class='absolute left bottom w100'>
\t\t\t\t\t<div class='flex row space middle gpadding mblock' id='slider'>
\t\t\t\t\t\t<div class='half h100 mw100'>\t\t\t\t\t #}
\t{# <div class='slide-box fill' tabindex='1'>
\t\t<div class='slide-container nohover fill hoverflow'>
\t\t\t<div class='slides fill'>
\t\t\t\t\t\t\t<div class='slide fill active'>
\t\t\t\t\t<h1 class='title adapt white semibold'><a href='cm/2022-08-03/index.html'>Compte rendu du Conseil des Ministres du 03 août 2022</a></h1>
\t\t\t\t\t<div class='upper extrabold warning top-15 adapt flex row middle'>
\t\t\t\t\t\t<i class='separator right-20 adapt mhide'></i>
                        \t\t\t\t\t\t<a href='cm/2022-08-03/index.html' class='right-30 adapt letter-spacing'>Lire</a>
                        \t\t\t\t\t\t<a href='cm/2022-08-03/compte-rendu-conseil-ministres-aout-2022.pdf_%3b' class=' letter-spacing' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class='slide fill '>
\t\t\t\t\t<h1 class='title adapt white semibold'><a href='cm/2022-07-27/index.html'>Compte rendu du Conseil des Ministres du 27 juil. 2022</a></h1>
\t\t\t\t\t<div class='upper extrabold warning top-15 adapt flex row middle'>
\t\t\t\t\t\t<i class='separator right-20 adapt mhide'></i>
                        \t\t\t\t\t\t<a href='cm/2022-07-27/index.html' class='right-30 adapt letter-spacing'>Lire</a>
                        \t\t\t\t\t\t<a href='cm/2022-07-27/compte-rendu-conseil-ministres-juil.-2022.pdf_%3b' class=' letter-spacing' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class='slide fill '>
\t\t\t\t\t<h1 class='title adapt white semibold'><a href='cm/2022-07-20/index.html'>Compte rendu du Conseil des Ministres du 20 juil. 2022</a></h1>
\t\t\t\t\t<div class='upper extrabold warning top-15 adapt flex row middle'>
\t\t\t\t\t\t<i class='separator right-20 adapt mhide'></i>
                        \t\t\t\t\t\t<a href='cm/2022-07-20/index.html' class='right-30 adapt letter-spacing'>Lire</a>
                        \t\t\t\t\t\t<a href='cm/2022-07-20/compte-rendu-conseil-ministres-juil.-2022.pdf_%3b' class=' letter-spacing' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t<div class='slide fill '>
\t\t\t\t\t<h1 class='title adapt white semibold'><a href='cm/2022-07-13/index.html'>Compte rendu du Conseil des Ministres du 13 juil. 2022</a></h1>
\t\t\t\t\t<div class='upper extrabold warning top-15 adapt flex row middle'>
\t\t\t\t\t\t<i class='separator right-20 adapt mhide'></i>
                        \t\t\t\t\t\t<a href='cm/2022-07-13/index.html' class='right-30 adapt letter-spacing'>Lire</a>
                        \t\t\t\t\t\t<a href='cm/2022-07-13/compte-rendu-conseil-ministres-juil.-2022.pdf_%3b' class=' letter-spacing' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t</div>
\t</div> #}
{# </div>
<div class='flex row right'>
\t<span class='slide-prev border icon right-15 padding-10 adapt disable' data-target='#slider'><i class='fill block icon arrow-left filter-white'></i></span>
\t<span class='slide-next border icon padding-10 adapt' data-target='#slider'><i class='fill block icon arrow-right filter-white'></i></span>
</div> #}
\t\t\t\t\t</div>
\t\t\t\t\t<div class='' >
\t\t\t\t\t\t<form class='top-40 bottom-20-in top-20-in adapt gpadding relative' id='searchbox' action = \"{{path('Accueil' )}}\" method = \"post\">
\t\t\t\t\t\t\t<h2 class='upper warning adapt bottom-15'>Rechercher un document</h2>
\t\t\t\t\t\t\t<div class='flex row space bottom mblock'>
\t\t\t\t\t\t\t\t<div class='flex flex-1 row mblock las upper white p adapt'>
\t\t\t\t\t\t\t\t\t<div class='right-30 bottom-20 adapt mw100 relative'>
\t\t\t\t\t\t\t\t\t\t<label>Type de documents :</label>
\t\t\t\t\t\t\t\t\t\t<input id='select-type' type='text' placeholder='Tous les documents' class='os-click p adapt' data-target='#typeBox' value='' readonly>
                                        <div class='hoverflow absolute w100 black' id='typeBox'>
                                            <ul class='list'>
\t\t\t\t\t\t\t\t\t\t\t\t<li class='pointer' data-value='ALL'>Tous les documents</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% for type in types %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class='pointer' data-value='{{type.Code}}'>{{type.Libelle}}</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
                                            </ul>
                                        </div>
                                        <input type='hidden' id='type' name='type' value='ALL'>
\t\t\t\t\t\t\t\t\t</div>

                                    <div class='flex row space mw100'>

                                        <div class='right-30  adapt mw100'>
                                            <label>Du</label>
                                            <input type='date' name='begin' placeholder='Jour / Mois / Année' class='p adapt' value=''>
                                        </div>
                                        <div class='right-30 bottom-20 adapt mw100'>
                                            <label>Au :</label>
                                            <input type='date' name='end' placeholder='Jour / Mois / Année' class='p adapt' value=''>
                                        </div>
                                    </div>
 
                                    <div class='right-30  adapt mw100' style=\"margin-top : 5px\">
                                        <label>Mots clés :</label>
                                        <input type='text' name='keywords' value='' placeholder='Saisissez des mots clés'>
                                    </div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class='bottom-20 adapt mw100'>
\t\t\t\t\t\t\t\t\t\t<input type='submit' value='Rechercher' class='btn warning upper' name =\"submit\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
                        <div class='content mbox'>
\t\t\t<div class='top-40 bottom-20 adapt'>
\t{# <div class='gpadding unes relative bottom-40 adapt'>
\t\t<figure class='absolute h100 left top'>
\t\t\t<img src='images/background4.jpg' class='cover transition'>
\t\t\t<span class='absolute fill bg-success trans'></span>
\t\t</figure>
\t\t<h2 class='h4 bottom-20 adapt letter-spacing upper gray alt text-right '>
            <i class='iblock icon middle small bg-success right-40 adapt'></i>
            Les lois à la une
        </h2>
\t\t<div class='flex row space mblock top-40 adapt relative'>
\t\t\t<div class='half-20 adapt bg-white une mw100 '>
\t\t\t\t<figure class='w100 relative'><img src='images/benin.jpg' class='cover'></figure>
\t\t\t\t<div class='padding-30 adapt'>
\t\t\t\t\t<div class='bottom-20 adapt p'>
\t\t\t\t\t\t<b class='right-30 adapt success'>07.11.2019</b>
\t\t\t\t\t\t<span class='upper gray alt'>Loi</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class='adapt bottom-10 adapt'><a href='doc/loi-2019-40/index.html'>Loi n° 2019-40 du 07 novembre 2019</a></h3>
\t\t\t\t\t<p class='black adapt bottom-20 adapt light'>portant révision de la loi numéro 90-32 du 11 décembre 1990 portant Constitution de la République du Bénin.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span data-target='/doc/loi-2019-40/read' class='p adapt black alt upper bottom-20 right-30 os-read pointer'>Lire la loi</span>
\t\t\t\t\t\t<a href='doc/loi-2019-40/loi-2019-40.pdf_%3b' class='p adapt success bottom-20 upper' target='_blank' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class='half-20 adapt bg-white une mw100 '>
\t\t\t\t<figure class='w100 relative'><img src='images/background.jpg' class='cover'></figure>
\t\t\t\t<div class='padding-30 adapt'>
\t\t\t\t\t<div class='bottom-20 adapt p'>
\t\t\t\t\t\t<b class='right-30 adapt success'>25.11.2019</b>
\t\t\t\t\t\t<span class='upper gray alt'>Loi</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class='adapt bottom-10 adapt'><a href='doc/loi-2019-45/index.html'>Loi N° 2019-45</a></h3>
\t\t\t\t\t<p class='black adapt bottom-20 adapt light'>portant statut de l'opposition en République du Bénin.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span data-target='/doc/loi-2019-45/read' class='p adapt black alt upper bottom-20 right-30 os-read pointer'>Lire la loi</span>
\t\t\t\t\t\t<a href='doc/loi-2019-45/loi-2019-45.pdf_%3b' class='p adapt success bottom-20 upper' target='_blank' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> #}
{# \t
\t<div class='gpadding unes relative adapt error'>
\t\t<figure class='absolute h100 right top'>
\t\t\t<img src='images/background.jpg' class='cover transition'>
\t\t\t<span class='absolute fill bg-error trans'></span>
\t\t</figure>
\t\t<h2 class='h4 bottom-20 adapt letter-spacing upper gray alt text-left '>
            <i class='iblock icon middle small bg-error right-40 adapt'></i>
            Les plus téléchargées
        </h2>
\t\t<div class='flex row space mblock top-40 adapt relative black'>
\t\t\t<div class='half-20 adapt bg-white une mw100 '>
\t\t\t\t<figure class='w100 relative'><img src='images/background3.jpg' class='cover'></figure>
\t\t\t\t<div class='padding-30 adapt'>
\t\t\t\t\t<div class='bottom-20 adapt p'>
\t\t\t\t\t\t<b class='right-30 adapt error'>15.11.2019</b>
\t\t\t\t\t\t<span class='upper gray alt'>Loi</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class='adapt bottom-10 adapt'><a href='doc/loi-2019-41/index.html'>Loi N° 2019-41</a></h3>
\t\t\t\t\t<p class='black adapt bottom-20 adapt light'>modifiant et complétant la loi n° 2018-23 du 17 septembre 2018 portant charte des partis politiques en République du Bénin.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span data-target='/doc/loi-2019-41/read' class='p adapt black alt upper bottom-20 right-30 os-read pointer'>Lire la loi</span>
\t\t\t\t\t\t<a href='doc/loi-2019-41/loi-2019-41.pdf_%3b' class='p adapt success bottom-20 upper' target='_blank' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class='half-20 adapt bg-white une mw100 '>
\t\t\t\t<figure class='w100 relative'><img src='images/background3.jpg' class='cover'></figure>
\t\t\t\t<div class='padding-30 adapt'>
\t\t\t\t\t<div class='bottom-20 adapt p'>
\t\t\t\t\t\t<b class='right-30 adapt error'>15.11.2019</b>
\t\t\t\t\t\t<span class='upper gray alt'>Loi</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class='adapt bottom-10 adapt'><a href='doc/loi-2019-43/index.html'>Loi N° 2019-43</a></h3>
\t\t\t\t\t<p class='black adapt bottom-20 adapt light'>portant code électoral en république du Bénin</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span data-target='./doc/loi-2019-43/read' class='p adapt gray alt upper bottom-20 right-30 os-read pointer'>Lire la loi</span>
\t\t\t\t\t\t<a href='doc/loi-2019-43/loi-2019-43.pdf_%3b' class='p adapt success bottom-20 upper' target='_blank' download>Télécharger</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> #}
\t
\t<div class='docs hright right-40-in gleft-in top-40 bottom-40 top-40-in bottom-40-in relative adapt bg-white adapt success'>
\t\t<div class='absolute h100 left top padding-10 adapt bg-success alt mhide'></div>
\t\t<div class='flex row middle space'>
\t\t\t<div class='relative'>
\t\t\t\t{# <div class='grid laws'>
\t\t\t\t\t<i></i>
\t\t\t\t\t<i>L</i>
\t\t\t\t\t<i>O</i>
\t\t\t\t\t<i class='sep'></i>
\t\t\t\t\t<i>I</i>
\t\t\t\t\t<i>S</i>
\t\t\t\t</div> #}
\t\t\t</div>
\t\t\t<h2 class='h4 bottom-20 adapt letter-spacing upper gray alt text-right'>
\t\t\t\t<i class='iblock icon middle small bg-success alt right-40 adapt'></i>
\t\t\t\tLes documents les plus récents
\t\t\t</h2>
\t\t</div>
\t\t<div class='top-40 adapt relative black'>
\t\t{% for document in documents %}
\t<aside class='doc relative '>
    <input type='checkbox' value='doc-33722' name='doc-33722' id='doc-33722' class='hide'>
\t{# <label for='doc-33722' class='block absolute top icon small padding-5 adapt bg-white'></label> #}
\t<div class='flex row adapt w100 bottom-30'  for='doc-33722'>
\t\t<div class='thumb w60'>
\t\t<style>
\t\t.doc .thumb { min-width: 11%; }
\t\t</style>
\t\t\t<figure class='h100'>
\t\t\t\t <div class='h100 semi relative center bg-gray alt'>
\t\t\t\t\t<i class='fill absolute top left bg-black trans'></i>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class=' white  '>{{document.TypeDocument.Code}}</i></i>
\t\t\t\t\t<i class='flag absolute bottom flex flex-1 row half block-center'><i></i><i></i><i></i></i>
\t\t\t\t</div>
\t\t\t\t<div class='h100 semi flex col middle bg-gray'>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='num black alt'>{{document.DateArrivee ? document.DateArrivee|date('d-m-Y') : ''}}</i></i>
\t\t\t\t</div>  
\t\t\t</figure>
\t\t</div>
\t\t<div class='flex row bottom  bottom-15-in adapt'>
\t\t\t<div class='infos light adapt nowrap left-20-in right-20-in p'>
\t\t\t\t<span class='block semibold bottom-15 adapt'>Publié le {{document.DocumentAt ? document.DocumentAt|date('d-m-Y') : '' }}</span>
\t\t\t\t{# <span class='block'><b class='semibold'>{{document.DocumentAt ? document.DocumentAt|date('Y-m-d') : '' }}</b></span> 
\t\t\t\t<span class='block upper'><b class='semibold'>47</b> Lectures</span>
\t\t\t\t<span class='block upper'><b class='semibold'>189</b> Téléchargements</span>#}
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom right-30 adapt w100'>
\t\t
\t\t\t<div class='header adapt left-20-in'>

\t\t\t\t<h3 class='h4 semibold adapt bottom-5'><a class='os-read right-30 adapt' read data-target='{{document.DocumentAt ? document.DocumentAt|date('Y/m/d') : ''}}/{{document.Chemin}}'  data-keywords=\"&quot;&quot;\">{{ document.Objet}} <br> <small style=\"font-size:12px;margin-bottom:13px;color:#038261\"> {{ document.TypeDocument.Libelle}}</small>  </a></h3>
\t\t\t\t<p class='black adapt bottom-15 adapt light text-justify doc-desc ' data-keywords=\"&quot;&quot;\">{{document.structure}} {{document.NumeroEnregistrement}} {{document.reference}}</p>
\t\t\t\t<div class='flex row middle bottom-15-in adapt p'>
\t\t\t\t\t{# <span class='mblock'>Partager sur</span>
                    <a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https://sgg.gouv.bj/doc/loi-2022-14/&amp;t=Loi%20N%C2%B0%202022-14' class='icon min cover facebook left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://twitter.com/intent/tweet?text=Loi%20N%C2%B0%202022-14&amp;url=https://sgg.gouv.bj/doc/loi-2022-14/' class='icon min cover twitter left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://www.linkedin.com/shareArticle?mini=true&amp;url=https://sgg.gouv.bj/doc/loi-2022-14/&amp;title=Loi%20N%C2%B0%202022-14&amp;summary=portant%20orientation%20agricole,%20s%c3%a9curit%c3%a9%20alimentaire%20et%20nutritionnelle%20en%20R%c3%a9publique%20du%20B%c3%a9nin.' class='icon min cover linkedin left-10 adapt'></a>
\t\t\t\t\t<a href='mailto:?subject=Loi%20N%C2%B0%202022-14&amp;body=Je vous invite à lire ou télécharger ce document :  https://sgg.gouv.bj/doc/loi-2022-14/.' class='icon min cover mail left-10 adapt'></a> #}
\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom'>
\t\t\t<div class='buttons flex row bottom relative letter-s\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpacing upper bold bottom-15-in adapt gray alt p'>
                <span data-target='{{document.DocumentAt ? document.DocumentAt|date('Y/m/d') : ''}}/{{document.Chemin}}' class='os-read right-30 adapt' read>Lire</span>
                <span data-target='{{document.DocumentAt ? document.DocumentAt|date('Y/m/d') : ''}}/{{document.Chemin}}' class='os-read right-30 adapt' read>Télécharger</span> 
                {# <a href='{{dir}}{{document.Chemin}}_%3b' class='' download>Télécharger</a> #}
\t\t\t</div>
\t\t</div>
\t</div>
    </aside>
\t{% endfor %}
\t</div>
\t</div>
{# \t
\t<div class='docs hleft left-40-in gright-in top-40 top-40-in bottom-40-in relative adapt bg-white adapt'>
\t\t<div class='absolute h100 right top padding-10 adapt bg-warning alt mhide'></div>
\t\t<div class='flex row middle space'>
\t\t\t<h2 class='h4 bottom-20 adapt letter-spacing upper gray alt text-left'>
\t\t\t\t<i class='iblock icon middle small bg-warning alt right-40 adapt'></i>
\t\t\t\tLes décrets les plus récents
\t\t\t</h2>
\t\t\t<div class='relative'>
\t\t\t\t<div class='grid decrees'>
\t\t\t\t\t<i>D</i>
\t\t\t\t\t<i>É</i>
\t\t\t\t\t<i>C</i>
\t\t\t\t\t<i>R</i>
\t\t\t\t\t<i>E</i>
\t\t\t\t\t<i>T</i>
\t\t\t\t\t<i>S</i>
\t\t\t\t\t<i class='sep'></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class='top-40 adapt relative black'>
\t\t\t            <aside class='doc relative '>
        \t<input type='checkbox' value='doc-33737' name='doc-33737' id='doc-33737' class='hide'>
\t<label for='doc-33737' class='block absolute top icon small padding-5 adapt bg-white'></label>
\t<div class='flex row adapt w100 bottom-30'  for='doc-33737'>
\t\t<div class='thumb'>
\t\t\t<figure class='relative h100'>
\t\t\t\t<div class='h100 semi relative center bg-gray alt'>
\t\t\t\t\t<i class='fill absolute top left bg-black trans'><img src='images/thumb.png' class='contain filter-white'></i>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='cat white padding-5 adapt '>decret</i></i>
\t\t\t\t\t<i class='flag absolute bottom flex flex-1 row half block-center'><i></i><i></i><i></i></i>
\t\t\t\t</div>
\t\t\t\t<div class='h100 semi flex col middle bg-gray'>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='num black alt'>2022-458</i></i>
\t\t\t\t</div>
\t\t\t</figure>
\t\t</div>
\t\t<div class='flex row bottom  bottom-15-in adapt'>
\t\t\t<div class='infos light adapt nowrap left-20-in right-20-in p'>
\t\t\t\t<span class='block semibold bottom-15 adapt'>Publié le 12.08.2022</span>
\t\t\t\t<span class='block'><b class='semibold'>8 Mo</b></span>
\t\t\t\t<span class='block upper'><b class='semibold'>7</b> Lectures</span>
\t\t\t\t<span class='block upper'><b class='semibold'>135</b> Téléchargements</span>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom right-30 adapt w100'>
\t\t\t<div class='header adapt left-20-in'>
\t\t\t\t<h3 class='h4 semibold adapt bottom-5'><a href='doc/decret-2022-458/index.html' class='doc-title ' data-keywords=\"&quot;&quot;\">Décret N° 2022-458 du 27 juil. 2022</a></h3>
\t\t\t\t<p class='black adapt bottom-15 adapt light text-justify doc-desc ' data-keywords=\"&quot;&quot;\">portant approbation des statuts du Centre national de Gestion des Réserves de Faune.</p>
\t\t\t\t<div class='flex row middle bottom-15-in adapt p'>
\t\t\t\t\t<span class='mblock'>Partager sur</span>
                                        \t\t\t\t\t<a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https://sgg.gouv.bj/doc/decret-2022-458/&amp;t=D%C3%A9cret%20N%C2%B0%202022-458' class='icon min cover facebook left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://twitter.com/intent/tweet?text=D%C3%A9cret%20N%C2%B0%202022-458&amp;url=https://sgg.gouv.bj/doc/decret-2022-458/' class='icon min cover twitter left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://www.linkedin.com/shareArticle?mini=true&amp;url=https://sgg.gouv.bj/doc/decret-2022-458/&amp;title=D%C3%A9cret%20N%C2%B0%202022-458&amp;summary=portant%20approbation%20des%20statuts%20du%20Centre%20national%20de%20Gestion%20des%20R%c3%a9serves%20de%20Faune.' class='icon min cover linkedin left-10 adapt'></a>
\t\t\t\t\t<a href='mailto:?subject=D%C3%A9cret%20N%C2%B0%202022-458&amp;body=Je vous invite à lire ou télécharger ce document :  https://sgg.gouv.bj/doc/decret-2022-458/.' class='icon min cover mail left-10 adapt'></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom'>
\t\t\t<div class='buttons flex row bottom relative letter-spacing upper bold bottom-15-in adapt gray alt p'>
                <span data-target='/doc/decret-2022-458/read' class='os-read right-30 adapt'>Lire</span>
                <a href='doc/decret-2022-458/decret-2022-458.pdf_%3b' class='' download>Télécharger</a>
\t\t\t</div>
\t\t</div>
\t</div>
    </aside>

\t\t\t            <aside class='doc relative '>
        \t<input type='checkbox' value='doc-33736' name='doc-33736' id='doc-33736' class='hide'>
\t<label for='doc-33736' class='block absolute top icon small padding-5 adapt bg-white'></label>
\t<div class='flex row adapt w100 bottom-30'  for='doc-33736'>
\t\t<div class='thumb'>
\t\t\t<figure class='relative h100'>
\t\t\t\t<div class='h100 semi relative center bg-gray alt'>
\t\t\t\t\t<i class='fill absolute top left bg-black trans'><img src='images/thumb.png' class='contain filter-white'></i>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='cat white padding-5 adapt '>decret</i></i>
\t\t\t\t\t<i class='flag absolute bottom flex flex-1 row half block-center'><i></i><i></i><i></i></i>
\t\t\t\t</div>
\t\t\t\t<div class='h100 semi flex col middle bg-gray'>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='num black alt'>2022-457</i></i>
\t\t\t\t</div>
\t\t\t</figure>
\t\t</div>
\t\t<div class='flex row bottom  bottom-15-in adapt'>
\t\t\t<div class='infos light adapt nowrap left-20-in right-20-in p'>
\t\t\t\t<span class='block semibold bottom-15 adapt'>Publié le 12.08.2022</span>
\t\t\t\t<span class='block'><b class='semibold'>1 Mo</b></span>
\t\t\t\t<span class='block upper'><b class='semibold'>36</b> Lectures</span>
\t\t\t\t<span class='block upper'><b class='semibold'>158</b> Téléchargements</span>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom right-30 adapt w100'>
\t\t\t<div class='header adapt left-20-in'>
\t\t\t\t<h3 class='h4 semibold adapt bottom-5'><a href='doc/decret-2022-457/index.html' class='doc-title ' data-keywords=\"&quot;&quot;\">Décret N° 2022-457 du 27 juil. 2022</a></h3>
\t\t\t\t<p class='black adapt bottom-15 adapt light text-justify doc-desc ' data-keywords=\"&quot;&quot;\">portant attributions, organisation et fonctionnement de la Direction générale des Douanes.</p>
\t\t\t\t<div class='flex row middle bottom-15-in adapt p'>
\t\t\t\t\t<span class='mblock'>Partager sur</span>
                                        \t\t\t\t\t<a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https://sgg.gouv.bj/doc/decret-2022-457/&amp;t=D%C3%A9cret%20N%C2%B0%202022-457' class='icon min cover facebook left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://twitter.com/intent/tweet?text=D%C3%A9cret%20N%C2%B0%202022-457&amp;url=https://sgg.gouv.bj/doc/decret-2022-457/' class='icon min cover twitter left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://www.linkedin.com/shareArticle?mini=true&amp;url=https://sgg.gouv.bj/doc/decret-2022-457/&amp;title=D%C3%A9cret%20N%C2%B0%202022-457&amp;summary=portant%20attributions,%20organisation%20et%20fonctionnement%20de%20la%20Direction%20g%c3%a9n%c3%a9rale%20des%20Douanes.' class='icon min cover linkedin left-10 adapt'></a>
\t\t\t\t\t<a href='mailto:?subject=D%C3%A9cret%20N%C2%B0%202022-457&amp;body=Je vous invite à lire ou télécharger ce document :  https://sgg.gouv.bj/doc/decret-2022-457/.' class='icon min cover mail left-10 adapt'></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom'>
\t\t\t<div class='buttons flex row bottom relative letter-spacing upper bold bottom-15-in adapt gray alt p'>
                <span data-target='/doc/decret-2022-457/read' class='os-read right-30 adapt'>Lire</span>
                <a href='doc/decret-2022-457/decret-2022-457.pdf_%3b' class='' download>Télécharger</a>
\t\t\t</div>
\t\t</div>
\t</div>
    </aside>

\t\t\t            <aside class='doc relative '>
        \t<input type='checkbox' value='doc-33735' name='doc-33735' id='doc-33735' class='hide'>
\t<label for='doc-33735' class='block absolute top icon small padding-5 adapt bg-white'></label>
\t<div class='flex row adapt w100 bottom-30'  for='doc-33735'>
\t\t<div class='thumb'>
\t\t\t<figure class='relative h100'>
\t\t\t\t<div class='h100 semi relative center bg-gray alt'>
\t\t\t\t\t<i class='fill absolute top left bg-black trans'><img src='images/thumb.png' class='contain filter-white'></i>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='cat white padding-5 adapt '>decret</i></i>
\t\t\t\t\t<i class='flag absolute bottom flex flex-1 row half block-center'><i></i><i></i><i></i></i>
\t\t\t\t</div>
\t\t\t\t<div class='h100 semi flex col middle bg-gray'>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='num black alt'>2022-452</i></i>
\t\t\t\t</div>
\t\t\t</figure>
\t\t</div>
\t\t<div class='flex row bottom  bottom-15-in adapt'>
\t\t\t<div class='infos light adapt nowrap left-20-in right-20-in p'>
\t\t\t\t<span class='block semibold bottom-15 adapt'>Publié le 12.08.2022</span>
\t\t\t\t<span class='block'><b class='semibold'>268 Ko</b></span>
\t\t\t\t<span class='block upper'><b class='semibold'>27</b> Lectures</span>
\t\t\t\t<span class='block upper'><b class='semibold'>126</b> Téléchargements</span>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom right-30 adapt w100'>
\t\t\t<div class='header adapt left-20-in'>
\t\t\t\t<h3 class='h4 semibold adapt bottom-5'><a href='doc/decret-2022-452/index.html' class='doc-title ' data-keywords=\"&quot;&quot;\">Décret N° 2022-452 du 27 juil. 2022</a></h3>
\t\t\t\t<p class='black adapt bottom-15 adapt light text-justify doc-desc ' data-keywords=\"&quot;&quot;\">portant approbation de la Nomenclature d&#039;Activités et de Produits du Bénin.</p>
\t\t\t\t<div class='flex row middle bottom-15-in adapt p'>
\t\t\t\t\t<span class='mblock'>Partager sur</span>
                                        \t\t\t\t\t<a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https://sgg.gouv.bj/doc/decret-2022-452/&amp;t=D%C3%A9cret%20N%C2%B0%202022-452' class='icon min cover facebook left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://twitter.com/intent/tweet?text=D%C3%A9cret%20N%C2%B0%202022-452&amp;url=https://sgg.gouv.bj/doc/decret-2022-452/' class='icon min cover twitter left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href=\"https://www.linkedin.com/shareArticle?mini=true&amp;url=https://sgg.gouv.bj/doc/decret-2022-452/&amp;title=D%C3%A9cret%20N%C2%B0%202022-452&amp;summary=portant%20approbation%20de%20la%20Nomenclature%20d'Activit%c3%a9s%20et%20de%20Produits%20du%20B%c3%a9nin.\" class='icon min cover linkedin left-10 adapt'></a>
\t\t\t\t\t<a href='mailto:?subject=D%C3%A9cret%20N%C2%B0%202022-452&amp;body=Je vous invite à lire ou télécharger ce document :  https://sgg.gouv.bj/doc/decret-2022-452/.' class='icon min cover mail left-10 adapt'></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom'>
\t\t\t<div class='buttons flex row bottom relative letter-spacing upper bold bottom-15-in adapt gray alt p'>
                <span data-target='/doc/decret-2022-452/read' class='os-read right-30 adapt'>Lire</span>
                <a href='doc/decret-2022-452/decret-2022-452.pdf_%3b' class='' download>Télécharger</a>
\t\t\t</div>
\t\t</div>
\t</div>
    </aside>

\t\t\t            <aside class='doc relative '>
        \t<input type='checkbox' value='doc-33734' name='doc-33734' id='doc-33734' class='hide'>
\t<label for='doc-33734' class='block absolute top icon small padding-5 adapt bg-white'></label>
\t<div class='flex row adapt w100 bottom-30'  for='doc-33734'>
\t\t<div class='thumb'>
\t\t\t<figure class='relative h100'>
\t\t\t\t<div class='h100 semi relative center bg-gray alt'>
\t\t\t\t\t<i class='fill absolute top left bg-black trans'><img src='images/thumb.png' class='contain filter-white'></i>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='cat white padding-5 adapt '>decret</i></i>
\t\t\t\t\t<i class='flag absolute bottom flex flex-1 row half block-center'><i></i><i></i><i></i></i>
\t\t\t\t</div>
\t\t\t\t<div class='h100 semi flex col middle bg-gray'>
\t\t\t\t\t<i class='fill relative flex col center middle'><i class='num black alt'>2022-451</i></i>
\t\t\t\t</div>
\t\t\t</figure>
\t\t</div>
\t\t<div class='flex row bottom  bottom-15-in adapt'>
\t\t\t<div class='infos light adapt nowrap left-20-in right-20-in p'>
\t\t\t\t<span class='block semibold bottom-15 adapt'>Publié le 12.08.2022</span>
\t\t\t\t<span class='block'><b class='semibold'>913 Ko</b></span>
\t\t\t\t<span class='block upper'><b class='semibold'>43</b> Lectures</span>
\t\t\t\t<span class='block upper'><b class='semibold'>203</b> Téléchargements</span>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom right-30 adapt w100'>
\t\t\t<div class='header adapt left-20-in'>
\t\t\t\t<h3 class='h4 semibold adapt bottom-5'><a href='doc/decret-2022-451/index.html' class='doc-title ' data-keywords=\"&quot;&quot;\">Décret N° 2022-451 du 27 juil. 2022</a></h3>
\t\t\t\t<p class='black adapt bottom-15 adapt light text-justify doc-desc ' data-keywords=\"&quot;&quot;\">portant fusion par absorption du Laboratoire central de Contrôle de la Sécurité sanitaire des aliments par l&#039;Agence béninoise de Sécurité sanitaire des aliments.</p>
\t\t\t\t<div class='flex row middle bottom-15-in adapt p'>
\t\t\t\t\t<span class='mblock'>Partager sur</span>
                                        \t\t\t\t\t<a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https://sgg.gouv.bj/doc/decret-2022-451/&amp;t=D%C3%A9cret%20N%C2%B0%202022-451' class='icon min cover facebook left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href='https://twitter.com/intent/tweet?text=D%C3%A9cret%20N%C2%B0%202022-451&amp;url=https://sgg.gouv.bj/doc/decret-2022-451/' class='icon min cover twitter left-10 adapt'></a>
\t\t\t\t\t<a target='_blank' href=\"https://www.linkedin.com/shareArticle?mini=true&amp;url=https://sgg.gouv.bj/doc/decret-2022-451/&amp;title=D%C3%A9cret%20N%C2%B0%202022-451&amp;summary=portant%20fusion%20par%20absorption%20du%20Laboratoire%20central%20de%20Contr%c3%b4le%20de%20la%20S%c3%a9curit%c3%a9%20sanitaire%20des%20aliments%20par%20l'Agence%20b%c3%a9ninoise%20de%20S%c3%a9curit%c3%a9%20sanitaire%20des%20aliments.\" class='icon min cover linkedin left-10 adapt'></a>
\t\t\t\t\t<a href='mailto:?subject=D%C3%A9cret%20N%C2%B0%202022-451&amp;body=Je vous invite à lire ou télécharger ce document :  https://sgg.gouv.bj/doc/decret-2022-451/.' class='icon min cover mail left-10 adapt'></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class='flex row bottom'>
\t\t\t<div class='buttons flex row bottom relative letter-spacing upper bold bottom-15-in adapt gray alt p'>
                <span data-target='/doc/decret-2022-451/read' class='os-read right-30 adapt'>Lire</span>
                <a href='doc/decret-2022-451/decret-2022-451.pdf_%3b' class='' download>Télécharger</a>
\t\t\t</div>
\t\t</div>
\t</div>
    </aside>

\t\t\t\t\t\t\t\t\t\t<aside class='doc relative '>
\t\t\t\t\t\t\t<input type='checkbox' value='doc-33733' name='doc-33733' id='doc-33733' class='hide'>
\t\t\t\t\t<label for='doc-33733' class='block absolute top icon small padding-5 adapt bg-white'></label>
\t\t\t\t\t<div class='flex row adapt w100 bottom-30'  for='doc-33733'>
\t\t\t\t\t\t<div class='thumb'>
\t\t\t\t\t\t\t<figure class='relative h100'>
\t\t\t\t\t\t\t\t<div class='h100 semi relative center bg-gray alt'>
\t\t\t\t\t\t\t\t\t<i class='fill absolute top left bg-black trans'><img src='images/thumb.png' class='contain filter-white'></i>
\t\t\t\t\t\t\t\t\t<i class='fill relative flex col center middle'><i class='cat white padding-5 adapt '>decret</i></i>
\t\t\t\t\t\t\t\t\t<i class='flag absolute bottom flex flex-1 row half block-center'><i></i><i></i><i></i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='h100 semi flex col middle bg-gray'>
\t\t\t\t\t\t\t\t\t<i class='fill relative flex col center middle'><i class='num black alt'>2022-447</i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='flex row bottom  bottom-15-in adapt'>
\t\t\t\t\t\t\t<div class='infos light adapt nowrap left-20-in right-20-in p'>
\t\t\t\t\t\t\t\t<span class='block semibold bottom-15 adapt'>Publié le 12.08.2022</span>
\t\t\t\t\t\t\t\t<span class='block'><b class='semibold'>9 Mo</b></span>
\t\t\t\t\t\t\t\t<span class='block upper'><b class='semibold'>10</b> Lectures</span>
\t\t\t\t\t\t\t\t<span class='block upper'><b class='semibold'>106</b> Téléchargements</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='flex row bottom right-30 adapt w100'>
\t\t\t\t\t\t\t<div class='header adapt left-20-in'>
\t\t\t\t\t\t\t\t<h3 class='h4 semibold adapt bottom-5'><a href='doc/decret-2022-447/index.html' class='doc-title ' data-keywords=\"&quot;&quot;\">Décret N° 2022-447 du 20 juil. 2022</a></h3>
\t\t\t\t\t\t\t\t<p class='black adapt bottom-15 adapt light text-justify doc-desc ' data-keywords=\"&quot;&quot;\">portant modalités de mise en œuvre de l&#039;auto-assurance de l’État pour la couverture des biens culturels.</p>
\t\t\t\t\t\t\t\t<div class='flex row middle bottom-15-in adapt p'>
\t\t\t\t\t\t\t\t\t<span class='mblock'>Partager sur</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https://sgg.gouv.bj/doc/decret-2022-447/&amp;t=D%C3%A9cret%20N%C2%B0%202022-447' class='icon min cover facebook left-10 adapt'></a>
\t\t\t\t\t\t\t\t\t<a target='_blank' href='https://twitter.com/intent/tweet?text=D%C3%A9cret%20N%C2%B0%202022-447&amp;url=https://sgg.gouv.bj/doc/decret-2022-447/' class='icon min cover twitter left-10 adapt'></a>
\t\t\t\t\t\t\t\t\t<a target='_blank' href=\"https://www.linkedin.com/shareArticle?mini=true&amp;url=https://sgg.gouv.bj/doc/decret-2022-447/&amp;title=D%C3%A9cret%20N%C2%B0%202022-447&amp;summary=portant%20modalit%c3%a9s%20de%20mise%20en%20%c5%93uvre%20de%20l'auto-assurance%20de%20l%e2%80%99%c3%89tat%20pour%20la%20couverture%20des%20biens%20culturels.\" class='icon min cover linkedin left-10 adapt'></a>
\t\t\t\t\t\t\t\t\t<a href='mailto:?subject=D%C3%A9cret%20N%C2%B0%202022-447&amp;body=Je vous invite à lire ou télécharger ce document :  https://sgg.gouv.bj/doc/decret-2022-447/.' class='icon min cover mail left-10 adapt'></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='flex row bottom'>
\t\t\t\t\t\t\t<div class='buttons flex row bottom relative letter-spacing upper bold bottom-15-in adapt gray alt p'>
\t\t\t\t\t\t\t\t<span data-target='/doc/decret-2022-447/read' class='os-read right-30 adapt'>Lire</span>
\t\t\t\t\t\t\t\t<a href='doc/decret-2022-447/decret-2022-447.pdf_%3b' class='' download>Télécharger</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t\t\t<div id=\"inscription\" class='gpadding bg-success'>
\t\t\t\t<div class=\"bg-success flex row top-40-in bottom-40-in adapt \">
\t\t\t\t\t<div class=\"flex row\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<i class=\"fa fa-bell fa-3x right-20  top-5 warning\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h3 class=\"adapt upper warning\">Restez informé</h3>
\t\t\t\t\t\t\t<p class=\"h4 adapt white light\">Recevez chaque semaine en exclusivité le compte rendu du conseil des ministres ainsi que les lois promulguées, les décrets, les ordonnances prises, etc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex row middle left-40 half adapt \">
\t\t\t\t\t\t\t\t<form action=\"https://sgg.gouv.bj/inscription/\" method=\"post\" class=\"w100 radius-20 adapt \">
\t\t\t\t\t\t\t<div class=\"flex row space w100  \">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"subscribers_fname\" name=\"subscribers[fname]\" maxlength=\"255\" class=\"bg-success alt top-15-in bottom-15-in left-20-in right-20-in white noborder noradius h4 adapt half-10\" placeholder=\"Votre prénom\" title=\"Votre prénom\" />
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"subscribers_lname\" name=\"subscribers[lname]\" maxlength=\"255\" class=\"bg-success alt top-15-in bottom-15-in left-20-in right-20-in white noborder noradius h4 adapt half-10\" placeholder=\"Votre nom\" title=\"Votre nom\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex row space w100   top-10\">
\t\t\t\t\t\t\t\t<input type=\"email\" id=\"subscribers_email\" name=\"subscribers[email]\" required=\"required\" class=\"bg-success alt top-15-in bottom-15-in left-20-in right-20-in white noborder noradius h4 adapt w100\" placeholder=\"Votre adresse e-mail\" title=\"Votre adresse e-mail\" />
\t\t\t\t\t\t\t\t<button class=\"bg-warning pointer top-15-in bottom-15-in left-20-in left-20 right-20-in text-center noborder noradius adapt\" type=\"submit\" value=\"\" title=\"Soumettre l'inscription\"><i class=\"fa fa-paper-plane fa-2x\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" id=\"subscribers__token\" name=\"subscribers[_token]\" value=\"2d30.Q0veWgacgpdqKX77BgydvaDZ3Wbdx5u6rh-fAV7hle4.KXqGN3Ko7dM8TwnMcELE6ZeBhTCviv_w31WmeQSDzb4oBL8ibtTgw1IRDQ\" /></form>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div> #}
\t\t\t<footer id='footer' class='w100 bg-black alt'>
\t\t\t\t<div class='flex row space mblock mcenter gpadding htop-in hbottom-in adapt'>
\t\t\t\t\t <h1 style=\"color: white; font-size:40px; padding-top:15px\">SAGA</h1>
\t\t\t\t\t<div class='text-right'>
\t\t\t\t\t\t<ul class='list flex row middle upper bold white p adapt bottom-15-in bottom-20 mcenter ' style=\"padding-left:600px\">
\t\t\t\t\t\t\t<li class=''>
\t\t\t\t\t\t\t\t<a href={{ path('logout') }}>  <span > Déconnexion</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='left-30 adapt relative'><a href='{{path('app_documents_index')}}'>Tableau de bord</a></li>
\t\t\t\t\t\t\t{# <li class='left-30 adapt'><a href='#'>Conseil des ministres</a></li>
\t\t\t\t\t\t\t<li class='left-30 adapt'><a href='#'>Informations</a></li>
\t\t\t\t\t\t\t<li class='left-30 adapt'><a href='#'>Contact</a></li> #}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class='p adapt white light'>© DGML République du Bénin le {{ \"now\"|date('d/m/Y') }}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<span class='flag flex row w100 flex-1'><i></i><i></i><i></i></span>
\t\t\t</footer>
\t\t\t</div>
\t        <div class='popup'><span class='close filter-white'></span></div>
\t\t{% endblock %}
\t\t{% block javascripts %}
            {# encore_entry_link_tags('app') 
\t\t\t<script src=\"../kit.fontawesome.com/6451c614e6.js\" crossorigin=\"anonymous\"></script> #}
\t\t\t<script>
\t\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

\t\t\t\tga('create', 'UA-67497405-6', 'auto');
\t\t\t\tga('send', 'pageview');
\t\t\t</script>
\t\t\t<script src= \"{{'assets/Consultation/js/jquery-3.3.1.min.js'}}\"></script>
\t\t\t<script src= \"{{'assets/Consultation/js/os-script5d17.js?v=0.11'}}\"></script>
\t\t\t<script src= \"{{'assets/Consultation/js/script5d17.js?v=0.11'}}\"></script> 
        {% endblock %}
    </body>
</html>
", "base_consultation.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\base_consultation.html.twig");
    }
}
