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

/* C:\xampp\htdocs\Proyecto\clubdeleones/themes/clubdeleonesdavid/pages/registro_de_pago.htm */
class __TwigTemplate_5d1c2bbd9507859d33742c0c0acbcd5e30058558938c99990842748328f0218d extends \Twig\Template
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
\t\t/*Formulario */
\t\tform{
\t\t\tmargin: 0 auto;
\t\t\twidth: 400px;
\t\t}

\t\tform div{
\t\t\tmargin-top: 6px;
\t\t\theight:30px
\t\t}

\t\tlabel{
\t\t\tdisplay: inline-block;
\t\t\twidth: 150px;
\t\t}

\t\tinput, select{
\t\t\tmargin-left: 49px;
\t\t\theight: 24px;
\t\t}

\t\tselect{
\t\t\twidth: 197px;
\t\t}

\t\t#titulo{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\theight: 30px;
\t\t\tline-height: 30px;
\t\t}

\t\tinput:focus{
\t\t\tborder-color: #000;
\t\t}

\t\t#button{
\t\t\talign-content: center;
\t\t\ttext-align: center;
\t\t}

\t\t#button button{
\t\t\twidth: 155px;
\t\t\tborder-radius: 6px;
\t\t\tmargin: 20px;
\t\t}

\t\t
\t\t#encabezado{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\theight: 90px;
\t\t}
\t\t
\t\t#encabezado h4{
\t\t    \tline-height: 90px;
\t\t    \t
\t\t}
\t</style>

\t<div id=\"encabezado\"><h4>Registrar Pago</h4></div>

\t<!-- Formulario Editar Perfil-->
\t<form name=\"Registrar Pago\" method=\"\" action=\"\">
\t\t
\t\t<div>
\t\t\t<label for=\"cedula_leon\">Cedula León</label>
\t\t\t<input type=\"text\" name=\"cedula_leon\" id=\"cedula_leon\"/>\t
\t\t</div>
\t\t<br/>
\t\t<div>
\t\t\t<label for=\"categoria_De_pago\">Categoria de Pago:</label>
\t\t\t<br/>
\t\t\t<select id=\"categoria_de_pago\" name=\"categoria_de_pago\">
\t\t\t\t<option value=\"activo\" selected=\"selected\">Activo</option>
\t\t\t\t<option value=\"inactivo\">Inactivo</option>
\t\t\t</select>
\t\t</div>
\t    <br/>
\t\t<div>
\t\t\t<label for=\"codigo_de_pago\">Codigo de pago:</label>
\t\t\t<br/>
\t\t\t<select id=\"codigo_de_pago\" name=\"codigo_de_pago\">
\t\t\t\t<option value=\"activo\" selected=\"selected\">Activo</option>
\t\t\t\t<option value=\"inactivo\">Inactivo</option>
\t\t\t</select>\t
\t\t</div>
\t    <br/>
\t\t<div>
\t\t\t<label for=\"codigo_de_pago\">Pago realizado por:</label>
\t\t\t<input type=\"text\" name=\"pago_realizado_por\" id=\"pago_realizado_por\"/>\t
\t\t</div>
\t    <br/>
\t\t<div>
\t\t\t<label for=\"pago_registrado_por\">Pago registrado por:</label>
\t\t\t<input type=\"text\" name=\"pago_registrado_por\" id=\"pago_registrado_por\"/>\t
\t\t</div>
\t    <br/>

\t\t<div>
\t\t<label for=\"monto\">Monto:</label>
\t\t<input type=\"text\" name=\"monto\" id=\"monto\"/>
\t\t</div>
\t\t<br/>

\t\t<div id=\"button\">
\t\t\t<button type=\"submit\">Guardar Cambios</button>
\t\t\t<button type=\"submit\">Cancelar</button>
\t\t</div><br/><br/>
\t</form>>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/registro_de_pago.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
\t\t/*Formulario */
\t\tform{
\t\t\tmargin: 0 auto;
\t\t\twidth: 400px;
\t\t}

\t\tform div{
\t\t\tmargin-top: 6px;
\t\t\theight:30px
\t\t}

\t\tlabel{
\t\t\tdisplay: inline-block;
\t\t\twidth: 150px;
\t\t}

\t\tinput, select{
\t\t\tmargin-left: 49px;
\t\t\theight: 24px;
\t\t}

\t\tselect{
\t\t\twidth: 197px;
\t\t}

\t\t#titulo{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\theight: 30px;
\t\t\tline-height: 30px;
\t\t}

\t\tinput:focus{
\t\t\tborder-color: #000;
\t\t}

\t\t#button{
\t\t\talign-content: center;
\t\t\ttext-align: center;
\t\t}

\t\t#button button{
\t\t\twidth: 155px;
\t\t\tborder-radius: 6px;
\t\t\tmargin: 20px;
\t\t}

\t\t
\t\t#encabezado{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\theight: 90px;
\t\t}
\t\t
\t\t#encabezado h4{
\t\t    \tline-height: 90px;
\t\t    \t
\t\t}
\t</style>

\t<div id=\"encabezado\"><h4>Registrar Pago</h4></div>

\t<!-- Formulario Editar Perfil-->
\t<form name=\"Registrar Pago\" method=\"\" action=\"\">
\t\t
\t\t<div>
\t\t\t<label for=\"cedula_leon\">Cedula León</label>
\t\t\t<input type=\"text\" name=\"cedula_leon\" id=\"cedula_leon\"/>\t
\t\t</div>
\t\t<br/>
\t\t<div>
\t\t\t<label for=\"categoria_De_pago\">Categoria de Pago:</label>
\t\t\t<br/>
\t\t\t<select id=\"categoria_de_pago\" name=\"categoria_de_pago\">
\t\t\t\t<option value=\"activo\" selected=\"selected\">Activo</option>
\t\t\t\t<option value=\"inactivo\">Inactivo</option>
\t\t\t</select>
\t\t</div>
\t    <br/>
\t\t<div>
\t\t\t<label for=\"codigo_de_pago\">Codigo de pago:</label>
\t\t\t<br/>
\t\t\t<select id=\"codigo_de_pago\" name=\"codigo_de_pago\">
\t\t\t\t<option value=\"activo\" selected=\"selected\">Activo</option>
\t\t\t\t<option value=\"inactivo\">Inactivo</option>
\t\t\t</select>\t
\t\t</div>
\t    <br/>
\t\t<div>
\t\t\t<label for=\"codigo_de_pago\">Pago realizado por:</label>
\t\t\t<input type=\"text\" name=\"pago_realizado_por\" id=\"pago_realizado_por\"/>\t
\t\t</div>
\t    <br/>
\t\t<div>
\t\t\t<label for=\"pago_registrado_por\">Pago registrado por:</label>
\t\t\t<input type=\"text\" name=\"pago_registrado_por\" id=\"pago_registrado_por\"/>\t
\t\t</div>
\t    <br/>

\t\t<div>
\t\t<label for=\"monto\">Monto:</label>
\t\t<input type=\"text\" name=\"monto\" id=\"monto\"/>
\t\t</div>
\t\t<br/>

\t\t<div id=\"button\">
\t\t\t<button type=\"submit\">Guardar Cambios</button>
\t\t\t<button type=\"submit\">Cancelar</button>
\t\t</div><br/><br/>
\t</form>>", "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/registro_de_pago.htm", "");
    }
}
