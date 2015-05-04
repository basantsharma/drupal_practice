<?php

/* core/modules/views_ui/templates/views-ui-expose-filter-form.html.twig */
class __TwigTemplate_944c83fc7ff01250077ed43f21bbe1a12abb72caae49585e3a62394cd2663d4b extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_description", array()), "html", null, true);
        echo "
";
        // line 23
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "expose_button", array()), "html", null, true);
        echo "
";
        // line 24
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "group_button", array()), "html", null, true);
        echo "
";
        // line 25
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "html", null, true);
        echo "
";
        // line 26
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), "html", null, true);
        echo "
";
        // line 27
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), "html", null, true);
        echo "

";
        // line 29
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator", array()), "html", null, true);
        echo "
";
        // line 30
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "html", null, true);
        echo "

";
        // line 32
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_operator", array())) {
            // line 33
            echo "  <div class=\"views-left-40\">
  ";
            // line 34
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_operator", array()), "html", null, true);
            echo "
  </div>
";
        }
        // line 37
        echo "
";
        // line 42
        $context["remaining_form"] = twig_without((isset($context["form"]) ? $context["form"] : null), "form_description", "expose_button", "group_button", "required", "label", "description", "operator", "value", "use_operator", "more");
        // line 55
        echo "
";
        // line 59
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator", array()), "#type", array(), "array")) {
            // line 60
            echo "  <div class=\"views-right-60\">
  ";
            // line 61
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["remaining_form"]) ? $context["remaining_form"] : null), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 64
            echo "  ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["remaining_form"]) ? $context["remaining_form"] : null), "html", null, true);
            echo "
";
        }
        // line 66
        echo "
";
        // line 67
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "more", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-expose-filter-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 67,  89 => 66,  83 => 64,  77 => 61,  74 => 60,  72 => 59,  69 => 55,  67 => 42,  64 => 37,  58 => 34,  55 => 33,  53 => 32,  48 => 30,  44 => 29,  39 => 27,  35 => 26,  31 => 25,  27 => 24,  23 => 23,  19 => 22,);
    }
}
