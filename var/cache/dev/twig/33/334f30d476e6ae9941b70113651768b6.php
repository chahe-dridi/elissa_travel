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

/* voyage/clientF.html.twig */
class __TwigTemplate_c96a4082bbdb7da7af904f227b3393cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/clientF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/clientF.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "voyage/clientF.html.twig", 1);
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
        echo "
<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\"  id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center probootstrap-animate\">
                <h2 class=\"heading mb50\">Our Trips</h2>
            </div>
        </div>
    </div>
</section>



<br>

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 20
            echo "<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image\">
<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/voyages/voyageClient.jpg"), "html", null, true);
            echo "\" alt=\"Image de voyage\">
</div>


<div class=\"media-body\">
 


 <div class=\"text-center\">
  <div class=\"voyage-details\">
   <strong>Destination:</strong> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 35), "html", null, true);
            echo "
   
   </div></div>

   <div class=\"text-center\">
  <div class=\"voyage-details\">
   <strong> On </strong> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "mois", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "annee", [], "any", false, false, false, 41), "html", null, true);
            echo "
   </div> 





 <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_clientprog", ["voyageId" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Read More</a> <br>
 <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">\"comments\"</a>
</div>
</div>
</div></div>
 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo " ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 55, $this->source); })()));
        echo "


</div>
</section>


  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/clientF.html.twig";
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
        return array (  150 => 55,  138 => 49,  134 => 48,  122 => 41,  113 => 35,  100 => 25,  93 => 20,  89 => 19,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_user.html.twig' %}
{% block body %}

<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('{{ asset('assets/added_image/bg_1.jpg') }}');\"  id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center probootstrap-animate\">
                <h2 class=\"heading mb50\">Our Trips</h2>
            </div>
        </div>
    </div>
</section>



<br>

{% for voyage in pagination %}
<div class=\"container\">
<div class=\"row text-center mb-5 probootstrap-animate\">
<div class=\"col-md-12\">
<div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
<div class=\"probootstrap-media-image\" style=\"background-image\">
<img src=\"{{ asset('uploads/voyages/voyageClient.jpg') }}\" alt=\"Image de voyage\">
</div>


<div class=\"media-body\">
 


 <div class=\"text-center\">
  <div class=\"voyage-details\">
   <strong>Destination:</strong> {{voyage.destination  }}
   
   </div></div>

   <div class=\"text-center\">
  <div class=\"voyage-details\">
   <strong> On </strong> {{voyage.mois}} {{voyage.annee}}
   </div> 





 <a href=\"{{ path('app_programme_clientprog', {'voyageId': voyage.id}) }}\">Read More</a> <br>
 <a href=\"{{ path('front_blog_show', {'id': voyage.id}) }}\">\"comments\"</a>
</div>
</div>
</div></div>
 
 {% endfor %}
 {{ knp_pagination_render(pagination) }}


</div>
</section>


  {% endblock %}
", "voyage/clientF.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma+allyesmine\\templates\\voyage\\clientF.html.twig");
    }
}
