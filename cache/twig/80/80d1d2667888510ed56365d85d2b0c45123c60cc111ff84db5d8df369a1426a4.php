<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_2392bd78a38af609874329eba68b60bc75a5c036916bc4cadbd44997a193c122 extends Twig_Template
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
        echo "<form class=\"search-form\">
<input type=\"search\" placeholder=\"Search...\" value=\"";
        // line 2
        echo ($context["query"] ?? null);
        echo "\" data-search-input=\"";
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\"  name=\"s\" id=\"s\"/>
</form>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        echo "' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"search-form\">
<input type=\"search\" placeholder=\"Search...\" value=\"{{ query }}\" data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\"  name=\"s\" id=\"s\"/>
</form>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox.html.twig", "/var/www/serial-experiments.com/user/themes/lingonberry/templates/partials/simplesearch_searchbox.html.twig");
    }
}
