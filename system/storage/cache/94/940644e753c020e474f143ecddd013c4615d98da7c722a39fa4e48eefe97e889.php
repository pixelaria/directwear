<?php

/* fashion-store/template/extension/module/carousel.twig */
class __TwigTemplate_b36625e24835760e1c412dbe3bd3708af40c18bd8f71a3a470cb559a34ab9635 extends Twig_Template
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
        echo "  <div id=\"carousel";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"owl-carousel owl-theme\">
  
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "      <div class=\"text-center\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  </div>

<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#carousel";
        // line 10
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\").owlCarousel({
    itemsCustom : [
    [0, 2],
    [600, 4],
    [992, 6],
    [1200, 7]
    ],
      autoPlay: 3000,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "fashion-store/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/*   <div id="carousel{{ module }}" class="owl-carousel owl-theme">*/
/*   */
/*     {% for banner in banners %}*/
/*       <div class="text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}*/
/*   </div>*/
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*     $("#carousel{{ module }}").owlCarousel({*/
/*     itemsCustom : [*/
/*     [0, 2],*/
/*     [600, 4],*/
/*     [992, 6],*/
/*     [1200, 7]*/
/*     ],*/
/*       autoPlay: 3000,*/
/*       navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],*/
/*       navigation : true,*/
/*       pagination:false*/
/*     });*/
/*     });*/
/* </script>*/
