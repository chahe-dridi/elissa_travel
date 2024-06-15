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

/* reservation_hotel/edit.html.twig */
class __TwigTemplate_131613f97256559b4fb569b3eb33364f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/edit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Edit ReservationHotel</title>
</head>
<body>
    <section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center probootstrap-animate\">
                    <h1 class=\"heading mb50\">Update Reservation</h1>
                </div>
            </div>
        </div>
    </section>

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 23
        echo twig_include($this->env, $context, "reservation_hotel/_form.html.twig", ["button_label" => "Update"]);
        echo "

                        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_hotel_index");
        echo "\" class=\"btn btn-secondary mt-3\">Back to Reservations</a>

                        ";
        // line 27
        echo twig_include($this->env, $context, "reservation_hotel/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
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
        return "reservation_hotel/edit.html.twig";
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
        return array (  80 => 27,  75 => 25,  70 => 23,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Edit ReservationHotel</title>
</head>
<body>
    <section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center probootstrap-animate\">
                    <h1 class=\"heading mb50\">Update Reservation</h1>
                </div>
            </div>
        </div>
    </section>

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        {{ include('reservation_hotel/_form.html.twig', {'button_label': 'Update'}) }}

                        <a href=\"{{ path('app_reservation_hotel_index') }}\" class=\"btn btn-secondary mt-3\">Back to Reservations</a>

                        {{ include('reservation_hotel/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
", "reservation_hotel/edit.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_hotel\\edit.html.twig");
    }
}
