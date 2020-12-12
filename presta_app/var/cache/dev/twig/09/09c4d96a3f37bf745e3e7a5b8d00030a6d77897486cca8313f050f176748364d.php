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

/* @PrestaShop/Admin/Helpers/dropdown_menu.html.twig */
class __TwigTemplate_71a5919aa19c5c0818d02d32c59515c32c76667dc33d072104f1da2b8eb60e10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig"));

        // line 25
        $context["buttonType"] = (((isset($context["buttonType"]) || array_key_exists("buttonType", $context))) ? (_twig_default_filter((isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "primary")) : ("primary"));
        // line 26
        $context["right"] = (((isset($context["right"]) || array_key_exists("right", $context))) ? (_twig_default_filter((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), false)) : (false));
        // line 27
        echo "
<div class=\"";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["div_style"]) || array_key_exists("div_style", $context))) ? (_twig_default_filter((isset($context["div_style"]) ? $context["div_style"] : $this->getContext($context, "div_style")), "btn-group dropdown")) : ("btn-group dropdown")), "html", null, true);
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
      class=\"btn btn-";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "html", null, true);
            echo "\"
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
  <button
    ";
        // line 45
        if ((isset($context["button_id"]) ? $context["button_id"] : $this->getContext($context, "button_id"))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["button_id"]) ? $context["button_id"] : $this->getContext($context, "button_id")), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "    class=\"btn btn-";
        echo twig_escape_filter($this->env, (isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "html", null, true);
        echo " dropdown-toggle\"
    ";
        // line 47
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) == true))) {
            echo "disabled=\"disabled\"";
        }
        // line 48
        echo "    data-toggle=\"dropdown\"
  >
    ";
        // line 50
        echo twig_escape_filter($this->env, (((isset($context["menu_label"]) || array_key_exists("menu_label", $context))) ? (_twig_default_filter((isset($context["menu_label"]) ? $context["menu_label"] : $this->getContext($context, "menu_label")), "")) : ("")), "html", null, true);
        echo "
    <i class=\"";
        // line 51
        echo twig_escape_filter($this->env, (((isset($context["menu_icon"]) || array_key_exists("menu_icon", $context))) ? (_twig_default_filter((isset($context["menu_icon"]) ? $context["menu_icon"] : $this->getContext($context, "menu_icon")), "icon-caret-down")) : ("icon-caret-down")), "html", null, true);
        echo "\"></i>
  </button>

  <div class=\"dropdown-menu";
        // line 54
        if ((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right"))) {
            echo " dropdown-menu-right";
        }
        echo "\">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 56
            echo "      ";
            if (($this->getAttribute($context["entry"], "divider", [], "any", true, true) && ($this->getAttribute($context["entry"], "divider", []) == true))) {
                // line 57
                echo "        <div class=\"dropdown-divider\"></div>
      ";
            } else {
                // line 59
                echo "        <a
          class=\"dropdown-item\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "href", []), "#")) : ("#")), "html", null, true);
                echo "\"
          ";
                // line 61
                if ($this->getAttribute($context["entry"], "onclick", [], "any", true, true)) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "onclick", []), "html", null, true);
                    echo "\"";
                }
                // line 62
                echo "          ";
                if ($this->getAttribute($context["entry"], "target", [], "any", true, true)) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "target", []), "html", null, true);
                    echo "\"";
                }
                // line 63
                echo "        >
          ";
                // line 64
                if ($this->getAttribute($context["entry"], "icon", [])) {
                    // line 65
                    echo "            <i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", []), "html", null, true);
                    echo "</i>
          ";
                }
                // line 67
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "label", []), "")) : ("")), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 70
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  175 => 70,  168 => 67,  162 => 65,  160 => 64,  157 => 63,  150 => 62,  144 => 61,  140 => 60,  137 => 59,  133 => 57,  130 => 56,  126 => 55,  120 => 54,  114 => 51,  110 => 50,  106 => 48,  102 => 47,  97 => 46,  91 => 45,  87 => 43,  80 => 40,  74 => 38,  72 => 37,  69 => 36,  65 => 35,  61 => 34,  57 => 33,  53 => 32,  50 => 31,  48 => 30,  43 => 28,  40 => 27,  38 => 26,  36 => 25,);
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

<div class=\"{{ div_style|default(\"btn-group dropdown\") }}\">

  {% if default_item is defined %}
    <a
      href=\"{{ default_item.href|default(\"#\") }}\"
      title=\"{{ default_item.title|default(default_item.label|default(\"\")) }}\"
      class=\"btn btn-{{ buttonType }}\"
      {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    >
      {% if default_item.icon %}
        <i class=\"material-icons\">{{ default_item.icon }}</i>
      {% endif %}
      {{ default_item.label|default('') }}
    </a>
  {% endif %}

  <button
    {% if button_id %}id=\"{{ button_id }}\"{% endif %}
    class=\"btn btn-{{ buttonType }} dropdown-toggle\"
    {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    data-toggle=\"dropdown\"
  >
    {{ menu_label|default('') }}
    <i class=\"{{ menu_icon|default(\"icon-caret-down\") }}\"></i>
  </button>

  <div class=\"dropdown-menu{% if right %} dropdown-menu-right{% endif %}\">
    {% for entry in items %}
      {% if entry.divider is defined and entry.divider==true %}
        <div class=\"dropdown-divider\"></div>
      {% else %}
        <a
          class=\"dropdown-item\" href=\"{{ entry.href|default(\"#\") }}\"
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
", "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Helpers/dropdown_menu.html.twig");
    }
}
