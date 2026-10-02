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

/* admin/tab-globalfilter-regex.twig */
class __TwigTemplate_32b7edcf9ccfc46c40f92b8697a4f07f extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-globalfilter-regex\" role=\"tabpanel\" aria-labelledby=\"tab-globalfilter-regex\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-regex\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-regex\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "rspamd_global_filters", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "rspamd_global_filters", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-regex\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <p>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "rspamd_global_filters_info", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
      <div id=\"confirm_show_rspamd_global_filters\"";
        // line 11
        if (($context["show_rspamd_global_filters"] ?? null)) {
            yield " class=\"d-none\"";
        }
        yield ">
        <div class=\"row\">
          <div class=\"offset-sm-2 col-sm-10\">
            <label>
              <input type=\"checkbox\" class=\"form-check-input\" id=\"show_rspamd_global_filters\"> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "rspamd_global_filters_agree", [], "any", false, false, false, 15), "html", null, true);
        yield "
            </label>
          </div>
        </div>
      </div>
      <div id=\"rspamd_global_filters\"";
        // line 20
        if ((($context["show_rspamd_global_filters"] ?? null) != true)) {
            yield " class=\"d-none\"";
        }
        yield ">
        <hr>
        <span class=\"anchor\" id=\"regexmaps\"></span>
        <h4>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 23), "regex_maps", [], "any", false, false, false, 23), "html", null, true);
        yield "</h4>
        <p>";
        // line 24
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "rspamd_global_filters_regex", [], "any", false, false, false, 24);
        yield "</p>
        <ul>
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rspamd_regex_maps"] ?? null));
        foreach ($context['_seq'] as $context["rspamd_regex_desc"] => $context["rspamd_regex_map"]) {
            // line 27
            yield "            <li><a href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 27), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rspamd_regex_desc"], "html", null, true);
            yield "</a> (<small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 27), "html", null, true);
            yield "</small>)</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['rspamd_regex_desc'], $context['rspamd_regex_map'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "        </ul>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rspamd_regex_maps"] ?? null));
        foreach ($context['_seq'] as $context["rspamd_regex_desc"] => $context["rspamd_regex_map"]) {
            // line 31
            yield "        <hr>
        <span class=\"anchor\" id=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 32), "html", null, true);
            yield "\"></span>
        <form class=\"form-horizontal\" data-cached-form=\"false\" data-id=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 33), "html", null, true);
            yield "\" role=\"form\" method=\"post\">
          <div class=\"row\">
            <label class=\"control-label col-sm-3\" for=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 35), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rspamd_regex_desc"], "html", null, true);
            yield "<br><small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 35), "html", null, true);
            yield "</small></label>
            <div class=\"col-sm-9\">
              <textarea id=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 37), "html", null, true);
            yield "\" spellcheck=\"false\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"10\" name=\"rspamd_map_data\" required>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "data", [], "any", false, false, false, 37), "html", null, true);
            yield "</textarea>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-3 col-sm-9\">
              <div class=\"btn-group mt-2\">
                <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary validate_rspamd_regex\" data-regex-map=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 43), "html", null, true);
            yield "\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 43), "validate", [], "any", false, false, false, 43), "html", null, true);
            yield "</button>
                <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success submit_rspamd_regex\" data-action=\"edit_selected\" data-id=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 44), "html", null, true);
            yield "\" data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 44), "html", null, true);
            yield "\" data-api-url='edit/rspamd-map' data-api-attr='{}' href=\"#\" disabled>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 44), "save", [], "any", false, false, false, 44), "html", null, true);
            yield "</button>
              </div>
            </div>
          </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['rspamd_regex_desc'], $context['rspamd_regex_map'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "      </div>
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
        return "admin/tab-globalfilter-regex.twig";
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
        return array (  175 => 50,  159 => 44,  153 => 43,  142 => 37,  133 => 35,  128 => 33,  124 => 32,  121 => 31,  117 => 30,  114 => 29,  101 => 27,  97 => 26,  92 => 24,  88 => 23,  80 => 20,  72 => 15,  63 => 11,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-globalfilter-regex.twig", "/web/templates/admin/tab-globalfilter-regex.twig");
    }
}
