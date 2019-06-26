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

/* C:\xampp\htdocs\clubdeleones/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_05d34a7d23262d33dd7cf2ceebef7f8038e490b4f5bd89bb5cef521050cb8642 extends \Twig\Template
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
        echo "<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"ui\">
             ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "            </div>
        </div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        </div>
    </div>
    <div class=\"ui Facebook\">
        <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=312399993041359&autoLogAppEvents=1\">
            </script>
            <div class=\"fb-page\" 
                data-href=\"https://www.facebook.com/clubdeleonesdedavid\" 
                data-tabs=\"timeline,events,messages\" 
                data-width=\"500\" 
                data-height=\"\" 
                data-small-header=\"false\" 
                data-adapt-container-width=\"true\" 
                data-hide-cover=\"false\" 
                data-show-facepile=\"true\">
                <blockquote cite=\"https://www.facebook.com/clubdeleonesdedavid\" 
                    class=\"fb-xfbml-parse-ignore\">
                    <a href=\"https://www.facebook.com/clubdeleonesdedavid\">Benemérito Club de Leones de David</a>
                </blockquote>
            </div>
        </div>
        <div class=\"ui Twitter\">
            <a class=\"twitter-timeline\" data-width=\"500\" data-height=\"500\" data-link-color=\"#E95F28\" href=\"https://twitter.com/clubleonesdavid?ref_src=twsrc%5Etfw\">Tweets by clubleonesdavid</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        </div>
<br />";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  62 => 21,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"ui\">
             {% component 'slider' %}
            </div>
        </div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            {% partial 'services' %}
        </div>
    </div>
    <div class=\"ui Facebook\">
        <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=312399993041359&autoLogAppEvents=1\">
            </script>
            <div class=\"fb-page\" 
                data-href=\"https://www.facebook.com/clubdeleonesdedavid\" 
                data-tabs=\"timeline,events,messages\" 
                data-width=\"500\" 
                data-height=\"\" 
                data-small-header=\"false\" 
                data-adapt-container-width=\"true\" 
                data-hide-cover=\"false\" 
                data-show-facepile=\"true\">
                <blockquote cite=\"https://www.facebook.com/clubdeleonesdedavid\" 
                    class=\"fb-xfbml-parse-ignore\">
                    <a href=\"https://www.facebook.com/clubdeleonesdedavid\">Benemérito Club de Leones de David</a>
                </blockquote>
            </div>
        </div>
        <div class=\"ui Twitter\">
            <a class=\"twitter-timeline\" data-width=\"500\" data-height=\"500\" data-link-color=\"#E95F28\" href=\"https://twitter.com/clubleonesdavid?ref_src=twsrc%5Etfw\">Tweets by clubleonesdavid</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        </div>
<br />", "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/home.htm", "");
    }
}
