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

/* partials/sidebar_content.html.twig */
class __TwigTemplate_2c038f314f43995927b7055539a9005487e55dc7951f67a235f8b701bda4c66f extends \Twig\Template
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
        echo "<div class=\"4u 12u(narrower)\">
    <div class=\"sidebar\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar_modules", []));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 4
            echo "            <section>
                ";
            // line 5
            if ($this->getAttribute($context["module"], "featured_image", [])) {
                // line 6
                echo "                    <a href=\"#\" class=\"image featured\"><img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["module"], "featured_image", []), [], "array"), "url", []);
                echo "\" alt=\"\" /></a>
                ";
            }
            // line 8
            echo "                <header>
                    <h3>";
            // line 9
            echo $this->getAttribute($context["module"], "title", []);
            echo "</h3>
                </header>
                <p>";
            // line 11
            echo $this->getAttribute($context["module"], "content", []);
            echo "</p>
                ";
            // line 12
            if ($this->getAttribute($context["module"], "buttons", [])) {
                // line 13
                echo "                    <footer>
                        <ul class=\"buttons\">
                            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "buttons", []));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 16
                    echo "                                <li><a href=\"";
                    echo $this->getAttribute($context["button"], "url", []);
                    echo "\" class=\"button small\">";
                    echo $this->getAttribute($context["button"], "text", []);
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                        </ul>
                    </footer>
                ";
            }
            // line 21
            echo "            </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  87 => 21,  82 => 18,  71 => 16,  67 => 15,  63 => 13,  61 => 12,  57 => 11,  52 => 9,  49 => 8,  43 => 6,  41 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"4u 12u(narrower)\">
    <div class=\"sidebar\">
        {% for module in page.header.sidebar_modules %}
            <section>
                {% if module.featured_image %}
                    <a href=\"#\" class=\"image featured\"><img src=\"{{ page.media[module.featured_image].url }}\" alt=\"\" /></a>
                {% endif %}
                <header>
                    <h3>{{ module.title }}</h3>
                </header>
                <p>{{ module.content }}</p>
                {% if module.buttons %}
                    <footer>
                        <ul class=\"buttons\">
                            {% for button in module.buttons %}
                                <li><a href=\"{{ button.url }}\" class=\"button small\">{{ button.text }}</a></li>
                            {% endfor %}
                        </ul>
                    </footer>
                {% endif %}
            </section>
        {% endfor %} 
    </div>
</div>", "partials/sidebar_content.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/partials/sidebar_content.html.twig");
    }
}
