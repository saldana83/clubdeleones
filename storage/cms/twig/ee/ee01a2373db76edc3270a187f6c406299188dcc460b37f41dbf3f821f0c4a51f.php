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

/* C:\xampp\htdocs\clubdeleones2/themes/clubdeleonesdavid/pages/contactenos.htm */
class __TwigTemplate_7f8a066577c381160e99e9246f54f04756a894e0977ba3857d4e67223d601bc8 extends \Twig\Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3 style=\"text-align: center\">Contactenos</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-7\">
            <form role=\"form\">
                <div class=\"form-group\">
                    <label for=\"email\">Tu direccion de correo</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"name\">Tu nombre</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\">
                </div>
                <div class=\"form-group\">
                    <label for=\"message\">Tu mensaje</label>
                    <textarea class=\"form-control\" rows=\"7\" id=\"message\" placeholder=\"Enter message\" style=\"resize: none\"></textarea>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <button type=\"submit\" class=\"btn btn-lg btn-info\">Enviar Mensaje</button>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"checkbox pull-right\" for=\"checkbox1\">
                            <input type=\"checkbox\" value=\"\" id=\"checkbox1\" data-toggle=\"checkbox\">
                            Enviar una copia a mí mismo
                        </label>
                    </div>
                </div>
            </form>
            <br /><br />

        </div>

        <div class=\"col-md-5\">
            <div class=\"contact-banner\">
                <h3 class=\"banner-title\">Nuestra ubicación</h3>
                <ul>
                    <li>David, Chiriquí</li>
                    <li>Avenida 6a Oeste, David</li>
                    <li>Phone: <a href=\"tel:+5077751377\">+507 775-1377</a></li>
                    <li>Email: <a href=\"mailto:clubdeleonesdedavid@yahoo.com\">clubdeleonesdedavid@yahoo.com</a></li>
                </ul>
            </div>
            ";
        // line 51
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 52
        echo "        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/contactenos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 52,  87 => 51,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3 style=\"text-align: center\">Contactenos</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-7\">
            <form role=\"form\">
                <div class=\"form-group\">
                    <label for=\"email\">Tu direccion de correo</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"name\">Tu nombre</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\">
                </div>
                <div class=\"form-group\">
                    <label for=\"message\">Tu mensaje</label>
                    <textarea class=\"form-control\" rows=\"7\" id=\"message\" placeholder=\"Enter message\" style=\"resize: none\"></textarea>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <button type=\"submit\" class=\"btn btn-lg btn-info\">Enviar Mensaje</button>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"checkbox pull-right\" for=\"checkbox1\">
                            <input type=\"checkbox\" value=\"\" id=\"checkbox1\" data-toggle=\"checkbox\">
                            Enviar una copia a mí mismo
                        </label>
                    </div>
                </div>
            </form>
            <br /><br />

        </div>

        <div class=\"col-md-5\">
            <div class=\"contact-banner\">
                <h3 class=\"banner-title\">Nuestra ubicación</h3>
                <ul>
                    <li>David, Chiriquí</li>
                    <li>Avenida 6a Oeste, David</li>
                    <li>Phone: <a href=\"tel:+5077751377\">+507 775-1377</a></li>
                    <li>Email: <a href=\"mailto:clubdeleonesdedavid@yahoo.com\">clubdeleonesdedavid@yahoo.com</a></li>
                </ul>
            </div>
            {% component 'googleMap' %}
        </div>

    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones2/themes/clubdeleonesdavid/pages/contactenos.htm", "");
    }
}
