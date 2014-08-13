<?php

	$form = $this->beginWidget('booster.widgets.TbActiveForm',array(
	    'type'=>'horizontal',
	    'id'=>'galleryDescriptionForm',
	    'enableAjaxValidation'=>true,
	));
?>
	<div class="row">
		<?php 
			echo $form->textFieldGroup($model,'name',array(
				'labelOptions'=>array(
					'class'=>'col-sm-2',
				)
			));
		?>
	</div>
	


	<div class="form-group">
		<label for="Product_price" class="col-sm-2 col-sm-3 control-label">Description</label>
		<div class="col-sm-9">
			<?php
				// LONG DESCRIPTION
				$this->widget(
					'booster.widgets.TbRedactorJs',
					[
						'model'=>$model,
						'attribute'=>'description',
						'name' => 'description',
						// 'value' => '<b>Here is the text which will be put into editor view upon opening.</b>',
						'editorOptions'=>array(
				    		'minHeight'=>250
				    	)

					]
				);
			?>
		</div>
	</div>
<?php
	$this->endWidget();
?>