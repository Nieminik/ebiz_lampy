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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig */
class __TwigTemplate_7df9205538188552528ee2465643580ccf98e84474e8a1f476c31a038b70a25f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'shop_urls_configuration' => [$this, 'block_shop_urls_configuration'],
            'meta_form_rest' => [$this, 'block_meta_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["shopUrlForm"] = $this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "shop_urls", []);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('shop_urls_configuration', $context, $blocks);
        // line 115
        echo "
";
    }

    // line 30
    public function block_shop_urls_configuration($context, array $blocks = [])
    {
        // line 31
        echo "
  ";
        // line 32
        $context["cardHeaderLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set shop URL", [], "Admin.Shopparameters.Feature");
        // line 33
        echo "  ";
        if (((isset($context["isShopFeatureActive"]) ? $context["isShopFeatureActive"] : null) &&  !(isset($context["isHostMode"]) ? $context["isHostMode"] : null))) {
            // line 34
            echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["cardHeaderLabel"]) ? $context["cardHeaderLabel"] : null), "html", null, true);
            echo "
      </div>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The multistore option is enabled. If you want to change the URL of your shop, you must go to the \"Multistore\" page under the \"Advanced Parameters\" menu.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ( !twig_test_empty($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), "children", []))) {
            // line 55
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["cardHeaderLabel"]) ? $context["cardHeaderLabel"] : null), "html", null, true);
            echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
            <div class=\"row\">
              <div class=\"col-sm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  <div class=\"alert-text\">
                    ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you can set the URL for your shop. If you migrate your shop to a new URL, remember to change the values below.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                  </div>
                </div>
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop domain", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), "domain", []), 'errors');
            echo "
                ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), "domain", []), 'widget');
            echo "
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SSL domain", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), "domain_ssl", []), 'errors');
            echo "
                ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), "domain_ssl", []), 'widget');
            echo "
              </div>
            </div>

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Base URI", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), "physical_uri", []), 'errors');
            echo "
                ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), "physical_uri", []), 'widget', ["required" => false]);
            echo "
              </div>
            </div>

            ";
            // line 101
            $this->displayBlock('meta_form_rest', $context, $blocks);
            // line 104
            echo "        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "</button>
        </div>
      </div>
    </div>
  ";
        }
    }

    // line 101
    public function block_meta_form_rest($context, array $blocks = [])
    {
        // line 102
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["shopUrlForm"]) ? $context["shopUrlForm"] : null), 'rest');
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 102,  193 => 101,  183 => 109,  176 => 104,  174 => 101,  167 => 97,  163 => 96,  157 => 93,  148 => 87,  144 => 86,  138 => 83,  129 => 77,  125 => 76,  119 => 73,  108 => 65,  97 => 57,  93 => 55,  91 => 54,  88 => 53,  76 => 44,  65 => 36,  61 => 34,  58 => 33,  56 => 32,  53 => 31,  50 => 30,  45 => 115,  43 => 30,  40 => 29,  38 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig");
    }
}
