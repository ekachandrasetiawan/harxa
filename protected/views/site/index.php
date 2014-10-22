      <div class="main-slideshow hidden-phone">
        <div class="container">
          <div class="row">
            <div class="span12">
             <ul class="rslides" id="slider">
                  <li><img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/ph-home-banner-1.png"/></li>
                   <li><img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/trunk.jpg"/></li>
                   <li><img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/ph-home-banner-1.png"/></li>
                   <li><img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/trunk.jpg"/></li>
             </ul>
            </div>
          </div>
        </div>
        
      </div>
      <div class="container">
          <div class="row">
            <?php
                echo $models->content;
            ?>
          </div>
      </div>