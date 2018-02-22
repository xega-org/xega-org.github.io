<?php

/* partials/github_note.html.twig */
class __TwigTemplate_a7c89d1719ab7a77cf7ac198f3dc67702da450b68d3bd08f2ef0f1293e98a9f2 extends Twig_Template
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
        echo "<blockquote id=\"github-contrib\"><blockquote><blockquote><blockquote><blockquote>
<p>
    ";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GITHUB_NOTE");
        echo "

    ";
        // line 5
        $this->loadTemplate("partials/github_link.html.twig", "partials/github_note.html.twig", 5)->display($context);
        // line 6
        echo "</p>
</blockquote></blockquote></blockquote></blockquote></blockquote>
";
    }

    public function getTemplateName()
    {
        return "partials/github_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
