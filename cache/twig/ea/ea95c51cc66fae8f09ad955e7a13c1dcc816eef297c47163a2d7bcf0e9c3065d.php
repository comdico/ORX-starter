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

/* partials/sidebar_article.html.twig */
class __TwigTemplate_78f55226dd4ec76a71167efdb44bedf01b50c1577ffb0ce8fe1ee8c2ec87e45d extends \Twig\Template
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
        echo "<div class=\"content\">
    <section>
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "featured_image", [])) {
            // line 4
            echo "            <a href=\"#\" class=\"image featured\"><img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "featured_image", []), [], "array"), "url", []);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 6
        echo "        <header>
            <h3>";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h3>
        </header>
        ";
        // line 9
        echo ($context["content"] ?? null);
        echo "
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  45 => 7,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content\">
    <section>
        {% if page.header.featured_image %}
            <a href=\"#\" class=\"image featured\"><img src=\"{{ page.media[page.header.featured_image].url }}\" alt=\"\" /></a>
        {% endif %}
        <header>
            <h3>{{ page.header.title }}</h3>
        </header>
        {{ content }}
    </section>
</div>", "partials/sidebar_article.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/partials/sidebar_article.html.twig");
    }
}
