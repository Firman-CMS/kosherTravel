<?php

   function contentright($content)
   {
      $img = $content->image;
      $img = rtrim($img,',');
      $img = explode(",", $img);
      $countimg = count(array_filter($img));
      $btn_cat = btncat($content->submenu_id);
      $img_cat = imgcat($content->submenu_id);
      $ci =& get_instance();
      $ci->load->helper('application');

      if($countimg == 0){
         $html = "<div class=\"container-kosher-thumb container-kosher-thumb1\">
            <div class=\"container-twocoloumn\">
               <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">

              </div>
              <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                  <div class=\"{$img_cat}\"></div>
                  <p>{$content->summary}</p>
                  <h2>{$content->description}</h2>
                  <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>
               </div>
            </div>
         </div><!-- right container-kosher-thumb1 product-offer -->";
         return $html;
      }elseif ($countimg == 1) {
         $html = "<div class=\"container-kosher-thumb container-kosher-thumb1\">
            <div class=\"container-twocoloumn\">
               <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">
                  <img src=\"./img/Thumb_pic_home_1A.jpg\">
              </div>
              <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                  <div class=\"{$img_cat}\"></div>
                  <p>{$content->summary}</p>
                  <h2>{$content->description}</h2>
                  <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>
               </div>
            </div>
         </div><!-- right container-kosher-thumb1 product-offer -->";
         return $html;
      }elseif ($countimg > 1) {
         $html = "<div class=\"container-kosher-thumb container-kosher-thumb1\">
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
                             $html .= "<li data-target=\"#carousel-example-generic1\" data-slide-to={$i} class=\"{$class}\"></li>";
                             $i++;
                          }

                          $html .="</ol>
                          <div class=\"carousel-inner\">";
                              $i = 0;
                              foreach ($img as $_img ) {
                                 if ($i == 0) {
                                    $class = "active";
                                 }else {
                                    $class = "";
                                 }
                                 $imgurl = base_url(content_img().$_img);
                                 $html .= "<div class=\"item $class \">
                                                 <img src={$imgurl} alt=\"\">
                                             </div>";
                              $i++;
                              }
                     $html .= "
                             </div>
                         </div>
                     </div>
                  </div>

                   <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                        <div class=\"{$img_cat}\"></div>
                        <p>{$content->summary}</p>
                        <h2>{$content->description}</h2>
                        <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>
                  </div>
               </div>
            </div><!--rightmulti container-kosher-thumb1 gallery-->";
            return $html;
         }
      }

      function contentleft($content)
      {
         $img = $content->image;
         $img = rtrim($img,',');
         $img = explode(",", $img);
         $countimg = count(array_filter($img));
         $btn_cat = btncat($content->submenu_id);
         $img_cat = imgcat($content->submenu_id);
         $ci =& get_instance();
         $ci->load->helper('application');

         if($countimg == 0) {
            $html = "<div class=\"container-kosher-thumb container-kosher-thumb1\">
                          <div class=\"container-twocoloumn\">
                           <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                              <!-- twocoloumn-home-nologo -->
                              <div class=\"{$img_cat}\"></div>
                              <p>{$content->summary}</p>
                              <h2>{$content->description}</h2>
                              <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>
                           </div>

                           <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">

                           </div>
                        </div>
                     </div><!-- left container-kosher-thumb1 our-journey -->";
            return $html;
         }elseif ($countimg == 1) {
            $html ="<div class=\"container-kosher-thumb container-kosher-thumb1\">
                          <div class=\"container-twocoloumn\">
                           <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                              <!-- twocoloumn-home-nologo -->
                              <div class=\"{$img_cat}\"></div>
                              <p>{$content->summary}</p>
                              <h2>{$content->description}</h2>
                              <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>
                           </div>

                           <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">
                              <img src=\"./img/Thumb_pic_home_4A.jpg\">
                           </div>
                        </div>
                     </div><!-- left container-kosher-thumb1 our-journey -->";
            return $html;
         }elseif ($countimg > 1) {
            $html = "<div class=\"container-kosher-thumb container-kosher-thumb1\">
                       <div class=\"container-twocoloumn\">
                         <div class=\"twocoloumn-home-gen twocoloumn-home twocoloumn-homew\">
                           <div class=\"{$img_cat}\"></div>
                           <p>{$content->summary}</p>
                           <h2>{$content->description}</h2>
                           <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>
                        </div>
                        <div class=\"twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg\">
                           <div class=\"col-md-12 p-nol\">
                               <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                                   <ol class=\"carousel-indicators carousel-indicatorsthumb-home\">";
                                   $i = 0;
                                   foreach ($img as $_img ) {
                                      if ($i == 0) {
                                         $class = "active";
                                      }else {
                                         $class = "";
                                      }
                                      $html .= "<li data-target=\"#carousel-example-generic\" data-slide-to={$i} class=\"{$class}\"></li>";
                                      $i++;
                                   }
                                   $html .= "</ol>
                                   <div class=\"carousel-inner\">";
                                      $i = 0;
                                      foreach ($img as $_img ) {
                                         if ($i == 0) {
                                            $class = "active";
                                         }else {
                                            $class = "";
                                         }
                                         $imgurl = base_url(content_img().$_img);
                                         $html .= "<div class=\"item $class\">
                                                     <img src={$imgurl} alt={$content->title}>
                                                 </div>";
                                      $i++;
                                      }


                     $html .=   "</div>
                                </div>
                             </div>
                          </div>
                       </div>
                     </div>  <!-- leftmulti container-kosher-thumb1 destination-->";
            return $html;

         }

      }

      function mobileContent($content){
         $img = $content->image;
         $img = rtrim($img,',');
         $img = explode(",", $img);
         $countimg = count(array_filter($img));
         $btn_cat = btncat($content->submenu_id);
         $img_cat = imgcat($content->submenu_id);
         $ci =& get_instance();
         $ci->load->helper('application');

         if($countimg == 0) {
            $html = "<div class=\"thumb-content-mobile-second\">
                <div class=\"head-thumb-content-mobile1 p-relative\">
                    <div class=\"headimg-thumb-content-mobile-thumb1\">
                        <img src=\"{$img_cat}\">
                    </div>
                </div>

                <div class=\"body-thumb-content-mobile body-thumb-content-mobile1\">

                    <div class=\"img-producthomes-headmobile\"></div>
                    <p>{$content->summary}</p>
                    <h4>{$content->description}</h4>
                    <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>

                </div>
            </div>";
            return $html;
         }elseif ($countimg == 1) {
            $html = "<div class=\"thumb-content-mobile-second\">
                <div class=\"head-thumb-content-mobile1 p-relative\">
                    <div class=\"headimg-thumb-content-mobile-thumb1\">
                        <img src=\"{$img_cat}\">
                    </div>
                </div>

                <div class=\"body-thumb-content-mobile body-thumb-content-mobile1\">

                    <div class=\"img-producthomes-headmobile\"></div>
                    <p>{$content->summary}</p>
                    <h4>{$content->description}</h4>
                    <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>

                </div>
            </div>";
            return $html;
         }elseif ($countimg > 1) {
            $html = "<div class=\"thumb-content-mobile-second\">
                <div class=\"head-thumb-content-mobile1 p-relative\">
                    <div class=\"headimg-thumb-content-mobile-thumb1\">

                            <div class=\"col-md-12 p-nol\">
                                <div id=\"carousel-example-mobile\" class=\"carousel slide\" data-ride=\"carousel\">
                                   <ol class=\"carousel-indicators carousel-indicatorsthumb-home\">";

                                   $i = 0;
                                   foreach ($img as $_img ) {
                                      if ($i == 0) {
                                         $class = "active";
                                      }else {
                                         $class = "";
                                      }
                                      $html .= "<li data-target=\"#carousel-example-generic\" data-slide-to=\"{$i}\" class=\"{$class}\"></li>";
                                      $i++;
                                   }
                                   $html .="</ol>
                                   <div class=\"carousel-inner\">";
                                         $i = 0;
                                         foreach ($img as $_img ) {
                                            if ($i == 0) {
                                               $class = "active";
                                            }else {
                                               $class = "";
                                            }
                                            $imgurl = base_url(content_img().$_img);
                                            $html .= "<div class=\"item $class\">
                                                       <img src={$imgurl} alt={$content->title}>
                                                    </div>";
                                         $i++;
                                         }

                     $html .= "</div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class=\"body-thumb-content-mobile body-thumb-content-mobile1\">
                    <div class=\"img-destinationhomes-headmobile\"></div>
                    <p>{$content->summary}</p>
                    <h4>{$content->description}</h4>
                    <a href=\"#\" class=\"btn btn-thumb-home\">{$btn_cat}</a>

                </div>
            </div><!-- thumb-content-mobile -->";
            return $html;
         }
      }

      function btncat($submenu_id){
         if($submenu_id == 3 || $submenu_id == 6 ){
            return "Find out more";
         }elseif ($submenu_id == 5) {
            return "Visit our destinations";
         }elseif ($submenu_id == 8) {
            return "see more";
         }else {
            return "";
         }

      }

      function imgcat($submenu_id){
         if($submenu_id == 3){
            return "img-product-off";
         }elseif ($submenu_id == 5) {
            return "img-destination";
         }elseif ($submenu_id == 6) {
            return "img-ourtravel";
         }elseif ($submenu_id == 7) {
            return "img-journey";
         }elseif ($submenu_id == 8) {
            return "img-gallery";
         }elseif ($submenu_id == 4) {
            return "img-itsall-started";
         }elseif ($submenu_id == 9) {
            return "img-head-chief";
         }else {
            return "";
         }

      }
