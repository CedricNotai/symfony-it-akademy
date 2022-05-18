<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* bootstrap/bootstrap_base.html.twig */
class __TwigTemplate_ea492c4827cf01c74ae1100ae64c05fd1c9dcd8f155d9b47d3b2a8eb21ced54d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'bootstrap_title' => [$this, 'block_bootstrap_title'],
            'bootstrap_style' => [$this, 'block_bootstrap_style'],
            'bootstrap_body' => [$this, 'block_bootstrap_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap/bootstrap_base.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
            rel=\"stylesheet\"
            integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
            crossorigin=\"anonymous\"
        >
        <link 
            rel=\"stylesheet\" 
            href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/cerulean/bootstrap.min.css\" 
            integrity=\"sha256-5FeWJNHtC2PdIw9W39dEuOyQN1BoL7BuHR3JdbpIzbw=\" 
            crossorigin=\"anonymous\"
        >
        <title>";
        // line 18
        $this->displayBlock('bootstrap_title', $context, $blocks);
        echo "</title>
        <style>";
        // line 19
        $this->displayBlock('bootstrap_style', $context, $blocks);
        echo "</style>
    </head>

    <body>
        ";
        // line 23
        $this->displayBlock('bootstrap_body', $context, $blocks);
        // line 25
        echo "
        <script
            src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\"
            crossorigin=\"anonymous\">
        </script>
    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_bootstrap_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_bootstrap_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_style"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_bootstrap_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_body"));

        // line 24
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap/bootstrap_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  113 => 23,  101 => 19,  89 => 18,  75 => 25,  73 => 23,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
            rel=\"stylesheet\"
            integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
            crossorigin=\"anonymous\"
        >
        <link 
            rel=\"stylesheet\" 
            href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/cerulean/bootstrap.min.css\" 
            integrity=\"sha256-5FeWJNHtC2PdIw9W39dEuOyQN1BoL7BuHR3JdbpIzbw=\" 
            crossorigin=\"anonymous\"
        >
        <title>{% block bootstrap_title %}{% endblock %}</title>
        <style>{% block bootstrap_style %}{% endblock %}</style>
    </head>

    <body>
        {% block bootstrap_body %}
        {% endblock %}

        <script
            src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\"
            crossorigin=\"anonymous\">
        </script>
    </body>
</html>", "bootstrap/bootstrap_base.html.twig", "/var/www/symfony_docker/templates/bootstrap/bootstrap_base.html.twig");
    }
}
