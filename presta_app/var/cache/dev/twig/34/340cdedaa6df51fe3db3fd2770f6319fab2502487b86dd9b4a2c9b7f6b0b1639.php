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

/* @Product/CatalogPage/Blocks/filters.html.twig */
class __TwigTemplate_eaaf684cda745dba4283c9bc337787bdc54eca44493af77d9e2fbe1882e6e387 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_filter_by_categories' => [$this, 'block_product_catalog_filter_by_categories'],
            'product_catalog_filter_bulk_actions' => [$this, 'block_product_catalog_filter_bulk_actions'],
            'product_catalog_filter_select_all' => [$this, 'block_product_catalog_filter_select_all'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/filters.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/filters.html.twig"));

        // line 25
        echo "<div id=\"catalog-actions\" class=\"col order-first\">
  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 28
        $this->displayBlock('product_catalog_filter_by_categories', $context, $blocks);
        // line 76
        echo "
      ";
        // line 77
        $this->displayBlock('product_catalog_filter_bulk_actions', $context, $blocks);
        // line 129
        echo "    </div>
  </div>

  ";
        // line 132
        $this->displayBlock('product_catalog_filter_select_all', $context, $blocks);
        // line 150
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_product_catalog_filter_by_categories($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_by_categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_by_categories"));

        // line 29
        echo "        <div id=\"product_catalog_category_tree_filter\" class=\"d-inline-block dropdown dropdown-clickable mr-2\">
          <button
                  class=\"btn btn-outline-secondary dropdown-toggle\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
          >
              ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", [], "Admin.Actions"), "html", null, true);
        echo "
              ";
        // line 38
        if (((isset($context["selected_category"]) || array_key_exists("selected_category", $context)) &&  !(null === (isset($context["selected_category"]) ? $context["selected_category"] : $this->getContext($context, "selected_category"))))) {
            // line 39
            echo "                  (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["selected_category"]) ? $context["selected_category"] : $this->getContext($context, "selected_category")), "getName", [], "method"), "html", null, true);
            echo ")
              ";
        }
        // line 41
        echo "          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <div class=\"categories-tree-actions\">
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_expand\"
                onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_expand\"
              >
                <i class=\"material-icons\">expand_more</i>
                  ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_collapse\"
                onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_collapse\"
              >
                <i class=\"material-icons\">expand_less</i>
                  ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_reset\"
                onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
                id=\"product_catalog_category_tree_filter_reset\"
              >
                <i class=\"material-icons\">radio_button_unchecked</i>
                  ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
            </div>
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 'widget');
        echo "
          </div>
        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_product_catalog_filter_bulk_actions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_bulk_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_bulk_actions"));

        // line 78
        echo "        <div
            class=\"d-inline-block\"
            bulkurl=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", ["action" => "activate_all"]);
        echo "\"
            massediturl=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", ["action" => "sort"]);
        echo "\"
            redirecturl=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" => (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : $this->getContext($context, "sortOrder"))]), "html", null, true);
        echo "\"
            redirecturlnextpage=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" => (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "offset" => ((isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")) + (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : $this->getContext($context, "sortOrder"))]), "html", null, true);
        echo "\"
        >
          ";
        // line 85
        $context["buttons_action"] = [0 => ["onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", [], "Admin.Actions")], 1 => ["onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", [], "Admin.Actions")]];
        // line 96
        echo "
          ";
        // line 97
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action")), [0 => ["divider" => true], 1 => ["onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", [], "Admin.Actions")]]);
        // line 106
        echo "

          ";
        // line 108
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action")), [0 => ["divider" => true], 1 => ["onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", [], "Admin.Actions")]]);
        // line 117
        echo "
          ";
        // line 118
        $this->loadTemplate("@PrestaShop/Admin/Helpers/dropdown_menu.html.twig", "@Product/CatalogPage/Blocks/filters.html.twig", 118)->display(twig_array_merge($context, ["div_style" => "btn-group dropdown bulk-catalog", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", [], "Admin.Global"), "buttonType" => "outline-secondary", "menu_icon" => "icon-caret-up", "items" =>         // line 125
(isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action"))]));
        // line 127
        echo "        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_product_catalog_filter_select_all($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_select_all"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_select_all"));

        // line 133
        echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"md-checkbox\">
        <label>
          <input
            type=\"checkbox\"
            id=\"bulk_action_select_all\"
            onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
            value=\"\"
          >
          <i class=\"md-checkbox-control\"></i>
            ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
        </label>
      </div>
    </div>
  </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Blocks/filters.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 144,  225 => 133,  216 => 132,  205 => 127,  203 => 125,  202 => 118,  199 => 117,  197 => 108,  193 => 106,  191 => 97,  188 => 96,  186 => 85,  181 => 83,  177 => 82,  173 => 81,  169 => 80,  165 => 78,  156 => 77,  142 => 72,  136 => 69,  124 => 60,  112 => 51,  100 => 41,  94 => 39,  92 => 38,  88 => 37,  78 => 29,  69 => 28,  58 => 150,  56 => 132,  51 => 129,  49 => 77,  46 => 76,  44 => 28,  39 => 25,);
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
<div id=\"catalog-actions\" class=\"col order-first\">
  <div class=\"row\">
    <div class=\"col\">
      {% block product_catalog_filter_by_categories %}
        <div id=\"product_catalog_category_tree_filter\" class=\"d-inline-block dropdown dropdown-clickable mr-2\">
          <button
                  class=\"btn btn-outline-secondary dropdown-toggle\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
          >
              {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
              {% if selected_category is defined and selected_category is not null %}
                  ({{ selected_category.getName() }})
              {% endif %}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <div class=\"categories-tree-actions\">
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_expand\"
                onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_expand\"
              >
                <i class=\"material-icons\">expand_more</i>
                  {{ 'Expand'|trans({}, 'Admin.Actions') }}
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_collapse\"
                onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_collapse\"
              >
                <i class=\"material-icons\">expand_less</i>
                  {{ 'Collapse'|trans({}, 'Admin.Actions') }}
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_reset\"
                onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
                id=\"product_catalog_category_tree_filter_reset\"
              >
                <i class=\"material-icons\">radio_button_unchecked</i>
                  {{ 'Unselect'|trans({}, 'Admin.Actions') }}
              </a>
            </div>
              {{ form_widget(categories) }}
          </div>
        </div>
      {% endblock %}

      {% block product_catalog_filter_bulk_actions %}
        <div
            class=\"d-inline-block\"
            bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
            massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
            redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
            redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
            {
              \"onclick\": \"bulkProductAction(this, 'activate_all');\",
              \"icon\": \"radio_button_checked\",
              \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
            }, {
              \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
              \"icon\": \"radio_button_unchecked\",
              \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
            }
          ] %}

          {% set buttons_action = buttons_action|merge([
            {
              \"divider\": true
            }, {
              \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
              \"icon\": \"content_copy\",
              \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
          ]) %}


          {% set buttons_action = buttons_action|merge([
            {
              \"divider\": true
            }, {
              \"onclick\": \"bulkProductAction(this, 'delete_all');\",
              \"icon\": \"delete\",
              \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
            }
          ]) %}

          {% include '@PrestaShop/Admin/Helpers/dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropdown bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          } %}
        </div>
      {% endblock %}
    </div>
  </div>

  {% block product_catalog_filter_select_all %}
  <div class=\"row\">
    <div class=\"col\">
      <div class=\"md-checkbox\">
        <label>
          <input
            type=\"checkbox\"
            id=\"bulk_action_select_all\"
            onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
            value=\"\"
          >
          <i class=\"md-checkbox-control\"></i>
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
        </label>
      </div>
    </div>
  </div>
  {% endblock %}
</div>
", "@Product/CatalogPage/Blocks/filters.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Blocks/filters.html.twig");
    }
}
