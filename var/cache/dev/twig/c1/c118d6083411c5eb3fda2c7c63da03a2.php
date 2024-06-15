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

/* reservation_hotel/show.html.twig */
class __TwigTemplate_f6673afc6f0db227764162a06bbcc2d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "reservation_hotel/show.html.twig", 1);
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
       
        <div class=\"col-md\">
            <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Reservation Details</h2>
        </div>
        <div class=\"col-md probootstrap-animate\">
            <div class=\"container-fluid\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-12\"> <!-- Utiliser une colonne pleine largeur -->
                       
                        <div class=\"text-right mb-3\">
                            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_invoice", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Download Invoice PDF</a>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\">
                                <thead class=\"thead-dark\">
                                    <tr>
                                        <th>Attribute</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Id</td>
                                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>PrixTT</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Date Arrive</td>
                                        <td>";
        // line 39
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 39, $this->source); })()), "dateArrive", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 39, $this->source); })()), "dateArrive", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Date Depart</td>
                                        <td>";
        // line 43
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 43, $this->source); })()), "dateDepart", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 43, $this->source); })()), "dateDepart", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Nom</td>
                                        <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>PreNom</td>
                                        <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 55, $this->source); })()), "preNom", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Distination</td>
                                        <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 59, $this->source); })()), "Distination", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Chambre</td>
                                        <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 63, $this->source); })()), "ChambrE", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>
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
        return "reservation_hotel/show.html.twig";
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
        return array (  156 => 63,  149 => 59,  142 => 55,  135 => 51,  128 => 47,  121 => 43,  114 => 39,  103 => 31,  87 => 18,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_user.html.twig' %}

{% block body %}

<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
       
        <div class=\"col-md\">
            <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Reservation Details</h2>
        </div>
        <div class=\"col-md probootstrap-animate\">
            <div class=\"container-fluid\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-12\"> <!-- Utiliser une colonne pleine largeur -->
                       
                        <div class=\"text-right mb-3\">
                            <a href=\"{{ path('app_reservation_hotel_invoice', {'id': reservation_hotel.id}) }}\" class=\"btn btn-primary\">Download Invoice PDF</a>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\">
                                <thead class=\"thead-dark\">
                                    <tr>
                                        <th>Attribute</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Id</td>
                                        <td>{{ reservation_hotel.id }}</td>
                                    </tr>
                                    <tr>
                                        <td>PrixTT</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Date Arrive</td>
                                        <td>{{ reservation_hotel.dateArrive ? reservation_hotel.dateArrive|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Date Depart</td>
                                        <td>{{ reservation_hotel.dateDepart ? reservation_hotel.dateDepart|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ reservation_hotel.email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nom</td>
                                        <td>{{ reservation_hotel.nom }}</td>
                                    </tr>
                                    <tr>
                                        <td>PreNom</td>
                                        <td>{{ reservation_hotel.preNom }}</td>
                                    </tr>
                                    <tr>
                                        <td>Distination</td>
                                        <td>{{ reservation_hotel.Distination }}</td>
                                    </tr>
                                    <tr>
                                        <td>Chambre</td>
                                        <td>{{ reservation_hotel.ChambrE }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}
", "reservation_hotel/show.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_hotel\\show.html.twig");
    }
}
