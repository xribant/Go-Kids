<?php

/* emails/registration.html.twig */
class __TwigTemplate_e5b3530391ed440e400daf5c93613c093939b8de183060cad5f0fc9ab4e58dc2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        // line 1
        echo "<html>
<head>
\t</head>
\t<body>
";
        // line 6
        echo "<h3>You did it! You registered!</h3>

Hi! You're successfully registered.

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "flashes", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"flash-warning\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 17
        echo "To login, go to: <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security_login_form");
        echo "\"> Here </a>.

Thanks!

";
        // line 22
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/go-kids-logo-login.png")), "html", null, true);
        echo "\">
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  60 => 17,  57 => 15,  48 => 12,  45 => 11,  41 => 10,  35 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
\t</head>
\t<body>
{# templates/emails/registration.html.twig #}
<h3>You did it! You registered!</h3>

Hi! You're successfully registered.

{% for message in app.flashes('warning') %}
    <div class=\"flash-warning\">
        {{ message }}
    </div>
{% endfor %}

{# example, assuming you have a route named \"login\" #}
To login, go to: <a href=\"{{ url('security_login_form') }}\"> Here </a>.

Thanks!

{# Makes an absolute URL to the /images/logo.png file #}
<img src=\"{{ absolute_url(asset('build/img/go-kids-logo-login.png')) }}\">
</body>
</html>", "emails/registration.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/emails/registration.html.twig");
    }
}
