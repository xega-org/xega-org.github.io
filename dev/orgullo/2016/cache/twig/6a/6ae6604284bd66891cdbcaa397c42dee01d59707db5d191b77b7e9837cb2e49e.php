<?php

/* partials/footer.html.twig */
class __TwigTemplate_088fcb2b78bb63b1f3a23cdf2aea1ace69b2cf0b767de7e5492a0cacb964c15c extends Twig_Template
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
        echo "<footer id=\"colophon\" class=\"site-footer\" itemscope=\"\" itemtype=\"http://schema.org/WPFooter\">
   <div class=\"site-footer-area footer-area-site-info\">
      <div class=\"site-info-container\">
         <div class=\"site-info\" role=\"contentinfo\">
           ";
        // line 5
        if ($this->getAttribute(($context["site"] ?? null), "copyright", array())) {
            // line 6
            echo "           ";
            echo $this->getAttribute(($context["site"] ?? null), "copyright", array());
            echo "
           ";
        }
        // line 8
        echo "         </div>
      </div>
   </div>
</footer>
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
        return array (  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"colophon\" class=\"site-footer\" itemscope=\"\" itemtype=\"http://schema.org/WPFooter\">
   <div class=\"site-footer-area footer-area-site-info\">
      <div class=\"site-info-container\">
         <div class=\"site-info\" role=\"contentinfo\">
           {% if site.copyright %}
           {{ site.copyright }}
           {% endif %}
         </div>
      </div>
   </div>
</footer>
", "partials/footer.html.twig", "C:\\Users\\Miguel\\Documents\\github.com\\xega-org\\xega-org.github.io\\dev\\orgullo\\2016\\user\\themes\\receptar-xega\\templates\\partials\\footer.html.twig");
    }
}
