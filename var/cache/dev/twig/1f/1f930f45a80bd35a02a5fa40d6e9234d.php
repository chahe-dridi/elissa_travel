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

/* event/EventFront.html.twig */
class __TwigTemplate_d262a27eeb3662d3967aace941912efc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "nav_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/EventFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/EventFront.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "event/EventFront.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <style>
        /* Style pour le formulaire de filtrage */
        #type_filter_form {
            margin-bottom: 20px;
            text-align: center; /* Centrage du formulaire */
        }

        #type_filter_form label {
            font-weight: bold;
            margin-right: 10px;
        }

        #type_filter_form select {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #type_filter_form button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px; /* Espacement entre les boutons */
        }

        #type_filter_form button:hover {
            background-color: #0056b3;
        }

        /* Style pour le bouton Back */
        .back-button-container {
            margin-top: 20px; /* Augmentation de la marge supérieure */
            text-align: center; /* Centrage du bouton */
        }

        .back-button {
            display: inline-block; /* Affichage en ligne pour centrer le bouton */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md\">
                <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Elissa Travel</h2>
                <p class=\"lead mb-5 probootstrap-animate\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!</p>
            </div>
            <div class=\"col-md probootstrap-animate\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <form action=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EventFront");
        echo "\" method=\"get\" id=\"type_filter_form\">
                            <div class=\"form-group mr-2\">
                                <label for=\"type_id\" class=\"mr-2\">Filtrer par type d'événement :</label>
                                <select name=\"type_id\" id=\"type_id\" class=\"form-control\">
                                    <option value=\"\">Tous les types</option>
                                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 68
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 68) == (isset($context["selectedTypeId"]) || array_key_exists("selectedTypeId", $context) ? $context["selectedTypeId"] : (function () { throw new RuntimeError('Variable "selectedTypeId" does not exist.', 68, $this->source); })()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "nomType", [], "any", false, false, false, 68), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>
                            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EventFront", ["sort_by_price" => "asc"]);
        echo "\" class=\"btn btn-primary\">Trier par prix croissant</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"min-sec\">
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-body\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 87
            echo "                    <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 88
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["noticedelete"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 92
            echo "                    <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 93
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    
                <div class=\"row justify-content-center\">
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 99
            echo "                        <div class=\"col-lg-4 col-md-6 col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"ser_110\">
                                        <div class=\"ser_110_thumb\">
                                            <a>
                                                <img src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "imageevent", [], "any", false, false, false, 105))), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"text-center\">
                                            <div class=\"event-details\">
                                                <strong>Event Name:</strong> ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "NomEvent", [], "any", false, false, false, 110), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>Adresse Event:</strong> ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "AdresseEvent", [], "any", false, false, false, 113), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>Date Debut Event:</strong> ";
            // line 116
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "datedebutEvent", [], "any", false, false, false, 116), "Y-m-d"), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>TypeEvenement:</strong> ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "TypeEvenement", [], "any", false, false, false, 119), "nomType", [], "any", false, false, false, 119), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>Nbr Tickets Dispo:</strong> ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nbrticketsdispo", [], "any", false, false, false, 122), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"event-details\">
                                                <i class=\"fa fa-bolt\"></i> From <strong class=\"theme-cl\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixentre", [], "any", false, false, false, 125), "html", null, true);
            echo " DT</strong>
                                            </div>
                                            <div class=\"mt-3\">
                                                ";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "nbrticketsdispo", [], "any", false, false, false, 128) > 0)) {
                // line 129
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Addreservation", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                echo "\" class=\"btn btn-outline-info\">
                                                        Addreservation
                                                    </a>
                                                ";
            } else {
                // line 133
                echo "                                                    <button class=\"btn btn-outline-info\" disabled>
                                                        Addreservation
                                                    </button>
                                                    <p class=\"text-danger mt-2\"></p>
                                                    <div class=\"alert alert-danger mt-2\" role=\"alert\">
                                                        Ticket non disponible
                                                    </div>
                                                ";
            }
            // line 141
            echo "                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>
                <!-- Pagination -->
                <div class=\"pagination justify-content-center\">
                    <ul class=\"pagination\">
                        ";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 153, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 153) != 1)) {
            // line 154
            echo "                            <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EventFront", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 154, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 154) - 1)]), "html", null, true);
            echo "\">Previous</a></li>
                        ";
        }
        // line 156
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 156, $this->source); })()), "pageCount", [], "any", false, false, false, 156)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 157
            echo "                            ";
            if (($context["page"] != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 157, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 157))) {
                // line 158
                echo "                                <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EventFront", ["page" => $context["page"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
                            ";
            } else {
                // line 160
                echo "                                <li class=\"page-item active\"><span class=\"page-link\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span></li>
                            ";
            }
            // line 162
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 163, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 163) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 163, $this->source); })()), "pageCount", [], "any", false, false, false, 163))) {
            // line 164
            echo "                            <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EventFront", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 164, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 164) + 1)]), "html", null, true);
            echo "\">Next</a></li>
                        ";
        }
        // line 166
        echo "                    </ul>
                </div>
                <!-- Fin Pagination -->
            </div>
        </div>
        <div class=\"back-button-container\">
            <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EventFront");
        echo "\" class=\"btn btn-secondary back-button\">Back</a>
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
        return "event/EventFront.html.twig";
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
        return array (  379 => 172,  371 => 166,  365 => 164,  362 => 163,  356 => 162,  350 => 160,  342 => 158,  339 => 157,  334 => 156,  328 => 154,  326 => 153,  320 => 149,  307 => 141,  297 => 133,  289 => 129,  287 => 128,  281 => 125,  275 => 122,  269 => 119,  263 => 116,  257 => 113,  251 => 110,  243 => 105,  235 => 99,  231 => 98,  227 => 96,  218 => 93,  215 => 92,  210 => 91,  201 => 88,  198 => 87,  194 => 86,  178 => 73,  173 => 70,  158 => 68,  154 => 67,  146 => 62,  131 => 51,  121 => 50,  69 => 6,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/event/EventFront.html.twig #}

{% extends 'nav_user.html.twig' %}

{% block stylesheets %}
    <style>
        /* Style pour le formulaire de filtrage */
        #type_filter_form {
            margin-bottom: 20px;
            text-align: center; /* Centrage du formulaire */
        }

        #type_filter_form label {
            font-weight: bold;
            margin-right: 10px;
        }

        #type_filter_form select {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #type_filter_form button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px; /* Espacement entre les boutons */
        }

        #type_filter_form button:hover {
            background-color: #0056b3;
        }

        /* Style pour le bouton Back */
        .back-button-container {
            margin-top: 20px; /* Augmentation de la marge supérieure */
            text-align: center; /* Centrage du bouton */
        }

        .back-button {
            display: inline-block; /* Affichage en ligne pour centrer le bouton */
        }
    </style>
{% endblock %}

{% block body %}
<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md\">
                <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Elissa Travel</h2>
                <p class=\"lead mb-5 probootstrap-animate\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!</p>
            </div>
            <div class=\"col-md probootstrap-animate\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <form action=\"{{ path('EventFront') }}\" method=\"get\" id=\"type_filter_form\">
                            <div class=\"form-group mr-2\">
                                <label for=\"type_id\" class=\"mr-2\">Filtrer par type d'événement :</label>
                                <select name=\"type_id\" id=\"type_id\" class=\"form-control\">
                                    <option value=\"\">Tous les types</option>
                                    {% for type in types %}
                                        <option value=\"{{ type.id }}\" {% if type.id == selectedTypeId %}selected{% endif %}>{{ type.nomType }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>
                            <a href=\"{{ path('EventFront', {'sort_by_price': 'asc'}) }}\" class=\"btn btn-primary\">Trier par prix croissant</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"min-sec\">
    <div class=\"container\">
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
                    
                <div class=\"row justify-content-center\">
                    {% for p in pagination %}
                        <div class=\"col-lg-4 col-md-6 col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"ser_110\">
                                        <div class=\"ser_110_thumb\">
                                            <a>
                                                <img src=\"{{ asset('uploads/' ~ p.imageevent) }}\" class=\"img-fluid\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"text-center\">
                                            <div class=\"event-details\">
                                                <strong>Event Name:</strong> {{ p.NomEvent }}
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>Adresse Event:</strong> {{ p.AdresseEvent }}
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>Date Debut Event:</strong> {{ p.datedebutEvent|date('Y-m-d') }}
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>TypeEvenement:</strong> {{ p.TypeEvenement.nomType }}
                                            </div>
                                            <div class=\"event-details\">
                                                <strong>Nbr Tickets Dispo:</strong> {{ p.nbrticketsdispo }}
                                            </div>
                                            <div class=\"event-details\">
                                                <i class=\"fa fa-bolt\"></i> From <strong class=\"theme-cl\">{{ p.prixentre }} DT</strong>
                                            </div>
                                            <div class=\"mt-3\">
                                                {% if p.nbrticketsdispo > 0 %}
                                                    <a href=\"{{ path('Addreservation', {'id': p.id}) }}\" class=\"btn btn-outline-info\">
                                                        Addreservation
                                                    </a>
                                                {% else %}
                                                    <button class=\"btn btn-outline-info\" disabled>
                                                        Addreservation
                                                    </button>
                                                    <p class=\"text-danger mt-2\"></p>
                                                    <div class=\"alert alert-danger mt-2\" role=\"alert\">
                                                        Ticket non disponible
                                                    </div>
                                                {% endif %}
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <!-- Pagination -->
                <div class=\"pagination justify-content-center\">
                    <ul class=\"pagination\">
                        {% if pagination.currentPageNumber != 1 %}
                            <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('EventFront', {'page': pagination.currentPageNumber - 1}) }}\">Previous</a></li>
                        {% endif %}
                        {% for page in range(1, pagination.pageCount) %}
                            {% if page != pagination.currentPageNumber %}
                                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('EventFront', {'page': page}) }}\">{{ page }}</a></li>
                            {% else %}
                                <li class=\"page-item active\"><span class=\"page-link\">{{ page }}</span></li>
                            {% endif %}
                        {% endfor %}
                        {% if pagination.currentPageNumber != pagination.pageCount %}
                            <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('EventFront', {'page': pagination.currentPageNumber + 1}) }}\">Next</a></li>
                        {% endif %}
                    </ul>
                </div>
                <!-- Fin Pagination -->
            </div>
        </div>
        <div class=\"back-button-container\">
            <a href=\"{{ path('EventFront') }}\" class=\"btn btn-secondary back-button\">Back</a>
        </div>
    </div>
</section>
{% endblock %}
", "event/EventFront.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\event\\EventFront.html.twig");
    }
}
