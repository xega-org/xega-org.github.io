<?php

/* partials/javascripts.html.twig */
class __TwigTemplate_342ea66965c6bfed744d25ca0ddc35d1a8f22ad350dce63bca0c01ffd182c54d extends Twig_Template
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.login", 1 => "admin.super"))) {
            // line 3
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/vendor.min.js"), 1 => array("loading" => "defer")), "method");
            // line 4
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/admin.min.js"), 1 => array("loading" => "defer")), "method");
            // line 5
            echo "
";
            // line 6
            if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") || ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "edge"))) {
                // line 7
                echo "    ";
                $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/form-attr.polyfill.js")), "method");
            }
            // line 9
            echo "
";
            // line 10
            try {
                $this->loadTemplate("partials/javascripts-extra.html.twig", "partials/javascripts.html.twig", 10)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
    }

    public function getTemplateName()
    {
        return "partials/javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  36 => 9,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/javascripts.html.twig", "/home/xegaorhd/public_html/_apps/vih+/user/plugins/admin/themes/grav/templates/partials/javascripts.html.twig");
    }
}
