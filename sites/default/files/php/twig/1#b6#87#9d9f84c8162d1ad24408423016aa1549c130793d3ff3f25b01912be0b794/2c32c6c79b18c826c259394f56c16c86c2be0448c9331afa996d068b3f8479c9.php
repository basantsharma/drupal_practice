<?php

/* core/themes/classy/templates/user/username.html.twig */
class __TwigTemplate_b6879d9f84c8162d1ad24408423016aa1549c130793d3ff3f25b01912be0b794 extends Twig_Template
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
        // line 19
        if ((isset($context["link_path"]) ? $context["link_path"] : null)) {
            // line 20
            echo "<a";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "username"), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</a>";
        } else {
            // line 22
            echo "<span";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 22,  21 => 20,  19 => 19,);
    }
}
