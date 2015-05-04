<?php

/* core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_077a0003ff8bd2d829de70c8730ffbc4b152aa8b79305fd7216fec3a282bd1c6 extends Twig_Template
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
        // line 21
        $context["classes"] = array(0 => "views-ui-display-tab-bucket", 1 => ((        // line 23
(isset($context["name"]) ? $context["name"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["name"]) ? $context["name"] : null))) : ("")), 2 => ((        // line 24
(isset($context["overridden"]) ? $context["overridden"] : null)) ? ("overridden") : ("")));
        // line 27
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 28
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 29
            echo "<h3>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>";
        }
        // line 31
        echo "  ";
        if ((isset($context["actions"]) ? $context["actions"] : null)) {
            // line 32
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["actions"]) ? $context["actions"] : null), "html", null, true);
        }
        // line 34
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 34,  38 => 32,  35 => 31,  30 => 29,  28 => 28,  23 => 27,  21 => 24,  20 => 23,  19 => 21,);
    }
}
