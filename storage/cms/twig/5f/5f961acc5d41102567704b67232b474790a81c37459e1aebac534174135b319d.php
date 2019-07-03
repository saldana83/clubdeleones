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

/* C:\xampp\htdocs\Proyecto\clubdeleones/themes/clubdeleonesdavid/pages/user/user.htm */
class __TwigTemplate_61e4bf0d8c3caf2676877bb0246e6575d6e61167585812211e36e9a1f0116bea extends \Twig\Template
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
        <center><h3>Sistema Leones</h3></center>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/user/user.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <center><h3>Sistema Leones</h3></center>
    </div>
</section>", "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/user/user.htm", "");
    }
}
