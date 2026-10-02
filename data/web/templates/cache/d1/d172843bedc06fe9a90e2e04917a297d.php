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

/* reset-password.twig */
class __TwigTemplate_c96c0acd7e81e0b39b5c8d9c059be96a extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "reset-password.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 10), "reset_password", [], "any", false, false, false, 10), "html", null, true);
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
        <legend>";
        // line 21
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 21);
        yield "</legend><hr />

        ";
        // line 23
        if (($context["is_reset_token_valid"] ?? null)) {
            // line 24
            yield "        <form method=\"post\" autofill=\"off\">
          <input type=\"hidden\" name=\"token\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reset_token"] ?? null), "html", null, true);
            yield "\" />
          <input type=\"password\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control mb-2\" name=\"new_password\" placeholder=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 26), "new_password", [], "any", false, false, false, 26), "html", null, true);
            yield "\" />
          <input type=\"password\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control mb-2\" name=\"new_password2\" placeholder=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 27), "new_password_confirm", [], "any", false, false, false, 27), "html", null, true);
            yield "\" />

          <small id=\"mismatch_alert\" class=\"text-danger d-none\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 29), "password_mismatch", [], "any", false, false, false, 29), "html", null, true);
            yield "</small>
          <div class=\"d-flex justify-content-end mt-4\" style=\"position: relative\">
            <button type=\"submit\" class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" name=\"pw_reset\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 31), "reset_password", [], "any", false, false, false, 31), "html", null, true);
            yield "</button>
          </div>
        </form>
        ";
        } elseif ((null ===         // line 34
($context["reset_token"] ?? null))) {
            // line 35
            yield "        <form method=\"post\" autofill=\"off\">
          <input type=\"text\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control mb-2\" name=\"username\" placeholder=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 36), "username", [], "any", false, false, false, 36), "html", null, true);
            yield "\" />

          <div class=\"d-flex justify-content-end mt-4\" style=\"position: relative\">
            <button type=\"submit\" class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" name=\"pw_reset_request\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 39), "request_reset_password", [], "any", false, false, false, 39), "html", null, true);
            yield "</button>
          </div>
        </form>
        ";
        } else {
            // line 43
            yield "        <p class=\"text-center\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 43), "invalid_pass_reset_token", [], "any", false, false, false, 43);
            yield "</p>
        <a href=\"/\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 44), "back_to_mailcow", [], "any", false, false, false, 44), "html", null, true);
            yield "</a>
        ";
        }
        // line 46
        yield "

      </div>
    </div>
  </div>
</div>

<script type='text/javascript'>
  var csrf_token = '";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
  var mailcow_cc_username = '";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
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
        return "reset-password.twig";
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
        return array (  171 => 55,  167 => 54,  157 => 46,  152 => 44,  147 => 43,  140 => 39,  134 => 36,  131 => 35,  129 => 34,  123 => 31,  118 => 29,  113 => 27,  109 => 26,  105 => 25,  102 => 24,  100 => 23,  95 => 21,  90 => 19,  86 => 18,  75 => 10,  69 => 6,  62 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reset-password.twig", "/web/templates/reset-password.twig");
    }
}
