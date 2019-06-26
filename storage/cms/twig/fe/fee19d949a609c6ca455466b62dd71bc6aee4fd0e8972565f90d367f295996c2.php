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

/* C:\xampp\htdocs\clubdeleones/themes/responsiv-flat/pages/iniciar-sesion.htm */
class __TwigTemplate_042dbe0883b9322d618f577688a9680d8ba9828b99ca8aeab747fbc7873cf6c3 extends \Twig\Template
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
        echo "<div class=\"signin-container\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"signin\">
                    <div class=\"signin-screen\">
                        <div class=\"signin-icon\">
                            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Welcome to Flat App\" />
                            <h4>Bienvenido a <small>SICLUB 🦁</small></h4>
                        </div>

                        <div class=\"signin-form\">
                            <div class=\"form-group\">
                                <input
                                    type=\"text\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Enter your email\"
                                    id=\"signin-email\" />
                                <label class=\"signin-field-icon fui-mail\" for=\"signin-email\"></label>
                            </div>

                            <div class=\"form-group\">
                                <input
                                    type=\"password\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Password\"
                                    id=\"signin-pass\" />
                                <label class=\"signin-field-icon fui-lock\" for=\"signin-pass\"></label>
                            </div>

                            <a class=\"btn btn-primary btn-lg btn-block\" href=\"#\">Iniciar sesión</a>

                            <a class=\"signin-link\" href=\"#\">¿Perdiste tu contraseña?</a>
                            <a class=\"signin-link\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/register");
        echo "\">Crea una cuenta</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/iniciar-sesion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"signin-container\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"signin\">
                    <div class=\"signin-screen\">
                        <div class=\"signin-icon\">
                            <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"Welcome to Flat App\" />
                            <h4>Bienvenido a <small>SICLUB 🦁</small></h4>
                        </div>

                        <div class=\"signin-form\">
                            <div class=\"form-group\">
                                <input
                                    type=\"text\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Enter your email\"
                                    id=\"signin-email\" />
                                <label class=\"signin-field-icon fui-mail\" for=\"signin-email\"></label>
                            </div>

                            <div class=\"form-group\">
                                <input
                                    type=\"password\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Password\"
                                    id=\"signin-pass\" />
                                <label class=\"signin-field-icon fui-lock\" for=\"signin-pass\"></label>
                            </div>

                            <a class=\"btn btn-primary btn-lg btn-block\" href=\"#\">Iniciar sesión</a>

                            <a class=\"signin-link\" href=\"#\">¿Perdiste tu contraseña?</a>
                            <a class=\"signin-link\" href=\"{{ 'samples/register'|page }}\">Crea una cuenta</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/iniciar-sesion.htm", "");
    }
}
