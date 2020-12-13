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

/* @Product/ProductPage/Forms/form_specific_price.html.twig */
class __TwigTemplate_02940a2c152c7267343b74c682fa3bb61cbebbbe1fc048dc01d9a5dba110d300 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        // line 25
        if ( !(isset($context["is_modal"]) || array_key_exists("is_modal", $context))) {
            // line 26
            echo "  ";
            $context["is_modal"] = false;
        }
        // line 28
        echo "
";
        // line 29
        if (((isset($context["is_modal"]) ? $context["is_modal"] : $this->getContext($context, "is_modal")) == false)) {
            // line 30
            echo "  ";
            $context["column_default_md_3"] = "col-md-3";
            // line 31
            echo "  ";
            $context["column_default_md_2"] = "col-md-2";
            // line 32
            echo "  ";
            $context["column_default_xl_2"] = "col-xl-2";
        } else {
            // line 34
            echo "  ";
            $context["column_default_md_3"] = "col-md-9";
            // line 35
            echo "  ";
            $context["column_default_md_2"] = "col-md-4";
            // line 36
            echo "  ";
            $context["column_default_xl_2"] = "col-xl-4";
        }
        // line 38
        echo "
<div class=\"card card-block\">
  <h4><b>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific price conditions", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sp_id_shop", [], "any", false, true), "vars", [], "any", false, true), "choices", [], "any", true, true)) {
            // line 44
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "</label>
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_shop", []), 'errors');
            echo "
        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_shop", []), 'widget');
            echo "
      </fieldset>
    </div>
  </div>
  ";
        } else {
            // line 54
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_shop", []), 'widget');
            echo "
  ";
        }
        // line 56
        echo "
  <div class=\"row\">
    <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) ? $context["column_default_md_3"] : $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For", [], "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_currency", []), 'errors');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_currency", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) ? $context["column_default_md_3"] : $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_country", []), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_country", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) ? $context["column_default_md_3"] : $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_group", []), 'errors');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_group", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_customer", []), 'errors');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_customer", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 ";
        // line 88
        echo (((isset($context["has_combinations"]) ? $context["has_combinations"] : $this->getContext($context, "has_combinations"))) ? ("") : ("hide"));
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_product_attribute", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_product_attribute", []), 'errors');
        echo "
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_product_attribute", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) ? $context["column_default_md_3"] : $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from", []), 'errors');
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) ? $context["column_default_md_3"] : $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to", [], "Admin.Global");
        echo "</label>
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_to", []), 'errors');
        echo "
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_to", []), 'widget');
        echo "
      </fieldset>
    </div>
  ";
        // line 110
        if (((isset($context["is_modal"]) ? $context["is_modal"] : $this->getContext($context, "is_modal")) == true)) {
            // line 111
            echo "  </div>
  <div class=\"row\">
  ";
        }
        // line 114
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["column_default_md_2"]) ? $context["column_default_md_2"] : $this->getContext($context, "column_default_md_2")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from_quantity", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from_quantity", []), 'errors');
        echo "
        <div class=\"input-group\">
          ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from_quantity", []), 'widget');
        echo "
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit(s)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  <div class=\"row\">
    <div class=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) ? $context["column_default_md_3"] : $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_price", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_price", []), 'errors');
        echo "
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_price", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) ? $context["column_default_md_3"] : $this->getContext($context, "column_default_md_3")), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leave_bprice", []), 'errors');
        echo "
        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leave_bprice", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["column_default_xl_2"]) ? $context["column_default_xl_2"] : $this->getContext($context, "column_default_xl_2")), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply a discount of", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction", []), 'errors');
        echo "
        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["column_default_xl_2"]) ? $context["column_default_xl_2"] : $this->getContext($context, "column_default_xl_2")), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_type", []), 'errors');
        echo "
        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_type", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["column_default_xl_2"]) ? $context["column_default_xl_2"] : $this->getContext($context, "column_default_xl_2")), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_tax", []), 'errors');
        echo "
        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_tax", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancel", []), 'widget');
        echo "
    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", []), 'widget');
        echo "
  </div>
  <div class=\"clearfix\"></div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_specific_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 171,  373 => 170,  365 => 165,  361 => 164,  355 => 161,  349 => 158,  345 => 157,  339 => 154,  333 => 151,  329 => 150,  325 => 149,  320 => 147,  312 => 142,  308 => 141,  302 => 138,  296 => 135,  292 => 134,  288 => 133,  283 => 131,  278 => 129,  267 => 121,  262 => 119,  257 => 117,  253 => 116,  247 => 114,  242 => 111,  240 => 110,  234 => 107,  230 => 106,  226 => 105,  221 => 103,  215 => 100,  211 => 99,  207 => 98,  202 => 96,  195 => 92,  191 => 91,  187 => 90,  182 => 88,  174 => 83,  170 => 82,  166 => 81,  158 => 76,  154 => 75,  148 => 72,  142 => 69,  138 => 68,  132 => 65,  126 => 62,  122 => 61,  118 => 60,  113 => 58,  109 => 56,  103 => 54,  95 => 49,  91 => 48,  87 => 47,  82 => 44,  80 => 43,  75 => 41,  71 => 40,  67 => 38,  63 => 36,  60 => 35,  57 => 34,  53 => 32,  50 => 31,  47 => 30,  45 => 29,  42 => 28,  38 => 26,  36 => 25,);
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
{% if is_modal is not defined %}
  {% set is_modal = false %}
{% endif %}

{% if is_modal == false %}
  {% set column_default_md_3 = 'col-md-3' %}
  {% set column_default_md_2 = 'col-md-2' %}
  {% set column_default_xl_2 = 'col-xl-2' %}
{% else %}
  {% set column_default_md_3 = 'col-md-9' %}
  {% set column_default_md_2 = 'col-md-4' %}
  {% set column_default_xl_2 = 'col-xl-4' %}
{% endif %}

<div class=\"card card-block\">
  <h4><b>{{ 'Specific price conditions'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  {{ form_errors(form) }}

  {% if form.sp_id_shop.vars.choices is defined %}
  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>{{ 'Shop'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_shop) }}
        {{ form_widget(form.sp_id_shop) }}
      </fieldset>
    </div>
  </div>
  {% else %}
      {{ form_widget(form.sp_id_shop) }}
  {% endif %}

  <div class=\"row\">
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ 'For'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_currency) }}
        {{ form_widget(form.sp_id_currency) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_country) }}
        {{ form_widget(form.sp_id_country) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_group) }}
        {{ form_widget(form.sp_id_group) }}
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>{{ 'Customer'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_customer) }}
        {{ form_widget(form.sp_id_customer) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 {{ has_combinations ? '' : 'hide' }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_id_product_attribute.vars.label }}</label>
        {{ form_errors(form.sp_id_product_attribute) }}
        {{ form_widget(form.sp_id_product_attribute) }}
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from.vars.label }}</label>
        {{ form_errors(form.sp_from) }}
        {{ form_widget(form.sp_from) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ 'to'|trans({}, 'Admin.Global')|raw }}</label>
        {{ form_errors(form.sp_to) }}
        {{ form_widget(form.sp_to) }}
      </fieldset>
    </div>
  {% if is_modal == true %}
  </div>
  <div class=\"row\">
  {% endif %}
    <div class=\"{{ column_default_md_2 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from_quantity.vars.label }}</label>
        {{ form_errors(form.sp_from_quantity) }}
        <div class=\"input-group\">
          {{ form_widget(form.sp_from_quantity) }}
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">{{ 'Unit(s)'|trans({}, 'Admin.Catalog.Feature') }}</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>{{ 'Impact on price'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  <div class=\"row\">
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_price.vars.label }}</label>
        {{ form_errors(form.sp_price) }}
        {{ form_widget(form.sp_price) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.leave_bprice) }}
        {{ form_widget(form.leave_bprice) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"{{ column_default_xl_2 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'Apply a discount of'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.sp_reduction) }}
        {{ form_widget(form.sp_reduction) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_xl_2 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_type) }}
        {{ form_widget(form.sp_reduction_type) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_xl_2 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_tax) }}
        {{ form_widget(form.sp_reduction_tax) }}
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    {{ form_widget(form.cancel) }}
    {{ form_widget(form.save) }}
  </div>
  <div class=\"clearfix\"></div>
</div>
", "@Product/ProductPage/Forms/form_specific_price.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_specific_price.html.twig");
    }
}
