<?php

/* infinite.html.twig */
class __TwigTemplate_3b9b3e9def075e1ffb34964c1add6a7b044e9d73c256e4b0321f6b510f164f4d extends Twig_Template
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array());
        // line 2
        $context["pagination"] = $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array());
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                $this->loadTemplate("partials/post-item.html.twig", "infinite.html.twig", 7)->display(array_merge($context, array("post" => $context["item"])));
                // line 8
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
    ";
            // line 10
            $this->loadTemplate("partials/load-more.html.twig", "infinite.html.twig", 10)->display($context);
            // line 11
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "infinite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  68 => 10,  65 => 9,  51 => 8,  48 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set collection = page.collection %}
{% set pagination = collection.params.pagination %}

{% if pagination|length > 1 %}

    {% for item in collection %}
        {% include 'partials/post-item.html.twig' with {'post': item} %}
    {% endfor %}

    {% include 'partials/load-more.html.twig' %}

{% endif %}
", "infinite.html.twig", "/var/www/serial-experiments.com/user/themes/medium/templates/infinite.html.twig");
    }
}
