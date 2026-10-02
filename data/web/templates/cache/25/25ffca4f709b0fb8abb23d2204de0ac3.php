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

/* admin/customize/logo.twig */
class __TwigTemplate_4214b0ee20db4e9d77eb3eabcbad4479 extends Template
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
        yield "<div class=\"thumbnail mb-4\">
  <img class=\"img-thumbnail mb-4";
        // line 2
        if (($context["dark"] ?? null)) {
            yield " bg-black";
        }
        yield "\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logo"] ?? null), "html", null, true);
        yield "\" alt=\"mailcow logo\">
  <div class=\"caption\">
    <span class=\"badge fs-5 bg-info\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["logo_specs"] ?? null), "geometry", [], "any", false, false, false, 4), "width", [], "any", false, false, false, 4), "html", null, true);
        yield "x";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["logo_specs"] ?? null), "geometry", [], "any", false, false, false, 4), "height", [], "any", false, false, false, 4), "html", null, true);
        yield " px</span>
    <span class=\"badge fs-5 bg-info\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_specs"] ?? null), "mimetype", [], "any", false, false, false, 5), "html", null, true);
        yield "</span>
    <span class=\"badge fs-5 bg-info\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_specs"] ?? null), "fileSize", [], "any", false, false, false, 6), "html", null, true);
        yield "</span>
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
        return "admin/customize/logo.twig";
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
        return array (  64 => 6,  60 => 5,  54 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/customize/logo.twig", "/web/templates/admin/customize/logo.twig");
    }
}
