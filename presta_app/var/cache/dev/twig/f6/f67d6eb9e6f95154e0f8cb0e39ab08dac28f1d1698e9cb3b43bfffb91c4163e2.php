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

/* @Product/ProductPage/Panels/pricing.html.twig */
class __TwigTemplate_cc26d79bac247916ae49e3c04a2f056363f23fa1ed24f44cf1420aecb16eb151 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/pricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/pricing.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">
            <h2>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retail price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
              <span class=\"help-box\" data-toggle=\"popover\"
                data-content=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
            </h2>
          </div>

          <div class=\"col-md-12 form-group\">
            <div class=\"row\">

              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price", []), 'errors');
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price", []), 'widget');
        echo "
              </div>
              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price_ttc", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price_ttc", []), 'errors');
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price_ttc", []), 'widget');
        echo "
              </div>

              <div class=\"col-xl-4 col-lg-6 mx-auto\">
                <label class=\"form-control-label\">
                  ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unit_price", []), "vars", []), "label", []), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unit_price", []), 'errors');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unit_price", []), 'widget');
        echo "
                  </div>
                  <div class=\"col-md-6\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unity", []), 'errors');
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unity", []), 'widget');
        echo "
                  </div>
                </div>
              </div>
              <div class=\"col-md-2 col-md-offset-1 ";
        // line 69
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                <label class=\"form-control-label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "ecotax", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "ecotax", []), 'errors');
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "ecotax", []), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row form-group\">
              <div class=\"col-md-4\">
                <label class=\"form-control-label\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "id_tax_rules_group", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "id_tax_rules_group", []), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "id_tax_rules_group", []), 'widget');
        echo "
              </div>
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">&nbsp;</label>
                <a class=\"form-control-static external-link\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminTaxes"), "html", null, true);
        echo "\">
                  ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage tax rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </a>
              </div>
              <div class=\"col-md-12 pt-1\">
                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "on_sale", []), 'widget');
        echo "
              </div>
              <div class=\"col-md-12\">
                <div class=\"row\">
                  <div class=\"col-xl-5 col-lg-12\">
                    <div class=\"alert alert-info mt-2\" role=\"alert\">
                      <p class=\"alert-text\">
                        ";
        // line 98
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.", [], "Admin.Catalog.Feature"), ["[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<span id=\"final_retail_price_ti\">", "[/2]" => "</span>", "[3]" => "<span id=\"final_retail_price_te\">", "[/3]" => "</span>"]);
        echo "
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cost price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </h2>
              </div>
              <div class=\"col-xl-2 col-lg-3 form-group\">
                <label class=\"form-control-label\">";
        // line 117
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "wholesale_price", []), "vars", []), "label", []);
        echo "</label>
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "wholesale_price", []), 'errors');
        echo "
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "wholesale_price", []), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific prices", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can set specific prices for customers belonging to different groups, different countries, etc.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </h2>
              </div>
              <div class=\"col-md-12\">
                <div id=\"specific-price\" class=\"mb-2\">
                  <a id=\"js-open-create-specific-price-form\" class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                    <i class=\"material-icons\">add_circle</i>
                    ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a specific price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  </a>
                  <div class=\"collapse\" id=\"specific_price_form\" data-action=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_add");
        echo "\">
                      ";
        // line 140
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_specific_price.html.twig", ["form" => $this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specific_price", []), "is_multishop_context" => (isset($context["is_multishop_context"]) ? $context["is_multishop_context"] : $this->getContext($context, "is_multishop_context"))]);
        echo "
                  </div>
                  <table
                      id=\"js-specific-price-list\"
                      class=\"table hide seo-table\"
                      data-listing-url=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_list", ["idProduct" => 1]);
        echo "\"
                      data-action-delete=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_specific_price", ["idSpecificPrice" => 1]);
        echo "\"
                      data-action-edit=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_get_specific_price_update_form", ["idSpecificPrice" => 1]);
        echo "\">
                    <thead class=\"thead-default\">
                    <tr>
                      <th>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fixed price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Period", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div>
            ";
        // line 172
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig");
        echo "
          </div>


          <div class=\"col-md-12\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>
                  ";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priority management", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </h2>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priorities", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                  ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_0", []), 'errors');
        echo "
                  ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_0", []), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_1", []), 'errors');
        echo "
                  ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_1", []), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_2", []), 'errors');
        echo "
                  ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_2", []), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_3", []), 'errors');
        echo "
                  ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_3", []), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-12\">
                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriorityToAll", []), 'widget');
        echo "
              </div>
            </div>
          </div>

          ";
        // line 219
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsPriceStepBottom", ["id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))]);
        echo "

        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 219,  409 => 214,  402 => 210,  398 => 209,  389 => 203,  385 => 202,  376 => 196,  372 => 195,  363 => 189,  359 => 188,  355 => 187,  347 => 182,  342 => 180,  331 => 172,  315 => 159,  311 => 158,  307 => 157,  303 => 156,  299 => 155,  295 => 154,  291 => 153,  287 => 152,  283 => 151,  279 => 150,  273 => 147,  269 => 146,  265 => 145,  257 => 140,  253 => 139,  248 => 137,  238 => 130,  233 => 128,  221 => 119,  217 => 118,  213 => 117,  206 => 113,  201 => 111,  185 => 98,  175 => 91,  168 => 87,  164 => 86,  157 => 82,  153 => 81,  149 => 80,  138 => 72,  134 => 71,  130 => 70,  124 => 69,  117 => 65,  113 => 64,  107 => 61,  103 => 60,  96 => 56,  91 => 54,  83 => 49,  79 => 48,  75 => 47,  69 => 44,  65 => 43,  61 => 42,  50 => 34,  45 => 32,  36 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">
            <h2>{{ 'Retail price'|trans({}, 'Admin.Catalog.Feature') }}
              <span class=\"help-box\" data-toggle=\"popover\"
                data-content=\"{{ \"This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
            </h2>
          </div>

          <div class=\"col-md-12 form-group\">
            <div class=\"row\">

              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">{{ pricingForm.price.vars.label }}</label>
                {{ form_errors(pricingForm.price) }}
                {{ form_widget(pricingForm.price) }}
              </div>
              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">{{ pricingForm.price_ttc.vars.label }}</label>
                {{ form_errors(pricingForm.price_ttc) }}
                {{ form_widget(pricingForm.price_ttc) }}
              </div>

              <div class=\"col-xl-4 col-lg-6 mx-auto\">
                <label class=\"form-control-label\">
                  {{ pricingForm.unit_price.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    {{ form_errors(pricingForm.unit_price) }}
                    {{ form_widget(pricingForm.unit_price) }}
                  </div>
                  <div class=\"col-md-6\">
                    {{ form_errors(pricingForm.unity) }}
                    {{ form_widget(pricingForm.unity) }}
                  </div>
                </div>
              </div>
              <div class=\"col-md-2 col-md-offset-1 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                <label class=\"form-control-label\">{{ pricingForm.ecotax.vars.label }}</label>
                {{ form_errors(pricingForm.ecotax) }}
                {{ form_widget(pricingForm.ecotax) }}
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row form-group\">
              <div class=\"col-md-4\">
                <label class=\"form-control-label\">{{ pricingForm.id_tax_rules_group.vars.label }}</label>
                {{ form_errors(pricingForm.id_tax_rules_group) }}
                {{ form_widget(pricingForm.id_tax_rules_group) }}
              </div>
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">&nbsp;</label>
                <a class=\"form-control-static external-link\" href=\"{{ getAdminLink(\"AdminTaxes\") }}\">
                  {{ 'Manage tax rules'|trans({}, 'Admin.Catalog.Feature') }}
                </a>
              </div>
              <div class=\"col-md-12 pt-1\">
                {{ form_widget(pricingForm.on_sale) }}
              </div>
              <div class=\"col-md-12\">
                <div class=\"row\">
                  <div class=\"col-xl-5 col-lg-12\">
                    <div class=\"alert alert-info mt-2\" role=\"alert\">
                      <p class=\"alert-text\">
                        {{ 'Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<strong>', '[/1]': '</strong>', '[2]': '<span id=\"final_retail_price_ti\">', '[/2]': '</span>', '[3]': '<span id=\"final_retail_price_te\">', '[/3]': '</span>', })|raw }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  {{ 'Cost price'|trans({}, 'Admin.Catalog.Feature') }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </h2>
              </div>
              <div class=\"col-xl-2 col-lg-3 form-group\">
                <label class=\"form-control-label\">{{ pricingForm.wholesale_price.vars.label|raw }}</label>
                {{ form_errors(pricingForm.wholesale_price) }}
                {{ form_widget(pricingForm.wholesale_price) }}
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  {{ 'Specific prices'|trans({}, 'Admin.Catalog.Feature') }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"You can set specific prices for customers belonging to different groups, different countries, etc.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </h2>
              </div>
              <div class=\"col-md-12\">
                <div id=\"specific-price\" class=\"mb-2\">
                  <a id=\"js-open-create-specific-price-form\" class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                    <i class=\"material-icons\">add_circle</i>
                    {{ 'Add a specific price'|trans({}, 'Admin.Catalog.Feature') }}
                  </a>
                  <div class=\"collapse\" id=\"specific_price_form\" data-action=\"{{ path('admin_specific_price_add') }}\">
                      {{ include('@Product/ProductPage/Forms/form_specific_price.html.twig', {'form': pricingForm.specific_price, 'is_multishop_context': is_multishop_context}) }}
                  </div>
                  <table
                      id=\"js-specific-price-list\"
                      class=\"table hide seo-table\"
                      data-listing-url=\"{{ path('admin_specific_price_list', { 'idProduct': 1 }) }}\"
                      data-action-delete=\"{{ path('admin_delete_specific_price', { 'idSpecificPrice': 1 }) }}\"
                      data-action-edit=\"{{ path('admin_get_specific_price_update_form', { 'idSpecificPrice': 1 }) }}\">
                    <thead class=\"thead-default\">
                    <tr>
                      <th>{{ 'Rule'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Fixed price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Impact'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Period'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'From'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div>
            {{ include('@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig') }}
          </div>


          <div class=\"col-md-12\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>
                  {{ 'Priority management'|trans({}, 'Admin.Catalog.Feature') }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </h2>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>{{ 'Priorities'|trans({}, 'Admin.Catalog.Feature') }}</label>
                  {{ form_errors(pricingForm.specificPricePriority_0) }}
                  {{ form_widget(pricingForm.specificPricePriority_0) }}
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  {{ form_errors(pricingForm.specificPricePriority_1) }}
                  {{ form_widget(pricingForm.specificPricePriority_1) }}
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  {{ form_errors(pricingForm.specificPricePriority_2) }}
                  {{ form_widget(pricingForm.specificPricePriority_2) }}
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  {{ form_errors(pricingForm.specificPricePriority_3) }}
                  {{ form_widget(pricingForm.specificPricePriority_3) }}
                </fieldset>
              </div>
              <div class=\"col-md-12\">
                {{ form_widget(pricingForm.specificPricePriorityToAll) }}
              </div>
            </div>
          </div>

          {{ renderhook('displayAdminProductsPriceStepBottom', { 'id_product': productId }) }}

        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/pricing.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/pricing.html.twig");
    }
}
