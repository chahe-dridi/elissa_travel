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

/* event/afficherEvent.html.twig */
class __TwigTemplate_82dd7b733c572c1d5492f15cf75af548 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/afficherEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/afficherEvent.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "event/afficherEvent.html.twig", 1);
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

        echo "Hello Eventontroller!";
        
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
            <h1>Les Evenements</h1>
            <nav>


            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">


                        <div class=\"card-body\">

                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                                <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["noticedelete"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "                                <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                    ";
            // line 36
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            <h5 class=\"card-title\"></h5>
                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <!-- Button for statistics -->
                                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_event_stats_by_type");
        echo "\" class=\"btn btn-outline-primary\">
                                    Statistiques
                                </a>
                                <!-- End Button for statistics -->
                                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterEvent");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-outline-info\">Ajouter</button>
                                </a>
                                
                            </div>



                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\"> NomEvent</th>
                                    <th scope=\"col\">AdresseEvent </th>
                                    <th scope=\"col\">nbrticketsdispo </th>
                                    <th scope=\"col\">datedebutEvent </th>
                                    <th scope=\"col\">datefinevent </th>
                                    <th scope=\"col\">prixentre </th>
                                    <th scope=\"col\">imageevent </th>
                                    <th scope=\"col\">TypeEvenement </th>


                                    <th scope=\"col\">Modifier</th>
                                    <th scope=\"col\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        ";
        // line 76
        if ((twig_length_filter($this->env, (isset($context["listS"]) || array_key_exists("listS", $context) ? $context["listS"] : (function () { throw new RuntimeError('Variable "listS" does not exist.', 76, $this->source); })())) == 0)) {
            // line 77
            echo "
                                            <p style=\"text-align: center\">Evenements vide</p>

                                        ";
        }
        // line 81
        echo "
                                    </td>
                                </tr>



                                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listS"]) || array_key_exists("listS", $context) ? $context["listS"] : (function () { throw new RuntimeError('Variable "listS" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 88
            echo "


                                    <tr>

                                        <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "NomEvent", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                                      <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "AdresseEvent", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                                      <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nbrticketsdispo", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                                    <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "datedebutEvent", [], "any", false, false, false, 96), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                     <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "datefinevent", [], "any", false, false, false, 97), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

                                      <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixentre", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                                      <td><img  style=\"width: 75px; height: 55px; padding: 5px;\" src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "imageevent", [], "any", false, false, false, 100))), "html", null, true);
            echo "\"/></td>

                                      <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "TypeEvenement", [], "any", false, false, false, 102), "nomType", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>

                                        


                                     <td>
                                        <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\" class=\"btn btn-outline-info\">
                                            Modifier
                                        </a>
                                    </td>

                                    <td>
                                        <a href=\"javascript:void(0)\" onclick=\"if(confirm('Voulez-vous vraiment supprimer ?')){window.location='";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppressionEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "';}\" class=\"btn btn-outline-danger\">
                                            Supprimer
                                        </a>
                                    </td>

                                    </a>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

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
        return "event/afficherEvent.html.twig";
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
        return array (  282 => 123,  267 => 114,  258 => 108,  249 => 102,  244 => 100,  240 => 99,  235 => 97,  231 => 96,  227 => 95,  223 => 94,  219 => 93,  212 => 88,  208 => 87,  200 => 81,  194 => 77,  192 => 76,  160 => 47,  153 => 43,  148 => 40,  138 => 36,  135 => 35,  131 => 34,  127 => 32,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Hello Eventontroller!{% endblock %}

{% block body %}

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Les Evenements</h1>
            <nav>


            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
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
                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <!-- Button for statistics -->
                                <a href=\"{{ path('api_event_stats_by_type') }}\" class=\"btn btn-outline-primary\">
                                    Statistiques
                                </a>
                                <!-- End Button for statistics -->
                                <a href=\"{{ path('ajouterEvent') }}\">
                                    <button type=\"button\" class=\"btn btn-outline-info\">Ajouter</button>
                                </a>
                                
                            </div>



                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\"> NomEvent</th>
                                    <th scope=\"col\">AdresseEvent </th>
                                    <th scope=\"col\">nbrticketsdispo </th>
                                    <th scope=\"col\">datedebutEvent </th>
                                    <th scope=\"col\">datefinevent </th>
                                    <th scope=\"col\">prixentre </th>
                                    <th scope=\"col\">imageevent </th>
                                    <th scope=\"col\">TypeEvenement </th>


                                    <th scope=\"col\">Modifier</th>
                                    <th scope=\"col\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        {% if listS | length == 0 %}

                                            <p style=\"text-align: center\">Evenements vide</p>

                                        {% endif %}

                                    </td>
                                </tr>



                                {% for p in listS  %}



                                    <tr>

                                        <td>{{p.NomEvent}}</td>
                                      <td>{{p.AdresseEvent}}</td>
                                      <td>{{p.nbrticketsdispo}}</td>
                                    <td>{{ p.datedebutEvent | date('Y-m-d H:i:s') }}</td>
                                     <td>{{ p.datefinevent | date('Y-m-d H:i:s') }}</td>

                                      <td>{{p.prixentre}}</td>
                                      <td><img  style=\"width: 75px; height: 55px; padding: 5px;\" src=\"{{ asset('uploads/'~p.imageevent) }}\"/></td>

                                      <td>{{p.TypeEvenement.nomType}}</td>

                                        


                                     <td>
                                        <a href=\"{{ path('modifierEvenement', {'id': p.id}) }}\" class=\"btn btn-outline-info\">
                                            Modifier
                                        </a>
                                    </td>

                                    <td>
                                        <a href=\"javascript:void(0)\" onclick=\"if(confirm('Voulez-vous vraiment supprimer ?')){window.location='{{ path('suppressionEvent', {'id': p.id}) }}';}\" class=\"btn btn-outline-danger\">
                                            Supprimer
                                        </a>
                                    </td>

                                    </a>
                                    </tr>

                                {% endfor %}


                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>


{% endblock %}
", "event/afficherEvent.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\event\\afficherEvent.html.twig");
    }
}
