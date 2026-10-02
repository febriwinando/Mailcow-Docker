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

/* admin/tab-config-rsettings.twig */
class __TwigTemplate_e7ec639fb071bd927df085224dbc79f0 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-config-rsettings\" role=\"tabpanel\" aria-labelledby=\"tab-config-rsettings\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-rsettings\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-rsettings\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "rspamd_settings_map", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "rspamd_settings_map", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-rsettings\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <legend data-bs-target=\"#active_settings_map\" style=\"cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 11), "active_rspamd_settings_map", [], "any", false, false, false, 11), "html", null, true);
        yield "
      </legend>
      <hr />
      <div id=\"active_settings_map\" class=\"collapse\" >
        <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"20\" name=\"settings_map\" readonly>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rsettings_map"] ?? null), "html", null, true);
        yield "</textarea>
      </div>
      <br>
      <form class=\"form\" data-id=\"rsettings\" role=\"form\" method=\"post\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <div class=\"list-group\">
              ";
        // line 22
        if ( !($context["rsettings"] ?? null)) {
            // line 23
            yield "
              ";
        }
        // line 25
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rsettings"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rsetting"]) {
            // line 26
            yield "                <a href=\"#\" class=\"list-group-item list-group-item-";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 26), "active", [], "any", false, false, false, 26)) {
                yield "success";
            }
            yield "\" data-dont-remember=\"1\" data-bs-target=\"#settings_tab";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\" data-bs-toggle=\"tab\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 26), "desc", [], "any", false, false, false, 26), "html", null, true);
            yield " (ID #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield ")</a>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            yield "                <span class=\"list-group-item\"><em>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 28), "rsetting_none", [], "any", false, false, false, 28), "html", null, true);
            yield "</em></span>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rsetting'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "              <a href=\"#\" class=\"list-group-item list-group-item-default\"
                 data-bs-toggle=\"modal\"
                 data-dont-remember=\"1\"
                 data-bs-target=\"#addRsettingModal\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 33), "rsetting_add_rule", [], "any", false, false, false, 33), "html", null, true);
        yield "</a>
            </div>
          </div>
          <div class=\"col-sm-9\">
            <div class=\"tab-content\">
              ";
        // line 38
        if ( !($context["rsettings"] ?? null)) {
            // line 39
            yield "                <div id=\"none\" class=\"tab-pane active\">
                  <p class=\"text-muted\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 40), "rsetting_none", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                </div>
              ";
        } else {
            // line 43
            yield "                <div id=\"none\" class=\"tab-pane active\">
                  <p class=\"text-muted\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 44), "rsetting_no_selection", [], "any", false, false, false, 44), "html", null, true);
            yield "</p>
                </div>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rsettings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rsetting"]) {
                // line 47
                yield "                  <div id=\"settings_tab";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                yield "\" class=\"tab-pane rsettings\">
                    <form class=\"form\" data-id=\"rsettings\" role=\"form\" method=\"post\">
                      <input type=\"hidden\" name=\"active\" value=\"0\">
                      <div>
                        <label for=\"rsettings_desc\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 51), "rsetting_desc", [], "any", false, false, false, 51), "html", null, true);
                yield ":</label>
                        <input type=\"text\" class=\"form-control\" id=\"rsettings_desc\" name=\"desc\" value=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 52), "desc", [], "any", false, false, false, 52), "html", null, true);
                yield "\">
                      </div>
                      <div class=\"mt-4\">
                        <label for=\"rsettings_content\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 55), "rsetting_content", [], "any", false, false, false, 55), "html", null, true);
                yield ":</label>
                        <textarea class=\"form-control\" id=\"rsettings_content\" name=\"content\" rows=\"10\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 56), "content", [], "any", false, false, false, 56), "html", null, true);
                yield "</textarea>
                      </div>
                      <div class=\"mt-4 mb-2\">
                        <label>
                          <input type=\"checkbox\" class=\"form-check-input\" name=\"active\" value=\"1\" ";
                // line 60
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 60), "active", [], "any", false, false, false, 60)) {
                    yield "checked";
                }
                yield "> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 60), "active", [], "any", false, false, false, 60), "html", null, true);
                yield "
                        </label>
                      </div>
                      <div class=\"btn-group\">
                      <button class=\"btn btn-sm btn-xs-lg btn-success\" data-action=\"edit_selected\" data-item=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
                yield "\" data-id=\"rsettings\" data-api-url='edit/rsetting' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 64), "save", [], "any", false, false, false, 64), "html", null, true);
                yield "</button>
                      <button class=\"btn btn-sm btn-xs-lg btn-danger\" data-action=\"delete_selected\" data-item=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
                yield "\" data-id=\"rsettings\" data-api-url=\"delete/rsetting\" data-api-attr='{}' href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 65), "remove", [], "any", false, false, false, 65), "html", null, true);
                yield "</button>
                      </div>
                    </form>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rsetting'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "              ";
        }
        // line 71
        yield "            </div>
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
        return "admin/tab-config-rsettings.twig";
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
        return array (  212 => 71,  209 => 70,  196 => 65,  190 => 64,  179 => 60,  172 => 56,  168 => 55,  162 => 52,  158 => 51,  150 => 47,  146 => 46,  141 => 44,  138 => 43,  132 => 40,  129 => 39,  127 => 38,  119 => 33,  114 => 30,  105 => 28,  89 => 26,  83 => 25,  79 => 23,  77 => 22,  67 => 15,  60 => 11,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-rsettings.twig", "/web/templates/admin/tab-config-rsettings.twig");
    }
}
