<?php

/* fashion-store/template/extension/module/featured.twig */
class __TwigTemplate_22a1a718fb18c698d016532151848145739f6107d3379574a3604418d63c9f74 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs pro-tab\">
      <li class=\"active\"><a href=\"#feature\" data-toggle=\"tab\">Featured</a></li>
      <li class=\"tab-fe\"><a href=\"#special\" data-toggle=\"tab\">Special</a></li>
      <li><a href=\"#best\" data-toggle=\"tab\">Best Sellers</a></li>
</ul>

<!-- <h3>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3> -->

<div class=\"tab-content row\">
<div class=\"tab-pane active\" id=\"feature\">
";
        // line 11
        $context["temp"] = 0;
        // line 12
        $context["setCol"] = 2;
        // line 13
        $context["oneLine"] = 11;
        // line 14
        $context["numPro"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 15
        echo "
<!-- <h1>";
        // line 16
        echo (isset($context["numPro"]) ? $context["numPro"] : null);
        echo " Hello</h1> -->

<div id=\"featurep\" class=\"owl-carousel owl-theme\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "        ";
            $context["temp"] = ((isset($context["temp"]) ? $context["temp"] : null) + 1);
            // line 21
            echo "
        ";
            // line 22
            if (((((isset($context["temp"]) ? $context["temp"] : null) % (isset($context["setCol"]) ? $context["setCol"] : null)) == 1) && ((isset($context["numPro"]) ? $context["numPro"] : null) >= (isset($context["oneLine"]) ? $context["oneLine"] : null)))) {
                // line 23
                echo "            <div class=\"multi-row\" id=\"webi-multi-row\">
        ";
            }
            // line 25
            echo "<!-- writ code Here -->
  <div class=\"product-layout col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 28
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a>
        ";
            // line 29
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 30
                echo "          ";
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 31
                    echo "               <div class=\"sale\">Sale</div>
          ";
                }
                // line 33
                echo "      ";
            }
            // line 34
            echo "      </div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 36
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
      <!--   <p>";
            // line 37
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p> -->
        ";
            // line 38
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 39
                echo "        <p class=\"price\">
          ";
                // line 40
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 41
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 43
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 45
                echo "         <!--  ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 46
                    echo "          <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          ";
                }
                // line 47
                echo " -->
        </p>
        ";
            }
            // line 50
            echo "         ";
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 51
                echo "          <div class=\"rating\">
            ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 53
                    echo "            ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 54
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 58
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 62
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 63
                echo "          <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "</div>
        ";
            }
            // line 67
            echo "      </div>
     <div class=\"button-group\">
         <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 69
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"com\"><i class=\"fa fa-compress\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\"  title=\"";
            // line 70
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\" onclick=\"cart.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"cart\"><i class=\"fa fa-shopping-bag\"></i> <!-- <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span> --></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"wish\"><i class=\"fa fa-heart-o\"></i></button>
      </div>
    </div>
  </div>
<!-- writ code Here End -->
        ";
            // line 76
            if (((((isset($context["temp"]) ? $context["temp"] : null) % (isset($context["setCol"]) ? $context["setCol"] : null)) == 0) && ((isset($context["numPro"]) ? $context["numPro"] : null) >= (isset($context["oneLine"]) ? $context["oneLine"] : null)))) {
                // line 77
                echo "            </div>
        ";
            }
            // line 79
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
    ";
        // line 82
        if ((((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) % (isset($context["setCol"]) ? $context["setCol"] : null)) != 0) && ((isset($context["numPro"]) ? $context["numPro"] : null) >= (isset($context["oneLine"]) ? $context["oneLine"] : null)))) {
            // line 83
            echo "    <!-- <h1>hii</h1> -->
        </div>
    ";
        }
        // line 86
        echo "</div>

</div>


<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#featurep\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [600, 2],
    [992, 3],
    [1200, 3],
    [1200, 5]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "fashion-store/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 86,  240 => 83,  238 => 82,  235 => 81,  228 => 79,  224 => 77,  222 => 76,  212 => 71,  204 => 70,  198 => 69,  194 => 67,  190 => 65,  183 => 64,  178 => 63,  170 => 62,  164 => 58,  158 => 54,  155 => 53,  151 => 52,  148 => 51,  145 => 50,  140 => 47,  132 => 46,  129 => 45,  121 => 43,  115 => 41,  113 => 40,  110 => 39,  108 => 38,  104 => 37,  98 => 36,  94 => 34,  91 => 33,  87 => 31,  84 => 30,  82 => 29,  72 => 28,  67 => 25,  63 => 23,  61 => 22,  58 => 21,  55 => 20,  51 => 19,  45 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs pro-tab">*/
/*       <li class="active"><a href="#feature" data-toggle="tab">Featured</a></li>*/
/*       <li class="tab-fe"><a href="#special" data-toggle="tab">Special</a></li>*/
/*       <li><a href="#best" data-toggle="tab">Best Sellers</a></li>*/
/* </ul>*/
/* */
/* <!-- <h3>{{ heading_title }}</h3> -->*/
/* */
/* <div class="tab-content row">*/
/* <div class="tab-pane active" id="feature">*/
/* {% set temp = 0 %}*/
/* {% set setCol = 2 %}*/
/* {% set oneLine = 11 %}*/
/* {% set numPro = products|length %}*/
/* */
/* <!-- <h1>{{ numPro }} Hello</h1> -->*/
/* */
/* <div id="featurep" class="owl-carousel owl-theme">*/
/*     {% for product in products %}*/
/*         {% set temp = temp + 1 %}*/
/* */
/*         {% if temp % setCol == 1 and numPro >= oneLine %}*/
/*             <div class="multi-row" id="webi-multi-row">*/
/*         {% endif %}*/
/* <!-- writ code Here -->*/
/*   <div class="product-layout col-xs-12">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/*         {% if product.price %}*/
/*           {% if product.special %}*/
/*                <div class="sale">Sale</div>*/
/*           {% endif %}*/
/*       {% endif %}*/
/*       </div>*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*       <!--   <p>{{ product.description }}</p> -->*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*          <!--  {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %} -->*/
/*         </p>*/
/*         {% endif %}*/
/*          {% if product.rating %}*/
/*           <div class="rating">*/
/*             {% for i in 1..5 %}*/
/*             {% if product.rating < i %}*/
/*             <span class="fa fa-stack">*/
/*               <i class="fa fa-star-o fa-stack-2x"></i>*/
/*             </span>*/
/*             {% else %}*/
/*             <span class="fa fa-stack">*/
/*               <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>*/
/*             </span>*/
/*             {% endif %}*/
/*           {% endfor %}</div>{% else %}*/
/*           <div class="rating">{% for i in 1..5 %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endfor %}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*      <div class="button-group">*/
/*          <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');" class="com"><i class="fa fa-compress"></i></button>*/
/*         <button type="button" data-toggle="tooltip"  title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');" class="cart"><i class="fa fa-shopping-bag"></i> <!-- <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span> --></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');" class="wish"><i class="fa fa-heart-o"></i></button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <!-- writ code Here End -->*/
/*         {% if temp % setCol == 0 and numPro >= oneLine %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/*     {% if products|length % setCol != 0 and numPro >= oneLine %}*/
/*     <!-- <h1>hii</h1> -->*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* </div>*/
/* */
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*     $("#featurep").owlCarousel({*/
/*     itemsCustom : [*/
/*     [0, 1],*/
/*     [600, 2],*/
/*     [992, 3],*/
/*     [1200, 3],*/
/*     [1200, 5]*/
/*     ],*/
/*       // autoPlay: 1000,*/
/*       navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],*/
/*       navigation : true,*/
/*       pagination:false*/
/*     });*/
/*     });*/
/* </script>*/
