<?php

/* forms/fields/editor/editor.html.twig */
class __TwigTemplate_69d152dc7339b77ee652c0bdfa792a4378d4751c6ae7991c589de8589d45d3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        if ( !(isset($context["codemirrorOptions"]) ? $context["codemirrorOptions"] : null)) {
            // line 3
            echo "    ";
            $context["codemirrorOptions"] = twig_array_merge(array("mode" => "gfm", "ignore" => array(0 => "code", 1 => "preview")), (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "codemirror", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "codemirror", array()), array())) : (array())));
        }
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('label', $context, $blocks);
        // line 12
        $this->displayBlock('field', $context, $blocks);
    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())) {
            // line 8
            echo "        ";
            $context["hint"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) ? ((("data-hint=\"" . $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()))) . "\"")) : (""));
            // line 9
            echo "        <div class=\"form-label form-field hint--bottom\" ";
            echo twig_escape_filter($this->env, (isset($context["hint"]) ? $context["hint"] : null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</div>
    ";
        }
    }

    // line 12
    public function block_field($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"form-field ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"form-data grav-editor\">
            <div class=\"grav-editor-content\">
                <textarea
                    data-grav-editor=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("codemirror" => (isset($context["codemirrorOptions"]) ? $context["codemirrorOptions"] : null))), "html_attr");
        echo "\"
                    data-grav-editor-mode=\"editor\"
                    name=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
                    ";
        // line 20
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
            echo "\" ";
        }
        // line 21
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 22
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 23
        echo "                    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 24
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())), "html", null, true);
            echo "\"";
        }
        // line 25
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 26
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 27
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 28
        echo "                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 29
        echo "                    ";
        if (!twig_in_filter("preview", $this->getAttribute((isset($context["codemirrorOptions"]) ? $context["codemirrorOptions"] : null), "ignore", array()))) {
            echo "data-grav-urlpreview=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
            echo ".json\"";
        }
        // line 30
        echo "                >";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"), "html");
        echo "</textarea>
            </div>
            ";
        // line 32
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "resizer", array(), "any", true, true) || !twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "resizer", array()), array(0 => "off", 1 => "false", 2 => 0)))) {
            echo "<div class=\"grav-editor-resizer\"></div>";
        }
        // line 33
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/editor/editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 33,  145 => 32,  138 => 30,  129 => 29,  124 => 28,  119 => 27,  114 => 26,  109 => 25,  102 => 24,  97 => 23,  90 => 22,  83 => 21,  77 => 20,  73 => 19,  68 => 17,  60 => 13,  57 => 12,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  34 => 12,  32 => 6,  29 => 5,  25 => 3,  23 => 2,  21 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
