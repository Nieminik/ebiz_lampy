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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig */
class __TwigTemplate_0cc1f88c18852effeafb68ee59a2014ca6fb89d80d1c754e41436644dec278fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["viewableManufacturer"]) ? $context["viewableManufacturer"] : $this->getContext($context, "viewableManufacturer")), "manufacturerAddresses", [])), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        if ( !twig_test_empty($this->getAttribute((isset($context["viewableManufacturer"]) ? $context["viewableManufacturer"] : $this->getContext($context, "viewableManufacturer")), "manufacturerAddresses", []))) {
            // line 33
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address (2)", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Other", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["viewableManufacturer"]) ? $context["viewableManufacturer"] : $this->getContext($context, "viewableManufacturer")), "manufacturerAddresses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 49
                echo "            <tr>
              <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "first_name", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "last_name", []), "html", null, true);
                echo "</td>
              <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address1", []), "html", null, true);
                echo "</td>
              <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address2", []), "html", null, true);
                echo "</td>
              <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", []), "html", null, true);
                echo "</td>
              <td>";
                // line 54
                if ($this->getAttribute($context["address"], "state", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "state", []), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 55
                if ($this->getAttribute($context["address"], "phone", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phone", []), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 56
                if ($this->getAttribute($context["address"], "phone_mobile", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phone_mobile", []), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 57
                if ($this->getAttribute($context["address"], "other", [])) {
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["address"], "other", []), "html", null, true));
                } else {
                    echo "-";
                }
                echo "</td>
              <td>
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a class=\"btn tooltip-link js-link-row-action dropdown-item\"
                       href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturer_addresses_edit", ["addressId" => $this->getAttribute($context["address"], "id", [])]), "html", null, true);
                echo "\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "\"
                    >
                      <i class=\"material-icons\">edit</i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 77
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No address has been found for this brand.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
    ";
        }
        // line 79
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 79,  181 => 77,  176 => 74,  161 => 65,  155 => 62,  143 => 57,  135 => 56,  127 => 55,  119 => 54,  115 => 53,  111 => 52,  107 => 51,  101 => 50,  98 => 49,  94 => 48,  86 => 43,  82 => 42,  78 => 41,  74 => 40,  70 => 39,  66 => 38,  62 => 37,  58 => 36,  53 => 33,  51 => 32,  45 => 29,  41 => 28,  36 => 25,);
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

<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Addresses'|trans({}, 'Admin.Global') }}
    ({{ viewableManufacturer.manufacturerAddresses|length }})
  </h3>
  <div class=\"card-body\">
    {% if viewableManufacturer.manufacturerAddresses is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Address'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Address (2)'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'City'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'State'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Home phone'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Mobile phone'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Other'|trans({}, 'Admin.Global') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for address in viewableManufacturer.manufacturerAddresses %}
            <tr>
              <td>{{ address.first_name }} {{ address.last_name }}</td>
              <td>{{ address.address1 }}</td>
              <td>{{ address.address2 }}</td>
              <td>{{ address.city }}</td>
              <td>{% if address.state %}{{ address.state }}{% else %}-{% endif %}</td>
              <td>{% if address.phone %}{{ address.phone }}{% else %}-{% endif %}</td>
              <td>{% if address.phone_mobile %}{{ address.phone_mobile }}{% else %}-{% endif %}</td>
              <td>{% if address.other %}{{ address.other|nl2br }}{% else %}-{% endif %}</td>
              <td>
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a class=\"btn tooltip-link js-link-row-action dropdown-item\"
                       href=\"{{ path('admin_manufacturer_addresses_edit', {'addressId': address.id }) }}\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">edit</i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% else %}
      {{ 'No address has been found for this brand.'|trans({}, 'Admin.Catalog.Notification') }}
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig");
    }
}
