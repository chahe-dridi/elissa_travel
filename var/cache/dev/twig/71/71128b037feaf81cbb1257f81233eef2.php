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

/* volclass/_form.html.twig */
class __TwigTemplate_d6ec83213f43760310b76887e3654f31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "volclass/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "volclass/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <!-- Class Name field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "class_name", [], "any", false, false, false, 5), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Class Name"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "class_name", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "class_name", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "any", false, false, false, 8)) > 0)) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "class_name", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "errors", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 10), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        }
        // line 13
        echo "        </div>
    </div>
    
    <!-- Description field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Description"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 23), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        // line 26
        echo "        </div>
    </div>
    
    <!-- Price field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "price", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Price"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 34
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34)) > 0)) {
            // line 35
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 36
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 36), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
        }
        // line 39
        echo "        </div>
    </div>
    
    <!-- Ticket Number field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "ticket_number", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Ticket Number"]);
        echo "</div>
        <div class=\"col-sm-10\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "ticket_number", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 47
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "ticket_number", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) {
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "ticket_number", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 49
                echo "                    <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 49), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </div>
    </div>
    
   
    
    <!-- Submit button -->
    <div class=\"form-group row\">
        <div class=\"col-sm-10 offset-sm-2\">
            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
        </div>
    </div>
    
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
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
        return "volclass/_form.html.twig";
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
        return array (  197 => 64,  183 => 52,  180 => 51,  171 => 49,  166 => 48,  164 => 47,  160 => 46,  155 => 44,  148 => 39,  145 => 38,  136 => 36,  131 => 35,  129 => 34,  125 => 33,  120 => 31,  113 => 26,  110 => 25,  101 => 23,  96 => 22,  94 => 21,  90 => 20,  85 => 18,  78 => 13,  75 => 12,  66 => 10,  61 => 9,  59 => 8,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <!-- Class Name field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.class_name, 'Class Name', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.class_name, {'attr': {'class': 'form-control'}}) }}
            {% if form.class_name.vars.errors|length > 0 %}
                {% for error in form.class_name.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
    <!-- Description field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.description, 'Description', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
            {% if form.description.vars.errors|length > 0 %}
            {% for error in form.description.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
    <!-- Price field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.price, 'Price', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.price, {'attr': {'class': 'form-control'}}) }}
            {% if form.price.vars.errors|length > 0 %}
            {% for error in form.price.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
    <!-- Ticket Number field -->
    <div class=\"form-group row\">
        <div class=\"col-sm-2\">{{ form_label(form.ticket_number, 'Ticket Number', {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class=\"col-sm-10\">
            {{ form_widget(form.ticket_number, {'attr': {'class': 'form-control'}}) }}
            {% if form.ticket_number.vars.errors|length > 0 %}
            {% for error in form.ticket_number.vars.errors %}
                    <span class=\"text-danger\">{{ error.message }}</span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    
   
    
    <!-- Submit button -->
    <div class=\"form-group row\">
        <div class=\"col-sm-10 offset-sm-2\">
            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
        </div>
    </div>
    
{{ form_end(form) }}
", "volclass/_form.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\volclass\\_form.html.twig");
    }
}
