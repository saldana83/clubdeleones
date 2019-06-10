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

/* C:\xampp\htdocs\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/company.htm */
class __TwigTemplate_55f5fa6b4cfe7b5d3dc5d9d857a8cc6bf61a9bf073a0020b7871babbe94d3781 extends \Twig\Template
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
        echo "<!-- Content -->
<div class=\"ui vertical stripe quote segment\">
    <div class=\"ui equal width stackable internally celled grid\">
        <div class=\"center aligned row\">
            <div class=\"column\">
                <h3>\"What a Company\"</h3>
                <p>We say that about us, but you might think were even better than you!</p>
            </div>
            <div class=\"column\">
                <h3>\"I shouldn't have gone with their competitor.\"</h3>
                <p>
                    <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar/nan.jpg");
        echo "\" class=\"ui avatar image\"> <b>Nan</b> Chief Fun Officer Acme Toys
                </p>
            </div>
        </div>
    </div>
</div>
<div class=\"ui vertical stripe segment\">
    <div class=\"ui text container\">
        <h3 class=\"ui header\">Breaking The Grid, Grabs Your Attention</h3>
        <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
        <a class=\"ui large button\">Read More</a>
        <h4 class=\"ui horizontal header divider\">
            <a href=\"#\">Case Studies</a>
        </h4>
        <h3 class=\"ui header\">Did We Tell You About Our Bananas?</h3>
        <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
        <a class=\"ui large button\">I'm Still Quite Interested</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/company.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Content -->
<div class=\"ui vertical stripe quote segment\">
    <div class=\"ui equal width stackable internally celled grid\">
        <div class=\"center aligned row\">
            <div class=\"column\">
                <h3>\"What a Company\"</h3>
                <p>We say that about us, but you might think were even better than you!</p>
            </div>
            <div class=\"column\">
                <h3>\"I shouldn't have gone with their competitor.\"</h3>
                <p>
                    <img src=\"{{ 'assets/images/avatar/nan.jpg'|theme }}\" class=\"ui avatar image\"> <b>Nan</b> Chief Fun Officer Acme Toys
                </p>
            </div>
        </div>
    </div>
</div>
<div class=\"ui vertical stripe segment\">
    <div class=\"ui text container\">
        <h3 class=\"ui header\">Breaking The Grid, Grabs Your Attention</h3>
        <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
        <a class=\"ui large button\">Read More</a>
        <h4 class=\"ui horizontal header divider\">
            <a href=\"#\">Case Studies</a>
        </h4>
        <h3 class=\"ui header\">Did We Tell You About Our Bananas?</h3>
        <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
        <a class=\"ui large button\">I'm Still Quite Interested</a>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/company.htm", "");
    }
}
