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

/* reservationEvent/addreservationEvent.html.twig */
class __TwigTemplate_81b8b2ce4e13548c564581a1a638d4ba extends Template
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
        return "nav_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationEvent/addreservationEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationEvent/addreservationEvent.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "reservationEvent/addreservationEvent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md\">
                <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Elissa Travel</h2>
                <p class=\"lead mb-5 probootstrap-animate\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!</p>
            </div>
            <div class=\"col-md probootstrap-animate\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>













    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <h1>Formulaire Ajout Reservation</h1>
            <nav>
            </nav>
        </div>

        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\" style=\"height: 100vh;\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Ajouter Reservation</h5>

                            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <div class=\"row mb-3\">
                                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Event</label>
                                <div class=\"col-sm-8\">
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 52, $this->source); })()), "Event", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 53, $this->source); })()), "Event", [], "any", false, false, false, 53), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-8 offset-sm-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </div>
                            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationEvent/addreservationEvent.html.twig";
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
        return array (  140 => 62,  128 => 53,  124 => 52,  117 => 48,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_user.html.twig' %}
{% block body %}
<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\" id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md\">
                <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Elissa Travel</h2>
                <p class=\"lead mb-5 probootstrap-animate\">Discover, Celebrate, Repeat - Your Journey, Your Events, Our Passion!</p>
            </div>
            <div class=\"col-md probootstrap-animate\">
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>













    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <h1>Formulaire Ajout Reservation</h1>
            <nav>
            </nav>
        </div>

        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\" style=\"height: 100vh;\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Ajouter Reservation</h5>

                            {{ form_start(f, {attr: {novalidate: 'novalidate'}}) }}
                            <div class=\"row mb-3\">
                                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Event</label>
                                <div class=\"col-sm-8\">
                                    {{ form_widget(f.Event, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(f.Event, {'attr': {'class': 'text-danger'}}) }}
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-8 offset-sm-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </div>
                            {{ form_end(f) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
{% endblock %}
", "reservationEvent/addreservationEvent.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservationEvent\\addreservationEvent.html.twig");
    }
}
