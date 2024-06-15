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

/* chambre/new.html.twig */
class __TwigTemplate_ee709c4b673a4f0a52bea94b12141a3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/new.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/css/styles.min.css"), "html", null, true);
        echo "\" />
    <style>
        .container-fluid {
            margin-top: 64px;
        }

        .form-container {
            max-width: 800px; /* Augmenter la largeur du conteneur du formulaire */
            margin: 0 auto;
            padding: 40px; /* Augmenter l'espacement intérieur du conteneur */
            border: 1px solid #ccc;
            border-radius: 10px; /* Augmenter le rayon des bords */
            background-color: #f9f9f9;
        }

        .form-title {
            margin-top: 0;
            margin-bottom: 30px; /* Augmenter l'espacement en dessous du titre */
            font-size: 28px; /* Augmenter la taille du titre */
            text-align: center;
        }

        .form-control {
            margin-bottom: 20px; /* Espacement entre les contrôles */
            border-radius: 10px; /* Arrondir les bords des contrôles */
        }

        .form-check-input {
            width: auto; /* Réinitialiser la largeur des cases à auto */
            margin-top: 5px; /* Espacement en haut de chaque case */
        }

        .form-check-label {
            margin-left: 10px; /* Espacement entre la case et l'étiquette */
        }

        .form-back-link,
        .form-submit-button {
            display: inline-block;
            padding: 15px 30px; /* Augmenter la taille des boutons */
            margin-top: 30px; /* Augmenter l'espacement au-dessus des boutons */
            border: none;
            border-radius: 10px; /* Augmenter le rayon des bords */
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s;
        }

        .form-back-link {
            background-color: #007bff;
        }

        .form-back-link:hover {
            background-color: #0056b3;
        }

        .form-submit-button {
            background-color: #28a745;
        }

        .form-submit-button:hover {
            background-color: #218838;
        }

        .flash-message {
            margin-bottom: 30px; /* Augmenter l'espacement en dessous des messages flash */
            padding: 15px; /* Augmenter le rembourrage des messages flash */
            border-radius: 10px; /* Augmenter le rayon des bords */
            text-align: center;
            color: #fff;
        }

        .flash-message-error {
            background-color: #dc3545;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "    <div class=\"container-fluid\">
        <title>New Chambre</title>

        <div class=\"form-container\">
            <h1 class=\"form-title\">Create new Chambre</h1>

            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", ["error"], "method", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 90
            echo "                <div class=\"flash-message flash-message-error\">
                    ";
            // line 91
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
            ";
        // line 95
        echo twig_include($this->env, $context, "chambre/_form.html.twig");
        echo "

            <a class=\"form-back-link\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambre_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 97, $this->source); })())]), "html", null, true);
        echo "\">Back to List</a>
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
        return "chambre/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  202 => 97,  197 => 95,  194 => 94,  185 => 91,  182 => 90,  178 => 89,  170 => 83,  160 => 82,  70 => 2,  60 => 1,  50 => 82,  47 => 81,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets_admin/css/styles.min.css') }}\" />
    <style>
        .container-fluid {
            margin-top: 64px;
        }

        .form-container {
            max-width: 800px; /* Augmenter la largeur du conteneur du formulaire */
            margin: 0 auto;
            padding: 40px; /* Augmenter l'espacement intérieur du conteneur */
            border: 1px solid #ccc;
            border-radius: 10px; /* Augmenter le rayon des bords */
            background-color: #f9f9f9;
        }

        .form-title {
            margin-top: 0;
            margin-bottom: 30px; /* Augmenter l'espacement en dessous du titre */
            font-size: 28px; /* Augmenter la taille du titre */
            text-align: center;
        }

        .form-control {
            margin-bottom: 20px; /* Espacement entre les contrôles */
            border-radius: 10px; /* Arrondir les bords des contrôles */
        }

        .form-check-input {
            width: auto; /* Réinitialiser la largeur des cases à auto */
            margin-top: 5px; /* Espacement en haut de chaque case */
        }

        .form-check-label {
            margin-left: 10px; /* Espacement entre la case et l'étiquette */
        }

        .form-back-link,
        .form-submit-button {
            display: inline-block;
            padding: 15px 30px; /* Augmenter la taille des boutons */
            margin-top: 30px; /* Augmenter l'espacement au-dessus des boutons */
            border: none;
            border-radius: 10px; /* Augmenter le rayon des bords */
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s;
        }

        .form-back-link {
            background-color: #007bff;
        }

        .form-back-link:hover {
            background-color: #0056b3;
        }

        .form-submit-button {
            background-color: #28a745;
        }

        .form-submit-button:hover {
            background-color: #218838;
        }

        .flash-message {
            margin-bottom: 30px; /* Augmenter l'espacement en dessous des messages flash */
            padding: 15px; /* Augmenter le rembourrage des messages flash */
            border-radius: 10px; /* Augmenter le rayon des bords */
            text-align: center;
            color: #fff;
        }

        .flash-message-error {
            background-color: #dc3545;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <title>New Chambre</title>

        <div class=\"form-container\">
            <h1 class=\"form-title\">Create new Chambre</h1>

            {% for flashError in app.flashes('error') %}
                <div class=\"flash-message flash-message-error\">
                    {{ flashError }}
                </div>
            {% endfor %}

            {{ include('chambre/_form.html.twig') }}

            <a class=\"form-back-link\" href=\"{{ path('app_chambre_index', {'id': id}) }}\">Back to List</a>
        </div>
    </div>
{% endblock %}
", "chambre/new.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\chambre\\new.html.twig");
    }
}
