<?php

/* partials/slider.html.twig */
class __TwigTemplate_603b0e5ff465153f8fa929aa551622c45a7819b25f1bde30e2edc8178cf84145 extends Twig_Template
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
        echo "<div id=\"site-banner\" class=\"site-banner enable-slider\">
  <div class=\"site-banner-inner\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slider", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "      <article data-id=\"post-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"post-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo " post type-post status-publish format-standard has-post-thumbnail hentry tag-no-excerpt is-featured\" itemscope itemprop=\"blogPost\" itemtype=\"http://schema.org/BlogPosting\">
            ";
            // line 5
            if ($this->getAttribute($context["slide"], "image", array())) {
                // line 6
                echo "              <div class=\"site-banner-media\">
                <figure class=\"site-banner-thumbnail\" title=\"";
                // line 7
                echo $this->getAttribute($context["slide"], "title", array());
                echo "\" itemprop=\"image\">
                  <img width=\"1920\" height=\"640\" src=\"";
                // line 8
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/slideshow/";
                echo $this->getAttribute($context["slide"], "image", array());
                echo "\" class=\"attachment-receptar-banner size-receptar-banner wp-post-image\" alt=\"";
                echo $this->getAttribute($context["slide"], "title", array());
                echo "\"/>
                </figure>
              </div>
            ";
            }
            // line 12
            echo "            ";
            if ($this->getAttribute($context["slide"], "title", array())) {
                // line 13
                echo "              <div class=\"site-banner-header\">
                <h1 class=\"entry-title\" itemprop=\"name\">
                  <a href=\"";
                // line 15
                echo $this->getAttribute($context["slide"], "url", array());
                echo "\" class=\"highlight\" rel=\"bookmark\">";
                echo $this->getAttribute($context["slide"], "title", array());
                echo "</a>
                </h1>
              </div>
            ";
            }
            // line 19
            echo "      </article>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  83 => 19,  74 => 15,  70 => 13,  67 => 12,  56 => 8,  52 => 7,  49 => 6,  47 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="site-banner" class="site-banner enable-slider">*/
/*   <div class="site-banner-inner">*/
/*       {% for slide in site.slider %}*/
/*       <article data-id="post-{{ loop.index }}" class="post-{{ loop.index }} post type-post status-publish format-standard has-post-thumbnail hentry tag-no-excerpt is-featured" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">*/
/*             {% if slide.image %}*/
/*               <div class="site-banner-media">*/
/*                 <figure class="site-banner-thumbnail" title="{{ slide.title }}" itemprop="image">*/
/*                   <img width="1920" height="640" src="{{ theme_url }}/images/slideshow/{{ slide.image }}" class="attachment-receptar-banner size-receptar-banner wp-post-image" alt="{{ slide.title }}"/>*/
/*                 </figure>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if slide.title %}*/
/*               <div class="site-banner-header">*/
/*                 <h1 class="entry-title" itemprop="name">*/
/*                   <a href="{{ slide.url }}" class="highlight" rel="bookmark">{{ slide.title }}</a>*/
/*                 </h1>*/
/*               </div>*/
/*             {% endif %}*/
/*       </article>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
