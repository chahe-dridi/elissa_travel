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

/* event_api/StatEvent.html.twig */
class __TwigTemplate_e41e371582ab6c71cfe8c74a969dda92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_api/StatEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_api/StatEvent.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "event_api/StatEvent.html.twig", 1);
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

        echo "Statistiques des événements par type";
        
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
        echo "<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-6 col-md-8 col-sm-10\">
      <div class=\"card\">
        <div class=\"card-body\">
          <h2 class=\"card-title mb-3 text-center\">Nombre d'événements par types</h2>
          <div class=\"text-center\"> ";
        // line 13
        echo "            <div class=\"chart-container\" style=\"position: relative; height: 200px;\">
              <canvas id=\"myChart\"></canvas>
            </div>
            <div class=\"legend mt-3 d-flex flex-wrap justify-content-center\">
              ";
        // line 17
        $context["colors"] = ["rgba(255, 99, 132, 0.8)", "rgba(54, 162, 235, 0.8)", "rgba(255, 206, 86, 0.8)", "rgba(75, 192, 192, 0.8)", "rgba(153, 102, 255, 0.8)", "rgba(255, 159, 64, 0.8)"];
        // line 18
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statsByType"]) || array_key_exists("statsByType", $context) ? $context["statsByType"] : (function () { throw new RuntimeError('Variable "statsByType" does not exist.', 18, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 19
            echo "                <div class=\"legend-item mr-3\">
                  <span class=\"color-box\" style=\"background-color: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 20, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20), [], "array", false, false, false, 20), "html", null, true);
            echo "\"></span>
                  <span class=\"label-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "nomType", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                  
                </div>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "              
            </div>
          </div>
        </div>
      </div>
    </div>
    <h2 class=\"card-title mb-3 text-center\">Nombre d'événements par types</h2>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  // Récupérer les données des statistiques depuis le contrôleur
  var statsByType = ";
        // line 38
        echo json_encode((isset($context["statsByType"]) || array_key_exists("statsByType", $context) ? $context["statsByType"] : (function () { throw new RuntimeError('Variable "statsByType" does not exist.', 38, $this->source); })()));
        echo ";
  
  // Préparation des données pour le graphique
  var labels = statsByType.map(function(stat) { return stat.nomType; });
  var counts = statsByType.map(function(stat) { return stat.count; });

  // Fonction pour obtenir une couleur en fonction de l'index
  function getColor(index) {
    var colors = ['rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)', 'rgba(255, 206, 86, 0.8)', 'rgba(75, 192, 192, 0.8)', 'rgba(153, 102, 255, 0.8)', 'rgba(255, 159, 64, 0.8)'];
    return colors[index % colors.length];
  }

  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: '',  // Aucun label pour le graphique
        data: counts,
        backgroundColor: labels.map(function(_, index) { return getColor(index); }),  // Utilisation de la fonction getColor pour obtenir les couleurs
        borderColor: labels.map(function(_, index) { return getColor(index); }),       // Utilisation de la fonction getColor pour obtenir les couleurs
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>
<style>
  .legend-item {
    display: flex;
    align-items: center;
  }
  .color-box {
    width: 20px;
    height: 20px;
    margin-right: 5px;
  }
  .label-text {
    font-size: 16px;
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
        return "event_api/StatEvent.html.twig";
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
        return array (  162 => 38,  147 => 25,  129 => 21,  125 => 20,  122 => 19,  104 => 18,  102 => 17,  96 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Statistiques des événements par type{% endblock %}

{% block body %}
<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-6 col-md-8 col-sm-10\">
      <div class=\"card\">
        <div class=\"card-body\">
          <h2 class=\"card-title mb-3 text-center\">Nombre d'événements par types</h2>
          <div class=\"text-center\"> {# Ajout de la classe text-center #}
            <div class=\"chart-container\" style=\"position: relative; height: 200px;\">
              <canvas id=\"myChart\"></canvas>
            </div>
            <div class=\"legend mt-3 d-flex flex-wrap justify-content-center\">
              {% set colors = ['rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)', 'rgba(255, 206, 86, 0.8)', 'rgba(75, 192, 192, 0.8)', 'rgba(153, 102, 255, 0.8)', 'rgba(255, 159, 64, 0.8)'] %}
              {% for stat in statsByType %}
                <div class=\"legend-item mr-3\">
                  <span class=\"color-box\" style=\"background-color: {{ colors[loop.index0] }}\"></span>
                  <span class=\"label-text\">{{ stat.nomType }}</span>
                  
                </div>
              {% endfor %}
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <h2 class=\"card-title mb-3 text-center\">Nombre d'événements par types</h2>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  // Récupérer les données des statistiques depuis le contrôleur
  var statsByType = {{ statsByType|json_encode|raw }};
  
  // Préparation des données pour le graphique
  var labels = statsByType.map(function(stat) { return stat.nomType; });
  var counts = statsByType.map(function(stat) { return stat.count; });

  // Fonction pour obtenir une couleur en fonction de l'index
  function getColor(index) {
    var colors = ['rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)', 'rgba(255, 206, 86, 0.8)', 'rgba(75, 192, 192, 0.8)', 'rgba(153, 102, 255, 0.8)', 'rgba(255, 159, 64, 0.8)'];
    return colors[index % colors.length];
  }

  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: '',  // Aucun label pour le graphique
        data: counts,
        backgroundColor: labels.map(function(_, index) { return getColor(index); }),  // Utilisation de la fonction getColor pour obtenir les couleurs
        borderColor: labels.map(function(_, index) { return getColor(index); }),       // Utilisation de la fonction getColor pour obtenir les couleurs
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          ticks: {
            autoSkip: false
          }
        }],
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>
<style>
  .legend-item {
    display: flex;
    align-items: center;
  }
  .color-box {
    width: 20px;
    height: 20px;
    margin-right: 5px;
  }
  .label-text {
    font-size: 16px;
  }
</style>
{% endblock %}
", "event_api/StatEvent.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\event_api\\StatEvent.html.twig");
    }
}
