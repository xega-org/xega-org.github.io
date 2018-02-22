<?php

/* error.html.twig */
class __TwigTemplate_3e71a3762ac980dfebeb6cd42b07ae2f6669a641e74b3e58918b2fe7a9129a50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["template_body_classes"] = "error404 is-not-singular not-front-page not-scrolled";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section id=\"error-404\" class=\"error-404\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">Error ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
    </header>
    <p>";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</p>
  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 7,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% set template_body_classes = 'error404 is-not-singular not-front-page not-scrolled' %}*/
/* {% block content %}*/
/* <main id="main" class="site-main clearfix" role="main">*/
/*   <section id="error-404" class="error-404">*/
/*     <header class="page-header">*/
/*       <h1 class="page-title">Error {{ page.header.http_response_code }}</h1>*/
/*     </header>*/
/*     <p>{{ page.content }}</p>*/
/*   </section>*/
/* </main>*/
/* {% endblock %}*/
/* */
