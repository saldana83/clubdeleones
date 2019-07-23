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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/administrador/login-como-administrador.htm */
class __TwigTemplate_bcafc801f55a55687718f595dff1350675b1db4ee1a9b7a5f4190356e05cf9c3 extends \Twig\Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <center><h3>\"No tiene permisos de Administrador\" haga login con cuenta de Administrador</h3></center>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/administrador/login-como-administrador.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <center><h3>\"No tiene permisos de Administrador\" haga login con cuenta de Administrador</h3></center>
    </div>
</section>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/administrador/login-como-administrador.htm", "");
    }
}
