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

/* airport/index.html.twig */
class __TwigTemplate_376b8301cba5e93b30de38ad3daab3f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "airport/index.html.twig", 1);
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

        echo "Airport Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
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

    /* Styling for search form */
    #searchForm {
        margin-bottom: 20px;
    }
</style>
<div style=\"padding-bottom: 5%;\"></div>
<div class=\"row\">
    <div class=\"col-lg-12 d-flex justify-content-between align-items-center\">
        <!-- Navigation buttons -->
        <div class=\"button-group\">
            <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_index");
        echo "\" class=\"btn btn-primary\">Airports</a>
            <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_index");
        echo "\" class=\"btn btn-primary mr-2\">Flights</a>
            <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_index");
        echo "\" class=\"btn btn-primary mr-2\">Flight Classes</a>
            <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_index");
        echo "\" class=\"btn btn-primary mr-2\">Flight Reservation</a>
            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("airport_stat");
        echo "\" class=\"btn btn-success btn-lg\">Airport Stat</a>
        </div>

        <!-- Search form -->
        <form id=\"searchForm\">
             
            <input type=\"text\" id=\"airportSearch\" name=\"search\"  class=\"btn btn-outline-secondary\" class=\"form-control input-default mr-2\" placeholder=\"Search by Airport Name, Code, City, or Country\">
        </form>

        <!-- Display area for search results -->
        <div id=\"airportSearchResults\"></div>

        <!-- Add new airport button -->
        <div>
            <button id=\"addNewAirportButton\" class=\"btn btn-outline-secondary\" onclick=\"location.href='";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_new");
        echo "'\">Add New Airport</button>
        </div>
    </div>

    <!-- Table displaying airports -->
    <div class=\"table-responsive col-lg-8\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id Airport</th>
                    <th>Admin</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"airportListContainer\">
                ";
        // line 97
        if ((twig_length_filter($this->env, (isset($context["airports"]) || array_key_exists("airports", $context) ? $context["airports"] : (function () { throw new RuntimeError('Variable "airports" does not exist.', 97, $this->source); })())) > 0)) {
            // line 98
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["airports"]) || array_key_exists("airports", $context) ? $context["airports"] : (function () { throw new RuntimeError('Variable "airports" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
                // line 99
                echo "                        <tr class=\"airport-row\">
                            <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["airport"], "id", [], "any", false, false, false, 100), "html", null, true);
                echo "</td>
                            <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["airport"], "user", [], "any", false, false, false, 101), "firstName", [], "any", false, false, false, 101), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["airport"], "user", [], "any", false, false, false, 101), "lastName", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
                            <td class=\"airport-code\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["airport"], "code", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                            <td class=\"airport-name\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["airport"], "name", [], "any", false, false, false, 103), "html", null, true);
                echo "</td>
                            <td class=\"airport-city\">";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["airport"], "city", [], "any", false, false, false, 104), "html", null, true);
                echo "</td>
                            <td class=\"airport-country\">";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["airport"], "country", [], "any", false, false, false, 105), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["airport"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">Show</a>
                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["airport"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">Edit</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                ";
        } else {
            // line 113
            echo "                    <tr>
                        <td colspan=\"6\">No records found</td>
                    </tr>
                ";
        }
        // line 117
        echo "            </tbody>
        </table>
    </div>
</div>

<!-- Pagination -->
<div>";
        // line 123
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["airports"]) || array_key_exists("airports", $context) ? $context["airports"] : (function () { throw new RuntimeError('Variable "airports" does not exist.', 123, $this->source); })()));
        echo "</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#airportSearch\").on(\"keyup\", function() {
            var searchQuery = \$(this).val().toLowerCase();
            \$(\".airport-row\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchQuery) > -1);
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
        return "airport/index.html.twig";
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
        return array (  267 => 123,  259 => 117,  253 => 113,  250 => 112,  240 => 108,  236 => 107,  231 => 105,  227 => 104,  223 => 103,  219 => 102,  213 => 101,  209 => 100,  206 => 99,  201 => 98,  199 => 97,  177 => 78,  160 => 64,  156 => 63,  152 => 62,  148 => 61,  144 => 60,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Airport Index{% endblock %}

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

    /* Styling for search form */
    #searchForm {
        margin-bottom: 20px;
    }
</style>
<div style=\"padding-bottom: 5%;\"></div>
<div class=\"row\">
    <div class=\"col-lg-12 d-flex justify-content-between align-items-center\">
        <!-- Navigation buttons -->
        <div class=\"button-group\">
            <a href=\"{{ path('app_airport_index') }}\" class=\"btn btn-primary\">Airports</a>
            <a href=\"{{ path('app_vol_index') }}\" class=\"btn btn-primary mr-2\">Flights</a>
            <a href=\"{{ path('app_volclass_index') }}\" class=\"btn btn-primary mr-2\">Flight Classes</a>
            <a href=\"{{ path('app_reservation_vol_admin_index') }}\" class=\"btn btn-primary mr-2\">Flight Reservation</a>
            <a href=\"{{ path('airport_stat') }}\" class=\"btn btn-success btn-lg\">Airport Stat</a>
        </div>

        <!-- Search form -->
        <form id=\"searchForm\">
             
            <input type=\"text\" id=\"airportSearch\" name=\"search\"  class=\"btn btn-outline-secondary\" class=\"form-control input-default mr-2\" placeholder=\"Search by Airport Name, Code, City, or Country\">
        </form>

        <!-- Display area for search results -->
        <div id=\"airportSearchResults\"></div>

        <!-- Add new airport button -->
        <div>
            <button id=\"addNewAirportButton\" class=\"btn btn-outline-secondary\" onclick=\"location.href='{{ path('app_airport_new') }}'\">Add New Airport</button>
        </div>
    </div>

    <!-- Table displaying airports -->
    <div class=\"table-responsive col-lg-8\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id Airport</th>
                    <th>Admin</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"airportListContainer\">
                {% if airports|length > 0 %}
                    {% for airport in airports %}
                        <tr class=\"airport-row\">
                            <td>{{ airport.id }}</td>
                            <td>{{ airport.user.firstName }} {{ airport.user.lastName }}</td>
                            <td class=\"airport-code\">{{ airport.code }}</td>
                            <td class=\"airport-name\">{{ airport.name }}</td>
                            <td class=\"airport-city\">{{ airport.city }}</td>
                            <td class=\"airport-country\">{{ airport.country }}</td>
                            <td>
                                <a href=\"{{ path('app_airport_show', {'id': airport.id}) }}\" class=\"btn btn-sm btn-info\">Show</a>
                                <a href=\"{{ path('app_airport_edit', {'id': airport.id}) }}\" class=\"btn btn-sm btn-primary\">Edit</a>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr>
                        <td colspan=\"6\">No records found</td>
                    </tr>
                {% endif %}
            </tbody>
        </table>
    </div>
</div>

<!-- Pagination -->
<div>{{ knp_pagination_render(airports) }}</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#airportSearch\").on(\"keyup\", function() {
            var searchQuery = \$(this).val().toLowerCase();
            \$(\".airport-row\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchQuery) > -1);
            });
        });
    });
</script>
{% endblock %}
", "airport/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\airport\\index.html.twig");
    }
}
