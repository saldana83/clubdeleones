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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/user/perfil-leon.htm */
class __TwigTemplate_f6e99ba82171687aa8b518e5c502f8936e9ce211971b41ef027fae1a0244fbe6 extends \Twig\Template
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
\t<style type=\"text/css\">
\t\t/*Formulario */
\t\t
\t\tsection{
\t\t\tmargin: 0 auto;
\t\t\twidth: 400px
\t\t}

\t\tsection div{
\t\t\tmargin-top: 6px; 
\t\t\twidth: 700px;
\t\t}

\t\tp{
\t\t\tdisplay: inline-block;
\t\t\twidth: 140px;
\t\t}

\t\t#info {
\t\t\tmargin-top: -7px;
\t\t}

\t\t#info p, td{
\t\t\twidth: 200px;
\t\t\theight: 6px;
\t\t\tmargin-left: 3px;
\t\t}

\t\t#titulo p{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\theight: 30px;
\t\t\tline-height: 30px;
\t\t\twidth: 80%;
\t\t}
\t\t
\t\t#encabezado {
\t\t\tbackground-color: #E6E7E7;
\t\t\twidth: 100%;
\t\t\theight: 15%;
\t\t}

\t\t#encabezado h3{
\t\t\ttext-align: center;
\t\t\tpadding: 2%;

\t\t}

\t\t#foto_perfil{
\t\t\talign-content: center;
\t\t\twidth: 200px;
\t\t\theight: 200px;
\t\t}

\t\t#foto_perfil img{
\t\t\tmargin-left: 110px;
\t\t\twidth: 200px;
\t\t\theight: 200px;
\t\t}

\t\t#sec_izquierda{
\t\t\tfloat: left;
\t\t\tmargin-left: 5%;
\t\t\tmargin-right: 5%;
\t\t\tmargin-top: 16px;
\t\t}

\t\t#sec_derecha{
\t\t\tmargin-left: 35%;
\t\t\tmargin-top: 3%;
\t\t\t
\t\t}
\t\t
\t\t#perfil{
\t\t    margin-right:1150px;
\t\t}

\t</style>

<form data-request=\"onStart\" method=\"post\">
\t<div>
\t<h2 style=\"padding: 2%; background-color: #E6E7E7;text-align:center;\" style=\"padding: 1%;\"> ";
        // line 84
        echo twig_escape_filter($this->env, ($context["primernombre"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["primerapellido"] ?? null), "html", null, true);
        echo "</h2>
\t</div>\t
\t\t<a class=\"btn btn-block btn-lg btn-warning\" href=\"editar-perfil\"  style=\"position: absolute; width:150px;margin-left:85%;margin-top: -7%;\" >Editar Perfil</a>
\t<div id=\"sec_izquierda\">
\t\t<br>
\t\t<br>
\t\t<section name=\"ver_perfil\" method=\"\" action=\"\" width=\"20\">
\t\t\t<center>
\t\t\t<img src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/junta4.png");
        echo "\" height=\"200\" style=\"margin-left: 40%;\">
\t\t\t</center>
\t\t\t<div id=\"titulo\"><p>Información General</p></div>
\t\t\t<div id=\"info\">
\t\t\t\t<p>Código de León:</p><td>";
        // line 96
        echo twig_escape_filter($this->env, ($context["codigoleon"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t\t<p>Fecha de ingreso:</p><td>";
        // line 97
        echo twig_escape_filter($this->env, ($context["fechadeingreso"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t\t<p>Estado:</p><td>";
        // line 98
        echo twig_escape_filter($this->env, ($context["estado_activo_incativo"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</div>
\t\t</section>
\t</div>

\t<div id=\"sec_derecha\">
\t<section>
\t\t<div id=\"titulo\"><p>Información Personal</p></div>
\t\t<div id=\"info\">
\t\t\t<p>Cédula:</p><td>";
        // line 107
        echo twig_escape_filter($this->env, ($context["cedula"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Primer nombre:</p><td>";
        // line 108
        echo twig_escape_filter($this->env, ($context["primernombre"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Segundo nombre:</p><td>";
        // line 109
        echo twig_escape_filter($this->env, ($context["segundonombre"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Primer apellido:</p><td>";
        // line 110
        echo twig_escape_filter($this->env, ($context["primerapellido"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Segundo apellido:</p><td>";
        // line 111
        echo twig_escape_filter($this->env, ($context["segundoapellido"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Fecha de nacimiento:</p><td>";
        // line 112
        echo twig_escape_filter($this->env, ($context["fechanac"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Tipo de sangre:</p><td>";
        // line 113
        echo twig_escape_filter($this->env, ($context["tiposangre"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Estado civil:</p><td>";
        // line 114
        echo twig_escape_filter($this->env, ($context["estadocivil"] ?? null), "html", null, true);
        echo "</td>
\t\t</div>

\t\t<div id=\"titulo\"><p>Información laboral</p></div>\t
\t\t<div id=\"info\">
\t\t\t<p>Profesión:</p><td>";
        // line 119
        echo twig_escape_filter($this->env, ($context["profesion"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Empresa:</p><td>";
        // line 120
        echo twig_escape_filter($this->env, ($context["empresa"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Cargo:</p><td>";
        // line 121
        echo twig_escape_filter($this->env, ($context["cargo"] ?? null), "html", null, true);
        echo "</td>
\t\t</div>

\t\t<div id=\"titulo\"><p>Contacto</p></div>
\t\t<div id=\"info\">
\t\t\t<p>Teléfono de casa:</p><td>";
        // line 126
        echo twig_escape_filter($this->env, ($context["telefonocasa"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Teléfono de oficina:</p><td>";
        // line 127
        echo twig_escape_filter($this->env, ($context["telefonooficina"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Celular:</p><td>";
        // line 128
        echo twig_escape_filter($this->env, ($context["telefonocelular"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Correo electrónico:</p><td>";
        // line 129
        echo twig_escape_filter($this->env, ($context["correo"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Facebook:</p><td>";
        // line 130
        echo twig_escape_filter($this->env, ($context["facebook"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Twitter:</p><td>";
        // line 131
        echo twig_escape_filter($this->env, ($context["twitter"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Instagram:</p><td>";
        // line 132
        echo twig_escape_filter($this->env, ($context["instagram"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Linkedin:</p><td>";
        // line 133
        echo twig_escape_filter($this->env, ($context["linkedin"] ?? null), "html", null, true);
        echo "</td>
\t\t</div>\t

\t\t<div id=\"titulo\"><p>Información Domadora</p></div>
\t\t<div id=\"info\">
\t\t\t<p>Cédula:</p><td>";
        // line 138
        echo twig_escape_filter($this->env, ($context["dcedula"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Nombre:</p><td>";
        // line 139
        echo twig_escape_filter($this->env, ($context["dnombre"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Apellido:</p><td>";
        // line 140
        echo twig_escape_filter($this->env, ($context["dapellido"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Fecha de nacimiento:</p><td>";
        // line 141
        echo twig_escape_filter($this->env, ($context["dfecha_nac"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Tipo de sangre:</p><td>";
        // line 142
        echo twig_escape_filter($this->env, ($context["dtipodesangre"] ?? null), "html", null, true);
        echo "</td></br>
\t\t\t<p>Celular:</p><td>";
        // line 143
        echo twig_escape_filter($this->env, ($context["dcelular"] ?? null), "html", null, true);
        echo "</td>
\t\t</div>\t
\t</section>
\t</div>
</form>
<p>&nbsp;</p><p>&nbsp;</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/user/perfil-leon.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 143,  267 => 142,  263 => 141,  259 => 140,  255 => 139,  251 => 138,  243 => 133,  239 => 132,  235 => 131,  231 => 130,  227 => 129,  223 => 128,  219 => 127,  215 => 126,  207 => 121,  203 => 120,  199 => 119,  191 => 114,  187 => 113,  183 => 112,  179 => 111,  175 => 110,  171 => 109,  167 => 108,  163 => 107,  151 => 98,  147 => 97,  143 => 96,  136 => 92,  123 => 84,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}

\t<style type=\"text/css\">
\t\t/*Formulario */
\t\t
\t\tsection{
\t\t\tmargin: 0 auto;
\t\t\twidth: 400px
\t\t}

\t\tsection div{
\t\t\tmargin-top: 6px; 
\t\t\twidth: 700px;
\t\t}

\t\tp{
\t\t\tdisplay: inline-block;
\t\t\twidth: 140px;
\t\t}

\t\t#info {
\t\t\tmargin-top: -7px;
\t\t}

\t\t#info p, td{
\t\t\twidth: 200px;
\t\t\theight: 6px;
\t\t\tmargin-left: 3px;
\t\t}

\t\t#titulo p{
\t\t\tbackground-color: #E6E7E7;
\t\t\ttext-align: center;
\t\t\theight: 30px;
\t\t\tline-height: 30px;
\t\t\twidth: 80%;
\t\t}
\t\t
\t\t#encabezado {
\t\t\tbackground-color: #E6E7E7;
\t\t\twidth: 100%;
\t\t\theight: 15%;
\t\t}

\t\t#encabezado h3{
\t\t\ttext-align: center;
\t\t\tpadding: 2%;

\t\t}

\t\t#foto_perfil{
\t\t\talign-content: center;
\t\t\twidth: 200px;
\t\t\theight: 200px;
\t\t}

\t\t#foto_perfil img{
\t\t\tmargin-left: 110px;
\t\t\twidth: 200px;
\t\t\theight: 200px;
\t\t}

\t\t#sec_izquierda{
\t\t\tfloat: left;
\t\t\tmargin-left: 5%;
\t\t\tmargin-right: 5%;
\t\t\tmargin-top: 16px;
\t\t}

\t\t#sec_derecha{
\t\t\tmargin-left: 35%;
\t\t\tmargin-top: 3%;
\t\t\t
\t\t}
\t\t
\t\t#perfil{
\t\t    margin-right:1150px;
\t\t}

\t</style>

<form data-request=\"onStart\" method=\"post\">
\t<div>
\t<h2 style=\"padding: 2%; background-color: #E6E7E7;text-align:center;\" style=\"padding: 1%;\"> {{primernombre}} {{primerapellido}}</h2>
\t</div>\t
\t\t<a class=\"btn btn-block btn-lg btn-warning\" href=\"editar-perfil\"  style=\"position: absolute; width:150px;margin-left:85%;margin-top: -7%;\" >Editar Perfil</a>
\t<div id=\"sec_izquierda\">
\t\t<br>
\t\t<br>
\t\t<section name=\"ver_perfil\" method=\"\" action=\"\" width=\"20\">
\t\t\t<center>
\t\t\t<img src=\"{{ 'assets/images/junta4.png'|theme }}\" height=\"200\" style=\"margin-left: 40%;\">
\t\t\t</center>
\t\t\t<div id=\"titulo\"><p>Información General</p></div>
\t\t\t<div id=\"info\">
\t\t\t\t<p>Código de León:</p><td>{{codigoleon}}</td></br>
\t\t\t\t<p>Fecha de ingreso:</p><td>{{fechadeingreso}}</td></br>
\t\t\t\t<p>Estado:</p><td>{{estado_activo_incativo}}</td>
\t\t\t</div>
\t\t</section>
\t</div>

\t<div id=\"sec_derecha\">
\t<section>
\t\t<div id=\"titulo\"><p>Información Personal</p></div>
\t\t<div id=\"info\">
\t\t\t<p>Cédula:</p><td>{{cedula}}</td></br>
\t\t\t<p>Primer nombre:</p><td>{{primernombre}}</td></br>
\t\t\t<p>Segundo nombre:</p><td>{{segundonombre}}</td></br>
\t\t\t<p>Primer apellido:</p><td>{{primerapellido}}</td></br>
\t\t\t<p>Segundo apellido:</p><td>{{segundoapellido}}</td></br>
\t\t\t<p>Fecha de nacimiento:</p><td>{{fechanac}}</td></br>
\t\t\t<p>Tipo de sangre:</p><td>{{tiposangre}}</td></br>
\t\t\t<p>Estado civil:</p><td>{{estadocivil}}</td>
\t\t</div>

\t\t<div id=\"titulo\"><p>Información laboral</p></div>\t
\t\t<div id=\"info\">
\t\t\t<p>Profesión:</p><td>{{profesion}}</td></br>
\t\t\t<p>Empresa:</p><td>{{empresa}}</td></br>
\t\t\t<p>Cargo:</p><td>{{cargo}}</td>
\t\t</div>

\t\t<div id=\"titulo\"><p>Contacto</p></div>
\t\t<div id=\"info\">
\t\t\t<p>Teléfono de casa:</p><td>{{telefonocasa}}</td></br>
\t\t\t<p>Teléfono de oficina:</p><td>{{telefonooficina}}</td></br>
\t\t\t<p>Celular:</p><td>{{telefonocelular}}</td></br>
\t\t\t<p>Correo electrónico:</p><td>{{correo}}</td></br>
\t\t\t<p>Facebook:</p><td>{{facebook}}</td></br>
\t\t\t<p>Twitter:</p><td>{{twitter}}</td></br>
\t\t\t<p>Instagram:</p><td>{{instagram}}</td></br>
\t\t\t<p>Linkedin:</p><td>{{linkedin}}</td>
\t\t</div>\t

\t\t<div id=\"titulo\"><p>Información Domadora</p></div>
\t\t<div id=\"info\">
\t\t\t<p>Cédula:</p><td>{{dcedula}}</td></br>
\t\t\t<p>Nombre:</p><td>{{dnombre}}</td></br>
\t\t\t<p>Apellido:</p><td>{{dapellido}}</td></br>
\t\t\t<p>Fecha de nacimiento:</p><td>{{dfecha_nac}}</td></br>
\t\t\t<p>Tipo de sangre:</p><td>{{dtipodesangre}}</td></br>
\t\t\t<p>Celular:</p><td>{{dcelular}}</td>
\t\t</div>\t
\t</section>
\t</div>
</form>
<p>&nbsp;</p><p>&nbsp;</p>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/user/perfil-leon.htm", "");
    }
}
