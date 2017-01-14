<?php

/* default.html.twig */
class __TwigTemplate_aa2315220450d79a42a360fa0566d489e9779f170d374533577bd187474a057f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"post\">
  <div class=\"content-inner comments-allowed\">
    <div class=\"post-header\">
      <h2 class=\"post-title\">";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
    </div>
    <div class=\"post-content\">
      ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
    <div class=\"clear\"></div>
  </div>
</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
<div class=\"post\">
  <div class=\"content-inner comments-allowed\">
    <div class=\"post-header\">
      <h2 class=\"post-title\">{{ page.header.title }}</h2>
    </div>
    <div class=\"post-content\">
      {{ page.content }}
    </div>
    <div class=\"clear\"></div>
  </div>
</div>
<div class=\"clear\"></div>
{% endblock %}
", "default.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/default.html.twig");
    }
}
