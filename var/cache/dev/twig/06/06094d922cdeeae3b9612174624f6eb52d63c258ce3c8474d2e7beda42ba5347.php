<?php

/* admin/registerClassroom.html.twig */
class __TwigTemplate_579232c46a78037338a240fab482553b36ca212a8ed3956c1f658a8ff04d42fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/registerClassroom.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerClassroom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerClassroom.html.twig"));

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
        echo "GO Kids - Création d'une classe
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

              <div class=\"col-md-8 col-sm-10 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'une nouvelle classe</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">


                    <!-- Smart Wizard -->
                    <br />
                    
                      ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
                      <form id=\"register-classroom\" class=\"form-horizontal form-label-left input_mask\">

                          <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_name", "name" => "form[name]", "placeholder" => "Nom")));
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "name", array()), 'errors', array("attr" => array("class" => "form-error")));
        echo "
                          </div>
                          
                          <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_description", "name" => "form[description]", "placeholder" => "Optionel: Description")));
        echo "
                          </div>

                          
                          <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                          <h2>Assigner un/des Profs à cette classe</h2>
                          <table id=\"profs-table\" class=\"table table-striped table-bordered bulk_action\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>

                            <tbody>
                              ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "teachers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            echo "                                ";
            $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "vars", array()), "value", array());
            echo " 
                                ";
            // line 55
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "teachers", array()), "vars", array()), "choices", array()), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 55, $this->source); })()), array(), "array"), "data", array());
            // line 56
            echo "                                <tr>
                                  <td> ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["user"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 57, $this->source); })()), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 57, $this->source); })()), "user", array()), "lastName", array()), "html", null, true);
            echo "</td>
                                </tr>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            </tbody>
                          </table>
                        </div>

                        <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                          <h2>Assigner un/des Elève(s) à cette classe</h2> 
                          <table id=\"profs-table\" class=\"table table-striped table-bordered bulk_action\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>

                            <tbody>
                              ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "students", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 75
            echo "                                ";
            $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "vars", array()), "value", array());
            echo " 
                                ";
            // line 76
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "students", array()), "vars", array()), "choices", array()), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 76, $this->source); })()), array(), "array"), "data", array());
            // line 77
            echo "                                  ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 77, $this->source); })()), "classroom", array()))) {
                // line 78
                echo "                                    <tr>
                                      <td> ";
                // line 79
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["user"], 'widget');
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 79, $this->source); })()), "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 79, $this->source); })()), "user", array()), "lastName", array()), "html", null, true);
                echo " </td>
                                    </tr>
                                  ";
            } else {
                // line 82
                echo "                                      <tr>
                                        <td> ";
                // line 83
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["user"], 'widget', array("attr" => array("disabled" => true)));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 83, $this->source); })()), "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 83, $this->source); })()), "user", array()), "lastName", array()), "html", null, true);
                echo " </td>
                                      </tr>
                                  ";
            }
            // line 86
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                            </tbody>
                          </table>
                        </div>
                        
                        <div class=\"form-group\">
                        <div class=\"col-md-10 col-sm-12 col-xs-12\">
                          <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classroom_manager");
        echo "\"<button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
                          <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                        </div>
                      </div>
                    </form>
                    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
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
        return "admin/registerClassroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 98,  230 => 93,  222 => 87,  216 => 86,  206 => 83,  203 => 82,  193 => 79,  190 => 78,  187 => 77,  185 => 76,  180 => 75,  176 => 74,  160 => 60,  147 => 57,  144 => 56,  142 => 55,  137 => 54,  133 => 53,  116 => 39,  109 => 35,  105 => 34,  98 => 30,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Création d'une classe
{% endblock %}

{% block content %}

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            
            <div class=\"clearfix\"></div>

            <div class=\"row\">

              <div class=\"col-md-8 col-sm-10 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'une nouvelle classe</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">


                    <!-- Smart Wizard -->
                    <br />
                    
                      {{ form_start(form) }}
                      <form id=\"register-classroom\" class=\"form-horizontal form-label-left input_mask\">

                          <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                            {{ form_widget(form.name, { 'attr': { 'class': 'form-control', 'id': 'form_name', 'name': 'form[name]', 'placeholder': 'Nom' } } ) }}
                            {{ form_errors(form.name, { 'attr': { 'class': 'form-error'} } ) }}
                          </div>
                          
                          <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                            {{ form_widget(form.description, { 'attr': { 'class': 'form-control', 'id': 'form_description', 'name': 'form[description]', 'placeholder': 'Optionel: Description' } } ) }}
                          </div>

                          
                          <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                          <h2>Assigner un/des Profs à cette classe</h2>
                          <table id=\"profs-table\" class=\"table table-striped table-bordered bulk_action\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>

                            <tbody>
                              {% for user in form.teachers %}
                                {% set index = user.vars.value %} 
                                {% set entity = form.teachers.vars.choices[index].data %}
                                <tr>
                                  <td> {{ form_widget(user) }} {{ entity.user.firstName }} {{ entity.user.lastName }}</td>
                                </tr>
                              {% endfor %}
                            </tbody>
                          </table>
                        </div>

                        <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                          <h2>Assigner un/des Elève(s) à cette classe</h2> 
                          <table id=\"profs-table\" class=\"table table-striped table-bordered bulk_action\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>

                            <tbody>
                              {% for user in form.students %}
                                {% set index = user.vars.value %} 
                                {% set entity = form.students.vars.choices[index].data %}
                                  {% if entity.classroom is empty %}
                                    <tr>
                                      <td> {{ form_widget(user) }} {{ entity.user.firstName }} {{ entity.user.lastName }} </td>
                                    </tr>
                                  {% else %}
                                      <tr>
                                        <td> {{ form_widget(user, { 'attr': { 'disabled': true } }) }} {{ entity.user.firstName }} {{ entity.user.lastName }} </td>
                                      </tr>
                                  {% endif %}
                              {% endfor %}
                            </tbody>
                          </table>
                        </div>
                        
                        <div class=\"form-group\">
                        <div class=\"col-md-10 col-sm-12 col-xs-12\">
                          <a href=\"{{ path('classroom_manager') }}\"<button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
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

", "admin/registerClassroom.html.twig", "/Users/ribantxa/Sites/Go-Kids/templates/admin/registerClassroom.html.twig");
    }
}
