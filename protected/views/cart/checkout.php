      <div role="main" class="container checkout">
        <div class="row">
        
          <div class="span3 progress">
            <h3>Checkout progress</h3>
            <ul class="rr">
             <li>
                <a href="#" class="currentmethod">Checkout method</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('cart/selectSchedule'); ?>">Time Schedule</a>
              </li>
                <li>
                <a href="<?php echo Yii::app()->createUrl('cart/shippingAddress'); ?>">Shipping address</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('cart/shippingMethod'); ?>">Shipping method</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('cart/paymentMethod'); ?>">Payment method</a>
              </li>
            </ul>
          </div>
          
          <div class="span9 checkout-list">
            <h3>Checkout</h3>
            <ol class="rr">
              <li class="current">
                <h6>Checkout method</h6>
                <div class="row">
                  <?php
                  if(Yii::app()->user->isGuest):
                    ?>
                    <div class="span9 content-wrapper clearfix">
                      <div class="left-col">
                    
                        <h6>NEW CUSTOMER</h6>
                        <p>
                          Register New Account
                        </p>
                        
                        <form action="#" method="post" id="form-2">
                          <ul class="rr">
                            <li>
                              <label>
                                <input type="text" name="email" placeholder="Your Email..."/>
                              </label>
                            </li>
                            <li>
                              <label>
                                <input type="password" name="password" placeholder="Your password..."/>
                              </label>
                            </li>
                          </ul>
                          <a href="#" class="forgot">Forgot your password?</a>
                          
                          <a href="#" class="btn secondary" onclick="document.forms['form-2'].submit()">
                            <span class="gradient">Register</span>
                          </a>
                        </form>
                        
                      
                      </div>
                      <div class="right-col">
                      
                        <h6>Login</h6>
                        <p>
                          Already registered
                        </p>
                        
                        <form action="#" method="post" id="form-2">
                          <ul class="rr">
                            <li>
                              <label>
                                <input type="text" name="account" placeholder="Your account..."/>
                              </label>
                            </li>
                            <li>
                              <label>
                                <input type="password" name="password" placeholder="Your password..."/>
                              </label>
                            </li>
                          </ul>
                          
                          <a href="#" class="forgot">Forgot your password?</a>
                          <a href="#" class="btn secondary" onclick="document.forms['form-2'].submit()">
                            <span class="gradient">Login</span>
                          </a>
                        </form>
                      
                      </div>  
                    </div>
                    <?php
                  else:
                    //echo 'Youre Loged In As '.Yii::app()->user->getName().'<br/>';
                    
                    // Sudah Melakukan Login 
                    ?>
                        <div class="span9 checkout-list">
                            <ol class="rr">
                            <form action="#" method="post" id="form-2">
                            <!-- ----------- Your Personal Account ------------------- -->
                              <li class="current">
                                <h6>Your Personal information</h6>
                                <div class="row">
                                  <div class="span9 content-wrapper clearfix">
                                    <div class="full-col">
                                       <ul class="rr">
                                        <li>
                                            <div class="span2"> Title:
                                            </div>
                                            <label>
                                             <input id="radio1" type="radio" name="newsletter" value="1"/> 
                                             <label for="radio1">Mr.</label>
                                             <input type="radio" name="newsletter" value="2"/>
                                             <label for="radio2">Ms.</label>
                                              
                                             <input type="radio" name="newsletter" value="3"/>
                                            <label for="radio3">Miss.</label>
                                             
                                            </label>
                                          </li>
                                          <li>
                                            <div class="span2">
                                              <span class="red">*</span> First Name:
                                            </div>
                                            <label>
                                              <input type="text" name="first" placeholder="First Name.."/>
                                            </label>
                                          </li>
                                          <li>
                                            <div class="span2">
                                              <span class="red">*</span> Last Name:
                                            </div>
                                            <label>
                                              <input type="text" name="last" placeholder="Last Name.."/>
                                            </label>
                                          </li>
                
                                          <li>
                                            <div class="span2">
                                              <span class="red">*</span> E-Mail:
                                            </div>
                                            <label>
                                              <input type="text" name="last" placeholder="E-Mail.."/>
                                            </label>
                                          </li>
                
                                            <li>
                                            <div class="span2">
                                              <span class="red">*</span> Telephone:
                                            </div>
                                            <label>
                                              <input type="text" name="last" placeholder="Telephone.."/>
                                            </label>
                                          </li>
                                           <li>
                                            <div class="span2">
                                              <span class="red">*</span> Password:
                                            </div>
                                            <label>
                                              <input type="password" name="first" placeholder="Password.."/><br/>
                                            </label>
                                              <div class="span2">
                                             
                                              </div>
                                               <label>
                                                 (5 characters min.)
                                               </label>
                                              
                                          </li>
                                          <li>
                                               <div class="span2">
                                             
                                              </div>
                                               
                                          </li>
                                        </ul>
                                    
                                    </div>  
                                  </div>                      
                                </div>
                              </li>
                              <!-- ---------- Newslatter--------------- -->
                
                                <li class="current">
                                <p>
                                <a href="<?php echo $this->createUrl('cart/selectSchedule'); ?>" class="btn secondary" onclick="document.forms['form-2'].submit()">
                                <span class="gradient">NEXT</span>
                               </a>
                
                              </li>
                              </form>
                            </ol>
                          </div>
                    <?php
                    endif;
                  ?>
                </div>
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
              <li>
                <h6>Payment information</h6>
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