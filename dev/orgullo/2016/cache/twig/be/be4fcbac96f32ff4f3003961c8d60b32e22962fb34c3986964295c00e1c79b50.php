<?php

/* home.html.twig */
class __TwigTemplate_44a378408eb9d8747d6c15248a15c0d768778283a133d24023e3814e4a8793b3 extends Twig_Template
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
        $this->loadTemplate("home.html.twig", "home.html.twig", 1, "292320623")->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* home.html.twig */
class __TwigTemplate_44a378408eb9d8747d6c15248a15c0d768778283a133d24023e3814e4a8793b3_292320623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 8
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 9
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 11
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 12
            $context["base_url"] = "";
        }
        // line 15
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 16
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        // line 4
        echo "      ";
        $this->loadTemplate("partials/slider.html.twig", "home.html.twig", 4)->display($context);
        // line 5
        echo "    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "
    ";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

        <div id=\"posts\" class=\"posts posts-list clearfix\">
          ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "            ";
            $this->loadTemplate("partials/blog_item.html.twig", "home.html.twig", 25)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 26
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>

        ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 30
            echo "        ";
            $this->loadTemplate("pagination.html.twig", "home.html.twig", 30)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 31
            echo "        ";
        }
        // line 32
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 32,  141 => 31,  138 => 30,  136 => 29,  132 => 27,  118 => 26,  115 => 25,  98 => 24,  92 => 21,  89 => 20,  86 => 19,  82 => 5,  79 => 4,  76 => 3,  72 => 1,  69 => 16,  67 => 15,  64 => 12,  62 => 11,  60 => 9,  58 => 8,  56 => 7,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% block slider %}*/
/*       {% include 'partials/slider.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% set collection = page.collection() %}*/
/*     {% set base_url = page.url %}*/
/*     {% set feed_url = base_url %}*/
/* */
/*     {% if base_url == '/' %}*/
/*     {% set base_url = '' %}*/
/*     {% endif %}*/
/* */
/*     {% if base_url == base_url_relative %}*/
/*     {% set feed_url = base_url~'/'~page.slug %}*/
/*     {% endif  %}*/
/* */
/*     {% block content %}*/
/* */
/*     {{ page.content }}*/
/* */
/*         <div id="posts" class="posts posts-list clearfix">*/
/*           {% for child in collection %}*/
/*             {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}*/
/*           {% endfor %}*/
/*         </div>*/
/* */
/*         {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*         {% include 'pagination.html.twig' with {'pagination':collection.params.pagination} %}*/
/*         {% endif %}*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
