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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/iniciar-sesion.htm */
class __TwigTemplate_63fdaf588da5bc90e1660aa7189ded21f46f9f37a7188a28d92c05c805d01afd extends \Twig\Template
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
        echo "<p>&nbsp;</p>
<center>
";
        // line 3
        if ( !($context["user"] ?? null)) {
            // line 4
            echo "
    <div class=\"row\">
        <center  style=\"display: block; 
        margin: 0 auto;
        max-width: 100%;
        width: 40%;\">
            <h3>Inicio de Sesión</h3>
            ";
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "        </center>
    </div>

";
        } else {
            // line 16
            echo "
    ";
            // line 17
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "
    ";
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "
    ";
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "
";
        }
        // line 24
        echo "</center>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/iniciar-sesion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  81 => 22,  77 => 21,  74 => 20,  70 => 19,  67 => 18,  63 => 17,  60 => 16,  54 => 12,  50 => 11,  41 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>&nbsp;</p>
<center>
{% if not user %}

    <div class=\"row\">
        <center  style=\"display: block; 
        margin: 0 auto;
        max-width: 100%;
        width: 40%;\">
            <h3>Inicio de Sesión</h3>
            {% partial account ~ '::signin' %}
        </center>
    </div>

{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}
</center>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/iniciar-sesion.htm", "");
    }
}
