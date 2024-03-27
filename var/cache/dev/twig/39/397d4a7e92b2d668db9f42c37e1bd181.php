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

/* reservation_vol_admin/show.html.twig */
class __TwigTemplate_f78339ac6e7d1671f491d920c8c1b1c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "reservation_vol_admin/show.html.twig", 1);
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
                <th style=\"width: 30%; background-color: #f0f0f0;\" >Id:</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationvol"]) || array_key_exists("reservationvol", $context) ? $context["reservationvol"] : (function () { throw new RuntimeError('Variable "reservationvol" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"width: 30%; background-color: #f0f0f0;\">Total Price:</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationvol"]) || array_key_exists("reservationvol", $context) ? $context["reservationvol"] : (function () { throw new RuntimeError('Variable "reservationvol" does not exist.', 19, $this->source); })()), "totalPrice", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>

        </tr>
        <th style=\"width: 30%; background-color: #f0f0f0;\">Payment Method:</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationvol"]) || array_key_exists("reservationvol", $context) ? $context["reservationvol"] : (function () { throw new RuntimeError('Variable "reservationvol" does not exist.', 24, $this->source); })()), "getPaymentMethod", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>

        </tr>
        </tbody>
    </table>

    <div>
        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_index");
        echo "\" class=\"btn btn-secondary\">Back to List</a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reservationvol"]) || array_key_exists("reservationvol", $context) ? $context["reservationvol"] : (function () { throw new RuntimeError('Variable "reservationvol" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
    </div>

    ";
        // line 35
        echo twig_include($this->env, $context, "reservation_vol_admin/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation_vol_admin/show.html.twig";
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
        return array (  116 => 35,  110 => 32,  106 => 31,  96 => 24,  88 => 19,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
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
                <th style=\"width: 30%; background-color: #f0f0f0;\" >Id:</th>
                <td>{{ reservationvol.id }}</td>
            </tr>
            <tr>
                <th style=\"width: 30%; background-color: #f0f0f0;\">Total Price:</th>
                <td>{{ reservationvol.totalPrice }}</td>
            </tr>

        </tr>
        <th style=\"width: 30%; background-color: #f0f0f0;\">Payment Method:</th>
            <td>{{ reservationvol.getPaymentMethod }}</td>

        </tr>
        </tbody>
    </table>

    <div>
        <a href=\"{{ path('app_reservation_vol_admin_index') }}\" class=\"btn btn-secondary\">Back to List</a>
        <a href=\"{{ path('app_reservation_vol_admin_edit', {'id': reservationvol.id}) }}\" class=\"btn btn-primary\">Edit</a>
    </div>

    {{ include('reservation_vol_admin/_delete_form.html.twig') }}
</div>
{% endblock %}
", "reservation_vol_admin/show.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\reservation_vol_admin\\show.html.twig");
    }
}
