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

/* admin/tab-config-quarantine.twig */
class __TwigTemplate_05e1e62ff49c0372a07b3abe90d349ef extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-config-quarantine\" role=\"tabpanel\" aria-labelledby=\"tab-config-quarantine\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-quarantine\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-quarantine\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "quarantine", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "quarantine", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-quarantine\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      ";
        // line 10
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "retention_size", [], "any", false, false, false, 10) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "max_size", [], "any", false, false, false, 10))) {
            // line 11
            yield "      <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 11), "disabled_by_config", [], "any", false, false, false, 11), "html", null, true);
            yield "</div>
      ";
        }
        // line 13
        yield "      <form class=\"form-horizontal\" data-id=\"quarantine\" role=\"form\" method=\"post\">
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_retention_size\">";
        // line 15
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "quarantine_retention_size", [], "any", false, false, false, 15);
        yield "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_retention_size\" name=\"retention_size\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "retention_size", [], "any", false, false, false, 17), "html", null, true);
        yield "\" placeholder=\"0\" required>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_max_size\">";
        // line 21
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "quarantine_max_size", [], "any", false, false, false, 21);
        yield "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_max_size\" name=\"max_size\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "max_size", [], "any", false, false, false, 23), "html", null, true);
        yield "\" placeholder=\"0\" required>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_max_score\">";
        // line 27
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 27), "quarantine_max_score", [], "any", false, false, false, 27);
        yield "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_max_score\" name=\"max_score\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "max_score", [], "any", false, false, false, 29), "html", null, true);
        yield "\" placeholder=\"9999.0\">
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_max_age\">";
        // line 33
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 33), "quarantine_max_age", [], "any", false, false, false, 33);
        yield "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_max_age\" name=\"max_age\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "max_age", [], "any", false, false, false, 35), "html", null, true);
        yield "\" min=\"1\" required>
          </div>
        </div>
        <hr>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_redirect\"><i class=\"bi bi-box-arrow-right\"></i> ";
        // line 40
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 40), "quarantine_redirect", [], "any", false, false, false, 40);
        yield "</label>
          <div class=\"col-sm-8\">
            <input type=\"email\" class=\"form-control\" id=\"quarantine_redirect\" name=\"redirect\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "redirect", [], "any", false, false, false, 42), "html", null, true);
        yield "\" placeholder=\"\">
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_bcc\"><i class=\"bi bi-files\"></i> ";
        // line 46
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 46), "quarantine_bcc", [], "any", false, false, false, 46);
        yield "</label>
          <div class=\"col-sm-8\">
            <input type=\"email\" class=\"form-control\" id=\"quarantine_bcc\" name=\"bcc\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "bcc", [], "any", false, false, false, 48), "html", null, true);
        yield "\" placeholder=\"\">
          </div>
        </div>
        <hr>
        <div class=\"row mb-2\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_sender\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 53), "quarantine_notification_sender", [], "any", false, false, false, 53), "html", null, true);
        yield ":</label>
          <div class=\"col-sm-8\">
            <input type=\"email\" class=\"form-control\" id=\"quarantine_sender\" name=\"sender\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "sender", [], "any", false, false, false, 55), "html", null, true);
        yield "\" placeholder=\"quarantine@localhost\">
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_subject\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 59), "quarantine_notification_subject", [], "any", false, false, false, 59), "html", null, true);
        yield ":</label>
          <div class=\"col-sm-8\">
            <input type=\"text\" class=\"form-control\" id=\"quarantine_subject\" name=\"subject\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "subject", [], "any", false, false, false, 61), "html", null, true);
        yield "\" placeholder=\"Spam Quarantine Notification\">
          </div>
        </div>
        <hr>
        <div class=\"row mb-2\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_release_format\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 66), "quarantine_release_format", [], "any", false, false, false, 66), "html", null, true);
        yield ":</label>
          <div class=\"col-sm-8 col-md-6 col-lg-4 col-xl-3\">
            <select data-width=\"100%\" id=\"quarantine_release_format\" name=\"release_format\" class=\"selectpicker\" title=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 68), "select", [], "any", false, false, false, 68), "html", null, true);
        yield "\">
              <option ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "release_format", [], "any", false, false, false, 69) == "raw")) {
            yield "selected";
        }
        yield " value=\"raw\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 69), "quarantine_release_format_raw", [], "any", false, false, false, 69), "html", null, true);
        yield "</option>
              <option ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "release_format", [], "any", false, false, false, 70) == "attachment")) {
            yield "selected";
        }
        yield " value=\"attachment\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 70), "quarantine_release_format_att", [], "any", false, false, false, 70), "html", null, true);
        yield "</option>
            </select>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"exclude_domains\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 75), "quarantine_exclude_domains", [], "any", false, false, false, 75), "html", null, true);
        yield ":</label>
          <div class=\"col-sm-8 col-md-6 col-lg-4 col-xl-3\">
            <select data-width=\"100%\" name=\"exclude_domains\" class=\"selectpicker\" title=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 77), "select", [], "any", false, false, false, 77), "html", null, true);
        yield "\" multiple>
              ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 79
            yield "                <option ";
            if (CoreExtension::inFilter($context["domain"], CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "exclude_domains", [], "any", false, false, false, 79))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "            </select>
          </div>
        </div>
        <hr>
        <legend data-bs-target=\"#quarantine_template\" style=\"cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
          <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 86
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 86), "quarantine_notification_html", [], "any", false, false, false, 86);
        yield "
        </legend>
        <hr />
        <div id=\"quarantine_template\" class=\"collapse\" >
          <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"40\" name=\"html_tmpl\">";
        // line 90
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["q_data"] ?? null), "html_tmpl", [], "any", false, false, false, 90);
        yield "</textarea>
        </div>
        <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"self\" data-id=\"quarantine\" data-api-url='edit/quarantine' data-api-attr='{\"action\":\"settings\"}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 92), "save", [], "any", false, false, false, 92), "html", null, true);
        yield "</button>
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
        return "admin/tab-config-quarantine.twig";
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
        return array (  244 => 92,  239 => 90,  232 => 86,  225 => 81,  212 => 79,  208 => 78,  204 => 77,  199 => 75,  187 => 70,  179 => 69,  175 => 68,  170 => 66,  162 => 61,  157 => 59,  150 => 55,  145 => 53,  137 => 48,  132 => 46,  125 => 42,  120 => 40,  112 => 35,  107 => 33,  100 => 29,  95 => 27,  88 => 23,  83 => 21,  76 => 17,  71 => 15,  67 => 13,  61 => 11,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-quarantine.twig", "/web/templates/admin/tab-config-quarantine.twig");
    }
}
