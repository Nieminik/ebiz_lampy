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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig */
class __TwigTemplate_c2626ddb673cdb956f38aebbf66d5f96051f9f8f30cdb639eb0f16e1285ff7ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "isxmlhttprequest", [])) ? ("@Modules/ps_mbo/views/templates/admin/layout-ajax.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig", 20);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "  ";
        if (( !twig_test_empty((isset($context["recommendedModulesNotInstalled"]) ? $context["recommendedModulesNotInstalled"] : $this->getContext($context, "recommendedModulesNotInstalled"))) ||  !twig_test_empty((isset($context["recommendedModulesInstalled"]) ? $context["recommendedModulesInstalled"] : $this->getContext($context, "recommendedModulesInstalled"))))) {
            // line 24
            echo "  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
            // line 25
            if ( !twig_test_empty((isset($context["recommendedModulesNotInstalled"]) ? $context["recommendedModulesNotInstalled"] : $this->getContext($context, "recommendedModulesNotInstalled")))) {
                // line 26
                echo "      <li class=\"nav-item active\">
        <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab_modules_list_not_installed\" role=\"tab\">
          ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not Installed", []), "html", null, true);
                echo "
        </a>
      </li>
    ";
            }
            // line 32
            echo "    ";
            if ( !twig_test_empty((isset($context["recommendedModulesInstalled"]) ? $context["recommendedModulesInstalled"] : $this->getContext($context, "recommendedModulesInstalled")))) {
                // line 33
                echo "      <li class=\"nav-item";
                if (twig_test_empty((isset($context["recommendedModulesNotInstalled"]) ? $context["recommendedModulesNotInstalled"] : $this->getContext($context, "recommendedModulesNotInstalled")))) {
                    echo " active";
                }
                echo "\">
        <a class=\"nav-link";
                // line 34
                if (twig_test_empty((isset($context["recommendedModulesNotInstalled"]) ? $context["recommendedModulesNotInstalled"] : $this->getContext($context, "recommendedModulesNotInstalled")))) {
                    echo " active";
                }
                echo "\" data-toggle=\"tab\" href=\"#tab_modules_list_installed\" role=\"tab\">
          ";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed", []), "html", null, true);
                echo "
        </a>
      </li>
    ";
            }
            // line 39
            echo "  </ul>
  <div id=\"modules_list_container_content\" class=\"tab-content\">
    ";
            // line 41
            if ( !twig_test_empty((isset($context["recommendedModulesNotInstalled"]) ? $context["recommendedModulesNotInstalled"] : $this->getContext($context, "recommendedModulesNotInstalled")))) {
                // line 42
                echo "      <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\" role=\"tabpanel\">
        <table class=\"table\">
          ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["recommendedModulesNotInstalled"]) ? $context["recommendedModulesNotInstalled"] : $this->getContext($context, "recommendedModulesNotInstalled")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["recommendedModuleNotInstalled"]) {
                    // line 45
                    echo "            ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["recommendedModuleNotInstalled"]]);
                    echo "
          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommendedModuleNotInstalled'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        </table>
      </div>
    ";
            }
            // line 50
            echo "    ";
            if ( !twig_test_empty((isset($context["recommendedModulesInstalled"]) ? $context["recommendedModulesInstalled"] : $this->getContext($context, "recommendedModulesInstalled")))) {
                // line 51
                echo "      <div class=\"tab-pane ";
                if (twig_test_empty((isset($context["recommendedModulesNotInstalled"]) ? $context["recommendedModulesNotInstalled"] : $this->getContext($context, "recommendedModulesNotInstalled")))) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\" role=\"tabpanel\">
        <table class=\"table\">
          ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["recommendedModulesInstalled"]) ? $context["recommendedModulesInstalled"] : $this->getContext($context, "recommendedModulesInstalled")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["recommendedModuleInstalled"]) {
                    // line 54
                    echo "            ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["recommendedModuleInstalled"]]);
                    echo "
          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommendedModuleInstalled'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </table>
      </div>
    ";
            }
            // line 59
            echo "  </div>
  ";
        }
        // line 61
        echo "
  <div class=\"alert alert-addons row-margin-top\" role=\"alert\">
    <p class=\"alert-text\">
      <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
        echo "&amp;utm_content=download";
        if ((isset($context["adminListFromSource"]) || array_key_exists("adminListFromSource", $context))) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, (isset($context["adminListFromSource"]) ? $context["adminListFromSource"] : $this->getContext($context, "adminListFromSource")), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">
        ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More modules on addons.prestashop.com", []), "html", null, true);
        echo "
      </a>
    </p>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 65,  209 => 64,  204 => 61,  200 => 59,  195 => 56,  178 => 54,  161 => 53,  153 => 51,  150 => 50,  145 => 47,  128 => 45,  111 => 44,  107 => 42,  105 => 41,  101 => 39,  94 => 35,  88 => 34,  81 => 33,  78 => 32,  71 => 28,  67 => 26,  65 => 25,  62 => 24,  59 => 23,  50 => 22,  29 => 20,);
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
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% extends app.request.isxmlhttprequest ? '@Modules/ps_mbo/views/templates/admin/layout-ajax.html.twig' : '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {% if recommendedModulesNotInstalled is not empty or recommendedModulesInstalled is not empty %}
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    {% if recommendedModulesNotInstalled is not empty %}
      <li class=\"nav-item active\">
        <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab_modules_list_not_installed\" role=\"tab\">
          {{ 'Not Installed'|trans({}) }}
        </a>
      </li>
    {% endif %}
    {% if recommendedModulesInstalled is not empty %}
      <li class=\"nav-item{% if recommendedModulesNotInstalled is empty %} active{% endif %}\">
        <a class=\"nav-link{% if recommendedModulesNotInstalled is empty %} active{% endif %}\" data-toggle=\"tab\" href=\"#tab_modules_list_installed\" role=\"tab\">
          {{ 'Installed'|trans({}) }}
        </a>
      </li>
    {% endif %}
  </ul>
  <div id=\"modules_list_container_content\" class=\"tab-content\">
    {% if recommendedModulesNotInstalled is not empty %}
      <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\" role=\"tabpanel\">
        <table class=\"table\">
          {% for recommendedModuleNotInstalled in recommendedModulesNotInstalled %}
            {{ include('@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig',{'module': recommendedModuleNotInstalled}) }}
          {% endfor %}
        </table>
      </div>
    {% endif %}
    {% if recommendedModulesInstalled is not empty %}
      <div class=\"tab-pane {% if recommendedModulesNotInstalled is empty %}active{% endif %}\" id=\"tab_modules_list_installed\" role=\"tabpanel\">
        <table class=\"table\">
          {% for recommendedModuleInstalled in recommendedModulesInstalled %}
            {{ include('@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig',{'module': recommendedModuleInstalled}) }}
          {% endfor %}
        </table>
      </div>
    {% endif %}
  </div>
  {% endif %}

  <div class=\"alert alert-addons row-margin-top\" role=\"alert\">
    <p class=\"alert-text\">
      <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-{{ app.request.locale }}&amp;utm_content=download{% if adminListFromSource is defined %}&amp;utm_term={{ adminListFromSource }}{% endif %}\" onclick=\"return !window.open(this.href);\">
        {{ 'More modules on addons.prestashop.com'|trans({}) }}
      </a>
    </p>
  </div>
{% endblock %}
", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig", "/var/www/html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig");
    }
}
