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

/* C:\xampp\htdocs\clubdeleones/themes/responsiv-flat/pages/error.htm */
class __TwigTemplate_f0e3e05982655d567750a66fab23d3eb723bdb6f431bac79a1bdd382ddcc0572 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/toilet-paper.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>¡Limpia en el pasillo tres!</h1>
                <p>Lo sentimos mucho, pero algo salió mal y la página no se puede mostrar debido a un <em>error</em>.</p>
                <p>No se preocupe, nuestros trabajadores robóticos especialmente programados se han desplegado para limpiar las cosas.</p>
                <p><small><em>Error 500</em></small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/error.htm";
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
                <img src=\"{{ 'assets/images/icons/svg/toilet-paper.svg'|theme }}\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>¡Limpia en el pasillo tres!</h1>
                <p>Lo sentimos mucho, pero algo salió mal y la página no se puede mostrar debido a un <em>error</em>.</p>
                <p>No se preocupe, nuestros trabajadores robóticos especialmente programados se han desplegado para limpiar las cosas.</p>
                <p><small><em>Error 500</em></small>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/error.htm", "");
    }
}
