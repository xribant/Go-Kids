<?php

/* base.html.twig */
class __TwigTemplate_ebe1b9340350c21d2307200cfabacecaa9080ebd01c897860ca1d622959eeb2b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, inital-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"L'application Go Kids vous aide à gérer carnets de cotes et bulletins électroniques pour vos élèves.\">
        <meta name=\"author\" content=\"Xavier Ribant\">
        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/icon/go-kids-fav.png"), "html", null, true);
        echo "\" type=\"image/png\" />
        <title>
        ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "        </title>
    \t
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "    </head>

    <body class=\"nav-md\">
    ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "    </body>

    ";
        // line 149
        $this->displayBlock('javascripts', $context, $blocks);
        // line 245
        echo "        
    
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "        <!-- Bootstrap -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- bootstrap-daterangepicker -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- bootstrap-datepicker -->
        <link id=\"bsdp-css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Datatables -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Theme Style -->
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
   <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"site_title\"><span><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/go-kids-logo.png"), "html", null, true);
        echo "\" alt=\"Go Kids\"></span></a>
            </div>

            <div class=\"clearfix\"></div>

            <br /><br /><br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                
                <ul class=\"nav side-menu\">
                  <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mystudents_manager");
        echo "\"><i class=\"fa fa-users\"></i> Mes Elèves</a></li>
                  <li><a><i class=\"fa fa-edit\"></i> Contrôles <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_controle");
        echo "\">Nouveau</a></li>
                      <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pending_controles");
        echo "\">Planifiés</a></li>
                      <li><a href=\"#\">Archives</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-cogs\"></i> Admin <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_manager");
        echo "\">Utilisateurs</a></li>
                      <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classroom_manager");
        echo "\">Classes</a></li>
                      <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dc_manager");
        echo "\">Domaines & Compétences</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 114, $this->source); })()), "user", array()), "photo", array()), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 114, $this->source); })()), "user", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 114, $this->source); })()), "user", array()), "lastName", array()), "html", null, true);
        echo "
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Profil</a></li>
                    <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Déconnexion</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            &copy Go Kids 2018 - Tous droits réservés - <a href=\"https://www.go-kids.be\">www.go-kids.be</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>    
    \t

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 130
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "
    <!-- jQuery -->
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Sparklines -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap-datepicker -->
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap-datepicker/locales/bootstrap-datepicker.fr.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Parsley -->
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>


    <!-- jQuery Smart Wizard -->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/smart-wizard/js/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready( function () {
        \$('#users-table, #classrooms-table, #profs-table, #DC-table').DataTable({
              \"language\": {
                  \"lengthMenu\": \"Afficher _MENU_ éléments par page\",
                  \"zeroRecords\": \"Pas de résultat - Désolé\",
                  \"info\": \"Afficher la page _PAGE_ de _PAGES_\",
                  \"infoEmpty\": \"Aucun enregistrement\",
                  \"search\": \"Rechercher:\",
                  \"infoFiltered\": \"(filtered from _MAX_ total records)\",
                  \"paginate\": {
                      \"first\":      \"Premier\",
                      \"last\":       \"Dernier\",
                      \"next\":       \"Suivant\",
                      \"previous\":   \"Précédent\"
                  }
              }
          });

        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
            language: 'fr'
        });

        \$('#classroomWizard').smartWizard({
              selected: 0,  // Selected Step, 0 = first step
              hideButtonsOnDisabled: true,
              labelNext: 'Suivant',
              labelPrevious: 'Précédent',
              labelFinish: 'Terminer',
              buttonOrder: ['prev', 'next', 'finish']
        });
    });
    </script>
\t \t
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 208,  522 => 205,  518 => 204,  514 => 203,  510 => 202,  506 => 201,  502 => 200,  498 => 199,  494 => 198,  490 => 197,  486 => 196,  482 => 195,  478 => 194,  474 => 193,  470 => 192,  466 => 191,  460 => 188,  453 => 184,  447 => 181,  443 => 180,  437 => 177,  433 => 176,  428 => 174,  423 => 172,  419 => 171,  415 => 170,  410 => 168,  406 => 167,  402 => 166,  398 => 165,  394 => 164,  389 => 162,  384 => 160,  379 => 158,  374 => 156,  369 => 154,  364 => 152,  360 => 150,  351 => 149,  341 => 130,  332 => 129,  307 => 131,  305 => 129,  292 => 119,  280 => 114,  237 => 74,  233 => 73,  229 => 72,  220 => 66,  216 => 65,  210 => 62,  193 => 50,  185 => 44,  176 => 43,  163 => 37,  157 => 34,  153 => 33,  149 => 32,  145 => 31,  141 => 30,  135 => 27,  130 => 25,  125 => 23,  120 => 21,  115 => 19,  112 => 18,  103 => 17,  93 => 14,  84 => 13,  72 => 245,  70 => 149,  66 => 147,  64 => 43,  59 => 40,  57 => 17,  53 => 15,  51 => 13,  46 => 11,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, inital-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"L'application Go Kids vous aide à gérer carnets de cotes et bulletins électroniques pour vos élèves.\">
        <meta name=\"author\" content=\"Xavier Ribant\">
        <link rel=\"icon\" href=\"{{ asset('build/img/icon/go-kids-fav.png') }}\" type=\"image/png\" />
        <title>
        {% block title %}
        {% endblock %}
        </title>
    \t
        {% block stylesheets %}
        <!-- Bootstrap -->
        <link href=\"{{ asset('build/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"{{ asset('build/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"{{ asset('build/vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
        <!-- bootstrap-daterangepicker -->
        <link href=\"{{ asset('build/vendors/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">
        <!-- bootstrap-datepicker -->
        <link id=\"bsdp-css\" href=\"{{ asset('build/vendors/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\">

        <!-- Datatables -->
        <link href=\"{{ asset('build/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('build/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('build/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('build/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('build/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom Theme Style -->
        <link href=\"{{ asset('build/css/custom.css') }}\" rel=\"stylesheet\">

        {% endblock %}
    </head>

    <body class=\"nav-md\">
    {% block body %}

   <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"{{ path('home') }}\" class=\"site_title\"><span><img src=\"{{ asset('build/img/go-kids-logo.png') }}\" alt=\"Go Kids\"></span></a>
            </div>

            <div class=\"clearfix\"></div>

            <br /><br /><br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                
                <ul class=\"nav side-menu\">
                  <li><a href=\"{{ path('mystudents_manager') }}\"><i class=\"fa fa-users\"></i> Mes Elèves</a></li>
                  <li><a><i class=\"fa fa-edit\"></i> Contrôles <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('new_controle') }}\">Nouveau</a></li>
                      <li><a href=\"{{ path('pending_controles') }}\">Planifiés</a></li>
                      <li><a href=\"#\">Archives</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-cogs\"></i> Admin <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('user_manager') }}\">Utilisateurs</a></li>
                      <li><a href=\"{{ path('classroom_manager') }}\">Classes</a></li>
                      <li><a href=\"{{ path('dc_manager') }}\">Domaines & Compétences</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"{{ app.user.photo }}\" alt=\"\">{{ app.user.firstName }} {{ app.user.lastName }}
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Profil</a></li>
                    <li><a href=\"{{ path('security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Déconnexion</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        {% block content %}
        {% endblock %}

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            &copy Go Kids 2018 - Tous droits réservés - <a href=\"https://www.go-kids.be\">www.go-kids.be</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>    
    \t

\t{% endblock %}
    </body>

    {% block javascripts %}

    <!-- jQuery -->
    <script src=\"{{ asset('build/vendors/jquery/dist/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('build/vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('build/vendors/fastclick/lib/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <script src=\"{{ asset('build/vendors/nprogress/nprogress.js') }}\"></script>
    <!-- Chart.js -->
    <script src=\"{{ asset('build/vendors/Chart.js/dist/Chart.min.js') }}\"></script>
    <!-- jQuery Sparklines -->
    <script src=\"{{ asset('build/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}\"></script>
    <!-- Flot -->
    <script src=\"{{ asset('build/vendors/Flot/jquery.flot.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/Flot/jquery.flot.pie.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/Flot/jquery.flot.time.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/Flot/jquery.flot.stack.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/Flot/jquery.flot.resize.js') }}\"></script>
    <!-- Flot plugins -->
    <script src=\"{{ asset('build/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/flot.curvedlines/curvedLines.js') }}\"></script>
    <!-- DateJS -->
    <script src=\"{{ asset('build/vendors/DateJS/build/date.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('build/vendors/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

    <!-- bootstrap-datepicker -->
    <script src=\"{{ asset('build/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/bootstrap-datepicker/locales/bootstrap-datepicker.fr.min.js') }}\"></script>

    <!-- Parsley -->
    <script src=\"{{ asset('build/vendors/parsleyjs/dist/parsley.min.js') }}\"></script>


    <!-- jQuery Smart Wizard -->
    <script src=\"{{ asset('build/vendors/smart-wizard/js/jquery.smartWizard.js') }}\"></script>

    <!-- Datatables -->
    <script src=\"{{ asset('build/vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/jszip/dist/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('build/vendors/pdfmake/build/vfs_fonts.js') }}\"></script>
    
    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('build/js/custom.min.js') }}\"></script>

    <script>
    \$(document).ready( function () {
        \$('#users-table, #classrooms-table, #profs-table, #DC-table').DataTable({
              \"language\": {
                  \"lengthMenu\": \"Afficher _MENU_ éléments par page\",
                  \"zeroRecords\": \"Pas de résultat - Désolé\",
                  \"info\": \"Afficher la page _PAGE_ de _PAGES_\",
                  \"infoEmpty\": \"Aucun enregistrement\",
                  \"search\": \"Rechercher:\",
                  \"infoFiltered\": \"(filtered from _MAX_ total records)\",
                  \"paginate\": {
                      \"first\":      \"Premier\",
                      \"last\":       \"Dernier\",
                      \"next\":       \"Suivant\",
                      \"previous\":   \"Précédent\"
                  }
              }
          });

        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
            language: 'fr'
        });

        \$('#classroomWizard').smartWizard({
              selected: 0,  // Selected Step, 0 = first step
              hideButtonsOnDisabled: true,
              labelNext: 'Suivant',
              labelPrevious: 'Précédent',
              labelFinish: 'Terminer',
              buttonOrder: ['prev', 'next', 'finish']
        });
    });
    </script>
\t \t
    {% endblock %}        
    
</html>", "base.html.twig", "/Users/ribantxa/Sites/Go-Kids/templates/base.html.twig");
    }
}
