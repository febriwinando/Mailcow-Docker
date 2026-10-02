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

/* admin/tab-config-password-settings.twig */
class __TwigTemplate_281df3bdb04c769141800afcf4e0c5d9 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-config-password-settings\" role=\"tabpanel\" aria-labelledby=\"tab-config-password-settings\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-password-settings\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-password-settings\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "password_settings", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "password_settings", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-password-settings\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <form class=\"form-horizontal\" data-id=\"passwordpolicy\" role=\"form\" method=\"post\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <legend>
              ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 14), "password_policy", [], "any", false, false, false, 14), "html", null, true);
        yield "
            </legend>
            <hr />
          </div>
        </div>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["password_complexity"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 20
            yield "          ";
            if (($context["name"] == "length")) {
                // line 21
                yield "            <div class=\"row mb-4\">
              <label class=\"control-label col-sm-3 text-sm-end\" for=\"length\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 22), "password_length", [], "any", false, false, false, 22), "html", null, true);
                yield ":</label>
              <div class=\"col-sm-2\">
                <input type=\"number\" class=\"form-control\" min=\"3\" max=\"64\" name=\"length\" id=\"length\" value=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\" required>
              </div>
            </div>
          ";
            } else {
                // line 28
                yield "            <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\" value=\"0\">
            <div class=\"row mb-2\">
              <div class=\"offset-sm-3 col-sm-9\">
                <label>
                  <input type=\"checkbox\" class=\"form-check-input\" name=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\" value=\"1\" ";
                if (($context["value"] == 1)) {
                    yield "checked";
                }
                yield "> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("password_policy_" . $context["name"])] ?? null) : null), "html", null, true);
                yield "
                </label>
              </div>
            </div>
          ";
            }
            // line 37
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        <div class=\"row mt-4 mb-2\">
          <div class=\"offset-sm-3 col-sm-9\">
            <div class=\"btn-group\">
              <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-item=\"passwordpolicy\" data-action=\"edit_selected\" data-id=\"passwordpolicy\" data-api-url='edit/passwordpolicy' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 41), "save", [], "any", false, false, false, 41), "html", null, true);
        yield "</button>
            </div>
          </div>
        </div>
      </form>

      <form class=\"form\" role=\"form\" data-id=\"pw_reset_notification\" method=\"post\" style=\"margin-top: 50px;\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <legend>
              ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 51), "password_reset_settings", [], "any", false, false, false, 51), "html", null, true);
        yield "
            </legend>
            <hr />
            <small>";
        // line 54
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 54), "reset_password_vars", [], "any", false, false, false, 54);
        yield "</small><br><br>
          </div>
        </div>
        <div class=\"row mb-4\">
          <div class=\"col-sm-6\">
            <div>
              <label for=\"pw_reset_from\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 60), "quota_notification_sender", [], "any", false, false, false, 60), "html", null, true);
        yield ":</label>
              <input type=\"email\" class=\"form-control\" id=\"pw_reset_from\" name=\"from\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pw_reset_data"] ?? null), "from", [], "any", false, false, false, 61), "html", null, true);
        yield "\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div>
              <label for=\"pw_reset_subject\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 66), "quota_notification_subject", [], "any", false, false, false, 66), "html", null, true);
        yield ":</label>
              <input type=\"text\" class=\"form-control\" id=\"pw_reset_subject\" name=\"subject\" value=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pw_reset_data"] ?? null), "subject", [], "any", false, false, false, 67), "html", null, true);
        yield "\">
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12\" data-bs-target=\"#text_template\" style=\"cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
            <span class=\"d-block\"><i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 73), "password_reset_tmpl_text", [], "any", false, false, false, 73), "html", null, true);
        yield "</span>
            <small>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 74), "restore_template", [], "any", false, false, false, 74), "html", null, true);
        yield "</small>
          </div>
          <div id=\"text_template\" class=\"col-12 collapse\">
            <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code mb-2\" rows=\"20\" name=\"text_tmpl\">";
        // line 77
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["pw_reset_data"] ?? null), "text_tmpl", [], "any", false, false, false, 77);
        yield "</textarea>
          </div>
          <div class=\"col-12 mt-3\" data-bs-target=\"#html_template\" style=\"cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
            <span class=\"d-block\"><i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 80), "password_reset_tmpl_html", [], "any", false, false, false, 80), "html", null, true);
        yield "</span>
            <small>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 81), "restore_template", [], "any", false, false, false, 81), "html", null, true);
        yield "</small>
          </div>
          <div id=\"html_template\" class=\"col-12 collapse\">
            <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"20\" name=\"html_tmpl\">";
        // line 84
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["pw_reset_data"] ?? null), "html_tmpl", [], "any", false, false, false, 84);
        yield "</textarea>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-10\">
            <div>
              <br>
              <a type=\"button\" class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"edit_selected\"
                 data-item=\"pw_reset_notification\"
                 data-id=\"pw_reset_notification\"
                 data-api-url='edit/reset-password-notification'
                 data-api-attr='{}'><i class=\"bi bi-check-lg\"></i> ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 95), "save_changes", [], "any", false, false, false, 95), "html", null, true);
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
        return "admin/tab-config-password-settings.twig";
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
        return array (  221 => 95,  207 => 84,  201 => 81,  197 => 80,  191 => 77,  185 => 74,  181 => 73,  172 => 67,  168 => 66,  160 => 61,  156 => 60,  147 => 54,  141 => 51,  128 => 41,  123 => 38,  117 => 37,  101 => 32,  93 => 28,  86 => 24,  81 => 22,  78 => 21,  75 => 20,  71 => 19,  63 => 14,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-password-settings.twig", "/web/templates/admin/tab-config-password-settings.twig");
    }
}
