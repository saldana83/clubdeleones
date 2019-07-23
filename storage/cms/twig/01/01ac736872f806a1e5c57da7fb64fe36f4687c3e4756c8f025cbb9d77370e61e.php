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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/listado-de-pagos-por-leon.htm */
class __TwigTemplate_c3d5dda56161605ad79dd3d81714c042fc04ca77eba1f06c95dbec0e5a35fca8 extends \Twig\Template
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
        echo "<p>";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "&nbsp;</p>

";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 4
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/pages/ui-elements.js"]);
        // line 6
        echo "\"></script>
";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 8
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 9
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 10
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    </div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 13
        echo "
<style>
#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #34495E;
  color: white;
}
#line {
    display: inline;
}

</style>

<div id=\"encabezado\">
<a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" style=\"position: absolute; width: 100px;margin-left: 5%;\">Regresar</a>
<h1 style=\"text-align: center;\">Listado de pagos por león</h1>
</div>
<form action=\"\" method=\"POST\" name=\"Listado_de_pagos\"><p>&nbsp;</p>   
        <div style=\"text-align: center;\">
            <h5 id=\"line\">Buscar por:</h5> 
            <select id=\"line\" class=\"form-control select select-default\" name=\"pago\" data-toggle=\"select\">
                <option value=\"codigo\">Codigo de León</option>
                <option value=\"cedula\">Cedula de León</option>
                <option value=\"nombre\">Nombre de León</option>
            </select>
            <b class=\"form-group\">
                <input id=\"line\" class=\"form-control\" style=\"width: 225px;\" type=\"text\" placeholder=\"Buscar\" />
                <button id=\"line\" class=\"btn btn-block btn-lg btn-primary\" style=\"width: 90px;\" type=\"submit\">Buscar</button>
            </b> 
            <h5 id=\"line\">Ordenar por categoria:</h5>
            <select id=\"line\" class=\"form-control select select-default\" data-toggle=\"select\">
            <option value=\"fiestas\">Fiestas</option>
            <option value=\"actividades\">Actividades</option>
            <option value=\"donaciones\">Donaciones</option>
            </select>
        </div>
    <p>&nbsp;</p>    
    <div class=\"listado_pagos\">
    <table id=\"customers\" class=\"pagos_por_leon\" style=\"width: 1200px; height: 155px; margin-left: auto; margin-right: auto;\">
    <thead>
    <tr style=\"height: 13.4688px;\">
    <th style=\"width: 141px; height: 13.4688px; text-align: left;\">Codigo de Pago</th>
    <th style=\"width: 155px; height: 13.4688px; text-align: left;\">Nombre de Pago</th>
    <th style=\"width: 103px; height: 13.4688px; text-align: left;\">Categoria</th>
    <th style=\"width: 120px; height: 13.4688px; text-align: left;\">Descripci&oacute;n</th>
    <th style=\"width: 100px; height: 13.4688px; text-align: left;\">Monto</th>
    </tr>
    </thead>
    <tbody>
    <tr style=\"height: 13px;\">
    <td style=\"width: 141px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 13px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 13px;\">
    <td style=\"width: 141px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 13px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 13px;\">
    <td style=\"width: 141px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 13px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 14px;\">
    <td style=\"width: 141px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 14px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 14px;\">
    <td style=\"width: 141px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 14px;\">&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <div style=\"text-align: center;\">&nbsp;<button type=\"submit\">Actualizar Pagos</button></div>
    <div style=\"text-align: center;\">
    <div style=\"text-align: center;\">&nbsp;</div>
    <div style=\"text-align: center;\"><button id=\"btnSeleccionar\" type=\"submit\">Seleccionar pagos pendientes.</button></div>
    <div style=\"text-align: center;\">&nbsp;</div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/listado-de-pagos-por-leon.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  61 => 10,  56 => 9,  53 => 8,  51 => 3,  48 => 6,  45 => 4,  43 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{% component 'session' %}&nbsp;</p>

{% put scripts %}
    <script src=\"{{ [
        'assets/javascript/pages/ui-elements.js',
    ]|theme }}\"></script>
{% endput %}
{% flash %}
    <div class=\"alert alert-{{ type }}\">
        {{ message }}
    </div>
{% endflash %}

<style>
#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #34495E;
  color: white;
}
#line {
    display: inline;
}

</style>

<div id=\"encabezado\">
<a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" style=\"position: absolute; width: 100px;margin-left: 5%;\">Regresar</a>
<h1 style=\"text-align: center;\">Listado de pagos por león</h1>
</div>
<form action=\"\" method=\"POST\" name=\"Listado_de_pagos\"><p>&nbsp;</p>   
        <div style=\"text-align: center;\">
            <h5 id=\"line\">Buscar por:</h5> 
            <select id=\"line\" class=\"form-control select select-default\" name=\"pago\" data-toggle=\"select\">
                <option value=\"codigo\">Codigo de León</option>
                <option value=\"cedula\">Cedula de León</option>
                <option value=\"nombre\">Nombre de León</option>
            </select>
            <b class=\"form-group\">
                <input id=\"line\" class=\"form-control\" style=\"width: 225px;\" type=\"text\" placeholder=\"Buscar\" />
                <button id=\"line\" class=\"btn btn-block btn-lg btn-primary\" style=\"width: 90px;\" type=\"submit\">Buscar</button>
            </b> 
            <h5 id=\"line\">Ordenar por categoria:</h5>
            <select id=\"line\" class=\"form-control select select-default\" data-toggle=\"select\">
            <option value=\"fiestas\">Fiestas</option>
            <option value=\"actividades\">Actividades</option>
            <option value=\"donaciones\">Donaciones</option>
            </select>
        </div>
    <p>&nbsp;</p>    
    <div class=\"listado_pagos\">
    <table id=\"customers\" class=\"pagos_por_leon\" style=\"width: 1200px; height: 155px; margin-left: auto; margin-right: auto;\">
    <thead>
    <tr style=\"height: 13.4688px;\">
    <th style=\"width: 141px; height: 13.4688px; text-align: left;\">Codigo de Pago</th>
    <th style=\"width: 155px; height: 13.4688px; text-align: left;\">Nombre de Pago</th>
    <th style=\"width: 103px; height: 13.4688px; text-align: left;\">Categoria</th>
    <th style=\"width: 120px; height: 13.4688px; text-align: left;\">Descripci&oacute;n</th>
    <th style=\"width: 100px; height: 13.4688px; text-align: left;\">Monto</th>
    </tr>
    </thead>
    <tbody>
    <tr style=\"height: 13px;\">
    <td style=\"width: 141px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 13px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 13px;\">
    <td style=\"width: 141px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 13px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 13px;\">
    <td style=\"width: 141px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 13px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 13px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 14px;\">
    <td style=\"width: 141px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 14px;\">&nbsp;</td>
    </tr>
    <tr style=\"height: 14px;\">
    <td style=\"width: 141px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 155px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 103px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 120px; text-align: left; height: 14px;\">&nbsp;</td>
    <td style=\"width: 100px; text-align: left; height: 14px;\">&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <div style=\"text-align: center;\">&nbsp;<button type=\"submit\">Actualizar Pagos</button></div>
    <div style=\"text-align: center;\">
    <div style=\"text-align: center;\">&nbsp;</div>
    <div style=\"text-align: center;\"><button id=\"btnSeleccionar\" type=\"submit\">Seleccionar pagos pendientes.</button></div>
    <div style=\"text-align: center;\">&nbsp;</div>
    </div>
</form>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/listado-de-pagos-por-leon.htm", "");
    }
}
