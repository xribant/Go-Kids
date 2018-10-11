<?php

/* admin/editClassroom.html.twig */
class __TwigTemplate_2335a160d36a042d2b8349d573bc5728db1d4f9aa6a3553b36db54c6c005e66f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/editClassroom.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editClassroom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editClassroom.html.twig"));

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
        echo "GO Kids - Modification d'une classe
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
                    <h2>Modification de la classe : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classroom"]) || array_key_exists("classroom", $context) ? $context["classroom"] : (function () { throw new Twig_Error_Runtime('Variable "classroom" does not exist.', 21, $this->source); })()), "name", array()), "html", null, true);
        echo " </h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                    <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                        <label>Nom: </label>
                          ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_name", "name" => "form[name]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["classroom"]) || array_key_exists("classroom", $context) ? $context["classroom"] : (function () { throw new Twig_Error_Runtime('Variable "classroom" does not exist.', 32, $this->source); })()), "name", array()))));
        echo "
                          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "name", array()), 'errors', array("attr" => array("class" => "form-error")));
        echo "
                      </div>

                      <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                        <label>Description: </label>
                          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_description", "name" => "form[description]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["classroom"]) || array_key_exists("classroom", $context) ? $context["classroom"] : (function () { throw new Twig_Error_Runtime('Variable "classroom" does not exist.', 38, $this->source); })()), "description", array()))));
        echo "
                          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "description", array()), 'errors', array("attr" => array("class" => "form-error")));
        echo "
                      </div>
              
                      <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                          <h2>Assigner un/des Prof(s) à cette classe</h2>
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
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 54
            echo "                                    ";
            $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "vars", array()), "value", array());
            // line 55
            echo "                                    ";
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "teachers", array()), "vars", array()), "choices", array()), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 55, $this->source); })()), array(), "array"), "data", array());
            // line 56
            echo "                                        <tr>
                                            <td> ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["teacher"], 'widget');
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 57, $this->source); })()), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 57, $this->source); })()), "user", array()), "lastName", array()), "html", null, true);
            echo " </td>
                                        </tr>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                              
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
                              
                                  ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "students", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 77
            echo "                                    ";
            $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "vars", array()), "value", array());
            // line 78
            echo "                                    ";
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "students", array()), "vars", array()), "choices", array()), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 78, $this->source); })()), array(), "array"), "data", array());
            // line 79
            echo "                                        <tr>
                                            <td> ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["student"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 80, $this->source); })()), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 80, $this->source); })()), "user", array()), "lastName", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                            </tbody>
                          </table>
                        </div>
                      
                      
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classroom_manager");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
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
        <!-- /page content -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/editClassroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 98,  219 => 91,  209 => 83,  196 => 80,  193 => 79,  190 => 78,  187 => 77,  183 => 76,  165 => 60,  152 => 57,  149 => 56,  146 => 55,  143 => 54,  139 => 53,  122 => 39,  118 => 38,  110 => 33,  106 => 32,  98 => 27,  89 => 21,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Modification d'une classe
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
                    <h2>Modification de la classe : {{ classroom.name }} </h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    {{ form_start(form) }}
                    <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                        <label>Nom: </label>
                          {{ form_widget(form.name, { 'attr': { 'class': 'form-control', 'id': 'form_name', 'name': 'form[name]', 'value': classroom.name } } ) }}
                          {{ form_errors(form.name, { 'attr': { 'class': 'form-error'} } ) }}
                      </div>

                      <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                        <label>Description: </label>
                          {{ form_widget(form.description, { 'attr': { 'class': 'form-control', 'id': 'form_description', 'name': 'form[description]', 'value': classroom.description } } ) }}
                          {{ form_errors(form.description, { 'attr': { 'class': 'form-error'} } ) }}
                      </div>
              
                      <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                          <h2>Assigner un/des Prof(s) à cette classe</h2>
                          <table id=\"profs-table\" class=\"table table-striped table-bordered bulk_action\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>

                            <tbody>

                                  {% for teacher in form.teachers %}
                                    {% set index = teacher.vars.value %}
                                    {% set entity = form.teachers.vars.choices[index].data %}
                                        <tr>
                                            <td> {{ form_widget(teacher) }}  {{ entity.user.firstName }} {{ entity.user.lastName }} </td>
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
                              
                                  {% for student in form.students %}
                                    {% set index = student.vars.value %}
                                    {% set entity = form.students.vars.choices[index].data %}
                                        <tr>
                                            <td> {{ form_widget(student) }} {{ entity.user.firstName }} {{ entity.user.lastName }}</td>
                                        </tr>
                                  {% endfor %}

                            </tbody>
                          </table>
                        </div>
                      
                      
                      <div class=\"form-group\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <a href=\"{{ path('classroom_manager') }}\"><button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
                          <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
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

", "admin/editClassroom.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/editClassroom.html.twig");
    }
}
