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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/partials/nav.htm */
class __TwigTemplate_ceca396f47135a8002d40ed3cb1c7f0d269ab75f71de898dae497c52b26ba775 extends \Twig\Template
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
        if (($context["user"] ?? null)) {
            // line 2
            $context["links"] = ["home" => [0 => "home", 1 => "Inicio"], "conocenos" => ["name" => "Conocenos", "sublinks" => ["quienes somos" => [0 => "conocenos/quienes-somos", 1 => "¿Quienes Somos?"], "junta directiva" => [0 => "conocenos/junta-directiva", 1 => "Junta Directiva"], "himno" => [0 => "conocenos/himno", 1 => "Himno"]]], "contacteno" => [0 => "contactenos", 1 => "Contáctenos"], "administracion" => ["name" => "Administración", "sublinks" => ["rol administrador" => [0 => "administrador/administrador", 1 => "Roll Administrador"], "rol supervisor" => [0 => "supervisor/supervisor", 1 => "Roll Supervisor"]]], "usuario-leon" => ["name" => "Usuario Leon", "sublinks" => ["perfil" => [0 => "user/perfil-leon", 1 => "Perfil"], "historialpagos" => [0 => "user/historial_pagos", 1 => "Historial de pagos"]]]];
            // line 32
            echo "
";
            // line 56
            echo "
";
            // line 57
            $context["nav"] = $this;
            // line 58
            echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\" >
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\" ";
            // line 66
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
            // line 70
            echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
            echo "
    <li>
    <button class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\" data-request=\"onLogout\" data-request-data=\"redirect: '/home'\">Cerrar Sesion</button>
    </li>
    </ul>
    </div>
    </div>
    </nav>
";
        } else {
            // line 79
            echo "    ";
            $context["links"] = ["home" => [0 => "home", 1 => "Inicio"], "conocenos" => ["name" => "Conocenos", "sublinks" => ["quienes somos" => [0 => "conocenos/quienes-somos", 1 => "¿Quienes Somos?"], "junta directiva" => [0 => "conocenos/junta-directiva", 1 => "Junta Directiva"], "himno" => [0 => "conocenos/himno", 1 => "Himno"]]], "contactenos" => [0 => "contactenos", 1 => "Contáctenos"]];
            // line 95
            echo "
";
            // line 119
            echo "
";
            // line 120
            $context["nav"] = $this;
            // line 121
            echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\" >
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\" ";
            // line 129
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
            // line 133
            echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
            echo "
   <li>
    <button
        onclick=\"window.location='";
            // line 136
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("iniciar-sesion");
            echo "'\"
        class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
        Iniciar sesión
    </button>
    </li>
    </ul>
    </div>
    </div>
    </nav>
";
        }
    }

    // line 96
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 97
            echo "    ";
            $context["subnav"] = $this;
            // line 98
            echo "
    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 100
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 100)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 102
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 102)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 102)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 102)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 103)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 104
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 104)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 106
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 106)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 106)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 107
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 107)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 108
                echo "            </a>
            ";
                // line 109
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\" >
                    ";
                    // line 112
                    echo $context["subnav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 112));
                    echo "
                </ul>
                
            ";
                }
                // line 116
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
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 116,  186 => 112,  182 => 110,  180 => 109,  177 => 108,  173 => 107,  169 => 106,  163 => 104,  159 => 103,  155 => 102,  147 => 100,  143 => 99,  140 => 98,  137 => 97,  125 => 96,  110 => 136,  104 => 133,  97 => 129,  87 => 121,  85 => 120,  82 => 119,  79 => 95,  76 => 79,  64 => 70,  57 => 66,  47 => 58,  45 => 57,  42 => 56,  39 => 32,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user %}
{% set
    links = {
        'home': ['home', 'Inicio'],

        'conocenos': {
            name: 'Conocenos',
            sublinks: {
                'quienes somos': ['conocenos/quienes-somos', '¿Quienes Somos?'],
                'junta directiva': ['conocenos/junta-directiva', 'Junta Directiva'],
                'himno': ['conocenos/himno', 'Himno'],
            },
        },
        'contacteno':  ['contactenos', 'Contáctenos'],
        'administracion':  {
        name: 'Administración',
        sublinks: {
                'rol administrador':['administrador/administrador', 'Roll Administrador'],
                'rol supervisor':['supervisor/supervisor', 'Roll Supervisor']
        }
        },
        'usuario-leon':  {
        name: 'Usuario Leon',
        sublinks: {
                'perfil':['user/perfil-leon', 'Perfil'],
                'historialpagos':['user/historial_pagos', 'Historial de pagos']
        }

    }
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
    <button class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\" data-request=\"onLogout\" data-request-data=\"redirect: '/home'\">Cerrar Sesion</button>
    </li>
    </ul>
    </div>
    </div>
    </nav>
{% else %}
    {% set
    links = {
        'home': ['home', 'Inicio'],

        'conocenos': {
            name: 'Conocenos',
            sublinks: {
                'quienes somos': ['conocenos/quienes-somos', '¿Quienes Somos?'],
                'junta directiva': ['conocenos/junta-directiva', 'Junta Directiva'],
                'himno': ['conocenos/himno', 'Himno'],
            },
        },
        'contactenos':  ['contactenos', 'Contáctenos'],

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
    </nav>
{% endif %}", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/partials/nav.htm", "");
    }
}
