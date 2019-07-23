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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/crear-nuevo-pago.htm */
class __TwigTemplate_b54628489d2411102628b57af2f90d150ec38035a31e3906cd5805969f152fea extends \Twig\Template
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
\t#line{
\t\tdisplay: inline;
\t}
\t
\ttd {
\t\tpadding: 3%;
\t\tmargin: 0 auto;
\t}
\t#button{
\t\t\talign-content: center;
\t\t\ttext-align: center;
\t\t}

\t#button button{
\t\t\twidth: 155px;
\t\t\tborder-radius: 6px;
\t\t\tmargin: 20px;
\t\t}

</style>

<section id=\"layout-title\">
\t<div class=\"container\">
\t\t<h3 style=\"text-align: center\">Crear nuevo pago</h3>
\t</div>
</section>

<div class=\"col-sm-2\">
        <a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" >Regresar</a>
</div>

<p>&nbsp;</p>

<form action=\"onStar\" method=\"POST\">
\t\t<div>
\t\t\t\t<table style=\"width: auto;margin: 0 auto;\">
\t\t\t\t  \t<tr>
\t\t\t\t\t\t<td><h6>Nombre del pago:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t  \t</tr>
\t\t\t\t  \t<tr>
\t\t\t\t\t\t<td><h6 >Codigo de pago:</h6></td>
\t\t\t\t\t\t<td><input  type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t  \t</tr>
\t\t\t\t  \t<tr>
\t\t\t\t\t\t<td><h6 >Categoria de pago:</h6></td>
\t\t\t\t\t\t<td><select  class=\"form-control select select-default\" name=\"pago\" data-toggle=\"select\">
\t\t\t\t\t\t\t\t<option value=\"1\" selected>categoria x</option>
\t\t\t\t\t\t\t\t<option value=\"2\">categoria y</option>
\t\t\t\t\t\t</select></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><h6 >Monto:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><h6>Descripcion:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><h6 >Fecha de cierre:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t</div>
</form>
<div id=\"button\">
\t\t<button type=\"submit\">Guardar Cambios</button>
\t\t<button type=\"submit\">Cancelar</button>
</div>
<script language=\"JavaScript\">

\t\twindow.onbeforeunload = preguntarAntesDeSalir;
\t\t
\t\tfunction preguntarAntesDeSalir(){
\t\treturn \"¿Seguro que quieres salir?\";
\t\t}
\t\t
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/crear-nuevo-pago.htm";
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
\t#line{
\t\tdisplay: inline;
\t}
\t
\ttd {
\t\tpadding: 3%;
\t\tmargin: 0 auto;
\t}
\t#button{
\t\t\talign-content: center;
\t\t\ttext-align: center;
\t\t}

\t#button button{
\t\t\twidth: 155px;
\t\t\tborder-radius: 6px;
\t\t\tmargin: 20px;
\t\t}

</style>

<section id=\"layout-title\">
\t<div class=\"container\">
\t\t<h3 style=\"text-align: center\">Crear nuevo pago</h3>
\t</div>
</section>

<div class=\"col-sm-2\">
        <a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" >Regresar</a>
</div>

<p>&nbsp;</p>

<form action=\"onStar\" method=\"POST\">
\t\t<div>
\t\t\t\t<table style=\"width: auto;margin: 0 auto;\">
\t\t\t\t  \t<tr>
\t\t\t\t\t\t<td><h6>Nombre del pago:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t  \t</tr>
\t\t\t\t  \t<tr>
\t\t\t\t\t\t<td><h6 >Codigo de pago:</h6></td>
\t\t\t\t\t\t<td><input  type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t  \t</tr>
\t\t\t\t  \t<tr>
\t\t\t\t\t\t<td><h6 >Categoria de pago:</h6></td>
\t\t\t\t\t\t<td><select  class=\"form-control select select-default\" name=\"pago\" data-toggle=\"select\">
\t\t\t\t\t\t\t\t<option value=\"1\" selected>categoria x</option>
\t\t\t\t\t\t\t\t<option value=\"2\">categoria y</option>
\t\t\t\t\t\t</select></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><h6 >Monto:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><h6>Descripcion:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><h6 >Fecha de cierre:</h6></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"nombre_pago\" style=\"width: 100%;\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t</div>
</form>
<div id=\"button\">
\t\t<button type=\"submit\">Guardar Cambios</button>
\t\t<button type=\"submit\">Cancelar</button>
</div>
<script language=\"JavaScript\">

\t\twindow.onbeforeunload = preguntarAntesDeSalir;
\t\t
\t\tfunction preguntarAntesDeSalir(){
\t\treturn \"¿Seguro que quieres salir?\";
\t\t}
\t\t
</script>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/crear-nuevo-pago.htm", "");
    }
}
