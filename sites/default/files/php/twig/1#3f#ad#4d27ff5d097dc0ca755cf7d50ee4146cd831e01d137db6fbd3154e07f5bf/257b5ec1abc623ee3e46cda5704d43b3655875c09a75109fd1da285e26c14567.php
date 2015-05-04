<?php

/* core/themes/classy/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_3fad4d27ff5d097dc0ca755cf7d50ee4146cd831e01d137db6fbd3154e07f5bf extends Twig_Template
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
        // line 17
        $context["title_classes"] = array(0 => "label", 1 => ((        // line 19
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 22
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 23
            echo "  <h4";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
";
        }
        // line 25
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
";
        // line 26
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 27
            echo "  <div class=\"description\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 27,  36 => 26,  32 => 25,  24 => 23,  22 => 22,  20 => 19,  19 => 17,);
    }
}
