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

/* base_login2.html.twig */
class __TwigTemplate_8f373dbb164490db9cd50f4908a2a22c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'subtitle' => [$this, 'block_subtitle'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_login2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_login2.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>SAGA Login</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
 
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo "assets/login/css/style.css";
        echo "\">

\t</head>
\t<body>
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 text-center \"> 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-12 col-lg-10\">
\t\t\t\t\t<div class=\"wrap d-md-flex\">
\t\t\t\t\t\t<div class=\"text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last\">
\t\t\t\t\t\t\t<div class=\"text w-100\">
\t\t\t\t\t\t\t\t<h2>Bienvenue sur SAGA DGML</h2>
\t\t\t\t\t\t\t\t <p>Système Automatisé de Gestion des Archives (SAGA) est une plateforme informatique de gestion numérique des archives en entreprise.</p>
\t\t\t\t\t\t\t\t <p style=\"font-size:13px ;\"> Pour une raison de mot de passe oublié ou un problème de connexion, veuillez vous rapprocher du service informatique.</p>
\t\t\t\t\t\t 
\t\t\t\t\t\t\t</div>
\t\t\t      </div>
\t\t\t\t\t\t<div class=\"login-wrap p-4 p-lg-5\">

\t\t";
        // line 31
        $this->displayBlock('subtitle', $context, $blocks);
        // line 38
        echo "\t
\t\t\t      \t
\t\t";
        // line 40
        $this->displayBlock('form', $context, $blocks);
        // line 70
        echo "
\t\t      </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 79
        echo "    ";
        // line 80
        echo "    ";
        // line 81
        echo "
\t</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        // line 32
        echo "\t\t\t<div class=\"d-flex\">
\t\t\t      \t\t<div class=\"w-100\">
\t\t\t      \t\t\t<h4 class=\"mb-4\">Connection à SAGA DGML</h4>
\t\t\t      \t\t</div>
\t\t\t\t\t\t\t\t 
\t\t\t      \t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 41
        echo "\t\t\t\t\t\t\t<form action=\"#\" class=\"signin-form\">
\t\t\t      \t\t<div class=\"form-group mb-3\">
\t\t\t      \t\t\t<label class=\"label\" for=\"name\">Username</label>
\t\t\t      \t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" required>
\t\t\t      \t\t</div>
\t\t            <div class=\"form-group mb-3\">
\t\t            \t<label class=\"label\" for=\"password\">Password</label>
\t\t              <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
\t\t            </div>
\t\t            <div class=\"form-group\">
\t\t            \t<button type=\"submit\" class=\"form-control submit px-3\">Sign In</button>
\t\t            </div>
\t\t            <div class=\"form-group d-md-flex\">
\t\t            \t<div class=\"w-50 text-left\">
\t\t\t            \t<label class=\"checkbox-wrap checkbox-primary mb-0\">Remember Me
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t  <span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"w-50 text-md-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Forgot Password</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t            </div>
\t\t          </form>


\t\t        </div>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_login2.html.twig";
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
        return array (  151 => 41,  141 => 40,  125 => 32,  115 => 31,  101 => 81,  99 => 80,  97 => 79,  88 => 70,  86 => 40,  82 => 38,  80 => 31,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>SAGA Login</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
 
\t<link rel=\"stylesheet\" href=\"{{ 'assets/login/css/style.css' }}\">

\t</head>
\t<body>
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 text-center \"> 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-12 col-lg-10\">
\t\t\t\t\t<div class=\"wrap d-md-flex\">
\t\t\t\t\t\t<div class=\"text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last\">
\t\t\t\t\t\t\t<div class=\"text w-100\">
\t\t\t\t\t\t\t\t<h2>Bienvenue sur SAGA DGML</h2>
\t\t\t\t\t\t\t\t <p>Système Automatisé de Gestion des Archives (SAGA) est une plateforme informatique de gestion numérique des archives en entreprise.</p>
\t\t\t\t\t\t\t\t <p style=\"font-size:13px ;\"> Pour une raison de mot de passe oublié ou un problème de connexion, veuillez vous rapprocher du service informatique.</p>
\t\t\t\t\t\t 
\t\t\t\t\t\t\t</div>
\t\t\t      </div>
\t\t\t\t\t\t<div class=\"login-wrap p-4 p-lg-5\">

\t\t{% block subtitle %}
\t\t\t<div class=\"d-flex\">
\t\t\t      \t\t<div class=\"w-100\">
\t\t\t      \t\t\t<h4 class=\"mb-4\">Connection à SAGA DGML</h4>
\t\t\t      \t\t</div>
\t\t\t\t\t\t\t\t 
\t\t\t      \t</div>
\t\t{% endblock %}\t
\t\t\t      \t
\t\t{% block form %}
\t\t\t\t\t\t\t<form action=\"#\" class=\"signin-form\">
\t\t\t      \t\t<div class=\"form-group mb-3\">
\t\t\t      \t\t\t<label class=\"label\" for=\"name\">Username</label>
\t\t\t      \t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" required>
\t\t\t      \t\t</div>
\t\t            <div class=\"form-group mb-3\">
\t\t            \t<label class=\"label\" for=\"password\">Password</label>
\t\t              <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
\t\t            </div>
\t\t            <div class=\"form-group\">
\t\t            \t<button type=\"submit\" class=\"form-control submit px-3\">Sign In</button>
\t\t            </div>
\t\t            <div class=\"form-group d-md-flex\">
\t\t            \t<div class=\"w-50 text-left\">
\t\t\t            \t<label class=\"checkbox-wrap checkbox-primary mb-0\">Remember Me
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" checked>
\t\t\t\t\t\t\t\t\t  <span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"w-50 text-md-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Forgot Password</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t            </div>
\t\t          </form>


\t\t        </div>

\t\t{% endblock %}

\t\t      </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t{#<script src=\"{{ 'assets/Login2/js/jquery-3.3.1.min.js' }}\" ></script>
     <script src=\"{{ 'assets/Login2/js/js/popper.min.js' }}\" ></script> #}
    {# <script src=\"{{ 'assets/Login2/js/js/bootstrap.min.js' }}\" ></script> #}
    {# <script src=\"{{ 'assets/Login2/js/js/main.js' }}\" ></script> #}

\t</body>
</html>

", "base_login2.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\base_login2.html.twig");
    }
}
