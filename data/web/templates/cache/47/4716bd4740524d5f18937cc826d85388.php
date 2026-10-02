<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/tab-config-customize.twig */
class __TwigTemplate_0378bcc16fa503d976e8d976ee0ae688 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"tab-pane fade\" id=\"tab-config-customize\" role=\"tabpanel\" aria-labelledby=\"tab-config-customize\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-customize\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-customize\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "customize", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "customize", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-customize\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <legend><i class=\"bi bi-file-image\"></i> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "change_logo", [], "any", false, false, false, 10), "html", null, true);
        yield "</legend><hr />
      <p class=\"text-muted\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 11), "logo_info", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
      <form class=\"form-inline\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"mb-4\">
          <label for=\"main_logo_input\" class=\"form-label\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 14), "logo_normal_label", [], "any", false, false, false, 14), "html", null, true);
        yield "</label>
          <input class=\"form-control\" id=\"main_logo_input\" type=\"file\" name=\"main_logo\" accept=\"image/gif, image/jpeg, image/pjpeg, image/x-png, image/png, image/svg+xml\">
        </div>
        <div class=\"mb-4\">
          <label for=\"main_logo_dark_input\" class=\"form-label\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 18), "logo_dark_label", [], "any", false, false, false, 18), "html", null, true);
        yield "</label>
          <input class=\"form-control\" id=\"main_logo_dark_input\" type=\"file\" name=\"main_logo_dark\" accept=\"image/gif, image/jpeg, image/pjpeg, image/x-png, image/png, image/svg+xml\">
        </div>

        <button name=\"submit_main_logo\" type=\"submit\" class=\"btn btn-sm d-block d-sm-inline btn-secondary\"><i class=\"bi bi-upload\"></i> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 22), "upload", [], "any", false, false, false, 22), "html", null, true);
        yield "</button>
      </form>
      ";
        // line 24
        if ((($context["logo"] ?? null) || ($context["logo_dark"] ?? null))) {
            // line 25
            yield "        <div class=\"row mt-4\">
          <div class=\"col-sm-4\">
            ";
            // line 27
            if (($context["logo"] ?? null)) {
                // line 28
                yield "              ";
                yield from                 $this->loadTemplate("admin/customize/logo.twig", "admin/tab-config-customize.twig", 28)->unwrap()->yield($context);
                // line 29
                yield "            ";
            }
            // line 30
            yield "            ";
            if (($context["logo_dark"] ?? null)) {
                // line 31
                yield "              ";
                yield from                 $this->loadTemplate("admin/customize/logo.twig", "admin/tab-config-customize.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["logo" => ($context["logo_dark"] ?? null), "logo_specs" => ($context["logo_dark_specs"] ?? null), "dark" => 1]));
                // line 32
                yield "            ";
            }
            // line 33
            yield "            <hr>
            <form class=\"form-inline\" role=\"form\" method=\"post\">
              <p><button name=\"reset_main_logo\" type=\"submit\" class=\"btn btn-sm d-block d-sm-inline btn-secondary\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 35), "reset_default", [], "any", false, false, false, 35), "html", null, true);
            yield "</button></p>
            </form>
          </div>
        </div>
      ";
        }
        // line 40
        yield "      <legend style=\"padding-top:20px\" unselectable=\"on\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 40), "ip_check", [], "any", false, false, false, 40), "html", null, true);
        yield "</legend><hr />
      <div id=\"ip_check\">
        <form class=\"form\" data-id=\"ip_check\" role=\"form\" method=\"post\">
          <div class=\"mb-4\">
            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"ip_check_opt_in\" id=\"ip_check_opt_in\" ";
        // line 44
        if ((($context["ip_check"] ?? null) == 1)) {
            yield "checked";
        }
        yield ">
            <label class=\"form-check-label\" for=\"ip_check_opt_in\">
              ";
        // line 46
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 46), "ip_check_opt_in", [], "any", false, false, false, 46);
        yield "
            </label>
          </div>
          <p><div class=\"btn-group\">
            <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"admin\" data-id=\"ip_check\" data-reload=\"no\" data-api-url='edit/ip_check' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 50), "save", [], "any", false, false, false, 50), "html", null, true);
        yield "</button>
          </div></p>
        </form>
      </div>
      <legend>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 54), "app_links", [], "any", false, false, false, 54), "html", null, true);
        yield "</legend><hr />
      <p class=\"text-muted\">";
        // line 55
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 55), "merged_vars_hint", [], "any", false, false, false, 55);
        yield "</p>
      <form class=\"form-inline\" data-id=\"app_links\" role=\"form\" method=\"post\">
        <table class=\"table table-condensed\" style=\"white-space: nowrap;\" id=\"app_link_table\">
          <tr>
            <th>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 59), "app_name", [], "any", false, false, false, 59), "html", null, true);
        yield "</th>
            <th>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 60), "link", [], "any", false, false, false, 60), "html", null, true);
        yield "</th>
            <th style=\"width:100px;\">&nbsp;</th>
          </tr>
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 64
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 65
                yield "              <tr>
                <td><input class=\"input-sm input-xs-lg form-control\" data-id=\"app_links\" type=\"text\" name=\"app\" required value=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"></td>
                <td><input class=\"input-sm input-xs-lg form-control\" data-id=\"app_links\" type=\"text\" name=\"href\" required value=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\"></td>
                <td><a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-lg btn-secondary h-100 w-100\" type=\"button\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 68), "remove_row", [], "any", false, false, false, 68), "html", null, true);
                yield "</a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 73
            yield "            <tr>
              <td><input class=\"input-sm input-xs-lg form-control\" value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 74), "html", null, true);
            yield "\" disabled></td>
              <td><input class=\"input-sm input-xs-lg form-control\" value=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 75), "html", null, true);
            yield "\" disabled></td>
              <td><a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-lg btn-secondary h-100 w-100 disabled\" type=\"button\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 76), "remove_row", [], "any", false, false, false, 76), "html", null, true);
            yield "</a></td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </table>
        <p><div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"admin\" data-id=\"app_links\" data-reload=\"no\" data-api-url='edit/app_links' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 81), "save", [], "any", false, false, false, 81), "html", null, true);
        yield "</button>
          <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" type=\"button\" id=\"add_app_link_row\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 82), "add_row", [], "any", false, false, false, 82), "html", null, true);
        yield "</button>
        </div></p>
      </form>
      <legend data-bs-target=\"#ui_texts\" style=\"padding-top:20px\" unselectable=\"on\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 85), "ui_texts", [], "any", false, false, false, 85), "html", null, true);
        yield "</legend><hr />
      <div id=\"ui_texts\">
        <form class=\"form\" data-id=\"uitexts\" role=\"form\" method=\"post\">
          <div class=\"mb-2\">
            <label for=\"uitests_title_name\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 89), "title_name", [], "any", false, false, false, 89), "html", null, true);
        yield ":</label>
            <input type=\"text\" class=\"form-control\" id=\"uitests_title_name\" name=\"title_name\" placeholder=\"mailcow UI\" value=\"";
        // line 90
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 90);
        yield "\">
          </div>
          <div class=\"mb-2\">
            <label for=\"uitests_main_name\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 93), "main_name", [], "any", false, false, false, 93), "html", null, true);
        yield ":</label>
            <input type=\"text\" class=\"form-control\" id=\"uitests_main_name\" name=\"main_name\" placeholder=\"mailcow UI\" value=\"";
        // line 94
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 94);
        yield "\">
          </div>
          <div class=\"mb-2\">
            <label for=\"uitests_apps_name\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 97), "apps_name", [], "any", false, false, false, 97), "html", null, true);
        yield ":</label>
            <input type=\"text\" class=\"form-control\" id=\"uitests_apps_name\" name=\"apps_name\" placeholder=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 98), "apps", [], "any", false, false, false, 98), "html", null, true);
        yield "\" value=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 98);
        yield "\">
          </div>
          <div class=\"mb-4\">
            <label for=\"help_text\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 101), "help_text", [], "any", false, false, false, 101), "html", null, true);
        yield ":</label>
            <textarea class=\"form-control\" id=\"help_text\" name=\"help_text\" rows=\"7\">";
        // line 102
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 102);
        yield "</textarea>
          </div>
          <hr>
          <div>
            <p class=\"text-muted\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 106), "ui_header_announcement_help", [], "any", false, false, false, 106), "html", null, true);
        yield "</p>
            <label for=\"ui_announcement_type\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 107), "ui_header_announcement", [], "any", false, false, false, 107), "html", null, true);
        yield ":</label>
            <div class=\"row\">
              <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                <p><select multiple data-width=\"100%\" id=\"ui_announcement_type\" name=\"ui_announcement_type\" class=\"selectpicker show-tick\" data-max-options=\"1\" title=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 110), "ui_header_announcement_select", [], "any", false, false, false, 110), "html", null, true);
        yield "\">
                    <option ";
        // line 111
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 111) == "info")) {
            yield "selected";
        }
        yield " value=\"info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 111), "ui_header_announcement_type_info", [], "any", false, false, false, 111), "html", null, true);
        yield "</option>
                    <option ";
        // line 112
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 112) == "warning")) {
            yield "selected";
        }
        yield " value=\"warning\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 112), "ui_header_announcement_type_warning", [], "any", false, false, false, 112), "html", null, true);
        yield "</option>
                    <option ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 113) == "danger")) {
            yield "selected";
        }
        yield " value=\"danger\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 113), "ui_header_announcement_type_danger", [], "any", false, false, false, 113), "html", null, true);
        yield "</option>
                  </select></p>
              </div>
            </div>
            <p><textarea class=\"form-control\" id=\"ui_announcement_text\" name=\"ui_announcement_text\" rows=\"7\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 117), "html", null, true);
        yield "</textarea></p>
            <div class=\"form-check\">
              <label>
                <input type=\"checkbox\" name=\"ui_announcement_active\" class=\"form-check-input\" ";
        // line 120
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 120) == 1)) {
            yield "checked";
        }
        yield "> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 120), "ui_header_announcement_active", [], "any", false, false, false, 120), "html", null, true);
        yield "
              </label>
            </div>
          </div>
          <hr>
          <div class=\"mb-4\">
            <label for=\"ui_footer\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 126), "ui_footer", [], "any", false, false, false, 126), "html", null, true);
        yield ":</label>
            <textarea class=\"form-control\" id=\"ui_footer\" name=\"ui_footer\" rows=\"7\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 127), "html", null, true);
        yield "</textarea>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"ui\" data-id=\"uitexts\" data-api-url='edit/ui_texts' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 129), "save", [], "any", false, false, false, 129), "html", null, true);
        yield "</button>
        </form>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/tab-config-customize.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  366 => 129,  361 => 127,  357 => 126,  344 => 120,  338 => 117,  327 => 113,  319 => 112,  311 => 111,  307 => 110,  301 => 107,  297 => 106,  290 => 102,  286 => 101,  278 => 98,  274 => 97,  268 => 94,  264 => 93,  258 => 90,  254 => 89,  247 => 85,  241 => 82,  237 => 81,  233 => 79,  224 => 76,  220 => 75,  216 => 74,  213 => 73,  208 => 72,  202 => 71,  193 => 68,  189 => 67,  185 => 66,  182 => 65,  177 => 64,  173 => 63,  167 => 60,  163 => 59,  156 => 55,  152 => 54,  145 => 50,  138 => 46,  131 => 44,  123 => 40,  115 => 35,  111 => 33,  108 => 32,  105 => 31,  102 => 30,  99 => 29,  96 => 28,  94 => 27,  90 => 25,  88 => 24,  83 => 22,  76 => 18,  69 => 14,  63 => 11,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-customize.twig", "/web/templates/admin/tab-config-customize.twig");
    }
}
