<?php

/* modular/text.html.twig */
class __TwigTemplate_4e1a29e4a26bfeee6c63c496ceab258847864c303cf66a10c43b3759652db839 extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
    ";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 3
        echo "    ";
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropResize", array(0 => 400, 1 => 400), "method"), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image_align", array()))), "method");
            echo "
    ";
        }
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"modular-row callout\">
    {% set image = page.media.images|first %}
    {% if image %}
        {{ image.cropResize(400,400).html('','','align-'~page.header.image_align) }}
    {% endif %}
{{ content }}
</div>
";
    }
}
