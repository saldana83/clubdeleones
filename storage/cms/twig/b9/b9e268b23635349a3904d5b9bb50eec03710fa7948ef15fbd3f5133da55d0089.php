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

/* C:\xampp\htdocs\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/himno.htm */
class __TwigTemplate_8781c0482e7cdd7d06361676d461faba69ed3e872ab29369c7c3baf0fbee35d7 extends \Twig\Template
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
<div class=\"ui vertical stripe segment\">
    <div class=\"ui text container\">
        <h3 class=\"ui horizontal header divider\">Himno de Ismania</h3>
            <p>Se oye en la jungla de Istmanía</P>
            <p>rugidos de Leones, que son,</p>
            <p>mano extendida  a otra mano,</p>
            <p>llevando esperanza y valor.</p>
            <p></p>
            <p></p>
            <p>Temple la fragua encendida</p>
            <p>nuestra alma de fuerza y fervor,</p>
            <p>Leones, por toda la vida,</p>
            <p>donde triunfa nobleza y amor (bis)</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/himno.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Content -->
<div class=\"ui vertical stripe segment\">
    <div class=\"ui text container\">
        <h3 class=\"ui horizontal header divider\">Himno de Ismania</h3>
            <p>Se oye en la jungla de Istmanía</P>
            <p>rugidos de Leones, que son,</p>
            <p>mano extendida  a otra mano,</p>
            <p>llevando esperanza y valor.</p>
            <p></p>
            <p></p>
            <p>Temple la fragua encendida</p>
            <p>nuestra alma de fuerza y fervor,</p>
            <p>Leones, por toda la vida,</p>
            <p>donde triunfa nobleza y amor (bis)</p>
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/himno.htm", "");
    }
}
