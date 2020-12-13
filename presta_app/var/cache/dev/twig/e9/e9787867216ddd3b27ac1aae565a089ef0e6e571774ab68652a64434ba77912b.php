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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_204622710eef7d0f27f2319291cc77a0f7a32e8abab7f08b3d653dd82e33fd2d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        // line 25
        $context["id_property_name"] = $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "primary_field", []);
        // line 26
        $context["id_primary_key"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), (isset($context["id_property_name"]) ? $context["id_property_name"] : $this->getContext($context, "id_property_name")), [], "array");
        // line 27
        $context["record_id"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), (isset($context["id_property_name"]) ? $context["id_property_name"] : $this->getContext($context, "id_property_name")), [], "array");
        // line 28
        echo "
";
        // line 29
        $context["isValid"] = ($this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", []), [], "array") === "1");
        // line 30
        echo "
<div class=\"text-center\">
  <i
    class=\"material-icons ps-togglable-row grid-toggler-icon-";
        // line 33
        if (((isset($context["isValid"]) ? $context["isValid"] : $this->getContext($context, "isValid")) == true)) {
            echo "valid";
        } else {
            echo "not-valid";
        }
        echo "\"
    data-toggle-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "route", []), [$this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "route_param_name", []) => (isset($context["id_primary_key"]) ? $context["id_primary_key"] : $this->getContext($context, "id_primary_key"))]), "html", null, true);
        echo "\"
  >
    ";
        // line 36
        if ((isset($context["isValid"]) ? $context["isValid"] : $this->getContext($context, "isValid"))) {
            // line 37
            echo "      check
    ";
        } else {
            // line 39
            echo "      clear
    ";
        }
        // line 41
        echo "  </i>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 41,  71 => 39,  67 => 37,  65 => 36,  60 => 34,  52 => 33,  47 => 30,  45 => 29,  42 => 28,  40 => 27,  38 => 26,  36 => 25,);
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
{% set id_property_name = column.options.primary_field %}
{% set id_primary_key = record[id_property_name] %}
{% set record_id = record[id_property_name] %}

{% set isValid = record[column.id] is same as('1') %}

<div class=\"text-center\">
  <i
    class=\"material-icons ps-togglable-row grid-toggler-icon-{% if isValid == true %}valid{% else %}not-valid{% endif %}\"
    data-toggle-url=\"{{ path(column.options.route, {(column.options.route_param_name) : id_primary_key})}}\"
  >
    {% if isValid %}
      check
    {% else %}
      clear
    {% endif %}
  </i>
</div>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/toggle.html.twig");
    }
}
