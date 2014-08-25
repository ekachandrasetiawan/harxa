<?php
$this->breadcrumbs=array(
	'Shipping Addrs'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'List ShippingAddr','url'=>array('index')),
array('label'=>'Create ShippingAddr','url'=>array('create')),
array('label'=>'Update ShippingAddr','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete ShippingAddr','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ShippingAddr','url'=>array('admin')),
);
?>

<h1>View ShippingAddr #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'user_id',
		'title',
		'address',
		'city',
		'state',
		'country',
		'zip_code',
		'phone',
		'primary',
),
)); ?>
