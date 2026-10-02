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

/* admin/tab-sys-mails.twig */
class __TwigTemplate_e29327275d5c9a56198e1e495979b257 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-sys-mails\" role=\"tabpanel\" aria-labelledby=\"tab-sys-mails\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-sys-mails\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-sys-mails\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "sys_mails", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "sys_mails", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-sys-mails\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <form class=\"form-horizontal\" autocapitalize=\"none\" data-id=\"admin\" autocorrect=\"off\" role=\"form\" method=\"post\">
        <div class=\"row mb-2\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"admin_mass_from\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 12), "from", [], "any", false, false, false, 12), "html", null, true);
        yield ":</label>
          <div class=\"col-sm-10\">
            <input type=\"email\" class=\"form-control\" id=\"admin_mass_from\" name=\"mass_from\" value=\"noreply@";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_hostname"] ?? null), "html", null, true);
        yield "\" required>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"admin_mass_subject\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 18), "subject", [], "any", false, false, false, 18), "html", null, true);
        yield ":</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" class=\"form-control\" id=\"admin_mass_subject\" name=\"mass_subject\" required>
          </div>
        </div>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 24
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        <div class=\"row mb-4\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"mass_subject\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 27), "include_exclude", [], "any", false, false, false, 27), "html", null, true);
        yield ":
            <p class=\"text-muted\">";
        // line 28
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 28), "include_exclude_info", [], "any", false, false, false, 28);
        yield "</p>
          </label>
          <div class=\"col-sm-5\">
            <label class=\"d-block\" for=\"mass_exclude\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 31), "excludes", [], "any", false, false, false, 31), "html", null, true);
        yield ":</label>
            <select id=\"mass_exclude\" name=\"mass_exclude[]\" data-live-search=\"true\" data-width=\"100%\"  size=\"30\" multiple>
              ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 34
            yield "                <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mailbox"], "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "            </select>
          </div>
          <div class=\"col-sm-5\">
            <label class=\"d-block\" for=\"mass_include\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 39), "includes", [], "any", false, false, false, 39), "html", null, true);
        yield ":</label>
            <select id=\"mass_include\" name=\"mass_include[]\" data-live-search=\"true\" data-width=\"100%\"  size=\"30\" multiple>
              ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 42
            yield "                <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mailbox"], "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </select>
          </div>
        </div>
        <div class=\"row mb-2\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"mass_text\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 48), "text", [], "any", false, false, false, 48), "html", null, true);
        yield ":</label>
          <div class=\"col-sm-10\">
            <textarea class=\"form-control\" rows=\"10\" name=\"mass_text\" id=\"mass_text\" required></textarea>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"mass_html\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 54), "html", [], "any", false, false, false, 54), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 54), "optional", [], "any", false, false, false, 54), "html", null, true);
        yield "):</label>
          <div class=\"col-sm-10\">
            <textarea class=\"form-control\" rows=\"10\" name=\"mass_html\" id=\"mass_html\"></textarea>
            <p class=\"small\"><i class=\"bi bi-arrow-return-right\"></i> <a target=\"_blank\" href=\"https://templates.mailchimp.com/resources/html-to-text/\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 57), "convert_html_to_text", [], "any", false, false, false, 57), "html", null, true);
        yield "</a></p>
          </div>
        </div>
        <div class=\"row mb-2\">
          <div class=\"offset-sm-2 col-sm-10\">
            <label>
              <input type=\"checkbox\" class=\"form-check-input\" id=\"mass_disarm\"> ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 63), "activate_send", [], "any", false, false, false, 63), "html", null, true);
        yield "
            </label>
          </div>
        </div>
        <div class=\"row mb-2\">
          <div class=\"offset-sm-2 col-sm-10\">
            <button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" id=\"mass_send\" name=\"mass_send\" disabled><i class=\"bi bi-envelope-fill\"></i> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 69), "send", [], "any", false, false, false, 69), "html", null, true);
        yield "</button>
          </div>
        </div>
      </form>
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
        return "admin/tab-sys-mails.twig";
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
        return array (  187 => 69,  178 => 63,  169 => 57,  161 => 54,  152 => 48,  146 => 44,  137 => 42,  133 => 41,  128 => 39,  123 => 36,  114 => 34,  110 => 33,  105 => 31,  99 => 28,  95 => 27,  92 => 26,  85 => 24,  81 => 23,  73 => 18,  66 => 14,  61 => 12,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-sys-mails.twig", "/web/templates/admin/tab-sys-mails.twig");
    }
}
