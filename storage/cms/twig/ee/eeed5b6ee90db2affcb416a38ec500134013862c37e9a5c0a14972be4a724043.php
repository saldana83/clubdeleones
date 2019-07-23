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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/categoria_pagos.htm */
class __TwigTemplate_cb981c936cdaaf15cafe74b17887520c3f96c3685728e21962ea1048e07c9896 extends \Twig\Template
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
        echo "\t
\t<style>
\t\t#line {
    \tdisplay: inline;}
\t</style>

\t<section id=\"layout-title\">
\t\t<div class=\"container\">
\t\t  <h3 style=\"text-align: center\">Categoria de pagos</h3>
\t\t</div>
\t</section>


\t\t<div class=\"col-sm-2\">
\t\t\t<a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" >Regresar</a>
\t\t</div>
\t\t<div>
\t\t\t\t<h5 id=\"line\">Ordenar por:</h5>
\t\t\t\t<select id=\"line\" class=\"form-control select select-default\" name=\"categoria\" data-toggle=\"select\">
\t\t\t\t\t<option value=\"1\" selected>Codigo</option>
\t\t\t\t\t<option value=\"2\">Nombre</option>
\t\t\t\t\t<option value=\"2\">Categoria</option>
\t\t\t\t</select>
\t\t</div>
\t\t<p>&nbsp;</p>
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
\t\t<table>
\t\t  <tr>
\t\t\t<th>Codigo de pago</th>
\t\t\t<th>Nombre de pago</th>
\t\t\t<th>Categoria</th>
\t\t\t<th>Descripción</th>
\t\t\t<th>Saldo</th>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td>Jill</td>
\t\t\t<td>Smith</td>
\t\t\t<td>50</td>
\t\t\t<td>50</td>
\t\t\t<td>50</td>
\t\t  </tr>
\t\t</table>
</div>
<p>&nbsp;</p><p>&nbsp;</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/categoria_pagos.htm";
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
\t
\t<style>
\t\t#line {
    \tdisplay: inline;}
\t</style>

\t<section id=\"layout-title\">
\t\t<div class=\"container\">
\t\t  <h3 style=\"text-align: center\">Categoria de pagos</h3>
\t\t</div>
\t</section>


\t\t<div class=\"col-sm-2\">
\t\t\t<a href=\"supervisor\" class=\"btn btn-block btn-lg btn-primary\" >Regresar</a>
\t\t</div>
\t\t<div>
\t\t\t\t<h5 id=\"line\">Ordenar por:</h5>
\t\t\t\t<select id=\"line\" class=\"form-control select select-default\" name=\"categoria\" data-toggle=\"select\">
\t\t\t\t\t<option value=\"1\" selected>Codigo</option>
\t\t\t\t\t<option value=\"2\">Nombre</option>
\t\t\t\t\t<option value=\"2\">Categoria</option>
\t\t\t\t</select>
\t\t</div>
\t\t<p>&nbsp;</p>
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
\t\t<table>
\t\t  <tr>
\t\t\t<th>Codigo de pago</th>
\t\t\t<th>Nombre de pago</th>
\t\t\t<th>Categoria</th>
\t\t\t<th>Descripción</th>
\t\t\t<th>Saldo</th>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td>Jill</td>
\t\t\t<td>Smith</td>
\t\t\t<td>50</td>
\t\t\t<td>50</td>
\t\t\t<td>50</td>
\t\t  </tr>
\t\t</table>
</div>
<p>&nbsp;</p><p>&nbsp;</p>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/supervisor/categoria_pagos.htm", "");
    }
}
