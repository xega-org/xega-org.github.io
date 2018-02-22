<?php

/* partials/simplesearch_searchbox_top.html.twig */
class __TwigTemplate_76611e6090be20bfe035809a74e6b985069f2ca6e27d05da3614ea130ca69d9d extends Twig_Template
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
        echo $this->env->getExtension('GravTwigExtension')->translate("SEARCH_FIELD");
        echo "\" value=\"";
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" data-search-input2=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array());
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
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
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
}
/* <div class="form-search">*/
/* <input type="text" class="search-field" placeholder="{{ 'SEARCH_FIELD'|t }}" value="{{ query }}" data-search-input2="{{ base_url }}{{ config.plugins.simplesearch.route}}/query" />*/
/* </div>*/
/* <script>*/
/* jQuery(document).ready(function($){*/
/*     var input = $('[data-search-input2]');*/
/* */
/*     input.on('keypress', function(event) {*/
/*         if (event.which == 13 && input.val().length > 3) {*/
/*             event.preventDefault();*/
/*             window.location.href = input.data('search-input2') + '{{ config.system.param_sep }}' + input.val();*/
/*         }*/
/*     });*/
/* });*/
/* </script>*/
/* */
