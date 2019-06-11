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

/* C:\xampp\htdocs\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/footer.htm */
class __TwigTemplate_70f413fd50cd8f243e342904cd72e7fa19d19e1ea7d14e273aef0a16de1f5c99 extends \Twig\Template
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
        echo "<!-- Footer -->
<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"three wide column\">
        
        <div = \"righ align\">
            <div class=\"seven wide column\">
            <h4 class=\"ui inverted header\">Redes Sociales</h4>

            </div>
        </div>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"three wide column\">
        
        <div = \"righ align\">
            <div class=\"seven wide column\">
            <h4 class=\"ui inverted header\">Redes Sociales</h4>

            </div>
        </div>
      </div>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/footer.htm", "");
    }
}
