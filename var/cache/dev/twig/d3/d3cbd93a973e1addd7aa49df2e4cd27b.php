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

/* airport/_form.html.twig */
class __TwigTemplate_f8b36905297fee7804d0c11888c15f7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "airport/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <!-- Code field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "code", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Code"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "code", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "id" => "airport_code"]]);
        echo "
            ";
        // line 7
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "code", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "errors", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "code", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 9), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ";
        }
        // line 12
        echo "        </div>
    </div>
    
    <!-- Name field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Name"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "id" => "airport_name"]]);
        echo "
            ";
        // line 20
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20)) > 0)) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 22), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            ";
        }
        // line 25
        echo "        </div>
    </div>
    
    <!-- City field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "city", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "control-label"], "label" => "City"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "city", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "id" => "airport_city"]]);
        echo "
            ";
        // line 33
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "city", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "errors", [], "any", false, false, false, 33)) > 0)) {
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "city", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 35
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </div>
    </div>
    
    <!-- Country field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "country", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Country"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "country", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "id" => "airport_country"]]);
        echo "
            ";
        // line 46
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "country", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) {
            // line 47
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "country", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 48
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 48), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </div> 
    </div>
    
   
    <!-- Submit button -->
    <div class=\"form-group row\">
        <div class=\"col-sm-10 offset-sm-2\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 58
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 58, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        </div>
    </div>
    
";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
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
        return "airport/_form.html.twig";
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
        return array (  198 => 62,  191 => 58,  182 => 51,  179 => 50,  170 => 48,  165 => 47,  163 => 46,  159 => 45,  154 => 43,  147 => 38,  144 => 37,  135 => 35,  130 => 34,  128 => 33,  124 => 32,  119 => 30,  112 => 25,  109 => 24,  100 => 22,  95 => 21,  93 => 20,  89 => 19,  84 => 17,  77 => 12,  74 => 11,  65 => 9,  60 => 8,  58 => 7,  54 => 6,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <!-- Code field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.code, 'Code', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.code, {'attr': {'class': 'form-control', 'id': 'airport_code'}}) }}
            {% if form.code.vars.errors|length > 0 %}
                {% for error in form.code.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
    <!-- Name field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.name, 'Name', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.name, {'attr': {'class': 'form-control', 'id': 'airport_name'}}) }}
            {% if form.name.vars.errors|length > 0 %}
                {% for error in form.name.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
    <!-- City field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.city, 'City', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.city, {'attr': {'class': 'form-control', 'id': 'airport_city'}}) }}
            {% if form.city.vars.errors|length > 0 %}
                {% for error in form.city.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
    <!-- Country field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.country, 'Country', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.country, {'attr': {'class': 'form-control', 'id': 'airport_country'}}) }}
            {% if form.country.vars.errors|length > 0 %}
                {% for error in form.country.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
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
", "airport/_form.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\airport\\_form.html.twig");
    }
}
