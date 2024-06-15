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

/* airport/show.html.twig */
class __TwigTemplate_a09e895fda8b89e3dfae41483a8d6d14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "airport/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

 
    <div class=\"container\">
        <h1 style=\"text-align: center; margin-bottom: 20px;\">Airport</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Id</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">User name</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Code</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 24, $this->source); })()), "code", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                        </tr>
                        
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Name</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">City</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 33, $this->source); })()), "city", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Country</th>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 37, $this->source); })()), "country", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_index");
        echo "\" style=\"margin-right: 10px;\" class=\"btn btn-secondary\">Back to List</a>
                <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" style=\"margin-right: 10px;\" class=\"btn btn-primary\">Edit</a>
                ";
        // line 43
        echo twig_include($this->env, $context, "airport/_delete_form.html.twig");
        echo "
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
        return "airport/show.html.twig";
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
        return array (  134 => 43,  130 => 42,  126 => 41,  119 => 37,  112 => 33,  105 => 29,  97 => 24,  88 => 20,  81 => 16,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}


{% block body %}
<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

 
    <div class=\"container\">
        <h1 style=\"text-align: center; margin-bottom: 20px;\">Airport</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Id</th>
                            <td>{{ airport.id }}</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">User name</th>
                            <td>{{ airport.user.nom }} {{ airport.user.prenom }}</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Code</th>
                            <td>{{ airport.code }}</td>
                        </tr>
                        
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Name</th>
                            <td>{{ airport.name }}</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">City</th>
                            <td>{{ airport.city }}</td>
                        </tr>
                        <tr>
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Country</th>
                            <td>{{ airport.country }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href=\"{{ path('app_airport_index') }}\" style=\"margin-right: 10px;\" class=\"btn btn-secondary\">Back to List</a>
                <a href=\"{{ path('app_airport_edit', {'id': airport.id}) }}\" style=\"margin-right: 10px;\" class=\"btn btn-primary\">Edit</a>
                {{ include('airport/_delete_form.html.twig') }}
            </div>
        </div>
    </div>

    
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>


{% endblock %}
", "airport/show.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\airport\\show.html.twig");
    }
}
