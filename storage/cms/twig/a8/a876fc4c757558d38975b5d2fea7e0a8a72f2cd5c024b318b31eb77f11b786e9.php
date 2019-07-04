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

/* C:\xampp\htdocs\clubdeleones/themes/clubdeleonesdavid/pages/listado-de-pagos-por-leon.htm */
class __TwigTemplate_df112df8466771445512d1014f0119b43d30ee190920e5260be5f14485cd6a49 extends \Twig\Template
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
\t\t

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
\t\t#busqueda{
\t\t    margin-left:70px;
\t\t}
\t\t#ordenar{
\t\t    margin-left:70px;
\t\t    margin-top:20px;
\t\t}
\t\t#buscar, #seleccionar{
\t\t    width: 250px;
\t\t}
\t\t#bbusqueda{
\t\t    border-top:none;
\t\t    border-left:none;
\t\t    border-right:none;
\t\t    width:360px;
\t\t    margin-left:425px;
\t\t}
\t\t#btnbusqueda{
\t\t width:120px;
\t\t border-radius:5px;
\t\t}
\t\t#btnSeleccionar{
\t\t margin-left:662px;
\t\t border-radius:5px;
\t\t}
 
           .listado_pagos{
            margin: 10px 70px 70px;
            box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
        }
        
        .pagos_por_leon {
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }
        
        .pagos_por_leon td, .pagos_por_leon th {
            text-align: center;
            padding: 8px;
        }
        
        .pagos_por_leon td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }
        
        .pagos_por_leon thead th {
            color: #ffffff;
            background: #4FC3A1;
        }
        
        
        .pagos_por_leon thead th:nth-child(odd) {
            color: #ffffff;
            background: #324960;
        }
        
        .pagos_por_leon tr:nth-child(even) {
            background: #F8F8F8;
        }
        
        
        
        @media (max-width: 767px) {
            .pagos_por_leon {
                display: block;
                width: 100%;
            }
            .listado_pagos:before{
                content: \"Scroll horizontally >\";
                display: block;
                text-align: right;
                font-size: 11px;
                color: white;
                padding: 0 0 10px;
            }
            .pagos_por_leon thead, .pagos_por_leon tbody, .pagos_por_leon thead th {
                display: block;
            }
            .pagos_por_leon thead th:last-child{
                border-bottom: none;
            }
            .pagos_por_leon thead {
                float: left;
            }
            .pagos_por_leon tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }
            .pagos_por_leon td, .pagos_por_leon th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 13px;
                text-overflow: ellipsis;
            }
            .pagos_por_leon thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }
            .pagos_por_leon tbody tr {
                display: table-cell;
            }
            .pagos_por_leon tbody tr:nth-child(odd) {
                background: none;
            }
            .pagos_por_leon tr:nth-child(even) {
                background: transparent;
            }
            .pagos_por_leon tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }
            .pagos_por_leon tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }
            .pagos_por_leon tbody td {
                display: block;
                text-align: center;
            }
            
           #btn{
            float:right;   
           }
            


\t</style>

\t<div id=\"encabezado\"><h4>Listado de pagos por león</h4></div>
\t<br/>
\t<br/>

\t
\t<form name=\"Listado_de_pagos\" method=\"\" action=\"\">
\t
\t<div id=\"busqueda\">
\t<label for=\"buscarpor\">Buscar por:</label>
\t<select id=\"buscar\">
\t<option value=\"Codigodeleon\">Codigo de León</option>
\t<option value=\"cedulaleon\">Cedula de León</option>
\t<option value=\"nombreleon\">Nombre de León</option>
\t</select>\t
\t
\t<input type=\"search\" id=\"bbusqueda\" placeholder=\"Buscar...\">
\t
\t
\t<button type=\"submit\" id=\"btnbusqueda\">Buscar</button>
</div>

   <div id=\"ordenar\">
\t<label for=\"ordenarrpor\">Ordenar por categoria:</label>
\t<select id=\"seleccionar\">
\t<option value=\"fiestas\">Fiestas</option>
\t<option value=\"actividades\">Actividades</option>
\t<option value=\"donaciones\">Donaciones</option>
\t</select>\t
\t\t<button type=\"submit\" id=\"btnSeleccionar\">Seleccionar pagos pendientes.</button>
</div>

<div class=\"listado_pagos\">
    <table class=\"pagos_por_leon\">
        <thead>
        <tr>
            <th>Codigo de Pago</th>
            <th>Nombre de Pago</th>
            <th>Categoria</th>
            <th>Descripción</th>
            <th>Monto</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
        </tr>
        <tr>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
        </tr>
        <tr>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
        </tr>
        <tr>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
        </tr>
        <tr>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
        </tr>
        <tr>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
        </tr>
        <tr>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
        </tr>
        <tr>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
        </tr>
        <tbody>
    </table>
</div>
<div id=\"btn\">
<button type=\"submit\" id=\"btnactualizar\">Actualizar Pagos</button>
</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/pages/listado-de-pagos-por-leon.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
\t\t/*Formulario */
\t\t

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
\t\t#busqueda{
\t\t    margin-left:70px;
\t\t}
\t\t#ordenar{
\t\t    margin-left:70px;
\t\t    margin-top:20px;
\t\t}
\t\t#buscar, #seleccionar{
\t\t    width: 250px;
\t\t}
\t\t#bbusqueda{
\t\t    border-top:none;
\t\t    border-left:none;
\t\t    border-right:none;
\t\t    width:360px;
\t\t    margin-left:425px;
\t\t}
\t\t#btnbusqueda{
\t\t width:120px;
\t\t border-radius:5px;
\t\t}
\t\t#btnSeleccionar{
\t\t margin-left:662px;
\t\t border-radius:5px;
\t\t}
 
           .listado_pagos{
            margin: 10px 70px 70px;
            box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
        }
        
        .pagos_por_leon {
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }
        
        .pagos_por_leon td, .pagos_por_leon th {
            text-align: center;
            padding: 8px;
        }
        
        .pagos_por_leon td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }
        
        .pagos_por_leon thead th {
            color: #ffffff;
            background: #4FC3A1;
        }
        
        
        .pagos_por_leon thead th:nth-child(odd) {
            color: #ffffff;
            background: #324960;
        }
        
        .pagos_por_leon tr:nth-child(even) {
            background: #F8F8F8;
        }
        
        
        
        @media (max-width: 767px) {
            .pagos_por_leon {
                display: block;
                width: 100%;
            }
            .listado_pagos:before{
                content: \"Scroll horizontally >\";
                display: block;
                text-align: right;
                font-size: 11px;
                color: white;
                padding: 0 0 10px;
            }
            .pagos_por_leon thead, .pagos_por_leon tbody, .pagos_por_leon thead th {
                display: block;
            }
            .pagos_por_leon thead th:last-child{
                border-bottom: none;
            }
            .pagos_por_leon thead {
                float: left;
            }
            .pagos_por_leon tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }
            .pagos_por_leon td, .pagos_por_leon th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 13px;
                text-overflow: ellipsis;
            }
            .pagos_por_leon thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }
            .pagos_por_leon tbody tr {
                display: table-cell;
            }
            .pagos_por_leon tbody tr:nth-child(odd) {
                background: none;
            }
            .pagos_por_leon tr:nth-child(even) {
                background: transparent;
            }
            .pagos_por_leon tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }
            .pagos_por_leon tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }
            .pagos_por_leon tbody td {
                display: block;
                text-align: center;
            }
            
           #btn{
            float:right;   
           }
            


\t</style>

\t<div id=\"encabezado\"><h4>Listado de pagos por león</h4></div>
\t<br/>
\t<br/>

\t
\t<form name=\"Listado_de_pagos\" method=\"\" action=\"\">
\t
\t<div id=\"busqueda\">
\t<label for=\"buscarpor\">Buscar por:</label>
\t<select id=\"buscar\">
\t<option value=\"Codigodeleon\">Codigo de León</option>
\t<option value=\"cedulaleon\">Cedula de León</option>
\t<option value=\"nombreleon\">Nombre de León</option>
\t</select>\t
\t
\t<input type=\"search\" id=\"bbusqueda\" placeholder=\"Buscar...\">
\t
\t
\t<button type=\"submit\" id=\"btnbusqueda\">Buscar</button>
</div>

   <div id=\"ordenar\">
\t<label for=\"ordenarrpor\">Ordenar por categoria:</label>
\t<select id=\"seleccionar\">
\t<option value=\"fiestas\">Fiestas</option>
\t<option value=\"actividades\">Actividades</option>
\t<option value=\"donaciones\">Donaciones</option>
\t</select>\t
\t\t<button type=\"submit\" id=\"btnSeleccionar\">Seleccionar pagos pendientes.</button>
</div>

<div class=\"listado_pagos\">
    <table class=\"pagos_por_leon\">
        <thead>
        <tr>
            <th>Codigo de Pago</th>
            <th>Nombre de Pago</th>
            <th>Categoria</th>
            <th>Descripción</th>
            <th>Monto</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
        </tr>
        <tr>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
        </tr>
        <tr>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
        </tr>
        <tr>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
        </tr>
        <tr>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
        </tr>
        <tr>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
        </tr>
        <tr>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
        </tr>
        <tr>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
        </tr>
        <tbody>
    </table>
</div>
<div id=\"btn\">
<button type=\"submit\" id=\"btnactualizar\">Actualizar Pagos</button>
</div>
\t</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/clubdeleonesdavid/pages/listado-de-pagos-por-leon.htm", "");
    }
}
