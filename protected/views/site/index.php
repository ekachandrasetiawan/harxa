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
            <div class="judul">
                WELCOME TO OUR ONLINE STORE
            </div>
            <p class="description" style="margin-left: 10px; line-height: 25px;">
                Lorem ipsum dolor sit amet conse ctetur addpisincing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliwua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                Lorem ipsum dolor sit amet conse ctetur addpisincing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliwua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                Lorem ipsum dolor sit amet conse ctetur addpisincing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliwua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
            </p>
          </div>
      </div>
      <div role="main" class="homepage container">
        <div class="row">
          <div class="span12 main-heading">
            <div class="heading-line"></div>
            <div class="heading-wrapper">
              <h1>Best products</h1>
            </div>
          </div>
        </div>
        <ul class="row-fluid clearfix rr popular-products grid-display">
          <?php for($i=1; $i<=3; $i++){ ?> 
          <li class="span3 alpha33">
            <div class="prod-wrapper">
              <span class="badge corner-badge hot ir hidden">Hot</span>
     
              <a href="index.php?page=productdetail">
                <img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/2.jpg" class="desat-ie" alt=""/>
              </a>
            <span class="status stylestatus">
                <table class="simple-table">
                    <tr>
                        <td colspan="3" style="color: #ed1c24 !important;">PRODUCT STATUS</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>Not Available</td>
                        <td>1 Buking</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>Ready</td>
                        <td>1 Buking</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>Ready</td>
                        <td>1 Buking</td>
                    </tr>
                </table>
            </span>
              <span class="info gradient">
                <span class="title">Men glass mode 2012</span>
                <span class="add-to-view clearfix">
                  <span class="icon ir">Cart</span>
                  <a href="7-cart.html" class="text">View Detail</a>
                </span>
                    <div class="grid-display">
                        <span class="badge price-badge">
                        <span class="value">
                        <span>Rp.</span>
                          <span>1.500.000</span>
                        </span>
                      </span>
                  </div>
              </span>
            </div>
          </li>
          <?php } ?>
        </ul>
        
  <div class="row top-spacing">
          <div class="span12 main-heading">
            <div class="heading-line"></div>
            <div class="heading-wrapper">
              <h1>Other products</h1>
            </div>
          </div>
        </div>
        
        <div id="other-prod-slider">
          <div class="navigation"></div>
          <ul class="row-fluid clearfix rr other-products">
            <li class="span3 alpha25 desat">
              <a href="5-product-details.html">
                <span class="badge off ir hidden">Off</span>              
                <img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/ph-home-small-1.png" alt=""/>
              </a>
              <span class="info">
                <span class="title">Men glass mode 2012</span>
                <span class="price">
                  <span class="old hidden"><span>$</span><span>100</span> - </span>
                  <span class="actual"><span>$</span><span>100</span></span>
                </span>
              </span>
            </li>
            <li class="span3 alpha25 desat">
              <a href="5-product-details.html">
                <span class="badge off ir hidden">Off</span>              
                <img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/ph-home-small-2.png" alt=""/>
              </a>
              <span class="info">
                <span class="title">Men glass mode 2012</span>
                <span class="price">
                  <span class="old hidden"><span>$</span><span>100</span> - </span>
                  <span class="actual"><span>$</span><span>100</span></span>
                </span>
              </span>
            </li>
            <li class="span3 alpha25 desat">
              <a href="5-product-details.html">
                <span class="badge off ir hidden">Off</span>              
                <img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/ph-home-small-3.png" alt=""/>
              </a>
              <span class="info">
                <span class="title">Men glass mode 2012</span>
                <span class="price">
                  <span class="old"><span>$</span><span>100</span> - </span>
                  <span class="actual"><span>$</span><span>100</span></span>
                </span>
              </span>
            </li>
            <li class="span3 alpha25 desat">
              <a href="5-product-details.html">
                <span class="badge off ir">Off</span>              
                <img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/ph-home-small-4.png" alt=""/>
              </a>
              <span class="info">
                <span class="title">Men glass mode 2012</span>
                <span class="price">
                  <span class="old hidden"><span>$</span><span>100</span> - </span>
                  <span class="actual"><span>$</span><span>100</span></span>
                </span>
              </span>
            </li>
            <li class="span3 alpha25 desat">
              <a href="5-product-details.html">
                <span class="badge off ir">Off</span>              
                <img src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/ph/ph-home-small-3.png" alt=""/>
              </a>
              <span class="info">
                <span class="title">Men glass mode 2012</span>
                <span class="price">
                  <span class="old hidden"><span>$</span><span>100</span> - </span>
                  <span class="actual"><span>$</span><span>100</span></span>
                </span>
              </span>
            </li>
          </ul>
        </div>
     
      </div>