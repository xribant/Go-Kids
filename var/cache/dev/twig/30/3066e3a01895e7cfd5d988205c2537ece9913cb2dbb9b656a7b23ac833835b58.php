<?php

/* admin/editDomaine.html.twig */
class __TwigTemplate_83b4b665e47a5b7188a12fea9e6096549c43b0f14b83f7cab0f01a80e9e0fa43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/editDomaine.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editDomaine.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editDomaine.html.twig"));

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
        echo "GO Kids - Modification d'un domaine de compétence
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
                    <h2>Modification du domaine : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new Twig_Error_Runtime('Variable "domaine" does not exist.', 20, $this->source); })()), "name", array()), "html", null, true);
        echo " </h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
                      <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                        <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                          <label>Nom: </label>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_name", "name" => "form[name]", "value" => twig_get_attribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new Twig_Error_Runtime('Variable "domaine" does not exist.', 31, $this->source); })()), "name", array()))));
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "name", array()), 'errors', array("attr" => array("class" => "form-error")));
        echo "
                        </div>

                        <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                            <h2>Compétences liées à ce domaine</h2> 
                            <table class=\"table table-striped table-bordered bulk_action\">
                              <thead>
                                <tr>
                                  <th>Nom</th>
                                  <th></th>
                                </tr>
                              </thead>

                              <tbody>
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new Twig_Error_Runtime('Variable "domaine" does not exist.', 46, $this->source); })()), "competences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 47
            echo "                                  <tr>
                                    <td> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "name", array()), "html", null, true);
            echo " </td>
                                    <td>
                                      <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_competence", array("id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                                      <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_competence", array("id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cette compétence?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                                    </td>
                                  </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                              </tbody>
                            </table>
                          </div> 
                      
                        <div class=\"form-group\">
                          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dc_manager");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
                            <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                          </div>
                        </div>

                      </form>

                      ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
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
        return "admin/editDomaine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  160 => 61,  152 => 55,  142 => 51,  138 => 50,  133 => 48,  130 => 47,  126 => 46,  109 => 32,  105 => 31,  97 => 26,  88 => 20,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Modification d'un domaine de compétence
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
                    <h2>Modification du domaine : {{ domaine.name }} </h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                      {{ form_start(form) }}
                      <form id=\"register-user\" class=\"form-horizontal form-label-left input_mask\">

                        <div class=\"col-md-6 col-sm-8 col-xs-12 form-group\">
                          <label>Nom: </label>
                            {{ form_widget(form.name, { 'attr': { 'class': 'form-control', 'id': 'form_name', 'name': 'form[name]', 'value': domaine.name } } ) }}
                            {{ form_errors(form.name, { 'attr': { 'class': 'form-error'} } ) }}
                        </div>

                        <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                            <h2>Compétences liées à ce domaine</h2> 
                            <table class=\"table table-striped table-bordered bulk_action\">
                              <thead>
                                <tr>
                                  <th>Nom</th>
                                  <th></th>
                                </tr>
                              </thead>

                              <tbody>
                                {% for competence in domaine.competences %}
                                  <tr>
                                    <td> {{ competence.name }} </td>
                                    <td>
                                      <a href=\"{{ path('edit_competence', { 'id': competence.id }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-edit\"></i> Modifier </a>
                                      <a href=\"{{ path('delete_competence', { 'id': competence.id }) }}\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" onclick=\"return confirm('Attention !!! \\nEtes vous certain de vouloir supprimer cette compétence?')\"><i class=\"fa fa-trash-o\"></i> Supprimer </a>
                                    </td>
                                  </tr>
                                {% endfor %}
                              </tbody>
                            </table>
                          </div> 
                      
                        <div class=\"form-group\">
                          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <a href=\"{{ path('dc_manager') }}\"><button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
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

", "admin/editDomaine.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/editDomaine.html.twig");
    }
}
