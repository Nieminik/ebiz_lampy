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

/* @PrestaShop/Admin/ProductImage/form.html.twig */
class __TwigTemplate_3195ea90bd728e4c25a34f00df3aa80b3251199d27d61f93e9372ae67897ee4f extends \Twig\Template
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
        // line 25
        echo "<button type=\"button\" class=\"float-right close\" onclick=\"formImagesProduct.close()\"><i class=\"material-icons\">close</i></button>

<div class=\"row\">
    <div class=\"col-lg-12 col-xl-7\">
      ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cover", []), 'widget');
        echo "
    </div>
    <div class=\"col-lg-12 col-xl-4\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "base_image_url", []), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "format", []), "html", null, true);
        echo "\" class=\"btn btn-link btn-sm open-image\" target=\"_blank\">
          <i class=\"material-icons\">zoom_in</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zoom", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </a>
    </div>
</div>

<label class=\"control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "legend", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "legend", []), 'widget');
        echo "
";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "legend", []), 'errors');
        echo "

<div class=\"actions\">
    <button type=\"button\" class=\"btn btn-sm btn-primary pull-sm-right\" onclick=\"formImagesProduct.send(";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", []), "html", null, true);
        echo ")\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save image settings", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    <button type=\"button\" class=\"btn btn-sm btn-link\" onclick=\"formImagesProduct.delete(";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", []), "html", null, true);
        echo ")\"><i class=\"material-icons\">delete</i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/ProductImage/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  70 => 43,  64 => 40,  60 => 39,  56 => 38,  48 => 33,  42 => 32,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/ProductImage/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/ProductImage/form.html.twig");
    }
}
