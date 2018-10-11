<?php

/* admin/registerClassroom.html.twig */
class __TwigTemplate_c66989d8ceecc7dc819fc19af42145c83098d203bdbc2fb7435cdc0806651814 extends Twig_Template
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

              <div class=\"col-md-10 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'une nouvelle classe</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">


                    <!-- Smart Wizard -->
                    <br />
                    
                      <form class=\"form-horizontal form-label-left\">
                      ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "

                          <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "id" => "form_name", "name" => "form[name]", "placeholder" => "Nom - Ex: P1")));
        echo "
                            </div>
                          </div>

                        <div class=\"form-group\">
                          <h2>Assigner un/des Prof(s) à cette classe</h2>
                          <table id=\"profs-table\" class=\"table table-striped table-bordered bulk_action\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "profs", array()), 'widget');
        echo "</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class=\"form-group\">
                          <h2>Assigner des élèves à cette classe</h2>
                          <table id=\"classmates-table\" class=\"table table-striped table-bordered\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "classmates", array()), 'widget');
        echo "</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
        
                    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
                    </form>

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
        return array (  151 => 71,  142 => 65,  124 => 50,  106 => 35,  99 => 31,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
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

              <div class=\"col-md-10 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'une nouvelle classe</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">


                    <!-- Smart Wizard -->
                    <br />
                    
                      <form class=\"form-horizontal form-label-left\">
                      {{ form_start(form) }}

                          <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              {{ form_widget(form.name, { 'attr': { 'class': 'form-control col-md-7 col-xs-12', 'id': 'form_name', 'name': 'form[name]', 'placeholder': 'Nom - Ex: P1' } } ) }}
                            </div>
                          </div>

                        <div class=\"form-group\">
                          <h2>Assigner un/des Prof(s) à cette classe</h2>
                          <table id=\"profs-table\" class=\"table table-striped table-bordered bulk_action\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>{{ form_widget(form.profs) }}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class=\"form-group\">
                          <h2>Assigner des élèves à cette classe</h2>
                          <table id=\"classmates-table\" class=\"table table-striped table-bordered\">
                            <thead>
                              <tr>
                                <th>Nom</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{ form_widget(form.classmates) }}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
        
                    {{ form_end(form) }}
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        
{% endblock %}

", "admin/registerClassroom.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/registerClassroom.html.twig");
    }
}
