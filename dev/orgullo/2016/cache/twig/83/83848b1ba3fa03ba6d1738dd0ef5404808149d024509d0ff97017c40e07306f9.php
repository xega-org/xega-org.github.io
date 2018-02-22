<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_fbf7686d4d3768c237de00a4cc5c2a9310f76e3fbe878021cc88e839b4d563f1 extends Twig_Template
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
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<div class=\"tagcloud\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "      ";
                $context["active"] = ((($this->getAttribute(($context["uri"] ?? null), "param", array(0 => ($context["taxonomy"] ?? null)), "method") == $context["tax"])) ? ("active") : (""));
                // line 7
                echo "      <a class=\"";
                echo ($context["active"] ?? null);
                echo "\" title=\"";
                echo $context["value"];
                echo " ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("TOPICS");
                echo "\" href=\"";
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo ($context["taxonomy"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo twig_escape_filter($this->env, $context["tax"], "url");
                echo "\">";
                echo $context["tax"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = taxonomylist.get() %}

{% if taxlist %}
<div class=\"tagcloud\">
    {% for tax,value in taxlist[taxonomy] %}
      {% set active = uri.param(taxonomy) == tax ? 'active' : '' %}
      <a class=\"{{ active }}\" title=\"{{ value }} {{ 'TOPICS'|t }}\" href=\"{{ base_url_absolute }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax }}</a>
    {% endfor %}
</div>
{% endif %}
", "partials/taxonomylist.html.twig", "C:\\Users\\Miguel\\Documents\\github.com\\xega-org\\xega-org.github.io\\dev\\orgullo\\2016\\user\\themes\\receptar-xega\\templates\\partials\\taxonomylist.html.twig");
    }
}
