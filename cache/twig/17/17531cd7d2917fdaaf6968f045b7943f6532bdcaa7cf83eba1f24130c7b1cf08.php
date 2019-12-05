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

/* forms/default/form.html.twig */
class __TwigTemplate_7c778ca0b1945eaae650427d8635b5cee8debc9205ebf09370215b160ce100d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["blueprints"] = (($context["blueprints"]) ?? ($this->getAttribute(($context["form"] ?? null), "blueprint", [], "method")));
        // line 10
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 11
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", []), true)) : (true))));
        // line 12
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 13
        echo "
";
        // line 14
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", [])));
        // line 15
        $context["context"] = (($context["context"]) ?? (($context["data"] ?? null)));
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 19
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 20
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 23
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", [])) ? ($this->getAttribute(($context["form"] ?? null), "action", [])) : (($this->getAttribute(($context["page"] ?? null), "route", []) . $this->getAttribute(($context["uri"] ?? null), "params", []))));
        // line 24
        $context["action"] = (((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["action"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 25
        echo "
";
        // line 26
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 27
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 29
        echo "
";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            // line 31
            echo "    ";
            if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "browser", []) == "msie") && ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "version", []) < 12))) {
                // line 32
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/object.assign.polyfill.js"], "method");
                // line 33
                echo "    ";
            }
            // line 34
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
            // line 35
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        }
        // line 37
        echo "
";
        // line 38
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute(        // line 41
($context["uri"] ?? null), "route", [0 => true], "method")) . "',
        base_url_relative: '") .         // line 42
($context["base_url_relative"] ?? null)) . "',
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 43
($context["config"] ?? null), "system", []), "param_sep", [])) . "',
        form_nonce: '") . $this->getAttribute(        // line 44
($context["form"] ?? null), "getNonce", [], "method")) . "',
        session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 45
($context["config"] ?? null), "system", []), "session", []), "timeout", [])) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => ["group" => "bottom", "position" => "before"]], "method");
        // line 49
        echo "
";
        // line 51
        ob_start();
        // line 52
        echo "  ";
        $this->displayBlock('form_classes', $context, $blocks);
        $context["override_form_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
";
        // line 57
        ob_start();
        // line 58
        echo "  ";
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        $context["override_inner_markup_fields_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "  ";
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        $context["override_inner_markup_fields_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "
";
        // line 65
        ob_start();
        // line 66
        echo "  ";
        $this->displayBlock('inner_markup_fields', $context, $blocks);
        $context["override_inner_markup_fields"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
";
        // line 86
        ob_start();
        // line 87
        echo "  ";
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "
";
        // line 92
        ob_start();
        // line 93
        echo "  ";
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "
";
        // line 99
        $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 99, "1342217985")->display($context);
        // line 168
        echo "

";
        // line 170
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", []), "dropzone", []), "enabled", [])) {
            // line 171
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 172
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 172)->display($context);
            // line 173
            echo "</div>
";
        }
    }

    // line 52
    public function block_form_classes($context, array $blocks = [])
    {
        // line 53
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", []);
    }

    // line 58
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 62
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 66
    public function block_inner_markup_fields($context, array $blocks = [])
    {
        // line 67
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
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
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 68
            echo "      ";
            $context["field_name"] = ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["field_name"]));
            // line 69
            echo "      ";
            if (($context["field_name"] &&  !$this->getAttribute($this->getAttribute($context["field"], "validate", []), "ignore", []))) {
                // line 70
                if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["field_name"]) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ".") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
                    // line 71
                    $context["field_name"] = twig_slice($this->env, $context["field_name"], 1, null);
                    // line 72
                    echo "          ";
                    $context["field"] = twig_array_merge($context["field"], ["name" => $context["field_name"]]);
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "
        ";
                // line 75
                $context["value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $context["field_name"]], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $context["field_name"]], "method")));
                // line 76
                echo "        ";
                $this->displayBlock('inner_markup_field_open', $context, $blocks);
                // line 77
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 80
                echo "        ";
                $this->displayBlock('inner_markup_field_close', $context, $blocks);
                // line 81
                echo "      ";
            }
            // line 82
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "  ";
    }

    // line 76
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
    }

    // line 77
    public function block_field($context, array $blocks = [])
    {
        // line 78
        echo "          ";
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = null;
        try {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 =             $this->loadTemplate((((("forms/fields/" . $this->getAttribute(($context["field"] ?? null), "type", [])) . "/") . $this->getAttribute(($context["field"] ?? null), "type", [])) . ".html.twig"), "forms/default/form.html.twig", 78);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4->display($context);
        }
        // line 79
        echo "        ";
    }

    // line 80
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
    }

    // line 87
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 88
        echo "  <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 93
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 94
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 94,  354 => 93,  347 => 88,  344 => 87,  339 => 80,  335 => 79,  324 => 78,  321 => 77,  316 => 76,  312 => 83,  298 => 82,  295 => 81,  292 => 80,  289 => 77,  286 => 76,  284 => 75,  281 => 74,  278 => 73,  275 => 72,  273 => 71,  271 => 70,  268 => 69,  265 => 68,  247 => 67,  244 => 66,  239 => 62,  234 => 58,  228 => 53,  225 => 52,  219 => 173,  217 => 172,  214 => 171,  212 => 170,  208 => 168,  206 => 99,  203 => 97,  199 => 93,  197 => 92,  194 => 91,  190 => 87,  188 => 86,  185 => 85,  181 => 66,  179 => 65,  176 => 64,  172 => 62,  170 => 61,  167 => 60,  163 => 58,  161 => 57,  158 => 56,  154 => 52,  152 => 51,  149 => 49,  144 => 45,  142 => 44,  140 => 43,  138 => 42,  136 => 41,  132 => 38,  129 => 37,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  108 => 29,  104 => 27,  102 => 26,  99 => 25,  97 => 24,  95 => 23,  92 => 22,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ?: page.route ~ uri.params %}
{% set action = action starts with 'http' ? action : base_url ~ action %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before'}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action | trim('/', 'right') }}\"
    method=\"{{ method }}\"{{ multipart }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          type=\"{{ button.type|default('submit') }}\"
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/plugins/form/templates/forms/default/form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_7c778ca0b1945eaae650427d8635b5cee8debc9205ebf09370215b160ce100d1___1342217985 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 99
        return "forms/layouts/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/form.html.twig", "forms/default/form.html.twig", 99);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 101
    public function block_embed_form_core($context, array $blocks = [])
    {
        // line 102
        echo "    name=\"";
        echo $this->getAttribute(($context["form"] ?? null), "name", []);
        echo "\"
    action=\"";
        // line 103
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
    method=\"";
        // line 104
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
    ";
        // line 105
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", []);
            echo "\"";
        }
        // line 106
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        // line 107
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 108
        echo "  ";
    }

    // line 110
    public function block_embed_form_classes($context, array $blocks = [])
    {
        // line 111
        echo "class=\"";
        $this->displayParentBlock("embed_form_classes", $context, $blocks);
        echo " ";
        echo twig_trim_filter(($context["override_form_classes"] ?? null));
        echo "\"";
    }

    // line 114
    public function block_embed_fields($context, array $blocks = [])
    {
        // line 115
        echo "    ";
        echo ($context["override_inner_markup_fields_start"] ?? null);
        echo "
    ";
        // line 116
        echo ($context["override_inner_markup_fields"] ?? null);
        echo "

    ";
        // line 118
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 118)->display($context);
        // line 119
        echo "    ";
        $this->loadTemplate("forms/fields/formtask/formtask.html.twig", "forms/default/form.html.twig", 119)->display($context);
        // line 120
        echo "    ";
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 120)->display($context);
        // line 121
        echo "    ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc(((($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")) : ("form")), ((($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")) : ("form-nonce")));
        echo "

    ";
        // line 123
        echo ($context["override_inner_markup_fields_end"] ?? null);
        echo "
  ";
    }

    // line 126
    public function block_embed_buttons($context, array $blocks = [])
    {
        // line 127
        echo "    ";
        echo ($context["override_inner_markup_buttons_start"] ?? null);
        echo "

    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 130
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "<div class=\"";
                echo $this->getAttribute($context["button"], "outerclasses", []);
                echo "\">";
            }
            // line 131
            echo "
      ";
            // line 132
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 133
                echo "      ";
                $context["button_url"] = (((is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = "http") && ('' === $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e || 0 === strpos($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666, $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e)))) ? ($this->getAttribute($context["button"], "url", [])) : ((($context["base_url"] ?? null) . $this->getAttribute($context["button"], "url", []))));
                // line 134
                echo "      ";
            }
            // line 135
            echo "
      ";
            // line 136
            $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 136, "373491441")->display($context);
            // line 160
            echo "
      ";
            // line 161
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "</div>";
            }
            // line 162
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
    ";
        // line 164
        echo ($context["override_inner_markup_buttons_end"] ?? null);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 164,  745 => 163,  731 => 162,  727 => 161,  724 => 160,  722 => 136,  719 => 135,  716 => 134,  713 => 133,  711 => 132,  708 => 131,  701 => 130,  684 => 129,  678 => 127,  675 => 126,  669 => 123,  663 => 121,  660 => 120,  657 => 119,  655 => 118,  650 => 116,  645 => 115,  642 => 114,  634 => 111,  631 => 110,  627 => 108,  622 => 107,  617 => 106,  611 => 105,  605 => 104,  601 => 103,  596 => 102,  593 => 101,  583 => 99,  357 => 94,  354 => 93,  347 => 88,  344 => 87,  339 => 80,  335 => 79,  324 => 78,  321 => 77,  316 => 76,  312 => 83,  298 => 82,  295 => 81,  292 => 80,  289 => 77,  286 => 76,  284 => 75,  281 => 74,  278 => 73,  275 => 72,  273 => 71,  271 => 70,  268 => 69,  265 => 68,  247 => 67,  244 => 66,  239 => 62,  234 => 58,  228 => 53,  225 => 52,  219 => 173,  217 => 172,  214 => 171,  212 => 170,  208 => 168,  206 => 99,  203 => 97,  199 => 93,  197 => 92,  194 => 91,  190 => 87,  188 => 86,  185 => 85,  181 => 66,  179 => 65,  176 => 64,  172 => 62,  170 => 61,  167 => 60,  163 => 58,  161 => 57,  158 => 56,  154 => 52,  152 => 51,  149 => 49,  144 => 45,  142 => 44,  140 => 43,  138 => 42,  136 => 41,  132 => 38,  129 => 37,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  108 => 29,  104 => 27,  102 => 26,  99 => 25,  97 => 24,  95 => 23,  92 => 22,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ?: page.route ~ uri.params %}
{% set action = action starts with 'http' ? action : base_url ~ action %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before'}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action | trim('/', 'right') }}\"
    method=\"{{ method }}\"{{ multipart }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          type=\"{{ button.type|default('submit') }}\"
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/plugins/form/templates/forms/default/form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_7c778ca0b1945eaae650427d8635b5cee8debc9205ebf09370215b160ce100d1___373491441 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 136
        return "forms/layouts/button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/button.html.twig", "forms/default/form.html.twig", 136);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 137
    public function block_embed_button_core($context, array $blocks = [])
    {
        // line 138
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["button"] ?? null), "id", []);
            echo "\"";
        }
        // line 139
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 140
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "task", [])) {
            echo "name=\"task\" value=\"";
            echo $this->getAttribute(($context["button"] ?? null), "task", []);
            echo "\"";
        }
        // line 141
        echo "          type=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "type", []), "submit")) : ("submit"));
        echo "\"
        ";
    }

    // line 144
    public function block_embed_button_classes($context, array $blocks = [])
    {
        // line 145
        echo "          ";
        $this->displayBlock('button_classes', $context, $blocks);
        // line 148
        echo "        ";
    }

    // line 145
    public function block_button_classes($context, array $blocks = [])
    {
        // line 146
        echo "            class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", []);
        echo "\"
          ";
    }

    // line 150
    public function block_embed_button_content($context, array $blocks = [])
    {
        // line 151
        $context["button_value"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["button"] ?? null), "value", [])), "Submit");
        // line 152
        if ($this->getAttribute(($context["button"] ?? null), "html", [])) {
            // line 153
            echo twig_trim_filter(($context["button_value"] ?? null));
        } else {
            // line 155
            echo twig_escape_filter($this->env, twig_trim_filter(($context["button_value"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1046 => 155,  1043 => 153,  1041 => 152,  1039 => 151,  1036 => 150,  1027 => 146,  1024 => 145,  1020 => 148,  1017 => 145,  1014 => 144,  1007 => 141,  1000 => 140,  995 => 139,  988 => 138,  985 => 137,  975 => 136,  748 => 164,  745 => 163,  731 => 162,  727 => 161,  724 => 160,  722 => 136,  719 => 135,  716 => 134,  713 => 133,  711 => 132,  708 => 131,  701 => 130,  684 => 129,  678 => 127,  675 => 126,  669 => 123,  663 => 121,  660 => 120,  657 => 119,  655 => 118,  650 => 116,  645 => 115,  642 => 114,  634 => 111,  631 => 110,  627 => 108,  622 => 107,  617 => 106,  611 => 105,  605 => 104,  601 => 103,  596 => 102,  593 => 101,  583 => 99,  357 => 94,  354 => 93,  347 => 88,  344 => 87,  339 => 80,  335 => 79,  324 => 78,  321 => 77,  316 => 76,  312 => 83,  298 => 82,  295 => 81,  292 => 80,  289 => 77,  286 => 76,  284 => 75,  281 => 74,  278 => 73,  275 => 72,  273 => 71,  271 => 70,  268 => 69,  265 => 68,  247 => 67,  244 => 66,  239 => 62,  234 => 58,  228 => 53,  225 => 52,  219 => 173,  217 => 172,  214 => 171,  212 => 170,  208 => 168,  206 => 99,  203 => 97,  199 => 93,  197 => 92,  194 => 91,  190 => 87,  188 => 86,  185 => 85,  181 => 66,  179 => 65,  176 => 64,  172 => 62,  170 => 61,  167 => 60,  163 => 58,  161 => 57,  158 => 56,  154 => 52,  152 => 51,  149 => 49,  144 => 45,  142 => 44,  140 => 43,  138 => 42,  136 => 41,  132 => 38,  129 => 37,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  108 => 29,  104 => 27,  102 => 26,  99 => 25,  97 => 24,  95 => 23,  92 => 22,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ?: page.route ~ uri.params %}
{% set action = action starts with 'http' ? action : base_url ~ action %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before'}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action | trim('/', 'right') }}\"
    method=\"{{ method }}\"{{ multipart }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          type=\"{{ button.type|default('submit') }}\"
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/plugins/form/templates/forms/default/form.html.twig");
    }
}
