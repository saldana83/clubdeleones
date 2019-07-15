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

/* C:\xampp\htdocs\Proyecto\clubdeleones/themes/clubdeleonesdavid/pages/supervidor/supervisor.htm */
class __TwigTemplate_ffc2624c46a72fd1a6dcf1f7fda52043d3a6f9ff4329b8e452803b7e164eb3ef extends \Twig\Template
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
        <center><h3>Sistema de Supervisor</h3></center>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"headline\"><span>Administrar Perfiles</span></h4>
                <div class=\"col-sm-3 col-xs-1\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Lista de Leones</a>
                </div>
        </div>
    </div>
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Administrar Pagos</span></h4>
                <div class=\"col-sm-4\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Perfil de León</a>
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Lista de Leones</a>
                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Categoria de Pagos</a>
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Lista de Pagos por leones</a>
                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Pago</a>
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear nueva categoria de pago</a>
                </div>
        </div>
    </div>
                

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/supervidor/supervisor.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <center><h3>Sistema de Supervisor</h3></center>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"headline\"><span>Administrar Perfiles</span></h4>
                <div class=\"col-sm-3 col-xs-1\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Lista de Leones</a>
                </div>
        </div>
    </div>
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Administrar Pagos</span></h4>
                <div class=\"col-sm-4\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Perfil de León</a>
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Lista de Leones</a>
                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Categoria de Pagos</a>
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Lista de Pagos por leones</a>
                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Pago</a>
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear nueva categoria de pago</a>
                </div>
        </div>
    </div>
                

</div>", "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/supervidor/supervisor.htm", "");
    }
}
