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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig */
class __TwigTemplate_087f3f1067b5757637ad9dd92a08625cceac169aaf6a3897e04d548828cfc393 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'set_up_urls_configuration' => [$this, 'block_set_up_urls_configuration'],
            'meta_form_rest' => [$this, 'block_meta_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('set_up_urls_configuration', $context, $blocks);
    }

    public function block_set_up_urls_configuration($context, array $blocks = [])
    {
        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set up URLs", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        ";
        // line 37
        if ( !(isset($context["isHtaccessFileValid"]) ? $context["isHtaccessFileValid"] : null)) {
            // line 38
            echo "          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before you can use this tool, you need to:", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  <br>
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1) Create a blank .htaccess file in your root directory.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  <br>
                  ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2) Give it write permissions (CHMOD 666 on Unix system).", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 52
        echo "
        <div class=\"form-group row\">
          ";
        // line 54
        if ((isset($context["isModRewriteActive"]) ? $context["isModRewriteActive"] : null)) {
            // line 55
            echo "            ";
            echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", [], "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option only if your server allows URL rewriting (recommended).", [], "Admin.Shopparameters.Help"));
            echo "
          ";
        }
        // line 57
        echo "          <div class=\"col-sm\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "friendly_url", []), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "friendly_url", []), 'widget');
        echo "

            ";
        // line 61
        if ( !(isset($context["isModRewriteActive"]) ? $context["isModRewriteActive"] : null)) {
            // line 62
            echo "              <small class=\"form-text\">
                ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("URL rewriting (mod_rewrite) is not active on your server, or it is not possible to check your server configuration. If you want to use Friendly URLs, you must activate this mod.", [], "Admin.Shopparameters.Help"), "html", null, true);
            echo "
              </small>
            ";
        }
        // line 66
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 70
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accented URL", [], "Admin.Shopparameters.Feature"), (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option if you want to allow accented characters in your friendly URLs.", [], "Admin.Shopparameters.Help") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You should only activate this option if you are using non-latin characters ; for all the latin charsets, your SEO will be better without this option.", [], "Admin.Shopparameters.Help")));
        echo "
          <div class=\"col-sm\">
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "accented_url", []), 'errors');
        echo "
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "accented_url", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirect to the canonical URL", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "canonical_url_redirection", []), 'errors');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "canonical_url_redirection", []), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 85
        if ($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", [], "any", false, true), "disable_apache_multiview", [], "any", true, true)) {
            // line 86
            echo "          <div class=\"form-group row\">
            ";
            // line 87
            echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Apache's MultiViews option", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable this option only if you have problems with URL rewriting.", [], "Admin.Shopparameters.Help"));
            echo "
            <div class=\"col-sm\">
              ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "disable_apache_multiview", []), 'errors');
            echo "
              ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "disable_apache_multiview", []), 'widget');
            echo "
            </div>
          </div>
        ";
        }
        // line 94
        echo "
        ";
        // line 95
        if ($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", [], "any", false, true), "disable_apache_mod_security", [], "any", true, true)) {
            // line 96
            echo "          <div class=\"form-group row\">
            ";
            // line 97
            echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Apache's mod_security module", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some of PrestaShop's features might not work correctly with a specific configuration of Apache's mod_security module. We recommend to turn it off.", [], "Admin.Shopparameters.Help"));
            echo "
            <div class=\"col-sm\">
              ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "disable_apache_mod_security", []), 'errors');
            echo "
              ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), "disable_apache_mod_security", []), 'widget');
            echo "
            </div>
          </div>
        ";
        }
        // line 104
        echo "
        ";
        // line 105
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 108
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    // line 105
    public function block_meta_form_rest($context, array $blocks = [])
    {
        // line 106
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "set_up_urls", []), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 106,  224 => 105,  215 => 112,  209 => 108,  207 => 105,  204 => 104,  197 => 100,  193 => 99,  188 => 97,  185 => 96,  183 => 95,  180 => 94,  173 => 90,  169 => 89,  164 => 87,  161 => 86,  159 => 85,  152 => 81,  148 => 80,  143 => 78,  135 => 73,  131 => 72,  126 => 70,  120 => 66,  114 => 63,  111 => 62,  109 => 61,  104 => 59,  100 => 58,  97 => 57,  91 => 55,  89 => 54,  85 => 52,  76 => 46,  71 => 44,  66 => 42,  60 => 38,  58 => 37,  50 => 32,  46 => 30,  40 => 29,  37 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig");
    }
}
