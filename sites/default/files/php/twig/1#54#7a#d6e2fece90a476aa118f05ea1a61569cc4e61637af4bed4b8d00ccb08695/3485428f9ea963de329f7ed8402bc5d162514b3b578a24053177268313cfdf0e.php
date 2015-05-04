<?php

/* core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig */
class __TwigTemplate_547ad6e2fece90a476aa118f05ea1a61569cc4e61637af4bed4b8d00ccb08695 extends Twig_Template
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
        // line 22
        $context["classes"] = array(0 => "views-display-setting", 1 => "clearfix", 2 => "views-ui-display-tab-setting", 3 => ((        // line 26
(isset($context["defaulted"]) ? $context["defaulted"] : null)) ? ("defaulted") : ("")), 4 => ((        // line 27
(isset($context["overridden"]) ? $context["overridden"] : null)) ? ("overridden") : ("")));
        // line 30
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 31
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 32
            echo "<span class=\"label\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</span>";
        }
        // line 34
        echo "  ";
        if ((isset($context["settings_links"]) ? $context["settings_links"] : null)) {
            // line 35
            echo "    ";
            echo $this->env->getExtension('drupal_core')->renderVar(twig_drupal_join_filter((isset($context["settings_links"]) ? $context["settings_links"] : null), "<span class=\"label\">&nbsp;|&nbsp;</span>"));
            echo "
  ";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 37,  38 => 35,  35 => 34,  30 => 32,  28 => 31,  23 => 30,  21 => 27,  20 => 26,  19 => 22,);
    }
}
