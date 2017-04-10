      <div class="container-fluid container-fluid-imgparallax p-nol">
         <?php foreach ($backgroundImg as $menu_) {
            if ($menu_->id == $id){ ?>
              <div class="img-parallax-desktop"style="display:block;background-image:url('<?php echo base_url(menu_img().$menu_->background) ?>')"></div>
         <?php   }
         }
         ?>
         <?php

         ?>
         <?php if(!empty($headerContent)){ ?>
            <div class="container-kosher-thumb container-body-parallax">
                <div class="container-twocoloumn p-relative">
                    <div class="postnav-img-parallax">
                        <div class="nav-img-parallax">
                            <ul>
                                <li><a href="#" class="nav-backto-top"></a></li>
                                <li><a href="#" class="nav-subscribe-top"></a></li>
                                <li><a href="#" class="nav-message-top"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="twocoloumn-home twocoloumn-homew twocoloumn-home-top">
                        <div class="img-our-story"></div>
                        <h2><?php echo $headerContent[0]->summary ?></h2>
                        <p><?php echo $headerContent[0]->description ?></p>
                        <a href="#" class="btn btn-thumb-home">kashrut policy</a>
                    </div>
                </div>
            </div>
         <?php } ?>
      </div>

    <div class="container-fluid container-fluid-bodythumb p-nol">
      <?php
         if(!empty($listContent)){
            $i=0;
            foreach ($listContent as $content) {
               if ($i % 2 == 0){
                  echo contentleft($content);
               }else {
                  echo contentright($content);
               }
               $i++;
            }
         }
      ?>

    </div><!-- container-fluid-bodythumb -->
