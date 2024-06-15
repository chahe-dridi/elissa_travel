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

/* reservationvol/index.html.twig */
class __TwigTemplate_1bb346e85e9646b9f0bbefd88ddf7b37 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationvol/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationvol/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "reservationvol/index.html.twig", 1);
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
        
        <div class=\"form-group\">
       
            <div class=\"row\">
                <div class=\"col-md-12 text-center probootstrap-animate\">
                    <h2 class=\"heading mb50\">Available Flights</h2>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvol_show");
        echo "\" class=\"btn btn-primary\">Show Reservation</a>
                </div>
            </div> 
       
            <div style=\"padding-bottom: 2%;\"></div>

            <div class=\"row mb-3\" >
                <div class=\"col-md-4\">
                    <input type=\"text\" id=\"departureCity\" class=\"form-control\" placeholder=\"Departure City\">
                </div>
                <div class=\"col-md-4\">
                    <input type=\"text\" id=\"arrivalCity\" class=\"form-control\" placeholder=\"Arrival City\">
                </div>
                <div class=\"col-md-4\">
                    <input type=\"number\" id=\"maxPrice\" class=\"form-control\" placeholder=\"Max Price\">
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-4 text-center\">
                    <input type=\"date\" id=\"departureDate\" class=\"form-control\" placeholder=\"Departure Date\">
                </div>
            </div>
        </div>
       
        <div class=\"row\" id=\"flightList\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new RuntimeError('Variable "flights" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 43
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["flight"], "disponible", [], "any", false, false, false, 43)) {
                // line 44
                echo "                    <div class=\"col-md-4 mb-3 probootstrap-form flight-card\">
                        <div class=\"card-body\" style=\"height: 100%; background-color: #fff; border-radius: 10px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);\"> <!-- Set a fixed height for the card body -->
                            <h5 class=\"card-title\">Flight Information</h5>
                            <p class=\"card-text departure-airport\" style=\"color: black;\">Departure Airport: ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportDepart", [], "method", false, false, false, 47), "getName", [], "method", false, false, false, 47), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportDepart", [], "method", false, false, false, 47), "getCity", [], "method", false, false, false, 47), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportDepart", [], "method", false, false, false, 47), "getCountry", [], "method", false, false, false, 47), "html", null, true);
                echo ")</p>
                            <p class=\"card-text arrival-airport\" style=\"color: black;\">Arrival Airport: ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportarrive", [], "method", false, false, false, 48), "getName", [], "method", false, false, false, 48), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportarrive", [], "method", false, false, false, 48), "getCity", [], "method", false, false, false, 48), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportarrive", [], "method", false, false, false, 48), "getCountry", [], "method", false, false, false, 48), "html", null, true);
                echo ")</p>
                            <p class=\"card-text departure-time\" style=\"color: black;\">Departure Time: ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "getHeureDepart", [], "method", false, false, false, 49), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                            <p class=\"card-text arrival-time\" style=\"color: black;\">Arrival Time: ";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "getHeureArrive", [], "method", false, false, false, 50), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                            <p class=\"card-text\" style=\"color: black;\">Class: ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getVolclass", [], "method", false, false, false, 51), "getClassName", [], "method", false, false, false, 51), "html", null, true);
                echo "</p>
                            <p class=\"card-text price\" style=\"color: black;\">Price: \$";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getVolclass", [], "method", false, false, false, 52), "getPrice", [], "method", false, false, false, 52), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvol_new", ["id" => twig_get_attribute($this->env, $this->source, $context["flight"], "getId", [], "method", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">View Reservation</a>
                        </div>
                    </div>
                ";
            }
            // line 57
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </div>
    </div>
</section>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
    \$(document).ready(function() {
        function filterFlights() {
            var departureCity = \$('#departureCity').val().trim().toLowerCase();
            var arrivalCity = \$('#arrivalCity').val().trim().toLowerCase();
            var maxPrice = parseFloat(\$('#maxPrice').val().trim());
            var departureDate = \$('#departureDate').val();

            \$('.flight-card').each(function() {
                var departureAirport = \$(this).find('.departure-airport').text().toLowerCase();
                var arrivalAirport = \$(this).find('.arrival-airport').text().toLowerCase();
                var price = parseFloat(\$(this).find('.price').text().replace('Price: \$', ''));
                var flightDepartureDate = \$(this).find('.departure-time').text();

                var showDeparture = departureCity === '' || departureAirport.includes(departureCity);
                var showArrival = arrivalCity === '' || arrivalAirport.includes(arrivalCity);
                var showPrice = isNaN(maxPrice) || price <= maxPrice;
                var showDate = departureDate === '' || flightDepartureDate === departureDate;

                if (showDeparture && showArrival && showPrice && showDate) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }

        \$('#departureCity, #arrivalCity, #maxPrice, #departureDate').on('input change', filterFlights);
    });
</script>


<style>
    /* Pagination styling */
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        font-size: 14px;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a, .pagination span {
        margin: 0 5px;
        padding: 8px 12px;
        border: 1px solid #3498db;
        border-radius: 20px; /* Rounded border */
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s;
        color: #3498db; /* Text color for pagination links */
        background-color: #f7f7f7; /* Background color for pagination links */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added shadow */
    }

    .pagination a:hover {
        background-color: #2980b9;
        color: #fff; /* Text color on hover */
    }

    .pagination .current {
        background-color: #2c3e50;
        color: #fff;
    }

    .pagination .next, .pagination .last,
    .pagination .previous, .pagination .first {
        font-weight: bold;
    }

    .pagination a[rel=\"prev\"], .pagination a[rel=\"next\"] {
        text-decoration: none;
    }
</style>

<div>
    ";
        // line 141
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new RuntimeError('Variable "flights" does not exist.', 141, $this->source); })()));
        echo "
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
        return "reservationvol/index.html.twig";
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
        return array (  256 => 141,  171 => 58,  165 => 57,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  134 => 48,  126 => 47,  121 => 44,  118 => 43,  114 => 42,  85 => 16,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_user.html.twig' %}

{% block body %}

<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
   
    <div class=\"overlay\"></div>
    
    <div class=\"container\">
        
        <div class=\"form-group\">
       
            <div class=\"row\">
                <div class=\"col-md-12 text-center probootstrap-animate\">
                    <h2 class=\"heading mb50\">Available Flights</h2>
                    <a href=\"{{ path('app_reservationvol_show') }}\" class=\"btn btn-primary\">Show Reservation</a>
                </div>
            </div> 
       
            <div style=\"padding-bottom: 2%;\"></div>

            <div class=\"row mb-3\" >
                <div class=\"col-md-4\">
                    <input type=\"text\" id=\"departureCity\" class=\"form-control\" placeholder=\"Departure City\">
                </div>
                <div class=\"col-md-4\">
                    <input type=\"text\" id=\"arrivalCity\" class=\"form-control\" placeholder=\"Arrival City\">
                </div>
                <div class=\"col-md-4\">
                    <input type=\"number\" id=\"maxPrice\" class=\"form-control\" placeholder=\"Max Price\">
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-4 text-center\">
                    <input type=\"date\" id=\"departureDate\" class=\"form-control\" placeholder=\"Departure Date\">
                </div>
            </div>
        </div>
       
        <div class=\"row\" id=\"flightList\">
            {% for flight in flights %}
                {% if flight.disponible %}
                    <div class=\"col-md-4 mb-3 probootstrap-form flight-card\">
                        <div class=\"card-body\" style=\"height: 100%; background-color: #fff; border-radius: 10px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);\"> <!-- Set a fixed height for the card body -->
                            <h5 class=\"card-title\">Flight Information</h5>
                            <p class=\"card-text departure-airport\" style=\"color: black;\">Departure Airport: {{ flight.getairportDepart().getName() }} ({{ flight.getairportDepart().getCity() }}, {{ flight.getairportDepart().getCountry() }})</p>
                            <p class=\"card-text arrival-airport\" style=\"color: black;\">Arrival Airport: {{ flight.getairportarrive().getName() }} ({{ flight.getairportarrive().getCity() }}, {{ flight.getairportarrive().getCountry() }})</p>
                            <p class=\"card-text departure-time\" style=\"color: black;\">Departure Time: {{ flight.getHeureDepart()|date('Y-m-d H:i:s') }}</p>
                            <p class=\"card-text arrival-time\" style=\"color: black;\">Arrival Time: {{ flight.getHeureArrive()|date('Y-m-d H:i:s') }}</p>
                            <p class=\"card-text\" style=\"color: black;\">Class: {{ flight.getVolclass().getClassName() }}</p>
                            <p class=\"card-text price\" style=\"color: black;\">Price: \${{ flight.getVolclass().getPrice() }}</p>
                            <a href=\"{{ path('app_reservationvol_new', {'id': flight.getId()}) }}\" class=\"btn btn-primary\">View Reservation</a>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
</section>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
    \$(document).ready(function() {
        function filterFlights() {
            var departureCity = \$('#departureCity').val().trim().toLowerCase();
            var arrivalCity = \$('#arrivalCity').val().trim().toLowerCase();
            var maxPrice = parseFloat(\$('#maxPrice').val().trim());
            var departureDate = \$('#departureDate').val();

            \$('.flight-card').each(function() {
                var departureAirport = \$(this).find('.departure-airport').text().toLowerCase();
                var arrivalAirport = \$(this).find('.arrival-airport').text().toLowerCase();
                var price = parseFloat(\$(this).find('.price').text().replace('Price: \$', ''));
                var flightDepartureDate = \$(this).find('.departure-time').text();

                var showDeparture = departureCity === '' || departureAirport.includes(departureCity);
                var showArrival = arrivalCity === '' || arrivalAirport.includes(arrivalCity);
                var showPrice = isNaN(maxPrice) || price <= maxPrice;
                var showDate = departureDate === '' || flightDepartureDate === departureDate;

                if (showDeparture && showArrival && showPrice && showDate) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }

        \$('#departureCity, #arrivalCity, #maxPrice, #departureDate').on('input change', filterFlights);
    });
</script>


<style>
    /* Pagination styling */
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        font-size: 14px;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a, .pagination span {
        margin: 0 5px;
        padding: 8px 12px;
        border: 1px solid #3498db;
        border-radius: 20px; /* Rounded border */
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s;
        color: #3498db; /* Text color for pagination links */
        background-color: #f7f7f7; /* Background color for pagination links */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added shadow */
    }

    .pagination a:hover {
        background-color: #2980b9;
        color: #fff; /* Text color on hover */
    }

    .pagination .current {
        background-color: #2c3e50;
        color: #fff;
    }

    .pagination .next, .pagination .last,
    .pagination .previous, .pagination .first {
        font-weight: bold;
    }

    .pagination a[rel=\"prev\"], .pagination a[rel=\"next\"] {
        text-decoration: none;
    }
</style>

<div>
    {{ knp_pagination_render(flights) }}
</div>

{% endblock %}
", "reservationvol/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservationvol\\index.html.twig");
    }
}
