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

/* @PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig */
class __TwigTemplate_6fa4674072b65ea4f5a2cdc43efbc8e5788da544268e4134c44d68b9e989d462 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'catalog_recently_used' => [$this, 'block_catalog_recently_used'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('catalog_recently_used', $context, $blocks);
    }

    public function block_catalog_recently_used($context, array $blocks = [])
    {
        // line 27
        echo "  <div id=\"module-recently-used-list\" class=\"module-short-list\">
    <span id=\"recently-used_modules\" class=\"module-search-result-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recently Used", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
    <div class=\"modules-list\" data-name=\"recently-used\"></div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 28,  40 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_manage_recently_used.html.twig");
    }
}
