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

/* user/tab-user-auth.twig */
class __TwigTemplate_a4cd3d723e52c828198fdd115093f5a5 extends Template
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
        yield "<div class=\"tab-pane fade in active show\" id=\"tab-user-auth\" role=\"tabpanel\" aria-labelledby=\"tab-user-auth\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-user-auth\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-user-auth\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 5), "mailbox_general", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 7), "mailbox_general", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-user-auth\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 10), "force_pw_update", [], "any", false, false, false, 10) == "1")) {
            // line 11
            yield "          <div class=\"alert alert-danger\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 11), "force_pw_update", [], "any", false, false, false, 11);
            yield "</div>
      ";
        }
        // line 13
        yield "      ";
        if ( !($context["skip_sogo"] ?? null)) {
            // line 14
            yield "      <div class=\"row\">
        <div class=\"hidden-xs col-md-3 col-xs-5 text-right\"></div>
        <div class=\"col-md-3 col-xs-12\">
          ";
            // line 17
            if (((($context["dual_login"] ?? null) && (($context["allow_admin_email_login"] ?? null) == "n")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 17), "force_pw_update", [], "any", false, false, false, 17) == "1"))) {
                // line 18
                yield "            <button disabled class=\"btn btn-secondary btn-block btn-xs-lg\">
              <i class=\"bi bi-inbox-fill\"></i> ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 19), "open_webmail_sso", [], "any", false, false, false, 19), "html", null, true);
                yield "
            </button>
          ";
            } else {
                // line 22
                yield "            <a target=\"_blank\" href=\"/sogo-auth.php?login=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-secondary btn-block btn-xs-lg\">
              <i class=\"bi bi-inbox-fill\"></i> ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 23), "open_webmail_sso", [], "any", false, false, false, 23), "html", null, true);
                yield "
            </a>
          ";
            }
            // line 26
            yield "        </div>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"d-none d-sm-flex col-md-3 col-5 text-end\"></div>
        <div class=\"col-md-9 col-12\">
          <p class=\"text-muted text-muted-mt-0\">";
            // line 32
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 32), "direct_protocol_access", [], "any", false, false, false, 32);
            yield "</p>
          ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 33), "imap_access", [], "any", false, false, false, 33) == 1)) {
                yield "<div class=\"badge fs-6 bg-success mb-2\">IMAP <i class=\"bi bi-check-lg\"></i></div>";
            } else {
                yield "<div class=\"badge fs-6 bg-danger\">IMAP <i class=\"bi bi-x-lg\"></i></div>";
            }
            // line 34
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 34), "smtp_access", [], "any", false, false, false, 34) == 1)) {
                yield "<div class=\"badge fs-6 bg-success mb-2\">SMTP <i class=\"bi bi-check-lg\"></i></div>";
            } else {
                yield "<div class=\"badge fs-6 bg-danger\">SMTP <i class=\"bi bi-x-lg\"></i></div>";
            }
            // line 35
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 35), "sieve_access", [], "any", false, false, false, 35) == 1)) {
                yield "<div class=\"badge fs-6 bg-success mb-2\">Sieve <i class=\"bi bi-check-lg\"></i></div>";
            } else {
                yield "<div class=\"badge fs-6 bg-danger\">Sieve <i class=\"bi bi-x-lg\"></i></div>";
            }
            // line 36
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 36), "pop3_access", [], "any", false, false, false, 36) == 1)) {
                yield "<div class=\"badge fs-6 bg-success mb-2\">POP3 <i class=\"bi bi-check-lg\"></i></div>";
            } else {
                yield "<div class=\"badge fs-6 bg-danger\">POP3 <i class=\"bi bi-x-lg\"></i></div>";
            }
            // line 37
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 37), "sogo_access", [], "any", false, false, false, 37) == 1)) {
                yield "<div class=\"badge fs-6 bg-success mb-2\">SOGo <i class=\"bi bi-check-lg\"></i></div>";
            } else {
                yield "<div class=\"badge fs-6 bg-danger\">SOGo <i class=\"bi bi-x-lg\"></i></div>";
            }
            // line 38
            yield "        </div>
      </div>
      <hr>
      ";
        }
        // line 42
        yield "      <div class=\"row\">
        <div class=\"col-md-3 col-12 text-sm-end text-start mb-4\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 43), "in_use", [], "any", false, false, false, 43), "html", null, true);
        yield ":</div>
        <div class=\"col-md-5 col-12\">
          <div class=\"progress\">
            <div class=\"progress-bar bg-";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_class", [], "any", false, false, false, 46), "html", null, true);
        yield "\" role=\"progressbar\" aria-valuenow=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_in_use", [], "any", false, false, false, 46), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width:2em;width: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_in_use", [], "any", false, false, false, 46), "html", null, true);
        yield "%;\">
              ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_in_use", [], "any", false, false, false, 47), "html", null, true);
        yield "%
            </div>
          </div>
          <p>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(formatBytes(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "quota_used", [], "any", false, false, false, 50), 2), "html", null, true);
        yield " / ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "quota", [], "any", false, false, false, 50) == 0)) {
            yield "∞";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(formatBytes(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "quota", [], "any", false, false, false, 50), 2), "html", null, true);
        }
        yield "<br>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "messages", [], "any", false, false, false, 50), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 50), "messages", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
          <hr>
          <p><a href=\"#pwChangeModal\" data-bs-toggle=\"modal\"><i class=\"bi bi-pencil-fill\"></i> ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 52), "change_password", [], "any", false, false, false, 52), "html", null, true);
        yield "</a></p>
          ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "pw_reset", [], "any", false, false, false, 53) == 1)) {
            yield "<p><a href=\"#pwRecoveryEmailModal\" data-bs-toggle=\"modal\"><i class=\"bi bi-pencil-fill\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 53), "pw_recovery_email", [], "any", false, false, false, 53), "html", null, true);
            yield "</a></p>";
        }
        // line 54
        yield "        </div>
      </div>
      <hr>
      ";
        // line 58
        yield "      <div class=\"row\">
        <div class=\"col-sm-3 col-xs-5 text-right\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 59), "tfa", [], "any", false, false, false, 59), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-xs-7\">
          <p id=\"tfa_pretty\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tfa_data"] ?? null), "pretty", [], "any", false, false, false, 61), "html", null, true);
        yield "</p>
          ";
        // line 62
        yield from         $this->loadTemplate("tfa_keys.twig", "user/tab-user-auth.twig", 62)->unwrap()->yield($context);
        // line 63
        yield "          <br>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-3 col-xs-5 text-right\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 67), "set_tfa", [], "any", false, false, false, 67), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-xs-7\">
          <select data-style=\"btn btn-sm dropdown-toggle bs-placeholder btn-secondary\" data-width=\"fit\" id=\"selectTFA\" class=\"selectpicker\" title=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 69), "select", [], "any", false, false, false, 69), "html", null, true);
        yield "\">
            <option value=\"yubi_otp\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 70), "yubi_otp", [], "any", false, false, false, 70), "html", null, true);
        yield "</option>
            <option value=\"webauthn\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 71), "webauthn", [], "any", false, false, false, 71), "html", null, true);
        yield "</option>
            <option value=\"totp\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 72), "totp", [], "any", false, false, false, 72), "html", null, true);
        yield "</option>
            <option value=\"none\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 73), "none", [], "any", false, false, false, 73), "html", null, true);
        yield "</option>
          </select>
        </div>
      </div>
      <hr>
      ";
        // line 79
        yield "      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start\">
          <p><i class=\"bi bi-shield-fill-check\"></i> ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 81), "fido2_auth", [], "any", false, false, false, 81), "html", null, true);
        yield "</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start mb-4\">
          ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 86), "known_ids", [], "any", false, false, false, 86), "html", null, true);
        yield ":
        </div>
        <div class=\"col-sm-9 col-12\">
          <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover table-condensed\" id=\"fido2_keys\">
              <tr>
                <th>ID</th>
                <th style=\"min-width:240px;text-align: right\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 93), "action", [], "any", false, false, false, 93), "html", null, true);
        yield "</th>
              </tr>
              ";
        // line 95
        yield from         $this->loadTemplate("fido2.twig", "user/tab-user-auth.twig", 95)->unwrap()->yield($context);
        // line 96
        yield "            </table>
          </div>
          <br>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"offset-sm-3 col-sm-9\">
          <div class=\"btn-group nowrap\">
            <button class=\"btn btn-sm btn-primary d-block d-sm-inline\" id=\"register-fido2\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 104), "set_fido2", [], "any", false, false, false, 104), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-lg btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" href=\"#\" id=\"register-fido2-touchid\"><i class=\"bi bi-apple\"></i> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 107), "set_fido2_touchid", [], "any", false, false, false, 107), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
        </div>
      </div>
      <br>
      <div class=\"row\" id=\"status-fido2\">
        <div class=\"col-sm-3 col-5 text-end\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 114), "register_status", [], "any", false, false, false, 114), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-7\">
          <div id=\"fido2-alerts\">-</div>
        </div>
        <br>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"col-md-3 col-12 text-sm-end text-start mb-4\"><i class=\"bi bi-file-earmark-text\"></i> ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 122), "apple_connection_profile", [], "any", false, false, false, 122), "html", null, true);
        yield ":</div>
        <div class=\"col-md-9 col-12\">
          <p><i class=\"bi bi-file-earmark-post\"></i> <a href=\"/mobileconfig.php?only_email\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 124), "email", [], "any", false, false, false, 124), "html", null, true);
        yield "</a> <small>IMAP, SMTP</small></p>
          <p class=\"text-muted\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 125), "apple_connection_profile_mailonly", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
          ";
        // line 126
        if ( !($context["skip_sogo"] ?? null)) {
            // line 127
            yield "          <p><i class=\"bi bi-file-earmark-post\"></i> <a href=\"/mobileconfig.php\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 127), "email_and_dav", [], "any", false, false, false, 127), "html", null, true);
            yield "</a> <small>IMAP, SMTP, Cal/CardDAV</small></p>
          <p class=\"text-muted\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 128), "apple_connection_profile_complete", [], "any", false, false, false, 128), "html", null, true);
            yield "</p>
          ";
        }
        // line 130
        yield "        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-3 col-12 text-sm-end text-start mb-4\"><i class=\"bi bi-file-earmark-text\"></i> ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 133), "apple_connection_profile", [], "any", false, false, false, 133), "html", null, true);
        yield "<br class=\"d-none d-lg-block\" />";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 133), "with_app_password", [], "any", false, false, false, 133), "html", null, true);
        yield ":</div>
        <div class=\"col-md-9 col-12\">
          <p><i class=\"bi bi-file-earmark-post\"></i> <a href=\"/mobileconfig.php?only_email&amp;app_password\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 135), "email", [], "any", false, false, false, 135), "html", null, true);
        yield "</a> <small>IMAP, SMTP</small></p>
          <p class=\"text-muted\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 136), "apple_connection_profile_mailonly", [], "any", false, false, false, 136), "html", null, true);
        yield "<br /> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 136), "apple_connection_profile_with_app_password", [], "any", false, false, false, 136), "html", null, true);
        yield "</p>
          ";
        // line 137
        if ( !($context["skip_sogo"] ?? null)) {
            // line 138
            yield "          <p><i class=\"bi bi-file-earmark-post\"></i> <a href=\"/mobileconfig.php?app_password\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 138), "email_and_dav", [], "any", false, false, false, 138), "html", null, true);
            yield "</a> <small>IMAP, SMTP, Cal/CardDAV</small></p>
          <p class=\"text-muted\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 139), "apple_connection_profile_complete", [], "any", false, false, false, 139), "html", null, true);
            yield "<br /> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 139), "apple_connection_profile_with_app_password", [], "any", false, false, false, 139), "html", null, true);
            yield "</p>
          ";
        }
        // line 141
        yield "        </div>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"offset-sm-3 col-sm-9\">
          <p><a target=\"_blank\" href=\"https://docs.mailcow.email/client/client/#";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["clientconfigstr"] ?? null), "html", null, true);
        yield "\">[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 146), "client_configuration", [], "any", false, false, false, 146), "html", null, true);
        yield "]</a></p>
          <p><a href=\"#userFilterModal\" data-bs-toggle=\"modal\">[";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 147), "show_sieve_filters", [], "any", false, false, false, 147), "html", null, true);
        yield "]</a></p>
          <hr>
          <h4 class=\"recent-login-success\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 149), "recent_successful_connections", [], "any", false, false, false, 149), "html", null, true);
        yield "</h4>
          <div class=\"dropdown mt-2\">
            <button class=\"btn btn-secondary btn-xs btn-xs-lg dropdown-toggle\" type=\"button\" id=\"history_sasl_days\" data-bs-toggle=\"dropdown\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 151), "login_history", [], "any", false, false, false, 151), "html", null, true);
        yield "</button>
            <ul class=\"dropdown-menu\">
              <li class=\"login-history\" data-days=\"1\"><a class=\"dropdown-item\" href=\"#\">1 ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 153), "day", [], "any", false, false, false, 153), "html", null, true);
        yield "</a></li>
              <li class=\"login-history\" data-days=\"7\"><a class=\"dropdown-item active\" href=\"#\">1 ";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 154), "week", [], "any", false, false, false, 154), "html", null, true);
        yield "</a></li>
              <li class=\"login-history\" data-days=\"14\"><a class=\"dropdown-item\" href=\"#\">2 ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 155), "weeks", [], "any", false, false, false, 155), "html", null, true);
        yield "</a></li>
              <li class=\"login-history\" data-days=\"31\"><a class=\"dropdown-item\" href=\"#\">1 ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 156), "month", [], "any", false, false, false, 156), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"last-login mt-4\" id=\"recent-logins\"></div>
          <span class=\"clear-last-logins mt-2\">
            ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 161), "clear_recent_successful_connections", [], "any", false, false, false, 161), "html", null, true);
        yield "
          </span>
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
        return "user/tab-user-auth.twig";
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
        return array (  426 => 161,  418 => 156,  414 => 155,  410 => 154,  406 => 153,  401 => 151,  396 => 149,  391 => 147,  385 => 146,  378 => 141,  371 => 139,  366 => 138,  364 => 137,  358 => 136,  354 => 135,  347 => 133,  342 => 130,  337 => 128,  332 => 127,  330 => 126,  326 => 125,  322 => 124,  317 => 122,  306 => 114,  296 => 107,  290 => 104,  280 => 96,  278 => 95,  273 => 93,  263 => 86,  255 => 81,  251 => 79,  243 => 73,  239 => 72,  235 => 71,  231 => 70,  227 => 69,  222 => 67,  216 => 63,  214 => 62,  210 => 61,  205 => 59,  202 => 58,  197 => 54,  191 => 53,  187 => 52,  172 => 50,  166 => 47,  158 => 46,  152 => 43,  149 => 42,  143 => 38,  136 => 37,  129 => 36,  122 => 35,  115 => 34,  109 => 33,  105 => 32,  97 => 26,  91 => 23,  86 => 22,  80 => 19,  77 => 18,  75 => 17,  70 => 14,  67 => 13,  61 => 11,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/tab-user-auth.twig", "/web/templates/user/tab-user-auth.twig");
    }
}
