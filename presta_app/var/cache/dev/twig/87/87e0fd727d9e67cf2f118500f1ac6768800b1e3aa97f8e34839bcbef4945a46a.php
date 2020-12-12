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

/* @Product/CatalogPage/Forms/form_edit_dropdown.html.twig */
class __TwigTemplate_2a38ed21c0c85ff290acc89eacfdcc781a75a423ec5520f4715af8cdb0247d38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig"));

        // line 25
        $context["buttonType"] = (((isset($context["buttonType"]) || array_key_exists("buttonType", $context))) ? (_twig_default_filter((isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "primary")) : ("primary"));
        // line 26
        $context["right"] = (((isset($context["right"]) || array_key_exists("right", $context))) ? (_twig_default_filter((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), false)) : (false));
        // line 27
        echo "
<div class=\"";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["div_style"]) || array_key_exists("div_style", $context))) ? (_twig_default_filter((isset($context["div_style"]) ? $context["div_style"] : $this->getContext($context, "div_style")), "btn-group")) : ("btn-group")), "html", null, true);
        echo "\">

  ";
        // line 30
        if ((isset($context["default_item"]) || array_key_exists("default_item", $context))) {
            // line 31
            echo "    <a
      href=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "href", []), "#")) : ("#")), "html", null, true);
            echo "\"
      title=\"";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "title", []), (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", []), "")) : ("")))) : ((($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", []), "")) : ("")))), "html", null, true);
            echo "\"
      class=\"btn tooltip-link product-edit\"
      ";
            // line 35
            if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) == true))) {
                echo "disabled=\"disabled\"";
            }
            // line 36
            echo "    >
      ";
            // line 37
            if ($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : $this->getContext($context, "default_item")), "icon", [])) {
                // line 38
                echo "        <i class=\"material-icons\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : $this->getContext($context, "default_item")), "icon", []), "html", null, true);
                echo "</i>
      ";
            }
            // line 40
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", []), "")) : ("")), "html", null, true);
            echo "
    </a>
  ";
        }
        // line 43
        echo "
  <button class=\"btn btn-link dropdown-toggle dropdown-toggle-split product-edit\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    ";
        // line 45
        echo twig_escape_filter($this->env, (((isset($context["menu_label"]) || array_key_exists("menu_label", $context))) ? (_twig_default_filter((isset($context["menu_label"]) ? $context["menu_label"] : $this->getContext($context, "menu_label")), "")) : ("")), "html", null, true);
        echo "
  </button>

  <div class=\"dropdown-menu";
        // line 48
        if ((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right"))) {
            echo " dropdown-menu-right";
        }
        echo "\" x-placement=\"bottom-start\" >
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 50
            echo "      ";
            if (($this->getAttribute($context["entry"], "divider", [], "any", true, true) && ($this->getAttribute($context["entry"], "divider", []) == true))) {
                // line 51
                echo "        <div class=\"dropdown-divider\"></div>
      ";
            } else {
                // line 53
                echo "        <a
          class=\"dropdown-item product-edit\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "href", []), "#")) : ("#")), "html", null, true);
                echo "\"
          ";
                // line 55
                if ($this->getAttribute($context["entry"], "onclick", [], "any", true, true)) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "onclick", []), "html", null, true);
                    echo "\"";
                }
                // line 56
                echo "          ";
                if ($this->getAttribute($context["entry"], "target", [], "any", true, true)) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "target", []), "html", null, true);
                    echo "\"";
                }
                // line 57
                echo "        >
          ";
                // line 58
                if ($this->getAttribute($context["entry"], "icon", [])) {
                    // line 59
                    echo "            <i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", []), "html", null, true);
                    echo "</i>
          ";
                }
                // line 61
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "label", []), "")) : ("")), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 64
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 65,  149 => 64,  142 => 61,  136 => 59,  134 => 58,  131 => 57,  124 => 56,  118 => 55,  114 => 54,  111 => 53,  107 => 51,  104 => 50,  100 => 49,  94 => 48,  88 => 45,  84 => 43,  77 => 40,  71 => 38,  69 => 37,  66 => 36,  62 => 35,  57 => 33,  53 => 32,  50 => 31,  48 => 30,  43 => 28,  40 => 27,  38 => 26,  36 => 25,);
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
{% set buttonType = buttonType|default('primary') %}
{% set right = right|default(false) %}

<div class=\"{{ div_style|default(\"btn-group\") }}\">

  {% if default_item is defined %}
    <a
      href=\"{{ default_item.href|default(\"#\") }}\"
      title=\"{{ default_item.title|default(default_item.label|default(\"\")) }}\"
      class=\"btn tooltip-link product-edit\"
      {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    >
      {% if default_item.icon %}
        <i class=\"material-icons\">{{ default_item.icon }}</i>
      {% endif %}
      {{ default_item.label|default('') }}
    </a>
  {% endif %}

  <button class=\"btn btn-link dropdown-toggle dropdown-toggle-split product-edit\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    {{ menu_label|default('') }}
  </button>

  <div class=\"dropdown-menu{% if right %} dropdown-menu-right{% endif %}\" x-placement=\"bottom-start\" >
    {% for entry in items %}
      {% if entry.divider is defined and entry.divider==true %}
        <div class=\"dropdown-divider\"></div>
      {% else %}
        <a
          class=\"dropdown-item product-edit\" href=\"{{ entry.href|default(\"#\") }}\"
          {% if entry.onclick is defined %}onclick=\"{{ entry.onclick }}\"{% endif %}
          {% if entry.target is defined %}target=\"{{ entry.target }}\"{% endif %}
        >
          {% if entry.icon %}
            <i class=\"material-icons\">{{ entry.icon }}</i>
          {% endif %}
          {{ entry.label|default('') }}
        </a>
      {% endif %}
    {% endfor %}
  </div>

</div>
", "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Forms/form_edit_dropdown.html.twig");
    }
}
