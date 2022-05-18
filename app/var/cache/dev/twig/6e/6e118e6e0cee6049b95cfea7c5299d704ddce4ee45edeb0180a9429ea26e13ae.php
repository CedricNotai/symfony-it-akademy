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

/* nav.html.twig */
class __TwigTemplate_f07493ecec626d3aaa12e9c73219797cefa9ae41b9d0a5f931dfc9322ceacd31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "
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

        </ul>
        <form class=\"d-flex\">
            <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
        </div>
    </div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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

        </ul>
        <form class=\"d-flex\">
            <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
        </div>
    </div>
</nav>", "nav.html.twig", "/var/www/symfony_docker/templates/nav.html.twig");
    }
}
