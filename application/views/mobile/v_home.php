<div class="container container-content-mobile">

    <div class="thumb-content-mobile">
        <div class="head-thumb-content-mobile">
            <?php foreach ($backgroundImg as $menu_) {
               if ($menu_->id == $id){ ?>
                  <div class="headimg-thumb-content-mobile"style="display:block;background-image:url(<?php echo base_url(menu_img().$menu_->background) ?>)"></div>
            <?php   }
            }
            ?>
        </div>

        <div class="body-thumb-content-mobile">
           <?php if(!empty($headerContent)){ ?>
               <div class="img-homes-headmobile"></div>
               <p><?php echo $headerContent[0]->summary ?></p>
               <h4><?php echo $headerContent[0]->description ?></h4>
               <a href="#" class="btn btn-thumb-home">FIND OUT MORE</a>
          <?php } ?>
       </div>
    </div><!-- thumb-content-mobile -->
    <div class="clearfix"></div>

    <?php
      if(!empty($listContent)){
          foreach ($listContent as $content) {
                echo mobileContent($content);

          }
      }
    ?>
<?php /*
    <div class="thumb-content-mobile-second">
        <div class="head-thumb-content-mobile1 p-relative">
            <div class="headimg-thumb-content-mobile-thumb1">
                <img src="./mobile_assets/Thumb_pic_home_1A.png">
            </div>
        </div>

        <div class="body-thumb-content-mobile body-thumb-content-mobile1">

            <div class="img-producthomes-headmobile"></div>
            <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
            <h4>OVER THE PAST FIVE YEARS, KOSHER CULINARY TRAVEL HAS BEEN COORDINATING AND ARRANGING EXCLUSIVE, HIGH-END</h4>
            <a href="#" class="btn btn-thumb-home">FIND OUT MORE</a>

        </div>
    </div><!-- thumb-content-mobile -->

    <div class="thumb-content-mobile-second">
        <div class="head-thumb-content-mobile1 p-relative">
            <div class="headimg-thumb-content-mobile-thumb1">

                    <div class="col-md-12 p-nol">
                        <div id="carousel-example-mobile" class="carousel slide" data-ride="carousel">
                           <ol class="carousel-indicators carousel-indicatorsthumb-home">
                                <li data-target="#carousel-example-mobile" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="1"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="2"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="3"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="4"></li>
                           </ol>
                           <div class="carousel-inner">
                                <div class="item active">
                                    <img src="./mobile_assets/Thumb_pic_home_2A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_1A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_3A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_4A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_5A.png" alt="">
                                </div>
                           </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="body-thumb-content-mobile body-thumb-content-mobile1">
            <div class="img-destinationhomes-headmobile"></div>
            <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
            <h4>OVER THE PAST FIVE YEARS, KOSHER CULINARY TRAVEL HAS BEEN COORDINATING AND ARRANGING EXCLUSIVE, HIGH-END, BESPOKE KOSHER VACATIONS FOR FAMILIES AND GROUPS.</h4>
            <a href="#" class="btn btn-thumb-home">Visit our destinations</a>

        </div>
    </div><!-- thumb-content-mobile -->

    <div class="thumb-content-mobile-second">
        <div class="head-thumb-content-mobile1 p-relative">
            <div class="headimg-thumb-content-mobile-thumb1">
                <img src="./mobile_assets/Thumb_pic_home_1A.png">
            </div>
        </div>

        <div class="body-thumb-content-mobile body-thumb-content-mobile1">

            <div class="img-travelhomes-headmobile"></div>
            <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
            <h4>OVER THE PAST FIVE YEARS, KOSHER CULINARY TRAVEL HAS BEEN COORDINATING AND ARRANGING EXCLUSIVE, HIGH-END FIND OUT MORE</h4>
            <a href="#" class="btn btn-thumb-home">FIND OUT MORE</a>

        </div>
    </div><!-- thumb-content-mobile -->

    <div class="thumb-content-mobile-second">
        <div class="head-thumb-content-mobile1 p-relative">
            <div class="headimg-thumb-content-mobile-thumb1">
                <img src="./mobile_assets/Thumb_pic_home_1A.png">
            </div>
        </div>

        <div class="body-thumb-content-mobile body-thumb-content-mobile1">

            <div class="img-journeyhomes-headmobile"></div>
            <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
            <h4>OVER THE PAST FIVE YEARS, KOSHER CULINARY TRAVEL HAS BEEN COORDINATING AND ARRANGING EXCLUSIVE, HIGH-END, BESPOKE KOSHER VACATIONS FOR FAMILIES AND GROUPS.</h4>

        </div>
    </div><!-- thumb-content-mobile -->

    <div class="thumb-content-mobile-second">
        <div class="head-thumb-content-mobile1 p-relative">
            <div class="headimg-thumb-content-mobile-thumb1">

                    <div class="col-md-12 p-nol">
                        <div id="carousel-example-mobile" class="carousel slide" data-ride="carousel">
                           <ol class="carousel-indicators carousel-indicatorsthumb-home">
                                <li data-target="#carousel-example-mobile" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="1"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="2"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="3"></li>
                                <li data-target="#carousel-example-mobile" data-slide-to="4"></li>
                           </ol>
                           <div class="carousel-inner">
                                <div class="item active">
                                    <img src="./mobile_assets/Thumb_pic_home_2A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_1A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_3A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_4A.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="./mobile_assets/Thumb_pic_home_5A.png" alt="">
                                </div>
                           </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="body-thumb-content-mobile body-thumb-content-mobile1">
            <div class="img-galleryhomes-headmobile"></div>
            <p>Over the past five years, Kosher Culinary Travel has been coordinating and arranging exclusive, high-end, bespoke kosher</p>
            <h4>OVER THE PAST FIVE YEARS, KOSHER CULINARY TRAVEL HAS BEEN COORDINATING AND ARRANGING EXCLUSIVE, HIGH-END, BESPOKE KOSHER VACATIONS FOR FAMILIES AND GROUPS.</h4>
            <a href="#" class="btn btn-thumb-home">see more</a>

        </div>
    </div><!-- thumb-content-mobile -->
*/?>
