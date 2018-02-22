<?php

/* themes.html.twig */
class __TwigTemplate_8a6d33ae40fce78615897c3dfbee6825e980be765bb37c1a89ad58c2a11090c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "themes.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["installing"] = (is_string($__internal_fcd1c2b8065819cecf57c2e37aa81f13dd48b5ea973d88ebe59ad2e0fc77e6df = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_bc64f3b66923d32482e2946d722e54b1c9bd60f6ec10a7b61c98bd855d24b240 = "install") && ('' === $__internal_bc64f3b66923d32482e2946d722e54b1c9bd60f6ec10a7b61c98bd855d24b240 || 0 === strpos($__internal_fcd1c2b8065819cecf57c2e37aa81f13dd48b5ea973d88ebe59ad2e0fc77e6df, $__internal_bc64f3b66923d32482e2946d722e54b1c9bd60f6ec10a7b61c98bd855d24b240)));
            // line 6
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 7
                $context["title"] = $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            } else {
                // line 9
                $context["installed"] = true;
                // line 12
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 13
                if ( !(isset($context["package"]) ? $context["package"] : null)) {
                    // line 14
                    $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                    // line 15
                    $context["installed"] = false;
                }
                // line 18
                $context["theme"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
                // line 19
                $context["title"] = (($this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())));
            }
        } else {
            // line 22
            $context["title"] = $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
        }
        // line 25
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 28
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 36
    public function block_titlebar($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 38
            echo "        <div class=\"button-bar\">
        ";
            // line 39
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 40
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 42
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes/install\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 44
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 45
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 51
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 52
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
        </div>
        ";
            } else {
                // line 57
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 61
            echo "        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
            echo "</h1>
    ";
        }
    }

    // line 65
    public function block_messages($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
    ";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "notifications", array()), "themes", array())) {
            // line 68
            echo "        <div class=\"themes-notifications-container hidden\"></div>
    ";
        }
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
        echo "    <div class=\"gpm gpm-themes\">
        ";
        // line 74
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 75
            echo "            ";
            $this->loadTemplate("partials/themes-list.html.twig", "themes.html.twig", 75)->display($context);
            // line 76
            echo "        ";
        } else {
            // line 77
            echo "            ";
            $this->loadTemplate("partials/themes-details.html.twig", "themes.html.twig", 77)->display($context);
            // line 78
            echo "        ";
        }
        // line 79
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 79,  211 => 78,  208 => 77,  205 => 76,  202 => 75,  200 => 74,  197 => 73,  194 => 72,  188 => 68,  186 => 67,  181 => 66,  178 => 65,  168 => 61,  160 => 58,  157 => 57,  151 => 54,  145 => 53,  142 => 52,  139 => 51,  134 => 49,  131 => 48,  128 => 47,  122 => 45,  120 => 44,  114 => 43,  107 => 42,  99 => 40,  97 => 39,  94 => 38,  91 => 37,  88 => 36,  81 => 32,  78 => 31,  71 => 28,  68 => 27,  65 => 26,  61 => 1,  58 => 25,  55 => 22,  51 => 19,  49 => 18,  46 => 15,  44 => 14,  42 => 13,  40 => 12,  38 => 9,  35 => 7,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
