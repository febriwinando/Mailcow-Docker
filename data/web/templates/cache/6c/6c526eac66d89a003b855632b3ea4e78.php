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

/* modals/admin.twig */
class __TwigTemplate_cbc042c6ec49992e9d7008476c9faa2e extends Template
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
        yield "<!-- add settings rule modal -->
<div class=\"modal fade\" id=\"addRsettingModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 6), "add_settings_rule", [], "any", false, false, false, 6), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"rsetting\" role=\"form\" method=\"post\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"desc\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 12), "rsetting_desc", [], "any", false, false, false, 12), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"adminRspamdSettingsDesc\" name=\"desc\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"content\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 18), "rsetting_content", [], "any", false, false, false, 18), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <textarea class=\"form-control\" id=\"adminRspamdSettingsContent\" name=\"content\" rows=\"10\"></textarea>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 26), "active", [], "any", false, false, false, 26), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"rsetting\" data-api-url='add/rsetting' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 32), "add", [], "any", false, false, false, 32), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
        <hr>
        <p>";
        // line 37
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 37), "rspamd_com_settings", [], "any", false, false, false, 37);
        yield "</p>
        <ul id=\"rspamd_presets\"></ul>
      </div>
    </div>
  </div>
</div><!-- add settings rule modal -->
<!-- add domain admin modal -->
<div class=\"modal fade\" id=\"addDomainAdminModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 48), "add_domain_admin", [], "any", false, false, false, 48), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_domain_admin\" role=\"form\" method=\"post\" autocomplete=\"off\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 54), "username", [], "any", false, false, false, 54), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"username\" onkeyup=\"this.value = this.value.toLowerCase();\" required>
              &rdsh; <kbd>a-z - _ .</kbd>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"name\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 61), "admin_domains", [], "any", false, false, false, 61), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <select title=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 63), "search_domain_da", [], "any", false, false, false, 63), "html", null, true);
        yield "\" class=\"full-width-select\" name=\"domains\" size=\"5\" multiple>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 65
            yield "                <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"password\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 71), "password", [], "any", false, false, false, 71), "html", null, true);
        yield " (<a href=\"#\" class=\"generate_password\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 71), "generate", [], "any", false, false, false, 71), "html", null, true);
        yield "</a>)</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" data-pwgen-field=\"true\" data-hibp=\"true\" name=\"password\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"password2\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 77), "password_repeat", [], "any", false, false, false, 77), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" data-pwgen-field=\"true\" name=\"password2\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 85), "active", [], "any", false, false, false, 85), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_domain_admin\" data-api-url='add/domain-admin' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 91), "add", [], "any", false, false, false, 91), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain admin modal -->
<!-- change fido2 fn -->
<div class=\"modal fade\" id=\"fido2ChangeFn\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 104), "set_fn", [], "any", false, false, false, 104), "html", null, true);
        yield "</h3>
        <p class=\"text-muted\" style=\"word-break:break-all\" id=\"fido2_subject_desc\" data-fido2-subject=\"\"></p>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"false\" data-id=\"fido2ChangeFn\" role=\"form\" method=\"post\" autocomplete=\"off\">
          <input type=\"hidden\" class=\"form-control\" name=\"fido2_cid\" id=\"fido2_cid\">
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-4\" for=\"fido2_fn\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 112), "fn", [], "any", false, false, false, 112), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" class=\"form-control\" name=\"fido2_fn\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-4 col-sm-8\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"fido2ChangeFn\" data-item=\"null\" data-api-url='edit/fido2-fn' data-api-attr='{}' href=\"#\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 119), "save", [], "any", false, false, false, 119), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain admin modal -->
<!-- add oauth2 client modal -->
<div class=\"modal fade\" id=\"addOAuth2ClientModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">OAuth2</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_oauth2_client\" role=\"form\" method=\"post\">
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"redirect_uri\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 138), "oauth2_redirect_uri", [], "any", false, false, false, 138), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"redirect_uri\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_oauth2_client\" data-api-url='add/oauth2-client' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 145), "add", [], "any", false, false, false, 145), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain admin modal -->
<!-- add admin modal -->
<div class=\"modal fade\" id=\"addAdminModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 158), "add_admin", [], "any", false, false, false, 158), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_admin\" role=\"form\" method=\"post\" autocomplete=\"off\">
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 164), "username", [], "any", false, false, false, 164), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"username\" onkeyup=\"this.value = this.value.toLowerCase();\" required>
              &rdsh; <kbd>a-z - _ .</kbd>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"password\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 171), "password", [], "any", false, false, false, 171), "html", null, true);
        yield " (<a href=\"#\" class=\"generate_password\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 171), "generate", [], "any", false, false, false, 171), "html", null, true);
        yield "</a>):</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" data-pwgen-field=\"true\" data-hibp=\"true\" name=\"password\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"password2\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 177), "password_repeat", [], "any", false, false, false, 177), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" data-pwgen-field=\"true\" name=\"password2\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 185), "active", [], "any", false, false, false, 185), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_admin\" data-api-url='add/admin' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 191), "add", [], "any", false, false, false, 191), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add admin modal -->
<!-- test transport modal -->
<div class=\"modal fade\" id=\"testTransportModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\"><i class=\"bi bi-info-circle-fill\"></i> Transport</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" id=\"test_transport_form\" role=\"form\" method=\"post\">
          <input type=\"hidden\" class=\"form-control\" name=\"transport_id\" id=\"transport_id\">
          <input type=\"hidden\" class=\"form-control\" name=\"transport_type\" id=\"transport_type\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"mail_from\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 212), "relay_from", [], "any", false, false, false, 212), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"mail_from\" placeholder=\"relay@example.org\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"mail_rcpt\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 218), "relay_rcpt", [], "any", false, false, false, 218), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"mail_rcpt\" placeholder=\"null@hosted.mailcow.de\" value=\"null@hosted.mailcow.de\">
              <p class=\"text-muted\">";
        // line 221
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 221), "transport_test_rcpt_info", [], "any", false, false, false, 221);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-secondary\" id=\"test_transport\" href=\"#\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 226), "relay_run", [], "any", false, false, false, 226), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
        <hr>
        <div id=\"test_transport_result\" style=\"font-size:10pt\">-</div>
      </div>
    </div>
  </div>
</div><!-- test transport modal -->
<!-- priv key modal -->
<div class=\"modal fade\" id=\"showDKIMprivKey\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\"><i class=\"bi bi-key-fill\"></i> Private key</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <pre id=\"priv_key_pre\"></pre>
      </div>
    </div>
  </div>
</div><!-- priv key modal -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modals/admin.twig";
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
        return array (  369 => 226,  361 => 221,  355 => 218,  346 => 212,  322 => 191,  313 => 185,  302 => 177,  291 => 171,  281 => 164,  272 => 158,  256 => 145,  246 => 138,  224 => 119,  214 => 112,  203 => 104,  187 => 91,  178 => 85,  167 => 77,  156 => 71,  150 => 67,  141 => 65,  137 => 64,  133 => 63,  128 => 61,  118 => 54,  109 => 48,  95 => 37,  87 => 32,  78 => 26,  67 => 18,  58 => 12,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modals/admin.twig", "/web/templates/modals/admin.twig");
    }
}
