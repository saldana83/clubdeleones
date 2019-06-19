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

/* C:\xampp\htdocs\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/header.htm */
class __TwigTemplate_ec0d030ff87f0708d64ce933e723588d9ab8976cde85d759cedd2b099a026e90 extends \Twig\Template
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
        echo "<!-- Static Menu -->
<div class=\"ui inverted vertical center aligned segment\">
    <div class=\"ui container\">
        <div class=\"ui large secondary inverted pointing menu\">
            <a class=\"toc item\">
\t\t\t\t<i class=\"sidebar icon\"></i>
\t\t\t</a>
\t\t\t<body background=\"tu_imagen.png\">
            <div class=\"left item\">
                <img width=\"100\" height=\"50\" src= \"storage/app/media/logo.png\" alt=\"Club de Leones - David\">
            </div>
            <h3>
                <a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"center item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == "home")) {
            echo "active";
        }
        echo "\">Home</a>
            </h3>
            <h3>
                <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("conocenos");
        echo "\" class=\"center item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "conocenos")) {
            echo "active";
        }
        echo "\">Conócenos</a>
            </h3>
            <h3>
                <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacto");
        echo "\" class=\"center item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19) == "contacto")) {
            echo "active";
        }
        echo "\">Contacto</a>
            </h3>
 \t\t\t<div class=\"right item\">
                <a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\" class=\"item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) == "login")) {
            echo "active";
        }
        echo "\" >Iniciar Sesión</a>
            </div>
        </div>
    </div>
</div>

<!-- Following Menu
<div class=\"ui inverted vertical masthead right aligned segment\">
    <div class=\"ui container\">
        <div class=\"left item\">
            <img width=\"100\" height=\"50\" src= \"storage/app/media/logo.png\" alt=\"Club de Leones - David\">
        </div>
        <a class=\"active item\">Home</a>
        <a class=\"item\">Conócenos</a>
        <a class=\"item\">Contacto</a>
        <div class=\"right menu\">
            <div class=\"item\">
                <a class=\"ui button\">Log in</a>
            </div>
            <div class=\"item\">
                <a class=\"ui primary button\">Sign Up</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu
<div class=\"ui vertical inverted sidebar menu\">
    <a class=\"active item\">Home</a>
    <a class=\"item\">Conócenos</a>
    <a class=\"item\">Contactenos</a>
    <a class=\"item\">Login</a>
    <a class=\"item\">Signup</a>
</div> -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  69 => 19,  59 => 16,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Static Menu -->
<div class=\"ui inverted vertical center aligned segment\">
    <div class=\"ui container\">
        <div class=\"ui large secondary inverted pointing menu\">
            <a class=\"toc item\">
\t\t\t\t<i class=\"sidebar icon\"></i>
\t\t\t</a>
\t\t\t<body background=\"tu_imagen.png\">
            <div class=\"left item\">
                <img width=\"100\" height=\"50\" src= \"storage/app/media/logo.png\" alt=\"Club de Leones - David\">
            </div>
            <h3>
                <a href=\"{{ 'home'|page }}\" class=\"center item {% if this.page.id == 'home' %}active{% endif %}\">Home</a>
            </h3>
            <h3>
                <a href=\"{{ 'conocenos'|page }}\" class=\"center item {% if this.page.id == 'conocenos' %}active{% endif %}\">Conócenos</a>
            </h3>
            <h3>
                <a href=\"{{ 'contacto'|page }}\" class=\"center item {% if this.page.id == 'contacto' %}active{% endif %}\">Contacto</a>
            </h3>
 \t\t\t<div class=\"right item\">
                <a href=\"{{ 'login'|page }}\" class=\"item {% if this.page.id == 'login' %}active{% endif %}\" >Iniciar Sesión</a>
            </div>
        </div>
    </div>
</div>

<!-- Following Menu
<div class=\"ui inverted vertical masthead right aligned segment\">
    <div class=\"ui container\">
        <div class=\"left item\">
            <img width=\"100\" height=\"50\" src= \"storage/app/media/logo.png\" alt=\"Club de Leones - David\">
        </div>
        <a class=\"active item\">Home</a>
        <a class=\"item\">Conócenos</a>
        <a class=\"item\">Contacto</a>
        <div class=\"right menu\">
            <div class=\"item\">
                <a class=\"ui button\">Log in</a>
            </div>
            <div class=\"item\">
                <a class=\"ui primary button\">Sign Up</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu
<div class=\"ui vertical inverted sidebar menu\">
    <a class=\"active item\">Home</a>
    <a class=\"item\">Conócenos</a>
    <a class=\"item\">Contactenos</a>
    <a class=\"item\">Login</a>
    <a class=\"item\">Signup</a>
</div> -->", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/header.htm", "");
    }
}
