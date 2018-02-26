<?php

/* fashion-store/template/common/footer.twig */
class __TwigTemplate_88ce9d2ebabdf87c1c2b702832ed05db0be9e536b1546bb6881ece1475b7c419 extends Twig_Template
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
        echo "<footer>

<div>
      ";
        // line 4
        echo (isset($context["ftop_full"]) ? $context["ftop_full"] : null);
        echo "
</div>
  <div class=\"container\">
    <div class=\"row\">

 <div class=\"container\">

    <div class=\"row middle-footer\">
    ";
        // line 12
        echo (isset($context["footer_left"]) ? $context["footer_left"] : null);
        echo "

    ";
        // line 14
        if (((isset($context["footer_left"]) ? $context["footer_left"] : null) && (isset($context["footer_right"]) ? $context["footer_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-8";
            // line 16
            echo "    ";
        } elseif (((isset($context["footer_left"]) ? $context["footer_left"] : null) || (isset($context["footer_right"]) ? $context["footer_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "<div class=\"col-sm-10\">
      ";
        // line 22
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 23
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 24
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "
          <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#info\"></button>
        </h5>
        <div id=\"info\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled\">
         ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 30
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </ul>
        </div>
      </div>
      ";
        }
        // line 36
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 37
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "
          <button type=\"button\" class=\"btn btn-primary toggle collapsed\"  data-toggle=\"collapse\" data-target=\"#services\"></button>
        </h5>
        <div id=\"services\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 42
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 43
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 44
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
        </div>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 49
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "
          <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#extra\"></button>
        </h5>
        <div id=\"extra\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 54
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 55
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 56
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 57
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
        </div>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 62
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "
          <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#account\"></button>
        </h5>
        <div id=\"account\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled lastb\">
          <li><a href=\"";
        // line 67
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 68
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 69
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 70
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
        </div>
      </div>
      </div>
    </div>

     <!--  ";
        // line 77
        echo (isset($context["footer_right"]) ? $context["footer_right"] : null);
        echo " -->

    </div>
    </div>
  </div>
  <div class=\"foot-power\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6 copy\">";
        // line 85
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</div>
      <div class=\"col-sm-6 text-right\"> ";
        // line 86
        echo (isset($context["footer_right"]) ? $context["footer_right"] : null);
        echo "</div>
    </div>
  </div>
  </div>
</footer>

<a href=\"\" id=\"scroll\" title=\"Scroll to Top\" style=\"display: block;\"><i class=\"fa fa-arrow-up\"></i></a>
      ";
        // line 93
        echo (isset($context["fbottom_full"]) ? $context["fbottom_full"] : null);
        echo "


";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 97
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>
";
    }

    public function getTemplateName()
    {
        return "fashion-store/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 99,  239 => 97,  235 => 96,  229 => 93,  219 => 86,  215 => 85,  204 => 77,  192 => 70,  186 => 69,  180 => 68,  174 => 67,  166 => 62,  156 => 57,  150 => 56,  144 => 55,  138 => 54,  130 => 49,  120 => 44,  114 => 43,  108 => 42,  100 => 37,  97 => 36,  91 => 32,  80 => 30,  76 => 29,  68 => 24,  65 => 23,  63 => 22,  60 => 21,  57 => 20,  54 => 19,  51 => 18,  48 => 17,  45 => 16,  42 => 15,  40 => 14,  35 => 12,  24 => 4,  19 => 1,);
    }
}
/* <footer>*/
/* */
/* <div>*/
/*       {{ ftop_full }}*/
/* </div>*/
/*   <div class="container">*/
/*     <div class="row">*/
/* */
/*  <div class="container">*/
/* */
/*     <div class="row middle-footer">*/
/*     {{ footer_left }}*/
/* */
/*     {% if footer_left and footer_right %}*/
/*     {% set class = 'col-sm-8' %}*/
/*     {% elseif footer_left or footer_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* <div class="col-sm-10">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}*/
/*           <button type="button" class="btn btn-primary toggle collapsed" data-toggle="collapse" data-target="#info"></button>*/
/*         </h5>*/
/*         <div id="info" class="collapse footer-collapse">*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}*/
/*           <button type="button" class="btn btn-primary toggle collapsed"  data-toggle="collapse" data-target="#services"></button>*/
/*         </h5>*/
/*         <div id="services" class="collapse footer-collapse">*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}*/
/*           <button type="button" class="btn btn-primary toggle collapsed" data-toggle="collapse" data-target="#extra"></button>*/
/*         </h5>*/
/*         <div id="extra" class="collapse footer-collapse">*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}*/
/*           <button type="button" class="btn btn-primary toggle collapsed" data-toggle="collapse" data-target="#account"></button>*/
/*         </h5>*/
/*         <div id="account" class="collapse footer-collapse">*/
/*         <ul class="list-unstyled lastb">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*         </div>*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*      <!--  {{ footer_right }} -->*/
/* */
/*     </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="foot-power">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-6 copy">{{ powered }}</div>*/
/*       <div class="col-sm-6 text-right"> {{ footer_right }}</div>*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* </footer>*/
/* */
/* <a href="" id="scroll" title="Scroll to Top" style="display: block;"><i class="fa fa-arrow-up"></i></a>*/
/*       {{ fbottom_full }}*/
/* */
/* */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body></html>*/
/* */
