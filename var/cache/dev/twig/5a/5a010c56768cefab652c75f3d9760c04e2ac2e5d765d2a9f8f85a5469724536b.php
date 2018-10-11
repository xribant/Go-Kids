<?php

/* admin/registerUser.html.twig */
class __TwigTemplate_463adc237f25e449fb3e0385c0b307f74cfbf8d72a71f2a4a2340b9ca122b66c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/registerUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'sectionTitle' => array($this, 'block_sectionTitle'),
            'userType' => array($this, 'block_userType'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
<!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            
            <div class=\"clearfix\"></div>

            <div class=\"row\">

              <div class=\"col-md-6 col-sm-10 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>";
        // line 19
        $this->displayBlock('sectionTitle', $context, $blocks);
        echo "</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
                    <form id=\"register-user\" class=\"form-horizontal form-label-left\">

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_firstName", "name" => "form[firstName]", "placeholder" => "Prénom")));
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "firstName", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_lastName", "name" => "form[lastName]", "placeholder" => "Nom")));
        echo "
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_email", "name" => "form[email]", "placeholder" => "E-Mail")));
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "email", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "address", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_address", "name" => "form[address]", "placeholder" => "Rue + Numéro")));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-8 col-sm-8 col-xs-12 form-group has-feedback\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "city", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_city", "name" => "form[city]", "placeholder" => "Localité")));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 form-group has-feedback\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "postalCode", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-right", "id" => "form_postalCode", "name" => "form[postalCode]", "placeholder" => "CP")));
        echo "
                        <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "birthDate", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left js-datepicker", "id" => "form_birthDate", "name" => "form[birthDate]")));
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "birthDate", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>
                        
                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_phone", "name" => "form[phone]", "placeholder" => "Telephone")));
        echo "
                        <span class=\"fa fa-phone form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      ";
        // line 72
        $this->displayBlock('userType', $context, $blocks);
        // line 75
        echo "                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_manager");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Annuler</button>
                          <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                        </div>
                      </div>

                    </form>

                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_sectionTitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sectionTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sectionTitle"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_userType($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userType"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userType"));

        // line 73
        echo "
                      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/registerUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 73,  239 => 72,  221 => 19,  200 => 86,  190 => 79,  184 => 75,  182 => 72,  175 => 68,  167 => 63,  163 => 62,  155 => 57,  147 => 52,  139 => 47,  131 => 42,  127 => 41,  119 => 36,  111 => 31,  107 => 30,  103 => 29,  96 => 25,  87 => 19,  73 => 7,  64 => 6,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
{% endblock %}

{% block content %}

<!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            
            <div class=\"clearfix\"></div>

            <div class=\"row\">

              <div class=\"col-md-6 col-sm-10 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>{% block sectionTitle %} {% endblock %}</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    {{ form_start(form) }}
                    <form id=\"register-user\" class=\"form-horizontal form-label-left\">

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.firstName, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_firstName', 'name': 'form[firstName]', 'placeholder': 'Prénom' } } ) }}
                        {{ form_errors(form.firstName,{ 'attr': { 'class': 'formValidationError'}} ) }}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.lastName, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_lastName', 'name': 'form[lastName]', 'placeholder': 'Nom' } } ) }}
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.email, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_email', 'name': 'form[email]', 'placeholder': 'E-Mail' } } ) }}
                        {{ form_errors(form.email,{ 'attr': { 'class': 'formValidationError'}} ) }}
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.address, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_address', 'name': 'form[address]', 'placeholder': 'Rue + Numéro' } } ) }}
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-8 col-sm-8 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.city, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_city', 'name': 'form[city]', 'placeholder': 'Localité' } } ) }}
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.postalCode, { 'attr': { 'class': 'form-control has-feedback-right', 'id': 'form_postalCode', 'name': 'form[postalCode]', 'placeholder': 'CP' } } ) }}
                        <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.birthDate, { 'attr': { 'class': 'form-control has-feedback-left js-datepicker', 'id': 'form_birthDate', 'name': 'form[birthDate]' } } ) }}
                        {{ form_errors(form.birthDate,{ 'attr': { 'class': 'formValidationError'}} ) }}
                        <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>
                        
                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.phone, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_phone', 'name': 'form[phone]', 'placeholder': 'Telephone' } } ) }}
                        <span class=\"fa fa-phone form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      {% block userType %}

                      {% endblock %}
                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <a href=\"{{ path('user_manager') }}\"><button type=\"button\" class=\"btn btn-primary\">Annuler</button>
                          <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                        </div>
                      </div>

                    </form>

                    {{ form_end(form) }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

{% endblock %}

", "admin/registerUser.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/registerUser.html.twig");
    }
}
