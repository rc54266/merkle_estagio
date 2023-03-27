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

/* __string_template__8cdac3c5d9019f66b900482c2e2b56e090d35aef4c5b6c94017a315cf133cbf4 */
class __TwigTemplate_3cb33e2b2f2142bbadcb3c00c0c804333a7c43485ade8ab10b4dcde3c4fe9769 extends \Twig\Template
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
        // line 2
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "email_marketing.text_email_subscribed", ["[href]" => ($context["url"] ?? null)]);
        echo "
";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__8cdac3c5d9019f66b900482c2e2b56e090d35aef4c5b6c94017a315cf133cbf4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  34 => 2,  30 => 1,);
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
{{ __(\"email_marketing.text_email_subscribed\", {\"[href]\": url}) }}
{{ snippet(\"footer\") }}", "__string_template__8cdac3c5d9019f66b900482c2e2b56e090d35aef4c5b6c94017a315cf133cbf4", "");
    }
}
