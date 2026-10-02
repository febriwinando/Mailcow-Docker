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

/* admin/tab-config-oauth2.twig */
class __TwigTemplate_88c668bf932ee73b05033b54c2c588ef extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-config-oauth2\" role=\"tabpanel\" aria-labelledby=\"tab-config-oauth2\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-oauth2\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-oauth2\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "oauth2_apps", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "oauth2_apps", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-config-oauth2\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <p>";
        // line 10
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "oauth2_info", [], "any", false, false, false, 10);
        yield "</p>
      <table id=\"oauth2clientstable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"oauth2_clients\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 14), "toggle_all", [], "any", false, false, false, 14), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 15), "quick_actions", [], "any", false, false, false, 15), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"oauth2_clients\" data-api-url='delete/oauth2-client' href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "remove", [], "any", false, false, false, 17), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"oauth2_clients\" data-api-url='edit/oauth2-client' data-api-attr='{\"revoke_tokens\":\"1\"}' href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 19), "oauth2_revoke_tokens", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"oauth2_clients\" data-api-url='edit/oauth2-client' data-api-attr='{\"renew_secret\":\"1\"}' href=\"#\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "oauth2_renew_secret", [], "any", false, false, false, 21), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm d-block d-sm-inline btn-success\" data-id=\"add_oauth2_client\" data-bs-toggle=\"modal\" data-bs-target=\"#addOAuth2ClientModal\" href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 23), "oauth2_add_client", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>
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
        return "admin/tab-config-oauth2.twig";
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
        return array (  90 => 23,  85 => 21,  80 => 19,  75 => 17,  70 => 15,  66 => 14,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/tab-config-oauth2.twig", "/web/templates/admin/tab-config-oauth2.twig");
    }
}
