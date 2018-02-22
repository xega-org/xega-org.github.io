<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_9ea29188676f271dfda5a357d0aa9a72a6cf23acd53ea09516e470a2ad7eacb8 extends Twig_Template
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
        echo "<article id=\"post-";
        echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
        echo "\" class=\"post-";
        echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
        echo " post type-post status-publish format-standard has-post-thumbnail hentry category-cakes tag-no-excerpt\">

  <div class=\"entry-media ";
        // line 3
        if ((isset($context["truncate"]) ? $context["truncate"] : null)) {
            echo "entry-";
            if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "soundcloud", array())) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "vimeo", array()))) {
                echo "video";
            } else {
                echo "image";
            }
        } else {
            echo " resp_video";
        }
        echo "\">
    <figure class=\"post-thumbnail\">
      ";
        // line 5
        if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
            // line 6
            echo "      ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 338, 1 => 451), "method"), "html", array(0 => "", 1 => "", 2 => "attachment-receptar-featured size-receptar-featured wp-post-image"), "method");
            echo "
      ";
        } else {
            // line 8
            echo "      <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "global_featured_image", array());
            echo "\">
      ";
        }
        // line 10
        echo "    </figure>
  </div>

  <div class=\"entry-inner\">
    <div class=\"entry-inner";
        // line 14
        if ((isset($context["truncate"]) ? $context["truncate"] : null)) {
            echo "-content";
        }
        echo "\">

      <header class=\"entry-header\">
        ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 18
            echo "        <h1 class=\"entry-title\">
          ";
            // line 19
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 20
                echo "          <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
          ";
            }
            // line 22
            echo "          <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
        </h1>
        ";
        } else {
            // line 25
            echo "        <h1 class=\"entry-title\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h1>
        ";
        }
        // line 27
        echo "        ";
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 28
            echo "        <div class=\"entry-category\">
          ";
            // line 29
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array())) {
                // line 30
                echo "          <span class=\"cat-links entry-meta-element\">
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 32
                    echo "            <a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/category:";
                    echo $context["category"];
                    echo "\" rel=\"category tag\">";
                    echo $context["category"];
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "          </span>
          ";
            }
            // line 36
            echo "        </div>
        ";
        }
        // line 38
        echo "      </header>

      ";
        // line 40
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 41
            echo "      <div class=\"entry-meta entry-meta-bottom\">
        ";
            // line 42
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "when", array())) {
                // line 43
                echo "          <span class=\"entry-meta-element\">
            <i class=\"fa fa-clock-o fa-fw\" aria-hidden=\"true\"></i> ";
                // line 44
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "when", array());
                echo "
          </span>
        ";
            }
            // line 47
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "where", array())) {
                // line 48
                echo "          <span class=\"entry-meta-element\">
            <i class=\"fa fa-map-marker fa-fw\" aria-hidden=\"true\"></i> ";
                // line 49
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "where", array());
                echo "
          </span>
        ";
            }
            // line 52
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "accessible", array())) {
                // line 53
                echo "          <span class=\"entry-meta-element\">
            <i class=\"fa fa-wheelchair-alt fa-fw\" aria-hidden=\"true\"></i> ";
                // line 54
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "accessible", array());
                echo "
          </span>
        ";
            }
            // line 57
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "signlang", array())) {
                // line 58
                echo "          <span class=\"entry-meta-element\">
            <i class=\"fa fa-american-sign-language-interpreting fa-fw\" aria-hidden=\"true\"></i> ";
                // line 59
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "signlang", array());
                echo "
          </span>
        ";
            }
            // line 62
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitles", array())) {
                // line 63
                echo "          <span class=\"entry-meta-element\">
            <i class=\"fa fa-deaf fa-fw\" aria-hidden=\"true\"></i> ";
                // line 64
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitles", array());
                echo "
          </span>
        ";
            }
            // line 67
            echo "      </div>
      ";
        }
        // line 69
        echo "      <div class=\"clear\"></div>

      <div class=\"entry-content\">

        ";
        // line 73
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 74
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array())) {
                // line 75
                echo "        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
          <p>
            ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 78
                    echo "            ";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        echo "</br>";
                    }
                    // line 79
                    echo "            <strong>";
                    echo $this->getAttribute($context["item"], "option", array());
                    echo "</strong> ";
                    echo $this->getAttribute($context["item"], "value", array());
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 80
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "          </p>
        </div>
        ";
            }
            // line 84
            echo "
        ";
            // line 85
            if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "vimeo", array())) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "soundcloud", array()))) {
                // line 86
                echo "        <div class=\"fit-vids-style\">
        <style>
        .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
        </style>
        </div>

        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
          <div class=\"fl-video fl-embed-video\">
            <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
              ";
                // line 95
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "youtube", array())) {
                    // line 96
                    echo "              <iframe src=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "youtube", array());
                    echo "?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
              ";
                }
                // line 98
                echo "              ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "vimeo", array())) {
                    // line 99
                    echo "              <iframe src=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "vimeo", array());
                    echo "\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
              ";
                }
                // line 101
                echo "              ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "soundcloud", array())) {
                    // line 102
                    echo "              <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "soundcloud", array());
                    echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
              ";
                }
                // line 104
                echo "            </div>
          </div>
        </div>
        ";
            }
            // line 108
            echo "
        ";
            // line 109
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ingredients", array())) {
                // line 110
                echo "        <div class=\"fl-row fl-row-bg-none\">
          <div class=\"fl-row-content-wrap\">
          ";
                // line 112
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ingredients_title", array())) {
                    // line 113
                    echo "          <div class=\"fl-rich-text\">
            <h2>";
                    // line 114
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ingredients_title", array());
                    echo "</h2>
          </div>
          ";
                }
                // line 117
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ingredients", array()), 2));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 118
                    echo "          <div class=\"fl-col-group\">
            ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 120
                        echo "            <div class=\"fl-col fl-col-small\" style=\"width: ";
                        if ((count($context["row"]) < 2)) {
                            echo "100";
                        } else {
                            echo "50";
                        }
                        echo "%;\">
              <div class=\"fl-rich-text\">
                <h3>";
                        // line 122
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "</h3>
                <ul>
                  ";
                        // line 124
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "list", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                            // line 125
                            echo "                  <li>";
                            echo $context["ingredient"];
                            echo "</li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo "                </ul>
              </div>
            </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 131
                    echo "          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "        </div>
        </div>
        ";
            }
            // line 136
            echo "        ";
        }
        // line 137
        echo "        <div class=\"clear\"></div>

        ";
        // line 139
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 140
            echo "          ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 141
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 142
                echo "          ";
                $context["show_prev_next"] = true;
                // line 143
                echo "        ";
            }
            // line 144
            echo "        ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 145
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "summary", array()), "striptags", array()) == true)) {
                // line 146
                echo "            ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "when", array())) {
                    // line 147
                    echo "              <i class=\"fa fa-clock-o fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "when", array());
                    echo "<br>
            ";
                }
                // line 149
                echo "            ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "where", array())) {
                    // line 150
                    echo "              <i class=\"fa fa-map-marker fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "where", array());
                    echo "<br>
            ";
                }
                // line 152
                echo "            ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "accessible", array())) {
                    // line 153
                    echo "              <i class=\"fa fa-wheelchair-alt fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "accessible", array());
                    echo "<br>
            ";
                }
                // line 155
                echo "            ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "signlang", array())) {
                    // line 156
                    echo "              <i class=\"fa fa-american-sign-language-interpreting fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "signlang", array());
                    echo "<br>
            ";
                }
                // line 158
                echo "            ";
                if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitles", array())) {
                    // line 159
                    echo "              <i class=\"fa fa-deaf fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitles", array());
                    echo "
            ";
                }
                // line 161
                echo "          ";
            } else {
                // line 162
                echo "            ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
                echo "
          ";
            }
            // line 164
            echo "        ";
        } elseif ((isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 165
            echo "          ";
            echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550);
            echo "
        ";
        } else {
            // line 167
            echo "          ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
          ";
            // line 168
            $context["show_prev_next"] = true;
            // line 169
            echo "        ";
        }
        // line 170
        echo "
        ";
        // line 171
        if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 172
            echo "        ";
            if (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
                // line 173
                echo "        <div class=\"link-more\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("READ_MORE");
                echo "</a></div>
        ";
            } elseif (            // line 174
(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 175
                echo "        <div class=\"link-more\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("READ_MORE");
                echo "</a></div>
        ";
            }
            // line 177
            echo "        ";
        }
        // line 178
        echo "
        ";
        // line 179
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 180
            echo "        <div class=\"sharedaddy sd-sharing-enabled\">
          <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
            <h3 class=\"sd-title\">";
            // line 182
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SHARE");
            echo "</h3>
            <div class=\"sd-content\">
              <ul>
                <li class=\"share-facebook\">
                  <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 186
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "\"><span>Facebook</span></a>
                </li>
                <li class=\"share-twitter\">
                  <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status=";
            // line 189
            echo twig_replace_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), array(" " => "%20"));
            echo "-";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "\"><span>Twitter</span></a>
                </li>
                <li class=\"share-google-plus-1\">
                  <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url=";
            // line 192
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "\"><span>Google</span></a>
                </li>
                <li class=\"share-pinterest\">
                  <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url=";
            // line 195
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "\"><span>Pinterest</span></a>
                </li>
                <li class=\"share-end\"></li>
              </ul>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
        ";
        }
        // line 209
        echo "      </div>

      ";
        // line 211
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 212
            echo "      <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
        <h3 class=\"jp-relatedposts-headline\"><em>";
            // line 213
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RELATED_POSTS");
            echo "</em></h3>
        <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
          ";
            // line 215
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 215)->display($context);
            // line 216
            echo "        </div>
      </div>
      <hr/>
      ";
        }
        // line 220
        echo "
      ";
        // line 221
        if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 222
            echo "      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "provider", array()))) {
                // line 223
                echo "      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
        <h2 class=\"comments-title\">Comments:</h2>
          ";
                // line 226
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "provider", array())));
                echo "
        </div>
      </div>
      ";
            }
            // line 230
            echo "
      ";
            // line 231
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 232
                echo "      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
          <h2 class=\"comments-title\">";
                // line 234
                echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array()));
                echo " Comments:</h2>
          ";
                // line 235
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 235)->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null))));
                // line 236
                echo "        </div>
      </div>
      ";
            }
            // line 239
            echo "
      ";
        }
        // line 241
        echo "    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 241,  678 => 239,  673 => 236,  671 => 235,  667 => 234,  663 => 232,  661 => 231,  658 => 230,  651 => 226,  646 => 223,  643 => 222,  641 => 221,  638 => 220,  632 => 216,  630 => 215,  625 => 213,  622 => 212,  620 => 211,  616 => 209,  597 => 195,  589 => 192,  579 => 189,  571 => 186,  564 => 182,  560 => 180,  558 => 179,  555 => 178,  552 => 177,  544 => 175,  542 => 174,  535 => 173,  532 => 172,  530 => 171,  527 => 170,  524 => 169,  522 => 168,  517 => 167,  511 => 165,  508 => 164,  502 => 162,  499 => 161,  493 => 159,  490 => 158,  484 => 156,  481 => 155,  475 => 153,  472 => 152,  466 => 150,  463 => 149,  457 => 147,  454 => 146,  451 => 145,  448 => 144,  445 => 143,  442 => 142,  440 => 141,  435 => 140,  433 => 139,  429 => 137,  426 => 136,  421 => 133,  414 => 131,  405 => 127,  396 => 125,  392 => 124,  387 => 122,  377 => 120,  373 => 119,  370 => 118,  365 => 117,  359 => 114,  356 => 113,  354 => 112,  350 => 110,  348 => 109,  345 => 108,  339 => 104,  333 => 102,  330 => 101,  324 => 99,  321 => 98,  315 => 96,  313 => 95,  302 => 86,  300 => 85,  297 => 84,  292 => 81,  278 => 80,  270 => 79,  265 => 78,  248 => 77,  244 => 75,  241 => 74,  239 => 73,  233 => 69,  229 => 67,  223 => 64,  220 => 63,  217 => 62,  211 => 59,  208 => 58,  205 => 57,  199 => 54,  196 => 53,  193 => 52,  187 => 49,  184 => 48,  181 => 47,  175 => 44,  172 => 43,  170 => 42,  167 => 41,  165 => 40,  161 => 38,  157 => 36,  153 => 34,  129 => 32,  112 => 31,  109 => 30,  107 => 29,  104 => 28,  101 => 27,  93 => 25,  84 => 22,  78 => 20,  76 => 19,  73 => 18,  71 => 17,  63 => 14,  57 => 10,  49 => 8,  43 => 6,  41 => 5,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article id=\"post-{{ loop.index }}\" class=\"post-{{ loop.index }} post type-post status-publish format-standard has-post-thumbnail hentry category-cakes tag-no-excerpt\">

  <div class=\"entry-media {% if truncate %}entry-{% if page.header.youtube or page.header.soundcloud or page.header.vimeo %}video{% else %}image{% endif %}{% else %} resp_video{% endif %}\">
    <figure class=\"post-thumbnail\">
      {% if page.media.images|first %}
      {{ page.media.images|first.cropZoom(338,451).html('','', 'attachment-receptar-featured size-receptar-featured wp-post-image') }}
      {% else %}
      <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"{{ theme_url }}/images/{{ site.global_featured_image }}\">
      {% endif %}
    </figure>
  </div>

  <div class=\"entry-inner\">
    <div class=\"entry-inner{% if truncate %}-content{% endif %}\">

      <header class=\"entry-header\">
        {% if page.header.link %}
        <h1 class=\"entry-title\">
          {% if page.header.continue_link is not sameas(false) %}
          <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
          {% endif %}
          <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
        </h1>
        {% else %}
        <h1 class=\"entry-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
        {% endif %}
        {% if not truncate %}
        <div class=\"entry-category\">
          {% if page.taxonomy.category %}
          <span class=\"cat-links entry-meta-element\">
            {% for category in page.taxonomy.category %}
            <a href=\"{{ base_url }}/category:{{ category }}\" rel=\"category tag\">{{ category }}{% if not loop.last %}, {% endif %}</a>
            {% endfor %}
          </span>
          {% endif %}
        </div>
        {% endif %}
      </header>

      {% if not truncate %}
      <div class=\"entry-meta entry-meta-bottom\">
        {% if page.header.when %}
          <span class=\"entry-meta-element\">
            <i class=\"fa fa-clock-o fa-fw\" aria-hidden=\"true\"></i> {{ page.header.when }}
          </span>
        {% endif %}
        {% if page.header.where %}
          <span class=\"entry-meta-element\">
            <i class=\"fa fa-map-marker fa-fw\" aria-hidden=\"true\"></i> {{ page.header.where }}
          </span>
        {% endif %}
        {% if page.header.accessible %}
          <span class=\"entry-meta-element\">
            <i class=\"fa fa-wheelchair-alt fa-fw\" aria-hidden=\"true\"></i> {{ page.header.accessible }}
          </span>
        {% endif %}
        {% if page.header.signlang %}
          <span class=\"entry-meta-element\">
            <i class=\"fa fa-american-sign-language-interpreting fa-fw\" aria-hidden=\"true\"></i> {{ page.header.signlang }}
          </span>
        {% endif %}
        {% if page.header.subtitles %}
          <span class=\"entry-meta-element\">
            <i class=\"fa fa-deaf fa-fw\" aria-hidden=\"true\"></i> {{ page.header.subtitles }}
          </span>
        {% endif %}
      </div>
      {% endif %}
      <div class=\"clear\"></div>

      <div class=\"entry-content\">

        {% if not truncate %}
        {% if page.header.description %}
        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
          <p>
            {% for item in page.header.description %}
            {% if loop.last %}</br>{% endif %}
            <strong>{{ item.option }}</strong> {{ item.value }}{% if not loop.last %}, {% endif %}
            {% endfor %}
          </p>
        </div>
        {% endif %}

        {% if page.header.youtube or page.header.vimeo or page.header.soundcloud %}
        <div class=\"fit-vids-style\">
        <style>
        .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
        </style>
        </div>

        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
          <div class=\"fl-video fl-embed-video\">
            <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
              {% if page.header.youtube %}
              <iframe src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
              {% endif %}
              {% if page.header.vimeo %}
              <iframe src=\"{{ page.header.vimeo }}\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
              {% endif %}
              {% if page.header.soundcloud %}
              <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
              {% endif %}
            </div>
          </div>
        </div>
        {% endif %}

        {% if page.header.ingredients %}
        <div class=\"fl-row fl-row-bg-none\">
          <div class=\"fl-row-content-wrap\">
          {% if page.header.ingredients_title %}
          <div class=\"fl-rich-text\">
            <h2>{{ page.header.ingredients_title }}</h2>
          </div>
          {% endif %}
          {% for row in page.header.ingredients|batch(2) %}
          <div class=\"fl-col-group\">
            {% for item in row %}
            <div class=\"fl-col fl-col-small\" style=\"width: {% if row|count < 2 %}100{% else %}50{% endif %}%;\">
              <div class=\"fl-rich-text\">
                <h3>{{ item.title }}</h3>
                <ul>
                  {% for ingredient in item.list %}
                  <li>{{ ingredient }}</li>
                  {% endfor %}
                </ul>
              </div>
            </div>
            {% endfor %}
          </div>
          {% endfor %}
        </div>
        </div>
        {% endif %}
        {% endif %}
        <div class=\"clear\"></div>

        {% if page.header.continue_link is sameas(false) %}
          {{ page.content }}
        {% if not truncate %}
          {% set show_prev_next = true %}
        {% endif %}
        {% elseif truncate and page.summary != page.content %}
          {% if site.summary.striptags == true %}
            {% if page.header.when %}
              <i class=\"fa fa-clock-o fa-fw\" aria-hidden=\"true\"></i> {{ page.header.when }}<br>
            {% endif %}
            {% if page.header.where %}
              <i class=\"fa fa-map-marker fa-fw\" aria-hidden=\"true\"></i> {{ page.header.where }}<br>
            {% endif %}
            {% if page.header.accessible %}
              <i class=\"fa fa-wheelchair-alt fa-fw\" aria-hidden=\"true\"></i> {{ page.header.accessible }}<br>
            {% endif %}
            {% if page.header.signlang %}
              <i class=\"fa fa-american-sign-language-interpreting fa-fw\" aria-hidden=\"true\"></i> {{ page.header.signlang }}<br>
            {% endif %}
            {% if page.header.subtitles %}
              <i class=\"fa fa-deaf fa-fw\" aria-hidden=\"true\"></i> {{ page.header.subtitles }}
            {% endif %}
          {% else %}
            {{ page.summary }}
          {% endif %}
        {% elseif truncate %}
          {{ page.content|truncate(550) }}
        {% else %}
          {{ page.content }}
          {% set show_prev_next = true %}
        {% endif %}

        {% if page.header.continue_link is not sameas(false) %}
        {% if truncate and page.summary != page.content %}
        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a></div>
        {% elseif truncate %}
        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a></div>
        {% endif %}
        {% endif %}

        {% if not truncate %}
        <div class=\"sharedaddy sd-sharing-enabled\">
          <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
            <h3 class=\"sd-title\">{{ 'SHARE'|t }}</h3>
            <div class=\"sd-content\">
              <ul>
                <li class=\"share-facebook\">
                  <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Facebook</span></a>
                </li>
                <li class=\"share-twitter\">
                  <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Twitter</span></a>
                </li>
                <li class=\"share-google-plus-1\">
                  <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Google</span></a>
                </li>
                <li class=\"share-pinterest\">
                  <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Pinterest</span></a>
                </li>
                <li class=\"share-end\"></li>
              </ul>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
        {% endif %}
      </div>

      {% if not truncate %}
      <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
        <h3 class=\"jp-relatedposts-headline\"><em>{{ 'RELATED_POSTS'|t }}</em></h3>
        <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
          {% include 'partials/relatedpages.html.twig' %}
        </div>
      </div>
      <hr/>
      {% endif %}

      {% if not truncate %}
      {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
        <h2 class=\"comments-title\">Comments:</h2>
          {{ jscomments(config.plugins.jscomments.provider) }}
        </div>
      </div>
      {% endif %}

      {% if config.plugins.comments.enabled %}
      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
          <h2 class=\"comments-title\">{{ grav.twig.comments|length }} Comments:</h2>
          {% include 'partials/comments.html.twig' with {'page': page} %}
        </div>
      </div>
      {% endif %}

      {% endif %}
    </div>
  </div>
</article>
", "partials/blog_item.html.twig", "/home/xegaorhd/public_html/_apps/orgullo/2016/user/themes/receptar-xega/templates/partials/blog_item.html.twig");
    }
}
