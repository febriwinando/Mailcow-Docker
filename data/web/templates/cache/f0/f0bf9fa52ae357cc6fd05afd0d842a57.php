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

/* admin/tab-config-quota.twig */
class __TwigTemplate_e5a69d5cd10b757cf6fbee6a1217c676 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-config-quota\" role=\"tabpanel\" aria-labelledby=\"tab-config-quota\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-quota\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-quota\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "quota_notifications", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "quota_notifications", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-quota\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <p>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "quota_notifications_info", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
      <form class=\"form\" role=\"form\" data-id=\"quota_notification\" method=\"post\">
        <div class=\"row mb-4\">
          <div class=\"col-sm-6\">
            <div>
              <label for=\"quota_notification_sender\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "quota_notification_sender", [], "any", false, false, false, 15), "html", null, true);
        yield ":</label>
              <input type=\"email\" class=\"form-control\" id=\"quota_notification_sender\" name=\"sender\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["qn_data"] ?? null), "sender", [], "any", false, false, false, 16), "html", null, true);
        yield "\" placeholder=\"quota-warning@localhost\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div>
              <label for=\"quota_notification_subject\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "quota_notification_subject", [], "any", false, false, false, 21), "html", null, true);
        yield ":</label>
              <input type=\"text\" class=\"form-control\" id=\"quota_notification_subject\" name=\"subject\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["qn_data"] ?? null), "subject", [], "any", false, false, false, 22), "html", null, true);
        yield "\" placeholder=\"Quota warning\">
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <legend data-bs-target=\"#quota_template\" style=\"cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
              <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 29
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 29), "quarantine_notification_html", [], "any", false, false, false, 29);
        yield "
            </legend>
            <hr />
            <div id=\"quota_template\" class=\"collapse\">
              <!-- <small>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 33), "quota_notifications_vars", [], "any", false, false, false, 33), "html", null, true);
        yield "</small><br><br>-->
              <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"20\" name=\"html_tmpl\">";
        // line 34
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["qn_data"] ?? null), "html_tmpl", [], "any", false, false, false, 34);
        yield "</textarea>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-10\">
            <div>
              <br>
              <a type=\"button\" class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"edit_selected\"
                 data-item=\"quota_notification\"
                 data-id=\"quota_notification\"
                 data-api-url='edit/quota_notification'
                 data-api-attr='{}'><i class=\"bi bi-check-lg\"></i> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 46), "save_changes", [], "any", false, false, false, 46), "html", null, true);
        yield "</a>
            </div>
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
        return "admin/tab-config-quota.twig";
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
        return array (  119 => 46,  104 => 34,  100 => 33,  93 => 29,  83 => 22,  79 => 21,  71 => 16,  67 => 15,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-quota.twig", "/web/templates/admin/tab-config-quota.twig");
    }
}
