<?php

/* partials/base.html.twig */
class __TwigTemplate_30a0469e1be6cbbb86ab970c4b66a634bed752bb08c9ceb76dfb42633cb0d553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"\" class='";
        // line 2
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 7)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 52
        echo "    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WB25H3G');</script>
  </head>
  <body id=\"top\" class=\"";
        // line 54
        if ((isset($context["template_body_classes"]) ? $context["template_body_classes"] : null)) {
            echo (isset($context["template_body_classes"]) ? $context["template_body_classes"] : null);
        } else {
            echo "fl-builder blog has-featured-posts is-not-singular";
        }
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-WB25H3G\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <div id=\"page\" class=\"hfeed site\">
      <div class=\"site-inner\">
        ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "        ";
        $this->displayBlock('slider', $context, $blocks);
        // line 62
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "      </div>
    </div>
  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\">
    <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
    ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:site_name\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "\">
    <meta property=\"og:image\" content=\"";
        // line 12
        if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
        } else {
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "global_featured_image", array());
        }
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 13
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        }
        echo "\">
    <meta property=\"og:description\" content=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "\">
    <meta property=\"fb:page_id\" content=\"129217690442168\">
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@xega\">
    <meta name=\"twitter:title\" content=\"";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        }
        echo "\">
    <meta name=\"twitter:description\" content=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "\">
    <meta name=\"twitter:image\" content=\"";
        // line 20
        if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
        } else {
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "global_featured_image", array());
        }
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">
    <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'>
    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    ";
        // line 47
        if ((isset($context["singular"]) ? $context["singular"] : null)) {
            // line 48
            echo "    <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url(";
            if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
            } else {
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/";
                echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "global_featured_image", array());
            }
            echo ")}</style>
    ";
        }
        // line 50
        echo "
    ";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slick.css"), "method");
        // line 27
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://genericons/genericons.css"), "method");
        // line 28
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/starter.css"), "method");
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 30
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/colors.css"), "method");
        // line 31
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jetpack.css"), "method");
        // line 32
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 33
        echo "    ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 7)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 8))) {
            // line 34
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 41
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/slick.min.js"), "method");
        // line 42
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/scripts-global.js"), "method");
        // line 43
        echo "
    ";
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "        ";
    }

    // line 61
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "        <div id=\"content\" class=\"site-content\">
          <div id=\"primary\" class=\"content-area\">
            ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "          </div>
        </div>
        ";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 71)->display($context);
        // line 72
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 72,  294 => 71,  291 => 70,  286 => 65,  280 => 66,  278 => 65,  274 => 63,  271 => 62,  266 => 61,  262 => 60,  259 => 59,  256 => 58,  251 => 43,  248 => 42,  245 => 41,  242 => 40,  239 => 39,  235 => 36,  232 => 35,  229 => 34,  226 => 33,  223 => 32,  220 => 31,  217 => 30,  214 => 29,  211 => 28,  208 => 27,  205 => 26,  202 => 25,  197 => 50,  185 => 48,  183 => 47,  177 => 45,  175 => 39,  169 => 37,  167 => 25,  160 => 21,  150 => 20,  146 => 19,  138 => 18,  131 => 14,  123 => 13,  113 => 12,  109 => 11,  104 => 9,  101 => 8,  99 => 7,  91 => 6,  88 => 5,  85 => 4,  77 => 73,  75 => 70,  72 => 69,  69 => 62,  66 => 61,  64 => 58,  52 => 54,  48 => 52,  46 => 4,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
  <head>
    {% block head %}
    <meta charset=\"utf-8\">
    <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"{{ 'SITE.DESCRIPTION'|t }}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:site_name\" content=\"{{ 'SITE.TITLE'|t|e('html') }}\">
    <meta property=\"og:image\" content=\"{% if page.media.images|first %}{{ page.media.images|first.url }}{% else %}{{ theme_url }}/images/{{ site.global_featured_image }}{% endif %}\">
    <meta property=\"og:title\" content=\"{% if header.title %}{{ header.title|e('html') }}{% else %}{{ 'SITE.TITLE'|t|e('html') }}{% endif %}\">
    <meta property=\"og:description\" content=\"{{ 'SITE.DESCRIPTION'|t }}\">
    <meta property=\"fb:page_id\" content=\"129217690442168\">
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@xega\">
    <meta name=\"twitter:title\" content=\"{% if header.title %}{{ header.title|e('html') }}{% else %}{{ 'SITE.TITLE'|t|e('html') }}{% endif %}\">
    <meta name=\"twitter:description\" content=\"{{ 'SITE.DESCRIPTION'|t }}\">
    <meta name=\"twitter:image\" content=\"{% if page.media.images|first %}{{ page.media.images|first.url }}{% else %}{{ theme_url }}/images/{{ site.global_featured_image }}{% endif %}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">
    <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'>
    {% block stylesheets %}
    {% do assets.addCss('theme://css/slick.css') %}
    {% do assets.addCss('theme://genericons/genericons.css') %}
    {% do assets.addCss('theme://css/starter.css') %}
    {% do assets.addCss('theme://css/style.css') %}
    {% do assets.addCss('theme://css/colors.css') %}
    {% do assets.addCss('theme://css/jetpack.css') %}
    {% do assets.addCss('theme://css/lightbox.css') %}
    {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
    {% do assets.addCss('theme://css/ie.css') %}
    {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
    {% do assets.add('jquery',101) %}
    {% do assets.add('theme://js/slick.min.js') %}
    {% do assets.add('theme://js/scripts-global.js') %}

    {% endblock %}
    {{ assets.js() }}

    {% if singular %}
    <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url({% if page.media.images|first %}{{ page.media.images|first.url }}{% else %}{{ theme_url }}/images/{{ site.global_featured_image }}{% endif %})}</style>
    {% endif %}

    {% endblock head %}
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WB25H3G');</script>
  </head>
  <body id=\"top\" class=\"{% if template_body_classes %}{{ template_body_classes }}{% else %}fl-builder blog has-featured-posts is-not-singular{% endif %}{{ page.header.body_classes }}\">
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-WB25H3G\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <div id=\"page\" class=\"hfeed site\">
      <div class=\"site-inner\">
        {% block header %}
        {% include 'partials/header.html.twig' %}
        {% endblock %}
        {% block slider %}{% endblock %}
        {% block body %}
        <div id=\"content\" class=\"site-content\">
          <div id=\"primary\" class=\"content-area\">
            {% block content %}{% endblock %}
          </div>
        </div>
        {% endblock %}

        {% block footer %}
        {% include 'partials/footer.html.twig' %}
        {% endblock %}
      </div>
    </div>
  </body>
</html>
", "partials/base.html.twig", "/home/xegaorhd/public_html/_apps/orgullo/2016/user/themes/receptar-xega/templates/partials/base.html.twig");
    }
}
