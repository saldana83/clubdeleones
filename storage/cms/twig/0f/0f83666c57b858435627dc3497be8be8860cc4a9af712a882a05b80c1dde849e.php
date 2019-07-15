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

/* C:\xampp\htdocs\Proyecto\clubdeleones/themes/clubdeleonesdavid/pages/asignar-pagos.htm */
class __TwigTemplate_288c12b29508e76cb0b8d1e12dfc5eaf3f1e48973faa3005a05d5412cdd40b5d extends \Twig\Template
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
\t.encabezado{
\t\tbackground-color: #E6E7E7;
\t\ttext-align: center;
\t\tline-height: 70px;
\t\theight: 70px;
\t}

\t.encabezado a{
\t\tmargin-top: -15px;
\t\tmargin-left: 10px;
\t\tfloat: left;
\t}

\t.encabezado p{
\t\tmargin-right: 150px;
\t    padding-top: 20px;
\t}

\t#seleccionar{
\t\twidth:500px;
\t\tmargin-top: 40px;
\t\theight: 770px;
\t}

\t#buscar_cat{
\t\tfloat: left;
\t\tmargin-left: 50px;
\t}

\t#tipo_cat{
\t\tmargin-top: 22px;
\t\tmargin-left: 30px;
\t}

\t#buscar_pago{
\t\tfloat: left;
\t\tmargin-left: -285px;
\t}

\t#tipo_pago{
\t\tmargin-top: 20px;
\t\tmargin-left: 30px;
\t\twidth:114px;
\t}

\t#buscar_pago select{
\t\tmargin-top: -10px;
\t}

\t#anadir{
\t\tmargin-top: -770px;
\t\twidth: 800px;
\t\theight: 200px;
\t\tfloat: right;
\t}

\t#linea{
\t\twidth: 9px;
\t\theight: 680px;
\t\tbackground-color: black;
\t\tfloat: left;\t
\t}

\t#anadir h4{
\t\ttext-align: center;
\t}

\t#buscar_leon{
\t\tbackground-color: white;
\t}

\t#buscar_por{
\t\tfloat: left;
\t\tmargin-left: 20px;
\t\tmargin-top: 12px;
\t\t
\t}

\t#leon{
\t\tfloat: left;
\t\tmargin-top: 33px;
\t\tmargin-left: 20px;
\t}

\t#input{
\t\tmargin-top: -27px;
\t\tmargin-left: 20px;
\t\theight: 24px;
\t}

\tbutton{
\t\tborder-radius: 6px;
\t\tmargin-top: 25px;
\t\twidth: 170px;
\t}

\t.boton_add button{
\t\tmargin-left: 22px;
\t}

\tselect{

\t}

\ttable{
\t\tmargin: 0 auto;
\t\twidth: 500px;
\t\tborder-collapse: collapse;
\t\tmargin-right: 150px;
\t\tmargin-top: 20px;
\t}

\ttr{
\t\theight: 50px;\t\t
\t}

\ttd{
\t\tborder-bottom: 2px solid black;
\t\ttext-align: left;
\t}

\t#guardar{
\t\tmargin-left: 250px;
\t}
\t
\tbody{
\t    height: 300px;
\t}


</style>

<body>
\t<div class=\"encabezado\">
\t\t<a href=\"\">Administrar Pagos</a>
\t\t<P>Asignar Pagos</P>
\t</div>

\t\t<div id=\"seleccionar\">\t
\t\t<label id=\"buscar_cat\" for=\"\"><h4>Seleccionar categoría:</h4></label>
\t\t<select id=\"tipo_cat\" name=\"\">
\t\t\t<option value=\"\" selected=\"selected\">Categoría 1</option>
\t\t\t<option value=\"casado\">Categoría 2</option>
\t\t\t<option value=\"casado\">Categoría 3</option>
\t\t</select><br>
\t\t<label id=\"buscar_pago\" for=\"\"><h4>Seleccionar pago:</h4></label>
\t\t<select id=\"tipo_pago\" name=\"pago\">
\t\t\t<option value=\"\" selected=\"selected\">Pago 1</option>
\t\t\t<option value=\"casado\">Pago 2</option>
\t\t\t<option value=\"casado\">Pago 3</option>
\t\t</select><br><br>\t
\t\t</div>

\t\t<div id=\"anadir\">
\t\t\t
\t\t\t<div id=\"linea\"></div>
\t\t\t
\t\t\t<h4>Añadir León</h4>
\t\t\t
\t\t\t<div id=\"buscar_leon\">\t
\t\t\t\t<label id=\"buscar_por\" for=\"\"><h4>Buscar por:</h4></label>
\t\t\t\t<select id=\"leon\" name=\"\">
\t\t\t\t\t<option value=\"\" selected=\"selected\">Código León</option>
\t\t\t\t\t<option value=\"casado\">Cédula León</option>
\t\t\t\t</select><br>
\t\t\t\t<input id=\"input\" type=\"text\" name=\"\" >
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"boton_add\">
\t\t\t\t<button type=\"submit\">Añadir</button>
\t\t\t\t<button type=\"submit\">Quitar</button>
\t\t\t</div>

\t\t\t<table>
\t\t\t\t<div id=\"celdas\">
\t\t\t\t\t<tr id=\"descripcion\">
\t\t\t\t\t  <td><strong>Código de León</strong></td>
\t\t\t\t\t  <td><strong>Nombre de León</strong></td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>574</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>576</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>578</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>579</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>580</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>100</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>120</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>120</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>
\t\t\t\t</div>
\t\t\t</table>
\t\t\t<div id=\"guardar\">
\t\t\t<button type=\"submit\">Guardar cambios</button>
\t\t\t<button type=\"reset\">Cancelar</button>
\t\t\t</div>


\t\t</div>

</body>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/asignar-pagos.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
\t.encabezado{
\t\tbackground-color: #E6E7E7;
\t\ttext-align: center;
\t\tline-height: 70px;
\t\theight: 70px;
\t}

\t.encabezado a{
\t\tmargin-top: -15px;
\t\tmargin-left: 10px;
\t\tfloat: left;
\t}

\t.encabezado p{
\t\tmargin-right: 150px;
\t    padding-top: 20px;
\t}

\t#seleccionar{
\t\twidth:500px;
\t\tmargin-top: 40px;
\t\theight: 770px;
\t}

\t#buscar_cat{
\t\tfloat: left;
\t\tmargin-left: 50px;
\t}

\t#tipo_cat{
\t\tmargin-top: 22px;
\t\tmargin-left: 30px;
\t}

\t#buscar_pago{
\t\tfloat: left;
\t\tmargin-left: -285px;
\t}

\t#tipo_pago{
\t\tmargin-top: 20px;
\t\tmargin-left: 30px;
\t\twidth:114px;
\t}

\t#buscar_pago select{
\t\tmargin-top: -10px;
\t}

\t#anadir{
\t\tmargin-top: -770px;
\t\twidth: 800px;
\t\theight: 200px;
\t\tfloat: right;
\t}

\t#linea{
\t\twidth: 9px;
\t\theight: 680px;
\t\tbackground-color: black;
\t\tfloat: left;\t
\t}

\t#anadir h4{
\t\ttext-align: center;
\t}

\t#buscar_leon{
\t\tbackground-color: white;
\t}

\t#buscar_por{
\t\tfloat: left;
\t\tmargin-left: 20px;
\t\tmargin-top: 12px;
\t\t
\t}

\t#leon{
\t\tfloat: left;
\t\tmargin-top: 33px;
\t\tmargin-left: 20px;
\t}

\t#input{
\t\tmargin-top: -27px;
\t\tmargin-left: 20px;
\t\theight: 24px;
\t}

\tbutton{
\t\tborder-radius: 6px;
\t\tmargin-top: 25px;
\t\twidth: 170px;
\t}

\t.boton_add button{
\t\tmargin-left: 22px;
\t}

\tselect{

\t}

\ttable{
\t\tmargin: 0 auto;
\t\twidth: 500px;
\t\tborder-collapse: collapse;
\t\tmargin-right: 150px;
\t\tmargin-top: 20px;
\t}

\ttr{
\t\theight: 50px;\t\t
\t}

\ttd{
\t\tborder-bottom: 2px solid black;
\t\ttext-align: left;
\t}

\t#guardar{
\t\tmargin-left: 250px;
\t}
\t
\tbody{
\t    height: 300px;
\t}


</style>

<body>
\t<div class=\"encabezado\">
\t\t<a href=\"\">Administrar Pagos</a>
\t\t<P>Asignar Pagos</P>
\t</div>

\t\t<div id=\"seleccionar\">\t
\t\t<label id=\"buscar_cat\" for=\"\"><h4>Seleccionar categoría:</h4></label>
\t\t<select id=\"tipo_cat\" name=\"\">
\t\t\t<option value=\"\" selected=\"selected\">Categoría 1</option>
\t\t\t<option value=\"casado\">Categoría 2</option>
\t\t\t<option value=\"casado\">Categoría 3</option>
\t\t</select><br>
\t\t<label id=\"buscar_pago\" for=\"\"><h4>Seleccionar pago:</h4></label>
\t\t<select id=\"tipo_pago\" name=\"pago\">
\t\t\t<option value=\"\" selected=\"selected\">Pago 1</option>
\t\t\t<option value=\"casado\">Pago 2</option>
\t\t\t<option value=\"casado\">Pago 3</option>
\t\t</select><br><br>\t
\t\t</div>

\t\t<div id=\"anadir\">
\t\t\t
\t\t\t<div id=\"linea\"></div>
\t\t\t
\t\t\t<h4>Añadir León</h4>
\t\t\t
\t\t\t<div id=\"buscar_leon\">\t
\t\t\t\t<label id=\"buscar_por\" for=\"\"><h4>Buscar por:</h4></label>
\t\t\t\t<select id=\"leon\" name=\"\">
\t\t\t\t\t<option value=\"\" selected=\"selected\">Código León</option>
\t\t\t\t\t<option value=\"casado\">Cédula León</option>
\t\t\t\t</select><br>
\t\t\t\t<input id=\"input\" type=\"text\" name=\"\" >
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"boton_add\">
\t\t\t\t<button type=\"submit\">Añadir</button>
\t\t\t\t<button type=\"submit\">Quitar</button>
\t\t\t</div>

\t\t\t<table>
\t\t\t\t<div id=\"celdas\">
\t\t\t\t\t<tr id=\"descripcion\">
\t\t\t\t\t  <td><strong>Código de León</strong></td>
\t\t\t\t\t  <td><strong>Nombre de León</strong></td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>574</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>576</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>578</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>579</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>580</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>100</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>120</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t  <td>120</td>
\t\t\t\t\t  <td>Juan Saldaña</td>
\t\t\t\t\t</tr>
\t\t\t\t</div>
\t\t\t</table>
\t\t\t<div id=\"guardar\">
\t\t\t<button type=\"submit\">Guardar cambios</button>
\t\t\t<button type=\"reset\">Cancelar</button>
\t\t\t</div>


\t\t</div>

</body>", "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/asignar-pagos.htm", "");
    }
}
