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

/* @PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig */
class __TwigTemplate_58be8d4e5b6d0f28ddb58431088c771e0500af0fef245d13e32e83238ed6d531 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid.html.twig", "@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig", 25);
        $this->blocks = [
            'addon_card' => [$this, 'block_addon_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/Includes/grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_addon_card($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/card_notification_update.html.twig", "@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig", 28)->display(twig_array_merge($context, ["module" =>         // line 30
(isset($context["module"]) ? $context["module"] : null), "display_type" =>         // line 31
(isset($context["display_type"]) ? $context["display_type"] : null), "origin" => ((        // line 32
(isset($context["origin"]) || array_key_exists("origin", $context))) ? (_twig_default_filter((isset($context["origin"]) ? $context["origin"] : null), "none")) : ("none"))]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 32,  45 => 31,  44 => 30,  42 => 28,  39 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_notification_update.html.twig");
    }
}
