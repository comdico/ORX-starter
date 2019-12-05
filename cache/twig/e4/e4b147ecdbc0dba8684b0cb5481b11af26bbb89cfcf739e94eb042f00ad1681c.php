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

/* modular/banner.html.twig */
class __TwigTemplate_4c12c05b2e10fa6ca25cfe94535f8fea245e2f410420bcd814d172681304af22 extends \Twig\Template
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
        echo "<section id=\"banner\">
    <div class=\"inner\">
        <header>
            <h2>";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
        </header>
        ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
        <footer>
            <ul class=\"buttons vertical\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 10
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\" class=\"button fit scrolly\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </ul>
        </footer>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  50 => 10,  46 => 9,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"banner\">
    <div class=\"inner\">
        <header>
            <h2>{{ page.header.title }}</h2>
        </header>
        {{ content }}
        <footer>
            <ul class=\"buttons vertical\">
                {% for button in page.header.buttons %}
                    <li><a href=\"{{ button.url }}\" class=\"button fit scrolly\">{{ button.text }}</a></li>
                {% endfor %}
            </ul>
        </footer>
    </div>
</section>", "modular/banner.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/modular/banner.html.twig");
    }
}
