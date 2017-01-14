<?php

/* partials/footer.html.twig */
class __TwigTemplate_44799e494edb78c3442fbb3463bc74e5886c9a2a47263a448476be62ed7c2fc3 extends Twig_Template
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
        echo "<div class=\"footer section\">
  <div class=\"footer-inner section-inner\">
    <div class=\"footer-a widgets\">
      <div class=\"widget widget_recent_entries\">
        <div class=\"widget-content\">
          <h3 class=\"widget-title\">Recent Posts</h3>
          <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 10), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "              <li class=\"recent-posts\">
                <a href=\"";
            // line 10
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "          </ul>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"clear\"></div>
    </div>

    ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 21
            echo "    <div class=\"footer-b widgets\">
      <div class=\"widget widget_categories\">
        <div class=\"widget-content\">
          <h3 class=\"widget-title\">Categories</h3>
          ";
            // line 25
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/footer.html.twig", 25)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 26
            echo "        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"clear\"></div>
    </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 34
            echo "    <div class=\"footer-c widgets\">
      <div class=\"widget widget_calendar\">
        <div class=\"widget-content\">
          <h3 class=\"widget-title\">Calendar</h3>
          <div id=\"calendar_wrap\"></div>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"clear\"></div>
    </div>
    ";
        }
        // line 45
        echo "
    <div class=\"clear\"></div>
  </div>
</div>

<div class=\"credits section\">
  <div class=\"credits-inner section-inner\">
    ";
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "left", array())) {
            // line 53
            echo "      <p class=\"credits-left\">
        ";
            // line 54
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "left", array());
            echo "
      </p>
      ";
        }
        // line 57
        echo "      ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "right", array())) {
            // line 58
            echo "      <p class=\"credits-right\">
        ";
            // line 59
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "right", array());
            echo "
      </p>
    ";
        }
        // line 62
        echo "  <div class=\"clear\"></div>
</div>
</div>
";
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
        return array (  123 => 62,  117 => 59,  114 => 58,  111 => 57,  105 => 54,  102 => 53,  100 => 52,  91 => 45,  78 => 34,  76 => 33,  73 => 32,  65 => 26,  63 => 25,  57 => 21,  55 => 20,  46 => 13,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer section\">
  <div class=\"footer-inner section-inner\">
    <div class=\"footer-a widgets\">
      <div class=\"widget widget_recent_entries\">
        <div class=\"widget-content\">
          <h3 class=\"widget-title\">Recent Posts</h3>
          <ul>
            {% for post in page.find('/blog').children.order('date', 'desc').slice(0, 10) %}
              <li class=\"recent-posts\">
                <a href=\"{{ post.url }}\">{{ post.title }}</a>
              </li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"clear\"></div>
    </div>

    {% if config.plugins.taxonomylist.enabled %}
    <div class=\"footer-b widgets\">
      <div class=\"widget widget_categories\">
        <div class=\"widget-content\">
          <h3 class=\"widget-title\">Categories</h3>
          {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"clear\"></div>
    </div>
    {% endif %}

    {% if site.calendar %}
    <div class=\"footer-c widgets\">
      <div class=\"widget widget_calendar\">
        <div class=\"widget-content\">
          <h3 class=\"widget-title\">Calendar</h3>
          <div id=\"calendar_wrap\"></div>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"clear\"></div>
    </div>
    {% endif %}

    <div class=\"clear\"></div>
  </div>
</div>

<div class=\"credits section\">
  <div class=\"credits-inner section-inner\">
    {% if site.copyright.left %}
      <p class=\"credits-left\">
        {{ site.copyright.left }}
      </p>
      {% endif %}
      {% if site.copyright.right %}
      <p class=\"credits-right\">
        {{ site.copyright.right }}
      </p>
    {% endif %}
  <div class=\"clear\"></div>
</div>
</div>
", "partials/footer.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/partials/footer.html.twig");
    }
}
