<?php

/* partials/base.html.twig */
class __TwigTemplate_e9adff5ec31a05f63b126c541505fba88a48119538d1d57a191fb93141407b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>
<body class=\"";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
  ";
        // line 44
        $this->displayBlock('navigation', $context, $blocks);
        // line 47
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "
  <div class=\"content section-inner\" >

    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "  </div>
  ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "  <script type='text/javascript' src='";
        echo ($context["theme_url"] ?? null);
        echo "/js/flexslider.min.js'></script>
  <script type='text/javascript' src='";
        // line 63
        echo ($context["theme_url"] ?? null);
        echo "/js/global.js'></script>

    </body>
    </html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.ico\" />

        <link rel='stylesheet' id='lingonberry_googleFonts-css'  href='//fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic%7CRaleway%3A600%2C500%2C400&#038;ver=4.3.1' type='text/css' media='all' />

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        ";
        // line 30
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 31
            echo "        <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
        <script type=\"text/javascript\">
        \$(function() {
          \$( \"#calendar_wrap\" ).datepicker({
            hideIfNoPrevNext: true
          });
        });
        </script>
        ";
        }
        // line 40
        echo "
    ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/widget.css"), "method");
        // line 15
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 16
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/content.css"), "method");
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/sidebar.css"), "method");
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 19
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 20
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 21
            echo "            ";
        }
        // line 22
        echo "        ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 27
        echo "        ";
    }

    // line 44
    public function block_navigation($context, array $blocks = array())
    {
        // line 45
        echo "      ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "  ";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "  ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "    <div class=\"posts\" >
      ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "    </div>
    ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "  ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 61,  217 => 60,  214 => 59,  209 => 55,  204 => 56,  202 => 55,  199 => 54,  196 => 53,  192 => 49,  189 => 48,  186 => 47,  182 => 46,  179 => 45,  176 => 44,  172 => 27,  169 => 26,  166 => 25,  162 => 22,  159 => 21,  156 => 20,  153 => 19,  150 => 18,  147 => 17,  144 => 16,  141 => 15,  138 => 14,  135 => 13,  130 => 40,  119 => 31,  117 => 30,  111 => 28,  109 => 25,  103 => 23,  101 => 13,  94 => 9,  91 => 8,  89 => 7,  81 => 6,  78 => 5,  75 => 4,  66 => 63,  61 => 62,  59 => 59,  56 => 58,  54 => 53,  49 => 50,  46 => 47,  44 => 44,  40 => 43,  37 => 42,  35 => 4,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.ico\" />

        <link rel='stylesheet' id='lingonberry_googleFonts-css'  href='//fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic%7CRaleway%3A600%2C500%2C400&#038;ver=4.3.1' type='text/css' media='all' />

        {% block stylesheets %}
            {% do assets.addCss('theme://css/widget.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/content.css') %}
            {% do assets.addCss('theme://css/sidebar.css') %}
            {% do assets.addCss('theme://css/lightbox.css') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
                {% do assets.addCss('theme://css/ie.css') %}
            {% endif %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
        {% endblock %}
        {{ assets.js() }}

        {% if site.calendar %}
        <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
        <script type=\"text/javascript\">
        \$(function() {
          \$( \"#calendar_wrap\" ).datepicker({
            hideIfNoPrevNext: true
          });
        });
        </script>
        {% endif %}

    {% endblock head %}
</head>
<body class=\"{{ page.header.body_classes }}\">
  {% block navigation %}
      {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  {% block header %}
    {% include 'partials/header.html.twig' %}
  {% endblock %}

  <div class=\"content section-inner\" >

    {% block body %}
    <div class=\"posts\" >
      {% block content %}{% endblock %}
    </div>
    {% endblock %}
  </div>
  {% block footer %}
  {% include 'partials/footer.html.twig' %}
  {% endblock %}
  <script type='text/javascript' src='{{ theme_url }}/js/flexslider.min.js'></script>
  <script type='text/javascript' src='{{ theme_url }}/js/global.js'></script>

    </body>
    </html>
", "partials/base.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/partials/base.html.twig");
    }
}
