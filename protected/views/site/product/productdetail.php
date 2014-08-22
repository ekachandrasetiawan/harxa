<div class="container breadcrumb-wrapper">
    <div class="row">
      <div class="span12 breadcrumb">
        <ul class="rr">
          <li>
            <span class="splitter">/</span> 
            <a href="#">Home</a>
          </li>
          <li>
            <span class="splitter">/</span>
            <a href="#">Product Harxa</a>
          </li>
          <li>
            <span class="splitter">/</span>
            <a href="#">Green camouflage utility</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php
  
  ?>
      <div role="main" class="container product-details">
        <div class="row">
          <div class="span12">
            <div class="row">              
              <div class="span5 gallery">
                <div class="image">
                    <a href="<?php echo yii::app()->baseUrl.'/images/products/'.$models->mainCover->file_name ?>" title="<?php echo $models->name ?>" class="cloud-zoom colorbox" id='zoom1' rel="adjustX: 0, adjustY:0, tint:'#000000',tintOpacity:0.2, zoomWidth:360, position:'inside', showTitle:false">
                        <img src="<?php echo yii::app()->baseUrl.'/images/products/'.$models->mainCover->file_name ?>" title="<?php echo $models->name ?>" alt="<?php echo $models->name ?>" id="image" />
                            <span id="zoom-image">
                                <i class="zoom_bttn"></i> Zoom</span>
                    </a>
                </div>
                <div class="image-additional">
                <?php foreach($models->productImages as $image): ?>
                    <a href="<?php echo yii::app()->baseUrl.'/images/products/'.$image->file_name ?>" title="<?php echo $models->name ?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo yii::app()->baseUrl.'/images/products/'.$image->file_name ?>' ">
                        <img src="<?php echo yii::app()->baseUrl.'/images/products/'.$image->file_name ?>" width="62" height="62" title="<?php echo $models->name ?>" alt="<?php echo $models->name ?>" />
                    </a>
                <?php endforeach; ?>
                </div>
              </div>
              
              <form action="<?php echo $this->createAbsoluteUrl('cart/addToCart'); ?>" method="POST">
                <div class="span7 product">
                  <h1><?php echo  $models->name ?></h1>
                  <p class="description">
                    <?php echo substr(CHtml::encode(strip_tags($models->description)),0,300); ?>
                  </p>
                  <hr/>
                  

                  
                  <ul class="rr prefs clearfix">
                    <li class="size clearfix">
                      <span class="info-title">Size:</span>
                      <ul class="rr clearfix">
                        <?php 
                        $no=1;
                        foreach($models->productLists as $size): ?>
                        <li>
                              <input type="radio" id="radio<?php echo $no; ?>" name="size" value="<?php echo $size->id; ?>">
                              <label for="radio<?php echo $no; ?>"><?php echo strtoupper($size->size) ?></label>
                        </li>
                        <?php 
                        $no++;
                        endforeach; ?>
                      </ul>
                    </li>
                    <li class="avail clearfix">
                      <span class="info-title">Availability:</span>
                      <ul class="rr clearfix">
                        <li class="value">In stock</li>
                      </ul>
                    </li>
                  </ul>
              
                  <hr/>
                  
                  <ul class="rr clearfix buy-wrapper">
                    <li class="clearfix quantity">
                    
                      <div class="info-title">Quantity:</div>
                      <div class="f-select-wrapper fl">                  
                        <div id="current-quantity" class="current" class="clearfix">
                          <div class="value">2</div>
                          <div class="button gradient">
                            <span class="arrow ir">Open</span>
                          </div>
                        </div>
                      
                        <select name="qty" id="main-quantity" class="main">
                          <option selected="selected" value="1">1</option>
                        </select>                    
                      </div>
                      
                    </li>                  
                    <li>
                    
                      <!-- <a href="#" class="add-to-cart clearfix"> -->
                        <!--<span class="icon ir add-to-cart">Cart</span>-->
                        <input type="hidden" name="product_id" value="<?php echo CHtml::encode($models->id) ?>" />
                        <input type="hidden" name="price" value="<?php echo CHtml::encode($models->price) ?>" />
                        <input type="submit" name="submit" value="Add to Cart">
                      <!-- </a> -->
                    
                    </li>                  
                    <li class="price-wrapper">
                    
                      <span class="price">
                        <span class="currency">Rp.</span><span class="value"><?php echo Formatter::format_rupiah(''.$models->price.''); ?></span>
                      </span>
                    
                    </li>
                  </ul>                
                  
                  <hr/>
                  
                  <ul class="rr options clearfix">
                    <li>
                      <a href="#" class="clearfix">
                        <span class="icon wishlist ir">Wishlist</span>
                        <span class="text">Add to wishlist</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <span class="icon compare ir">Compare</span>
                        <span class="text">Add to compare</span>
                      </a>
                    </li>
                    <li class="last">
                      <a href="#" class="clearfix">
                        <span class="icon email ir">Email</span>
                        <span class="text">Email to a friend</span>
                      </a>
                    </li>
                  </ul>                
                  
                  <hr/>
                  
                  <div class="share-product">
                      <!-- AddThis Button BEGIN -->
                      <div class="addthis_toolbox addthis_default_style ">
                      <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                      <a class="addthis_button_tweet"></a>
                      <a class="addthis_button_pinterest_pinit"></a>
                      <a class="addthis_counter addthis_pill_style"></a>
                      </div>
                      <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-508f0d4568c64922"></script>
                      <!-- AddThis Button END -->
                  </div>
                  
                </div>
              </form>
              
            </div>
            
            <hr/>
            
            <div class="prod-info clearfix">
              <div class="tabs">
                <ul class="tabs rr clearfix">
                  <li class="current" id="tab-1">Product info</li>
                  <li id="tab-2">Reviews</li>
                  <!--<li id="tab-3">Product tags</li>-->
                </ul>
              </div>
              <ul class="rr content">
                <li class="current tab-1">
                  <?php echo $models->description; ?>
                </li>
                <li class="tab-2">
                  <?php echo $models->review; ?>
                </li>
               
              </ul>
            </div>            
            
          </div>

        </div>
      </div>      