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

/* @PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig */
class __TwigTemplate_6236173895114e08640f742529a9c7c8da0a3e1cfde887895bdf648b82bce41f extends \Twig\Template
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
        echo "
";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "filter_form", [])) > 1)) {
            // line 27
            echo "  <tr class=\"column-filters ";
            if (((0 == $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "data", []), "records_total", [])) && twig_test_empty($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "filters", [])))) {
                echo "d-none";
            }
            echo "\">
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "columns", []));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 29
                echo "      <td>
        ";
                // line 30
                if ($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "column_filters", [], "any", false, true), $this->getAttribute($context["column"], "id", []), [], "array", true, true)) {
                    // line 31
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "column_filters", []), $this->getAttribute($context["column"], "id", []), [], "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter_name"]) {
                        // line 32
                        echo "            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "filter_form", []), $context["filter_name"], [], "array"), 'widget');
                        echo "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "      </td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  68 => 35,  65 => 34,  56 => 32,  51 => 31,  49 => 30,  46 => 29,  42 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/Table/filters_row.html.twig");
    }
}
