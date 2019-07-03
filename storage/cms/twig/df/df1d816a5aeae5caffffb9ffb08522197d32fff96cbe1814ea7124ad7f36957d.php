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

/* C:\xampp\htdocs\clubdeleones/themes/clubdeleonesdavid/pages/listado-de-leon.htm */
class __TwigTemplate_a610b09fbf97685b6f78c886a97636db38cd0f1fa7b93ec632f7fe8699c27834 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title></title>
\t<style type=\"text/css\">
\t\t
\t\t#encabezado{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\tline-height: 70px;
\t\t\theight: 70px;
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
\t\t\tmargin-left: 15px;
\t\t\tmargin-top: 25px;
\t\t\twidth: 80px;
\t\t}

\t</style>
</head>
<body>
\t<div id=\"encabezado\"><P><h2>Listado de Leones</P></h2></div>
\t<div>
\t\t<label id=\"buscar_por\" for=\"\">Buscar por: &nbsp &nbsp &nbsp &nbsp</label>
\t\t<select id=\"nombre_leon\" name=\"nombre\">
\t\t\t<option value=\"\" selected=\"selected\">Nombre</option>
\t\t\t<option value=\"casado\">ID</option>
\t\t</select>

\t\t<input type=\"text\" name=\"buscar\" size=\"40\">
\t\t\t<id=\"boton_buscar\">
\t\t\t<button type=\"submit\">Buscar</button>
\t</div>

\t
\t<table name=\"listado_leon\">
\t\t
\t</table>

\t<table>
<div id=\"celdas\">
<tr id=\"descripcion\">
  <td><strong>Código de León</strong></td>
  <td><strong>Cédula</strong></td>
  <td><strong>Nombre</strong></td>
  <td><strong>Apellido</strong></td>
  <td><strong>Usuario</strong></td>
   <td><strong>Teléfono</strong></td>
  <td><strong>Editar</strong></td>
</tr>
</div>

<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>

<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
</table>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/pages/listado-de-leon.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title></title>
\t<style type=\"text/css\">
\t\t
\t\t#encabezado{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\tline-height: 70px;
\t\t\theight: 70px;
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
\t\t\tmargin-left: 15px;
\t\t\tmargin-top: 25px;
\t\t\twidth: 80px;
\t\t}

\t</style>
</head>
<body>
\t<div id=\"encabezado\"><P><h2>Listado de Leones</P></h2></div>
\t<div>
\t\t<label id=\"buscar_por\" for=\"\">Buscar por: &nbsp &nbsp &nbsp &nbsp</label>
\t\t<select id=\"nombre_leon\" name=\"nombre\">
\t\t\t<option value=\"\" selected=\"selected\">Nombre</option>
\t\t\t<option value=\"casado\">ID</option>
\t\t</select>

\t\t<input type=\"text\" name=\"buscar\" size=\"40\">
\t\t\t<id=\"boton_buscar\">
\t\t\t<button type=\"submit\">Buscar</button>
\t</div>

\t
\t<table name=\"listado_leon\">
\t\t
\t</table>

\t<table>
<div id=\"celdas\">
<tr id=\"descripcion\">
  <td><strong>Código de León</strong></td>
  <td><strong>Cédula</strong></td>
  <td><strong>Nombre</strong></td>
  <td><strong>Apellido</strong></td>
  <td><strong>Usuario</strong></td>
   <td><strong>Teléfono</strong></td>
  <td><strong>Editar</strong></td>
</tr>
</div>

<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>

<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
<tr>
  <td>00</td>
  <td>1-111-111</td>
  <td>Max</td>
  <td>Mustermann</td>
  <td>MaMu</td>
   <td>1111-1111</td>
  <td><div id=\"boton_editar\">
\t\t\t<button type=\"submit\">editar</button>
\t\t</div></td>
</tr>
</table>

</body>
</html>", "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/pages/listado-de-leon.htm", "");
    }
}
