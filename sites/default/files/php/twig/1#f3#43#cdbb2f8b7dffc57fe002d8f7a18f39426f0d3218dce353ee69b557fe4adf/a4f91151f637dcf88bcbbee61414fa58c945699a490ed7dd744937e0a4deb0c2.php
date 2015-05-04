<?php

/* core/modules/views/templates/views-view.html.twig */
class __TwigTemplate_f343cdbb2f8b7dffc57fe002d8f7a18f39426f0d3218dce353ee69b557fe4adf extends Twig_Template
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
        // line 36
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 38
(isset($context["id"]) ? $context["id"] : null))), 2 => ("view-id-" .         // line 39
(isset($context["id"]) ? $context["id"] : null)), 3 => ("view-display-id-" .         // line 40
(isset($context["display_id"]) ? $context["display_id"] : null)), 4 => ((        // line 41
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 44
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 46
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 50
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 51
            echo "    <div class=\"view-header\">
      ";
            // line 52
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 56
            echo "    <div class=\"view-filters\">
      ";
            // line 57
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 61
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 62
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 67
            echo "    <div class=\"view-content\">
      ";
            // line 68
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 70
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 71
            echo "    <div class=\"view-empty\">
      ";
            // line 72
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 77
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true);
            echo "
  ";
        }
        // line 79
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 80
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 81
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 84
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 85
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true);
            echo "
  ";
        }
        // line 87
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 88
            echo "    <div class=\"view-footer\">
      ";
            // line 89
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 92
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 93
            echo "    <div class=\"feed-icons\">
      ";
            // line 94
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 97,  156 => 94,  153 => 93,  150 => 92,  144 => 89,  141 => 88,  138 => 87,  132 => 85,  129 => 84,  123 => 81,  120 => 80,  117 => 79,  111 => 77,  109 => 76,  106 => 75,  100 => 72,  97 => 71,  95 => 70,  90 => 68,  87 => 67,  85 => 66,  82 => 65,  76 => 62,  73 => 61,  70 => 60,  64 => 57,  61 => 56,  58 => 55,  52 => 52,  49 => 51,  47 => 50,  42 => 49,  36 => 47,  34 => 46,  30 => 45,  25 => 44,  23 => 41,  22 => 40,  21 => 39,  20 => 38,  19 => 36,);
    }
}
