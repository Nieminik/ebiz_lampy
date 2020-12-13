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
class __TwigTemplate_65642f173183b9af02462da4aced29becc3c0202b08598407e5e13f3f5673adb extends \Twig\Template
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
        // line 25
        echo "<div class=\"row justify-content-center\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item ";
        // line 27
        if ((isset($context["first_url"]) ? $context["first_url"] : null)) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 28
        if ((isset($context["first_url"]) ? $context["first_url"] : null)) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["first_url"]) ? $context["first_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">1</a>
    </li>
    <li class=\"page-item previous ";
        // line 30
        if ((isset($context["previous_url"]) ? $context["previous_url"] : null)) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" aria-label=\"Previous\" ";
        // line 31
        if ((isset($context["previous_url"]) ? $context["previous_url"] : null)) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["previous_url"]) ? $context["previous_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
        echo "\" psurl=\"";
        echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) ? $context["jump_page_url"] : null), "html", null, true);
        echo "\" psmax=\"";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : null), "html", null, true);
        echo "\" pslimit=\"";
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
        echo "\" />
    </li>
    <li class=\"page-item next ";
        // line 36
        if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && ((isset($context["next_url"]) ? $context["next_url"] : null) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" aria-label=\"Next\" id=\"pagination_next_url\" ";
        // line 37
        if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && ((isset($context["next_url"]) ? $context["next_url"] : null) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["next_url"]) ? $context["next_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item ";
        // line 39
        if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && ((isset($context["last_url"]) ? $context["last_url"] : null) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 40
        if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && ((isset($context["last_url"]) ? $context["last_url"] : null) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["last_url"]) ? $context["last_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : null), "html", null, true);
        echo "</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => (        // line 46
(isset($context["from"]) ? $context["from"] : null) + 1), "%to%" => min((        // line 47
(isset($context["to"]) ? $context["to"] : null) + 1), (isset($context["total"]) ? $context["total"] : null)), "%total%" =>         // line 48
(isset($context["total"]) ? $context["total"] : null), "%current_page%" =>         // line 49
(isset($context["current_page"]) ? $context["current_page"] : null), "%page_count%" =>         // line 50
(isset($context["page_count"]) ? $context["page_count"] : null)], "Admin.Catalog.Feature"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["changeLimitUrl"]) ? $context["changeLimitUrl"] : null), "html", null, true);
        echo "\" class=\"pagination-link custom-select\">
          ";
        // line 59
        if (!twig_in_filter((isset($context["limit"]) ? $context["limit"] : null), (isset($context["limit_choices"]) ? $context["limit_choices"] : null))) {
            // line 60
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
            echo "</option>
          ";
        }
        // line 62
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limit_choices"]) ? $context["limit_choices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 63
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "\" ";
            if (((isset($context["limit"]) ? $context["limit"] : null) == $context["limit_choice"])) {
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
        return array (  176 => 65,  161 => 63,  156 => 62,  148 => 60,  146 => 59,  142 => 58,  137 => 56,  130 => 51,  128 => 50,  127 => 49,  126 => 48,  125 => 47,  124 => 46,  123 => 45,  107 => 40,  100 => 39,  89 => 37,  82 => 36,  71 => 34,  59 => 31,  52 => 30,  41 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/pagination.html.twig");
    }
}
