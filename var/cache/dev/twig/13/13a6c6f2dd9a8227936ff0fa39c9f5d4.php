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

/* type_evenement/afficher.html.twig */
class __TwigTemplate_f87837b238de69814a198505451e697e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_evenement/afficher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_evenement/afficher.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "type_evenement/afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CategorieController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Les Types Evenements</h1>
            <nav>


            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">


                        <div class=\"card-body\">

                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                                <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["noticedelete"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "                                <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                    ";
            // line 36
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            <h5 class=\"card-title\"></h5>
                            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddTypeEvenement");
        echo "\">
                                <button type=\"button\" style=\"float: right;padding: 10px;\" class=\"btn btn-outline-info\">Ajouter</button>



                            </a>

                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">TypeEvenement Name</th>
                                    <th scope=\"col\">TypeEvenement Description</th>


                                    <th scope=\"col\">Modifier</th>
                                    <th scope=\"col\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        ";
        // line 63
        if ((twig_length_filter($this->env, (isset($context["listS"]) || array_key_exists("listS", $context) ? $context["listS"] : (function () { throw new RuntimeError('Variable "listS" does not exist.', 63, $this->source); })())) == 0)) {
            // line 64
            echo "
                                            <p style=\"text-align: center\">Type Evenements vide</p>

                                        ";
        }
        // line 68
        echo "
                                    </td>
                                </tr>



                                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listS"]) || array_key_exists("listS", $context) ? $context["listS"] : (function () { throw new RuntimeError('Variable "listS" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 75
            echo "


                                    <tr>

                                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomType", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                      <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "typeDescription", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>

                                        


                        
                            
                                     <td>
    <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierTypeEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-outline-info\">
        Modifier
    </a>
</td>

<td>
    <a href=\"javascript:void(0)\" onclick=\"if(confirm('Voulez-vous vraiment supprimer ?')){window.location='";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppressionTypeEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "';}\" class=\"btn btn-outline-danger\">
        Supprimer
    </a>
</td>

                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

                        </div>

                    </div>
                </div>
            </div>
        </section>

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
        return "type_evenement/afficher.html.twig";
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
        return array (  241 => 103,  227 => 95,  218 => 89,  207 => 81,  203 => 80,  196 => 75,  192 => 74,  184 => 68,  178 => 64,  176 => 63,  151 => 41,  148 => 40,  138 => 36,  135 => 35,  131 => 34,  127 => 32,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav_admin.html.twig' %}

{% block title %}Hello CategorieController!{% endblock %}

{% block body %}

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Les Types Evenements</h1>
            <nav>


            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">


                        <div class=\"card-body\">

                            {% for message in app.flashes('notice') %}
                                <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                    {{ message }}
                                </div>

                            {% endfor %}


                            {% for message in app.flashes('noticedelete') %}
                                <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                    {{ message }}
                                </div>

                            {% endfor %}
                            <h5 class=\"card-title\"></h5>
                            <a href=\"{{ path('AddTypeEvenement') }}\">
                                <button type=\"button\" style=\"float: right;padding: 10px;\" class=\"btn btn-outline-info\">Ajouter</button>



                            </a>

                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">TypeEvenement Name</th>
                                    <th scope=\"col\">TypeEvenement Description</th>


                                    <th scope=\"col\">Modifier</th>
                                    <th scope=\"col\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        {% if listS | length == 0 %}

                                            <p style=\"text-align: center\">Type Evenements vide</p>

                                        {% endif %}

                                    </td>
                                </tr>



                                {% for p in listS  %}



                                    <tr>

                                        <td>{{p.nomType}}</td>
                                      <td>{{p.typeDescription}}</td>

                                        


                        
                            
                                     <td>
    <a href=\"{{ path('modifierTypeEvenement', {'id': p.id}) }}\" class=\"btn btn-outline-info\">
        Modifier
    </a>
</td>

<td>
    <a href=\"javascript:void(0)\" onclick=\"if(confirm('Voulez-vous vraiment supprimer ?')){window.location='{{ path('suppressionTypeEvent', {'id': p.id}) }}';}\" class=\"btn btn-outline-danger\">
        Supprimer
    </a>
</td>

                                    </tr>

                                {% endfor %}


                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

{% endblock %}", "type_evenement/afficher.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\type_evenement\\afficher.html.twig");
    }
}
