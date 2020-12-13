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

/* @Product/ProductPage/Forms/form_shipping.html.twig */
class __TwigTemplate_a53c002ef9efc09f86a7c68f3815f7ec46bad556edb3ca9635f76b000b1f3bcb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_shipping.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_shipping.html.twig"));

        // line 25
        list($context["dimension_unit"], $context["weight_unit"]) =         [$this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_DIMENSION_UNIT"), $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT")];
        // line 26
        echo "
<div class=\"col-md-12 pb-1\">
  <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Package dimension", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adjust your shipping costs by filling in the product dimensions.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "width", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "width", []), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "width", []), 'widget');
        echo "
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["dimension_unit"]) ? $context["dimension_unit"] : $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", []), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", []), 'widget');
        echo "
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["dimension_unit"]) ? $context["dimension_unit"] : $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depth", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depth", []), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depth", []), 'widget');
        echo "
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["dimension_unit"]) ? $context["dimension_unit"] : $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", []), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", []), 'widget');
        echo "
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["weight_unit"]) ? $context["weight_unit"] : $this->getContext($context, "weight_unit")), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "additional_delivery_times", []), "vars", []), "label", []), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </h2>
    <div class=\"row\">
       <div class=\"col-md-12\" ";
        // line 89
        if (        $this->hasBlock("widget_container_attributes", $context, $blocks)) {
            echo " ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " ";
        }
        echo ">
          ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "additional_delivery_times", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 91
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", []), "value", []) == 1)) {
                // line 92
                echo "              <div class=\"widget-radio-inline\">
                ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
                <a href=\"";
                // line 94
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_preferences");
                echo "\" class=\"btn sensitive px-0\" target=_blank><i class=\"material-icons\">open_in_new</i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", [], "Admin.Catalog.Help"), "html", null, true);
                echo "</a>
              </div>
            ";
            } else {
                // line 97
                echo "              ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            // line 99
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </div>
     </div>
  </div>
</div>

<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delivery_in_stock", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delivery_in_stock", []), 'errors');
        echo "
    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delivery_in_stock", []), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delivery_out_stock", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delivery_out_stock", []), 'errors');
        echo "
    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delivery_out_stock", []), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "additional_shipping_cost", []), "vars", []), "label", []), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If a carrier has a tax, it will be added to the shipping fees. Does not apply to free shipping.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </h2>
    <label class=\"form-control-label\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this product incur additional shipping costs?", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "additional_shipping_cost", []), 'widget');
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectedCarriers", []), "vars", []), "label", []), "html", null, true);
        echo "</h2>
    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectedCarriers", []), 'widget');
        echo "
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <p class=\"alert-text\">
        ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If no carrier is selected then all the carriers will be available for customers orders.", [], "Admin.Catalog.Notification");
        echo "
    </p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_warehouse_refresh_product_warehouse_combination_form");
        echo "\">
    ";
        // line 155
        if ((((isset($context["asm_globally_activated"]) ? $context["asm_globally_activated"] : $this->getContext($context, "asm_globally_activated")) && (isset($context["isNotVirtual"]) ? $context["isNotVirtual"] : $this->getContext($context, "isNotVirtual"))) && (isset($context["isChecked"]) ? $context["isChecked"] : $this->getContext($context, "isChecked")))) {
            // line 156
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin:Product/ProductPage/Forms/form_warehouse_combination.html.twig", ["warehouses" => (isset($context["warehouses"]) ? $context["warehouses"] : $this->getContext($context, "warehouses")), "form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))]);
            echo "
    ";
        }
        // line 158
        echo "  </div>
</div>

";
        // line 161
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsShippingStepBottom", ["id_product" => (isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product"))]);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 161,  318 => 158,  312 => 156,  310 => 155,  306 => 154,  297 => 148,  287 => 141,  283 => 140,  272 => 132,  266 => 129,  261 => 127,  256 => 125,  246 => 118,  242 => 117,  238 => 116,  234 => 115,  226 => 110,  222 => 109,  218 => 108,  214 => 107,  205 => 100,  199 => 99,  193 => 97,  185 => 94,  181 => 93,  178 => 92,  175 => 91,  171 => 90,  163 => 89,  157 => 86,  152 => 84,  140 => 75,  135 => 73,  130 => 71,  126 => 70,  116 => 63,  111 => 61,  106 => 59,  102 => 58,  92 => 51,  87 => 49,  82 => 47,  78 => 46,  68 => 39,  63 => 37,  58 => 35,  54 => 34,  46 => 29,  42 => 28,  38 => 26,  36 => 25,);
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
{% set dimension_unit, weight_unit = 'PS_DIMENSION_UNIT'|configuration, 'PS_WEIGHT_UNIT'|configuration %}

<div class=\"col-md-12 pb-1\">
  <h2>{{ 'Package dimension'|trans({}, 'Admin.Catalog.Feature') }}</h2>
  <p class=\"subtitle\">{{ 'Adjust your shipping costs by filling in the product dimensions.'|trans({}, 'Admin.Catalog.Feature') }}</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.width.vars.label }}</label>
    {{ form_errors(form.width) }}
    <div class=\"input-group\">
      {{ form_widget(form.width) }}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ dimension_unit }}</span>
      </div>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.height.vars.label }}</label>
    {{ form_errors(form.height) }}
    <div class=\"input-group\">
      {{ form_widget(form.height) }}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ dimension_unit }}</span>
      </div>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.depth.vars.label }}</label>
    {{ form_errors(form.depth) }}
    <div class=\"input-group\">
      {{ form_widget(form.depth) }}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ dimension_unit }}</span>
      </div>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.weight.vars.label }}</label>
    {{ form_errors(form.weight) }}
    <div class=\"input-group\">
      {{ form_widget(form.weight) }}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ weight_unit }}</span>
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      {{ form.additional_delivery_times.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"{{ \"Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
    </h2>
    <div class=\"row\">
       <div class=\"col-md-12\" {% if block('widget_container_attributes') is defined %} {{ block('widget_container_attributes') }} {% endif %}>
          {% for child in form.additional_delivery_times %}
            {% if child.vars.value == 1 %}
              <div class=\"widget-radio-inline\">
                {{ form_widget(child) }}
                <a href=\"{{ path('admin_product_preferences') }}\" class=\"btn sensitive px-0\" target=_blank><i class=\"material-icons\">open_in_new</i> {{ \"edit\"|trans({}, 'Admin.Catalog.Help') }}</a>
              </div>
            {% else %}
              {{ form_widget(child) }}
            {% endif %}
          {% endfor %}
        </div>
     </div>
  </div>
</div>

<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.delivery_in_stock.vars.label }}</label>
    {{ form_errors(form.delivery_in_stock) }}
    {{ form_widget(form.delivery_in_stock) }}
    <p class=\"subtitle italic\">{{ 'Leave empty to disable.'|trans({}, 'Admin.Catalog.Feature') }}</p>
  </div>
</div>
<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.delivery_out_stock.vars.label }}</label>
    {{ form_errors(form.delivery_out_stock) }}
    {{ form_widget(form.delivery_out_stock) }}
    <p class=\"subtitle italic\">{{ 'Leave empty to disable.'|trans({}, 'Admin.Catalog.Feature') }}</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      {{ form.additional_shipping_cost.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"{{ \"If a carrier has a tax, it will be added to the shipping fees. Does not apply to free shipping.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
    </h2>
    <label class=\"form-control-label\">{{ 'Does this product incur additional shipping costs?'|trans({}, 'Admin.Catalog.Feature') }}</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        {{ form_widget(form.additional_shipping_cost) }}
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>{{ form.selectedCarriers.vars.label }}</h2>
    {{ form_widget(form.selectedCarriers) }}
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <p class=\"alert-text\">
        {{ 'If no carrier is selected then all the carriers will be available for customers orders.'|trans({}, 'Admin.Catalog.Notification')|raw }}
    </p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"{{ path('admin_warehouse_refresh_product_warehouse_combination_form') }}\">
    {% if asm_globally_activated and isNotVirtual and isChecked %}
      {{ include('@PrestaShop/Admin:Product/ProductPage/Forms/form_warehouse_combination.html.twig', { 'warehouses': warehouses, 'form': form }) }}
    {% endif %}
  </div>
</div>

{{ renderhook('displayAdminProductsShippingStepBottom', { 'id_product': id_product }) }}
", "@Product/ProductPage/Forms/form_shipping.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_shipping.html.twig");
    }
}
