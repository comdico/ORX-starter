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

/* partials/footer.html.twig */
class __TwigTemplate_2c0198a0b8ba2f4c467e47571e28ba05699d5c27435fd03085cf0226a5049893 extends \Twig\Template
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
        echo "<footer id=\"footer\">

    <ul class=\"icons\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "             <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", []);
            echo "\" class=\"icon circle fa-";
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"><span class=\"label\">";
            echo $this->getAttribute($context["item"], "label", []);
            echo "</span></a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>

    <ul class=\"copyright\">
        <li>&copy; ";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "line1", []);
        echo "</li><li>";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "line2", []);
        echo " <a href=\"";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "url", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "url_label", []);
        echo "</a></li>
    </ul>
    
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 7,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\">

    <ul class=\"icons\">
        {% for item in site.social %}
             <li><a href=\"{{ item.url }}\" class=\"icon circle fa-{{ item.icon }}\"><span class=\"label\">{{ item.label }}</span></a></li>
        {% endfor %}
    </ul>

    <ul class=\"copyright\">
        <li>&copy; {{ site.copyright.line1 }}</li><li>{{ site.copyright.line2 }} <a href=\"{{ site.copyright.url }}\">{{ site.copyright.url_label }}</a></li>
    </ul>
    
</footer>", "partials/footer.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/partials/footer.html.twig");
    }
}
