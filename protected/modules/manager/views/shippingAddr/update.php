<?php
$this->breadcrumbs=array(
	'Shipping Addrs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ShippingAddr','url'=>array('index')),
	array('label'=>'Create ShippingAddr','url'=>array('create')),
	array('label'=>'View ShippingAddr','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ShippingAddr','url'=>array('admin')),
	);
	?>

	<h1>Update ShippingAddr <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>