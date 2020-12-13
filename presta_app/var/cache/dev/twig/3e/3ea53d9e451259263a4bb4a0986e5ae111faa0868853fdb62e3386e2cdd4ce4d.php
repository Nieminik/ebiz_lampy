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

/* @AdvancedParameters/memcache_servers.html.twig */
class __TwigTemplate_0298f111c6109a3dac43d26e9a8e068d6917608543ded97bd24ace24a36bf688 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'perfs_memcache_servers' => [$this, 'block_perfs_memcache_servers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('perfs_memcache_servers', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_perfs_memcache_servers($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        // line 28
        echo "<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    <div class=\"form-group row\">
        <label class=\"form-control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP Address", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
        <div class=\"col-sm\">
          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "memcache_ip", []), 'errors');
        echo "
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "memcache_ip", []), 'widget');
        echo "
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
        <div class=\"col-sm\">
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "memcache_port", []), 'errors');
        echo "
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "memcache_port", []), 'widget');
        echo "
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
        <div class=\"col-sm\">
          ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "memcache_weight", []), 'errors');
        echo "
          ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "memcache_weight", []), 'widget');
        echo "
        </div>
    </div>

    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Test Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</span></th>
                <th><span class=\"title_box\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP Address", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servers"]) ? $context["servers"] : $this->getContext($context, "servers")));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 87
            echo "                <tr id=\"row_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "id_memcached_server", []), "html", null, true);
            echo "\">
                    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "id_memcached_server", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "ip", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "port", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "weight", []), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 93
            $context["removeMsg"] = twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you really want to remove the server %serverIp%:%serverPort% ?", ["%serverIp%" => $this->getAttribute($context["server"], "ip", []), "%serverPort%" => $this->getAttribute($context["server"], "port", [])], "Admin.Advparameters.Notification"));
            // line 94
            echo "                        <a class=\"btn btn-default\" href=\"\" onclick=\"app.removeServer(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "id_memcached_server", []), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["removeMsg"]) ? $context["removeMsg"] : $this->getContext($context, "removeMsg")), "html", null, true);
            echo ");\"><i class=\"material-icons\">remove_circle</i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", [], "Admin.Actions"), "html", null, true);
            echo "</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/memcache_servers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 98,  197 => 94,  195 => 93,  190 => 91,  186 => 90,  182 => 89,  178 => 88,  173 => 87,  169 => 86,  161 => 81,  157 => 80,  153 => 79,  149 => 78,  136 => 68,  132 => 67,  125 => 63,  118 => 59,  114 => 58,  109 => 56,  101 => 51,  97 => 50,  92 => 48,  84 => 43,  80 => 42,  75 => 40,  67 => 35,  58 => 28,  40 => 27,  37 => 26,);
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
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block perfs_memcache_servers %}
<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> {{ 'Add server'|trans }}</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    <div class=\"form-group row\">
        <label class=\"form-control-label\">{{ 'IP Address'|trans }}</label>
        <div class=\"col-sm\">
          {{ form_errors(form.memcache_ip) }}
          {{ form_widget(form.memcache_ip) }}
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">{{ 'Port'|trans }}</label>
        <div class=\"col-sm\">
          {{ form_errors(form.memcache_port) }}
          {{ form_widget(form.memcache_port) }}
        </div>
    </div>

    <div class=\"form-group row\">
        <label class=\"form-control-label\">{{ 'Weight'|trans }}</label>
        <div class=\"col-sm\">
          {{ form_errors(form.memcache_weight) }}
          {{ form_widget(form.memcache_weight) }}
        </div>
    </div>

    {{ form_rest(form) }}

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">{{ 'Add Server'|trans }}</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">{{ 'Test Server'|trans }}</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'ID'|trans({}, 'Admin.Global') }}</span></th>
                <th><span class=\"title_box\">{{ 'IP Address'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Port'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Weight'|trans }}</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for server in servers %}
                <tr id=\"row_{{ server.id_memcached_server }}\">
                    <td>{{ server.id_memcached_server }}</td>
                    <td>{{ server.ip }}</td>
                    <td>{{ server.port }}</td>
                    <td>{{ server.weight }}</td>
                    <td>
                        {% set removeMsg = 'Do you really want to remove the server %serverIp%:%serverPort% ?'|trans({'%serverIp%': server.ip, '%serverPort%': server.port}, 'Admin.Advparameters.Notification')|json_encode|raw  %}
                        <a class=\"btn btn-default\" href=\"\" onclick=\"app.removeServer({{ server.id_memcached_server }}, {{ removeMsg }});\"><i class=\"material-icons\">remove_circle</i> {{ 'Remove'|trans({}, 'Admin.Actions') }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "@AdvancedParameters/memcache_servers.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/memcache_servers.html.twig");
    }
}
