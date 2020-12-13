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

/* @Product/ProductPage/Blocks/header.html.twig */
class __TwigTemplate_8e12f15575bbc244f9ecd96ac388bccbdd9114ca4ba090fcc699a5a2e34ca816 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/header.html.twig"));

        // line 25
        echo "<div class=\"product-header col-md-12\">
  <div class=\"row justify-content-md-center\">
  ";
        // line 27
        if ((isset($context["is_multishop_context"]) ? $context["is_multishop_context"] : $this->getContext($context, "is_multishop_context"))) {
            // line 28
            echo "    <div class=\"col-xxl-10\">
      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are in a multistore context: any modification will impact all your shops, or each shop of the active group.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
      </div>
    </div>
  ";
        }
        // line 34
        echo "
    <div class=\"col-xxl-10\">
      <div class=\"row\">
        <div class=\"col-md-7 big-input ";
        // line 37
        echo ((($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) ? ("friendly-url-force-update") : (""));
        echo "\" id=\"form_step1_names\">
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), 'widget');
        echo "
        </div>
        <div class=\"col-sm-7 col-md-2 form_step1_type_product\">
          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formType"]) ? $context["formType"] : $this->getContext($context, "formType")), 'widget');
        echo "
          <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
            data-content=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"></span>
        </div>
        <div class=\"col-sm-2 col-md-1 form_switch_language\">
          <div class=\"";
        // line 46
        echo (((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages"))) == 1)) ? ("hide") : (""));
        echo "\">
            <select id=\"form_switch_language\" class=\"custom-select\">
              ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", []), "html", null, true);
            echo "\" ";
            if (((isset($context["default_language_iso"]) ? $context["default_language_iso"] : $this->getContext($context, "default_language_iso")) == $this->getAttribute($context["language"], "iso_code", []))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", []), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </select>
          </div>
        </div>
        <div class=\"toolbar col-sm-3 col-md-2 text-md-right\">
          <a class=\"toolbar-button btn-sales\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["stats_link"]) ? $context["stats_link"] : $this->getContext($context, "stats_link")), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", [], "Admin.Global"), "html", null, true);
        echo "\"
            id=\"product_form_go_to_sales\">
            <i class=\"material-icons\">assessment</i>
            <span class=\"title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", [], "Admin.Global"), "html", null, true);
        echo "</span>
          </a>

          <a
            class=\"toolbar-button btn-quicknav btn-sidebar\"
            href=\"#\"
            title=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", [], "Admin.Global"), "html", null, true);
        echo "\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_list", ["limit" => "last", "offset" => "last", "view" => "quicknav"]), "html", null, true);
        echo "\"
            id=\"product_form_open_quicknav\"
          >
            <i class=\"material-icons\">list</i>
            <span class=\"title\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product list", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </a>

          <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
            title=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["help_link"]) ? $context["help_link"] : $this->getContext($context, "help_link")), "html", null, true);
        echo "\"
            id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "</span>
          </a>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-12\">
          ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), 'errors');
        echo "
          ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formType"]) ? $context["formType"] : $this->getContext($context, "formType")), 'errors');
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 89,  168 => 88,  159 => 82,  152 => 78,  146 => 75,  139 => 71,  132 => 67,  126 => 64,  117 => 58,  109 => 55,  103 => 51,  88 => 49,  84 => 48,  79 => 46,  73 => 43,  68 => 41,  62 => 38,  58 => 37,  53 => 34,  46 => 30,  42 => 28,  40 => 27,  36 => 25,);
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
<div class=\"product-header col-md-12\">
  <div class=\"row justify-content-md-center\">
  {% if is_multishop_context %}
    <div class=\"col-xxl-10\">
      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">{{ 'You are in a multistore context: any modification will impact all your shops, or each shop of the active group.'|trans({}, 'Admin.Catalog.Notification') }}</p>
      </div>
    </div>
  {% endif %}

    <div class=\"col-xxl-10\">
      <div class=\"row\">
        <div class=\"col-md-7 big-input {{ 'PS_FORCE_FRIENDLY_PRODUCT'|configuration == 1 ? 'friendly-url-force-update' : '' }}\" id=\"form_step1_names\">
          {{ form_widget(formName) }}
        </div>
        <div class=\"col-sm-7 col-md-2 form_step1_type_product\">
          {{ form_widget(formType) }}
          <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
            data-content=\"{{ \"Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?\"|trans({}, 'Admin.Catalog.Help') }}\"></span>
        </div>
        <div class=\"col-sm-2 col-md-1 form_switch_language\">
          <div class=\"{{ languages|length == 1 ? 'hide' : '' }}\">
            <select id=\"form_switch_language\" class=\"custom-select\">
              {% for language in languages %}
                <option value=\"{{ language.iso_code }}\" {% if default_language_iso == language.iso_code %}selected=\"selected\"{% endif %}>{{ language.iso_code }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        <div class=\"toolbar col-sm-3 col-md-2 text-md-right\">
          <a class=\"toolbar-button btn-sales\" href=\"{{ stats_link }}\" target=\"_blank\" title=\"{{ 'Sales'|trans({}, 'Admin.Global') }}\"
            id=\"product_form_go_to_sales\">
            <i class=\"material-icons\">assessment</i>
            <span class=\"title\">{{ 'Sales'|trans({}, 'Admin.Global') }}</span>
          </a>

          <a
            class=\"toolbar-button btn-quicknav btn-sidebar\"
            href=\"#\"
            title=\"{{ 'Quick navigation'|trans({}, 'Admin.Global') }}\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"{{ path('admin_product_list', {limit: 'last', offset: 'last', view: 'quicknav'}) }}\"
            id=\"product_form_open_quicknav\"
          >
            <i class=\"material-icons\">list</i>
            <span class=\"title\">{{ 'Product list'|trans({}, 'Admin.Catalog.Feature') }}</span>
          </a>

          <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
            title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"{{ help_link }}\"
            id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">{{ 'Help'|trans({}, 'Admin.Global') }}</span>
          </a>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-12\">
          {{ form_errors(formName) }}
          {{ form_errors(formType) }}
        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Blocks/header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Blocks/header.html.twig");
    }
}
