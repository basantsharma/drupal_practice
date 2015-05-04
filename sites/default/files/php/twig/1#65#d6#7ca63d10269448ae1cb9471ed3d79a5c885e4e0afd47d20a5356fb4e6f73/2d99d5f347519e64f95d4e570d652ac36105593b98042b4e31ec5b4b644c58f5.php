<?php

/* core/themes/classy/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_65d67ca63d10269448ae1cb9471ed3d79a5c885e4e0afd47d20a5356fb4e6f73 extends Twig_Template
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
        echo "<li";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (((isset($context["is_active"]) ? $context["is_active"] : null)) ? ("is-active") : (""))), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 17,);
    }
}
