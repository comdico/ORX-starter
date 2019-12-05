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

/* modular/bottom.html.twig */
class __TwigTemplate_73af6bc0f0d68137cba9bb8d8797255a9f72caded252267213acb3543cccfc2d extends \Twig\Template
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
        echo "<section id=\"cta\">
    <header>
        <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
        ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
    </header>
    <footer>
        <ul class=\"buttons\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 9
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\" class=\"button ";
            if ($this->getAttribute($context["button"], "class", [])) {
                echo $this->getAttribute($context["button"], "class", []);
            }
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  49 => 9,  45 => 8,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"cta\">
    <header>
        <h2>{{page.header.title}}</h2>
        {{ content }}
    </header>
    <footer>
        <ul class=\"buttons\">
            {% for button in page.header.buttons %}
                <li><a href=\"{{ button.url }}\" class=\"button {% if button.class %}{{ button.class }}{% endif %}\">{{ button.text }}</a></li>
            {% endfor %}
        </ul>
    </footer>
</section>", "modular/bottom.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/modular/bottom.html.twig");
    }
}
