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

/* partials/base.html.twig */
class __TwigTemplate_eeef5147aac3c3533b128800573e3991d79df355a6ee86f79e4e82db73b0375d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "    </head>
    <body class=\"";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_class", []);
        echo "\">

        ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        
        ";
        // line 56
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        // line 57
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 

    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('assets', $context, $blocks);
        // line 24
        echo "    ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 12
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/main.css"], "method");
        // line 13
        echo "                ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            // line 14
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/ie8.css"], "method");
            // line 15
            echo "                ";
        }
        // line 16
        echo "                ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 9))) {
            // line 17
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/ie9.css"], "method");
            // line 18
            echo "                ";
        }
        // line 19
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 21
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 28
    public function block_header($context, array $blocks = [])
    {
        // line 29
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 29)->display($context);
        // line 30
        echo "        ";
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        // line 33
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "        ";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
    }

    // line 36
    public function block_footer($context, array $blocks = [])
    {
        // line 37
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 37)->display($context);
        // line 38
        echo "        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        // line 41
        echo "            ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            // line 42
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/ie/html5shiv.js"], "method");
            // line 43
            echo "            ";
        }
        // line 44
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 45
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.dropotron.min.js"], "method");
        // line 46
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.scrolly.min.js"], "method");
        // line 47
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.scrollgress.min.js"], "method");
        // line 48
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/skel.min.js"], "method");
        // line 49
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/util.js"], "method");
        // line 50
        echo "            ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            // line 51
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/ie/respond.min.js"], "method");
            // line 52
            echo "            ";
        }
        // line 53
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/main.js"], "method");
        // line 54
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 54,  243 => 53,  240 => 52,  237 => 51,  234 => 50,  231 => 49,  228 => 48,  225 => 47,  222 => 46,  219 => 45,  216 => 44,  213 => 43,  210 => 42,  207 => 41,  204 => 40,  200 => 38,  197 => 37,  194 => 36,  189 => 33,  185 => 34,  182 => 33,  179 => 32,  175 => 30,  172 => 29,  169 => 28,  161 => 22,  158 => 21,  149 => 19,  146 => 18,  143 => 17,  140 => 16,  137 => 15,  134 => 14,  131 => 13,  128 => 12,  125 => 11,  121 => 24,  119 => 21,  116 => 20,  114 => 11,  109 => 9,  106 => 8,  104 => 7,  96 => 6,  93 => 5,  90 => 4,  80 => 57,  76 => 56,  73 => 55,  71 => 40,  68 => 39,  66 => 36,  63 => 35,  61 => 32,  58 => 31,  56 => 28,  51 => 26,  48 => 25,  46 => 4,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

        {% block stylesheets %}
                {% do assets.addCss('theme://assets/css/main.css') %}
                {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
                    {% do assets.addCss('theme://assets/css/ie8.css') %}
                {% endif %}
                {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}
                    {% do assets.addCss('theme://assets/css/ie9.css') %}
                {% endif %}
        {% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
        {% endblock %}
    {% endblock head%}
    </head>
    <body class=\"{{ page.header.body_class }}\">

        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block javascripts %}
            {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
                 {% do assets.addJs('theme://assets/js/ie/html5shiv.js') %}
            {% endif %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/jquery.dropotron.min.js') %}
            {% do assets.addJs('theme://assets/js/jquery.scrolly.min.js') %}
            {% do assets.addJs('theme://assets/js/jquery.scrollgress.min.js') %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
                 {% do assets.addJs('theme://assets/js/ie/respond.min.js') %}
            {% endif %}
            {% do assets.addJs('theme://assets/js/main.js') %}
        {% endblock %}
        
        {{ assets.js()|raw }}
        {{ assets.js('bottom')|raw }} 

    </body>
</html>
", "partials/base.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/partials/base.html.twig");
    }
}
