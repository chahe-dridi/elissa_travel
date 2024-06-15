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

/* voyage/_form.html.twig */
class __TwigTemplate_3eda0d05aaf02aaddc36c52192e98f76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/_form.html.twig"));

        // line 1
        echo "

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
 
           <div class=\"my-custom-class-for-errors\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        echo "
        </div>
      

  



         <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Month</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "mois", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control border-top-0 border-left-0 border-right-0 rounded-0", "placeholder" => "Month "]]);
        echo "
            </label>
  </div></div>
            


  <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Year</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "annee", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "id" => "d_label_single", "class" => "form-control", "placeholder" => "Year "]]);
        echo "
  </label>
  </div></div>




    
 
              
     <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Ville Depart</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "villedepart", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "type" => "text", "id" => "d_label_single", "class" => "form-control", "placeholder" => "Departure "]]);
        echo "
  </label>
  </div></div>

 
       <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Destination</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "destination", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "type" => "text", "id" => "d_label_single", "class" => "form-control", "placeholder" => "Destination "]]);
        echo "
  </label>
  </div></div>



  
   
    
<button class=\"btn btn-dark\">";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 72, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button> 
    
";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
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
        return "voyage/_form.html.twig";
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
        return array (  139 => 74,  134 => 72,  122 => 63,  107 => 51,  87 => 34,  71 => 21,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{{ form_start(form , {'attr': {'novalidate':'novalidate'} }) }}
 
           <div class=\"my-custom-class-for-errors\">
            {{ form_errors(form) }}
        </div>
      

  



         <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Month</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
                    {{ form_widget(form.mois, {'attr': {'class': 'form-control border-top-0 border-left-0 border-right-0 rounded-0','placeholder':'Month '}}) }}
            </label>
  </div></div>
            


  <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Year</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  {{ form_widget(form.annee, {  'attr': {'class': 'form-control'  , 'id':'d_label_single' , 'class' : 'form-control' ,'placeholder':'Year ' }}) }}
  </label>
  </div></div>




    
 
              
     <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Ville Depart</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  {{ form_widget(form.villedepart, {  'attr': {'class': 'form-control' , 'type' : 'text' , 'id':'d_label_single' , 'class' : 'form-control' ,'placeholder':'Departure '}}) }}
  </label>
  </div></div>

 
       <div class=\"form-group\">
  <div class=\"row mb-5\">
  <div class=\"col-md\">
  <div class=\"form-group\">
  <label for=\"id_label_single\">Destination</label>
  <label for=\"id_label_single\" style=\"width: 60%;\">
 
  {{ form_widget(form.destination, {  'attr': {'class': 'form-control' , 'type' : 'text' , 'id':'d_label_single' , 'class' : 'form-control' ,'placeholder':'Destination '}}) }}
  </label>
  </div></div>



  
   
    
<button class=\"btn btn-dark\">{{ button_label|default('Save') }}</button> 
    
{{ form_end(form) }}
", "voyage/_form.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma+allyesmine\\templates\\voyage\\_form.html.twig");
    }
}
