<?php

/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_fc6708848c9a4f3a17b609b5bd5aa495a42db961f407c69723fac162f2b19dab extends Twig_Template
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
        echo "<div class=\"form-tabs ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "html", null, true);
        echo "\">

";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()), "tab", array())) {
            // line 4
            echo "    ";
            $context["active"] = $this->getAttribute($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()), "tab", array());
        } elseif ($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "active", array())) {
            // line 6
            echo "    ";
            $context["active"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "active", array());
        } else {
            // line 8
            echo "    ";
            $context["active"] = 1;
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 12
            echo "    ";
            $context["storedValue"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->jsonDecodeFilter(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie("grav-tabs-state"), "{}"));
            // line 13
            echo "    ";
            $context["tabsKey"] = twig_join_filter(twig_get_array_keys_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())), ".");
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 15
                echo "        ";
                if ((($this->getAttribute($context["tab"], "type", array()) == "tab") && (twig_test_empty($this->getAttribute($context["tab"], "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFunc($this->getAttribute($context["tab"], "security", array())))))) {
                    // line 16
                    echo "        <input type=\"radio\" name=\"tab-";
                    echo twig_escape_filter($this->env, (isset($context["tabsKey"]) ? $context["tabsKey"] : null), "html", null, true);
                    echo "\" id=\"tab-";
                    echo twig_escape_filter($this->env, ((isset($context["tabsKey"]) ? $context["tabsKey"] : null) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute($context["tab"], "name", array())), "html", null, true);
                    echo "\" class=\"tab-head no-form\" ";
                    echo (((($this->getAttribute((isset($context["storedValue"]) ? $context["storedValue"] : null), ("tab-" . (isset($context["tabsKey"]) ? $context["tabsKey"] : null))) == ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute($context["tab"], "name", array()))) || ((isset($context["active"]) ? $context["active"] : null) == $this->getAttribute($context["loop"], "index", array())))) ? ("checked=\"checked\"") : (""));
                    echo "/>
        <label for=\"tab-";
                    // line 17
                    echo twig_escape_filter($this->env, ((isset($context["tabsKey"]) ? $context["tabsKey"] : null) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                    echo "\">
            ";
                    // line 18
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute($context["tab"], "title", array())), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["tab"], "title", array())), "html", null, true);
                    }
                    // line 19
                    echo "        </label>
        ";
                }
                // line 21
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    <div class=\"tab-body-wrapper\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 24
                echo "            ";
                if (($this->getAttribute($context["field"], "type", array()) == "tab")) {
                    // line 25
                    echo "                ";
                    if ((twig_test_empty($this->getAttribute($context["field"], "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFunc($this->getAttribute($context["field"], "security", array()))))) {
                        // line 26
                        echo "                    ";
                        $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                        // line 27
                        echo "                    <div id=\"tab-body-";
                        echo twig_escape_filter($this->env, ((isset($context["tabsKey"]) ? $context["tabsKey"] : null) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                        echo "\" class=\"tab-body\">
                        ";
                        // line 28
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/tabs/tabs.html.twig", 28)->display($context);
                        // line 29
                        echo "                    </div>
                ";
                    }
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </div>
";
        }
        // line 35
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 35,  168 => 33,  154 => 32,  151 => 31,  147 => 29,  145 => 28,  140 => 27,  137 => 26,  134 => 25,  131 => 24,  114 => 23,  111 => 22,  97 => 21,  93 => 19,  87 => 18,  83 => 17,  72 => 16,  69 => 15,  51 => 14,  48 => 13,  45 => 12,  43 => 11,  40 => 10,  36 => 8,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
