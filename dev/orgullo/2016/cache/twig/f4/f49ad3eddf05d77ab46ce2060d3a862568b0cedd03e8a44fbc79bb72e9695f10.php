<?php

/* partials/simplesearch_searchbox_top.html.twig */
class __TwigTemplate_27af33f1cca8554e372db2ee27c79ef19bd1c575589adec2bd9aa8853fbbaa0b extends Twig_Template
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
        echo "<div class=\"form-search\">
<input type=\"text\" class=\"search-field\" placeholder=\"";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SEARCH_FIELD");
        echo "\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-search-input2=\"";
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
</div>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '";
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
        return "partials/simplesearch_searchbox_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-search\">
<input type=\"text\" class=\"search-field\" placeholder=\"{{ 'SEARCH_FIELD'|t }}\" value=\"{{ query }}\" data-search-input2=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
</div>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox_top.html.twig", "C:\\Users\\Miguel\\Documents\\github.com\\xega-org\\xega-org.github.io\\dev\\orgullo\\2016\\user\\themes\\receptar-xega\\templates\\partials\\simplesearch_searchbox_top.html.twig");
    }
}
