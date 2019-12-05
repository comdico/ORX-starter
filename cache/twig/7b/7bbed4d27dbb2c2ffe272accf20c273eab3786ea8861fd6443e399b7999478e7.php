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

/* modular.html.twig */
class __TwigTemplate_41931f10459dd762bd7fc525c0198fcc9e0e674e8447b03aa79c4e10abe6b73d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 10
            echo "        ";
            if (($this->getAttribute($context["module"], "menu", []) == "before_article")) {
                // line 11
                echo "            ";
                echo $this->getAttribute($context["module"], "content", []);
                echo "
        ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <article id=\"main\">
        
        ";
        // line 16
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "icon", []))) {
            // line 17
            echo "            <header class=\"special container\">
                <span class=\"icon fa-";
            // line 18
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "icon", []);
            echo "\"></span>
                <h2>";
            // line 19
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
            echo "</h2>
                <p>";
            // line 20
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
            echo "</p>
            </header>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 25
            echo "            ";
            if ((($this->getAttribute($context["module"], "menu", []) != "before_article") && ($this->getAttribute($context["module"], "menu", []) != "after_article"))) {
                // line 26
                echo "                ";
                echo $this->getAttribute($context["module"], "content", []);
                echo "
            ";
            }
            // line 28
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </article>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 31
            echo "        ";
            if (($this->getAttribute($context["module"], "menu", []) == "after_article")) {
                // line 32
                echo "            ";
                echo $this->getAttribute($context["module"], "content", []);
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 4,  130 => 34,  124 => 32,  121 => 31,  117 => 30,  114 => 29,  108 => 28,  102 => 26,  99 => 25,  95 => 24,  92 => 23,  86 => 20,  82 => 19,  78 => 18,  75 => 17,  73 => 16,  69 => 14,  63 => 13,  57 => 11,  54 => 10,  50 => 9,  45 => 8,  42 => 7,  37 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}


{% block content %}
    {{ page.content }}
    {% for module in page.collection() %}
        {% if module.menu == 'before_article' %}
            {{ module.content }}
        {% endif %}
    {% endfor %}
    <article id=\"main\">
        
        {% if page.header.subtitle or page.header.description or page.header.icon %}
            <header class=\"special container\">
                <span class=\"icon fa-{{ page.header.icon }}\"></span>
                <h2>{{ page.header.subtitle }}</h2>
                <p>{{ page.header.description }}</p>
            </header>
        {% endif %}

        {% for module in page.collection() %}
            {% if module.menu != 'before_article' and module.menu != 'after_article' %}
                {{ module.content }}
            {% endif %}
        {% endfor %}
    </article>
    {% for module in page.collection() %}
        {% if module.menu == 'after_article' %}
            {{ module.content }}
        {% endif %}
    {% endfor %}
{% endblock %}
", "modular.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/modular.html.twig");
    }
}
