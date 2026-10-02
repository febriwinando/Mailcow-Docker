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

/* admin/tab-config-dkim.twig */
class __TwigTemplate_64fd76ddd6251a9cab07af18b0c743ca extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-config-dkim\" role=\"tabpanel\" aria-labelledby=\"tab-config-dkim\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-dkim\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-dkim\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "dkim_keys", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "dkim_keys", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-dkim\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <div class=\"btn-group my-4\" role=\"group\">
        <input type=\"checkbox\" id=\"check-dkim_key_valid\" class=\"btn-check\" autocomplete=\"off\" data-bs-toggle=\"collapse\" data-bs-target=\".dkim_key_valid\" checked>
        <label class=\"btn btn-outline-secondary btn-check-label\" for=\"check-dkim_key_valid\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 12), "dkim_key_valid", [], "any", false, false, false, 12), "html", null, true);
        yield "</label>

        <input type=\"checkbox\" id=\"check-dkim_key_unused\" class=\"btn-check\" autocomplete=\"off\" data-bs-toggle=\"collapse\" data-bs-target=\".dkim_key_unused\" checked>
        <label class=\"btn btn-outline-secondary btn-check-label\" for=\"check-dkim_key_unused\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "dkim_key_unused", [], "any", false, false, false, 15), "html", null, true);
        yield "</label>

        <input type=\"checkbox\" id=\"check-dkim_key_missing\" class=\"btn-check\" autocomplete=\"off\" data-bs-toggle=\"collapse\" data-bs-target=\".dkim_key_missing\" checked>
        <label class=\"btn btn-outline-secondary btn-check-label\" for=\"check-dkim_key_missing\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 18), "dkim_key_missing", [], "any", false, false, false, 18), "html", null, true);
        yield "</label>
      </div>
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dkim_domains"] ?? null));
        foreach ($context['_seq'] as $context["domain"] => $context["domain_data"]) {
            // line 21
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 21)) {
                // line 22
                yield "          <div class=\"row collapse show dkim_key_valid\">
            <div class=\"col-md-1\"><input type=\"checkbox\" class=\"form-check-input\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "\"></div>
            <div class=\"col-md-3\">
              <p>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 25), "domain", [], "any", false, false, false, 25), "html", null, true);
                yield ": <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "</strong>
              <p class=\"dkim-label\"><span class=\"badge fs-6 bg-success\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 26), "dkim_key_valid", [], "any", false, false, false, 26), "html", null, true);
                yield "</span></p>
              <p class=\"dkim-label\"><span class=\"badge fs-6 bg-primary\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 27), "dkim_domains_selector", [], "any", false, false, false, 27), "html", null, true);
                yield " '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 27), "dkim_selector", [], "any", false, false, false, 27), "html", null, true);
                yield "'</span></p>
              <p class=\"dkim-label\"><span class=\"badge fs-6 bg-info\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 28), "length", [], "any", false, false, false, 28), "html", null, true);
                yield " bit</span></p>
              </p>
            </div>
            <div class=\"col-md-8\">
              <textarea class=\"form-control\" rows=\"6\" readonly>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 32), "dkim_txt", [], "any", false, false, false, 32), "html", null, true);
                yield "</textarea>
              <small>
                <i class=\"bi bi-arrow-return-right\"></i>
                <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#showDKIMprivKey\" id=\"dkim_priv\" data-priv-key=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 35), "privkey", [], "any", false, false, false, 35), "html", null, true);
                yield "\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 35), "dkim_private_key", [], "any", false, false, false, 35), "html", null, true);
                yield "</a>
              </small>
            </div>
            <hr class=\"d-block d-md-none\">
          </div>
        ";
            } else {
                // line 41
                yield "          <div class=\"row collapse in dkim_key_missing\">
            <div class=\"col-md-1\"><input class=\"dkim_missing\" type=\"checkbox\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "\" disabled></div>
            <div class=\"col-md-3\">
              <p>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 44), "domain", [], "any", false, false, false, 44), "html", null, true);
                yield ": <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "</strong><br><span class=\"badge fs-6 bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 44), "dkim_key_missing", [], "any", false, false, false, 44), "html", null, true);
                yield "</span></p>
            </div>
            <div class=\"col-md-8\"><pre>-</pre></div>
            <hr class=\"d-block d-md-none\">
          </div>
        ";
            }
            // line 50
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["domain_data"], "alias_domains", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["alias_domain"] => $context["alias_domain_data"]) {
                // line 51
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 51)) {
                    // line 52
                    yield "            <div class=\"row collapse in dkim_key_valid\">
              <div class=\"col-md-1\"><input type=\"checkbox\" class=\"form-check-input\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias_domain"], "html", null, true);
                    yield "\"></div>
              <div class=\"col-md-2 offset-md-1\">
                <p><small>↳ Alias-Domain: <strong>";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias_domain"], "html", null, true);
                    yield "</strong></small>
                <p class=\"dkim-label\"><span class=\"badge fs-6 bg-success\">";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 56), "dkim_key_valid", [], "any", false, false, false, 56), "html", null, true);
                    yield "</span></p>
                <p class=\"dkim-label\"><span class=\"badge fs-6 bg-primary\">Selector '";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 57), "dkim_selector", [], "any", false, false, false, 57), "html", null, true);
                    yield "'</span></p>
                <p class=\"dkim-label\"><span class=\"badge fs-6 bg-info\">";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 58), "length", [], "any", false, false, false, 58), "html", null, true);
                    yield " bit</span></p>
                </p>
              </div>
              <div class=\"col-md-8\">
                <pre>";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 62), "dkim_txt", [], "any", false, false, false, 62), "html", null, true);
                    yield "</pre>
                <p data-bs-toggle=\"modal\" data-bs-target=\"#showDKIMprivKey\" id=\"dkim_priv\" style=\"cursor:pointer;margin-top:-8pt\" data-priv-key=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 63), "privkey", [], "any", false, false, false, 63), "html", null, true);
                    yield "\"><small><i class=\"bi bi-arrow-return-right\"></i> Private key</small></p>
              </div>
              <hr class=\"d-block d-md-none\">
            </div>
          ";
                } else {
                    // line 68
                    yield "            <div class=\"row collapse in dkim_key_missing\">
              <div class=\"col-md-1\"><input class=\"dkim_missing\" type=\"checkbox\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias_domain"], "html", null, true);
                    yield "\" disabled></div>
              <div class=\"col-md-2 offset-md-1\">
                <p><small>↳ Alias-Domain: <strong>";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias_domain"], "html", null, true);
                    yield "</strong><br></small><span class=\"badge fs-6 bg-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 71), "dkim_key_missing", [], "any", false, false, false, 71), "html", null, true);
                    yield "</span></p>
              </div>
              <div class=\"col-md-8\"><pre>-</pre></div>
              <hr class=\"d-block d-md-none\">
            </div>
          ";
                }
                // line 77
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['alias_domain'], $context['alias_domain_data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['domain'], $context['domain_data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["dkim_blind_domains"] ?? null), function ($__data__) use ($context, $macros) { $context["data"] = $__data__; return  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 79)); }));
        foreach ($context['_seq'] as $context["blind"] => $context["data"]) {
            // line 80
            yield "        <div class=\"row collapse in dkim_key_unused\">
          <div class=\"col-md-1\"><input type=\"checkbox\" class=\"form-check-input\" data-id=\"dkim\" name=\"multi_select\" value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["blind"], "html", null, true);
            yield "\"></div>
          <div class=\"col-md-3\">
            <p>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 83), "domain", [], "any", false, false, false, 83), "html", null, true);
            yield ": <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["blind"], "html", null, true);
            yield "</strong>
            <p class=\"dkim-label\"><span class=\"badge fs-6 bg-warning\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 84), "dkim_key_unused", [], "any", false, false, false, 84), "html", null, true);
            yield "</span></p>
            <p class=\"dkim-label\"><span class=\"badge fs-6 bg-primary\">Selector '";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 85), "dkim_selector", [], "any", false, false, false, 85), "html", null, true);
            yield "'</span></p>
            <p class=\"dkim-label\"><span class=\"badge fs-6 bg-info\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 86), "length", [], "any", false, false, false, 86), "html", null, true);
            yield " bit</span></p>
            </p>
          </div>
          <div class=\"col-md-8\">
            <pre>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 90), "dkim_txt", [], "any", false, false, false, 90), "html", null, true);
            yield "</pre>
            <p data-bs-toggle=\"modal\" data-bs-target=\"#showDKIMprivKey\" id=\"dkim_priv\" style=\"cursor:pointer;margin-top:-8pt\" data-priv-key=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 91), "privkey", [], "any", false, false, false, 91), "html", null, true);
            yield "\"><small><i class=\"bi bi-arrow-return-right\"></i> Private key</small></p>
          </div>
          <hr class=\"d-block d-md-none\">
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['blind'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group btn-group-sm\">
          <button type=\"button\" id=\"toggle_multi_select_all\" data-id=\"dkim\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\"><i class=\"bi bi-check-all\"></i> ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 99), "toggle_all", [], "any", false, false, false, 99), "html", null, true);
        yield "</button>
          <button type=\"button\" data-action=\"delete_selected\" name=\"delete_selected\" data-id=\"dkim\" data-api-url=\"delete/dkim\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-danger\"><i class=\"bi bi-trash\"></i> ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 100), "remove", [], "any", false, false, false, 100), "html", null, true);
        yield "</button>
        </div>
      </div>

      <legend style=\"margin-top:40px\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 104), "dkim_add_key", [], "any", false, false, false, 104), "html", null, true);
        yield "</legend><hr />
      <form class=\"form\" data-id=\"dkim\" role=\"form\" method=\"post\">
        <div class=\"mb-4\">
          <label for=\"dkim_add_domains\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 107), "domain_s", [], "any", false, false, false, 107), "html", null, true);
        yield "</label>
          <input class=\"form-control input-sm\" id=\"dkim_add_domains\" name=\"domains\" placeholder=\"example.org, example.com\" required>
          <small><i class=\"bi bi-arrow-return-right\"></i> <a href=\"#\" id=\"dkim_missing_keys\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 109), "dkim_domains_wo_keys", [], "any", false, false, false, 109), "html", null, true);
        yield "</a></small>
        </div>
        <div class=\"mb-2\">
          <label for=\"dkim_selector\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 112), "dkim_domains_selector", [], "any", false, false, false, 112), "html", null, true);
        yield "</label>
          <input class=\"form-control input-sm\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\" required>
        </div>
        <div class=\"row mb-4\">
          <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
            <select data-style=\"btn btn-light btn-sm\" class=\"form-control\" id=\"key_size\" name=\"key_size\" title=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 117), "dkim_key_length", [], "any", false, false, false, 117), "html", null, true);
        yield "\" required>
              <option data-subtext=\"bits\">1024</option>
              <option data-subtext=\"bits\">2048</option>
              <option data-subtext=\"bits\">3072</option>
              <option data-subtext=\"bits\">4096</option>
            </select>
          </div>
        </div>
        <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"dkim\" data-api-url='add/dkim' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 125), "add", [], "any", false, false, false, 125), "html", null, true);
        yield "</button>
      </form>

      <legend data-bs-target=\"#import_dkim\" style=\"margin-top:40px;cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 129), "import_private_key", [], "any", false, false, false, 129), "html", null, true);
        yield "
      </legend>
      <hr />
      <div id=\"import_dkim\" class=\"collapse\">
        <form class=\"form\" data-id=\"dkim_import\" role=\"form\" method=\"post\">
          <div class=\"mb-2\">
            <label for=\"dkim_import_domain\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 135), "domain", [], "any", false, false, false, 135), "html", null, true);
        yield ":</label>
            <input class=\"form-control input-sm\" id=\"dkim_import_domain\" name=\"domain\" placeholder=\"example.org\" required>
          </div>
          <div class=\"mb-2\">
            <label for=\"dkim_import_selector\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 139), "dkim_domains_selector", [], "any", false, false, false, 139), "html", null, true);
        yield ":</label>
            <input class=\"form-control input-sm\" id=\"dkim_import_selector\" name=\"dkim_selector\" value=\"dkim\" required>
          </div>
          <div class=\"mb-4\">
            <label for=\"private_key_file\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 143), "private_key", [], "any", false, false, false, 143), "html", null, true);
        yield ": (RSA PKCS#8)</label>
            <textarea class=\"form-control input-sm\" rows=\"10\" name=\"private_key_file\" id=\"private_key_file\" required placeholder=\"-----BEGIN RSA KEY-----\"></textarea>
          </div>
          <div class=\"mb-2\">
            <label>
              <input type=\"checkbox\" class=\"form-check-input\" name=\"overwrite_existing\" value=\"1\"> ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 148), "dkim_overwrite_key", [], "any", false, false, false, 148), "html", null, true);
        yield "
            </label>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"dkim_import\" data-api-url='add/dkim_import' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 151), "import", [], "any", false, false, false, 151), "html", null, true);
        yield "</button>
        </form>
      </div>

      <legend data-bs-target=\"#duplicate_dkim\" style=\"margin-top:40px;cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 156), "duplicate_dkim", [], "any", false, false, false, 156), "html", null, true);
        yield "
      </legend>
      <hr />
      <div id=\"duplicate_dkim\" class=\"collapse\">
        <form class=\"form-horizontal\" data-id=\"dkim_duplicate\" role=\"form\" method=\"post\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"from_domain\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 162), "dkim_from", [], "any", false, false, false, 162), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10 col-md-6 col-lg-4 col-xl-3\">
              <select data-style=\"btn btn-light btn-sm\"
                      data-live-search=\"true\"
                      data-id=\"dkim_duplicate\"
                      title=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 167), "dkim_from_title", [], "any", false, false, false, 167), "html", null, true);
        yield "\"
                      name=\"from_domain\" id=\"from_domain\" class=\"full-width-select form-control\" required>
                ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dkim_domains_with_keys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dkim_domain"]) {
            // line 170
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dkim_domain"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dkim_domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dkim_domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"to_domain\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 176), "dkim_to", [], "any", false, false, false, 176), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10 col-md-6 col-lg-4 col-xl-3\">
              <select
                data-live-search=\"true\"
                data-style=\"btn btn-light btn-sm\"
                data-id=\"dkim_duplicate\"
                title=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 182), "dkim_to_title", [], "any", false, false, false, 182), "html", null, true);
        yield "\"
                name=\"to_domain\" id=\"to_domain\" class=\"full-width-select form-control\" multiple required>
                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 185
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "              </select>
            </div>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"dkim_duplicate\" data-api-url='add/dkim_duplicate' data-api-attr='{}' href=\"#\"><i class=\"bi bi-clipboard-plus\"></i> ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 190), "duplicate", [], "any", false, false, false, 190), "html", null, true);
        yield "</button>
        </form>
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
        return "admin/tab-config-dkim.twig";
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
        return array (  462 => 190,  457 => 187,  446 => 185,  442 => 184,  437 => 182,  428 => 176,  422 => 172,  411 => 170,  407 => 169,  402 => 167,  394 => 162,  385 => 156,  377 => 151,  371 => 148,  363 => 143,  356 => 139,  349 => 135,  340 => 129,  333 => 125,  322 => 117,  314 => 112,  308 => 109,  303 => 107,  297 => 104,  290 => 100,  286 => 99,  281 => 96,  270 => 91,  266 => 90,  259 => 86,  255 => 85,  251 => 84,  245 => 83,  240 => 81,  237 => 80,  232 => 79,  226 => 78,  220 => 77,  209 => 71,  204 => 69,  201 => 68,  193 => 63,  189 => 62,  182 => 58,  178 => 57,  174 => 56,  170 => 55,  165 => 53,  162 => 52,  159 => 51,  154 => 50,  141 => 44,  136 => 42,  133 => 41,  122 => 35,  116 => 32,  109 => 28,  103 => 27,  99 => 26,  93 => 25,  88 => 23,  85 => 22,  82 => 21,  78 => 20,  73 => 18,  67 => 15,  61 => 12,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-dkim.twig", "/web/templates/admin/tab-config-dkim.twig");
    }
}
