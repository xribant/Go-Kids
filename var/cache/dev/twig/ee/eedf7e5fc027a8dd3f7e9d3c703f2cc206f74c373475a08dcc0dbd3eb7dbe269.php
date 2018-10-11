<?php

/* @DataTables/Filter/text.html.twig */
class __TwigTemplate_274fb2f0faeafb10541886d31c7f2f08846d0899ab6e81c493095f2de752eb5b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataTables/Filter/text.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataTables/Filter/text.html.twig"));

        // line 1
        echo "<label>
    <input id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new Twig_Error_Runtime('Variable "datatable" does not exist.', 2, $this->source); })()), "setting", array(0 => "name"), "method"), "html", null, true);
        echo "-column-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 2, $this->source); })()), "index", array()), "html", null, true);
        echo "\"
           data-search-column-index=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 3, $this->source); })()), "index", array()), "html", null, true);
        echo "\"
            ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 4, $this->source); })()), "filter", array()), "placeholder", array()) != null)) {
            // line 5
            echo "                placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 5, $this->source); })()), "filter", array()), "placeholder", array())), "html", null, true);
            echo "\"
            ";
        }
        // line 7
        echo "           value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 7, $this->source); })()), "searchValue", array()), "html", null, true);
        echo "\">
    <script>
        document.getElementById('domains').addEventListener('restore', function (e, data) {
            console.log(data);
        });
    </script>
</label>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@DataTables/Filter/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  44 => 5,  42 => 4,  38 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<label>
    <input id=\"{{ datatable.setting('name') }}-column-{{ column.index }}\"
           data-search-column-index=\"{{ column.index }}\"
            {% if column.filter.placeholder != null %}
                placeholder=\"{{ column.filter.placeholder|trans }}\"
            {% endif %}
           value=\"{{ column.searchValue }}\">
    <script>
        document.getElementById('domains').addEventListener('restore', function (e, data) {
            console.log(data);
        });
    </script>
</label>
", "@DataTables/Filter/text.html.twig", "/Users/ribantxa/Sites/go-kids.be/vendor/omines/datatables-bundle/src/Resources/views/Filter/text.html.twig");
    }
}
