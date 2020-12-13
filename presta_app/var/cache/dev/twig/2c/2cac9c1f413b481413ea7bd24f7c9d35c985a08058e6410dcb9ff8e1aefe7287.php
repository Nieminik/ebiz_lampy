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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig */
class __TwigTemplate_c89387245a2deffe0895a1fcd25a1a95e6a94a06a35887f8172f949110b9314e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'manufacturer_address_form_rest' => [$this, 'block_manufacturer_address_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </div>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), 'errors');
        echo "

      ";
        // line 37
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "id_manufacturer", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Brand", [], "Admin.Catalog.Feature")]);
        // line 39
        echo "

      ";
        // line 41
        $context["nameHint"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " 0-9!<>,;?=+()@#\"�{}_\$%:");
        // line 42
        echo "
      ";
        // line 43
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "last_name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name", [], "Admin.Global"), "help" =>         // line 45
(isset($context["nameHint"]) ? $context["nameHint"] : $this->getContext($context, "nameHint"))]);
        // line 46
        echo "

      ";
        // line 48
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "first_name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name", [], "Admin.Global"), "help" =>         // line 50
(isset($context["nameHint"]) ? $context["nameHint"] : $this->getContext($context, "nameHint"))]);
        // line 51
        echo "

      ";
        // line 53
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "address", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "Admin.Global")]);
        // line 55
        echo "

      ";
        // line 57
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "address2", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address (2)", [], "Admin.Global")]);
        // line 59
        echo "

      ";
        // line 61
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "post_code", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip/postal code", [], "Admin.Global")]);
        // line 63
        echo "

      ";
        // line 65
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "city", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City", [], "Admin.Global")]);
        // line 67
        echo "

      ";
        // line 69
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "id_country", []), ["attr" => ["class" => "js-manufacturer-country-select", "data-states-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_states")]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global")]);
        // line 73
        echo "

      <div class=\"js-manufacturer-address-state\">
        ";
        // line 76
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "id_state", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State", [], "Admin.Global")]);
        // line 78
        echo "
      </div>

      ";
        // line 81
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "dni", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DNI", [], "Admin.Global")]);
        // line 83
        echo "

      ";
        // line 85
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "home_phone", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home phone", [], "Admin.Global")]);
        // line 87
        echo "

      ";
        // line 89
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "mobile_phone", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile phone", [], "Admin.Global")]);
        // line 91
        echo "

      ";
        // line 93
        ob_start();
        // line 94
        echo "        ";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>{}"), "html", null, true);
        echo "
      ";
        $context["otherHint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "
      ";
        // line 97
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), "other", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Other", [], "Admin.Global"), "help" =>         // line 99
(isset($context["otherHint"]) ? $context["otherHint"] : $this->getContext($context, "otherHint"))]);
        // line 100
        echo "

      ";
        // line 102
        $this->displayBlock('manufacturer_address_form_rest', $context, $blocks);
        // line 105
        echo "    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturers_index");
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>

</div>
";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_manufacturer_address_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manufacturer_address_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manufacturer_address_form_rest"));

        // line 103
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addressForm"]) ? $context["addressForm"] : $this->getContext($context, "addressForm")), 'rest');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 103,  202 => 102,  190 => 120,  182 => 115,  175 => 111,  171 => 110,  164 => 105,  162 => 102,  158 => 100,  156 => 99,  155 => 97,  152 => 96,  146 => 94,  144 => 93,  140 => 91,  138 => 89,  134 => 87,  132 => 85,  128 => 83,  126 => 81,  121 => 78,  119 => 76,  114 => 73,  112 => 69,  108 => 67,  106 => 65,  102 => 63,  100 => 61,  96 => 59,  94 => 57,  90 => 55,  88 => 53,  84 => 51,  82 => 50,  81 => 48,  77 => 46,  75 => 45,  74 => 43,  71 => 42,  69 => 41,  65 => 39,  63 => 37,  58 => 35,  51 => 31,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(addressForm) }}
<div class=\"card\">
  <div class=\"card-header\">
    {{ 'Addresses'|trans({}, 'Admin.Catalog.Feature') }}
  </div>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_errors(addressForm) }}

      {{ ps.form_group_row(addressForm.id_manufacturer, {}, {
        'label': 'Brand'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {% set nameHint = 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' 0-9!<>,;?=+()@#\"�{}_\$%:' %}

      {{ ps.form_group_row(addressForm.last_name, {}, {
        'label': 'Last name'|trans({}, 'Admin.Global'),
        'help': nameHint
      }) }}

      {{ ps.form_group_row(addressForm.first_name, {}, {
        'label': 'First name'|trans({}, 'Admin.Global'),
        'help': nameHint
      }) }}

      {{ ps.form_group_row(addressForm.address, {}, {
        'label': 'Address'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.address2, {}, {
        'label': 'Address (2)'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.post_code, {}, {
        'label': 'Zip/postal code'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.city, {}, {
        'label': 'City'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.id_country, {'attr': {
          'class': 'js-manufacturer-country-select',
          'data-states-url': path('admin_country_states') }}, {
          'label': 'Country'|trans({}, 'Admin.Global'),
      }) }}

      <div class=\"js-manufacturer-address-state\">
        {{ ps.form_group_row(addressForm.id_state, {}, {
          'label': 'State'|trans({}, 'Admin.Global'),
        }) }}
      </div>

      {{ ps.form_group_row(addressForm.dni, {}, {
        'label': 'DNI'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.home_phone, {}, {
        'label': 'Home phone'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.mobile_phone, {}, {
        'label': 'Mobile phone'|trans({}, 'Admin.Global'),
      }) }}

      {% set otherHint %}
        {{ 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>{}' }}
      {% endset %}

      {{ ps.form_group_row(addressForm.other, {}, {
        'label': 'Other'|trans({}, 'Admin.Global'),
        'help': otherHint
      }) }}

      {% block manufacturer_address_form_rest %}
        {{ form_rest(addressForm) }}
      {% endblock %}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      <a href=\"{{ path('admin_manufacturers_index') }}\" class=\"btn btn-outline-secondary\">
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>
  </div>

</div>
{{ form_end(addressForm) }}
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig");
    }
}
