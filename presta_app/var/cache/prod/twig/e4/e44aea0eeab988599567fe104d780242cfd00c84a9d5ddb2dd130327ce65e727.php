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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_2823c5b941b2c785a73823ba93798249b45de3b726dfacc2dfec83cd4cc999a9 extends \Twig\Template
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
        $context["id_property_name"] = $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", []), "primary_field", []);
        // line 26
        $context["id_primary_key"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["id_property_name"]) ? $context["id_property_name"] : null), [], "array");
        // line 27
        $context["record_id"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), (isset($context["id_property_name"]) ? $context["id_property_name"] : null), [], "array");
        // line 28
        echo "
";
        // line 29
        $context["isValid"] = ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "id", []), [], "array") === "1");
        // line 30
        echo "
<div class=\"text-center\">
  <i
    class=\"material-icons ps-togglable-row grid-toggler-icon-";
        // line 33
        if (((isset($context["isValid"]) ? $context["isValid"] : null) == true)) {
            echo "valid";
        } else {
            echo "not-valid";
        }
        echo "\"
    data-toggle-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", []), "route", []), [$this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "options", []), "route_param_name", []) => (isset($context["id_primary_key"]) ? $context["id_primary_key"] : null)]), "html", null, true);
        echo "\"
  >
    ";
        // line 36
        if ((isset($context["isValid"]) ? $context["isValid"] : null)) {
            // line 37
            echo "      check
    ";
        } else {
            // line 39
            echo "      clear
    ";
        }
        // line 41
        echo "  </i>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 41,  65 => 39,  61 => 37,  59 => 36,  54 => 34,  46 => 33,  41 => 30,  39 => 29,  36 => 28,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/toggle.html.twig");
    }
}
