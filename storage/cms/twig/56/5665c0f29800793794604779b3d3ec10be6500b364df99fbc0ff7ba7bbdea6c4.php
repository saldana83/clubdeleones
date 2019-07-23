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

/* C:\xampp\htdocs\clubdeleones2/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_3eed92c76b510eab3d329ccd076c458d434d2ad527caeae9fe2e758406339d06 extends \Twig\Template
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
        echo "<form
    data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\">Correo</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Ingrese su correo\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Contraseña</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Ingrese su contraseña\" />
    </div>

    <button type=\"submit\" class=\"btn btn-sm navbar-btn btn-primary\">Iniciar Sesión</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones2/plugins/rainlab/user/components/account/signin.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form
    data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\">Correo</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Ingrese su correo\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Contraseña</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Ingrese su contraseña\" />
    </div>

    <button type=\"submit\" class=\"btn btn-sm navbar-btn btn-primary\">Iniciar Sesión</button>
</form>", "C:\\xampp\\htdocs\\clubdeleones2/plugins/rainlab/user/components/account/signin.htm", "");
    }
}
