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

/* @Product/ProductPage/Forms/form_categories.html.twig */
class __TwigTemplate_f2df4f364595b030f6a0f2be834ade87d010c37c35a43a8f7919f288772e8c47 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_categories.html.twig"));

        // line 25
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  <span class=\"help-box\" data-toggle=\"popover\"
    data-content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Where should the product be available on your site? The main category is where the product appears by default: this is the category which is seen in the product page's URL. Disabled categories are written in italics.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
</h2>
<div class=\"categories-tree js-categories-tree\">
  <fieldset class=\"form-group\">
    <div class=\"ui-widget\">
      <div class=\"search search-with-icon\">
        <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
      </div>
      <label class=\"form-control-label text-uppercase\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 36
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Category/categories.html.twig", ["categories" => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))]);
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_category_default", []), 'errors');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_category_default", []), 'widget');
        echo "
      <div class=\"categories-tree-actions js-categories-tree-actions\">
        <span class=\"form-control-label\" id=\"categories-tree-expand\"><i class=\"material-icons\">expand_more</i>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        <span class=\"form-control-label\" id=\"categories-tree-reduce\"><i class=\"material-icons\">expand_less</i>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "</span>
      </div>
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", []), 'widget', ["defaultCategory" => true]);
        echo " ";
        // line 44
        echo "    </div>
  </fieldset>
  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", []), 'errors');
        echo "
  ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", []), 'widget');
        echo " ";
        // line 48
        echo "</div>
<div id=\"add-categories\">
  <h2>
    ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to quickly create a new category, you can do it here. Don’t forget to then go to the Categories page to fill in the needed details (description, image, etc.).  A new category will not automatically appear in your shop's menu, please read the Help about it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
  </h2>
  <div id=\"add-categories-content\" class=\"hide\">
    <div id=\"form_step1_new_category\" data-action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_simple_add_form", ["id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New category name", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new_category", []), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new_category", []), "name", []), 'widget');
        echo "
      </fieldset>

    </div>

      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new_category", []), "id_parent", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new_category", []), "id_parent", []), 'widget');
        echo "
      </fieldset>

      <fieldset class=\"form-group text-sm-right\">
        <button type=\"reset\" id=\"form_step1_new_category_reset\" class=\"btn btn-outline-secondary btn-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        <button type=\"button\" id=\"form_step1_new_category_save\" class=\"btn btn-primary save btn-sm\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </fieldset>
    </div>

  <a href=\"#\" class=\"btn btn-outline-secondary open\" id=\"add-category-button\">
    <i class=\"material-icons\">add_circle</i>
    ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 78,  149 => 72,  145 => 71,  138 => 67,  134 => 66,  125 => 60,  121 => 59,  117 => 58,  112 => 56,  106 => 53,  101 => 51,  96 => 48,  93 => 47,  89 => 46,  85 => 44,  82 => 43,  77 => 41,  73 => 40,  68 => 38,  64 => 37,  60 => 36,  56 => 35,  51 => 33,  42 => 27,  36 => 25,);
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
<h2>{{ \"Categories\"|trans({}, 'Admin.Catalog.Feature') }}
  <span class=\"help-box\" data-toggle=\"popover\"
    data-content=\"{{ \"Where should the product be available on your site? The main category is where the product appears by default: this is the category which is seen in the product page's URL. Disabled categories are written in italics.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
</h2>
<div class=\"categories-tree js-categories-tree\">
  <fieldset class=\"form-group\">
    <div class=\"ui-widget\">
      <div class=\"search search-with-icon\">
        <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1\" placeholder=\"{{ 'Search categories'|trans({}, 'Admin.Catalog.Help') }}\">
      </div>
      <label class=\"form-control-label text-uppercase\">{{ 'Associated categories'|trans({}, 'Admin.Catalog.Feature') }}</label>
      {{ include('@PrestaShop/Admin/Category/categories.html.twig', {'categories': categories }) }}
      {{ form_errors(form.id_category_default) }}
      {{ form_widget(form.id_category_default) }}
      <div class=\"categories-tree-actions js-categories-tree-actions\">
        <span class=\"form-control-label\" id=\"categories-tree-expand\"><i class=\"material-icons\">expand_more</i>{{ \"Expand\"|trans({}, 'Admin.Actions') }}</span>
        <span class=\"form-control-label\" id=\"categories-tree-reduce\"><i class=\"material-icons\">expand_less</i>{{ \"Collapse\"|trans({}, 'Admin.Actions') }}</span>
      </div>
      {{ form_widget(form.categories, {'defaultCategory': true}) }} {# see bootstrap_4_layout.html.twig #}
    </div>
  </fieldset>
  {{ form_errors(form.categories) }}
  {{ form_widget(form.categories) }} {# see bootstrap_4_layout.html.twig #}
</div>
<div id=\"add-categories\">
  <h2>
    {{ \"Create a new category\"|trans({}, 'Admin.Catalog.Feature') }}
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"{{ \"If you want to quickly create a new category, you can do it here. Don’t forget to then go to the Categories page to fill in the needed details (description, image, etc.).  A new category will not automatically appear in your shop's menu, please read the Help about it.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
  </h2>
  <div id=\"add-categories-content\" class=\"hide\">
    <div id=\"form_step1_new_category\" data-action=\"{{ path('admin_category_simple_add_form', {'id_product': productId }) }}\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ \"New category name\"|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.new_category) }}
        {{ form_widget(form.new_category.name) }}
      </fieldset>

    </div>

      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ form.new_category.id_parent.vars.label }}</label>
        {{ form_widget(form.new_category.id_parent) }}
      </fieldset>

      <fieldset class=\"form-group text-sm-right\">
        <button type=\"reset\" id=\"form_step1_new_category_reset\" class=\"btn btn-outline-secondary btn-sm\">{{ 'Cancel'|trans({}, 'Admin.Actions') }}</button>
        <button type=\"button\" id=\"form_step1_new_category_save\" class=\"btn btn-primary save btn-sm\">{{ 'Create'|trans({}, 'Admin.Actions') }}</button>
      </fieldset>
    </div>

  <a href=\"#\" class=\"btn btn-outline-secondary open\" id=\"add-category-button\">
    <i class=\"material-icons\">add_circle</i>
    {{ 'Create a category'|trans({}, 'Admin.Catalog.Feature') }}
  </a>
</div>
", "@Product/ProductPage/Forms/form_categories.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_categories.html.twig");
    }
}
