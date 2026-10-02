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

/* modals/mailbox.twig */
class __TwigTemplate_e8bfb87d7dcc286958080d13c55110c3 extends Template
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
        yield "<!-- add mailbox modal -->
<div class=\"modal fade\" id=\"addMailboxModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 6), "add_mailbox", [], "any", false, false, false, 6), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_mailbox\" role=\"form\" autocomplete=\"off\">
          <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
          <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
          <input type=\"hidden\" value=\"0\" name=\"protocol_access\">

          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"local_part\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 16), "mailbox_username", [], "any", false, false, false, 16), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" pattern=\"[A-Za-z0-9\\.!#\$%&'*+/=?^_`{|}~-]+\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" name=\"local_part\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 22), "domain", [], "any", false, false, false, 22), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select class=\"full-width-select\" data-live-search=\"true\" id=\"addSelectDomain\" name=\"domain\" required>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 26
            yield "                <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"name\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 32), "full_name", [], "any", false, false, false, 32), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"name\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"password\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 38), "password", [], "any", false, false, false, 38), "html", null, true);
        yield " (<a href=\"#\" class=\"generate_password\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 38), "generate", [], "any", false, false, false, 38), "html", null, true);
        yield "</a>)</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"password\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"password2\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 44), "password_repeat", [], "any", false, false, false, 44), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"password2\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 50), "template", [], "any", false, false, false, 50), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" id=\"mailbox_templates\" class=\"form-control\" title=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "template", [], "any", false, false, false, 52), "html", null, true);
        yield "\">
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 57), "tags", [], "any", false, false, false, 57), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addMailbox_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"addInputQuota\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 67), "quota_mb", [], "any", false, false, false, 67), "html", null, true);
        yield "
              <br /><span id=\"quotaBadge\" class=\"badge bg-primary\">max. - MiB</span>
            </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"quota\" min=\"0\" max=\"\" id=\"addInputQuota\" disabled value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 71), "select_domain", [], "any", false, false, false, 71), "html", null, true);
        yield "\" required>
              <small class=\"text-muted\">0 = ∞</small>
              <div class=\"badge fs-5 bg-warning addInputQuotaExhausted\" style=\"display:none;\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "warning", [], "any", false, false, false, 73), "quota_exceeded_scope", [], "any", false, false, false, 73), "html", null, true);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 77), "quarantine_notification", [], "any", false, false, false, 77), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_never\" autocomplete=\"off\" value=\"never\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_never\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 81), "never", [], "any", false, false, false, 81), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_hourly\" autocomplete=\"off\" value=\"hourly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_hourly\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 84), "hourly", [], "any", false, false, false, 84), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_daily\" autocomplete=\"off\" value=\"daily\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_daily\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 87), "daily", [], "any", false, false, false, 87), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_weekly\" autocomplete=\"off\" value=\"weekly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_weekly\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 90), "weekly", [], "any", false, false, false, 90), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 92), "quarantine_notification_info", [], "any", false, false, false, 92), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 96), "quarantine_category", [], "any", false, false, false, 96), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_reject\" autocomplete=\"off\" value=\"reject\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_category_reject\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 100), "q_reject", [], "any", false, false, false, 100), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_add_header\" autocomplete=\"off\" value=\"add_header\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_category_add_header\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 103), "q_add_header", [], "any", false, false, false, 103), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_all\" autocomplete=\"off\" value=\"all\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_category_all\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 106), "q_all", [], "any", false, false, false, 106), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 108), "quarantine_category_info", [], "any", false, false, false, 108), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"tls_enforce_in\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 112), "tls_policy", [], "any", false, false, false, 112), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_in\" id=\"tls_enforce_in\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"tls_enforce_in\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 116), "tls_enforce_in", [], "any", false, false, false, 116), "html", null, true);
        yield "</label>

                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_out\" id=\"tls_enforce_out\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"tls_enforce_out\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 119), "tls_enforce_out", [], "any", false, false, false, 119), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"protocol_access\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 124), "allowed_protocols", [], "any", false, false, false, 124), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"protocol_access\" id=\"protocol_access\" multiple class=\"form-control\">
                <option value=\"imap\">IMAP</option>
                <option value=\"pop3\">POP3</option>
                <option value=\"smtp\">SMTP</option>
                <option value=\"sieve\">Sieve</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">ACL</label>
            <div class=\"col-sm-10\">
              <select id=\"user_acl\" name=\"acl\" multiple class=\"form-control\">
                  <option value=\"spam_alias\" selected>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 138)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["spam_alias"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"tls_policy\" selected>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 139)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tls_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"spam_score\" selected>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 140)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["spam_score"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"spam_policy\" selected>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 141)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["spam_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"delimiter_action\" selected>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 142)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["delimiter_action"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"syncjobs\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 143)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["syncjobs"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"eas_reset\" selected>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 144)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["eas_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"sogo_profile_reset\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 145)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sogo_profile_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"pushover\" selected>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 146)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["pushover"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine\" selected>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 147)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["quarantine"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine_attachments\" selected>";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 148)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["quarantine_attachments"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine_notification\" selected>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 149)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["quarantine_notification"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine_category\" selected>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 150)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["quarantine_category"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"app_passwds\" selected>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 151)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["app_passwds"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"pw_reset\" selected>";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 152)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["pw_reset"] ?? null) : null), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 157), "ratelimit", [], "any", false, false, false, 157), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" id=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 160), "disabled", [], "any", false, false, false, 160), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" id=\"rl_frame\" class=\"form-control\">
                ";
        // line 162
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 162)->unwrap()->yield($context);
        // line 163
        yield "                </select>
              </div>
              <p class=\"text-muted mt-1\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 165), "mbox_rl_info", [], "any", false, false, false, 165), "html", null, true);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <select name=\"active\" id=\"mbox_active\" class=\"form-control\">
                <option value=\"1\" selected>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 171), "active", [], "any", false, false, false, 171), "html", null, true);
        yield "</option>
                <option value=\"2\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 172), "disable_login", [], "any", false, false, false, 172), "html", null, true);
        yield "</option>
                <option value=\"0\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 173), "inactive", [], "any", false, false, false, 173), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"force_pw_update\" id=\"force_pw_update\"> ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 180), "force_pw_update", [], "any", false, false, false, 180), "html", null, true);
        yield "</label>
                <small class=\"text-muted\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 181), "force_pw_update_info", [], "any", false, false, false, 181), CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 181)), "html", null, true);
        yield "</small>
              </div>
            </div>
          </div>
          ";
        // line 185
        if ( !($context["skip_sogo"] ?? null)) {
            // line 186
            yield "          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sogo_access\" id=\"sogo_access\"> ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 189), "sogo_access", [], "any", false, false, false, 189), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 190), "sogo_access_info", [], "any", false, false, false, 190), "html", null, true);
            yield "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 195
        yield "          <hr>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_mailbox\" data-api-url='add/mailbox' data-api-attr='{}' href=\"#\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 198), "add", [], "any", false, false, false, 198), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add mailbox modal -->
<!-- add mailbox template modal -->
<div class=\"modal fade\" id=\"addMailboxTemplateModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 211), "add_template", [], "any", false, false, false, 211), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-id=\"addmailbox_template\" role=\"form\" method=\"post\">
          <input type=\"hidden\" value=\"default\" name=\"sender_acl\">
          <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
          <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
          <input type=\"hidden\" value=\"0\" name=\"protocol_access\">

          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"template\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 222), "template", [], "any", false, false, false, 222), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group mb-3\">
                <input type=\"text\" name=\"template\" class=\"form-control\" aria-label=\"Text input with dropdown button\" value=\"\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 230), "tags", [], "any", false, false, false, 230), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addMailbox_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"quota\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 240), "quota_mb", [], "any", false, false, false, 240), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"quota\" style=\"width:100%\" min=\"0\" value=\"\" class=\"form-control\">
              <small class=\"text-muted\">0 = ∞</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 247), "quarantine_notification", [], "any", false, false, false, 247), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_never\" autocomplete=\"off\" value=\"never\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_never\">";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 251), "never", [], "any", false, false, false, 251), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_hourly\" autocomplete=\"off\" value=\"hourly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_hourly\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 254), "hourly", [], "any", false, false, false, 254), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_daily\" autocomplete=\"off\" value=\"daily\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_daily\">";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 257), "daily", [], "any", false, false, false, 257), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_weekly\" autocomplete=\"off\" value=\"weekly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_weekly\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 260), "weekly", [], "any", false, false, false, 260), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 262), "quarantine_notification_info", [], "any", false, false, false, 262), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 266), "quarantine_category", [], "any", false, false, false, 266), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_reject\" autocomplete=\"off\" value=\"reject\" >
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_category_reject\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 270), "q_reject", [], "any", false, false, false, 270), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_add_header\" autocomplete=\"off\" value=\"add_header\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_category_add_header\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 273), "q_add_header", [], "any", false, false, false, 273), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_all\" autocomplete=\"off\" value=\"all\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_category_all\">";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 276), "q_all", [], "any", false, false, false, 276), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 278), "quarantine_category_info", [], "any", false, false, false, 278), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"sender_acl\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 282), "tls_policy", [], "any", false, false, false, 282), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_in\" id=\"template_tls_enforce_in\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_tls_enforce_in\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 286), "tls_enforce_in", [], "any", false, false, false, 286), "html", null, true);
        yield "</label>

                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_out\" id=\"template_tls_enforce_out\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_tls_enforce_out\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 289), "tls_enforce_out", [], "any", false, false, false, 289), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"protocol_access\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 294), "allowed_protocols", [], "any", false, false, false, 294), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"protocol_access\" multiple class=\"form-control\">
                <option value=\"imap\" selected>IMAP</option>
                <option value=\"pop3\" selected>POP3</option>
                <option value=\"smtp\" selected>SMTP</option>
                <option value=\"sieve\" selected>Sieve</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">ACL</label>
            <div class=\"col-sm-10\">
              <select id=\"template_user_acl\" name=\"acl\" size=\"10\" multiple class=\"form-control\">
                <option value=\"spam_alias\" selected>";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 308)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["spam_alias"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"tls_policy\" selected>";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 309)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["tls_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"spam_score\" selected>";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 310)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["spam_score"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"spam_policy\" selected>";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 311)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["spam_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"delimiter_action\" selected>";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 312)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["delimiter_action"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"syncjobs\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 313)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["syncjobs"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"eas_reset\" selected>";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 314)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["eas_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"sogo_profile_reset\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 315)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["sogo_profile_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"pushover\" selected>";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 316)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["pushover"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine\" selected>";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 317)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["quarantine"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine_attachments\" selected>";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 318)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["quarantine_attachments"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine_notification\" selected>";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 319)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["quarantine_notification"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine_category\" selected>";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 320)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["quarantine_category"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"app_passwds\" selected>";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 321)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["app_passwds"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"pw_reset\" selected>";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 322)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["pw_reset"] ?? null) : null), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 327), "ratelimit", [], "any", false, false, false, 327), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 330), "disabled", [], "any", false, false, false, 330), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" class=\"form-control\">
                ";
        // line 332
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 332)->unwrap()->yield($context);
        // line 333
        yield "                </select>
              </div>
              <p class=\"text-muted mt-1\">";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 335), "mbox_rl_info", [], "any", false, false, false, 335), "html", null, true);
        yield "</p>
            </div>
          </div>
          <hr>
          <div class=\"row my-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <select id=\"mbox_acitve\" name=\"active\" class=\"form-control\">
                <option value=\"1\" selected>";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 342), "active", [], "any", false, false, false, 342), "html", null, true);
        yield "</option>
                <option value=\"2\">";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 343), "disable_login", [], "any", false, false, false, 343), "html", null, true);
        yield "</option>
                <option value=\"0\">";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 344), "inactive", [], "any", false, false, false, 344), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"force_pw_update\"> ";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 351), "force_pw_update", [], "any", false, false, false, 351), "html", null, true);
        yield "</label>
                <small class=\"text-muted\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 352), "force_pw_update_info", [], "any", false, false, false, 352), CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 352)), "html", null, true);
        yield "</small>
              </div>
            </div>
          </div>
          ";
        // line 356
        if ( !($context["skip_sogo"] ?? null)) {
            // line 357
            yield "          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sogo_access\"> ";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 360), "sogo_access", [], "any", false, false, false, 360), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 361), "sogo_access_info", [], "any", false, false, false, 361), "html", null, true);
            yield "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 366
        yield "          <div class=\"row my-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"addmailbox_template\" data-api-url='add/mailbox/template' data-api-attr='{}' href=\"#\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 368), "add", [], "any", false, false, false, 368), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add mailbox template modal -->
<!-- add domain modal -->
<div class=\"modal fade\" id=\"addDomainModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 381), "add_domain", [], "any", false, false, false, 381), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_domain\" role=\"form\">
          <input type=\"hidden\" value=\"0\" name=\"gal\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <input type=\"hidden\" value=\"0\" name=\"backupmx\">
          <input type=\"hidden\" value=\"0\" name=\"relay_all_recipients\">
          <input type=\"hidden\" value=\"0\" name=\"relay_unknown_only\">

          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 393), "domain", [], "any", false, false, false, 393), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" name=\"domain\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 399), "description", [], "any", false, false, false, 399), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"description\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 405), "template", [], "any", false, false, false, 405), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" id=\"domain_templates\" class=\"form-control\">
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 412), "tags", [], "any", false, false, false, 412), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addDomain_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"aliases\">";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 422), "max_aliases", [], "any", false, false, false, 422), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_max_aliases\" class=\"form-control\" name=\"aliases\" value=\"400\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"mailboxes\">";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 428), "max_mailboxes", [], "any", false, false, false, 428), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_max_mailboxes\" class=\"form-control\" name=\"mailboxes\" value=\"10\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"defquota\">";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 434), "mailbox_quota_def", [], "any", false, false, false, 434), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_mailbox_quota_def\" class=\"form-control\" name=\"defquota\" value=\"3072\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"maxquota\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 440), "mailbox_quota_m", [], "any", false, false, false, 440), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_mailbox_quota_m\" class=\"form-control\" name=\"maxquota\" value=\"10240\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"quota\">";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 446), "domain_quota_m", [], "any", false, false, false, 446), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_domain_quota_m\" class=\"form-control\" name=\"quota\" value=\"10240\" required>
            </div>
          </div>
          ";
        // line 451
        if ( !($context["skip_sogo"] ?? null)) {
            // line 452
            yield "          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_gal\" value=\"1\" name=\"gal\" checked> ";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 455), "gal", [], "any", false, false, false, 455), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 456
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 456), "gal_info", [], "any", false, false, false, 456);
            yield "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 461
        yield "          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_active\" value=\"1\" name=\"active\" checked> ";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 464), "active", [], "any", false, false, false, 464), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"rl_frame\">";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 470), "ratelimit", [], "any", false, false, false, 470), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" id=\"addDomain_rl_value\" type=\"number\" class=\"form-control\" placeholder=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 473), "disabled", [], "any", false, false, false, 473), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" id=\"addDomain_rl_frame\" class=\"form-control\">
                ";
        // line 475
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 475)->unwrap()->yield($context);
        // line 476
        yield "                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"dkim_selector\">";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 482), "dkim_domains_selector", [], "any", false, false, false, 482), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"key_size\">";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 488), "dkim_key_length", [], "any", false, false, false, 488), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-light\" class=\"form-control\" id=\"key_size\" name=\"key_size\">
                <option data-subtext=\"bits\" value=\"1024\">1024</option>
                <option data-subtext=\"bits\" value=\"2048\" selected>2048</option>
                <option data-subtext=\"bits\" value=\"3072\">3072</option>
                <option data-subtext=\"bits\" value=\"4096\">4096</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 500), "backup_mx_options", [], "any", false, false, false, 500), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_relay_domain\" value=\"1\" name=\"backupmx\"> ";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 503), "relay_domain", [], "any", false, false, false, 503), "html", null, true);
        yield "</label>
                <br>
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_relay_all\" value=\"1\" name=\"relay_all_recipients\"> ";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 505), "relay_all", [], "any", false, false, false, 505), "html", null, true);
        yield "</label>
                <p>";
        // line 506
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 506), "relay_all_info", [], "any", false, false, false, 506);
        yield "</p>
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_relay_unknown_only\" value=\"1\" name=\"relay_unknown_only\"> ";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 507), "relay_unknown_only", [], "any", false, false, false, 507), "html", null, true);
        yield "</label>
                <br>
                <p>";
        // line 509
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 509), "relay_transport_info", [], "any", false, false, false, 509);
        yield "</p>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10 btn-group\">
              ";
        // line 516
        if ( !($context["skip_sogo"] ?? null)) {
            // line 517
            yield "              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"tags\": []}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 517), "add_domain_only", [], "any", false, false, false, 517), "html", null, true);
            yield "</button>
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"restart_sogo\":\"1\", \"tags\": []}' href=\"#\">";
            // line 518
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 518), "add_domain_restart", [], "any", false, false, false, 518), "html", null, true);
            yield "</button>
              ";
        } else {
            // line 520
            yield "              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"tags\": []}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 520), "add", [], "any", false, false, false, 520), "html", null, true);
            yield "</button>
              ";
        }
        // line 522
        yield "            </div>
          </div>
          ";
        // line 525
        yield "          ";
        if ( !($context["skip_sogo"] ?? null)) {
            // line 526
            yield "          <p><i class=\"bi bi-shield-fill-exclamation text-danger\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 526), "post_domain_add", [], "any", false, false, false, 526);
            yield "</p>
          ";
        }
        // line 528
        yield "        </form>
      </div>
    </div>
  </div>
</div><!-- add domain modal -->
<!-- add domain template modal -->
<div class=\"modal fade\" id=\"addDomainTemplateModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 538), "add_template", [], "any", false, false, false, 538), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form data-id=\"adddomain_template\" class=\"form-horizontal\" role=\"form\" method=\"post\">
          ";
        // line 543
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 544
            yield "          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"template\">";
            // line 545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 545), "template", [], "any", false, false, false, 545), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group mb-3\">
                <input type=\"text\" name=\"template\" class=\"form-control\" aria-label=\"Text input with dropdown button\" value=\"\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
            // line 553
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 553), "tags", [], "any", false, false, false, 553), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_num_aliases_for_domain\">";
            // line 563
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 563), "max_aliases", [], "any", false, false, false, 563), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_num_aliases_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_num_mboxes_for_domain\">";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 569), "max_mailboxes", [], "any", false, false, false, 569), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_num_mboxes_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"def_quota_for_mbox\">";
            // line 575
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 575), "mailbox_quota_def", [], "any", false, false, false, 575), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"def_quota_for_mbox\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_quota_for_mbox\">";
            // line 581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 581), "mailbox_quota_m", [], "any", false, false, false, 581), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_quota_for_mbox\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_quota_for_domain\">";
            // line 587
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 587), "domain_quota_m", [], "any", false, false, false, 587), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_quota_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"gal\" checked> ";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 595), "gal", [], "any", false, false, false, 595), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 596
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 596), "gal_info", [], "any", false, false, false, 596);
            yield "</small>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 603), "active", [], "any", false, false, false, 603), "html", null, true);
            yield "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
            // line 609
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 609), "ratelimit", [], "any", false, false, false, 609), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" type=\"number\" value=\"\" autocomplete=\"off\" class=\"form-control mb-4\" placeholder=\"";
            // line 612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 612), "disabled", [], "any", false, false, false, 612), "html", null, true);
            yield "\">
                <select name=\"rl_frame\" class=\"form-control\">
                ";
            // line 614
            yield from             $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 614)->unwrap()->yield($context);
            // line 615
            yield "                </select>
              </div>
            </div>
          </div>
          ";
        }
        // line 620
        yield "          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"dkim_selector\">";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 622), "dkim_domains_selector", [], "any", false, false, false, 622), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"key_size\">";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 628), "dkim_key_length", [], "any", false, false, false, 628), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-light\" class=\"form-control\" id=\"key_size\" name=\"key_size\">
                <option data-subtext=\"bits\">1024</option>
                <option data-subtext=\"bits\" selected>2048</option>
                <option data-subtext=\"bits\">3072</option>
                <option data-subtext=\"bits\">4096</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 640), "backup_mx_options", [], "any", false, false, false, 640), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"backupmx\"> ";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 643), "relay_domain", [], "any", false, false, false, 643), "html", null, true);
        yield "</label>
                <br>
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"relay_all_recipients\"> ";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 645), "relay_all", [], "any", false, false, false, 645), "html", null, true);
        yield "</label>
                <p>";
        // line 646
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 646), "relay_all_info", [], "any", false, false, false, 646);
        yield "</p>
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"relay_unknown_only\"> ";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 647), "relay_unknown_only", [], "any", false, false, false, 647), "html", null, true);
        yield "</label>
                <br>
                <p>";
        // line 649
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 649), "relay_transport_info", [], "any", false, false, false, 649);
        yield "</p>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"adddomain_template\" data-item=\"";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["domain"] ?? null), "html", null, true);
        yield "\" data-api-url='add/domain/template' data-api-attr='{}' href=\"#\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 656), "add", [], "any", false, false, false, 656), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain template modal -->
<!-- add resource modal -->
<div class=\"modal fade\" id=\"addResourceModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 669), "add_resource", [], "any", false, false, false, 669), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_resource\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 675), "description", [], "any", false, false, false, 675), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"description\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 681), "domain", [], "any", false, false, false, 681), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"domain\" title=\"";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 683), "select", [], "any", false, false, false, 683), "html", null, true);
        yield "\" required>
                ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 685
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 687
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 691), "kind", [], "any", false, false, false, 691), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"kind\" title=\"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 693), "select", [], "any", false, false, false, 693), "html", null, true);
        yield "\" required>
                <option value=\"location\">Location</option>
                <option value=\"group\">Group</option>
                <option value=\"thing\">Thing</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"multiple_bookings_select\">";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 701), "multiple_bookings", [], "any", false, false, false, 701), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"multiple_bookings_select\" id=\"multiple_bookings_select\" title=\"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 703), "select", [], "any", false, false, false, 703), "html", null, true);
        yield "\" required>
                <option value=\"0\">";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 704), "booking_null", [], "any", false, false, false, 704), "html", null, true);
        yield "</option>
                <option value=\"-1\" selected>";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 705), "booking_ltnull", [], "any", false, false, false, 705), "html", null, true);
        yield "</option>
                <option value=\"custom\">";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 706), "booking_custom", [], "any", false, false, false, 706), "html", null, true);
        yield "</option>
              </select>
              <div style=\"display:none\" id=\"multiple_bookings_custom_div\">
                <hr>
                <input type=\"number\" class=\"form-control\" name=\"multiple_bookings_custom\" id=\"multiple_bookings_custom\">
              </div>
              <input type=\"hidden\" name=\"multiple_bookings\" id=\"multiple_bookings\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 718), "active", [], "any", false, false, false, 718), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_resource\" data-api-url='add/resource' data-api-attr='{}' href=\"#\">";
        // line 724
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 724), "add", [], "any", false, false, false, 724), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add resource modal -->
<!-- add alias modal -->
<div class=\"modal fade\" id=\"addAliasModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 737), "add_alias", [], "any", false, false, false, 737), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_alias\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"address\">";
        // line 744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 744), "alias_address", [], "any", false, false, false, 744), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" name=\"address\" id=\"address\" required></textarea>
              <p>";
        // line 747
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 747), "alias_address_info", [], "any", false, false, false, 747);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"goto\">";
        // line 751
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 751), "target_address", [], "any", false, false, false, 751), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea id=\"textarea_alias_goto\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" id=\"goto\" name=\"goto\" required></textarea>
              <p>";
        // line 754
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 754), "target_address_info", [], "any", false, false, false, 754);
        yield "</p>
              <div class=\"form-check\">
                <label><input class=\"form-check-input goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_null\"> ";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 756), "goto_null", [], "any", false, false, false, 756), "html", null, true);
        yield "</label>
              </div>
              <div class=\"form-check\">
                <label><input class=\"form-check-input goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_spam\"> ";
        // line 759
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 759), "goto_spam", [], "any", false, false, false, 759);
        yield "</label>
              </div>
              <div class=\"form-check\">
                <label><input class=\"form-check-input goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_ham\"> ";
        // line 762
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 762), "goto_ham", [], "any", false, false, false, 762);
        yield "</label>
              </div>
              ";
        // line 764
        if ( !($context["skip_sogo"] ?? null)) {
            // line 765
            yield "              <hr>
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sogo_visible\" checked> ";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 767), "sogo_visible", [], "any", false, false, false, 767), "html", null, true);
            yield "</label>
              </div>
              <p class=\"text-muted\">";
            // line 769
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 769), "sogo_visible_info", [], "any", false, false, false, 769), "html", null, true);
            yield "</p>
              ";
        }
        // line 771
        yield "            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 776
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 776), "active", [], "any", false, false, false, 776), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_alias\" data-api-url='add/alias' data-api-attr='{}' href=\"#\">";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 782), "add", [], "any", false, false, false, 782), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add alias modal -->
<!-- add domain alias modal -->
<div class=\"modal fade\" id=\"addAliasDomainModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 795), "add_domain_alias", [], "any", false, false, false, 795), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_alias_domain\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"alias_domain\">";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 802), "alias_domain", [], "any", false, false, false, 802), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" name=\"alias_domain\" id=\"alias_domain\" required></textarea>
              <p>";
        // line 805
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 805), "alias_domain_info", [], "any", false, false, false, 805);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"target_domain\">";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 809), "target_domain", [], "any", false, false, false, 809), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"target_domain\" title=\"";
        // line 811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 811), "select", [], "any", false, false, false, 811), "html", null, true);
        yield "\" required>
                ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 813
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 821), "active", [], "any", false, false, false, 821), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"rl_frame\">";
        // line 827
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 827), "ratelimit", [], "any", false, false, false, 827), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" type=\"number\" class=\"form-control\" placeholder=\"";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 830), "disabled", [], "any", false, false, false, 830), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" class=\"form-control\">
                ";
        // line 832
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 832)->unwrap()->yield($context);
        // line 833
        yield "                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"dkim_selector2\">";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 839), "dkim_domains_selector", [], "any", false, false, false, 839), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector2\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"key_size2\">";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 845), "dkim_key_length", [], "any", false, false, false, 845), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-light\" class=\"form-control\" id=\"key_size2\" name=\"key_size\">
                <option data-subtext=\"bits\">1024</option>
                <option data-subtext=\"bits\" selected>2048</option>
                <option data-subtext=\"bits\">3072</option>
                <option data-subtext=\"bits\">4096</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_alias_domain\" data-api-url='add/alias-domain' data-api-attr='{}' href=\"#\">";
        // line 858
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 858), "add", [], "any", false, false, false, 858), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain alias modal -->
<!-- add sync job modal -->
<div class=\"modal fade\" id=\"addSyncJobModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 871), "syncjob", [], "any", false, false, false, 871), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p class=\"text-muted\">";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 875), "syncjob_hint", [], "any", false, false, false, 875), "html", null, true);
        yield "</p>
        <form class=\"form-horizontal\" data-cached-form=\"false\" role=\"form\" data-id=\"add_syncjob\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 878
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 878), "username", [], "any", false, false, false, 878), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"username\" title=\"";
        // line 880
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 880), "select", [], "any", false, false, false, 880), "html", null, true);
        yield "\" required>
                ";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 882
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mailbox"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"host1\">";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 888), "hostname", [], "any", false, false, false, 888), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"host1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"port1\">";
        // line 894
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 894), "port", [], "any", false, false, false, 894), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"port1\" min=\"1\" max=\"65535\" value=\"143\" required>
              <small class=\"text-muted\">1-65535</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"user1\">";
        // line 901
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 901), "username", [], "any", false, false, false, 901), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"user1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"password1\">";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 907), "password", [], "any", false, false, false, 907), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"password1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"enc1\">";
        // line 913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 913), "enc_method", [], "any", false, false, false, 913), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"enc1\" title=\"";
        // line 915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 915), "select", [], "any", false, false, false, 915), "html", null, true);
        yield "\" required>
                <option value=\"SSL\" selected>SSL</option>
                <option value=\"TLS\">STARTTLS</option>
                <option value=\"PLAIN\">PLAIN</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"mins_interval\">";
        // line 923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 923), "mins_interval", [], "any", false, false, false, 923), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"mins_interval\" min=\"1\" max=\"43800\" value=\"20\" required>
              <small class=\"text-muted\">1-43800</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"subfolder2\">";
        // line 930
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 930), "subfolder2", [], "any", false, false, false, 930);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"subfolder2\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"maxage\">";
        // line 936
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 936), "maxage", [], "any", false, false, false, 936);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxage\" min=\"0\" max=\"32000\" value=\"0\">
              <small class=\"text-muted\">0-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"maxbytespersecond\">";
        // line 943
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 943), "maxbytespersecond", [], "any", false, false, false, 943);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxbytespersecond\" min=\"0\" max=\"125000000\" value=\"0\">
              <small class=\"text-muted\">0-125000000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"timeout1\">";
        // line 950
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 950), "timeout1", [], "any", false, false, false, 950), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout1\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"timeout2\">";
        // line 957
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 957), "timeout2", [], "any", false, false, false, 957), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout2\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"exclude\">";
        // line 964
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 964), "exclude", [], "any", false, false, false, 964), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"exclude\" value=\"(?i)spam|(?i)junk\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"custom_params\">";
        // line 970
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 970), "custom_params", [], "any", false, false, false, 970), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"custom_params\" placeholder=\"--some-param=xy --other-param=yx\">
              <small class=\"text-muted\">";
        // line 973
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 973), "custom_params_hint", [], "any", false, false, false, 973), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete2duplicates\" checked> ";
        // line 979
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 979), "delete2duplicates", [], "any", false, false, false, 979), "html", null, true);
        yield " (--delete2duplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete1\"> ";
        // line 986
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 986), "delete1", [], "any", false, false, false, 986), "html", null, true);
        yield " (--delete1)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete2\"> ";
        // line 993
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 993), "delete2", [], "any", false, false, false, 993), "html", null, true);
        yield " (--delete2)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"automap\" checked> ";
        // line 1000
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1000), "automap", [], "any", false, false, false, 1000), "html", null, true);
        yield " (--automap)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"skipcrossduplicates\"> ";
        // line 1007
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1007), "skipcrossduplicates", [], "any", false, false, false, 1007), "html", null, true);
        yield " (--skipcrossduplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"subscribeall\" checked> ";
        // line 1014
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1014), "subscribeall", [], "any", false, false, false, 1014), "html", null, true);
        yield " (--subscribeall)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"dry\"> ";
        // line 1021
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1021), "dry", [], "any", false, false, false, 1021), "html", null, true);
        yield " (--dry)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1028
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1028), "active", [], "any", false, false, false, 1028), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_syncjob\" data-api-url='add/syncjob' data-api-attr='{}' href=\"#\">";
        // line 1034
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1034), "add", [], "any", false, false, false, 1034), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add sync job modal -->
<!-- add add_filter modal -->
<div class=\"modal fade\" id=\"addFilterModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">Filter</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_filter\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 1053
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1053), "username", [], "any", false, false, false, 1053), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"username\" required>
                ";
        // line 1056
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 1057
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mailbox"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1059
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"filter_type\">";
        // line 1063
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1063), "sieve_type", [], "any", false, false, false, 1063), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select id=\"addFilterType\" name=\"filter_type\" required>
                <option value=\"prefilter\">Prefilter</option>
                <option value=\"postfilter\">Postfilter</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"script_desc\">";
        // line 1072
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1072), "sieve_desc", [], "any", false, false, false, 1072), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"script_desc\" name=\"script_desc\" required maxlength=\"255\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"script_data\">Script:</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code script_data\" rows=\"20\" name=\"script_data\" required></textarea>
              <p class=\"text-muted\">";
        // line 1081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1081), "activate_filter_warn", [], "any", false, false, false, 1081), "html", null, true);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1087
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1087), "active", [], "any", false, false, false, 1087), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10 add_filter_btns btn-group\">
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary validate_sieve\" href=\"#\">";
        // line 1093
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1093), "validate", [], "any", false, false, false, 1093), "html", null, true);
        yield "</button>
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-success add_sieve_script\" data-action=\"add_item\" data-id=\"add_filter\" data-api-url='add/filter' data-api-attr='{}' href=\"#\" disabled>";
        // line 1094
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1094), "add", [], "any", false, false, false, 1094), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
        ";
        // line 1098
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1098), "sieve_preset_header", [], "any", false, false, false, 1098);
        yield "
        <ul id=\"sieve_presets\"></ul>
      </div>
    </div>
  </div>
</div><!-- add add_filter modal -->
<!-- add add_bcc modal -->
<div class=\"modal fade\" id=\"addBCCModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1109), "bcc_maps", [], "any", false, false, false, 1109), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_bcc\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"local_dest\">";
        // line 1115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1115), "bcc_local_dest", [], "any", false, false, false, 1115), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select id=\"bcc-local-dest\" data-live-search=\"true\" data-size=\"20\" name=\"local_dest\" required>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"type\">";
        // line 1122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1122), "bcc_map_type", [], "any", false, false, false, 1122), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" required>
                <option value=\"sender\">";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1125), "bcc_sender_map", [], "any", false, false, false, 1125), "html", null, true);
        yield "</option>
                <option value=\"rcpt\">";
        // line 1126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1126), "bcc_rcpt_map", [], "any", false, false, false, 1126), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"bcc_dest\">";
        // line 1131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1131), "bcc_destination", [], "any", false, false, false, 1131), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"bcc_dest\">
              <small>";
        // line 1134
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1134), "bcc_dest_format", [], "any", false, false, false, 1134);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1140), "active", [], "any", false, false, false, 1140), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_bcc\" data-api-url='add/bcc' data-api-attr='{}' href=\"#\">";
        // line 1146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1146), "add", [], "any", false, false, false, 1146), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_bcc modal -->
<!-- add add_recipient_map modal -->
<div class=\"modal fade\" id=\"addRecipientMapModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1159), "recipient_maps", [], "any", false, false, false, 1159), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_recipient_map\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"recipient_map_old\">";
        // line 1165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1165), "recipient_map_old", [], "any", false, false, false, 1165), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"recipient_map_old\">
              <small>";
        // line 1168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1168), "recipient_map_old_info", [], "any", false, false, false, 1168), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"recipient_map_new\">";
        // line 1172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1172), "recipient_map_new", [], "any", false, false, false, 1172), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"recipient_map_new\">
              <small>";
        // line 1175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1175), "recipient_map_new_info", [], "any", false, false, false, 1175), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1181), "active", [], "any", false, false, false, 1181), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_recipient_map\" data-api-url='add/recipient_map' data-api-attr='{}' href=\"#\">";
        // line 1187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1187), "add", [], "any", false, false, false, 1187), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_recipient_map modal -->
<!-- add add_tls_policy_map modal -->
<div class=\"modal fade\" id=\"addTLSPolicyMapAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1200), "tls_policy_maps", [], "any", false, false, false, 1200), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_tls_policy_map\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"dest\">";
        // line 1206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1206), "tls_map_dest", [], "any", false, false, false, 1206), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"dest\">
              <small>";
        // line 1209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1209), "tls_map_dest_info", [], "any", false, false, false, 1209), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"policy\">";
        // line 1213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1213), "tls_map_policy", [], "any", false, false, false, 1213), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select class=\"full-width-select\" name=\"policy\" required>
                <option value=\"none\">none</option>
                <option value=\"may\">may</option>
                <option value=\"encrypt\">encrypt</option>
                <option value=\"dane\">dane</option>
                <option value=\"dane-only\">dane-only</option>
                <option value=\"fingerprint\">fingerprint</option>
                <option value=\"verify\">verify</option>
                <option value=\"secure\">secure</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"parameters\">";
        // line 1228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1228), "tls_map_parameters", [], "any", false, false, false, 1228), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"parameters\">
              <small>";
        // line 1231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1231), "tls_map_parameters_info", [], "any", false, false, false, 1231), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1237), "active", [], "any", false, false, false, 1237), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_tls_policy_map\" data-api-url='add/tls-policy-map' data-api-attr='{}' href=\"#\">";
        // line 1243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1243), "add", [], "any", false, false, false, 1243), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_tls_policy_map modal -->
<!-- log modal -->
<div class=\"modal fade\" id=\"syncjobLogModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"syncjobLogModalLabel\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">Log</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <textarea class=\"form-control\" rows=\"20\" id=\"logText\" spellcheck=\"false\"></textarea>
      </div>
    </div>
  </div>
</div><!-- log modal -->
<!-- DNS info modal -->
<div class=\"modal fade\" id=\"dnsInfoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"dnsInfoModalLabel\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1270), "dns_records", [], "any", false, false, false, 1270), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 1274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1274), "dns_records_24hours", [], "any", false, false, false, 1274), "html", null, true);
        yield "</p>
        <div class=\"dns-modal-body\"></div>
        <p>";
        // line 1276
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1276), "dns_records_docs", [], "any", false, false, false, 1276);
        yield "</p>
      </div>
    </div>
  </div>
</div><!-- DNS info modal -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modals/mailbox.twig";
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
        return array (  2167 => 1276,  2162 => 1274,  2155 => 1270,  2125 => 1243,  2116 => 1237,  2107 => 1231,  2101 => 1228,  2083 => 1213,  2076 => 1209,  2070 => 1206,  2061 => 1200,  2045 => 1187,  2036 => 1181,  2027 => 1175,  2021 => 1172,  2014 => 1168,  2008 => 1165,  1999 => 1159,  1983 => 1146,  1974 => 1140,  1965 => 1134,  1959 => 1131,  1951 => 1126,  1947 => 1125,  1941 => 1122,  1931 => 1115,  1922 => 1109,  1908 => 1098,  1901 => 1094,  1897 => 1093,  1888 => 1087,  1879 => 1081,  1867 => 1072,  1855 => 1063,  1849 => 1059,  1840 => 1057,  1836 => 1056,  1830 => 1053,  1808 => 1034,  1799 => 1028,  1789 => 1021,  1779 => 1014,  1769 => 1007,  1759 => 1000,  1749 => 993,  1739 => 986,  1729 => 979,  1720 => 973,  1714 => 970,  1705 => 964,  1695 => 957,  1685 => 950,  1675 => 943,  1665 => 936,  1656 => 930,  1646 => 923,  1635 => 915,  1630 => 913,  1621 => 907,  1612 => 901,  1602 => 894,  1593 => 888,  1587 => 884,  1578 => 882,  1574 => 881,  1570 => 880,  1565 => 878,  1559 => 875,  1552 => 871,  1536 => 858,  1520 => 845,  1511 => 839,  1503 => 833,  1501 => 832,  1496 => 830,  1490 => 827,  1481 => 821,  1473 => 815,  1464 => 813,  1460 => 812,  1456 => 811,  1451 => 809,  1444 => 805,  1438 => 802,  1428 => 795,  1412 => 782,  1403 => 776,  1396 => 771,  1391 => 769,  1386 => 767,  1382 => 765,  1380 => 764,  1375 => 762,  1369 => 759,  1363 => 756,  1358 => 754,  1352 => 751,  1345 => 747,  1339 => 744,  1329 => 737,  1313 => 724,  1304 => 718,  1289 => 706,  1285 => 705,  1281 => 704,  1277 => 703,  1272 => 701,  1261 => 693,  1256 => 691,  1250 => 687,  1241 => 685,  1237 => 684,  1233 => 683,  1228 => 681,  1219 => 675,  1210 => 669,  1192 => 656,  1182 => 649,  1177 => 647,  1173 => 646,  1169 => 645,  1164 => 643,  1158 => 640,  1143 => 628,  1134 => 622,  1130 => 620,  1123 => 615,  1121 => 614,  1116 => 612,  1110 => 609,  1101 => 603,  1091 => 596,  1087 => 595,  1076 => 587,  1067 => 581,  1058 => 575,  1049 => 569,  1040 => 563,  1027 => 553,  1016 => 545,  1013 => 544,  1011 => 543,  1003 => 538,  991 => 528,  985 => 526,  982 => 525,  978 => 522,  972 => 520,  967 => 518,  962 => 517,  960 => 516,  950 => 509,  945 => 507,  941 => 506,  937 => 505,  932 => 503,  926 => 500,  911 => 488,  902 => 482,  894 => 476,  892 => 475,  887 => 473,  881 => 470,  872 => 464,  867 => 461,  859 => 456,  855 => 455,  850 => 452,  848 => 451,  840 => 446,  831 => 440,  822 => 434,  813 => 428,  804 => 422,  791 => 412,  781 => 405,  772 => 399,  763 => 393,  748 => 381,  732 => 368,  728 => 366,  720 => 361,  716 => 360,  711 => 357,  709 => 356,  702 => 352,  698 => 351,  688 => 344,  684 => 343,  680 => 342,  670 => 335,  666 => 333,  664 => 332,  659 => 330,  653 => 327,  645 => 322,  641 => 321,  637 => 320,  633 => 319,  629 => 318,  625 => 317,  621 => 316,  617 => 315,  613 => 314,  609 => 313,  605 => 312,  601 => 311,  597 => 310,  593 => 309,  589 => 308,  572 => 294,  564 => 289,  558 => 286,  551 => 282,  544 => 278,  539 => 276,  533 => 273,  527 => 270,  520 => 266,  513 => 262,  508 => 260,  502 => 257,  496 => 254,  490 => 251,  483 => 247,  473 => 240,  460 => 230,  449 => 222,  435 => 211,  419 => 198,  414 => 195,  406 => 190,  402 => 189,  397 => 186,  395 => 185,  388 => 181,  384 => 180,  374 => 173,  370 => 172,  366 => 171,  357 => 165,  353 => 163,  351 => 162,  346 => 160,  340 => 157,  332 => 152,  328 => 151,  324 => 150,  320 => 149,  316 => 148,  312 => 147,  308 => 146,  304 => 145,  300 => 144,  296 => 143,  292 => 142,  288 => 141,  284 => 140,  280 => 139,  276 => 138,  259 => 124,  251 => 119,  245 => 116,  238 => 112,  231 => 108,  226 => 106,  220 => 103,  214 => 100,  207 => 96,  200 => 92,  195 => 90,  189 => 87,  183 => 84,  177 => 81,  170 => 77,  163 => 73,  158 => 71,  151 => 67,  138 => 57,  130 => 52,  125 => 50,  116 => 44,  105 => 38,  96 => 32,  90 => 28,  81 => 26,  77 => 25,  71 => 22,  62 => 16,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modals/mailbox.twig", "/web/templates/modals/mailbox.twig");
    }
}
