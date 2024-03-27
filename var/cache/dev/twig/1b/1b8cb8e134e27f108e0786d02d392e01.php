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

/* event/addEvent.html.twig */
class __TwigTemplate_4915d83d968572c8a725fba47bac5aa4 extends Template
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
        return "nav_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/addEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/addEvent.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "event/addEvent.html.twig", 1);
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
        echo "        <main id=\"main\" class=\"main\">

            <div class=\"pagetitle\">
                <h1>Formualire Ajout Event</h1>
                <nav>
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                        <li class=\"breadcrumb-item\">Forms</li>
                        <li class=\"breadcrumb-item active\">Event</li>
                    </ol>
                </nav>
            </div>


        <div class=\"row\">
            <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 0px; padding: 10px;\">

                <div class=\"card\">

                    <div class=\"card-body\">
                        <h5 clss=\"card-title\">Ajouter Event</h5>

                        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">NomEvent</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), "NomEvent", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 30, $this->source); })()), "NomEvent", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">AdresseEvent</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 36, $this->source); })()), "AdresseEvent", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "AdresseEvent", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                            </div>
                        </div>
                
                         <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nbrtickets Dispo</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), "nbrticketsdispo", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "nbrticketsdispo", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                          <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">datedebutEvent</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 52, $this->source); })()), "datedebutEvent", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 53, $this->source); })()), "datedebutEvent", [], "any", false, false, false, 53), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                          <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">datefinevent</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 59, $this->source); })()), "datefinevent", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), "datefinevent", [], "any", false, false, false, 60), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                         <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">prixentre</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 66, $this->source); })()), "prixentre", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 67, $this->source); })()), "prixentre", [], "any", false, false, false, 67), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "imageevent", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">TypeEvenement</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 80, $this->source); })()), "TypeEvenement", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), "TypeEvenement", [], "any", false, false, false, 81), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>




                     
                        <br/>
                        <br/>
                     <div class=\"row mb-3\">
                            <div class=\"col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">S'enregistrer</button>

                            </div>
                        </div>
                        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
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
        return "event/addEvent.html.twig";
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
        return array (  212 => 97,  193 => 81,  189 => 80,  179 => 73,  170 => 67,  166 => 66,  157 => 60,  153 => 59,  144 => 53,  140 => 52,  131 => 46,  127 => 45,  116 => 37,  112 => 36,  103 => 30,  99 => 29,  92 => 25,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}
{% block body %}
        <main id=\"main\" class=\"main\">

            <div class=\"pagetitle\">
                <h1>Formualire Ajout Event</h1>
                <nav>
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                        <li class=\"breadcrumb-item\">Forms</li>
                        <li class=\"breadcrumb-item active\">Event</li>
                    </ol>
                </nav>
            </div>


        <div class=\"row\">
            <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 0px; padding: 10px;\">

                <div class=\"card\">

                    <div class=\"card-body\">
                        <h5 clss=\"card-title\">Ajouter Event</h5>

                        {{ form_start(f,{attr:{novalidate:'novalidate'}}) }}
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">NomEvent</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.NomEvent,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(f.NomEvent,{'attr':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">AdresseEvent</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.AdresseEvent,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(f.AdresseEvent,{'attr':{'class':'text-danger'}}) }}

                            </div>
                        </div>
                
                         <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nbrtickets Dispo</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.nbrticketsdispo,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(f.nbrticketsdispo,{'attr':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                          <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">datedebutEvent</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.datedebutEvent,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(f.datedebutEvent,{'attr':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                          <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">datefinevent</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.datefinevent,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(f.datefinevent,{'attr':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                         <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">prixentre</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.prixentre,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(f.prixentre,{'attr':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.imageevent,{'attr':{'class':'form-control'}}) }}

                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">TypeEvenement</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(f.TypeEvenement,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(f.TypeEvenement,{'attr':{'class':'text-danger'}}) }}
                            </div>
                        </div>




                     
                        <br/>
                        <br/>
                     <div class=\"row mb-3\">
                            <div class=\"col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">S'enregistrer</button>

                            </div>
                        </div>
                        {{ form_end(f) }}
                    </div>
                </div>
            </div>
        </div>

        </main>
{% endblock %}", "event/addEvent.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\event\\addEvent.html.twig");
    }
}
