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

/* vol/flights_pdf.html.twig */
class __TwigTemplate_a4232df89ae6337ad15bab373be82db6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/flights_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/flights_pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Flights Information</title>
    <style>
        /* Define your PDF styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #33f;
            text-shadow: 1px 1px 1px #ccc;
            font-size: 28px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #f0f0f0;
            color: #33f;
            font-weight: bold;
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f0f0f0;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Flights Information</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Departure Airport</th>
                <th>Arrival Airport</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
         
                <th>Class</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new RuntimeError('Variable "flights" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 70
            echo "                <tr>
                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportDepart", [], "method", false, false, false, 72), "getName", [], "method", false, false, false, 72), "html", null, true);
            echo "</td>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getairportarrive", [], "method", false, false, false, 73), "getName", [], "method", false, false, false, 73), "html", null, true);
            echo "</td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "getHeureDepart", [], "method", false, false, false, 74), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "getHeureArrive", [], "method", false, false, false, 75), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
        
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getVolclass", [], "method", false, false, false, 77), "getClassName", [], "method", false, false, false, 77), "html", null, true);
            echo "</td>
                    <td>\$";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "getVolclass", [], "method", false, false, false, 78), "getPrice", [], "method", false, false, false, 78), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
    </table>
 
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "vol/flights_pdf.html.twig";
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
        return array (  154 => 81,  145 => 78,  141 => 77,  136 => 75,  132 => 74,  128 => 73,  124 => 72,  120 => 71,  117 => 70,  113 => 69,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Flights Information</title>
    <style>
        /* Define your PDF styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #33f;
            text-shadow: 1px 1px 1px #ccc;
            font-size: 28px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #f0f0f0;
            color: #33f;
            font-weight: bold;
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f0f0f0;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Flights Information</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Departure Airport</th>
                <th>Arrival Airport</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
         
                <th>Class</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            {% for flight in flights %}
                <tr>
                    <td>{{ flight.id }}</td>
                    <td>{{ flight.getairportDepart().getName() }}</td>
                    <td>{{ flight.getairportarrive().getName() }}</td>
                    <td>{{ flight.getHeureDepart()|date('Y-m-d H:i:s') }}</td>
                    <td>{{ flight.getHeureArrive()|date('Y-m-d H:i:s') }}</td>
        
                    <td>{{ flight.getVolclass().getClassName() }}</td>
                    <td>\${{ flight.getVolclass().getPrice() }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
 
</body>
</html>
", "vol/flights_pdf.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\vol\\flights_pdf.html.twig");
    }
}
