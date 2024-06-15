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

/* airport/statistics.html.twig */
class __TwigTemplate_b772f566fdee79ae43fe027ba0d90d0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/statistics.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "airport/statistics.html.twig", 1);
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

        echo "Airport Statistics";
        
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
          <h1 class=\"card-title mb-4\">Airport Statistics by City</h1>
          <canvas id=\"myChartCity\" style=\"height: 300px; width: 100%; margin-bottom: 20px;\"></canvas>
        </div>
      </div>
      <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_index");
        echo "\" class=\"btn btn-primary\" style=\"color: #fff; margin-top: 20px;\">Back to List</a>
    </div>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctxCity = document.getElementById('myChartCity').getContext('2d');
  var myChartCity = new Chart(ctxCity, {
    type: 'bar',
    data: {
      labels: [";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 26, $this->source); })()), "Airports by City", [], "array", false, false, false, 26));
        foreach ($context['_seq'] as $context["city"] => $context["count"]) {
            // line 27
            echo "                 '";
            echo twig_escape_filter($this->env, $context["city"], "html", null, true);
            echo "',
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['city'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "],
      datasets: [{
        label: 'Number of Airports',
        data: [";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 31, $this->source); })()), "Airports by City", [], "array", false, false, false, 31));
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
        return "airport/statistics.html.twig";
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
        return array (  131 => 31,  126 => 28,  117 => 27,  113 => 26,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Airport Statistics{% endblock %}

{% block body %}
<div class=\"container mt-6\">
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-8 col-md-18 mb-10\">
      <div class=\"card text-center\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-4\">Airport Statistics by City</h1>
          <canvas id=\"myChartCity\" style=\"height: 300px; width: 100%; margin-bottom: 20px;\"></canvas>
        </div>
      </div>
      <a href=\"{{ path('app_airport_index') }}\" class=\"btn btn-primary\" style=\"color: #fff; margin-top: 20px;\">Back to List</a>
    </div>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctxCity = document.getElementById('myChartCity').getContext('2d');
  var myChartCity = new Chart(ctxCity, {
    type: 'bar',
    data: {
      labels: [{% for city, count in statistics['Airports by City'] %}
                 '{{ city }}',
               {% endfor %}],
      datasets: [{
        label: 'Number of Airports',
        data: [{% for city, count in statistics['Airports by City'] %}{{ count }},{% endfor %}],
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
", "airport/statistics.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\airport\\statistics.html.twig");
    }
}
