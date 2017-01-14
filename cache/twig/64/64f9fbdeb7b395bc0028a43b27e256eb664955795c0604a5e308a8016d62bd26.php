<?php

/* item.html.twig */
class __TwigTemplate_e1965cd817d0225267ddcb22dbeaec7e2725deacbd1a4c890c1c89e889036383 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1410091103")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

{% set base_url = page.parent.url %}
{% set feed_url = base_url %}
{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
  {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
{% endblock %}
{% endembed %}
", "item.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_e1965cd817d0225267ddcb22dbeaec7e2725deacbd1a4c890c1c89e889036383_1410091103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 10
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 14)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 14,  102 => 13,  98 => 1,  95 => 10,  93 => 9,  90 => 6,  88 => 5,  86 => 4,  84 => 3,  19 => 1,);
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

{% set base_url = page.parent.url %}
{% set feed_url = base_url %}
{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
  {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
{% endblock %}
{% endembed %}
", "item.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/item.html.twig");
    }
}
