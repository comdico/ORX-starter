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

/* modular/portfolio.html.twig */
class __TwigTemplate_5b8ab6a763360bf996b17874ef93fc0259535dd9e1da03406a982a6533d7600c extends \Twig\Template
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
        echo "<section class=\"wrapper style3 container special\">

    <header class=\"major\">
        <h2>";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
    </header>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "        <div class=\"row\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "                <div class=\"6u 12u(narrower)\">
                    <section>
                        <a href=\"";
                // line 12
                echo $this->getAttribute($context["item"], "image_link", []);
                echo "\" class=\"image featured\"><img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array"), "url", []);
                echo "\" alt=\"\" /></a>
                        <header>
                            <h3>";
                // line 14
                echo $this->getAttribute($context["item"], "title", []);
                echo "</h3>
                        </header>
                        <p>";
                // line 16
                echo $this->getAttribute($context["item"], "text", []);
                echo "</p>
                    </section>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <footer class=\"major\">
        <ul class=\"buttons\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 26
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\" class=\"button\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </ul>
    </footer>

</section>    ";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  94 => 26,  90 => 25,  85 => 22,  78 => 20,  68 => 16,  63 => 14,  56 => 12,  52 => 10,  48 => 9,  45 => 8,  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"wrapper style3 container special\">

    <header class=\"major\">
        <h2>{{ page.header.title }}</h2>
    </header>

    {% for row in page.header.portfolio|batch(2) %}
        <div class=\"row\">
            {% for item in row %}
                <div class=\"6u 12u(narrower)\">
                    <section>
                        <a href=\"{{ item.image_link }}\" class=\"image featured\"><img src=\"{{ page.media[item.image].url }}\" alt=\"\" /></a>
                        <header>
                            <h3>{{ item.title }}</h3>
                        </header>
                        <p>{{ item.text }}</p>
                    </section>
                </div>
            {% endfor %}
        </div>
    {% endfor %}

    <footer class=\"major\">
        <ul class=\"buttons\">
            {% for button in page.header.buttons %}
                <li><a href=\"{{ button.url }}\" class=\"button\">{{ button.text }}</a></li>
            {% endfor %}
        </ul>
    </footer>

</section>    ", "modular/portfolio.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/modular/portfolio.html.twig");
    }
}
