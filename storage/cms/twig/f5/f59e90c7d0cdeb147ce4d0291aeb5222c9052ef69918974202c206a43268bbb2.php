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

/* C:\xampp\htdocs\clubdeleones/themes/responsiv-flat/pages/404.htm */
class __TwigTemplate_74fcee5d9ac9a724c92d70f8374d4623b5d30d651bd7b1e70ae3a37242a767c9 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/compas.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>Pareces estar perdido...</h1>
                <p>Lo sentimos mucho, pero la página que solicitaste <em>no pudo ser encontrado</em> aquí.</p>
                <p>Intenta volver a donde empezaste con esta busqueda.</p>
                <p><small><em>Error 404</em></small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"{{ 'assets/images/icons/svg/compas.svg'|theme }}\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>Pareces estar perdido...</h1>
                <p>Lo sentimos mucho, pero la página que solicitaste <em>no pudo ser encontrado</em> aquí.</p>
                <p>Intenta volver a donde empezaste con esta busqueda.</p>
                <p><small><em>Error 404</em></small>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/404.htm", "");
    }
}
