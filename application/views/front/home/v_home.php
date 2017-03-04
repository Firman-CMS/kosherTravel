
   <div class="container-fluid container-fluid-imgparallax p-nol">
         <?php foreach ($backgroundImg as $menu_) {
            if ($menu_->id == $id){ ?>
               <div class="img-parallax-desktop"style="display:block;background-image:url(<?php echo base_url(menu_img().$menu_->background) ?>)"></div>
         <?php   }
         }
         ?>
         <!-- home 1 Luxury-travel-->
         <?php if(!empty($headerContent)){ ?>
            <div class="container-kosher-thumb container-body-parallax">
               <div class="container-twocoloumn p-relative">
                   <div class="twocoloumn-home twocoloumn-homew twocoloumn-home-top">
                        <div class="img-luxpriv-travel"></div>
                        <p><?php echo $headerContent[0]->summary ?></p>
                        <h2><?php echo $headerContent[0]->description ?></h2>
                        <a href="#" class="btn btn-thumb-home">TELL US MORE</a>
                   </div>
                </div>
            </div>
         <?php } ?>

   </div>

    <div class="container-fluid container-fluid-bodythumb p-nol">
      <?php
         foreach ($listContent as $content) {
            // print_r($content->image);
            $num_files_array = $content->image;
   			$num_files_array = rtrim($num_files_array,',');
   			$num_files_array = explode(",", $num_files_array);

            echo contentright($content);
            // echo count(array_filter($num_files_array));

         }
      ?>

         <div class="container-kosher-thumb container-kosher-thumb1">
            <div class="container-twocoloumn">
               <div class="twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg">
                  <img src="./img/Thumb_pic_home_1A.jpg">
              </div>
              <div class="twocoloumn-home-gen twocoloumn-home twocoloumn-homew">
                  <div class="img-product-off"></div>
                  <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
                  <h2>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end</h2>
                  <a href="#" class="btn btn-thumb-home">Find out more</a>
               </div>
            </div>
         </div><!-- right container-kosher-thumb1 product-offer -->

         <div class="container-kosher-thumb container-kosher-thumb1">
           <div class="container-twocoloumn">
             <div class="twocoloumn-home-gen twocoloumn-home twocoloumn-homew">
               <div class="img-destination"></div>
               <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher vacations for families and groups.</p>
               <h2>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher vacations for families and groups.</h2>
               <a href="#" class="btn btn-thumb-home">Visit our destinations</a>
            </div>
            <div class="twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg">
               <div class="col-md-12 p-nol">
                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                       <ol class="carousel-indicators carousel-indicatorsthumb-home">
                           <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                       </ol>
                       <div class="carousel-inner">
                           <div class="item active">
                               <img src="./img/Thumb_pic_home_2A.jpg" alt="">
                           </div>
                           <div class="item">
                               <img src="./img/Thumb_pic_home_1A.jpg" alt="">
                           </div>
                           <div class="item">
                               <img src="./img/Thumb_pic_home_3A.jpg" alt="">
                           </div>
                           <div class="item">
                               <img src="./img/Thumb_pic_home_4A.jpg" alt="">
                           </div>
                           <div class="item">
                               <img src="./img/Thumb_pic_home_5A.jpg" alt="">
                           </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
         </div>  <!-- leftmulti container-kosher-thumb1 destination-->

         <div class="container-kosher-thumb container-kosher-thumb1">
             <div class="container-twocoloumn">
                <div class="twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg">
                  <img src="./img/Thumb_pic_home_3A.jpg">
                </div>

                <div class="twocoloumn-home-gen twocoloumn-home twocoloumn-homew">
                  <div class="img-ourtravel"></div>
                  <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
                  <h2>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end</h2>
                  <a href="#" class="btn btn-thumb-home">Find out more</a>
                </div>
           </div>
        </div><!-- right2 container-kosher-thumb1 ourtravel-service -->

         <div class="container-kosher-thumb container-kosher-thumb1">
              <div class="container-twocoloumn">
                <div class="twocoloumn-home-gen twocoloumn-home twocoloumn-homew">
                  <!-- twocoloumn-home-nologo -->
                  <div class="img-journey"></div>
                  <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher vacations for families and groups.</p>
                  <h2>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher vacations for families and groups.</h2>
               </div>

               <div class="twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg">
                  <img src="./img/Thumb_pic_home_4A.jpg">
               </div>
            </div>
         </div><!-- left container-kosher-thumb1 our-journey -->

         <div class="container-kosher-thumb container-kosher-thumb1">
            <div class="container-twocoloumn">
               <div class="twocoloumn-home-gen twocoloumn-home-img twocoloumn-homew twocoloumn-home-singleimg">
                  <div class="col-md-12 p-nol">
                      <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators carousel-indicatorsthumb-home">
                              <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic1" data-slide-to="3"></li>
                              <li data-target="#carousel-example-generic1" data-slide-to="4"></li>
                          </ol>
                          <div class="carousel-inner">
                              <div class="item active">
                                  <img src="./img/Thumb_pic_home_5A.jpg" alt="">
                              </div>
                              <div class="item">
                                  <img src="./img/Thumb_pic_home_2A.jpg" alt="">
                              </div>
                              <div class="item">
                                  <img src="./img/Thumb_pic_home_3A.jpg" alt="">
                              </div>
                              <div class="item">
                                  <img src="./img/Thumb_pic_home_4A.jpg" alt="">
                              </div>
                              <div class="item">
                                  <img src="./img/Thumb_pic_home_1A.jpg" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
               </div>

                <div class="twocoloumn-home-gen twocoloumn-home twocoloumn-homew">
                     <div class="img-gallery"></div>
                     <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
                     <h2>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end</h2>
                     <a href="#" class="btn btn-thumb-home">see more</a>
               </div>
            </div>
         </div><!--rightmulti container-kosher-thumb1 gallery-->

    </div><!-- container-fluid-bodythumb -->
