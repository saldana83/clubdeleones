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

/* C:\xampppp\htdocs\clubdeleones/themes/clubdeleonesdavid/partials/nav.htm */
class __TwigTemplate_4087112d860ec82d38da908767b89a2919d6486b207aeb4a371349546d62e98e extends \Twig\Template
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
        // line 2
        $context["links"] = ["home" => [0 => "home", 1 => "Home"], "conocenos" => ["name" => "Conócenos", "sublinks" => ["quienes somos" => [0 => "conocenos/quienes-somos", 1 => "¿Quiénes Somos?"], "junta directiva" => [0 => "conocenos/junta-directiva", 1 => "Junta Directiva"], "himno" => [0 => "conocenos/himno", 1 => "Himno"]]], "contactenos" => [0 => "contactenos", 1 => "Contáctenos"], "ejemplos" => [0 => "ejemplos", 1 => "Ejemplos"]];
        // line 21
        echo "
";
        // line 44
        echo "
";
        // line 45
        $context["nav"] = $this;
        // line 46
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\" >
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\" ";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 58
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
                <li>
                    <button
                        onclick=\"window.location='";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("iniciar-sesion");
        echo "'\"
                        class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                        Iniciar sesión
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    // line 22
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 23
            echo "    ";
            $context["subnav"] = $this;
            // line 24
            echo "
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 26
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 26)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 28
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 28)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 28)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 28)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 29)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 30
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 30)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 32
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 32)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 32)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 33)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 34
                echo "            </a>
            ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\" >
                    ";
                    // line 38
                    echo $context["subnav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 38));
                    echo "
                </ul>
            ";
                }
                // line 41
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  142 => 38,  138 => 36,  136 => 35,  133 => 34,  129 => 33,  125 => 32,  119 => 30,  115 => 29,  111 => 28,  103 => 26,  99 => 25,  96 => 24,  93 => 23,  81 => 22,  68 => 61,  62 => 58,  55 => 54,  45 => 46,  43 => 45,  40 => 44,  37 => 21,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'home': ['home', 'Home'],

        'conocenos': {
            name: 'Conócenos',
            sublinks: {
                'quienes somos': ['conocenos/quienes-somos', '¿Quiénes Somos?'],
                'junta directiva': ['conocenos/junta-directiva', 'Junta Directiva'],
                'himno': ['conocenos/himno', 'Himno'],
            },
        },
        'contactenos':  ['contactenos', 'Contáctenos'],


        'ejemplos': ['ejemplos', 'Ejemplos'],

    }
%}

{% macro render_menu(links) %}
    {% import _self as subnav %}

    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\" >
                    {{ subnav.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\" >
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\" {{ 'home'|page }}\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                {{ nav.render_menu(links) }}
                <li>
                    <button
                        onclick=\"window.location='{{ 'iniciar-sesion'|page }}'\"
                        class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                        Iniciar sesión
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>", "C:\\xampppp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/partials/nav.htm", "");
    }
}
