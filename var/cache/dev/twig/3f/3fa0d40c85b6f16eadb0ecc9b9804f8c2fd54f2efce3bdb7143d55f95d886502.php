<?php

/* admin/classroomManager.html.twig */
class __TwigTemplate_222d15f72e1a08e5764aa127c8f7e4178e40f422561d9fc2520d867f0b292be5 extends Twig_Template
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
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Gestion des Classes</h3>
          </div>
      </div>
        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_classroom");
        echo "\" class=\"btn btn-primary btn-xs\"> <i class=\"fa fa-users\"></i> Nouvelle Classe </a>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <table id=\"classrooms-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Description</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) || array_key_exists("classrooms", $context) ? $context["classrooms"] : (function () { throw new Twig_Error_Runtime('Variable "classrooms" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 41
            echo "                        <tr>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "description", array()), "html", null, true);
            echo "</td>

                            <td>
                            \t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_classroom", array("id" => twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                            \t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_classroom", array("id" => twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cette classe?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                            </td>
                            
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return array (  143 => 52,  132 => 47,  128 => 46,  122 => 43,  118 => 42,  115 => 41,  111 => 40,  91 => 23,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
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
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Gestion des Classes</h3>
          </div>
      </div>
        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"{{ path('register_classroom') }}\" class=\"btn btn-primary btn-xs\"> <i class=\"fa fa-users\"></i> Nouvelle Classe </a>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <table id=\"classrooms-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Description</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      {% for classroom in classrooms %}
                        <tr>
                            <td>{{ classroom.name }}</td>
                            <td>{{ classroom.description }}</td>

                            <td>
                            \t<a href=\"{{ path('edit_classroom', { 'id': classroom.id }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                            \t<a href=\"{{ path('delete_classroom', { 'id': classroom.id }) }}\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cette classe?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
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
