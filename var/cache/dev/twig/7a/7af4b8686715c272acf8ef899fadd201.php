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

/* back/user/show.html.twig */
class __TwigTemplate_4c3c9f4b5f426182859447e55db4d96f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_admin.html.twig", "back/user/show.html.twig", 1);
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

        echo "Détails d'un utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"card border-left-info shadow h-100 py-2 my-4\">
        <div class=\"card-body\">
            <h2 class=\"card-title text-uppercase text-info mb-0\"><i class=\"fas fa-user fa-x2 text-gray-500 mr-3\"></i>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "fullName", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
            <div class=\"row no-gutters align-items-center\">
                <div class=\"text-gray-400 mb-2\">
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
            <div class=\"py-3\">
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Email :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Nom d'utilisateur :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Rôle : </h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "roleTitle", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
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
        return "back/user/show.html.twig";
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
        return array (  144 => 33,  135 => 27,  126 => 21,  113 => 11,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"nav_admin.html.twig\" %}

{% block title \"Utilisateurs\" %}

{% block title_h1 \"Détails d'un utilisateur\" %}

{% block body %}

    <div class=\"card border-left-info shadow h-100 py-2 my-4\">
        <div class=\"card-body\">
            <h2 class=\"card-title text-uppercase text-info mb-0\"><i class=\"fas fa-user fa-x2 text-gray-500 mr-3\"></i>{{ user.fullName }}</h2>
            <div class=\"row no-gutters align-items-center\">
                <div class=\"text-gray-400 mb-2\">
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
            <div class=\"py-3\">
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Email :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.email }}</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Nom d'utilisateur :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.username }}</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Rôle : </h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.roleTitle }}</p>
                    </div>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
        </div>
    </div>

{% endblock %}
", "back/user/show.html.twig", "D:\\3A50\\integration\\elissa_travel-main\\templates\\back\\user\\show.html.twig");
    }
}
