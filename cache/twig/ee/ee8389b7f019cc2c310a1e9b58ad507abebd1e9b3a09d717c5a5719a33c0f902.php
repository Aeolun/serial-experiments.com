<?php

/* pagination.html.twig */
class __TwigTemplate_bed62a6599340b50997abae86c4a97c0f393b76314faf517797e13ed5385ff31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 2
            echo "
";
            // line 3
            if ((($context["base_url"] ?? null) == "")) {
                // line 4
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 6
            echo "
<div class=\"post-nav archive-nav pagination\">
    ";
            // line 8
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
                // line 9
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array())), array("//" => "/"));
                // line 10
                echo "        <a rel=\"prev\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&laquo;</a>
    ";
            }
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 13
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 14
                    echo "            <a href=\"#\" class=\"current\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
        ";
                } elseif ($this->getAttribute(                // line 15
$context["paginate"], "isInDelta", array())) {
                    // line 16
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 17
                    echo "            <a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
                // line 21
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array())), array("//" => "/"));
                // line 22
                echo "        <a rel=\"next\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&raquo;</a>
    ";
            }
            // line 24
            echo "</div>
";
        }
        // line 26
        echo "<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  89 => 24,  83 => 22,  80 => 21,  77 => 20,  71 => 19,  63 => 17,  60 => 16,  58 => 15,  53 => 14,  50 => 13,  45 => 12,  39 => 10,  36 => 9,  34 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination|length > 1 %}

{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}

<div class=\"post-nav archive-nav pagination\">
    {% if pagination.hasPrev %}
        {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a rel=\"prev\" href=\"{{ url }}\">&laquo;</a>
    {% endif %}
    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <a href=\"#\" class=\"current\">{{ paginate.number }}</a>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <a href=\"{{ url }}\">{{ paginate.number }}</a>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a rel=\"next\" href=\"{{ url }}\">&raquo;</a>
    {% endif %}
</div>
{% endif %}
<div class=\"clear\"></div>
", "pagination.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/pagination.html.twig");
    }
}
