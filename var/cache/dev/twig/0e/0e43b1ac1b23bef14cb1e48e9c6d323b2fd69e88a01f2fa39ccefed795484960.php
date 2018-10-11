<?php

/* admin/userManager.html.twig */
class __TwigTemplate_70fabda06a5807cd8257b3b4971a45e7ef2f8f4d3566cee0d6d1abe74d6f7509 extends Twig_Template
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

        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Utilisateurs</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li>
                      \t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_form");
        echo "\"><button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-user-plus\"></i> Créer</button></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>E-Mail</th>
                          <th>Adresse</th>
                          <th>Localité</th>
                          <th>Téléphone</th>
                          <th>Né le</th>
                          <th>Age</th>
                          <th>Type</th>
                          <th>Role</th>
                          <th>Statut</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 48
            echo "                        <tr>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getAge(twig_get_attribute($this->env, $this->source, $context["user"], "birthDate", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userType", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 59
                echo "\t\t\t\t\t                ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
\t\t\t\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </td>
                            ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", array()) == true)) {
                // line 63
                echo "                                <td class=\"enabled\">Actif</td>
                            ";
            } else {
                // line 65
                echo "                                <td class=\"disabled\">Bloqué</td>
                            ";
            }
            // line 67
            echo "                            <td>
                            \t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
            echo "\" title=\"Modifier\"><button type=\"button\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i></button></a>
                            \t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cet utilisateur?')\" title=\"Supprimer\"><i class=\"fa fa-trash-o\"></i></button></a>
                            \t";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", array()) == true)) {
                // line 71
                echo "                            \t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enableDisable_user", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Bloquer\"><button type=\"button\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-ban\"></i></button></a>
                            \t";
            } else {
                // line 73
                echo "                            \t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enableDisable_user", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Débloquer\"><button type=\"button\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i></button></a>
                            \t";
            }
            // line 75
            echo "                            </td>
                            
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return array (  220 => 79,  211 => 75,  205 => 73,  199 => 71,  197 => 70,  193 => 69,  189 => 68,  186 => 67,  182 => 65,  178 => 63,  176 => 62,  173 => 61,  164 => 59,  160 => 58,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  131 => 50,  125 => 49,  122 => 48,  118 => 47,  90 => 22,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
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

        <div class=\"clearfix\"></div>

        <div class=\"row\">
              
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Utilisateurs</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li>
                      \t<a href=\"{{ path('register_form') }}\"><button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-user-plus\"></i> Créer</button></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>E-Mail</th>
                          <th>Adresse</th>
                          <th>Localité</th>
                          <th>Téléphone</th>
                          <th>Né le</th>
                          <th>Age</th>
                          <th>Type</th>
                          <th>Role</th>
                          <th>Statut</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                      {% for user in users %}
                        <tr>
                            <td>{{ user.firstName }} {{ user.lastName }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.address }}</td>
                            <td>{{ user.city }}</td>
                            <td>{{ user.phone }}</td>
                            <td>{{ user.birthDate|date('d/m/Y') }}</td>
                            <td>{{ user.birthDate|age }}</td>
                            <td>{{ user.userType }}</td>
                            <td>
                                {% for role in user.roles %}
\t\t\t\t\t                {{ role }}
\t\t\t\t\t            {% endfor %}
                            </td>
                            {% if user.isActive == true %}
                                <td class=\"enabled\">Actif</td>
                            {% else %}
                                <td class=\"disabled\">Bloqué</td>
                            {% endif %}
                            <td>
                            \t<a href=\"{{ path('edit_user',{ 'id': user.id }) }}\" title=\"Modifier\"><button type=\"button\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i></button></a>
                            \t<a href=\"{{ path('delete_user',{ 'id': user.id }) }}\"><button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cet utilisateur?')\" title=\"Supprimer\"><i class=\"fa fa-trash-o\"></i></button></a>
                            \t{% if user.isActive == true %}
                            \t\t<a href=\"{{ path('enableDisable_user',{ 'id': user.id }) }}\" title=\"Bloquer\"><button type=\"button\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-ban\"></i></button></a>
                            \t{% else %}
                            \t\t<a href=\"{{ path('enableDisable_user',{ 'id': user.id }) }}\" title=\"Débloquer\"><button type=\"button\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i></button></a>
                            \t{% endif %}
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
