<?php

/* modular/map.html.twig */
class __TwigTemplate_c0ccf741ca5ee934d50ff7d51d08843942cd4c5b47a9231ad55a7c5abc8ee679 extends Twig_Template
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
        echo ($context["content"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ content }}
", "modular/map.html.twig", "C:\\Users\\Miguel\\Documents\\github.com\\xega-org\\dev\\grav\\prueba\\user\\themes\\xegamatter\\templates\\modular\\map.html.twig");
    }
}
