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

/* C:\xampp\htdocs\Proyecto\clubdeleones/themes/clubdeleonesdavid/pages/user/crear-perfil.htm */
class __TwigTemplate_1b0a544fa0773f1d4099bd07442bd67ee5f9bf5a4dfff678f2ca21b0d1827195 extends \Twig\Template
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

\t<div id=\"encabezado\"><h4>Crear Nuevo Perfil</h4></div>

\t<!-- Formulario Editar Perfil-->
\t<form name=\"editarperfil\" method=\"\" action=\"\">
\t\t<div id=\"titulo\"><p>Información General</p></div>
\t\t<div>
\t\t\t<label for=\"ingreso_leon\">Fecha de ingreso</label>
\t\t\t<input type=\"text\" name=\"ingreso_leon\" id=\"ingreso_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"estado\">Estado</label>
\t\t\t<select id=\"estado\" name=\"estado\">
\t\t\t\t<option value=\"activo\" selected=\"selected\">Activo</option>
\t\t\t\t<option value=\"inactivo\">Inactivo</option>
\t\t\t</select>
\t\t</div>
\t\t<div id=\"titulo\"><p>Información de Credenciales</p></div>\t
\t\t<div>
\t\t\t<label for=\"usuario\">Usuario</label>
\t\t\t<input type=\"text\" name=\"usuario\" id=\"usuario\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"contra\">Contraseña</label>
\t\t\t<input type=\"text\" name=\"contra\" id=\"contra\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"conf_contra\">Confirmar contraseña</label>
\t\t\t<input type=\"text\" name=\"conf_contra\" id=\"conf_contra\"/>\t
\t\t</div>

\t\t<div id=\"titulo\"><p>Información Personal</p></div>
\t\t<div>
\t\t\t<label for=\"cedula_leon\">Cédula</label> <!--No se modifica-->
\t\t\t<input type=\"text\" name=\"cedula_leon\" id=\"cedula_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"pnombre_leon\">Primer Nombre</label>
\t\t\t<input type=\"text\" name=\"pnombre_leon\" id=\"pnombre_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"snombre_leon\">Segundo Nombre</label>
\t\t\t<input type=\"text\" name=\"snombre_leon\" id=\"snombre_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"papellido_leon\">Primer Apellido</label>
\t\t\t<input type=\"text\" name=\"papellido_leon\" id=\"papellido_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"sapellido_leon\">Segundo Apellido</label>
\t\t\t<input type=\"text\" name=\"sapellido_leon\" id=\"sapellido_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"nacimiento\">Fecha de Nacimiento</label>
\t\t\t<input type=\"text\" name=\"nacimiento\" id=\"nacimiento\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"tipo_sangre\">Tipo de sangre</label>
\t\t\t<select id=\"tipo_sangre\" name=\"tipo_sangre\">
\t\t\t\t<option value=\"apositivo\" selected=\"selected\">A+</option>
\t\t\t\t<option value=\"bpositivo\">B+</option>
\t\t\t\t<option value=\"abpositivo\">AB+</option>
\t\t\t\t<option value=\"opositivo\">O+</option>
\t\t\t\t<option value=\"anegativo\">A-</option>
\t\t\t\t<option value=\"bnegativo\">B-</option>
\t\t\t\t<option value=\"abnegativo\">AB-</option>
\t\t\t\t<option value=\"onegativo\">O-</option>
\t\t\t</select>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"estado_civil\">Estado Civil</label>
\t\t\t<select id=\"estado_civil\" name=\"estado_civil\">
\t\t\t\t<option value=\"casado\" selected=\"selected\">Casado</option>
\t\t\t\t<option value=\"soltero\">Soltero</option>
\t\t\t\t<option value=\"divorciado\">Divorciado</option>
\t\t\t</select>
\t\t</div>
\t\t<div id=\"titulo\"><p>Información laboral</p></div>\t
\t\t<div>
\t\t\t<label for=\"profesion\">Profesión</label>
\t\t\t<input type=\"text\" name=\"profesion\" id=\"profesion\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"empresa\">Empresa</label>
\t\t\t<input type=\"text\" name=\"empresa\" id=\"empresa\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"cargo\">Cargo</label>
\t\t\t<input type=\"text\" name=\"cargo\" id=\"cargo\"/>\t
\t\t</div>


\t\t<div id=\"titulo\"><p>Información de Contacto</p></div>
\t\t<div>
\t\t\t<label for=\"tel_casa\">Teléfono de Casa</label>
\t\t\t<input type=\"text\" name=\"tel_casa\" id=\"tel_casa\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"tel_oficina\">Teléfono de oficina</label>
\t\t\t<input type=\"text\" name=\"tel_oficina\" id=\"tel_oficina\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"celuar\">Celular</label>
\t\t\t<input type=\"text\" name=\"celular\" id=\"celular\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"correo\">Correo electrónico</label>
\t\t\t<input type=\"text\" name=\"correo\" id=\"correo\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"facebook\">Facebook</label>
\t\t\t<input type=\"text\" name=\"facebook\" id=\"facebook\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"twitter\">Twitter</label>
\t\t\t<input type=\"text\" name=\"twitter\" id=\"twitter\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"instagram\">Instagram</label>
\t\t\t<input type=\"text\" name=\"instagram\" id=\"instagram\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"linkedin\">Linkedin</label>
\t\t\t<input type=\"text\" name=\"linkedin\" id=\"linkedin\"/>\t
\t\t</div>
\t\t<div id=\"titulo\"><p>Información Domadora</p></div>
\t\t<div>
\t\t\t<label for=\"cedula_domadora\">Cédula</label> <!--No se modifica-->
\t\t\t<input type=\"text\" name=\"cedula_domadora\" id=\"cedula_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"nombre_domadora\">Nombres</label>
\t\t\t<input type=\"text\" name=\"nombre_domadora\" id=\"nombre_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"apellido_domadora\">Apellidos</label>
\t\t\t<input type=\"text\" name=\"apellido_domadora\" id=\"apellido_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"fecha_domadora\">Fecha de Nacimineto</label>
\t\t\t<input type=\"text\" name=\"fecha_domadora\" id=\"fecha_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"tipo_sangre_domadora\">Tipo de sangre</label>
\t\t\t<select id=\"tipo_sangre_domadora\" name=\"tipo_sangre_domadora\">
\t\t\t\t<option value=\"apositivo\" selected=\"selected\">A+</option>
\t\t\t\t<option value=\"bpositivo\">B+</option>
\t\t\t\t<option value=\"abpositivo\">AB+</option>
\t\t\t\t<option value=\"opositivo\">O+</option>
\t\t\t\t<option value=\"anegativo\">A-</option>
\t\t\t\t<option value=\"bnegativo\">B-</option>
\t\t\t\t<option value=\"abnegativo\">AB-</option>
\t\t\t\t<option value=\"onegativo\">O-</option>
\t\t\t</select>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"celular_domadora\">Celular</label>
\t\t\t<input type=\"text\" name=\"celular_domadora\" id=\"celular_domadora\"/>\t
\t\t</div>

\t\t<div id=\"button\">
\t\t\t<button type=\"submit\">Guardar Cambios</button>
\t\t\t<button type=\"submit\">Cancelar</button>
\t\t</div><br/><br/>
\t</form>>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/user/crear-perfil.htm";
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

\t<div id=\"encabezado\"><h4>Crear Nuevo Perfil</h4></div>

\t<!-- Formulario Editar Perfil-->
\t<form name=\"editarperfil\" method=\"\" action=\"\">
\t\t<div id=\"titulo\"><p>Información General</p></div>
\t\t<div>
\t\t\t<label for=\"ingreso_leon\">Fecha de ingreso</label>
\t\t\t<input type=\"text\" name=\"ingreso_leon\" id=\"ingreso_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"estado\">Estado</label>
\t\t\t<select id=\"estado\" name=\"estado\">
\t\t\t\t<option value=\"activo\" selected=\"selected\">Activo</option>
\t\t\t\t<option value=\"inactivo\">Inactivo</option>
\t\t\t</select>
\t\t</div>
\t\t<div id=\"titulo\"><p>Información de Credenciales</p></div>\t
\t\t<div>
\t\t\t<label for=\"usuario\">Usuario</label>
\t\t\t<input type=\"text\" name=\"usuario\" id=\"usuario\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"contra\">Contraseña</label>
\t\t\t<input type=\"text\" name=\"contra\" id=\"contra\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"conf_contra\">Confirmar contraseña</label>
\t\t\t<input type=\"text\" name=\"conf_contra\" id=\"conf_contra\"/>\t
\t\t</div>

\t\t<div id=\"titulo\"><p>Información Personal</p></div>
\t\t<div>
\t\t\t<label for=\"cedula_leon\">Cédula</label> <!--No se modifica-->
\t\t\t<input type=\"text\" name=\"cedula_leon\" id=\"cedula_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"pnombre_leon\">Primer Nombre</label>
\t\t\t<input type=\"text\" name=\"pnombre_leon\" id=\"pnombre_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"snombre_leon\">Segundo Nombre</label>
\t\t\t<input type=\"text\" name=\"snombre_leon\" id=\"snombre_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"papellido_leon\">Primer Apellido</label>
\t\t\t<input type=\"text\" name=\"papellido_leon\" id=\"papellido_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"sapellido_leon\">Segundo Apellido</label>
\t\t\t<input type=\"text\" name=\"sapellido_leon\" id=\"sapellido_leon\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"nacimiento\">Fecha de Nacimiento</label>
\t\t\t<input type=\"text\" name=\"nacimiento\" id=\"nacimiento\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"tipo_sangre\">Tipo de sangre</label>
\t\t\t<select id=\"tipo_sangre\" name=\"tipo_sangre\">
\t\t\t\t<option value=\"apositivo\" selected=\"selected\">A+</option>
\t\t\t\t<option value=\"bpositivo\">B+</option>
\t\t\t\t<option value=\"abpositivo\">AB+</option>
\t\t\t\t<option value=\"opositivo\">O+</option>
\t\t\t\t<option value=\"anegativo\">A-</option>
\t\t\t\t<option value=\"bnegativo\">B-</option>
\t\t\t\t<option value=\"abnegativo\">AB-</option>
\t\t\t\t<option value=\"onegativo\">O-</option>
\t\t\t</select>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"estado_civil\">Estado Civil</label>
\t\t\t<select id=\"estado_civil\" name=\"estado_civil\">
\t\t\t\t<option value=\"casado\" selected=\"selected\">Casado</option>
\t\t\t\t<option value=\"soltero\">Soltero</option>
\t\t\t\t<option value=\"divorciado\">Divorciado</option>
\t\t\t</select>
\t\t</div>
\t\t<div id=\"titulo\"><p>Información laboral</p></div>\t
\t\t<div>
\t\t\t<label for=\"profesion\">Profesión</label>
\t\t\t<input type=\"text\" name=\"profesion\" id=\"profesion\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"empresa\">Empresa</label>
\t\t\t<input type=\"text\" name=\"empresa\" id=\"empresa\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"cargo\">Cargo</label>
\t\t\t<input type=\"text\" name=\"cargo\" id=\"cargo\"/>\t
\t\t</div>


\t\t<div id=\"titulo\"><p>Información de Contacto</p></div>
\t\t<div>
\t\t\t<label for=\"tel_casa\">Teléfono de Casa</label>
\t\t\t<input type=\"text\" name=\"tel_casa\" id=\"tel_casa\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"tel_oficina\">Teléfono de oficina</label>
\t\t\t<input type=\"text\" name=\"tel_oficina\" id=\"tel_oficina\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"celuar\">Celular</label>
\t\t\t<input type=\"text\" name=\"celular\" id=\"celular\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"correo\">Correo electrónico</label>
\t\t\t<input type=\"text\" name=\"correo\" id=\"correo\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"facebook\">Facebook</label>
\t\t\t<input type=\"text\" name=\"facebook\" id=\"facebook\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"twitter\">Twitter</label>
\t\t\t<input type=\"text\" name=\"twitter\" id=\"twitter\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"instagram\">Instagram</label>
\t\t\t<input type=\"text\" name=\"instagram\" id=\"instagram\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"linkedin\">Linkedin</label>
\t\t\t<input type=\"text\" name=\"linkedin\" id=\"linkedin\"/>\t
\t\t</div>
\t\t<div id=\"titulo\"><p>Información Domadora</p></div>
\t\t<div>
\t\t\t<label for=\"cedula_domadora\">Cédula</label> <!--No se modifica-->
\t\t\t<input type=\"text\" name=\"cedula_domadora\" id=\"cedula_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"nombre_domadora\">Nombres</label>
\t\t\t<input type=\"text\" name=\"nombre_domadora\" id=\"nombre_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"apellido_domadora\">Apellidos</label>
\t\t\t<input type=\"text\" name=\"apellido_domadora\" id=\"apellido_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"fecha_domadora\">Fecha de Nacimineto</label>
\t\t\t<input type=\"text\" name=\"fecha_domadora\" id=\"fecha_domadora\"/>\t
\t\t</div>
\t\t<div>
\t\t\t<label for=\"tipo_sangre_domadora\">Tipo de sangre</label>
\t\t\t<select id=\"tipo_sangre_domadora\" name=\"tipo_sangre_domadora\">
\t\t\t\t<option value=\"apositivo\" selected=\"selected\">A+</option>
\t\t\t\t<option value=\"bpositivo\">B+</option>
\t\t\t\t<option value=\"abpositivo\">AB+</option>
\t\t\t\t<option value=\"opositivo\">O+</option>
\t\t\t\t<option value=\"anegativo\">A-</option>
\t\t\t\t<option value=\"bnegativo\">B-</option>
\t\t\t\t<option value=\"abnegativo\">AB-</option>
\t\t\t\t<option value=\"onegativo\">O-</option>
\t\t\t</select>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"celular_domadora\">Celular</label>
\t\t\t<input type=\"text\" name=\"celular_domadora\" id=\"celular_domadora\"/>\t
\t\t</div>

\t\t<div id=\"button\">
\t\t\t<button type=\"submit\">Guardar Cambios</button>
\t\t\t<button type=\"submit\">Cancelar</button>
\t\t</div><br/><br/>
\t</form>>", "C:\\xampp\\htdocs\\Proyecto\\clubdeleones/themes/clubdeleonesdavid/pages/user/crear-perfil.htm", "");
    }
}
