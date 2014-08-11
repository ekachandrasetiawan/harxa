<?php
$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'List Slider','url'=>array('index')),
array('label'=>'Create Slider','url'=>array('create')),
array('label'=>'Update Slider','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Slider','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Slider','url'=>array('admin')),
);
?>

<h1>View Slider #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		// 'id',
		array(
			'name'=>'file',
			'type'=>'image',
			'value'=>Yii::app()->baseUrl.'/images/'.Slider::model()->imgDirName.'/'.$model->file_name,
		),
		'title',
		'caption',
		'tags',
		'file_name',
		array(
			'name'=>'active',
			'value'=>($model->active==1?'Yes':'No'),
		),
),
)); ?>
