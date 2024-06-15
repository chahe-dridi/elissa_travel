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

/* reservation_hotel/invoice.html.twig */
class __TwigTemplate_54aa85278fb3db290aa963c46fac27e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/invoice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/invoice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .invoice-container {
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            margin: 0;
            font-size: 28px;
            color: #333;
        }
        .invoice-details p {
            margin: 5px 0;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .invoice-table th, .invoice-table td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }
        .invoice-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .invoice-table td {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class=\"invoice-container\">
        <div class=\"invoice-header\">
            <h1>Invoice</h1>
        </div>
        <div class=\"invoice-details\">
            <p><strong>Reservation ID:</strong> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
            <p><strong>Date Arrive:</strong> ";
        // line 61
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 61, $this->source); })()), "dateArrive", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 61, $this->source); })()), "dateArrive", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
            <p><strong>Date Depart:</strong> ";
        // line 62
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 62, $this->source); })()), "dateDepart", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 62, $this->source); })()), "dateDepart", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
            <p><strong>Email:</strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "</p>
            <p><strong>Nom:</strong> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 64, $this->source); })()), "nom", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
            <p><strong>PreNom:</strong> ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 65, $this->source); })()), "preNom", [], "any", false, false, false, 65), "html", null, true);
        echo "</p>
            <p><strong>Destination:</strong> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 66, $this->source); })()), "Distination", [], "any", false, false, false, 66), "html", null, true);
        echo "</p>
            <p><strong>Chambre:</strong> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 67, $this->source); })()), "ChambrE", [], "any", false, false, false, 67), "html", null, true);
        echo "</p>
            <p><strong>Prix Total:</strong> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 68, $this->source); })()), "prixTT", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>

            <!-- Add more reservation details here -->
        </div>
        
                <!-- You can add more rows for additional items if needed -->
            </tbody>
        </table>
    </div>
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
        return "reservation_hotel/invoice.html.twig";
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
        return array (  136 => 68,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  116 => 63,  112 => 62,  108 => 61,  104 => 60,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .invoice-container {
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            margin: 0;
            font-size: 28px;
            color: #333;
        }
        .invoice-details p {
            margin: 5px 0;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .invoice-table th, .invoice-table td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }
        .invoice-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .invoice-table td {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class=\"invoice-container\">
        <div class=\"invoice-header\">
            <h1>Invoice</h1>
        </div>
        <div class=\"invoice-details\">
            <p><strong>Reservation ID:</strong> {{ reservation_hotel.id }}</p>
            <p><strong>Date Arrive:</strong> {{ reservation_hotel.dateArrive ? reservation_hotel.dateArrive|date('Y-m-d') : '' }}</p>
            <p><strong>Date Depart:</strong> {{ reservation_hotel.dateDepart ? reservation_hotel.dateDepart|date('Y-m-d') : '' }}</p>
            <p><strong>Email:</strong> {{ reservation_hotel.email }}</p>
            <p><strong>Nom:</strong> {{ reservation_hotel.nom }}</p>
            <p><strong>PreNom:</strong> {{ reservation_hotel.preNom }}</p>
            <p><strong>Destination:</strong> {{ reservation_hotel.Distination }}</p>
            <p><strong>Chambre:</strong> {{ reservation_hotel.ChambrE }}</p>
            <p><strong>Prix Total:</strong> {{ reservation_hotel.prixTT }}</p>

            <!-- Add more reservation details here -->
        </div>
        
                <!-- You can add more rows for additional items if needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
", "reservation_hotel/invoice.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_hotel\\invoice.html.twig");
    }
}
