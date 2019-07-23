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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/conocenos/junta-directiva.htm */
class __TwigTemplate_0a66782fc370c4b9312d73cf69ea8f421928048ccbd5661e5c1d8e8a6758d4c7 extends \Twig\Template
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
        echo "<style>
    img {
    display: block; 
    margin: 0 auto;
    max-width: 100%;
    width: 80%;
  }
</style>

<section id=\"layout-title\">
    <div class=\"container\">
        <h3 style=\"text-align: center;\">Junta Directiva</h3>
    </div>
</section>

<div class=\"container\">
        
         <center>
            
                    <img src=\"https://media.gettyimages.com/photos/dominated-the-business-world-picture-id609696404?s=612x612\" alt=\"\">
                </a>
                <div class=\"info\">
                           Nombre del Director
                            <p class=\"text-muted\">Director</p>
                        </div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        
          

    <div class=\"row our-team\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Our team</span></h4>
            <div class=\"row\">
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Founder</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Engineer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Sales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Admin Team</p>
                                                                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            
 <h4 class=\"headline\"><span>Lista de Presidentes</span></h4>

<table>
    <thead>
        <tr>
          <th></th>
          <th>Detalle 1</th>
          <th>Detalle 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <th>Nombre 1</th>
          <td>Sample Text</td>
          <td>Sample Text</td>
        </tr>
        <tr>
          <th>Nombre 2</th>
          <td>Sample Text</td>
          <td>Sample Text</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
          <th>Nombre 3</th>
          <td>Sample Text</td>
          <td>Sample Text</td>
        </tr>
        
    </tfoot>
</table>         
           
</div>
</center>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/conocenos/junta-directiva.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 63,  96 => 54,  84 => 45,  72 => 36,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    img {
    display: block; 
    margin: 0 auto;
    max-width: 100%;
    width: 80%;
  }
</style>

<section id=\"layout-title\">
    <div class=\"container\">
        <h3 style=\"text-align: center;\">Junta Directiva</h3>
    </div>
</section>

<div class=\"container\">
        
         <center>
            
                    <img src=\"https://media.gettyimages.com/photos/dominated-the-business-world-picture-id609696404?s=612x612\" alt=\"\">
                </a>
                <div class=\"info\">
                           Nombre del Director
                            <p class=\"text-muted\">Director</p>
                        </div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        
          

    <div class=\"row our-team\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Our team</span></h4>
            <div class=\"row\">
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Founder</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/sam.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Engineer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Sales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"{{ 'assets/images/team/sam.png'|theme }}\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Admin Team</p>
                                                                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            
 <h4 class=\"headline\"><span>Lista de Presidentes</span></h4>

<table>
    <thead>
        <tr>
          <th></th>
          <th>Detalle 1</th>
          <th>Detalle 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <th>Nombre 1</th>
          <td>Sample Text</td>
          <td>Sample Text</td>
        </tr>
        <tr>
          <th>Nombre 2</th>
          <td>Sample Text</td>
          <td>Sample Text</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
          <th>Nombre 3</th>
          <td>Sample Text</td>
          <td>Sample Text</td>
        </tr>
        
    </tfoot>
</table>         
           
</div>
</center>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/conocenos/junta-directiva.htm", "");
    }
}
