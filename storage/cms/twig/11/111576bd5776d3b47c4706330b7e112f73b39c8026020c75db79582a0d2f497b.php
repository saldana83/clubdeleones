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

/* C:\xampp\htdocs\clubdeleones/plugins/grofgraf/contactme/components/contactform/default.htm */
class __TwigTemplate_c26645cdcf6acbbc18706adca3abe20a625580460ffca07d26c5419631ff7bdc extends \Twig\Template
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
        echo "<div class=\"confirm-contact-container\">
</div>
<form id=\"contact-form\"
  data-request=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onMailSend\"
  data-request-update=\"'";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-contact-container'\"
  ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableFileUpload", [], "any", false, false, false, 6)) {
            // line 7
            echo "  data-request-files
  ";
        }
        // line 9
        echo "  >
  <div class=\"form-group\">
    <label for=\"name\">
      ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "
    </label>
    <input type=\"text\" name=\"name\" class=\"form-control\">
  </div>
  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enablePhoneNumber", [], "any", false, false, false, 16)) {
            // line 17
            echo "    <div class=\"form-group\">
      <label for=\"phone_number\">
        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "phone_number", [], "any", false, false, false, 19), "html", null, true);
            echo "
      </label>
      <input type=\"text\" name=\"phone_number\" class=\"form-control\">
    </div>
  ";
        }
        // line 24
        echo "  <div class=\"form-group\">
    <label for=\"email\">
      ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "
    </label>
    <input type=\"text\" name=\"email\" class=\"form-control\">
  </div>
  ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableSubject", [], "any", false, false, false, 30)) {
            // line 31
            echo "    <div class=\"form-group\">
      <label for=\"subject\">
        ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "subject", [], "any", false, false, false, 33), "html", null, true);
            echo "
      </label>
      <input type=\"text\" name=\"subject\" class=\"form-control\">
    </div>
  ";
        }
        // line 38
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableFileUpload", [], "any", false, false, false, 38)) {
            // line 39
            echo "  <div class=\"form-group\">
    <label for=\"attachment\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "attachment", [], "any", false, false, false, 40), "html", null, true);
            echo "</label>
    <input type=\"file\" name=\"attachment\" class=\"form-control\">
  </div>
  ";
        }
        // line 44
        echo "  <div class=\"form-group\">
    <label for=\"message\">
      ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "message", [], "any", false, false, false, 46), "html", null, true);
        echo "
    </label>
    <textarea rows=\"5\" name=\"message_content\" class=\"form-control\"></textarea>
  </div>
  ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableCaptcha", [], "any", false, false, false, 50)) {
            // line 51
            echo "    <div class=\"form-group\">
      <label for=\"g-recaptcha\">
        ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "captcha", [], "any", false, false, false, 53), "html", null, true);
            echo "
      </label>
      <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "captchaSiteKey", [], "any", false, false, false, 55), "html", null, true);
            echo "\"></div>
    </div>
  ";
        }
        // line 58
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "mailgunSubscribeExist", [], "any", false, false, false, 58)) {
            // line 59
            echo "    <div class=\"form-group\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "maillist", [], "any", false, false, false, 61), "html", null, true);
            echo "</label>
        <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
      </div>
    </div>
  ";
        }
        // line 66
        echo "  <button class=\"btn btn-primary btn-lg pull-right mt-4\">
    ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "button_text", [], "any", false, false, false, 67), "html", null, true);
        echo "
  </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\clubdeleones/plugins/grofgraf/contactme/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 67,  161 => 66,  153 => 61,  149 => 59,  146 => 58,  140 => 55,  135 => 53,  131 => 51,  129 => 50,  122 => 46,  118 => 44,  111 => 40,  108 => 39,  105 => 38,  97 => 33,  93 => 31,  91 => 30,  84 => 26,  80 => 24,  72 => 19,  68 => 17,  66 => 16,  59 => 12,  54 => 9,  50 => 7,  48 => 6,  44 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"confirm-contact-container\">
</div>
<form id=\"contact-form\"
  data-request=\"{{ __SELF__ }}::onMailSend\"
  data-request-update=\"'{{ __SELF__ }}::confirm': '.confirm-contact-container'\"
  {% if __SELF__.enableFileUpload %}
  data-request-files
  {% endif %}
  >
  <div class=\"form-group\">
    <label for=\"name\">
      {{label.name}}
    </label>
    <input type=\"text\" name=\"name\" class=\"form-control\">
  </div>
  {% if __SELF__.enablePhoneNumber %}
    <div class=\"form-group\">
      <label for=\"phone_number\">
        {{label.phone_number}}
      </label>
      <input type=\"text\" name=\"phone_number\" class=\"form-control\">
    </div>
  {% endif %}
  <div class=\"form-group\">
    <label for=\"email\">
      {{label.email}}
    </label>
    <input type=\"text\" name=\"email\" class=\"form-control\">
  </div>
  {% if __SELF__.enableSubject %}
    <div class=\"form-group\">
      <label for=\"subject\">
        {{label.subject}}
      </label>
      <input type=\"text\" name=\"subject\" class=\"form-control\">
    </div>
  {% endif %}
  {% if __SELF__.enableFileUpload %}
  <div class=\"form-group\">
    <label for=\"attachment\">{{label.attachment}}</label>
    <input type=\"file\" name=\"attachment\" class=\"form-control\">
  </div>
  {% endif %}
  <div class=\"form-group\">
    <label for=\"message\">
      {{label.message}}
    </label>
    <textarea rows=\"5\" name=\"message_content\" class=\"form-control\"></textarea>
  </div>
  {% if __SELF__.enableCaptcha %}
    <div class=\"form-group\">
      <label for=\"g-recaptcha\">
        {{label.captcha}}
      </label>
      <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.captchaSiteKey }}\"></div>
    </div>
  {% endif %}
  {% if __SELF__.mailgunSubscribeExist %}
    <div class=\"form-group\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>{{label.maillist}}</label>
        <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
      </div>
    </div>
  {% endif %}
  <button class=\"btn btn-primary btn-lg pull-right mt-4\">
    {{label.button_text}}
  </button>
</form>
", "C:\\xampp\\htdocs\\clubdeleones/plugins/grofgraf/contactme/components/contactform/default.htm", "");
    }
}
