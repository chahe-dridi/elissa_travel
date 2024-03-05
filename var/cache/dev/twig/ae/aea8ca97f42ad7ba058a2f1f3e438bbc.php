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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_bf9072b09d692020fdb97f1e105aaf2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "events", [], "any", false, false, false, 4);
        // line 5
        echo "
    ";
        // line 6
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $this->loadTemplate("@WebProfiler/Icon/mailer.svg", "@WebProfiler/Collector/mailer.html.twig", 8)->display($context);
            // line 9
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "messages", [], "any", false, false, false, 9)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 15, $this->source); })()), "events", [], "any", false, false, false, 15), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 15, $this->source); })()), "isQueued", [], "method", false, false, false, 15); })), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "events", [], "any", false, false, false, 19), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 19, $this->source); })()), "isQueued", [], "method", false, false, false, 19); })), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            echo "
        ";
            // line 23
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 23, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 28
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 65
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "events", [], "any", false, false, false, 65);
        // line 66
        echo "
    <span class=\"label ";
        // line 67
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 67, $this->source); })()), "messages", [], "any", false, false, false, 67))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 68
        echo twig_include($this->env, $context, "@WebProfiler/Icon/mailer.svg");
        echo "</span>

        <strong>E-mails</strong>
        ";
        // line 71
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 71, $this->source); })()), "messages", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            echo "            <span class=\"count\">
                <span>";
            // line 73
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 73, $this->source); })()), "messages", [], "any", false, false, false, 73)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 76
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 80
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "events", [], "any", false, false, false, 80);
        // line 81
        echo "
    <h2>Emails</h2>

    ";
        // line 84
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 84, $this->source); })()), "messages", [], "any", false, false, false, 84))) {
            // line 85
            echo "        <div class=\"empty\">
            <p>No emails were sent.</p>
        </div>
    ";
        }
        // line 89
        echo "
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 92
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 92, $this->source); })()), "events", [], "any", false, false, false, 92), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 92, $this->source); })()), "isQueued", [], "method", false, false, false, 92); })), "html", null, true);
        echo "</span>
            <span class=\"label\">Queued</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 97
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 97, $this->source); })()), "events", [], "any", false, false, false, 97), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 97, $this->source); })()), "isQueued", [], "method", false, false, false, 97); })), "html", null, true);
        echo "</span>
            <span class=\"label\">Sent</span>
        </div>
    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 102, $this->source); })()), "transports", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            echo "        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 105, $this->source); })()), "events", [$context["transport"]], "method", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 106
                echo "                    ";
                $context["message"] = twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 106);
                // line 107
                echo "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Email ";
                // line 108
                ((twig_get_attribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, false, 108)) ? (print ("queued")) : (print (twig_escape_filter($this->env, ("sent via " . $context["transport"]), "html", null, true))));
                echo "</h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                ";
                // line 111
                if ( !twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 111)) {
                    // line 112
                    echo "                                    ";
                    // line 113
                    echo "                                    <div class=\"card-block\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 114, $this->source); })()), "toString", [], "method", false, false, false, 114), "html", null, true);
                    echo "</pre>
                                    </div>
                                ";
                } else {
                    // line 117
                    echo "                                    ";
                    // line 118
                    echo "                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Headers</h3>
                                                <div class=\"tab-content\">
                                                    <span class=\"label\">Subject</span>
                                                    ";
                    // line 124
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "subject", [], "any", true, true, false, 124)) {
                        // line 125
                        echo "                                                        ";
                        // line 126
                        echo "                                                        <h2 class=\"m-t-10\">";
                        (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 126) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 126)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 126), "html", null, true))) : (print ("(empty)")));
                        echo "</h2>
                                                    ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 127
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 127, $this->source); })()), "headers", [], "any", false, false, false, 127), "has", ["subject"], "method", false, false, false, 127)) {
                        // line 128
                        echo "                                                        <h2 class=\"m-t-10\">";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 128), "get", ["subject"], "method", false, true, false, 128), "bodyAsString", [], "method", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 128), "get", ["subject"], "method", false, true, false, 128), "bodyAsString", [], "method", false, false, false, 128), "(empty)")) : ("(empty)")), "html", null, true);
                        echo "</h2>
                                                    ";
                    } else {
                        // line 130
                        echo "                                                        <h2 class=\"m-t-10\">(empty)</h2>
                                                    ";
                    }
                    // line 132
                    echo "                                                    <div class=\"row\">
                                                        <div class=\"col col-4\">
                                                            <span class=\"label\">From</span>
                                                            ";
                    // line 135
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "from", [], "any", true, true, false, 135)) {
                        // line 136
                        echo "                                                                ";
                        // line 137
                        echo "                                                                <pre class=\"prewrap\">";
                        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 137, $this->source); })()), "getFrom", [], "method", false, false, false, 137), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 137, $this->source); })()), "toString", [], "method", false, false, false, 137); }), ", "), "(empty)"), "html", null, true);
                        echo "</pre>
                                                            ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 138
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 138, $this->source); })()), "headers", [], "any", false, false, false, 138), "has", ["from"], "method", false, false, false, 138)) {
                        // line 139
                        echo "                                                                <pre class=\"prewrap\">";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 139), "get", ["from"], "method", false, true, false, 139), "bodyAsString", [], "method", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 139), "get", ["from"], "method", false, true, false, 139), "bodyAsString", [], "method", false, false, false, 139), "(empty)")) : ("(empty)")), "html", null, true);
                        echo "</pre>
                                                            ";
                    } else {
                        // line 141
                        echo "                                                                <pre class=\"prewrap\">(empty)</pre>
                                                            ";
                    }
                    // line 143
                    echo "
                                                            <span class=\"label\">To</span>
                                                            ";
                    // line 145
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "to", [], "any", true, true, false, 145)) {
                        // line 146
                        echo "                                                                ";
                        // line 147
                        echo "                                                                <pre class=\"prewrap\">";
                        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 147, $this->source); })()), "getTo", [], "method", false, false, false, 147), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 147, $this->source); })()), "toString", [], "method", false, false, false, 147); }), ", "), "(empty)"), "html", null, true);
                        echo "</pre>
                                                            ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 148
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 148, $this->source); })()), "headers", [], "any", false, false, false, 148), "has", ["to"], "method", false, false, false, 148)) {
                        // line 149
                        echo "                                                                <pre class=\"prewrap\">";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 149), "get", ["to"], "method", false, true, false, 149), "bodyAsString", [], "method", true, true, false, 149)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 149), "get", ["to"], "method", false, true, false, 149), "bodyAsString", [], "method", false, false, false, 149), "(empty)")) : ("(empty)")), "html", null, true);
                        echo "</pre>
                                                            ";
                    } else {
                        // line 151
                        echo "                                                                <pre class=\"prewrap\">(empty)</pre>
                                                            ";
                    }
                    // line 153
                    echo "                                                        </div>
                                                        <div class=\"col\">
                                                            <span class=\"label\">Headers</span>
                                                            <pre class=\"prewrap\">";
                    // line 156
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 156, $this->source); })()), "headers", [], "any", false, false, false, 156), "all", [], "any", false, false, false, 156), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !twig_in_filter(twig_lower_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 156) &&  !(null === twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 156)))) ? (twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 156)) : (""))), ["subject", "from", "to"]); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 157
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 157), "html", null, true);
                        echo "
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "</pre>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                    // line 163
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 163)) {
                        // line 164
                        echo "                                                ";
                        // line 165
                        echo "                                                ";
                        $context["htmlBody"] = twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 165, $this->source); })()), "htmlBody", [], "method", false, false, false, 165);
                        // line 166
                        echo "                                                ";
                        if ( !(null === (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 166, $this->source); })()))) {
                            // line 167
                            echo "                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">HTML Preview</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                                <iframe
                                                                    src=\"data:text/html;charset=utf-8;base64,";
                            // line 172
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "base64Encode", [(isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 172, $this->source); })())], "method", false, false, false, 172), "html", null, true);
                            echo "\"
                                                                    style=\"height: 80vh;width: 100%;\"
                                                                >
                                                                </iframe>
                                                            </pre>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">HTML Content</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">";
                            // line 183
                            if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 183, $this->source); })()), "htmlCharset", [], "method", false, false, false, 183)) {
                                // line 184
                                echo twig_escape_filter($this->env, twig_convert_encoding((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 184, $this->source); })()), "UTF-8", twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 184, $this->source); })()), "htmlCharset", [], "method", false, false, false, 184)), "html", null, true);
                            } else {
                                // line 186
                                echo twig_escape_filter($this->env, (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 186, $this->source); })()), "html", null, true);
                            }
                            // line 188
                            echo "</pre>
                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 192
                        echo "                                                ";
                        $context["textBody"] = twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 192, $this->source); })()), "textBody", [], "method", false, false, false, 192);
                        // line 193
                        echo "                                                ";
                        if ( !(null === (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 193, $this->source); })()))) {
                            // line 194
                            echo "                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Text Content</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">";
                            // line 198
                            if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 198, $this->source); })()), "textCharset", [], "method", false, false, false, 198)) {
                                // line 199
                                echo twig_escape_filter($this->env, twig_convert_encoding((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 199, $this->source); })()), "UTF-8", twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 199, $this->source); })()), "textCharset", [], "method", false, false, false, 199)), "html", null, true);
                            } else {
                                // line 201
                                echo twig_escape_filter($this->env, (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 201, $this->source); })()), "html", null, true);
                            }
                            // line 203
                            echo "</pre>
                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 207
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 207, $this->source); })()), "attachments", [], "any", false, false, false, 207));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            // line 208
                            echo "                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Attachment #";
                            // line 209
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 209), "html", null, true);
                            echo "</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">";
                            // line 211
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "toString", [], "method", false, false, false, 211), "html", null, true);
                            echo "</pre>
                                                        </div>
                                                    </div>
                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 215
                        echo "                                            ";
                    } else {
                        // line 216
                        echo "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Content</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                        // line 219
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 219, $this->source); })()), "body", [], "method", false, false, false, 219), "toString", [], "method", false, false, false, 219), "html", null, true);
                        echo "</pre>
                                                    </div>
                                                </div>
                                            ";
                    }
                    // line 223
                    echo "                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Parts Hierarchy</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 226, $this->source); })()), "body", [], "method", false, false, false, 226), "asDebugString", [], "method", false, false, false, 226), "html", null, true);
                    echo "</pre>
                                                </div>
                                            </div>
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Raw</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 232
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 232, $this->source); })()), "toString", [], "method", false, false, false, 232), "html", null, true);
                    echo "</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 238
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  583 => 242,  574 => 238,  565 => 232,  556 => 226,  551 => 223,  544 => 219,  539 => 216,  536 => 215,  518 => 211,  513 => 209,  510 => 208,  492 => 207,  486 => 203,  483 => 201,  480 => 199,  478 => 198,  473 => 194,  470 => 193,  467 => 192,  461 => 188,  458 => 186,  455 => 184,  453 => 183,  440 => 172,  433 => 167,  430 => 166,  427 => 165,  425 => 164,  423 => 163,  416 => 158,  408 => 157,  404 => 156,  399 => 153,  395 => 151,  389 => 149,  387 => 148,  382 => 147,  380 => 146,  378 => 145,  374 => 143,  370 => 141,  364 => 139,  362 => 138,  357 => 137,  355 => 136,  353 => 135,  348 => 132,  344 => 130,  338 => 128,  336 => 127,  331 => 126,  329 => 125,  327 => 124,  319 => 118,  317 => 117,  311 => 114,  308 => 113,  306 => 112,  304 => 111,  298 => 108,  295 => 107,  292 => 106,  288 => 105,  284 => 103,  280 => 102,  272 => 97,  264 => 92,  259 => 89,  253 => 85,  251 => 84,  246 => 81,  243 => 80,  233 => 79,  222 => 76,  216 => 73,  213 => 72,  211 => 71,  205 => 68,  201 => 67,  198 => 66,  195 => 65,  185 => 64,  139 => 28,  129 => 27,  116 => 23,  113 => 22,  107 => 19,  100 => 15,  96 => 13,  94 => 12,  91 => 11,  85 => 9,  82 => 8,  79 => 7,  77 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {% include('@WebProfiler/Icon/mailer.svg') %}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => e.isQueued())|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/mailer.svg') }}</span>

        <strong>E-mails</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}

    <h2>Emails</h2>

    {% if not events.messages|length %}
        <div class=\"empty\">
            <p>No emails were sent.</p>
        </div>
    {% endif %}

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ events.events|filter(e => e.isQueued())|length }}</span>
            <span class=\"label\">Queued</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
            <span class=\"label\">Sent</span>
        </div>
    </div>

    {% for transport in events.transports %}
        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                {% for event in events.events(transport) %}
                    {% set message = event.message %}
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Email {{ event.isQueued() ? 'queued' : 'sent via ' ~ transport }}</h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                {% if message.headers is not defined %}
                                    {# RawMessage instance #}
                                    <div class=\"card-block\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\">{{ message.toString() }}</pre>
                                    </div>
                                {% else %}
                                    {# Message instance #}
                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Headers</h3>
                                                <div class=\"tab-content\">
                                                    <span class=\"label\">Subject</span>
                                                    {% if message.subject is defined %}
                                                        {# Email instance #}
                                                        <h2 class=\"m-t-10\">{{ message.getSubject() ?? '(empty)' }}</h2>
                                                    {% elseif message.headers.has('subject') %}
                                                        <h2 class=\"m-t-10\">{{ message.headers.get('subject').bodyAsString()|default('(empty)') }}</h2>
                                                    {% else %}
                                                        <h2 class=\"m-t-10\">(empty)</h2>
                                                    {% endif %}
                                                    <div class=\"row\">
                                                        <div class=\"col col-4\">
                                                            <span class=\"label\">From</span>
                                                            {% if message.from is defined %}
                                                                {# Email instance #}
                                                                <pre class=\"prewrap\">{{ message.getFrom()|map(addr => addr.toString())|join(', ')|default('(empty)') }}</pre>
                                                            {% elseif message.headers.has('from') %}
                                                                <pre class=\"prewrap\">{{ message.headers.get('from').bodyAsString()|default('(empty)') }}</pre>
                                                            {% else %}
                                                                <pre class=\"prewrap\">(empty)</pre>
                                                            {% endif %}

                                                            <span class=\"label\">To</span>
                                                            {% if message.to is defined %}
                                                                {# Email instance #}
                                                                <pre class=\"prewrap\">{{ message.getTo()|map(addr => addr.toString())|join(', ')|default('(empty)') }}</pre>
                                                            {% elseif message.headers.has('to') %}
                                                                <pre class=\"prewrap\">{{ message.headers.get('to').bodyAsString()|default('(empty)') }}</pre>
                                                            {% else %}
                                                                <pre class=\"prewrap\">(empty)</pre>
                                                            {% endif %}
                                                        </div>
                                                        <div class=\"col\">
                                                            <span class=\"label\">Headers</span>
                                                            <pre class=\"prewrap\">{% for header in message.headers.all|filter(header => (header.name ?? '')|lower not in ['subject', 'from', 'to']) %}
                                                                {{- header.toString }}
                                                            {%~ endfor %}</pre>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {% if message.htmlBody is defined %}
                                                {# Email instance #}
                                                {% set htmlBody = message.htmlBody() %}
                                                {% if htmlBody is not null %}
                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">HTML Preview</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                                <iframe
                                                                    src=\"data:text/html;charset=utf-8;base64,{{ collector.base64Encode(htmlBody) }}\"
                                                                    style=\"height: 80vh;width: 100%;\"
                                                                >
                                                                </iframe>
                                                            </pre>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">HTML Content</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                                {%- if message.htmlCharset() %}
                                                                    {{- htmlBody|convert_encoding('UTF-8', message.htmlCharset()) }}
                                                                {%- else %}
                                                                    {{- htmlBody }}
                                                                {%- endif -%}
                                                            </pre>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                {% set textBody = message.textBody() %}
                                                {% if textBody is not null %}
                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Text Content</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                                {%- if message.textCharset() %}
                                                                    {{- textBody|convert_encoding('UTF-8', message.textCharset()) }}
                                                                {%- else %}
                                                                    {{- textBody }}
                                                                {%- endif -%}
                                                            </pre>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                {% for attachment in message.attachments %}
                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Attachment #{{ loop.index }}</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">{{ attachment.toString() }}</pre>
                                                        </div>
                                                    </div>
                                                {% endfor %}
                                            {% else %}
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Content</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">{{ message.body().toString() }}</pre>
                                                    </div>
                                                </div>
                                            {% endif %}
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Parts Hierarchy</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">{{ message.body().asDebugString() }}</pre>
                                                </div>
                                            </div>
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Raw</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">{{ message.toString() }}</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "@WebProfiler/Collector/mailer.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\mailer.html.twig");
    }
}
