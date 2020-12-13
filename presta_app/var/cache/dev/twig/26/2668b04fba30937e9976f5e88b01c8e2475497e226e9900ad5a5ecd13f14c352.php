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

/* @PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig */
class __TwigTemplate_457404c40dcfd115223b7587b577f6a0505899a4960b6c94afe4ddb1601801e7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_row' => [$this, 'block_product_catalog_form_table_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        // line 25
        echo "<tbody
    ";
        // line 26
        if ((isset($context["activate_drag_and_drop"]) ? $context["activate_drag_and_drop"] : $this->getContext($context, "activate_drag_and_drop"))) {
            echo "class=\"sortable\"";
        }
        // line 27
        echo "    last_sql=\"";
        echo twig_escape_filter($this->env, (isset($context["last_sql_query"]) ? $context["last_sql_query"] : $this->getContext($context, "last_sql_query")), "html_attr");
        echo "\"
>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "    ";
            $this->displayBlock('product_catalog_form_table_row', $context, $blocks);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 140
            echo "<tr><td colspan=\"11\">
        ";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no result for this search. Update your filters to view other products.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
    </td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_product_catalog_form_table_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        // line 31
        echo "    <tr data-uniturl=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "unit_action_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "unit_action_url", []), "#")) : ("#")), "html", null, true);
        echo "\" data-product-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\" name=\"bulk_action_selected_products[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id_product", []), "html", null, true);
        echo "
            </label>
        </td>
        <td>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", []);
        echo "</a>
        </td>
        <td>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td>
            ";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "reference", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "reference", []), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td>
            ";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name_category", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name_category", []), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price_final", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price_final", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>

        ";
        // line 64
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 65
            echo "            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sav_quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sav_quantity", []), "")) : ("")), "html", null, true);
            echo "\">
                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", []), "")) : ("")), "html", null, true);
            echo "#tab-step3\">
                    ";
            // line 67
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sav_quantity", [], "any", true, true) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sav_quantity", []) > 0))) {
                // line 68
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sav_quantity", []), "html", null, true);
                echo "
                    ";
            } else {
                // line 70
                echo "                        ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sav_quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sav_quantity", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                </a>
            </td>
        ";
        } else {
            // line 75
            echo "            <td></td>
        ";
        }
        // line 77
        echo "        <td class=\"text-center\">
            ";
        // line 78
        if (((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "active", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "active", []), 0)) : (0)) == 0)) {
            // line 79
            echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'activate'); return false;\">
                    <i class=\"material-icons action-disabled\">clear</i>
                </a>
            ";
        } else {
            // line 83
            echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'deactivate'); return false;\">
                    <i class=\"material-icons action-enabled \">check</i>
                </a>
            ";
        }
        // line 87
        echo "        </td>
        ";
        // line 88
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "position", [], "any", true, true)) {
            // line 89
            echo "            <td ";
            if ((isset($context["activate_drag_and_drop"]) ? $context["activate_drag_and_drop"] : $this->getContext($context, "activate_drag_and_drop"))) {
                echo "class=\"placeholder\"";
            }
            echo " style=\"cursor: pointer; cursor: hand;\">
                ";
            // line 90
            if ((isset($context["activate_drag_and_drop"]) ? $context["activate_drag_and_drop"] : $this->getContext($context, "activate_drag_and_drop"))) {
                // line 91
                echo "                    <big><big>⇅</big></big>
                ";
            }
            // line 93
            echo "                <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "position", []), "html", null, true);
            echo "</span>
                <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id_product", []), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "position", []), "html", null, true);
            echo "\" />
            </td>
        ";
        }
        // line 98
        echo "        <td class=\"text-right\">
            <div class=\"btn-group-action\">

                ";
        // line 101
        $context["buttons_action"] = [0 => ["href" => (($this->getAttribute(        // line 103
(isset($context["product"]) ? $context["product"] : null), "preview_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "preview_url", []), "#")) : ("#")), "target" => "_blank", "icon" => "remove_red_eye", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", [], "Admin.Actions")]];
        // line 109
        echo "
                ";
        // line 110
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action")), [0 => ["onclick" => "unitProductAction(this, 'duplicate');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", [], "Admin.Actions")]]);
        // line 117
        echo "
                ";
        // line 118
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action")), [0 => ["onclick" => "unitProductAction(this, 'delete');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions")]]);
        // line 125
        echo "
                ";
        // line 126
        $this->loadTemplate("@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", 126)->display(twig_array_merge($context, ["button_id" => (("product_list_id_" . $this->getAttribute(        // line 127
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id_product", [])) . "_menu"), "default_item" => ["href" => (($this->getAttribute(        // line 129
(isset($context["product"]) ? $context["product"] : null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url", []), "#")) : ("#")), "icon" => "mode_edit"], "right" => true, "items" =>         // line 133
(isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action"))]));
        // line 135
        echo "            </div>
        </td>
    </tr>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 135,  295 => 133,  294 => 129,  293 => 127,  292 => 126,  289 => 125,  287 => 118,  284 => 117,  282 => 110,  279 => 109,  277 => 103,  276 => 101,  271 => 98,  265 => 95,  261 => 94,  256 => 93,  252 => 91,  250 => 90,  243 => 89,  241 => 88,  238 => 87,  232 => 83,  226 => 79,  224 => 78,  221 => 77,  217 => 75,  212 => 72,  206 => 70,  200 => 68,  198 => 67,  194 => 66,  189 => 65,  187 => 64,  179 => 61,  171 => 58,  165 => 55,  159 => 52,  151 => 49,  143 => 46,  136 => 42,  132 => 41,  121 => 35,  111 => 31,  102 => 30,  85 => 141,  82 => 140,  68 => 30,  50 => 29,  44 => 27,  40 => 26,  37 => 25,);
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
<tbody
    {% if activate_drag_and_drop %}class=\"sortable\"{% endif %}
    last_sql=\"{{ last_sql_query|escape('html_attr') }}\"
>
    {% for product in products %}
    {% block product_catalog_form_table_row %}
    <tr data-uniturl=\"{{ product.unit_action_url|default('#') }}\" data-product-id=\"{{ product.id_product }}\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-{{ product.id_product }}\" name=\"bulk_action_selected_products[]\" value=\"{{ product.id_product }}\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-{{ product.id_product }}\">
                {{ product.id_product }}
            </label>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.image|raw }}</a>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.name|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td>
            {{ product.reference|default('') }}
        </td>
        <td>
            {{ product.name_category|default('') }}
        </td>
        <td class=\"text-center\">
            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td class=\"text-center\">
            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price_final|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>

        {% if 'PS_STOCK_MANAGEMENT'|configuration %}
            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"{{ product.sav_quantity|default('') }}\">
                <a href=\"{{ product.url|default('') }}#tab-step3\">
                    {% if product.sav_quantity is defined and product.sav_quantity > 0 %}
                        {{ product.sav_quantity }}
                    {% else %}
                        {{ product.sav_quantity|default('N/A'|trans({}, 'Admin.Global')) }}
                    {% endif %}
                </a>
            </td>
        {% else %}
            <td></td>
        {% endif %}
        <td class=\"text-center\">
            {% if product.active|default(0) == 0 %}
                <a href=\"#\" onclick=\"unitProductAction(this, 'activate'); return false;\">
                    <i class=\"material-icons action-disabled\">clear</i>
                </a>
            {% else %}
                <a href=\"#\" onclick=\"unitProductAction(this, 'deactivate'); return false;\">
                    <i class=\"material-icons action-enabled \">check</i>
                </a>
            {% endif %}
        </td>
        {% if product.position is defined %}
            <td {% if activate_drag_and_drop %}class=\"placeholder\"{% endif %} style=\"cursor: pointer; cursor: hand;\">
                {% if activate_drag_and_drop %}
                    <big><big>⇅</big></big>
                {% endif %}
                <span class=\"position\">{{ product.position }}</span>
                <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"{{ product.id_product }}\" />
                <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"{{ product.position }}\" />
            </td>
        {% endif %}
        <td class=\"text-right\">
            <div class=\"btn-group-action\">

                {% set buttons_action = [
                    {
                        \"href\": product.preview_url|default('#'),
                        \"target\": \"_blank\",
                        \"icon\": \"remove_red_eye\",
                        \"label\": \"Preview\"|trans({}, 'Admin.Actions')
                    }
                ] %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'duplicate');\",
                        \"icon\": \"content_copy\",
                        \"label\": \"Duplicate\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'delete');\",
                        \"icon\": \"delete\",
                        \"label\": \"Delete\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% include '@Product/CatalogPage/Forms/form_edit_dropdown.html.twig' with {
                    'button_id': \"product_list_id_\" ~ product.id_product ~ \"_menu\",
                    'default_item': {
                        \"href\": product.url|default('#'),
                        \"icon\": \"mode_edit\"
                    },
                    'right': true,
                    'items': buttons_action
                } %}
            </div>
        </td>
    </tr>
    {% endblock %}
{% else %}
<tr><td colspan=\"11\">
        {{ \"There is no result for this search. Update your filters to view other products.\"|trans({}, 'Admin.Catalog.Notification') }}
    </td></tr>
{% endfor %}
", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/list.html.twig");
    }
}
