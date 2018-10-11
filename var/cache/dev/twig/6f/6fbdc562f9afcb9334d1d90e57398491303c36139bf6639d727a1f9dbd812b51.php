<?php

/* admin/DCManager.html.twig */
class __TwigTemplate_dac33fd34ef912aff900336aed92d656f97402ef7d2eb9b0db58e59e07c16dd5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/DCManager.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/DCManager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/DCManager.html.twig"));

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
        echo "GO Kids - Gestion des Domaines & Compétences
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
              <h3>Gestion des Domaine et Compétences</h3>
          </div>
      </div>
        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_domaine");
        echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus-square\"></i> Domaine </a>
                      <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_competence");
        echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus-square\"></i> Compétence </a>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                  <table id=\"DC-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Domaine</th>
                          <th>Compétence(s)</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domaines"]) || array_key_exists("domaines", $context) ? $context["domaines"] : (function () { throw new Twig_Error_Runtime('Variable "domaines" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 41
            echo "                        <tr>
                          <td> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "name", array()), "html", null, true);
            echo " </td>
                          <td>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["domaine"], "competences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 45
                echo "                              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "name", array()), "html", null, true);
                echo " ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "competences", array())) > 1)) {
                    echo " - ";
                }
                // line 46
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                          </td>
                          <td>
                              <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_domaine", array("id" => twig_get_attribute($this->env, $this->source, $context["domaine"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                              <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_domaine", array("id" => twig_get_attribute($this->env, $this->source, $context["domaine"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer ce domaine? Toutes les compétences liées à ce domaine le seront également')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                          </td>

                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return "admin/DCManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  151 => 50,  147 => 49,  143 => 47,  137 => 46,  130 => 45,  126 => 44,  121 => 42,  118 => 41,  114 => 40,  95 => 24,  91 => 23,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Gestion des Domaines & Compétences
{% endblock %}

{% block content %}

<div class=\"right_col\" role=\"main\">
    <div class=\"\">
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Gestion des Domaine et Compétences</h3>
          </div>
      </div>
        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                      <a href=\"{{ path('register_domaine') }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus-square\"></i> Domaine </a>
                      <a href=\"{{ path('register_competence') }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus-square\"></i> Compétence </a>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                  <table id=\"DC-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Domaine</th>
                          <th>Compétence(s)</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      {% for domaine in domaines %}
                        <tr>
                          <td> {{ domaine.name }} </td>
                          <td>
                            {% for competence in domaine.competences %}
                              {{ competence.name }} {% if domaine.competences|length > 1 %} - {% endif %}
                            {% endfor %}
                          </td>
                          <td>
                              <a href=\"{{ path('edit_domaine', { 'id': domaine.id }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                              <a href=\"{{ path('delete_domaine', { 'id': domaine.id }) }}\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer ce domaine? Toutes les compétences liées à ce domaine le seront également')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
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

{% endblock %}", "admin/DCManager.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/DCManager.html.twig");
    }
}
