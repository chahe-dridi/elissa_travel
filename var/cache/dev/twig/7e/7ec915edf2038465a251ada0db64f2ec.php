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

/* nav_user.html.twig */
class __TwigTemplate_ef8ea184e69418252cdbad99b765d14f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav_user.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

 <head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
 <title>\t  Elissa Travel </title> 
<meta name=\"description\" content=\" \">
 
 


";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 48
        echo "  

<meta name=\"robots\" content=\"noindex, nofollow\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark probootstrap_navbar\" id=\"probootstrap-navbar\">
<div class=\"container\">
<a class=\"navbar-brand\" href=\"\">Elissa Travel</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#probootstrap-menu\" aria-controls=\"probootstrap-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span><i class=\"ion-navicon\"></i></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"probootstrap-menu\">
<ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item active\"><a class=\"nav-link\" href=\"\">Home</a></li>



  <li class=\"nav-item\"><a class=\"nav-link\" href=\" \">Hotel </a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Travel With Us</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">organized trip</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">events</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Contact</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Profile</a></li>
 



</ul>
</div>
</div>
</nav>
<br>
<br>
<br>
";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "

<footer class=\"probootstrap_section probootstrap-border-top\">
  <div class=\"container\">
  <div class=\"row mb-5\">
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\" \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\" \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\" \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\"  \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\"  \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\" \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\" \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\" \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  </div>
  <div class=\"row pt-5\">
  <div class=\"col-md-12 text-center\">
  <p class=\"probootstrap_font-14\">&copy; 2024. All Rights Reserved. <br> Designed &amp; Developed by <a href=\"\" target=\"_blank\">TechGuardiant</a> </p>
   
  </div>
  </div>
  </div>
  </footer>
  
  ";
        // line 136
        $this->displayBlock('js', $context, $blocks);
        // line 149
        echo "  
    </body>
  
   
  
  </html>
 ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 14
        echo "<style id=\"\" media=\"all\">@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ffont/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K0nXBi8Jow.ttf"), "html", null, true);
        echo "') format('truetype');
}
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ffontrl/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K67QBi8Jow.ttf"), "html", null, true);
        echo "') format('truetype');
}
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ffont/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32KxfXBi8Jow.ttf"), "html", null, true);
        echo "') format('truetype');
}
</style>

<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/select2.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/helpers.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo " 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 136
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo " 
  <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/select2.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
  <script defer src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"), "html", null, true);
        echo "\" integrity=\"sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==\" data-cf-beacon='{\"rayId\":\"8547a98b99eb717f\",\"b\":1,\"version\":\"2024.2.0\",\"token\":\"1aea4905526a46c1a4fc9bc1d0e89a42\"}' crossorigin=\"anonymous\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav_user.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  333 => 146,  329 => 145,  325 => 144,  321 => 143,  317 => 142,  313 => 141,  309 => 140,  305 => 139,  301 => 138,  297 => 137,  285 => 136,  274 => 83,  264 => 82,  251 => 46,  247 => 45,  243 => 44,  239 => 43,  235 => 42,  231 => 41,  227 => 40,  223 => 39,  219 => 38,  215 => 37,  208 => 33,  198 => 26,  188 => 19,  181 => 14,  171 => 13,  155 => 149,  153 => 136,  100 => 85,  98 => 82,  62 => 48,  60 => 13,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

 <head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
 <title>\t  Elissa Travel </title> 
<meta name=\"description\" content=\" \">
 
 


{% block css %}
<style id=\"\" media=\"all\">@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('{{ asset('assets/ffont/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K0nXBi8Jow.ttf') }}') format('truetype');
}
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('{{ asset('assets/ffontrl/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K67QBi8Jow.ttf') }}') format('truetype');
}
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('{{ asset('assets/ffont/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32KxfXBi8Jow.ttf') }}') format('truetype');
}
</style>

<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap/bootstrap.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/ionicons/css/ionicons.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/flaticon/font/flaticon.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-datepicker.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/select2.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/helpers.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

{% endblock %}  

<meta name=\"robots\" content=\"noindex, nofollow\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark probootstrap_navbar\" id=\"probootstrap-navbar\">
<div class=\"container\">
<a class=\"navbar-brand\" href=\"\">Elissa Travel</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#probootstrap-menu\" aria-controls=\"probootstrap-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span><i class=\"ion-navicon\"></i></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"probootstrap-menu\">
<ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item active\"><a class=\"nav-link\" href=\"\">Home</a></li>



  <li class=\"nav-item\"><a class=\"nav-link\" href=\" \">Hotel </a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Travel With Us</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">organized trip</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">events</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Contact</a></li>
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Profile</a></li>
 



</ul>
</div>
</div>
</nav>
<br>
<br>
<br>
{% block body %}
 
{% endblock %}


<footer class=\"probootstrap_section probootstrap-border-top\">
  <div class=\"container\">
  <div class=\"row mb-5\">
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\" \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\" \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\" \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\"  \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\"  \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\" \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  <div class=\"col-md-3\">
  <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
  <ul class=\"list-unstyled\">
  <li><a href=\"\" target=\"_blank\">Home</a></li>
  <li><a href=\" \" target=\"_blank\">About</a></li>
  <li><a href=\" \" target=\"_blank\">Services</a></li>
  <li><a href=\" \" target=\"_blank\">Contact</a></li>
  </ul>
  </div>
  </div>
  <div class=\"row pt-5\">
  <div class=\"col-md-12 text-center\">
  <p class=\"probootstrap_font-14\">&copy; 2024. All Rights Reserved. <br> Designed &amp; Developed by <a href=\"\" target=\"_blank\">TechGuardiant</a> </p>
   
  </div>
  </div>
  </div>
  </footer>
  
  {% block js %} 
  <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/bootstrap-datepicker.js') }}\"></script>
  <script src=\"{{ asset('assets/js/jquery.waypoints.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/jquery.easing.1.3.js') }}\"></script>
  <script src=\"{{ asset('assets/js/select2.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>
  <script defer src=\"{{ asset('assets/js/v84a3a4012de94ce1a686ba8c167c359c1696973893317') }}\" integrity=\"sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==\" data-cf-beacon='{\"rayId\":\"8547a98b99eb717f\",\"b\":1,\"version\":\"2024.2.0\",\"token\":\"1aea4905526a46c1a4fc9bc1d0e89a42\"}' crossorigin=\"anonymous\"></script>

{% endblock %}
  
    </body>
  
   
  
  </html>
 ", "nav_user.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\nav_user.html.twig");
    }
}
