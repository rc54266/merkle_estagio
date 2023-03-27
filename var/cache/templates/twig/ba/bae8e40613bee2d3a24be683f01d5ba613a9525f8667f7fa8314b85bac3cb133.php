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

/* __string_template__1a94d64fa5ea4fb13cff7e396ee8962e4917b38937e2d2b3f22758f46b1b7855 */
class __TwigTemplate_0c9dfa322dc42ac191b6dbdce0bcf4c2b444d695406a781109b96f9134389700 extends \Twig\Template
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
        echo ($context["subject"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__1a94d64fa5ea4fb13cff7e396ee8962e4917b38937e2d2b3f22758f46b1b7855";
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
        return new Source("{{ subject }}", "__string_template__1a94d64fa5ea4fb13cff7e396ee8962e4917b38937e2d2b3f22758f46b1b7855", "");
    }
}
