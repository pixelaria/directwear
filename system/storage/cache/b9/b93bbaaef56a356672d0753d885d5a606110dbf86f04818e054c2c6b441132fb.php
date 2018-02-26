<?php

/* fashion-store/template/common/home.twig */
class __TwigTemplate_2f33c809cf7e7ef3da2b15c3aff04a7796ffbc1ab29895410378e7a616d26fd3 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"common-home\" class=\"container\">
<div id=\"loading\">
  <div id=\"loading-center\">
    <div id=\"loading-center-absolute\">
      <div class=\"object\" id=\"object_one\"></div>
      <div class=\"object\" id=\"object_two\"></div>
      <div class=\"object\" id=\"object_three\"></div>
    </div>
  </div>
</div>
  <div class=\"row\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 13
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-xs-12 col-sm-8 col-lg-10 col-md-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "</div>
    ";
        // line 21
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
    <div class=\"row\">
    ";
        // line 23
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
</div>
";
        // line 26
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "fashion-store/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  69 => 23,  64 => 21,  57 => 20,  54 => 19,  51 => 18,  48 => 17,  45 => 16,  42 => 15,  39 => 14,  37 => 13,  33 => 12,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-home" class="container">*/
/* <div id="loading">*/
/*   <div id="loading-center">*/
/*     <div id="loading-center-absolute">*/
/*       <div class="object" id="object_one"></div>*/
/*       <div class="object" id="object_two"></div>*/
/*       <div class="object" id="object_three"></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-xs-12 col-sm-8 col-lg-10 col-md-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}</div>*/
/*     {{ column_right }}</div>*/
/*     <div class="row">*/
/*     {{ content_bottom }}*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
