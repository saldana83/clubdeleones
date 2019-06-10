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
<div class=\"ui inverted vertical masthead center aligned segment\">
    <div class=\"ui container\">
        <div class=\"ui large secondary inverted pointing menu\">
            <a class=\"toc item\">
\t\t\t\t<i class=\"sidebar icon\"></i>
\t\t\t</a>
            <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == "home")) {
            echo "active";
        }
        echo "\">Home</a>
            <a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("conocenos");
        echo "\" class=\"item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "company")) {
            echo "active";
        }
        echo "\">Conócenos</a>   
            <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacto");
        echo "\" class=\"item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == "work")) {
            echo "active";
        }
        echo "\">Contacto</a>
            <div class=\"right item\">
                <a class=\"ui inverted button\">Log in</a>
                <a class=\"ui inverted button\">Sign Up</a>
            </div>
        </div>
    </div>
    <div class=\"ui text container\">
        <h1 class=\"ui inverted header\">
            Imagine-a-Company
        </h1>
        <h2>Do whatever you want when you want to.</h2>
        <div class=\"ui huge primary button\">
\t\t\tGet Started 
\t\t\t<i class=\"right arrow icon\"></i>
        </div>
    </div>
</div>

<!-- Following Menu -->
<div class=\"ui large top fixed hidden menu\">
    <div class=\"ui container\">
        <a class=\"active item\">Home</a>
        <a class=\"item\">Work</a>
        <a class=\"item\">Company</a>
        <a class=\"item\">Careers</a>
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

<!-- Sidebar Menu -->
<div class=\"ui vertical inverted sidebar menu\">
    <a class=\"active item\">Home</a>
    <a class=\"item\">Work</a>
    <a class=\"item\">Company</a>
    <a class=\"item\">Careers</a>
    <a class=\"item\">Login</a>
    <a class=\"item\">Signup</a>
</div>";
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
        return array (  60 => 10,  52 => 9,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Static Menu -->
<div class=\"ui inverted vertical masthead center aligned segment\">
    <div class=\"ui container\">
        <div class=\"ui large secondary inverted pointing menu\">
            <a class=\"toc item\">
\t\t\t\t<i class=\"sidebar icon\"></i>
\t\t\t</a>
            <a href=\"{{ 'home'|page }}\" class=\"item {% if this.page.id == 'home' %}active{% endif %}\">Home</a>
            <a href=\"{{ 'conocenos'|page }}\" class=\"item {% if this.page.id == 'company' %}active{% endif %}\">Conócenos</a>   
            <a href=\"{{ 'contacto'|page }}\" class=\"item {% if this.page.id == 'work' %}active{% endif %}\">Contacto</a>
            <div class=\"right item\">
                <a class=\"ui inverted button\">Log in</a>
                <a class=\"ui inverted button\">Sign Up</a>
            </div>
        </div>
    </div>
    <div class=\"ui text container\">
        <h1 class=\"ui inverted header\">
            Imagine-a-Company
        </h1>
        <h2>Do whatever you want when you want to.</h2>
        <div class=\"ui huge primary button\">
\t\t\tGet Started 
\t\t\t<i class=\"right arrow icon\"></i>
        </div>
    </div>
</div>

<!-- Following Menu -->
<div class=\"ui large top fixed hidden menu\">
    <div class=\"ui container\">
        <a class=\"active item\">Home</a>
        <a class=\"item\">Work</a>
        <a class=\"item\">Company</a>
        <a class=\"item\">Careers</a>
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

<!-- Sidebar Menu -->
<div class=\"ui vertical inverted sidebar menu\">
    <a class=\"active item\">Home</a>
    <a class=\"item\">Work</a>
    <a class=\"item\">Company</a>
    <a class=\"item\">Careers</a>
    <a class=\"item\">Login</a>
    <a class=\"item\">Signup</a>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/partials/site/header.htm", "");
    }
}
