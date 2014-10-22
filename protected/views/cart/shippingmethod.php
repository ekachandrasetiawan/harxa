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
                    <a class="currentmethod" href="<?php echo Yii::app()->createUrl('cart/shippingMethod'); ?>">Shipping method</a>
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
                <li class="current">
                    <h6>Shipping method</h6>
                    <div class="row">
                        <div class="span9 content-wrapper">

                            <h6>Shipping Method</h6><br />
                            Please Select Shipping Method<br /><br />
                            JAKARTA to <?php echo CHtml::encode(ucwords($cart->ShipmentTo->city)); ?>
                            <?php
                            $form = $this->beginWidget('CActiveForm',array(
                                'id'=>'shippingMethodForm',
                                'enableAjaxValidation'=>false,
                            ));
                            ?>
                            <div class="full-col">
                                <ul class="rr">
                                    <?php foreach($costs->price as $idx=>$cost): ?>
                                    <li class="span8">
                                        <div class="block bold black"> JNE <?php  echo CHtml::encode($cost->service); ?>:
                                        </div>
                                        <div class="span5">
                                            <!-- <input type="radio" id="radio1" name="shippingmethod" value="1"/> -->
                                            <!-- <label for="radio1" style="margin-left: -50px;">O</label> -->
                                            
                                            <?php 
                                                // echo $form->radioButtonList($method,'service',array()) 
                                                // var_dump($cost);
                                                echo CHtml::radioButton(CHtml::activeName($method,'service'),false,array('id'=>'radio'.$idx,'value'=>CJSON::encode(array('service'=>$cost->service_code,'value'=>$cost->value))));
                                            ?>
                                            <label for="radio<?php echo $idx; ?>" style="margin-left: -50px;">O</label>
                                            <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/jne.png" />

                                            Reguler Shipping Rate By TIKI JNE

                                        </div>
                                        <div class="span2 rigth">
                                            <?php  echo CHtml::encode($cost->value); ?>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>

                                    <!-- <li class="span8">
                                        <div class="block bold black"> TIKI JNE YES:
                                        </div>
                                        <div class="span5">
                                            <input type="radio" id="radio2" name="shippingmethod" value="2"/>
                                            <label for="radio2" style="margin-left: -50px;">O</label>
                                            <img src="<?php //echo yii::app()->theme->baseUrl.'/assets/' ?>img/jne.png" />
                                    
                                            Yakin Esok Sampai Shipping Rate By TIKI JNE
                                        </div>
                                        <div class="span2 rigth">
                                            Rp.20.000
                                        </div>
                                    </li> -->
                                    <li>
                                        <a onclick="jQuery('form#shippingMethodForm').submit();" class="btn secondary" href="#">
                                            <span class="gradient">Continue</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            $this->endWidget();
                            ?>
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