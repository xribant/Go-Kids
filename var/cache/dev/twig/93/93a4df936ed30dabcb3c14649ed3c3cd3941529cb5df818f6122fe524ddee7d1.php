<?php

/* admin/registerUser.html.twig */
class __TwigTemplate_01c456fbe4157519308c3aca12bb5ca9d874c449e728ce79cacc5ca43d2bd2e3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/registerUser.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/registerUser.html.twig"));

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
        echo "GO Kids - Création d'un utilisateur
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
              <div class=\"col-md-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'un nouvel utilisateur</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />

                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
                    <form class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control has-feedback-left", "id" => "form_firstName", "name" => "form[firstName]", "placeholder" => "Prénom")));
        echo "
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess3\" placeholder=\"Last Name\">
                        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" placeholder=\"Email\">
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess5\" placeholder=\"Phone\">
                        <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Default Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"Default Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Disabled Input </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Disabled Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Read-Only Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" readonly=\"readonly\" placeholder=\"Read-Only Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\">
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-9 col-sm-9 col-xs-12 col-md-offset-3\">
                          <button type=\"button\" class=\"btn btn-primary\">Cancel</button>
               <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>

                    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
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
        return "admin/registerUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 87,  103 => 32,  96 => 28,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
GO Kids - Création d'un utilisateur
{% endblock %}

{% block content %}


              
<!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">

            <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Création d'un nouvel utilisateur</h2>
                    
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />

                    {{ form_start(form) }}
                    <form class=\"form-horizontal form-label-left input_mask\">

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        {{ form_widget(form.firstName, { 'attr': { 'class': 'form-control has-feedback-left', 'id': 'form_firstName', 'name': 'form[firstName]', 'placeholder': 'Prénom' } } ) }}
                        <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess3\" placeholder=\"Last Name\">
                        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" placeholder=\"Email\">
                        <span class=\"fa fa-envelope form-control-feedback left\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSuccess5\" placeholder=\"Phone\">
                        <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
                      </div>

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Default Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"Default Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Disabled Input </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Disabled Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Read-Only Input</label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input type=\"text\" class=\"form-control\" readonly=\"readonly\" placeholder=\"Read-Only Input\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Date Of Birth <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                          <input class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\">
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-9 col-sm-9 col-xs-12 col-md-offset-3\">
                          <button type=\"button\" class=\"btn btn-primary\">Cancel</button>
               <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

                    </form>

                    {{ form_end(form) }}
                  </div>
                </div>

                

              


              

            
          </div>
        </div>
        <!-- /page content -->

{% endblock %}", "admin/registerUser.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/admin/registerUser.html.twig");
    }
}
