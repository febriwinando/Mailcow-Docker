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

/* quarantine.twig */
class __TwigTemplate_d9b312a60eb0a4ac40960b38c07e63ea extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "quarantine.twig", 1);
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
        yield "<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"card card-xs-lg\">
      <div class=\"card-header d-flex\">
        ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 8), "quarantine", [], "any", false, false, false, 8), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
        <div class=\"btn-group ms-auto\">
          <button class=\"btn btn-xs btn-xs-lg btn-secondary refresh_table\" data-draw=\"draw_quarantine_table\" data-table=\"quarantinetable\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"mass-actions-quarantine mb-4\">
          <div class=\"btn-group\" data-acl=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"qitems\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 19), "expand_all", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 20), "collapse_all", [], "any", false, false, false, 20), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"release\"}' href=\"#\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 22), "deliver_inbox", [], "any", false, false, false, 22), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"learnspam\"}' href=\"#\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 24), "learn_spam_delete", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"qitems\" data-api-url='delete/qitem' href=\"#\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 26), "remove", [], "any", false, false, false, 26), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
        </div>
        <p class=\"text-muted\">";
        // line 30
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 30), "qinfo", [], "any", false, false, false, 30);
        yield "</p>
        <p>
          ";
        // line 32
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "retention_size", [], "any", false, false, false, 32) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "max_size", [], "any", false, false, false, 32))) {
            // line 33
            yield "          <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 33), "disabled_by_config", [], "any", false, false, false, 33), "html", null, true);
            yield "</div>
          ";
        } else {
            // line 35
            yield "          <p style=\"margin:10px\" class=\"text-muted\">
            ";
            // line 36
            yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 36), "settings_info", [], "any", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "retention_size", [], "any", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "max_size", [], "any", false, false, false, 36));
            yield "
          </p>
          ";
        }
        // line 39
        yield "        </p>
        <table id=\"quarantinetable\" class=\"table table-striped w-100\"></table>
        <div class=\"mass-actions-quarantine mt-4\">
          <div class=\"btn-group\" data-acl=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine", [], "any", false, false, false, 42), "html", null, true);
        yield "\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"qitems\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 43), "toggle_all", [], "any", false, false, false, 43), "html", null, true);
        yield "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 44), "quick_actions", [], "any", false, false, false, 44), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 46), "expand_all", [], "any", false, false, false, 46), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 47), "collapse_all", [], "any", false, false, false, 47), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"release\"}' href=\"#\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 49), "deliver_inbox", [], "any", false, false, false, 49), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"learnspam\"}' href=\"#\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 51), "learn_spam_delete", [], "any", false, false, false, 51), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"qitems\" data-api-url='delete/qitem' href=\"#\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 53), "remove", [], "any", false, false, false, 53), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /col-md-12 -->
</div> <!-- /row -->

";
        // line 62
        yield from         $this->loadTemplate("modals/quarantine.twig", "quarantine.twig", 62)->unwrap()->yield($context);
        // line 63
        yield "
<script type='text/javascript'>
var acl = '";
        // line 65
        yield ($context["acl_json"] ?? null);
        yield "';
var lang = ";
        // line 66
        yield ($context["lang_quarantine"] ?? null);
        yield ";
var lang_datatables = ";
        // line 67
        yield ($context["lang_datatables"] ?? null);
        yield ";
var csrf_token = '";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
var pagination_size = Math.trunc('";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagination_size"] ?? null), "html", null, true);
        yield "');
var role = '";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["role"] ?? null), "html", null, true);
        yield "';
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quarantine.twig";
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
        return array (  213 => 70,  209 => 69,  205 => 68,  201 => 67,  197 => 66,  193 => 65,  189 => 63,  187 => 62,  175 => 53,  170 => 51,  165 => 49,  160 => 47,  156 => 46,  151 => 44,  147 => 43,  143 => 42,  138 => 39,  132 => 36,  129 => 35,  123 => 33,  121 => 32,  116 => 30,  109 => 26,  104 => 24,  99 => 22,  94 => 20,  90 => 19,  85 => 17,  81 => 16,  77 => 15,  69 => 10,  64 => 8,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "quarantine.twig", "/web/templates/quarantine.twig");
    }
}
