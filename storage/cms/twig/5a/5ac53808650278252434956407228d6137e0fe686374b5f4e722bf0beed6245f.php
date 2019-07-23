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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/administrador/administrador.htm */
class __TwigTemplate_bc2e7c1a6685ce67cd9d8e08685fb449daf30ce4af2ed5c19290c5ce9c7db574 extends \Twig\Template
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
        <center><h3>Sistema de Administrador</h3></center>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"headline\"><span>Administrar Perfiles</span></h4>
                <div class=\"col-sm-3 col-xs-1\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Perfil de León</a>
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
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/administrador/administrador.htm";
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
        <center><h3>Sistema de Administrador</h3></center>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"headline\"><span>Administrar Perfiles</span></h4>
                <div class=\"col-sm-3 col-xs-1\">
                    <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Crear Nuevo Perfil de León</a>
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
                

</div>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/administrador/administrador.htm", "");
    }
}
