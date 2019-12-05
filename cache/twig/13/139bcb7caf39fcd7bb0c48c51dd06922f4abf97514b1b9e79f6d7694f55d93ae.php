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

/* modular/features.html.twig */
class __TwigTemplate_7037c41825a1c2d4c93259a151330ace0bf59a8dc74ffcd14aa2899bd87ff49a extends \Twig\Template
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
        echo "<section class=\"wrapper style1 container special\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "            <div class=\"4u 12u(narrower)\">
                <section>
                    ";
            // line 6
            if ($this->getAttribute($context["item"], "icon", [])) {
                // line 7
                echo "                    <span class=\"icon featured fa-";
                echo $this->getAttribute($context["item"], "icon", []);
                echo "\"></span>
                    ";
            }
            // line 9
            echo "                    <header>
                        <h3>";
            // line 10
            echo $this->getAttribute($context["item"], "title", []);
            echo "</h3>
                    </header>
                    <p>";
            // line 12
            echo $this->getAttribute($context["item"], "text", []);
            echo "</p>
                    ";
            // line 13
            if ($this->getAttribute($context["item"], "buttons", [])) {
                // line 14
                echo "                    <footer>
                        <ul class=\"buttons\">
                            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "buttons", []));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 17
                    echo "                                <li><a href=\"";
                    echo $this->getAttribute($context["button"], "url", []);
                    echo "\" class=\"button small\">";
                    echo $this->getAttribute($context["button"], "text", []);
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                        </ul>
                    </footer>
                    ";
            }
            // line 22
            echo "                </section>
            </div> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  88 => 22,  83 => 19,  72 => 17,  68 => 16,  64 => 14,  62 => 13,  58 => 12,  53 => 10,  50 => 9,  44 => 7,  42 => 6,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"wrapper style1 container special\">
    <div class=\"row\">
        {% for item in page.header.features %}
            <div class=\"4u 12u(narrower)\">
                <section>
                    {% if item.icon %}
                    <span class=\"icon featured fa-{{ item.icon }}\"></span>
                    {% endif %}
                    <header>
                        <h3>{{ item.title }}</h3>
                    </header>
                    <p>{{ item.text }}</p>
                    {% if item.buttons %}
                    <footer>
                        <ul class=\"buttons\">
                            {% for button in item.buttons %}
                                <li><a href=\"{{ button.url }}\" class=\"button small\">{{ button.text }}</a></li>
                            {% endfor %}
                        </ul>
                    </footer>
                    {% endif %}
                </section>
            </div> 
        {% endfor %}
    </div>
</section>", "modular/features.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/modular/features.html.twig");
    }
}
