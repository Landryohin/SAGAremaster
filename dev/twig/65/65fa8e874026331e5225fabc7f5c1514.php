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

/* base_dashboard.html.twig */
class __TwigTemplate_64fb4e6f74032d4628159272fe497cbe extends Template
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
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_dashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "    </head>
    <body>
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 928
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 935
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 5
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

    // line 12
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

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dashboard");
        echo "
            <!-- STYLESHEET -->
            <!-- Favicon -->
            ";
        // line 32
        echo "            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <[endif]-->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 214
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 859
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 927
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "                <!-- HEADER -->
                <header>
                    <div class=\"header js-header js-dropdown\">
                        <div class=\"container\">
                            <div class=\"header__logo\">
                                <h1>
                                    <img src=\"";
        // line 48
        echo "assets/Dashboard/fonts/icons/main/Logo_Forum.svg";
        echo "\" alt=\"logo\">
                                </h1>
                                <div class=\"header__logo-btn\" data-dropdown-btn=\"logo\">
                                    Unity<i class=\"icon-Arrow_Below\"></i>
                                </div>
                                <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"logo\">
                                    <ul class=\"dropdown__catalog\">
                                        <li><a href=\"index.html\">Home Page</a></li>
                                        <li><a href=\"single-topic.html\">Single Topic Page</a></li>
                                        <li><a href=\"simple-signup.html\">Sign up Page</a></li>
                                        <li><a href=\"create-topic.html\">Create Topic Page</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class=\"header__search\">
                                <form action=\"#\">
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
                                </div>
                            </div>
                            <div class=\"header__menu\">
                                <div class=\"header__menu-btn\" data-dropdown-btn=\"menu\">
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
                                </nav>
                            </div>
                            <div class=\"header__notification\">
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
                            </div>
                            <div class=\"header__user\">
                                <div class=\"header__user-btn\" data-dropdown-btn=\"user\">
                                    <img src=\"";
        // line 181
        echo "assets/Dashboard/fonts/icons/avatars/A.svg";
        echo "\" alt=\"avatar\">
                                    azyrusmax<i class=\"icon-Arrow_Below\"></i>
                                </div>
                                <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"user\">
                                    <div>
                                        <div class=\"dropdown__icons\">
                                            <a href=\"#\"><i class=\"icon-Bookmark\"></i></a>
                                            <a href=\"#\"><i class=\"icon-Message\"></i></a>
                                            <a href=\"#\"><i class=\"icon-Preferences\"></i></a>
                                            <a href=\"#\"><i class=\"icon-Logout\"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class=\"dropdown__catalog\">
                                            <li><a href=\"#\">Dashboard</a></li>
                                            <li><a href=\"#\">Badges</a></li>
                                            <li><a href=\"#\">My Groups</a></li>
                                            <li><a href=\"#\">Notifications</a></li>
                                            <li><a href=\"#\">Topics</a></li>
                                            <li><a href=\"#\">Likes</a></li>
                                            <li><a href=\"#\">Solved</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class=\"header__offset-btn\">
                            <a href=\"create-topic.html\"><img src=\"fonts/icons/main/New_Topic.svg\" alt=\"New Topic\"></a>
                        </div>
                    </div>
                </header>

            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 214
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 215
        echo "                <!-- MAIN -->
                <main>
                    <div class=\"container\">
                        <div class=\"nav\">
                            <div class=\"nav__categories js-dropdown\">
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"categories\">All Categories</div>
                                    <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
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
                                    </nav>
                                </div>
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"tags\">Tags</div>
                                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
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
                                    </div>
                                </div>
                            </div>
                            <div class=\"nav__menu js-dropdown\">
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"menu\">Latest</div>
                                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"menu\">
                                        <ul class=\"dropdown__catalog\">
                                            <li><a href=\"#\">Latest</a></li>
                                            <li><a href=\"#\">Unread</a></li>
                                            <li><a href=\"#\">Rising</a></li>
                                            <li><a href=\"#\">Most Liked</a></li>
                                            <li><a href=\"#\">Follow Feed</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul>
                                    <li class=\"active\"><a href=\"#\">Latest</a></li>
                                    <li><a href=\"#\">Unread</a></li>
                                    <li><a href=\"#\">Rising</a></li>
                                    <li><a href=\"#\">Most Liked</a></li>
                                    <li><a href=\"#\">Follow Feed</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"posts\">
                            <div class=\"posts__head\">
                                <div class=\"posts__topic\">Topic</div>
                                <div class=\"posts__category\">Category</div>
                                <div class=\"posts__users\">Users</div>
                                <div class=\"posts__replies\">Replies</div>
                                <div class=\"posts__views\">Views</div>
                                <div class=\"posts__activity\">Activity</div>
                            </div>
                            ";
        // line 294
        $this->displayBlock('list', $context, $blocks);
        // line 855
        echo "                        </div>
                    </div>
                </main>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 294
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 295
        echo "                            <div class=\"posts__body\">
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
        // line 310
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
        // line 335
        echo "assets/Dashboard/fonts/icons/avatars/K.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 338
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
                                                    <h3>Current news and discussion</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-368f8b\"></i>Politics</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 360
        echo "assets/Dashboard/fonts/icons/avatars/A.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 363
        echo "assets/Dashboard/fonts/icons/avatars/G.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 366
        echo "assets/Dashboard/fonts/icons/avatars/P.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">31</div>
                                        <div class=\"posts__views\">14.5k</div>
                                        <div class=\"posts__activity\">13d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Get your username drawn by the other users of unity! or a drawing based on what you do</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-4f80b0\">gaming</a>
                                                    <a href=\"#\" class=\"bg-424ee8\">nature</a>
                                                    <a href=\"#\" class=\"bg-36b7d7\">entertainment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>Video</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 393
        echo "assets/Dashboard/fonts/icons/avatars/L.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 396
        echo "assets/Dashboard/fonts/icons/avatars/T.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">252</div>
                                        <div class=\"posts__views\">396</div>
                                        <div class=\"posts__activity\">13m</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Which movie have you watched most recently?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-3ebafa\"></i> Exchange</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 418
        echo "assets/Dashboard/fonts/icons/avatars/E.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 421
        echo "assets/Dashboard/fonts/icons/avatars/I.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 424
        echo "assets/Dashboard/fonts/icons/avatars/R.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">207</div>
                                        <div class=\"posts__views\">7.5k</div>
                                        <div class=\"posts__activity\">41m</div>
                                    </div>
                                </div>
                                <div class=\"posts__item posts__item--bg-gradient\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3><span>This post contails spoiler about</span> Star Wars Movie.</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-777da7\"></i> Q&amp;As</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 446
        echo "assets/Dashboard/fonts/icons/avatars/F.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">2.3k</div>
                                        <div class=\"posts__views\">2.0k</div>
                                        <div class=\"posts__activity\">1h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Take a picture of what you’re doing at this very moment</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-ec008c\">selfie</a>
                                                    <a href=\"#\" class=\"bg-7cc576\">camera</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-c6b38e\"></i> Pets</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 472
        echo "assets/Dashboard/fonts/icons/avatars/C.svg\" alt=\"avatar";
        echo "\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 475
        echo "assets/Dashboard/fonts/icons/avatars/U.svg\" alt=\"avatar";
        echo "\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 478
        echo "assets/Dashboard/fonts/icons/avatars/I.svg\" alt=\"avatar";
        echo "\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">441</div>
                                        <div class=\"posts__views\">3.1k</div>
                                        <div class=\"posts__activity\">6h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Name Generator/Pick-n-Choose Nonsense</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-3a3a17\">username</a>
                                                    <a href=\"#\" class=\"bg-6f7e9c\">funny</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-525252\"></i> Education</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 504
        echo "assets/Dashboard/fonts/icons/avatars/K.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 507
        echo "assets/Dashboard/fonts/icons/avatars/N.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 510
        echo "assets/Dashboard/fonts/icons/avatars/Q.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">1.3k</div>
                                        <div class=\"posts__views\">6.0k</div>
                                        <div class=\"posts__activity\">7h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3><i class=\"icon-Locked\"></i>I got an Amazon thingie!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-bce784\"></i> Tech</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 532
        echo "assets/Dashboard/fonts/icons/avatars/C.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 535
        echo "assets/Dashboard/fonts/icons/avatars/W.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 538
        echo "assets/Dashboard/fonts/icons/avatars/Y.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">5.7k</div>
                                        <div class=\"posts__views\">33.6k</div>
                                        <div class=\"posts__activity\">13h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Post the weirdest thing you own here!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-525252\"></i> Education</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 560
        echo "assets/Dashboard/fonts/icons/avatars/D.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 563
        echo "assets/Dashboard/fonts/icons/avatars/M.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 566
        echo "assets/Dashboard/fonts/icons/avatars/R.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">236</div>
                                        <div class=\"posts__views\">2.3k</div>
                                        <div class=\"posts__activity\">10h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Show me your awesome photography</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-f26522\">photography</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-c49bbb\"></i> Science</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users js-dropdown\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 591
        echo "assets/Dashboard/fonts/icons/avatars/E.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 594
        echo "assets/Dashboard/fonts/icons/avatars/R.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 597
        echo "assets/Dashboard/fonts/icons/avatars/T.svg";
        echo "\" alt=\"avatar\" data-dropdown-btn=\"user-t\"></a>
                                                <div class=\"posts__users-dropdown dropdown dropdown--user dropdown--open\" data-dropdown-list=\"user-t\">
                                                    <div class=\"dropdown__user\">
                                                        <a href=\"#\" class=\"dropdown__user-label bg-00bd9d\">T</a>
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
                                        </div>
                                        <div class=\"posts__replies\">3</div>
                                        <div class=\"posts__views\">519</div>
                                        <div class=\"posts__activity\">2d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>GAMERS UNITE! What games do the Unity Community play?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-5dd39e\"></i> Random</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 641
        echo "assets/Dashboard/fonts/icons/avatars/H.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 644
        echo "assets/Dashboard/fonts/icons/avatars/M.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 647
        echo "assets/Dashboard/fonts/icons/avatars/Y.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">60</div>
                                        <div class=\"posts__views\">891</div>
                                        <div class=\"posts__activity\">1h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Take a virtual tour of the world’s creepiest basement!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-83253f\"></i> Gaming</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 669
        echo "assets/Dashboard/fonts/icons/avatars/L.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 672
        echo "assets/Dashboard/fonts/icons/avatars/A.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">587</div>
                                        <div class=\"posts__views\">3.8k</div>
                                        <div class=\"posts__activity\">3d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Climbing Mount Borah in centeral Idaho</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-a3d39c\">climbing</a>
                                                    <a href=\"#\" class=\"bg-6f7e9c\">funny</a>
                                                    <a href=\"#\" class=\"bg-92278f\">adventure</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-a7cdbd\"></i> Entertainment</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 699
        echo "assets/Dashboard/fonts/icons/avatars/I.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 702
        echo "assets/Dashboard/fonts/icons/avatars/O.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 705
        echo "assets/Dashboard/fonts/icons/avatars/S.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">628</div>
                                        <div class=\"posts__views\">997</div>
                                        <div class=\"posts__activity\">1h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Post your artwork!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-c6b38e\"></i> Pets</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 727
        echo "assets/Dashboard/fonts/icons/avatars/S.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 730
        echo "assets/Dashboard/fonts/icons/avatars/G.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">147</div>
                                        <div class=\"posts__views\">397</div>
                                        <div class=\"posts__activity\">3h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Who’s playing Overwatch?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-ff755a\"></i> Arts</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 752
        echo "assets/Dashboard/fonts/icons/avatars/K.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 755
        echo "assets/Dashboard/fonts/icons/avatars/L.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 758
        echo "assets/Dashboard/fonts/icons/avatars/R.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">274</div>
                                        <div class=\"posts__views\">2.9k</div>
                                        <div class=\"posts__activity\">1d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Tell me about your recent dream</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-f9bc64\"></i> Hobbies</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 780
        echo "assets/Dashboard/fonts/icons/avatars/N.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 783
        echo "assets/Dashboard/fonts/icons/avatars/H.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">0</div>
                                        <div class=\"posts__views\">2.9k</div>
                                        <div class=\"posts__activity\">1d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>A thread in which you tell users to go to sleep</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-8781bd\">dreams</a>
                                                    <a href=\"#\" class=\"bg-f1ab32\">life</a>
                                                    <a href=\"#\" class=\"bg-3b96ca\">reason</a>
                                                    <a href=\"#\" class=\"bg-348aa7\">social</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-348aa7\"></i> Social</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 811
        echo "assets/Dashboard/fonts/icons/avatars/J.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 814
        echo "assets/Dashboard/fonts/icons/avatars/D.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 817
        echo "assets/Dashboard/fonts/icons/avatars/Q.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">129</div>
                                        <div class=\"posts__views\">752</div>
                                        <div class=\"posts__activity\">19m</div>
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
        // line 839
        echo "assets/Dashboard/fonts/icons/avatars/B.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 842
        echo "assets/Dashboard/fonts/icons/avatars/M.svg";
        echo "\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 845
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
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 859
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 860
        echo "                <!-- FOOTER -->
                <footer>
                    <div class=\"footer js-dropdown\">
                        <div class=\"container\">
                            <div class=\"footer__logo\">
                                <div>
                                    <img src=\"fonts/icons/main/Logo_Forum.svg\" alt=\"logo\">Unity
                                </div>
                            </div>
                            <div class=\"footer__nav\">
                                <div class=\"footer__tline\">
                                    <i class=\"icon-Support\"></i>
                                    <ul class=\"footer__menu\">
                                        <li><a href=\"#\">Support</a></li>
                                        <li><a href=\"#\">About</a></li>
                                        <li><a href=\"#\">Contact Us</a></li>
                                        <li><a href=\"#\">The Team</a></li>
                                    </ul>
                                    <div class=\"footer__language\">
                                        <div class=\"footer__language-btn\" data-dropdown-btn=\"language\">Americas - English<i class=\"icon-Arrow_Below\"></i></div>
                                        <div class=\"footer__language-dropdown dropdown dropdown--design-01 dropdown--reverse-y\" data-dropdown-list=\"language\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-6\">
                                                    <h3>Region</h3>
                                                    <ul class=\"dropdown__catalog\">
                                                        <li class=\"active\"><a href=\"#\"><i></i>America</a></li>
                                                        <li><a href=\"#\"><i></i>Europe</a></li>
                                                        <li><a href=\"#\"><i></i>Asia</a></li>
                                                        <li><a href=\"#\"><i></i>China</a></li>
                                                        <li><a href=\"#\"><i></i>Australia</a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <h3>Language</h3>
                                                    <ul class=\"dropdown__catalog\">
                                                        <li class=\"active\"><a href=\"#\"><i></i>English</a></li>
                                                        <li><a href=\"#\"><i></i>Espanol</a></li>
                                                        <li><a href=\"#\"><i></i>Portugues</a></li>
                                                        <li><a href=\"#\"><i></i>Chinese</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer__bline\">
                                    <ul class=\"footer__menu\">
                                        <li class=\"footer__copyright\"><span>&copy; 2017 azyrusthemes.com</span></li>
                                        <li><a href=\"#\">Teams</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                        <li><a href=\"#\">Send Feedback</a></li>
                                    </ul>
                                    <ul class=\"footer__social\">
                                        <li><a href=\"#\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-cloud\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                    <div class=\"footer__language-btn-m\" data-dropdown-btn=\"language\">Americas - English<i class=\"icon-Arrow_Below\"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 928
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 929
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dashboard");
        echo "
            <!-- JAVA SCRIPT -->
           ";
        // line 934
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1320 => 934,  1314 => 929,  1304 => 928,  1228 => 860,  1218 => 859,  1198 => 845,  1192 => 842,  1186 => 839,  1161 => 817,  1155 => 814,  1149 => 811,  1118 => 783,  1112 => 780,  1087 => 758,  1081 => 755,  1075 => 752,  1050 => 730,  1044 => 727,  1019 => 705,  1013 => 702,  1007 => 699,  977 => 672,  971 => 669,  946 => 647,  940 => 644,  934 => 641,  887 => 597,  881 => 594,  875 => 591,  847 => 566,  841 => 563,  835 => 560,  810 => 538,  804 => 535,  798 => 532,  773 => 510,  767 => 507,  761 => 504,  732 => 478,  726 => 475,  720 => 472,  691 => 446,  666 => 424,  660 => 421,  654 => 418,  629 => 396,  623 => 393,  593 => 366,  587 => 363,  581 => 360,  556 => 338,  550 => 335,  522 => 310,  505 => 295,  495 => 294,  482 => 855,  480 => 294,  399 => 215,  389 => 214,  346 => 181,  210 => 48,  202 => 42,  192 => 41,  182 => 927,  179 => 859,  176 => 214,  173 => 41,  163 => 40,  148 => 32,  141 => 14,  131 => 13,  112 => 12,  96 => 5,  86 => 4,  75 => 935,  72 => 928,  70 => 40,  66 => 38,  64 => 13,  59 => 12,  57 => 4,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
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
            {# <link rel=\"shortcut icon\" type=\"image/x-icon\"sizes=\"16x16\" href=\"{{ 'assets/Login/img/favicon.png' }}\">
            <!-- fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800\" rel=\"stylesheet\">

            <!-- icon -->
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/fonts/icons/main/mainfont/style.css' }}\">
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/fonts/icons/font-awesome/css/font-awesome.min.css' }}\">

            <!-- Vendor -->
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/vendor/bootstrap/v3/bootstrap.min.css' }}\">
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/vendor/bootstrap/v4/bootstrap-grid.css' }}\">
            
            <!-- Custom -->
            <link rel=\"stylesheet\" href=\"{{ 'assets/Dashboard/css/style.css' }}\">
             #}
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <[endif]-->
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
                                <h1>
                                    <img src=\"{{ 'assets/Dashboard/fonts/icons/main/Logo_Forum.svg' }}\" alt=\"logo\">
                                </h1>
                                <div class=\"header__logo-btn\" data-dropdown-btn=\"logo\">
                                    Unity<i class=\"icon-Arrow_Below\"></i>
                                </div>
                                <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"logo\">
                                    <ul class=\"dropdown__catalog\">
                                        <li><a href=\"index.html\">Home Page</a></li>
                                        <li><a href=\"single-topic.html\">Single Topic Page</a></li>
                                        <li><a href=\"simple-signup.html\">Sign up Page</a></li>
                                        <li><a href=\"create-topic.html\">Create Topic Page</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class=\"header__search\">
                                <form action=\"#\">
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
                                </div>
                            </div>
                            <div class=\"header__menu\">
                                <div class=\"header__menu-btn\" data-dropdown-btn=\"menu\">
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
                                </nav>
                            </div>
                            <div class=\"header__notification\">
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
                            </div>
                            <div class=\"header__user\">
                                <div class=\"header__user-btn\" data-dropdown-btn=\"user\">
                                    <img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/A.svg' }}\" alt=\"avatar\">
                                    azyrusmax<i class=\"icon-Arrow_Below\"></i>
                                </div>
                                <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"user\">
                                    <div>
                                        <div class=\"dropdown__icons\">
                                            <a href=\"#\"><i class=\"icon-Bookmark\"></i></a>
                                            <a href=\"#\"><i class=\"icon-Message\"></i></a>
                                            <a href=\"#\"><i class=\"icon-Preferences\"></i></a>
                                            <a href=\"#\"><i class=\"icon-Logout\"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class=\"dropdown__catalog\">
                                            <li><a href=\"#\">Dashboard</a></li>
                                            <li><a href=\"#\">Badges</a></li>
                                            <li><a href=\"#\">My Groups</a></li>
                                            <li><a href=\"#\">Notifications</a></li>
                                            <li><a href=\"#\">Topics</a></li>
                                            <li><a href=\"#\">Likes</a></li>
                                            <li><a href=\"#\">Solved</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class=\"header__offset-btn\">
                            <a href=\"create-topic.html\"><img src=\"fonts/icons/main/New_Topic.svg\" alt=\"New Topic\"></a>
                        </div>
                    </div>
                </header>

            {% endblock %}
            {% block main %}
                <!-- MAIN -->
                <main>
                    <div class=\"container\">
                        <div class=\"nav\">
                            <div class=\"nav__categories js-dropdown\">
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"categories\">All Categories</div>
                                    <nav class=\"dropdown dropdown--design-01\" data-dropdown-list=\"categories\">
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
                                    </nav>
                                </div>
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"tags\">Tags</div>
                                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"tags\">
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
                                    </div>
                                </div>
                            </div>
                            <div class=\"nav__menu js-dropdown\">
                                <div class=\"nav__select\">
                                    <div class=\"btn-select\" data-dropdown-btn=\"menu\">Latest</div>
                                    <div class=\"dropdown dropdown--design-01\" data-dropdown-list=\"menu\">
                                        <ul class=\"dropdown__catalog\">
                                            <li><a href=\"#\">Latest</a></li>
                                            <li><a href=\"#\">Unread</a></li>
                                            <li><a href=\"#\">Rising</a></li>
                                            <li><a href=\"#\">Most Liked</a></li>
                                            <li><a href=\"#\">Follow Feed</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul>
                                    <li class=\"active\"><a href=\"#\">Latest</a></li>
                                    <li><a href=\"#\">Unread</a></li>
                                    <li><a href=\"#\">Rising</a></li>
                                    <li><a href=\"#\">Most Liked</a></li>
                                    <li><a href=\"#\">Follow Feed</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"posts\">
                            <div class=\"posts__head\">
                                <div class=\"posts__topic\">Topic</div>
                                <div class=\"posts__category\">Category</div>
                                <div class=\"posts__users\">Users</div>
                                <div class=\"posts__replies\">Replies</div>
                                <div class=\"posts__views\">Views</div>
                                <div class=\"posts__activity\">Activity</div>
                            </div>
                            {% block list %}
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
                                                    <h3>Current news and discussion</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-368f8b\"></i>Politics</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/A.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/G.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/P.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">31</div>
                                        <div class=\"posts__views\">14.5k</div>
                                        <div class=\"posts__activity\">13d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Get your username drawn by the other users of unity! or a drawing based on what you do</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-4f80b0\">gaming</a>
                                                    <a href=\"#\" class=\"bg-424ee8\">nature</a>
                                                    <a href=\"#\" class=\"bg-36b7d7\">entertainment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-4436f8\"></i>Video</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/L.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/T.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">252</div>
                                        <div class=\"posts__views\">396</div>
                                        <div class=\"posts__activity\">13m</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Which movie have you watched most recently?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-3ebafa\"></i> Exchange</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/E.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/I.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/R.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">207</div>
                                        <div class=\"posts__views\">7.5k</div>
                                        <div class=\"posts__activity\">41m</div>
                                    </div>
                                </div>
                                <div class=\"posts__item posts__item--bg-gradient\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3><span>This post contails spoiler about</span> Star Wars Movie.</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-777da7\"></i> Q&amp;As</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/F.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">2.3k</div>
                                        <div class=\"posts__views\">2.0k</div>
                                        <div class=\"posts__activity\">1h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Take a picture of what you’re doing at this very moment</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-ec008c\">selfie</a>
                                                    <a href=\"#\" class=\"bg-7cc576\">camera</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-c6b38e\"></i> Pets</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/C.svg\" alt=\"avatar' }}\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/U.svg\" alt=\"avatar' }}\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/I.svg\" alt=\"avatar' }}\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">441</div>
                                        <div class=\"posts__views\">3.1k</div>
                                        <div class=\"posts__activity\">6h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Name Generator/Pick-n-Choose Nonsense</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-3a3a17\">username</a>
                                                    <a href=\"#\" class=\"bg-6f7e9c\">funny</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-525252\"></i> Education</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/K.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/N.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/Q.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">1.3k</div>
                                        <div class=\"posts__views\">6.0k</div>
                                        <div class=\"posts__activity\">7h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3><i class=\"icon-Locked\"></i>I got an Amazon thingie!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-bce784\"></i> Tech</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/C.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/W.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/Y.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">5.7k</div>
                                        <div class=\"posts__views\">33.6k</div>
                                        <div class=\"posts__activity\">13h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Post the weirdest thing you own here!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-525252\"></i> Education</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/D.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/M.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/R.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">236</div>
                                        <div class=\"posts__views\">2.3k</div>
                                        <div class=\"posts__activity\">10h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Show me your awesome photography</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-f26522\">photography</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-c49bbb\"></i> Science</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users js-dropdown\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/E.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/R.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/T.svg' }}\" alt=\"avatar\" data-dropdown-btn=\"user-t\"></a>
                                                <div class=\"posts__users-dropdown dropdown dropdown--user dropdown--open\" data-dropdown-list=\"user-t\">
                                                    <div class=\"dropdown__user\">
                                                        <a href=\"#\" class=\"dropdown__user-label bg-00bd9d\">T</a>
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
                                        </div>
                                        <div class=\"posts__replies\">3</div>
                                        <div class=\"posts__views\">519</div>
                                        <div class=\"posts__activity\">2d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>GAMERS UNITE! What games do the Unity Community play?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-5dd39e\"></i> Random</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/H.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/M.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/Y.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">60</div>
                                        <div class=\"posts__views\">891</div>
                                        <div class=\"posts__activity\">1h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Take a virtual tour of the world’s creepiest basement!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-83253f\"></i> Gaming</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/L.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/A.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">587</div>
                                        <div class=\"posts__views\">3.8k</div>
                                        <div class=\"posts__activity\">3d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Climbing Mount Borah in centeral Idaho</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-a3d39c\">climbing</a>
                                                    <a href=\"#\" class=\"bg-6f7e9c\">funny</a>
                                                    <a href=\"#\" class=\"bg-92278f\">adventure</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-a7cdbd\"></i> Entertainment</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/I.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/O.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/S.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">628</div>
                                        <div class=\"posts__views\">997</div>
                                        <div class=\"posts__activity\">1h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Post your artwork!</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-c6b38e\"></i> Pets</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/S.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/G.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">147</div>
                                        <div class=\"posts__views\">397</div>
                                        <div class=\"posts__activity\">3h</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Who’s playing Overwatch?</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-ff755a\"></i> Arts</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/K.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/L.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/R.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">274</div>
                                        <div class=\"posts__views\">2.9k</div>
                                        <div class=\"posts__activity\">1d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>Tell me about your recent dream</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-f9bc64\"></i> Hobbies</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/N.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/H.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">0</div>
                                        <div class=\"posts__views\">2.9k</div>
                                        <div class=\"posts__activity\">1d</div>
                                    </div>
                                </div>
                                <div class=\"posts__item bg-f2f4f6\">
                                    <div class=\"posts__section-left\">
                                        <div class=\"posts__topic\">
                                            <div class=\"posts__content\">
                                                <a href=\"#\">
                                                    <h3>A thread in which you tell users to go to sleep</h3>
                                                </a>
                                                <div class=\"posts__tags tags\">
                                                    <a href=\"#\" class=\"bg-8781bd\">dreams</a>
                                                    <a href=\"#\" class=\"bg-f1ab32\">life</a>
                                                    <a href=\"#\" class=\"bg-3b96ca\">reason</a>
                                                    <a href=\"#\" class=\"bg-348aa7\">social</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"posts__category\"><a href=\"#\" class=\"category\"><i class=\"bg-348aa7\"></i> Social</a></div>
                                    </div>
                                    <div class=\"posts__section-right\">
                                        <div class=\"posts__users\">
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/J.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/D.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                            <div>
                                                <a href=\"#\" class=\"avatar\"><img src=\"{{ 'assets/Dashboard/fonts/icons/avatars/Q.svg' }}\" alt=\"avatar\"></a>
                                            </div>
                                        </div>
                                        <div class=\"posts__replies\">129</div>
                                        <div class=\"posts__views\">752</div>
                                        <div class=\"posts__activity\">19m</div>
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
                            {% endblock %}
                        </div>
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
                                    <img src=\"fonts/icons/main/Logo_Forum.svg\" alt=\"logo\">Unity
                                </div>
                            </div>
                            <div class=\"footer__nav\">
                                <div class=\"footer__tline\">
                                    <i class=\"icon-Support\"></i>
                                    <ul class=\"footer__menu\">
                                        <li><a href=\"#\">Support</a></li>
                                        <li><a href=\"#\">About</a></li>
                                        <li><a href=\"#\">Contact Us</a></li>
                                        <li><a href=\"#\">The Team</a></li>
                                    </ul>
                                    <div class=\"footer__language\">
                                        <div class=\"footer__language-btn\" data-dropdown-btn=\"language\">Americas - English<i class=\"icon-Arrow_Below\"></i></div>
                                        <div class=\"footer__language-dropdown dropdown dropdown--design-01 dropdown--reverse-y\" data-dropdown-list=\"language\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-6\">
                                                    <h3>Region</h3>
                                                    <ul class=\"dropdown__catalog\">
                                                        <li class=\"active\"><a href=\"#\"><i></i>America</a></li>
                                                        <li><a href=\"#\"><i></i>Europe</a></li>
                                                        <li><a href=\"#\"><i></i>Asia</a></li>
                                                        <li><a href=\"#\"><i></i>China</a></li>
                                                        <li><a href=\"#\"><i></i>Australia</a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <h3>Language</h3>
                                                    <ul class=\"dropdown__catalog\">
                                                        <li class=\"active\"><a href=\"#\"><i></i>English</a></li>
                                                        <li><a href=\"#\"><i></i>Espanol</a></li>
                                                        <li><a href=\"#\"><i></i>Portugues</a></li>
                                                        <li><a href=\"#\"><i></i>Chinese</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer__bline\">
                                    <ul class=\"footer__menu\">
                                        <li class=\"footer__copyright\"><span>&copy; 2017 azyrusthemes.com</span></li>
                                        <li><a href=\"#\">Teams</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                        <li><a href=\"#\">Send Feedback</a></li>
                                    </ul>
                                    <ul class=\"footer__social\">
                                        <li><a href=\"#\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-cloud\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                    <div class=\"footer__language-btn-m\" data-dropdown-btn=\"language\">Americas - English<i class=\"icon-Arrow_Below\"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            {% endblock %}
        {% endblock %}
        {% block javascripts %}
            {{ encore_entry_script_tags('dashboard') }}
            <!-- JAVA SCRIPT -->
           {#  <script src=\"{{ 'assets/Dashboard/vendor/jquery/jquery.min.js' }}\"></script>
            <script src=\"{{ 'assets/Dashboard/vendor/velocity/velocity.min.js' }}\"></script>
            <script src=\"{{ 'assets/Dashboard/js/app.js' }}\"></script>#}
        {% endblock %}
    </body>
</html>", "base_dashboard.html.twig", "C:\\Users\\landr\\OneDrive\\Documents\\GitHub\\Archivage_DGML\\templates\\base_dashboard.html.twig");
    }
}
