<?php

/* core/themes/classy/templates/form/field-multiple-value-form.html.twig */
class __TwigTemplate_7f265a1a3f5543117c802b57b49f50c7491bd90d0584c8d388085c62feb4c8a6 extends Twig_Template
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
        // line 20
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 21
            echo "  <div class=\"form-item\">
    ";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true);
            echo "
    ";
            // line 23
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 24
                echo "      <div class=\"description\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
                echo "</div>
    ";
            }
            // line 26
            echo "    ";
            if ((isset($context["button"]) ? $context["button"] : null)) {
                // line 27
                echo "      <div class=\"clearfix\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["button"]) ? $context["button"] : null), "html", null, true);
                echo "</div>
    ";
            }
            // line 29
            echo "  </div>
";
        } else {
            // line 31
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 32
                echo "    ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["element"], "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 32,  49 => 31,  45 => 29,  39 => 27,  36 => 26,  30 => 24,  28 => 23,  24 => 22,  21 => 21,  19 => 20,);
    }
}
