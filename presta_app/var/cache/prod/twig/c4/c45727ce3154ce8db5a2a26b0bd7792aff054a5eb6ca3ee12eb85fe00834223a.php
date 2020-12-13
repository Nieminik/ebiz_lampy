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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig */
class __TwigTemplate_35c92283c1dccc5b54a343c22e0c7499fa8dda0420a3bfbbcb1ce57bb1e3d39c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'invoice_options' => [$this, 'block_invoice_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('invoice_options', $context, $blocks);
    }

    public function block_invoice_options($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"col-xl-10\">
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_invoices_process")]);
        echo "
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">settings</i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
                <div class=\"card-text\">
                    <div class=\"form-group row\">
                        ";
        // line 39
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable invoices", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, your customers will receive an invoice for the purchase.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "enable_invoices", []), 'errors');
        echo "
                          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "enable_invoices", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 46
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable tax breakdown", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If required, show the total amount per rate of the corresponding tax.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "enable_tax_breakdown", []), 'errors');
        echo "
                          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "enable_tax_breakdown", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 53
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable product image", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adds an image in front of the product name on the invoice", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "enable_product_images", []), 'errors');
        echo "
                          ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "enable_product_images", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 60
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice prefix", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Freely definable prefix for invoice number (e.g. #IN00001).", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "invoice_prefix", []), 'errors');
        echo "
                          ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "invoice_prefix", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"form-control-label\">
                            ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add current year to invoice number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                        </label>
                        <div class=\"col-sm\">
                          ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "add_current_year", []), 'errors');
        echo "
                          ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "add_current_year", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"form-control-label\">
                            ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset sequential invoice number at the beginning of the year", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                        </label>
                        <div class=\"col-sm\">
                          ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "reset_number_annually", []), 'errors');
        echo "
                          ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "reset_number_annually", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"form-control-label\">
                            ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position of the year date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                        </label>
                        <div class=\"col-sm\">
                          ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "year_position", []), 'errors');
        echo "
                          ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "year_position", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 94
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice number", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The next invoice will begin with this number, and then increase with each additional invoice. Set to 0 if you want to keep the current number (which is #%number%).", ["%number%" => $this->getAttribute($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "vars", []), "next_invoice_number", [])], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "invoice_number", []), 'errors');
        echo "
                          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "invoice_number", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 101
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Legal free text", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use this field to show additional information on the invoice, below the payment methods summary (like specific legal information).", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "legal_free_text", []), 'errors');
        echo "
                          ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "legal_free_text", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 108
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Footer text", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This text will appear at the bottom of the invoice, below your company details.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "footer_text", []), 'errors');
        echo "
                          ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "footer_text", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 115
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice model", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose an invoice model.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "invoice_model", []), 'errors');
        echo "
                          ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "invoice_model", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        ";
        // line 122
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use the disk as cache for PDF invoices", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Saves memory but slows down the PDF generation.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">
                          ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "use_disk_cache", []), 'errors');
        echo "
                          ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), "use_disk_cache", []), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), 'rest');
        echo "
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
        ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["invoiceOptionsForm"]) ? $context["invoiceOptionsForm"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 137,  267 => 133,  259 => 128,  253 => 125,  249 => 124,  244 => 122,  237 => 118,  233 => 117,  228 => 115,  221 => 111,  217 => 110,  212 => 108,  205 => 104,  201 => 103,  196 => 101,  189 => 97,  185 => 96,  180 => 94,  173 => 90,  169 => 89,  163 => 86,  155 => 81,  151 => 80,  145 => 77,  137 => 72,  133 => 71,  127 => 68,  119 => 63,  115 => 62,  110 => 60,  103 => 56,  99 => 55,  94 => 53,  87 => 49,  83 => 48,  78 => 46,  71 => 42,  67 => 41,  62 => 39,  54 => 34,  48 => 31,  45 => 30,  39 => 29,  36 => 28,  34 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig");
    }
}
