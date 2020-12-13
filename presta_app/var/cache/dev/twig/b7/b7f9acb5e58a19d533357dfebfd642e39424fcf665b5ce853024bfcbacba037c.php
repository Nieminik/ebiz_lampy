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

/* @Product/CatalogPage/Blocks/tools.html.twig */
class __TwigTemplate_0b9e8646be50cd766cb7bf9c54d2bdaa9102fabbaeb189361a7126969a04dc29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/tools.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/tools.html.twig"));

        // line 25
        echo "<div class=\"col-2 text-right\">
  <div class=\"dropdown\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"catalog-tools-button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "\"
    >
      <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "</span>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"catalog-tools-button\">
      ";
        // line 37
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayDashboardToolbarIcons", []);
        echo "
      <a id=\"desc-product-export\" class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-import\" class=\"dropdown-item\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["import_link"]) ? $context["import_link"] : $this->getContext($context, "import_link")), "html", null, true);
        echo "\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-show-sql\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-sql-manager\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
        ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Blocks/tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 48,  79 => 45,  73 => 42,  69 => 41,  64 => 39,  60 => 38,  56 => 37,  50 => 34,  45 => 32,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<div class=\"col-2 text-right\">
  <div class=\"dropdown\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"catalog-tools-button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ \"Settings\"|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ \"Settings\"|trans({}, 'Admin.Global') }}</span>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"catalog-tools-button\">
      {{ renderhook('displayDashboardToolbarIcons', {}) }}
      <a id=\"desc-product-export\" class=\"dropdown-item\" href=\"{{ path('admin_product_export_action') }}\">
        {{ \"Export\"|trans({}, 'Admin.Actions') }}
      </a>
      <a id=\"desc-product-import\" class=\"dropdown-item\" href=\"{{ import_link }}\">
        {{ \"Import\"|trans({}, 'Admin.Actions') }}
      </a>
      <a id=\"desc-product-show-sql\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
        {{ \"Show SQL query\"|trans({}, 'Admin.Actions') }}
      </a>
      <a id=\"desc-product-sql-manager\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
        {{ \"Export to SQL Manager\"|trans({}, 'Admin.Actions') }}
      </a>
    </div>
  </div>
</div>
", "@Product/CatalogPage/Blocks/tools.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Blocks/tools.html.twig");
    }
}
