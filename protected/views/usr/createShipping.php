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
    			<h3>Add NewShipping Address</h3>
    			
				<?php
					$form = $this->beginWidget('CActiveForm',array(
									'id'=>'shippingListForm',
									'enableAjaxValidation'=>false,
								));
				?>
				<ol class="rr">

					<li>
						<!-- <div class='row'> -->
							<?php echo $form->labelEx($model,'title'); ?>
							<?php echo $form->textField($model,'title',array('placeholder'=>'Title')); ?>
							<?php echo $form->error($model,'title'); ?>
						<!-- </div> -->
					</li>
					<li>
						<!-- <div class='row'> -->
							<?php echo $form->labelEx($model,'address'); ?>
							<?php echo $form->textField($model,'address',array('placeholder'=>'Title')); ?>
							<?php echo $form->error($model,'address'); ?>
						<!-- </div> -->
					</li>
					<li>
						<!-- <div class='row'> -->
							<?php echo $form->labelEx($model,'city'); ?>
							<?php echo $form->textField($model,'city',array('placeholder'=>'Title')); ?>
							<?php echo $form->error($model,'city'); ?>
						<!-- </div> -->
					</li>
					<li>
						<!-- <div class='row'> -->
							<?php echo $form->labelEx($model,'state'); ?>
							<?php echo $form->textField($model,'state',array('placeholder'=>'Title')); ?>
							<?php echo $form->error($model,'state'); ?>
						<!-- </div> -->
					</li>
					<li>
						<!-- <div class='row'> -->
							<?php echo $form->labelEx($model,'country'); ?>
							<?php echo $form->textField($model,'country',array('placeholder'=>'Title')); ?>
							<?php echo $form->error($model,'country'); ?>
						<!-- </div> -->
					</li>
					<li>
						<?php echo CHtml::submitButton('Save') ?>
					</li>
        	</ol>
        	<?php
        		$this->endWidget();
        	?>
		</div>
	</div>
</div>