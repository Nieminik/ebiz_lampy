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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig */
class __TwigTemplate_647db7789da03d9c53c990044d28f3b7ddc3f3230c5c104b1a2e929dbc113ccc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'keyword' => [$this, 'block_keyword'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('keyword', $context, $blocks);
    }

    public function block_keyword($context, array $blocks = [])
    {
        // line 27
        echo "  ";
        if ($this->getAttribute((isset($context["routeKeywords"]) ? $context["routeKeywords"] : null), (isset($context["idRoute"]) ? $context["idRoute"] : null), [], "array", true, true)) {
            // line 28
            echo "    ";
            $context["formattedKeywords"] = [];
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["routeKeywords"]) ? $context["routeKeywords"] : null), (isset($context["idRoute"]) ? $context["idRoute"] : null), [], "array"));
            foreach ($context['_seq'] as $context["keyword"] => $context["value"]) {
                // line 30
                echo "      ";
                ob_start();
                // line 31
                echo "        ";
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                if ($this->getAttribute($context["value"], "param", [], "array", true, true)) {
                    echo "*";
                }
                // line 32
                echo "      ";
                $context["formattedKeyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 33
                echo "
      ";
                // line 34
                $context["formattedKeywords"] = twig_array_merge((isset($context["formattedKeywords"]) ? $context["formattedKeywords"] : null), [0 => (isset($context["formattedKeyword"]) ? $context["formattedKeyword"] : null)]);
                // line 35
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyword'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
    ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Keywords: %keywords%", ["%keywords%" => twig_join_filter((isset($context["formattedKeywords"]) ? $context["formattedKeywords"] : null), ", ")], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  74 => 36,  68 => 35,  66 => 34,  63 => 33,  60 => 32,  54 => 31,  51 => 30,  46 => 29,  43 => 28,  40 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig");
    }
}
