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

/* user/SpamAliases.twig */
class __TwigTemplate_e2b86e79a01744ed77238b62685f3d03 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"SpamAliases\" role=\"tabpanel\" aria-labelledby=\"SpamAliases\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-SpamAliases\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-SpamAliases\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 5), "spam_aliases", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 7), "spam_aliases", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-SpamAliases\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-12\">
          <table id=\"tla_table\" class=\"table table-striped dt-responsive w-100\"></table>
        </div>
      </div>
      <div class=\"mass-actions-user\">
        <div class=\"btn-group\" data-acl=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_alias", [], "any", false, false, false, 16), "html", null, true);
        yield "\">
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"tla\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 18), "toggle_all", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 19), "quick_actions", [], "any", false, false, false, 19), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tla\" data-api-url='edit/time_limited_alias' data-api-attr='{\"validity\":\"1\"}' href=\"#\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 21), "expire_in", [], "any", false, false, false, 21), "html", null, true);
        yield " 1 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 21), "hour", [], "any", false, false, false, 21), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tla\" data-api-url='edit/time_limited_alias' data-api-attr='{\"validity\":\"24\"}' href=\"#\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 22), "expire_in", [], "any", false, false, false, 22), "html", null, true);
        yield " 1 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 22), "day", [], "any", false, false, false, 22), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tla\" data-api-url='edit/time_limited_alias' data-api-attr='{\"validity\":\"168\"}' href=\"#\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 23), "expire_in", [], "any", false, false, false, 23), "html", null, true);
        yield " 1 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 23), "week", [], "any", false, false, false, 23), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tla\" data-api-url='edit/time_limited_alias' data-api-attr='{\"validity\":\"744\"}' href=\"#\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 24), "expire_in", [], "any", false, false, false, 24), "html", null, true);
        yield " 1 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 24), "month", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tla\" data-api-url='edit/time_limited_alias' data-api-attr='{\"validity\":\"8760\"}' href=\"#\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 25), "expire_in", [], "any", false, false, false, 25), "html", null, true);
        yield " 1 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 25), "year", [], "any", false, false, false, 25), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tla\" data-api-url='edit/time_limited_alias' data-api-attr='{\"validity\":\"87600\"}' href=\"#\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 26), "expire_in", [], "any", false, false, false, 26), "html", null, true);
        yield " 10 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 26), "years", [], "any", false, false, false, 26), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"tla\" data-api-url='delete/time_limited_alias' href=\"#\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 28), "remove", [], "any", false, false, false, 28), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm d-block d-sm-inline btn-success dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 32), "alias_create_random", [], "any", false, false, false, 32), "html", null, true);
        yield ", 1 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 32), "year", [], "any", false, false, false, 32), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user_domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 35
            yield "                <li>
                  <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#tempAliasModal\" onclick='\$(\"#tempAliasModal #temp_alias_domain\").val(\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "\")' href=\"#\">
                    @ ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "
                  </a>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "            </ul>
          </div>
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
        return "user/SpamAliases.twig";
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
        return array (  151 => 41,  141 => 37,  137 => 36,  134 => 35,  130 => 34,  123 => 32,  116 => 28,  109 => 26,  103 => 25,  97 => 24,  91 => 23,  85 => 22,  79 => 21,  74 => 19,  70 => 18,  65 => 16,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/SpamAliases.twig", "/web/templates/user/SpamAliases.twig");
    }
}
