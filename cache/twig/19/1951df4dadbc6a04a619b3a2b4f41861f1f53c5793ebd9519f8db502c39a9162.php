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

/* modular/sidebar.html.twig */
class __TwigTemplate_d7465a1e67e7e02353fd00d1732b4378ddde812a3862452cb768481a6378b61c extends \Twig\Template
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
        // line 1
        echo "<section class=\"wrapper style4 container\">
    ";
        // line 2
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
            // line 3
            echo "        <div class=\"row 150%\">
        ";
        }
        // line 4
        echo "     
        ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) == "left")) {
            // line 6
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
                // line 7
                echo "                ";
                $this->loadTemplate("partials/sidebar_content.html.twig", "modular/sidebar.html.twig", 7)->display($context);
                // line 8
                echo "            ";
            }
            // line 9
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
                // line 10
                echo "                <div class=\"8u 12u(narrower) important(narrower)\">
            ";
            }
            // line 11
            echo "    
                ";
            // line 12
            $this->loadTemplate("partials/sidebar_article.html.twig", "modular/sidebar.html.twig", 12)->display($context);
            // line 13
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
                // line 14
                echo "                </div>
            ";
            }
            // line 16
            echo "        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) == "right") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) == "none"))) {
            // line 19
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
                // line 20
                echo "                <div class=\"8u 12u(narrower)\">
            ";
            }
            // line 21
            echo "     
                ";
            // line 22
            $this->loadTemplate("partials/sidebar_article.html.twig", "modular/sidebar.html.twig", 22)->display($context);
            // line 23
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
                // line 24
                echo "                </div>
            ";
            }
            // line 26
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
                // line 27
                echo "                ";
                $this->loadTemplate("partials/sidebar_content.html.twig", "modular/sidebar.html.twig", 27)->display($context);
                // line 28
                echo "            ";
            }
            // line 29
            echo "        ";
        }
        // line 30
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_position", []) != "none")) {
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "modular/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  95 => 24,  92 => 23,  90 => 22,  87 => 21,  83 => 20,  80 => 19,  78 => 18,  75 => 17,  72 => 16,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"wrapper style4 container\">
    {% if page.header.sidebar_position != 'none' %}
        <div class=\"row 150%\">
        {% endif %}     
        {% if page.header.sidebar_position == 'left' %}
            {% if page.header.sidebar_position != 'none' %}
                {% include 'partials/sidebar_content.html.twig' %}
            {% endif %}
            {% if page.header.sidebar_position != 'none' %}
                <div class=\"8u 12u(narrower) important(narrower)\">
            {% endif %}    
                {% include 'partials/sidebar_article.html.twig' %}
            {% if page.header.sidebar_position != 'none' %}
                </div>
            {% endif %}
        {% endif %}

        {% if page.header.sidebar_position == 'right' or page.header.sidebar_position == 'none' %}
            {% if page.header.sidebar_position != 'none' %}
                <div class=\"8u 12u(narrower)\">
            {% endif %}     
                {% include 'partials/sidebar_article.html.twig' %}
            {% if page.header.sidebar_position != 'none' %}
                </div>
            {% endif %}
            {% if page.header.sidebar_position != 'none' %}
                {% include 'partials/sidebar_content.html.twig' %}
            {% endif %}
        {% endif %}
        {% if page.header.sidebar_position != 'none' %}
        </div>
    {% endif %}
</section>", "modular/sidebar.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/modular/sidebar.html.twig");
    }
}
