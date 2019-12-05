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

/* forms/field.html.twig */
class __TwigTemplate_0596c1b50e2d2c0807f600f96e31dd1ef1ff978f06d213451817cc0886cea0de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'outer_field_classes' => [$this, 'block_outer_field_classes'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/default/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/field.html.twig", "forms/field.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_outer_field_classes($context, array $blocks = [])
    {
        // line 4
        if (($this->getAttribute(($context["field"] ?? null), "framework_size", []) == "half")) {
            echo "6u 12u(mobile)";
        } else {
            echo "12u";
        }
        echo " vertical
";
    }

    // line 7
    public function block_label($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'forms/default/field.html.twig' %}

{% block outer_field_classes %}
{% if field.framework_size == 'half' %}6u 12u(mobile){% else %}12u{% endif %} vertical
{% endblock %}

{% block label %}
{% endblock %}", "forms/field.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/forms/field.html.twig");
    }
}
