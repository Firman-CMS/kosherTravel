<?php

   function contentright($content)
   {
      $img = $content->image;
      $img = rtrim($img,',');
      $img = explode(",", $img);
      $countimg = count(array_filter($img));
      $ci =& get_instance();
      $ci->load->helper('application');

      if($countimg == 0){
         return "<div class=\"container-kosher-thumb container-kosher-thumb1\">
            <div class=\"container-twocoloumn\">
               <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">

              </div>
              <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                  <div class=\"img-product-off\"></div>
                  <p>#{$content->summary}</p>
                  <h2>#{$content->description}</h2>
                  <a href=\"#\" class=\"btn btn-thumb-home\">Find out more</a>
               </div>
            </div>
         </div><!-- right container-kosher-thumb1 product-offer -->";
      }elseif ($countimg == 1) {
         return "<div class=\"container-kosher-thumb container-kosher-thumb1\">
            <div class=\"container-twocoloumn\">
               <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">
                  <img src=\"./img/Thumb_pic_home_1A.jpg\">
              </div>
              <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                  <div class=\"img-product-off\"></div>
                  <p>#{$content->summary}</p>
                  <h2>#{$content->description}</h2>
                  <a href=\"#\" class=\"btn btn-thumb-home\">Find out more</a>
               </div>
            </div>
         </div><!-- right container-kosher-thumb1 product-offer -->";
      }else {
         $return = "<div class=\"container-kosher-thumb container-kosher-thumb1\">
            <div class=\"container-twocoloumn\">
               <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">
                  <div class=\"col-md-12 p-nol\">
                      <div id=\"carousel-example-generic1\" class=\"carousel slide\" data-ride=\"carousel\">
                          <ol class=\"carousel-indicators carousel-indicatorsthumb-home\">";
                          $i = 0;
                          foreach ($img as $_img ) {
                             if ($i == 0) {
                                $class = "active";
                             }else {
                                $class = "";
                             }
                             $return .= "<li data-target=\"#carousel-example-generic1\" data-slide-to={$i} class=\"{$class}\"></li>";
                             $i++;
                          }

                          $return .="</ol>
                          <div class=\"carousel-inner\">";
                              $i = 0;
                              foreach ($img as $_img ) {
                                 if ($i == 0) {
                                    $class = "active";
                                 }else {
                                    $class = "";
                                 }
                                 $imgurl = base_url(content_img().$_img);
                                 $return .= "<div class=\"item $class \">
                                                 <img src={$imgurl} alt=\"\">
                                             </div>";
                              $i++;
                              }
                  $return .= "
                          </div>
                      </div>
                  </div>
               </div>

                <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                     <div class=\"img-gallery\"></div>
                     <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
                     <h2>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end</h2>
                     <a href=\"#\" class=\"btn btn-thumb-home\">see more</a>
               </div>
            </div>
         </div><!--rightmulti container-kosher-thumb1 gallery-->";
         return $return;
      }
   }
