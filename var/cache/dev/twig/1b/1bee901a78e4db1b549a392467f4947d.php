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

/* reservation_hotel/index.html.twig */
class __TwigTemplate_91a2a752e659d08e6ca090e569eb56ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "reservation_hotel/index.html.twig", 1);
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
        echo "    <section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md\">
                    <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\" style=\"color: white;\">Explore The World With Elissa Travel</h2>
                    <p class=\"lead mb-5 probootstrap-animate\" style=\"color: white;\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!</p>
                </div>
                <div class=\"col-md probootstrap-animate\">
                    <div class=\"container-fluid\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-12\">
                                <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_index");
        echo "\" method=\"GET\">
                                     <div class=\"input-group mb-3\">
                                         <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by NomHotel\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", ["search"], "method", false, false, false, 18), "html", null, true);
        echo "\">
                                         <div class=\"input-group-append\">
                                            <button class=\"btn btn-outline-secondary\" type=\"submit\">Search</button>
                                         </div>
                                     </div>
                                 </form>
                                <div class=\"text-right mb-3\"></div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-bordered custom-table\">
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_hotels"]) || array_key_exists("reservation_hotels", $context) ? $context["reservation_hotels"] : (function () { throw new RuntimeError('Variable "reservation_hotels" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_hotel"]) {
            // line 44
            echo "                                            <tr>
                                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "hotel", [], "any", false, false, false, 45), "nomHotel", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "PrixTT", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                                <td>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateArrive", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateArrive", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateDepart", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "dateDepart", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "email", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "preNom", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "Distination", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "ChambrE", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-info\">Show</a>
                                                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                                      ";
            // line 58
            echo twig_include($this->env, $context, "reservation_hotel/_delete_form.html.twig");
            echo "
                                                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_invoice", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Download Invoice PDF</a>
                                                    
                                                 <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_calendar", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_hotel"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">resercalendar</a>

                                                </td>
                                            </tr>
                                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                                            <tr>
                                                <td colspan=\"10\">No records found</td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                        </tbody>
                                    </table>
                                     
                                     <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_index_front");
        echo "\" role=\"button\" class=\"btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3\">Liste des HOTELS</a>
                                     
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
        return "reservation_hotel/index.html.twig";
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
        return array (  228 => 73,  223 => 70,  214 => 66,  196 => 61,  191 => 59,  187 => 58,  183 => 57,  179 => 56,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  135 => 44,  117 => 43,  89 => 18,  84 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_user.html.twig' %}

{% block body %}
    <section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md\">
                    <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\" style=\"color: white;\">Explore The World With Elissa Travel</h2>
                    <p class=\"lead mb-5 probootstrap-animate\" style=\"color: white;\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!</p>
                </div>
                <div class=\"col-md probootstrap-animate\">
                    <div class=\"container-fluid\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-12\">
                                <form action=\"{{ path('app_reservation_hotel_index') }}\" method=\"GET\">
                                     <div class=\"input-group mb-3\">
                                         <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by NomHotel\" value=\"{{ app.request.query.get('search') }}\">
                                         <div class=\"input-group-append\">
                                            <button class=\"btn btn-outline-secondary\" type=\"submit\">Search</button>
                                         </div>
                                     </div>
                                 </form>
                                <div class=\"text-right mb-3\"></div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-bordered custom-table\">
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
                                                    <a href=\"{{ path('app_reservation_hotel_show', {'id': reservation_hotel.id}) }}\" class=\"btn btn-sm btn-outline-info\">Show</a>
                                                    <a href=\"{{ path('app_reservation_hotel_edit', {'id': reservation_hotel.id}) }}\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
                                                      {{ include('reservation_hotel/_delete_form.html.twig') }}
                                                    <a href=\"{{ path('app_reservation_hotel_invoice', {'id': reservation_hotel.id}) }}\" class=\"btn btn-outline-primary\">Download Invoice PDF</a>
                                                    
                                                 <a href=\"{{ path('app_reservation_hotel_calendar', {'id': reservation_hotel.id}) }}\" class=\"btn btn-outline-primary\">resercalendar</a>

                                                </td>
                                            </tr>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"10\">No records found</td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                     
                                     <a href=\"{{path('app_hotel_index_front')}}\" role=\"button\" class=\"btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3\">Liste des HOTELS</a>
                                     
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
", "reservation_hotel/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_hotel\\index.html.twig");
    }
}
