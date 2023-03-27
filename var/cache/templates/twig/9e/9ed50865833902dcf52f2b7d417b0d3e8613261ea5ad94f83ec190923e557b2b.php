<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__51cd8421687eff81a3d3f5c8e4189df3cd83d36ab0a67aaa964f638e6b287af6 */
class __TwigTemplate_5fa15f90770d80edfb4fc33e417ac83542eb86eb77b96e49c0d0ca314cb03262 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "

";
        // line 3
        echo ($context["body"] ?? null);
        echo "

";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__51cd8421687eff81a3d3f5c8e4189df3cd83d36ab0a67aaa964f638e6b287af6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\") }}

{{ body }}

{{ snippet(\"footer\") }}", "__string_template__51cd8421687eff81a3d3f5c8e4189df3cd83d36ab0a67aaa964f638e6b287af6", "");
    }
}
