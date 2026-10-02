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

/* mailbox/tab-mailboxes.twig */
class __TwigTemplate_956f1b56510d07b5dc0dffe8240db74a extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-mailboxes\" role=\"tabpanel\" aria-labelledby=\"tab-mailboxes\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mailboxes\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mailboxes\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "mailboxes", [], "any", false, false, false, 5), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "mailboxes", [], "any", false, false, false, 7), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_mailbox_table\" data-table=\"mailbox_table\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
      </div>
    </div>
    <div id=\"collapse-tab-mailboxes\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4 d-none d-sm-block\">
        <div class=\"btn-group d-flex d-lg-none\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 19), "expand_all", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 20), "collapse_all", [], "any", false, false, false, 20), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "mailbox", [], "any", false, false, false, 22), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 23), "activate", [], "any", false, false, false, 23), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 24), "deactivate", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 25), "remove", [], "any", false, false, false, 25), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 27), "tls_enforce_in", [], "any", false, false, false, 27), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 28), "activate", [], "any", false, false, false, 28), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 29), "deactivate", [], "any", false, false, false, 29), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 31), "tls_enforce_out", [], "any", false, false, false, 31), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 32), "activate", [], "any", false, false, false, 32), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 33), "deactivate", [], "any", false, false, false, 33), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "quarantine_notification", [], "any", false, false, false, 35), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 36), "hourly", [], "any", false, false, false, 36), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 37), "daily", [], "any", false, false, false, 37), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 38), "weekly", [], "any", false, false, false, 38), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 39), "never", [], "any", false, false, false, 39), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 41), "q_reject", [], "any", false, false, false, 41), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 42), "q_add_header", [], "any", false, false, false, 42), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 43), "q_all", [], "any", false, false, false, 43), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "allowed_protocols", [], "any", false, false, false, 45), "html", null, true);
        yield "</li>
            <li class=\"dropdown-header\">IMAP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 47), "activate", [], "any", false, false, false, 47), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 48), "deactivate", [], "any", false, false, false, 48), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">POP3</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 51), "activate", [], "any", false, false, false, 51), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "deactivate", [], "any", false, false, false, 52), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">SMTP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 55), "activate", [], "any", false, false, false, 55), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 56), "deactivate", [], "any", false, false, false, 56), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">Sieve</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 59), "activate", [], "any", false, false, false, 59), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 60), "deactivate", [], "any", false, false, false, 60), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 62), "add_mailbox", [], "any", false, false, false, 62), "html", null, true);
        yield "</a>
        </div>
        <div class=\"btn-group d-none d-lg-flex\">
          <a class=\"btn btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 65), "toggle_all", [], "any", false, false, false, 65), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 66), "quick_actions", [], "any", false, false, false, 66), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 68), "expand_all", [], "any", false, false, false, 68), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 69), "collapse_all", [], "any", false, false, false, 69), "html", null, true);
        yield "</a></li>
          </ul>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 72), "mailbox", [], "any", false, false, false, 72), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 74), "activate", [], "any", false, false, false, 74), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"2\"}' href=\"#\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 75), "disable_login", [], "any", false, false, false, 75), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 76), "deactivate", [], "any", false, false, false, 76), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 78), "remove", [], "any", false, false, false, 78), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">TLS</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 84), "tls_enforce_in", [], "any", false, false, false, 84), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 85), "activate", [], "any", false, false, false, 85), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 86), "deactivate", [], "any", false, false, false, 86), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 88), "tls_enforce_out", [], "any", false, false, false, 88), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 89), "activate", [], "any", false, false, false, 89), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 90), "deactivate", [], "any", false, false, false, 90), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 94), "allowed_protocols", [], "any", false, false, false, 94), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">IMAP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 97), "activate", [], "any", false, false, false, 97), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 98), "deactivate", [], "any", false, false, false, 98), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">POP3</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 101), "activate", [], "any", false, false, false, 101), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 102), "deactivate", [], "any", false, false, false, 102), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">SMTP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 105), "activate", [], "any", false, false, false, 105), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 106), "deactivate", [], "any", false, false, false, 106), "html", null, true);
        yield "</a></li>
              <li class=\"dropdown-header\">Sieve</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 108), "activate", [], "any", false, false, false, 108), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 109), "deactivate", [], "any", false, false, false, 109), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 113), "quarantine_notification", [], "any", false, false, false, 113), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 115), "hourly", [], "any", false, false, false, 115), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 116), "daily", [], "any", false, false, false, 116), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 117), "weekly", [], "any", false, false, false, 117), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 118), "never", [], "any", false, false, false, 118), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 120), "q_reject", [], "any", false, false, false, 120), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 121), "q_add_header", [], "any", false, false, false, 121), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 122), "q_all", [], "any", false, false, false, 122), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 125), "add_mailbox", [], "any", false, false, false, 125), "html", null, true);
        yield "</a>
        </div>
      </div>
      <table id=\"mailbox_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group d-flex d-lg-none\">
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 131), "toggle_all", [], "any", false, false, false, 131), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 132), "quick_actions", [], "any", false, false, false, 132), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 134), "expand_all", [], "any", false, false, false, 134), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 135), "collapse_all", [], "any", false, false, false, 135), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 137), "mailbox", [], "any", false, false, false, 137), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 138), "activate", [], "any", false, false, false, 138), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 139), "deactivate", [], "any", false, false, false, 139), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 140), "remove", [], "any", false, false, false, 140), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 142), "tls_enforce_in", [], "any", false, false, false, 142), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 143), "activate", [], "any", false, false, false, 143), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 144), "deactivate", [], "any", false, false, false, 144), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 146), "tls_enforce_out", [], "any", false, false, false, 146), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 147), "activate", [], "any", false, false, false, 147), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 148), "deactivate", [], "any", false, false, false, 148), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 150), "quarantine_notification", [], "any", false, false, false, 150), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 151), "hourly", [], "any", false, false, false, 151), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 152), "daily", [], "any", false, false, false, 152), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 153), "weekly", [], "any", false, false, false, 153), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 154), "never", [], "any", false, false, false, 154), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 156), "q_reject", [], "any", false, false, false, 156), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 157), "q_add_header", [], "any", false, false, false, 157), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 158), "q_all", [], "any", false, false, false, 158), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 160), "allowed_protocols", [], "any", false, false, false, 160), "html", null, true);
        yield "</li>
            <li class=\"dropdown-header\">IMAP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 162), "activate", [], "any", false, false, false, 162), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 163), "deactivate", [], "any", false, false, false, 163), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">POP3</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 166), "activate", [], "any", false, false, false, 166), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 167), "deactivate", [], "any", false, false, false, 167), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">SMTP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 170), "activate", [], "any", false, false, false, 170), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 171), "deactivate", [], "any", false, false, false, 171), "html", null, true);
        yield "</a></li>
            <li class=\"dropdown-header\">Sieve</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 173), "activate", [], "any", false, false, false, 173), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 174), "deactivate", [], "any", false, false, false, 174), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-xs-lg btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 176), "add_mailbox", [], "any", false, false, false, 176), "html", null, true);
        yield "</a>
        </div>
        <div class=\"btn-group d-none d-lg-flex\">
          <a class=\"btn btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 179), "toggle_all", [], "any", false, false, false, 179), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 180), "quick_actions", [], "any", false, false, false, 180), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 182), "expand_all", [], "any", false, false, false, 182), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 183), "collapse_all", [], "any", false, false, false, 183), "html", null, true);
        yield "</a></li>
          </ul>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 186), "mailbox", [], "any", false, false, false, 186), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 188), "activate", [], "any", false, false, false, 188), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"2\"}' href=\"#\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 189), "disable_login", [], "any", false, false, false, 189), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 190), "deactivate", [], "any", false, false, false, 190), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 192), "remove", [], "any", false, false, false, 192), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">TLS</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 198), "tls_enforce_in", [], "any", false, false, false, 198), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 199), "activate", [], "any", false, false, false, 199), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 200), "deactivate", [], "any", false, false, false, 200), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 202), "tls_enforce_out", [], "any", false, false, false, 202), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 203), "activate", [], "any", false, false, false, 203), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 204), "deactivate", [], "any", false, false, false, 204), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 208), "allowed_protocols", [], "any", false, false, false, 208), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">IMAP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 211), "activate", [], "any", false, false, false, 211), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 212), "deactivate", [], "any", false, false, false, 212), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">POP3</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 215), "activate", [], "any", false, false, false, 215), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 216), "deactivate", [], "any", false, false, false, 216), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">SMTP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 219), "activate", [], "any", false, false, false, 219), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 220), "deactivate", [], "any", false, false, false, 220), "html", null, true);
        yield "</a></li>
              <li class=\"dropdown-header\">Sieve</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 222), "activate", [], "any", false, false, false, 222), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 223), "deactivate", [], "any", false, false, false, 223), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 227), "quarantine_notification", [], "any", false, false, false, 227), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 229), "hourly", [], "any", false, false, false, 229), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 230), "daily", [], "any", false, false, false, 230), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 231), "weekly", [], "any", false, false, false, 231), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 232), "never", [], "any", false, false, false, 232), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 234), "q_reject", [], "any", false, false, false, 234), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 235), "q_add_header", [], "any", false, false, false, 235), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 236), "q_all", [], "any", false, false, false, 236), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 239), "add_mailbox", [], "any", false, false, false, 239), "html", null, true);
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
        return "mailbox/tab-mailboxes.twig";
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
        return array (  678 => 239,  672 => 236,  668 => 235,  664 => 234,  659 => 232,  655 => 231,  651 => 230,  647 => 229,  642 => 227,  635 => 223,  631 => 222,  626 => 220,  622 => 219,  616 => 216,  612 => 215,  606 => 212,  602 => 211,  596 => 208,  589 => 204,  585 => 203,  581 => 202,  576 => 200,  572 => 199,  568 => 198,  559 => 192,  554 => 190,  550 => 189,  546 => 188,  541 => 186,  535 => 183,  531 => 182,  526 => 180,  522 => 179,  516 => 176,  511 => 174,  507 => 173,  502 => 171,  498 => 170,  492 => 167,  488 => 166,  482 => 163,  478 => 162,  473 => 160,  468 => 158,  464 => 157,  460 => 156,  455 => 154,  451 => 153,  447 => 152,  443 => 151,  439 => 150,  434 => 148,  430 => 147,  426 => 146,  421 => 144,  417 => 143,  413 => 142,  408 => 140,  404 => 139,  400 => 138,  396 => 137,  391 => 135,  387 => 134,  382 => 132,  378 => 131,  369 => 125,  363 => 122,  359 => 121,  355 => 120,  350 => 118,  346 => 117,  342 => 116,  338 => 115,  333 => 113,  326 => 109,  322 => 108,  317 => 106,  313 => 105,  307 => 102,  303 => 101,  297 => 98,  293 => 97,  287 => 94,  280 => 90,  276 => 89,  272 => 88,  267 => 86,  263 => 85,  259 => 84,  250 => 78,  245 => 76,  241 => 75,  237 => 74,  232 => 72,  226 => 69,  222 => 68,  217 => 66,  213 => 65,  207 => 62,  202 => 60,  198 => 59,  192 => 56,  188 => 55,  182 => 52,  178 => 51,  172 => 48,  168 => 47,  163 => 45,  158 => 43,  154 => 42,  150 => 41,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  129 => 35,  124 => 33,  120 => 32,  116 => 31,  111 => 29,  107 => 28,  103 => 27,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/tab-mailboxes.twig", "/web/templates/mailbox/tab-mailboxes.twig");
    }
}
