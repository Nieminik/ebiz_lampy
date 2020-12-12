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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig */
class __TwigTemplate_9b6da2f7aec05ec16629a64957b5f6cb8b467c97dcf335a753f926d82ffb7d80 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'invoices_generate_by_status' => [$this, 'block_invoices_generate_by_status'],
            '_form_generate_by_status_order_states_entry_label' => [$this, 'block__form_generate_by_status_order_states_entry_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["generateByStatusForm"]) ? $context["generateByStatusForm"] : null), [0 => $this], true);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('invoices_generate_by_status', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('_form_generate_by_status_order_states_entry_label', $context, $blocks);
    }

    // line 31
    public function block_invoices_generate_by_status($context, array $blocks = [])
    {
        // line 32
        echo "    <div id=\"by-status-block\" class=\"col-xl-10\">
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateByStatusForm"]) ? $context["generateByStatusForm"] : null), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_invoices_generate_by_status")]);
        echo "
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">schedule</i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By order status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
                <div class=\"card-text\">
                  <div class=\"form-group row\">
                    ";
        // line 41
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order statuses", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also export orders which have not been charged yet.", [], "Admin.Orderscustomers.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generateByStatusForm"]) ? $context["generateByStatusForm"] : null), "order_states", []), 'errors');
        echo "
                      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generateByStatusForm"]) ? $context["generateByStatusForm"] : null), "order_states", []), 'widget');
        echo "
                    </div>
                  </div>
                </div>
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["generateByStatusForm"]) ? $context["generateByStatusForm"] : null), 'rest');
        echo "
            </div>
            <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF file by status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateByStatusForm"]) ? $context["generateByStatusForm"] : null), 'form_end');
        echo "
    </div>
";
    }

    // line 60
    public function block__form_generate_by_status_order_states_entry_label($context, array $blocks = [])
    {
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 63
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 64
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)))]);
                // line 65
                echo "        ";
            }
            // line 66
            echo "        <div class=\"md-checkbox\">
            <label";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 68
            echo (isset($context["widget"]) ? $context["widget"] : null);
            // line 69
            echo "<i class=\"md-checkbox-control\"></i>
                ";
            // line 70
            $context["badgeType"] = ((((isset($context["orders_count"]) ? $context["orders_count"] : null) > 0)) ? ("success") : ("danger"));
            // line 71
            echo "                <span class=\"badge badge-";
            echo twig_escape_filter($this->env, (isset($context["badgeType"]) ? $context["badgeType"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["orders_count"]) ? $context["orders_count"] : null), "html", null, true);
            echo "</span>
                <span>";
            // line 73
            echo (( !((isset($context["label"]) ? $context["label"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : (""));
            // line 74
            echo "</span>
            </label>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 74,  159 => 73,  152 => 71,  150 => 70,  147 => 69,  145 => 68,  131 => 67,  128 => 66,  125 => 65,  122 => 64,  119 => 63,  116 => 62,  114 => 61,  111 => 60,  104 => 56,  97 => 52,  90 => 48,  83 => 44,  79 => 43,  74 => 41,  66 => 36,  60 => 33,  57 => 32,  54 => 31,  50 => 60,  47 => 59,  45 => 31,  42 => 30,  40 => 29,  37 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig");
    }
}
