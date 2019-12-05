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

/* modular/icons.html.twig */
class __TwigTemplate_de36dfb77a3c5e3ba33cfe84a59ef8b0711853063b32dbb22bc3416119471e63 extends \Twig\Template
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
        echo "<section class=\"wrapper style2 container special-alt\">
    <div class=\"row 50%\">
        <div class=\"8u 12u(narrower)\">
            <header>
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
            </header>
            ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
            <footer>
                <ul class=\"buttons\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 11
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\" class=\"button\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
            </footer>
        </div>
        <div class=\"4u 12u(narrower) important(narrower)\">
            <ul class=\"featured-icons\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "icons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["icons"]) {
            // line 19
            echo "                    <li><span class=\"icon fa-";
            echo $this->getAttribute($context["icons"], "icon", []);
            echo "\"><span class=\"label\">";
            echo $this->getAttribute($context["icons"], "label", []);
            echo "</span></span></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  73 => 19,  69 => 18,  62 => 13,  51 => 11,  47 => 10,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"wrapper style2 container special-alt\">
    <div class=\"row 50%\">
        <div class=\"8u 12u(narrower)\">
            <header>
                <h2>{{ page.header.title }}</h2>
            </header>
            {{ content }}
            <footer>
                <ul class=\"buttons\">
                    {% for button in page.header.buttons %}
                        <li><a href=\"{{ button.url }}\" class=\"button\">{{ button.text }}</a></li>
                    {% endfor %}
                </ul>
            </footer>
        </div>
        <div class=\"4u 12u(narrower) important(narrower)\">
            <ul class=\"featured-icons\">
                {% for icons in page.header.icons %}
                    <li><span class=\"icon fa-{{ icons.icon }}\"><span class=\"label\">{{ icons.label }}</span></span></li>
                {% endfor %}
            </ul>
        </div>
    </div>
</section>", "modular/icons.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/modular/icons.html.twig");
    }
}
