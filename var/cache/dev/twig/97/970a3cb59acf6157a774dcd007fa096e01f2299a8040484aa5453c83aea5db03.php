<?php

/* admin/editTeacher.html.twig */
class __TwigTemplate_5c436a7506d7d8f928392c37120f07e170f49f98332692d263c4c46a5d311d00 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/editUser.html.twig", "admin/editTeacher.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'userName' => array($this, 'block_userName'),
            'userType' => array($this, 'block_userType'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/editUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editTeacher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editTeacher.html.twig"));

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
        echo "Modification d'un Professeur
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_userName($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userName"));

        echo " 
  ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new Twig_Error_Runtime('Variable "teacher" does not exist.', 8, $this->source); })()), "user", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new Twig_Error_Runtime('Variable "teacher" does not exist.', 8, $this->source); })()), "user", array()), "lastName", array()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_userType($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userType"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userType"));

        echo " 
    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
    \t";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new Twig_Error_Runtime('Variable "teacher" does not exist.', 13, $this->source); })()), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 14
            echo "      \t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "roles", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_roles", "name" => "form[roles]", "value" => "form[roles]")));
            echo "
    \t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new Twig_Error_Runtime('Variable "teacher" does not exist.', 15, $this->source); })()), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_USER")) {
            // line 16
            echo "    \t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "roles", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_roles", "name" => "form[roles]", "selected" => "selected")));
            echo "
    \t";
        }
        // line 18
        echo "    </div>

    <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
      <h2>Assigner une/des classe(s)</h2>
          <table class=\"table table-striped table-bordered bulk_action\">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Description</th>
              </tr>
            </thead>

            <tbody>
              ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "classrooms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 32
            echo "                ";
            $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["classroom"], "vars", array()), "value", array());
            // line 33
            echo "                ";
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "classrooms", array()), "vars", array()), "choices", array()), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 33, $this->source); })()), array(), "array"), "data", array());
            // line 34
            echo "                \t";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 34, $this->source); })()), "id", array()), (isset($context["ids"]) || array_key_exists("ids", $context) ? $context["ids"] : (function () { throw new Twig_Error_Runtime('Variable "ids" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                \t\t<tr>
\t\t\t                <td> ";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["classroom"], 'widget', array("attr" => array("checked" => "checked")));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 36, $this->source); })()), "name", array()), "html", null, true);
                echo "</td>
\t\t\t               \t<td> ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 37, $this->source); })()), "description", array()), "html", null, true);
                echo " </td>
\t\t\t            </tr>
                \t";
            } else {
                // line 40
                echo "\t\t                <tr>
\t\t                    <td> ";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["classroom"], 'widget');
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 41, $this->source); })()), "name", array()), "html", null, true);
                echo "</td>
\t\t                    <td> ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 42, $this->source); })()), "description", array()), "html", null, true);
                echo " </td>
\t\t                </tr>
\t                ";
            }
            // line 45
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                                  
            </tbody>
          </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/editTeacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 46,  176 => 45,  170 => 42,  164 => 41,  161 => 40,  155 => 37,  149 => 36,  146 => 35,  143 => 34,  140 => 33,  137 => 32,  133 => 31,  118 => 18,  112 => 16,  110 => 15,  105 => 14,  103 => 13,  91 => 11,  77 => 8,  66 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/editUser.html.twig' %}

{% block title %}
Modification d'un Professeur
{% endblock %}

{% block userName %} 
  {{ teacher.user.firstName }} {{ teacher.user.lastName }}
{% endblock %}
                    
{% block userType %} 
    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
    \t{% if teacher.user.roles[0] == \"ROLE_ADMIN\" %}
      \t\t{{ form_widget(form.roles, { 'attr': { 'class': 'form-control', 'id': 'form_roles', 'name': 'form[roles]', 'value': 'form[roles]' } } ) }}
    \t{% elseif teacher.user.roles[0] == \"ROLE_USER\" %}
    \t\t{{ form_widget(form.roles, { 'attr': { 'class': 'form-control', 'id': 'form_roles', 'name': 'form[roles]', 'selected': 'selected' } } ) }}
    \t{% endif %}
    </div>

    <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
      <h2>Assigner une/des classe(s)</h2>
          <table class=\"table table-striped table-bordered bulk_action\">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Description</th>
              </tr>
            </thead>

            <tbody>
              {% for classroom in form.classrooms %}
                {% set index = classroom.vars.value %}
                {% set entity = form.classrooms.vars.choices[index].data %}
                \t{% if entity.id in ids %}
                \t\t<tr>
\t\t\t                <td> {{ form_widget(classroom,  { 'attr': { 'checked': 'checked'}} ) }} {{ entity.name }}</td>
\t\t\t               \t<td> {{ entity.description }} </td>
\t\t\t            </tr>
                \t{% else %}
\t\t                <tr>
\t\t                    <td> {{ form_widget(classroom) }} {{ entity.name }}</td>
\t\t                    <td> {{ entity.description }} </td>
\t\t                </tr>
\t                {% endif %}
              {% endfor %}
                                                  
            </tbody>
          </table>
    </div>
{% endblock %}

", "admin/editTeacher.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/editTeacher.html.twig");
    }
}
