<?php

/* security/resetting.html.twig */
class __TwigTemplate_56ee3ab232703088ae9ac937f24dab99eb9230cd2e1c55d71aa795c377a4d8a6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/resetting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/resetting.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Carnet de cotes electronique\">
        <meta name=\"author\" content=\"Xavier Ribant\">
        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/icon/go-kids-fav.png"), "html", null, true);
        echo "\" type=\"image/png\" />
        <title>
        Go Kids - Renouvellement du mot de passe
        </title>
      
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "    </head>
  <body class=\"text-center\"> 
  ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "  </body>


    ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.css"), "html", null, true);
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
              <div class=\"page-content--bge5\">
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), array(0 => "form/form_errors.html.twig"), true);
        // line 58
        echo "                                  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
                                      <div class=\"form-group\">
                                        <label>Entrez votre nouveau mot de passe</label>
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
        echo "
                                      </div>
                                      <div class=\"form-group\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirmer le mot de passe")));
        echo "
                                      </div>
                                      <button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">Envoyer</button>
                                  ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
                                  ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->source); })()), "flashes", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            echo "                                      <div class=\"alert alert-danger\" role=\"alert\">
                                          ";
            // line 70
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                      </div>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "
                              </div>
                          </div>

                            <div class=\"copyright\">&copy; 2018 www.go-kids.be - Tous droits réservés</div>
                          
                      </div>
                  </div>
              </div>
            </div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    <!-- Jquery JS-->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap JS-->
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Vendor JS       -->
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/slick/slick.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/select2/select2.min.js"), "html", null, true);
        echo "\">
        </script>

        <!-- Main JS-->
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/resetting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 111,  319 => 107,  315 => 106,  311 => 105,  307 => 104,  302 => 102,  298 => 101,  293 => 99,  289 => 98,  285 => 97,  280 => 95,  275 => 93,  271 => 92,  266 => 90,  263 => 89,  254 => 88,  231 => 73,  222 => 70,  219 => 69,  215 => 68,  211 => 67,  205 => 64,  199 => 61,  192 => 58,  190 => 57,  183 => 53,  173 => 45,  164 => 44,  151 => 39,  145 => 36,  141 => 35,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  115 => 27,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  91 => 18,  88 => 17,  79 => 16,  67 => 112,  65 => 88,  60 => 85,  58 => 44,  54 => 42,  52 => 16,  44 => 11,  32 => 1,);
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
        <meta name=\"description\" content=\"Carnet de cotes electronique\">
        <meta name=\"author\" content=\"Xavier Ribant\">
        <link rel=\"icon\" href=\"{{ asset('build/img/icon/go-kids-fav.png') }}\" type=\"image/png\" />
        <title>
        Go Kids - Renouvellement du mot de passe
        </title>
      
        {% block stylesheets %}
        <!-- Custom CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/custom.css') }}\" type=\"text/css\" />

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
  <body class=\"text-center\"> 
  {% block body %}

            <div class=\"page-wrapper\">
              <div class=\"page-content--bge5\">
                  <div class=\"container\">
                      <div class=\"login-wrap\">
                          <div class=\"login-content\">
                              <div class=\"login-logo\">
                                  <a href=\"#\">
                                      <img src=\"{{ asset('build/img/go-kids-logo-login.png') }}\">
                                  </a>
                              </div>
                              <div class=\"login-form\">
                                 {% form_theme form 'form/form_errors.html.twig' %}
                                  {{ form_start(form) }}
                                      <div class=\"form-group\">
                                        <label>Entrez votre nouveau mot de passe</label>
                                        {{ form_widget(form.plainPassword.first, { 'attr': { 'class': 'form-control', 'placeholder': 'Mot de passe' } }) }}
                                      </div>
                                      <div class=\"form-group\">
                                        {{ form_widget(form.plainPassword.second, { 'attr': { 'class': 'form-control', 'placeholder': 'Confirmer le mot de passe' } }) }}
                                      </div>
                                      <button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">Envoyer</button>
                                  {{ form_end(form) }}
                                  {% for message in app.flashes('warning') %}
                                      <div class=\"alert alert-danger\" role=\"alert\">
                                          {{ message }}
                                      </div>
                                  {% endfor %}
                                  {{ form_errors(form.plainPassword.first) }}
                              </div>
                          </div>

                            <div class=\"copyright\">&copy; 2018 www.go-kids.be - Tous droits réservés</div>
                          
                      </div>
                  </div>
              </div>
            </div>

  {% endblock %}
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
    
</html>", "security/resetting.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/security/resetting.html.twig");
    }
}
