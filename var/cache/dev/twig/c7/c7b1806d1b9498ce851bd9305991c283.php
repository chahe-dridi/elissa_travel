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

/* reservation_vol_admin/_form.html.twig */
class __TwigTemplate_51ea1f1279c81cb737255ae42954327f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_vol_admin/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <!-- Total Price field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "total_price", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Total Price"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "total_price", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 7
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "total_price", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "errors", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "total_price", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                echo "     <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 8), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            ";
        }
        // line 11
        echo "        </div>
    </div>
    
    <!-- Payment Method field -->
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
        // line 19
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "payment_method", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "payment_method", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                echo "     <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 20), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>
    </div>
    
   
    
    <!-- Vol field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vol", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Vol"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vol", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 33
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vol", [], "any", false, false, false, 33), 'errors')) {
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vol", [], "any", false, false, false, 34), 'errors'));
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
    
    <!-- Submit button -->
    <div class=\"form-group row\">
        <div class=\"col-sm-10 offset-sm-2\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        </div>
    </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
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
        return "reservation_vol_admin/_form.html.twig";
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
        return array (  161 => 47,  155 => 44,  147 => 38,  144 => 37,  135 => 35,  130 => 34,  128 => 33,  124 => 32,  119 => 30,  110 => 23,  107 => 22,  94 => 20,  92 => 19,  88 => 18,  83 => 16,  76 => 11,  73 => 10,  60 => 8,  58 => 7,  54 => 6,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <!-- Total Price field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.total_price, 'Total Price', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.total_price, {'attr': {'class': 'form-control'}}) }}
            {% if form.total_price.vars.errors|length > 0 %}
            {% for error in form.total_price.vars.errors %}     <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
    <!-- Payment Method field -->
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
    
   
    
    <!-- Vol field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.vol, 'Vol', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.vol, {'attr': {'class': 'form-control'}}) }}
            {% if form_errors(form.vol) %}
                {% for error in form_errors(form.vol) %}
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
", "reservation_vol_admin/_form.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\reservation_vol_admin\\_form.html.twig");
    }
}
