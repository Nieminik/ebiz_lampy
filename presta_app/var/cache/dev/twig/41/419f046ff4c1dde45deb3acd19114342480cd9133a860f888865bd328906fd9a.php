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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig */
class __TwigTemplate_81781384bc433f9769cf0337e060357aac4139fc60cdc7005660fa6c00408b22 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig"));

        // line 25
        echo "
<div class=\"category-position-column\">
  ";
        // line 27
        if ((($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "sorting", []), "order_by", []) == "position") && ($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "sorting", []), "order_way", []) == "asc"))) {
            // line 28
            echo "    <div class=\"js-drag-handle js-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "id", []), "html", null, true);
            echo "-position text-center\"
         data-id=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "id_field", []), [], "array"), "html", null, true);
            echo "\"
         data-id-parent=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "id_parent_field", []), [], "array"), "html", null, true);
            echo "\"
         data-position=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "field", []), [], "array"), "html", null, true);
            echo "\"
         data-position-update-url=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "update_route", []));
            echo "\"
         data-pagination-offset=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pagination", []), "offset", []), "html", null, true);
            echo "\"
    >
    <span class=\"js-position position\">
      ";
            // line 36
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "field", []), [], "array") + 1), "html", null, true);
            echo "
    </span>
    </div>
  ";
        } else {
            // line 40
            echo "    <div class=\"text-center\">
    <span class=\"position\">
      ";
            // line 42
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "field", []), [], "array") + 1), "html", null, true);
            echo "
    </span>
    </div>
  ";
        }
        // line 46
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 46,  80 => 42,  76 => 40,  69 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  47 => 29,  42 => 28,  40 => 27,  36 => 25,);
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

<div class=\"category-position-column\">
  {% if grid.sorting.order_by == 'position' and grid.sorting.order_way == 'asc' %}
    <div class=\"js-drag-handle js-{{ grid.id }}-position text-center\"
         data-id=\"{{ record[column.options.id_field] }}\"
         data-id-parent=\"{{ record[column.options.id_parent_field] }}\"
         data-position=\"{{ record[column.options.field] }}\"
         data-position-update-url=\"{{ path(column.options.update_route) }}\"
         data-pagination-offset=\"{{ grid.pagination.offset }}\"
    >
    <span class=\"js-position position\">
      {{ record[column.options.field] + 1 }}
    </span>
    </div>
  {% else %}
    <div class=\"text-center\">
    <span class=\"position\">
      {{ record[column.options.field] + 1 }}
    </span>
    </div>
  {% endif %}
</div>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/category_position.html.twig");
    }
}
