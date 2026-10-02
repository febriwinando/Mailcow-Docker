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

/* admin/tab-config-f2b.twig */
class __TwigTemplate_12b97360b67960c788330226296ba6f9 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-config-f2b\" role=\"tabpanel\" aria-labelledby=\"tab-config-f2b\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-f2b\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-f2b\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "f2b_parameters", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "f2b_parameters", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-f2b\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <form class=\"form\" data-id=\"f2b\" role=\"form\" method=\"post\">
        <div class=\"mb-4\">
          <label for=\"f2b_ban_time\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 12), "f2b_ban_time", [], "any", false, false, false, 12), "html", null, true);
        yield ":</label>
          <input type=\"number\" class=\"form-control\" id=\"f2b_ban_time\" name=\"ban_time\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "ban_time", [], "any", false, false, false, 13), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_max_ban_time\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 16), "f2b_max_ban_time", [], "any", false, false, false, 16), "html", null, true);
        yield ":</label>
          <input type=\"number\" class=\"form-control\" id=\"f2b_max_ban_time\" name=\"max_ban_time\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "max_ban_time", [], "any", false, false, false, 17), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-4\">
          <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"ban_time_increment\" id=\"f2b_ban_time_increment\" ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "ban_time_increment", [], "any", false, false, false, 20) == 1)) {
            yield "checked";
        }
        yield ">
          <label class=\"form-check-label\" for=\"f2b_ban_time_increment\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "f2b_ban_time_increment", [], "any", false, false, false, 21), "html", null, true);
        yield "</label>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_max_attempts\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "f2b_max_attempts", [], "any", false, false, false, 24), "html", null, true);
        yield ":</label>
          <input type=\"number\" class=\"form-control\" id=\"f2b_max_attempts\" name=\"max_attempts\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "max_attempts", [], "any", false, false, false, 25), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_retry_window\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 28), "f2b_retry_window", [], "any", false, false, false, 28), "html", null, true);
        yield ":</label>
          <input type=\"number\" class=\"form-control\" id=\"f2b_retry_window\" name=\"retry_window\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "retry_window", [], "any", false, false, false, 29), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_netban_ipv4\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 32), "f2b_netban_ipv4", [], "any", false, false, false, 32), "html", null, true);
        yield ":</label>
          <div class=\"input-group\">
            <span class=\"input-group-text\">/</span>
            <input type=\"number\" class=\"form-control\" id=\"f2b_netban_ipv4\" name=\"netban_ipv4\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "netban_ipv4", [], "any", false, false, false, 35), "html", null, true);
        yield "\" required>
          </div>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_netban_ipv6\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 39), "f2b_netban_ipv6", [], "any", false, false, false, 39), "html", null, true);
        yield ":</label>
          <div class=\"input-group\">
            <span class=\"input-group-text\">/</span>
            <input type=\"number\" class=\"form-control\" id=\"f2b_netban_ipv6\" name=\"netban_ipv6\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "netban_ipv6", [], "any", false, false, false, 42), "html", null, true);
        yield "\" required>
          </div>
        </div>
        <div class=\"mb-4\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"f2b_manage_external\" value=\"1\" name=\"manage_external\" ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "manage_external", [], "any", false, false, false, 47) == 1)) {
            yield "checked";
        }
        yield ">
            <label class=\"form-check-label\" for=\"f2b_manage_external\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 48), "f2b_manage_external", [], "any", false, false, false, 48), "html", null, true);
        yield "</label>
          </div>
          <p class=\"text-muted\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 50), "f2b_manage_external_info", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
        </div>
        <hr>
        <p class=\"text-muted\">";
        // line 53
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 53), "f2b_list_info", [], "any", false, false, false, 53);
        yield "</p>
        <div class=\"mb-2\">
          <label for=\"f2b_whitelist\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 55), "f2b_whitelist", [], "any", false, false, false, 55), "html", null, true);
        yield ":</label>
          <textarea class=\"form-control\" id=\"f2b_whitelist\" name=\"whitelist\" rows=\"5\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "whitelist", [], "any", false, false, false, 56), "html", null, true);
        yield "</textarea>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_blacklist\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 59), "f2b_blacklist", [], "any", false, false, false, 59), "html", null, true);
        yield ":</label>
          <textarea class=\"form-control\" id=\"f2b_blacklist\" name=\"blacklist\" rows=\"5\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "blacklist", [], "any", false, false, false, 60), "html", null, true);
        yield "</textarea>
        </div>
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"self\" data-id=\"f2b\" data-api-url='edit/fail2ban' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 63), "save", [], "any", false, false, false, 63), "html", null, true);
        yield "</button>
          <a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" data-bs-toggle=\"modal\" data-container=\"netfilter-mailcow\" data-bs-target=\"#RestartContainer\"><i class=\"bi bi-arrow-repeat\"></i> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 64), "restart_netfilter", [], "any", false, false, false, 64), "html", null, true);
        yield "</a>
        </div>
      </form>
      <legend data-bs-target=\"#f2b_regex_filters\" style=\"margin-top:40px;cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 68), "f2b_filter", [], "any", false, false, false, 68), "html", null, true);
        yield "
      </legend>
      <hr />
      <div id=\"f2b_regex_filters\" class=\"collapse\">
        <p class=\"text-muted\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 72), "f2b_regex_info", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
        <form class=\"form-inline\" data-id=\"f2b_regex\" role=\"form\" method=\"post\">
          <table class=\"table table-condensed\" id=\"f2b_regex_table\">
            <tr>
              <th width=\"50px\">ID</th>
              <th>RegExp</th>
              <th width=\"100px\">&nbsp;</th>
            </tr>
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "regex", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["regex_id"] => $context["regex_val"]) {
            // line 81
            yield "              <tr>
                <td><input disabled class=\"input-sm input-xs-lg form-control\" style=\"text-align:center\" data-id=\"f2b_regex\" type=\"text\" name=\"app\" required value=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["regex_id"], "html", null, true);
            yield "\"></td>
                <td><input class=\"input-sm input-xs-lg form-control regex-input\" data-id=\"f2b_regex\" type=\"text\" name=\"regex\" required value=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["regex_val"], "html", null, true);
            yield "\"></td>
                <td><a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-lg btn-secondary h-100 w-100\" type=\"button\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 84), "remove_row", [], "any", false, false, false, 84), "html", null, true);
            yield "</a></td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['regex_id'], $context['regex_val'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "          </table>
          <p><div class=\"btn-group\">
            <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"admin\" data-id=\"f2b_regex\" data-reload=\"no\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"edit-regex\"}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 89), "save", [], "any", false, false, false, 89), "html", null, true);
        yield "</button>
            <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary admin-ays-dialog\" data-action=\"edit_selected\" data-item=\"self\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"reset-regex\"}' href=\"#\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 90), "reset_default", [], "any", false, false, false, 90), "html", null, true);
        yield "</button>
            <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" type=\"button\" id=\"add_f2b_regex_row\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 91), "add_row", [], "any", false, false, false, 91), "html", null, true);
        yield "</button>
          </div></p>
        </form>
      </div>

      <p class=\"text-muted\">";
        // line 96
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 96), "ban_list_info", [], "any", false, false, false, 96);
        yield "</p>
      ";
        // line 97
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "active_bans", [], "any", false, false, false, 97) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "perm_bans", [], "any", false, false, false, 97))) {
            // line 98
            yield "        <i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 98), "no_active_bans", [], "any", false, false, false, 98), "html", null, true);
            yield "</i>
      ";
        }
        // line 100
        yield "      <form class=\"form-inline\" data-id=\"f2b_banlist\" role=\"form\" method=\"post\">
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" aria-label=\"Banlist url\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["f2b_banlist_url"] ?? null), "html", null, true);
        yield "\" id=\"banlist_url\">
          ";
        // line 103
        if (($context["is_https"] ?? null)) {
            // line 104
            yield "          <button class=\"btn btn-secondary\" type=\"button\" onclick=\"copyToClipboard('banlist_url')\"><i class=\"bi bi-clipboard\"></i></button>
          ";
        }
        // line 106
        yield "          <button class=\"btn btn-secondary\" type=\"button\" data-action=\"edit_selected\" data-item=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "banlist_id", [], "any", false, false, false, 106), "html", null, true);
        yield "\" data-id=\"f2b_banlist\" data-api-url='edit/fail2ban/banlist' data-api-attr='{}'><i class=\"bi bi-arrow-clockwise\"></i></button>
        </div>
      </form>
      ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "active_bans", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["active_ban"]) {
            // line 110
            yield "        <p>
          <span class=\"badge fs-7 bg-info d-block d-sm-inline-block\">
            <i class=\"bi bi-funnel-fill\"></i>
            <a href=\"https://bgp.he.net/ip/";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["active_ban"], "ip", [], "any", false, false, false, 113), "html", null, true);
            yield "\" target=\"_blank\">
              ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 114), "html", null, true);
            yield "
            </a>
            (";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["active_ban"], "banned_until", [], "any", false, false, false, 116), "html", null, true);
            yield ")
          </span>
          <span class=\"d-none d-sm-inline\"> - </span>
            ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["active_ban"], "queued_for_unban", [], "any", false, false, false, 119) == 0)) {
                // line 120
                yield "            <a data-action=\"edit_selected\" data-item=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 120), "html", null, true);
                yield "\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"unban\"}' href=\"#\">[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 120), "queue_unban", [], "any", false, false, false, 120), "html", null, true);
                yield "]</a>
            <a data-action=\"edit_selected\" data-item=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 121), "html", null, true);
                yield "\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"whitelist\"}' href=\"#\">[whitelist]</a>
            <a data-action=\"edit_selected\" data-item=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 122), "html", null, true);
                yield "\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"blacklist\"}' href=\"#\">[blacklist (<b>needs restart</b>)]</a>
            ";
            } else {
                // line 124
                yield "            <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 124), "unban_pending", [], "any", false, false, false, 124), "html", null, true);
                yield "</i>
            ";
            }
            // line 126
            yield "        </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['active_ban'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "      <hr>
      ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f2b_data"] ?? null), "perm_bans", [], "any", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["perm_ban"]) {
            // line 130
            yield "        <p>
          <span class=\"badge fs-7 bg-danger d-block d-sm-inline-block\">
            <i class=\"bi bi-funnel-fill\"></i>
            <a href=\"https://bgp.he.net/ip/";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["perm_ban"], "ip", [], "any", false, false, false, 133), "html", null, true);
            yield "\" target=\"_blank\">
              ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["perm_ban"], "network", [], "any", false, false, false, 134), "html", null, true);
            yield "
            </a>
          </span>
        </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['perm_ban'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "    </div>
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
        return "admin/tab-config-f2b.twig";
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
        return array (  370 => 139,  359 => 134,  355 => 133,  350 => 130,  346 => 129,  343 => 128,  336 => 126,  330 => 124,  325 => 122,  321 => 121,  314 => 120,  312 => 119,  306 => 116,  301 => 114,  297 => 113,  292 => 110,  288 => 109,  281 => 106,  277 => 104,  275 => 103,  271 => 102,  267 => 100,  261 => 98,  259 => 97,  255 => 96,  247 => 91,  243 => 90,  239 => 89,  235 => 87,  226 => 84,  222 => 83,  218 => 82,  215 => 81,  211 => 80,  200 => 72,  193 => 68,  186 => 64,  182 => 63,  176 => 60,  172 => 59,  166 => 56,  162 => 55,  157 => 53,  151 => 50,  146 => 48,  140 => 47,  132 => 42,  126 => 39,  119 => 35,  113 => 32,  107 => 29,  103 => 28,  97 => 25,  93 => 24,  87 => 21,  81 => 20,  75 => 17,  71 => 16,  65 => 13,  61 => 12,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-f2b.twig", "/web/templates/admin/tab-config-f2b.twig");
    }
}
