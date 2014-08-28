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
			<?php 
                //echo $form->textField($model,'city',array('placeholder'=>'Title'));
            $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
                // 'name'=>'city',
                'model'=>$model,
                'attribute'=>'city',
                'sourceUrl'=>$this->createUrl('usr/getCity'),
                // additional javascript options for the autocomplete plugin
                'options'=>array(
                    'minLength'=>'2',
                    ),
                'htmlOptions'=>array(
                    'style'=>'height:20px;',
                    ),
                ));
            ?>
			<?php echo $form->error($model,'city'); ?>
		<!-- </div> -->
	</li>
	<!-- <li>
        
            <?php //echo $form->labelEx($model,'state'); ?>
            <?php //echo $form->textField($model,'state',array('placeholder'=>'Title')); ?>
            <?php //echo $form->error($model,'state'); ?>
        
    </li>
    <li>
        
            <?php //echo $form->labelEx($model,'country'); ?>
            <?php //echo $form->textField($model,'country',array('placeholder'=>'Title')); ?>
            <?php //echo $form->error($model,'country'); ?>
        
    </li> -->
    <li>
			<?php echo $form->labelEx($model,'zip_code'); ?>
			<?php echo $form->textField($model,'zip_code',array('placeholder'=>'Zip Code')); ?>
			<?php echo $form->error($model,'zip_code'); ?>
	</li>
	<li>
			<?php echo $form->labelEx($model,'phone'); ?>
			<?php echo $form->textField($model,'phone',array('placeholder'=>'Phone')); ?>
			<?php echo $form->error($model,'phone'); ?>
	</li>
	<li>
		<?php echo CHtml::submitButton('Save') ?>
	</li>
</ol>
<?php
	$this->endWidget();
?>