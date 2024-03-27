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

/* vol/calendar.html.twig */
class __TwigTemplate_73c375d90346af8e314d9635d05ee53c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/calendar.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "vol/calendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "
<div style=\"padding-bottom: 5%;\"></div>

    ";
        // line 10
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" rel=\"stylesheet\">
    <style>
        #calendar {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
 

    <div id='calendar'></div>
 
 
    ";
        // line 23
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vol"]) {
            // line 31
            echo "                        {
                            title: '";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "compagnieAerienne", [], "any", false, false, false, 32), "html", null, true);
            echo "',
                            start: '";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "heureDepart", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "heureDepart", [], "any", false, false, false, 33), "H:i:s"), "html", null, true);
            echo "',
                            end: '";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "heureArrive", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "heureArrive", [], "any", false, false, false, 34), "H:i:s"), "html", null, true);
            echo "',
                            url: '";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_show", ["id" => twig_get_attribute($this->env, $this->source, $context["vol"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "' // Add the URL for vol detail page
                        },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                ],
                eventClick: function(info) {
                    if (info.event.url) {
                        window.location.href = info.event.url;
                    }
                }
            });
            calendar.render();
        });
    </script>


    <div style=\"text-align: right;\">
        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_index");
        echo "\" class=\"btn btn-outline-secondary\">back to list</a>
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
        return "vol/calendar.html.twig";
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
        return array (  143 => 51,  128 => 38,  119 => 35,  113 => 34,  107 => 33,  103 => 32,  100 => 31,  96 => 30,  87 => 23,  73 => 10,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

 

{% block body %}

<div style=\"padding-bottom: 5%;\"></div>

    {# Include FullCalendar stylesheet #}
    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" rel=\"stylesheet\">
    <style>
        #calendar {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
 

    <div id='calendar'></div>
 
 
    {# Include FullCalendar JavaScript #}
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    {% for vol in vols %}
                        {
                            title: '{{ vol.compagnieAerienne }}',
                            start: '{{ vol.heureDepart|date('Y-m-d') }}T{{ vol.heureDepart|date('H:i:s') }}',
                            end: '{{ vol.heureArrive|date('Y-m-d') }}T{{ vol.heureArrive|date('H:i:s') }}',
                            url: '{{ path('app_vol_show', {'id': vol.id}) }}' // Add the URL for vol detail page
                        },
                    {% endfor %}
                ],
                eventClick: function(info) {
                    if (info.event.url) {
                        window.location.href = info.event.url;
                    }
                }
            });
            calendar.render();
        });
    </script>


    <div style=\"text-align: right;\">
        <a href=\"{{ path('app_vol_index') }}\" class=\"btn btn-outline-secondary\">back to list</a>
   </div>
{% endblock %}
", "vol/calendar.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\vol\\calendar.html.twig");
    }
}
