<?php

/* @DataTables/datatable_html.html.twig */
class __TwigTemplate_8fb964d5d0bf94d9ab0db0f248bf3e3c05414f66b1b8624e96761e35fd5060c8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataTables/datatable_html.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataTables/datatable_html.html.twig"));

        // line 1
        $context["__internal_7921dd995c774907138c90e160b6ebf0250929ff8ad0a758be7a8e317783ed6e"] = twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new Twig_Error_Runtime('Variable "datatable" does not exist.', 1, $this->source); })()), "translationDomain", array());
        // line 2
        echo "
<table id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new Twig_Error_Runtime('Variable "datatable" does not exist.', 3, $this->source); })()), "name", array()), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["className"]) || array_key_exists("className", $context)) &&  !twig_test_empty((isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 3, $this->source); })())))) {
            echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new Twig_Error_Runtime('Variable "className" does not exist.', 3, $this->source); })()), "html", null, true);
        }
        echo "\">
    <thead>
    <tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new Twig_Error_Runtime('Variable "datatable" does not exist.', 6, $this->source); })()), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["column"], "label", array()), array(),             // line 1
(isset($context["__internal_7921dd995c774907138c90e160b6ebf0250929ff8ad0a758be7a8e317783ed6e"]) || array_key_exists("__internal_7921dd995c774907138c90e160b6ebf0250929ff8ad0a758be7a8e317783ed6e", $context) ? $context["__internal_7921dd995c774907138c90e160b6ebf0250929ff8ad0a758be7a8e317783ed6e"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7921dd995c774907138c90e160b6ebf0250929ff8ad0a758be7a8e317783ed6e" does not exist.', 1, $this->source); })())), "html", null, true);
            // line 7
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </tr>
    ";
        // line 17
        echo "    </thead>
    ";
        // line 27
        echo "    <tbody>
    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@DataTables/datatable_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  62 => 17,  59 => 9,  52 => 7,  50 => 1,  48 => 7,  44 => 6,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain datatable.translationDomain %}

<table id=\"{{ datatable.name }}\" class=\"{% if className is defined and className is not empty %}{{ className }}{% endif %}\">
    <thead>
    <tr>
        {% for column in datatable.columns %}
            <th>{{ column.label|trans }}</th>
        {% endfor %}
    </tr>
    {#% if datatable.option('searching') and datatable.setting('column_filter') in ['both', 'thead'] %}
        <tr class=\"datatable-filters\">
            {% for column in datatable.columns %}
                <td>{% if column.filter != null %}{% include column.filter.templateHtml %}{% endif %}</td>
            {% endfor %}
        </tr>
    {% endif %#}
    </thead>
    {#% if datatable.option('searching') and datatable.setting('column_filter') in ['both', 'tfoot'] %}
        <tfoot>
        <tr class=\"datatable-filters\">
            {% for column in datatable.columns %}
                <td>{% if column.filter != null %}{% include column.filter.templateHtml %}{% endif %}</td>
            {% endfor %}
        </tr>
        </tfoot>
    {% endif %#}
    <tbody>
    </tbody>
</table>
", "@DataTables/datatable_html.html.twig", "/Users/ribantxa/Sites/go-kids.be/vendor/omines/datatables-bundle/src/Resources/views/datatable_html.html.twig");
    }
}
