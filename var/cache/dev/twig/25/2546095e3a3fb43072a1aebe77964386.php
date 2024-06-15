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

/* reservation_hotel/new.html.twig */
class __TwigTemplate_d6e25a8b1f2c2110941d79c39fcade8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/new.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "reservation_hotel/new.html.twig", 1);
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
        echo "
<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center probootstrap-animate\">
                <h2 class=\"heading mb50\">Create New Reservation</h2>
            </div>
        </div>
    </div>
</section>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["hotelname"]) || array_key_exists("hotelname", $context) ? $context["hotelname"] : (function () { throw new RuntimeError('Variable "hotelname" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</h3>
                    <h5 class=\"card-subtitle mb-2 text-muted\">Localisation : ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 25
        echo twig_include($this->env, $context, "reservation_hotel/_form.html.twig");
        echo "
                </div>
                <div class=\"card-footer text-muted\">
                    <a class=\"btn btn-secondary\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_index");
        echo "\">MES RESERVATIONS</a>
                </div>
            </div>
        </div>
    </div>
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
        return "reservation_hotel/new.html.twig";
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
        return array (  106 => 28,  100 => 25,  94 => 22,  90 => 21,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_user.html.twig' %}

{% block body %}

<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center probootstrap-animate\">
                <h2 class=\"heading mb50\">Create New Reservation</h2>
            </div>
        </div>
    </div>
</section>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">{{ hotelname }}</h3>
                    <h5 class=\"card-subtitle mb-2 text-muted\">Localisation : {{ lieu }}</h5>
                </div>
                <div class=\"card-body\">
                    {{ include('reservation_hotel/_form.html.twig') }}
                </div>
                <div class=\"card-footer text-muted\">
                    <a class=\"btn btn-secondary\" href=\"{{ path('app_reservation_hotel_index') }}\">MES RESERVATIONS</a>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "reservation_hotel/new.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_hotel\\new.html.twig");
    }
}
