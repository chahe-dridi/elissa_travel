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

/* vol/_form.html.twig */
class __TwigTemplate_1265b9540d0b3026e0e11ad930c7bae9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/_form.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            <div class=\"form-group row\">
                <label for=\"airport_depart\" class=\"col-sm-3 col-form-label\">Departure Airport</label>
                <div class=\"col-sm-9\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "airport_depart", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "airport_depart", [], "any", false, false, false, 10), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"airport_arrive\" class=\"col-sm-3 col-form-label\">Arrival Airport</label>
                <div class=\"col-sm-9\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "airport_arrive", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "airport_arrive", [], "any", false, false, false, 18), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"compagnie_aerienne\" class=\"col-sm-3 col-form-label\">Airline</label>
                <div class=\"col-sm-9\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "compagnie_aerienne", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "compagnie_aerienne", [], "any", false, false, false, 26), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"heure_depart\" class=\"col-sm-3 col-form-label\">Departure Time</label>
                <div class=\"col-sm-9\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "heure_depart", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "heure_depart", [], "any", false, false, false, 34), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"heure_arrive\" class=\"col-sm-3 col-form-label\">Arrival Time</label>
                <div class=\"col-sm-9\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "heure_arrive", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "heure_arrive", [], "any", false, false, false, 42), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group row\">
                <label class=\"col-sm-3 col-form-label\">Availability</label>
                <div class=\"col-sm-9\">
                    <div class=\"form-check\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "disponible", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                        <label class=\"form-check-label\" for=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "disponible", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "\">Yes</label>
                    </div>
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "disponible", [], "any", false, false, false, 53), 'errors');
        echo "
                </div>
            </div>

         

            <div class=\"form-group row\">
                <label for=\"volclass\" class=\"col-sm-3 col-form-label\">Flight Class</label>
                <div class=\"col-sm-9\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "volclass", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "volclass", [], "any", false, false, false, 63), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>
            </div>
            ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "vol/_form.html.twig";
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
        return array (  167 => 72,  161 => 69,  152 => 63,  148 => 62,  136 => 53,  131 => 51,  127 => 50,  116 => 42,  112 => 41,  102 => 34,  98 => 33,  88 => 26,  84 => 25,  74 => 18,  70 => 17,  60 => 10,  56 => 9,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            <div class=\"form-group row\">
                <label for=\"airport_depart\" class=\"col-sm-3 col-form-label\">Departure Airport</label>
                <div class=\"col-sm-9\">
                    {{ form_widget(form.airport_depart, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.airport_depart) }}
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"airport_arrive\" class=\"col-sm-3 col-form-label\">Arrival Airport</label>
                <div class=\"col-sm-9\">
                    {{ form_widget(form.airport_arrive, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.airport_arrive) }}
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"compagnie_aerienne\" class=\"col-sm-3 col-form-label\">Airline</label>
                <div class=\"col-sm-9\">
                    {{ form_widget(form.compagnie_aerienne, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.compagnie_aerienne) }}
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"heure_depart\" class=\"col-sm-3 col-form-label\">Departure Time</label>
                <div class=\"col-sm-9\">
                    {{ form_widget(form.heure_depart, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.heure_depart) }}
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"heure_arrive\" class=\"col-sm-3 col-form-label\">Arrival Time</label>
                <div class=\"col-sm-9\">
                    {{ form_widget(form.heure_arrive, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.heure_arrive) }}
                </div>
            </div>

            <div class=\"form-group row\">
                <label class=\"col-sm-3 col-form-label\">Availability</label>
                <div class=\"col-sm-9\">
                    <div class=\"form-check\">
                        {{ form_widget(form.disponible, {'attr': {'class': 'form-check-input'}}) }}
                        <label class=\"form-check-label\" for=\"{{ form.disponible.vars.id }}\">Yes</label>
                    </div>
                    {{ form_errors(form.disponible) }}
                </div>
            </div>

         

            <div class=\"form-group row\">
                <label for=\"volclass\" class=\"col-sm-3 col-form-label\">Flight Class</label>
                <div class=\"col-sm-9\">
                    {{ form_widget(form.volclass, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.volclass) }}
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "vol/_form.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\vol\\_form.html.twig");
    }
}
