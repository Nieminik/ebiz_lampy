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

/* @Product/ProductPage/Panels/essentials.html.twig */
class __TwigTemplate_3042c542b19539bced8f02bdf3f455d1b86636d52b0d646dd9974f64ea651601 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_0d55fddbd6f299533182824c1db47adf49b8b4b01bdbb8a37de2c689dd994a29' => [$this, 'block___internal_0d55fddbd6f299533182824c1db47adf49b8b4b01bdbb8a37de2c689dd994a29'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/essentials.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/essentials.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          ";
        // line 32
        echo "          <div class=\"col-md-9 left-column\">

            <div id=\"js_form_step1_inputPackItems\">
              ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPackItems"]) ? $context["formPackItems"] : $this->getContext($context, "formPackItems")), 'errors');
        echo "
              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPackItems"]) ? $context["formPackItems"] : $this->getContext($context, "formPackItems")), 'widget');
        echo "
            </div>

            <div id=\"product-images-container\" class=\"mb-4\">
              <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                  url-upload=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_upload", ["idProduct" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]), "html", null, true);
        echo "\"
                  url-position=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_positions");
        echo "\"
                  data-max-size=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE"), "html", null, true);
        echo "\"
              >
                <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                <div class=\"dz-default dz-message openfilemanager\">
                    <i class=\"material-icons\">add_a_photo</i><br/>
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")), "Drop images here", [], "array"), "html", null, true);
        echo "<br/>
                    <a>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")), "or select files", [], "array"), "html", null, true);
        echo "</a><br/>
                    <small>
                        ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")), "files recommandations", [], "array"), "html", null, true);
        echo "<br/>
                        ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")), "files recommandations2", [], "array"), "html", null, true);
        echo "
                    </small>
                </div>
                ";
        // line 55
        if ((isset($context["images"]) || array_key_exists("images", $context))) {
            // line 56
            echo "                    ";
            if ((isset($context["editable"]) ? $context["editable"] : $this->getContext($context, "editable"))) {
                // line 57
                echo "                        <div class=\"dz-preview disabled openfilemanager\">
                            <div><span>+</span></div>
                        </div>
                    ";
            }
            // line 61
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 62
                echo "                    <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                        data-id=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", []), "html", null, true);
                echo "\"
                        url-delete=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_delete", ["idImage" => $this->getAttribute($context["image"], "id", [])]), "html", null, true);
                echo "\"
                        url-update=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_form", ["idImage" => $this->getAttribute($context["image"], "id", [])]), "html", null, true);
                echo "\"
                    >
                      <div class=\"dz-image bg\" style=\"background-image: url('";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "base_image_url", []), "html", null, true);
                echo "-home_default.";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "format", []), "html", null, true);
                echo "');\"></div>
                      <div class=\"dz-details\">
                        <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                        <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                      </div>
                      <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                      <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                      <div class=\"dz-success-mark\"></div>
                      <div class=\"dz-error-mark\"></div>
                      ";
                // line 76
                if ($this->getAttribute($context["image"], "cover", [])) {
                    // line 77
                    echo "                        <div class=\"iscover\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</div>
                      ";
                }
                // line 79
                echo "                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                ";
        }
        // line 82
        echo "              </div>
              <div id=\"product-images-form-container\" class=\"col-md-4\">
                <div id=\"product-images-form\"></div>
              </div>
              <div class=\"dropzone-expander text-sm-center col-md-12\">
                <span class=\"expand\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View all images", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                <span class=\"compress\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View less", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
              </div>

            </div>

            <div class=\"summary-description-container\">
              <ul class=\"nav nav-tabs bordered\">
                <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Summary", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
                <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</a></li>
              </ul>

              <div class=\"tab-content bordered\">
                <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                  ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formShortDescription"]) ? $context["formShortDescription"] : $this->getContext($context, "formShortDescription")), 'widget');
        echo "
                </div>
                <div class=\"tab-pane panel panel-default \" id=\"description\">
                  ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formDescription"]) ? $context["formDescription"] : $this->getContext($context, "formDescription")), 'widget');
        echo "
                </div>
              </div>
            </div>

            ";
        // line 109
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnMiddle", ["id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]);
        echo "

            <div id=\"features\" class=\"mb-3\">
              <div id=\"features-content\" class=\"content ";
        // line 112
        echo (((twig_length_filter($this->env, (isset($context["formFeatures"]) ? $context["formFeatures"] : $this->getContext($context, "formFeatures"))) == 0)) ? ("hide") : (""));
        echo "\">
                <h2>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formFeatures"]) ? $context["formFeatures"] : $this->getContext($context, "formFeatures")), 'errors');
        echo "
                <div
                  class=\"feature-collection nostyle\"
                  data-prototype=\"";
        // line 117
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_0d55fddbd6f299533182824c1db47adf49b8b4b01bdbb8a37de2c689dd994a29", $context, $blocks));
        // line 119
        echo "\"
                >
                  ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formFeatures"]) ? $context["formFeatures"] : $this->getContext($context, "formFeatures")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 122
            echo "                    ";
            echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_feature.html.twig", ["form" => $context["feature"]]);
            echo "
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4\">
                  <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a feature", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                </div>
              </div>
            </div>

            <div id=\"manufacturer\" class=\"mb-3\">
              ";
        // line 134
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_manufacturer.html.twig", ["form" => (isset($context["formManufacturer"]) ? $context["formManufacturer"] : $this->getContext($context, "formManufacturer"))]);
        echo "
            </div>

            <div id=\"related-product\" class=\"mb-3\">
              ";
        // line 138
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_related_products.html.twig", ["form" => (isset($context["formRelatedProducts"]) ? $context["formRelatedProducts"] : $this->getContext($context, "formRelatedProducts"))]);
        echo "
            </div>

            ";
        // line 141
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnBottom", ["id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]);
        echo "

          </div>

          ";
        // line 146
        echo "          <div class=\"col-md-3 right-column\">

              <div class=\"row\">
                <div class=\"col-md-12\">

                  ";
        // line 151
        if ((isset($context["is_combination_active"]) ? $context["is_combination_active"] : $this->getContext($context, "is_combination_active"))) {
            // line 152
            echo "                    <div class=\"form-group mb-3\" id=\"show_variations_selector\">
                      <h2>
                        ";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                      </h2>
                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"show_variations\" value=\"0\" ";
            // line 160
            if ( !(isset($context["has_combinations"]) ? $context["has_combinations"] : $this->getContext($context, "has_combinations"))) {
                echo "checked=\"checked\"";
            }
            echo ">
                          ";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Simple product", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        </label>
                      </div>
                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"show_variations\" value=\"1\" ";
            // line 166
            if ((isset($context["has_combinations"]) ? $context["has_combinations"] : $this->getContext($context, "has_combinations"))) {
                echo "checked=\"checked\"";
            }
            echo ">
                          ";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product with combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        </label>
                        <div id=\"product_type_combinations_shortcut\">
                          <span class=\"small font-secondary\">
                            ";
            // line 172
            echo "                            ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Combinations[/1]", [], "Admin.Catalog.Help"), ["[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"]);
            echo "
                          </span>
                        </div>
                      </div>
                    </div>
                  ";
        }
        // line 178
        echo "
                  <div class=\"form-group mb-4\">
                    <h2>
                      ";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your reference code for this product. Allowed special characters: .-_#.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </h2>
                    ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formReference"]) ? $context["formReference"] : $this->getContext($context, "formReference")), 'errors');
        echo "
                    <div class=\"row\">
                      <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                          ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formReference"]) ? $context["formReference"] : $this->getContext($context, "formReference")), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  ";
        // line 193
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 194
            echo "                    <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
                      <h2>
                        ";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How many products should be available for sale?", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                      </h2>
                      ";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formQuantityShortcut"]) ? $context["formQuantityShortcut"] : $this->getContext($context, "formQuantityShortcut")), 'errors');
            echo "
                      <div class=\"row\">
                        <div class=\"col-xl-6 col-lg-12\">
                          ";
            // line 203
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formQuantityShortcut"]) ? $context["formQuantityShortcut"] : $this->getContext($context, "formQuantityShortcut")), 'widget');
            echo "
                        </div>
                      </div>
                      <span class=\"small font-secondary\">
                        ";
            // line 208
            echo "                        ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Quantities[/1]", [], "Admin.Catalog.Help"), ["[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"]);
            echo "
                      </span>
                    </div>
                  ";
        }
        // line 212
        echo "
                  <div class=\"form-group mb-4\">
                    <h2>
                      ";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", [], "Admin.Global"), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </h2>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <label class=\"form-control-label\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                        ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcut"]) ? $context["formPriceShortcut"] : $this->getContext($context, "formPriceShortcut")), 'widget');
        echo "
                        ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcut"]) ? $context["formPriceShortcut"] : $this->getContext($context, "formPriceShortcut")), 'errors');
        echo "
                      </div>
                      <div class=\"col-md-6 col-offset-md-1\">
                        <label class=\"form-control-label\">";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                        ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcutTTC"]) ? $context["formPriceShortcutTTC"] : $this->getContext($context, "formPriceShortcutTTC")), 'widget');
        echo "
                        ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcutTTC"]) ? $context["formPriceShortcutTTC"] : $this->getContext($context, "formPriceShortcutTTC")), 'errors');
        echo "
                      </div>
                      <div class=\"col-md-12 mt-1\">
                        <label class=\"form-control-label\">";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                        ";
        // line 232
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin/Common:renderField", ["formName" => "step2", "formType" => "PrestaShopBundle\\Form\\Admin\\Product\\ProductPrice", "fieldName" => "id_tax_rules_group", "fieldData" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 237
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step2", []), "id_tax_rules_group", []), "vars", []), "value", [])]));
        // line 241
        echo "
                      </div>
                      <div class=\"col-md-12\">
                        <span class=\"small font-secondary\">
                          ";
        // line 246
        echo "                          ";
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Pricing[/1]", [], "Admin.Catalog.Help"), ["[1]" => "<a href=\"#tab-step2\" onclick=\"\$('a[href=\\'#step2\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"]);
        echo "
                        </span>
                      </div>
                    </div>
                    <div class=\"row hide\">
                      <div class=\"col-md-12\">
                        <label>";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                      </div>
                      <div class=\"clearfix\"></div>
                      <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                      </div>
                      <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                    </div>
                  </div>

                  <div class=\"form-group mb-4\" id=\"categories\">
                    ";
        // line 262
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_categories.html.twig", ["form" => (isset($context["formCategories"]) ? $context["formCategories"] : $this->getContext($context, "formCategories")), "productId" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]);
        echo "
                  </div>

                  ";
        // line 265
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepRightColumnBottom", ["id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]);
        echo "

                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block___internal_0d55fddbd6f299533182824c1db47adf49b8b4b01bdbb8a37de2c689dd994a29($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_0d55fddbd6f299533182824c1db47adf49b8b4b01bdbb8a37de2c689dd994a29"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_0d55fddbd6f299533182824c1db47adf49b8b4b01bdbb8a37de2c689dd994a29"));

        // line 118
        echo "                    ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_feature.html.twig", ["form" => $this->getAttribute($this->getAttribute((isset($context["formFeatures"]) ? $context["formFeatures"] : $this->getContext($context, "formFeatures")), "vars", []), "prototype", [])]);
        echo "
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/essentials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 118,  539 => 117,  518 => 265,  512 => 262,  499 => 252,  489 => 246,  483 => 241,  481 => 237,  480 => 232,  476 => 231,  470 => 228,  466 => 227,  462 => 226,  456 => 223,  452 => 222,  448 => 221,  441 => 217,  436 => 215,  431 => 212,  423 => 208,  416 => 203,  410 => 200,  405 => 198,  400 => 196,  396 => 194,  394 => 193,  386 => 188,  380 => 185,  375 => 183,  370 => 181,  365 => 178,  355 => 172,  348 => 167,  342 => 166,  334 => 161,  328 => 160,  321 => 156,  316 => 154,  312 => 152,  310 => 151,  303 => 146,  296 => 141,  290 => 138,  283 => 134,  274 => 128,  268 => 124,  251 => 122,  234 => 121,  230 => 119,  228 => 117,  222 => 114,  218 => 113,  214 => 112,  208 => 109,  200 => 104,  194 => 101,  186 => 96,  182 => 95,  172 => 88,  168 => 87,  161 => 82,  158 => 81,  151 => 79,  145 => 77,  143 => 76,  129 => 67,  124 => 65,  120 => 64,  116 => 63,  113 => 62,  108 => 61,  102 => 57,  99 => 56,  97 => 55,  91 => 52,  87 => 51,  82 => 49,  78 => 48,  70 => 43,  66 => 42,  62 => 41,  54 => 36,  50 => 35,  45 => 32,  37 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          {# LEFT #}
          <div class=\"col-md-9 left-column\">

            <div id=\"js_form_step1_inputPackItems\">
              {{ form_errors(formPackItems) }}
              {{ form_widget(formPackItems) }}
            </div>

            <div id=\"product-images-container\" class=\"mb-4\">
              <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                  url-upload=\"{{ path('admin_product_image_upload', {'idProduct': productId}) }}\"
                  url-position=\"{{ path('admin_product_image_positions') }}\"
                  data-max-size=\"{{ 'PS_LIMIT_UPLOAD_IMAGE_VALUE'|configuration }}\"
              >
                <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                <div class=\"dz-default dz-message openfilemanager\">
                    <i class=\"material-icons\">add_a_photo</i><br/>
                    {{js_translatable['Drop images here']}}<br/>
                    <a>{{js_translatable['or select files']}}</a><br/>
                    <small>
                        {{js_translatable['files recommandations']}}<br/>
                        {{js_translatable['files recommandations2']}}
                    </small>
                </div>
                {% if images is defined %}
                    {% if editable %}
                        <div class=\"dz-preview disabled openfilemanager\">
                            <div><span>+</span></div>
                        </div>
                    {% endif %}
                  {% for image in images %}
                    <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                        data-id=\"{{ image.id }}\"
                        url-delete=\"{{ path('admin_product_image_delete', {'idImage': image.id}) }}\"
                        url-update=\"{{ path('admin_product_image_form', {'idImage': image.id}) }}\"
                    >
                      <div class=\"dz-image bg\" style=\"background-image: url('{{ image.base_image_url }}-home_default.{{ image.format }}');\"></div>
                      <div class=\"dz-details\">
                        <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                        <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                      </div>
                      <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                      <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                      <div class=\"dz-success-mark\"></div>
                      <div class=\"dz-error-mark\"></div>
                      {% if image.cover %}
                        <div class=\"iscover\">{{ 'Cover'|trans({}, 'Admin.Catalog.Feature') }}</div>
                      {% endif %}
                    </div>
                  {% endfor %}
                {% endif %}
              </div>
              <div id=\"product-images-form-container\" class=\"col-md-4\">
                <div id=\"product-images-form\"></div>
              </div>
              <div class=\"dropzone-expander text-sm-center col-md-12\">
                <span class=\"expand\">{{ 'View all images'|trans({}, 'Admin.Catalog.Feature') }}</span>
                <span class=\"compress\">{{ 'View less'|trans({}, 'Admin.Catalog.Feature') }}</span>
              </div>

            </div>

            <div class=\"summary-description-container\">
              <ul class=\"nav nav-tabs bordered\">
                <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">{{ 'Summary'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
                <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">{{ 'Description'|trans({}, 'Admin.Global') }}</a></li>
              </ul>

              <div class=\"tab-content bordered\">
                <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                  {{ form_widget(formShortDescription) }}
                </div>
                <div class=\"tab-pane panel panel-default \" id=\"description\">
                  {{ form_widget(formDescription) }}
                </div>
              </div>
            </div>

            {{ renderhook('displayAdminProductsMainStepLeftColumnMiddle', { 'id_product': productId }) }}

            <div id=\"features\" class=\"mb-3\">
              <div id=\"features-content\" class=\"content {{ formFeatures|length == 0 ? 'hide':'' }}\">
                <h2>{{ 'Features'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                {{ form_errors(formFeatures) }}
                <div
                  class=\"feature-collection nostyle\"
                  data-prototype=\"{% filter escape %}
                    {{ include('@Product/ProductPage/Forms/form_feature.html.twig', { 'form': formFeatures.vars.prototype }) }}
                  {% endfilter %}\"
                >
                  {% for feature in formFeatures %}
                    {{ include('@Product/ProductPage/Forms/form_feature.html.twig', { 'form': feature }) }}
                  {% endfor %}
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4\">
                  <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> {{ 'Add a feature'|trans({}, 'Admin.Catalog.Feature') }}</button>
                </div>
              </div>
            </div>

            <div id=\"manufacturer\" class=\"mb-3\">
              {{ include('@Product/ProductPage/Forms/form_manufacturer.html.twig', { 'form': formManufacturer }) }}
            </div>

            <div id=\"related-product\" class=\"mb-3\">
              {{ include('@Product/ProductPage/Forms/form_related_products.html.twig', { 'form': formRelatedProducts }) }}
            </div>

            {{ renderhook('displayAdminProductsMainStepLeftColumnBottom', { 'id_product': productId }) }}

          </div>

          {# RIGHT #}
          <div class=\"col-md-3 right-column\">

              <div class=\"row\">
                <div class=\"col-md-12\">

                  {% if is_combination_active %}
                    <div class=\"form-group mb-3\" id=\"show_variations_selector\">
                      <h2>
                        {{ \"Combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                        <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                      </h2>
                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"show_variations\" value=\"0\" {% if not has_combinations %}checked=\"checked\"{% endif %}>
                          {{ \"Simple product\"|trans({}, 'Admin.Catalog.Feature') }}
                        </label>
                      </div>
                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"show_variations\" value=\"1\" {% if has_combinations %}checked=\"checked\"{% endif %}>
                          {{ \"Product with combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                        </label>
                        <div id=\"product_type_combinations_shortcut\">
                          <span class=\"small font-secondary\">
                            {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                            {{ \"Advanced settings in [1][2]Combinations[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                          </span>
                        </div>
                      </div>
                    </div>
                  {% endif %}

                  <div class=\"form-group mb-4\">
                    <h2>
                      {{ \"Reference\"|trans({}, 'Admin.Catalog.Feature') }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"Your reference code for this product. Allowed special characters: .-_#\\.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </h2>
                    {{ form_errors(formReference) }}
                    <div class=\"row\">
                      <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                          {{ form_widget(formReference) }}
                      </div>
                    </div>
                  </div>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                    <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
                      <h2>
                        {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                        <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"How many products should be available for sale?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                      </h2>
                      {{ form_errors(formQuantityShortcut) }}
                      <div class=\"row\">
                        <div class=\"col-xl-6 col-lg-12\">
                          {{ form_widget(formQuantityShortcut) }}
                        </div>
                      </div>
                      <span class=\"small font-secondary\">
                        {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                        {{ \"Advanced settings in [1][2]Quantities[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                      </span>
                    </div>
                  {% endif %}

                  <div class=\"form-group mb-4\">
                    <h2>
                      {{ \"Price\"|trans({}, 'Admin.Global') }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </h2>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <label class=\"form-control-label\">{{ \"Tax excluded\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                        {{ form_widget(formPriceShortcut) }}
                        {{ form_errors(formPriceShortcut) }}
                      </div>
                      <div class=\"col-md-6 col-offset-md-1\">
                        <label class=\"form-control-label\">{{ \"Tax included\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                        {{ form_widget(formPriceShortcutTTC) }}
                        {{ form_errors(formPriceShortcutTTC) }}
                      </div>
                      <div class=\"col-md-12 mt-1\">
                        <label class=\"form-control-label\">{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                        {{ render(
                            controller('PrestaShopBundle:Admin/Common:renderField', {
                              'formName': 'step2',
                              'formType': 'PrestaShopBundle\\\\Form\\\\Admin\\\\Product\\\\ProductPrice',
                              'fieldName': 'id_tax_rules_group',
                              'fieldData' : form.step2.id_tax_rules_group.vars.value
                              }
                            )
                          )
                        }}
                      </div>
                      <div class=\"col-md-12\">
                        <span class=\"small font-secondary\">
                          {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                          {{ \"Advanced settings in [1][2]Pricing[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step2\" onclick=\"\$(\\'a[href=\\\\\\'#step2\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                        </span>
                      </div>
                    </div>
                    <div class=\"row hide\">
                      <div class=\"col-md-12\">
                        <label>{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                      </div>
                      <div class=\"clearfix\"></div>
                      <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                      </div>
                      <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                    </div>
                  </div>

                  <div class=\"form-group mb-4\" id=\"categories\">
                    {{ include('@Product/ProductPage/Forms/form_categories.html.twig', { 'form': formCategories, 'productId': productId }) }}
                  </div>

                  {{ renderhook('displayAdminProductsMainStepRightColumnBottom', { 'id_product': productId }) }}

                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/essentials.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/essentials.html.twig");
    }
}
