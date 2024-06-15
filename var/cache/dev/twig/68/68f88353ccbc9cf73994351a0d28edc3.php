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

/* volclass/index.html.twig */
class __TwigTemplate_8296c095665205914070817403691df2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "volclass/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "volclass/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "volclass/index.html.twig", 1);
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
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_index");
        echo "\" class=\"btn btn-primary\">Airports</a>
            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_index");
        echo "\" class=\"btn btn-primary mr-2\">Flights</a>
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_index");
        echo "\" class=\"btn btn-primary mr-2\">Flight Classes</a>
            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_index");
        echo "\" class=\"btn btn-primary mr-2\">Flight Reservation</a>
        </div>

        <form id=\"searchForm\" action=\"#\" method=\"GET\" style=\"margin-bottom: 20px;\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by Class Name\">
            </div>
        </form>

        <div>
            <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_new");
        echo "\" class=\"btn btn-outline-secondary\">Add New Flight Class</a>
        </div>
    </div>
    <div class=\"col-lg-8\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Admin</th>
                    <th>Class Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Ticket Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"flightClassTableBody\">
                ";
        // line 83
        if ((twig_length_filter($this->env, (isset($context["volclasses"]) || array_key_exists("volclasses", $context) ? $context["volclasses"] : (function () { throw new RuntimeError('Variable "volclasses" does not exist.', 83, $this->source); })())) > 0)) {
            // line 84
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["volclasses"]) || array_key_exists("volclasses", $context) ? $context["volclasses"] : (function () { throw new RuntimeError('Variable "volclasses" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["volclass"]) {
                // line 85
                echo "                        <tr class=\"volclass-row\">
                            <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volclass"], "id", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["volclass"], "user", [], "any", false, false, false, 87), "firstName", [], "any", false, false, false, 87), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["volclass"], "user", [], "any", false, false, false, 87), "lastName", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
                            <td class=\"class-name\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volclass"], "className", [], "any", false, false, false, 88), "html", null, true);
                echo "</td>
                            <td class=\"class-description\">";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volclass"], "description", [], "any", false, false, false, 89), "html", null, true);
                echo "</td>
                            <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volclass"], "price", [], "any", false, false, false, 90), "html", null, true);
                echo " \$</td>
                            <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volclass"], "ticketNumber", [], "any", false, false, false, 91), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_show", ["id" => twig_get_attribute($this->env, $this->source, $context["volclass"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">Show</a>
                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["volclass"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">Edit</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['volclass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                ";
        } else {
            // line 99
            echo "                    <tr>
                        <td colspan=\"7\">No records found</td>
                    </tr>
                ";
        }
        // line 103
        echo "            </tbody>
        </table>
    </div>
    
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchForm input[name=\"search\"]').on('input', function() {
            var searchTerm = \$(this).val().toLowerCase().trim();
            \$('#flightClassTableBody tr').filter(function() {
                \$(this).toggle(\$(this).find('.class-name').text().toLowerCase().indexOf(searchTerm) > -1);
            });
        });
    });
</script>
<div>
    ";
        // line 121
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["volclasses"]) || array_key_exists("volclasses", $context) ? $context["volclasses"] : (function () { throw new RuntimeError('Variable "volclasses" does not exist.', 121, $this->source); })()));
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
        return "volclass/index.html.twig";
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
        return array (  244 => 121,  224 => 103,  218 => 99,  215 => 98,  205 => 94,  201 => 93,  196 => 91,  192 => 90,  188 => 89,  184 => 88,  178 => 87,  174 => 86,  171 => 85,  166 => 84,  164 => 83,  144 => 66,  131 => 56,  127 => 55,  123 => 54,  119 => 53,  68 => 4,  58 => 3,  35 => 1,);
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
        </div>

        <form id=\"searchForm\" action=\"#\" method=\"GET\" style=\"margin-bottom: 20px;\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by Class Name\">
            </div>
        </form>

        <div>
            <a href=\"{{ path('app_volclass_new') }}\" class=\"btn btn-outline-secondary\">Add New Flight Class</a>
        </div>
    </div>
    <div class=\"col-lg-8\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Admin</th>
                    <th>Class Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Ticket Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"flightClassTableBody\">
                {% if volclasses|length > 0 %}
                    {% for volclass in volclasses %}
                        <tr class=\"volclass-row\">
                            <td>{{ volclass.id }}</td>
                            <td>{{ volclass.user.firstName }} {{ volclass.user.lastName }}</td>
                            <td class=\"class-name\">{{ volclass.className }}</td>
                            <td class=\"class-description\">{{ volclass.description }}</td>
                            <td>{{ volclass.price }} \$</td>
                            <td>{{ volclass.ticketNumber }}</td>
                            <td>
                                <a href=\"{{ path('app_volclass_show', {'id': volclass.id}) }}\" class=\"btn btn-sm btn-info\">Show</a>
                                <a href=\"{{ path('app_volclass_edit', {'id': volclass.id}) }}\" class=\"btn btn-sm btn-info\">Edit</a>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr>
                        <td colspan=\"7\">No records found</td>
                    </tr>
                {% endif %}
            </tbody>
        </table>
    </div>
    
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchForm input[name=\"search\"]').on('input', function() {
            var searchTerm = \$(this).val().toLowerCase().trim();
            \$('#flightClassTableBody tr').filter(function() {
                \$(this).toggle(\$(this).find('.class-name').text().toLowerCase().indexOf(searchTerm) > -1);
            });
        });
    });
</script>
<div>
    {{ knp_pagination_render(volclasses) }} </div>
{% endblock %}
", "volclass/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\volclass\\index.html.twig");
    }
}
