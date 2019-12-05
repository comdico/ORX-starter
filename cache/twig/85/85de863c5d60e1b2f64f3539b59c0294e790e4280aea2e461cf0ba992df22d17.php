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

/* error.html.twig */
class __TwigTemplate_f7b0fa31aa4af7a291bea0ad3ce80dcb21fa12b4a75da4be973217bd7354d5b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<article id=\"main\">
    <header class=\"special container\">
        <span class=\"icon fa-exclamation-triangle\"></span>
        <h2>Error ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h2>
        <p>";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
    </header>
</article>
";
    }

    // line 11
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  52 => 7,  48 => 6,  43 => 3,  40 => 2,  30 => 1,);
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
{% block content %}
<article id=\"main\">
    <header class=\"special container\">
        <span class=\"icon fa-exclamation-triangle\"></span>
        <h2>Error {{ page.header.http_response_code }}</h2>
        <p>{{ page.content }}</p>
    </header>
</article>
{% endblock %}
{% block footer %}{% endblock %}
", "error.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/error.html.twig");
    }
}
