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
                    <a class="currentmethod" href="#">Shipping address</a>
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
                <li class="current">
                    <h6>Shipping Address</h6>
                    <div class="row">

                        <div class="span9 content-wrapper clearfix">

                            <h6>Shipping Address</h6>
                            <?php echo CHtml::dropDownList('shipAddrTitle',$model->id,CHtml::listData(ShippingAddr::model()->findAll(),'id','title')) ?>
                            <?php
                            Yii::app()->clientScript->registerScript('shipAddrTitleOnChange','
                                jQuery(\'#shipAddrTitle\').change(function(){
                                    jQuery.ajax({
                                        type:"POST",
                                        url: \''.$this->createAbsoluteUrl('cart/setShipmentTo').'\',
                                        data:\'id=\'+jQuery(\'#shipAddrTitle\').val(),
                                        success:function(data){
                                            jQuery.each(data,function(idx,dd){
                                                jQuery(\'#\'+idx).val(dd);
                                            });
                                        }

                                    });
                                });
                            ');
                            ?>
                            <br />
                            <?php
                            $form = $this->beginWidget('CActiveForm',array(
                                'id'=>'shippingAddrForm',
                                'enableAjaxValidation'=>false,
                            ));
                            ?>
                            <div class="full-col">
                                <ul class="rr">
                                    <li>
                                        <div class="span2">
                                            <span class="red">*</span> Name:
                                        </div>
                                        <label>

                                            <?php echo $form->dropDownList($shipmentTo,'sex',array(1=>'Mr.',2=>'Miss./Mrs.')); ?>
                                        </label>
                                    </li>

                                    <li>
                                        <div class="span2">
                                            <span class="red">*</span> Name:
                                        </div>
                                        <label>
                                            <!-- <input type="text" name="first" placeholder="First Name.." value="Eka Chandra"/> -->
                                            <?php echo $form->textField($shipmentTo,'person_name',array('id'=>'person_name','value'=>ucwords(Yii::app()->user->getName()))); ?>
                                        </label>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <span class="red">*</span> Address :
                                        </div>
                                        <label>
                                            <?php echo $form->textField($shipmentTo,'address',array('id'=>'address','value'=>($shipmentTo->isNewRecord ? $model->address:$shipmentTo->address))); ?>
                                        </label>
                                    </li>

                                    <li>
                                        <div class="span2">
                                            <span class="red">*</span> City :
                                        </div>
                                        <label>
                                            <?php echo $form->textField($shipmentTo,'city',array('id'=>'city','value'=>($shipmentTo->isNewRecord ? $model->city:$shipmentTo->city))); ?>
                                        </label>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <span class="red">*</span> Zip / Postal Code :
                                        </div>
                                        <label>
                                            <?php echo $form->textField($shipmentTo,'zip_code',array('id'=>'zip_code','value'=>($shipmentTo->isNewRecord ? $model->address:$shipmentTo->zip_code))); ?>
                                        </label>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <span class="red">*</span> Country  :
                                        </div>
                                        <label>
                                            <select name="id_country" id="id_country"><option selected="selected" value="111">Indonesia</option></select>
                                        </label>
                                    </li>

                                    <li>
                                        <div class="span2">
                                            <span class="red">*</span> Telephone:
                                        </div>
                                        <label>
                                            <?php echo $form->textField($shipmentTo,'phone',array('id'=>'phone','value'=>($shipmentTo->isNewRecord ? $model->phone:$shipmentTo->phone))); ?>
                                        </label>
                                    </li>
                                    <li>
                                        <a onclick="jQuery('form#shippingAddrForm').submit();" class="btn secondary" href="#">
                                            <span class="gradient">Continue</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <?php
                            $this->endWIdget();
                            ?>
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