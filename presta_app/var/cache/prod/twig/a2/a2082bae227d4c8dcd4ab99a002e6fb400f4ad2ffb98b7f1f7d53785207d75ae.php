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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig */
class __TwigTemplate_d6d4b86ddbe16fee54b4aefa19b8b78ed9db5f7c1dcd032f8f8d9ec219e51d67 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'url_schema_configuration' => [$this, 'block_url_schema_configuration'],
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
        $context["urlSchemaForm"] = $this->getAttribute((isset($context["metaForm"]) ? $context["metaForm"] : null), "url_schema", []);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('url_schema_configuration', $context, $blocks);
    }

    public function block_url_schema_configuration($context, array $blocks = [])
    {
        // line 31
        echo "  ";
        if ( !twig_test_empty($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "children", []))) {
            // line 32
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Schema of URLs", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col-sm\">
              <div class=\"alert alert-info\" role=\"alert\">
                <div class=\"alert-text\">
                  ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This section enables you to change the default pattern of your links. In order to use this functionality, PrestaShop's \"Friendly URL\" option must be enabled, and Apache's URL rewriting module (mod_rewrite) must be activated on your web server.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "<br>
                  ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There are several available keywords for each route listed below; note that keywords with * are required!", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add a keyword in your URL, use the {keyword} syntax. If the keyword is not empty, you can add text before or after the keyword with syntax {prepend:keyword:append}. For example {-hey-:meta_title} will add \"-hey-my-title\" in the URL if the meta title is set.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to products", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "product_rule", []), 'errors');
            echo "
              ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "product_rule", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 58
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "product_rule"]);
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to category", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "category_rule", []), 'errors');
            echo "
              ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "category_rule", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 71
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "category_rule"]);
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to category which has the \"selected_filter\" attribute for the \"Layered Navigation\" (blocklayered) module", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "layered_rule", []), 'errors');
            echo "
              ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "layered_rule", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 84
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "layered_rule"]);
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to supplier", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "supplier_rule", []), 'errors');
            echo "
              ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "supplier_rule", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 97
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "supplier_rule"]);
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to brand", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "manufacturer_rule", []), 'errors');
            echo "
              ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "manufacturer_rule", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 110
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "manufacturer_rule"]);
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to page", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "cms_rule", []), 'errors');
            echo "
              ";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "cms_rule", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 123
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "cms_rule"]);
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to page category", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "cms_category_rule", []), 'errors');
            echo "
              ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "cms_category_rule", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 136
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "cms_category_rule"]);
            echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route to modules", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              ";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "module", []), 'errors');
            echo "
              ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "module", []), 'widget');
            echo "
              <small class=\"form-text\">
                ";
            // line 149
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", ["idRoute" => "module"]);
            echo "
              </small>
            </div>
          </div>

        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "</button>
        </div>
      </div>
    </div>
  ";
        } else {
            // line 163
            echo "    ";
            $this->getAttribute((isset($context["urlSchemaForm"]) ? $context["urlSchemaForm"] : null), "setRendered", []);
            // line 164
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 164,  295 => 163,  287 => 158,  275 => 149,  270 => 147,  266 => 146,  260 => 143,  250 => 136,  245 => 134,  241 => 133,  235 => 130,  225 => 123,  220 => 121,  216 => 120,  210 => 117,  200 => 110,  195 => 108,  191 => 107,  185 => 104,  175 => 97,  170 => 95,  166 => 94,  160 => 91,  150 => 84,  145 => 82,  141 => 81,  135 => 78,  125 => 71,  120 => 69,  116 => 68,  110 => 65,  100 => 58,  95 => 56,  91 => 55,  85 => 52,  74 => 44,  70 => 43,  66 => 42,  55 => 34,  51 => 32,  48 => 31,  42 => 30,  39 => 29,  37 => 28,  34 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig");
    }
}
