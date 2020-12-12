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
class __TwigTemplate_8971d7901b3ddf938b1ef8882787c9261c374d470d603a14ca7d70c317bf64f2 extends \Twig\Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "
    ";
        // line 29
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : null)) {
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
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        // line 43
        echo "
    ";
        // line 44
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : null)) {
            // line 45
            echo "        ";
            $this->displayParentBlock("javascripts", $context, $blocks);
            echo "

        ";
            // line 47
            $context["productId"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "productId"], "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "productId"], "method")) : (false));
            // line 48
            echo "        <script>
            var data = {
                baseUrl: '";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "getBasePath", [], "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, (((isset($context["productId"]) ? $context["productId"] : null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_product_combinations", ["productId" => (isset($context["productId"]) ? $context["productId"] : null)])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_products"))), "html", null, true);
            echo "',
                apiMovementsUrl: '";
            // line 56
            echo twig_escape_filter($this->env, (((isset($context["productId"]) ? $context["productId"] : null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_product_list_movements", ["productId" => (isset($context["productId"]) ? $context["productId"] : null)])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_movements"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "locale", []), "html", null, true);
            echo "'
            }
        </script>

        ";
            // line 66
            if ((isset($context["webpack_server"]) ? $context["webpack_server"] : null)) {
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
        return array (  159 => 72,  156 => 71,  150 => 69,  146 => 67,  144 => 66,  137 => 62,  133 => 61,  129 => 60,  125 => 59,  121 => 58,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  101 => 53,  97 => 52,  93 => 51,  89 => 50,  85 => 48,  83 => 47,  77 => 45,  75 => 44,  72 => 43,  69 => 42,  64 => 39,  57 => 35,  53 => 33,  48 => 30,  46 => 29,  43 => 28,  40 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Stock/overview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Stock/overview.html.twig");
    }
}
