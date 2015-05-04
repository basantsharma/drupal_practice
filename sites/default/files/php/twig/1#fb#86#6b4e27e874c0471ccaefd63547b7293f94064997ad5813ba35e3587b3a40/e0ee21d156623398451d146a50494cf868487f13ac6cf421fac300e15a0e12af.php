<?php

/* core/themes/classy/templates/content/node.html.twig */
class __TwigTemplate_fb866b4e27e874c0471ccaefd63547b7293f94064997ad5813ba35e3587b3a40 extends Twig_Template
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
        // line 69
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 75
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 78
        echo "<article";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">

  ";
        // line 80
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 81
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 82
            echo "    <h2";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">
      <a href=\"";
            // line 83
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 86
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 88
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 89
            echo "    <footer class=\"node__meta\">
      ";
            // line 90
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true);
            echo "
      <div";
            // line 91
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "node__submitted"), "method"), "html", null, true);
            echo ">
        ";
            // line 92
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 93
            echo "        ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 97
        echo "
  <div";
        // line 98
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content"), "method"), "html", null, true);
        echo ">
    ";
        // line 99
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true);
        echo "
  </div>

  ";
        // line 102
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
            // line 103
            echo "    <div class=\"node__links\">
      ";
            // line 104
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 107
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 107,  98 => 104,  95 => 103,  93 => 102,  87 => 99,  83 => 98,  80 => 97,  72 => 93,  70 => 92,  66 => 91,  62 => 90,  59 => 89,  57 => 88,  51 => 86,  43 => 83,  38 => 82,  36 => 81,  32 => 80,  26 => 78,  24 => 75,  23 => 74,  22 => 73,  21 => 72,  20 => 71,  19 => 69,);
    }
}
