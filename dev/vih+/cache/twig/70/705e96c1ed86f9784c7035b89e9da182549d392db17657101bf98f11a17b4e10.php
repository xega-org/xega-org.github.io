<?php

/* partials/modal-update-packages.html.twig */
class __TwigTemplate_01a749801ebd037c2930122c358b361a2ac844dc3352b083289a7a70d2bc528e extends Twig_Template
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
        echo "<div class=\"remodal\"
     data-packages-modal
     data-remodal-id=\"update-packages\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"add-package-installing\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATING"), "html", null, true);
        echo "</h1>

            <div class=\"loading\">
                <p>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOADING"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"install-dependencies-package-container hidden\">
                <p><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEPENDENCIES_NOT_MET_MESSAGE"), "html", null, true);
        echo "</strong></p>

                <div class=\"type-install hidden\">
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_NOT_INSTALLED"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>
                <div class=\"type-update hidden\">
                    <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_NEED_UPDATE"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>
                <div class=\"type-ignore hidden\">
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_SUGGESTED_UPDATE"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                    <a data-";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "-action=\"install-dependencies-and-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"install-package-container hidden\">
                <p>
                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.READY_TO_UPDATE_PACKAGES"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                    <a data-";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "-action=\"install-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"install-package-error hidden\">
                <p>
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR_UPDATING_PACKAGES"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</button>
                </div>
            </div>

            <div class=\"installing-dependencies hidden\">
                <p>
                    ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLING_DEPENDENCIES"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"installing-package hidden\">
                <p>
                    ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATING_PACKAGES"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>

            <div class=\"installation-complete hidden\">
                <p>
                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_SUCCESSFULLY_UPDATED"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>
        </div>

    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/modal-update-packages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 81,  138 => 72,  128 => 65,  119 => 59,  110 => 53,  99 => 47,  95 => 46,  86 => 40,  75 => 34,  71 => 33,  63 => 28,  56 => 24,  49 => 20,  43 => 17,  34 => 11,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
