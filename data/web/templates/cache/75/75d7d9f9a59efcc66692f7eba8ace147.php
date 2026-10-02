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

/* edit/mailbox.twig */
class __TwigTemplate_350607bd5ba10595c4e9d0b7e2fd2685 extends Template
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
            'inner_content' => [$this, 'block_inner_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "edit.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("edit.twig", "edit/mailbox.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        if (($context["result"] ?? null)) {
            // line 5
            yield "<div id=\"mailbox-content\" class=\"responsive-tabs\">
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#medit\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 7), "mailbox", [], "any", false, false, false, 7), "html", null, true);
            yield "</button></li>
      <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#mattr\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 8), "custom_attributes", [], "any", false, false, false, 8), "html", null, true);
            yield "</button></li>
      <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#mpushover\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 9), "pushover", [], "any", false, false, false, 9), "html", null, true);
            yield "</button></li>
      <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#macl\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 10), "acl", [], "any", false, false, false, 10), "html", null, true);
            yield "</button></li>
      <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#mrl\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 11), "ratelimit", [], "any", false, false, false, 11), "html", null, true);
            yield "</button></li>
      <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#mrename\">⚠️ ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 12), "mailbox_rename", [], "any", false, false, false, 12), "html", null, true);
            yield "</button></li>
    </ul>
    <hr class=\"d-none d-md-block\">
    <div class=\"tab-content\">
      <div id=\"medit\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"mailbox-edit\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex d-md-none fs-5\">
              <button class=\"btn flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-medit\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-medit\">
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 20), "mailbox", [], "any", false, false, false, 20), "html", null, true);
            yield " <span class=\"badge bg-info table-lines\"></span>
              </button>
            </div>
            <div id=\"collapse-tab-medit\" class=\"card-body collapse show\" data-bs-parent=\"#mailbox-content\">
                <form class=\"form-horizontal\" data-id=\"editmailbox\" role=\"form\" method=\"post\">
                  <input type=\"hidden\" value=\"default\" name=\"sender_acl\">
                  <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
                  <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
                  <input type=\"hidden\" value=\"0\" name=\"protocol_access\">
                  <div class=\"row mb-2\">
                    <label class=\"control-label col-sm-2\" for=\"name\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 30), "full_name", [], "any", false, false, false, 30), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-2\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 36), "tags", [], "any", false, false, false, 36), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control tag-box\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox_details"] ?? null), "tags", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 40
                yield "                          <span data-action='delete_selected' data-item=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "\" data-id=\"mailbox_tag_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "\" data-api-url='delete/mailbox/tag/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
                yield "' class=\"badge bg-primary tag-badge btn-badge\">
                            <i class=\"bi bi-tag-fill\"></i>
                            ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "
                          </span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                        <input type=\"text\" class=\"tag-input\">
                        <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                        <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
                      </div>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <label class=\"control-label col-sm-2\" for=\"quota\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 52), "quota_mb", [], "any", false, false, false, 52), "html", null, true);
            yield "
                      <br><span id=\"quotaBadge\" class=\"badge bg-info\">max. ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "max_new_quota", [], "any", false, false, false, 53) / 1048576), "html", null, true);
            yield " MiB</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <input type=\"number\" name=\"quota\" style=\"width:100%\" min=\"0\" max=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "max_new_quota", [], "any", false, false, false, 56) / 1048576), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "quota", [], "any", false, false, false, 56) / 1048576), "html", null, true);
            yield "\" class=\"form-control\">
                      <small class=\"text-muted\">0 = ∞</small>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <label class=\"control-label col-sm-2\" for=\"sender_acl\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 61), "sender_acl", [], "any", false, false, false, 61), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <select data-live-search=\"true\" data-width=\"100%\" style=\"width:100%\" id=\"editSelectSenderACL\" name=\"sender_acl\" size=\"10\" multiple>
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_domains", [], "any", false, false, false, 64), "ro", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 65
                yield "                          <option data-subtext=\"Admin\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "\" disabled selected>
                            ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 66), "dont_check_sender_acl", [], "any", false, false, false, 66), $context["domain"]), "html", null, true);
                yield "
                          </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_addresses", [], "any", false, false, false, 69), "ro", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
                // line 70
                yield "                          <option data-subtext=\"Admin\" disabled selected>
                            ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias"], "html", null, true);
                yield "
                          </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alias'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "fixed_sender_aliases", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
                // line 75
                yield "                          <option data-subtext=\"Alias\" disabled selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias"], "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alias'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_domains", [], "any", false, false, false, 77), "rw", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 78
                yield "                          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "\" selected>
                            ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 79), "dont_check_sender_acl", [], "any", false, false, false, 79), $context["domain"]), "html", null, true);
                yield "
                          </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_domains", [], "any", false, false, false, 82), "selectable", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 83
                yield "                          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "\">
                            ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 84), "dont_check_sender_acl", [], "any", false, false, false, 84), $context["domain"]), "html", null, true);
                yield "
                          </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_addresses", [], "any", false, false, false, 87), "rw", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 88
                yield "                          <option selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["address"], "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_addresses", [], "any", false, false, false, 90), "selectable", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 91
                yield "                          <option>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["address"], "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                      </select>
                      <div id=\"sender_acl_disabled\"><i class=\"bi bi-shield-exclamation\"></i> ";
            // line 94
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 94), "sender_acl_disabled", [], "any", false, false, false, 94);
            yield "</div>
                      <small class=\"text-muted d-block\">";
            // line 95
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 95), "sender_acl_info", [], "any", false, false, false, 95);
            yield "</small>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <label class=\"control-label col-sm-2\" for=\"relayhost\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 99), "relayhost", [], "any", false, false, false, 99), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <select data-acl=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "mailbox_relayhost", [], "any", false, false, false, 101), "html", null, true);
            yield "\" data-live-search=\"true\" id=\"relayhost\" name=\"relayhost\" class=\"form-control mb-4\">
                        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rlyhosts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rlyhost"]) {
                // line 103
                yield "                          <option
                            style=\"";
                // line 104
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rlyhost"], "active", [], "any", false, false, false, 104) != "1")) {
                    yield "background: #ff4136; color: #fff";
                }
                yield "\"
                            ";
                // line 105
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 105), "relayhost", [], "any", false, false, false, 105) == CoreExtension::getAttribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 105))) {
                    yield " selected";
                }
                // line 106
                yield "                            value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 106), "html", null, true);
                yield "\">
                          ID ";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 107), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rlyhost"], "hostname", [], "any", false, false, false, 107), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rlyhost"], "username", [], "any", false, false, false, 107), "html", null, true);
                yield ")
                          </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rlyhost'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "                        <option value=\"\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 110), "relayhost", [], "any", false, false, false, 110)) {
                yield " selected";
            }
            yield ">
                          ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 111), "none_inherit", [], "any", false, false, false, 111), "html", null, true);
            yield "
                        </option>
                      </select>
                      <p class=\"d-block d-sm-none\" style=\"margin: 0;padding: 0\">&nbsp;</p>
                      <small class=\"text-muted d-block\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 115), "mailbox_relayhost_info", [], "any", false, false, false, 115), "html", null, true);
            yield "</small>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <label class=\"control-label col-sm-2\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 119), "quarantine_notification", [], "any", false, false, false, 119), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\" data-acl=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_notification", [], "any", false, false, false, 121), "html", null, true);
            yield "\">
                        <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
            // line 122
            if ((($context["quarantine_notification"] ?? null) == "never")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                        data-action=\"edit_selected\"
                        data-item=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                        data-id=\"quarantine_notification\"
                        data-api-url='edit/quarantine_notification'
                        data-api-attr='{\"quarantine_notification\":\"never\"}'>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 127), "never", [], "any", false, false, false, 127), "html", null, true);
            yield "</button>
                        <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
            // line 128
            if ((($context["quarantine_notification"] ?? null) == "hourly")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                        data-action=\"edit_selected\"
                        data-item=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                        data-id=\"quarantine_notification\"
                        data-api-url='edit/quarantine_notification'
                        data-api-attr='{\"quarantine_notification\":\"hourly\"}'>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 133), "hourly", [], "any", false, false, false, 133), "html", null, true);
            yield "</button>
                        <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
            // line 134
            if ((($context["quarantine_notification"] ?? null) == "daily")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                        data-action=\"edit_selected\"
                        data-item=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                        data-id=\"quarantine_notification\"
                        data-api-url='edit/quarantine_notification'
                        data-api-attr='{\"quarantine_notification\":\"daily\"}'>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 139), "daily", [], "any", false, false, false, 139), "html", null, true);
            yield "</button>
                        <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
            // line 140
            if ((($context["quarantine_notification"] ?? null) == "weekly")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                        data-action=\"edit_selected\"
                        data-item=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                        data-id=\"quarantine_notification\"
                        data-api-url='edit/quarantine_notification'
                        data-api-attr='{\"quarantine_notification\":\"weekly\"}'>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 145), "weekly", [], "any", false, false, false, 145), "html", null, true);
            yield "</button>
                      </div>
                      <p class=\"text-muted\"><small>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 147), "quarantine_notification_info", [], "any", false, false, false, 147), "html", null, true);
            yield "</small></p>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <label class=\"control-label col-sm-2\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 151), "quarantine_category", [], "any", false, false, false, 151), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\" data-acl=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_category", [], "any", false, false, false, 153), "html", null, true);
            yield "\">
                        <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
            // line 154
            if ((($context["quarantine_category"] ?? null) == "reject")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                        data-action=\"edit_selected\"
                        data-item=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                        data-id=\"quarantine_category\"
                        data-api-url='edit/quarantine_category'
                        data-api-attr='{\"quarantine_category\":\"reject\"}'>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 159), "q_reject", [], "any", false, false, false, 159), "html", null, true);
            yield "</button>
                        <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
            // line 160
            if ((($context["quarantine_category"] ?? null) == "add_header")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                        data-action=\"edit_selected\"
                        data-item=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                        data-id=\"quarantine_category\"
                        data-api-url='edit/quarantine_category'
                        data-api-attr='{\"quarantine_category\":\"add_header\"}'>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 165), "q_add_header", [], "any", false, false, false, 165), "html", null, true);
            yield "</button>
                        <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
            // line 166
            if ((($context["quarantine_category"] ?? null) == "all")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                        data-action=\"edit_selected\"
                        data-item=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                        data-id=\"quarantine_category\"
                        data-api-url='edit/quarantine_category'
                        data-api-attr='{\"quarantine_category\":\"all\"}'>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 171), "q_all", [], "any", false, false, false, 171), "html", null, true);
            yield "</button>
                      </div>
                      <p class=\"text-muted\"><small>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 173), "quarantine_category_info", [], "any", false, false, false, 173), "html", null, true);
            yield "</small></p>
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-2\" for=\"sender_acl\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 177), "tls_policy", [], "any", false, false, false, 177), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\" data-acl=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "tls_policy", [], "any", false, false, false, 179), "html", null, true);
            yield "\">
                        <button type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline";
            // line 180
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_in", [], "any", false, false, false, 180) == "1")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                          data-action=\"edit_selected\"
                          data-item=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                          data-id=\"tls_policy\"
                          data-api-url='edit/tls_policy'
                          data-api-attr='{\"tls_enforce_in\": ";
            // line 185
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_in", [], "any", false, false, false, 185) == "1")) {
                yield "0";
            } else {
                yield "1";
            }
            yield " }'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 185), "tls_enforce_in", [], "any", false, false, false, 185), "html", null, true);
            yield "</button>
                        <button type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline";
            // line 186
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_out", [], "any", false, false, false, 186) == "1")) {
                yield " btn-dark";
            } else {
                yield " btn-light";
            }
            yield "\"
                          data-action=\"edit_selected\"
                          data-item=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\"
                          data-id=\"tls_policy\"
                          data-api-url='edit/tls_policy'
                          data-api-attr='{\"tls_enforce_out\": ";
            // line 191
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_out", [], "any", false, false, false, 191) == "1")) {
                yield "0";
            } else {
                yield "1";
            }
            yield " }'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 191), "tls_enforce_out", [], "any", false, false, false, 191), "html", null, true);
            yield "</button>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <label class=\"control-label col-sm-2\" for=\"password\">";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 196), "password", [], "any", false, false, false, 196), "html", null, true);
            yield " (<a href=\"#\" class=\"generate_password\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 196), "generate", [], "any", false, false, false, 196), "html", null, true);
            yield "</a>)</label>
                    <div class=\"col-sm-10\">
                      <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"password\" placeholder=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 198), "unchanged_if_empty", [], "any", false, false, false, 198), "html", null, true);
            yield "\" autocomplete=\"new-password\">
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-2\" for=\"password2\">";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 202), "password_repeat", [], "any", false, false, false, 202), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"password2\" autocomplete=\"new-password\">
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-2\" for=\"pw_recovery_email\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 208), "password_recovery_email", [], "any", false, false, false, 208), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"email\" class=\"form-control\" name=\"pw_recovery_email\" value=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 210), "recovery_email", [], "any", false, false, false, 210), "html", null, true);
            yield "\">
                      <small class=\"text-muted\">";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 211), "password_reset_info", [], "any", false, false, false, 211), "html", null, true);
            yield "</small>
                    </div>
                  </div>
                  <div data-acl=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "extend_sender_acl", [], "any", false, false, false, 214), "html", null, true);
            yield "\" class=\"row mb-4\">
                    <label class=\"control-label col-sm-2\" for=\"extended_sender_acl\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 215), "extended_sender_acl", [], "any", false, false, false, 215), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      ";
            // line 217
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "external_sender_aliases", [], "any", false, false, false, 217)) {
                // line 218
                yield "                        ";
                $context["ext_sender_acl"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "external_sender_aliases", [], "any", false, false, false, 218), ", ");
                // line 219
                yield "                      ";
            }
            // line 220
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "extend_sender_acl", [], "any", false, false, false, 220) && (CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "extend_sender_acl", [], "any", false, false, false, 220) == 1))) {
                // line 221
                yield "                        <input type=\"text\" class=\"form-control\" name=\"extended_sender_acl\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ext_sender_acl"] ?? null), "html", null, true);
                yield "\" placeholder=\"user1@example.com, user2@example.org, @example.com, ...\">
                        <small class=\"text-muted\">";
                // line 222
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 222), "extended_sender_acl_info", [], "any", false, false, false, 222);
                yield "</small>
                      ";
            }
            // line 224
            yield "                    </div>
                  </div>
                  <div class=\"row\">
                    <label class=\"control-label col-sm-2\" for=\"protocol_access\">";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 227), "allowed_protocols", [], "any", false, false, false, 227), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <select data-acl=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "protocol_access", [], "any", false, false, false, 229), "html", null, true);
            yield "\" name=\"protocol_access\" multiple class=\"form-control\">
                        <option value=\"imap\"";
            // line 230
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 230), "imap_access", [], "any", false, false, false, 230) == "1")) {
                yield " selected";
            }
            yield ">IMAP</option>
                        <option value=\"pop3\"";
            // line 231
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 231), "pop3_access", [], "any", false, false, false, 231) == "1")) {
                yield " selected";
            }
            yield ">POP3</option>
                        <option value=\"smtp\"";
            // line 232
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 232), "smtp_access", [], "any", false, false, false, 232) == "1")) {
                yield " selected";
            }
            yield ">SMTP</option>
                        <option value=\"sieve\"";
            // line 233
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 233), "sieve_access", [], "any", false, false, false, 233) == "1")) {
                yield " selected";
            }
            yield ">Sieve</option>
                      </select>
                    </div>
                  </div>
                  <div hidden data-acl=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "smtp_ip_access", [], "any", false, false, false, 237), "html", null, true);
            yield "\" class=\"row\">
                    <label class=\"control-label col-sm-2\" for=\"allow_from_smtp\">";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 238), "allow_from_smtp", [], "any", false, false, false, 238), "html", null, true);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" class=\"form-control\" name=\"allow_from_smtp\" value=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["allow_from_smtp"] ?? null), "html", null, true);
            yield "\" placeholder=\"1.1.1.1, 10.2.0.0/24, ...\">
                      <small class=\"text-muted\">";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 241), "allow_from_smtp_info", [], "any", false, false, false, 241), "html", null, true);
            yield "</small>
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"offset-sm-2 col-sm-10\">
                      <select name=\"active\" class=\"form-control\">
                        <option value=\"1\"";
            // line 248
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 248) == "1")) {
                yield " selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 248), "active", [], "any", false, false, false, 248), "html", null, true);
            yield "</option>
                        <option value=\"2\"";
            // line 249
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 249) == "2")) {
                yield " selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 249), "disable_login", [], "any", false, false, false, 249), "html", null, true);
            yield "</option>
                        <option value=\"0\"";
            // line 250
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 250) == "0")) {
                yield " selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 250), "inactive", [], "any", false, false, false, 250), "html", null, true);
            yield "</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"row mt-2\">
                    <div class=\"offset-sm-2 col-sm-10\">
                      <div class=\"form-check\">
                        <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"force_pw_update\"";
            // line 257
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 257), "force_pw_update", [], "any", false, false, false, 257) == "1")) {
                yield " checked";
            }
            yield "> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 257), "force_pw_update", [], "any", false, false, false, 257), "html", null, true);
            yield "</label>
                        <small class=\"text-muted\">";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 258), "force_pw_update_info", [], "any", false, false, false, 258), CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 258)), "html", null, true);
            yield "</small>
                      </div>
                    </div>
                  </div>
                  ";
            // line 262
            if ( !($context["skip_sogo"] ?? null)) {
                // line 263
                yield "                  <div data-acl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "sogo_access", [], "any", false, false, false, 263), "html", null, true);
                yield "\" class=\"row\">
                    <div class=\"offset-sm-2 col-sm-10\">
                      <div class=\"form-check\">
                        <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sogo_access\"";
                // line 266
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 266), "sogo_access", [], "any", false, false, false, 266) == "1")) {
                    yield " checked";
                }
                yield "> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 266), "sogo_access", [], "any", false, false, false, 266), "html", null, true);
                yield "</label>
                        <small class=\"text-muted\">";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 267), "sogo_access_info", [], "any", false, false, false, 267), "html", null, true);
                yield "</small>
                      </div>
                    </div>
                  </div>
                  ";
            }
            // line 272
            yield "                  <div class=\"row mt-2 mb-2\">
                    <div class=\"offset-sm-2 col-sm-10\">
                      <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"editmailbox\" data-item=\"";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "username", [], "any", false, false, false, 274), "html", null, true);
            yield "\" data-api-url='edit/mailbox' data-api-attr='{}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 274), "save", [], "any", false, false, false, 274), "html", null, true);
            yield "</button>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"offset-sm-2 col-sm-10\">
                      <small class=\"fst-italic d-block\">";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 279), "created_on", [], "any", false, false, false, 279), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "created", [], "any", false, false, false, 279), "html", null, true);
            yield "</small>
                      <small class=\"fst-italic d-block\">";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 280), "last_modified", [], "any", false, false, false, 280), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "modified", [], "any", false, false, false, 280), "html", null, true);
            yield "</small>
                    </div>
                  </div>
                </form>
            </div>
        </div>
      </div>
      <div id=\"mattr\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-attr\">
        <div class=\"card mb-4\">
          <div class=\"card-header d-flex d-md-none fs-5\">
            <button class=\"btn flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mattr\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mattr\">
              ";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 291), "custom_attributes", [], "any", false, false, false, 291), "html", null, true);
            yield " <span class=\"badge bg-info table-lines\"></span>
            </button>
          </div>
          <div id=\"collapse-tab-mattr\" class=\"card-body collapse\" data-bs-parent=\"#mailbox-content\">
            <form class=\"form-inline\" data-id=\"mbox_attr\" role=\"form\" method=\"post\">
              <table class=\"table table-condensed\" style=\"white-space: nowrap;\" id=\"mbox_attr_table\">
                <tr>
                  <th>";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 298), "attribute", [], "any", false, false, false, 298), "html", null, true);
            yield "</th>
                  <th>";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 299), "value", [], "any", false, false, false, 299), "html", null, true);
            yield "</th>
                  <th style=\"width:100px;\">&nbsp;</th>
                </tr>
                ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "custom_attributes", [], "any", false, false, false, 302));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 303
                yield "                  <tr>
                    <td><input class=\"input-sm input-xs-lg form-control\" data-id=\"mbox_attr\" type=\"text\" name=\"attribute\" required value=\"";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"></td>
                    <td><input class=\"input-sm input-xs-lg form-control\" data-id=\"mbox_attr\" type=\"text\" name=\"value\" required value=\"";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\"></td>
                    <td><a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-lg btn-secondary h-100 w-100\" type=\"button\">";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 306), "remove_row", [], "any", false, false, false, 306), "html", null, true);
                yield "</a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            yield "              </table>
              <p><div class=\"btn-group\">
                <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\" data-id=\"mbox_attr\" data-api-url='edit/mailbox/custom-attribute' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 311), "save", [], "any", false, false, false, 311), "html", null, true);
            yield "</button>
                <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" type=\"button\" id=\"add_mbox_attr_row\">";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 312), "add_row", [], "any", false, false, false, 312), "html", null, true);
            yield "</button>
              </div></p>
            </form>
          </div>
        </div>
      </div>
      <div id=\"mpushover\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-pushover\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex d-md-none fs-5\">
              <button class=\"btn flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mpushover\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mpushover\">
                ";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 322), "pushover", [], "any", false, false, false, 322), "html", null, true);
            yield " <span class=\"badge bg-info table-lines\"></span>
              </button>
            </div>
            <div id=\"collapse-tab-mpushover\" class=\"card-body collapse\" data-bs-parent=\"#mailbox-content\">
                <form data-id=\"pushover\" class=\"form well\" method=\"post\">
                  <input type=\"hidden\" value=\"0\" name=\"evaluate_x_prio\">
                  <input type=\"hidden\" value=\"0\" name=\"only_x_prio\">
                  <input type=\"hidden\" value=\"0\" name=\"active\">
                  <div class=\"row\">
                    <div class=\"col-sm-1\">
                      <p class=\"text-muted\"><a href=\"https://pushover.net\" target=\"_blank\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAACglBMVEUAAAAAAAEAAAAilecFGigAAAAAAAAAAAAAAAANj+c3n+Ypm+oeYI4KWI4MieAtkdQbleoJcLcjmeswmN4Rit4KgdMKUYQJKUAQSnILL0kMNlMSTngimOoNPF0hlOQBBgkNOlkRS3MHIjUhk+IPf8wKLUYsjM0AAAASTngAAAAAAAAPfckbdLIbdrYUWIgegsgce70knfEAAAAknfENOVkGHi8YaaIjnvEdgMUhkuAQSG8aca0hleQUh9YLjOM4nOEMgtMcbaYWa6YemO02ltkKhNktgLodYZEPXJEyi8kKesktfLUzj84cWYMiluckZ5YJXJYeW4Y0k9YKfs4yjs0pc6YHZaUviskLfMkqmugak+cqkNcViNcqeK4Iaq4XRmYGPmYMKDsFJTstgr0LdL0ti84CCQ4BCQ4Qgc8rlt8XjN8shcQsi8wZSGgEP2cRMEUDKkUAAAD///8dmvEamfExo/EXmPEWl/ERlvElnvEsofEjnfETl/Enn/Ezo/E4pvEvovEfm/E1pPEzpPEvofEOlfEpoPEamPEQlfEYmfE6p/EgnPEVlvEroPE3pfE2pfENk/Ern/E3pPEcmfEfmvEnnvBlufT6/P0soPAknPDd7/zs9vzo9PxBqfItofAqoPD9/f3B4/q43/mx2/l/xfZ6w/Vxv/VtvfVgt/RXtPNTsfNEq/L3+/31+v3a7fvR6vvH5fqs2vmc0/jx+P3v9/3h8fzW7PvV7PvL5/q13fmo1/mh1PiY0fiNy/aHyfZ2wfVou/Vdt/RPsPM3oeoQkuowmeAgjdgcgMQbeLrw9/3k8vy74Pm63/mX0PdYtfNNr/Ikm+4wnOchkuAVjOAfdrMVcrOdoJikAAAAcnRSTlMAIQ8IzzweFwf+/fvw8P79+/Xt7e3p6eji4d7U08y8qZyTiIWDgn53bWxqaWBKQ0JBOjUwMCkoJCEfHBkT/vz8/Pv7+vr69/b29PTy7ezm5ubm5N7e29vQ0M/Pv7+4uLW1pqaWloWDg3x7e21mUVFFRUXdPracAAAEbElEQVRIx4WUZbvaQBCFF+ru7u7u7u7u7t4mvVwSoBC0JIUCLRQolLq7u7vr/+nMLkmQyvlwyfPcd86e3ZldUqwyQ/p329J+XfutPQYOLUP+q55rFtQJRvY79+xxlZTUWbKpz7/xrrMr2+3BoNPpdLn2lJQ4HEeqLOr1d7z7XNkesQed4A848G63Oy4Gmg/6Mz542QvZbqe8C/Ig73CLYiYTrtLmT3zfqbIcAR7y4wIqH/B6M9Fo0+Ldb6sM9ph/v4ozPuz12mxRofaAAr7jCNkuoz/jNf9AGHibkBCm51fsGKvxsAGWx4H+jBcEi6V2birDpCL/9Klrd1KHbiSvPWP8V0tTnTfO03iXi57P6WNHOVUf44IFdFDRz6pV5fw8Zy5z3JVH5+R48OwxqDiGvKJIY9R+9JsCuJ5HPg74OVEMpz+nbdEPUHEWeEk6IDUnTC1l5r+f8uffc0cfxc8fS17kLso24SwUPFDA/6DE82xKDOPliJ7n/GGOOyWK9zD9CdjvOfg9Dv6AH+AX04LW9gj2i8W/APx1UbxwCAu+wPmcpgUKL/EHdvtq4uwaZwCuznPJVY5LHhED15G/isd5Hz4eKui/e/du02YoKFeD5mHzHIN/nxEDe25gQQwKorAid04CfyzwL4XutXvl1Pt1guMOwwKPkU8mYIFT8JHK+vv8prpDScUVL+j8s3lOctw1GIhbWHAS+HgKPk7xPM/4UtNAYmzizJkf6NgTb/gM8jePQLsewMdthS3g95tMpT1IhVm6v1s8fYmLeb13Odwp8Fh5KY048y/d14WUrwrb1e/X/rNp73nkD8kWS+wi/MZ4XuetG4mhKubJm3/WNEvi8SHwB56nPKjUam0LBdp9ARwupFemTYudvgN/L1+A/Ko/LGBuS8pPy+YR1fuCTWNKnUyoeUyYx2o2dyEVGmr5xTD42xzvkD16+Pb9WIIH6fmt1r3mbsTY7Bvw+n23naT8BUWh86bz6G/e259UXPUK3gfAxQDlo7Rpx3Geqb2e3wp83SGEdKpB7zvwYbzvT2n65xLwbH6YP+M9C8vA8E1wxLU8gkCbdhXGUyrMgwVrcbzLHonr78lzDvWM3q/C/HtDlXoSUIe3YkblhRPIX4E8Oo/9siLv8dRjV7SBlkdgTXvKS7nzsA/9AfeEuhKq9T8zWIDv1Sd6ETAP4D6/H/1V+1BojvruNa4SZXz4JhY84dV5MOF5agUvu5OsOo+KRpG30KalEnoeDccFlutPZYs38D5n3zcpr1/0fBhfb3DOY1z2tSAgLxWezz6zuoHhfUmOejf6blHQH/sFuJYfcMZX307ytKvRa3ifoV/586P5j+tICtS77BuJxzxYAPZsntX8k3eSIhlajK4p8b7iefCEKs03kD/I2LnxL9ovH+43y4fAv1YrI/mzDBsavAX/UppfzVOrZT/ydxk6lJ047MfLfVbcb6hS9ZEzWxekKQ5WrtPqZg3rV6tWrX6Tle3KQZj/q6KxQnmDoXwFY0VSrN9e8FRXBCTAvwAAAABJRU5ErkJggg==\" class=\"img img-fluid\"></a></p>
                    </div>
                    <div class=\"col-sm-10\">
                      <p class=\"text-muted\">";
            // line 335
            yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 335), "pushover_info", [], "any", false, false, false, 335), ($context["mailbox"] ?? null));
            yield "</p>
                      <p class=\"text-muted\">";
            // line 336
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 336), "pushover_vars", [], "any", false, false, false, 336);
            yield ": <code>{SUBJECT}</code>, <code>{SENDER}</code>, <code>{SENDER_ADDRESS}</code>, <code>{SENDER_NAME}</code>, <code>{TO_NAME}</code>, <code>{TO_ADDRESS}</code>, <code>{MSG_ID}</code></p>
                      <div class=\"row\">
                        <div class=\"col-sm-6 mb-2\">
                          <label for=\"token\">API Token/Key (Application)</label>
                          <input type=\"text\" class=\"form-control\" name=\"token\" maxlength=\"30\" value=\"";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "token", [], "any", false, false, false, 340), "html", null, true);
            yield "\" required>
                        </div>
                        <div class=\"col-sm-6 mb-2\">
                          <label for=\"key\">User/Group Key</label>
                          <input type=\"text\" class=\"form-control\" name=\"key\" maxlength=\"30\" value=\"";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "key", [], "any", false, false, false, 344), "html", null, true);
            yield "\" required>
                        </div>
                        <div class=\"col-sm-6 mb-4\">
                          <label for=\"title\">";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 347), "pushover_title", [], "any", false, false, false, 347), "html", null, true);
            yield "</label>
                          <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "title", [], "any", false, false, false, 348), "html", null, true);
            yield "\" placeholder=\"Mail\">
                        </div>
                        <div class=\"col-sm-6 mb-4\">
                          <label for=\"text\">";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 351), "pushover_text", [], "any", false, false, false, 351), "html", null, true);
            yield "</label>
                          <input type=\"text\" class=\"form-control\" name=\"text\" value=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "text", [], "any", false, false, false, 352), "html", null, true);
            yield "\" placeholder=\"You've got mail 📧\">
                        </div>
                        <div class=\"col-sm-12 mb-4\">
                          <label for=\"text\">";
            // line 355
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 355), "pushover_sender_array", [], "any", false, false, false, 355);
            yield "</label>
                          <input type=\"text\" class=\"form-control\" name=\"senders\" value=\"";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "senders", [], "any", false, false, false, 356), "html", null, true);
            yield "\" placeholder=\"sender1@example.com, sender2@example.com\">
                        </div>
                        <div class=\"col-sm-12 mb-2\">
                            <div class=\"form-group\">
                              <label for=\"sound\">";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 360), "pushover_sound", [], "any", false, false, false, 360), "html", null, true);
            yield "</label><br>
                              <select name=\"sound\" class=\"form-control\">
                                <option value=\"pushover\"";
            // line 362
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 362), "sound", [], "any", false, false, false, 362) == "pushover")) {
                yield " selected";
            }
            yield ">Pushover (default)</option>
                                <option value=\"bike\"";
            // line 363
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 363), "sound", [], "any", false, false, false, 363) == "bike")) {
                yield " selected";
            }
            yield ">Bike</option>
                                <option value=\"bugle\"";
            // line 364
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 364), "sound", [], "any", false, false, false, 364) == "bugle")) {
                yield " selected";
            }
            yield ">Bugle</option>
                                <option value=\"cashregister\"";
            // line 365
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 365), "sound", [], "any", false, false, false, 365) == "cashregister")) {
                yield " selected";
            }
            yield ">Cash Register</option>
                                <option value=\"classical\"";
            // line 366
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 366), "sound", [], "any", false, false, false, 366) == "classical")) {
                yield " selected";
            }
            yield ">Classical</option>
                                <option value=\"cosmic\"";
            // line 367
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 367), "sound", [], "any", false, false, false, 367) == "cosmic")) {
                yield " selected";
            }
            yield ">Cosmic</option>
                                <option value=\"falling\"";
            // line 368
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 368), "sound", [], "any", false, false, false, 368) == "falling")) {
                yield " selected";
            }
            yield ">Falling</option>
                                <option value=\"gamelan\"";
            // line 369
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 369), "sound", [], "any", false, false, false, 369) == "gamelan")) {
                yield " selected";
            }
            yield ">Gamelan</option>
                                <option value=\"incoming\"";
            // line 370
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 370), "sound", [], "any", false, false, false, 370) == "incoming")) {
                yield " selected";
            }
            yield ">Incoming</option>
                                <option value=\"intermission\"";
            // line 371
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 371), "sound", [], "any", false, false, false, 371) == "intermission")) {
                yield " selected";
            }
            yield ">Intermission</option>
                                <option value=\"magic\"";
            // line 372
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 372), "sound", [], "any", false, false, false, 372) == "magic")) {
                yield " selected";
            }
            yield ">Magic</option>
                                <option value=\"mechanical\"";
            // line 373
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 373), "sound", [], "any", false, false, false, 373) == "mechanical")) {
                yield " selected";
            }
            yield ">Mechanical</option>
                                <option value=\"pianobar\"";
            // line 374
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 374), "sound", [], "any", false, false, false, 374) == "pianobar")) {
                yield " selected";
            }
            yield ">Piano Bar</option>
                                <option value=\"siren\"";
            // line 375
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 375), "sound", [], "any", false, false, false, 375) == "siren")) {
                yield " selected";
            }
            yield ">Siren</option>
                                <option value=\"spacealarm\"";
            // line 376
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 376), "sound", [], "any", false, false, false, 376) == "spacealarm")) {
                yield " selected";
            }
            yield ">Space Alarm</option>
                                <option value=\"tugboat\"";
            // line 377
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 377), "sound", [], "any", false, false, false, 377) == "tugboat")) {
                yield " selected";
            }
            yield ">Tug Boat</option>
                                <option value=\"alien\"";
            // line 378
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 378), "sound", [], "any", false, false, false, 378) == "alien")) {
                yield " selected";
            }
            yield ">Alien Alarm (long)</option>
                                <option value=\"climb\"";
            // line 379
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 379), "sound", [], "any", false, false, false, 379) == "climb")) {
                yield " selected";
            }
            yield ">Climb (long)</option>
                                <option value=\"persistent\"";
            // line 380
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 380), "sound", [], "any", false, false, false, 380) == "persistent")) {
                yield " selected";
            }
            yield ">Persistent (long)</option>
                                <option value=\"echo\"";
            // line 381
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 381), "sound", [], "any", false, false, false, 381) == "echo")) {
                yield " selected";
            }
            yield ">Pushover Echo (long)</option>
                                <option value=\"updown\"";
            // line 382
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 382), "sound", [], "any", false, false, false, 382) == "updown")) {
                yield " selected";
            }
            yield ">Up Down (long)</option>
                                <option value=\"vibrate\"";
            // line 383
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 383), "sound", [], "any", false, false, false, 383) == "vibrate")) {
                yield " selected";
            }
            yield ">Vibrate Only</option>
                                <option value=\"none\"";
            // line 384
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 384), "sound", [], "any", false, false, false, 384) == "none")) {
                yield " selected";
            }
            yield "> None (silent) </option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-sm-12\">
                          <div class=\"form-check\">
                            <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\"";
            // line 390
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "active", [], "any", false, false, false, 390) == "1")) {
                yield " checked";
            }
            yield "> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 390), "active", [], "any", false, false, false, 390), "html", null, true);
            yield "</label>
                          </div>
                        </div>
                        <div class=\"col-sm-12\">
                          <legend style=\"cursor:pointer;margin-top:10px\" data-bs-target=\"#po_advanced\" unselectable=\"on\" data-bs-toggle=\"collapse\">
                            <i class=\"bi bi-plus\"></i> ";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 395), "advanced_settings", [], "any", false, false, false, 395), "html", null, true);
            yield "
                          </legend>
                          <hr />
                        </div>
                        <div class=\"col-sm-12 mb-4\">
                          <div id=\"po_advanced\" class=\"collapse\">
                            <label for=\"text\">";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 401), "pushover_sender_regex", [], "any", false, false, false, 401), "html", null, true);
            yield "</label>
                            <input type=\"text\" class=\"form-control mt-2\" name=\"senders_regex\" value=\"";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "senders_regex", [], "any", false, false, false, 402), "html", null, true);
            yield "\" placeholder=\"/(.*@example\\.org\$|^foo@example\\.com\$)/i\" regex=\"true\">
                            <div class=\"form-check mt-4\">
                              <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"evaluate_x_prio\"";
            // line 404
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 404), "evaluate_x_prio", [], "any", false, false, false, 404) == "1")) {
                yield " checked";
            }
            yield "> ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 404), "pushover_evaluate_x_prio", [], "any", false, false, false, 404);
            yield "</label>
                            </div>
                            <div class=\"form-check mt-2\">
                              <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"only_x_prio\"";
            // line 407
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 407), "only_x_prio", [], "any", false, false, false, 407) == "1")) {
                yield " checked";
            }
            yield "> ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 407), "pushover_only_x_prio", [], "any", false, false, false, 407);
            yield "</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"btn-group\" data-acl=\"";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "pushover", [], "any", false, false, false, 412), "html", null, true);
            yield "\">
                        <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"pushover\" data-item=\"";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\" data-api-url='edit/pushover' data-api-attr='{}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 413), "save", [], "any", false, false, false, 413), "html", null, true);
            yield "</a>
                        <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"pushover-test\" data-item=\"";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\" data-api-url='edit/pushover-test' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 414), "pushover_verify", [], "any", false, false, false, 414), "html", null, true);
            yield "</a>
                        <a id=\"pushover_delete\" class=\"btn btn-sm d-block d-sm-inline btn-danger\" data-action=\"edit_selected\" data-id=\"pushover-delete\" data-item=\"";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\" data-api-url='edit/pushover' data-api-attr='{\"delete\":\"true\"}' href=\"#\"><i class=\"bi bi-trash\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 415), "remove", [], "any", false, false, false, 415), "html", null, true);
            yield "</a>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
      </div>
      <div id=\"macl\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-acl\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex d-md-none fs-5\">
              <button class=\"btn flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-macl\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-macl\">
                ";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 427), "acl", [], "any", false, false, false, 427), "html", null, true);
            yield " <span class=\"badge bg-info table-lines\"></span>
              </button>
            </div>
            <div id=\"collapse-tab-macl\" class=\"card-body collapse\" data-bs-parent=\"#mailbox-content\">
                <form data-id=\"useracl\" class=\"form-inline well\" method=\"post\">
                  <div class=\"row\">
                    <div class=\"col-sm-1\">
                      <p class=\"text-muted\">ACL</p>
                    </div>
                    <div class=\"col-sm-10\">
                      <select id=\"user_acl\" name=\"user_acl\" size=\"10\" multiple>
                        ";
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["user_acls"] ?? null));
            foreach ($context['_seq'] as $context["acl"] => $context["val"]) {
                // line 439
                yield "                          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["acl"], "html", null, true);
                yield "\"";
                if (($context["val"] == 1)) {
                    yield " selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 439)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["acl"]] ?? null) : null), "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['acl'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 441
            yield "                      </select>
                      <button class=\"btn btn-xs-lg d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"useracl\" data-item=\"";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\" data-api-url='edit/user-acl' data-api-attr='{}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 442), "save", [], "any", false, false, false, 442), "html", null, true);
            yield "</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
      </div>
      <div id=\"mrl\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-rl\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex d-md-none fs-5\">
              <button class=\"btn flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mrl\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mrl\">
                ";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 453), "ratelimit", [], "any", false, false, false, 453), "html", null, true);
            yield " <span class=\"badge bg-info table-lines\"></span>
              </button>
            </div>
            <div id=\"collapse-tab-mrl\" class=\"card-body collapse\" data-bs-parent=\"#mailbox-content\">
                <form data-id=\"mboxratelimit\" class=\"well\" method=\"post\">
                  <div class=\"row mb-2\">
                    <div class=\"col-sm-2\">
                      <p class=\"text-muted\">";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 460), "ratelimit", [], "any", false, false, false, 460), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <input name=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"";
            // line 464
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rl"] ?? null), "value", [], "any", false, false, false, 464), "html", null, true);
            yield "\" class=\"form-control\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 464), "disabled", [], "any", false, false, false, 464), "html", null, true);
            yield "\">
                        <select name=\"rl_frame\" class=\"form-control\">
                        ";
            // line 466
            yield from             $this->loadTemplate("mailbox/rl-frame.twig", "edit/mailbox.twig", 466)->unwrap()->yield($context);
            // line 467
            yield "                        </select>
                      </div>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-2 col-sm-10\">
                      <button class=\"btn btn-xs-lg d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"mboxratelimit\" data-item=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\" data-api-url='edit/rl-mbox' data-api-attr='{}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 473), "save", [], "any", false, false, false, 473), "html", null, true);
            yield "</button>
                      <p class=\"text-muted mt-2\">";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 474), "mbox_rl_info", [], "any", false, false, false, 474), "html", null, true);
            yield "</p>
                    </div>
                  </div>
                </form>
            </div>
        </div>
      </div>
      <div id=\"mrename\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-rename\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex d-md-none fs-5\">
              <button class=\"btn flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mrename\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mrename\">
                ⚠️ ";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 485), "mailbox_rename", [], "any", false, false, false, 485), "html", null, true);
            yield "<span class=\"badge bg-info table-lines\"></span>
              </button>
            </div>
            <div id=\"collapse-tab-mrename\" class=\"card-body collapse\" data-bs-parent=\"#mailbox-content\">
              <div class=\"well\">
                <div id=\"rename_warning\">
                  <p>";
            // line 491
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 491), "mailbox_rename_warning", [], "any", false, false, false, 491), "html", null, true);
            yield "</p>
                  <div id=\"confirm_show_rspamd_global_filters\">
                    <div class=\"row\">
                      <div class=\"offset-sm-2 col-sm-10\">
                        <label>
                          <input type=\"checkbox\" class=\"form-check-input\" id=\"show_mailbox_rename_form\"> ";
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 496), "mailbox_rename_agree", [], "any", false, false, false, 496), "html", null, true);
            yield "
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div id=\"rename_form\" class=\"d-none\">
                  <form data-id=\"mboxrename\" method=\"post\">
                    <input name=\"domain\" type=\"hidden\" value=\"";
            // line 504
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "domain", [], "any", false, false, false, 504), "html", null, true);
            yield "\">
                    <input name=\"old_local_part\" type=\"hidden\" value=\"";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "local_part", [], "any", false, false, false, 505), "html", null, true);
            yield "\">
                    <div class=\"row mb-2\">
                      <div class=\"col-sm-12 col-md-2\">
                        <span>";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 508), "mailbox_rename_title", [], "any", false, false, false, 508), "html", null, true);
            yield "</span>
                      </div>
                      <div class=\"col-sm-12 col-md-10 col-xl-8\">
                        <div class=\"input-group mb-2\">
                          <input type=\"text\" class=\"form-control\" name=\"new_local_part\" autocomplete=\"off\" value=\"";
            // line 512
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "local_part", [], "any", false, false, false, 512), "html", null, true);
            yield "\">
                          <span class=\"input-group-text\">@";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "domain", [], "any", false, false, false, 513), "html", null, true);
            yield "</span>
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-4\">
                      <div class=\"col-sm-12 offset-md-2 col-md-10 col-xl-8\">
                        <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"create_alias\" checked> ";
            // line 519
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 519), "mailbox_rename_alias", [], "any", false, false, false, 519), "html", null, true);
            yield "</label>
                      </div>
                    </div>
                    <div class=\"row mb-2\">
                      <div class=\"col-sm-12 offset-md-2 col-md-10 col-xl-8\">
                        <button class=\"btn btn-xs-lg d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"mboxrename\" data-item=\"";
            // line 524
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailbox"] ?? null), "html", null, true);
            yield "\" data-api-url='edit/rename-mbox' data-api-attr='{}' data-api-reload-location=\"/mailbox\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 524), "save", [], "any", false, false, false, 524), "html", null, true);
            yield "</button>
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
";
        } else {
            // line 536
            yield "  ";
            yield from $this->yieldParentBlock("inner_content", $context, $blocks);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "edit/mailbox.twig";
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
        return array (  1406 => 536,  1389 => 524,  1381 => 519,  1372 => 513,  1368 => 512,  1361 => 508,  1355 => 505,  1351 => 504,  1340 => 496,  1332 => 491,  1323 => 485,  1309 => 474,  1303 => 473,  1295 => 467,  1293 => 466,  1286 => 464,  1279 => 460,  1269 => 453,  1253 => 442,  1250 => 441,  1235 => 439,  1231 => 438,  1217 => 427,  1200 => 415,  1194 => 414,  1188 => 413,  1184 => 412,  1172 => 407,  1162 => 404,  1157 => 402,  1153 => 401,  1144 => 395,  1132 => 390,  1121 => 384,  1115 => 383,  1109 => 382,  1103 => 381,  1097 => 380,  1091 => 379,  1085 => 378,  1079 => 377,  1073 => 376,  1067 => 375,  1061 => 374,  1055 => 373,  1049 => 372,  1043 => 371,  1037 => 370,  1031 => 369,  1025 => 368,  1019 => 367,  1013 => 366,  1007 => 365,  1001 => 364,  995 => 363,  989 => 362,  984 => 360,  977 => 356,  973 => 355,  967 => 352,  963 => 351,  957 => 348,  953 => 347,  947 => 344,  940 => 340,  933 => 336,  929 => 335,  913 => 322,  900 => 312,  894 => 311,  890 => 309,  881 => 306,  877 => 305,  873 => 304,  870 => 303,  866 => 302,  860 => 299,  856 => 298,  846 => 291,  830 => 280,  824 => 279,  814 => 274,  810 => 272,  802 => 267,  794 => 266,  787 => 263,  785 => 262,  778 => 258,  770 => 257,  756 => 250,  748 => 249,  740 => 248,  730 => 241,  726 => 240,  721 => 238,  717 => 237,  708 => 233,  702 => 232,  696 => 231,  690 => 230,  686 => 229,  681 => 227,  676 => 224,  671 => 222,  666 => 221,  663 => 220,  660 => 219,  657 => 218,  655 => 217,  650 => 215,  646 => 214,  640 => 211,  636 => 210,  631 => 208,  622 => 202,  615 => 198,  608 => 196,  594 => 191,  588 => 188,  579 => 186,  569 => 185,  563 => 182,  554 => 180,  550 => 179,  545 => 177,  538 => 173,  533 => 171,  527 => 168,  518 => 166,  514 => 165,  508 => 162,  499 => 160,  495 => 159,  489 => 156,  480 => 154,  476 => 153,  471 => 151,  464 => 147,  459 => 145,  453 => 142,  444 => 140,  440 => 139,  434 => 136,  425 => 134,  421 => 133,  415 => 130,  406 => 128,  402 => 127,  396 => 124,  387 => 122,  383 => 121,  378 => 119,  371 => 115,  364 => 111,  357 => 110,  344 => 107,  339 => 106,  335 => 105,  329 => 104,  326 => 103,  322 => 102,  318 => 101,  313 => 99,  306 => 95,  302 => 94,  299 => 93,  290 => 91,  285 => 90,  276 => 88,  271 => 87,  262 => 84,  257 => 83,  252 => 82,  243 => 79,  238 => 78,  233 => 77,  224 => 75,  219 => 74,  210 => 71,  207 => 70,  202 => 69,  193 => 66,  188 => 65,  184 => 64,  178 => 61,  168 => 56,  162 => 53,  158 => 52,  149 => 45,  140 => 42,  130 => 40,  126 => 39,  120 => 36,  113 => 32,  108 => 30,  95 => 20,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "edit/mailbox.twig", "/web/templates/edit/mailbox.twig");
    }
}
