<?php

/* @DataTables/Filter/select.html.twig */
class __TwigTemplate_49413bcb6e5589f6e4d8fd30a8bf76efd5d32802182af6d7cde67dd19aa29a73 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataTables/Filter/select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataTables/Filter/select.html.twig"));

        // line 1
        echo "<label>
    <select
            id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new Twig_Error_Runtime('Variable "datatable" does not exist.', 3, $this->source); })()), "setting", array(0 => "name"), "method"), "html", null, true);
        echo "-column-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 3, $this->source); })()), "index", array()), "html", null, true);
        echo "\"
            data-search-column-index=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 4, $this->source); })()), "index", array()), "html", null, true);
        echo "\"
    >
        ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 6, $this->source); })()), "filter", array()), "placeholder", array()) != null)) {
            // line 7
            echo "            <option class=\"placeholder\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 7, $this->source); })()), "filter", array()), "placeholder", array())), "html", null, true);
            echo "</option>
        ";
        }
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 9, $this->source); })()), "filter", array()), "choices", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 10
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </select>
</label>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@DataTables/Filter/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  57 => 10,  52 => 9,  46 => 7,  44 => 6,  39 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<label>
    <select
            id=\"{{ datatable.setting('name') }}-column-{{ column.index }}\"
            data-search-column-index=\"{{ column.index }}\"
    >
        {% if column.filter.placeholder != null %}
            <option class=\"placeholder\">{{ column.filter.placeholder|trans }}</option>
        {% endif %}
        {% for key, choice in column.filter.choices %}
            <option value=\"{{ key }}\">{{ choice }}</option>
        {% endfor %}
    </select>
</label>
", "@DataTables/Filter/select.html.twig", "/Users/ribantxa/Sites/go-kids.be/vendor/omines/datatables-bundle/src/Resources/views/Filter/select.html.twig");
    }
}
