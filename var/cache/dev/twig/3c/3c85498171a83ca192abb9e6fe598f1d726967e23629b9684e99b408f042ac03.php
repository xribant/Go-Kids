<?php

/* emails/resetLink.html.twig */
class __TwigTemplate_0d527eb830b80edb2850acb5b36e4b48402ac417450091b87949b2c936f8028b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/resetLink.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/resetLink.html.twig"));

        // line 1
        echo "<html>
";
        // line 3
        echo "
";
        // line 5
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/go-kids-logo-login.png")), "html", null, true);
        echo "\">

<h3>Bonjour!</h3>
Veuillez cliquer sur ce lien pour créer un nouveau mot de passe.<br><br>

<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "id", array()), "token" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "token", array())))), "html", null, true);
        echo "\">Changer le mot de passe</a>

Merci.
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/resetLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  35 => 5,  32 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
{# templates/emails/resetLink.html.twig #}

{# Makes an absolute URL to the /images/logo.png file #}
<img src=\"{{ absolute_url(asset('build/img/go-kids-logo-login.png')) }}\">

<h3>Bonjour!</h3>
Veuillez cliquer sur ce lien pour créer un nouveau mot de passe.<br><br>

<a href=\"{{absolute_url(path('resetting', {'id': user.id, 'token': user.token}))}}\">Changer le mot de passe</a>

Merci.
</html>

", "emails/resetLink.html.twig", "/Users/ribantxa/Sites/go-kids.be/templates/emails/resetLink.html.twig");
    }
}
