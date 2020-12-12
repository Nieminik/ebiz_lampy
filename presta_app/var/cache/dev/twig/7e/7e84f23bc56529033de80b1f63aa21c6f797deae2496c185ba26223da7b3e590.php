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

/* @PrestaShop/Admin/Stock/overview.html.twig */
class __TwigTemplate_46bb7141f615f8a6a3f76d34c8101729c54b7191c523101b36b4fc4766d9f284 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Stock/overview.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Stock/overview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Stock/overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
    ";
        // line 29
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : $this->getContext($context, "is_shop_context"))) {
            // line 30
            echo "        <div id=\"stock-app\"></div>

    ";
        } else {
            // line 33
            echo "        <div class=\"col-md-12\">
            <div class=\"alert alert-danger\" role=\"alert\">
                <i class=\"material-icons\">info_outline</i><p class=\"alert-text\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't manage your stock in this shop context: select a shop instead of a group of shops.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
        // line 39
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "
    ";
        // line 44
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : $this->getContext($context, "is_shop_context"))) {
            // line 45
            echo "        ";
            $this->displayParentBlock("javascripts", $context, $blocks);
            echo "

        ";
            // line 47
            $context["productId"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "productId"], "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "productId"], "method")) : (false));
            // line 48
            echo "        <script>
            var data = {
                baseUrl: '";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "getBasePath", [], "method"), "html", null, true);
            echo "',
                catalogUrl: '";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_product_catalog");
            echo "',
                stockUrl: '";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_stock_overview");
            echo "',
                stockExportUrl: '";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_products_export");
            echo "',
                stockImportUrl: '";
            // line 54
            echo $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminImport");
            echo "',
                apiStockUrl: '";
            // line 55
            echo twig_escape_filter($this->env, (((isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_product_combinations", ["productId" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_products"))), "html", null, true);
            echo "',
                apiMovementsUrl: '";
            // line 56
            echo twig_escape_filter($this->env, (((isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_product_list_movements", ["productId" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_movements"))), "html", null, true);
            echo "',
                employeesUrl: '";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_movements_employees");
            echo "',
                suppliersUrl: '";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_suppliers");
            echo "',
                categoriesUrl: '";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_categories");
            echo "',
                movementsTypesUrl: '";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_movements_types", ["grouped" => true]);
            echo "',
                translationUrl: '";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_i18n_translations_list", ["page" => "stock"]);
            echo "',
                locale: '";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
            echo "'
            }
        </script>

        ";
            // line 66
            if ((isset($context["webpack_server"]) ? $context["webpack_server"] : $this->getContext($context, "webpack_server"))) {
                // line 67
                echo "            <script src=\"http://localhost:8080/stock.bundle.js\"></script>
        ";
            } else {
                // line 69
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/stock.bundle.js"), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 71
            echo "    ";
        }
        // line 72
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Stock/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 72,  186 => 71,  180 => 69,  176 => 67,  174 => 66,  167 => 62,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  147 => 57,  143 => 56,  139 => 55,  135 => 54,  131 => 53,  127 => 52,  123 => 51,  119 => 50,  115 => 48,  113 => 47,  107 => 45,  105 => 44,  102 => 43,  93 => 42,  82 => 39,  75 => 35,  71 => 33,  66 => 30,  64 => 29,  61 => 28,  52 => 27,  22 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}

    {% if is_shop_context %}
        <div id=\"stock-app\"></div>

    {% else %}
        <div class=\"col-md-12\">
            <div class=\"alert alert-danger\" role=\"alert\">
                <i class=\"material-icons\">info_outline</i><p class=\"alert-text\">{{ 'You can\\'t manage your stock in this shop context: select a shop instead of a group of shops.'|trans({}, 'Admin.Catalog.Notification') }}</p>
            </div>
        </div>
    {% endif %}

{% endblock %}

{% block javascripts %}

    {% if is_shop_context %}
        {{ parent() }}

        {% set productId = app.request.query.get('productId') ? app.request.query.get('productId') : false %}
        <script>
            var data = {
                baseUrl: '{{ app.request.getBasePath() }}',
                catalogUrl: '{{ url('admin_product_catalog') }}',
                stockUrl: '{{ url('admin_stock_overview') }}',
                stockExportUrl: '{{ url('api_stock_list_products_export') }}',
                stockImportUrl: '{{ getAdminLink('AdminImport')|raw }}',
                apiStockUrl: '{{ productId ? url('api_stock_list_product_combinations', {'productId' : productId}) : url('api_stock_list_products') }}',
                apiMovementsUrl: '{{ productId ? url('api_stock_product_list_movements', {'productId' : productId}) : url('api_stock_list_movements') }}',
                employeesUrl: '{{ url('api_stock_list_movements_employees') }}',
                suppliersUrl: '{{ url('api_stock_list_suppliers') }}',
                categoriesUrl: '{{ url('api_stock_list_categories') }}',
                movementsTypesUrl: '{{ url('api_stock_list_movements_types', {'grouped': true}) }}',
                translationUrl: '{{ url('api_i18n_translations_list', {'page' : 'stock'}) }}',
                locale: '{{ app.request.locale }}'
            }
        </script>

        {% if webpack_server %}
            <script src=\"http://localhost:8080/stock.bundle.js\"></script>
        {% else %}
            <script src=\"{{ asset('themes/new-theme/public/stock.bundle.js') }}\"></script>
        {% endif %}
    {% endif %}

{% endblock %}
", "@PrestaShop/Admin/Stock/overview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Stock/overview.html.twig");
    }
}
