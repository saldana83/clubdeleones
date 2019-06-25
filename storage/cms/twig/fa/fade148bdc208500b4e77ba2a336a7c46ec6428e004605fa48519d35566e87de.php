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

/* C:\xampp\htdocs\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/contacto.htm */
class __TwigTemplate_5dc9021dc0c64a52edb43f196436ccfae8f9f77cf1189387fedd7f2caef2bf66 extends \Twig\Template
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
        <h3 class=\"ui header\">Formulario de contacto</h3>
            <p>
                <div class=\"ui segment\">
                    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "                </div>
            </p>
        <h4 class=\"ui horizontal header divider\">
            <a href=\"#\">Ubicación</a>
        </h4>
        ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/contacto.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 13,  47 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Content -->
<div class=\"ui vertical stripe segment\">
    <div class=\"ui text container\">
        <h3 class=\"ui header\">Formulario de contacto</h3>
            <p>
                <div class=\"ui segment\">
                    {% component 'contactForm' %}
                </div>
            </p>
        <h4 class=\"ui horizontal header divider\">
            <a href=\"#\">Ubicación</a>
        </h4>
        {% component 'googleMap' %}
    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/pages/contacto.htm", "");
    }
}
