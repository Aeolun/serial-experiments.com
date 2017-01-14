<?php

/* partials/navigation.html.twig */
class __TwigTemplate_18ebb26a3671094487cfd036f078267010418bb7302a9db3ee6214f5bc07699b extends Twig_Template
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
        // line 17
        echo "
<div class=\"navigation\">

  <div class=\"navigation-inner section-inner\">

  <ul class=\"blog-menu\">
    ";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 24
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 27
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 28
                echo "            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " current-menu-item\">
                <a href=\"";
                // line 29
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 30
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        }
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 36
            echo "        <li class=\"menu-item menu-item-type-post_type menu-item-object-page \">
            <a href=\"";
            // line 37
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 38
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 43
            echo "        <li>";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 43)->display($context);
            echo "</li>
    ";
        }
        // line 45
        echo "</ul>

";
        // line 47
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation.html.twig", 47)->display($context);
        // line 48
        echo "
<div class=\"clear\"></div>
</div>

</div>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 7
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 10
                    echo "                <ul>
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 14,  157 => 11,  154 => 10,  152 => 9,  146 => 7,  140 => 6,  136 => 5,  131 => 4,  128 => 3,  123 => 2,  111 => 1,  102 => 48,  100 => 47,  96 => 45,  90 => 43,  87 => 42,  77 => 38,  73 => 37,  70 => 36,  65 => 35,  62 => 34,  52 => 30,  48 => 29,  43 => 28,  40 => 27,  35 => 26,  29 => 24,  27 => 23,  19 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        <li class=\"{{ current_page }}\">
            <a href=\"{{ p.url }}\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                {{ p.menu }}
            </a>
            {% if p.children.visible.count > 0 %}
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<div class=\"navigation\">

  <div class=\"navigation-inner section-inner\">

  <ul class=\"blog-menu\">
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
            <li class=\"{{ current_page }} current-menu-item\">
                <a href=\"{{ page.url }}\">
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page \">
            <a href=\"{{ mitem.url }}\">
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
    {% if config.plugins.login.enabled and grav.user.username %}
        <li>{% include 'partials/login-status.html.twig' %}</li>
    {% endif %}
</ul>

{% include 'partials/simplesearch_searchbox.html.twig' %}

<div class=\"clear\"></div>
</div>

</div>
", "partials/navigation.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/partials/navigation.html.twig");
    }
}
