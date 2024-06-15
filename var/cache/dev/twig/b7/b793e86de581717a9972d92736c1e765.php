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

/* programme/_form.html.twig */
class __TwigTemplate_d7c06d11490c061267d46592304f5bda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

      <div class=\"my-custom-class-for-errors\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        echo "
        </div>
      

  



         <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Description</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control border-top-0 border-left-0 border-right-0 rounded-0", "placeholder" => "Description "]]);
        echo "
            </label>
  </div></div>
   
   <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Start Date</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "datedebut", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "id" => "d_label_single", "class" => "form-control", "placeholder" => "Start Date  "]]);
        echo "
  </label>
  </div></div>

  <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">End date</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "datefin", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "id" => "d_label_single", "class" => "form-control", "placeholder" => "End Date "]]);
        echo "
  </label>
  </div></div>

    <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Price</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "prix", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "type" => "text", "id" => "d_label_single", "class" => "form-control", "placeholder" => "Price "]]);
        echo "
  </label>
  </div></div>
  


    <button class=\"btn btn-dark\">";
        // line 58
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 58, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
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
        return "programme/_form.html.twig";
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
        return array (  122 => 59,  118 => 58,  109 => 52,  95 => 41,  81 => 30,  67 => 19,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form , {'attr': {'novalidate':'novalidate'} }) }}

      <div class=\"my-custom-class-for-errors\">
            {{ form_errors(form) }}
        </div>
      

  



         <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Description</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
                    {{ form_widget(form.description, {'attr': {'class': 'form-control border-top-0 border-left-0 border-right-0 rounded-0','placeholder':'Description '}}) }}
            </label>
  </div></div>
   
   <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Start Date</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  {{ form_widget(form.datedebut, {  'attr': {'class': 'form-control'  , 'id':'d_label_single' , 'class' : 'form-control' ,'placeholder':'Start Date  ' }}) }}
  </label>
  </div></div>

  <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">End date</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  {{ form_widget(form.datefin, {  'attr': {'class': 'form-control'  , 'id':'d_label_single' , 'class' : 'form-control' ,'placeholder':'End Date ' }}) }}
  </label>
  </div></div>

    <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Price</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  {{ form_widget(form.prix, {  'attr': {'class': 'form-control' , 'type' : 'text' , 'id':'d_label_single' , 'class' : 'form-control' ,'placeholder':'Price '}}) }}
  </label>
  </div></div>
  


    <button class=\"btn btn-dark\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "programme/_form.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\programme\\_form.html.twig");
    }
}
