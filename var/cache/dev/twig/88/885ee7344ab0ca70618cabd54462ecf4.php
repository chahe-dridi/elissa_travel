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

/* base-front.html.twig */
class __TwigTemplate_17aecdf98ee52e303617bed22f11b53b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "nav_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "base-front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 109
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
        // line 130
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
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
<h3>Road</h3>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/img_3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
<h3>Australia</h3>
</a>
</div>
<div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
<a href=\"#\" class=\"probootstrap-thumbnail\">
<img src=\"";
        // line 150
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
        // line 167
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
        // line 178
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
        // line 275
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
        // line 283
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
        // line 293
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
        // line 301
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
        // line 322
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
        // line 343
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
        // line 353
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
        // line 365
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
        // line 375
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
        // line 401
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
        // line 411
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
        // line 421
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
        // line 431
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
        // line 441
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
        // line 451
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
        // line 461
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
        // line 471
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
        // line 481
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
        // line 491
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base-front.html.twig";
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
        return array (  634 => 491,  621 => 481,  608 => 471,  595 => 461,  582 => 451,  569 => 441,  556 => 431,  543 => 421,  530 => 411,  517 => 401,  488 => 375,  475 => 365,  460 => 353,  447 => 343,  423 => 322,  399 => 301,  388 => 293,  375 => 283,  364 => 275,  264 => 178,  250 => 167,  230 => 150,  221 => 144,  212 => 138,  201 => 130,  177 => 109,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'nav_user.html.twig' %}

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
 ", "base-front.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\base-front.html.twig");
    }
}
