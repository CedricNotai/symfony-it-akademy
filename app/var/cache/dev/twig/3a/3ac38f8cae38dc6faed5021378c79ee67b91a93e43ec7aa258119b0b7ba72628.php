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

/* bootstrap/index.html.twig */
class __TwigTemplate_4b20a598ba4de0cc16ac651796c067f808a167cc2480aa22d5bfbf1111295618 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'exo_title' => [$this, 'block_exo_title'],
            'exo_style' => [$this, 'block_exo_style'],
            'exo_body' => [$this, 'block_exo_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "bootstrap/bootstrap_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap/index.html.twig"));

        $this->parent = $this->loadTemplate("bootstrap/bootstrap_base.html.twig", "bootstrap/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_exo_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "exo_title"));

        echo "Hello BootstrapController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_exo_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "exo_style"));

        // line 5
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_exo_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "exo_body"));

        // line 13
        echo "<div class=\"example-wrapper\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home
                <span class=\"visually-hidden\">(current)</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Features</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
            <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
            </div>
            </li>
        </ul>
        <form class=\"d-flex\">
            <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
        </div>
    </div>
    </nav>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  85 => 12,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'bootstrap/bootstrap_base.html.twig' %}

{% block exo_title %}Hello BootstrapController!{% endblock %}
{% block exo_style %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
{% endblock %}


{% block exo_body %}
<div class=\"example-wrapper\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home
                <span class=\"visually-hidden\">(current)</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Features</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
            <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
            </div>
            </li>
        </ul>
        <form class=\"d-flex\">
            <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
        </div>
    </div>
    </nav>

</div>
{% endblock %}
", "bootstrap/index.html.twig", "/var/www/symfony_docker/templates/bootstrap/index.html.twig");
    }
}
