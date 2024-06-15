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

/* fronthotel.html.twig */
class __TwigTemplate_d0a609dedb1b479dc34bbb2ba25c35a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronthotel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronthotel.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "fronthotel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
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
                  
                                </div>
                            </form>
                            <div class=\"text-right mb-3\"></div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-transparent text-white\"> <!-- Ajout de la classe text-white -->
                                    <thead class=\"thead-dark\">
                                    <a class=\"btn btn-secondary\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_index");
        echo "\">MES RESERVATIONS</a>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom Hotel</th>
                                            <th style=\"width: 40%;\">Description</th> <!-- Augmenter la largeur -->
                                            <th>Location</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 35
            echo "                                        <tr>
                                            
                                            <td>
                                                ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 38)) {
                // line 39
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 39))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomHotel", [], "any", false, false, false, 39), "html", null, true);
                echo "\" class=\"img-thumbnail\" style=\"max-height: 300px; max-width: 300px;\"> <!-- Ajuster la taille de l'image -->
                                                ";
            } else {
                // line 41
                echo "                                                No Image
                                                ";
            }
            // line 43
            echo "                                            </td>
                                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "nomHotel", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "discHotel", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "lieu", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "telHotel", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "etatHotel", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_new", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info mr-2\">Réserver</a>
                                            </td>
                                        </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                                        <tr>
                                            <td colspan=\"9\">Pas d'enregistrements trouvés</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                    </tbody>
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
.table-transparent th,
.table-transparent td {
    border-color: transparent !important;
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
        return "fronthotel.html.twig";
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
        return array (  176 => 59,  167 => 55,  158 => 51,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  130 => 43,  126 => 41,  118 => 39,  116 => 38,  111 => 35,  106 => 34,  90 => 21,  68 => 3,  58 => 2,  35 => 1,);
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
                <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Elissa Travel</h2>
                <p class=\"lead mb-5 probootstrap-animate\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!</p>
            </div>
            <div class=\"col-md probootstrap-animate\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                  
                                </div>
                            </form>
                            <div class=\"text-right mb-3\"></div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-transparent text-white\"> <!-- Ajout de la classe text-white -->
                                    <thead class=\"thead-dark\">
                                    <a class=\"btn btn-secondary\" href=\"{{ path('app_reservation_hotel_index') }}\">MES RESERVATIONS</a>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom Hotel</th>
                                            <th style=\"width: 40%;\">Description</th> <!-- Augmenter la largeur -->
                                            <th>Location</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for hotel in hotels %}
                                        <tr>
                                            
                                            <td>
                                                {% if hotel.image %}
                                                <img src=\"{{ asset('uploads/' ~ hotel.image) }}\" alt=\"{{ hotel.nomHotel }}\" class=\"img-thumbnail\" style=\"max-height: 300px; max-width: 300px;\"> <!-- Ajuster la taille de l'image -->
                                                {% else %}
                                                No Image
                                                {% endif %}
                                            </td>
                                            <td>{{ hotel.nomHotel }}</td>
                                            <td>{{ hotel.discHotel }}</td>
                                            <td>{{ hotel.lieu }}</td>
                                            <td>{{ hotel.email }}</td>
                                            <td>{{ hotel.telHotel }}</td>
                                            <td>{{ hotel.etatHotel }}</td>
                                            <td>
                                                <a href=\"{{ path('app_reservation_hotel_new', {'id': hotel.id}) }}\" class=\"btn btn-sm btn-info mr-2\">Réserver</a>
                                            </td>
                                        </tr>
                                        {% else %}
                                        <tr>
                                            <td colspan=\"9\">Pas d'enregistrements trouvés</td>
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
.table-transparent th,
.table-transparent td {
    border-color: transparent !important;
}
</style>
{% endblock %}
", "fronthotel.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\fronthotel.html.twig");
    }
}
