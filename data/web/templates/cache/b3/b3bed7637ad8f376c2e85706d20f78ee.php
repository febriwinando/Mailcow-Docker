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

/* admin.twig */
class __TwigTemplate_c799574c1f0c39711ee4858eafd3389d extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "admin.twig", 1);
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
        yield "<div id=\"admin-content\" class=\"responsive-tabs\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "access", [], "any", false, false, false, 7), "html", null, true);
        yield "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item active\" data-bs-target=\"#tab-config-admins\" aria-selected=\"false\" aria-controls=\"tab-config-admins\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 9), "admins", [], "any", false, false, false, 9), "html", null, true);
        yield "</button></li>
        <!-- <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-ldap-admins\" aria-controls=\"tab-config-ldap-admins\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "admins_ldap", [], "any", false, false, false, 10), "html", null, true);
        yield "</button></li> -->
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-oauth2\" aria-selected=\"false\" aria-controls=\"tab-config-oauth2\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 11), "oauth2_apps", [], "any", false, false, false, 11), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-rspamd\" aria-selected=\"false\" aria-controls=\"tab-config-rspamd\" role=\"tab\" data-bs-toggle=\"tab\">Rspamd UI</button></li>
      </ul>
    </li>

    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 17), "options", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-dkim\" aria-selected=\"false\" aria-controls=\"tab-config-dkim\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 19), "dkim_keys", [], "any", false, false, false, 19), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-fwdhosts\" aria-selected=\"false\" aria-controls=\"tab-config-fwdhosts\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 20), "forwarding_hosts", [], "any", false, false, false, 20), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-f2b\" aria-selected=\"false\" aria-controls=\"tab-config-f2b\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "f2b_parameters", [], "any", false, false, false, 21), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-quarantine\" aria-selected=\"false\" aria-controls=\"tab-config-quarantine\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 22), "quarantine", [], "any", false, false, false, 22), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-quota\" aria-selected=\"false\" aria-controls=\"tab-config-quota\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 23), "quota_notifications", [], "any", false, false, false, 23), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-rsettings\" aria-selected=\"false\" aria-controls=\"tab-config-rsettings\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "rspamd_settings_map", [], "any", false, false, false, 24), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-password-settings\" aria-selected=\"false\" aria-controls=\"tab-config-password-settings\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 25), "password_settings", [], "any", false, false, false, 25), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-customize\" aria-selected=\"false\" aria-controls=\"tab-config-customize\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 26), "customize", [], "any", false, false, false, 26), "html", null, true);
        yield "</button></li>
      </ul>
    </li>
    <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-target=\"#tab-routing\" aria-selected=\"false\" aria-controls=\"tab-routing\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 29), "routing", [], "any", false, false, false, 29), "html", null, true);
        yield "</button></li>
    <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-target=\"#tab-sys-mails\" aria-selected=\"false\" aria-controls=\"tab-sys-mails\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 30), "sys_mails", [], "any", false, false, false, 30), "html", null, true);
        yield "</button></li>
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 32), "rspamd_global_filters", [], "any", false, false, false, 32), "html", null, true);
        yield "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-globalfilter-regex\" aria-selected=\"false\" aria-controls=\"tab-globalfilter-regex\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 34), "regex_maps", [], "any", false, false, false, 34), "html", null, true);
        yield "</button></li>
      </ul>
    </li>
  </ul>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tab-content\" style=\"padding-top:20px\">
        ";
        // line 42
        yield from         $this->loadTemplate("admin/tab-config-admins.twig", "admin.twig", 42)->unwrap()->yield($context);
        // line 43
        yield "        ";
        // line 44
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-oauth2.twig", "admin.twig", 44)->unwrap()->yield($context);
        // line 45
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-rspamd.twig", "admin.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-routing.twig", "admin.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-dkim.twig", "admin.twig", 47)->unwrap()->yield($context);
        // line 48
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-fwdhosts.twig", "admin.twig", 48)->unwrap()->yield($context);
        // line 49
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-f2b.twig", "admin.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-quarantine.twig", "admin.twig", 50)->unwrap()->yield($context);
        // line 51
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-quota.twig", "admin.twig", 51)->unwrap()->yield($context);
        // line 52
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-rsettings.twig", "admin.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-customize.twig", "admin.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-config-password-settings.twig", "admin.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-sys-mails.twig", "admin.twig", 55)->unwrap()->yield($context);
        // line 56
        yield "        ";
        yield from         $this->loadTemplate("admin/tab-globalfilter-regex.twig", "admin.twig", 56)->unwrap()->yield($context);
        // line 57
        yield "      </div>
    </div> <!-- /col-md-12 -->
  </div> <!-- /row -->
</div>

";
        // line 62
        yield from         $this->loadTemplate("modals/admin.twig", "admin.twig", 62)->unwrap()->yield($context);
        // line 63
        yield "
<script type='text/javascript'>
var lang = ";
        // line 65
        yield ($context["lang_admin"] ?? null);
        yield ";
var lang_datatables = ";
        // line 66
        yield ($context["lang_datatables"] ?? null);
        yield ";
var admin_username = '";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "';
var csrf_token = '";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
var pagination_size = Math.trunc('";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagination_size"] ?? null), "html", null, true);
        yield "');
var log_pagination_size = Math.trunc('";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["log_pagination_size"] ?? null), "html", null, true);
        yield "');
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin.twig";
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
        return array (  225 => 70,  221 => 69,  217 => 68,  213 => 67,  209 => 66,  205 => 65,  201 => 63,  199 => 62,  192 => 57,  189 => 56,  186 => 55,  183 => 54,  180 => 53,  177 => 52,  174 => 51,  171 => 50,  168 => 49,  165 => 48,  162 => 47,  159 => 46,  156 => 45,  153 => 44,  151 => 43,  149 => 42,  138 => 34,  133 => 32,  128 => 30,  124 => 29,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  85 => 17,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin.twig", "/web/templates/admin.twig");
    }
}
