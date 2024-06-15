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

/* hotel/statistics.html.twig */
class __TwigTemplate_445bd8d4e231edef8196775bd96971b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/statistics.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "hotel/statistics.html.twig", 1);
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

        echo "Hotel Reservation Statistics";
        
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
        echo "<div class=\"container mt-6\">
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-8 col-md-18 mb-10\">
      <div class=\"card text-center\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-4\">Hotel Reservation Statistics</h1>
          <canvas id=\"myChartHotel\" style=\"height: 300px; width: 100%; margin-bottom: 20px;\"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctxHotel = document.getElementById('myChartHotel').getContext('2d');
  var myChartHotel = new Chart(ctxHotel, {
    type: 'bar',
    data: {
      labels: [";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationsByHotel"]) || array_key_exists("reservationsByHotel", $context) ? $context["reservationsByHotel"] : (function () { throw new RuntimeError('Variable "reservationsByHotel" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["hotelId"] => $context["reservationCount"]) {
            // line 26
            echo "                 'Hotel ID: ";
            echo twig_escape_filter($this->env, $context["hotelId"], "html", null, true);
            echo "',
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hotelId'], $context['reservationCount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "],
      datasets: [{
        label: 'Number of Reservations',
        data: [";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationsByHotel"]) || array_key_exists("reservationsByHotel", $context) ? $context["reservationsByHotel"] : (function () { throw new RuntimeError('Variable "reservationsByHotel" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["hotelId"] => $context["reservationCount"]) {
            echo twig_escape_filter($this->env, $context["reservationCount"], "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hotelId'], $context['reservationCount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
        backgroundColor: 'rgba(255, 99, 132, 0.8)',  // Red
        borderColor: 'rgba(255, 99, 132, 1)',       // Red
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
        return "hotel/statistics.html.twig";
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
        return array (  127 => 30,  122 => 27,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Hotel Reservation Statistics{% endblock %}

{% block body %}
<div class=\"container mt-6\">
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-8 col-md-18 mb-10\">
      <div class=\"card text-center\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-4\">Hotel Reservation Statistics</h1>
          <canvas id=\"myChartHotel\" style=\"height: 300px; width: 100%; margin-bottom: 20px;\"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctxHotel = document.getElementById('myChartHotel').getContext('2d');
  var myChartHotel = new Chart(ctxHotel, {
    type: 'bar',
    data: {
      labels: [{% for hotelId, reservationCount in reservationsByHotel %}
                 'Hotel ID: {{ hotelId }}',
               {% endfor %}],
      datasets: [{
        label: 'Number of Reservations',
        data: [{% for hotelId, reservationCount in reservationsByHotel %}{{ reservationCount }},{% endfor %}],
        backgroundColor: 'rgba(255, 99, 132, 0.8)',  // Red
        borderColor: 'rgba(255, 99, 132, 1)',       // Red
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
", "hotel/statistics.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\hotel\\statistics.html.twig");
    }
}
