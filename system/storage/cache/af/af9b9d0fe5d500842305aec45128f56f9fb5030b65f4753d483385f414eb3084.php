<?php

/* fashion-store/template/common/header.twig */
class __TwigTemplate_c1e4d1ec8ad13fc8340d0cbc0fa60089db735edaa24dcc32998c90914467b3c2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/webiarch/product-slider-zoom/jquery.elevatezoom.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/fashion-store/stylesheet/stylesheet.css\" rel=\"stylesheet\">
 <!--right to left (RTL)-->
        ";
        // line 27
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            echo " <link href=\"catalog/view/theme/fashion-store/stylesheet/rtl.css\" rel=\"stylesheet\"> ";
        }
        // line 28
        echo " <!--over RTL-->
 <!-- blog image zoom -->
       <script src=\"catalog/view/javascript/webiarch/blog/lightbox-2.6.min.js\" type=\"text/javascript\"></script>
       <link href=\"catalog/view/javascript/webiarch/blog/lightbox.css\" rel=\"stylesheet\" type=\"text/css\" />
 <!-- blog image zoom -->
<script src=\"catalog/view/javascript/webiarch/custom.js\" type=\"text/javascript\"></script>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 35
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 38
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 42
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 45
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-6 hidden-xs\">
      ";
        // line 53
        echo (isset($context["header_left"]) ? $context["header_left"] : null);
        echo "
    </div>
     <div class=\"col-sm-6 text-right\">
      ";
        // line 56
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
      ";
        // line 57
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    </div>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-2 col-sm-3 col-xs-7\">
        <div id=\"logo\">";
        // line 66
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 67
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 68
        echo "</div>
      </div>
      <div class=\"col-md-8 col-sm-6 col-xs-12 xs-se\">";
        // line 70
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-md-2 col-sm-3 col-xs-5 xs-head-right\">
      <ul class=\"head-right\">
        <li><a href=\"";
        // line 73
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><img src=\"image/catalog/header/wish.png\"></a></li>
        <li class=\"dropdown user-drop\"><a href=\"";
        // line 74
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"image/catalog/header/user.png\"><span class=\"hidden-xs hidden-sm hidden-md\"></span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 76
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 77
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\"><i class=\"fa fa-user\"></i>";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 78
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\"><i class=\"fa fa-history\"></i>";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 79
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\"><i class=\"fa fa-exchange\"></i>";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 80
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\"><i class=\"fa fa-download\"></i>";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 81
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\"></i>";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 83
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\"><i class=\"fa fa-user-plus\"></i>";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 84
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\"><i class=\"fa fa-lock\"></i>";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 86
        echo "          </ul>
        </li>
        <li>";
        // line 88
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</li>
        </ul>
      </div>
    </div>
  </div>
</header>
";
        // line 94
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "fashion-store/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 94,  277 => 88,  273 => 86,  266 => 84,  259 => 83,  252 => 81,  246 => 80,  240 => 79,  234 => 78,  227 => 77,  225 => 76,  218 => 74,  212 => 73,  206 => 70,  202 => 68,  194 => 67,  182 => 66,  170 => 57,  166 => 56,  160 => 53,  152 => 47,  144 => 45,  140 => 44,  129 => 42,  125 => 41,  122 => 40,  113 => 38,  109 => 37,  96 => 35,  92 => 34,  84 => 28,  80 => 27,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/webiarch/product-slider-zoom/jquery.elevatezoom.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/fashion-store/stylesheet/stylesheet.css" rel="stylesheet">*/
/*  <!--right to left (RTL)-->*/
/*         {% if direction=='rtl' %} <link href="catalog/view/theme/fashion-store/stylesheet/rtl.css" rel="stylesheet"> {% endif %}*/
/*  <!--over RTL-->*/
/*  <!-- blog image zoom -->*/
/*        <script src="catalog/view/javascript/webiarch/blog/lightbox-2.6.min.js" type="text/javascript"></script>*/
/*        <link href="catalog/view/javascript/webiarch/blog/lightbox.css" rel="stylesheet" type="text/css" />*/
/*  <!-- blog image zoom -->*/
/* <script src="catalog/view/javascript/webiarch/custom.js" type="text/javascript"></script>*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-sm-6 hidden-xs">*/
/*       {{ header_left }}*/
/*     </div>*/
/*      <div class="col-sm-6 text-right">*/
/*       {{ language }}*/
/*       {{ currency }}*/
/*     </div>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-2 col-sm-3 col-xs-7">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-md-8 col-sm-6 col-xs-12 xs-se">{{ search }}</div>*/
/*       <div class="col-md-2 col-sm-3 col-xs-5 xs-head-right">*/
/*       <ul class="head-right">*/
/*         <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><img src="image/catalog/header/wish.png"></a></li>*/
/*         <li class="dropdown user-drop"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><img src="image/catalog/header/user.png"><span class="hidden-xs hidden-sm hidden-md"></span> <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}"><i class="fa fa-user"></i>{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}"><i class="fa fa-history"></i>{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}"><i class="fa fa-exchange"></i>{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}"><i class="fa fa-download"></i>{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}"><i class="fa fa-sign-out"></i>{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}"><i class="fa fa-user-plus"></i>{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}"><i class="fa fa-lock"></i>{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*         <li>{{ cart }}</li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
/* */
