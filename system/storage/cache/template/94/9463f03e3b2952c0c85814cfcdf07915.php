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

/* extension/persian_language/admin/view/template/language/traditional_persian.twig */
class __TwigTemplate_d452c7979995ac92c0cc6c0885cd0817 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-language\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-language\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
            <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
              <a href=\"#tab-setting\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["tab_setting"] ?? null);
        echo "
                </a>
            </li>

              <li class=\"nav-item\">
              <a href=\"#tab-update\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_upgrade"] ?? null);
        echo "</a>
            </li>
          </ul>
           <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-setting\">
          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"checkbox\" name=\"language_traditional_persian_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 37
        if (($context["language_traditional_persian_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>

               <!--*****************Start Shamsi Date********************-->
              <div class=\"row mb-3\">
                <label for=\"input-shamsidate-format\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_shamsidate_format"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"language_traditional_persian_shamsidate_format\" id=\"input-shamsidate-format\" class=\"form-select\">
\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shamsidate_formats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 48
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["format"], "code", [], "any", false, false, false, 48) == ($context["language_traditional_persian_shamsidate_format"] ?? null))) {
                // line 49
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["format"], "code", [], "any", false, false, false, 49);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["format"], "title", [], "any", false, false, false, 49);
                echo "</option>
                    ";
            } else {
                // line 51
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["format"], "code", [], "any", false, false, false, 51);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["format"], "title", [], "any", false, false, false, 51);
                echo "</option>
\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                  </select>
\t\t\t\t  <div class=\"form-text\">";
        // line 55
        echo ($context["help_shamsidate_format"] ?? null);
        echo "</div>
                </div>
              </div>
              </div>
                                      <div class=\"tab-pane\" id=\"tab-update\">
                     <fieldset>
              <legend>";
        // line 61
        echo ($context["text_information"] ?? null);
        echo "</legend>
             <div class=\"row mb-3\">
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 65
        echo ($context["text_current_version"] ?? null);
        echo "</strong>
                  <br/>
                  <input type=\"hidden\" name=\"module_websky_faq_current_version\" value=\"";
        // line 67
        echo ($context["current_version"] ?? null);
        echo "\"/>
                  <span";
        // line 68
        if (($context["upgrade"] ?? null)) {
            echo " class=\"text-danger\"";
        }
        echo ">";
        echo ($context["current_version"] ?? null);
        echo "</span>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 74
        echo ($context["text_latest_version"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 76
        echo ($context["latest_version"] ?? null);
        echo "
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 82
        echo ($context["text_date_added"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 84
        echo ($context["date_added"] ?? null);
        echo "
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-control border rounded-start\">
            <div class=\"lead\"><strong>";
        // line 90
        echo ($context["text_change"] ?? null);
        echo "</strong>
              <br/>
              ";
        // line 92
        echo ($context["log"] ?? null);
        echo "
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 97
        echo ($context["text_status"] ?? null);
        echo "</legend>
          <div class=\"input-group input-group-lg\">
            <button type=\"button\" id=\"button-upgrade\" class=\"btn btn-warning btn-lg\"";
        // line 99
        if ( !($context["upgrade"] ?? null)) {
            echo " disabled";
        }
        echo "><i class=\"fa-solid fa-level-up-alt\"></i> ";
        echo ($context["button_upgrade"] ?? null);
        echo "</button>
            <input type=\"text\" id=\"input-upgrade\" value=\"";
        // line 100
        echo ($context["text_ready"] ?? null);
        echo "\" class=\"form-control bg-white\" readonly/>
          </div>
        </fieldset>
                </div> 
                            </div>
  

<!--*****************Ends Shamsi Date********************-->
        </form>
      </div>
    </div>
  </div>
</div>
   <script type=\"text/javascript\"><!--
   \$('#button-upgrade').on('click', function () {
    var element = this;

    \$(element).button('loading');

    \$('#progress').html('";
        // line 119
        echo twig_escape_filter($this->env, ($context["text_download"] ?? null), "js");
        echo "');

    var next = 'index.php?route=extension/persian_language/language/traditional_persian.download&user_token=";
        // line 121
        echo ($context["user_token"] ?? null);
        echo "&version=";
        echo ($context["latest_version"] ?? null);
        echo "&extension_name=persian_language';

    var upgrade = function () {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function (json) {
                \$('#input-upgrade').removeClass('is-valid is-invalid');

                if (json['error']) {
                    \$('#input-upgrade').val(json['error']);
                    \$('#input-upgrade').addClass('is-invalid');

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#input-upgrade').val(json['text']);
                }

                if (json['success']) {
                    \$('#input-upgrade').val(json['success']);
                    \$('#input-upgrade').addClass('is-valid');

                    \$(element).button('reset');
                    
                }
                
                if (json['next']) {
                    next = json['next'];

                    chain.attach(upgrade);
                    
                }
                if (!json['next']) {
                location.reload();
                }
                
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(upgrade);
});

</script>
";
        // line 172
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/persian_language/admin/view/template/language/traditional_persian.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 172,  286 => 121,  281 => 119,  259 => 100,  251 => 99,  246 => 97,  238 => 92,  233 => 90,  224 => 84,  219 => 82,  210 => 76,  205 => 74,  192 => 68,  188 => 67,  183 => 65,  176 => 61,  167 => 55,  164 => 54,  158 => 53,  150 => 51,  142 => 49,  139 => 48,  135 => 47,  129 => 44,  117 => 37,  111 => 34,  102 => 28,  94 => 23,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/persian_language/admin/view/template/language/traditional_persian.twig", "C:\\wamp64\\www\\opencart-4.0.2.3_farsi\\extension\\persian_language\\admin\\view\\template\\language\\traditional_persian.twig");
    }
}
