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

/* blog/show.html.twig */
class __TwigTemplate_ad853bec611975bbf475c6fbd9d9fdb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("nav_user.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section class=\"probootstrap-cover overflow-hidden relative\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/added_image/bg_1.jpg"), "html", null, true);
        echo "');\"  id=\"section-home\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center probootstrap-animate\">
                <h2 class=\"heading mb50\"> Comment Section</h2>
            </div>
        </div>
    </div>
</section>

<div class=\"text-center\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <h3>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
        </div>
        
        <div class=\"row\">
            ";
        // line 23
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23), "html", null, true));
        echo "
        </div>
        <div class=\"row\" style=\"margin-top: 15px\">
            <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_blog_like_unlike");
        echo "\" id=\"blog-like\" data-entity-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\"
               data-csrf-token=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("blog" . twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27))), "html", null, true);
        echo "\"
               data-liked=\"";
        // line 28
        echo ((((isset($context["isBlogAlreadyLiked"]) || array_key_exists("isBlogAlreadyLiked", $context) ? $context["isBlogAlreadyLiked"] : (function () { throw new RuntimeError('Variable "isBlogAlreadyLiked" does not exist.', 28, $this->source); })()) == true)) ? ("1") : ("0"));
        echo "\"
               class=\"btn-like\">&nbsp; <i class=\"far fa-thumbs-up ";
        // line 29
        echo ((((isset($context["isBlogAlreadyLiked"]) || array_key_exists("isBlogAlreadyLiked", $context) ? $context["isBlogAlreadyLiked"] : (function () { throw new RuntimeError('Variable "isBlogAlreadyLiked" does not exist.', 29, $this->source); })()) == true)) ? ("liked") : (""));
        echo "\">
                    ";
        // line 30
        echo ((((isset($context["isBlogAlreadyLiked"]) || array_key_exists("isBlogAlreadyLiked", $context) ? $context["isBlogAlreadyLiked"] : (function () { throw new RuntimeError('Variable "isBlogAlreadyLiked" does not exist.', 30, $this->source); })()) == true)) ? ("Unlike") : ("Like"));
        echo "
                </i>

            </a>
            &nbsp;<ul>
                <li>
                    ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "
                </li>
                <li>
                    ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 39, $this->source); })()), "createdAt", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true);
        echo "
                </li>

            </ul>
            
        </div>
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_clientF");
        echo "\">back to list</a>
    </div></div>
    <style>
        .btn-like {
            color: black;
        }

        .liked {
            color: royalblue;
        }
    </style>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).on('click', \"#blog-like\", function (e) {
            e.preventDefault();
            var url = \$(this).attr('href');
            var entityId = \$(this).attr('data-entity-id');
            var csrfToken = \$(this).attr('data-csrf-token');
            var isLiked = \$(this).attr('data-liked');
            if (isLiked === \"0\") {
                \$(this).attr('data-liked', 1);
                \$('.fa-thumbs-up').addClass('liked').text('Unlike')
            } else {
                \$(this).attr('data-liked', 0);
                \$('.fa-thumbs-up').removeClass('liked').text('Like')
            }
            \$.ajax({
                type: 'POST',
                dataType: 'json',
                data: {'entityId': entityId, 'csrfToken': csrfToken},
                url: url,
                success: function () {
                    location.reload();
                    console.log('Success');
                },
                error: function () {
                    // do something such reset icon like to its initial state
                    console.log('error')
                }
            });
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog/show.html.twig";
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
        return array (  157 => 56,  143 => 45,  134 => 39,  128 => 36,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  101 => 26,  95 => 23,  88 => 19,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                <h2 class=\"heading mb50\"> Comment Section</h2>
            </div>
        </div>
    </div>
</section>

<div class=\"text-center\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <h3>{{ blog.title }}</h3>
        </div>
        
        <div class=\"row\">
            {{ blog.content|nl2br }}
        </div>
        <div class=\"row\" style=\"margin-top: 15px\">
            <a href=\"{{ path('front_blog_like_unlike') }}\" id=\"blog-like\" data-entity-id=\"{{ blog.id }}\"
               data-csrf-token=\"{{ csrf_token( 'blog' ~ blog.id) }}\"
               data-liked=\"{{ isBlogAlreadyLiked == true ? '1' : '0' }}\"
               class=\"btn-like\">&nbsp; <i class=\"far fa-thumbs-up {{ isBlogAlreadyLiked == true ? 'liked' : '' }}\">
                    {{ isBlogAlreadyLiked == true ? 'Unlike' : 'Like' }}
                </i>

            </a>
            &nbsp;<ul>
                <li>
                    {{ count }}
                </li>
                <li>
                    {{ blog.createdAt|date('Y-m-d H:i:s') }}
                </li>

            </ul>
            
        </div>
        <a href=\"{{ path('app_voyage_clientF') }}\">back to list</a>
    </div></div>
    <style>
        .btn-like {
            color: black;
        }

        .liked {
            color: royalblue;
        }
    </style>
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script>
        \$(document).on('click', \"#blog-like\", function (e) {
            e.preventDefault();
            var url = \$(this).attr('href');
            var entityId = \$(this).attr('data-entity-id');
            var csrfToken = \$(this).attr('data-csrf-token');
            var isLiked = \$(this).attr('data-liked');
            if (isLiked === \"0\") {
                \$(this).attr('data-liked', 1);
                \$('.fa-thumbs-up').addClass('liked').text('Unlike')
            } else {
                \$(this).attr('data-liked', 0);
                \$('.fa-thumbs-up').removeClass('liked').text('Like')
            }
            \$.ajax({
                type: 'POST',
                dataType: 'json',
                data: {'entityId': entityId, 'csrfToken': csrfToken},
                url: url,
                success: function () {
                    location.reload();
                    console.log('Success');
                },
                error: function () {
                    // do something such reset icon like to its initial state
                    console.log('error')
                }
            });
        });
    </script>

{% endblock %}
", "blog/show.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\blog\\show.html.twig");
    }
}
