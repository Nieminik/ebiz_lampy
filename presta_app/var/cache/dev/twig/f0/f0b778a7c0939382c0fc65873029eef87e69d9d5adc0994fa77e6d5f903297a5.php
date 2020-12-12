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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig */
class __TwigTemplate_5e4e034e57299d78f0a3b8e7320a2e0090c003297d8e6869dab079bff7f8d03b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'category_form_block' => [$this, 'block_category_form_block'],
            'category_tool_serp' => [$this, 'block_category_tool_serp'],
            'category_form_rest' => [$this, 'block_category_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("PrestaShopBundle:Admin:macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('category_form_block', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_category_form_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_block"));

        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), 'errors');
        echo "

      ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]);
        // line 41
        echo "

      <div class=\"form-group row\">
        ";
        // line 44
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Displayed", [], "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on \"Displayed\" to index the category on your shop.", [], "Admin.Catalog.Help"));
        echo "
        <div class=\"col-sm\">
          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "active", []), 'widget');
        echo "
          <small class=\"form-text\">
            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want a category to appear in the menu of your shop, go to [1]Modules > Module Manager[/1] and configure your menu module.", ["[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\" class=\"_blank\">"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        // line 51
        echo "
          </small>
        </div>
      </div>

      ";
        // line 56
        if ($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "id_parent", [], "any", true, true)) {
            // line 57
            echo "      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Parent category", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </label>
        <div class=\"col-sm\">
          ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "id_parent", []), 'widget');
            echo "
        </div>
      </div>
      ";
        }
        // line 66
        echo "
      ";
        // line 67
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]);
        // line 70
        echo "

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category cover image", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 77
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 77)->display($context);
        // line 78
        echo "
          ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "cover_image", []), 'widget');
        echo "

          <small class=\"form-text\">
            ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the main image for your category, displayed in the category page. The category description will overlap this image and appear in its top-left corner.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category thumbnail", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 92
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 92)->display($context);
        // line 93
        echo "
          ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "thumbnail_image", []), 'widget');
        echo "

          <small class=\"form-text\">
            ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Displays a small image in the parent category's page, if the theme allows it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menu thumbnails", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 107
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 107)->display($context);
        // line 108
        echo "
          ";
        // line 109
        if ((isset($context["allowMenuThumbnailsUpload"]) ? $context["allowMenuThumbnailsUpload"] : $this->getContext($context, "allowMenuThumbnailsUpload"))) {
            // line 110
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "menu_thumbnail_images", []), 'widget');
            echo "
          ";
        } else {
            // line 112
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "menu_thumbnail_images", []), 'widget', ["attr" => ["class" => "d-none"]]);
            echo "

            <div class=\"alert alert-warning\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have reached the limit (%s) of files to upload, please remove files to continue uploading", ["%s" => (isset($context["maxMenuThumbnails"]) ? $context["maxMenuThumbnails"] : $this->getContext($context, "maxMenuThumbnails"))], "Admin.Catalog.Notification"), "html", null, true);
            echo "
              </p>
            </div>
          ";
        }
        // line 120
        echo "          <small class=\"form-text\">
            ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The category thumbnail appears in the menu as a small image representing the category, if the theme allows it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      ";
        // line 126
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayBackOfficeCategory");
        echo "

      ";
        // line 128
        $this->displayBlock('category_tool_serp', $context, $blocks);
        // line 139
        echo "
      <div class=\"form-group row\">
        ";
        // line 141
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta title", [], "Admin.Global"), ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"));
        echo "
        <div class=\"col-sm\">
          ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "meta_title", []), 'widget');
        echo "
        </div>
      </div>

      <div class=\"form-group row\">
        ";
        // line 148
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"));
        echo "
        <div class=\"col-sm\">
          ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "meta_description", []), 'widget');
        echo "
        </div>
      </div>

      ";
        // line 154
        ob_start();
        // line 155
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        // line 156
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"), "html", null, true);
        echo "
      ";
        $context["metaKeywordHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        echo "
      ";
        // line 159
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "meta_keyword", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 161
(isset($context["metaKeywordHelp"]) ? $context["metaKeywordHelp"] : $this->getContext($context, "metaKeywordHelp"))]);
        // line 162
        echo "

      ";
        // line 164
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "link_rewrite", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only letters, numbers, underscore (_) and the minus (-) character are allowed.", [], "Admin.Catalog.Help")]);
        // line 167
        echo "

      ";
        // line 169
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "group_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group access", [], "Admin.Catalog.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mark all of the customer groups which you would like to have access to this category.", [], "Admin.Catalog.Help")]);
        // line 172
        echo "

      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You now have three default customer groups.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "</strong>
            </p>

            <p>";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%group_name% - All people without a valid customer account.", ["%group_name%" => (("<strong>" . $this->getAttribute($this->getAttribute((isset($context["defaultGroups"]) ? $context["defaultGroups"] : $this->getContext($context, "defaultGroups")), "visitorsGroup", []), "name", [])) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%group_name% - Customer who placed an order with the guest checkout.", ["%group_name%" => (("<strong>" . $this->getAttribute($this->getAttribute((isset($context["defaultGroups"]) ? $context["defaultGroups"] : $this->getContext($context, "defaultGroups")), "guestsGroup", []), "name", [])) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%group_name% - All people who have created an account on this site.", ["%group_name%" => (("<strong>" . $this->getAttribute($this->getAttribute((isset($context["defaultGroups"]) ? $context["defaultGroups"] : $this->getContext($context, "defaultGroups")), "customersGroup", []), "name", [])) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
          </div>
        </div>
      </div>

      ";
        // line 189
        if ($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "shop_association", [], "any", true, true)) {
            // line 190
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global"), "html", null, true);
            echo "
          </label>
          <div class=\"col-sm\">
            ";
            // line 195
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), "shop_association", []), 'widget');
            echo "
          </div>
        </div>
      ";
        }
        // line 199
        echo "
      ";
        // line 200
        $this->displayBlock('category_form_rest', $context, $blocks);
        // line 203
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
  </div>
</div>
";
        // line 212
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_category_tool_serp($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tool_serp"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tool_serp"));

        // line 129
        echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO preview", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            <div id=\"serp-app\" data-category-url=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["categoryUrl"]) ? $context["categoryUrl"] : $this->getContext($context, "categoryUrl")), "html", null, true);
        echo "\"></div>
            <small class=\"form-text\">
              ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here is a preview of how your page will appear in search engine results.", [], "Admin.Global"), "html", null, true);
        echo "
            </small>
          </div>
        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_category_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_rest"));

        // line 201
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : $this->getContext($context, "categoryForm")), 'rest');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 201,  428 => 200,  413 => 134,  408 => 132,  403 => 130,  400 => 129,  391 => 128,  379 => 212,  373 => 209,  368 => 207,  364 => 206,  359 => 203,  357 => 200,  354 => 199,  347 => 195,  341 => 192,  337 => 190,  335 => 189,  327 => 184,  323 => 183,  319 => 182,  313 => 179,  304 => 172,  302 => 169,  298 => 167,  296 => 164,  292 => 162,  290 => 161,  289 => 159,  286 => 158,  281 => 156,  276 => 155,  274 => 154,  267 => 150,  262 => 148,  254 => 143,  249 => 141,  245 => 139,  243 => 128,  238 => 126,  230 => 121,  227 => 120,  220 => 116,  212 => 112,  206 => 110,  204 => 109,  201 => 108,  199 => 107,  193 => 104,  183 => 97,  177 => 94,  174 => 93,  172 => 92,  166 => 89,  156 => 82,  150 => 79,  147 => 78,  145 => 77,  139 => 74,  133 => 70,  131 => 67,  128 => 66,  121 => 62,  115 => 59,  111 => 57,  109 => 56,  102 => 51,  100 => 48,  95 => 46,  90 => 44,  85 => 41,  83 => 38,  78 => 36,  71 => 32,  65 => 29,  47 => 28,  44 => 27,  42 => 26,  39 => 25,);
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

{% import 'PrestaShopBundle:Admin:macros.html.twig' as ps %}

{% block category_form_block %}
{{ form_start(categoryForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Category'|trans({}, 'Admin.Catalog.Feature') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_errors(categoryForm) }}

      {{ ps.form_group_row(categoryForm.name, {}, {
        'label': 'Name'|trans({}, 'Admin.Global'),
        'help': 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      <div class=\"form-group row\">
        {{ ps.label_with_help(('Displayed'|trans({}, 'Admin.Global')), ('Click on \"Displayed\" to index the category on your shop.'|trans({}, 'Admin.Catalog.Help'))) }}
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.active) }}
          <small class=\"form-text\">
            {{ 'If you want a category to appear in the menu of your shop, go to [1]Modules > Module Manager[/1] and configure your menu module.'|trans({
              '[1]': '<a href=\"' ~ path('admin_module_manage') ~ '\" class=\"_blank\">',
              '[/1]': '</a>'
            }, 'Admin.Catalog.Help')|raw }}
          </small>
        </div>
      </div>

      {% if categoryForm.id_parent is defined %}
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Parent category'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.id_parent) }}
        </div>
      </div>
      {% endif %}

      {{ ps.form_group_row(categoryForm.description, {}, {
        'label': 'Description'|trans({}, 'Admin.Global'),
        'help': 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Category cover image'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig' %}

          {{ form_widget(categoryForm.cover_image) }}

          <small class=\"form-text\">
            {{ 'This is the main image for your category, displayed in the category page. The category description will overlap this image and appear in its top-left corner.'|trans({}, 'Admin.Catalog.Help') }}
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Category thumbnail'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig' %}

          {{ form_widget(categoryForm.thumbnail_image) }}

          <small class=\"form-text\">
            {{ 'Displays a small image in the parent category\\'s page, if the theme allows it.'|trans({}, 'Admin.Catalog.Help') }}
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Menu thumbnails'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig' %}

          {% if allowMenuThumbnailsUpload %}
            {{ form_widget(categoryForm.menu_thumbnail_images) }}
          {% else %}
            {{ form_widget(categoryForm.menu_thumbnail_images, {'attr': {'class': 'd-none'}}) }}

            <div class=\"alert alert-warning\" role=\"alert\">
              <p class=\"alert-text\">
                {{ 'You have reached the limit (%s) of files to upload, please remove files to continue uploading'|trans({'%s': maxMenuThumbnails}, 'Admin.Catalog.Notification') }}
              </p>
            </div>
          {% endif %}
          <small class=\"form-text\">
            {{ 'The category thumbnail appears in the menu as a small image representing the category, if the theme allows it.'|trans({}, 'Admin.Catalog.Help') }}
          </small>
        </div>
      </div>

      {{ renderhook('displayBackOfficeCategory') }}

      {% block category_tool_serp %}
        <div class=\"form-group row\">
          <label class=\"form-control-label\">{{ 'SEO preview'|trans({}, 'Admin.Global') }}</label>
          <div class=\"col-sm\">
            <div id=\"serp-app\" data-category-url=\"{{ categoryUrl }}\"></div>
            <small class=\"form-text\">
              {{ 'Here is a preview of how your page will appear in search engine results.'|trans({}, 'Admin.Global') }}
            </small>
          </div>
        </div>
      {% endblock %}

      <div class=\"form-group row\">
        {{ ps.label_with_help(('Meta title'|trans({}, 'Admin.Global')), ('Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}')) }}
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.meta_title) }}
        </div>
      </div>

      <div class=\"form-group row\">
        {{ ps.label_with_help(('Meta description'|trans({}, 'Admin.Global')), ('Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}')) }}
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.meta_description) }}
        </div>
      </div>

      {% set metaKeywordHelp %}
        {{ 'To add tags, click in the field, write something, and then press the \"Enter\" key.'|trans({}, 'Admin.Shopparameters.Help') }}
        {{ 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}' }}
      {% endset %}

      {{ ps.form_group_row(categoryForm.meta_keyword, {}, {
        'label': 'Meta keywords'|trans({}, 'Admin.Global'),
        'help': metaKeywordHelp
      }) }}

      {{ ps.form_group_row(categoryForm.link_rewrite, {}, {
        'label': 'Friendly URL'|trans({}, 'Admin.Global'),
        'help': 'Only letters, numbers, underscore (_) and the minus (-) character are allowed.'|trans({}, 'Admin.Catalog.Help')
      }) }}

      {{ ps.form_group_row(categoryForm.group_association, {}, {
        'label': 'Group access'|trans({}, 'Admin.Catalog.Feature'),
        'help': 'Mark all of the customer groups which you would like to have access to this category.'|trans({}, 'Admin.Catalog.Help')
      }) }}

      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>{{ 'You now have three default customer groups.'|trans({}, 'Admin.Catalog.Help') }}</strong>
            </p>

            <p>{{ '%group_name% - All people without a valid customer account.'|trans({'%group_name%': '<strong>' ~ defaultGroups.visitorsGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
            <p>{{ '%group_name% - Customer who placed an order with the guest checkout.'|trans({'%group_name%': '<strong>' ~ defaultGroups.guestsGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
            <p>{{ '%group_name% - All people who have created an account on this site.'|trans({'%group_name%': '<strong>' ~ defaultGroups.customersGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
          </div>
        </div>
      </div>

      {% if categoryForm.shop_association is defined %}
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Shop association'|trans({}, 'Admin.Global') }}
          </label>
          <div class=\"col-sm\">
            {{ form_widget(categoryForm.shop_association) }}
          </div>
        </div>
      {% endif %}

      {% block category_form_rest %}
        {{ form_rest(categoryForm) }}
      {% endblock %}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_categories_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
  </div>
</div>
{{ form_end(categoryForm) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/form.html.twig");
    }
}
