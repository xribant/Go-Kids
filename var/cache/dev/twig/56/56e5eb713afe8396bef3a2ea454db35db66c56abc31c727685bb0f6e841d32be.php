<?php

/* security/login.html.twig */
class __TwigTemplate_b545bfa716a08865b2d9a2295b38472ba6510762ac644c628b4ffaaa64affb3f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Sur Go Kids vous pouvez gérer très facilement vos carnets de cotes et bulletins électroniques pour vos élèves.\">
        <meta name=\"author\" content=\"Xavier Ribant\">
        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/icon/go-kids-fav.png"), "html", null, true);
        echo "\" type=\"image/png\" />
        <title>
        Go Kids
        </title>
      
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "    </head>
  <body class=\"animsition\"> 
  ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "  </body>
</body>

      ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "  
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <!-- Custom CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/signin.css"), "html", null, true);
        echo "\" type=\"text/css\" />

        <!-- Fontfaces CSS-->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
           
        <!-- Bootstrap CSS -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        
        <!-- Vendor CSS-->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "
  <div class=\"page-wrapper\">
        <div class=\"page-content--bgClassroom\">
            <div class=\"container\">
                <div class=\"login-wrap\">
                    <div class=\"login-content\">
                        <div class=\"login-logo\">
                            <a href=\"#\">
                                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/go-kids-logo-login.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                        <div class=\"login-form\">
                          ";
        // line 57
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "                              <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 58, $this->source); })()), "message", array()), "html", null, true);
            echo "</div>
                          ";
        }
        // line 60
        echo "                            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login_check");
        echo "\" method=\"post\">
                                <div class=\"form-group\">
                                    <input class=\"au-input au-input--full\" type=\"text\" name=\"_username\" placeholder=\"Nom d'utilisateur\">
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"au-input au-input--full\" type=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                                </div>
                                <div class=\"login-checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"remember\">Mémoriser
                                    </label>
                                    <label>
                                        <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_resetting");
        echo "\">Mot de passe oublié?</a>
                                    </label>
                                </div>
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 76, $this->source); })()), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 77
            echo "                                    <div class=\"alert alert-success\" role=\"alert\">
                                        ";
            // line 78
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                <button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">Go</button>
                            </form>
                            <div class=\"register-link\">
                                <p>
                                    Pas encore de compte?
                                    <a href=\"#\">Le demander ici</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=\"copyright-login\">
        &copy; 2018 www.go-kids.be - Tous droits réservés
    </div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "        <!-- Jquery JS-->
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap JS-->
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Vendor JS       -->
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/slick/slick.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/select2/select2.min.js"), "html", null, true);
        echo "\">
        </script>

        <!-- Main JS-->
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 128,  334 => 124,  330 => 123,  326 => 122,  322 => 121,  317 => 119,  313 => 118,  308 => 116,  304 => 115,  300 => 114,  295 => 112,  290 => 110,  286 => 109,  281 => 107,  278 => 106,  269 => 105,  239 => 81,  230 => 78,  227 => 77,  223 => 76,  217 => 73,  207 => 66,  197 => 60,  191 => 58,  189 => 57,  182 => 53,  172 => 45,  163 => 44,  150 => 39,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  114 => 27,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  90 => 18,  87 => 17,  78 => 16,  67 => 129,  65 => 105,  60 => 102,  58 => 44,  54 => 42,  52 => 16,  44 => 11,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Sur Go Kids vous pouvez gérer très facilement vos carnets de cotes et bulletins électroniques pour vos élèves.\">
        <meta name=\"author\" content=\"Xavier Ribant\">
        <link rel=\"icon\" href=\"{{ asset('build/img/icon/go-kids-fav.png') }}\" type=\"image/png\" />
        <title>
        Go Kids
        </title>
      
        {% block stylesheets %}
        <!-- Custom CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/signin.css') }}\" type=\"text/css\" />

        <!-- Fontfaces CSS-->
        <link href=\"{{ asset('build/css/font-face.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/font-awesome-4.7/css/font-awesome.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/font-awesome-5/css/fontawesome-all.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/mdi-font/css/material-design-iconic-font.min.css') }}\" rel=\"stylesheet\" media=\"all\">
           
        <!-- Bootstrap CSS -->
        <link href=\"{{ asset('build/vendor/bootstrap-4.1/bootstrap.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        
        <!-- Vendor CSS-->
        <link href=\"{{ asset('build/vendor/animsition/animsition.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/wow/animate.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/css-hamburgers/hamburgers.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/slick/slick.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/select2/select2.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('build/vendor/perfect-scrollbar/perfect-scrollbar.css') }}\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"{{ asset('build/css/theme.css') }}\" rel=\"stylesheet\" media=\"all\">

        {% endblock %}
    </head>
  <body class=\"animsition\"> 
  {% block body %}

  <div class=\"page-wrapper\">
        <div class=\"page-content--bgClassroom\">
            <div class=\"container\">
                <div class=\"login-wrap\">
                    <div class=\"login-content\">
                        <div class=\"login-logo\">
                            <a href=\"#\">
                                <img src=\"{{ asset('build/img/go-kids-logo-login.png') }}\">
                            </a>
                        </div>
                        <div class=\"login-form\">
                          {% if error %}
                              <div class=\"alert alert-danger\" role=\"alert\">{{ error.message }}</div>
                          {% endif %}
                            <form action=\"{{ path('security_login_check') }}\" method=\"post\">
                                <div class=\"form-group\">
                                    <input class=\"au-input au-input--full\" type=\"text\" name=\"_username\" placeholder=\"Nom d'utilisateur\">
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"au-input au-input--full\" type=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                                </div>
                                <div class=\"login-checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"remember\">Mémoriser
                                    </label>
                                    <label>
                                        <a href=\"{{ path('request_resetting') }}\">Mot de passe oublié?</a>
                                    </label>
                                </div>
                                {% for message in app.flashes('success') %}
                                    <div class=\"alert alert-success\" role=\"alert\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                                <button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">Go</button>
                            </form>
                            <div class=\"register-link\">
                                <p>
                                    Pas encore de compte?
                                    <a href=\"#\">Le demander ici</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=\"copyright-login\">
        &copy; 2018 www.go-kids.be - Tous droits réservés
    </div>

  {% endblock %}
  </body>
</body>

      {% block javascripts %}
        <!-- Jquery JS-->
        <script src=\"{{ asset('build/vendor/jquery-3.2.1.min.js') }}\"></script>
        <!-- Bootstrap JS-->
        <script src=\"{{ asset('build/vendor/bootstrap-4.1/popper.min.js') }}\"></script>
        <script src=\"{{ asset('build/vendor/bootstrap-4.1/bootstrap.min.js') }}\"></script>
        <!-- Vendor JS       -->
        <script src=\"{{ asset('build/vendor/slick/slick.min.js') }}\">
        </script>
        <script src=\"{{ asset('build/vendor/wow/wow.min.js') }}\"></script>
        <script src=\"{{ asset('build/vendor/animsition/animsition.min.js') }}\"></script>
        <script src=\"{{ asset('build/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\">
        </script>
        <script src=\"{{ asset('build/vendor/counter-up/jquery.waypoints.min.js') }}\"></script>
        <script src=\"{{ asset('build/vendor/counter-up/jquery.counterup.min.js') }}\">
        </script>
        <script src=\"{{ asset('build/vendor/circle-progress/circle-progress.min.js') }}\"></script>
        <script src=\"{{ asset('build/vendor/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
        <script src=\"{{ asset('build/vendor/chartjs/Chart.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('build/vendor/select2/select2.min.js') }}\">
        </script>

        <!-- Main JS-->
        <script src=\"{{ asset('build/js/main.js') }}\"></script>
      {% endblock %}  
</html>", "security/login.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/security/login.html.twig");
    }
}
