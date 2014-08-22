<div role="main" class="container checkout">
  <div class="row">

    <div class="span3 progress">
      <h3>Checkout progress</h3>
      <ul class="rr">
         <li>
                <a href="<?php echo Yii::app()->createUrl('cart/checkOut'); ?>">Checkout method</a>
              </li>
              <li>
                <a  class="currentmethod" href="#">Time Schedule</a>
              </li>
              <li>
                <a  href="<?php echo Yii::app()->createUrl('cart/shippingAddress'); ?>">Shipping address</a>
              </li>
              <li>
                <a  href="<?php echo Yii::app()->createUrl('cart/shippingMethod'); ?>">Shipping method</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('cart/paymentMethod'); ?>">Payment method</a>
              </li>
      </ul>
    </div>

    <div class="span9 checkout-list">
      <h3>Checkout</h3>
      <ol class="rr">
        <li>
          <h6>Checkout method</h6>
        </li>
        <li class="current">
          <h6>Time Schedule</h6>
          <div class="row">
            <div class="span9 content-wrapper clearfix cart">
              <h6>TIME SCHEDULE</h6><br />
              <table class="span8">
                <tr class="headers">
                  <th rowspan="2" class="alpha16 dark">
                    Date
                  </th>
                  <th colspan="3" class="alpha16 dark">
                    Time
                  </th>
                </tr>
                <tr>
                  <?php
                  if(isset($schedule_time)){
                    $times = CJSON::decode($schedule_time);
                    foreach($times as $idx=>$time){
                      // echo $time.'<br/>';
                      echo '<th class="alpha16 dark">
                            '.$time.'
                          </th>';
                    }
                  }
                  ?>
                  <!-- <th class="alpha16 dark">
                    09:00
                  </th>
                  <th class="alpha16 dark">
                    14:00
                  </th>
                  <th class="alpha16 dark">
                    17:00
                  </th> -->
                </tr>


                <?php
                for($i=0; $i<($diff-1); $i++){ ?>
                <tr>
                  <td>
                    <?php 
                      $dates[$i] = date('Y-m-d',strtotime($open.'+'.$i.' day'));
                      echo $dates[$i];
                    ?>
                  </td>

                  <?php
                  if(isset($schedule_time)){
                    $times = CJSON::decode($schedule_time);
                    
                    foreach($times as $idx=>$time){
                      // echo $time.'<br/>';
                      $check = Cart::model()->checkAvailableSchedule($dates[$i].' '.$time);
                      echo '<td>
                        <input type="radio" name="schedule" value="1"/> 
                        '.($check ? '<span class="green">Available</span>':'<span class="red">Not Available</span>').'</span>

                      </td>';
                    }
                  }

                  ?>
                  

                  <!-- <td>
                    <input type="radio" name="schedule" value="2"/> Available
                  </td>
                  
                  <td>
                    <input type="radio" name="schedule" value="3"/> Available
                  </td> -->
                </tr>
                <?php 
                }


                ?>

              </table>

              <a onclick="document.forms['form-1'].submit()" class="btn secondary" href="#">
                <span class="gradient">Continue</span>
              </a>
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
        <li>
          <h6>Payment method</h6>
          <div class="row">
            <div class="span9 content-wrapper">
              Content
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