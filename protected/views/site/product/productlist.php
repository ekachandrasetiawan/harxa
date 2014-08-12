      <ul id="productlist" class="row clearfix rr list-display product" style="display: none;">
        <?php foreach($models as $model): ?> 
             <li class="span12">
            <div class="row">
              <div class="span3 desat photo-wrapper">
                <!--<span class="badge corner-badge off-35 ir">35% off</span>-->
                <a href="<?php echo $this->createUrl('productDetail',array('id'=>$model->id)); ?>">
                  <img src="<?php echo yii::app()->baseUrl.'/images/products/'.$model->mainCover->file_name ?>" alt=""/>
                </a>
              </div>
              <div class="span9 info clearfix">
                <h1><?php echo $data->name ?></h1>
                <p>
                  Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia Curae; Aenean eleifend laoreet congue.
                </p>
                <hr/>
                <div class="row price-wrapper">
                  <div class="span2 clearfix">
                    <a href="7-cart.html" class="add-to-cart">
                      <span class="icon ir">Cart</span>
                      <span class="text">Add to cart</span>
                    </a>
                  </div>
                  <div class="span2">
                    <span class="price">
                      <span class="currency">Rp.</span><span class="value">1.500.000</span>
                    </span>
                  </div>
                </div>
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
                  <li>
                    <a href="#" class="clearfix">
                      <span class="icon email ir">Email</span>
                      <span class="text">Email to a friend</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
        </ul>