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

/* __string_template__5c9d277b0cc4afbb9aed8f800e09364c2e0de0a7ddabf64204a6439fb79e1680 */
class __TwigTemplate_b8691a3f71cb1c3604620d70feba89a34b250316f94274d1e1e028c36623fee8 extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "email_marketing.email_subscribed");
    }

    public function getTemplateName()
    {
        return "__string_template__5c9d277b0cc4afbb9aed8f800e09364c2e0de0a7ddabf64204a6439fb79e1680";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ company_name }}: {{ __(\"email_marketing.email_subscribed\") }}", "__string_template__5c9d277b0cc4afbb9aed8f800e09364c2e0de0a7ddabf64204a6439fb79e1680", "");
    }
}
