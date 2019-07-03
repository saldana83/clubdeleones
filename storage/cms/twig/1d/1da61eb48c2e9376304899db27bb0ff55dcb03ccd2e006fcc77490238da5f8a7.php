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

/* C:\xampp\htdocs\Proyecto\clubdeleones/themes/clubdeleonesdavid/pages/user/historial_pagos.htm */
class __TwigTemplate_d40cbf49fc72f856b64dbce856f247f48c9caa983012cccc6853767acca22d9b extends \Twig\Template
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
        echo "<style type=\"text/css\">
\t\t
\t\t#encabezado{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\tline-height: 70px;
\t\t\theight: 70px;
\t\t}

\t\t#encabezado a{
\t\t\tmargin-top: -20px;
\t\t\tmargin-left: 5px;
\t\t\tfloat: left;
\t\t}

\t\t#encabezado p{
\t\t\tmargin-right: 30px;
\t\t\t\tline-height: 70px;
\t\t}

\t\ttable{
\t\t\tmargin: 0 auto;
\t\t\twidth: 1000px;
\t\t\tborder-collapse: collapse;
\t\t\tmargin-right: 290px;
\t\t}

\t\ttr{
\t\t\theight: 50px;
\t\t\t
\t\t}

\t\ttd{
\t\t\tborder-bottom: 2px solid black;
\t\t\ttext-align: center;
\t\t}
\t\t
\t\t
\t\t#buscar_por{
\t\t\t
\t\t\tfloat: left;
\t\t\tmargin-left: 35px;
\t\t}

\t\t#tipo_pago{
\t\t\tfloat: left;
\t\t\tmargin-left: 40px;
\t\t\tmargin-top: 26px;
\t\t }

\t\t#boton_buscar button{
\t\t\t
\t\t\tborder-radius: 6px;
\t\t\tmargin-left: 50px;
\t\t\tmargin-top: 25px;
\t\t\twidth: 80px;
\t\t}

\t</style>


\t<div id=\"encabezado\">
\t\t<a href=\"\">Pagos</a>
\t\t<P>Historial de Pagos</P>
\t</div>
\t<div>
\t\t<label id=\"buscar_por\" for=\"\"><h4>Buscar por:</h4></label>
\t\t<select id=\"tipo_pago\" name=\"pago\">
\t\t\t<option value=\"\" selected=\"selected\">Tipo de Pago</option>
\t\t\t<option value=\"casado\">Categoría de Pago</option>
\t\t</select>
\t</div>
\t<div id=\"boton_buscar\">
\t\t\t<button type=\"submit\">Buscar</button>
\t\t</div>
\t<table name=\"historial_pagos\">
\t\t
\t</table>

\t<table>
<div id=\"celdas\">
<tr id=\"descripcion\">
  <td><strong>Código de Pago</strong></td>
  <td><strong>Nombre de Pago</strong></td>
  <td><strong>Categoría</strong></td>
  <td><strong>Descripción</strong></td>
  <td><strong>Saldo</strong></td>
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
</table>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/user/historial_pagos.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
\t\t
\t\t#encabezado{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\tline-height: 70px;
\t\t\theight: 70px;
\t\t}

\t\t#encabezado a{
\t\t\tmargin-top: -20px;
\t\t\tmargin-left: 5px;
\t\t\tfloat: left;
\t\t}

\t\t#encabezado p{
\t\t\tmargin-right: 30px;
\t\t\t\tline-height: 70px;
\t\t}

\t\ttable{
\t\t\tmargin: 0 auto;
\t\t\twidth: 1000px;
\t\t\tborder-collapse: collapse;
\t\t\tmargin-right: 290px;
\t\t}

\t\ttr{
\t\t\theight: 50px;
\t\t\t
\t\t}

\t\ttd{
\t\t\tborder-bottom: 2px solid black;
\t\t\ttext-align: center;
\t\t}
\t\t
\t\t
\t\t#buscar_por{
\t\t\t
\t\t\tfloat: left;
\t\t\tmargin-left: 35px;
\t\t}

\t\t#tipo_pago{
\t\t\tfloat: left;
\t\t\tmargin-left: 40px;
\t\t\tmargin-top: 26px;
\t\t }

\t\t#boton_buscar button{
\t\t\t
\t\t\tborder-radius: 6px;
\t\t\tmargin-left: 50px;
\t\t\tmargin-top: 25px;
\t\t\twidth: 80px;
\t\t}

\t</style>


\t<div id=\"encabezado\">
\t\t<a href=\"\">Pagos</a>
\t\t<P>Historial de Pagos</P>
\t</div>
\t<div>
\t\t<label id=\"buscar_por\" for=\"\"><h4>Buscar por:</h4></label>
\t\t<select id=\"tipo_pago\" name=\"pago\">
\t\t\t<option value=\"\" selected=\"selected\">Tipo de Pago</option>
\t\t\t<option value=\"casado\">Categoría de Pago</option>
\t\t</select>
\t</div>
\t<div id=\"boton_buscar\">
\t\t\t<button type=\"submit\">Buscar</button>
\t\t</div>
\t<table name=\"historial_pagos\">
\t\t
\t</table>

\t<table>
<div id=\"celdas\">
<tr id=\"descripcion\">
  <td><strong>Código de Pago</strong></td>
  <td><strong>Nombre de Pago</strong></td>
  <td><strong>Categoría</strong></td>
  <td><strong>Descripción</strong></td>
  <td><strong>Saldo</strong></td>
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
</table>", "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/user/historial_pagos.htm", "");
    }
}
