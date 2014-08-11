<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'slider-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'title',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textAreaGroup($model,'caption', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>
	<div class="form-group">
		<label for="Slider_tags" class="control-label">Tags</label>
		<?php 
			// echo $form->textAreaGroup($model,'tags', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8'))));
			$this->widget(
				'booster.widgets.TbSelect2',
				array(
					// 'id'=>CHtml::activeId($model,'value'),
					// 'id'=>'values',
					'asDropDownList' => false,
					// 'name' => 'clevertech',
					'form'=>$form,
					'model'=>$model,
					'attribute'=>'tags',
					'options' => array(
						'tags' => array(),
						'placeholder' => '..',
						'width' => '100%',
						'tokenSeparators' => array(',',' ','	'),
						'separator'=>',',
					)
				)
			);
		?>
	</div>
	

	<?php echo $form->fileFieldGroup($model,'file',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php
		echo $form->dropDownListGroup($model,'active',array('widgetOptions'=>array('data'=>array('1'=>'Active','0'=>'Not Active'))));
	?>

<div class="form-actions">
	<?php
		$this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		));
	?>
</div>

<?php $this->endWidget(); ?>
