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

/* reservation_vol_admin/index.html.twig */
class __TwigTemplate_ae29b318a2797c59835894e28a1be592 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "reservation_vol_admin/index.html.twig", 1);
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
<!-- Row 1 -->
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationvol_stat");
        echo "\" class=\"btn btn-success btn-lg\">Show Statistics</a>
        </div>

        <form id=\"searchForm\" action=\"#\" method=\"GET\">
            <div>
                <input type=\"text\" name=\"search\" class=\"btn btn-outline-secondary\" placeholder=\"Search by User ID or Flight ID\">
            </div>
        </form>

        <div>
            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_new");
        echo "\" class=\"btn btn-outline-secondary\">Add New Reservation</a>
        </div>
    </div>
    
    <h1></h1>
    <h1></h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>User id</th>
                <th>Flight id</th>
                <th>Total price</th>
                <th>Payment method</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"reservationTableBody\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationvols"]) || array_key_exists("reservationvols", $context) ? $context["reservationvols"] : (function () { throw new RuntimeError('Variable "reservationvols" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservationvol"]) {
            // line 88
            echo "                <tr class=\"reservation-row\">
                    <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "user", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "vol", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "totalPrice", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                    <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getPaymentMethod", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservationvol"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Show</a>
                        <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservationvol"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationvol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
    </table>
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchForm input[name=\"search\"]').on('input', function() {
            var searchTerm = \$(this).val().toLowerCase().trim();
            \$('#reservationTableBody tr').filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchTerm) > -1);
            });
        });
    });
</script>

<div>
    ";
        // line 121
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservationvols"]) || array_key_exists("reservationvols", $context) ? $context["reservationvols"] : (function () { throw new RuntimeError('Variable "reservationvols" does not exist.', 121, $this->source); })()));
        echo " </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation_vol_admin/index.html.twig";
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
        return array (  241 => 121,  222 => 104,  213 => 100,  204 => 96,  200 => 95,  195 => 93,  191 => 92,  187 => 91,  183 => 90,  179 => 89,  176 => 88,  171 => 87,  149 => 68,  136 => 58,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  68 => 4,  58 => 3,  35 => 1,);
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
<!-- Row 1 -->
<div class=\"row\">
    <div class=\"col-lg-12 d-flex justify-content-between align-items-center\">
        <div class=\"button-group\">
            <a href=\"{{ path('app_airport_index') }}\" class=\"btn btn-primary\">Airports</a>
            <a href=\"{{ path('app_vol_index') }}\" class=\"btn btn-primary mr-2\">Flights</a>
            <a href=\"{{ path('app_volclass_index') }}\" class=\"btn btn-primary mr-2\">Flight Classes</a>
            <a href=\"{{ path('app_reservation_vol_admin_index') }}\" class=\"btn btn-primary mr-2\">Flight Reservation</a>
            <a href=\"{{ path('reservationvol_stat') }}\" class=\"btn btn-success btn-lg\">Show Statistics</a>
        </div>

        <form id=\"searchForm\" action=\"#\" method=\"GET\">
            <div>
                <input type=\"text\" name=\"search\" class=\"btn btn-outline-secondary\" placeholder=\"Search by User ID or Flight ID\">
            </div>
        </form>

        <div>
            <a href=\"{{ path('app_reservation_vol_admin_new') }}\" class=\"btn btn-outline-secondary\">Add New Reservation</a>
        </div>
    </div>
    
    <h1></h1>
    <h1></h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>User id</th>
                <th>Flight id</th>
                <th>Total price</th>
                <th>Payment method</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"reservationTableBody\">
            {% for reservationvol in reservationvols %}
                <tr class=\"reservation-row\">
                    <td>{{ reservationvol.id }}</td>
                    <td>{{ reservationvol.user }}</td>
                    <td>{{ reservationvol.vol }}</td>
                    <td>{{ reservationvol.totalPrice }}</td>
                    <td>{{ reservationvol.getPaymentMethod }}</td>
                    <td>
                        <a href=\"{{ path('app_reservation_vol_admin_show', {'id': reservationvol.id}) }}\" class=\"btn btn-sm btn-info\">Show</a>
                        <a href=\"{{ path('app_reservation_vol_admin_edit', {'id': reservationvol.id}) }}\" class=\"btn btn-sm btn-info\">Edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchForm input[name=\"search\"]').on('input', function() {
            var searchTerm = \$(this).val().toLowerCase().trim();
            \$('#reservationTableBody tr').filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchTerm) > -1);
            });
        });
    });
</script>

<div>
    {{ knp_pagination_render(reservationvols) }} </div>

{% endblock %}
", "reservation_vol_admin/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_vol_admin\\index.html.twig");
    }
}
