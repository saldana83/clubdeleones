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

/* C:\xampp\htdocs\clubdeleones/themes/christophheich-semantic-ui-octobercms/layouts/default.htm */
class __TwigTemplate_c9c61bb07ca1e4eec4ed67ef7a876d3f5a7fd3a969c1f770d5f1cd57fceba2fc extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <!-- METADATA -->
        <meta charset=\"utf-8\"/>
        <title>Website - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Name\">
        <meta name=\"keywords\" content=\"web, blog, yourname\">
        <meta name=\"type\" content=\"\">
        <meta name=\"copyright\" content=\"\">
        <meta name=\"resource-type\" content=\"\">\t
        <meta name=\"distribution\" content=\"\">
        <meta name=\"email\" content=\"\">
        <meta name=\"rating\" content=\"General\">
        <meta name=\"robots\" content=\"INDEX,FOLLOW\">
        <meta name=\"revisit\" content=\"7 Days\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\"/>
        
        <!--
        
        ===========================================================
        
          _       _______   __________________  _________   ______
         | |     / /  _/ | / /_  __/ ____/ __ \\/_  __/   | / ____/
         | | /| / // //  |/ / / / / __/ / /_/ / / / / /| |/ / __  
         | |/ |/ // // /|  / / / / /___/ _, _/ / / / ___ / /_/ /  
         |__/|__/___/_/ |_/ /_/ /_____/_/ |_| /_/ /_/  |_\\____/   
                                                                 
        
        ===========================================================
        
        # Loading, please wait...
        # Successfully loaded message!
        #  __________________________________________________________
        # |\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t|
        # |\tHi there, nice to meet you!\t\t\t\t\t\t\t\t|
        # |       \t\t\t\t\t\t\t\t\t\t\t\t\t|
        # | We at Wintertag are creating games, software            |
        # | and websites.                                           |
        # |      \t\t\t\t\t\t\t\t\t\t\t\t\t|
        # | Visit https://www.wintertag.com/ or                     |
        # | https://christophheich.me for more \t\t\t\t        |
        # | information about our services.\t\t\t\t\t\t\t|
        # |_________________________________________________________|
        #
        # Status: OK
        
        -->
        
\t\t<!-- CSS -->
        <link href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/node_modules/semantic/dist/semantic.css", 1 => "assets/css/system.css", 2 => "assets/css/theme.css"]);
        // line 59
        echo "\" rel=\"stylesheet\">
        ";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 61
        echo "\t\t
    </head>
\t<body>
\t
\t    <!-- HEADER -->
        <header id=\"layout-header\">
            ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "        </header>
        

        <!-- CONTENT -->
        <section id=\"layout-content\">
            <!-- FLEX & PUSHER -->
            <div class=\"flex pusher\">
                ";
        // line 75
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 76
        echo "            </div>
        </section>
        
        
        <!-- FOOTER -->
        <footer id=\"layout-footer\">
            ";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "        </footer>
        
        
        <!-- SCRIPTS -->
        <script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/node_modules/jquery/dist/jquery.js", 1 => "assets/vendor/node_modules/semantic/dist/semantic.js", 2 => "assets/js/system.js", 3 => "assets/js/app.js"]);
        // line 92
        echo "\"></script>
        ";
        // line 93
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 94
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 95
        echo "\t\t
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 95,  172 => 94,  157 => 93,  154 => 92,  152 => 87,  146 => 83,  142 => 82,  134 => 76,  132 => 75,  123 => 68,  119 => 67,  111 => 61,  108 => 60,  105 => 59,  103 => 55,  66 => 21,  51 => 9,  47 => 8,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <!-- METADATA -->
        <meta charset=\"utf-8\"/>
        <title>Website - {{ this.page.title }}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"description\" content=\"{{ this.page.description }}\">
        <meta name=\"author\" content=\"Name\">
        <meta name=\"keywords\" content=\"web, blog, yourname\">
        <meta name=\"type\" content=\"\">
        <meta name=\"copyright\" content=\"\">
        <meta name=\"resource-type\" content=\"\">\t
        <meta name=\"distribution\" content=\"\">
        <meta name=\"email\" content=\"\">
        <meta name=\"rating\" content=\"General\">
        <meta name=\"robots\" content=\"INDEX,FOLLOW\">
        <meta name=\"revisit\" content=\"7 Days\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\"/>
        
        <!--
        
        ===========================================================
        
          _       _______   __________________  _________   ______
         | |     / /  _/ | / /_  __/ ____/ __ \\/_  __/   | / ____/
         | | /| / // //  |/ / / / / __/ / /_/ / / / / /| |/ / __  
         | |/ |/ // // /|  / / / / /___/ _, _/ / / / ___ / /_/ /  
         |__/|__/___/_/ |_/ /_/ /_____/_/ |_| /_/ /_/  |_\\____/   
                                                                 
        
        ===========================================================
        
        # Loading, please wait...
        # Successfully loaded message!
        #  __________________________________________________________
        # |\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t|
        # |\tHi there, nice to meet you!\t\t\t\t\t\t\t\t|
        # |       \t\t\t\t\t\t\t\t\t\t\t\t\t|
        # | We at Wintertag are creating games, software            |
        # | and websites.                                           |
        # |      \t\t\t\t\t\t\t\t\t\t\t\t\t|
        # | Visit https://www.wintertag.com/ or                     |
        # | https://christophheich.me for more \t\t\t\t        |
        # | information about our services.\t\t\t\t\t\t\t|
        # |_________________________________________________________|
        #
        # Status: OK
        
        -->
        
\t\t<!-- CSS -->
        <link href=\"{{ [
            'assets/vendor/node_modules/semantic/dist/semantic.css',
            'assets/css/system.css',
            'assets/css/theme.css'
        ]|theme }}\" rel=\"stylesheet\">
        {% styles %}
\t\t
    </head>
\t<body>
\t
\t    <!-- HEADER -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>
        

        <!-- CONTENT -->
        <section id=\"layout-content\">
            <!-- FLEX & PUSHER -->
            <div class=\"flex pusher\">
                {% page %}
            </div>
        </section>
        
        
        <!-- FOOTER -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>
        
        
        <!-- SCRIPTS -->
        <script src=\"{{ [
            'assets/vendor/node_modules/jquery/dist/jquery.js',
            'assets/vendor/node_modules/semantic/dist/semantic.js',
            'assets/js/system.js',
            'assets/js/app.js'
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
\t\t
    </body>
</html>", "C:\\xampp\\htdocs\\clubdeleones/themes/christophheich-semantic-ui-octobercms/layouts/default.htm", "");
    }
}
