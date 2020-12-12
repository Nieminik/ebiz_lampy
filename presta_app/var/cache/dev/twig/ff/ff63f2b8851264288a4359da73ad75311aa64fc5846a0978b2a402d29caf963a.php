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

/* @PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig */
class __TwigTemplate_0a94c86758894176d25dbf1670da6264ca762bc0ae31e05d5234cf0fd0bab0b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'preferences_form_general' => [$this, 'block_preferences_form_general'],
            'shop_preferences_form_rest' => [$this, 'block_shop_preferences_form_rest'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 27);
        // line 30
        $context["generalForm"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "general", []);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "form", "id" => "configuration_form"]]);
        echo "
    <div class=\"row justify-content-center\">
        ";
        // line 36
        $this->displayBlock('preferences_form_general', $context, $blocks);
        // line 181
        echo "
    </div>
    ";
        // line 183
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_preferences_form_general($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preferences_form_general"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preferences_form_general"));

        // line 37
        echo "            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">settings</i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            <div class=\"form-group row\">
                                ";
        // line 45
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.", [], "Admin.Shopparameters.Help"));
        // line 48
        echo "
                                ";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "isSecure", [], "method")) {
            // line 50
            echo "                                    <div class=\"col-sm\">
                                        ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl", []), 'errors');
            echo "
                                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl", []), 'widget');
            echo "
                                        <small class=\"form-text\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you own an SSL certificate for your shop's domain name, you can activate SSL encryption (https://) for customer account identification and order processing.", [], "Admin.Shopparameters.Help"), "html", null, true);
            echo "</small>
                                    </div>
                                ";
        } else {
            // line 56
            echo "                                    <div class=\"col-sm\">
                                        <div class=\"form-control-plaintext\">
                                            <a class=\"d-block\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["sslUri"]) ? $context["sslUri"] : $this->getContext($context, "sslUri")), "html", null, true);
            echo "\">
                                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please click here to check if your shop supports HTTPS.", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
                                            </a>
                                        </div>
                                    </div>
                                ";
        }
        // line 64
        echo "                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL on all pages", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl_everywhere", []), 'errors');
        echo "
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl_everywhere", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabled, all the pages of your shop will be SSL-secured.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Increase front office security", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_token", []), 'errors');
        echo "
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_token", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable token in the Front Office to improve PrestaShop's security.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>

                                    ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_token", []), "vars", []), "disabled", [])) {
            // line 81
            echo "                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
                                        </p>
                                      </div>
                                    ";
        }
        // line 87
        echo "                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on HTML fields", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "allow_html_iframes", []), 'errors');
        echo "
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "allow_html_iframes", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on text fields like product description. We recommend that you leave this option disabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use HTMLPurifier Library", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "use_htmlpurifier", []), 'errors');
        echo "
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "use_htmlpurifier", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clean the HTML content on text fields. We recommend that you leave this option enabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round mode", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_mode", []), 'errors');
        echo "
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_mode", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose among 6 different ways of rounding prices. \"Round up away from zero ...\" is the recommended behavior.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round type", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_type", []), 'errors');
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_type", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose when to round prices: either on each item, each line or the total (of an invoice, for example).", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of decimals", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_display_precision", []), 'errors');
        echo "
                                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_display_precision", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose how many decimals you want to display", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display brands and suppliers", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_suppliers", []), 'errors');
        echo "
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_suppliers", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable brands and suppliers pages on your front office even when their respective modules are disabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display best sellers", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_best_sellers", []), 'errors');
        echo "
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_best_sellers", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable best sellers page on your front office even when its respective module is disabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Multistore", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "multishop_feature_active", []), 'errors');
        echo "
                                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "multishop_feature_active", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The multistore feature allows you to manage several e-shops with one Back Office. If this feature is enabled, a \"Multistore\" page will be available in the \"Advanced Parameters\" menu.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>

                                    ";
        // line 152
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "multishop_feature_active", []), "vars", []), "disabled", [])) {
            // line 153
            echo "                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
                                        </p>
                                      </div>
                                    ";
        }
        // line 159
        echo "                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main Shop Activity", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "shop_activity", []), 'errors');
        echo "
                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "shop_activity", []), 'widget');
        echo "
                                </div>
                            </div>
                            ";
        // line 168
        $this->displayBlock('shop_preferences_form_rest', $context, $blocks);
        // line 171
        echo "                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_shop_preferences_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_preferences_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_preferences_form_rest"));

        // line 169
        echo "                              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 169,  428 => 168,  412 => 175,  406 => 171,  404 => 168,  398 => 165,  394 => 164,  389 => 162,  384 => 159,  377 => 155,  373 => 153,  371 => 152,  366 => 150,  362 => 149,  358 => 148,  353 => 146,  346 => 142,  342 => 141,  338 => 140,  333 => 138,  326 => 134,  322 => 133,  318 => 132,  313 => 130,  306 => 126,  302 => 125,  298 => 124,  293 => 122,  286 => 118,  282 => 117,  278 => 116,  273 => 114,  266 => 110,  262 => 109,  258 => 108,  253 => 106,  246 => 102,  242 => 101,  238 => 100,  233 => 98,  226 => 94,  222 => 93,  218 => 92,  213 => 90,  208 => 87,  201 => 83,  197 => 81,  195 => 80,  190 => 78,  186 => 77,  182 => 76,  177 => 74,  170 => 70,  166 => 69,  162 => 68,  157 => 66,  153 => 64,  145 => 59,  141 => 58,  137 => 56,  131 => 53,  127 => 52,  123 => 51,  120 => 50,  118 => 49,  115 => 48,  113 => 45,  105 => 40,  100 => 37,  91 => 36,  79 => 183,  75 => 181,  73 => 36,  67 => 34,  58 => 33,  48 => 25,  46 => 30,  44 => 27,  22 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Shopparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{%
  set generalForm = form.general
%}

{% block content %}
    {{ form_start(form, {'attr' : {'class': 'form', 'id': 'configuration_form'} }) }}
    <div class=\"row justify-content-center\">
        {% block preferences_form_general %}
            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">settings</i> {{ 'General'|trans({}, 'Admin.Global') }}
                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            <div class=\"form-group row\">
                                {{ ps.label_with_help(
                                    ('Enable SSL'|trans),
                                    ('If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.'|trans({}, 'Admin.Shopparameters.Help'))
                                ) }}
                                {% if app.request.isSecure() %}
                                    <div class=\"col-sm\">
                                        {{ form_errors(generalForm.enable_ssl) }}
                                        {{ form_widget(generalForm.enable_ssl) }}
                                        <small class=\"form-text\">{{ 'If you own an SSL certificate for your shop\\'s domain name, you can activate SSL encryption (https://) for customer account identification and order processing.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                    </div>
                                {% else %}
                                    <div class=\"col-sm\">
                                        <div class=\"form-control-plaintext\">
                                            <a class=\"d-block\" href=\"{{ sslUri }}\">
                                                {{ 'Please click here to check if your shop supports HTTPS.'|trans({}, 'Admin.Shopparameters.Feature') }}
                                            </a>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Enable SSL on all pages'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.enable_ssl_everywhere) }}
                                    {{ form_widget(generalForm.enable_ssl_everywhere) }}
                                    <small class=\"form-text\">{{ 'When enabled, all the pages of your shop will be SSL-secured.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Increase front office security'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.enable_token) }}
                                    {{ form_widget(generalForm.enable_token) }}
                                    <small class=\"form-text\">{{ 'Enable or disable token in the Front Office to improve PrestaShop\\'s security.'|trans({}, 'Admin.Shopparameters.Help') }}</small>

                                    {% if generalForm.enable_token.vars.disabled %}
                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          {{ 'You can\\'t change the value of this configuration field in the context of this shop.'|trans({}, 'Admin.Notifications.Warning') }}
                                        </p>
                                      </div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Allow iframes on HTML fields'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.allow_html_iframes) }}
                                    {{ form_widget(generalForm.allow_html_iframes) }}
                                    <small class=\"form-text\">{{ 'Allow iframes on text fields like product description. We recommend that you leave this option disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Use HTMLPurifier Library'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.use_htmlpurifier) }}
                                    {{ form_widget(generalForm.use_htmlpurifier) }}
                                    <small class=\"form-text\">{{ 'Clean the HTML content on text fields. We recommend that you leave this option enabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Round mode'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.price_round_mode) }}
                                    {{ form_widget(generalForm.price_round_mode) }}
                                    <small class=\"form-text\">{{ 'You can choose among 6 different ways of rounding prices. \"Round up away from zero ...\" is the recommended behavior.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Round type'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.price_round_type) }}
                                    {{ form_widget(generalForm.price_round_type) }}
                                    <small class=\"form-text\">{{ 'You can choose when to round prices: either on each item, each line or the total (of an invoice, for example).'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Number of decimals'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.price_display_precision) }}
                                    {{ form_widget(generalForm.price_display_precision) }}
                                    <small class=\"form-text\">{{ 'Choose how many decimals you want to display'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Display brands and suppliers'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.display_suppliers) }}
                                    {{ form_widget(generalForm.display_suppliers) }}
                                    <small class=\"form-text\">{{ 'Enable brands and suppliers pages on your front office even when their respective modules are disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Display best sellers'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.display_best_sellers) }}
                                    {{ form_widget(generalForm.display_best_sellers) }}
                                    <small class=\"form-text\">{{ 'Enable best sellers page on your front office even when its respective module is disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Enable Multistore'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.multishop_feature_active) }}
                                    {{ form_widget(generalForm.multishop_feature_active) }}
                                    <small class=\"form-text\">{{ 'The multistore feature allows you to manage several e-shops with one Back Office. If this feature is enabled, a \"Multistore\" page will be available in the \"Advanced Parameters\" menu.'|trans({}, 'Admin.Shopparameters.Help') }}</small>

                                    {% if generalForm.multishop_feature_active.vars.disabled %}
                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          {{ 'You can\\'t change the value of this configuration field in the context of this shop.'|trans({}, 'Admin.Notifications.Warning') }}
                                        </p>
                                      </div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">{{ 'Main Shop Activity'|trans }}</label>
                                <div class=\"col-sm\">
                                    {{ form_errors(generalForm.shop_activity) }}
                                    {{ form_widget(generalForm.shop_activity) }}
                                </div>
                            </div>
                            {% block shop_preferences_form_rest %}
                              {{ form_rest(form) }}
                            {% endblock %}
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}

    </div>
    {{ form_end(form) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/preferences.html.twig");
    }
}
