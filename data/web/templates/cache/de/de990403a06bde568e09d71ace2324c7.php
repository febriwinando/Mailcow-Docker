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

/* edit.twig */
class __TwigTemplate_d023203184356416204c2b78be56a012 extends Template
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
            'inner_content' => [$this, 'block_inner_content'],
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
        $this->parent = $this->loadTemplate("base.twig", "edit.twig", 1);
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
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["return_to"] ?? null), "html", null, true);
        yield "\">&#8592; ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 4), "previous", [], "any", false, false, false, 4), "html", null, true);
        yield "</a>
<div class=\"row my-4\">
  <div class=\"col-md-12\">
    <div class=\"card\">
      <div class=\"card-header fs-5\">
        <span>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</span>
      </div>
      <div class=\"card-body\">
        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('inner_content', $context, $blocks);
        // line 19
        yield "      </div>
    </div>
  </div>
</div>
<a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["return_to"] ?? null), "html", null, true);
        yield "\">&#8592; ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 23), "previous", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>

<script type='text/javascript'>
  var lang_user = ";
        // line 26
        yield ($context["lang_user"] ?? null);
        yield ";
  var lang_admin = ";
        // line 27
        yield ($context["lang_admin"] ?? null);
        yield ";
  var lang_datatables = ";
        // line 28
        yield ($context["lang_datatables"] ?? null);
        yield ";
  var csrf_token = '";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
  var pagination_size = Math.trunc('";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagination_size"] ?? null), "html", null, true);
        yield "');
  var table_for_domain = '";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["domain"] ?? null), "html", null, true);
        yield "';
</script>
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "          ";
        if (($context["access_denied"] ?? null)) {
            // line 14
            yield "          <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "danger", [], "any", false, false, false, 14), "access_denied", [], "any", false, false, false, 14), "html", null, true);
            yield "</div>
          ";
        } else {
            // line 16
            yield "          <div class=\"alert alert-info\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "info", [], "any", false, false, false, 16), "no_action", [], "any", false, false, false, 16), "html", null, true);
            yield "</div>
          ";
        }
        // line 18
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "edit.twig";
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
        return array (  142 => 18,  136 => 16,  130 => 14,  127 => 13,  120 => 12,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  84 => 23,  78 => 19,  76 => 12,  70 => 9,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "edit.twig", "/web/templates/edit.twig");
    }
}
