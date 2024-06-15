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

/* hotel/index.html.twig */
class __TwigTemplate_cc880ab32dff38674adc2f7c49959b66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "hotel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/css/styles.min.css"), "html", null, true);
        echo "\" />
    <style>
        .container-fluid {
            margin-top: 64px;
        }
        .table-container {
            margin-top: 20px;
        }
        .card {
            margin-top: 20px;
            padding: 20px;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "<div class=\"container-fluid\">
    <div class=\"col-lg-4\">
        <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_index");
        echo "\" method=\"GET\" class=\"form-inline mb-3\">
            <div class=\"form-group mr-2\">
                <input type=\"text\" name=\"search\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Search by Hotel Name\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
        </form>
        <div style=\"text-align: right;\">
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_new");
        echo "\" class=\"btn btn-outline-secondary\" style=\"margin-top: 10px;\">Add New Hotel</a>
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_back");
        echo "\" class=\"btn btn-outline-secondary\" style=\"margin-top: 10px;\">les reservations</a>
       
            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_reservation_stat");
        echo "\" class=\"btn btn-outline-secondary\">Reservation  Hotel stat</a>
        </div>
    </div>
    <div class=\"row table-container\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 43
            echo "                        <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 44
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["noticedelete"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            echo "                        <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    <h5 class=\"card-title\"></h5>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>NomHotel</th>
                                <th>Lieu</th>
                                <th>TelHotel</th>
                                <th>Email</th>
                                <th>DiscHotel</th>
                                <th>EtatHotel</th>
                                <th>NbChambre</th>
                                <th>Actions</th>    
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 70
            echo "                                <tr>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 73)) {
                // line 74
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 74))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomHotel", [], "any", false, false, false, 74), "html", null, true);
                echo "\" class=\"img-thumbnail\" style=\"max-height: 50px;\">
                                        ";
            } else {
                // line 76
                echo "                                            No Image
                                        ";
            }
            // line 78
            echo "                                    </td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomHotel", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "lieu", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "telHotel", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "email", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "discHotel", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "etatHotel", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nbChambre", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\" style=\"margin-bottom: 10px;\">Show</a>
                                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 10px;\">Edit</a>
                                        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambre_index", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 10px;\">chambre</a>
                                    </td>
                                </tr>
                               
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "                                <tr>
                                    <td colspan=\"11\">No records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                        </tbody>
                                                    <div class=\"navigation.flex.justify-content.mb-8\">
                ";
        // line 100
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 100, $this->source); })()));
        echo "
             </div>    
                    </table>
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
        return "hotel/index.html.twig";
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
        return array (  285 => 100,  281 => 98,  272 => 94,  262 => 89,  258 => 88,  254 => 87,  249 => 85,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  225 => 79,  222 => 78,  218 => 76,  210 => 74,  208 => 73,  203 => 71,  200 => 70,  195 => 69,  176 => 52,  167 => 49,  164 => 48,  159 => 47,  150 => 44,  147 => 43,  143 => 42,  133 => 35,  128 => 33,  124 => 32,  116 => 27,  111 => 25,  107 => 23,  97 => 22,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets_admin/css/styles.min.css') }}\" />
    <style>
        .container-fluid {
            margin-top: 64px;
        }
        .table-container {
            margin-top: 20px;
        }
        .card {
            margin-top: 20px;
            padding: 20px;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
{% endblock %} 

{% block body %}
<div class=\"container-fluid\">
    <div class=\"col-lg-4\">
        <form action=\"{{ path('app_hotel_index') }}\" method=\"GET\" class=\"form-inline mb-3\">
            <div class=\"form-group mr-2\">
                <input type=\"text\" name=\"search\" value=\"{{ searchQuery }}\" placeholder=\"Search by Hotel Name\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
        </form>
        <div style=\"text-align: right;\">
            <a href=\"{{ path('app_hotel_new') }}\" class=\"btn btn-outline-secondary\" style=\"margin-top: 10px;\">Add New Hotel</a>
            <a href=\"{{ path('app_reservation_back') }}\" class=\"btn btn-outline-secondary\" style=\"margin-top: 10px;\">les reservations</a>
       
            <a href=\"{{ path('hotel_reservation_stat') }}\" class=\"btn btn-outline-secondary\">Reservation  Hotel stat</a>
        </div>
    </div>
    <div class=\"row table-container\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    {% for message in app.flashes('notice') %}
                        <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('noticedelete') %}
                        <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    <h5 class=\"card-title\"></h5>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>NomHotel</th>
                                <th>Lieu</th>
                                <th>TelHotel</th>
                                <th>Email</th>
                                <th>DiscHotel</th>
                                <th>EtatHotel</th>
                                <th>NbChambre</th>
                                <th>Actions</th>    
                            </tr>
                        </thead>
                        <tbody>
                            {% for hotel in hotels %}
                                <tr>
                                    <td>{{ hotel.id }}</td>
                                    <td>
                                        {% if hotel.image %}
                                            <img src=\"{{ asset('uploads/' ~ hotel.image) }}\" alt=\"{{ hotel.nomHotel }}\" class=\"img-thumbnail\" style=\"max-height: 50px;\">
                                        {% else %}
                                            No Image
                                        {% endif %}
                                    </td>
                                    <td>{{ hotel.nomHotel }}</td>
                                    <td>{{ hotel.lieu }}</td>
                                    <td>{{ hotel.telHotel }}</td>
                                    <td>{{ hotel.email }}</td>
                                    <td>{{ hotel.discHotel }}</td>
                                    <td>{{ hotel.etatHotel }}</td>
                                    <td>{{ hotel.nbChambre }}</td>
                                    <td>
                                        <a href=\"{{ path('app_hotel_show', {'id': hotel.id}) }}\" class=\"btn btn-sm btn-info\" style=\"margin-bottom: 10px;\">Show</a>
                                        <a href=\"{{ path('app_hotel_edit', {'id': hotel.id}) }}\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 10px;\">Edit</a>
                                        <a href=\"{{ path('app_chambre_index', {'id': hotel.id}) }}\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 10px;\">chambre</a>
                                    </td>
                                </tr>
                               
                            {% else %}
                                <tr>
                                    <td colspan=\"11\">No records found</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                                                    <div class=\"navigation.flex.justify-content.mb-8\">
                {{ knp_pagination_render(users) }}
             </div>    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "hotel/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\hotel\\index.html.twig");
    }
}
