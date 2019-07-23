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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/listado-de-leon.htm */
class __TwigTemplate_ef0894ab1e2c1aa8a35fdcc906e0ebced8ab32fbe2b8ef47d2988e8c51be810e extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
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

    <section id=\"layout-title\">
      <div class=\"container\">
        <h3 style=\"text-align: center\">Listado de leones</h3>
      </div>
    </section>

    <div class=\"col-sm-2\">
        <a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" >Regresar</a>
    </div>
    <div>
    \t\t<h5 id=\"line\">Buscar por:</h5>
    \t\t<select id=\"line\" class=\"form-control select select-default\" name=\"pago\" data-toggle=\"select\">
    \t\t\t<option value=\"1\" selected>Cedula</option>
    \t\t\t<option value=\"2\">Codigo Leon</option>
        </select>
    </div>

<p>&nbsp;</p>

<style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    </style>

<div style=\"overflow-x:auto;\">
    <table>
      <tr>
        <th>Codigo leon</th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Editar</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p><p>&nbsp;</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/listado-de-leon.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  60 => 10,  55 => 9,  52 => 8,  50 => 3,  47 => 6,  44 => 4,  42 => 3,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}

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

    <section id=\"layout-title\">
      <div class=\"container\">
        <h3 style=\"text-align: center\">Listado de leones</h3>
      </div>
    </section>

    <div class=\"col-sm-2\">
        <a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" >Regresar</a>
    </div>
    <div>
    \t\t<h5 id=\"line\">Buscar por:</h5>
    \t\t<select id=\"line\" class=\"form-control select select-default\" name=\"pago\" data-toggle=\"select\">
    \t\t\t<option value=\"1\" selected>Cedula</option>
    \t\t\t<option value=\"2\">Codigo Leon</option>
        </select>
    </div>

<p>&nbsp;</p>

<style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    </style>

<div style=\"overflow-x:auto;\">
    <table>
      <tr>
        <th>Codigo leon</th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Editar</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p><p>&nbsp;</p>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/listado-de-leon.htm", "");
    }
}
