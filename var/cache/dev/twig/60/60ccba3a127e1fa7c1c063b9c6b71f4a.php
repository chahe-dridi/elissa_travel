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

/* reservationEvent/afficher.html.twig */
class __TwigTemplate_aa7d6c7241fe28e65f27aec1498bd102 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationEvent/afficher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationEvent/afficher.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "reservationEvent/afficher.html.twig", 1);
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

        echo "Liste des Réservations";
        
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
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Liste des Réservations</h1>
        
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <!-- Default Table -->
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th scope=\"col\"> Event</th>
                                    <th scope=\"col\">User Name</th>
                                    <th scope=\"col\">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listS"]) || array_key_exists("listS", $context) ? $context["listS"] : (function () { throw new RuntimeError('Variable "listS" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "                                <tr>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "Event", [], "any", false, false, false, 32), "NomEvent", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 34
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["p"], "User", [], "any", false, false, false, 34))) {
                // line 35
                echo "                                            ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "User", [], "any", false, false, false, 35), "firstName", [], "any", false, false, false, 35) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "User", [], "any", false, false, false, 35), "lastName", [], "any", false, false, false, 35)), "html", null, true);
                echo "
                                        ";
            } else {
                // line 37
                echo "                                            Utilisateur non défini
                                        ";
            }
            // line 39
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletereservationEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">Supprimer</a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                    <div class=\"text-right mt-3\"> <!-- Alignement à droite -->
                        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_pdf", ["id" => 1]);
        echo "\" class=\"btn btn-sm btn-primary\">Télécharger en PDF</a><!-- Bouton de téléchargement PDF en haut -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationEvent/afficher.html.twig";
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
        return array (  159 => 50,  152 => 45,  142 => 41,  138 => 39,  134 => 37,  128 => 35,  126 => 34,  121 => 32,  118 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Liste des Réservations{% endblock %}

{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Liste des Réservations</h1>
        
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <!-- Default Table -->
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th scope=\"col\"> Event</th>
                                    <th scope=\"col\">User Name</th>
                                    <th scope=\"col\">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for p in listS %}
                                <tr>
                                    <td>{{ p.Event.NomEvent }}</td>
                                    <td>
                                        {% if p.User is not null %}
                                            {{ p.User.firstName ~ ' ' ~ p.User.lastName }}
                                        {% else %}
                                            Utilisateur non défini
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('deletereservationEvent', {'id': p.id}) }}\" class=\"btn btn-outline-danger\">Supprimer</a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                    <div class=\"text-right mt-3\"> <!-- Alignement à droite -->
                        <a href=\"{{ path('generate_pdf', {'id': 1}) }}\" class=\"btn btn-sm btn-primary\">Télécharger en PDF</a><!-- Bouton de téléchargement PDF en haut -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

{% endblock %}
", "reservationEvent/afficher.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservationEvent\\afficher.html.twig");
    }
}
