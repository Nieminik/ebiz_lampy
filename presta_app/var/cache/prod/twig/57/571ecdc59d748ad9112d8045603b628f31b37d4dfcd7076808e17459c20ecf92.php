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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig */
class __TwigTemplate_7ce0cdc2bf48b0a7e38fb5d68551eb115ff70e203e80cee69d85cf9a0fb011cb extends \Twig\Template
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
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", [], "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = (((isset($context["class"]) ? $context["class"] : null) . " ") . $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", []));
        }
        // line 31
        echo "
<a class=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\"
   href=\"#\"
   data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "route", []), [$this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "route_param_name", []) => $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "route_param_field", []), [], "array")]), "html", null, true);
        echo "\"
   data-confirm-message=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "confirm_message", []), "html", null, true);
        echo "\"
   data-method=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "options", []), "method", []), "html", null, true);
        echo "\"
  ";
        // line 37
        if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "tooltip_name", [])) {
            // line 38
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "name", []), "html", null, true);
            echo "\"
  ";
        }
        // line 42
        echo ">
  ";
        // line 43
        if ( !twig_test_empty($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", []))) {
            // line 44
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 46
        echo "  ";
        if ( !$this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "tooltip_name", [])) {
            // line 47
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : null), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 49,  89 => 47,  86 => 46,  80 => 44,  78 => 43,  75 => 42,  70 => 40,  66 => 38,  64 => 37,  60 => 36,  56 => 35,  52 => 34,  47 => 32,  44 => 31,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/submit.html.twig");
    }
}
