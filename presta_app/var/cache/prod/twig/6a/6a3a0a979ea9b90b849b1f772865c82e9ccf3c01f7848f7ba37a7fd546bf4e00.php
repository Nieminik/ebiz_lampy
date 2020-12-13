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

/* @PrestaShop/Admin/Sell/Catalog/Categories/edit_root.html.twig */
class __TwigTemplate_d13839af527599f7ced45929ec2e77ff2f0852859b0bca2cda5a006dadbf02b0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit_root.html.twig", 28);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit: %value%", ["%value%" => $this->getAttribute($this->getAttribute((isset($context["editableCategory"]) ? $context["editableCategory"] : null), "name", []), (isset($context["contextLangId"]) ? $context["contextLangId"] : null), [], "array")], "Admin.Catalog.Feature");
        // line 28
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit_root.html.twig", 33)->display(twig_array_merge($context, ["categoryForm" =>         // line 34
(isset($context["editRootCategoryForm"]) ? $context["editRootCategoryForm"] : null), "thumbnailImage" => $this->getAttribute(        // line 35
(isset($context["editableCategory"]) ? $context["editableCategory"] : null), "thumbnailImage", []), "coverImage" => $this->getAttribute(        // line 36
(isset($context["editableCategory"]) ? $context["editableCategory"] : null), "coverImage", []), "menuThumbnailImages" => $this->getAttribute(        // line 37
(isset($context["editableCategory"]) ? $context["editableCategory"] : null), "menuThumbnailImages", [])]));
        // line 39
        echo "    </div>
  </div>
";
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        // line 44
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/javascripts.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit_root.html.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/edit_root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 46,  65 => 44,  62 => 43,  56 => 39,  54 => 37,  53 => 36,  52 => 35,  51 => 34,  50 => 33,  46 => 31,  43 => 30,  39 => 28,  37 => 26,  22 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/edit_root.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/edit_root.html.twig");
    }
}
