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

/* vol/index.html.twig */
class __TwigTemplate_8aa6b0af664b241444b4cec2b68f7fbe extends Template
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
        return "nav_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "vol/index.html.twig", 1);
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

<div style=\"padding-bottom: 5%;\"></div>

<div class=\"row\">
    <div class=\"col-lg-12 d-flex justify-content-between align-items-center\">
        <div class=\"button-group\">
            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_index");
        echo "\" class=\"btn btn-primary\">Airports</a>
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_index");
        echo "\" class=\"btn btn-primary mr-2\">Flights</a>
            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_index");
        echo "\" class=\"btn btn-primary mr-2\">Flight Classes</a>
            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_index");
        echo "\" class=\"btn btn-primary mr-2\">Flight Reservation</a>
            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_pdf");
        echo "\" class=\"btn btn-success btn-lg\">PDF</a>
            <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_calendar");
        echo "\" class=\"btn btn-success btn-lg\">Agenda</a>
        </div>

        <!-- Search form -->
        <form style=\"margin-bottom: \">
            <div class=\"input-group\">
                <input id=\"search-input-airline\" class=\"btn btn-outline-secondary\" type=\"text\" class=\"form-control\" placeholder=\"Search by Airline\">
                <input id=\"search-input-date\" class=\"btn btn-outline-secondary\" type=\"date\" class=\"form-control\" placeholder=\"Search by Date\">
            </div>
            
        </form>

        <!-- Add New Flight link styled like search button -->
        <div>
            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_new");
        echo "\" class=\"btn btn-outline-secondary\">Add New Flight</a>
        </div>
    </div>
</div>

<div class=\"col-lg-8\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id Flight</th>
                <th>Admin</th>
                <th>AirLine</th>
                <th>Departure Airport</th>
                <th>Arrival Airport</th>
                <th>Heure depart</th>
                <th>Heure arrivee</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"flightListContainer\">
            ";
        // line 94
        if ((twig_length_filter($this->env, (isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 94, $this->source); })())) > 0)) {
            // line 95
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vol"]) {
                // line 96
                echo "                    <tr class=\"flight-row\">
                        <td class=\"flight-id\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "id", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
                        <td>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vol"], "user", [], "any", false, false, false, 98), "firstName", [], "any", false, false, false, 98), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vol"], "user", [], "any", false, false, false, 98), "lastName", [], "any", false, false, false, 98), "html", null, true);
                echo "</td>
                        <td class=\"company-name\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "compagnieAerienne", [], "any", false, false, false, 99), "html", null, true);
                echo "</td>
                        <td class=\"departure-airport\">";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vol"], "getAirportDepart", [], "method", false, false, false, 100), "getName", [], "method", false, false, false, 100), "html", null, true);
                echo "</td>
                        <td class=\"arrival-airport\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vol"], "getAirportArrive", [], "method", false, false, false, 101), "getName", [], "method", false, false, false, 101), "html", null, true);
                echo "</td>
                        <td>";
                // line 102
                ((twig_get_attribute($this->env, $this->source, $context["vol"], "heureDepart", [], "any", false, false, false, 102)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "heureDepart", [], "any", false, false, false, 102), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
                        <td>";
                // line 103
                ((twig_get_attribute($this->env, $this->source, $context["vol"], "heureArrive", [], "any", false, false, false, 103)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "heureArrive", [], "any", false, false, false, 103), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
                        <td>";
                // line 104
                echo ((twig_get_attribute($this->env, $this->source, $context["vol"], "disponible", [], "any", false, false, false, 104)) ? ("Yes") : ("No"));
                echo "</td>
                        <td>
                            <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_show", ["id" => twig_get_attribute($this->env, $this->source, $context["vol"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">Show</a>
                            <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["vol"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\">Edit</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "            ";
        } else {
            // line 112
            echo "                <tr>
                    <td colspan=\"10\">No records found</td>
                </tr>
            ";
        }
        // line 116
        echo "        </tbody>
    </table>
</div>

<div>
    ";
        // line 121
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 121, $this->source); })()));
        echo "
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
    \$(document).ready(function() {
        \$(\"#search-input-airline, #search-input-date\").on(\"keyup change\", function() {
            var airlineValue = \$(\"#search-input-airline\").val().toLowerCase();
            var dateValue = \$(\"#search-input-date\").val().toLowerCase();
            \$(\".flight-row\").filter(function() {
                var airlineText = \$(this).find(\".company-name\").text().toLowerCase();
                var dateText = \$(this).find(\".departure-date\").text().toLowerCase();
                var matchesAirline = airlineText.includes(airlineValue);
                var matchesDate = dateText.includes(dateValue);
                \$(this).toggle(matchesAirline && matchesDate);
            });
        });
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
        return "vol/index.html.twig";
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
        return array (  256 => 121,  249 => 116,  243 => 112,  240 => 111,  230 => 107,  226 => 106,  221 => 104,  217 => 103,  213 => 102,  209 => 101,  205 => 100,  201 => 99,  195 => 98,  191 => 97,  188 => 96,  183 => 95,  181 => 94,  157 => 73,  140 => 59,  136 => 58,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block body %}

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

<div style=\"padding-bottom: 5%;\"></div>

<div class=\"row\">
    <div class=\"col-lg-12 d-flex justify-content-between align-items-center\">
        <div class=\"button-group\">
            <a href=\"{{ path('app_airport_index') }}\" class=\"btn btn-primary\">Airports</a>
            <a href=\"{{ path('app_vol_index') }}\" class=\"btn btn-primary mr-2\">Flights</a>
            <a href=\"{{ path('app_volclass_index') }}\" class=\"btn btn-primary mr-2\">Flight Classes</a>
            <a href=\"{{ path('app_reservation_vol_admin_index') }}\" class=\"btn btn-primary mr-2\">Flight Reservation</a>
            <a href=\"{{ path('app_vol_pdf') }}\" class=\"btn btn-success btn-lg\">PDF</a>
            <a href=\"{{ path('app_vol_calendar') }}\" class=\"btn btn-success btn-lg\">Agenda</a>
        </div>

        <!-- Search form -->
        <form style=\"margin-bottom: \">
            <div class=\"input-group\">
                <input id=\"search-input-airline\" class=\"btn btn-outline-secondary\" type=\"text\" class=\"form-control\" placeholder=\"Search by Airline\">
                <input id=\"search-input-date\" class=\"btn btn-outline-secondary\" type=\"date\" class=\"form-control\" placeholder=\"Search by Date\">
            </div>
            
        </form>

        <!-- Add New Flight link styled like search button -->
        <div>
            <a href=\"{{ path('app_vol_new') }}\" class=\"btn btn-outline-secondary\">Add New Flight</a>
        </div>
    </div>
</div>

<div class=\"col-lg-8\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id Flight</th>
                <th>Admin</th>
                <th>AirLine</th>
                <th>Departure Airport</th>
                <th>Arrival Airport</th>
                <th>Heure depart</th>
                <th>Heure arrivee</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"flightListContainer\">
            {% if vols|length > 0 %}
                {% for vol in vols %}
                    <tr class=\"flight-row\">
                        <td class=\"flight-id\">{{ vol.id }}</td>
                        <td>{{ vol.user.firstName }} {{ vol.user.lastName  }}</td>
                        <td class=\"company-name\">{{ vol.compagnieAerienne }}</td>
                        <td class=\"departure-airport\">{{ vol.getAirportDepart().getName() }}</td>
                        <td class=\"arrival-airport\">{{ vol.getAirportArrive().getName() }}</td>
                        <td>{{ vol.heureDepart ? vol.heureDepart|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ vol.heureArrive ? vol.heureArrive|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ vol.disponible ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href=\"{{ path('app_vol_show', {'id': vol.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                            <a href=\"{{ path('app_vol_edit', {'id': vol.id}) }}\" class=\"btn btn-primary btn-sm\">Edit</a>
                        </td>
                    </tr>
                {% endfor %}
            {% else %}
                <tr>
                    <td colspan=\"10\">No records found</td>
                </tr>
            {% endif %}
        </tbody>
    </table>
</div>

<div>
    {{ knp_pagination_render(vols) }}
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
    \$(document).ready(function() {
        \$(\"#search-input-airline, #search-input-date\").on(\"keyup change\", function() {
            var airlineValue = \$(\"#search-input-airline\").val().toLowerCase();
            var dateValue = \$(\"#search-input-date\").val().toLowerCase();
            \$(\".flight-row\").filter(function() {
                var airlineText = \$(this).find(\".company-name\").text().toLowerCase();
                var dateText = \$(this).find(\".departure-date\").text().toLowerCase();
                var matchesAirline = airlineText.includes(airlineValue);
                var matchesDate = dateText.includes(dateValue);
                \$(this).toggle(matchesAirline && matchesDate);
            });
        });
    });
</script>



{% endblock %}
", "vol/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\vol\\index.html.twig");
    }
}
