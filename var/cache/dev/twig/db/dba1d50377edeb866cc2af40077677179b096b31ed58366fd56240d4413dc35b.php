<?php

/* admin/registerCompetence.html.twig */
class __TwigTemplate_288881b47586b33e43ae42a4b3d40b92df09f011f900b16a3e30e29be9f57b33 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/registerCompetence.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerCompetence.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerCompetence.html.twig"));

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
        echo "GO Kids - Création d'une compétence
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

              <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'une nouvelle compétences</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <br />
                    
                      ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
                      <form id=\"register-classroom\" class=\"form-horizontal form-label-left input_mask\">

                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_name", "name" => "form[name]", "placeholder" => "Nom")));
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "name", array()), 'errors', array("attr" => array("class" => "form-error")));
        echo "
                          </div>

                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "domaine", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_domaine", "name" => "form[domaine]")));
        echo "
                          </div>
                        
                        <div class=\"form-group\">
                        <div class=\"col-md-10 col-sm-12 col-xs-12\">
                          <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dc_manager");
        echo "\"<button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
                          <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                        </div>
                      </div>
                    </form>
                    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
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
        return "admin/registerCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  122 => 42,  114 => 37,  107 => 33,  103 => 32,  96 => 28,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Création d'une compétence
{% endblock %}

{% block content %}

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            
            <div class=\"clearfix\"></div>

            <div class=\"row\">

              <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'une nouvelle compétences</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <br />
                    
                      {{ form_start(form) }}
                      <form id=\"register-classroom\" class=\"form-horizontal form-label-left input_mask\">

                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                            {{ form_widget(form.name, { 'attr': { 'class': 'form-control', 'id': 'form_name', 'name': 'form[name]', 'placeholder': 'Nom' } } ) }}
                            {{ form_errors(form.name, { 'attr': { 'class': 'form-error'} } ) }}
                          </div>

                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                            {{ form_widget(form.domaine, { 'attr': { 'class': 'form-control', 'id': 'form_domaine', 'name': 'form[domaine]' } } ) }}
                          </div>
                        
                        <div class=\"form-group\">
                        <div class=\"col-md-10 col-sm-12 col-xs-12\">
                          <a href=\"{{ path('dc_manager') }}\"<button type=\"button\" class=\"btn btn-primary\">Annuler</button></a>
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

", "admin/registerCompetence.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/registerCompetence.html.twig");
    }
}
