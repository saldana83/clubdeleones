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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/home.htm */
class __TwigTemplate_19f26138158425eb5194d336ec4bc745b8350ee63ad316c518da7e8e3c784f91 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "            

<br>

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-6\">
            <div id=\"fb-root\"></div>
                <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=312399993041359&autoLogAppEvents=1\">
                </script>
                <div class=\"fb-page\" 
                    data-href=\"https://www.facebook.com/clubdeleonesdedavid\" 
                    data-tabs=\"timeline,events\" 
                    data-width=\"500\" 
                    data-height=\"\" 
                    data-small-header=\"false\" 
                    data-adapt-container-width=\"true\" 
                    data-hide-cover=\"false\" 
                    data-show-facepile=\"true\">
                    <blockquote cite=\"https://www.facebook.com/clubdeleonesdedavid\" 
                        class=\"fb-xfbml-parse-ignore\">
                        <a href=\"https://www.facebook.com/clubdeleonesdedavid\">Facebook Club de Leones de David</a>
                    </blockquote>
                </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"ui Twitter\">
                <a class=\"twitter-timeline\" data-width=\"500\" data-height=\"500\" data-link-color=\"#E95F28\" href=\"https://twitter.com/clubleonesdavid?ref_src=twsrc%5Etfw\">Twitter Club de Leones de David</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
            </div>
        </div>
    </div>
<br/>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/home.htm";
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
        return new Source("{% component 'slider' %}
            

<br>

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-6\">
            <div id=\"fb-root\"></div>
                <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=312399993041359&autoLogAppEvents=1\">
                </script>
                <div class=\"fb-page\" 
                    data-href=\"https://www.facebook.com/clubdeleonesdedavid\" 
                    data-tabs=\"timeline,events\" 
                    data-width=\"500\" 
                    data-height=\"\" 
                    data-small-header=\"false\" 
                    data-adapt-container-width=\"true\" 
                    data-hide-cover=\"false\" 
                    data-show-facepile=\"true\">
                    <blockquote cite=\"https://www.facebook.com/clubdeleonesdedavid\" 
                        class=\"fb-xfbml-parse-ignore\">
                        <a href=\"https://www.facebook.com/clubdeleonesdedavid\">Facebook Club de Leones de David</a>
                    </blockquote>
                </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"ui Twitter\">
                <a class=\"twitter-timeline\" data-width=\"500\" data-height=\"500\" data-link-color=\"#E95F28\" href=\"https://twitter.com/clubleonesdavid?ref_src=twsrc%5Etfw\">Twitter Club de Leones de David</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
            </div>
        </div>
    </div>
<br/>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/home.htm", "");
    }
}
