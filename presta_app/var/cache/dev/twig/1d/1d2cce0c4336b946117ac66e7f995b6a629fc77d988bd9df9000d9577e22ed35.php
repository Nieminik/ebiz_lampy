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

/* @PrestaShop/Admin/Common/pagination.html.twig */
class __TwigTemplate_86c6da65e27ce710f18065ad0164a8663ddc5416707a403280ee0260f06d2fcc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination.html.twig"));

        // line 25
        echo "<div class=\"row justify-content-center\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item ";
        // line 27
        if ((isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url"))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 28
        if ((isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url"))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">1</a>
    </li>
    <li class=\"page-item previous ";
        // line 30
        if ((isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url"))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" aria-label=\"Previous\" ";
        // line 31
        if ((isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url"))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
        echo "\" psurl=\"";
        echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) ? $context["jump_page_url"] : $this->getContext($context, "jump_page_url")), "html", null, true);
        echo "\" psmax=\"";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count")), "html", null, true);
        echo "\" pslimit=\"";
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
        echo "\" />
    </li>
    <li class=\"page-item next ";
        // line 36
        if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && ((isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" aria-label=\"Next\" id=\"pagination_next_url\" ";
        // line 37
        if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && ((isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item ";
        // line 39
        if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && ((isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 40
        if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && ((isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count")), "html", null, true);
        echo "</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => (        // line 46
(isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")) + 1), "%to%" => min((        // line 47
(isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")) + 1), (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))), "%total%" =>         // line 48
(isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "%current_page%" =>         // line 49
(isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "%page_count%" =>         // line 50
(isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count"))], "Admin.Catalog.Feature"), "html", null, true);
        // line 51
        echo "
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["changeLimitUrl"]) ? $context["changeLimitUrl"] : $this->getContext($context, "changeLimitUrl")), "html", null, true);
        echo "\" class=\"pagination-link custom-select\">
          ";
        // line 59
        if (!twig_in_filter((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), (isset($context["limit_choices"]) ? $context["limit_choices"] : $this->getContext($context, "limit_choices")))) {
            // line 60
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
            echo "</option>
          ";
        }
        // line 62
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limit_choices"]) ? $context["limit_choices"] : $this->getContext($context, "limit_choices")));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 63
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "\" ";
            if (((isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")) == $context["limit_choice"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </select>
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
        return "@PrestaShop/Admin/Common/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 65,  167 => 63,  162 => 62,  154 => 60,  152 => 59,  148 => 58,  143 => 56,  136 => 51,  134 => 50,  133 => 49,  132 => 48,  131 => 47,  130 => 46,  129 => 45,  113 => 40,  106 => 39,  95 => 37,  88 => 36,  77 => 34,  65 => 31,  58 => 30,  47 => 28,  40 => 27,  36 => 25,);
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
<div class=\"row justify-content-center\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item {% if first_url %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" {% if first_url %}href=\"{{ first_url }}\"{% else %}nohref{% endif %}>1</a>
    </li>
    <li class=\"page-item previous {% if previous_url %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" aria-label=\"Previous\" {% if previous_url %}href=\"{{ previous_url }}\"{% else %}nohref{% endif %}><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"{{ current_page }}\" psurl=\"{{ jump_page_url }}\" psmax=\"{{ page_count }}\" pslimit=\"{{ limit }}\" />
    </li>
    <li class=\"page-item next {% if next_url is defined and next_url != false %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" aria-label=\"Next\" id=\"pagination_next_url\" {% if next_url is defined and next_url != false %}href=\"{{ next_url }}\"{% else %}nohref{% endif %}><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item {% if last_url is defined and last_url != false %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" {% if last_url is defined and last_url != false %}href=\"{{ last_url }}\"{% else %}nohref{% endif %}>{{ page_count }}</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      {{ \"Viewing %from%-%to% on %total% (page %current_page% / %page_count%)\"|trans({
        '%from%': from+1,
        '%to%': min(to+1, total),
        '%total%': total,
        '%current_page%': current_page,
        '%page_count%': page_count
      }, 'Admin.Catalog.Feature') }}
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">{{ \"Items per page:\"|trans({}, 'Admin.Catalog.Feature') }}</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"{{ changeLimitUrl }}\" class=\"pagination-link custom-select\">
          {% if limit not in limit_choices %}
            <option value=\"{{ limit }}\" selected=\"selected\">{{ limit }}</option>
          {% endif %}
          {% for limit_choice in limit_choices %}
            <option value=\"{{ limit_choice }}\" {% if limit==limit_choice %}selected=\"selected\"{% endif %}>{{ limit_choice }}</option>
          {% endfor %}
        </select>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Common/pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/pagination.html.twig");
    }
}
