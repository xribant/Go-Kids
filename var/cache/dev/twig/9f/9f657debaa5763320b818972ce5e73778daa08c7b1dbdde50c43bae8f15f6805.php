<?php

/* mycontroles/pendingControles.html.twig */
class __TwigTemplate_b63ce1c4978f6db1a622ac02d2cea1a2e00d13c3508c00f315b2f2010e57b723 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mycontroles/pendingControles.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mycontroles/pendingControles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mycontroles/pendingControles.html.twig"));

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
        echo "GO Kids - Mes Contrôles
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
              <h3>Mes Contrôles</h3>
          </div>
      </div>
      <div class=\"clearfix\"></div>

      <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 form-group\">
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"x_content\">
                    <table id=\"profs-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Intitulé</th>
                          <th>Compétence</th>
                          <th>Créé le</th>
                          <th>Planifié pour le</th>
                          <th>Cote Max</th>
                        
                        </tr>
                      </thead>

                      <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["controles"]) || array_key_exists("controles", $context) ? $context["controles"] : (function () { throw new Twig_Error_Runtime('Variable "controles" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["controle"]) {
            // line 43
            echo "                          <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["controle"], "intitule", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["controle"], "competence", array()), "name", array()), "html", null, true);
            echo "</td> 
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["controle"], "creationDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["controle"], "planedDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["controle"], "scoreMax", array()), "html", null, true);
            echo "</td> 
                            <td></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['controle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                      </tbody>
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
        return "mycontroles/pendingControles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 52,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  114 => 43,  110 => 42,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Mes Contrôles
{% endblock %}

{% block content %}

<div class=\"right_col\" role=\"main\">
    <div class=\"\">
      <div class=\"page-title\">
          <div class=\"title_left\">
              <h3>Mes Contrôles</h3>
          </div>
      </div>
      <div class=\"clearfix\"></div>

      <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 form-group\">
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"x_content\">
                    <table id=\"profs-table\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Intitulé</th>
                          <th>Compétence</th>
                          <th>Créé le</th>
                          <th>Planifié pour le</th>
                          <th>Cote Max</th>
                        
                        </tr>
                      </thead>

                      <tbody>
                        {% for controle in controles %}
                          <tr>
                            <td>{{ controle.intitule }}</td>
                            <td>{{ controle.competence.name }}</td> 
                            <td>{{ controle.creationDate|date(\"d/m/Y\") }}</td>
                            <td>{{ controle.planedDate|date(\"m/d/Y\") }}</td>
                            <td>{{ controle.scoreMax }}</td> 
                            <td></td>
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

{% endblock %}", "mycontroles/pendingControles.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/mycontroles/pendingControles.html.twig");
    }
}
