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

/* C:\xampp\htdocs\clubdeleones/themes/clubdeleonesdavid/pages/conocenos/himno.htm */
class __TwigTemplate_5cb5eb18fb90f4ecf504e1ba60a565a3cc3d939f0582c23dd2555b8537291796 extends \Twig\Template
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
        <h3>Himno de Istmania</h3>
    </div>
</section>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-sm-7\">
            <h4 class=\"headline\"><span>Letra</span></h4>
                <center>
                    <p>Se oye en la jungla de Istmanía </p>
                    <p>rugidos de Leones, que son,</p>
                    <p>mano extendida  a otra mano,</p>
                    <p>llevando esperanza y valor.</p>
                    <p></p><br>
                    <p></p>
                    <p>Temple la fragua encendida</p>
                    <p>nuestra alma de fuerza y fervor,</p>
                    <p>Leones, por toda la vida,</p>
                    <p>donde triunfa nobleza y amor (bis) </p>
                </center>
        </div>
        <div class=\"col-sm-5\">
            <h4 class=\"headline\"><span>Video</span></h4>
            <div class=\"video-container\">
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XY2uzklbvOI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/pages/conocenos/himno.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Himno de Istmania</h3>
    </div>
</section>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-sm-7\">
            <h4 class=\"headline\"><span>Letra</span></h4>
                <center>
                    <p>Se oye en la jungla de Istmanía </p>
                    <p>rugidos de Leones, que son,</p>
                    <p>mano extendida  a otra mano,</p>
                    <p>llevando esperanza y valor.</p>
                    <p></p><br>
                    <p></p>
                    <p>Temple la fragua encendida</p>
                    <p>nuestra alma de fuerza y fervor,</p>
                    <p>Leones, por toda la vida,</p>
                    <p>donde triunfa nobleza y amor (bis) </p>
                </center>
        </div>
        <div class=\"col-sm-5\">
            <h4 class=\"headline\"><span>Video</span></h4>
            <div class=\"video-container\">
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XY2uzklbvOI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/pages/conocenos/himno.htm", "");
    }
}
