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

/* reservationvol/_form.html.twig */
class __TwigTemplate_72a4156efd3f3b91c3a76af6dc365da3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationvol/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationvol/_form.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
  

";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "total_price", [], "any", false, false, false, 7), 'row', ["attr" => ["readonly" => "readonly"]]);
        echo "

";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vol", [], "any", false, false, false, 10), 'widget', ["attr" => ["style" => "display: none;"]]);
        echo "

 

<!-- Payment Method field (select) -->
<div class=\"form-group row\">
    <div class=\"col-sm-2\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "payment_method", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Payment Method"]);
        echo "</div>
    <div class=\"col-sm-10\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "payment_method", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    
         ";
        // line 20
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "payment_method", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20)) > 0)) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "payment_method", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                echo "     <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 21), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "    
    </div>
</div>

<!-- Submit button -->
<div class=\"form-group row\">
    <div class=\"col-sm-10 offset-sm-2\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 31, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    </div>
</div>

";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationvol/_form.html.twig";
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
        return array (  110 => 35,  103 => 31,  94 => 24,  91 => 23,  78 => 21,  76 => 20,  71 => 18,  66 => 16,  57 => 10,  52 => 7,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# reservationvol/_form.html.twig #}

{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
  

{# Render the total price field as a readonly input #}
{{ form_row(form.total_price, { 'attr': {'readonly': 'readonly'} }) }}

{# Render the vol field as a hidden input #}
{{ form_widget(form.vol, { 'attr': {'style': 'display: none;'} }) }}

 

<!-- Payment Method field (select) -->
<div class=\"form-group row\">
    <div class=\"col-sm-2\">{{ form_label(form.payment_method, 'Payment Method', {'label_attr': {'class': 'control-label'}}) }}</div>
    <div class=\"col-sm-10\">
        {{ form_widget(form.payment_method, {'attr': {'class': 'form-control'}}) }}
    
         {% if form.payment_method.vars.errors|length > 0 %}
        {% for error in form.payment_method.vars.errors %}     <span class=\"text-danger\">{{ error.message }}</span>
            {% endfor %}
        {% endif %}
    
    </div>
</div>

<!-- Submit button -->
<div class=\"form-group row\">
    <div class=\"col-sm-10 offset-sm-2\">
        <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
    </div>
</div>

{{ form_end(form) }}
", "reservationvol/_form.html.twig", "C:\\xampp\\htdocs\\elissa_travel\\integration\\templates\\reservationvol\\_form.html.twig");
    }
}
