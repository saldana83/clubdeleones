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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/supervisor.htm */
class __TwigTemplate_d78793d488f6f9c9bf1a823c8b48e8113df000cd67f689b6eaedc1cdb7b43554 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <center><h3>Sistema de Supervisor</h3></center>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"headline\"><span>Administrar Perfiles</span></h4>
                <div class=\"col-sm-4\">
                    <a href=\"listado-de-leon\" class=\"btn btn-block btn-lg btn-primary\">Lista de Leones</a>
                </div>
        </div>
    </div>
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Administrar Pagos</span></h4>
                
                <div class=\"col-sm-4\">
                    <a href=\"categoria-pagos\" class=\"btn btn-block btn-lg btn-primary\">Categoria de Pagos</a>
                    <a href=\"\" class=\"btn btn-block btn-lg btn-primary\">Crear nueva categoria de pago</a>
                    <a href=\"crear-nuevo-pago\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Pago</a>
                </div>
        </div>
    </div>
    <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"headline\"><span>Regristro de Pagos</span></h4>
                    <div class=\"col-sm-4\">
                        <a href=\"registro_de_pago\" class=\"btn btn-block btn-lg btn-primary\">Registrar pago de leon</a>
                        <a href=\"listado-de-pagos-por-leon\" class=\"btn btn-block btn-lg btn-primary\">Lista de pagos por leones</a>
                    </div>
            </div>
    </div>
</div>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/supervisor.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}
<section id=\"layout-title\">
    <div class=\"container\">
        <center><h3>Sistema de Supervisor</h3></center>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"headline\"><span>Administrar Perfiles</span></h4>
                <div class=\"col-sm-4\">
                    <a href=\"listado-de-leon\" class=\"btn btn-block btn-lg btn-primary\">Lista de Leones</a>
                </div>
        </div>
    </div>
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Administrar Pagos</span></h4>
                
                <div class=\"col-sm-4\">
                    <a href=\"categoria-pagos\" class=\"btn btn-block btn-lg btn-primary\">Categoria de Pagos</a>
                    <a href=\"\" class=\"btn btn-block btn-lg btn-primary\">Crear nueva categoria de pago</a>
                    <a href=\"crear-nuevo-pago\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Pago</a>
                </div>
        </div>
    </div>
    <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"headline\"><span>Regristro de Pagos</span></h4>
                    <div class=\"col-sm-4\">
                        <a href=\"registro_de_pago\" class=\"btn btn-block btn-lg btn-primary\">Registrar pago de leon</a>
                        <a href=\"listado-de-pagos-por-leon\" class=\"btn btn-block btn-lg btn-primary\">Lista de pagos por leones</a>
                    </div>
            </div>
    </div>
</div>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/supervisor.htm", "");
    }
}
