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

/* form.html.twig */
class __TwigTemplate_965ba6649cf95da45d2c5425a657004a459778849dd5e0108ce41d09cc50961b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<article id=\"main\">
  <header class=\"special container\">
    <span class=\"icon fa-";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "icon", []);
        echo "\"></span>
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
    <p>";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "</p>
  </header>
  <section class=\"wrapper style4 special container 75%\">
    <div class=\"content\">
      ";
        // line 11
        echo ($context["content"] ?? null);
        echo "
      ";
        // line 12
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
  </section>
</article>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  65 => 12,  61 => 11,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  39 => 2,  29 => 1,);
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
    <span class=\"icon fa-{{ page.header.icon }}\"></span>
    <h2>{{ page.header.title }}</h2>
    <p>{{ page.header.description }}</p>
  </header>
  <section class=\"wrapper style4 special container 75%\">
    <div class=\"content\">
      {{ content }}
      {% include \"forms/form.html.twig\" %}
    </div>
  </section>
</article>
{% endblock %}
", "form.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/form.html.twig");
    }
}
