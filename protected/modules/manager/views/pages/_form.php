<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'title',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php 

		// echo $form->textAreaGroup($model,'content', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8'))));
		$this->widget(
		    'booster.widgets.TbRedactorJs',
		    array(
		    	'model'=>$model,
		    	'attribute'=>'content',
		    	'editorOptions'=>array(
		    		'minHeight'=>1000
		    	)
			    // 'name' => 'content',
			    // 'value' => '<b>Here is the text which will be put into editor view upon opening.</b>',
		    )
	    );

	?>
	<div class="form-group">
		<label for="Pages_tags" class="control-label">Tags</label>
		<div class="select2-container select2-container-multi span8 form-control" id="s2id_Pages_tags" style="">
		<label class="select2-offscreen" for="s2id_autogen1">Tags</label>
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
