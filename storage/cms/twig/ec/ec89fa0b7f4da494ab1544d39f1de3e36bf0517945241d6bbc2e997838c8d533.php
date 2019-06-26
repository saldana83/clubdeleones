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

/* C:\xampp\htdocs\clubdeleones/themes/responsiv-flat/pages/portfolio/portfolio.htm */
class __TwigTemplate_120b47678ef2762583774307bda5c2b22c653a29a4dd99c3bfd41d546d9a410b extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/isotope/jquery.isotope.js", 1 => "assets/javascript/pages/portfolio.js"]);
        // line 5
        echo "\"></script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 7
        echo "
<section id=\"layout-title\">
    <div class=\"container\">
        <h3 class=\"pull-left\">Portfolio</h3>

        <div class=\"btn-toolbar pull-right\">
            <div class=\"btn-group\" id=\"filters\">
                <a class=\"btn btn-primary active\" href=\"#filter\" class=\"selected\" data-filter=\"*\"><span class=\"fui-list\"></span> All</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".nature\"><span class=\"fui-eye\"></span> Nature</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".people\"><span class=\"fui-user\"></span> People</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".scenery\"><span class=\"fui-video\"></span> Scenery</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".world\"><span class=\"fui-photo\"></span> World</a>
            </div>
        </div>
    </div>
</section>

<div class=\"container\">

    <!-- start: Portfolio -->
    <div id=\"portfolioItems\" class=\"row\">

        <div class=\"col-md-3 portfolio-item nature people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project1.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-6 portfolio-item scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project4.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Money <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project2.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item nature scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project3.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Beach <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project1.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project2.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/portfolio/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 90,  175 => 87,  171 => 86,  161 => 79,  155 => 76,  151 => 75,  141 => 68,  135 => 65,  131 => 64,  121 => 57,  115 => 54,  111 => 53,  101 => 46,  95 => 43,  91 => 42,  81 => 35,  75 => 32,  71 => 31,  45 => 7,  43 => 1,  40 => 5,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script src=\"{{ [
        'assets/vendor/isotope/jquery.isotope.js',
        'assets/javascript/pages/portfolio.js',
    ]|theme }}\"></script>
{% endput %}

<section id=\"layout-title\">
    <div class=\"container\">
        <h3 class=\"pull-left\">Portfolio</h3>

        <div class=\"btn-toolbar pull-right\">
            <div class=\"btn-group\" id=\"filters\">
                <a class=\"btn btn-primary active\" href=\"#filter\" class=\"selected\" data-filter=\"*\"><span class=\"fui-list\"></span> All</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".nature\"><span class=\"fui-eye\"></span> Nature</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".people\"><span class=\"fui-user\"></span> People</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".scenery\"><span class=\"fui-video\"></span> Scenery</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".world\"><span class=\"fui-photo\"></span> World</a>
            </div>
        </div>
    </div>
</section>

<div class=\"container\">

    <!-- start: Portfolio -->
    <div id=\"portfolioItems\" class=\"row\">

        <div class=\"col-md-3 portfolio-item nature people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project1.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-6 portfolio-item scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project4.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Money <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project2.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item nature scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project3.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Beach <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project1.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project2.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

    </div>
</div>", "C:\\xampp\\htdocs\\clubdeleones/themes/responsiv-flat/pages/portfolio/portfolio.htm", "");
    }
}
