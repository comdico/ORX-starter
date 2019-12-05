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

/* partials/header.html.twig */
class __TwigTemplate_e06c4ad9314bf82c9ef7a1022e140e6194a7ab05a33677cfc037a651323df3b2 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_class", []);
        echo "\">
  <h1 id=\"logo\"><a href=\"";
        // line 2
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", []), "text1", []);
        echo " <span>";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", []), "text2", []);
        echo "</span></a></h1>
  <nav id=\"nav\">
    <ul>
      <li class=\"current\"><a href=\"";
        // line 5
        echo ($context["base_url_absolute"] ?? null);
        echo "\">Welcome</a></li>
      <li class=\"submenu\">
        <a href=\"\">Submenu</a>
        <ul>
          ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "submenu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
            // line 10
            echo "          <li><a href=\"";
            echo $this->getAttribute($context["submenu"], "link", []);
            echo "\">";
            echo $this->getAttribute($context["submenu"], "text", []);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
      </li>
      <li class=\"submenu\">
        <a href=\"\">Layouts</a>
        <ul>
          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "          ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 19
                echo "          ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("current") : (""));
                // line 20
                echo "          <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 21
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
              ";
                // line 22
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
            </a>
          </li>
          ";
            }
            // line 26
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 28
            echo "          <li>
            <a href=\"";
            // line 29
            echo $this->getAttribute($context["mitem"], "link", []);
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        </ul>
      </li>

      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 37
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["button"], "link", []);
            echo "\" class=\"button special\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </ul>
  </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 39,  135 => 37,  131 => 36,  125 => 32,  114 => 29,  111 => 28,  106 => 27,  100 => 26,  93 => 22,  89 => 21,  84 => 20,  81 => 19,  78 => 18,  74 => 17,  67 => 12,  56 => 10,  52 => 9,  45 => 5,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"{{ page.header.header_class }}\">
  <h1 id=\"logo\"><a href=\"{{ base_url_absolute }}\">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>
  <nav id=\"nav\">
    <ul>
      <li class=\"current\"><a href=\"{{ base_url_absolute }}\">Welcome</a></li>
      <li class=\"submenu\">
        <a href=\"\">Submenu</a>
        <ul>
          {% for submenu in site.submenu %}
          <li><a href=\"{{ submenu.link }}\">{{ submenu.text }}</a></li>
          {% endfor %}
        </ul>
      </li>
      <li class=\"submenu\">
        <a href=\"\">Layouts</a>
        <ul>
          {% for page in pages.children %}
          {% if page.visible %}
          {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
          <li class=\"{{ current_page }}\">
            <a href=\"{{ page.url }}\">
              {{ page.menu }}
            </a>
          </li>
          {% endif %}
          {% endfor %}
          {% for mitem in site.menu %}
          <li>
            <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
          </li>
          {% endfor %}

        </ul>
      </li>

      {% for button in site.buttons %}
      <li><a href=\"{{ button.link }}\" class=\"button special\">{{ button.text }}</a></li>
      {% endfor %}
    </ul>
  </nav>
</header>
", "partials/header.html.twig", "/Users/dcomdico/Sites/ORX-Site/user/themes/twenty/templates/partials/header.html.twig");
    }
}
