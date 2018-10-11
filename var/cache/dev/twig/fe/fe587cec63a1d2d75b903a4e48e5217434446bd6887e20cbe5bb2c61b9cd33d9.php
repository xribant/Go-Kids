<?php

/* admin/registerUser.html.twig */
class __TwigTemplate_cb0e784c0ca1b2fcba82c56e67da281841f8039c66812a214d7ffb4a5a8781e6 extends Twig_Template
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

        // line 4
        echo "GO Kids - Création d'un utilisateur
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "

              
<!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">

            <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-4 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'un nouvel utilisateur</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />

                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
                    <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_firstName", "name" => "form[firstName]", "placeholder" => "Prénom")));
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "firstName", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_lastName", "name" => "form[lastName]", "placeholder" => "Nom")));
        echo "
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_email", "name" => "form[email]", "placeholder" => "E-Mail")));
        echo "
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "address", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_address", "name" => "form[address]", "placeholder" => "Rue + Numéro")));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-8 col-sm-8 col-xs-12 form-group has-feedback\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "city", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_city", "name" => "form[city]", "placeholder" => "Localité")));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 form-group has-feedback\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "postalCode", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-right", "id" => "form_postalCode", "name" => "form[postalCode]", "placeholder" => "CP")));
        echo "
                        <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "birthDate", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left js-datepicker", "id" => "form_birthDate", "name" => "form[birthDate]")));
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "birthDate", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>
                        
                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_phone", "name" => "form[phone]", "placeholder" => "Telephone")));
        echo "
                        <span class=\"fa fa-phone form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "userType", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_userType", "name" => "form[userType]")));
        echo "
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "role", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_role", "name" => "form[role]")));
        echo "
                      </div>
                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 col-md-offset-3\">
                          <button type=\"button\" class=\"btn btn-primary\">Cancel</button>
                          <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>

                    ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
                  </div>
                </div>
     
          </div>
        </div>
        <!-- /page content -->

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
        return array (  203 => 93,  186 => 79,  179 => 75,  171 => 70,  163 => 65,  159 => 64,  151 => 59,  143 => 54,  135 => 49,  127 => 44,  119 => 39,  111 => 34,  107 => 33,  103 => 32,  96 => 28,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Création d'un utilisateur
{% endblock %}

{% block content %}


              
<!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">

            <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-4 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'un nouvel utilisateur</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />

                    {{ form_start(form) }}
                    <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

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

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        {{ form_widget(form.userType, { 'attr': { 'class': 'form-control', 'id': 'form_userType', 'name': 'form[userType]'} } ) }}
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        {{ form_widget(form.role, { 'attr': { 'class': 'form-control', 'id': 'form_role', 'name': 'form[role]'} } ) }}
                      </div>
                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 col-md-offset-3\">
                          <button type=\"button\" class=\"btn btn-primary\">Cancel</button>
                          <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>

                    {{ form_end(form) }}
                  </div>
                </div>
     
          </div>
        </div>
        <!-- /page content -->

{% endblock %}

", "admin/registerUser.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/registerUser.html.twig");
    }
}
