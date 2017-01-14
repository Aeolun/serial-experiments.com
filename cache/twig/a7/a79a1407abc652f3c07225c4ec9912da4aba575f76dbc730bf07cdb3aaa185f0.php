<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_9cb4f81fc0e6729ead5b55bc5297570130dd4b8c3542c8f4ee8778bd57596b0d extends Twig_Template
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
        echo "<div class=\"post format-";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array());
        } else {
            echo "standard";
        }
        echo "\">
  ";
        // line 2
        if (($context["truncate"] ?? null)) {
            // line 3
            echo "  <div class=\"post-bubbles\">
    <a href=\"";
            // line 4
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"format-bubble\" title=\"";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "\"></a>
    ";
            // line 5
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sticky", array())) {
                // line 6
                echo "    <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute(($context["page"] ?? null), "title", array());
                echo "\" class=\"sticky-bubble\">Sticky post</a>
    ";
            }
            // line 8
            echo "  </div>
  ";
        }
        // line 10
        echo "
  <div class=\"content-inner\">
    ";
        // line 12
        if ((((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "quote") && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "link")) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "chat")) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "aside"))) {
            // line 13
            echo "    <div class=\"post-header\">
      ";
            // line 14
            if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
                // line 15
                echo "      <div class=\"featured-media\">
      ";
            }
            // line 17
            echo "
        ";
            // line 18
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideshow", array())) {
                // line 19
                echo "        <div class=\"flexslider\">
          <div class=\"flex-viewport\">
            <ul class=\"slides\">
              ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideshow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                    // line 23
                    echo "              ";
                    if (($this->getAttribute($context["slide"], "image", array()) || $this->getAttribute($context["slide"], "title", array()))) {
                        // line 24
                        echo "              <li>
                ";
                        // line 25
                        if ($this->getAttribute($context["slide"], "image", array())) {
                            // line 26
                            echo "                <img src=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array"), "url", array());
                            echo "\" class=\"attachment-post-image\" alt=\"";
                            echo $this->getAttribute($context["slide"], "title", array());
                            echo "\">
                ";
                        }
                        // line 28
                        echo "                ";
                        if ($this->getAttribute($context["slide"], "title", array())) {
                            // line 29
                            echo "                <div class=\"media-caption-container\">
                  <p class=\"media-caption\">";
                            // line 30
                            echo $this->getAttribute($context["slide"], "title", array());
                            echo "</p>
                </div>
                ";
                        }
                        // line 33
                        echo "              </li>
              ";
                    }
                    // line 35
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "            </ul>
          </div>
          <ul class=\"flex-direction-nav\">
            <li><a class=\"flex-prev\" href=\"#\">Prev</a></li>
            <li><a class=\"flex-next\" href=\"#\">Next</a></li>
          </ul>
        </div>
        ";
            }
            // line 44
            echo "

        ";
            // line 46
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array())) {
                // line 47
                echo "        <iframe src=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array());
                echo "?showinfo=0\" frameborder=\"0\" allowfullscreen style=\"width: 750px; height: 421.429px; ";
                if ( !($context["truncate"] ?? null)) {
                    echo "width: 680px;height: 392px;";
                }
                echo "\"></iframe>
        ";
            }
            // line 49
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) {
                // line 50
                echo "        <iframe src=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array());
                echo "\" frameborder=\"0\" allowfullscreen=\"\" data-aspectratio=\"0.5619047619047619\" style=\"width: 750px; height: 421.429px; ";
                if ( !($context["truncate"] ?? null)) {
                    echo "width: 680px;height: 392px;";
                }
                echo "\"></iframe>
        ";
            }
            // line 52
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array())) {
                // line 53
                echo "        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array());
                echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
        ";
            }
            // line 55
            echo "        ";
            if ((twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slideshow", array()))) {
                // line 56
                echo "        ";
                echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 750, 1 => 422), "method"), "html", array(0 => "", 1 => "", 2 => "thumb"), "method");
                echo "
        ";
            }
            // line 58
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array())) {
                // line 59
                echo "        <div class=\"media-caption-container\">
          <p class=\"media-caption\">";
                // line 60
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array());
                echo "</p>
        </div>
        ";
            }
            // line 63
            echo "      ";
            if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
                // line 64
                echo "      </div>
      ";
            }
            // line 66
            echo "
      ";
            // line 67
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "video")) {
                // line 68
                echo "      ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
                    // line 69
                    echo "      <h2 class=\"post-title\">
        ";
                    // line 70
                    if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                        // line 71
                        echo "        <a href=\"";
                        echo $this->getAttribute(($context["page"] ?? null), "url", array());
                        echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
        ";
                    }
                    // line 73
                    echo "        <a href=\"";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
                    echo "\">";
                    echo $this->getAttribute(($context["page"] ?? null), "title", array());
                    echo "</a>
      </h2>
      ";
                } else {
                    // line 76
                    echo "      <h2 class=\"post-title\"><a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", array());
                    echo "\">";
                    echo $this->getAttribute(($context["page"] ?? null), "title", array());
                    echo "</a></h2>
      ";
                }
                // line 78
                echo "

      <div class=\"post-meta\">
        <span class=\"post-date\">";
                // line 81
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "long", array()));
                echo "</span>
        <span class=\"date-sep\"> / </span>
        <span class=\"post-author\">
          ";
                // line 84
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array()))) {
                    // line 85
                    echo "          ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
                        // line 86
                        echo "          ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array())) {
                            // line 87
                            echo "          <a href=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array());
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                            echo "</a>
          ";
                        } else {
                            // line 89
                            echo "          ";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                            echo "
          ";
                        }
                        // line 91
                        echo "          ";
                    } else {
                        // line 92
                        echo "          ";
                        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array())) {
                            // line 93
                            echo "          <a href=\"";
                            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array());
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                            echo "</a>
          ";
                        } else {
                            // line 95
                            echo "          ";
                            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                            echo "
          ";
                        }
                        // line 97
                        echo "          ";
                    }
                    // line 98
                    echo "          ";
                }
                // line 99
                echo "        </span>
        <span class=\"date-sep\"> / </span>
        ";
                // line 101
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                    // line 102
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 103
                        echo "        <a href=\"";
                        echo ($context["base_url"] ?? null);
                        echo "/tag:";
                        echo $context["tag"];
                        echo "\" rel=\"tag\">";
                        echo $context["tag"];
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo ", ";
                        }
                        echo "</a>
        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo "        ";
                }
                // line 106
                echo "      </div>
      <div class=\"clear\"></div>
        ";
            }
            // line 109
            echo "    </div>
    ";
        }
        // line 111
        echo "    <div class=\"post-content\">
      ";
        // line 112
        if (((((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "quote") && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "video")) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "link")) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "chat")) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array()) != "aside"))) {
            // line 113
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 114
                echo "      ";
                echo $this->getAttribute(($context["page"] ?? null), "content", array());
                echo "
      ";
                // line 115
                if ( !($context["truncate"] ?? null)) {
                    // line 116
                    echo "      ";
                    $context["show_prev_next"] = true;
                    // line 117
                    echo "      ";
                }
                // line 118
                echo "      ";
            } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
                // line 119
                echo "      ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", array());
                echo "
      ";
            } elseif (            // line 120
($context["truncate"] ?? null)) {
                // line 121
                echo "      ";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
                echo "
      ";
            } else {
                // line 123
                echo "      ";
                echo $this->getAttribute(($context["page"] ?? null), "content", array());
                echo "
      ";
                // line 124
                $context["show_prev_next"] = true;
                // line 125
                echo "      ";
            }
            // line 126
            echo "      <p>
        ";
            // line 127
            if ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
                // line 128
                echo "        <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"read-more\">Continue Reading</a>
        ";
            } elseif (            // line 129
($context["truncate"] ?? null)) {
                // line 130
                echo "        <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"read-more\">Continue Reading</a>
        ";
            }
            // line 132
            echo "      </p>
      ";
        } else {
            // line 134
            echo "      ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
      ";
        }
        // line 136
        echo "    </div>
  </div>
  ";
        // line 138
        if (($context["show_prev_next"] ?? null)) {
            // line 139
            echo "  <div class=\"post-nav\">
    ";
            // line 140
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 141
                echo "    <a class=\"post-nav-newer\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
    ";
            }
            // line 143
            echo "
    ";
            // line 144
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 145
                echo "    <a class=\"post-nav-older\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
    ";
            }
            // line 147
            echo "    <div class=\"clear\"></div>
  </div>
  ";
        }
        // line 150
        echo "

  ";
        // line 152
        if ( !($context["truncate"] ?? null)) {
            // line 153
            echo "  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array()))) {
                // line 154
                echo "  <div class=\"comments\">
    <h2 class=\"comments-title\">Comments:</h2>
    ";
                // line 156
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array())));
                echo "
  </div>
  ";
            }
            // line 159
            echo "
  ";
            // line 160
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 161
                echo "    ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 161)->display(array_merge($context, array("page" => ($context["page"] ?? null))));
                // line 162
                echo "  ";
            }
            // line 163
            echo "
  ";
        }
        // line 165
        echo "
      <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 165,  489 => 163,  486 => 162,  483 => 161,  481 => 160,  478 => 159,  472 => 156,  468 => 154,  465 => 153,  463 => 152,  459 => 150,  454 => 147,  448 => 145,  446 => 144,  443 => 143,  437 => 141,  435 => 140,  432 => 139,  430 => 138,  426 => 136,  420 => 134,  416 => 132,  410 => 130,  408 => 129,  403 => 128,  401 => 127,  398 => 126,  395 => 125,  393 => 124,  388 => 123,  382 => 121,  380 => 120,  375 => 119,  372 => 118,  369 => 117,  366 => 116,  364 => 115,  359 => 114,  356 => 113,  354 => 112,  351 => 111,  347 => 109,  342 => 106,  339 => 105,  315 => 103,  297 => 102,  295 => 101,  291 => 99,  288 => 98,  285 => 97,  279 => 95,  271 => 93,  268 => 92,  265 => 91,  259 => 89,  251 => 87,  248 => 86,  245 => 85,  243 => 84,  237 => 81,  232 => 78,  224 => 76,  215 => 73,  209 => 71,  207 => 70,  204 => 69,  201 => 68,  199 => 67,  196 => 66,  192 => 64,  189 => 63,  183 => 60,  180 => 59,  177 => 58,  171 => 56,  168 => 55,  162 => 53,  159 => 52,  149 => 50,  146 => 49,  136 => 47,  134 => 46,  130 => 44,  120 => 36,  114 => 35,  110 => 33,  104 => 30,  101 => 29,  98 => 28,  90 => 26,  88 => 25,  85 => 24,  82 => 23,  78 => 22,  73 => 19,  71 => 18,  68 => 17,  64 => 15,  62 => 14,  59 => 13,  57 => 12,  53 => 10,  49 => 8,  41 => 6,  39 => 5,  33 => 4,  30 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"post format-{% if page.header.type %}{{ page.header.type }}{% else %}standard{% endif %}\">
  {% if truncate %}
  <div class=\"post-bubbles\">
    <a href=\"{{ page.url }}\" class=\"format-bubble\" title=\"{{ page.title }}\"></a>
    {% if page.header.sticky %}
    <a href=\"{{ page.url }}\" title=\"{{ page.title }}\" class=\"sticky-bubble\">Sticky post</a>
    {% endif %}
  </div>
  {% endif %}

  <div class=\"content-inner\">
    {% if page.header.type != 'quote' and page.header.type != 'link' and page.header.type != 'chat' and page.header.type != 'aside' %}
    <div class=\"post-header\">
      {% if page.header.youtube or page.header.vimeo or page.header.soundcloud or page.media.images %}
      <div class=\"featured-media\">
      {% endif %}

        {% if page.header.slideshow %}
        <div class=\"flexslider\">
          <div class=\"flex-viewport\">
            <ul class=\"slides\">
              {% for slide in page.header.slideshow %}
              {% if slide.image or slide.title  %}
              <li>
                {% if slide.image %}
                <img src=\"{{ page.media.images[slide.image].url }}\" class=\"attachment-post-image\" alt=\"{{ slide.title }}\">
                {% endif %}
                {% if slide.title %}
                <div class=\"media-caption-container\">
                  <p class=\"media-caption\">{{ slide.title }}</p>
                </div>
                {% endif %}
              </li>
              {% endif %}
              {% endfor %}
            </ul>
          </div>
          <ul class=\"flex-direction-nav\">
            <li><a class=\"flex-prev\" href=\"#\">Prev</a></li>
            <li><a class=\"flex-next\" href=\"#\">Next</a></li>
          </ul>
        </div>
        {% endif %}


        {% if page.header.youtube %}
        <iframe src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen style=\"width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}\"></iframe>
        {% endif %}
        {% if page.header.vimeo %}
        <iframe src=\"{{ page.header.vimeo }}\" frameborder=\"0\" allowfullscreen=\"\" data-aspectratio=\"0.5619047619047619\" style=\"width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}\"></iframe>
        {% endif %}
        {% if page.header.soundcloud %}
        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
        {% endif %}
        {% if page.media.images|first and not page.header.slideshow %}
        {{ page.media.images|first.cropZoom(750,422).html('','', 'thumb') }}
        {% endif %}
        {% if page.header.description %}
        <div class=\"media-caption-container\">
          <p class=\"media-caption\">{{ page.header.description }}</p>
        </div>
        {% endif %}
      {% if page.header.youtube or page.header.vimeo or page.header.soundcloud or page.media.images %}
      </div>
      {% endif %}

      {% if page.header.type != 'video' %}
      {% if page.header.link %}
      <h2 class=\"post-title\">
        {% if page.header.continue_link is not sameas(false) %}
        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
        {% endif %}
        <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
      </h2>
      {% else %}
      <h2 class=\"post-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
      {% endif %}


      <div class=\"post-meta\">
        <span class=\"post-date\">{{ page.date|date(config.system.pages.dateformat.long) }}</span>
        <span class=\"date-sep\"> / </span>
        <span class=\"post-author\">
          {% if page.header.author.name or site.author.name %}
          {% if page.header.author.name %}
          {% if page.header.author.url %}
          <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
          {% else %}
          {{ page.header.author.name }}
          {% endif %}
          {% else %}
          {% if site.author.url %}
          <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
          {% else %}
          {{ site.author.name }}
          {% endif %}
          {% endif %}
          {% endif %}
        </span>
        <span class=\"date-sep\"> / </span>
        {% if page.taxonomy.tag %}
        {% for tag in page.taxonomy.tag %}
        <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
        {% endfor %}
        {% endif %}
      </div>
      <div class=\"clear\"></div>
        {% endif %}
    </div>
    {% endif %}
    <div class=\"post-content\">
      {% if page.header.type != 'quote' and page.header.type != 'video' and page.header.type != 'link' and page.header.type != 'chat' and page.header.type != 'aside' %}
      {% if page.header.continue_link is sameas(false) %}
      {{ page.content }}
      {% if not truncate %}
      {% set show_prev_next = true %}
      {% endif %}
      {% elseif truncate and page.summary != page.content %}
      {{ page.summary }}
      {% elseif truncate %}
      {{ page.content|truncate(550) }}
      {% else %}
      {{ page.content }}
      {% set show_prev_next = true %}
      {% endif %}
      <p>
        {% if truncate and page.summary != page.content %}
        <a href=\"{{ page.url }}\" class=\"read-more\">Continue Reading</a>
        {% elseif truncate %}
        <a href=\"{{ page.url }}\" class=\"read-more\">Continue Reading</a>
        {% endif %}
      </p>
      {% else %}
      {{ page.content }}
      {% endif %}
    </div>
  </div>
  {% if show_prev_next %}
  <div class=\"post-nav\">
    {% if not page.isFirst %}
    <a class=\"post-nav-newer\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
    {% endif %}

    {% if not page.isLast %}
    <a class=\"post-nav-older\" href=\"{{ page.prevSibling.url }}\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
    {% endif %}
    <div class=\"clear\"></div>
  </div>
  {% endif %}


  {% if not truncate %}
  {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
  <div class=\"comments\">
    <h2 class=\"comments-title\">Comments:</h2>
    {{ jscomments(config.plugins.jscomments.provider) }}
  </div>
  {% endif %}

  {% if config.plugins.comments.enabled %}
    {% include 'partials/comments.html.twig' with {'page': page} %}
  {% endif %}

  {% endif %}

      <div class=\"clear\"></div>
    </div>
", "partials/blog_item.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/partials/blog_item.html.twig");
    }
}
