<?php

/* admin/editUser.html.twig */
class __TwigTemplate_bbd64cb6dd4af4504320bed664ec47cf86e7d9ad066eab3f7f15089f04c75faf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/editUser.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editUser.html.twig"));

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
        echo "GO Kids - Modification d'un utilisateur
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
                    <h2>Modification des données de : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "lastName", array()), "html", null, true);
        echo "</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                    <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_firstName", "name" => "form[firstName]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "firstName", array()))));
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "firstName", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_lastName", "name" => "form[lastName]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "lastName", array()))));
        echo "
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_email", "name" => "form[email]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->source); })()), "email", array()))));
        echo "
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "address", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_address", "name" => "form[address]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 47, $this->source); })()), "address", array()))));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-8 col-sm-8 col-xs-12 form-group has-feedback\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "city", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_city", "name" => "form[city]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "city", array()))));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 form-group has-feedback\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "postalCode", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-right", "id" => "form_postalCode", "name" => "form[postalCode]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "postalCode", array()))));
        echo "
                        <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "birthDate", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left js-datepicker", "id" => "form_birthDate", "name" => "form[birthDate]", "value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->source); })()), "birthDate", array()), "d-m-Y"))));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_phone", "name" => "form[phone]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 68, $this->source); })()), "postalCode", array()))));
        echo "
                        <span class=\"fa fa-phone form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "userType", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_userType", "name" => "form[userType]"), "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 73, $this->source); })()), "userType", array())));
        echo "
                      </div>

                      <div class=\"col-md- col-sm-12 col-xs-12 form-group\">
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 77, $this->source); })()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 78
            echo "                          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "role", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_role", "name" => "form[role]"), "value" => $context["role"]));
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                      </div>
                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 col-md-offset-3\">
                          <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_manager");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Cancel</button></a>
                          <button class=\"btn btn-primary\" type=\"reset\">Effacer</button>
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
        return "admin/editUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 93,  206 => 85,  199 => 80,  190 => 78,  186 => 77,  179 => 73,  171 => 68,  163 => 63,  159 => 62,  151 => 57,  143 => 52,  135 => 47,  127 => 42,  119 => 37,  111 => 32,  107 => 31,  100 => 27,  89 => 21,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Modification d'un utilisateur
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
                    <h2>Modification des données de : {{ user.firstName }} {{ user.lastName }}</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    {{ form_start(form) }}
                    <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.firstName, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_firstName', 'name': 'form[firstName]', 'value': user.firstName }} ) }}
                        {{ form_errors(form.firstName,{ 'attr': { 'class': 'formValidationError'}} ) }}
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.lastName, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_lastName', 'name': 'form[lastName]', 'value': user.lastName } } ) }}
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.email, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_email', 'name': 'form[email]', 'value': user.email  } } ) }}
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.address, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_address', 'name': 'form[address]', 'value': user.address  } } ) }}
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-8 col-sm-8 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.city, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_city', 'name': 'form[city]', 'value': user.city } } ) }}
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.postalCode, { 'attr': { 'class': 'form-control has-feedback-right', 'id': 'form_postalCode', 'name': 'form[postalCode]', 'value': user.postalCode } } ) }}
                        <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.birthDate, { 'attr': { 'class': 'form-control has-feedback-left js-datepicker', 'id': 'form_birthDate', 'name': 'form[birthDate]', 'value': user.birthDate|date('d-m-Y') } } ) }}
                        {{ form_errors(form.birthDate,{ 'attr': { 'class': 'formValidationError'}} ) }}
                        <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>
                        
                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.phone, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_phone', 'name': 'form[phone]', 'value': user.postalCode } } ) }}
                        <span class=\"fa fa-phone form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        {{ form_widget(form.userType, { 'attr': { 'class': 'form-control', 'id': 'form_userType', 'name': 'form[userType]'}, 'value': user.userType } ) }}
                      </div>

                      <div class=\"col-md- col-sm-12 col-xs-12 form-group\">
                        {% for role in user.roles %}
                          {{ form_widget(form.role, { 'attr': { 'class': 'form-control', 'id': 'form_role', 'name': 'form[role]'}, 'value': role } ) }}
                        {% endfor %}
                      </div>
                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12 col-md-offset-3\">
                          <a href=\"{{ path('user_manager') }}\"><button type=\"button\" class=\"btn btn-primary\">Cancel</button></a>
                          <button class=\"btn btn-primary\" type=\"reset\">Effacer</button>
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

", "admin/editUser.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/editUser.html.twig");
    }
}
