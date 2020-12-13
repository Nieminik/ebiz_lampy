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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig */
class __TwigTemplate_408a5b311923b1984c1537db968d835be9e24e7fe9aa6e78bc67646eac7b4a51 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'category_cover_image' => [$this, 'block_category_cover_image'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('category_cover_image', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_category_cover_image($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_cover_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_cover_image"));

        // line 27
        echo "  ";
        if (((isset($context["coverImage"]) || array_key_exists("coverImage", $context)) &&  !(null === (isset($context["coverImage"]) ? $context["coverImage"] : $this->getContext($context, "coverImage"))))) {
            // line 28
            echo "    <div>
      <form action=\"\">
        <figure class=\"figure\">
          <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coverImage"]) ? $context["coverImage"] : $this->getContext($context, "coverImage")), "path", []), "html", null, true);
            echo "\" class=\"figure-img img-fluid img-thumbnail\">
          <figcaption class=\"figure-caption\">
            <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coverImage"]) ? $context["coverImage"] : $this->getContext($context, "coverImage")), "size", []), "html", null, true);
            echo "</p>
            <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                    data-form-submit-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_delete_cover_image", ["categoryId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "get", [0 => "categoryId"], "method")]), "html", null, true);
            echo "\"
                    data-form-csrf-token=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-cover-image"), "html", null, true);
            echo "\"
                    type=\"button\"
            >
              <i class=\"material-icons\">
                delete_forever
              </i>
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          </figcaption>
        </figure>
      </form>
    </div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  82 => 36,  78 => 35,  71 => 33,  66 => 31,  61 => 28,  58 => 27,  40 => 26,  37 => 25,);
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

{% block category_cover_image %}
  {% if coverImage is defined and coverImage is not null %}
    <div>
      <form action=\"\">
        <figure class=\"figure\">
          <img src=\"{{ coverImage.path }}\" class=\"figure-img img-fluid img-thumbnail\">
          <figcaption class=\"figure-caption\">
            <p>{{ 'File size'|trans({}, 'Admin.Advparameters.Feature') }} {{ coverImage.size }}</p>
            <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                    data-form-submit-url=\"{{ path('admin_categories_delete_cover_image', {'categoryId': app.request.get('categoryId')}) }}\"
                    data-form-csrf-token=\"{{ csrf_token('delete-cover-image') }}\"
                    type=\"button\"
            >
              <i class=\"material-icons\">
                delete_forever
              </i>
              {{ 'Delete'|trans({}, 'Admin.Actions') }}
            </button>
          </figcaption>
        </figure>
      </form>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig");
    }
}
