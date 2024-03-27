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

/* reservationvol/show.html.twig */
class __TwigTemplate_f4a736aff024f514e9eecb7b14b3f41c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationvol/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationvol/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "reservationvol/show.html.twig", 1);
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
        echo "<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
  
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-128\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Reservation Flights</h5>
                        <hr>

                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Total Price</th>
                                    <th>Payment Method</th>
                                    <th>Description</th>
                                    <th>Class Name</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Departure Airport</th>
                                    <th>Arrival Airport</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationvols"]) || array_key_exists("reservationvols", $context) ? $context["reservationvols"] : (function () { throw new RuntimeError('Variable "reservationvols" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservationvol"]) {
            // line 33
            echo "                                <tr>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getTotalPrice", [], "method", false, false, false, 34), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getPaymentMethod", [], "method", false, false, false, 35), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 36), "getVolclass", [], "method", false, false, false, 36), "getDescription", [], "method", false, false, false, 36), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 37), "getVolclass", [], "method", false, false, false, 37), "getClassName", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 38), "getHeureDepart", [], "method", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 39), "getHeureArrive", [], "method", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 40), "getairportDepart", [], "method", false, false, false, 40), "getName", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 41), "getairportarrive", [], "method", false, false, false, 41), "getName", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 42), "getairportDepart", [], "method", false, false, false, 42), "getCity", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationvol"], "getVol", [], "method", false, false, false, 43), "getairportDepart", [], "method", false, false, false, 43), "getCountry", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvol_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservationvol"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a></td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationvol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </tbody>
                        </table>

                        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvol_index");
        echo "\" class=\"btn btn-primary mt-3\">Back to Flights</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


















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
        // line 129
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservationvols"]) || array_key_exists("reservationvols", $context) ? $context["reservationvols"] : (function () { throw new RuntimeError('Variable "reservationvols" does not exist.', 129, $this->source); })()));
        echo " </div>


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
        return "reservationvol/show.html.twig";
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
        return array (  243 => 129,  161 => 50,  156 => 47,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  104 => 33,  100 => 32,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_user.html.twig' %}

{% block body %}
<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
  
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-128\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Reservation Flights</h5>
                        <hr>

                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Total Price</th>
                                    <th>Payment Method</th>
                                    <th>Description</th>
                                    <th>Class Name</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Departure Airport</th>
                                    <th>Arrival Airport</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for reservationvol in reservationvols %}
                                <tr>
                                    <td>{{ reservationvol.getTotalPrice() }}</td>
                                    <td>{{ reservationvol.getPaymentMethod() }}</td>
                                    <td>{{ reservationvol.getVol().getVolclass().getDescription() }}</td>
                                    <td>{{ reservationvol.getVol().getVolclass().getClassName() }}</td>
                                    <td>{{ reservationvol.getVol().getHeureDepart()|date('Y-m-d H:i:s') }}</td>
                                    <td>{{ reservationvol.getVol().getHeureArrive()|date('Y-m-d H:i:s') }}</td>
                                    <td>{{ reservationvol.getVol().getairportDepart().getName() }}</td>
                                    <td>{{ reservationvol.getVol().getairportarrive().getName() }}</td>
                                    <td>{{ reservationvol.getVol().getairportDepart().getCity() }}</td>
                                    <td>{{ reservationvol.getVol().getairportDepart().getCountry() }}</td>
                                    <td><a href=\"{{ path('app_reservationvol_edit', {'id': reservationvol.id}) }}\" class=\"btn btn-primary\">Edit</a></td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        <a href=\"{{ path('app_reservationvol_index') }}\" class=\"btn btn-primary mt-3\">Back to Flights</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


















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
    {{ knp_pagination_render(reservationvols) }} </div>


</div>








{% endblock %}
", "reservationvol/show.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\reservationvol\\show.html.twig");
    }
}
