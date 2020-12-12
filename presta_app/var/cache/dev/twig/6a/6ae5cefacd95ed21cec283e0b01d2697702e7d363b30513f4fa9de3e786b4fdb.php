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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig */
class __TwigTemplate_f87dc564451a462e0182718d06e3d433af3df2ee0f6e02108f88827c5096dd1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-block\">
    <nav>
      <ol class=\"breadcrumb\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentCategoryView"]) ? $context["currentCategoryView"] : $this->getContext($context, "currentCategoryView")), "breadcrumb_tree", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "          <li class=\"breadcrumb-item\">
            ";
            // line 32
            if ((($this->getAttribute($context["category"], "id_parent", []) == 0) && (isset($context["isSingleShopContext"]) ? $context["isSingleShopContext"] : $this->getContext($context, "isSingleShopContext")))) {
                // line 33
                echo "              ";
                if (($this->getAttribute($context["category"], "id_category", []) == $this->getAttribute((isset($context["currentCategoryView"]) ? $context["currentCategoryView"] : $this->getContext($context, "currentCategoryView")), "id", []))) {
                    // line 34
                    echo "                <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "</span>
                <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_edit", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                    echo "\">
                  <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                  ";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                    echo "
                </a>
              ";
                } else {
                    // line 40
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index");
                    echo "\">
                  ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "
                </a>
              ";
                }
                // line 44
                echo "            ";
            } elseif (($this->getAttribute($context["category"], "id_category", []) == $this->getAttribute((isset($context["currentCategoryView"]) ? $context["currentCategoryView"] : $this->getContext($context, "currentCategoryView")), "id", []))) {
                // line 45
                echo "              <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "</span>
              <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_edit", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                echo "\">
                <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                ";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>
            ";
            } else {
                // line 51
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                echo "\">
                ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 55
            echo "          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </ol>
    </nav>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 57,  112 => 55,  106 => 52,  101 => 51,  95 => 48,  90 => 46,  85 => 45,  82 => 44,  76 => 41,  71 => 40,  65 => 37,  60 => 35,  55 => 34,  52 => 33,  50 => 32,  47 => 31,  43 => 30,  36 => 25,);
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
  <div class=\"card-block\">
    <nav>
      <ol class=\"breadcrumb\">
        {% for category in currentCategoryView.breadcrumb_tree %}
          <li class=\"breadcrumb-item\">
            {% if category.id_parent == 0 and isSingleShopContext %}
              {% if category.id_category == currentCategoryView.id %}
                <span>{{ category.name }}</span>
                <a href=\"{{ path('admin_categories_edit', {'categoryId': category.id_category}) }}\">
                  <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                  {{ 'Edit'|trans({}, 'Admin.Actions') }}
                </a>
              {% else %}
                <a href=\"{{ path('admin_categories_index') }}\">
                  {{ category.name }}
                </a>
              {% endif %}
            {% elseif category.id_category == currentCategoryView.id %}
              <span>{{ category.name }}</span>
              <a href=\"{{ path('admin_categories_edit', {'categoryId': category.id_category}) }}\">
                <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                {{ 'Edit'|trans({}, 'Admin.Actions') }}
              </a>
            {% else %}
              <a href=\"{{ path('admin_categories_index', {'categoryId': category.id_category}) }}\">
                {{ category.name }}
              </a>
            {% endif %}
          </li>
        {% endfor %}
      </ol>
    </nav>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig");
    }
}
