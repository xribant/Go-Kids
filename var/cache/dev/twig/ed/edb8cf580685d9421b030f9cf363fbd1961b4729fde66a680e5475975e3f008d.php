<?php

/* admin/userManager.html.twig */
class __TwigTemplate_fe10c7b19328eb7b16f528cf3768876d15997b4df2c84cfe6c78df881116af9e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/userManager.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/userManager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/userManager.html.twig"));

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
        echo "GO Kids - User Manager
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
<div class=\"right_col\" role=\"main\">
    <div class=\"\">
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Gestion des Profs</h3>
          </div>
      </div>
      <div class=\"clearfix\"></div>

      <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_form", array("usertype" => "prof"));
        echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-user-plus\"></i> Créer un Prof </a>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"x_content\">
                    <table id=\"profs-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Classe(s)</th>
                          <th>Age</th>
                          <th>Role</th>
                          <th>Statut</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) || array_key_exists("teachers", $context) ? $context["teachers"] : (function () { throw new Twig_Error_Runtime('Variable "teachers" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 43
            echo "                        <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "lastName", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, $context["teacher"], "classrooms", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 47
                echo "                                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "name", array()), "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                            </td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getAge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "birthDate", array())), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 53
                echo "          \t\t\t\t\t                ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
          \t\t\t\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </td>
                                ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "isActive", array()) == true)) {
                // line 57
                echo "                                    <td class=\"enabled\">Actif</td>
                                ";
            } else {
                // line 59
                echo "                                    <td class=\"disabled\">Bloqué</td>
                                ";
            }
            // line 61
            echo "                            <td>
                              <a href=\"#\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-eye\"></i> Voir </a>
                            \t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_teacher", array("id" => twig_get_attribute($this->env, $this->source, $context["teacher"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                              ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "isActive", array()) == true)) {
                // line 65
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enableDisable_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-ban\"></i> Bloquer </a>
                              ";
            } else {
                // line 67
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enableDisable_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i> Débloquer </a>
                              ";
            }
            // line 69
            echo "                            \t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["teacher"], "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cet utilisateur?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                            </td>
                            
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Gestion des Elèves</h3>
          </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"row\">

              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_form", array("usertype" => "eleve"));
        echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-user-plus\"></i> Créer un Elève </a>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"x_content\">
                    <table id=\"profs-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Classe</th>
                          <th>Age</th>
                          <th>Statut</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new Twig_Error_Runtime('Variable "students" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 111
            echo "                        <tr>
                            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "lastName", array()), "html", null, true);
            echo "</td>
                            <td>
                              ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, $context["student"], "classroom", array())) {
                // line 115
                echo "                                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "classroom", array()), "name", array()), "html", null, true);
                echo "
                              ";
            }
            // line 117
            echo "                            </td>
                            <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getAge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "birthDate", array())), "html", null, true);
            echo "</td>
                            ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "isActive", array()) == true)) {
                // line 120
                echo "                                <td class=\"enabled\">Actif</td>
                            ";
            } else {
                // line 122
                echo "                                <td class=\"disabled\">Bloqué</td>
                            ";
            }
            // line 124
            echo "                            <td>
                              <a href=\"#\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-eye\"></i> Voir </a>
                              <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_student", array("id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                              ";
            // line 127
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "isActive", array()) == true)) {
                // line 128
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enableDisable_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-ban\"></i> Bloquer </a>
                              ";
            } else {
                // line 130
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enableDisable_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i> Débloquer </a>
                              ";
            }
            // line 132
            echo "                              <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cet utilisateur?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                            </td>
                            
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
                      </tbody>
                    </table>
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
        return "admin/userManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 137,  310 => 132,  304 => 130,  298 => 128,  296 => 127,  292 => 126,  288 => 124,  284 => 122,  280 => 120,  278 => 119,  274 => 118,  271 => 117,  265 => 115,  263 => 114,  256 => 112,  253 => 111,  249 => 110,  228 => 92,  208 => 74,  196 => 69,  190 => 67,  184 => 65,  182 => 64,  178 => 63,  174 => 61,  170 => 59,  166 => 57,  164 => 56,  161 => 55,  152 => 53,  148 => 52,  143 => 50,  140 => 49,  131 => 47,  127 => 46,  120 => 44,  117 => 43,  113 => 42,  91 => 23,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - User Manager
{% endblock %}

{% block content %}

<div class=\"right_col\" role=\"main\">
    <div class=\"\">
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Gestion des Profs</h3>
          </div>
      </div>
      <div class=\"clearfix\"></div>

      <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"{{ path('register_form',{ 'usertype': 'prof' }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-user-plus\"></i> Créer un Prof </a>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"x_content\">
                    <table id=\"profs-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Classe(s)</th>
                          <th>Age</th>
                          <th>Role</th>
                          <th>Statut</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      {% for teacher in teachers %}
                        <tr>
                            <td>{{ teacher.user.firstName }} {{ teacher.user.lastName }}</td>
                            <td>
                                {% for classroom in teacher.classrooms|sort %}
                                  {{ classroom.name }}
                                {% endfor %}
                            </td>
                            <td>{{ teacher.user.birthDate|age }}</td>
                            <td>
                                {% for role in teacher.user.roles %}
          \t\t\t\t\t                {{ role }}
          \t\t\t\t\t            {% endfor %}
                            </td>
                                {% if teacher.user.isActive == true %}
                                    <td class=\"enabled\">Actif</td>
                                {% else %}
                                    <td class=\"disabled\">Bloqué</td>
                                {% endif %}
                            <td>
                              <a href=\"#\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-eye\"></i> Voir </a>
                            \t<a href=\"{{ path('edit_teacher',{ 'id': teacher.id }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                              {% if teacher.user.isActive == true %}
                                <a href=\"{{ path('enableDisable_user',{ 'id': teacher.user.id }) }}\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-ban\"></i> Bloquer </a>
                              {% else %}
                                <a href=\"{{ path('enableDisable_user',{ 'id': teacher.user.id }) }}\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i> Débloquer </a>
                              {% endif %}
                            \t<a href=\"{{ path('delete_user',{ 'id': teacher.user.id }) }}\" class=\"btn btn-danger btn-xs\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cet utilisateur?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                            </td>
                            
                        </tr>
                      {% endfor %}

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Gestion des Elèves</h3>
          </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"row\">

              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"{{ path('register_form',{ 'usertype': 'eleve' }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-user-plus\"></i> Créer un Elève </a>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"x_content\">
                    <table id=\"profs-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Classe</th>
                          <th>Age</th>
                          <th>Statut</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      {% for student in students %}
                        <tr>
                            <td>{{ student.user.firstName }} {{ student.user.lastName }}</td>
                            <td>
                              {% if student.classroom %}
                                  {{ student.classroom.name }}
                              {% endif %}
                            </td>
                            <td>{{ student.user.birthDate|age }}</td>
                            {% if student.user.isActive == true %}
                                <td class=\"enabled\">Actif</td>
                            {% else %}
                                <td class=\"disabled\">Bloqué</td>
                            {% endif %}
                            <td>
                              <a href=\"#\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-eye\"></i> Voir </a>
                              <a href=\"{{ path('edit_student',{ 'id': student.id }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                              {% if student.user.isActive == true %}
                                <a href=\"{{ path('enableDisable_user',{ 'id': student.user.id }) }}\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-ban\"></i> Bloquer </a>
                              {% else %}
                                <a href=\"{{ path('enableDisable_user',{ 'id': student.user.id }) }}\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i> Débloquer </a>
                              {% endif %}
                              <a href=\"{{ path('delete_user',{ 'id': student.user.id }) }}\" class=\"btn btn-danger btn-xs\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cet utilisateur?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                            </td>
                            
                        </tr>
                      {% endfor %}

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
    </div>
</div>
              
        <!-- /page content -->

{% endblock %}", "admin/userManager.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/userManager.html.twig");
    }
}
