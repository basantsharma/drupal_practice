<?php

/* core/themes/classy/templates/field/field--text.html.twig */
class __TwigTemplate_39640c606c778dc9f372a8928d4c05e41238ff04527aafbb7b1015762406eb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field.html.twig", "core/themes/classy/templates/field/field--text.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "clearfix"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,  24 => 20,  11 => 1,);
    }
}
