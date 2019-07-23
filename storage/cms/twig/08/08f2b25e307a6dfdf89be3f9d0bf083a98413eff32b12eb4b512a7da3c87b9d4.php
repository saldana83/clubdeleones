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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/user/historial_pagos.htm */
class __TwigTemplate_325c343b89522216b9a60803ec9cfcb5dfa3855269932dbf139102f6b60c0b52 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 3
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/pages/ui-elements.js"]);
        // line 5
        echo "\"></script>
";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 7
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 8
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 9
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    </div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 12
        echo "
<p>&nbsp;</p>
<style type=\"text/css\">
\t\t
\t\t#encabezado{
\t\t\t
\t\t\ttext-align: center;
\t\t\tline-height: 70px;
\t\t\theight: 70px;
\t\t}

\t\t#encabezado a{
\t\t\tmargin-top: -20px;
\t\t\tmargin-left: 5px;
\t\t\tfloat: left;
\t\t}


\t\t#customers {
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
\t\t
\t\t#buscar_por{
      position: relative;
\t\t\tfloat: left;
\t\t
\t\t}

\t\t#tipo_pago{
\t\t\tfloat: left;
\t\t\t
\t\t }

\t\t#boton_buscar button{
\t\t\tfloat: left;
\t\t\tborder-radius: 6px;
\t\t\twidth: 80px;
\t\t}

\t</style>


\t<div id=\"encabezado\">
\t\t<h2>Historial de Pagos</h2>
\t</div>
\t<div>
    \t\t<h5>Ordenar por:    
    \t\t<select class=\"form-control select select-primary\" name=\"pago\" data-toggle=\"select\">
    \t\t\t<option value=\"1\" selected>Tipo de Pago</option>
    \t\t\t<option value=\"2\">Categoría de Pago</option>
        </select>
      </h5>
\t</div>

  <h7>&nbsp;</h7>

\t<table id=\"customers\">
<div id=\"celdas\">
<tr id=\"descripcion\">
  <th><strong>Código de Pago</strong></th>
  <th><strong>Nombre de Pago</strong></th>
  <th><strong>Categoría</strong></th>
  <th><strong>Descripción</strong></th>
  <th><strong>Saldo</strong></th>
</tr>
</div>

<tr>
  <td>002</td>
  <td>Fiesta de navidad</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>50.00</td>
</tr>

<tr>
  <td>100</td>
  <td>Fiesta del día del padre</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>75.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta de aniversario</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>150.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta </td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>30.00</td>
</tr>

<tr>
  <td>002</td>
  <td>Fiesta de navidad</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>50.00</td>
</tr>

<tr>
  <td>100</td>
  <td>Fiesta del día del padre</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>75.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta de aniversario</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>150.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta </td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>30.00</td>
</tr>
</table>
<p>&nbsp;</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/user/historial_pagos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  57 => 9,  52 => 8,  49 => 7,  47 => 2,  44 => 5,  41 => 3,  39 => 2,  35 => 1,);
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

<p>&nbsp;</p>
<style type=\"text/css\">
\t\t
\t\t#encabezado{
\t\t\t
\t\t\ttext-align: center;
\t\t\tline-height: 70px;
\t\t\theight: 70px;
\t\t}

\t\t#encabezado a{
\t\t\tmargin-top: -20px;
\t\t\tmargin-left: 5px;
\t\t\tfloat: left;
\t\t}


\t\t#customers {
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
\t\t
\t\t#buscar_por{
      position: relative;
\t\t\tfloat: left;
\t\t
\t\t}

\t\t#tipo_pago{
\t\t\tfloat: left;
\t\t\t
\t\t }

\t\t#boton_buscar button{
\t\t\tfloat: left;
\t\t\tborder-radius: 6px;
\t\t\twidth: 80px;
\t\t}

\t</style>


\t<div id=\"encabezado\">
\t\t<h2>Historial de Pagos</h2>
\t</div>
\t<div>
    \t\t<h5>Ordenar por:    
    \t\t<select class=\"form-control select select-primary\" name=\"pago\" data-toggle=\"select\">
    \t\t\t<option value=\"1\" selected>Tipo de Pago</option>
    \t\t\t<option value=\"2\">Categoría de Pago</option>
        </select>
      </h5>
\t</div>

  <h7>&nbsp;</h7>

\t<table id=\"customers\">
<div id=\"celdas\">
<tr id=\"descripcion\">
  <th><strong>Código de Pago</strong></th>
  <th><strong>Nombre de Pago</strong></th>
  <th><strong>Categoría</strong></th>
  <th><strong>Descripción</strong></th>
  <th><strong>Saldo</strong></th>
</tr>
</div>

<tr>
  <td>002</td>
  <td>Fiesta de navidad</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>50.00</td>
</tr>

<tr>
  <td>100</td>
  <td>Fiesta del día del padre</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>75.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta de aniversario</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>150.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta </td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>30.00</td>
</tr>

<tr>
  <td>002</td>
  <td>Fiesta de navidad</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>50.00</td>
</tr>

<tr>
  <td>100</td>
  <td>Fiesta del día del padre</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>75.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta de aniversario</td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>150.00</td>
</tr>

<tr>
  <td>120</td>
  <td>Fiesta </td>
  <td>Fiestas internas</td>
  <td>Ingresar texto aquí</td>
  <td>30.00</td>
</tr>
</table>
<p>&nbsp;</p>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/user/historial_pagos.htm", "");
    }
}
