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

/* C:\xampp\htdocs\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/home.htm */
class __TwigTemplate_59f48bb3356d53c7b4fda81b2122ca9a1ec9dba30e9757f9c3beb37fff367cff extends \Twig\Template
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
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "<div class=\"ui vertical stripe segment\">
    <div class=\"ui middle aligned stackable grid container\">
        <div class=\"row\">
            <div class=\"eight wide column\">
                <h3 class=\"ui header\">Titulo</h3>
                <p>text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text </p>
            </div>
        </div>
<div class=\" lesft align\">
    <div id=\"fb-root\">
    </div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=312399993041359&autoLogAppEvents=1\">
        </script>
            <div class=\"fb-page\" 
                data-href=\"https://www.facebook.com/clubdeleonesdedavid\" 
                data-tabs=\"timeline,events,messages\" 
                data-width=\"700\" 
                data-height=\"700\" 
                data-small-header=\"false\" 
                data-adapt-container-width=\"true\" 
                data-hide-cover=\"false\" 
                data-show-facepile=\"false\">
                <blockquote cite=\"https://www.facebook.com/clubdeleonesdedavid\" 
                    class=\"fb-xfbml-parse-ignore\">
                    <a href=\"https://www.facebook.com/clubdeleonesdedavid\">Benemérito Club de Leones de David</a>
                </blockquote>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Content -->
{% component 'slider' %}
<div class=\"ui vertical stripe segment\">
    <div class=\"ui middle aligned stackable grid container\">
        <div class=\"row\">
            <div class=\"eight wide column\">
                <h3 class=\"ui header\">Titulo</h3>
                <p>text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text text test text </p>
            </div>
        </div>
<div class=\" lesft align\">
    <div id=\"fb-root\">
    </div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=312399993041359&autoLogAppEvents=1\">
        </script>
            <div class=\"fb-page\" 
                data-href=\"https://www.facebook.com/clubdeleonesdedavid\" 
                data-tabs=\"timeline,events,messages\" 
                data-width=\"700\" 
                data-height=\"700\" 
                data-small-header=\"false\" 
                data-adapt-container-width=\"true\" 
                data-hide-cover=\"false\" 
                data-show-facepile=\"false\">
                <blockquote cite=\"https://www.facebook.com/clubdeleonesdedavid\" 
                    class=\"fb-xfbml-parse-ignore\">
                    <a href=\"https://www.facebook.com/clubdeleonesdedavid\">Benemérito Club de Leones de David</a>
                </blockquote>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/home.htm", "");
    }
}
