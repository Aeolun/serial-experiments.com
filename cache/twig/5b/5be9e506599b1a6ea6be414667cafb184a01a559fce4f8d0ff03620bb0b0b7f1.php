<?php

/* partials/header.html.twig */
class __TwigTemplate_85b20e69a66f827268e34cdec5629211fabdfb40073ac6b0afd0d6189ecd1bdd extends Twig_Template
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
        $context["header_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array())) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://dist/images/background.jpg")));
        // line 2
        echo "<header class=\"row header\">
  <div class=\"header--image\" style=\"background-image:url(";
        // line 3
        echo ($context["header_url"] ?? null);
        echo ");background-color:#000;\">
    <div class=\"row\">
      <div class=\"column small-12\">
        
      </div>
    </div>
  </div>
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
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set header_url = page.media.images|first.url ?: url('theme://dist/images/background.jpg') %}
<header class=\"row header\">
  <div class=\"header--image\" style=\"background-image:url({{ header_url }});background-color:#000;\">
    <div class=\"row\">
      <div class=\"column small-12\">
        
      </div>
    </div>
  </div>
</header>
", "partials/header.html.twig", "/var/www/serial-experiments.com/user/themes/medium/templates/partials/header.html.twig");
    }
}
