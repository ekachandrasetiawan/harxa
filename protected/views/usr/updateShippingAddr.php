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
    					<a href="#">My Account</a>
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>
    <div role="main" class="container checkout">
    	<div class="row">

    		<div class="span3 progress">
    			<h3>Account</h3>
    			<ul class="rr">
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'login')); ?>">Login</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('site/page'); ?>">Register</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('usr/index'); ?>">My Account</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('usr/orderHistory'); ?>">Order History</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('site/page'); ?>">Newslatter</a>
    				</li>
    				<li>
    					<a href="<?php echo Yii::app()->createUrl('usr/shipping'); ?>">Shipping Address List</a>
    				</li>
    			</ul>
    		</div>


    		<div class="span9 checkout-list">
    			<h3>Update NewShipping Address</h3>
    			<?php
                $this->renderPartial('_shippingForm',array('model'=>$model));
                ?>
				
        	
		</div>
	</div>
</div>