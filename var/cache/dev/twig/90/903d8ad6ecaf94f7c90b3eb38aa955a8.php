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

/* reservation_hotel/backindex.html.twig */
class __TwigTemplate_2f68de274a8accb5bf2cd411b443aabe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/backindex.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/backindex.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "reservation_hotel/backindex.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
    <div class=\"col-lg-4\">
        <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_index");
        echo "\" method=\"GET\" class=\"form-inline mb-3\">
            <div class=\"form-group mr-2\">
               
        </form>
        <div style=\"text-align: right;\">
            

                    <h5 class=\"card-title\"></h5>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                                            <tr>
                                                <th>Hotel Name</th>
                                                <th>Id</th>
                                                <th>PrixTT</th>
                                                <th>DateArrive</th>
                                                <th>DateDepart</th>
                                                <th>Email</th>
                                                <th>Nom</th>
                                                <th>PreNom</th>
                                                <th>Destination</th>
                                                <th>Chambre</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_hotels"]) || array_key_exists("reservation_hotels", $context) ? $context["reservation_hotels"] : (function () { throw new RuntimeError('Variable "reservation_hotels" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_hotel"]) {
            // line 32
            echo "                                            <tr>
                                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "hotel", [], "any", false, false, false, 33), "nomHotel", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "PrixTT", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                                <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateArrive", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateArrive", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateDepart", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateDepart", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "preNom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "Distination", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "ChambrE", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_afficher", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-info\">show</a>
                                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_invoice", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Download Invoice PDF</a>
                                                   
                                                </td>
                                            </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "                                            <tr>
                                                <td colspan=\"10\">No records found</td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                        </tbody>
                                    </table>
                                     

                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

             
    </section>

    <style>
        .custom-table th,
        .custom-table td {
            color: white; /* Couleur du texte */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation_hotel/backindex.html.twig";
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
        return array (  172 => 54,  163 => 50,  153 => 45,  149 => 44,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  105 => 32,  100 => 31,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
    <div class=\"col-lg-4\">
        <form action=\"{{ path('app_hotel_index') }}\" method=\"GET\" class=\"form-inline mb-3\">
            <div class=\"form-group mr-2\">
               
        </form>
        <div style=\"text-align: right;\">
            

                    <h5 class=\"card-title\"></h5>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                                            <tr>
                                                <th>Hotel Name</th>
                                                <th>Id</th>
                                                <th>PrixTT</th>
                                                <th>DateArrive</th>
                                                <th>DateDepart</th>
                                                <th>Email</th>
                                                <th>Nom</th>
                                                <th>PreNom</th>
                                                <th>Destination</th>
                                                <th>Chambre</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for reservation_hotel in reservation_hotels %}
                                            <tr>
                                                <td>{{ reservation_hotel.hotel.nomHotel }}</td>
                                                <td>{{ reservation_hotel.id }}</td>
                                                <td>{{ reservation_hotel.PrixTT}}</td>
                                                <td>{{ reservation_hotel.dateArrive ? reservation_hotel.dateArrive|date('Y-m-d') : '' }}</td>
                                                <td>{{ reservation_hotel.dateDepart ? reservation_hotel.dateDepart|date('Y-m-d') : '' }}</td>
                                                <td>{{ reservation_hotel.email }}</td>
                                                <td>{{ reservation_hotel.nom }}</td>
                                                <td>{{ reservation_hotel.preNom }}</td>
                                                <td>{{ reservation_hotel.Distination }}</td>
                                                <td>{{ reservation_hotel.ChambrE }}</td>
                                                <td>
                                                    <a href=\"{{ path('app_reservation_afficher', {'id': reservation_hotel.id}) }}\" class=\"btn btn-sm btn-outline-info\">show</a>
                                                    <a href=\"{{ path('app_reservation_hotel_invoice', {'id': reservation_hotel.id}) }}\" class=\"btn btn-outline-primary\">Download Invoice PDF</a>
                                                   
                                                </td>
                                            </tr>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"10\">No records found</td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                     

                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

             
    </section>

    <style>
        .custom-table th,
        .custom-table td {
            color: white; /* Couleur du texte */
        }
    </style>
{% endblock %}
", "reservation_hotel/backindex.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_hotel\\backindex.html.twig");
    }
}
