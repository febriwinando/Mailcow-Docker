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

/* index.twig */
class __TwigTemplate_2752d579ca2561b827951821cb0273b0 extends Template
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
            'navbar' => [$this, 'block_navbar'],
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
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"row mb-4\" style=\"margin-top: 60px\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center\">
        <i class=\"bi bi-person-fill me-2\"></i> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 10), "login", [], "any", false, false, false, 10), "html", null, true);
        yield "
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\">
          <img class=\"main-logo\" src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow\">
          <img class=\"main-logo-dark\" src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow-logo-dark\">
        </div>
        ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 21) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 21))) {
            // line 22
            yield "        <div class=\"my-4 alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 22), "html", null, true);
            yield " rot-enc ui-announcement-alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(str_rot13(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 22)), "html", null, true);
            yield "</div>
        ";
        }
        // line 24
        yield "        <legend>";
        if (($context["oauth2_request"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "oauth2", [], "any", false, false, false, 24), "authorize_app", [], "any", false, false, false, 24), "html", null, true);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 24);
        }
        yield "</legend><hr />
        ";
        // line 25
        if (($context["is_mobileconfig"] ?? null)) {
            // line 26
            yield "        <div class=\"my-4 alert alert-info \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 26), "mobileconfig_info", [], "any", false, false, false, 26), "html", null, true);
            yield "</div>
        ";
        }
        // line 28
        yield "        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
        yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"";
        // line 33
        if (($context["is_mobileconfig"] ?? null)) {
            yield "email";
        } else {
            yield "text";
        }
        yield "\" id=\"login_user\" class=\"form-control\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
        yield "\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 37), "password", [], "any", false, false, false, 37), "html", null, true);
        yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 40), "password", [], "any", false, false, false, 40), "html", null, true);
        yield "\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"d-flex justify-content-between mt-4\" style=\"position: relative\">
            <div class=\"d-grid gap-2 d-sm-block\">
              <button type=\"submit\" class=\"btn btn-xs-lg btn-success\" value=\"Login\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 45), "login", [], "any", false, false, false, 45), "html", null, true);
        yield "</button>
              <button type=\"button\" class=\"btn btn-xs-lg btn-success\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 46), "fido2_webauthn", [], "any", false, false, false, 46), "html", null, true);
        yield "</button>
            </div>
            ";
        // line 48
        if ( !($context["oauth2_request"] ?? null)) {
            // line 49
            yield "            <div class=\"d-grid d-sm-block\">
            <button type=\"button\" ";
            // line 50
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_languages"] ?? null)) == 1)) {
                yield "disabled=\"true\"";
            }
            yield " class=\"btn btn-secondary ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"flag-icon flag-icon-";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            yield "\"></span>
            </button>
            <ul class=\"dropdown-menu ms-auto login\">
              ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 55
                yield "                <li>
                  <a class=\"dropdown-item ";
                // line 56
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    yield "active";
                }
                yield "\" href=\"?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                yield "\">
                    <span class=\"flag-icon flag-icon-";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["key"],  -2, null), "html", null, true);
                yield "\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "            </ul>
            </div>
            ";
        }
        // line 64
        yield "          </div>
        </form>
        <div class=\"mt-3 mb-4\">
          <a href=\"/reset-password\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 67), "forgot_password", [], "any", false, false, false, 67), "html", null, true);
        yield "</a>
        </div>
        ";
        // line 69
        if (($context["login_delay"] ?? null)) {
            // line 70
            yield "        <p><div class=\"my-4 alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 70), "delayed", [], "any", false, false, false, 70), ($context["login_delay"] ?? null)), "html", null, true);
            yield "</b></div></p>
        ";
        }
        // line 72
        yield "        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        ";
        // line 73
        if (( !($context["oauth2_request"] ?? null) && (($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null)))) {
            // line 74
            yield "        <legend><i class=\"bi bi-link-45deg\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 74);
            yield "</legend><hr />
        <div class=\"my-2 d-grid gap-2 d-sm-block apps\">
          ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 77
                yield "            ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 77)))) {
                    // line 78
                    yield "              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 78), "html", null, true);
                    yield "\" role=\"button\" ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 78)) {
                        yield "title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 78), "html", null, true);
                        yield "\"";
                    }
                    yield " class=\"btn btn-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 78), "html", null, true);
                    yield "</a>
            ";
                }
                // line 80
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 82
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 83
                    yield "              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield "\" role=\"button\" class=\"btn btn-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "        </div>
        ";
        }
        // line 88
        yield "      </div>
    </div>
  </div>
</div>
";
        // line 92
        if ( !($context["oauth2_request"] ?? null)) {
            // line 93
            yield "<div class=\"row\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header\">
        <a class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#collapse1\"><i class=\"bi bi-patch-question-fill\"></i> ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 97), "help", [], "any", false, false, false, 97), "html", null, true);
            yield "</a>
      </div>
      <div id=\"collapse1\" class=\"card-collapse collapse\">
        <div class=\"card-body\">
          ";
            // line 101
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 101)) {
                // line 102
                yield "          <p>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 102);
                yield "</p>
          ";
            } else {
                // line 104
                yield "          <p><span style=\"border-bottom: 1px dotted #999;\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 104);
                yield "</span></p>
          <p>";
                // line 105
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 105), "mailcow_panel_detail", [], "any", false, false, false, 105);
                yield "</p>
          <p><span style=\"border-bottom: 1px dotted #999;\">";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 106);
                yield "</span></p>
          <p>";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 107), "mailcow_apps_detail", [], "any", false, false, false, 107);
                yield "</p>
          ";
            }
            // line 109
            yield "        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 114
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.twig";
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
        return array (  358 => 114,  351 => 109,  346 => 107,  342 => 106,  338 => 105,  333 => 104,  327 => 102,  325 => 101,  318 => 97,  312 => 93,  310 => 92,  304 => 88,  300 => 86,  294 => 85,  283 => 83,  278 => 82,  273 => 81,  267 => 80,  253 => 78,  250 => 77,  246 => 76,  240 => 74,  238 => 73,  235 => 72,  229 => 70,  227 => 69,  222 => 67,  217 => 64,  212 => 61,  200 => 57,  192 => 56,  189 => 55,  185 => 54,  179 => 51,  173 => 50,  170 => 49,  168 => 48,  163 => 46,  159 => 45,  151 => 40,  145 => 37,  132 => 33,  126 => 30,  122 => 28,  116 => 26,  114 => 25,  105 => 24,  97 => 22,  95 => 21,  90 => 19,  86 => 18,  75 => 10,  69 => 6,  62 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.twig", "/web/templates/index.twig");
    }
}
