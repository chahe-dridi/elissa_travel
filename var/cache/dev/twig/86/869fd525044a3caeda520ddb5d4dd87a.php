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

/* voyage/index.html.twig */
class __TwigTemplate_c457d234e6da5335eaa03499a46952ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "voyage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid\"  style=\"margin-top: 10px; align-items:center;\">
<div class=\"row mb-5 probootstrap-animate\">

<div class=\"col-sm\" >
            
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
        echo "\" class=\"btn btn-dark\" >Add New Trip</a>
           
        </div>
    

<br>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col-sm-9\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "searchTerm", [], "any", false, false, false, 20), 'row');
        echo "
    </div>
    <div class=\"col-sm-3\">
        <button type=\"submit\" class=\"btn btn-dark btn-block\">Search</button>
    </div>
</div>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

         <div class=\"col-sm\" >
                    
         </div>
            </form>
</div>
</div>
<table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure city</th>
                <th>Distination</th>
                <th>Month</th>
                <th>Year</th>
                <th>actions</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 48
            echo "            <tr>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "villedepart", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                  <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "mois", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "annee", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
          
          

                <td>
                    
                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">edit</a>
                </td>
                <td>
                   <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_new", ["voyageId" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Plan trip</a>
                </td>
                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/index.html.twig";
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
        return array (  181 => 71,  172 => 67,  162 => 62,  156 => 59,  147 => 53,  143 => 52,  139 => 51,  135 => 50,  131 => 49,  128 => 48,  123 => 47,  99 => 26,  90 => 20,  84 => 17,  75 => 11,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}



{% block body %}
<div class=\"container-fluid\"  style=\"margin-top: 10px; align-items:center;\">
<div class=\"row mb-5 probootstrap-animate\">

<div class=\"col-sm\" >
            
                <a href=\"{{ path('app_voyage_new') }}\" class=\"btn btn-dark\" >Add New Trip</a>
           
        </div>
    

<br>
{{ form_start(form) }}
<div class=\"row\">
    <div class=\"col-sm-9\">
        {{ form_row(form.searchTerm) }}
    </div>
    <div class=\"col-sm-3\">
        <button type=\"submit\" class=\"btn btn-dark btn-block\">Search</button>
    </div>
</div>
{{ form_end(form) }}

         <div class=\"col-sm\" >
                    
         </div>
            </form>
</div>
</div>
<table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure city</th>
                <th>Distination</th>
                <th>Month</th>
                <th>Year</th>
                <th>actions</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
        {% for voyage in voyages %}
            <tr>
                <td>{{ voyage.id }}</td>
                <td>{{ voyage.villedepart }}</td>
                  <td>{{ voyage.destination }}</td>
                <td>{{ voyage.mois }}</td>
                <td>{{ voyage.annee }}</td>
          
          

                <td>
                    
                    <a href=\"{{ path('app_voyage_edit', {'id': voyage.id}) }}\">edit</a>
                </td>
                <td>
                   <a href=\"{{ path('app_programme_new', {'voyageId': voyage.id}) }}\">Plan trip</a>
                </td>
                
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>



{% endblock %}
", "voyage/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma+allyesmine\\templates\\voyage\\index.html.twig");
    }
}
