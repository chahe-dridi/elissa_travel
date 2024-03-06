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

/* volclass/show.html.twig */
class __TwigTemplate_e8629143be2cf1c74566e791285472a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "volclass/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "volclass/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "volclass/show.html.twig", 1);
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
        echo "<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

<div class=\"container\">
    <h1 style=\"text-align: center; margin-bottom: 20px;\">Flight</h1>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">ID:</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Admin:</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Class Name:</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 22, $this->source); })()), "className", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Description:</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Price:</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 30, $this->source); })()), "price", [], "any", false, false, false, 30), "html", null, true);
        echo " \$</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Ticket Number:</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 34, $this->source); })()), "ticketNumber", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["volclass"]) || array_key_exists("volclass", $context) ? $context["volclass"] : (function () { throw new RuntimeError('Variable "volclass" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_volclass_index");
        echo "\" class=\"btn btn-secondary\">Back to List</a>
                ";
        // line 41
        echo twig_include($this->env, $context, "volclass/_delete_form.html.twig");
        echo "
            </div>
        </div>
    </div>
</div>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "volclass/show.html.twig";
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
        return array (  133 => 41,  129 => 40,  125 => 39,  117 => 34,  110 => 30,  103 => 26,  96 => 22,  87 => 18,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block body %}
<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

<div class=\"container\">
    <h1 style=\"text-align: center; margin-bottom: 20px;\">Flight</h1>
    <div class=\"row\">
        <div class=\"col-lg-8\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">ID:</th>
                        <td>{{ volclass.id }}</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Admin:</th>
                        <td>{{ volclass.user.nom }} {{ volclass.user.prenom }}</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Class Name:</th>
                        <td>{{ volclass.className }}</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Description:</th>
                        <td>{{ volclass.description }}</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Price:</th>
                        <td>{{ volclass.price }} \$</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Ticket Number:</th>
                        <td>{{ volclass.ticketNumber }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href=\"{{ path('app_volclass_edit', {'id': volclass.id}) }}\" class=\"btn btn-primary\">Edit</a>
                <a href=\"{{ path('app_volclass_index') }}\" class=\"btn btn-secondary\">Back to List</a>
                {{ include('volclass/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
</div>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

{% endblock %}
", "volclass/show.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\volclass\\show.html.twig");
    }
}
