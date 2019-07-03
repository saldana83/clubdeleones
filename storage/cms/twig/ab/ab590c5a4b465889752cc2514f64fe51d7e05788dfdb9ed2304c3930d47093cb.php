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

/* C:\xampp\htdocs\clubdeleones/themes/clubdeleonesdavid/partials/footer.htm */
class __TwigTemplate_1b520d330fbcdb4fdff211c63f1a0d4335afaaeecae549b482b2bcf3150f5c43 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"social-btns pull-right\">
        <a href=\"https://facebook.com/clubdeleonesdedavid\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"https://instagram.com/clubdeleonesdedavid\"><div class=\"fui-instagram\"></div><div class=\"fui-instagram\"></div></a>
        <a href=\"https://twitter.com/clubleonesdavid\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
        © 2019 <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"social-btns pull-right\">
        <a href=\"https://facebook.com/clubdeleonesdedavid\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"https://instagram.com/clubdeleonesdedavid\"><div class=\"fui-instagram\"></div><div class=\"fui-instagram\"></div></a>
        <a href=\"https://twitter.com/clubleonesdavid\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
        © 2019 <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/partials/footer.htm", "");
    }
}
