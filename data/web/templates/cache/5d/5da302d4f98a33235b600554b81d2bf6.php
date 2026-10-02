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

/* admin/tab-config-admins.twig */
class __TwigTemplate_e9d853f7c8699bd1a16ec1bd32f198d2 extends Template
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
        yield "<div class=\"tab-pane fade show active\" id=\"tab-config-admins\" role=\"tabpanel\" aria-labelledby=\"tab-config-admins\">
  <div class=\"card mb-4\">
    <div class=\"card-header bg-danger text-white d-flex fs-5\">
      <button class=\"btn d-md-none text-white flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-admins\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-admins\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "admin_details", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "admin_details", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-admins\" class=\"card-body collapse show\" data-bs-parent=\"#admin-content\">
      <table id=\"adminstable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin mb-4\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"admins\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 13), "toggle_all", [], "any", false, false, false, 13), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 14), "quick_actions", [], "any", false, false, false, 14), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"admins\" data-api-url='edit/admin' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "activate", [], "any", false, false, false, 16), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"admins\" data-api-url='edit/admin' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "deactivate", [], "any", false, false, false, 17), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"admins\" data-api-url='edit/admin' data-api-attr='{\"disable_tfa\":\"1\"}' href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 19), "disable_tfa", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"admins\" data-api-url='delete/admin' href=\"#\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 21), "remove", [], "any", false, false, false, 21), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm d-block d-sm-inline btn-success\" data-id=\"add_admin\" data-bs-toggle=\"modal\" data-bs-target=\"#addAdminModal\" href=\"#\"><i class=\"bi bi-person-plus-fill\"></i> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 23), "add_admin", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>
        </div>
      </div>

      ";
        // line 28
        yield "      <legend style=\"margin-top:20px\">
        ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 29), "tfa", [], "any", false, false, false, 29), "html", null, true);
        yield "
      </legend>
      <hr />
      <div class=\"row\">
        <div class=\"col-sm-3 col-5 text-end\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 33), "tfa", [], "any", false, false, false, 33), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-7\">
          ";
        // line 35
        yield from         $this->loadTemplate("tfa_keys.twig", "admin/tab-config-admins.twig", 35)->unwrap()->yield($context);
        // line 36
        yield "          <br>
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-sm-3 col-5 text-end\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 40), "set_tfa", [], "any", false, false, false, 40), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-7\">
          <select data-style=\"btn btn-sm dropdown-toggle bs-placeholder btn-secondary\" data-width=\"fit\" id=\"selectTFA\" class=\"selectpicker\" title=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 42), "select", [], "any", false, false, false, 42), "html", null, true);
        yield "\">
            <option value=\"yubi_otp\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 43), "yubi_otp", [], "any", false, false, false, 43), "html", null, true);
        yield "</option>
            <option value=\"webauthn\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 44), "webauthn", [], "any", false, false, false, 44), "html", null, true);
        yield "</option>
            <option value=\"totp\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 45), "totp", [], "any", false, false, false, 45), "html", null, true);
        yield "</option>
            <option value=\"none\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 46), "none", [], "any", false, false, false, 46), "html", null, true);
        yield "</option>
          </select>
        </div>
      </div>

      ";
        // line 52
        yield "      <legend style=\"margin-top:20px\">
        <i class=\"bi bi-shield-fill-check\"></i>
        ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 54), "fido2_auth", [], "any", false, false, false, 54), "html", null, true);
        yield "</legend><hr />
      <div class=\"row mb-3\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start mb-4\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 56), "known_ids", [], "any", false, false, false, 56), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-12\">
          <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover table-condensed\" id=\"fido2_keys\">
              <tr>
                <th>ID</th>
                <th style=\"min-width:240px;text-align: right\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 62), "action", [], "any", false, false, false, 62), "html", null, true);
        yield "</th>
              </tr>
              ";
        // line 64
        yield from         $this->loadTemplate("fido2.twig", "admin/tab-config-admins.twig", 64)->unwrap()->yield($context);
        // line 65
        yield "            </table>
          </div>
        </div>
        <br>
      </div>

      <div class=\"row\">
        <div class=\"offset-sm-3 col-sm-9\">
          <div class=\"btn-group nowrap mass-actions-admin\">
            <button class=\"btn btn-sm btn-primary d-block d-sm-inline\" id=\"register-fido2\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 74), "set_fido2", [], "any", false, false, false, 74), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-lg btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" href=\"#\" id=\"register-fido2-touchid\"><i class=\"bi bi-apple\"></i> ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 77), "set_fido2_touchid", [], "any", false, false, false, 77), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"row mb-3\" id=\"status-fido2\">
        <div class=\"col-sm-3 col-5 text-end\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 84), "register_status", [], "any", false, false, false, 84), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-7\">
          <div id=\"fido2-alerts\">-</div>
        </div>
        <br>
      </div>

      <legend style=\"cursor:pointer;margin-top:20px\" data-bs-target=\"#admin_api\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> API
      </legend>
      <hr />
      <div id=\"admin_api\" class=\"collapse\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <p class=\"text-muted\">";
        // line 98
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 98), "api_info", [], "any", false, false, false, 98);
        yield "</p>
          </div>
          <div class=\"col-lg-12\">
            <div class=\"card mb-3\">
              <div class=\"card-header\">
                <h4 class=\"card-title\"><i class=\"bi bi-file-earmark-arrow-down\"></i> ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 103), "cors_settings", [], "any", false, false, false, 103), "html", null, true);
        yield "</h4>
              </div>
              <div class=\"card-body\">
                <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" data-id=\"editcors\" method=\"post\">
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-2 mb-4\" for=\"allowed_origins\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 108), "allowed_origins", [], "any", false, false, false, 108), "html", null, true);
        yield "</label>
                    <div class=\"col-sm-9 mb-4\">
                      <textarea class=\"form-control textarea-code\" rows=\"7\" name=\"allowed_origins\" id=\"allowed_origins\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cors_settings"] ?? null), "allowed_origins", [], "any", false, false, false, 110), "html", null, true);
        yield "</textarea>
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-2\" for=\"allowed_methods\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 114), "allowed_methods", [], "any", false, false, false, 114), "html", null, true);
        yield "</label>
                    <div class=\"col-sm-9\">
                      <select name=\"allowed_methods\" id=\"allowed_methods\" multiple class=\"form-control\">
                        <option value=\"POST\"";
        // line 117
        if (CoreExtension::inFilter("POST", CoreExtension::getAttribute($this->env, $this->source, ($context["cors_settings"] ?? null), "allowed_methods", [], "any", false, false, false, 117))) {
            yield " selected";
        }
        yield ">POST</option>
                        <option value=\"GET\"";
        // line 118
        if (CoreExtension::inFilter("GET", CoreExtension::getAttribute($this->env, $this->source, ($context["cors_settings"] ?? null), "allowed_methods", [], "any", false, false, false, 118))) {
            yield " selected";
        }
        yield ">GET</option>
                        <option value=\"DELETE\"";
        // line 119
        if (CoreExtension::inFilter("DELETE", CoreExtension::getAttribute($this->env, $this->source, ($context["cors_settings"] ?? null), "allowed_methods", [], "any", false, false, false, 119))) {
            yield " selected";
        }
        yield ">DELETE</option>
                        <option value=\"PUT\"";
        // line 120
        if (CoreExtension::inFilter("PUT", CoreExtension::getAttribute($this->env, $this->source, ($context["cors_settings"] ?? null), "allowed_methods", [], "any", false, false, false, 120))) {
            yield " selected";
        }
        yield ">PUT</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <div class=\"offset-sm-2 col-sm-9 d-grid d-sm-block\">
                      <button class=\"btn btn-sm btn-xs-lg btn-success\" data-item=\"cors\" data-api-url=\"edit/cors\" data-id=\"editcors\" data-action=\"edit_selected\" href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 126), "save", [], "any", false, false, false, 126), "html", null, true);
        yield "</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"card mb-3\">
              <div class=\"card-header\">
                <h4 class=\"card-title\"><i class=\"bi bi-file-earmark-arrow-down\"></i> ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 136), "api_read_only", [], "any", false, false, false, 136), "html", null, true);
        yield "</h4>
              </div>
              <div class=\"card-body\">
                <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" method=\"post\">
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\" for=\"allow_from_ro\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 141), "api_allow_from", [], "any", false, false, false, 141), "html", null, true);
        yield ":</label>
                    <div class=\"col-sm-9\">
                      <textarea class=\"form-control textarea-code\" rows=\"7\" name=\"allow_from\" id=\"allow_from_ro\" ";
        // line 143
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 143), "skip_ip_check", [], "any", false, false, false, 143)) {
            yield "disabled";
        }
        yield " required>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 143), "allow_from", [], "any", false, false, false, 143), "html", null, true);
        yield "</textarea>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" class=\"form-check-input\" name=\"skip_ip_check\" id=\"skip_ip_check_ro\" ";
        // line 149
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 149), "skip_ip_check", [], "any", false, false, false, 149)) {
            yield "checked";
        }
        yield "> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 149), "api_skip_ip_check", [], "any", false, false, false, 149), "html", null, true);
        yield "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 154), "api_key", [], "any", false, false, false, 154), "html", null, true);
        yield ":</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" value=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, true, false, 156), "api_key", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, true, false, 156), "api_key", [], "any", false, false, false, 156), "-")) : ("-")), "html", null, true);
        yield "\" readonly />
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" class=\"form-check-input\" name=\"active\" ";
        // line 162
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 162), "active", [], "any", false, false, false, 162)) {
            yield "checked";
        }
        yield "> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 162), "activate_api", [], "any", false, false, false, 162), "html", null, true);
        yield "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <div class=\"btn-group\">
                        <button class=\"btn btn-sm btn-xs-lg btn-xs-half d-block d-sm-inline btn-success\" name=\"admin_api[ro]\" type=\"submit\" href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 169), "save", [], "any", false, false, false, 169), "html", null, true);
        yield "</button>
                        <button class=\"btn btn-sm btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary admin-ays-dialog\" name=\"admin_api_regen_key[ro]\" type=\"submit\" href=\"#\" ";
        // line 170
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 170), "api_key", [], "any", false, false, false, 170)) {
            yield "disabled";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 170), "regen_api_key", [], "any", false, false, false, 170), "html", null, true);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"card mb-3\">
              <div class=\"card-header\">
                <h4 class=\"card-title\"><i class=\"bi bi-file-earmark-diff\"></i> ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 181), "api_read_write", [], "any", false, false, false, 181), "html", null, true);
        yield "</h4>
              </div>
              <div class=\"card-body\">
                <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" method=\"post\">
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\" for=\"allow_from_rw\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 186), "api_allow_from", [], "any", false, false, false, 186), "html", null, true);
        yield ":</label>
                    <div class=\"col-sm-9\">
                      <textarea class=\"form-control textarea-code\" rows=\"7\" name=\"allow_from\" id=\"allow_from_rw\" ";
        // line 188
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 188), "skip_ip_check", [], "any", false, false, false, 188)) {
            yield "disabled";
        }
        yield " required>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 188), "allow_from", [], "any", false, false, false, 188), "html", null, true);
        yield "</textarea>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" class=\"form-check-input\" name=\"skip_ip_check\" id=\"skip_ip_check_rw\" ";
        // line 194
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 194), "skip_ip_check", [], "any", false, false, false, 194)) {
            yield "checked";
        }
        yield "> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 194), "api_skip_ip_check", [], "any", false, false, false, 194), "html", null, true);
        yield "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\" for=\"admin_api_key\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 199), "api_key", [], "any", false, false, false, 199), "html", null, true);
        yield ":</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" value=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, true, false, 201), "api_key", [], "any", true, true, false, 201)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, true, false, 201), "api_key", [], "any", false, false, false, 201), "-")) : ("-")), "html", null, true);
        yield "\" readonly />
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" class=\"form-check-input\" name=\"active\" ";
        // line 207
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 207), "active", [], "any", false, false, false, 207)) {
            yield "checked";
        }
        yield "> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 207), "activate_api", [], "any", false, false, false, 207), "html", null, true);
        yield "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <div class=\"btn-group\">
                        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" name=\"admin_api[rw]\" type=\"submit\" href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 214), "save", [], "any", false, false, false, 214), "html", null, true);
        yield "</button>
                        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary admin-ays-dialog\" name=\"admin_api_regen_key[rw]\" type=\"submit\" ";
        // line 215
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 215), "api_key", [], "any", false, false, false, 215)) {
            yield "disabled";
        }
        yield " href=\"#\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 215), "regen_api_key", [], "any", false, false, false, 215), "html", null, true);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-dadmins\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-dadmins\">
        ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 231), "domain_admins", [], "any", false, false, false, 231), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 233), "domain_admins", [], "any", false, false, false, 233), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-dadmins\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <table id=\"domainadminstable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain_admins\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 239), "toggle_all", [], "any", false, false, false, 239), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 240), "quick_actions", [], "any", false, false, false, 240), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain_admins\" data-api-url='edit/domain-admin' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 242), "activate", [], "any", false, false, false, 242), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain_admins\" data-api-url='edit/domain-admin' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 243), "deactivate", [], "any", false, false, false, 243), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain_admins\" data-api-url='edit/domain-admin' data-api-attr='{\"disable_tfa\":\"1\"}' href=\"#\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 245), "disable_tfa", [], "any", false, false, false, 245), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain_admins\" data-api-url='delete/domain-admin' href=\"#\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 247), "remove", [], "any", false, false, false, 247), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm d-block d-sm-inline btn-success\" data-id=\"add_domain_admin\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainAdminModal\" href=\"#\"><i class=\"bi bi-person-plus-fill\"></i> ";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 249), "add_domain_admin", [], "any", false, false, false, 249), "html", null, true);
        yield "</a>
        </div>
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
        return "admin/tab-config-admins.twig";
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
        return array (  517 => 249,  512 => 247,  507 => 245,  502 => 243,  498 => 242,  493 => 240,  489 => 239,  480 => 233,  475 => 231,  452 => 215,  448 => 214,  434 => 207,  425 => 201,  420 => 199,  408 => 194,  395 => 188,  390 => 186,  382 => 181,  364 => 170,  360 => 169,  346 => 162,  337 => 156,  332 => 154,  320 => 149,  307 => 143,  302 => 141,  294 => 136,  281 => 126,  270 => 120,  264 => 119,  258 => 118,  252 => 117,  246 => 114,  239 => 110,  234 => 108,  226 => 103,  218 => 98,  201 => 84,  191 => 77,  185 => 74,  174 => 65,  172 => 64,  167 => 62,  158 => 56,  153 => 54,  149 => 52,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  125 => 42,  120 => 40,  114 => 36,  112 => 35,  107 => 33,  100 => 29,  97 => 28,  90 => 23,  85 => 21,  80 => 19,  75 => 17,  71 => 16,  66 => 14,  62 => 13,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-admins.twig", "/web/templates/admin/tab-config-admins.twig");
    }
}
