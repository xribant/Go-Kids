<?php

/* admin/registerEleve.html.twig */
class __TwigTemplate_ab647c8ed825e18e4b0ccd485933482fae1170fc48a17071f9841a4c6e57cc99 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/registerEleve.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerEleve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerEleve.html.twig"));

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
        echo "GO Kids - Création d'un Elève
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

              <div class=\"col-md-6 col-sm-10 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'un Elève</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
                    <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_firstName", "name" => "form[firstName]", "placeholder" => "Prénom")));
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "firstName", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_lastName", "name" => "form[lastName]", "placeholder" => "Nom")));
        echo "
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_email", "name" => "form[email]", "placeholder" => "E-Mail")));
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "email", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "address", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_address", "name" => "form[address]", "placeholder" => "Rue + Numéro")));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-8 col-sm-8 col-xs-12 form-group has-feedback\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "city", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_city", "name" => "form[city]", "placeholder" => "Localité")));
        echo "
                        <span class=\"fa fa-map-marker form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-4 col-sm-4 col-xs-12 form-group has-feedback\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "postalCode", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-right", "id" => "form_postalCode", "name" => "form[postalCode]", "placeholder" => "CP")));
        echo "
                        <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "birthDate", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left js-datepicker", "id" => "form_birthDate", "name" => "form[birthDate]")));
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "birthDate", array()), 'errors', array("attr" => array("class" => "formValidationError")));
        echo "
                        <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>
                        
                      <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_phone", "name" => "form[phone]", "placeholder" => "Telephone")));
        echo "
                        <span class=\"fa fa-phone form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"x_title\">
                        <h2>Assigner une classe</h2>
                        
                        <div class=\"clearfix\"></div>
                      </div>

                      <table class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Description</th>
                        </tr>
                      </thead>

                      <tbody>

                      ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "classrooms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 90
            echo "                        ";
            $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["classroom"], "vars", array()), "value", array());
            // line 91
            echo "                          ";
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "classrooms", array()), "vars", array()), "choices", array()), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 91, $this->source); })()), array(), "array"), "data", array());
            // line 92
            echo "                            <tr>
                              <td> ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["classroom"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 93, $this->source); })()), "name", array()), "html", null, true);
            echo "</td>
                              <td> ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 94, $this->source); })()), "description", array()), "html", null, true);
            echo "</td>
                            </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                      </tbody>
                    </table>
                      
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_manager");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Annuler</button>
                          <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                        </div>
                      </div>

                    </form>

                    ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
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

    public function getTemplateName()
    {
        return "admin/registerEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 111,  233 => 104,  224 => 97,  215 => 94,  209 => 93,  206 => 92,  203 => 91,  200 => 90,  196 => 89,  173 => 69,  165 => 64,  161 => 63,  153 => 58,  145 => 53,  137 => 48,  129 => 43,  125 => 42,  117 => 37,  109 => 32,  105 => 31,  101 => 30,  94 => 26,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Création d'un Elève
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
                    <h2>Création d'un Elève</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

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

                      <div class=\"x_title\">
                        <h2>Assigner une classe</h2>
                        
                        <div class=\"clearfix\"></div>
                      </div>

                      <table class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Description</th>
                        </tr>
                      </thead>

                      <tbody>

                      {% for classroom in form.classrooms %}
                        {% set index = classroom.vars.value %}{# get array index #}
                          {% set entity = form.classrooms.vars.choices[index].data %}{# get entity object #}
                            <tr>
                              <td> {{ form_widget(classroom) }} {{ entity.name }}</td>
                              <td> {{ entity.description }}</td>
                            </tr>
                      {% endfor %}

                      </tbody>
                    </table>
                      
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

", "admin/registerEleve.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/registerEleve.html.twig");
    }
}
