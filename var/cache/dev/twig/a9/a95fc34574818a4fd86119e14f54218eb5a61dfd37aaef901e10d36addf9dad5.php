<?php

/* admin/classroomManager.html.twig */
class __TwigTemplate_f615c10e6e9a9ca30d2a3069d53bf267fba78720fc7404dee9cb783ebb2458fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/classroomManager.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/classroomManager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/classroomManager.html.twig"));

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
        echo "GO Kids - Gestion des classes
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

        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Classes</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li>
                      \t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_classroom");
        echo "\"><button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-plus-square\"></i> Créer</button></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nom</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) || array_key_exists("classrooms", $context) ? $context["classrooms"] : (function () { throw new Twig_Error_Runtime('Variable "classrooms" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 40
            echo "                        <tr>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "name", array()), "html", null, true);
            echo "</td>

                            <td>
                            \t<a href=\"\" title=\"Modifier\"><button type=\"button\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i></button></a>
                            \t<a href=\"\"><button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cette classe?')\" title=\"Supprimer\"><i class=\"fa fa-trash-o\"></i></button></a>
                            </td>
                            
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "admin/classroomManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  121 => 42,  117 => 41,  114 => 40,  110 => 39,  90 => 22,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Gestion des classes
{% endblock %}

{% block content %}

<div class=\"right_col\" role=\"main\">
    <div class=\"\">

        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Classes</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li>
                      \t<a href=\"{{ path('register_classroom') }}\"><button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-plus-square\"></i> Créer</button></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nom</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      {% for classroom in classrooms %}
                        <tr>
                            <td>{{ classroom.id }}</td>
                            <td>{{ classroom.name }}</td>

                            <td>
                            \t<a href=\"\" title=\"Modifier\"><button type=\"button\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i></button></a>
                            \t<a href=\"\"><button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cette classe?')\" title=\"Supprimer\"><i class=\"fa fa-trash-o\"></i></button></a>
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

{% endblock %}", "admin/classroomManager.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/classroomManager.html.twig");
    }
}
