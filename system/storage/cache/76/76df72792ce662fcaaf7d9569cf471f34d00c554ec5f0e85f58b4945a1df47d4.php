<?php

/* fashion-store/template/common/menu.twig */
class __TwigTemplate_5701183e884f5f3d2ab1b8dbb166c01ce1aa39aa26c62804ec6ae030a5ab2988 extends Twig_Template
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
        echo "<div class=\"hidden-md hidden-lg hidden-sm\">
";
        // line 2
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 3
            echo "<div class=\"container horizontal-menu\">
  <nav id=\"menu\" class=\"navbar\">

    <div class=\"navbar-header\"><!-- <span id=\"category\" class=\"visible-xs\">";
            // line 6
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span> -->
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" onclick=\"openNav()\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>

<div id=\"mySidenav\" class=\"sidenav\">
 <div class=\"close-nav\">
                <span class=\"categories\">Category</span>
                <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\"><i class=\"fa fa-close\"></i></a>
            </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 19
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "<i class=\"fa fa-angle-down\"></i></a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 22
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 24
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "</div>
            <a href=\"";
                    // line 28
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 31
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 33
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      </ul>
    </div>
  </nav>
</div>
</div>
";
        }
        // line 40
        echo "</div>

<script type=\"text/javascript\">
 function headermenu() {
     if (jQuery(window).width() < 768)
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"dropdown\");        
     }
     else
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"\"); 
     }
}
\$(document).ready(function(){headermenu();});
jQuery(window).resize(function() {headermenu();});
jQuery(window).scroll(function() {headermenu();});
</script>";
    }

    public function getTemplateName()
    {
        return "fashion-store/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  114 => 34,  108 => 33,  100 => 31,  90 => 28,  87 => 27,  80 => 26,  69 => 24,  65 => 23,  62 => 22,  58 => 21,  50 => 19,  47 => 18,  43 => 17,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="hidden-md hidden-lg hidden-sm">*/
/* {% if categories %}*/
/* <div class="container horizontal-menu">*/
/*   <nav id="menu" class="navbar">*/
/* */
/*     <div class="navbar-header"><!-- <span id="category" class="visible-xs">{{ text_category }}</span> -->*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" onclick="openNav()" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/* */
/* <div id="mySidenav" class="sidenav">*/
/*  <div class="close-nav">*/
/*                 <span class="categories">Category</span>*/
/*                 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-close"></i></a>*/
/*             </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle header-menu" data-toggle="dropdown">{{ category.name }}<i class="fa fa-angle-down"></i></a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*  function headermenu() {*/
/*      if (jQuery(window).width() < 768)*/
/*      {*/
/*          jQuery('ul.nav li.dropdown a.header-menu').attr("data-toggle","dropdown");        */
/*      }*/
/*      else*/
/*      {*/
/*          jQuery('ul.nav li.dropdown a.header-menu').attr("data-toggle",""); */
/*      }*/
/* }*/
/* $(document).ready(function(){headermenu();});*/
/* jQuery(window).resize(function() {headermenu();});*/
/* jQuery(window).scroll(function() {headermenu();});*/
/* </script>*/
