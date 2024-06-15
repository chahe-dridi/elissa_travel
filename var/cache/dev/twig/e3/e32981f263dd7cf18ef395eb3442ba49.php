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

/* nav_admin.html.twig */
class __TwigTemplate_c3ce2d0a82ba42bc472aaf0804252128 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav_admin.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Elissa Travel Travel</title>
  
  
  <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/images/logos/favicon.png"), "html", null, true);
        echo "\" />
  ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo " 

</head>

<body>

  <!--  Body Wrapper -->
  <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
    data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <!-- Sidebar Start -->
    <aside class=\"left-sidebar\">
      <!-- Sidebar scroll-->
      <div>
        <div class=\"brand-logo d-flex align-items-center justify-content-between\">
          <a href=\"\" class=\"text-nowrap logo-img\">
           </a>
          <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
            <i class=\"ti ti-x fs-8\"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar=\"\">
          <ul id=\"sidebarnav\">
            <span class=\"hide-menu\">Elissa Travel</span>
            <li class=\"nav-small-cap\">
              <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
              <span class=\"hide-menu\">Home</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
        echo "\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Dashboard</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_index");
        echo "\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Voyage</span>
              </a>



            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Programme</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
        echo "\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Profile</span>
              </a>
            </li>
    
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-users\"></i>
                </span>
                <span class=\"hide-menu\">Utilisateurs</span>
              </a>
            </li>
     <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_airport_index");
        echo "\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-cards\"></i>
                </span>
                <span class=\"hide-menu\">Flights</span>
              </a>
            </li>
            
             <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_index");
        echo "\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-cards\"></i>
                </span>
                <span class=\"hide-menu\">Hotels</span>
              </a>
            </li>

             <li class=\"sidebar-item\">
    <a class=\"sidebar-link\" href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event");
        echo "\" aria-expanded=\"false\">
        <span>
            <i class=\"ti ti-typography\"></i>
        </span>
        <span class=\"hide-menu\">Events</span>
    </a>
</li>

          </ul>




          <div class=\"unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded\">
            <div class=\"d-flex\">
              <div class=\"unlimited-access-title me-3\">
              
 
              </div>
              <div class=\"unlimited-access-img\">
                <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/images/backgrounds/rocket.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class=\"body-wrapper\">
      <!--  Header Start -->
      <header class=\"app-header\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
              <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                <i class=\"ti ti-menu-2\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                <i class=\"ti ti-bell-ringing\"></i>
                <div class=\"notification bg-primary rounded-circle\"></div>
              </a>
            </li>
          </ul>
          <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
            <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\">
                  <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/images/profile/user-1.jpg "), "html", null, true);
        echo "\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                  <div class=\"message-body\">
                    <a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index");
        echo "\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-user fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Profile</p>
                    </a>
                    
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-list-check fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Task</p>
                    </a>
                    <a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
     







<br>
<br>
<br>
      ";
        // line 193
        $this->displayBlock('body', $context, $blocks);
        // line 196
        echo "




    </div>
  </div>

  ";
        // line 204
        $this->displayBlock('js', $context, $blocks);
        // line 302
        echo " 
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/css/styles.min.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 193
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 194
        echo " 
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 204
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo " 
  
  <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/app.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/libs/apexcharts/dist/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/libs/simplebar/dist/simplebar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/dashboard.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
  <script>
    function createPDF() {
        var sTable = document.getElementById('table').outerHTML;
        var style = \"<style>\";
        style = style + \"table {width: 100%; border-collapse: collapse; margin-top: 20px;}\";
        style = style + \"th, td {border: 1px solid #ddd; padding: 8px; text-align: left;}\";
        style = style + \"th {background-color: #f2f2f2;}\";
        style = style + \"</style>\";
        var win = window.open('', '', 'height=700,width=700');
        win.document.write('<html><head>');
        win.document.write('<title>user list PDF</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');
        win.document.close();  // CLOSE THE CURRENT WINDOW.
        win.print();    // PRINT THE CONTENTS.
    }
  </script>
  <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"myInput\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"table\");
        tr = table.getElementsByTagName(\"tr\");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }

    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById(\"table\");
        switching = true;
        dir = \"asc\";

        while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName(\"TD\")[n];
                y = rows[i + 1].getElementsByTagName(\"TD\")[n];

                if (dir == \"asc\") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == \"desc\") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }

            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                switchcount++;
            } else {
                if (switchcount == 0 && dir == \"asc\") {
                    dir = \"desc\";
                    switching = true;
                }
            }
        }
    }
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
        return "nav_admin.html.twig";
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
        return array (  398 => 214,  394 => 213,  390 => 212,  386 => 211,  382 => 210,  378 => 209,  374 => 208,  370 => 207,  366 => 206,  353 => 204,  342 => 194,  332 => 193,  319 => 13,  316 => 12,  306 => 11,  293 => 302,  291 => 204,  281 => 196,  279 => 193,  256 => 173,  244 => 164,  237 => 160,  200 => 126,  177 => 106,  165 => 97,  153 => 88,  142 => 80,  130 => 71,  119 => 63,  105 => 52,  94 => 44,  63 => 15,  61 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Elissa Travel Travel</title>
  
  
  <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset('assets_admin/images/logos/favicon.png') }}\" />
  {% block css %}

  <link rel=\"stylesheet\" href=\"{{ asset('assets_admin/css/styles.min.css') }}\" />

{% endblock %} 

</head>

<body>

  <!--  Body Wrapper -->
  <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
    data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <!-- Sidebar Start -->
    <aside class=\"left-sidebar\">
      <!-- Sidebar scroll-->
      <div>
        <div class=\"brand-logo d-flex align-items-center justify-content-between\">
          <a href=\"\" class=\"text-nowrap logo-img\">
           </a>
          <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
            <i class=\"ti ti-x fs-8\"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar=\"\">
          <ul id=\"sidebarnav\">
            <span class=\"hide-menu\">Elissa Travel</span>
            <li class=\"nav-small-cap\">
              <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
              <span class=\"hide-menu\">Home</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"{{ path('admin_dashboard_index') }}\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Dashboard</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"{{ path('app_voyage_index') }}\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Voyage</span>
              </a>



            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"{{ path('app_programme_index') }}\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Programme</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"{{ path('profile_edit') }}\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-layout-dashboard\"></i>
                </span>
                <span class=\"hide-menu\">Profile</span>
              </a>
            </li>
    
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"{{ path('admin_user_index') }}\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-users\"></i>
                </span>
                <span class=\"hide-menu\">Utilisateurs</span>
              </a>
            </li>
     <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"{{path('app_airport_index')}}\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-cards\"></i>
                </span>
                <span class=\"hide-menu\">Flights</span>
              </a>
            </li>
            
             <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"{{path('app_hotel_index')}}\" aria-expanded=\"false\">
                <span>
                  <i class=\"ti ti-cards\"></i>
                </span>
                <span class=\"hide-menu\">Hotels</span>
              </a>
            </li>

             <li class=\"sidebar-item\">
    <a class=\"sidebar-link\" href=\"{{ path('app_event') }}\" aria-expanded=\"false\">
        <span>
            <i class=\"ti ti-typography\"></i>
        </span>
        <span class=\"hide-menu\">Events</span>
    </a>
</li>

          </ul>




          <div class=\"unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded\">
            <div class=\"d-flex\">
              <div class=\"unlimited-access-title me-3\">
              
 
              </div>
              <div class=\"unlimited-access-img\">
                <img src=\"{{ asset('assets_admin/images/backgrounds/rocket.png') }}\" alt=\"\" class=\"img-fluid\">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class=\"body-wrapper\">
      <!--  Header Start -->
      <header class=\"app-header\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
              <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                <i class=\"ti ti-menu-2\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                <i class=\"ti ti-bell-ringing\"></i>
                <div class=\"notification bg-primary rounded-circle\"></div>
              </a>
            </li>
          </ul>
          <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
            <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\">
                  <img src=\"{{ asset('assets_admin/images/profile/user-1.jpg ') }}\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                  <div class=\"message-body\">
                    <a href=\"{{ path('admin_account_index') }}\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-user fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Profile</p>
                    </a>
                    
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-list-check fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Task</p>
                    </a>
                    <a href=\"{{ path('logout') }}\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
     







<br>
<br>
<br>
      {% block body %}
 
      {% endblock %}





    </div>
  </div>

  {% block js %} 
  
  <script src=\"{{ asset('assets_admin/libs/jquery/dist/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('assets_admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets_admin/js/sidebarmenu.js') }}\"></script>
  <script src=\"{{ asset('assets_admin/js/app.min.js') }}\"></script>
  <script src=\"{{ asset('assets_admin/libs/apexcharts/dist/apexcharts.min.js') }}\"></script>
  <script src=\"{{ asset('assets_admin/libs/simplebar/dist/simplebar.js') }}\"></script>
  <script src=\"{{ asset('assets_admin/js/dashboard.js') }}\"></script>
  <script src=\"{{ asset(\"assets_admin/vendor/datatables/jquery.dataTables.min.js\") }}\"></script>
  <script src=\"{{ asset(\"assets_admin/vendor/datatables/dataTables.bootstrap4.min.js\") }}\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
  <script>
    function createPDF() {
        var sTable = document.getElementById('table').outerHTML;
        var style = \"<style>\";
        style = style + \"table {width: 100%; border-collapse: collapse; margin-top: 20px;}\";
        style = style + \"th, td {border: 1px solid #ddd; padding: 8px; text-align: left;}\";
        style = style + \"th {background-color: #f2f2f2;}\";
        style = style + \"</style>\";
        var win = window.open('', '', 'height=700,width=700');
        win.document.write('<html><head>');
        win.document.write('<title>user list PDF</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');
        win.document.close();  // CLOSE THE CURRENT WINDOW.
        win.print();    // PRINT THE CONTENTS.
    }
  </script>
  <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"myInput\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"table\");
        tr = table.getElementsByTagName(\"tr\");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }

    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById(\"table\");
        switching = true;
        dir = \"asc\";

        while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName(\"TD\")[n];
                y = rows[i + 1].getElementsByTagName(\"TD\")[n];

                if (dir == \"asc\") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == \"desc\") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }

            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                switchcount++;
            } else {
                if (switchcount == 0 && dir == \"asc\") {
                    dir = \"desc\";
                    switching = true;
                }
            }
        }
    }
  </script>


  {% endblock  %} 
</body>

</html>", "nav_admin.html.twig", "C:\\Users\\msi\\Desktop\\gestion_user - oumayma\\templates\\nav_admin.html.twig");
    }
}
