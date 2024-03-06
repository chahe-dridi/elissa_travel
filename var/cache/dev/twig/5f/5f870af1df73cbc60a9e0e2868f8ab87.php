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

/* reservation_vol_admin/statistics.html.twig */
class __TwigTemplate_a044480414500d4916d026412a776503 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/statistics.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "reservation_vol_admin/statistics.html.twig", 1);
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

        echo "Reservation Volume Statistics";
        
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
        echo "<main id=\"main\" class=\"main\">
    <style>
        /* Add your custom CSS styles here */
        .container {
            margin-top: 50px; /* Adjust margin as needed */
        }

        .card {
            border: 1px solid #ccc; /* Add border */
            border-radius: 5px; /* Add border radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
        }

        .card-body {
            padding: 20px; /* Add padding */
        }

        .btn {
            margin-top: 20px; /* Add margin to button */
        }
    </style>

    <div class=\"container mt-6\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8 col-md-18 mb-10\">
                <div class=\"card text-center\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title mb-4\">Top Reserved Cities</h1>
                        <canvas id=\"myChartCities\" style=\"height: 300px; width: 100%; margin-bottom: 20px;\"></canvas>
                    </div>
                </div>
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_vol_admin_index");
        echo "\" class=\"btn btn-primary\" style=\"color: #fff; margin-top: 20px;\">Back to List</a>
            </div>
        </div>
    </div>
</main>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var ctxCities = document.getElementById('myChartCities').getContext('2d');
    var myChartCities = new Chart(ctxCities, {
        type: 'bar',
        data: {
            labels: [";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 49, $this->source); })()), "Top Reserved Cities", [], "array", false, false, false, 49));
        foreach ($context['_seq'] as $context["city"] => $context["count"]) {
            // line 50
            echo "                '";
            echo twig_escape_filter($this->env, $context["city"], "html", null, true);
            echo "',
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['city'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "],
            datasets: [{
                label: 'Number of Reservations',
                data: [";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 54, $this->source); })()), "Top Reserved Cities", [], "array", false, false, false, 54));
        foreach ($context['_seq'] as $context["city"] => $context["count"]) {
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['city'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                backgroundColor: 'rgba(148, 87, 235, 0.8)',  // Violet
                borderColor: 'rgba(148, 87, 235, 1)',       // Violet
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation_vol_admin/statistics.html.twig";
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
        return array (  154 => 54,  149 => 51,  140 => 50,  136 => 49,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Reservation Volume Statistics{% endblock %}

{% block body %}
<main id=\"main\" class=\"main\">
    <style>
        /* Add your custom CSS styles here */
        .container {
            margin-top: 50px; /* Adjust margin as needed */
        }

        .card {
            border: 1px solid #ccc; /* Add border */
            border-radius: 5px; /* Add border radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
        }

        .card-body {
            padding: 20px; /* Add padding */
        }

        .btn {
            margin-top: 20px; /* Add margin to button */
        }
    </style>

    <div class=\"container mt-6\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8 col-md-18 mb-10\">
                <div class=\"card text-center\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title mb-4\">Top Reserved Cities</h1>
                        <canvas id=\"myChartCities\" style=\"height: 300px; width: 100%; margin-bottom: 20px;\"></canvas>
                    </div>
                </div>
                <a href=\"{{ path('app_reservation_vol_admin_index') }}\" class=\"btn btn-primary\" style=\"color: #fff; margin-top: 20px;\">Back to List</a>
            </div>
        </div>
    </div>
</main>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var ctxCities = document.getElementById('myChartCities').getContext('2d');
    var myChartCities = new Chart(ctxCities, {
        type: 'bar',
        data: {
            labels: [{% for city, count in statistics['Top Reserved Cities'] %}
                '{{ city }}',
            {% endfor %}],
            datasets: [{
                label: 'Number of Reservations',
                data: [{% for city, count in statistics['Top Reserved Cities'] %}{{ count }},{% endfor %}],
                backgroundColor: 'rgba(148, 87, 235, 0.8)',  // Violet
                borderColor: 'rgba(148, 87, 235, 1)',       // Violet
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
{% endblock %}
", "reservation_vol_admin/statistics.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_vol_admin\\statistics.html.twig");
    }
}
