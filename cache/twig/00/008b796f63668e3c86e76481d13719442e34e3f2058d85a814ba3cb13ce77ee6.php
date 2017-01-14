<?php

/* blog.html.twig */
class __TwigTemplate_036d8e15634fd3eb2e97c762312a159c3bfe2bffc640556c7c0db759bd9a3adc extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1455146812")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {{ page.content }}
        {% for child in collection %}
        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'pagination':collection.params.pagination} %}
        {% endif %}
    {% endblock %}

{% endembed %}
", "blog.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_036d8e15634fd3eb2e97c762312a159c3bfe2bffc640556c7c0db759bd9a3adc_1455146812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
    ";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        ";
        // line 18
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 19
            echo "        ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 19)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 20
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 23
            echo "        ";
            $this->loadTemplate("pagination.html.twig", "blog.html.twig", 23)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 24
            echo "        ";
        }
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 25,  167 => 24,  164 => 23,  162 => 22,  159 => 21,  145 => 20,  142 => 19,  125 => 18,  121 => 17,  118 => 16,  115 => 15,  111 => 1,  108 => 12,  106 => 11,  103 => 8,  101 => 7,  99 => 5,  97 => 4,  95 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {{ page.content }}
        {% for child in collection %}
        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'pagination':collection.params.pagination} %}
        {% endif %}
    {% endblock %}

{% endembed %}
", "blog.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/blog.html.twig");
    }
}
