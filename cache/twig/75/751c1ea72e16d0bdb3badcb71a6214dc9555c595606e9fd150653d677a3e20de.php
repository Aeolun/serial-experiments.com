<?php

/* page.html.twig */
class __TwigTemplate_4e3b4a8b5ec89bead725aba5cbcd0bab7058712518c5715b088c257e85d3c4af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "page.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "profile", array())) {
            // line 5
            echo "        ";
            $this->loadTemplate("partials/profile.html.twig", "page.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
    ";
        }
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "  <div class=\"columns small-12\">
    ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  52 => 12,  49 => 11,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block header %}
    {% if page.header.profile %}
        {% include 'partials/profile.html.twig' %}
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block content %}
  <div class=\"columns small-12\">
    {{ page.content }}
  </div>
{% endblock %}
", "page.html.twig", "/var/www/serial-experiments.com/user/themes/medium/templates/page.html.twig");
    }
}
