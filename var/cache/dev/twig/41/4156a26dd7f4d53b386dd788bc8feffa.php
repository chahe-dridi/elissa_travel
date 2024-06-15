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

/* chambre/index.html.twig */
class __TwigTemplate_a15816406b8b243b02fb3c779fd591a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "chambre/index.html.twig", 1);
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
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/css/styles.min.css"), "html", null, true);
        echo "\" />
<style>
.container-fluid {
    margin-top: 64px;
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: 1px solid #007bff;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <h1>Chambre index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                 <th>nomHotel</th>
                <th>TypeChambre</th>
                <th>VueHotel</th>
                <th>TypeLogHotel</th>
                <th>PrixHotel</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context["idd"] = null;
        // line 44
        echo "
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 46
            echo "            <tr>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>

                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chambre"], "hotel", [], "any", false, false, false, 49), "nomHotel", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "typeChambre", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "vueHotel", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "typeLogHotel", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "prixHotel", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambre_show", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Show</a>
                    <a class=\"btn\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambre_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Edit</a>


                  ";
            // line 60
            $context["idd"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chambre"], "hotel", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60);
            // line 61
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"6\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>
    <a class=\"btn\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambre_new", ["id" => (isset($context["idd"]) || array_key_exists("idd", $context) ? $context["idd"] : (function () { throw new RuntimeError('Variable "idd" does not exist.', 71, $this->source); })())]), "html", null, true);
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "chambre/index.html.twig";
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
        return array (  202 => 71,  198 => 69,  189 => 65,  181 => 61,  179 => 60,  173 => 57,  169 => 56,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  147 => 49,  142 => 47,  139 => 46,  134 => 45,  131 => 44,  129 => 43,  112 => 28,  102 => 27,  69 => 4,  59 => 3,  36 => 1,);
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

.btn {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: 1px solid #007bff;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}
</style>
{% endblock %} 

{% block body %}
    <h1>Chambre index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                 <th>nomHotel</th>
                <th>TypeChambre</th>
                <th>VueHotel</th>
                <th>TypeLogHotel</th>
                <th>PrixHotel</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% set idd = null %}

        {% for chambre in chambres %}
            <tr>
                <td>{{ chambre.id }}</td>

                <td>{{ chambre.hotel.nomHotel }}</td>
                
                <td>{{ chambre.typeChambre }}</td>
                <td>{{ chambre.vueHotel }}</td>
                <td>{{ chambre.typeLogHotel }}</td>
                <td>{{ chambre.prixHotel }}</td>
                <td>
                    <a class=\"btn\" href=\"{{ path('app_chambre_show', {'id': chambre.id}) }}\">Show</a>
                    <a class=\"btn\" href=\"{{ path('app_chambre_edit', {'id': chambre.id}) }}\">Edit</a>


                  {% set idd = chambre.hotel.id %}

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a class=\"btn\" href=\"{{ path('app_chambre_new', {'id': idd}) }}\">Create new</a>
{% endblock %}
", "chambre/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\chambre\\index.html.twig");
    }
}
