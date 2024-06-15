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

/* programme/clientprog.html.twig */
class __TwigTemplate_4b233e6f166f4537f3de6d11aa4a8eb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/clientprog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/clientprog.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "programme/clientprog.html.twig", 1);
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
        echo "<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\"  id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center probootstrap-animate\">
                <h2 class=\"heading mb50\">Programs</h2>
            </div>
        </div>
    </div>
</section>





<div class=\"row probootstrap-animate\">
<div class=\"col-md-12\">
  <div class=\"owl-carousel js-owl-carousel\">
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "
<div class=\"probootstrap-slide text-primary font-italic\">
    <a >";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "
    </a><br>



    <strong> FROM </strong> ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "datedebut", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
            echo " <strong> TO </strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "datefin", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
            echo "



<br>
   <strong>prix:</strong> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 34), "html", null, true);
            echo "  <strong>\$</strong>
    <br>
    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_generate_qr_code", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">generate QrCode</a>



</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
    <div class=\"text-center\">
     <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_voyage_new");
        echo "\" class=\"btn btn-dark\" >Reservation</a>
     </div>




</div></div>

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
        return "programme/clientprog.html.twig";
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
        return array (  137 => 43,  133 => 41,  121 => 36,  116 => 34,  106 => 29,  98 => 24,  94 => 22,  90 => 21,  68 => 3,  58 => 2,  35 => 1,);
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
                <h2 class=\"heading mb50\">Programs</h2>
            </div>
        </div>
    </div>
</section>





<div class=\"row probootstrap-animate\">
<div class=\"col-md-12\">
  <div class=\"owl-carousel js-owl-carousel\">
{% for p in programme %}

<div class=\"probootstrap-slide text-primary font-italic\">
    <a >{{p.description }}
    </a><br>



    <strong> FROM </strong> {{ p.datedebut|date('Y-m-d') }} <strong> TO </strong> {{p.datefin|date('Y-m-d')}}



<br>
   <strong>prix:</strong> {{p.prix }}  <strong>\$</strong>
    <br>
    <a href=\"{{ path('app_programme_generate_qr_code',{'id': p.id}) }}\" class=\"btn btn-dark\">generate QrCode</a>



</div>
{% endfor %}</div>
    <div class=\"text-center\">
     <a href=\"{{ path('app_reservation_voyage_new') }}\" class=\"btn btn-dark\" >Reservation</a>
     </div>




</div></div>

</div>
</section>















{% endblock %}", "programme/clientprog.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\programme\\clientprog.html.twig");
    }
}
