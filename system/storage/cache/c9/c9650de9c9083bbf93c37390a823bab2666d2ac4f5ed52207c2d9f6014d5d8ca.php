<?php

/* fashion-store/template/product/product.twig */
class __TwigTemplate_96d2d67215512d6fb69d6d9c7b700c2594b7c2e801a124a0f35809160acd4232 extends Twig_Template
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
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-xs-12 col-sm-8 col-lg-10 col-md-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\">
        ";
        // line 18
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 19
            echo "        ";
            $context["class"] = "col-lg-5 col-md-6 col-xs-12 pimg";
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "        ";
            $context["class"] = "col-sm-5 proimg";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> 
        ";
        // line 24
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 25
            echo "                        <ul class=\"thumbnails col-sm-12\">
                            ";
            // line 26
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 27
                echo "                            <li><a class=\"thumbnail\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\">
                                    <img data-zoom-image=\"";
                // line 28
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" id=\"zoom_03\" class=\"img-responsive center-block\" alt=\"image\">
                                </a>
                                <div class=\"productwish\">
                     <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 31
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo (isset($context["product_id"]) ? $context["product_id"] : null);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 32
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo (isset($context["product_id"]) ? $context["product_id"] : null);
                echo "');\" ><i class=\"fa fa-exchange\"></i></button>
                                </div>
                            </li>
                            ";
            }
            // line 36
            echo "                            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 37
                echo "                            <li id=\"gallery_01\" class=\"owl-carousel\">
                                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 39
                    echo "                                <a data-zoom-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" data-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\"  href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\">
                                    <img src=\"";
                    // line 40
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" class=\"img-responsive center-block\" alt=\"additional image\">
                                </a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                            </li>
                            ";
            }
            // line 45
            echo "                        </ul>
          ";
        }
        // line 47
        echo "        </div>
        ";
        // line 48
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 49
            echo "        ";
            $context["class"] = "col-md-6 col-lg-7 col-xs-12";
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "        ";
            $context["class"] = "col-sm-7";
            // line 52
            echo "        ";
        }
        // line 53
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " pro-content\">
          <h1>";
        // line 54
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1><hr class=\"producthr\">
          <ul class=\"list-unstyled\">
            ";
        // line 56
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 57
            echo "            <li><span class=\"text-decor\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</span><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"textdeb\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 59
        echo "            <li><span class=\"text-decor\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "</span> ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
            ";
        // line 60
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 61
            echo "            <li><span class=\"text-decor\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</span> ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
            ";
        }
        // line 63
        echo "            <li><span class=\"text-decor\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</span> ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
            <hr class=\"producthr\">
          </ul>
          ";
        // line 66
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 67
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 68
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 69
                echo "            <li class=\"text-decor-bold\">
              <h2>";
                // line 70
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 73
                echo "            <!-- <li><span style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li> -->
            <li class=\"text-decor-bold\">
              <h2>";
                // line 75
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
            </li>
            ";
            }
            // line 78
            echo "            <!-- ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 79
                echo "            <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 80
            echo " -->
            ";
            // line 81
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 82
                echo "            <li class=\"text-decor-bold\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 84
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 85
                echo "            <li>
              <hr class=\"producthr\">
            </li>
            ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 89
                    echo "            <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "            ";
            }
            // line 92
            echo "          </ul>
          ";
        }
        // line 94
        echo "          <div id=\"product\"> ";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 95
            echo "            <hr class=\"producthr\">
            <h3>";
            // line 96
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 98
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 99
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 100
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 101
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 102
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 104
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 105
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 106
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 107
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "              </select>
            </div>
            ";
                }
                // line 112
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 113
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\">";
                    // line 114
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 115
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"custom-radio\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 116
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 118
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 119
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 120
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 121
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 122
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 123
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo " </div>
            </div>
            ";
                }
                // line 128
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 129
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\">";
                    // line 130
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 131
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 132
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 134
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 135
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 136
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 137
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 138
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 139
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo " </div>
            </div>
            ";
                }
                // line 144
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 145
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 146
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 147
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 150
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 151
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 152
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 153
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 156
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 157
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\">";
                    // line 158
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 159
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btnup btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 160
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 163
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 164
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 165
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn datebtn\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 173
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 174
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 175
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 177
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 183
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 184
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 185
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 187
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 193
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<hr class=\"producthr\">
            ";
        }
        // line 195
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 196
            echo "            <hr class=\"producthr\">
            <h3>";
            // line 197
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 200
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 202
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 208
        echo "            <!-- Quantity option -->
            <div class=\"form-group\">
            <div class=\"row\">
                <div class=\"col-sm-2 col-md-1 col-xs-2 op-box qtlabel\">
                    <label class=\"control-label text-decorop\" for=\"input-quantity\">";
        // line 212
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                </div>
              <div class=\"col-md-11 col-sm-10 col-xs-10 op-box qty-plus-minus\">
              <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\">
                  <span class=\"glyphicon glyphicon-minus\"></span>
               </button>
              <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
        // line 218
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 219
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
               <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\">
                  <span class=\"glyphicon glyphicon-plus\"></span>
               </button>
               </div>
               </div><hr class=\"producthr\">
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 225
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn add-to-cart\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button><hr class=\"producthr\">
            </div>
            <!-- Quantity option end -->
            ";
        // line 228
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 229
            echo "            <div class=\"alert alert-info palert\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 230
        echo "</div>
          ";
        // line 231
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 232
            echo "          <div class=\"rating\">
            <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12 prorate\">";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 235
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 236
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
              <div class=\"col-md-4 col-sm-4 col-xs-12 proreview\">
                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 238
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
              </div>
              <div class=\"col-md-4 col-sm-4 col-xs-12 prowrite\">
                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 241
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
              </div>
              </div>
            <hr class=\"producthr\">
             <!-- AddToAny BEGIN -->
                        <div class=\"a2a_kit a2a_kit_size_32 a2a_default_style\">
                            <a class=\"a2a_button_facebook\"></a>
                            <a class=\"a2a_button_twitter\"></a>
                            <a class=\"a2a_button_google_plus\"></a>
                            <a class=\"a2a_button_pinterest\"></a>
                            <a class=\"a2a_button_linkedin\"></a>
                            <a class=\"a2a_dd\" href=\"https://www.addtoany.com/share\"></a>
                        </div>
                        <script async src=\"https://static.addtoany.com/menu/page.js\"></script>
            <!-- AddToAny END -->
          </div>
          ";
        }
        // line 257
        echo " </div>
      </div>
<div class=\"col-sm-12 product-tab\">
      <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 261
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 262
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 263
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 265
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 266
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 268
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 270
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 271
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 272
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 275
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 277
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 281
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 282
                    echo "                <tr>
                  <td>";
                    // line 283
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 284
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "              </table>
            </div>
            ";
        }
        // line 292
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 293
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2 class=\"heading\">";
            // line 296
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 297
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 298
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 300
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 301
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 306
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 308
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label rat\">";
                // line 313
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 314
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 324
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 326
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 329
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 333
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 335
            echo "              </form>
            </div>
            ";
        }
        // line 337
        echo "</div>
            </div>
<!-- relatedproduct -->
      ";
        // line 340
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 341
            echo "      <h3 class=\"heading\">";
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
      <div class=\"row\">
        <div id=\"related\" class=\"owl-carousel owl-theme\">
       ";
            // line 344
            $context["i"] = 0;
            // line 345
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 346
                echo "        ";
                if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 347
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 348
                    echo "        ";
                } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 349
                    echo "        ";
                    $context["class"] = "col-xs-12 col-sm-12 col-lg-12 col-md-12";
                    // line 350
                    echo "        ";
                } else {
                    // line 351
                    echo "        ";
                    $context["class"] = "col-xs-12 col-sm-12";
                    // line 352
                    echo "        ";
                }
                // line 353
                echo "        <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 355
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
        <h4><a href=\"";
                // line 357
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
      <!--   <p>";
                // line 358
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p> -->
        ";
                // line 359
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 360
                    echo "        <p class=\"price\">
          ";
                    // line 361
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 362
                        echo "          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
          ";
                    } else {
                        // line 364
                        echo "          <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
          ";
                    }
                    // line 366
                    echo "         <!--  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 367
                        echo "          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
          ";
                    }
                    // line 368
                    echo " -->
        </p>
        ";
                }
                // line 371
                echo "         ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 372
                    echo "          <div class=\"rating\">
            ";
                    // line 373
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 374
                        echo "            ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 375
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        } else {
                            // line 379
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        }
                        // line 383
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>";
                } else {
                    // line 384
                    echo "          <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 385
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 386
                    echo "</div>
        ";
                }
                // line 388
                echo "      </div>
     <div class=\"button-group\">
         <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 390
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"com\"><i class=\"fa fa-compress\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\"  title=\"";
                // line 391
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"cart\"><i class=\"fa fa-shopping-bag\"></i> <!-- <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span> --></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 392
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"wish\"><i class=\"fa fa-heart-o\"></i></button>
      </div>
          </div>
        </div>
        <!-- ";
                // line 396
                if ((((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null)) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 2) == 0))) {
                    // line 397
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 398
(isset($context["column_left"]) ? $context["column_left"] : null) || ((isset($context["column_right"]) ? $context["column_right"] : null) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 3) == 0)))) {
                    // line 399
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 400
(isset($context["i"]) ? $context["i"] : null) + 1) % 4) == 0)) {
                    // line 401
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 402
                echo " -->
        ";
                // line 403
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 404
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 405
            echo "        </div>
        </div>
        ";
        }
        // line 408
        echo "        ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 409
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 410
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 411
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 412
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 413
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 415
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 416
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

        \$('#cart > button').html('<img src=\"image/catalog/header/cart.png\"/><span id=\"cart-total\">' + json['total'] + '</span>');

        \$('html, body').animate({ scrollTop: 0 }, 'slow');

        \$('#cart > ul').load('index.php?route=common/cart/info ul li');
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 494
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 499
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 505
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script>
<!--for product quantity plus minus-->
<script type=\"text/javascript\">
    //plugin bootstrap minus and plus
    \$(document).ready(function() {
    \$('.btn-number').click(function(e){
    e.preventDefault();
    var fieldName = \$(this).attr('data-field');
    var type = \$(this).attr('data-type');
    var input = \$(\"input[name='\" + fieldName + \"']\");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
    if (type == 'minus') {
    var minValue = parseInt(input.attr('min'));
    if (!minValue) minValue = 1;
    if (currentVal > minValue) {
    input.val(currentVal - 1).change();
    }
    if (parseInt(input.val()) == minValue) {
    \$(this).attr('disabled', true);
    }

    } else if (type == 'plus') {
    var maxValue = parseInt(input.attr('max'));
    if (!maxValue) maxValue = 999;
    if (currentVal < maxValue) {
    input.val(currentVal + 1).change();
    }
    if (parseInt(input.val()) == maxValue) {
    \$(this).attr('disabled', true);
    }

    }
    } else {
    input.val(0);
    }
    });
    \$('.input-number').focusin(function(){
    \$(this).data('oldValue', \$(this).val());
    });
    \$('.input-number').change(function() {

    var minValue = parseInt(\$(this).attr('min'));
    var maxValue = parseInt(\$(this).attr('max'));
    if (!minValue) minValue = 1;
    if (!maxValue) maxValue = 999;
    var valueCurrent = parseInt(\$(this).val());
    var name = \$(this).attr('name');
    if (valueCurrent >= minValue) {
    \$(\".btn-number[data-type='minus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the minimum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
    \$(\".btn-number[data-type='plus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the maximum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    });
    \$(\".input-number\").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
            }
            });
    });
</script>

<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 650
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 654
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

\$(document).ready(function() {
  \$('.thumbnails').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
      enabled: true
    }
  });
});
//--></script>
<!-- related -->
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#related\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [600, 2],
    [992, 3],
    [1200, 5]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>
<!-- related over -->
<!-- zoom product start -->
<!-- zoom product start -->
<script>
     if (jQuery(window).width() > 991){
        //initiate the plugin and pass the id of the div containing gallery images
            \$(\"#zoom_03\").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: ''});
        //pass the images to Fancybox
            \$(\"#zoom_03\").bind(\"click\", function (e) {
            var ez = \$('#zoom_03').data('elevateZoom');
            \$.fancybox(ez.getGalleryList());
            return false;
            });
    }
</script>
<!--ZOOM END-->

<!--slider for product-->
<script type=\"text/javascript\"><!--
\$('#gallery_01').owlCarousel({
  itemsCustom : [
        [0, 2],
        [412, 3],
        [600, 5],
        [768, 3],
        [992, 2],
        [1200, 2],
        [1401,2],
        [1850, 4]
        ],
  autoPlay: false,
  navigation: true,
  navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
  pagination: false
});
--></script>
<!--over slider for product-->


";
        // line 748
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "fashion-store/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1639 => 748,  1542 => 654,  1535 => 650,  1387 => 505,  1378 => 499,  1370 => 494,  1289 => 416,  1284 => 415,  1275 => 413,  1268 => 412,  1258 => 411,  1254 => 410,  1249 => 409,  1246 => 408,  1241 => 405,  1235 => 404,  1233 => 403,  1230 => 402,  1226 => 401,  1224 => 400,  1221 => 399,  1219 => 398,  1216 => 397,  1214 => 396,  1205 => 392,  1197 => 391,  1191 => 390,  1187 => 388,  1183 => 386,  1176 => 385,  1171 => 384,  1163 => 383,  1157 => 379,  1151 => 375,  1148 => 374,  1144 => 373,  1141 => 372,  1138 => 371,  1133 => 368,  1125 => 367,  1122 => 366,  1114 => 364,  1108 => 362,  1106 => 361,  1103 => 360,  1101 => 359,  1097 => 358,  1091 => 357,  1080 => 355,  1074 => 353,  1071 => 352,  1068 => 351,  1065 => 350,  1062 => 349,  1059 => 348,  1056 => 347,  1053 => 346,  1048 => 345,  1046 => 344,  1039 => 341,  1037 => 340,  1032 => 337,  1027 => 335,  1021 => 333,  1012 => 329,  1006 => 326,  1001 => 324,  988 => 314,  984 => 313,  976 => 308,  971 => 306,  963 => 301,  959 => 300,  955 => 298,  953 => 297,  949 => 296,  944 => 293,  941 => 292,  936 => 289,  929 => 287,  920 => 284,  916 => 283,  913 => 282,  909 => 281,  902 => 277,  898 => 275,  894 => 274,  890 => 272,  888 => 271,  884 => 270,  880 => 268,  874 => 266,  871 => 265,  865 => 263,  863 => 262,  859 => 261,  853 => 257,  833 => 241,  827 => 238,  818 => 236,  811 => 235,  807 => 234,  803 => 232,  801 => 231,  798 => 230,  792 => 229,  790 => 228,  782 => 225,  773 => 219,  769 => 218,  760 => 212,  754 => 208,  748 => 204,  737 => 202,  733 => 201,  729 => 200,  723 => 197,  720 => 196,  717 => 195,  708 => 193,  695 => 187,  688 => 185,  681 => 184,  678 => 183,  665 => 177,  658 => 175,  651 => 174,  648 => 173,  635 => 167,  628 => 165,  621 => 164,  618 => 163,  610 => 160,  602 => 159,  598 => 158,  591 => 157,  588 => 156,  576 => 153,  570 => 152,  563 => 151,  560 => 150,  548 => 147,  542 => 146,  535 => 145,  532 => 144,  527 => 141,  519 => 139,  512 => 138,  510 => 137,  505 => 136,  489 => 135,  483 => 134,  479 => 132,  473 => 131,  469 => 130,  462 => 129,  459 => 128,  454 => 125,  446 => 123,  439 => 122,  437 => 121,  432 => 120,  416 => 119,  410 => 118,  406 => 116,  400 => 115,  396 => 114,  389 => 113,  386 => 112,  381 => 109,  374 => 107,  367 => 106,  365 => 105,  358 => 104,  354 => 103,  350 => 102,  344 => 101,  338 => 100,  331 => 99,  328 => 98,  324 => 97,  320 => 96,  317 => 95,  314 => 94,  310 => 92,  307 => 91,  296 => 89,  292 => 88,  287 => 85,  284 => 84,  276 => 82,  274 => 81,  271 => 80,  263 => 79,  260 => 78,  254 => 75,  248 => 73,  242 => 70,  239 => 69,  237 => 68,  234 => 67,  232 => 66,  223 => 63,  215 => 61,  213 => 60,  206 => 59,  196 => 57,  194 => 56,  189 => 54,  184 => 53,  181 => 52,  178 => 51,  175 => 50,  172 => 49,  170 => 48,  167 => 47,  163 => 45,  159 => 43,  150 => 40,  141 => 39,  137 => 38,  134 => 37,  131 => 36,  122 => 32,  116 => 31,  108 => 28,  101 => 27,  99 => 26,  96 => 25,  94 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  75 => 18,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-xs-12 col-sm-8 col-lg-10 col-md-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row">*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-lg-5 col-md-6 col-xs-12 pimg' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-5 proimg' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> */
/*         {% if thumb or images %}*/
/*                         <ul class="thumbnails col-sm-12">*/
/*                             {% if thumb %}*/
/*                             <li><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}">*/
/*                                     <img data-zoom-image="{{ popup }}" src="{{ thumb }}" id="zoom_03" class="img-responsive center-block" alt="image">*/
/*                                 </a>*/
/*                                 <div class="productwish">*/
/*                      <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');" ><i class="fa fa-exchange"></i></button>*/
/*                                 </div>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                             {% if images %}*/
/*                             <li id="gallery_01" class="owl-carousel">*/
/*                                 {% for image in images %}*/
/*                                 <a data-zoom-image="{{ image.popup }}" data-image="{{ image.popup }}"  href="{{ image.popup }}">*/
/*                                     <img src="{{ image.thumb }}" class="img-responsive center-block" alt="additional image">*/
/*                                 </a>*/
/*                                 {% endfor %}*/
/*                             </li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-md-6 col-lg-7 col-xs-12' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-7' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }} pro-content">*/
/*           <h1>{{ heading_title }}</h1><hr class="producthr">*/
/*           <ul class="list-unstyled">*/
/*             {% if manufacturer %}*/
/*             <li><span class="text-decor">{{ text_manufacturer }}</span><a href="{{ manufacturers }}" class="textdeb">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li><span class="text-decor">{{ text_model }}</span> {{ model }}</li>*/
/*             {% if reward %}*/
/*             <li><span class="text-decor">{{ text_reward }}</span> {{ reward }}</li>*/
/*             {% endif %}*/
/*             <li><span class="text-decor">{{ text_stock }}</span> {{ stock }}</li>*/
/*             <hr class="producthr">*/
/*           </ul>*/
/*           {% if price %}*/
/*           <ul class="list-unstyled">*/
/*             {% if not special %}*/
/*             <li class="text-decor-bold">*/
/*               <h2>{{ price }}</h2>*/
/*             </li>*/
/*             {% else %}*/
/*             <!-- <li><span style="text-decoration: line-through;">{{ price }}</span></li> -->*/
/*             <li class="text-decor-bold">*/
/*               <h2>{{ special }}</h2>*/
/*             </li>*/
/*             {% endif %}*/
/*             <!-- {% if tax %}*/
/*             <li>{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %} -->*/
/*             {% if points %}*/
/*             <li class="text-decor-bold">{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             <li>*/
/*               <hr class="producthr">*/
/*             </li>*/
/*             {% for discount in discounts %}*/
/*             <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <div id="product"> {% if options %}*/
/*             <hr class="producthr">*/
/*             <h3>{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}" class="custom-radio"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btnup btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn datebtn" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn datebtn"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label text-decorop" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn datebtn"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}<hr class="producthr">*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr class="producthr">*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <!-- Quantity option -->*/
/*             <div class="form-group">*/
/*             <div class="row">*/
/*                 <div class="col-sm-2 col-md-1 col-xs-2 op-box qtlabel">*/
/*                     <label class="control-label text-decorop" for="input-quantity">{{ entry_qty }}</label>*/
/*                 </div>*/
/*               <div class="col-md-11 col-sm-10 col-xs-10 op-box qty-plus-minus">*/
/*               <button type="button" class="form-control pull-left btn-number btnminus" disabled="disabled" data-type="minus" data-field="quantity">*/
/*                   <span class="glyphicon glyphicon-minus"></span>*/
/*                </button>*/
/*               <input id="input-quantity" type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control input-number pull-left" />*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                <button type="button" class="form-control pull-left btn-number btnplus" data-type="plus" data-field="quantity">*/
/*                   <span class="glyphicon glyphicon-plus"></span>*/
/*                </button>*/
/*                </div>*/
/*                </div><hr class="producthr">*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn add-to-cart">{{ button_cart }}</button><hr class="producthr">*/
/*             </div>*/
/*             <!-- Quantity option end -->*/
/*             {% if minimum > 1 %}*/
/*             <div class="alert alert-info palert"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}</div>*/
/*           {% if review_status %}*/
/*           <div class="rating">*/
/*             <div class="row">*/
/*             <div class="col-md-4 col-sm-4 col-xs-12 prorate">{% for i in 1..5 %}*/
/*               {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*               {% endfor %} </div>*/
/*               <div class="col-md-4 col-sm-4 col-xs-12 proreview">*/
/*                 <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a>*/
/*               </div>*/
/*               <div class="col-md-4 col-sm-4 col-xs-12 prowrite">*/
/*                 <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a>*/
/*               </div>*/
/*               </div>*/
/*             <hr class="producthr">*/
/*              <!-- AddToAny BEGIN -->*/
/*                         <div class="a2a_kit a2a_kit_size_32 a2a_default_style">*/
/*                             <a class="a2a_button_facebook"></a>*/
/*                             <a class="a2a_button_twitter"></a>*/
/*                             <a class="a2a_button_google_plus"></a>*/
/*                             <a class="a2a_button_pinterest"></a>*/
/*                             <a class="a2a_button_linkedin"></a>*/
/*                             <a class="a2a_dd" href="https://www.addtoany.com/share"></a>*/
/*                         </div>*/
/*                         <script async src="https://static.addtoany.com/menu/page.js"></script>*/
/*             <!-- AddToAny END -->*/
/*           </div>*/
/*           {% endif %} </div>*/
/*       </div>*/
/* <div class="col-sm-12 product-tab">*/
/*       <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2 class="heading">{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label rat">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}</div>*/
/*             </div>*/
/* <!-- relatedproduct -->*/
/*       {% if products %}*/
/*       <h3 class="heading">{{ text_related }}</h3>*/
/*       <div class="row">*/
/*         <div id="related" class="owl-carousel owl-theme">*/
/*        {% set i = 0 %}*/
/*         {% for product in products %}*/
/*         {% if column_left and column_right %}*/
/*         {% set class = 'col-xs-8 col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-xs-12 col-sm-12 col-lg-12 col-md-12' %}*/
/*         {% else %}*/
/*         {% set class = 'col-xs-12 col-sm-12' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class="product-thumb transition">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div class="caption">*/
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
/*           </div>*/
/*         </div>*/
/*         <!-- {% if column_left and column_right and (i + 1) % 2 == 0 %}*/
/*         <div class="clearfix visible-md visible-sm"></div>*/
/*         {% elseif column_left or column_right and (i + 1) % 3 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% elseif (i + 1) % 4 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% endif %} -->*/
/*         {% set i = i + 1 %}*/
/*         {% endfor %}*/
/*         </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/*   $.ajax({*/
/*     url: 'index.php?route=product/product/getRecurringDescription',*/
/*     type: 'post',*/
/*     data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*     dataType: 'json',*/
/*     beforeSend: function() {*/
/*       $('#recurring-description').html('');*/
/*     },*/
/*     success: function(json) {*/
/*       $('.alert-dismissible, .text-danger').remove();*/
/* */
/*       if (json['success']) {*/
/*         $('#recurring-description').html(json['success']);*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/*   $.ajax({*/
/*     url: 'index.php?route=checkout/cart/add',*/
/*     type: 'post',*/
/*     data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*     dataType: 'json',*/
/*     beforeSend: function() {*/
/*       $('#button-cart').button('loading');*/
/*     },*/
/*     complete: function() {*/
/*       $('#button-cart').button('reset');*/
/*     },*/
/*     success: function(json) {*/
/*       $('.alert-dismissible, .text-danger').remove();*/
/*       $('.form-group').removeClass('has-error');*/
/* */
/*       if (json['error']) {*/
/*         if (json['error']['option']) {*/
/*           for (i in json['error']['option']) {*/
/*             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*             if (element.parent().hasClass('input-group')) {*/
/*               element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             } else {*/
/*               element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             }*/
/*           }*/
/*         }*/
/* */
/*         if (json['error']['recurring']) {*/
/*           $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*         }*/
/* */
/*         // Highlight any found errors*/
/*         $('.text-danger').parent().addClass('has-error');*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*         $('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*         $('#cart > button').html('<img src="image/catalog/header/cart.png"/><span id="cart-total">' + json['total'] + '</span>');*/
/* */
/*         $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/*         $('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/*       }*/
/*     },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*   });*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*   language: '{{ datepicker }}',*/
/*   pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/*   language: '{{ datepicker }}',*/
/*   pickDate: true,*/
/*   pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/*   language: '{{ datepicker }}',*/
/*   pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/*   var node = this;*/
/* */
/*   $('#form-upload').remove();*/
/* */
/*   $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*   $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*   if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*   }*/
/* */
/*   timer = setInterval(function() {*/
/*     if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*       clearInterval(timer);*/
/* */
/*       $.ajax({*/
/*         url: 'index.php?route=tool/upload',*/
/*         type: 'post',*/
/*         dataType: 'json',*/
/*         data: new FormData($('#form-upload')[0]),*/
/*         cache: false,*/
/*         contentType: false,*/
/*         processData: false,*/
/*         beforeSend: function() {*/
/*           $(node).button('loading');*/
/*         },*/
/*         complete: function() {*/
/*           $(node).button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*           $('.text-danger').remove();*/
/* */
/*           if (json['error']) {*/
/*             $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*           }*/
/* */
/*           if (json['success']) {*/
/*             alert(json['success']);*/
/* */
/*             $(node).parent().find('input').val(json['code']);*/
/*           }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*       });*/
/*     }*/
/*   }, 500);*/
/* });*/
/* //--></script>*/
/* <!--for product quantity plus minus-->*/
/* <script type="text/javascript">*/
/*     //plugin bootstrap minus and plus*/
/*     $(document).ready(function() {*/
/*     $('.btn-number').click(function(e){*/
/*     e.preventDefault();*/
/*     var fieldName = $(this).attr('data-field');*/
/*     var type = $(this).attr('data-type');*/
/*     var input = $("input[name='" + fieldName + "']");*/
/*     var currentVal = parseInt(input.val());*/
/*     if (!isNaN(currentVal)) {*/
/*     if (type == 'minus') {*/
/*     var minValue = parseInt(input.attr('min'));*/
/*     if (!minValue) minValue = 1;*/
/*     if (currentVal > minValue) {*/
/*     input.val(currentVal - 1).change();*/
/*     }*/
/*     if (parseInt(input.val()) == minValue) {*/
/*     $(this).attr('disabled', true);*/
/*     }*/
/* */
/*     } else if (type == 'plus') {*/
/*     var maxValue = parseInt(input.attr('max'));*/
/*     if (!maxValue) maxValue = 999;*/
/*     if (currentVal < maxValue) {*/
/*     input.val(currentVal + 1).change();*/
/*     }*/
/*     if (parseInt(input.val()) == maxValue) {*/
/*     $(this).attr('disabled', true);*/
/*     }*/
/* */
/*     }*/
/*     } else {*/
/*     input.val(0);*/
/*     }*/
/*     });*/
/*     $('.input-number').focusin(function(){*/
/*     $(this).data('oldValue', $(this).val());*/
/*     });*/
/*     $('.input-number').change(function() {*/
/* */
/*     var minValue = parseInt($(this).attr('min'));*/
/*     var maxValue = parseInt($(this).attr('max'));*/
/*     if (!minValue) minValue = 1;*/
/*     if (!maxValue) maxValue = 999;*/
/*     var valueCurrent = parseInt($(this).val());*/
/*     var name = $(this).attr('name');*/
/*     if (valueCurrent >= minValue) {*/
/*     $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')*/
/*     } else {*/
/*     alert('Sorry, the minimum value was reached');*/
/*     $(this).val($(this).data('oldValue'));*/
/*     }*/
/*     if (valueCurrent <= maxValue) {*/
/*     $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')*/
/*     } else {*/
/*     alert('Sorry, the maximum value was reached');*/
/*     $(this).val($(this).data('oldValue'));*/
/*     }*/
/*     });*/
/*     $(".input-number").keydown(function (e) {*/
/*     // Allow: backspace, delete, tab, escape, enter and .*/
/*     if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||*/
/*             // Allow: Ctrl+A*/
/*                     (e.keyCode == 65 && e.ctrlKey === true) ||*/
/*                     // Allow: home, end, left, right*/
/*                             (e.keyCode >= 35 && e.keyCode <= 39)) {*/
/*             // let it happen, don't do anything*/
/*             return;*/
/*             }*/
/*             // Ensure that it is a number and stop the keypress*/
/*             if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {*/
/*             e.preventDefault();*/
/*             }*/
/*             });*/
/*     });*/
/* </script>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/*   $.ajax({*/
/*     url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*     type: 'post',*/
/*     dataType: 'json',*/
/*     data: $("#form-review").serialize(),*/
/*     beforeSend: function() {*/
/*       $('#button-review').button('loading');*/
/*     },*/
/*     complete: function() {*/
/*       $('#button-review').button('reset');*/
/*     },*/
/*     success: function(json) {*/
/*       $('.alert-dismissible').remove();*/
/* */
/*       if (json['error']) {*/
/*         $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*         $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*         $('input[name=\'name\']').val('');*/
/*         $('textarea[name=\'text\']').val('');*/
/*         $('input[name=\'rating\']:checked').prop('checked', false);*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* */
/* $(document).ready(function() {*/
/*   $('.thumbnails').magnificPopup({*/
/*     type:'image',*/
/*     delegate: 'a',*/
/*     gallery: {*/
/*       enabled: true*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* <!-- related -->*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*     $("#related").owlCarousel({*/
/*     itemsCustom : [*/
/*     [0, 1],*/
/*     [600, 2],*/
/*     [992, 3],*/
/*     [1200, 5]*/
/*     ],*/
/*       // autoPlay: 1000,*/
/*       navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],*/
/*       navigation : true,*/
/*       pagination:false*/
/*     });*/
/*     });*/
/* </script>*/
/* <!-- related over -->*/
/* <!-- zoom product start -->*/
/* <!-- zoom product start -->*/
/* <script>*/
/*      if (jQuery(window).width() > 991){*/
/*         //initiate the plugin and pass the id of the div containing gallery images*/
/*             $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: ''});*/
/*         //pass the images to Fancybox*/
/*             $("#zoom_03").bind("click", function (e) {*/
/*             var ez = $('#zoom_03').data('elevateZoom');*/
/*             $.fancybox(ez.getGalleryList());*/
/*             return false;*/
/*             });*/
/*     }*/
/* </script>*/
/* <!--ZOOM END-->*/
/* */
/* <!--slider for product-->*/
/* <script type="text/javascript"><!--*/
/* $('#gallery_01').owlCarousel({*/
/*   itemsCustom : [*/
/*         [0, 2],*/
/*         [412, 3],*/
/*         [600, 5],*/
/*         [768, 3],*/
/*         [992, 2],*/
/*         [1200, 2],*/
/*         [1401,2],*/
/*         [1850, 4]*/
/*         ],*/
/*   autoPlay: false,*/
/*   navigation: true,*/
/*   navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],*/
/*   pagination: false*/
/* });*/
/* --></script>*/
/* <!--over slider for product-->*/
/* */
/* */
/* {{ footer }}*/
/* */
