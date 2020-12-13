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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_2119afa6db5a556ef4ca3e3df7e0e50a3ba4b1a352fd1ca0db6947c3662a2207 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["actions"] = $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "options", []), "actions", []);
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")))) {
            // line 29
            echo "  <div class=\"btn-group-action text-right\">
    <div class=\"btn-group\">
      ";
            // line 31
            list($context["skippedActions"], $context["isFirstRendered"]) =             [0, false];
            // line 32
            echo "
      ";
            // line 34
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 35
                echo "        ";
                if ( !(isset($context["isFirstRendered"]) ? $context["isFirstRendered"] : $this->getContext($context, "isFirstRendered"))) {
                    // line 36
                    echo "          ";
                    $context["skippedActions"] = ((isset($context["skippedActions"]) ? $context["skippedActions"] : $this->getContext($context, "skippedActions")) + 1);
                    // line 37
                    echo "        ";
                }
                // line 38
                echo "
        ";
                // line 39
                if (($this->getAttribute($context["action"], "isApplicable", [0 => (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record"))], "method") &&  !(isset($context["isFirstRendered"]) ? $context["isFirstRendered"] : $this->getContext($context, "isFirstRendered")))) {
                    // line 40
                    echo "          ";
                    echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                     // line 41
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "column" =>                     // line 42
(isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "attributes" => ["class" => "dropdown-item", "tooltip_name" => true], "record" =>                     // line 44
(isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "action" =>                     // line 45
$context["action"]]);
                    // line 46
                    echo "

          ";
                    // line 48
                    $context["isFirstRendered"] = true;
                    // line 49
                    echo "        ";
                }
                // line 50
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
      ";
            // line 53
            echo "      ";
            if ((twig_length_filter($this->env, (isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions"))) > (isset($context["skippedActions"]) ? $context["skippedActions"] : $this->getContext($context, "skippedActions")))) {
                // line 54
                echo "        <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
           data-toggle=\"dropdown\"
           aria-haspopup=\"true\"
           aria-expanded=\"false\"
        >
        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
          ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), (isset($context["skippedActions"]) ? $context["skippedActions"] : $this->getContext($context, "skippedActions"))));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    if ($this->getAttribute($context["action"], "isApplicable", [0 => (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record"))], "method")) {
                        // line 63
                        echo "            ";
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                         // line 64
(isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "column" =>                         // line 65
(isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                         // line 67
(isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "action" =>                         // line 68
$context["action"]]);
                        // line 69
                        echo "
          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </div>
      ";
            }
            // line 73
            echo "    </div>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 73,  162 => 71,  151 => 69,  149 => 68,  148 => 67,  147 => 65,  146 => 64,  144 => 63,  133 => 62,  123 => 54,  120 => 53,  117 => 51,  103 => 50,  100 => 49,  98 => 48,  94 => 46,  92 => 45,  91 => 44,  90 => 42,  89 => 41,  87 => 40,  85 => 39,  82 => 38,  79 => 37,  76 => 36,  73 => 35,  55 => 34,  52 => 32,  50 => 31,  46 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set actions = column.options.actions %}

{% if actions is not empty %}
  <div class=\"btn-group-action text-right\">
    <div class=\"btn-group\">
      {% set skippedActions, isFirstRendered = 0, false %}

      {# Render first item that is not in dropwdown #}
      {% for action in actions %}
        {% if not isFirstRendered %}
          {% set skippedActions = skippedActions + 1 %}
        {% endif %}

        {% if action.isApplicable(record) and not isFirstRendered %}
          {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~action.type~'.html.twig', {
            'grid': grid,
            'column': column,
            'attributes': {'class': 'dropdown-item', 'tooltip_name': true},
            'record': record,
            'action': action
          }) }}

          {% set isFirstRendered = true %}
        {% endif %}
      {% endfor %}

      {# Render remaining items in dropdown #}
      {% if actions|length > skippedActions %}
        <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
           data-toggle=\"dropdown\"
           aria-haspopup=\"true\"
           aria-expanded=\"false\"
        >
        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
          {% for action in actions|slice(skippedActions) if action.isApplicable(record) %}
            {{ include('@PrestaShop/Admin/Common/Grid/Actions/Row/'~action.type~'.html.twig', {
              'grid': grid,
              'column': column,
              'attributes': {'class': 'dropdown-item', 'tooltip_name': false},
              'record': record,
              'action': action
            }) }}
          {% endfor %}
        </div>
      {% endif %}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
