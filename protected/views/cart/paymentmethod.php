      <div role="main" class="container checkout">
        <div class="row">
        
          <div class="span3 progress">
            <h3>Checkout progress</h3>
            <ul class="rr">
            <li>
                <a href="<?php echo Yii::app()->createUrl('cart/checkOut'); ?>">Checkout method</a>
              </li>
              <li>
                <a  href="<?php echo Yii::app()->createUrl('cart/selectSchedule'); ?>">Time Schedule</a>
              </li>
              <li>
                <a  href="<?php echo Yii::app()->createUrl('cart/shippingAddress'); ?>">Shipping address</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('cart/shippingMethod'); ?>">Shipping method</a>
              </li>
              <li>
                <a class="currentmethod" href="#">Payment method</a>
              </li>
            </ul>
          </div>
          
          <div class="span9 checkout-list">
            <h3>Checkout</h3>
            <ol class="rr">
              <li>
                <h6>Checkout method</h6>
              </li>
              <li>
                <h6>Time Schedule</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li>
                <h6>Shipping Address</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li>
                <h6>Shipping method</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li class="current">
                <h6>Payment method</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                   <h6>Payment Method</h6><br />
                    <div class="full-col">
                     <ul class="rr">
                           <li class="span8">
                          <div class="span8">
                              <input type="radio" id="radio1" name="payment" value="1" checked="checked"/>
                               <label for="radio1" style="margin-left: -50px; margin-right: 10px ;">O</label>
                              <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/bca.png" />
                              
                              Payment From Rekening BCA
                          </div>
                          </li>
                    </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="last">
                <h6>Order review</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
            </ol>
          </div>
        
        </div>
      </div> 