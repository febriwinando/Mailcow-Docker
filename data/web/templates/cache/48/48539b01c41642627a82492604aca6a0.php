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

/* debug.twig */
class __TwigTemplate_718c4d9adf48799e694e1cfe53b32a9d extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "debug.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<ul class=\"nav nav-tabs\" role=\"tablist\">
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link active\" data-bs-target=\"#tab-containers\" aria-controls=\"tab-containers\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 5), "system_containers", [], "any", false, false, false, 5), "html", null, true);
        yield "</button></li>
  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 7), "logs", [], "any", false, false, false, 7), "html", null, true);
        yield "</a>
    <ul class=\"dropdown-menu\">
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 9), "in_memory_logs", [], "any", false, false, false, 9), "html", null, true);
        yield "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-postfix-logs\" aria-selected=\"false\" aria-controls=\"tab-postfix-logs\" role=\"tab\" data-bs-toggle=\"tab\">Postfix</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-dovecot-logs\" aria-selected=\"false\" aria-controls=\"tab-dovecot-logs\" role=\"tab\" data-bs-toggle=\"tab\">Dovecot</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-sogo-logs\" aria-selected=\"false\" aria-controls=\"tab-sogo-logs\" role=\"tab\" data-bs-toggle=\"tab\">SOGo</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-netfilter-logs\" aria-selected=\"false\" aria-controls=\"tab-netfilter-logs\" role=\"tab\" data-bs-toggle=\"tab\">Netfilter</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-autodiscover-logs\" aria-selected=\"false\" aria-controls=\"tab-autodiscover-logs\" role=\"tab\" data-bs-toggle=\"tab\">Autodiscover</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-watchdog-logs\" aria-selected=\"false\" aria-controls=\"tab-watchdog-logs\" role=\"tab\" data-bs-toggle=\"tab\">Watchdog</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-acme-logs\" aria-selected=\"false\" aria-controls=\"tab-acme-logs\" role=\"tab\" data-bs-toggle=\"tab\">ACME</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-api-logs\" aria-selected=\"false\" aria-controls=\"tab-api-logs\" role=\"tab\" data-bs-toggle=\"tab\">API</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-api-rl\" aria-selected=\"false\" aria-controls=\"tab-api-rl\" role=\"tab\" data-bs-toggle=\"tab\">Ratelimits</button></li>
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 19), "external_logs", [], "any", false, false, false, 19), "html", null, true);
        yield "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-rspamd-history\" aria-selected=\"false\" aria-controls=\"tab-rspamd-history\" role=\"tab\" data-bs-toggle=\"tab\">Rspamd</button></li>
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 21), "static_logs", [], "any", false, false, false, 21), "html", null, true);
        yield "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-ui\" aria-selected=\"false\" aria-controls=\"tab-ui\" role=\"tab\" data-bs-toggle=\"tab\">Mailcow UI</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-sasl\" aria-selected=\"false\" aria-controls=\"tab-sasl\" role=\"tab\" data-bs-toggle=\"tab\">SASL</button></li>
    </ul>
  </li>
</ul>

<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"tab-content\" style=\"padding-top:20px\">
      <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab-containers\">

        <div class=\"card mb-4\">
          <div class=\"card-header fs-5\">
            <span>";
        // line 35
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 35);
        yield "</span>
          </div>
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col-sm-12 col-md-4 d-flex flex-column\">
                <img class=\"main-logo img-responsive my-auto m-auto\" alt=\"mailcow-logo\" style=\"max-width: 85%; max-height: 85%;\" src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
                <img class=\"main-logo-dark img-responsive my-auto m-auto\" alt=\"mailcow-logo-dark\" style=\"max-width: 85%; max-height: 85%;\" src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
              </div>
              <div class=\"col-sm-12 col-md-8\">
                <div class=\"table-responsive\" style=\"margin-top: 10px;\">
                  <table class=\"table table-striped table-condensed w-100\">
                    <tbody>
                      <tr>
                        <td>Hostname</td>
                        <td class=\"text-break\"><div>
                          <p><b>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
        yield "</b></p>
                        </div></td>
                      </tr>
                      <tr>
                        <td>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 54), "architecture", [], "any", false, false, false, 54), "html", null, true);
        yield "</td>
                        <td class=\"text-break\"><div>
                          <p id=\"host_architecture\">-</p>
                        </div></td>
                      </tr>
                      <tr>
                        <td>IPs</td>
                        <td class=\"text-break\">
                          ";
        // line 62
        if ((($context["ip_check"] ?? null) == 1)) {
            // line 63
            yield "                            <span class=\"d-none\" id=\"host_ipv4\">-</span>
                            <span class=\"d-none mb-2\" id=\"host_ipv6\">-</span>
                            <button class=\"d-block btn btn-primary btn-sm\" id=\"host_show_ip\">
                              <span class=\"text\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 66), "show_ip", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                              <div class=\"spinner-border spinner-border-sm d-none\" role=\"status\">
                                <span class=\"visually-hidden\">Loading...</span>
                              </div>
                            </button>
                          ";
        } else {
            // line 72
            yield "                            <span class=\"d-block\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 72), "ip_check_disabled", [], "any", false, false, false, 72);
            yield "</span>
                          ";
        }
        // line 74
        yield "                        </td>
                      </tr>
                      <tr>
                        <td>Version</td>
                        <td class=\"text-break\">
                          <div class=\"fw-bolder\">
                            <p ><a href=\"#\" id=\"mailcow_version\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 80), "html", null, true);
        yield "</a></p>
                            <p id=\"mailcow_update\"></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 86), "current_time", [], "any", false, false, false, 86), "html", null, true);
        yield "</td>
                        <td id=\"host_date\" class=\"text-break\">-</td>
                      </tr>
                      <tr>
                        <td>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 90), "timezone", [], "any", false, false, false, 90), "html", null, true);
        yield "</td>
                        <td class=\"text-break\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["timezone"] ?? null), "html", null, true);
        yield "</td>
                      </tr>
                      <tr>
                        <td>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 94), "uptime", [], "any", false, false, false, 94), "html", null, true);
        yield "</td>
                        <td id=\"host_uptime\" class=\"text-break\">-</td>
                      </tr>
                      <tr>
                        <td>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 98), "disk_usage", [], "any", false, false, false, 98), "html", null, true);
        yield "</td>
                        <td class=\"text-break\">
                          <div>
                            <span class=\"d-block\"><i class=\"bi bi-hdd-fill\"></i> ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        yield "</span>
                            <span class=\"d-block\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[2] ?? null) : null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[4] ?? null) : null), "html", null, true);
        yield ")</span>
                          </div>
                          <div class=\"mt-2 mb-4\">
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width:";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[4] ?? null) : null), "html", null, true);
        yield "\"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class=\"col-sm-6 mt-4\">
                <h3>CPU</h3>
                <h5><span id=\"host_cpu_cores\">-</span> ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 118), "cores", [], "any", false, false, false, 118), "html", null, true);
        yield " @ <span id=\"host_cpu_usage\"></span></h5>
                <canvas id=\"host_cpu_chart\" width=\"400\" height=\"200\"></canvas>
              </div>
              <div class=\"col-sm-6 mt-4\">
                <h3>";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 122), "memory", [], "any", false, false, false, 122)), "html", null, true);
        yield "</h3>
                <h5><span id=\"host_memory_total\">-</span> @ <span id=\"host_memory_usage\"></span></h5>
                <canvas id=\"host_mem_chart\" width=\"400\" height=\"200\"></canvas>
              </div>

              <div class=\"col-sm-12\">
                <legend class=\"mt-4\">
                  ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 129), "guid_and_license", [], "any", false, false, false, 129), "html", null, true);
        yield "
                </legend>
                <hr />
                <div id=\"license\">
                  <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" method=\"post\">
                    <div class=\"row\">
                      <label class=\"control-label col-sm-3\" for=\"guid\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 135), "guid", [], "any", false, false, false, 135), "html", null, true);
        yield ":</label>
                      <div class=\"col-sm-9\">
                        <div class=\"input-group\">
                          <span class=\"input-group-text\">
                            <i class=\"bi bi-suit-heart";
        // line 139
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "valid", [], "any", false, false, false, 139) == true)) {
            yield "-fill text-danger";
        }
        yield "\"></i>
                          </span>
                          <input type=\"text\" id=\"guid\" class=\"form-control\" value=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["license_guid"] ?? null), "html", null, true);
        yield "\" readonly>
                        </div>
                        <p class=\"text-muted\">
                          ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 144), "customer_id", [], "any", false, false, false, 144), "html", null, true);
        yield ": ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "c", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "c", [], "any", false, false, false, 144), "?")) : ("?"));
        yield " -
                          ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 145), "service_id", [], "any", false, false, false, 145), "html", null, true);
        yield ": ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "s", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "s", [], "any", false, false, false, 145), "?")) : ("?"));
        yield " -
                          ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 146), "sal_level", [], "any", false, false, false, 146), "html", null, true);
        yield ": ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "m", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "m", [], "any", false, false, false, 146), "?")) : ("?"));
        yield "
                        </p>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"offset-sm-3 col-sm-9\">
                        <p class=\"text-muted\">";
        // line 152
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 152), "license_info", [], "any", false, false, false, 152);
        yield "</p>
                        <div class=\"btn-group\">
                          <button class=\"btn btn-sm d-block d-sm-inline btn-success\" name=\"license_validate_now\" type=\"submit\" href=\"#\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 154), "validate_license_now", [], "any", false, false, false, 154), "html", null, true);
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
        <!-- container info -->
        <div class=\"card mb-4\">
          <div class=\"card-header fs-5\">
            <span>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 167), "containers_info", [], "any", false, false, false, 167), "html", null, true);
        yield "</span>
          </div>
          <div class=\"card-body p-0\">
            <div class=\"row mx-0\">
              <!-- rest of the containers -->
              ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["containers"] ?? null));
        foreach ($context['_seq'] as $context["container"] => $context["container_info"]) {
            // line 173
            yield "                  <div class=\"col-md-6 col-sm-12 p-2\">
                    <div class=\"list-group-item p-0\">
                      <div class=\"d-flex p-2 list-group-header\">
                        <div>
                          <span class=\"fw-bold\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "</span>
                          <span class=\"d-block d-md-inline\">(";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "Config", [], "any", false, false, false, 178), "Image", [], "any", false, false, false, 178), "html", null, true);
            yield ")</span>
                          <small class=\"d-block\">(";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 179), "started_on", [], "any", false, false, false, 179), "html", null, true);
            yield " <span class=\"parse_date\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 179), "StartedAtHR", [], "any", false, false, false, 179), "html", null, true);
            yield "</span>)</small>
                          ";
            // line 180
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 180), "Running", [], "any", false, false, false, 180) == 1)) {
                // line 181
                yield "                            <span class=\"badge fs-7 bg-success loader\" style=\"min-width:100px\">
                              ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 182), "container_running", [], "any", false, false, false, 182), "html", null, true);
                yield "
                              <span class=\"loader-dot\">.</span>
                              <span class=\"loader-dot\">.</span>
                              <span class=\"loader-dot\">.</span>
                            </span>
                          ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 187
$context["container_info"], "State", [], "any", false, false, false, 187)) {
                // line 188
                yield "                            <span class=\"badge fs-7 bg-danger\" style=\"min-width:100px\">
                              ";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 189), "container_stopped", [], "any", false, false, false, 189), "html", null, true);
                yield "
                              <i class=\"bi-x ms-1\"></i>
                            </span>
                          ";
            }
            // line 193
            yield "                        </div>
                        <div class=\"mt-auto ms-auto\">
                          <button class=\"btn btn-light\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "Collapse\" aria-expanded=\"false\" aria-controls=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "Collapse\">
                            <i class=\"bi bi-caret-down-fill caret\"></i>
                          </button>
                        </div>
                      </div>
                      <div class=\"collapse p-0 list-group-details container-details-collapse\" id=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "Collapse\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "Id", [], "any", false, false, false, 200), "html", null, true);
            yield "\">
                        <div class=\"row p-2 pt-4\">
                          <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                            <h6>Disk I/O</h6>
                            <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                              <span class=\"visually-hidden\">Loading...</span>
                            </div>
                            <canvas class=\"d-none\" id=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "_DiskIOChart\" width=\"400\" height=\"200\"></canvas>
                          </div>
                          <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                            <h6>Net I/O</h6>
                            <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                              <span class=\"visually-hidden\">Loading...</span>
                            </div>
                            <canvas class=\"d-none\" id=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "_NetIOChart\" width=\"400\" height=\"200\"></canvas>
                          </div>
                          <div class=\"col-12 d-flex\" style=\"height: 40px\">
                            <a href data-bs-toggle=\"modal\"
                              data-container=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "\"
                              data-bs-target=\"#RestartContainer\"
                              class=\"btn btn-sm btn-secondary d-flex align-items-center justify-content-center mb-2 ms-auto\"
                              style=\"height: 30px;\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 221), "restart_container", [], "any", false, false, false, 221), "html", null, true);
            yield "
                                <i class=\"ms-1 bi
                                ";
            // line 223
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 223), "Running", [], "any", false, false, false, 223) == 1)) {
                // line 224
                yield "                                bi-record-fill text-success
                                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 225
$context["container_info"], "State", [], "any", false, false, false, 225)) {
                // line 226
                yield "                                bi-record-fill text-danger
                                ";
            } else {
                // line 228
                yield "                                default
                                ";
            }
            // line 230
            yield "                                \"
                              ></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['container'], $context['container_info'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "            </div>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-postfix-logs\">
        <div class=\"debug-log-info\">";
        // line 245
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 245), "log_info", [], "any", false, false, false, 245), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Postfix</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_postfix_logs\" data-table=\"postfix_log\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 250), "refresh", [], "any", false, false, false, 250), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 254), "quick_actions", [], "any", false, false, false, 254), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"postfix_log\" data-log-url=\"postfix\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"postfix_log\" data-log-url=\"postfix\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"postfix_log\" data-table=\"postfix_log\" href=\"#\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 259), "expand_all", [], "any", false, false, false, 259), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"postfix_log\" data-table=\"postfix_log\" href=\"#\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 260), "collapse_all", [], "any", false, false, false, 260), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"postfix_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-ui\">
        <div class=\"debug-log-info\">";
        // line 268
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 268), "log_info", [], "any", false, false, false, 268), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Mailcow UI</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_ui_logs\" data-table=\"ui_logs\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 273), "refresh", [], "any", false, false, false, 273), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 277), "quick_actions", [], "any", false, false, false, 277), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"mailcow_ui\" data-table=\"ui_logs\" data-log-url=\"ui\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"mailcow_ui\" data-table=\"ui_logs\" data-log-url=\"ui\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"ui_logs\" data-table=\"ui_logs\" href=\"#\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 282), "expand_all", [], "any", false, false, false, 282), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"ui_logs\" data-table=\"ui_logs\" href=\"#\">";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 283), "collapse_all", [], "any", false, false, false, 283), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"ui_logs\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-sasl\">
        <div class=\"debug-log-info\">";
        // line 291
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 291), "log_info", [], "any", false, false, false, 291), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">SASL</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_sasl_logs\" data-table=\"sasl_logs\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 296), "refresh", [], "any", false, false, false, 296), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 300), "quick_actions", [], "any", false, false, false, 300), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"sasl_log_table\" data-table=\"sasl_logs\" data-log-url=\"ui\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"sasl_log_table\" data-table=\"sasl_logs\" data-log-url=\"ui\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sasl_logs\" data-table=\"sasl_logs\" href=\"#\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 305), "expand_all", [], "any", false, false, false, 305), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sasl_logs\" data-table=\"sasl_logs\" href=\"#\">";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 306), "collapse_all", [], "any", false, false, false, 306), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"sasl_logs\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-dovecot-logs\">
        <div class=\"debug-log-info\">";
        // line 314
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 314), "log_info", [], "any", false, false, false, 314), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Dovecot</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_dovecot_logs\" data-table=\"dovecot_log\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 319), "refresh", [], "any", false, false, false, 319), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 323), "quick_actions", [], "any", false, false, false, 323), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"dovecot_log\" data-log-url=\"dovecot\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"dovecot_log\" data-log-url=\"dovecot\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"dovecot_log\" data-table=\"dovecot_log\" href=\"#\">";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 328), "expand_all", [], "any", false, false, false, 328), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"dovecot_log\" data-table=\"dovecot_log\" href=\"#\">";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 329), "collapse_all", [], "any", false, false, false, 329), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"dovecot_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-sogo-logs\">
        <div class=\"debug-log-info\">";
        // line 337
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 337), "log_info", [], "any", false, false, false, 337), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">SOGo</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_sogo_logs\" data-table=\"sogo_log\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 342), "refresh", [], "any", false, false, false, 342), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 346), "quick_actions", [], "any", false, false, false, 346), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"sogo_log\" data-log-url=\"sogo\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"sogo_log\" data-log-url=\"sogo\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sogo_log\" data-table=\"sogo_log\" href=\"#\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 351), "expand_all", [], "any", false, false, false, 351), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sogo_log\" data-table=\"sogo_log\" href=\"#\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 352), "collapse_all", [], "any", false, false, false, 352), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"sogo_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-netfilter-logs\">
        <div class=\"debug-log-info\">";
        // line 360
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 360), "log_info", [], "any", false, false, false, 360), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Netfilter</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_netfilter_logs\" data-table=\"netfilter_log\">";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 365), "refresh", [], "any", false, false, false, 365), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 369), "quick_actions", [], "any", false, false, false, 369), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"netfilter_log\" data-log-url=\"netfilter\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"netfilter_log\" data-log-url=\"netfilter\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"netfilter_log\" data-table=\"netfilter_log\" href=\"#\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 374), "expand_all", [], "any", false, false, false, 374), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"netfilter_log\" data-table=\"netfilter_log\" href=\"#\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 375), "collapse_all", [], "any", false, false, false, 375), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"netfilter_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-rspamd-history\">
        <div class=\"debug-log-info\">";
        // line 383
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 383), "log_info", [], "any", false, false, false, 383), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Rspamd history</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_rspamd_history\" data-table=\"rspamd_history\">";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 388), "refresh", [], "any", false, false, false, 388), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <legend>";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 392), "chart_this_server", [], "any", false, false, false, 392), "html", null, true);
        yield "</legend><hr />
            <div id=\"chart-container\">
              <canvas id=\"rspamd_donut\" style=\"width:100%;height:400px\"></canvas>
            </div>
            <legend>";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 396), "history_all_servers", [], "any", false, false, false, 396), "html", null, true);
        yield "</legend><hr />
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 397), "quick_actions", [], "any", false, false, false, 397), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rspamd_history\" data-table=\"rspamd_history\" data-log-url=\"rspamd-history\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rspamd_history\" data-table=\"rspamd_history\" data-log-url=\"rspamd-history\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"rspamd_history\" data-table=\"rspamd_history\" href=\"#\">";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 402), "expand_all", [], "any", false, false, false, 402), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"rspamd_history\" data-table=\"rspamd_history\" href=\"#\">";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 403), "collapse_all", [], "any", false, false, false, 403), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"rspamd_history\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-autodiscover-logs\">
        <div class=\"debug-log-info\">";
        // line 411
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 411), "log_info", [], "any", false, false, false, 411), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Autodiscover</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_autodiscover_logs\" data-table=\"autodiscover_log\">";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 416), "refresh", [], "any", false, false, false, 416), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 420), "quick_actions", [], "any", false, false, false, 420), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"autodiscover_log\" data-table=\"autodiscover_log\" data-log-url=\"autodiscover\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"autodiscover_log\" data-table=\"autodiscover_log\" data-log-url=\"autodiscover\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"autodiscover_log\" data-table=\"autodiscover_log\" href=\"#\">";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 425), "expand_all", [], "any", false, false, false, 425), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"autodiscover_log\" data-table=\"autodiscover_log\" href=\"#\">";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 426), "collapse_all", [], "any", false, false, false, 426), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"autodiscover_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-watchdog-logs\">
        <div class=\"debug-log-info\">";
        // line 434
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 434), "log_info", [], "any", false, false, false, 434), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Watchdog</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_watchdog_logs\" data-table=\"watchdog_log\">";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 439), "refresh", [], "any", false, false, false, 439), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 443), "quick_actions", [], "any", false, false, false, 443), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"watchdog\" data-table=\"watchdog_log\" data-log-url=\"watchdog\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"watchdog\" data-table=\"watchdog_log\" data-log-url=\"watchdog\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"watchdog_log\" data-table=\"watchdog_log\" href=\"#\">";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 448), "expand_all", [], "any", false, false, false, 448), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"watchdog_log\" data-table=\"watchdog_log\" href=\"#\">";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 449), "collapse_all", [], "any", false, false, false, 449), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"watchdog_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-acme-logs\">
        <div class=\"debug-log-info\">";
        // line 457
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 457), "log_info", [], "any", false, false, false, 457), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">ACME</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_acme_logs\" data-table=\"acme_log\">";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 462), "refresh", [], "any", false, false, false, 462), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 466), "quick_actions", [], "any", false, false, false, 466), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"acme_log\" data-log-url=\"acme\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"acme_log\" data-log-url=\"acme\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"acme_log\" data-table=\"acme_log\" href=\"#\">";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 471), "expand_all", [], "any", false, false, false, 471), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"acme_log\" data-table=\"acme_log\" href=\"#\">";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 472), "collapse_all", [], "any", false, false, false, 472), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"acme_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-api-logs\">
        <div class=\"debug-log-info\">";
        // line 480
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 480), "log_info", [], "any", false, false, false, 480), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">API</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_api_logs\" data-table=\"api_log\">";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 485), "refresh", [], "any", false, false, false, 485), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 489), "quick_actions", [], "any", false, false, false, 489), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"apilog\" data-table=\"api_log\" data-log-url=\"api\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"apilog\" data-table=\"api_log\" data-log-url=\"api\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"api_log\" data-table=\"api_log\" href=\"#\">";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 494), "expand_all", [], "any", false, false, false, 494), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"api_log\" data-table=\"api_log\" href=\"#\">";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 495), "collapse_all", [], "any", false, false, false, 495), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"api_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-api-rl\">
        <div class=\"debug-log-info\">";
        // line 503
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 503), "log_info", [], "any", false, false, false, 503), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Ratelimits</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_rl_logs\" data-table=\"rl_log\">";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 508), "refresh", [], "any", false, false, false, 508), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 512), "quick_actions", [], "any", false, false, false, 512), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rllog\" data-table=\"rl_log\" data-log-url=\"ratelimited\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rllog\" data-table=\"rl_log\" data-log-url=\"ratelimited\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"rl_log\" data-table=\"rl_log\" href=\"#\">";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 517), "expand_all", [], "any", false, false, false, 517), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"rl_log\" data-table=\"rl_log\" href=\"#\">";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 518), "collapse_all", [], "any", false, false, false, 518), "html", null, true);
        yield "</a></li>
            </ul>
            <p class=\"text-muted\">";
        // line 520
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 520), "hash_remove_info", [], "any", false, false, false, 520);
        yield "</p>
            <table id=\"rl_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

    </div> <!-- /tab-content -->
  </div> <!-- /col-md-12 -->
</div> <!-- /row -->

<script type='text/javascript'>
  var lang = ";
        // line 531
        yield ($context["lang_admin"] ?? null);
        yield ";
  var lang_debug = ";
        // line 532
        yield ($context["lang_debug"] ?? null);
        yield ";
  var lang_datatables = ";
        // line 533
        yield ($context["lang_datatables"] ?? null);
        yield ";
  var csrf_token = '";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
  var log_pagination_size = Math.trunc('";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["log_pagination_size"] ?? null), "html", null, true);
        yield "');
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "debug.twig";
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
        return array (  976 => 535,  972 => 534,  968 => 533,  964 => 532,  960 => 531,  946 => 520,  941 => 518,  937 => 517,  929 => 512,  922 => 508,  914 => 503,  903 => 495,  899 => 494,  891 => 489,  884 => 485,  876 => 480,  865 => 472,  861 => 471,  853 => 466,  846 => 462,  838 => 457,  827 => 449,  823 => 448,  815 => 443,  808 => 439,  800 => 434,  789 => 426,  785 => 425,  777 => 420,  770 => 416,  762 => 411,  751 => 403,  747 => 402,  739 => 397,  735 => 396,  728 => 392,  721 => 388,  713 => 383,  702 => 375,  698 => 374,  690 => 369,  683 => 365,  675 => 360,  664 => 352,  660 => 351,  652 => 346,  645 => 342,  637 => 337,  626 => 329,  622 => 328,  614 => 323,  607 => 319,  599 => 314,  588 => 306,  584 => 305,  576 => 300,  569 => 296,  561 => 291,  550 => 283,  546 => 282,  538 => 277,  531 => 273,  523 => 268,  512 => 260,  508 => 259,  500 => 254,  493 => 250,  485 => 245,  477 => 239,  463 => 230,  459 => 228,  455 => 226,  453 => 225,  450 => 224,  448 => 223,  443 => 221,  437 => 218,  430 => 214,  420 => 207,  408 => 200,  398 => 195,  394 => 193,  387 => 189,  384 => 188,  382 => 187,  374 => 182,  371 => 181,  369 => 180,  363 => 179,  359 => 178,  355 => 177,  349 => 173,  345 => 172,  337 => 167,  321 => 154,  316 => 152,  305 => 146,  299 => 145,  293 => 144,  287 => 141,  280 => 139,  273 => 135,  264 => 129,  254 => 122,  247 => 118,  232 => 106,  221 => 102,  217 => 101,  211 => 98,  204 => 94,  198 => 91,  194 => 90,  187 => 86,  178 => 80,  170 => 74,  164 => 72,  155 => 66,  150 => 63,  148 => 62,  137 => 54,  130 => 50,  118 => 41,  114 => 40,  106 => 35,  89 => 21,  84 => 19,  71 => 9,  66 => 7,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "debug.twig", "/web/templates/debug.twig");
    }
}
