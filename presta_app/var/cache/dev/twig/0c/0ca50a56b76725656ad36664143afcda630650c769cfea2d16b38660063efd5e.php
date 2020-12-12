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

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_624d2c2b2b0707165c83d96eebb8a5785ff10ef0fcff695c1a57cfbe356a5e32 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'perfs_form_smarty_cache' => [$this, 'block_perfs_form_smarty_cache'],
            'perfs_form_debug_mode' => [$this, 'block_perfs_form_debug_mode'],
            'perfs_form_optional_features' => [$this, 'block_perfs_form_optional_features'],
            'perfs_form_ccc' => [$this, 'block_perfs_form_ccc'],
            'perfs_form_media_servers' => [$this, 'block_perfs_form_media_servers'],
            'perfs_form_caching' => [$this, 'block_perfs_form_caching'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 27);
        // line 30
        list($context["smartyForm"], $context["debugModeForm"], $context["optionalFeaturesForm"], $context["combineCompressCacheForm"], $context["mediaServersForm"], $context["cachingForm"], $context["memcacheForm"]) =         [$this->getAttribute(        // line 31
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "smarty", []), $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "debug_mode", []), $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "optional_features", []), $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ccc", []), $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_servers", []), $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caching", []), $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "add_memcache_server", [])];
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
  <div class=\"row justify-content-center\">
    ";
        // line 37
        $this->displayBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('perfs_form_debug_mode', $context, $blocks);
        // line 132
        echo "
    ";
        // line 133
        $this->displayBlock('perfs_form_optional_features', $context, $blocks);
        // line 189
        echo "
    ";
        // line 190
        $this->displayBlock('perfs_form_ccc', $context, $blocks);
        // line 235
        echo "
    ";
        // line 236
        $this->displayBlock('perfs_form_media_servers', $context, $blocks);
        // line 281
        echo "
    ";
        // line 282
        $this->displayBlock('perfs_form_caching', $context, $blocks);
        // line 316
        echo "  </div>
  ";
        // line 317
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_perfs_form_smarty_cache($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        // line 38
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smarty", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Template compilation", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "template_compilation", []), 'errors');
        echo "
                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "template_compilation", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 53
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cache", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled except for debugging.", [], "Admin.Advparameters.Feature"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "cache", []), 'errors');
        echo "
                  ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "cache", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                ";
        // line 60
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multi-front optimizations", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled if you want to avoid to store the smarty cache on NFS.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "multi_front_optimization", []), 'errors');
        echo "
                  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "multi_front_optimization", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching type", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "caching_type", []), 'errors');
        echo "
                  ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "caching_type", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clear cache", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "clear_cache", []), 'errors');
        echo "
                  ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), "clear_cache", []), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["smartyForm"]) ? $context["smartyForm"] : $this->getContext($context, "smartyForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_perfs_form_debug_mode($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        // line 93
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">bug_report</i> ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                ";
        // line 101
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable non PrestaShop modules", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable non PrestaShop Modules.", [], "Admin.Advparameters.Feature"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["debugModeForm"]) ? $context["debugModeForm"] : $this->getContext($context, "debugModeForm")), "disable_non_native_modules", []), 'errors');
        echo "
                  ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["debugModeForm"]) ? $context["debugModeForm"] : $this->getContext($context, "debugModeForm")), "disable_non_native_modules", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 108
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable all overrides", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable all classes and controllers overrides.", [], "Admin.Advparameters.Feature"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["debugModeForm"]) ? $context["debugModeForm"] : $this->getContext($context, "debugModeForm")), "disable_overrides", []), 'errors');
        echo "
                  ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["debugModeForm"]) ? $context["debugModeForm"] : $this->getContext($context, "debugModeForm")), "disable_overrides", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 115
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable debug mode.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["debugModeForm"]) ? $context["debugModeForm"] : $this->getContext($context, "debugModeForm")), "debug_mode", []), 'errors');
        echo "
                  ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["debugModeForm"]) ? $context["debugModeForm"] : $this->getContext($context, "debugModeForm")), "debug_mode", []), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["debugModeForm"]) ? $context["debugModeForm"] : $this->getContext($context, "debugModeForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_perfs_form_optional_features($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        // line 134
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">extension</i> ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 144
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some features can be disabled in order to improve performance.", [], "Admin.Advparameters.Help"));
        echo "
                </div>
              </div>

              <div class=\"form-group row\">
                ";
        // line 149
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Combinations.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), "combinations", []), 'errors');
        echo "
                  ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), "combinations", []), 'widget');
        echo "
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 158
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), "combinations", []), "vars", []), "disabled", [])) {
            // line 159
            echo "                    ";
            echo $context["ps"]->getwarningtip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You cannot set this parameter to No when combinations are already used by some of your products", [], "Admin.Advparameters.Help"));
            echo "
                  ";
        }
        // line 161
        echo "                </div>
              </div>

              <div class=\"form-group row\">
                ";
        // line 165
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", [], "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Features.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), "features", []), 'errors');
        echo "
                  ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), "features", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 172
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer groups", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Customer Groups.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), "customer_groups", []), 'errors');
        echo "
                  ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), "customer_groups", []), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["optionalFeaturesForm"]) ? $context["optionalFeaturesForm"] : $this->getContext($context, "optionalFeaturesForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_perfs_form_ccc($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        // line 191
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">zoom_out_map</i> ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC (Combine, Compress and Cache)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 200
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.", [], "Admin.Advparameters.Help"));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for CSS", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["combineCompressCacheForm"]) ? $context["combineCompressCacheForm"] : $this->getContext($context, "combineCompressCacheForm")), "smart_cache_css", []), 'errors');
        echo "
                  ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["combineCompressCacheForm"]) ? $context["combineCompressCacheForm"] : $this->getContext($context, "combineCompressCacheForm")), "smart_cache_css", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for JavaScript", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["combineCompressCacheForm"]) ? $context["combineCompressCacheForm"] : $this->getContext($context, "combineCompressCacheForm")), "smart_cache_js", []), 'errors');
        echo "
                  ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["combineCompressCacheForm"]) ? $context["combineCompressCacheForm"] : $this->getContext($context, "combineCompressCacheForm")), "smart_cache_js", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 218
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apache optimization", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will add directives to your .htaccess file, which should improve caching and compression.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["combineCompressCacheForm"]) ? $context["combineCompressCacheForm"] : $this->getContext($context, "combineCompressCacheForm")), "apache_optimization", []), 'errors');
        echo "
                  ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["combineCompressCacheForm"]) ? $context["combineCompressCacheForm"] : $this->getContext($context, "combineCompressCacheForm")), "apache_optimization", []), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["combineCompressCacheForm"]) ? $context["combineCompressCacheForm"] : $this->getContext($context, "combineCompressCacheForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_perfs_form_media_servers($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        // line 237
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> ";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media servers (use only with CCC)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 246
        echo $context["ps"]->getinfotip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", [], "Admin.Advparameters.Feature"));
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 250
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #1", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the second domain of your shop, (e.g. myshop-media-server-1.com). If you do not have another domain, leave this field blank.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["mediaServersForm"]) ? $context["mediaServersForm"] : $this->getContext($context, "mediaServersForm")), "media_server_one", []), 'errors');
        echo "
                  ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["mediaServersForm"]) ? $context["mediaServersForm"] : $this->getContext($context, "mediaServersForm")), "media_server_one", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 257
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #2", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the third domain of your shop, (e.g. myshop-media-server-2.com). If you do not have another domain, leave this field blank.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["mediaServersForm"]) ? $context["mediaServersForm"] : $this->getContext($context, "mediaServersForm")), "media_server_two", []), 'errors');
        echo "
                  ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["mediaServersForm"]) ? $context["mediaServersForm"] : $this->getContext($context, "mediaServersForm")), "media_server_two", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row\">
                ";
        // line 264
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #3", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the fourth domain of your shop, (e.g. myshop-media-server-3.com). If you do not have another domain, leave this field blank.", [], "Admin.Advparameters.Help"));
        echo "
                <div class=\"col-sm\">
                  ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["mediaServersForm"]) ? $context["mediaServersForm"] : $this->getContext($context, "mediaServersForm")), "media_server_three", []), 'errors');
        echo "
                  ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["mediaServersForm"]) ? $context["mediaServersForm"] : $this->getContext($context, "mediaServersForm")), "media_server_three", []), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["mediaServersForm"]) ? $context["mediaServersForm"] : $this->getContext($context, "mediaServersForm")), 'rest');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 282
    public function block_perfs_form_caching($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        // line 283
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> ";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use cache", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["cachingForm"]) ? $context["cachingForm"] : $this->getContext($context, "cachingForm")), "use_cache", []), 'errors');
        echo "
                  ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["cachingForm"]) ? $context["cachingForm"] : $this->getContext($context, "cachingForm")), "use_cache", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"form-group row memcache\" id=\"caching_systems\">
                <label class=\"form-control-label\">";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching system", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                <div class=\"col-sm\">
                  ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["cachingForm"]) ? $context["cachingForm"] : $this->getContext($context, "cachingForm")), "caching_system", []), 'errors');
        echo "
                  ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["cachingForm"]) ? $context["cachingForm"] : $this->getContext($context, "cachingForm")), "caching_system", []), 'widget');
        echo "
                </div>
              </div>
              ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cachingForm"]) ? $context["cachingForm"] : $this->getContext($context, "cachingForm")), 'rest');
        echo "
              ";
        // line 305
        echo twig_include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", ["form" => (isset($context["memcacheForm"]) ? $context["memcacheForm"] : $this->getContext($context, "memcacheForm"))]);
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 320
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 321
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        echo "\"></script>
  <script>
    var configuration = {
      'addServerUrl': '";
        // line 325
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_add"), "js"), "html", null, true);
        echo "',
      'removeServerUrl': '";
        // line 326
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_delete"), "js"), "html", null, true);
        echo "',
      'testServerUrl': '";
        // line 327
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_test"), "js"), "html", null, true);
        echo "'
    };
    var app = new PerformancePage(
      configuration.addServerUrl,
      configuration.removeServerUrl,
      configuration.testServerUrl
    );

    window.addEventListener('load', function() {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 351,  769 => 327,  765 => 326,  761 => 325,  755 => 322,  750 => 321,  741 => 320,  725 => 310,  717 => 305,  713 => 304,  707 => 301,  703 => 300,  698 => 298,  691 => 294,  687 => 293,  682 => 291,  674 => 286,  669 => 283,  660 => 282,  644 => 275,  636 => 270,  630 => 267,  626 => 266,  621 => 264,  614 => 260,  610 => 259,  605 => 257,  598 => 253,  594 => 252,  589 => 250,  582 => 246,  573 => 240,  568 => 237,  559 => 236,  543 => 229,  535 => 224,  529 => 221,  525 => 220,  520 => 218,  513 => 214,  509 => 213,  504 => 211,  497 => 207,  493 => 206,  488 => 204,  481 => 200,  472 => 194,  467 => 191,  458 => 190,  442 => 183,  434 => 178,  428 => 175,  424 => 174,  419 => 172,  412 => 168,  408 => 167,  403 => 165,  397 => 161,  391 => 159,  389 => 158,  380 => 152,  376 => 151,  371 => 149,  363 => 144,  353 => 137,  348 => 134,  339 => 133,  323 => 126,  315 => 121,  309 => 118,  305 => 117,  300 => 115,  293 => 111,  289 => 110,  284 => 108,  277 => 104,  273 => 103,  268 => 101,  260 => 96,  255 => 93,  246 => 92,  230 => 85,  222 => 80,  216 => 77,  212 => 76,  207 => 74,  200 => 70,  196 => 69,  191 => 67,  184 => 63,  180 => 62,  175 => 60,  168 => 56,  164 => 55,  159 => 53,  152 => 49,  148 => 48,  143 => 46,  135 => 41,  130 => 38,  121 => 37,  109 => 317,  106 => 316,  104 => 282,  101 => 281,  99 => 236,  96 => 235,  94 => 190,  91 => 189,  89 => 133,  86 => 132,  84 => 92,  81 => 91,  79 => 37,  73 => 35,  64 => 34,  54 => 25,  52 => 31,  51 => 30,  49 => 27,  22 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{%
    set smartyForm, debugModeForm, optionalFeaturesForm, combineCompressCacheForm, mediaServersForm, cachingForm, memcacheForm =
    form.smarty, form.debug_mode, form.optional_features, form.ccc, form.media_servers, form.caching, form.add_memcache_server
%}

{% block content %}
  {{ form_start(form, {'attr' : {'class': 'form'} }) }}
  <div class=\"row justify-content-center\">
    {% block perfs_form_smarty_cache %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i> {{ 'Smarty'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Template compilation'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.template_compilation) }}
                  {{ form_widget(smartyForm.template_compilation) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Cache'|trans), ('Should be enabled except for debugging.'|trans)) }}
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.cache) }}
                  {{ form_widget(smartyForm.cache) }}
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                {{ ps.label_with_help(('Multi-front optimizations'|trans), ('Should be enabled if you want to avoid to store the smarty cache on NFS.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.multi_front_optimization) }}
                  {{ form_widget(smartyForm.multi_front_optimization) }}
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">{{ 'Caching type'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.caching_type) }}
                  {{ form_widget(smartyForm.caching_type) }}
                </div>
              </div>
              <div class=\"form-group row smarty-cache-option\">
                <label class=\"form-control-label\">{{ 'Clear cache'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(smartyForm.clear_cache) }}
                  {{ form_widget(smartyForm.clear_cache) }}
                </div>
              </div>
              {{ form_rest(smartyForm) }}
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block perfs_form_debug_mode %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">bug_report</i> {{ 'Debug mode'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Disable non PrestaShop modules'|trans), ('Enable or disable non PrestaShop Modules.'|trans({}, 'Admin.Advparameters.Feature'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(debugModeForm.disable_non_native_modules) }}
                  {{ form_widget(debugModeForm.disable_non_native_modules) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Disable all overrides'|trans), ('Enable or disable all classes and controllers overrides.'|trans({}, 'Admin.Advparameters.Feature'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(debugModeForm.disable_overrides) }}
                  {{ form_widget(debugModeForm.disable_overrides) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Debug mode'|trans), ('Enable or disable debug mode.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(debugModeForm.debug_mode) }}
                  {{ form_widget(debugModeForm.debug_mode) }}
                </div>
              </div>
              {{ form_rest(debugModeForm) }}
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block perfs_form_optional_features %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">extension</i> {{ 'Optional features'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">
                  {{ ps.infotip('Some features can be disabled in order to improve performance.'|trans({}, 'Admin.Advparameters.Help')) }}
                </div>
              </div>

              <div class=\"form-group row\">
                {{ ps.label_with_help(('Combinations'|trans({}, 'Admin.Global')), ('Choose \"No\" to disable Product Combinations.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(optionalFeaturesForm.combinations) }}
                  {{ form_widget(optionalFeaturesForm.combinations) }}
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col\">
                  {% if optionalFeaturesForm.combinations.vars.disabled %}
                    {{ ps.warningtip('You cannot set this parameter to No when combinations are already used by some of your products'|trans({}, 'Admin.Advparameters.Help')) }}
                  {% endif %}
                </div>
              </div>

              <div class=\"form-group row\">
                {{ ps.label_with_help(('Features'|trans({}, 'Admin.Global')), ('Choose \"No\" to disable Product Features.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(optionalFeaturesForm.features) }}
                  {{ form_widget(optionalFeaturesForm.features) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Customer groups'|trans), ('Choose \"No\" to disable Customer Groups.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(optionalFeaturesForm.customer_groups) }}
                  {{ form_widget(optionalFeaturesForm.customer_groups) }}
                </div>
              </div>
              {{ form_rest(optionalFeaturesForm) }}
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block perfs_form_ccc %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">zoom_out_map</i> {{ 'CCC (Combine, Compress and Cache)'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  {{ ps.infotip('CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.'|trans({}, 'Admin.Advparameters.Help')) }}
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Smart cache for CSS'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(combineCompressCacheForm.smart_cache_css) }}
                  {{ form_widget(combineCompressCacheForm.smart_cache_css) }}
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Smart cache for JavaScript'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(combineCompressCacheForm.smart_cache_js) }}
                  {{ form_widget(combineCompressCacheForm.smart_cache_js) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Apache optimization'|trans), ('This will add directives to your .htaccess file, which should improve caching and compression.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(combineCompressCacheForm.apache_optimization) }}
                  {{ form_widget(combineCompressCacheForm.apache_optimization) }}
                </div>
              </div>
              {{ form_rest(combineCompressCacheForm) }}
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block perfs_form_media_servers %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> {{ 'Media servers (use only with CCC)'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  {{ ps.infotip('You must enter another domain, or subdomain, in order to use cookieless static content.'|trans({}, 'Admin.Advparameters.Feature')) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Media server #1'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the second domain of your shop, (e.g. myshop-media-server-1.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(mediaServersForm.media_server_one) }}
                  {{ form_widget(mediaServersForm.media_server_one) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Media server #2'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the third domain of your shop, (e.g. myshop-media-server-2.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(mediaServersForm.media_server_two) }}
                  {{ form_widget(mediaServersForm.media_server_two) }}
                </div>
              </div>
              <div class=\"form-group row\">
                {{ ps.label_with_help(('Media server #3'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the fourth domain of your shop, (e.g. myshop-media-server-3.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                <div class=\"col-sm\">
                  {{ form_errors(mediaServersForm.media_server_three) }}
                  {{ form_widget(mediaServersForm.media_server_three) }}
                </div>
              </div>
              {{ form_rest(mediaServersForm) }}
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block perfs_form_caching %}
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> {{ 'Caching'|trans }}
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">{{ 'Use cache'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(cachingForm.use_cache) }}
                  {{ form_widget(cachingForm.use_cache) }}
                </div>
              </div>
              <div class=\"form-group row memcache\" id=\"caching_systems\">
                <label class=\"form-control-label\">{{ 'Caching system'|trans }}</label>
                <div class=\"col-sm\">
                  {{ form_errors(cachingForm.caching_system) }}
                  {{ form_widget(cachingForm.caching_system) }}
                </div>
              </div>
              {{ form_rest(cachingForm) }}
              {{ include('@AdvancedParameters/memcache_servers.html.twig', {'form': memcacheForm}) }}
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}
  </div>
  {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePage.js') }}\"></script>
  <script>
    var configuration = {
      'addServerUrl': '{{ url('admin_servers_add')|e('js') }}',
      'removeServerUrl': '{{ url('admin_servers_delete')|e('js') }}',
      'testServerUrl': '{{ url('admin_servers_test')|e('js') }}'
    };
    var app = new PerformancePage(
      configuration.addServerUrl,
      configuration.removeServerUrl,
      configuration.testServerUrl
    );

    window.addEventListener('load', function() {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePageUI.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
