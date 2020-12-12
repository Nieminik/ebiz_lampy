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

/* @PrestaShop/Admin/Common/Grid/grid_panel.html.twig */
class __TwigTemplate_73ff1481100faaa745d187b5d4d88498890471ee0834a3708a62144c335421fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_panel_header' => [$this, 'block_grid_panel_header'],
            'grid_actions_block' => [$this, 'block_grid_actions_block'],
            'grid_panel_body' => [$this, 'block_grid_panel_body'],
            'grid_view_block' => [$this, 'block_grid_view_block'],
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        echo "<div class=\"card js-grid-panel\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "id", []), "html", null, true);
        echo "_grid_panel\" data-hook-name=\"";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "name", []), " ")), "html", null, true);
        echo "\">
  ";
        // line 20
        $this->displayBlock('grid_panel_header', $context, $blocks);
        // line 32
        echo "
  ";
        // line 33
        $this->displayBlock('grid_panel_body', $context, $blocks);
        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('grid_panel_footer', $context, $blocks);
        // line 42
        echo "</div>

";
        // line 44
        $this->displayBlock('grid_panel_extra_content', $context, $blocks);
    }

    // line 20
    public function block_grid_panel_header($context, array $blocks = [])
    {
        // line 21
        echo "    <div class=\"card-header js-grid-header\">
      <h3 class=\"d-inline-block card-header-title\">
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "name", []), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "data", []), "records_total", []), "html", null, true);
        echo ")
      </h3>
      ";
        // line 25
        $this->displayBlock('grid_actions_block', $context, $blocks);
        // line 30
        echo "    </div>
  ";
    }

    // line 25
    public function block_grid_actions_block($context, array $blocks = [])
    {
        // line 26
        echo "        <div class=\"d-inline-block float-right\">
          ";
        // line 27
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", ["grid" => (isset($context["grid"]) ? $context["grid"] : null)]);
        echo "
        </div>
      ";
    }

    // line 33
    public function block_grid_panel_body($context, array $blocks = [])
    {
        // line 34
        echo "    <div class=\"card-body\">
      ";
        // line 35
        $this->displayBlock('grid_view_block', $context, $blocks);
        // line 38
        echo "    </div>
  ";
    }

    // line 35
    public function block_grid_view_block($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid.html.twig", ["grid" => (isset($context["grid"]) ? $context["grid"] : null)]);
        echo "
      ";
    }

    // line 41
    public function block_grid_panel_footer($context, array $blocks = [])
    {
    }

    // line 44
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  120 => 41,  113 => 36,  110 => 35,  105 => 38,  103 => 35,  100 => 34,  97 => 33,  90 => 27,  87 => 26,  84 => 25,  79 => 30,  77 => 25,  70 => 23,  66 => 21,  63 => 20,  59 => 44,  55 => 42,  53 => 41,  50 => 40,  48 => 33,  45 => 32,  43 => 20,  36 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "/var/www/html/modules/ps_linklist/views/PrestaShop/Admin/Common/Grid/grid_panel.html.twig");
    }
}
