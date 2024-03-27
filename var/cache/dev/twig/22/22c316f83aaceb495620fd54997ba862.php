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

/* vol/show.html.twig */
class __TwigTemplate_9dc460ba3c4836c7d5a441a5cb3592a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "vol/show.html.twig", 1);
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
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Id</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                    </tr>
                    
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">airline</th>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 20, $this->source); })()), "compagnieAerienne", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Heure Départ</th>
                        <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 24, $this->source); })()), "heureDepart", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 24, $this->source); })()), "heureDepart", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Heure Arrivée</th>
                        <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 28, $this->source); })()), "heureArrive", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 28, $this->source); })()), "heureArrive", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                
                     
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Disponible</th>
                        <td>";
        // line 34
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 34, $this->source); })()), "disponible", [], "any", false, false, false, 34)) ? ("Yes") : ("No"));
        echo "</td>
                    </tr>
                </tbody>
            </table>
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_index");
        echo "\" style=\"margin-right: 10px;\" class=\"btn btn-secondary\">Back to List</a>
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" style=\"margin-right: 10px;\" class=\"btn btn-primary\">Edit</a>
            ";
        // line 40
        echo twig_include($this->env, $context, "vol/_delete_form.html.twig");
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
        return "vol/show.html.twig";
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
        return array (  127 => 40,  123 => 39,  119 => 38,  112 => 34,  103 => 28,  96 => 24,  89 => 20,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
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
                            <th style=\"width: 30%; background-color: #f0f0f0;\">Id</th>
                        <td>{{ vol.id }}</td>
                    </tr>
                    
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">airline</th>
                        <td>{{ vol.compagnieAerienne }}</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Heure Départ</th>
                        <td>{{ vol.heureDepart ? vol.heureDepart|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Heure Arrivée</th>
                        <td>{{ vol.heureArrive ? vol.heureArrive|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                
                     
                    <tr>
                        <th style=\"width: 30%; background-color: #f0f0f0;\">Disponible</th>
                        <td>{{ vol.disponible ? 'Yes' : 'No' }}</td>
                    </tr>
                </tbody>
            </table>
            <a href=\"{{ path('app_vol_index') }}\" style=\"margin-right: 10px;\" class=\"btn btn-secondary\">Back to List</a>
            <a href=\"{{ path('app_vol_edit', {'id': vol.id}) }}\" style=\"margin-right: 10px;\" class=\"btn btn-primary\">Edit</a>
            {{ include('vol/_delete_form.html.twig') }}
        </div>
    </div>
</div>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

{% endblock %}
", "vol/show.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\vol\\show.html.twig");
    }
}
