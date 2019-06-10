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
      <div class=\"ui stackable inverted divided equal height stackable grid\">
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">About</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Sitemap</a>
            <a href=\"#\" class=\"item\">Contact Us</a>
            <a href=\"#\" class=\"item\">Religious Ceremonies</a>
            <a href=\"#\" class=\"item\">Gazebo Plans</a>
          </div>
        </div>
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Services</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Banana Pre-Order</a>
            <a href=\"#\" class=\"item\">DNA FAQ</a>
            <a href=\"#\" class=\"item\">How To Access</a>
            <a href=\"#\" class=\"item\">Favorite X-Men</a>
          </div>
        </div>
        <div class=\"seven wide column\">
          <h4 class=\"ui inverted header\">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
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
      <div class=\"ui stackable inverted divided equal height stackable grid\">
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">About</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Sitemap</a>
            <a href=\"#\" class=\"item\">Contact Us</a>
            <a href=\"#\" class=\"item\">Religious Ceremonies</a>
            <a href=\"#\" class=\"item\">Gazebo Plans</a>
          </div>
        </div>
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Services</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Banana Pre-Order</a>
            <a href=\"#\" class=\"item\">DNA FAQ</a>
            <a href=\"#\" class=\"item\">How To Access</a>
            <a href=\"#\" class=\"item\">Favorite X-Men</a>
          </div>
        </div>
        <div class=\"seven wide column\">
          <h4 class=\"ui inverted header\">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/footer.htm", "");
    }
}
