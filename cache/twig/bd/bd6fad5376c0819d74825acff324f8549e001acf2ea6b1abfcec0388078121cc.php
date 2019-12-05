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

/* forms/form.html.twig */
class __TwigTemplate_9d92a0a4ee030c2eff93cc421792b9eea29182489a541a5d0decc47ff10ecbfa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
            'button_classes' => [$this, 'block_button_classes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"row 50%\">
";
    }

    // line 7
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
        // line 8
        echo "</div>
";
    }

    // line 11
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 12
        echo "<div class=\"row\">
    <div class=\"12u\">
";
    }

    // line 16
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 17
        echo "  </div>
</div>
";
    }

    // line 21
    public function block_button_classes($context, array $blocks = [])
    {
        // line 22
        echo "  class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", []), "button")) : ("button"));
        echo " button special\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  77 => 21,  71 => 17,  68 => 16,  62 => 12,  59 => 11,  54 => 8,  51 => 7,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'forms/default/form.html.twig' %}

{% block inner_markup_fields_start %}
<div class=\"row 50%\">
{% endblock %}

{% block inner_markup_fields_end %}
</div>
{% endblock %}

{% block inner_markup_buttons_start %}
<div class=\"row\">
    <div class=\"12u\">
{% endblock %}

{% block inner_markup_buttons_end %}
  </div>
</div>
{% endblock %}

{% block button_classes %}
  class=\"{{ button.classes|default('button') }} button special\"
{% endblock %}
", "forms/form.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/forms/form.html.twig");
    }
}
