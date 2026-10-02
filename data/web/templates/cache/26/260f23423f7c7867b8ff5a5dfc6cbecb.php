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

/* modals/quarantine.twig */
class __TwigTemplate_e52696b9507918d7aa6efea9bdffa220 extends Template
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
        yield "<div class=\"modal fade\" id=\"qidDetailModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\"><i class=\"bi bi-info-circle-fill\"></i> ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 5), "qitem", [], "any", false, false, false, 5), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"qid_error\" style=\"display:none\" class=\"alert alert-danger\"></div>
        <div>
          <label for=\"qid_detail_symbols\"><h4>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 11), "rspamd_result", [], "any", false, false, false, 11), "html", null, true);
        yield ":</h4></label>
          <p>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 12), "spam_score", [], "any", false, false, false, 12), "html", null, true);
        yield ": <span id=\"qid_detail_score\"></span></p>
          <hr>
          <p id=\"qid_detail_symbols\"></p>
        </div>
        <div>
          <label for=\"qid_detail_subj\"><h4>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 17), "subj", [], "any", false, false, false, 17), "html", null, true);
        yield ":</h4></label>
          <p id=\"qid_detail_subj\"></p>
        </div>
        <div>
          <label for=\"qid_detail_recipients\"><h4>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 21), "recipients", [], "any", false, false, false, 21), "html", null, true);
        yield ":</h4></label>
          <p id=\"qid_detail_recipients\"></p>
        </div>
        <div>
          <label for=\"qid_detail_hfrom\"><h4>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 25), "sender_header", [], "any", false, false, false, 25), "html", null, true);
        yield ":</h4></label>
          <p><span class=\"mail-address-item\" id=\"qid_detail_hfrom\"></span></p>
        </div>
        <div>
          <label for=\"qid_detail_efrom\"><h4>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 29), "sender", [], "any", false, false, false, 29), "html", null, true);
        yield ":</h4></label>
          <p><span class=\"mail-address-item\" id=\"qid_detail_efrom\"></span></p>
        </div>
        <div>
          <label for=\"qid_detail_fuzzy\"><h4>Fuzzy Hashes:</h4></label>
          <p id=\"qid_detail_fuzzy\"></p>
        </div>
        <div id=\"qTextPlain\">
          <label for=\"qid_detail_text\"><h4>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 37), "text_plain_content", [], "any", false, false, false, 37), "html", null, true);
        yield ":</h4></label>
          <pre id=\"qid_detail_text\"></pre>
        </div>
        <div id=\"qTextHtml\">
          <label for=\"qid_detail_text_from_html\"><h4>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 41), "text_from_html_content", [], "any", false, false, false, 41), "html", null, true);
        yield ":</h4></label>
          <pre id=\"qid_detail_text_from_html\"></pre>
        </div>
        ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_attachments", [], "any", false, false, false, 44) == 1)) {
            // line 45
            yield "        <div>
          <label for=\"qid_detail_atts\"><h4>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 46), "atts", [], "any", false, false, false, 46), "html", null, true);
            yield ":</h4></label>
          <div id=\"qid_detail_atts\">-</div>
        </div>
        ";
        }
        // line 50
        yield "        <div class=\"btn-group dropup\" data-acl=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine", [], "any", false, false, false, 50), "html", null, true);
        yield "\">
          <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 51), "quick_actions", [], "any", false, false, false, 51), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems_single\" data-item=\"\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"release\"}' href=\"#\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 53), "deliver_inbox", [], "any", false, false, false, 53), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems_single\" data-item=\"\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"learnspam\"}' href=\"#\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 55), "learn_spam_delete", [], "any", false, false, false, 55), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-id=\"qitems_single\" data-item=\"\" id=\"quick_download_link\" href=\"#\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 57), "download_eml", [], "any", false, false, false, 57), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-id=\"qitems_single\" data-item=\"\" id=\"quick_release_link\" href=\"#\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 59), "quick_release_link", [], "any", false, false, false, 59), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-id=\"qitems_single\" data-item=\"\" id=\"quick_delete_link\" href=\"#\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 60), "quick_delete_link", [], "any", false, false, false, 60), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"qitems_single\" data-item=\"\" data-api-url='delete/qitem' href=\"#\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 62), "remove", [], "any", false, false, false, 62), "html", null, true);
        yield "</a></li>
          </ul>
        </div>
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
        return "modals/quarantine.twig";
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
        return array (  160 => 62,  155 => 60,  151 => 59,  146 => 57,  141 => 55,  136 => 53,  131 => 51,  126 => 50,  119 => 46,  116 => 45,  114 => 44,  108 => 41,  101 => 37,  90 => 29,  83 => 25,  76 => 21,  69 => 17,  61 => 12,  57 => 11,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modals/quarantine.twig", "/web/templates/modals/quarantine.twig");
    }
}
