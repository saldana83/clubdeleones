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

/* C:\xampp\htdocs\clubdeleones/themes/responsiv-flat/pages/samples/pricing-table.htm */
class __TwigTemplate_c8c00d906736a96ebd89349cd8406573ca25c91dfeb07dc2e5ed9f5c582188ce extends \Twig\Template
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
        <h3>Subscriptions</h3>
    </div>
</section>

<div class=\"container\">

    <h3 class=\"headline\"><span>Choose a subscription</span></h3>
    <p>Just the good ol' boys, never meanin' no harm. Beats all you've ever saw, been in trouble with the law since the day they was born. Straight'nin' the curve, flat'nin' the hills. Someday the mountain might get 'em, but the law never will. Makin' their way, the only way they know how, that's just a little bit more than the law will allow. Just good ol' boys, wouldn't change if they could, fightin' the system like a true modern day Robin Hood.</p>
    <div class=\"row pricing-tiles\">
        <div class=\"col-xs-3\">
            <div class=\"tile\">
                <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/compas.svg");
        echo "\" alt=\"Compas\" class=\"tile-image big-illustration\">
                <h3 class=\"tile-title\">Web Oriented</h3>
                <p>100% convertable to HTML/CSS layout.</p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>
        </div>

        <div class=\"col-xs-3\">
            <div class=\"tile\">
                <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/loop.svg");
        echo "\" alt=\"Infinity-Loop\" class=\"tile-image\">
                <h3 class=\"tile-title\">Easy to Customize</h3>
                <p>Vector-based shapes and minimum of layer styles.</p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>
        </div>

        <div class=\"col-xs-3\">
            <div class=\"tile\">
                <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/pencils.svg");
        echo "\" alt=\"Pensils\" class=\"tile-image\">
                <h3 class=\"tile-title\">Color Swatches</h3>
                <p>Easy to add or change elements. </p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>
        </div>

        <div class=\"col-xs-3\">
            <div class=\"tile tile-hot\">
                <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/chat.svg");
        echo "\" alt=\"Chat\" class=\"tile-image\">
                <h3 class=\"tile-title\">Free for Share</h3>
                <p>Your likes, shares and comments helps us.</p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>

        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/samples/pricing-table.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 41,  74 => 32,  62 => 23,  50 => 14,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Subscriptions</h3>
    </div>
</section>

<div class=\"container\">

    <h3 class=\"headline\"><span>Choose a subscription</span></h3>
    <p>Just the good ol' boys, never meanin' no harm. Beats all you've ever saw, been in trouble with the law since the day they was born. Straight'nin' the curve, flat'nin' the hills. Someday the mountain might get 'em, but the law never will. Makin' their way, the only way they know how, that's just a little bit more than the law will allow. Just good ol' boys, wouldn't change if they could, fightin' the system like a true modern day Robin Hood.</p>
    <div class=\"row pricing-tiles\">
        <div class=\"col-xs-3\">
            <div class=\"tile\">
                <img src=\"{{ 'assets/images/icons/svg/compas.svg'|theme }}\" alt=\"Compas\" class=\"tile-image big-illustration\">
                <h3 class=\"tile-title\">Web Oriented</h3>
                <p>100% convertable to HTML/CSS layout.</p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>
        </div>

        <div class=\"col-xs-3\">
            <div class=\"tile\">
                <img src=\"{{ 'assets/images/icons/svg/loop.svg'|theme }}\" alt=\"Infinity-Loop\" class=\"tile-image\">
                <h3 class=\"tile-title\">Easy to Customize</h3>
                <p>Vector-based shapes and minimum of layer styles.</p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>
        </div>

        <div class=\"col-xs-3\">
            <div class=\"tile\">
                <img src=\"{{ 'assets/images/icons/svg/pencils.svg'|theme }}\" alt=\"Pensils\" class=\"tile-image\">
                <h3 class=\"tile-title\">Color Swatches</h3>
                <p>Easy to add or change elements. </p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>
        </div>

        <div class=\"col-xs-3\">
            <div class=\"tile tile-hot\">
                <img src=\"{{ 'assets/images/icons/svg/chat.svg'|theme }}\" alt=\"Chat\" class=\"tile-image\">
                <h3 class=\"tile-title\">Free for Share</h3>
                <p>Your likes, shares and comments helps us.</p>
                <a class=\"btn btn-primary btn-large btn-block\" href=\"#fakelink\">Get Pro</a>
            </div>

        </div>
    </div>

</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/samples/pricing-table.htm", "");
    }
}
