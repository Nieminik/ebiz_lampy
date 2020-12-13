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

/* @Product/ProductPage/Panels/options.html.twig */
class __TwigTemplate_a73ed2aaca1b06238f1a3cc36c8bc426209f9c03628f94180e26f5bf8ea780b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_7d5ca9430eabcd0a570a08c6489a8d7397f3c867faead84768c9fc56c134ec7a' => [$this, 'block___internal_7d5ca9430eabcd0a570a08c6489a8d7397f3c867faead84768c9fc56c134ec7a'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/options.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            ";
        // line 33
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepTop", ["id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]);
        echo "

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visibility", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                <p class=\"subtitle\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Where do you want your product to appear?", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-4 form-group\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "visibility", []), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "visibility", []), 'widget');
        echo "
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-7 form-group\">
                  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", []), 'errors');
        echo "
                  <div class=\"row\">
                    <div class=\"col-md-4 js-available-for-order\">
                      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", []), "available_for_order", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-3 js-show-price\">
                      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", []), "show_price", []), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-5\">
                      ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", []), "online_only", []), 'widget');
        echo "
                    </div>
                  </div>
              </div>
            </div>
            <div class=\"row form-group\">
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "tags", []), 'errors');
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "tags", []), 'widget');
        echo "
                <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                  <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", [], "Admin.Actions");
        echo "
                  </button>
                  <p class=\"alert-text\">";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags are meant to help your customers find your products via the search bar.", [], "Admin.Catalog.Help");
        echo "</p>
                  <div class=\"alert-more collapse\" id=\"tagsInfo\">
                    <p>
                      ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.", [], "Admin.Catalog.Help");
        echo "<br>
                      ";
        // line 78
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.", [], "Admin.Catalog.Help"), ["[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminSearchConf")) . "\" target=\"_blank\">"), "[/1]" => "</a>"]);
        // line 83
        echo "
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Condition & References", [], "Admin.Catalog.Feature");
        echo "</h2>
              </div>
            </div>

            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "condition", []), "vars", []), "label", []), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "condition", []), 'errors');
        echo "
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "condition", []), 'widget');
        echo "
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">&nbsp;</label>
                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "show_condition", []), 'widget');
        echo "
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "isbn", []), "vars", []), "label", []), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISBN is used internationally to identify books and their various editions.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "isbn", []), 'errors');
        echo "
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "isbn", []), 'widget');
        echo "
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "ean13", []), "vars", []), "label", []), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "ean13", []), 'errors');
        echo "
                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "ean13", []), 'widget');
        echo "
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "upc", []), "vars", []), "label", []), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "upc", []), 'errors');
        echo "
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "upc", []), 'widget');
        echo "
              </fieldset>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <div id=\"custom_fields\" class=\"mt-3\">
                  <h2>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", []), "vars", []), "label", []), "html", null, true);
        echo "</h2>
                  <p class=\"subtitle\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customers can personalize the product by entering some text or by providing custom image files.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                  ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", []), 'errors');
        echo "
                  <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                              ";
        // line 150
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_7d5ca9430eabcd0a570a08c6489a8d7397f3c867faead84768c9fc56c134ec7a", $context, $blocks));
        // line 152
        echo "\">
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 154
            echo "                      <li>
                        ";
            // line 155
            echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_custom_fields.html.twig", ["form" => $context["field"]]);
            echo "
                      </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                  </ul>
                  <a href=\"#\" class=\"btn btn-outline-secondary add\">
                    <i class=\"material-icons\">add_circle</i>
                    ";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a customization field", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  </a>
                </div>
              </div>
            </div>

            <div class=\"row mt-4\">
              <div class=\"col-md-8\">
                <h2>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attached files", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                <p class=\"subtitle\">";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachments", []), 'widget');
        echo "
              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-md-8\">
                <a
                  class=\"btn btn-outline-secondary mb-3\"
                  href=\"#collapsedForm\"
                  data-toggle=\"collapse\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapsedForm\"
                >
                  <i class=\"material-icons\">add_circle</i>
                  ";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attach a new file", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </a>
                <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                  ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", []), 'errors');
        echo "
                  <div id=\"form_step6_attachment_product\" data-action=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", []), "vars", []), "attr", []), "data-action", [], "array"), "html", null, true);
        echo "\">
                    <div class=\"form-group\">";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", []), "file", []), 'widget');
        echo "</div>
                    <div class=\"form-group\">";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", []), "name", []), 'widget');
        echo "</div>
                    <div class=\"form-group\">";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", []), "description", []), 'widget');
        echo "</div>
                    <div class=\"form-group\">
                      ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", []), "add", []), 'widget');
        echo "
                      ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", []), "cancel", []), 'widget');
        echo "
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-md-8\" id=\"supplier_collection\">
                ";
        // line 203
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_supplier_choice.html.twig", ["form" => (isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm"))]);
        echo "
              </div>
            </div>
            <div class=\"row\">
              <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_supplier_refresh_product_supplier_combination_form", ["idProduct" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId")), "supplierIds" => 1]), "html", null, true);
        echo "\">
                ";
        // line 208
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_supplier_combination.html.twig", ["suppliers" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "suppliers", []), "vars", []), "value", []), "form" => (isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm"))]);
        echo "
              </div>
            </div>

            ";
        // line 212
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepBottom", ["id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]);
        echo "

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

    // line 150
    public function block___internal_7d5ca9430eabcd0a570a08c6489a8d7397f3c867faead84768c9fc56c134ec7a($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_7d5ca9430eabcd0a570a08c6489a8d7397f3c867faead84768c9fc56c134ec7a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_7d5ca9430eabcd0a570a08c6489a8d7397f3c867faead84768c9fc56c134ec7a"));

        // line 151
        echo "                              ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_custom_fields.html.twig", ["form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", []), "vars", []), "prototype", [])]);
        echo "
                              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 151,  433 => 150,  414 => 212,  407 => 208,  403 => 207,  396 => 203,  384 => 194,  380 => 193,  375 => 191,  371 => 190,  367 => 189,  363 => 188,  359 => 187,  353 => 184,  337 => 171,  333 => 170,  329 => 169,  318 => 161,  313 => 158,  296 => 155,  293 => 154,  276 => 153,  273 => 152,  271 => 150,  266 => 148,  262 => 147,  258 => 146,  248 => 139,  244 => 138,  239 => 136,  234 => 134,  225 => 128,  221 => 127,  216 => 125,  211 => 123,  204 => 119,  200 => 118,  195 => 116,  190 => 114,  181 => 108,  174 => 104,  170 => 103,  165 => 101,  160 => 99,  150 => 92,  139 => 83,  137 => 78,  133 => 77,  127 => 74,  122 => 72,  116 => 69,  112 => 68,  108 => 67,  98 => 60,  92 => 57,  86 => 54,  80 => 51,  71 => 45,  67 => 44,  58 => 38,  54 => 37,  47 => 33,  37 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            {{ renderhook('displayAdminProductsOptionsStepTop', { 'id_product': productId }) }}

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>{{ 'Visibility'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                <p class=\"subtitle\">{{ 'Where do you want your product to appear?'|trans({}, 'Admin.Catalog.Feature') }}</p>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-4 form-group\">
                {{ form_errors(optionsForm.visibility) }}
                {{ form_widget(optionsForm.visibility) }}
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-7 form-group\">
                  {{ form_errors(optionsForm.display_options) }}
                  <div class=\"row\">
                    <div class=\"col-md-4 js-available-for-order\">
                      {{ form_widget(optionsForm.display_options.available_for_order) }}
                    </div>
                    <div class=\"col-md-3 js-show-price\">
                      {{ form_widget(optionsForm.display_options.show_price) }}
                    </div>
                    <div class=\"col-md-5\">
                      {{ form_widget(optionsForm.display_options.online_only) }}
                    </div>
                  </div>
              </div>
            </div>
            <div class=\"row form-group\">
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">{{ 'Tags'|trans({}, 'Admin.Catalog.Feature') }}</label>
                {{ form_errors(optionsForm.tags) }}
                {{ form_widget(optionsForm.tags) }}
                <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                  <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                    {{ 'Read more'|trans({}, 'Admin.Actions')|raw }}
                  </button>
                  <p class=\"alert-text\">{{ 'Tags are meant to help your customers find your products via the search bar.'|trans({}, 'Admin.Catalog.Help')|raw }}</p>
                  <div class=\"alert-more collapse\" id=\"tagsInfo\">
                    <p>
                      {{ 'Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
                      {{ 'You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.'|trans({}, 'Admin.Catalog.Help')|
                      replace({
                        '[1]' : '<a href=\"'~ getAdminLink(\"AdminSearchConf\") ~'\" target=\"_blank\">',
                        '[/1]' : '</a>'
                      })|raw
                      }}
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>{{ 'Condition & References'|trans({}, 'Admin.Catalog.Feature')|raw }}</h2>
              </div>
            </div>

            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.condition.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.condition) }}
                {{ form_widget(optionsForm.condition) }}
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">&nbsp;</label>
                {{ form_widget(optionsForm.show_condition) }}
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.isbn.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"ISBN is used internationally to identify books and their various editions.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.isbn) }}
                {{ form_widget(optionsForm.isbn) }}
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.ean13.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.ean13) }}
                {{ form_widget(optionsForm.ean13) }}
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.upc.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.upc) }}
                {{ form_widget(optionsForm.upc) }}
              </fieldset>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <div id=\"custom_fields\" class=\"mt-3\">
                  <h2>{{ optionsForm.custom_fields.vars.label }}</h2>
                  <p class=\"subtitle\">{{ 'Customers can personalize the product by entering some text or by providing custom image files.'|trans({}, 'Admin.Catalog.Feature') }}</p>
                  {{ form_errors(optionsForm.custom_fields) }}
                  <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                              {% filter escape %}
                              {{ include('@Product/ProductPage/Forms/form_custom_fields.html.twig', { 'form': optionsForm.custom_fields.vars.prototype }) }}
                              {% endfilter %}\">
                    {% for field in optionsForm.custom_fields %}
                      <li>
                        {{ include('@Product/ProductPage/Forms/form_custom_fields.html.twig', { 'form': field }) }}
                      </li>
                    {% endfor %}
                  </ul>
                  <a href=\"#\" class=\"btn btn-outline-secondary add\">
                    <i class=\"material-icons\">add_circle</i>
                    {{ 'Add a customization field'|trans({}, 'Admin.Catalog.Feature') }}
                  </a>
                </div>
              </div>
            </div>

            <div class=\"row mt-4\">
              <div class=\"col-md-8\">
                <h2>{{ 'Attached files'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                <p class=\"subtitle\">{{ 'Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).'|trans({}, 'Admin.Catalog.Feature') }}</p>
                {{ form_widget(optionsForm.attachments) }}
              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-md-8\">
                <a
                  class=\"btn btn-outline-secondary mb-3\"
                  href=\"#collapsedForm\"
                  data-toggle=\"collapse\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapsedForm\"
                >
                  <i class=\"material-icons\">add_circle</i>
                  {{ 'Attach a new file'|trans({}, 'Admin.Catalog.Feature') }}
                </a>
                <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                  {{ form_errors(optionsForm.attachment_product) }}
                  <div id=\"form_step6_attachment_product\" data-action=\"{{ optionsForm.attachment_product.vars.attr['data-action'] }}\">
                    <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.file) }}</div>
                    <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.name) }}</div>
                    <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.description) }}</div>
                    <div class=\"form-group\">
                      {{ form_widget(optionsForm.attachment_product.add) }}
                      {{ form_widget(optionsForm.attachment_product.cancel) }}
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-md-8\" id=\"supplier_collection\">
                {{ include('@Product/ProductPage/Forms/form_supplier_choice.html.twig', { 'form': optionsForm }) }}
              </div>
            </div>
            <div class=\"row\">
              <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"{{ path('admin_supplier_refresh_product_supplier_combination_form', { 'idProduct': productId, 'supplierIds': 1}) }}\">
                {{ include('@Product/ProductPage/Forms/form_supplier_combination.html.twig', { 'suppliers': optionsForm.suppliers.vars.value, 'form': optionsForm }) }}
              </div>
            </div>

            {{ renderhook('displayAdminProductsOptionsStepBottom', { 'id_product': productId }) }}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/options.html.twig");
    }
}
