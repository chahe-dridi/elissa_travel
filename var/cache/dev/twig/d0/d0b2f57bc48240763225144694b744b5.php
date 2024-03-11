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

/* back/user/index.html.twig */
class __TwigTemplate_1aed27eb82a366a6baf14d6d78e08a14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'title_h1' => [$this, 'block_title_h1'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/index.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "back/user/index.html.twig", 1);
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

        echo "Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        echo "Gestion des utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
    <div class=\"card shadow my-4\">
        <div class=\"card-header py-2 d-flex align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Utilisateurs</h6>
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_add");
        echo "\" class=\"btn btn-success btn-icon-split ml-auto\">
                <span class=\"icon text-white-50\">
                    <i class=\"fas fa-plus\"></i>
                </span>
                <span class=\"text\">Ajouter un utilisateur</span>
            </a>
        </div>
        <div class=\"card-body\">
           <div class=\"d-flex\">
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_pdf");
        echo "\" class=\"btn btn-primary\">Generate PDF</a>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "searchTerm", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "

        </div>
            <div class=\"table-responsive\">
            
    ";
        // line 36
        if ( !twig_test_empty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "        <h2>Search Results</h2>
                <table class=\"table table-bordered\" id=\"table\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th onclick=\"sortTable(1)\">Nom</th>
                            <th>Email</th>
                            <th>Nom d'utilisateur</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 52
                echo "                        <tr>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 58)) ? ("Enabled") : ("Disabled"));
                echo "
                            <td>
                                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" class=\"btn btn-info\">
                                    Show
                                </a>
                                
                        <form method=\"post\" action=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Status", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">
                            <button type=\"submit\" class =\"btn btn-info\">Toggle Status</button>
                        </form>
                    
                                ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 68) == "Utilisateur")) {
                    // line 69
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">
                                       Edit
                                    </a>
                                    <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                    echo "\" class=\"btn btn-danger\">
                                        Delete
                                    </a>
                                ";
                }
                // line 76
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    </tbody>
                </table>
                   ";
        }
        // line 82
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/user/index.html.twig";
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
        return array (  264 => 82,  259 => 79,  251 => 76,  244 => 72,  237 => 69,  235 => 68,  228 => 64,  221 => 60,  216 => 58,  212 => 57,  208 => 56,  204 => 55,  200 => 54,  196 => 53,  193 => 52,  189 => 51,  173 => 37,  171 => 36,  163 => 31,  158 => 29,  154 => 28,  150 => 27,  138 => 18,  132 => 14,  122 => 13,  109 => 8,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"nav_admin.html.twig\" %}

{% block title %}Utilisateurs{% endblock %}

{% block title_h1 %}Gestion des utilisateurs{% endblock %}

{% block stylesheets %}
  <link href=\"{{ asset(\"assets_admin/vendor/datatables/dataTables.bootstrap4.min.css\") }}\" rel=\"stylesheet\">
{% endblock %}



{% block body %}

    <div class=\"card shadow my-4\">
        <div class=\"card-header py-2 d-flex align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Utilisateurs</h6>
            <a href=\"{{ path(\"admin_user_add\") }}\" class=\"btn btn-success btn-icon-split ml-auto\">
                <span class=\"icon text-white-50\">
                    <i class=\"fas fa-plus\"></i>
                </span>
                <span class=\"text\">Ajouter un utilisateur</span>
            </a>
        </div>
        <div class=\"card-body\">
           <div class=\"d-flex\">
            <a href=\"{{ path('users_pdf') }}\" class=\"btn btn-primary\">Generate PDF</a>
            {{ form_start(form) }}
    {{ form_row(form.searchTerm, {'attr': {'class': 'form-control'}}) }}
    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
{{ form_end(form) }}

        </div>
            <div class=\"table-responsive\">
            
    {% if users is not empty %}
        <h2>Search Results</h2>
                <table class=\"table table-bordered\" id=\"table\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th onclick=\"sortTable(1)\">Nom</th>
                            <th>Email</th>
                            <th>Nom d'utilisateur</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <td>{{ user.firstName }}</td>
                            <td>{{ user.lastName }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.username }}</td>
                            <td>{{ user.roleTitle  }}</td>
                            <td>{{user.isVerified ? 'Enabled' : 'Disabled'}}
                            <td>
                                <a href=\"{{ path(\"admin_user_show\", {\"id\": user.id}) }}\" class=\"btn btn-info\">
                                    Show
                                </a>
                                
                        <form method=\"post\" action=\"{{ path('Status', {'id': user.id}) }}\">
                            <button type=\"submit\" class =\"btn btn-info\">Toggle Status</button>
                        </form>
                    
                                {% if user.roleTitle == \"Utilisateur\" %}
                                    <a href=\"{{ path(\"admin_user_edit\", {\"id\": user.id}) }}\" class=\"btn btn-primary\">
                                       Edit
                                    </a>
                                    <a href=\"{{ path(\"admin_user_delete\", {\"id\": user.id}) }}\" class=\"btn btn-danger\">
                                        Delete
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                   {% endif %}
            </div>
        </div>
    </div>

{% endblock %}

", "back/user/index.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\back\\user\\index.html.twig");
    }
}
