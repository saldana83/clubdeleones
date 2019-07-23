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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/login-como-supervisor.htm */
class __TwigTemplate_97cb52eb10a91af66a0c0a2c7f39e54a8e9dfb089bab7afb3039683c2b46ecfd extends \Twig\Template
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
        <center><h3>\"No tiene permisos de Supervisor\" haga login con cuenta de Supervisor</h3></center>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/login-como-supervisor.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <center><h3>\"No tiene permisos de Supervisor\" haga login con cuenta de Supervisor</h3></center>
    </div>
</section>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/login-como-supervisor.htm", "");
    }
}
