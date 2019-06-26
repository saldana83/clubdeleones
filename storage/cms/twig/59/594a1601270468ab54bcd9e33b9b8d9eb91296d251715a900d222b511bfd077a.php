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

/* C:\xampp\htdocs\clubdeleones/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_cd0c2922949e30f600b62013c916e423ae585876e8bf93f9dcd5a1a82ed40619 extends \Twig\Template
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
        $context["links"] = ["home" => [0 => "home", 1 => "Home"], "conocenos" => ["name" => "Conocenos", "sublinks" => ["quienes somos" => [0 => "conocenos/quienes-somos", 1 => "¿Quienes Somos?"], "junta directiva" => [0 => "conocenos/junta-directiva", 1 => "Junta Directiva"], "himno" => [0 => "conocenos/himno", 1 => "Himno"]]], "contacto" => ["name" => "Contacto"], "ui-elements" => [0 => "ui-elements", 1 => "UI Elements"]];
        // line 22
        echo "
";
        // line 45
        echo "
";
        // line 46
        $context["nav"] = $this;
        // line 47
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\" >
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\" ";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 59
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
                <li>
                    <button
                        onclick=\"window.location='";
        // line 62
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

    // line 23
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 24
            echo "    ";
            $context["subnav"] = $this;
            // line 25
            echo "
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 27
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 27)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 29
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 29)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 29)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 29)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 30)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 31
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 31)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 33
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 33)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 33)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 34)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 35
                echo "            </a>
            ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\" >
                    ";
                    // line 39
                    echo $context["subnav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 39));
                    echo "
                </ul>
            ";
                }
                // line 42
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
        return "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 42,  142 => 39,  138 => 37,  136 => 36,  133 => 35,  129 => 34,  125 => 33,  119 => 31,  115 => 30,  111 => 29,  103 => 27,  99 => 26,  96 => 25,  93 => 24,  81 => 23,  68 => 62,  62 => 59,  55 => 55,  45 => 47,  43 => 46,  40 => 45,  37 => 22,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'home': ['home', 'Home'],

        'conocenos': {
            name: 'Conocenos',
            sublinks: {
                'quienes somos': ['conocenos/quienes-somos', '¿Quienes Somos?'],
                'junta directiva': ['conocenos/junta-directiva', 'Junta Directiva'],
                'himno': ['conocenos/himno', 'Himno'],
            },
        },
        'contacto': {
            name: 'Contacto',
        },

        'ui-elements': ['ui-elements', 'UI Elements'],

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
</nav>", "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/partials/nav.htm", "");
    }
}
