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
class __TwigTemplate_45f22880fb4a9e48b611736116e8d3f613809f531cab4cfcb51722bde622d64d extends \Twig\Template
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
    }

    public function block_category_form_block($context, array $blocks = [])
    {
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : null), 'errors');
        echo "

      ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "active", []), 'widget');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "id_parent", []), 'widget');
            echo "
        </div>
      </div>
      ";
        }
        // line 66
        echo "
      ";
        // line 67
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "cover_image", []), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "thumbnail_image", []), 'widget');
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
        if ((isset($context["allowMenuThumbnailsUpload"]) ? $context["allowMenuThumbnailsUpload"] : null)) {
            // line 110
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "menu_thumbnail_images", []), 'widget');
            echo "
          ";
        } else {
            // line 112
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "menu_thumbnail_images", []), 'widget', ["attr" => ["class" => "d-none"]]);
            echo "

            <div class=\"alert alert-warning\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have reached the limit (%s) of files to upload, please remove files to continue uploading", ["%s" => (isset($context["maxMenuThumbnails"]) ? $context["maxMenuThumbnails"] : null)], "Admin.Catalog.Notification"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "meta_title", []), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "meta_description", []), 'widget');
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
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "meta_keyword", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 161
(isset($context["metaKeywordHelp"]) ? $context["metaKeywordHelp"] : null)]);
        // line 162
        echo "

      ";
        // line 164
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "link_rewrite", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only letters, numbers, underscore (_) and the minus (-) character are allowed.", [], "Admin.Catalog.Help")]);
        // line 167
        echo "

      ";
        // line 169
        echo $context["ps"]->getform_group_row($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "group_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group access", [], "Admin.Catalog.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mark all of the customer groups which you would like to have access to this category.", [], "Admin.Catalog.Help")]);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%group_name% - All people without a valid customer account.", ["%group_name%" => (("<strong>" . $this->getAttribute($this->getAttribute((isset($context["defaultGroups"]) ? $context["defaultGroups"] : null), "visitorsGroup", []), "name", [])) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%group_name% - Customer who placed an order with the guest checkout.", ["%group_name%" => (("<strong>" . $this->getAttribute($this->getAttribute((isset($context["defaultGroups"]) ? $context["defaultGroups"] : null), "guestsGroup", []), "name", [])) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%group_name% - All people who have created an account on this site.", ["%group_name%" => (("<strong>" . $this->getAttribute($this->getAttribute((isset($context["defaultGroups"]) ? $context["defaultGroups"] : null), "customersGroup", []), "name", [])) . "</strong>")], "Admin.Catalog.Feature");
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["categoryForm"]) ? $context["categoryForm"] : null), "shop_association", []), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : null), 'form_end');
        echo "
";
    }

    // line 128
    public function block_category_tool_serp($context, array $blocks = [])
    {
        // line 129
        echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO preview", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            <div id=\"serp-app\" data-category-url=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["categoryUrl"]) ? $context["categoryUrl"] : null), "html", null, true);
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
    }

    // line 200
    public function block_category_form_rest($context, array $blocks = [])
    {
        // line 201
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : null), 'rest');
        echo "
      ";
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
        return array (  395 => 201,  392 => 200,  383 => 134,  378 => 132,  373 => 130,  370 => 129,  367 => 128,  361 => 212,  355 => 209,  350 => 207,  346 => 206,  341 => 203,  339 => 200,  336 => 199,  329 => 195,  323 => 192,  319 => 190,  317 => 189,  309 => 184,  305 => 183,  301 => 182,  295 => 179,  286 => 172,  284 => 169,  280 => 167,  278 => 164,  274 => 162,  272 => 161,  271 => 159,  268 => 158,  263 => 156,  258 => 155,  256 => 154,  249 => 150,  244 => 148,  236 => 143,  231 => 141,  227 => 139,  225 => 128,  220 => 126,  212 => 121,  209 => 120,  202 => 116,  194 => 112,  188 => 110,  186 => 109,  183 => 108,  181 => 107,  175 => 104,  165 => 97,  159 => 94,  156 => 93,  154 => 92,  148 => 89,  138 => 82,  132 => 79,  129 => 78,  127 => 77,  121 => 74,  115 => 70,  113 => 67,  110 => 66,  103 => 62,  97 => 59,  93 => 57,  91 => 56,  84 => 51,  82 => 48,  77 => 46,  72 => 44,  67 => 41,  65 => 38,  60 => 36,  53 => 32,  47 => 29,  41 => 28,  38 => 27,  36 => 26,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/form.html.twig");
    }
}
