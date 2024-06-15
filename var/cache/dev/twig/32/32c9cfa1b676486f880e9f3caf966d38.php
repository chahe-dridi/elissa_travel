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
class __TwigTemplate_b1f71847c1b8d3e1cb23cde8d8ecc7d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

 <head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
 <title>\t  Elissa Travel </title> 
<meta name=\"description\" content=\" \">
 
";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 44
        echo " 

<meta name=\"robots\" content=\"noindex, nofollow\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark probootstrap_navbar\" id=\"probootstrap-navbar\">
<div class=\"container\">
<a class=\"navbar-brand\" href=\" \">Elissa Travel</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#probootstrap-menu\" aria-controls=\"probootstrap-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span><i class=\"ion-navicon\"></i></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"probootstrap-menu\">
<ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item active\"><a class=\"nav-link\" href=\" \">Home</a></li>



    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Hotel</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvol_index");
        echo "\">Travel With Us</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">organized trip</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">events</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Contact</a></li>

 ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
            // line 68
            echo "\t\t\t\t ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 69
                echo "\t\t\t\t<li class=\"nav-item\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"nav-link\">Admin</a> </li>
\t\t\t\t ";
            }
            // line 71
            echo "            <li class=\"nav-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\" class=\"nav-link\">Logout</a> </li>
\t\t\t";
        } else {
            // line 73
            echo "\t\t\t<li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link\">Login</a> </p>
\t\t\t<li class=\"nav-item\"><a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"nav-link\">Register</a> </li>
            ";
        }
        // line 76
        echo "
</ul>
</div>
</div>
</nav>


\t";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 584
        echo " 
<footer class=\"probootstrap_section probootstrap-border-top\">
<div class=\"container\">
<div class=\"row mb-5\">
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
<li><a href=\" \" target=\"_blank\">About</a></li>
<li><a href=\" \" target=\"_blank\">Services</a></li>
<li><a href=\" \" target=\"_blank\">Contact</a></li>
</ul>
</div>
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
<li><a href=\" \" target=\"_blank\">About</a></li>
<li><a href=\" \" target=\"_blank\">Services</a></li>
<li><a href=\"  \" target=\"_blank\">Contact</a></li>
</ul>
</div>
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
<li><a href=\"  \" target=\"_blank\">About</a></li>
<li><a href=\" \" target=\"_blank\">Services</a></li>
<li><a href=\" \" target=\"_blank\">Contact</a></li>
</ul>
</div>
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
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
        // line 634
        $this->displayBlock('js', $context, $blocks);
        // line 647
        echo "
  </body>

 

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 11
        echo "<style id=\"\" media=\"all\">@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ffont/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K0nXBi8Jow.ttf"), "html", null, true);
        echo "') format('truetype');
}
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ffontrl/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K67QBi8Jow.ttf"), "html", null, true);
        echo "') format('truetype');
}
@font-face {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ffont/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32KxfXBi8Jow.ttf"), "html", null, true);
        echo "') format('truetype');
}
</style>

    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/select2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/helpers.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "  <section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
  <div class=\"container\">
  <div class=\"row align-items-center\">
  <div class=\"col-md\">
  <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Elissa Travel</h2>
  <p class=\"lead mb-5 probootstrap-animate\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!    </a></p>
  <p class=\"probootstrap-animate\">
  <a href=\"\" role=\"button\" class=\"btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3\">Explore</a>
  </p>
  </div>
  <div class=\"col-md probootstrap-animate\">
  <form action=\"#\" class=\"probootstrap-form\">
  <div class=\"form-group\">
  <div class=\"row mb-3\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">From</label>
  <label for=\"id_label_single\" style=\"width: 100%;\">
  <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single\" style=\"width: 100%;\">
  <option value=\"Australia\">Australia</option>
  <option value=\"Japan\">Japan</option>
  <option value=\"United States\">United States</option>
  <option value=\"Brazil\">Brazil</option>
  <option value=\"China\">China</option>
  <option value=\"Israel\">Israel</option>
  <option value=\"Philippines\">Philippines</option>
  <option value=\"Malaysia\">Malaysia</option>
  <option value=\"Canada\">Canada</option>
  <option value=\"Chile\">Chile</option>
  <option value=\"Chile\">Zimbabwe</option>
  </select>
  </label>
  </div>
  </div>
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single2\">To</label>
  <div class=\"probootstrap_select-wrap\">
  <label for=\"id_label_single2\" style=\"width: 100%;\">
  <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single2\" style=\"width: 100%;\">
  <option value=\"Australia\">Australia</option>
  <option value=\"Japan\">Japan</option>
  <option value=\"United States\">United States</option>
  <option value=\"Brazil\">Brazil</option>
  <option value=\"China\">China</option>
  <option value=\"Israel\">Israel</option>
  <option value=\"Philippines\">Philippines</option>
  <option value=\"Malaysia\">Malaysia</option>
  <option value=\"Canada\">Canada</option>
  <option value=\"Chile\">Chile</option>
  <option value=\"Chile\">Zimbabwe</option>
  </select>
  </label>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"probootstrap-date-departure\">Departure</label>
  <div class=\"probootstrap-date-wrap\">
  <span class=\"icon ion-calendar\"></span>
  <input type=\"text\" id=\"probootstrap-date-departure\" class=\"form-control\" placeholder>
  </div>
  </div>
  </div>
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"probootstrap-date-arrival\">Arrival</label>
  <div class=\"probootstrap-date-wrap\">
  <span class=\"icon ion-calendar\"></span>
  <input type=\"text\" id=\"probootstrap-date-arrival\" class=\"form-control\" placeholder>
  </div>
  </div>
  </div>
  </div>
  
  <div class=\"row\">
  <div class=\"col-md\">
  <label for=\"round\" class=\"mr-5\"><input type=\"radio\" id=\"round\" name=\"direction\"> Round</label>
  <label for=\"oneway\"><input type=\"radio\" id=\"oneway\" name=\"direction\"> Oneway</label>
  </div>
  <div class=\"col-md\">
  <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary btn-block\">
  </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </section>
<section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
<div class=\"container\">
<div class=\"row justify-content-center mb-5\">
<div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Why we Love Places</h2>
<blockquote class>
<p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
<p class=\"probootstrap-author\">
<a href=\" \" target=\"_blank\">
<img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/person_1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
<span class=\"probootstrap-name\">Chaher Dridi</span>
<span class=\"probootstrap-title\">Chief Executive Officer</span>
</a>
</p>
</blockquote>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section\" id=\"section-city-guides\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Top Places Around The World</h2>
</div>
</div>
<div class=\"row\">
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
<div class=\"probootstrap-text\">
<h3>Buena</h3>
</div>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
<h3>Road</h3>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
<h3>Australia</h3>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_4.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
<h3>Japan</h3>
</a>
</div>
</div>
</div>
</section>
<section class=\"probootstrap_section\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Our Services</h2>
</div>
</div>
</div>
</section>
<section class=\"probootstrap-section-half d-md-flex\" id=\"section-about\">
<div class=\"probootstrap-image probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url('";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_2.jpg"), "html", null, true);
        echo "')\"></div>
<div class=\"probootstrap-text\">
<div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInRight\">
<h2 class=\"heading mb-4\">Customer Service</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
<p><a href=\"#\" class=\"btn btn-primary\">Read More</a></p>
</div>
</div>
</section>
<section class=\"probootstrap-section-half d-md-flex\">
<div class=\"probootstrap-image order-2 probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url('";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_3.jpg"), "html", null, true);
        echo "')\"></div>
<div class=\"probootstrap-text order-1\">
<div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInLeft\">
<h2 class=\"heading mb-4\">Payment Options</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
<p><a href=\"#\" class=\"btn btn-primary\">Learn More</a></p>
</div>
</div>
</section>

<section class=\"probootstrap_section\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
</div>
</div>
<div class=\"row probootstrap-animate\">
<div class=\"col-md-12\">
<div class=\"owl-carousel js-owl-carousel\">
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-teatro-de-la-caridad\"></span>
<em>Teatro de la Caridad</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-royal-museum-of-the-armed-forces\"></span>
<em>Royal Museum of the Armed Forces</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-parthenon\"></span>
<em>Parthenon</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-marina-bay-sands\"></span>
<em>Marina Bay Sands</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-samarra-minaret\"></span>
<em>Samarra Minaret</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-chiang-kai-shek-memorial\"></span>
<em>Chiang Kai Shek Memorial</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-heuvelse-kerk-tilburg\"></span>
<em>Heuvelse Kerk Tilburg</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-cathedral-of-cordoba\"></span>
<em>Cathedral of Cordoba</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-london-bridge\"></span>
<em>London Bridge</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-taj-mahal\"></span>
<em>Taj Mahal</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-leaning-tower-of-pisa\"></span>
<em>Leaning Tower of Pisa</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-burj-al-arab\"></span>
<em>Burj al Arab</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-gate-of-india\"></span>
<em>Gate of India</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-osaka-castle\"></span>
<em>Osaka Castle</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-statue-of-liberty\"></span>
<em>Statue of Liberty</em>
</a>
</div>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section bg-light\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">More Services</h2>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_1.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">01. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_2.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_4.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">03. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_5.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">04. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
<div class=\"container\">
<div class=\"row justify-content-center mb-5\">
<div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Testimonial</h2>
<blockquote class>
<p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
<p class=\"probootstrap-author\">
<a href=\" \" target=\"_blank\">
  <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/person_1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
  <span class=\"probootstrap-name\">Chaher Dridi</span>
  <span class=\"probootstrap-title\">Chief Executive Officer</span>
</a>
</p>
</blockquote>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section bg-light\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">News</h2>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_1.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_2.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
</div>
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_4.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_5.jpg"), "html", null, true);
        echo "')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
</div>
</div>
<div class=\"row probootstrap-animate\">
<div class=\"col-md-12\">
<div class=\"owl-carousel js-owl-carousel-2\">
<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_2.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_3.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_4.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_5.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_2.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_3.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_4.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/sq_img_5.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 634
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo " 
    <script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 644
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
        return array (  934 => 644,  930 => 643,  926 => 642,  922 => 641,  918 => 640,  914 => 639,  910 => 638,  906 => 637,  902 => 636,  898 => 635,  886 => 634,  862 => 571,  849 => 561,  836 => 551,  823 => 541,  810 => 531,  797 => 521,  784 => 511,  771 => 501,  758 => 491,  745 => 481,  716 => 455,  703 => 445,  688 => 433,  675 => 423,  651 => 402,  627 => 381,  616 => 373,  603 => 363,  592 => 355,  492 => 258,  478 => 247,  458 => 230,  449 => 224,  440 => 218,  429 => 210,  405 => 189,  296 => 84,  286 => 83,  274 => 43,  270 => 42,  266 => 41,  262 => 40,  258 => 39,  254 => 38,  250 => 37,  246 => 36,  242 => 35,  238 => 34,  231 => 30,  221 => 23,  211 => 16,  204 => 11,  194 => 10,  179 => 647,  177 => 634,  125 => 584,  123 => 83,  114 => 76,  109 => 74,  104 => 73,  98 => 71,  92 => 69,  89 => 68,  87 => 67,  79 => 62,  59 => 44,  57 => 10,  46 => 1,);
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
<a class=\"navbar-brand\" href=\" \">Elissa Travel</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#probootstrap-menu\" aria-controls=\"probootstrap-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span><i class=\"ion-navicon\"></i></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"probootstrap-menu\">
<ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item active\"><a class=\"nav-link\" href=\" \">Home</a></li>



    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Hotel</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_reservationvol_index')}}\">Travel With Us</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">organized trip</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">events</a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Contact</a></li>

 {% if app.user %}
\t\t\t\t {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('admin_dashboard_index') }}\" class=\"nav-link\">Admin</a> </li>
\t\t\t\t {% endif %}
            <li class=\"nav-item\"><a href=\"{{ logout_path('main') }}\" class=\"nav-link\">Logout</a> </li>
\t\t\t{% else %}
\t\t\t<li class=\"nav-item\"><a href=\"{{ path('login') }}\" class=\"nav-link\">Login</a> </p>
\t\t\t<li class=\"nav-item\"><a href=\"{{ path('registration') }}\" class=\"nav-link\">Register</a> </li>
            {% endif %}

</ul>
</div>
</div>
</nav>


\t{% block body %}
  <section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
  <div class=\"container\">
  <div class=\"row align-items-center\">
  <div class=\"col-md\">
  <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Elissa Travel</h2>
  <p class=\"lead mb-5 probootstrap-animate\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!    </a></p>
  <p class=\"probootstrap-animate\">
  <a href=\"\" role=\"button\" class=\"btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3\">Explore</a>
  </p>
  </div>
  <div class=\"col-md probootstrap-animate\">
  <form action=\"#\" class=\"probootstrap-form\">
  <div class=\"form-group\">
  <div class=\"row mb-3\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">From</label>
  <label for=\"id_label_single\" style=\"width: 100%;\">
  <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single\" style=\"width: 100%;\">
  <option value=\"Australia\">Australia</option>
  <option value=\"Japan\">Japan</option>
  <option value=\"United States\">United States</option>
  <option value=\"Brazil\">Brazil</option>
  <option value=\"China\">China</option>
  <option value=\"Israel\">Israel</option>
  <option value=\"Philippines\">Philippines</option>
  <option value=\"Malaysia\">Malaysia</option>
  <option value=\"Canada\">Canada</option>
  <option value=\"Chile\">Chile</option>
  <option value=\"Chile\">Zimbabwe</option>
  </select>
  </label>
  </div>
  </div>
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single2\">To</label>
  <div class=\"probootstrap_select-wrap\">
  <label for=\"id_label_single2\" style=\"width: 100%;\">
  <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single2\" style=\"width: 100%;\">
  <option value=\"Australia\">Australia</option>
  <option value=\"Japan\">Japan</option>
  <option value=\"United States\">United States</option>
  <option value=\"Brazil\">Brazil</option>
  <option value=\"China\">China</option>
  <option value=\"Israel\">Israel</option>
  <option value=\"Philippines\">Philippines</option>
  <option value=\"Malaysia\">Malaysia</option>
  <option value=\"Canada\">Canada</option>
  <option value=\"Chile\">Chile</option>
  <option value=\"Chile\">Zimbabwe</option>
  </select>
  </label>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"probootstrap-date-departure\">Departure</label>
  <div class=\"probootstrap-date-wrap\">
  <span class=\"icon ion-calendar\"></span>
  <input type=\"text\" id=\"probootstrap-date-departure\" class=\"form-control\" placeholder>
  </div>
  </div>
  </div>
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"probootstrap-date-arrival\">Arrival</label>
  <div class=\"probootstrap-date-wrap\">
  <span class=\"icon ion-calendar\"></span>
  <input type=\"text\" id=\"probootstrap-date-arrival\" class=\"form-control\" placeholder>
  </div>
  </div>
  </div>
  </div>
  
  <div class=\"row\">
  <div class=\"col-md\">
  <label for=\"round\" class=\"mr-5\"><input type=\"radio\" id=\"round\" name=\"direction\"> Round</label>
  <label for=\"oneway\"><input type=\"radio\" id=\"oneway\" name=\"direction\"> Oneway</label>
  </div>
  <div class=\"col-md\">
  <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary btn-block\">
  </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </section>
<section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
<div class=\"container\">
<div class=\"row justify-content-center mb-5\">
<div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Why we Love Places</h2>
<blockquote class>
<p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
<p class=\"probootstrap-author\">
<a href=\" \" target=\"_blank\">
<img src=\"{{ asset('assets/added_image/person_1.jpg') }}\" alt=\"\" class=\"rounded-circle\">
<span class=\"probootstrap-name\">Chaher Dridi</span>
<span class=\"probootstrap-title\">Chief Executive Officer</span>
</a>
</p>
</blockquote>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section\" id=\"section-city-guides\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Top Places Around The World</h2>
</div>
</div>
<div class=\"row\">
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"{{ asset('assets/added_image/img_1.jpg') }}\" alt=\"\" class=\"img-fluid\">
<div class=\"probootstrap-text\">
<h3>Buena</h3>
</div>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"{{ asset('assets/added_image/img_2.jpg') }}\" alt=\" \" class=\"img-fluid\">
<h3>Road</h3>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"{{ asset('assets/added_image/img_3.jpg') }}\" alt=\" \" class=\"img-fluid\">
<h3>Australia</h3>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"{{ asset('assets/added_image/img_4.jpg') }}\" alt=\" \" class=\"img-fluid\">
<h3>Japan</h3>
</a>
</div>
</div>
</div>
</section>
<section class=\"probootstrap_section\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Our Services</h2>
</div>
</div>
</div>
</section>
<section class=\"probootstrap-section-half d-md-flex\" id=\"section-about\">
<div class=\"probootstrap-image probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url('{{ asset('assets/added_image/img_2.jpg') }}')\"></div>
<div class=\"probootstrap-text\">
<div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInRight\">
<h2 class=\"heading mb-4\">Customer Service</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
<p><a href=\"#\" class=\"btn btn-primary\">Read More</a></p>
</div>
</div>
</section>
<section class=\"probootstrap-section-half d-md-flex\">
<div class=\"probootstrap-image order-2 probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url('{{ asset('assets/added_image/img_3.jpg') }}')\"></div>
<div class=\"probootstrap-text order-1\">
<div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInLeft\">
<h2 class=\"heading mb-4\">Payment Options</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
<p><a href=\"#\" class=\"btn btn-primary\">Learn More</a></p>
</div>
</div>
</section>

<section class=\"probootstrap_section\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
</div>
</div>
<div class=\"row probootstrap-animate\">
<div class=\"col-md-12\">
<div class=\"owl-carousel js-owl-carousel\">
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-teatro-de-la-caridad\"></span>
<em>Teatro de la Caridad</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-royal-museum-of-the-armed-forces\"></span>
<em>Royal Museum of the Armed Forces</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-parthenon\"></span>
<em>Parthenon</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-marina-bay-sands\"></span>
<em>Marina Bay Sands</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-samarra-minaret\"></span>
<em>Samarra Minaret</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-chiang-kai-shek-memorial\"></span>
<em>Chiang Kai Shek Memorial</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-heuvelse-kerk-tilburg\"></span>
<em>Heuvelse Kerk Tilburg</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-cathedral-of-cordoba\"></span>
<em>Cathedral of Cordoba</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-london-bridge\"></span>
<em>London Bridge</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-taj-mahal\"></span>
<em>Taj Mahal</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-leaning-tower-of-pisa\"></span>
<em>Leaning Tower of Pisa</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-burj-al-arab\"></span>
<em>Burj al Arab</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-gate-of-india\"></span>
<em>Gate of India</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-osaka-castle\"></span>
<em>Osaka Castle</em>
</a>
<a class=\"probootstrap-slide\" href=\"#\">
<span class=\"flaticon-statue-of-liberty\"></span>
<em>Statue of Liberty</em>
</a>
</div>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section bg-light\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">More Services</h2>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_1.jpg') }}')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">01. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_2.jpg') }}')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_4.jpg') }}')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">03. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_5.jpg') }}')\">
</div>
<div class=\"media-body\">
<h5 class=\"mb-3\">04. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
<div class=\"container\">
<div class=\"row justify-content-center mb-5\">
<div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Testimonial</h2>
<blockquote class>
<p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
<p class=\"probootstrap-author\">
<a href=\" \" target=\"_blank\">
  <img src=\"{{ asset('assets/added_image/person_1.jpg') }}\" alt=\"\" class=\"rounded-circle\">
  <span class=\"probootstrap-name\">Chaher Dridi</span>
  <span class=\"probootstrap-title\">Chief Executive Officer</span>
</a>
</p>
</blockquote>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section bg-light\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">News</h2>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_1.jpg') }}')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_2.jpg') }}')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
</div>
<div class=\"col-md-6\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_4.jpg') }}')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image: url('{{ asset('assets/added_image/img_5.jpg') }}')\">
</div>
<div class=\"media-body\">
<span class=\"text-uppercase\">January 1st 2018</span>
<h5 class=\"mb-3\">Travel To United States Without Visa</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
<p><a href=\"#\">Read More</a></p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class=\"probootstrap_section\">
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
</div>
</div>
<div class=\"row probootstrap-animate\">
<div class=\"col-md-12\">
<div class=\"owl-carousel js-owl-carousel-2\">
<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_2.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_1.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_3.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_4.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_5.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_2.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_1.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_3.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_4.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

<div>
<div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
<img src=\"{{ asset('assets/added_image/sq_img_5.jpg') }}\" alt=\"Free Template by uiCookies\" class=\"img-fluid\">
<div class=\"media-body\">
<h5 class=\"mb-3\">02. Service Title Here</h5>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
{% endblock %} 
<footer class=\"probootstrap_section probootstrap-border-top\">
<div class=\"container\">
<div class=\"row mb-5\">
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
<li><a href=\" \" target=\"_blank\">About</a></li>
<li><a href=\" \" target=\"_blank\">Services</a></li>
<li><a href=\" \" target=\"_blank\">Contact</a></li>
</ul>
</div>
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
<li><a href=\" \" target=\"_blank\">About</a></li>
<li><a href=\" \" target=\"_blank\">Services</a></li>
<li><a href=\"  \" target=\"_blank\">Contact</a></li>
</ul>
</div>
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
<li><a href=\"  \" target=\"_blank\">About</a></li>
<li><a href=\" \" target=\"_blank\">Services</a></li>
<li><a href=\" \" target=\"_blank\">Contact</a></li>
</ul>
</div>
<div class=\"col-md-3\">
<h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
<ul class=\"list-unstyled\">
<li><a href=\" \" target=\"_blank\">Home</a></li>
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

 

</html>", "base.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\base.html.twig");
    }
}
