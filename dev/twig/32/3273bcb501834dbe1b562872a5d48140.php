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

/* documents/index.html.twig */
class __TwigTemplate_24e3c87c4e6b0c062972322416527e8a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documents/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documents/index.html.twig", 1);
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

        echo "Liste des documents ";
        
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
        echo "<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 
    <div class=\"s002\">
      <form action = \"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_index");
        echo "\" method= \"post\">
        
        <div class=\"inner-form\">
          <div class=\"input-field first-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input name = \"key\" id=\"key\" type=\"texte\" placeholder=\"Rechercher un document\"  />
          </div>
          <div class=\"input-field second-wrap\">
            <div class=\"icon-wrap\">
              <p style=\"padding-top:-5px; z-index:1\"></p>
            </div>
           <input title=\"Date de debut\" name =\"begin\" type=\"date\" placeholder=\"Date de debut\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["begin"]) || array_key_exists("begin", $context) ? $context["begin"] : (function () { throw new RuntimeError('Variable "begin" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" />
          </div>
          <div class=\"input-field third-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input title=\"Date de fin\"  name=\"end\" id=\"return\" type=\"date\" placeholder=\"Date de fin\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" />
          </div>
           
          <div class=\"input-field fifth-wrap\">
            <button class=\"btn-search\" type=\"submit\" name = \"submit\">Filtrer</button>
          </div>
        </div>
      </form>
    </div>
";
        // line 36
        if (((isset($context["speciale"]) || array_key_exists("speciale", $context) ? $context["speciale"] : (function () { throw new RuntimeError('Variable "speciale" does not exist.', 36, $this->source); })()) || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "niveau", [], "any", false, false, false, 36) == "Admin"))) {
            // line 37
            echo "     <div >
        <a type =\"submit\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new");
            echo "\" class=\"btn btn-success\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
            </svg> &nbsp; Nouveau document
        </a>
    </div>
";
        } else {
            // line 45
            echo "     <div >
        <a type =\"submit\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new", ["mouv" => "INTERNE"]);
            echo "\" class=\"btn btn-success\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
            </svg> &nbsp; Nouveau document
        </a>
    </div>
";
        }
        // line 53
        echo "</div>

  <div class=\"posts\"> 
    ";
        // line 109
        echo " 
<div style=\"background-color : white;border-top : 0.5px solid #c4c4c4;margin-top:10px\">
   <table class=\"table table-responsive table-hover display dataTable dtr-inline collapsed\" id=\"okay\" style=\"width: 100%;\" >

      ";
        // line 114
        echo "            <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\">
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : center; width : 5%\">Source</td> 
                    <td style=\"text-align : center; width : 5%\">Réference</td> 
                    <td style=\"text-align : center; width : 10%\">Structure / Usager</td> 
                    <td style=\"text-align : center; width : 10%\">N</td> 
                    <td style=\"text-align : center; width : 32%\">Objet</td> 
                    <td style=\"text-align : center; width : 15%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 127
            echo "                <tr>
                    <td style=\"text-align : center;width : 5%\">";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "</td> 
                    <td style=\"text-align : center;width : 5%\"> ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Poste", [], "any", false, false, false, 129), "html", null, true);
            echo "</td> 
                    <td style=\"width : 5%\">
                        ";
            // line 136
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Reference", [], "any", false, false, false, 136), "html", null, true);
            echo "               
                    <td style=\"width : 10%\"> 
                        ";
            // line 138
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Structure", [], "any", false, false, false, 138)) > 15)) {
                // line 139
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Structure", [], "any", false, false, false, 139), "", 15), 0, [], "array", false, false, false, 139), "html", null, true);
                echo " ...
                        ";
            } else {
                // line 141
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Structure", [], "any", false, false, false, 141), "html", null, true);
                echo "
                        ";
            }
            // line 143
            echo "                    </td> 
                    <td style=\"width : 10%\">";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "NumeroEnregistrement", [], "any", false, false, false, 144), "html", null, true);
            echo "</td> 
                    <td style=\" width : 32%\">
                        ";
            // line 146
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 146)) > 32)) {
                // line 147
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 147), "", 100), 0, [], "array", false, false, false, 147), "html", null, true);
                echo " ...
                        ";
            } else {
                // line 149
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "Objet", [], "any", false, false, false, 149), "html", null, true);
                echo "
                        ";
            }
            // line 151
            echo "                    </td>  
                    <td style=\"text-align : left; width : 15%\">
                        <form method=\"get\" action=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_stop", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes vous sûr de vouloir  supprimé cet document?');\">

                            <a title=\"Information\" href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_show", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye\" viewBox=\"0 0 16 16\"> <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                    <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/> </svg>
                                </a>

                                ";
            // line 160
            if (((isset($context["assistant"]) || array_key_exists("assistant", $context) ? $context["assistant"] : (function () { throw new RuntimeError('Variable "assistant" does not exist.', 160, $this->source); })()) == false)) {
                // line 161
                echo "
                                    ";
                // line 162
                if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "roles", [], "any", false, false, false, 162) == ["ROLE_ADMIN"]) || ((twig_get_attribute($this->env, $this->source, $context["document"], "Poste", [], "any", false, false, false, 162) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "zone", [], "any", false, false, false, 162)) && ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "niveau", [], "any", false, false, false, 162) != "Agent") || (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "PosteOwner", [], "any", false, false, false, 162), "Agent", [], "any", false, false, false, 162) == (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "PosteOwner", [], "any", false, false, false, 162), "Fonction", [], "any", false, false, false, 162) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "zone", [], "any", false, false, false, 162))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "PosteOwner", [], "any", false, false, false, 162), "Niveau", [], "any", false, false, false, 162) == "Agent")))))) {
                    // line 163
                    echo "                                        <a title=\"Modifier\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                    echo "\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                            </svg>
                                        </a>
                                    ";
                }
                // line 170
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["document"], "Reponse", [], "any", false, false, false, 170) == null)) {
                    // line 171
                    echo "
                                        ";
                    // line 172
                    if ((twig_get_attribute($this->env, $this->source, $context["document"], "documents", [], "any", false, false, false, 172) != [])) {
                        // line 173
                        echo "                                            ";
                        if ((((twig_get_attribute($this->env, $this->source, $context["document"], "Niveau", [], "any", false, false, false, 173) != "PUBLIC") && (twig_get_attribute($this->env, $this->source, $context["document"], "Mouvement", [], "any", false, false, false, 173) != "DEPART")) && ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 173, $this->source); })()), "niveau", [], "any", false, false, false, 173) != "Agent") || (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "PosteOwner", [], "any", false, false, false, 173), "Agent", [], "any", false, false, false, 173) == (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 173, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "PosteOwner", [], "any", false, false, false, 173), "Fonction", [], "any", false, false, false, 173) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 173, $this->source); })()), "zone", [], "any", false, false, false, 173))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["document"], "PosteOwner", [], "any", false, false, false, 173), "Niveau", [], "any", false, false, false, 173) == "Agent"))))) {
                            // line 174
                            echo "                                                <a href = \"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Affectations_new", ["doc" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 174)]), "html", null, true);
                            echo "\"  type=\"button\" title=\"Affecter\" class=\"btn btn-primary btn-circle\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-in-right\" viewBox=\"0 0 16 16\">
                                                        <path fill-rule=\"evenodd\" d=\"M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z\"/> 
                                                    <path fill-rule=\"evenodd\" d=\"M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z\"/> </svg>
                                                </a>
                                            ";
                        }
                        // line 180
                        echo "
                                            ";
                        // line 181
                        if (((twig_get_attribute($this->env, $this->source, $context["document"], "Mouvement", [], "any", false, false, false, 181) != "DEPART") && (isset($context["speciale"]) || array_key_exists("speciale", $context) ? $context["speciale"] : (function () { throw new RuntimeError('Variable "speciale" does not exist.', 181, $this->source); })()))) {
                            // line 182
                            echo "                                                <a title=\"Repondre\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documents_new", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 182), "mouv" => "REPONSE"]), "html", null, true);
                            echo "\"  type=\"button\" class=\"btn btn-primary btn-circle\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-reply-all\" viewBox=\"0 0 16 16\"> 
                                                    <path d=\"M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z\"/> 
                                                    <path d=\"M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z\"/> </svg>
                                                </a>
                                            ";
                        }
                        // line 188
                        echo "                                        ";
                    }
                    // line 189
                    echo "                                    ";
                }
                // line 190
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "niveau", [], "any", false, false, false, 190) == "Admin")) {
                    // line 191
                    echo "                                        
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 192
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 192))), "html", null, true);
                    echo "\">
                                        <button  type=\"submit\" title=\"Supprimer\" class=\"btn btn-danger btn-circle\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\"> 
                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/> 
                                            </svg>    
                                        </button>
                                    
                                    ";
                }
                // line 201
                echo "                            
                            ";
            }
            // line 203
            echo "                        </form>
                    </td> 
                </tr>  
                ";
            // line 206
            $context["numero"] = ((isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 206, $this->source); })()) + 1);
            // line 207
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                
                </tbody>
        </table>
</div>


    ";
        // line 222
        echo "    ";
        // line 243
        echo "                    ";
        // line 248
        echo "
                    ";
        // line 278
        echo "
                        ";
        // line 287
        echo "
                        ";
        // line 296
        echo "                        ";
        // line 297
        echo "                    ";
        // line 305
        echo "
    
</div>
 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 311
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 312
        echo "
        <div class=\"footer\" style=\" bottom:6px;
    margin-top: 4.5%;
    width: 100%;\">
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
                                        <li><a href=\"#\">DOCUMENTHÈQUE</a></li>
                                    
                                    </ul>
                                    
                                </div>
                                <div class=\"footer__bline\">
                                  
                                    <ul class=\"footer__social\">
                                         <li class=\"footer__copyright\" style=\"margin-top: 10px; font-size:15px;font-weight:bold; color: blue;\"><span>&copy;DGML République du Bénin le ";
        // line 336
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span></li>
                                      
                                    </ul>
                                    ";
        // line 340
        echo "                                </div>
                            </div>
                        </div>
                        <span style=\"display:flex ;margin-bottom:-5px;top:0;\">
                        <i style=\"width: 100%; height:8px;  padding: 0px; background-color:RGB(16,135,87);\"> </i>
                        <i style=\"width: 100%  ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
                    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 352
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 353
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>    
        \$(document).ready(function() {
        \$('.js-example-basic-single').select2();
        //\$('.datePicker').datepicker(); 
        
    });  
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
        return "documents/index.html.twig";
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
        return array (  465 => 353,  455 => 352,  435 => 340,  429 => 336,  403 => 312,  393 => 311,  379 => 305,  377 => 297,  375 => 296,  372 => 287,  369 => 278,  366 => 248,  364 => 243,  362 => 222,  354 => 208,  348 => 207,  346 => 206,  341 => 203,  337 => 201,  325 => 192,  322 => 191,  319 => 190,  316 => 189,  313 => 188,  303 => 182,  301 => 181,  298 => 180,  288 => 174,  285 => 173,  283 => 172,  280 => 171,  277 => 170,  266 => 163,  264 => 162,  261 => 161,  259 => 160,  251 => 155,  246 => 153,  242 => 151,  236 => 149,  230 => 147,  228 => 146,  223 => 144,  220 => 143,  214 => 141,  208 => 139,  206 => 138,  200 => 136,  195 => 129,  191 => 128,  188 => 127,  184 => 126,  170 => 114,  164 => 109,  159 => 53,  149 => 46,  146 => 45,  136 => 38,  133 => 37,  131 => 36,  119 => 27,  110 => 21,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des documents {% endblock %}

{% block list %}
<div class=\"\" style=\" display: flex; flex-wrap: wrap;justify-content: space-between;margin-top:20px\"> 
    <div class=\"s002\">
      <form action = \"{{path('app_documents_index' )}}\" method= \"post\">
        
        <div class=\"inner-form\">
          <div class=\"input-field first-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input name = \"key\" id=\"key\" type=\"texte\" placeholder=\"Rechercher un document\"  />
          </div>
          <div class=\"input-field second-wrap\">
            <div class=\"icon-wrap\">
              <p style=\"padding-top:-5px; z-index:1\"></p>
            </div>
           <input title=\"Date de debut\" name =\"begin\" type=\"date\" placeholder=\"Date de debut\" value=\"{{ begin}}\" />
          </div>
          <div class=\"input-field third-wrap\">
            <div class=\"icon-wrap\">
               
            </div>
            <input title=\"Date de fin\"  name=\"end\" id=\"return\" type=\"date\" placeholder=\"Date de fin\" value=\"{{ end}}\" />
          </div>
           
          <div class=\"input-field fifth-wrap\">
            <button class=\"btn-search\" type=\"submit\" name = \"submit\">Filtrer</button>
          </div>
        </div>
      </form>
    </div>
{% if speciale or user.niveau == \"Admin\" %}
     <div >
        <a type =\"submit\" href=\"{{path('app_documents_new')}}\" class=\"btn btn-success\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
            </svg> &nbsp; Nouveau document
        </a>
    </div>
{% else %}
     <div >
        <a type =\"submit\" href=\"{{path('app_documents_new', {'mouv': \"INTERNE\"})}}\" class=\"btn btn-success\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
            <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
            <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
            </svg> &nbsp; Nouveau document
        </a>
    </div>
{% endif %}
</div>

  <div class=\"posts\"> 
    {#{% if pageCount and pageCount != 1 %}
        <div class=\"pagination\">
            <input type = \"hidden\" id ='count' name ='count' value = \" {{ pageCount }}\">
            <input type = \"hidden\" id ='current' name ='current' value = \"{{ currentPage }}\">
            <ul>
                {% set beforePage  = currentPage - 1 %}
                
                {% set afterPage  = currentPage + 1 %}

                {% set active  = \"\" %}

                {% if currentPage >1 %}
                    <li class=\"btn prev\"><a href=\"{{ path('app_documents_index', { 'page': currentPage - 1 }) }}\"><span><i class=\"fas fa-angle-left\"></i> Prev</span></a></li>
                {% endif %}
                
                {% if currentPage >2 %} 
                    <li class=\"first numb\" ><a href=\"{{ path('app_documents_index') }}\"><span>1</span></a></li>
                    {% if currentPage >3 %}
                    <li class=\"dots\"><span>...</span></li>
                    {% endif %}
                {% endif %}
                
                {% if currentPage  == pageCount %}
                    {% set beforePage  = beforePage - 2 %}
                {% elseif currentPage  == pageCount - 1 %}
                    {% set beforePage  = beforePage - 1 %}
                {% endif %}  
                {% if currentPage  == 1 %}
                    {% set afterPage  = afterPage + 2 %}
                {% elseif currentPage  == 2 %}
                    {% set afterPage  = afterPage + 1 %}
                {% endif %}
                {% for plength in range(beforePage,afterPage) %}
                    {% if plength  < pageCount and plength >0 %}
                        {% if currentPage  == plength %}
                            {% set active  = \"active\" %}                        
                        {% endif %} 
                        <li class=\"numb {{ active }}\"><a href=\"{{ path('app_documents_index', { 'page': plength }) }}\"><span>{{plength}}</span></a></li>
                    {% endif %} 
                {% endfor %} 
                {% if currentPage  < pageCount - 1 %}
                    {% if currentPage  < pageCount - 2 %}
                    <li class=\"dots\"><span>...</span></li>
                    {% endif %} 
                    <li class=\"first numb\" ><a href=\"{{ path('app_documents_index', { 'page': pageCount }) }}\"><span>{{pageCount}}</span></li>
                {% endif %}

                {% if currentPage < pageCount  %}
                    <li  class=\"btn next\"><a href=\"{{ path('app_documents_index', { 'page': currentPage + 1 }) }}\"><span>Next <i class=\"fas fa-angle-right\"></i></span></a></li>
                {% endif %}
            </ul>
        </div>
    {% endif %}#}
 
<div style=\"background-color : white;border-top : 0.5px solid #c4c4c4;margin-top:10px\">
   <table class=\"table table-responsive table-hover display dataTable dtr-inline collapsed\" id=\"okay\" style=\"width: 100%;\" >

      {#<table class=\"table table-responsive table-hover display\" id=\"okay\" style=\"width: 100%;\" > #}
            <thead style=\"background-color : #e9ecee;\">
                <tr style=\"font-weight : bold; text-transform : uppercase\">
                    <td style=\"text-align : center; width : 5%\">N°</td> 
                    <td style=\"text-align : center; width : 5%\">Source</td> 
                    <td style=\"text-align : center; width : 5%\">Réference</td> 
                    <td style=\"text-align : center; width : 10%\">Structure / Usager</td> 
                    <td style=\"text-align : center; width : 10%\">N</td> 
                    <td style=\"text-align : center; width : 32%\">Objet</td> 
                    <td style=\"text-align : center; width : 15%\">Actions</td> 
                </tr> 
            </thead>
            <tbody> 
            {% for document in documents %}
                <tr>
                    <td style=\"text-align : center;width : 5%\">{{numero }}</td> 
                    <td style=\"text-align : center;width : 5%\"> {{ document.Poste}}</td> 
                    <td style=\"width : 5%\">
                        {# {% if  document.Reference|length > 15 %}
                            {{  document.Reference|split('', 15)[0] }} ...
                        {% else %}
                            {{  document.Reference }}
                        {% endif %}   #}
                        {{  document.Reference }}               
                    <td style=\"width : 10%\"> 
                        {% if  document.Structure|length > 15 %}
                            {{  document.Structure|split('', 15)[0] }} ...
                        {% else %}
                            {{  document.Structure }}
                        {% endif %}
                    </td> 
                    <td style=\"width : 10%\">{{ document.NumeroEnregistrement}}</td> 
                    <td style=\" width : 32%\">
                        {% if document.Objet|length > 32 %}
                            {{ document.Objet|split('', 100)[0] }} ...
                        {% else %}
                            {{ document.Objet }}
                        {% endif %}
                    </td>  
                    <td style=\"text-align : left; width : 15%\">
                        <form method=\"get\" action=\"{{ path('app_documents_stop', {'id': document.id}) }}\" onsubmit=\"return confirm('Etes vous sûr de vouloir  supprimé cet document?');\">

                            <a title=\"Information\" href=\"{{ path('app_documents_show', {'id': document.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-eye\" viewBox=\"0 0 16 16\"> <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                                    <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/> </svg>
                                </a>

                                {% if  assistant == false %}

                                    {% if user.roles == [\"ROLE_ADMIN\"] or (document.Poste == user.zone and (user.niveau != 'Agent' or (document.PosteOwner.Agent == user and document.PosteOwner.Fonction == user.zone and document.PosteOwner.Niveau == 'Agent'))) %}
                                        <a title=\"Modifier\" href=\"{{ path('app_documents_edit', {'id': document.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                                            </svg>
                                        </a>
                                    {% endif %}
                                    {% if document.Reponse == null %}

                                        {% if document.documents != [] %}
                                            {% if document.Niveau != \"PUBLIC\" and document.Mouvement != \"DEPART\" and (user.niveau != 'Agent' or (document.PosteOwner.Agent == user and document.PosteOwner.Fonction == user.zone and document.PosteOwner.Niveau == 'Agent'))%}
                                                <a href = \"{{path('app_Affectations_new', {'doc': document.id })}}\"  type=\"button\" title=\"Affecter\" class=\"btn btn-primary btn-circle\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-in-right\" viewBox=\"0 0 16 16\">
                                                        <path fill-rule=\"evenodd\" d=\"M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z\"/> 
                                                    <path fill-rule=\"evenodd\" d=\"M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z\"/> </svg>
                                                </a>
                                            {% endif %}

                                            {% if document.Mouvement != \"DEPART\" and speciale %}
                                                <a title=\"Repondre\" href=\"{{ path('app_documents_new', {'id': document.id, 'mouv': 'REPONSE'}) }}\"  type=\"button\" class=\"btn btn-primary btn-circle\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-reply-all\" viewBox=\"0 0 16 16\"> 
                                                    <path d=\"M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z\"/> 
                                                    <path d=\"M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z\"/> </svg>
                                                </a>
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                    {% if user.niveau == \"Admin\" %}
                                        
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ document.id) }}\">
                                        <button  type=\"submit\" title=\"Supprimer\" class=\"btn btn-danger btn-circle\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\"> 
                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/> 
                                            </svg>    
                                        </button>
                                    
                                    {% endif %}
                            
                            {% endif %}
                        </form>
                    </td> 
                </tr>  
                {% set numero = numero + 1 %}
            {% endfor %}
                
                </tbody>
        </table>
</div>


    {# <div class=\"posts__head\">
        <div class=\"posts__category\"><h6 style=\"margin-left: 10%;\" >Source<h6></div> 
        <div class=\"posts__topic\" style=\"min-width: 32%; width: 29%;\"><h6 style=\"margin-left:-16%;\">Reference <h6></div> 
        <div class=\"posts__category\"><h6 style=\"margin-left: -35%;\" >Structure<h6></div> 
        <div class=\"posts__category\"><h6 style=\"margin-left: -50%;\" >Numero<h6></div>  
        <div class=\"posts__category\"><h6 style=\"margin-left: -80%;\" >Objet<h6></div> 
        <div class=\"posts__replies\" ><h6 style=\"margin-left: -150%;\"  >Actions<h6></div>
    </div> #}
    {# <div class=\"posts__body\">
       {% for document in documents %}

        <div class=\"posts__item\">
            <div class=\"posts__section-left\">
                <div class=\"posts__category\"><span href=\"#\" style=\" margin-left: 16%;\" class=\"category\" > {{ document.Poste}}</span></div>
                {% if document.Reference|length > 20 %}
                    <div class=\"posts__category\" style=\"min-width: 52.37%; width: 79.37%; margin-left: -6%;\"> {{ document.Reference|split('', 20)[0] }} ...</div> 
                {% else %}
                    <div class=\"posts__category\" style=\"min-width: 52.37%; width: 79.37%; margin-left: -6%;\"><a href=\"#\" class=\"category\" > {{ document.Reference}}</a></div>
                {% endif %}
                <div class=\"posts__category\"><a href=\"#\" class=\"category\" > {{ document.Structure}}</a></div>
                <div class=\"posts__category\"><a href=\"#\" class=\"category\"  style=\"margin-left: 12%;\" > {{ document.NumeroEnregistrement}}</a></div>
                {% if document.Objet|length > 25 %}
                    <div class=\"posts__category\" style=\"min-width: 30.37%; width: 79.37%; margin-left: -6%;\"> {{ document.Objet|split('', 25)[0] }} ...</div> 
                {% else %}
                    <div class=\"posts__category\" style=\"min-width: 30.37%; width: 79.37%; margin-left: -6%;\"> {{ document.Objet }}</div> 
                {% endif %}
            </div>
            
                <div style=\"margin-left: 22%;\" class=\"posts__users\"> #}
                    {#<div class='flex row bottom'>
                        <div class='buttons flex row bottom relative letter-s\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpacing upper bold bottom-15-in adapt gray alt p'>
                            <span data-target='{{document.DocumentAt ? document.DocumentAt|date('Y/m/d') : ''}}/{{document.Chemin}}' class='os-read right-30 adapt' read>Lire</span>
                        </div>
                    </div>#}

                    {# <a title=\"Information\" href=\"{{ path('app_documents_show', {'id': document.id}) }}\"  type=\"button\" class=\"btn btn-success btn-circle\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"currentColor\" class=\"bi bi-info\" viewBox=\"0 0 16 16\"> 
                        <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/> 
                        </svg>
                    </a>

                    {% if  assistant == false %}
                            <a title=\"Repondre\" href=\"{{ path('app_documents_new', {'id': document.id, 'mouv': 'REPONSE'}) }}\"  type=\"button\" class=\"btn btn-primary btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-reply-all\" viewBox=\"0 0 16 16\"> 
                                <path d=\"M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z\"/> 
                                <path d=\"M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z\"/> </svg>
                            </a>
                        
                        {% if user.roles == [\"ROLE_ADMIN\"] or document.Poste == user.zone %}
                        <a title=\"Modifier\" href=\"{{ path('app_documents_edit', {'id': document.id}) }}\"type=\"button\" class=\"btn btn-warning btn-circle\">    
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-square-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                            </svg>
                        </a>
                        {% endif %}

                        {% if document.Niveau != 'PUBLIC' or document.Mouvement != 'DEPART' %}
                            <a href = \"{{path('app_Affectations_new', {'doc': document.id })}}\"  type=\"button\" title=\"Affecter\" class=\"btn btn-primary btn-circle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-in-right\" viewBox=\"0 0 16 16\">
                                    <path fill-rule=\"evenodd\" d=\"M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z\"/> 
                                <path fill-rule=\"evenodd\" d=\"M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z\"/> </svg>
                            </a>
                        {% endif %} #}

                        {# {% if user.roles == [\"ROLE_ADMIN\"] %}
                            
                        <a href = \"{{path('app_documents_delete', {'id': document.id })}}\"  type=\"button\" title=\"Supprimer\" class=\"btn btn-danger btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\"> 
                            <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                            <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/> </svg>    
                        </a>
                        {% endif %} #}

                        {# <form action = \"{{path('app_Affectations_new' )}}\" method= \"post\">                    
                            <button name ='submitdoc' type=\"submit\" title=\"Affecter\" class=\"btn btn-primary btn-circle\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-in-right\" viewBox=\"0 0 16 16\">
                                <path fill-rule=\"evenodd\" d=\"M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z\"/> 
                            <path fill-rule=\"evenodd\" d=\"M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z\"/> </svg>
                            </button>
                            <input type= 'hidden' value=\"{{document.id}}\" name =\"doc\"  >
                        </form> #}
                        {# {{ include('documents/_delete_form.html.twig') }} #}
                    {# {% endif %}
                </div>
     
        </div>
        {% else %}
             <p style=\"text-align:center;padding-top: 70px; \">Aucun enregistrement trouvé</p>
        {% endfor %}
    </div> #}

    
</div>
 
{% endblock %}

{% block footer %}

        <div class=\"footer\" style=\" bottom:6px;
    margin-top: 4.5%;
    width: 100%;\">
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
                                        <li><a href=\"#\">DOCUMENTHÈQUE</a></li>
                                    
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
                        <span style=\"display:flex ;margin-bottom:-5px;top:0;\">
                        <i style=\"width: 100%; height:8px;  padding: 0px; background-color:RGB(16,135,87);\"> </i>
                        <i style=\"width: 100%  ;  height:8px; background-color:#FFD400;\"> </i>
                        <i style=\"width: 100% ; height:8px; background-color:rgb(235, 0, 0);\"> </i>
                    
                    </span>
                    </div>
{% endblock %}

 {% block javascripts  %}
 {{ parent() }}

    <script>    
        \$(document).ready(function() {
        \$('.js-example-basic-single').select2();
        //\$('.datePicker').datepicker(); 
        
    });  
    </script>
{% endblock %}
", "documents/index.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\documents\\index.html.twig");
    }
}
